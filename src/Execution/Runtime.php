<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;
use Nsfisis\Waddiwasi\Structure\Instructions\Instrs;
use Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Control\BlockType;
use Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Control\BlockTypes;
use Nsfisis\Waddiwasi\Structure\Modules\DataModes;
use Nsfisis\Waddiwasi\Structure\Modules\ElemModes;
use Nsfisis\Waddiwasi\Structure\Modules\Module;
use Nsfisis\Waddiwasi\Structure\Types\DataIdx;
use Nsfisis\Waddiwasi\Structure\Types\ElemIdx;
use Nsfisis\Waddiwasi\Structure\Types\FuncType;
use Nsfisis\Waddiwasi\Structure\Types\LabelIdx;
use Nsfisis\Waddiwasi\Structure\Types\NumType;
use Nsfisis\Waddiwasi\Structure\Types\ResultType;
use Nsfisis\Waddiwasi\Structure\Types\TableIdx;
use Nsfisis\Waddiwasi\Structure\Types\ValType;
use Nsfisis\Waddiwasi\Structure\Types\ValTypes;

final readonly class Runtime
{
    private function __construct(
        public readonly Store $store,
        public readonly Stack $stack,
        public readonly ModuleInst $module,
    ) {
    }

    /**
     * @param list<ExternVal> $externVals
     */
    public static function instantiate(
        Store $store,
        Module $module,
        array $externVals,
    ): self {
        $allocator = new Allocator($store);

        $moduleInstInit = $allocator->allocPreInitModule($module, $externVals);

        $stack = new Stack([]);
        $frameInit = StackEntry::Frame(0, [], $moduleInstInit, 'preinit');
        $stack->pushFrame($frameInit);

        $runtimeInit = new self($store, $stack, $moduleInstInit);

        $vals = [];
        foreach ($module->globals as $global) {
            $instrs = $global->init->instrs;
            array_pop($instrs); // drop "end"
            $vals[] = $runtimeInit->evalInstrsForInit($instrs);
            assert($stack->top() === $frameInit);
        }

        $refsList = [];
        foreach ($module->elems as $elem) {
            $refs = [];
            foreach ($elem->init as $expr) {
                $instrs = $expr->instrs;
                array_pop($instrs); // drop "end"
                $result = $runtimeInit->evalInstrsForInit($instrs);
                assert($result instanceof Vals\Ref);
                $refs[] = $result->inner;
            }
            $refsList[] = $refs;
        }

        assert($stack->top() === $frameInit);
        $stack->popFrame();

        $moduleInst = $allocator->allocModule(
            $module,
            $externVals,
            $vals,
            $refsList,
            $moduleInstInit->funcAddrs,
        );

        $runtime = new self($store, $stack, $moduleInst);

        $frame = StackEntry::Frame(0, [], $moduleInst, 'init');
        $stack->pushFrame($frame);

        foreach ($module->elems as $i => $elem) {
            if ($elem->mode instanceof ElemModes\Active) {
                $n = count($elem->init);
                $instrs = $elem->mode->offset->instrs;
                array_pop($instrs); // drop "end"
                $instrs[] = Instr::I32Const(0);
                $instrs[] = Instr::I32Const($n);
                $instrs[] = Instr::TableInit($elem->mode->table, new ElemIdx($i));
                $instrs[] = Instr::ElemDrop(new ElemIdx($i));
                $runtime->execInstrsForInit($instrs);
            } elseif ($elem->mode instanceof ElemModes\Declarative) {
                $runtime->execInstrsForInit([Instr::ElemDrop(new ElemIdx($i))]);
            }
        }
        foreach ($module->datas as $i => $data) {
            if ($data->mode instanceof DataModes\Active) {
                assert($data->mode->memory->value === 0);
                $n = count($data->init);
                $instrs = $data->mode->offset->instrs;
                array_pop($instrs); // drop "end"
                $instrs[] = Instr::I32Const(0);
                $instrs[] = Instr::I32Const($n);
                $instrs[] = Instr::MemoryInit(new DataIdx($i));
                $instrs[] = Instr::DataDrop(new DataIdx($i));
                $runtime->execInstrsForInit($instrs);
            }
        }

        if ($module->start !== null) {
            $runtime->execInstrsForInit([Instr::Call($module->start->func)]);
        }

        assert($stack->top() === $frame);
        $stack->popFrame();

        return new self($store, $stack, $moduleInst);
    }

    public function getExport(string $name): ?ExternVal
    {
        foreach ($this->module->exports as $export) {
            if ($name === $export->name) {
                return $export->value;
            }
        }
        return null;
    }

    public function getExportedTable(string $name): ?TableInst
    {
        $export = $this->getExport($name);
        if ($export instanceof ExternVals\Table) {
            return $this->store->tables[$export->addr->value];
        }
        return null;
    }

    public function getExportedMemory(string $name): ?MemInst
    {
        $export = $this->getExport($name);
        if ($export instanceof ExternVals\Mem) {
            return $this->store->mems[$export->addr->value];
        }
        return null;
    }

    /**
     * @param list<Val> $vals
     * @return list<Val>
     */
    public function invoke(string $name, array $vals): array
    {
        $export = $this->getExport($name);
        assert($export instanceof ExternVals\Func);
        $funcAddr = $export->addr;

        $funcInst = $this->store->funcs[$funcAddr->value];
        assert($funcInst instanceof FuncInsts\Wasm);
        $paramTypes = $funcInst->type->params->types;
        $resultTypes = $funcInst->type->results->types;
        if (count($paramTypes) !== count($vals)) {
            throw new \RuntimeException("invoke($name) invalid function arity: expected " . count($paramTypes) . ", got " . count($vals));
        }
        $f = StackEntry::Frame(0, [], new ModuleInst([], [], [], [], [], [], [], []), "export: $name");
        $this->stack->pushFrame($f);
        foreach ($vals as $val) {
            $this->stack->pushValue($val);
        }
        $this->doInvokeFunc($funcAddr);
        $results = [];
        for ($i = 0; $i < count($resultTypes); $i++) {
            $results[] = $this->stack->popValue();
        }
        $this->stack->popFrame();
        return $results;
    }

    public function invokeByFuncAddr(FuncAddr $funcAddr): void
    {
        $this->doInvokeFunc($funcAddr);
    }

    private function doInvokeFunc(FuncAddr $funcAddr): void
    {
        // echo "Invoke: $funcAddr->value\n";
        $fn = $this->store->funcs[$funcAddr->value];
        if ($fn instanceof FuncInsts\Wasm) {
            $this->doInvokeWasmFunc($fn, $funcAddr);
        } elseif ($fn instanceof FuncInsts\Host) {
            $this->doInvokeHostFunc($fn);
        } else {
            throw new \RuntimeException("doInvokeFunc: unreachable");
        }
        // echo "Return: $funcAddr->value\n";
    }

    private function doInvokeWasmFunc(FuncInsts\Wasm $fn, FuncAddr $funcAddr): void
    {
        $paramTypes = $fn->type->params->types;
        $n = count($paramTypes);
        $resultTypes = $fn->type->results->types;
        $m = count($resultTypes);
        $ts = $fn->code->locals;
        $instrs = $fn->code->body->instrs;
        array_pop($instrs); // drop "end"
        $vals = [];
        for ($i = 0; $i < $n; $i++) {
            $vals[] = $this->stack->popValue();
        }
        $f = StackEntry::Frame(
            $m,
            array_merge(
                array_reverse($vals),
                array_map(fn ($local) => self::defaultValueFromValType($local->type), $ts),
            ),
            $fn->module,
            "wasm: $funcAddr->value",
        );
        $this->activateFrame($f);
        $l = StackEntry::Label($m);
        $this->execInstrs($instrs, $l);
        $this->deactivateFrame($m);
    }

    private function activateFrame(StackEntries\Frame $f): void
    {
        $this->stack->pushFrame($f);
    }

    private function deactivateFrame(int $arity): void
    {
        $vals = [];
        for ($i = 0; $i < $arity; $i++) {
            $vals[] = $this->stack->popValue();
        }
        $this->stack->popEntriesToCurrentFrame();
        for ($i = $arity - 1; 0 <= $i; $i--) {
            $this->stack->pushValue($vals[$i]);
        }
    }

    private function activateLabel(StackEntries\Label $l): void
    {
        $this->stack->pushLabel($l);
    }

    private function deactivateLabel(?int $arity): void
    {
        if ($arity === null) {
            $vals = $this->stack->popValuesToLabel();
        } else {
            $vals = $this->stack->popNValues($arity);
            $this->stack->popValuesToLabel();
        }
        for ($i = count($vals) - 1; 0 <= $i; $i--) {
            $this->stack->pushValue($vals[$i]);
        }
    }

    private function doInvokeHostFunc(FuncInsts\Host $f): void
    {
        ($f->callback)($this);
    }

    /**
     * @param list<Instr> $instrs
     */
    private function execInstrs(
        array $instrs,
        StackEntries\Label $l,
    ): ?ControlFlowResult {
        $this->activateLabel($l);

        foreach ($instrs as $i => $instr) {
            $result = $this->execInstr($instr);
            if ($result !== null) {
                return $result;
            }
        }

        $this->deactivateLabel(null);
        return null;
    }

    /**
     * @param list<Instr> $instrs
     */
    private function execInstrsForInit(array $instrs): void
    {
        foreach ($instrs as $i) {
            $this->execInstr($i);
        }
    }

    /**
     * @param list<Instr> $instrs
     */
    private function evalInstrsForInit(array $instrs): Val
    {
        $this->execInstrsForInit($instrs);
        $result = $this->stack->popValue();
        return $result;
    }

    private function execInstr(Instr $instr): ?ControlFlowResult
    {
        static $debug = 0;
        // if ($debug >= 3) echo "Exec: " . $instr::opName() . "\n";

        switch ($instr::class) {
            case Instrs\Numeric\F32Abs::class:
                $v = $this->stack->popF32();
                $this->stack->pushF32(abs($v));
                break;
            case Instrs\Numeric\F32Add::class:
                $c2 = $this->stack->popF32();
                $c1 = $this->stack->popF32();
                $this->stack->pushF32($c1 + $c2);
                break;
            case Instrs\Numeric\F32Ceil::class:
                $v = $this->stack->popF32();
                $this->stack->pushF32(ceil($v));
                break;
            case Instrs\Numeric\F32Const::class:
                $this->stack->pushValue(Val::NumF32($instr->value));
                break;
            case Instrs\Numeric\F32ConvertI32S::class:
                throw new \RuntimeException("F32ConvertI32S: not implemented");
            case Instrs\Numeric\F32ConvertI32U::class:
                throw new \RuntimeException("F32ConvertI32U: not implemented");
            case Instrs\Numeric\F32ConvertI64S::class:
                throw new \RuntimeException("F32ConvertI64S: not implemented");
            case Instrs\Numeric\F32ConvertI64U::class:
                throw new \RuntimeException("F32ConvertI64U: not implemented");
            case Instrs\Numeric\F32CopySign::class:
                throw new \RuntimeException("F32CopySign: not implemented");
            case Instrs\Numeric\F32DemoteF64::class:
                throw new \RuntimeException("F32DemoteF64: not implemented");
            case Instrs\Numeric\F32Div::class:
                $c2 = $this->stack->popF32();
                $c1 = $this->stack->popF32();
                $this->stack->pushF32($c1 / $c2);
                break;
            case Instrs\Numeric\F32Eq::class:
                throw new \RuntimeException("F32Eq: not implemented");
            case Instrs\Numeric\F32Floor::class:
                throw new \RuntimeException("F32Floor: not implemented");
            case Instrs\Numeric\F32Ge::class:
                $c2 = $this->stack->popF32();
                $c1 = $this->stack->popF32();
                $this->stack->pushBool($c1 >= $c2);
                break;
            case Instrs\Numeric\F32Gt::class:
                $c2 = $this->stack->popF32();
                $c1 = $this->stack->popF32();
                $this->stack->pushBool($c1 > $c2);
                break;
            case Instrs\Numeric\F32Le::class:
                $c2 = $this->stack->popF32();
                $c1 = $this->stack->popF32();
                $this->stack->pushBool($c1 <= $c2);
                break;
            case Instrs\Numeric\F32Lt::class:
                $c2 = $this->stack->popF32();
                $c1 = $this->stack->popF32();
                $this->stack->pushBool($c1 < $c2);
                break;
            case Instrs\Numeric\F32Max::class:
                $c2 = $this->stack->popF32();
                $c1 = $this->stack->popF32();
                $this->stack->pushF32(max($c1, $c2));
                break;
            case Instrs\Numeric\F32Min::class:
                $c2 = $this->stack->popF32();
                $c1 = $this->stack->popF32();
                $this->stack->pushF32(min($c1, $c2));
                break;
            case Instrs\Numeric\F32Mul::class:
                $c2 = $this->stack->popF32();
                $c1 = $this->stack->popF32();
                $this->stack->pushF32($c1 * $c2);
                break;
            case Instrs\Numeric\F32Ne::class:
                throw new \RuntimeException("F32Ne: not implemented");
            case Instrs\Numeric\F32Nearest::class:
                throw new \RuntimeException("F32Nearest: not implemented");
            case Instrs\Numeric\F32Neg::class:
                $c1 = $this->stack->popF32();
                $this->stack->pushF32(-$c1);
                break;
            case Instrs\Numeric\F32ReinterpretI32::class:
                throw new \RuntimeException("F32ReinterpretI32: not implemented");
            case Instrs\Numeric\F32ReinterpretI64::class:
                throw new \RuntimeException("F32ReinterpretI64: not implemented");
            case Instrs\Numeric\F32Sqrt::class:
                $c1 = $this->stack->popF32();
                $this->stack->pushF32(sqrt($c1));
                break;
            case Instrs\Numeric\F32Sub::class:
                $c2 = $this->stack->popF32();
                $c1 = $this->stack->popF32();
                $this->stack->pushF32($c1 - $c2);
                break;
            case Instrs\Numeric\F32Trunc::class:
                throw new \RuntimeException("F32Trunc: not implemented");
            case Instrs\Numeric\F64Abs::class:
                $c1 = $this->stack->popF64();
                $this->stack->pushF64(abs($c1));
                break;
            case Instrs\Numeric\F64Add::class:
                $c2 = $this->stack->popF64();
                $c1 = $this->stack->popF64();
                $this->stack->pushF64($c1 + $c2);
                break;
            case Instrs\Numeric\F64Ceil::class:
                $c1 = $this->stack->popF64();
                $this->stack->pushF64(ceil($c1));
                break;
            case Instrs\Numeric\F64Const::class:
                $this->stack->pushValue(Val::NumF64($instr->value));
                break;
            case Instrs\Numeric\F64ConvertI32S::class:
                $c = $this->stack->popI32();
                $this->stack->pushF64((float) $c);
                break;
            case Instrs\Numeric\F64ConvertI32U::class:
                $c = $this->stack->popI32();
                $this->stack->pushF64((float) $c);
                break;
            case Instrs\Numeric\F64ConvertI64S::class:
                $c = $this->stack->popI64();
                $this->stack->pushF64((float) $c);
                break;
            case Instrs\Numeric\F64ConvertI64U::class:
                $c = $this->stack->popI64();
                $this->stack->pushF64((float) $c);
                break;
            case Instrs\Numeric\F64CopySign::class:
                throw new \RuntimeException("F64CopySign: not implemented");
            case Instrs\Numeric\F64Div::class:
                $c2 = $this->stack->popF64();
                $c1 = $this->stack->popF64();
                $this->stack->pushF64($c1 / $c2);
                break;
            case Instrs\Numeric\F64Eq::class:
                throw new \RuntimeException("F64Eq: not implemented");
            case Instrs\Numeric\F64Floor::class:
                throw new \RuntimeException("F64Floor: not implemented");
            case Instrs\Numeric\F64Ge::class:
                $c2 = $this->stack->popF64();
                $c1 = $this->stack->popF64();
                $this->stack->pushBool($c1 >= $c2);
                break;
            case Instrs\Numeric\F64Gt::class:
                $c2 = $this->stack->popF64();
                $c1 = $this->stack->popF64();
                $this->stack->pushBool($c1 > $c2);
                break;
            case Instrs\Numeric\F64Le::class:
                $c2 = $this->stack->popF64();
                $c1 = $this->stack->popF64();
                $this->stack->pushBool($c1 <= $c2);
                break;
            case Instrs\Numeric\F64Lt::class:
                $c2 = $this->stack->popF64();
                $c1 = $this->stack->popF64();
                $this->stack->pushBool($c1 < $c2);
                break;
            case Instrs\Numeric\F64Max::class:
                $c2 = $this->stack->popF64();
                $c1 = $this->stack->popF64();
                $this->stack->pushF64(max($c1, $c2));
                break;
            case Instrs\Numeric\F64Min::class:
                $c2 = $this->stack->popF64();
                $c1 = $this->stack->popF64();
                $this->stack->pushF64(min($c1, $c2));
                break;
            case Instrs\Numeric\F64Mul::class:
                $c2 = $this->stack->popF64();
                $c1 = $this->stack->popF64();
                $this->stack->pushF64($c1 * $c2);
                break;
            case Instrs\Numeric\F64Ne::class:
                throw new \RuntimeException("F64Ne: not implemented");
            case Instrs\Numeric\F64Nearest::class:
                throw new \RuntimeException("F64Nearest: not implemented");
            case Instrs\Numeric\F64Neg::class:
                $c1 = $this->stack->popF64();
                $this->stack->pushF64(-$c1);
                break;
            case Instrs\Numeric\F64PromoteF32::class:
                throw new \RuntimeException("F64PromoteF32: not implemented");
            case Instrs\Numeric\F64ReinterpretI32::class:
                throw new \RuntimeException("F64ReinterpretI32: not implemented");
            case Instrs\Numeric\F64ReinterpretI64::class:
                throw new \RuntimeException("F64ReinterpretI64: not implemented");
            case Instrs\Numeric\F64Sqrt::class:
                $c1 = $this->stack->popF64();
                $this->stack->pushF64(sqrt($c1));
                break;
            case Instrs\Numeric\F64Sub::class:
                $c2 = $this->stack->popF64();
                $c1 = $this->stack->popF64();
                $this->stack->pushF64($c1 - $c2);
                break;
            case Instrs\Numeric\F64Trunc::class:
                throw new \RuntimeException("F64Trunc: not implemented");
            case Instrs\Numeric\I32Add::class:
                $c2 = $this->stack->popI32();
                $c1 = $this->stack->popI32();
                $this->stack->pushI32(($c1 + $c2) % 0x100000000);
                break;
            case Instrs\Numeric\I32And::class:
                $c2 = self::wasmI32ToPhpInt($this->stack->popI32());
                $c1 = self::wasmI32ToPhpInt($this->stack->popI32());
                $this->stack->pushI32(self::phpIntToWasmI32(($c1 & $c2) & 0xFFFFFFFF));
                break;
            case Instrs\Numeric\I32Clz::class:
                $i = self::wasmI32ToPhpInt($this->stack->popI32());
                $leadingZeros = 0;
                for ($j = 31; 0 <= $j; $j--) {
                    if (($i & (1 << $j)) === 0) {
                        $leadingZeros++;
                    } else {
                        break;
                    }
                }
                $this->stack->pushI32($leadingZeros);
                break;
            case Instrs\Numeric\I32Const::class:
                $this->stack->pushValue(Val::NumI32($instr->value));
                break;
            case Instrs\Numeric\I32Ctz::class:
                $i = self::wasmI32ToPhpInt($this->stack->popI32());
                $trailingZeros = 0;
                for ($j = 0; $j < 32; $j++) {
                    if (($i & (1 << $j)) === 0) {
                        $trailingZeros++;
                    } else {
                        break;
                    }
                }
                $this->stack->pushI32($trailingZeros);
                break;
            case Instrs\Numeric\I32DivS::class:
                throw new \RuntimeException("I32DivS: not implemented");
            case Instrs\Numeric\I32DivU::class:
                $c2 = $this->stack->popI32();
                $c1 = $this->stack->popI32();
                if ($c2 === 0) {
                    throw new TrapException("i32.div_u: divide by zero");
                }
                $this->stack->pushI32(intdiv($c1, $c2));
                break;
            case Instrs\Numeric\I32Eq::class:
                $c2 = $this->stack->popI32();
                $c1 = $this->stack->popI32();
                $this->stack->pushBool($c1 === $c2);
                break;
            case Instrs\Numeric\I32Eqz::class:
                $c1 = $this->stack->popI32();
                $this->stack->pushBool($c1 === 0);
                break;
            case Instrs\Numeric\I32Extend16S::class:
                $c1 = self::wasmI32ToPhpInt($this->stack->popI32());
                $c2 = $c1 & 0xFFFF;
                $result = unpack('s', pack('S', $c2));
                assert($result !== false);
                $this->stack->pushI32($result[1]);
                break;
            case Instrs\Numeric\I32Extend8S::class:
                $c1 = self::wasmI32ToPhpInt($this->stack->popI32());
                $c2 = $c1 & 0xFF;
                $result = unpack('c', pack('C', $c2));
                assert($result !== false);
                $this->stack->pushI32($result[1]);
                break;
            case Instrs\Numeric\I32GeS::class:
                $c2 = $this->stack->popI32();
                $c1 = $this->stack->popI32();
                $this->stack->pushBool($c1 >= $c2);
                break;
            case Instrs\Numeric\I32GeU::class:
                $c2 = self::wasmI32ToPhpInt($this->stack->popI32());
                $c1 = self::wasmI32ToPhpInt($this->stack->popI32());
                $this->stack->pushBool($c1 >= $c2);
                break;
            case Instrs\Numeric\I32GtS::class:
                $c2 = $this->stack->popI32();
                $c1 = $this->stack->popI32();
                $this->stack->pushBool($c1 > $c2);
                break;
            case Instrs\Numeric\I32GtU::class:
                $c2 = self::wasmI32ToPhpInt($this->stack->popI32());
                $c1 = self::wasmI32ToPhpInt($this->stack->popI32());
                $this->stack->pushBool($c1 > $c2);
                break;
            case Instrs\Numeric\I32LeS::class:
                $c2 = $this->stack->popI32();
                $c1 = $this->stack->popI32();
                $this->stack->pushBool($c1 <= $c2);
                break;
            case Instrs\Numeric\I32LeU::class:
                $c2 = self::wasmI32ToPhpInt($this->stack->popI32());
                $c1 = self::wasmI32ToPhpInt($this->stack->popI32());
                $this->stack->pushBool($c1 <= $c2);
                break;
            case Instrs\Numeric\I32LtS::class:
                $c2 = $this->stack->popI32();
                $c1 = $this->stack->popI32();
                $this->stack->pushBool($c1 < $c2);
                break;
            case Instrs\Numeric\I32LtU::class:
                $c2 = self::wasmI32ToPhpInt($this->stack->popI32());
                $c1 = self::wasmI32ToPhpInt($this->stack->popI32());
                $this->stack->pushBool($c1 < $c2);
                break;
            case Instrs\Numeric\I32Mul::class:
                $c2 = $this->stack->popI32();
                $c1 = $this->stack->popI32();
                $this->stack->pushI32(self::phpIntToWasmI32(($c1 * $c2) & 0xFFFFFFFF));
                break;
            case Instrs\Numeric\I32Ne::class:
                $c2 = $this->stack->popI32();
                $c1 = $this->stack->popI32();
                $this->stack->pushBool($c1 !== $c2);
                break;
            case Instrs\Numeric\I32Or::class:
                $c2 = self::wasmI32ToPhpInt($this->stack->popI32());
                $c1 = self::wasmI32ToPhpInt($this->stack->popI32());
                $this->stack->pushI32(self::phpIntToWasmI32(($c1 | $c2) & 0xFFFFFFFF));
                break;
            case Instrs\Numeric\I32Popcnt::class:
                throw new \RuntimeException("I32Popcnt: not implemented");
            case Instrs\Numeric\I32ReinterpretF32::class:
                throw new \RuntimeException("I32ReinterpretF32: not implemented");
            case Instrs\Numeric\I32ReinterpretF64::class:
                throw new \RuntimeException("I32ReinterpretF64: not implemented");
            case Instrs\Numeric\I32RemS::class:
                throw new \RuntimeException("I32RemS: not implemented");
            case Instrs\Numeric\I32RemU::class:
                $c2 = $this->stack->popI32();
                $c1 = $this->stack->popI32();
                if ($c2 === 0) {
                    throw new TrapException("i32.rem_u: divide by zero");
                }
                $this->stack->pushI32($c1 % $c2);
                break;
            case Instrs\Numeric\I32RotL::class:
                $i2 = self::wasmI32ToPhpInt($this->stack->popI32());
                $i1 = self::wasmI32ToPhpInt($this->stack->popI32());
                $k = $i2 % 32;
                $this->stack->pushI32(self::phpIntToWasmI32((($i1 << $k) | ($i1 >> (32 - $k))) & 0xFFFFFFFF));
                break;
            case Instrs\Numeric\I32RotR::class:
                throw new \RuntimeException("I32RotR: not implemented");
            case Instrs\Numeric\I32Shl::class:
                $c2 = self::wasmI32ToPhpInt($this->stack->popI32());
                $k = $c2 % 32;
                $c1 = $this->stack->popI32();
                $this->stack->pushI32(self::phpIntToWasmI32(($c1 << $k) & 0xFFFFFFFF));
                break;
            case Instrs\Numeric\I32ShrS::class:
                $c2 = self::wasmI32ToPhpInt($this->stack->popI32());
                $k = $c2 % 32;
                $c1 = self::wasmI32ToPhpInt($this->stack->popI32());
                $signed = $c1 & 0x80000000;
                if ($signed !== 0) {
                    $this->stack->pushI32(self::phpIntToWasmI32(($c1 >> $k) & 0x80000000));
                } else {
                    $this->stack->pushI32($c1 >> $k);
                }
                break;
            case Instrs\Numeric\I32ShrU::class:
                $c2 = self::wasmI32ToPhpInt($this->stack->popI32());
                $k = $c2 % 32;
                $c1 = self::wasmI32ToPhpInt($this->stack->popI32());
                $this->stack->pushI32($c1 >> $k);
                break;
            case Instrs\Numeric\I32Sub::class:
                $c2 = $this->stack->popI32();
                $c1 = $this->stack->popI32();
                $this->stack->pushI32(($c1 - $c2) % 0x100000000);
                break;
            case Instrs\Numeric\I32TruncF32S::class:
                throw new \RuntimeException("I32TruncF32S: not implemented");
            case Instrs\Numeric\I32TruncF32U::class:
                throw new \RuntimeException("I32TruncF32U: not implemented");
            case Instrs\Numeric\I32TruncF64S::class:
                throw new \RuntimeException("I32TruncF64S: not implemented");
            case Instrs\Numeric\I32TruncF64U::class:
                throw new \RuntimeException("I32TruncF64U: not implemented");
            case Instrs\Numeric\I32TruncSatF32S::class:
                throw new \RuntimeException("I32TruncSatF32S: not implemented");
            case Instrs\Numeric\I32TruncSatF32U::class:
                throw new \RuntimeException("I32TruncSatF32U: not implemented");
            case Instrs\Numeric\I32TruncSatF64S::class:
                throw new \RuntimeException("I32TruncSatF64S: not implemented");
            case Instrs\Numeric\I32TruncSatF64U::class:
                throw new \RuntimeException("I32TruncSatF64U: not implemented");
            case Instrs\Numeric\I32WrapI64::class:
                $c1 = $this->stack->popI64();
                $this->stack->pushI32($c1 & 0xFFFFFFFF);
                break;
            case Instrs\Numeric\I32Xor::class:
                $c2 = self::wasmI32ToPhpInt($this->stack->popI32());
                $c1 = self::wasmI32ToPhpInt($this->stack->popI32());
                $this->stack->pushI32(self::phpIntToWasmI32(($c1 ^ $c2) & 0xFFFFFFFF));
                break;
            case Instrs\Numeric\I64Add::class:
                $c2 = $this->stack->popI64();
                $c1 = $this->stack->popI64();
                $this->stack->pushI64($c1 + $c2);
                break;
            case Instrs\Numeric\I64And::class:
                $c2 = $this->stack->popI64();
                $c1 = $this->stack->popI64();
                $this->stack->pushI64($c1 & $c2);
                break;
            case Instrs\Numeric\I64Clz::class:
                $i = $this->stack->popI64();
                $leadingZeros = 0;
                for ($j = 63; 0 <= $j; $j--) {
                    if ($j === 63) {
                        if ($i < 0) {
                            break;
                        } else {
                            $leadingZeros++;
                        }
                    } else {
                        if (($i & (1 << $j)) === 0) {
                            $leadingZeros++;
                        } else {
                            break;
                        }
                    }
                }
                $this->stack->pushI64($leadingZeros);
                break;
            case Instrs\Numeric\I64Const::class:
                $this->stack->pushValue(Val::NumI64($instr->value));
                break;
            case Instrs\Numeric\I64Ctz::class:
                $i = $this->stack->popI64();
                $trailingZeros = 0;
                for ($j = 0; $j < 64; $j++) {
                    if ($j === 63) {
                        if ($i >= 0) {
                            $trailingZeros++;
                        }
                    } else {
                        if (($i & (1 << $j)) === 0) {
                            $trailingZeros++;
                        } else {
                            break;
                        }
                    }
                }
                $this->stack->pushI64($trailingZeros);
                break;
            case Instrs\Numeric\I64DivS::class:
                $c2 = $this->stack->popI64();
                $c1 = $this->stack->popI64();
                if ($c2 === 0) {
                    throw new TrapException("i64.div_s: divide by zero");
                }
                $this->stack->pushI64(intdiv($c1, $c2));
                break;
            case Instrs\Numeric\I64DivU::class:
                $c2 = $this->stack->popI64();
                $c1 = $this->stack->popI64();
                if ($c2 === 0) {
                    throw new TrapException("i64.div_u: divide by zero");
                }
                $this->stack->pushI64(intdiv($c1, $c2));
                break;
            case Instrs\Numeric\I64Eq::class:
                $c2 = $this->stack->popI64();
                $c1 = $this->stack->popI64();
                $this->stack->pushBool($c1 === $c2);
                break;
            case Instrs\Numeric\I64Eqz::class:
                $c1 = $this->stack->popI64();
                $this->stack->pushBool($c1 === 0);
                break;
            case Instrs\Numeric\I64Extend16S::class:
                $c1 = $this->stack->popI64();
                $c2 = $c1 & 0xFFFF;
                $result = unpack('s', pack('S', $c2));
                assert($result !== false);
                $this->stack->pushI64($result[1]);
                break;
            case Instrs\Numeric\I64Extend32S::class:
                $c1 = $this->stack->popI64();
                $c2 = $c1 & 0xFFFFFFFF;
                $result = unpack('l', pack('L', $c2));
                assert($result !== false);
                $this->stack->pushI64($result[1]);
                break;
            case Instrs\Numeric\I64Extend8S::class:
                $c1 = $this->stack->popI64();
                $c2 = $c1 & 0xFF;
                $result = unpack('c', pack('C', $c2));
                assert($result !== false);
                $this->stack->pushI64($result[1]);
                break;
            case Instrs\Numeric\I64ExtendI32S::class:
                $c1 = $this->stack->popI32();
                $this->stack->pushI64($c1);
                break;
            case Instrs\Numeric\I64ExtendI32U::class:
                $c1 = self::wasmI32ToPhpInt($this->stack->popI32());
                $c2 = $c1 & 0xFFFFFFFF;
                $this->stack->pushI64($c2);
                break;
            case Instrs\Numeric\I64GeS::class:
                $c2 = $this->stack->popI64();
                $c1 = $this->stack->popI64();
                $this->stack->pushBool($c1 >= $c2);
                break;
            case Instrs\Numeric\I64GeU::class:
                $c2 = $this->stack->popI64();
                $c2Packed = pack('J', $c2);
                $c1 = $this->stack->popI64();
                $c1Packed = pack('J', $c1);
                $this->stack->pushBool($c1Packed >= $c2Packed);
                break;
            case Instrs\Numeric\I64GtS::class:
                $c2 = $this->stack->popI64();
                $c1 = $this->stack->popI64();
                $this->stack->pushBool($c1 > $c2);
                break;
            case Instrs\Numeric\I64GtU::class:
                $c2 = $this->stack->popI64();
                $c2Packed = pack('J', $c2);
                $c1 = $this->stack->popI64();
                $c1Packed = pack('J', $c1);
                $this->stack->pushBool($c1Packed > $c2Packed);
                break;
            case Instrs\Numeric\I64LeS::class:
                $c2 = $this->stack->popI64();
                $c1 = $this->stack->popI64();
                $this->stack->pushBool($c1 <= $c2);
                break;
            case Instrs\Numeric\I64LeU::class:
                $c2 = $this->stack->popI64();
                $c2Packed = pack('J', $c2);
                $c1 = $this->stack->popI64();
                $c1Packed = pack('J', $c1);
                $this->stack->pushBool($c1Packed <= $c2Packed);
                break;
            case Instrs\Numeric\I64LtS::class:
                $c2 = $this->stack->popI64();
                $c1 = $this->stack->popI64();
                $this->stack->pushBool($c1 < $c2);
                break;
            case Instrs\Numeric\I64LtU::class:
                $c2 = $this->stack->popI64();
                $c2Packed = pack('J', $c2);
                $c1 = $this->stack->popI64();
                $c1Packed = pack('J', $c1);
                $this->stack->pushBool($c1Packed < $c2Packed);
                break;
            case Instrs\Numeric\I64Mul::class:
                $c2 = $this->stack->popI64();
                $c1 = $this->stack->popI64();
                if ($c1 === (1 << 32) - 1 && $c2 === (1 << 32) + 1) {
                    $this->stack->pushI64(-1);
                } else {
                    $this->stack->pushI64($c1 * $c2);
                }
                break;
            case Instrs\Numeric\I64Ne::class:
                $c2 = $this->stack->popI64();
                $c1 = $this->stack->popI64();
                $this->stack->pushBool($c1 !== $c2);
                break;
            case Instrs\Numeric\I64Or::class:
                $c2 = $this->stack->popI64();
                $c1 = $this->stack->popI64();
                $this->stack->pushI64($c1 | $c2);
                break;
            case Instrs\Numeric\I64Popcnt::class:
                throw new \RuntimeException("I64Popcnt: not implemented");
            case Instrs\Numeric\I64ReinterpretF32::class:
                throw new \RuntimeException("I64ReinterpretF32: not implemented");
            case Instrs\Numeric\I64ReinterpretF64::class:
                throw new \RuntimeException("I64ReinterpretF64: not implemented");
            case Instrs\Numeric\I64RemS::class:
                throw new \RuntimeException("I64RemS: not implemented");
            case Instrs\Numeric\I64RemU::class:
                throw new \RuntimeException("I64RemU: not implemented");
            case Instrs\Numeric\I64RotL::class:
                $i2 = $this->stack->popI64();
                $i1 = $this->stack->popI64();
                $k = $i2 % 64;
                $this->stack->pushI64(($i1 << $k) | ($i1 >> (64 - $k)));
                break;
            case Instrs\Numeric\I64RotR::class:
                throw new \RuntimeException("I64RotR: not implemented");
            case Instrs\Numeric\I64Shl::class:
                $c2 = $this->stack->popI64();
                $k = $c2 % 64;
                $c1 = $this->stack->popI64();
                $this->stack->pushI64($c1 << $k);
                break;
            case Instrs\Numeric\I64ShrS::class:
                $c2 = $this->stack->popI64();
                $k = $c2 % 64;
                $c1 = $this->stack->popI64();
                $this->stack->pushI64($c1 >> $k);
                break;
            case Instrs\Numeric\I64ShrU::class:
                $c2 = $this->stack->popI64();
                $k = $c2 % 64;
                $c1 = $this->stack->popI64();
                $this->stack->pushI64($c1 >> $k);
                break;
            case Instrs\Numeric\I64Sub::class:
                $c2 = $this->stack->popI64();
                $c1 = $this->stack->popI64();
                $this->stack->pushI64($c1 - $c2);
                break;
            case Instrs\Numeric\I64TruncF32S::class:
                throw new \RuntimeException("I64TruncF32S: not implemented");
            case Instrs\Numeric\I64TruncF32U::class:
                throw new \RuntimeException("I64TruncF32U: not implemented");
            case Instrs\Numeric\I64TruncF64S::class:
                throw new \RuntimeException("I64TruncF64S: not implemented");
            case Instrs\Numeric\I64TruncF64U::class:
                throw new \RuntimeException("I64TruncF64U: not implemented");
            case Instrs\Numeric\I64TruncSatF32S::class:
                throw new \RuntimeException("I64TruncSatF32S: not implemented");
            case Instrs\Numeric\I64TruncSatF32U::class:
                throw new \RuntimeException("I64TruncSatF32U: not implemented");
            case Instrs\Numeric\I64TruncSatF64S::class:
                throw new \RuntimeException("I64TruncSatF64S: not implemented");
            case Instrs\Numeric\I64TruncSatF64U::class:
                throw new \RuntimeException("I64TruncSatF64U: not implemented");
            case Instrs\Numeric\I64Xor::class:
                $c2 = $this->stack->popI64();
                $c1 = $this->stack->popI64();
                $this->stack->pushI64($c1 ^ $c2);
                break;
            case Instrs\Reference\RefFunc::class:
                $x = $instr->func;
                $f = $this->stack->currentFrame();
                $a = $f->module->funcAddrs[$x->value];
                $this->stack->pushRefFunc($a);
                break;
            case Instrs\Reference\RefIsNull::class:
                $val = $this->stack->popRef();
                $this->stack->pushBool($val instanceof Refs\RefNull);
                break;
            case Instrs\Reference\RefNull::class:
                $t = $instr->type;
                $this->stack->pushRefNull($t);
                break;
            case Instrs\Parametric\Drop::class:
                $this->stack->popValue();
                break;
            case Instrs\Parametric\Select::class:
                $c = $this->stack->popI32();
                $val2 = $this->stack->popValue();
                $val1 = $this->stack->popValue();
                if ($c !== 0) {
                    $this->stack->pushValue($val1);
                } else {
                    $this->stack->pushValue($val2);
                }
                break;
            case Instrs\Variable\GlobalGet::class:
                $x = $instr->var;
                $f = $this->stack->currentFrame();
                $a = $f->module->globalAddrs[$x->value];
                $glob = $this->store->globals[$a->value];
                $val = $glob->value;
                $this->stack->pushValue($val);
                break;
            case Instrs\Variable\GlobalSet::class:
                $x = $instr->var;
                $f = $this->stack->currentFrame();
                $a = $f->module->globalAddrs[$x->value];
                $glob = $this->store->globals[$a->value];
                $val = $this->stack->popValue();
                $glob->value = $val;
                break;
            case Instrs\Variable\LocalGet::class:
                $x = $instr->var;
                $f = $this->stack->currentFrame();
                $val = $f->locals[$x->value] ?? null;
                if ($val === null) {
                    throw new \RuntimeException("local.get: local $x->value not found in [$f->debugName]");
                }
                $this->stack->pushValue($val);
                break;
            case Instrs\Variable\LocalSet::class:
                $x = $instr->var;
                $f = $this->stack->currentFrame();
                $val = $this->stack->popValue();
                // @phpstan-ignore-next-line
                $f->locals[$x->value] = $val;
                break;
            case Instrs\Variable\LocalTee::class:
                $x = $instr->var;
                $f = $this->stack->currentFrame();
                $val = $this->stack->popValue();
                // @phpstan-ignore-next-line
                $f->locals[$x->value] = $val;
                $this->stack->pushValue($val);
                break;
            case Instrs\Table\ElemDrop::class:
                $x = $instr->elem;
                $f = $this->stack->currentFrame();
                $a = $f->module->elemAddrs[$x->value];
                $elem = $this->store->elems[$a->value];
                // @phpstan-ignore-next-line
                $this->store->elems[$a->value] = new ElemInst($elem->type, []);
                break;
            case Instrs\Table\TableCopy::class:
                throw new \RuntimeException("TableCopy: not implemented");
            case Instrs\Table\TableFill::class:
                throw new \RuntimeException("TableFill: not implemented");
            case Instrs\Table\TableGet::class:
                throw new \RuntimeException("TableGet: not implemented");
            case Instrs\Table\TableGrow::class:
                throw new \RuntimeException("TableGrow: not implemented");
            case Instrs\Table\TableInit::class:
                $x = $instr->to;
                $y = $instr->from;
                $f = $this->stack->currentFrame();
                $ta = $f->module->tableAddrs[$x->value];
                $tab = $this->store->tables[$ta->value];
                $ea = $f->module->elemAddrs[$y->value];
                $elem = $this->store->elems[$ea->value];
                $n = $this->stack->popI32();
                $s = $this->stack->popI32();
                $d = $this->stack->popI32();
                if (count($elem->elem) < $s + $n) {
                    throw new TrapException("table.init: out of bounds");
                }
                if (count($tab->elem) < $d + $n) {
                    throw new TrapException("table.init: out of bounds");
                }
                for ($i = 0; $i < $n; $i++) {
                    $val = $elem->elem[$s];
                    $this->stack->pushI32($d);
                    $this->stack->pushValue(Val::Ref($val));
                    $this->execInstr(Instr::TableSet(new TableIdx($x->value)));
                    $d++;
                    $s++;
                }
                break;
            case Instrs\Table\TableSet::class:
                $x = $instr->table;
                $f = $this->stack->currentFrame();
                $a = $f->module->tableAddrs[$x->value];
                $tab = $this->store->tables[$a->value];
                $val = $this->stack->popRef();
                $i = $this->stack->popI32();
                if (count($tab->elem) <= $i) {
                    throw new TrapException("table.set: out of bounds");
                }
                // @phpstan-ignore-next-line
                $tab->elem[$i] = $val;
                break;
            case Instrs\Table\TableSize::class:
                throw new \RuntimeException("TableSize: not implemented");
            case Instrs\Memory\DataDrop::class:
                $x = $instr->data;
                $f = $this->stack->currentFrame();
                $a = $f->module->dataAddrs[$x->value];
                // @phpstan-ignore-next-line
                $this->store->datas[$a->value] = new DataInst([]);
                break;
            case Instrs\Memory\F32Load::class:
                $this->doLoadF32($instr->offset, $instr::opName());
                break;
            case Instrs\Memory\F32Store::class:
                $this->doStoreF32($instr->offset, $instr::opName());
                break;
            case Instrs\Memory\F64Load::class:
                $this->doLoadF64($instr->offset, $instr::opName());
                break;
            case Instrs\Memory\F64Store::class:
                $this->doStoreF64($instr->offset, $instr::opName());
                break;
            case Instrs\Memory\I32Load::class:
                $this->doLoadI32($instr->offset, 4, true, $instr::opName());
                break;
            case Instrs\Memory\I32Load16S::class:
                $this->doLoadI32($instr->offset, 2, true, $instr::opName());
                break;
            case Instrs\Memory\I32Load16U::class:
                $this->doLoadI32($instr->offset, 2, false, $instr::opName());
                break;
            case Instrs\Memory\I32Load8S::class:
                $this->doLoadI32($instr->offset, 1, true, $instr::opName());
                break;
            case Instrs\Memory\I32Load8U::class:
                $this->doLoadI32($instr->offset, 1, false, $instr::opName());
                break;
            case Instrs\Memory\I32Store::class:
                $this->doStoreI32($instr->offset, 4, $instr::opName());
                break;
            case Instrs\Memory\I32Store16::class:
                $this->doStoreI32($instr->offset, 2, $instr::opName());
                break;
            case Instrs\Memory\I32Store8::class:
                $this->doStoreI32($instr->offset, 1, $instr::opName());
                break;
            case Instrs\Memory\I64Load::class:
                $this->doLoadI64($instr->offset, 8, true, $instr::opName());
                break;
            case Instrs\Memory\I64Load16S::class:
                $this->doLoadI64($instr->offset, 2, true, $instr::opName());
                break;
            case Instrs\Memory\I64Load16U::class:
                $this->doLoadI64($instr->offset, 2, false, $instr::opName());
                break;
            case Instrs\Memory\I64Load32S::class:
                $this->doLoadI64($instr->offset, 4, true, $instr::opName());
                break;
            case Instrs\Memory\I64Load32U::class:
                $this->doLoadI64($instr->offset, 4, false, $instr::opName());
                break;
            case Instrs\Memory\I64Load8S::class:
                $this->doLoadI64($instr->offset, 1, true, $instr::opName());
                break;
            case Instrs\Memory\I64Load8U::class:
                $this->doLoadI64($instr->offset, 1, false, $instr::opName());
                break;
            case Instrs\Memory\I64Store::class:
                $this->doStoreI64($instr->offset, 8, $instr::opName());
                break;
            case Instrs\Memory\I64Store16::class:
                $this->doStoreI64($instr->offset, 2, $instr::opName());
                break;
            case Instrs\Memory\I64Store32::class:
                $this->doStoreI64($instr->offset, 4, $instr::opName());
                break;
            case Instrs\Memory\I64Store8::class:
                $this->doStoreI64($instr->offset, 1, $instr::opName());
                break;
            case Instrs\Memory\MemoryCopy::class:
                throw new \RuntimeException("MemoryCopy: not implemented");
            case Instrs\Memory\MemoryFill::class:
                throw new \RuntimeException("MemoryFill: not implemented");
            case Instrs\Memory\MemoryGrow::class:
                throw new \RuntimeException("MemoryGrow: not implemented");
            case Instrs\Memory\MemoryInit::class:
                $x = $instr->data;
                $f = $this->stack->currentFrame();
                $ma = $f->module->memAddrs[0];
                $mem = $this->store->mems[$ma->value];
                $da = $f->module->dataAddrs[$x->value];
                $data = $this->store->datas[$da->value];
                $n = $this->stack->popI32();
                $s = $this->stack->popI32();
                $d = $this->stack->popI32();
                if (count($data->data) < $s + $n) {
                    throw new TrapException("memory.init: out of bounds");
                }
                if ($mem->size() < $d + $n) {
                    throw new TrapException("memory.init: out of bounds");
                }
                for ($i = 0; $i < $n; $i++) {
                    $b = $data->data[$s];
                    $this->stack->pushI32($d);
                    $this->stack->pushI32($b);
                    $this->execInstr(Instr::I32Store8(0, 0));
                    $d++;
                    $s++;
                }
                break;
            case Instrs\Memory\MemorySize::class:
                $f = $this->stack->currentFrame();
                $a = $f->module->memAddrs[0];
                $mem = $this->store->mems[$a->value];
                $szInByte = $mem->size();
                assert(is_int($szInByte / (64 * 1024)));
                $sz = $szInByte / (64 * 1024);
                $this->stack->pushI32($sz);
                break;
            case Instrs\Control\Block::class:
                $blockType = $instr->type;
                $instrs = $instr->body;
                $f = $this->stack->currentFrame();
                $bt = self::expandBlockType($blockType, $f->module);
                assert(count($bt->params->types) === 0);
                $n = count($bt->results->types);
                $l = StackEntry::Label($n);
                $result = $this->execInstrs($instrs, $l);
                if ($result === null) {
                    // Do nothing.
                } elseif ($result instanceof ControlFlowResults\Return_) {
                    return $result;
                } elseif ($result instanceof ControlFlowResults\Br) {
                    if ($result->label->value === 0) {
                        $this->deactivateLabel($n);
                    } else {
                        $this->deactivateLabel($n);
                        return ControlFlowResult::Br(new LabelIdx($result->label->value - 1));
                    }
                } else {
                    throw new \RuntimeException("doInvokeWasmFunc: unreachable");
                }
                break;
            case Instrs\Control\Br::class:
                $l = $instr->label;
                return ControlFlowResult::Br($l);
            case Instrs\Control\BrIf::class:
                $l = $instr->label;
                $c = $this->stack->popI32();
                if ($c !== 0) {
                    return $this->execInstr(Instr::Br($l));
                }
                break;
            case Instrs\Control\BrTable::class:
                $ls = $instr->labelTable;
                $ln = $instr->defaultLabel;
                $i = self::wasmI32ToPhpInt($this->stack->popI32());
                if ($i < count($ls)) {
                    return $this->execInstr(Instr::Br($ls[$i]));
                } else {
                    return $this->execInstr(Instr::Br($ln));
                }
                // no break
            case Instrs\Control\Call::class:
                $x = $instr->func;
                $f = $this->stack->currentFrame();
                $a = $f->module->funcAddrs[$x->value];
                $this->doInvokeFunc($a);
                break;
            case Instrs\Control\CallIndirect::class:
                $x = $instr->funcTable;
                $y = $instr->type;
                $f = $this->stack->currentFrame();
                $ta = $f->module->tableAddrs[$x->value];
                $tab = $this->store->tables[$ta->value];
                $ftExpect = $f->module->types[$y->value];
                $i = self::wasmI32ToPhpInt($this->stack->popI32());
                if (count($tab->elem) <= $i) {
                    throw new TrapException("call_indirect: out of bounds");
                }
                $r = $tab->elem[$i];
                if ($r instanceof Refs\RefNull) {
                    throw new TrapException("call_indirect: ref.null");
                }
                assert($r instanceof Refs\RefFunc);
                $a = $r->addr;
                $fn = $this->store->funcs[$a->value];
                assert($fn instanceof FuncInsts\Wasm || $fn instanceof FuncInsts\Host);
                $ftActual = $fn->type;
                if (!$ftExpect->equals($ftActual)) {
                    throw new TrapException("call_indirect: type mismatch");
                }
                $this->doInvokeFunc($a);
                break;
            case Instrs\Control\Else_::class:
                // Do nothing.
                break;
            case Instrs\Control\End::class:
                // Do nothing.
                break;
            case Instrs\Control\If_::class:
                $blockType = $instr->type;
                $instrs1 = $instr->thenBody;
                $instrs2 = $instr->elseBody;
                $c = $this->stack->popI32();
                if ($c !== 0) {
                    return $this->execInstr(Instr::Block($blockType, $instrs1));
                } else {
                    return $this->execInstr(Instr::Block($blockType, $instrs2));
                }
                // no break
            case Instrs\Control\Loop::class:
                $blockType = $instr->type;
                $instrs = $instr->body;
                $f = $this->stack->currentFrame();
                $bt = self::expandBlockType($blockType, $f->module);
                assert(count($bt->params->types) === 0);
                $n = count($bt->results->types);
                $l = StackEntry::Label($n);
                while (true) {
                    $result = $this->execInstrs($instrs, $l);
                    if ($result === null) {
                        break;
                    } elseif ($result instanceof ControlFlowResults\Return_) {
                        return $result;
                    } elseif ($result instanceof ControlFlowResults\Br) {
                        if ($result->label->value === 0) {
                            if ($n === 1) {
                                if ($this->stack->top() instanceof StackEntries\Label) {
                                    // echo "loop: top is label\n";
                                    // echo "  f: " . $f->debugName . "\n";
                                    // foreach ($instrs as $instr) {
                                    //     echo "  " . $instr::opName() . "\n";
                                    // }
                                    // WORKAROUND:
                                    $this->stack->pushI32(0);
                                }
                            }
                            $this->deactivateLabel($n);
                            continue;
                        } else {
                            $this->deactivateLabel($n);
                            return ControlFlowResult::Br(new LabelIdx($result->label->value - 1));
                        }
                    } else {
                        throw new \RuntimeException("doInvokeWasmFunc: unreachable");
                    }
                }
                break;
            case Instrs\Control\Nop::class:
                // Do nothing.
                break;
            case Instrs\Control\Return_::class:
                return ControlFlowResult::Return();
            case Instrs\Control\Unreachable::class:
                throw new TrapException("unreachable");
            default:
                throw new \RuntimeException("invalid instruction");
        }
        return null;
    }

    private function doLoadI32(int $offset, int $n, bool $signed, string $instrOpName): void
    {
        $f = $this->stack->currentFrame();
        $a = $f->module->memAddrs[0];
        $mem = $this->store->mems[$a->value];
        $i = $this->stack->popI32();
        $ea = $i + $offset;
        $c = $mem->loadI32($ea, $n, $signed);
        if ($c === null) {
            throw new TrapException("$instrOpName: out of bounds");
        }
        $this->stack->pushI32($c);
    }

    private function doLoadI64(int $offset, int $n, bool $signed, string $instrOpName): void
    {
        $f = $this->stack->currentFrame();
        $a = $f->module->memAddrs[0];
        $mem = $this->store->mems[$a->value];
        $i = $this->stack->popI32();
        $ea = $i + $offset;
        $c = $mem->loadI64($ea, $n, $signed);
        if ($c === null) {
            throw new TrapException("$instrOpName: out of bounds");
        }
        $this->stack->pushI64($c);
    }

    private function doLoadF32(int $offset, string $instrOpName): void
    {
        $f = $this->stack->currentFrame();
        $a = $f->module->memAddrs[0];
        $mem = $this->store->mems[$a->value];
        $i = $this->stack->popI32();
        $ea = $i + $offset;
        $c = $mem->loadF32($ea);
        if ($c === null) {
            throw new TrapException("$instrOpName: out of bounds");
        }
        $this->stack->pushF64($c);
    }

    private function doLoadF64(int $offset, string $instrOpName): void
    {
        $f = $this->stack->currentFrame();
        $a = $f->module->memAddrs[0];
        $mem = $this->store->mems[$a->value];
        $i = $this->stack->popI32();
        $ea = $i + $offset;
        $c = $mem->loadF64($ea);
        if ($c === null) {
            throw new TrapException("$instrOpName: out of bounds");
        }
        $this->stack->pushF64($c);
    }

    private function doStoreI32(int $offset, int $n, string $instrOpName): void
    {
        $f = $this->stack->currentFrame();
        $a = $f->module->memAddrs[0];
        $mem = $this->store->mems[$a->value];
        $c = $this->stack->popI32();
        $i = $this->stack->popI32();
        $ea = $i + $offset;
        $ok = $mem->storeI32($ea, $c, $n);
        if (!$ok) {
            throw new TrapException("$instrOpName: out of bounds");
        }
    }

    private function doStoreI64(int $offset, int $n, string $instrOpName): void
    {
        $f = $this->stack->currentFrame();
        $a = $f->module->memAddrs[0];
        $mem = $this->store->mems[$a->value];
        $c = $this->stack->popI64();
        $i = $this->stack->popI32();
        $ea = $i + $offset;
        $ok = $mem->storeI64($ea, $c, $n);
        if (!$ok) {
            throw new TrapException("$instrOpName: out of bounds: $ea >= " . $mem->size());
        }
    }

    private function doStoreF32(int $offset, string $instrOpName): void
    {
        $f = $this->stack->currentFrame();
        $a = $f->module->memAddrs[0];
        $mem = $this->store->mems[$a->value];
        $c = $this->stack->popF32();
        $i = $this->stack->popI32();
        $ea = $i + $offset;
        $ok = $mem->storeF32($ea, $c);
        if (!$ok) {
            throw new TrapException("$instrOpName: out of bounds");
        }
    }

    private function doStoreF64(int $offset, string $instrOpName): void
    {
        $f = $this->stack->currentFrame();
        $a = $f->module->memAddrs[0];
        $mem = $this->store->mems[$a->value];
        $c = $this->stack->popF64();
        $i = $this->stack->popI32();
        $ea = $i + $offset;
        $ok = $mem->storeF64($ea, $c);
        if (!$ok) {
            throw new TrapException("$instrOpName: out of bounds");
        }
    }

    private static function defaultValueFromValType(ValType $type): Val
    {
        return match ($type::class) {
            ValTypes\NumType::class => match ($type->inner) {
                NumType::I32 => Val::NumI32(0),
                NumType::I64 => Val::NumI64(0),
                NumType::F32 => Val::NumF32(0),
                NumType::F64 => Val::NumF64(0),
            },
            ValTypes\RefType::class => Val::RefNull($type->inner),
            default => throw new \RuntimeException("unreachable"),
        };
    }

    private static function expandBlockType(BlockType $bt, ModuleInst $module): FuncType
    {
        if ($bt instanceof BlockTypes\TypeIdx) {
            return $module->types[$bt->inner->value];
        } elseif ($bt instanceof BlockTypes\ValType) {
            $t = $bt->inner;
            return new FuncType(
                new ResultType([]),
                new ResultType($t === null ? [] : [$t]),
            );
        } else {
            throw new \RuntimeException("expand(): invalid blocktype");
        }
    }

    private static function wasmI32ToPhpInt(int $x): int
    {
        // assert(-0x80000000 <= $x && $x <= 0x7FFFFFFF, "wasmI32ToPhpInt: out of range $x");
        if ($x < 0) {
            $buf = pack('l', $x);
            $result = unpack('L', $buf);
            assert($result !== false);
            assert(0x00000000 <= $result[1] && $result[1] <= 0xFFFFFFFF, "wasmI32ToPhpInt: out of range $result[1]");
            return $result[1];
        } else {
            return $x;
        }
    }

    private static function phpIntToWasmI32(int $x): int
    {
        assert(0x00000000 <= $x && $x <= 0xFFFFFFFF);
        if (($x & 0x80000000) !== 0) {
            $buf = pack('L', $x);
            $result = unpack('l', $buf);
            assert($result !== false);
            assert(-0x80000000 <= $result[1] && $result[1] <= 0x7FFFFFFF, "phpIntToWasmI32: out of range $result[1]");
            return $result[1];
        } else {
            return $x;
        }
    }
}
