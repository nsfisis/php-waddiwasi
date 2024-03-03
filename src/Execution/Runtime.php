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

        if ($instr instanceof Instrs\Numeric\F32Abs) {
            $v = $this->stack->popF32();
            $this->stack->pushF32(abs($v));
        } elseif ($instr instanceof Instrs\Numeric\F32Add) {
            $c2 = $this->stack->popF32();
            $c1 = $this->stack->popF32();
            $this->stack->pushF32($c1 + $c2);
        } elseif ($instr instanceof Instrs\Numeric\F32Ceil) {
            $v = $this->stack->popF32();
            $this->stack->pushF32(ceil($v));
        } elseif ($instr instanceof Instrs\Numeric\F32Const) {
            $this->stack->pushValue(Val::NumF32($instr->value));
        } elseif ($instr instanceof Instrs\Numeric\F32ConvertI32S) {
            throw new \RuntimeException("F32ConvertI32S: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F32ConvertI32U) {
            throw new \RuntimeException("F32ConvertI32U: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F32ConvertI64S) {
            throw new \RuntimeException("F32ConvertI64S: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F32ConvertI64U) {
            throw new \RuntimeException("F32ConvertI64U: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F32CopySign) {
            throw new \RuntimeException("F32CopySign: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F32DemoteF64) {
            throw new \RuntimeException("F32DemoteF64: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F32Div) {
            $c2 = $this->stack->popF32();
            $c1 = $this->stack->popF32();
            $this->stack->pushF32($c1 / $c2);
        } elseif ($instr instanceof Instrs\Numeric\F32Eq) {
            throw new \RuntimeException("F32Eq: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F32Floor) {
            throw new \RuntimeException("F32Floor: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F32Ge) {
            $c2 = $this->stack->popF32();
            $c1 = $this->stack->popF32();
            $this->stack->pushBool($c1 >= $c2);
        } elseif ($instr instanceof Instrs\Numeric\F32Gt) {
            $c2 = $this->stack->popF32();
            $c1 = $this->stack->popF32();
            $this->stack->pushBool($c1 > $c2);
        } elseif ($instr instanceof Instrs\Numeric\F32Le) {
            $c2 = $this->stack->popF32();
            $c1 = $this->stack->popF32();
            $this->stack->pushBool($c1 <= $c2);
        } elseif ($instr instanceof Instrs\Numeric\F32Lt) {
            $c2 = $this->stack->popF32();
            $c1 = $this->stack->popF32();
            $this->stack->pushBool($c1 < $c2);
        } elseif ($instr instanceof Instrs\Numeric\F32Max) {
            $c2 = $this->stack->popF32();
            $c1 = $this->stack->popF32();
            $this->stack->pushF32(max($c1, $c2));
        } elseif ($instr instanceof Instrs\Numeric\F32Min) {
            $c2 = $this->stack->popF32();
            $c1 = $this->stack->popF32();
            $this->stack->pushF32(min($c1, $c2));
        } elseif ($instr instanceof Instrs\Numeric\F32Mul) {
            $c2 = $this->stack->popF32();
            $c1 = $this->stack->popF32();
            $this->stack->pushF32($c1 * $c2);
        } elseif ($instr instanceof Instrs\Numeric\F32Ne) {
            throw new \RuntimeException("F32Ne: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F32Nearest) {
            throw new \RuntimeException("F32Nearest: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F32Neg) {
            $c1 = $this->stack->popF32();
            $this->stack->pushF32(-$c1);
        } elseif ($instr instanceof Instrs\Numeric\F32ReinterpretI32) {
            throw new \RuntimeException("F32ReinterpretI32: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F32ReinterpretI64) {
            throw new \RuntimeException("F32ReinterpretI64: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F32Sqrt) {
            $c1 = $this->stack->popF32();
            $this->stack->pushF32(sqrt($c1));
        } elseif ($instr instanceof Instrs\Numeric\F32Sub) {
            $c2 = $this->stack->popF32();
            $c1 = $this->stack->popF32();
            $this->stack->pushF32($c1 - $c2);
        } elseif ($instr instanceof Instrs\Numeric\F32Trunc) {
            throw new \RuntimeException("F32Trunc: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F64Abs) {
            $c1 = $this->stack->popF64();
            $this->stack->pushF64(abs($c1));
        } elseif ($instr instanceof Instrs\Numeric\F64Add) {
            $c2 = $this->stack->popF64();
            $c1 = $this->stack->popF64();
            $this->stack->pushF64($c1 + $c2);
        } elseif ($instr instanceof Instrs\Numeric\F64Ceil) {
            $c1 = $this->stack->popF64();
            $this->stack->pushF64(ceil($c1));
        } elseif ($instr instanceof Instrs\Numeric\F64Const) {
            $this->stack->pushValue(Val::NumF64($instr->value));
        } elseif ($instr instanceof Instrs\Numeric\F64ConvertI32S) {
            $c = $this->stack->popI32();
            $this->stack->pushF64((float) $c);
        } elseif ($instr instanceof Instrs\Numeric\F64ConvertI32U) {
            $c = $this->stack->popI32();
            $this->stack->pushF64((float) $c);
        } elseif ($instr instanceof Instrs\Numeric\F64ConvertI64S) {
            $c = $this->stack->popI64();
            $this->stack->pushF64((float) $c);
        } elseif ($instr instanceof Instrs\Numeric\F64ConvertI64U) {
            $c = $this->stack->popI64();
            $this->stack->pushF64((float) $c);
        } elseif ($instr instanceof Instrs\Numeric\F64CopySign) {
            throw new \RuntimeException("F64CopySign: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F64Div) {
            $c2 = $this->stack->popF64();
            $c1 = $this->stack->popF64();
            $this->stack->pushF64($c1 / $c2);
        } elseif ($instr instanceof Instrs\Numeric\F64Eq) {
            throw new \RuntimeException("F64Eq: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F64Floor) {
            throw new \RuntimeException("F64Floor: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F64Ge) {
            $c2 = $this->stack->popF64();
            $c1 = $this->stack->popF64();
            $this->stack->pushBool($c1 >= $c2);
        } elseif ($instr instanceof Instrs\Numeric\F64Gt) {
            $c2 = $this->stack->popF64();
            $c1 = $this->stack->popF64();
            $this->stack->pushBool($c1 > $c2);
        } elseif ($instr instanceof Instrs\Numeric\F64Le) {
            $c2 = $this->stack->popF64();
            $c1 = $this->stack->popF64();
            $this->stack->pushBool($c1 <= $c2);
        } elseif ($instr instanceof Instrs\Numeric\F64Lt) {
            $c2 = $this->stack->popF64();
            $c1 = $this->stack->popF64();
            $this->stack->pushBool($c1 < $c2);
        } elseif ($instr instanceof Instrs\Numeric\F64Max) {
            $c2 = $this->stack->popF64();
            $c1 = $this->stack->popF64();
            $this->stack->pushF64(max($c1, $c2));
        } elseif ($instr instanceof Instrs\Numeric\F64Min) {
            $c2 = $this->stack->popF64();
            $c1 = $this->stack->popF64();
            $this->stack->pushF64(min($c1, $c2));
        } elseif ($instr instanceof Instrs\Numeric\F64Mul) {
            $c2 = $this->stack->popF64();
            $c1 = $this->stack->popF64();
            $this->stack->pushF64($c1 * $c2);
        } elseif ($instr instanceof Instrs\Numeric\F64Ne) {
            throw new \RuntimeException("F64Ne: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F64Nearest) {
            throw new \RuntimeException("F64Nearest: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F64Neg) {
            $c1 = $this->stack->popF64();
            $this->stack->pushF64(-$c1);
        } elseif ($instr instanceof Instrs\Numeric\F64PromoteF32) {
            throw new \RuntimeException("F64PromoteF32: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F64ReinterpretI32) {
            throw new \RuntimeException("F64ReinterpretI32: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F64ReinterpretI64) {
            throw new \RuntimeException("F64ReinterpretI64: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F64Sqrt) {
            $c1 = $this->stack->popF64();
            $this->stack->pushF64(sqrt($c1));
        } elseif ($instr instanceof Instrs\Numeric\F64Sub) {
            $c2 = $this->stack->popF64();
            $c1 = $this->stack->popF64();
            $this->stack->pushF64($c1 - $c2);
        } elseif ($instr instanceof Instrs\Numeric\F64Trunc) {
            throw new \RuntimeException("F64Trunc: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I32Add) {
            $c2 = $this->stack->popI32();
            $c1 = $this->stack->popI32();
            $this->stack->pushI32(($c1 + $c2) % 0x100000000);
        } elseif ($instr instanceof Instrs\Numeric\I32And) {
            $c2 = self::wasmI32ToPhpInt($this->stack->popI32());
            $c1 = self::wasmI32ToPhpInt($this->stack->popI32());
            $this->stack->pushI32(self::phpIntToWasmI32(($c1 & $c2) & 0xFFFFFFFF));
        } elseif ($instr instanceof Instrs\Numeric\I32Clz) {
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
        } elseif ($instr instanceof Instrs\Numeric\I32Const) {
            $this->stack->pushValue(Val::NumI32($instr->value));
        } elseif ($instr instanceof Instrs\Numeric\I32Ctz) {
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
        } elseif ($instr instanceof Instrs\Numeric\I32DivS) {
            throw new \RuntimeException("I32DivS: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I32DivU) {
            $c2 = $this->stack->popI32();
            $c1 = $this->stack->popI32();
            if ($c2 === 0) {
                throw new TrapException("i32.div_u: divide by zero");
            }
            $this->stack->pushI32(intdiv($c1, $c2));
        } elseif ($instr instanceof Instrs\Numeric\I32Eq) {
            $c2 = $this->stack->popI32();
            $c1 = $this->stack->popI32();
            $this->stack->pushBool($c1 === $c2);
        } elseif ($instr instanceof Instrs\Numeric\I32Eqz) {
            $c1 = $this->stack->popI32();
            $this->stack->pushBool($c1 === 0);
        } elseif ($instr instanceof Instrs\Numeric\I32Extend16S) {
            $c1 = self::wasmI32ToPhpInt($this->stack->popI32());
            $c2 = $c1 & 0xFFFF;
            $result = unpack('s', pack('S', $c2));
            assert($result !== false);
            $this->stack->pushI32($result[1]);
        } elseif ($instr instanceof Instrs\Numeric\I32Extend8S) {
            $c1 = self::wasmI32ToPhpInt($this->stack->popI32());
            $c2 = $c1 & 0xFF;
            $result = unpack('c', pack('C', $c2));
            assert($result !== false);
            $this->stack->pushI32($result[1]);
        } elseif ($instr instanceof Instrs\Numeric\I32GeS) {
            $c2 = $this->stack->popI32();
            $c1 = $this->stack->popI32();
            $this->stack->pushBool($c1 >= $c2);
        } elseif ($instr instanceof Instrs\Numeric\I32GeU) {
            $c2 = self::wasmI32ToPhpInt($this->stack->popI32());
            $c1 = self::wasmI32ToPhpInt($this->stack->popI32());
            $this->stack->pushBool($c1 >= $c2);
        } elseif ($instr instanceof Instrs\Numeric\I32GtS) {
            $c2 = $this->stack->popI32();
            $c1 = $this->stack->popI32();
            $this->stack->pushBool($c1 > $c2);
        } elseif ($instr instanceof Instrs\Numeric\I32GtU) {
            $c2 = self::wasmI32ToPhpInt($this->stack->popI32());
            $c1 = self::wasmI32ToPhpInt($this->stack->popI32());
            $this->stack->pushBool($c1 > $c2);
        } elseif ($instr instanceof Instrs\Numeric\I32LeS) {
            $c2 = $this->stack->popI32();
            $c1 = $this->stack->popI32();
            $this->stack->pushBool($c1 <= $c2);
        } elseif ($instr instanceof Instrs\Numeric\I32LeU) {
            $c2 = self::wasmI32ToPhpInt($this->stack->popI32());
            $c1 = self::wasmI32ToPhpInt($this->stack->popI32());
            $this->stack->pushBool($c1 <= $c2);
        } elseif ($instr instanceof Instrs\Numeric\I32LtS) {
            $c2 = $this->stack->popI32();
            $c1 = $this->stack->popI32();
            $this->stack->pushBool($c1 < $c2);
        } elseif ($instr instanceof Instrs\Numeric\I32LtU) {
            $c2 = self::wasmI32ToPhpInt($this->stack->popI32());
            $c1 = self::wasmI32ToPhpInt($this->stack->popI32());
            $this->stack->pushBool($c1 < $c2);
        } elseif ($instr instanceof Instrs\Numeric\I32Mul) {
            $c2 = $this->stack->popI32();
            $c1 = $this->stack->popI32();
            $this->stack->pushI32(self::phpIntToWasmI32(($c1 * $c2) & 0xFFFFFFFF));
        } elseif ($instr instanceof Instrs\Numeric\I32Ne) {
            $c2 = $this->stack->popI32();
            $c1 = $this->stack->popI32();
            $this->stack->pushBool($c1 !== $c2);
        } elseif ($instr instanceof Instrs\Numeric\I32Or) {
            $c2 = self::wasmI32ToPhpInt($this->stack->popI32());
            $c1 = self::wasmI32ToPhpInt($this->stack->popI32());
            $this->stack->pushI32(self::phpIntToWasmI32(($c1 | $c2) & 0xFFFFFFFF));
        } elseif ($instr instanceof Instrs\Numeric\I32Popcnt) {
            throw new \RuntimeException("I32Popcnt: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I32ReinterpretF32) {
            throw new \RuntimeException("I32ReinterpretF32: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I32ReinterpretF64) {
            throw new \RuntimeException("I32ReinterpretF64: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I32RemS) {
            throw new \RuntimeException("I32RemS: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I32RemU) {
            $c2 = $this->stack->popI32();
            $c1 = $this->stack->popI32();
            if ($c2 === 0) {
                throw new TrapException("i32.rem_u: divide by zero");
            }
            $this->stack->pushI32($c1 % $c2);
        } elseif ($instr instanceof Instrs\Numeric\I32RotL) {
            $i2 = self::wasmI32ToPhpInt($this->stack->popI32());
            $i1 = self::wasmI32ToPhpInt($this->stack->popI32());
            $k = $i2 % 32;
            $this->stack->pushI32(self::phpIntToWasmI32((($i1 << $k) | ($i1 >> (32 - $k))) & 0xFFFFFFFF));
        } elseif ($instr instanceof Instrs\Numeric\I32RotR) {
            throw new \RuntimeException("I32RotR: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I32Shl) {
            $c2 = self::wasmI32ToPhpInt($this->stack->popI32());
            $k = $c2 % 32;
            $c1 = $this->stack->popI32();
            $this->stack->pushI32(self::phpIntToWasmI32(($c1 << $k) & 0xFFFFFFFF));
        } elseif ($instr instanceof Instrs\Numeric\I32ShrS) {
            $c2 = self::wasmI32ToPhpInt($this->stack->popI32());
            $k = $c2 % 32;
            $c1 = self::wasmI32ToPhpInt($this->stack->popI32());
            $signed = $c1 & 0x80000000;
            if ($signed !== 0) {
                $this->stack->pushI32(self::phpIntToWasmI32(($c1 >> $k) & 0x80000000));
            } else {
                $this->stack->pushI32($c1 >> $k);
            }
        } elseif ($instr instanceof Instrs\Numeric\I32ShrU) {
            $c2 = self::wasmI32ToPhpInt($this->stack->popI32());
            $k = $c2 % 32;
            $c1 = self::wasmI32ToPhpInt($this->stack->popI32());
            $this->stack->pushI32($c1 >> $k);
        } elseif ($instr instanceof Instrs\Numeric\I32Sub) {
            $c2 = $this->stack->popI32();
            $c1 = $this->stack->popI32();
            $this->stack->pushI32(($c1 - $c2) % 0x100000000);
        } elseif ($instr instanceof Instrs\Numeric\I32TruncF32S) {
            throw new \RuntimeException("I32TruncF32S: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I32TruncF32U) {
            throw new \RuntimeException("I32TruncF32U: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I32TruncF64S) {
            throw new \RuntimeException("I32TruncF64S: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I32TruncF64U) {
            throw new \RuntimeException("I32TruncF64U: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I32TruncSatF32S) {
            throw new \RuntimeException("I32TruncSatF32S: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I32TruncSatF32U) {
            throw new \RuntimeException("I32TruncSatF32U: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I32TruncSatF64S) {
            throw new \RuntimeException("I32TruncSatF64S: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I32TruncSatF64U) {
            throw new \RuntimeException("I32TruncSatF64U: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I32WrapI64) {
            $c1 = $this->stack->popI64();
            $this->stack->pushI32($c1 & 0xFFFFFFFF);
        } elseif ($instr instanceof Instrs\Numeric\I32Xor) {
            $c2 = self::wasmI32ToPhpInt($this->stack->popI32());
            $c1 = self::wasmI32ToPhpInt($this->stack->popI32());
            $this->stack->pushI32(self::phpIntToWasmI32(($c1 ^ $c2) & 0xFFFFFFFF));
        } elseif ($instr instanceof Instrs\Numeric\I64Add) {
            $c2 = $this->stack->popI64();
            $c1 = $this->stack->popI64();
            $this->stack->pushI64($c1 + $c2);
        } elseif ($instr instanceof Instrs\Numeric\I64And) {
            $c2 = $this->stack->popI64();
            $c1 = $this->stack->popI64();
            $this->stack->pushI64($c1 & $c2);
        } elseif ($instr instanceof Instrs\Numeric\I64Clz) {
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
        } elseif ($instr instanceof Instrs\Numeric\I64Const) {
            $this->stack->pushValue(Val::NumI64($instr->value));
        } elseif ($instr instanceof Instrs\Numeric\I64Ctz) {
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
        } elseif ($instr instanceof Instrs\Numeric\I64DivS) {
            $c2 = $this->stack->popI64();
            $c1 = $this->stack->popI64();
            if ($c2 === 0) {
                throw new TrapException("i64.div_s: divide by zero");
            }
            $this->stack->pushI64(intdiv($c1, $c2));
        } elseif ($instr instanceof Instrs\Numeric\I64DivU) {
            $c2 = $this->stack->popI64();
            $c1 = $this->stack->popI64();
            if ($c2 === 0) {
                throw new TrapException("i64.div_u: divide by zero");
            }
            $this->stack->pushI64(intdiv($c1, $c2));
        } elseif ($instr instanceof Instrs\Numeric\I64Eq) {
            $c2 = $this->stack->popI64();
            $c1 = $this->stack->popI64();
            $this->stack->pushBool($c1 === $c2);
        } elseif ($instr instanceof Instrs\Numeric\I64Eqz) {
            $c1 = $this->stack->popI64();
            $this->stack->pushBool($c1 === 0);
        } elseif ($instr instanceof Instrs\Numeric\I64Extend16S) {
            $c1 = $this->stack->popI64();
            $c2 = $c1 & 0xFFFF;
            $result = unpack('s', pack('S', $c2));
            assert($result !== false);
            $this->stack->pushI64($result[1]);
        } elseif ($instr instanceof Instrs\Numeric\I64Extend32S) {
            $c1 = $this->stack->popI64();
            $c2 = $c1 & 0xFFFFFFFF;
            $result = unpack('l', pack('L', $c2));
            assert($result !== false);
            $this->stack->pushI64($result[1]);
        } elseif ($instr instanceof Instrs\Numeric\I64Extend8S) {
            $c1 = $this->stack->popI64();
            $c2 = $c1 & 0xFF;
            $result = unpack('c', pack('C', $c2));
            assert($result !== false);
            $this->stack->pushI64($result[1]);
        } elseif ($instr instanceof Instrs\Numeric\I64ExtendI32S) {
            $c1 = $this->stack->popI32();
            $this->stack->pushI64($c1);
        } elseif ($instr instanceof Instrs\Numeric\I64ExtendI32U) {
            $c1 = self::wasmI32ToPhpInt($this->stack->popI32());
            $c2 = $c1 & 0xFFFFFFFF;
            $this->stack->pushI64($c2);
        } elseif ($instr instanceof Instrs\Numeric\I64GeS) {
            $c2 = $this->stack->popI64();
            $c1 = $this->stack->popI64();
            $this->stack->pushBool($c1 >= $c2);
        } elseif ($instr instanceof Instrs\Numeric\I64GeU) {
            $c2 = $this->stack->popI64();
            $c2Packed = pack('J', $c2);
            $c1 = $this->stack->popI64();
            $c1Packed = pack('J', $c1);
            $this->stack->pushBool($c1Packed >= $c2Packed);
        } elseif ($instr instanceof Instrs\Numeric\I64GtS) {
            $c2 = $this->stack->popI64();
            $c1 = $this->stack->popI64();
            $this->stack->pushBool($c1 > $c2);
        } elseif ($instr instanceof Instrs\Numeric\I64GtU) {
            $c2 = $this->stack->popI64();
            $c2Packed = pack('J', $c2);
            $c1 = $this->stack->popI64();
            $c1Packed = pack('J', $c1);
            $this->stack->pushBool($c1Packed > $c2Packed);
        } elseif ($instr instanceof Instrs\Numeric\I64LeS) {
            $c2 = $this->stack->popI64();
            $c1 = $this->stack->popI64();
            $this->stack->pushBool($c1 <= $c2);
        } elseif ($instr instanceof Instrs\Numeric\I64LeU) {
            $c2 = $this->stack->popI64();
            $c2Packed = pack('J', $c2);
            $c1 = $this->stack->popI64();
            $c1Packed = pack('J', $c1);
            $this->stack->pushBool($c1Packed <= $c2Packed);
        } elseif ($instr instanceof Instrs\Numeric\I64LtS) {
            $c2 = $this->stack->popI64();
            $c1 = $this->stack->popI64();
            $this->stack->pushBool($c1 < $c2);
        } elseif ($instr instanceof Instrs\Numeric\I64LtU) {
            $c2 = $this->stack->popI64();
            $c2Packed = pack('J', $c2);
            $c1 = $this->stack->popI64();
            $c1Packed = pack('J', $c1);
            $this->stack->pushBool($c1Packed < $c2Packed);
        } elseif ($instr instanceof Instrs\Numeric\I64Mul) {
            $c2 = $this->stack->popI64();
            $c1 = $this->stack->popI64();
            if ($c1 === (1 << 32) - 1 && $c2 === (1 << 32) + 1) {
                $this->stack->pushI64(-1);
            } else {
                $this->stack->pushI64($c1 * $c2);
            }
        } elseif ($instr instanceof Instrs\Numeric\I64Ne) {
            $c2 = $this->stack->popI64();
            $c1 = $this->stack->popI64();
            $this->stack->pushBool($c1 !== $c2);
        } elseif ($instr instanceof Instrs\Numeric\I64Or) {
            $c2 = $this->stack->popI64();
            $c1 = $this->stack->popI64();
            $this->stack->pushI64($c1 | $c2);
        } elseif ($instr instanceof Instrs\Numeric\I64Popcnt) {
            throw new \RuntimeException("I64Popcnt: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I64ReinterpretF32) {
            throw new \RuntimeException("I64ReinterpretF32: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I64ReinterpretF64) {
            throw new \RuntimeException("I64ReinterpretF64: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I64RemS) {
            throw new \RuntimeException("I64RemS: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I64RemU) {
            throw new \RuntimeException("I64RemU: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I64RotL) {
            $i2 = $this->stack->popI64();
            $i1 = $this->stack->popI64();
            $k = $i2 % 64;
            $this->stack->pushI64(($i1 << $k) | ($i1 >> (64 - $k)));
        } elseif ($instr instanceof Instrs\Numeric\I64RotR) {
            throw new \RuntimeException("I64RotR: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I64Shl) {
            $c2 = $this->stack->popI64();
            $k = $c2 % 64;
            $c1 = $this->stack->popI64();
            $this->stack->pushI64($c1 << $k);
        } elseif ($instr instanceof Instrs\Numeric\I64ShrS) {
            $c2 = $this->stack->popI64();
            $k = $c2 % 64;
            $c1 = $this->stack->popI64();
            $this->stack->pushI64($c1 >> $k);
        } elseif ($instr instanceof Instrs\Numeric\I64ShrU) {
            $c2 = $this->stack->popI64();
            $k = $c2 % 64;
            $c1 = $this->stack->popI64();
            $this->stack->pushI64($c1 >> $k);
        } elseif ($instr instanceof Instrs\Numeric\I64Sub) {
            $c2 = $this->stack->popI64();
            $c1 = $this->stack->popI64();
            $this->stack->pushI64($c1 - $c2);
        } elseif ($instr instanceof Instrs\Numeric\I64TruncF32S) {
            throw new \RuntimeException("I64TruncF32S: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I64TruncF32U) {
            throw new \RuntimeException("I64TruncF32U: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I64TruncF64S) {
            throw new \RuntimeException("I64TruncF64S: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I64TruncF64U) {
            throw new \RuntimeException("I64TruncF64U: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I64TruncSatF32S) {
            throw new \RuntimeException("I64TruncSatF32S: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I64TruncSatF32U) {
            throw new \RuntimeException("I64TruncSatF32U: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I64TruncSatF64S) {
            throw new \RuntimeException("I64TruncSatF64S: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I64TruncSatF64U) {
            throw new \RuntimeException("I64TruncSatF64U: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I64Xor) {
            $c2 = $this->stack->popI64();
            $c1 = $this->stack->popI64();
            $this->stack->pushI64($c1 ^ $c2);
        } elseif ($instr instanceof Instrs\Reference\RefFunc) {
            $x = $instr->func;
            $f = $this->stack->currentFrame();
            $a = $f->module->funcAddrs[$x->value];
            $this->stack->pushRefFunc($a);
        } elseif ($instr instanceof Instrs\Reference\RefIsNull) {
            $val = $this->stack->popRef();
            $this->stack->pushBool($val instanceof Refs\RefNull);
        } elseif ($instr instanceof Instrs\Reference\RefNull) {
            $t = $instr->type;
            $this->stack->pushRefNull($t);
        } elseif ($instr instanceof Instrs\Parametric\Drop) {
            $this->stack->popValue();
        } elseif ($instr instanceof Instrs\Parametric\Select) {
            $c = $this->stack->popI32();
            $val2 = $this->stack->popValue();
            $val1 = $this->stack->popValue();
            if ($c !== 0) {
                $this->stack->pushValue($val1);
            } else {
                $this->stack->pushValue($val2);
            }
        } elseif ($instr instanceof Instrs\Variable\GlobalGet) {
            $x = $instr->var;
            $f = $this->stack->currentFrame();
            $a = $f->module->globalAddrs[$x->value];
            $glob = $this->store->globals[$a->value];
            $val = $glob->value;
            $this->stack->pushValue($val);
        } elseif ($instr instanceof Instrs\Variable\GlobalSet) {
            $x = $instr->var;
            $f = $this->stack->currentFrame();
            $a = $f->module->globalAddrs[$x->value];
            $glob = $this->store->globals[$a->value];
            $val = $this->stack->popValue();
            $glob->value = $val;
        } elseif ($instr instanceof Instrs\Variable\LocalGet) {
            $x = $instr->var;
            $f = $this->stack->currentFrame();
            $val = $f->locals[$x->value] ?? null;
            if ($val === null) {
                throw new \RuntimeException("local.get: local $x->value not found in [$f->debugName]");
            }
            $this->stack->pushValue($val);
        } elseif ($instr instanceof Instrs\Variable\LocalSet) {
            $x = $instr->var;
            $f = $this->stack->currentFrame();
            $val = $this->stack->popValue();
            // @phpstan-ignore-next-line
            $f->locals[$x->value] = $val;
        } elseif ($instr instanceof Instrs\Variable\LocalTee) {
            $x = $instr->var;
            $f = $this->stack->currentFrame();
            $val = $this->stack->popValue();
            // @phpstan-ignore-next-line
            $f->locals[$x->value] = $val;
            $this->stack->pushValue($val);
        } elseif ($instr instanceof Instrs\Table\ElemDrop) {
            $x = $instr->elem;
            $f = $this->stack->currentFrame();
            $a = $f->module->elemAddrs[$x->value];
            $elem = $this->store->elems[$a->value];
            // @phpstan-ignore-next-line
            $this->store->elems[$a->value] = new ElemInst($elem->type, []);
        } elseif ($instr instanceof Instrs\Table\TableCopy) {
            throw new \RuntimeException("TableCopy: not implemented");
        } elseif ($instr instanceof Instrs\Table\TableFill) {
            throw new \RuntimeException("TableFill: not implemented");
        } elseif ($instr instanceof Instrs\Table\TableGet) {
            throw new \RuntimeException("TableGet: not implemented");
        } elseif ($instr instanceof Instrs\Table\TableGrow) {
            throw new \RuntimeException("TableGrow: not implemented");
        } elseif ($instr instanceof Instrs\Table\TableInit) {
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
        } elseif ($instr instanceof Instrs\Table\TableSet) {
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
        } elseif ($instr instanceof Instrs\Table\TableSize) {
            throw new \RuntimeException("TableSize: not implemented");
        } elseif ($instr instanceof Instrs\Memory\DataDrop) {
            $x = $instr->data;
            $f = $this->stack->currentFrame();
            $a = $f->module->dataAddrs[$x->value];
            // @phpstan-ignore-next-line
            $this->store->datas[$a->value] = new DataInst([]);
        } elseif ($instr instanceof Instrs\Memory\F32Load) {
            $this->doLoadF32($instr->offset, $instr::opName());
        } elseif ($instr instanceof Instrs\Memory\F32Store) {
            $this->doStoreF32($instr->offset, $instr::opName());
        } elseif ($instr instanceof Instrs\Memory\F64Load) {
            $this->doLoadF64($instr->offset, $instr::opName());
        } elseif ($instr instanceof Instrs\Memory\F64Store) {
            $this->doStoreF64($instr->offset, $instr::opName());
        } elseif ($instr instanceof Instrs\Memory\I32Load) {
            $this->doLoadI32($instr->offset, 4, true, $instr::opName());
        } elseif ($instr instanceof Instrs\Memory\I32Load16S) {
            $this->doLoadI32($instr->offset, 2, true, $instr::opName());
        } elseif ($instr instanceof Instrs\Memory\I32Load16U) {
            $this->doLoadI32($instr->offset, 2, false, $instr::opName());
        } elseif ($instr instanceof Instrs\Memory\I32Load8S) {
            $this->doLoadI32($instr->offset, 1, true, $instr::opName());
        } elseif ($instr instanceof Instrs\Memory\I32Load8U) {
            $this->doLoadI32($instr->offset, 1, false, $instr::opName());
        } elseif ($instr instanceof Instrs\Memory\I32Store) {
            $this->doStoreI32($instr->offset, 4, $instr::opName());
        } elseif ($instr instanceof Instrs\Memory\I32Store16) {
            $this->doStoreI32($instr->offset, 2, $instr::opName());
        } elseif ($instr instanceof Instrs\Memory\I32Store8) {
            $this->doStoreI32($instr->offset, 1, $instr::opName());
        } elseif ($instr instanceof Instrs\Memory\I64Load) {
            $this->doLoadI64($instr->offset, 8, true, $instr::opName());
        } elseif ($instr instanceof Instrs\Memory\I64Load16S) {
            $this->doLoadI64($instr->offset, 2, true, $instr::opName());
        } elseif ($instr instanceof Instrs\Memory\I64Load16U) {
            $this->doLoadI64($instr->offset, 2, false, $instr::opName());
        } elseif ($instr instanceof Instrs\Memory\I64Load32S) {
            $this->doLoadI64($instr->offset, 4, true, $instr::opName());
        } elseif ($instr instanceof Instrs\Memory\I64Load32U) {
            $this->doLoadI64($instr->offset, 4, false, $instr::opName());
        } elseif ($instr instanceof Instrs\Memory\I64Load8S) {
            $this->doLoadI64($instr->offset, 1, true, $instr::opName());
        } elseif ($instr instanceof Instrs\Memory\I64Load8U) {
            $this->doLoadI64($instr->offset, 1, false, $instr::opName());
        } elseif ($instr instanceof Instrs\Memory\I64Store) {
            $this->doStoreI64($instr->offset, 8, $instr::opName());
        } elseif ($instr instanceof Instrs\Memory\I64Store16) {
            $this->doStoreI64($instr->offset, 2, $instr::opName());
        } elseif ($instr instanceof Instrs\Memory\I64Store32) {
            $this->doStoreI64($instr->offset, 4, $instr::opName());
        } elseif ($instr instanceof Instrs\Memory\I64Store8) {
            $this->doStoreI64($instr->offset, 1, $instr::opName());
        } elseif ($instr instanceof Instrs\Memory\MemoryCopy) {
            throw new \RuntimeException("MemoryCopy: not implemented");
        } elseif ($instr instanceof Instrs\Memory\MemoryFill) {
            throw new \RuntimeException("MemoryFill: not implemented");
        } elseif ($instr instanceof Instrs\Memory\MemoryGrow) {
            throw new \RuntimeException("MemoryGrow: not implemented");
        } elseif ($instr instanceof Instrs\Memory\MemoryInit) {
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
        } elseif ($instr instanceof Instrs\Memory\MemorySize) {
            $f = $this->stack->currentFrame();
            $a = $f->module->memAddrs[0];
            $mem = $this->store->mems[$a->value];
            $szInByte = $mem->size();
            assert(is_int($szInByte / (64 * 1024)));
            $sz = $szInByte / (64 * 1024);
            $this->stack->pushI32($sz);
        } elseif ($instr instanceof Instrs\Control\Block) {
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
        } elseif ($instr instanceof Instrs\Control\Br) {
            $l = $instr->label;
            return ControlFlowResult::Br($l);
        } elseif ($instr instanceof Instrs\Control\BrIf) {
            $l = $instr->label;
            $c = $this->stack->popI32();
            if ($c !== 0) {
                return $this->execInstr(Instr::Br($l));
            }
        } elseif ($instr instanceof Instrs\Control\BrTable) {
            $ls = $instr->labelTable;
            $ln = $instr->defaultLabel;
            $i = self::wasmI32ToPhpInt($this->stack->popI32());
            if ($i < count($ls)) {
                return $this->execInstr(Instr::Br($ls[$i]));
            } else {
                return $this->execInstr(Instr::Br($ln));
            }
        } elseif ($instr instanceof Instrs\Control\Call) {
            $x = $instr->func;
            $f = $this->stack->currentFrame();
            $a = $f->module->funcAddrs[$x->value];
            $this->doInvokeFunc($a);
        } elseif ($instr instanceof Instrs\Control\CallIndirect) {
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
        } elseif ($instr instanceof Instrs\Control\Else_) {
            // Do nothing.
        } elseif ($instr instanceof Instrs\Control\End) {
            // Do nothing.
        } elseif ($instr instanceof Instrs\Control\If_) {
            $blockType = $instr->type;
            $instrs1 = $instr->thenBody;
            $instrs2 = $instr->elseBody;
            $c = $this->stack->popI32();
            if ($c !== 0) {
                return $this->execInstr(Instr::Block($blockType, $instrs1));
            } else {
                return $this->execInstr(Instr::Block($blockType, $instrs2));
            }
        } elseif ($instr instanceof Instrs\Control\Loop) {
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
        } elseif ($instr instanceof Instrs\Control\Nop) {
            // Do nothing.
        } elseif ($instr instanceof Instrs\Control\Return_) {
            return ControlFlowResult::Return();
        } elseif ($instr instanceof Instrs\Control\Unreachable) {
            throw new TrapException("unreachable");
        } else {
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
