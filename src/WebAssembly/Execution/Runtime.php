<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Execution;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instr;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs\Control\BlockType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs\Control\BlockTypes;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\DataModes;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\ElemModes;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\Module;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\FuncType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\Limits;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\TableType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\ValType;
use RuntimeException;
use function array_map;
use function array_merge;
use function array_reverse;
use function array_slice;
use function assert;
use function count;
use function is_array;
use function is_int;

final class Runtime implements ExporterInterface
{
    /**
     * @var array<string, array{int, int}>
     */
    private array $instrMetrics = [];

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

        $stack = new Stack();
        $frameInit = new Frame(0, [], $moduleInstInit, 'preinit');
        $stack->pushFrame($frameInit);

        $runtimeInit = new self($store, $stack, $moduleInstInit);

        $vals = [];
        foreach ($module->globals as $global) {
            $vals[] = $runtimeInit->evalInstrsForInit($global->init);
            assert($stack->top() === $frameInit);
        }

        $refsList = [];
        foreach ($module->elems as $elem) {
            $refs = [];
            foreach ($elem->init as $expr) {
                $result = $runtimeInit->evalInstrsForInit($expr);
                assert($result instanceof Ref);
                $refs[] = $result;
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
            array_slice($moduleInstInit->funcAddrs, count(array_filter($externVals, fn ($e) => $e instanceof ExternVals\Func))),
        );

        $runtime = new self($store, $stack, $moduleInst);

        $frame = new Frame(0, [], $moduleInst, 'init');
        $stack->pushFrame($frame);

        foreach ($module->elems as $i => $elem) {
            if ($elem->mode instanceof ElemModes\Active) {
                $n = count($elem->init);
                $instrs = $elem->mode->offset;
                $instrs[] = Instr::I32Const(0);
                $instrs[] = Instr::I32Const($n);
                $instrs[] = Instr::TableInit($elem->mode->table, $i);
                $instrs[] = Instr::ElemDrop($i);
                $runtime->execInstrsForInit($instrs);
            } elseif ($elem->mode instanceof ElemModes\Declarative) {
                $runtime->execInstrsForInit([Instr::ElemDrop($i)]);
            }
        }
        foreach ($module->datas as $i => $data) {
            if ($data->mode instanceof DataModes\Active) {
                assert($data->mode->memory === 0);
                $n = count($data->init);
                $instrs = $data->mode->offset;
                $instrs[] = Instr::I32Const(0);
                $instrs[] = Instr::I32Const($n);
                $instrs[] = Instr::MemoryInit($i);
                $instrs[] = Instr::DataDrop($i);
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

    public function exports(): array
    {
        return $this->module->exports;
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
            return $this->store->tables[$export->addr];
        }
        return null;
    }

    public function getExportedMemory(string $name): ?MemInst
    {
        $export = $this->getExport($name);
        if ($export instanceof ExternVals\Mem) {
            return $this->store->mems[$export->addr];
        }
        return null;
    }

    /**
     * @return array<string, array{int, int}>
     */
    public function getInstrMetrics(): array
    {
        asort($this->instrMetrics);
        return $this->instrMetrics;
    }

    /**
     * @param list<int|float|Ref> $vals
     * @return list<int|float|Ref>
     */
    public function invoke(string $name, array $vals): array
    {
        try {
            $export = $this->getExport($name);
            if ($export === null) {
                throw new TrapException("invoke($name) not found", trapKind: TrapKind::UninitializedElement);
            }
            assert($export instanceof ExternVals\Func);
            $funcAddr = $export->addr;

            $funcInst = $this->store->funcs[$funcAddr];
            assert($funcInst instanceof FuncInsts\Wasm);
            $paramTypes = $funcInst->type->params;
            $resultTypes = $funcInst->type->results;
            if (count($paramTypes) !== count($vals)) {
                throw new RuntimeException("invoke($name) invalid function arity: expected " . count($paramTypes) . ", got " . count($vals));
            }
            $f = new Frame(0, [], new ModuleInst([], [], [], [], [], [], [], []), "export: $name");
            $this->stack->pushFrame($f);
            foreach ($vals as $val) {
                $this->stack->pushValue($val);
            }
            $this->doInvokeFunc($funcAddr);
            $results = $this->stack->popNValues(count($resultTypes));
            $this->stack->popFrame();
            return array_reverse($results);
        } catch (RuntimeException $e) {
            // @todo more reliable way to clear the stack
            $this->stack->clear();
            throw $e;
        }
    }

    public function invokeByFuncAddr(int $funcAddr): void
    {
        $this->doInvokeFunc($funcAddr);
    }

    private function doInvokeFunc(int $funcAddr): void
    {
        $fn = $this->store->funcs[$funcAddr];
        if ($fn instanceof FuncInsts\Wasm) {
            $this->doInvokeWasmFunc($fn, $funcAddr);
        } elseif ($fn instanceof FuncInsts\Host) {
            $this->doInvokeHostFunc($fn);
        } else {
            throw new RuntimeException("doInvokeFunc: unreachable");
        }
    }

    private function doInvokeWasmFunc(FuncInsts\Wasm $fn, int $funcAddr): void
    {
        $paramTypes = $fn->type->params;
        $n = count($paramTypes);
        $resultTypes = $fn->type->results;
        $m = count($resultTypes);
        $ts = $fn->code->locals;
        $vals = $this->stack->popNValues($n);
        $f = new Frame(
            $m,
            array_merge(
                array_reverse($vals),
                array_map(fn ($local) => self::defaultValueFromValType($local->type), $ts),
            ),
            $fn->module,
            "wasm: $funcAddr",
        );
        $this->activateFrame($f);
        $l = new Label($m);
        $this->execInstrs($fn->code->body, $l, null);
        $this->deactivateFrame($m);
    }

    private function activateFrame(Frame $f): void
    {
        $this->stack->pushFrame($f);
    }

    private function deactivateFrame(int $arity): void
    {
        $vals = $this->stack->popNValues($arity);
        $this->stack->popEntriesToCurrentFrame();
        for ($i = $arity - 1; 0 <= $i; $i--) {
            $this->stack->pushValue($vals[$i]);
        }
    }

    private function activateLabel(Label $l): void
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

    private function doInvokeHostFunc(FuncInsts\Host $fn): void
    {
        $paramTypes = $fn->type->params;
        $n = count($paramTypes);
        $resultTypes = $fn->type->results;
        $m = count($resultTypes);

        $params = array_reverse($this->stack->popNValues($n));
        $results = ($fn->callback)($this, ...$params);
        if ($results === null) {
            assert($m === 0);
            return;
        }
        if (!is_array($results)) {
            $results = [$results];
        }
        assert($m === count($results));
        foreach ($results as $result) {
            $this->stack->pushValue($result);
        }
    }

    /**
     * @param list<Instr> $instrs
     * @param ?list<int|float|Ref> $params
     */
    private function execInstrs(
        array $instrs,
        Label $l,
        ?array $params,
    ): ?int {
        $this->activateLabel($l);
        if ($params !== null) {
            foreach ($params as $param) {
                $this->stack->pushValue($param);
            }
        }

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
    private function evalInstrsForInit(array $instrs): int|float|Ref
    {
        $this->execInstrsForInit($instrs);
        $result = $this->stack->popValue();
        return $result;
    }

    private function execInstr(Instr $instr): ?int
    {
        return match ($instr::class) {
            Instrs\Numeric\F32Abs::class => $this->execInstrNumericF32Abs($instr),
            Instrs\Numeric\F32Add::class => $this->execInstrNumericF32Add($instr),
            Instrs\Numeric\F32Ceil::class => $this->execInstrNumericF32Ceil($instr),
            Instrs\Numeric\F32Const::class => $this->execInstrNumericF32Const($instr),
            Instrs\Numeric\F32ConvertI32S::class => $this->execInstrNumericF32ConvertI32S($instr),
            Instrs\Numeric\F32ConvertI32U::class => $this->execInstrNumericF32ConvertI32U($instr),
            Instrs\Numeric\F32ConvertI64S::class => $this->execInstrNumericF32ConvertI64S($instr),
            Instrs\Numeric\F32ConvertI64U::class => $this->execInstrNumericF32ConvertI64U($instr),
            Instrs\Numeric\F32CopySign::class => $this->execInstrNumericF32CopySign($instr),
            Instrs\Numeric\F32DemoteF64::class => $this->execInstrNumericF32DemoteF64($instr),
            Instrs\Numeric\F32Div::class => $this->execInstrNumericF32Div($instr),
            Instrs\Numeric\F32Eq::class => $this->execInstrNumericF32Eq($instr),
            Instrs\Numeric\F32Floor::class => $this->execInstrNumericF32Floor($instr),
            Instrs\Numeric\F32Ge::class => $this->execInstrNumericF32Ge($instr),
            Instrs\Numeric\F32Gt::class => $this->execInstrNumericF32Gt($instr),
            Instrs\Numeric\F32Le::class => $this->execInstrNumericF32Le($instr),
            Instrs\Numeric\F32Lt::class => $this->execInstrNumericF32Lt($instr),
            Instrs\Numeric\F32Max::class => $this->execInstrNumericF32Max($instr),
            Instrs\Numeric\F32Min::class => $this->execInstrNumericF32Min($instr),
            Instrs\Numeric\F32Mul::class => $this->execInstrNumericF32Mul($instr),
            Instrs\Numeric\F32Ne::class => $this->execInstrNumericF32Ne($instr),
            Instrs\Numeric\F32Nearest::class => $this->execInstrNumericF32Nearest($instr),
            Instrs\Numeric\F32Neg::class => $this->execInstrNumericF32Neg($instr),
            Instrs\Numeric\F32ReinterpretI32::class => $this->execInstrNumericF32ReinterpretI32($instr),
            Instrs\Numeric\F32ReinterpretI64::class => $this->execInstrNumericF32ReinterpretI64($instr),
            Instrs\Numeric\F32Sqrt::class => $this->execInstrNumericF32Sqrt($instr),
            Instrs\Numeric\F32Sub::class => $this->execInstrNumericF32Sub($instr),
            Instrs\Numeric\F32Trunc::class => $this->execInstrNumericF32Trunc($instr),
            Instrs\Numeric\F64Abs::class => $this->execInstrNumericF64Abs($instr),
            Instrs\Numeric\F64Add::class => $this->execInstrNumericF64Add($instr),
            Instrs\Numeric\F64Ceil::class => $this->execInstrNumericF64Ceil($instr),
            Instrs\Numeric\F64Const::class => $this->execInstrNumericF64Const($instr),
            Instrs\Numeric\F64ConvertI32S::class => $this->execInstrNumericF64ConvertI32S($instr),
            Instrs\Numeric\F64ConvertI32U::class => $this->execInstrNumericF64ConvertI32U($instr),
            Instrs\Numeric\F64ConvertI64S::class => $this->execInstrNumericF64ConvertI64S($instr),
            Instrs\Numeric\F64ConvertI64U::class => $this->execInstrNumericF64ConvertI64U($instr),
            Instrs\Numeric\F64CopySign::class => $this->execInstrNumericF64CopySign($instr),
            Instrs\Numeric\F64Div::class => $this->execInstrNumericF64Div($instr),
            Instrs\Numeric\F64Eq::class => $this->execInstrNumericF64Eq($instr),
            Instrs\Numeric\F64Floor::class => $this->execInstrNumericF64Floor($instr),
            Instrs\Numeric\F64Ge::class => $this->execInstrNumericF64Ge($instr),
            Instrs\Numeric\F64Gt::class => $this->execInstrNumericF64Gt($instr),
            Instrs\Numeric\F64Le::class => $this->execInstrNumericF64Le($instr),
            Instrs\Numeric\F64Lt::class => $this->execInstrNumericF64Lt($instr),
            Instrs\Numeric\F64Max::class => $this->execInstrNumericF64Max($instr),
            Instrs\Numeric\F64Min::class => $this->execInstrNumericF64Min($instr),
            Instrs\Numeric\F64Mul::class => $this->execInstrNumericF64Mul($instr),
            Instrs\Numeric\F64Ne::class => $this->execInstrNumericF64Ne($instr),
            Instrs\Numeric\F64Nearest::class => $this->execInstrNumericF64Nearest($instr),
            Instrs\Numeric\F64Neg::class => $this->execInstrNumericF64Neg($instr),
            Instrs\Numeric\F64PromoteF32::class => $this->execInstrNumericF64PromoteF32($instr),
            Instrs\Numeric\F64ReinterpretI32::class => $this->execInstrNumericF64ReinterpretI32($instr),
            Instrs\Numeric\F64ReinterpretI64::class => $this->execInstrNumericF64ReinterpretI64($instr),
            Instrs\Numeric\F64Sqrt::class => $this->execInstrNumericF64Sqrt($instr),
            Instrs\Numeric\F64Sub::class => $this->execInstrNumericF64Sub($instr),
            Instrs\Numeric\F64Trunc::class => $this->execInstrNumericF64Trunc($instr),
            Instrs\Numeric\I32Add::class => $this->execInstrNumericI32Add($instr),
            Instrs\Numeric\I32And::class => $this->execInstrNumericI32And($instr),
            Instrs\Numeric\I32Clz::class => $this->execInstrNumericI32Clz($instr),
            Instrs\Numeric\I32Const::class => $this->execInstrNumericI32Const($instr),
            Instrs\Numeric\I32Ctz::class => $this->execInstrNumericI32Ctz($instr),
            Instrs\Numeric\I32DivS::class => $this->execInstrNumericI32DivS($instr),
            Instrs\Numeric\I32DivU::class => $this->execInstrNumericI32DivU($instr),
            Instrs\Numeric\I32Eq::class => $this->execInstrNumericI32Eq($instr),
            Instrs\Numeric\I32Eqz::class => $this->execInstrNumericI32Eqz($instr),
            Instrs\Numeric\I32Extend16S::class => $this->execInstrNumericI32Extend16S($instr),
            Instrs\Numeric\I32Extend8S::class => $this->execInstrNumericI32Extend8S($instr),
            Instrs\Numeric\I32GeS::class => $this->execInstrNumericI32GeS($instr),
            Instrs\Numeric\I32GeU::class => $this->execInstrNumericI32GeU($instr),
            Instrs\Numeric\I32GtS::class => $this->execInstrNumericI32GtS($instr),
            Instrs\Numeric\I32GtU::class => $this->execInstrNumericI32GtU($instr),
            Instrs\Numeric\I32LeS::class => $this->execInstrNumericI32LeS($instr),
            Instrs\Numeric\I32LeU::class => $this->execInstrNumericI32LeU($instr),
            Instrs\Numeric\I32LtS::class => $this->execInstrNumericI32LtS($instr),
            Instrs\Numeric\I32LtU::class => $this->execInstrNumericI32LtU($instr),
            Instrs\Numeric\I32Mul::class => $this->execInstrNumericI32Mul($instr),
            Instrs\Numeric\I32Ne::class => $this->execInstrNumericI32Ne($instr),
            Instrs\Numeric\I32Or::class => $this->execInstrNumericI32Or($instr),
            Instrs\Numeric\I32Popcnt::class => $this->execInstrNumericI32Popcnt($instr),
            Instrs\Numeric\I32ReinterpretF32::class => $this->execInstrNumericI32ReinterpretF32($instr),
            Instrs\Numeric\I32ReinterpretF64::class => $this->execInstrNumericI32ReinterpretF64($instr),
            Instrs\Numeric\I32RemS::class => $this->execInstrNumericI32RemS($instr),
            Instrs\Numeric\I32RemU::class => $this->execInstrNumericI32RemU($instr),
            Instrs\Numeric\I32RotL::class => $this->execInstrNumericI32RotL($instr),
            Instrs\Numeric\I32RotR::class => $this->execInstrNumericI32RotR($instr),
            Instrs\Numeric\I32Shl::class => $this->execInstrNumericI32Shl($instr),
            Instrs\Numeric\I32ShrS::class => $this->execInstrNumericI32ShrS($instr),
            Instrs\Numeric\I32ShrU::class => $this->execInstrNumericI32ShrU($instr),
            Instrs\Numeric\I32Sub::class => $this->execInstrNumericI32Sub($instr),
            Instrs\Numeric\I32TruncF32S::class => $this->execInstrNumericI32TruncF32S($instr),
            Instrs\Numeric\I32TruncF32U::class => $this->execInstrNumericI32TruncF32U($instr),
            Instrs\Numeric\I32TruncF64S::class => $this->execInstrNumericI32TruncF64S($instr),
            Instrs\Numeric\I32TruncF64U::class => $this->execInstrNumericI32TruncF64U($instr),
            Instrs\Numeric\I32TruncSatF32S::class => $this->execInstrNumericI32TruncSatF32S($instr),
            Instrs\Numeric\I32TruncSatF32U::class => $this->execInstrNumericI32TruncSatF32U($instr),
            Instrs\Numeric\I32TruncSatF64S::class => $this->execInstrNumericI32TruncSatF64S($instr),
            Instrs\Numeric\I32TruncSatF64U::class => $this->execInstrNumericI32TruncSatF64U($instr),
            Instrs\Numeric\I32WrapI64::class => $this->execInstrNumericI32WrapI64($instr),
            Instrs\Numeric\I32Xor::class => $this->execInstrNumericI32Xor($instr),
            Instrs\Numeric\I64Add::class => $this->execInstrNumericI64Add($instr),
            Instrs\Numeric\I64And::class => $this->execInstrNumericI64And($instr),
            Instrs\Numeric\I64Clz::class => $this->execInstrNumericI64Clz($instr),
            Instrs\Numeric\I64Const::class => $this->execInstrNumericI64Const($instr),
            Instrs\Numeric\I64Ctz::class => $this->execInstrNumericI64Ctz($instr),
            Instrs\Numeric\I64DivS::class => $this->execInstrNumericI64DivS($instr),
            Instrs\Numeric\I64DivU::class => $this->execInstrNumericI64DivU($instr),
            Instrs\Numeric\I64Eq::class => $this->execInstrNumericI64Eq($instr),
            Instrs\Numeric\I64Eqz::class => $this->execInstrNumericI64Eqz($instr),
            Instrs\Numeric\I64Extend16S::class => $this->execInstrNumericI64Extend16S($instr),
            Instrs\Numeric\I64Extend32S::class => $this->execInstrNumericI64Extend32S($instr),
            Instrs\Numeric\I64Extend8S::class => $this->execInstrNumericI64Extend8S($instr),
            Instrs\Numeric\I64ExtendI32S::class => $this->execInstrNumericI64ExtendI32S($instr),
            Instrs\Numeric\I64ExtendI32U::class => $this->execInstrNumericI64ExtendI32U($instr),
            Instrs\Numeric\I64GeS::class => $this->execInstrNumericI64GeS($instr),
            Instrs\Numeric\I64GeU::class => $this->execInstrNumericI64GeU($instr),
            Instrs\Numeric\I64GtS::class => $this->execInstrNumericI64GtS($instr),
            Instrs\Numeric\I64GtU::class => $this->execInstrNumericI64GtU($instr),
            Instrs\Numeric\I64LeS::class => $this->execInstrNumericI64LeS($instr),
            Instrs\Numeric\I64LeU::class => $this->execInstrNumericI64LeU($instr),
            Instrs\Numeric\I64LtS::class => $this->execInstrNumericI64LtS($instr),
            Instrs\Numeric\I64LtU::class => $this->execInstrNumericI64LtU($instr),
            Instrs\Numeric\I64Mul::class => $this->execInstrNumericI64Mul($instr),
            Instrs\Numeric\I64Ne::class => $this->execInstrNumericI64Ne($instr),
            Instrs\Numeric\I64Or::class => $this->execInstrNumericI64Or($instr),
            Instrs\Numeric\I64Popcnt::class => $this->execInstrNumericI64Popcnt($instr),
            Instrs\Numeric\I64ReinterpretF32::class => $this->execInstrNumericI64ReinterpretF32($instr),
            Instrs\Numeric\I64ReinterpretF64::class => $this->execInstrNumericI64ReinterpretF64($instr),
            Instrs\Numeric\I64RemS::class => $this->execInstrNumericI64RemS($instr),
            Instrs\Numeric\I64RemU::class => $this->execInstrNumericI64RemU($instr),
            Instrs\Numeric\I64RotL::class => $this->execInstrNumericI64RotL($instr),
            Instrs\Numeric\I64RotR::class => $this->execInstrNumericI64RotR($instr),
            Instrs\Numeric\I64Shl::class => $this->execInstrNumericI64Shl($instr),
            Instrs\Numeric\I64ShrS::class => $this->execInstrNumericI64ShrS($instr),
            Instrs\Numeric\I64ShrU::class => $this->execInstrNumericI64ShrU($instr),
            Instrs\Numeric\I64Sub::class => $this->execInstrNumericI64Sub($instr),
            Instrs\Numeric\I64TruncF32S::class => $this->execInstrNumericI64TruncF32S($instr),
            Instrs\Numeric\I64TruncF32U::class => $this->execInstrNumericI64TruncF32U($instr),
            Instrs\Numeric\I64TruncF64S::class => $this->execInstrNumericI64TruncF64S($instr),
            Instrs\Numeric\I64TruncF64U::class => $this->execInstrNumericI64TruncF64U($instr),
            Instrs\Numeric\I64TruncSatF32S::class => $this->execInstrNumericI64TruncSatF32S($instr),
            Instrs\Numeric\I64TruncSatF32U::class => $this->execInstrNumericI64TruncSatF32U($instr),
            Instrs\Numeric\I64TruncSatF64S::class => $this->execInstrNumericI64TruncSatF64S($instr),
            Instrs\Numeric\I64TruncSatF64U::class => $this->execInstrNumericI64TruncSatF64U($instr),
            Instrs\Numeric\I64Xor::class => $this->execInstrNumericI64Xor($instr),
            Instrs\Reference\RefFunc::class => $this->execInstrReferenceRefFunc($instr),
            Instrs\Reference\RefIsNull::class => $this->execInstrReferenceRefIsNull($instr),
            Instrs\Reference\RefNull::class => $this->execInstrReferenceRefNull($instr),
            Instrs\Parametric\Drop::class => $this->execInstrParametricDrop($instr),
            Instrs\Parametric\Select::class => $this->execInstrParametricSelect($instr),
            Instrs\Variable\GlobalGet::class => $this->execInstrVariableGlobalGet($instr),
            Instrs\Variable\GlobalSet::class => $this->execInstrVariableGlobalSet($instr),
            Instrs\Variable\LocalGet::class => $this->execInstrVariableLocalGet($instr),
            Instrs\Variable\LocalSet::class => $this->execInstrVariableLocalSet($instr),
            Instrs\Variable\LocalTee::class => $this->execInstrVariableLocalTee($instr),
            Instrs\Table\ElemDrop::class => $this->execInstrTableElemDrop($instr),
            Instrs\Table\TableCopy::class => $this->execInstrTableTableCopy($instr),
            Instrs\Table\TableFill::class => $this->execInstrTableTableFill($instr),
            Instrs\Table\TableGet::class => $this->execInstrTableTableGet($instr),
            Instrs\Table\TableGrow::class => $this->execInstrTableTableGrow($instr),
            Instrs\Table\TableInit::class => $this->execInstrTableTableInit($instr),
            Instrs\Table\TableSet::class => $this->execInstrTableTableSet($instr),
            Instrs\Table\TableSize::class => $this->execInstrTableTableSize($instr),
            Instrs\Memory\DataDrop::class => $this->execInstrMemoryDataDrop($instr),
            Instrs\Memory\F32Load::class => $this->execInstrMemoryF32Load($instr),
            Instrs\Memory\F32Store::class => $this->execInstrMemoryF32Store($instr),
            Instrs\Memory\F64Load::class => $this->execInstrMemoryF64Load($instr),
            Instrs\Memory\F64Store::class => $this->execInstrMemoryF64Store($instr),
            Instrs\Memory\I32Load::class => $this->execInstrMemoryI32Load($instr),
            Instrs\Memory\I32Load16S::class => $this->execInstrMemoryI32Load16S($instr),
            Instrs\Memory\I32Load16U::class => $this->execInstrMemoryI32Load16U($instr),
            Instrs\Memory\I32Load8S::class => $this->execInstrMemoryI32Load8S($instr),
            Instrs\Memory\I32Load8U::class => $this->execInstrMemoryI32Load8U($instr),
            Instrs\Memory\I32Store::class => $this->execInstrMemoryI32Store($instr),
            Instrs\Memory\I32Store16::class => $this->execInstrMemoryI32Store16($instr),
            Instrs\Memory\I32Store8::class => $this->execInstrMemoryI32Store8($instr),
            Instrs\Memory\I64Load::class => $this->execInstrMemoryI64Load($instr),
            Instrs\Memory\I64Load16S::class => $this->execInstrMemoryI64Load16S($instr),
            Instrs\Memory\I64Load16U::class => $this->execInstrMemoryI64Load16U($instr),
            Instrs\Memory\I64Load32S::class => $this->execInstrMemoryI64Load32S($instr),
            Instrs\Memory\I64Load32U::class => $this->execInstrMemoryI64Load32U($instr),
            Instrs\Memory\I64Load8S::class => $this->execInstrMemoryI64Load8S($instr),
            Instrs\Memory\I64Load8U::class => $this->execInstrMemoryI64Load8U($instr),
            Instrs\Memory\I64Store::class => $this->execInstrMemoryI64Store($instr),
            Instrs\Memory\I64Store16::class => $this->execInstrMemoryI64Store16($instr),
            Instrs\Memory\I64Store32::class => $this->execInstrMemoryI64Store32($instr),
            Instrs\Memory\I64Store8::class => $this->execInstrMemoryI64Store8($instr),
            Instrs\Memory\MemoryCopy::class => $this->execInstrMemoryMemoryCopy($instr),
            Instrs\Memory\MemoryFill::class => $this->execInstrMemoryMemoryFill($instr),
            Instrs\Memory\MemoryGrow::class => $this->execInstrMemoryMemoryGrow($instr),
            Instrs\Memory\MemoryInit::class => $this->execInstrMemoryMemoryInit($instr),
            Instrs\Memory\MemorySize::class => $this->execInstrMemoryMemorySize($instr),
            Instrs\Control\Block::class => $this->execInstrControlBlock($instr),
            Instrs\Control\Br::class => $this->execInstrControlBr($instr),
            Instrs\Control\BrIf::class => $this->execInstrControlBrIf($instr),
            Instrs\Control\BrTable::class => $this->execInstrControlBrTable($instr),
            Instrs\Control\Call::class => $this->execInstrControlCall($instr),
            Instrs\Control\CallIndirect::class => $this->execInstrControlCallIndirect($instr),
            Instrs\Control\Else_::class => $this->execInstrControlElse_($instr),
            Instrs\Control\End::class => $this->execInstrControlEnd($instr),
            Instrs\Control\If_::class => $this->execInstrControlIf_($instr),
            Instrs\Control\Loop::class => $this->execInstrControlLoop($instr),
            Instrs\Control\Nop::class => $this->execInstrControlNop($instr),
            Instrs\Control\Return_::class => $this->execInstrControlReturn_($instr),
            Instrs\Control\Unreachable::class => $this->execInstrControlUnreachable($instr),
            default => throw new RuntimeException("invalid instruction"),
        };
    }

    private function execInstrNumericF32Abs(Instrs\Numeric\F32Abs $instr): void
    {
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::f32Abs($x));
    }

    private function execInstrNumericF32Add(Instrs\Numeric\F32Add $instr): void
    {
        $y = $this->stack->popFloat();
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::f32Add($x, $y));
    }

    private function execInstrNumericF32Ceil(Instrs\Numeric\F32Ceil $instr): void
    {
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::f32Ceil($x));
    }

    private function execInstrNumericF32Const(Instrs\Numeric\F32Const $instr): void
    {
        $this->stack->pushValue($instr->value);
    }

    private function execInstrNumericF32ConvertI32S(Instrs\Numeric\F32ConvertI32S $instr): void
    {
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::f32ConvertI32S($x));
    }

    private function execInstrNumericF32ConvertI32U(Instrs\Numeric\F32ConvertI32U $instr): void
    {
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::f32ConvertI32U($x));
    }

    private function execInstrNumericF32ConvertI64S(Instrs\Numeric\F32ConvertI64S $instr): void
    {
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::f32ConvertI64S($x));
    }

    private function execInstrNumericF32ConvertI64U(Instrs\Numeric\F32ConvertI64U $instr): void
    {
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::f32ConvertI64U($x));
    }

    private function execInstrNumericF32CopySign(Instrs\Numeric\F32CopySign $instr): void
    {
        $y = $this->stack->popFloat();
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::f32CopySign($x, $y));
    }

    private function execInstrNumericF32DemoteF64(Instrs\Numeric\F32DemoteF64 $instr): void
    {
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::f32DemoteF64($x));
    }

    private function execInstrNumericF32Div(Instrs\Numeric\F32Div $instr): void
    {
        $y = $this->stack->popFloat();
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::f32Div($x, $y));
    }

    private function execInstrNumericF32Eq(Instrs\Numeric\F32Eq $instr): void
    {
        $y = $this->stack->popFloat();
        $x = $this->stack->popFloat();
        $this->stack->pushBool(NumericOps::f32Eq($x, $y));
    }

    private function execInstrNumericF32Floor(Instrs\Numeric\F32Floor $instr): void
    {
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::f32Floor($x));
    }

    private function execInstrNumericF32Ge(Instrs\Numeric\F32Ge $instr): void
    {
        $y = $this->stack->popFloat();
        $x = $this->stack->popFloat();
        $this->stack->pushBool(NumericOps::f32Ge($x, $y));
    }

    private function execInstrNumericF32Gt(Instrs\Numeric\F32Gt $instr): void
    {
        $y = $this->stack->popFloat();
        $x = $this->stack->popFloat();
        $this->stack->pushBool(NumericOps::f32Gt($x, $y));
    }

    private function execInstrNumericF32Le(Instrs\Numeric\F32Le $instr): void
    {
        $y = $this->stack->popFloat();
        $x = $this->stack->popFloat();
        $this->stack->pushBool(NumericOps::f32Le($x, $y));
    }

    private function execInstrNumericF32Lt(Instrs\Numeric\F32Lt $instr): void
    {
        $y = $this->stack->popFloat();
        $x = $this->stack->popFloat();
        $this->stack->pushBool(NumericOps::f32Lt($x, $y));
    }

    private function execInstrNumericF32Max(Instrs\Numeric\F32Max $instr): void
    {
        $y = $this->stack->popFloat();
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::f32Max($x, $y));
    }

    private function execInstrNumericF32Min(Instrs\Numeric\F32Min $instr): void
    {
        $y = $this->stack->popFloat();
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::f32Min($x, $y));
    }

    private function execInstrNumericF32Mul(Instrs\Numeric\F32Mul $instr): void
    {
        $y = $this->stack->popFloat();
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::f32Mul($x, $y));
    }

    private function execInstrNumericF32Ne(Instrs\Numeric\F32Ne $instr): void
    {
        $y = $this->stack->popFloat();
        $x = $this->stack->popFloat();
        $this->stack->pushBool(NumericOps::f32Ne($x, $y));
    }

    private function execInstrNumericF32Nearest(Instrs\Numeric\F32Nearest $instr): void
    {
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::f32Nearest($x));
    }

    private function execInstrNumericF32Neg(Instrs\Numeric\F32Neg $instr): void
    {
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::f32Neg($x));
    }

    private function execInstrNumericF32ReinterpretI32(Instrs\Numeric\F32ReinterpretI32 $instr): void
    {
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::f32ReinterpretI32($x));
    }

    private function execInstrNumericF32ReinterpretI64(Instrs\Numeric\F32ReinterpretI64 $instr): void
    {
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::f32ReinterpretI64($x));
    }

    private function execInstrNumericF32Sqrt(Instrs\Numeric\F32Sqrt $instr): void
    {
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::f32Sqrt($x));
    }

    private function execInstrNumericF32Sub(Instrs\Numeric\F32Sub $instr): void
    {
        $y = $this->stack->popFloat();
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::f32Sub($x, $y));
    }

    private function execInstrNumericF32Trunc(Instrs\Numeric\F32Trunc $instr): void
    {
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::f32Trunc($x));
    }

    private function execInstrNumericF64Abs(Instrs\Numeric\F64Abs $instr): void
    {
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::f64Abs($x));
    }

    private function execInstrNumericF64Add(Instrs\Numeric\F64Add $instr): void
    {
        $y = $this->stack->popFloat();
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::f64Add($x, $y));
    }

    private function execInstrNumericF64Ceil(Instrs\Numeric\F64Ceil $instr): void
    {
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::f64Ceil($x));
    }

    private function execInstrNumericF64Const(Instrs\Numeric\F64Const $instr): void
    {
        $this->stack->pushValue($instr->value);
    }

    private function execInstrNumericF64ConvertI32S(Instrs\Numeric\F64ConvertI32S $instr): void
    {
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::f64ConvertI32S($x));
    }

    private function execInstrNumericF64ConvertI32U(Instrs\Numeric\F64ConvertI32U $instr): void
    {
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::f64ConvertI32U($x));
    }

    private function execInstrNumericF64ConvertI64S(Instrs\Numeric\F64ConvertI64S $instr): void
    {
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::f64ConvertI64S($x));
    }

    private function execInstrNumericF64ConvertI64U(Instrs\Numeric\F64ConvertI64U $instr): void
    {
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::f64ConvertI64U($x));
    }

    private function execInstrNumericF64CopySign(Instrs\Numeric\F64CopySign $instr): void
    {
        $y = $this->stack->popFloat();
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::f64CopySign($x, $y));
    }

    private function execInstrNumericF64Div(Instrs\Numeric\F64Div $instr): void
    {
        $y = $this->stack->popFloat();
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::f64Div($x, $y));
    }

    private function execInstrNumericF64Eq(Instrs\Numeric\F64Eq $instr): void
    {
        $y = $this->stack->popFloat();
        $x = $this->stack->popFloat();
        $this->stack->pushBool(NumericOps::f64Eq($x, $y));
    }

    private function execInstrNumericF64Floor(Instrs\Numeric\F64Floor $instr): void
    {
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::f64Floor($x));
    }

    private function execInstrNumericF64Ge(Instrs\Numeric\F64Ge $instr): void
    {
        $y = $this->stack->popFloat();
        $x = $this->stack->popFloat();
        $this->stack->pushBool(NumericOps::f64Ge($x, $y));
    }

    private function execInstrNumericF64Gt(Instrs\Numeric\F64Gt $instr): void
    {
        $y = $this->stack->popFloat();
        $x = $this->stack->popFloat();
        $this->stack->pushBool(NumericOps::f64Gt($x, $y));
    }

    private function execInstrNumericF64Le(Instrs\Numeric\F64Le $instr): void
    {
        $y = $this->stack->popFloat();
        $x = $this->stack->popFloat();
        $this->stack->pushBool(NumericOps::f64Le($x, $y));
    }

    private function execInstrNumericF64Lt(Instrs\Numeric\F64Lt $instr): void
    {
        $y = $this->stack->popFloat();
        $x = $this->stack->popFloat();
        $this->stack->pushBool(NumericOps::f64Lt($x, $y));
    }

    private function execInstrNumericF64Max(Instrs\Numeric\F64Max $instr): void
    {
        $y = $this->stack->popFloat();
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::f64Max($x, $y));
    }

    private function execInstrNumericF64Min(Instrs\Numeric\F64Min $instr): void
    {
        $y = $this->stack->popFloat();
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::f64Min($x, $y));
    }

    private function execInstrNumericF64Mul(Instrs\Numeric\F64Mul $instr): void
    {
        $y = $this->stack->popFloat();
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::f64Mul($x, $y));
    }

    private function execInstrNumericF64Ne(Instrs\Numeric\F64Ne $instr): void
    {
        $y = $this->stack->popFloat();
        $x = $this->stack->popFloat();
        $this->stack->pushBool(NumericOps::f64Ne($x, $y));
    }

    private function execInstrNumericF64Nearest(Instrs\Numeric\F64Nearest $instr): void
    {
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::f64Nearest($x));
    }

    private function execInstrNumericF64Neg(Instrs\Numeric\F64Neg $instr): void
    {
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::f64Neg($x));
    }

    private function execInstrNumericF64PromoteF32(Instrs\Numeric\F64PromoteF32 $instr): void
    {
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::f64PromoteF32($x));
    }

    private function execInstrNumericF64ReinterpretI32(Instrs\Numeric\F64ReinterpretI32 $instr): void
    {
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::f64ReinterpretI32($x));
    }

    private function execInstrNumericF64ReinterpretI64(Instrs\Numeric\F64ReinterpretI64 $instr): void
    {
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::f64ReinterpretI64($x));
    }

    private function execInstrNumericF64Sqrt(Instrs\Numeric\F64Sqrt $instr): void
    {
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::f64Sqrt($x));
    }

    private function execInstrNumericF64Sub(Instrs\Numeric\F64Sub $instr): void
    {
        $y = $this->stack->popFloat();
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::f64Sub($x, $y));
    }

    private function execInstrNumericF64Trunc(Instrs\Numeric\F64Trunc $instr): void
    {
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::f64Trunc($x));
    }

    private function execInstrNumericI32Add(Instrs\Numeric\I32Add $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i32Add($x, $y));
    }

    private function execInstrNumericI32And(Instrs\Numeric\I32And $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i32And($x, $y));
    }

    private function execInstrNumericI32Clz(Instrs\Numeric\I32Clz $instr): void
    {
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i32Clz($x));
    }

    private function execInstrNumericI32Const(Instrs\Numeric\I32Const $instr): void
    {
        $this->stack->pushValue($instr->value);
    }

    private function execInstrNumericI32Ctz(Instrs\Numeric\I32Ctz $instr): void
    {
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i32Ctz($x));
    }

    private function execInstrNumericI32DivS(Instrs\Numeric\I32DivS $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $result = NumericOps::i32DivS($x, $y);
        if (!is_int($result)) {
            throw new TrapException($instr::opName() . 'invalid operation', trapKind: $result);
        }
        $this->stack->pushValue($result);
    }

    private function execInstrNumericI32DivU(Instrs\Numeric\I32DivU $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $result = NumericOps::i32DivU($x, $y);
        if (!is_int($result)) {
            throw new TrapException($instr::opName() . 'invalid operation', trapKind: $result);
        }
        $this->stack->pushValue($result);
    }

    private function execInstrNumericI32Eq(Instrs\Numeric\I32Eq $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushBool(NumericOps::i32Eq($x, $y));
    }

    private function execInstrNumericI32Eqz(Instrs\Numeric\I32Eqz $instr): void
    {
        $x = $this->stack->popInt();
        $this->stack->pushBool(NumericOps::i32Eqz($x));
    }

    private function execInstrNumericI32Extend16S(Instrs\Numeric\I32Extend16S $instr): void
    {
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i32Extend16S($x));
    }

    private function execInstrNumericI32Extend8S(Instrs\Numeric\I32Extend8S $instr): void
    {
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i32Extend8S($x));
    }

    private function execInstrNumericI32GeS(Instrs\Numeric\I32GeS $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushBool(NumericOps::i32GeS($x, $y));
    }

    private function execInstrNumericI32GeU(Instrs\Numeric\I32GeU $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushBool(NumericOps::i32GeU($x, $y));
    }

    private function execInstrNumericI32GtS(Instrs\Numeric\I32GtS $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushBool(NumericOps::i32GtS($x, $y));
    }

    private function execInstrNumericI32GtU(Instrs\Numeric\I32GtU $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushBool(NumericOps::i32GtU($x, $y));
    }

    private function execInstrNumericI32LeS(Instrs\Numeric\I32LeS $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushBool(NumericOps::i32LeS($x, $y));
    }

    private function execInstrNumericI32LeU(Instrs\Numeric\I32LeU $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushBool(NumericOps::i32LeU($x, $y));
    }

    private function execInstrNumericI32LtS(Instrs\Numeric\I32LtS $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushBool(NumericOps::i32LtS($x, $y));
    }

    private function execInstrNumericI32LtU(Instrs\Numeric\I32LtU $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushBool(NumericOps::i32LtU($x, $y));
    }

    private function execInstrNumericI32Mul(Instrs\Numeric\I32Mul $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i32Mul($x, $y));
    }

    private function execInstrNumericI32Ne(Instrs\Numeric\I32Ne $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushBool(NumericOps::i32Ne($x, $y));
    }

    private function execInstrNumericI32Or(Instrs\Numeric\I32Or $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i32Or($x, $y));
    }

    private function execInstrNumericI32Popcnt(Instrs\Numeric\I32Popcnt $instr): void
    {
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i32Popcnt($x));
    }

    private function execInstrNumericI32ReinterpretF32(Instrs\Numeric\I32ReinterpretF32 $instr): void
    {
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::i32ReinterpretF32($x));
    }

    private function execInstrNumericI32ReinterpretF64(Instrs\Numeric\I32ReinterpretF64 $instr): void
    {
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::i32ReinterpretF64($x));
    }

    private function execInstrNumericI32RemS(Instrs\Numeric\I32RemS $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $result = NumericOps::i32RemS($x, $y);
        if (!is_int($result)) {
            throw new TrapException($instr::opName() . 'invalid operation', trapKind: $result);
        }
        $this->stack->pushValue($result);
    }

    private function execInstrNumericI32RemU(Instrs\Numeric\I32RemU $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $result = NumericOps::i32RemU($x, $y);
        if (!is_int($result)) {
            throw new TrapException($instr::opName() . 'invalid operation', trapKind: $result);
        }
        $this->stack->pushValue($result);
    }

    private function execInstrNumericI32RotL(Instrs\Numeric\I32RotL $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i32RotL($x, $y));
    }

    private function execInstrNumericI32RotR(Instrs\Numeric\I32RotR $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i32RotR($x, $y));
    }

    private function execInstrNumericI32Shl(Instrs\Numeric\I32Shl $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i32Shl($x, $y));
    }

    private function execInstrNumericI32ShrS(Instrs\Numeric\I32ShrS $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i32ShrS($x, $y));
    }

    private function execInstrNumericI32ShrU(Instrs\Numeric\I32ShrU $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i32ShrU($x, $y));
    }

    private function execInstrNumericI32Sub(Instrs\Numeric\I32Sub $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i32Sub($x, $y));
    }

    private function execInstrNumericI32TruncF32S(Instrs\Numeric\I32TruncF32S $instr): void
    {
        $x = $this->stack->popFloat();
        $result = NumericOps::i32TruncF32S($x);
        if (!is_int($result)) {
            throw new TrapException($instr::opName() . 'invalid operation', trapKind: $result);
        }
        $this->stack->pushValue($result);
    }

    private function execInstrNumericI32TruncF32U(Instrs\Numeric\I32TruncF32U $instr): void
    {
        $x = $this->stack->popFloat();
        $result = NumericOps::i32TruncF32U($x);
        if (!is_int($result)) {
            throw new TrapException($instr::opName() . 'invalid operation', trapKind: $result);
        }
        $this->stack->pushValue($result);
    }

    private function execInstrNumericI32TruncF64S(Instrs\Numeric\I32TruncF64S $instr): void
    {
        $x = $this->stack->popFloat();
        $result = NumericOps::i32TruncF64S($x);
        if (!is_int($result)) {
            throw new TrapException($instr::opName() . 'invalid operation', trapKind: $result);
        }
        $this->stack->pushValue($result);
    }

    private function execInstrNumericI32TruncF64U(Instrs\Numeric\I32TruncF64U $instr): void
    {
        $x = $this->stack->popFloat();
        $result = NumericOps::i32TruncF64U($x);
        if (!is_int($result)) {
            throw new TrapException($instr::opName() . 'invalid operation', trapKind: $result);
        }
        $this->stack->pushValue($result);
    }

    private function execInstrNumericI32TruncSatF32S(Instrs\Numeric\I32TruncSatF32S $instr): void
    {
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::i32TruncSatF32S($x));
    }

    private function execInstrNumericI32TruncSatF32U(Instrs\Numeric\I32TruncSatF32U $instr): void
    {
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::i32TruncSatF32U($x));
    }

    private function execInstrNumericI32TruncSatF64S(Instrs\Numeric\I32TruncSatF64S $instr): void
    {
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::i32TruncSatF64S($x));
    }

    private function execInstrNumericI32TruncSatF64U(Instrs\Numeric\I32TruncSatF64U $instr): void
    {
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::i32TruncSatF64U($x));
    }

    private function execInstrNumericI32WrapI64(Instrs\Numeric\I32WrapI64 $instr): void
    {
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i32WrapI64($x));
    }

    private function execInstrNumericI32Xor(Instrs\Numeric\I32Xor $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i32Xor($x, $y));
    }

    private function execInstrNumericI64Add(Instrs\Numeric\I64Add $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i64Add($x, $y));
    }

    private function execInstrNumericI64And(Instrs\Numeric\I64And $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i64And($x, $y));
    }

    private function execInstrNumericI64Clz(Instrs\Numeric\I64Clz $instr): void
    {
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i64Clz($x));
    }

    private function execInstrNumericI64Const(Instrs\Numeric\I64Const $instr): void
    {
        $this->stack->pushValue($instr->value);
    }

    private function execInstrNumericI64Ctz(Instrs\Numeric\I64Ctz $instr): void
    {
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i64Ctz($x));
    }

    private function execInstrNumericI64DivS(Instrs\Numeric\I64DivS $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $result = NumericOps::i64DivS($x, $y);
        if (!is_int($result)) {
            throw new TrapException($instr::opName() . 'invalid operation', trapKind: $result);
        }
        $this->stack->pushValue($result);
    }

    private function execInstrNumericI64DivU(Instrs\Numeric\I64DivU $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $result = NumericOps::i64DivU($x, $y);
        if (!is_int($result)) {
            throw new TrapException($instr::opName() . 'invalid operation', trapKind: $result);
        }
        $this->stack->pushValue($result);
    }

    private function execInstrNumericI64Eq(Instrs\Numeric\I64Eq $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushBool(NumericOps::i64Eq($x, $y));
    }

    private function execInstrNumericI64Eqz(Instrs\Numeric\I64Eqz $instr): void
    {
        $x = $this->stack->popInt();
        $this->stack->pushBool(NumericOps::i64Eqz($x));
    }

    private function execInstrNumericI64Extend16S(Instrs\Numeric\I64Extend16S $instr): void
    {
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i64Extend16S($x));
    }

    private function execInstrNumericI64Extend32S(Instrs\Numeric\I64Extend32S $instr): void
    {
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i64Extend32S($x));
    }

    private function execInstrNumericI64Extend8S(Instrs\Numeric\I64Extend8S $instr): void
    {
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i64Extend8S($x));
    }

    private function execInstrNumericI64ExtendI32S(Instrs\Numeric\I64ExtendI32S $instr): void
    {
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i64ExtendI32S($x));
    }

    private function execInstrNumericI64ExtendI32U(Instrs\Numeric\I64ExtendI32U $instr): void
    {
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i64ExtendI32U($x));
    }

    private function execInstrNumericI64GeS(Instrs\Numeric\I64GeS $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushBool(NumericOps::i64GeS($x, $y));
    }

    private function execInstrNumericI64GeU(Instrs\Numeric\I64GeU $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushBool(NumericOps::i64GeU($x, $y));
    }

    private function execInstrNumericI64GtS(Instrs\Numeric\I64GtS $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushBool(NumericOps::i64GtS($x, $y));
    }

    private function execInstrNumericI64GtU(Instrs\Numeric\I64GtU $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushBool(NumericOps::i64GtU($x, $y));
    }

    private function execInstrNumericI64LeS(Instrs\Numeric\I64LeS $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushBool(NumericOps::i64LeS($x, $y));
    }

    private function execInstrNumericI64LeU(Instrs\Numeric\I64LeU $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushBool(NumericOps::i64LeU($x, $y));
    }

    private function execInstrNumericI64LtS(Instrs\Numeric\I64LtS $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushBool(NumericOps::i64LtS($x, $y));
    }

    private function execInstrNumericI64LtU(Instrs\Numeric\I64LtU $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushBool(NumericOps::i64LtU($x, $y));
    }

    private function execInstrNumericI64Mul(Instrs\Numeric\I64Mul $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i64Mul($x, $y));
    }

    private function execInstrNumericI64Ne(Instrs\Numeric\I64Ne $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushBool(NumericOps::i64Ne($x, $y));
    }

    private function execInstrNumericI64Or(Instrs\Numeric\I64Or $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i64Or($x, $y));
    }

    private function execInstrNumericI64Popcnt(Instrs\Numeric\I64Popcnt $instr): void
    {
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i64Popcnt($x));
    }

    private function execInstrNumericI64ReinterpretF32(Instrs\Numeric\I64ReinterpretF32 $instr): void
    {
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::i64ReinterpretF32($x));
    }

    private function execInstrNumericI64ReinterpretF64(Instrs\Numeric\I64ReinterpretF64 $instr): void
    {
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::i64ReinterpretF64($x));
    }

    private function execInstrNumericI64RemS(Instrs\Numeric\I64RemS $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $result = NumericOps::i64RemS($x, $y);
        if (!is_int($result)) {
            throw new TrapException($instr::opName() . 'invalid operation', trapKind: $result);
        }
        $this->stack->pushValue($result);
    }

    private function execInstrNumericI64RemU(Instrs\Numeric\I64RemU $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $result = NumericOps::i64RemU($x, $y);
        if (!is_int($result)) {
            throw new TrapException($instr::opName() . 'invalid operation', trapKind: $result);
        }
        $this->stack->pushValue($result);
    }

    private function execInstrNumericI64RotL(Instrs\Numeric\I64RotL $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i64RotL($x, $y));
    }

    private function execInstrNumericI64RotR(Instrs\Numeric\I64RotR $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i64RotR($x, $y));
    }

    private function execInstrNumericI64Shl(Instrs\Numeric\I64Shl $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i64Shl($x, $y));
    }

    private function execInstrNumericI64ShrS(Instrs\Numeric\I64ShrS $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i64ShrS($x, $y));
    }

    private function execInstrNumericI64ShrU(Instrs\Numeric\I64ShrU $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i64ShrU($x, $y));
    }

    private function execInstrNumericI64Sub(Instrs\Numeric\I64Sub $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i64Sub($x, $y));
    }

    private function execInstrNumericI64TruncF32S(Instrs\Numeric\I64TruncF32S $instr): void
    {
        $x = $this->stack->popFloat();
        $result = NumericOps::i64TruncF32S($x);
        if (!is_int($result)) {
            throw new TrapException($instr::opName() . 'invalid operation', trapKind: $result);
        }
        $this->stack->pushValue($result);
    }

    private function execInstrNumericI64TruncF32U(Instrs\Numeric\I64TruncF32U $instr): void
    {
        $x = $this->stack->popFloat();
        $result = NumericOps::i64TruncF32U($x);
        if (!is_int($result)) {
            throw new TrapException($instr::opName() . 'invalid operation', trapKind: $result);
        }
        $this->stack->pushValue($result);
    }

    private function execInstrNumericI64TruncF64S(Instrs\Numeric\I64TruncF64S $instr): void
    {
        $x = $this->stack->popFloat();
        $result = NumericOps::i64TruncF64S($x);
        if (!is_int($result)) {
            throw new TrapException($instr::opName() . 'invalid operation', trapKind: $result);
        }
        $this->stack->pushValue($result);
    }

    private function execInstrNumericI64TruncF64U(Instrs\Numeric\I64TruncF64U $instr): void
    {
        $x = $this->stack->popFloat();
        $result = NumericOps::i64TruncF64U($x);
        if (!is_int($result)) {
            throw new TrapException($instr::opName() . 'invalid operation', trapKind: $result);
        }
        $this->stack->pushValue($result);
    }

    private function execInstrNumericI64TruncSatF32S(Instrs\Numeric\I64TruncSatF32S $instr): void
    {
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::i64TruncSatF32S($x));
    }

    private function execInstrNumericI64TruncSatF32U(Instrs\Numeric\I64TruncSatF32U $instr): void
    {
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::i64TruncSatF32U($x));
    }

    private function execInstrNumericI64TruncSatF64S(Instrs\Numeric\I64TruncSatF64S $instr): void
    {
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::i64TruncSatF64S($x));
    }

    private function execInstrNumericI64TruncSatF64U(Instrs\Numeric\I64TruncSatF64U $instr): void
    {
        $x = $this->stack->popFloat();
        $this->stack->pushValue(NumericOps::i64TruncSatF64U($x));
    }

    private function execInstrNumericI64Xor(Instrs\Numeric\I64Xor $instr): void
    {
        $y = $this->stack->popInt();
        $x = $this->stack->popInt();
        $this->stack->pushValue(NumericOps::i64Xor($x, $y));
    }

    private function execInstrReferenceRefFunc(Instrs\Reference\RefFunc $instr): void
    {
        $x = $instr->func;
        $f = $this->stack->currentFrame();
        $a = $f->module->funcAddrs[$x];
        $this->stack->pushRefFunc($a);
    }

    private function execInstrReferenceRefIsNull(Instrs\Reference\RefIsNull $instr): void
    {
        $val = $this->stack->popRef();
        $this->stack->pushBool($val instanceof Refs\RefNull);
    }

    private function execInstrReferenceRefNull(Instrs\Reference\RefNull $instr): void
    {
        $t = $instr->type;
        $this->stack->pushRefNull($t);
    }

    private function execInstrParametricDrop(Instrs\Parametric\Drop $instr): void
    {
        $this->stack->popValue();
    }

    private function execInstrParametricSelect(Instrs\Parametric\Select $instr): void
    {
        $c = $this->stack->popInt();
        $val2 = $this->stack->popValue();
        $val1 = $this->stack->popValue();
        if ($c !== 0) {
            $this->stack->pushValue($val1);
        } else {
            $this->stack->pushValue($val2);
        }
    }

    private function execInstrVariableGlobalGet(Instrs\Variable\GlobalGet $instr): void
    {
        $x = $instr->var;
        $f = $this->stack->currentFrame();
        $a = $f->module->globalAddrs[$x];
        $glob = $this->store->globals[$a];
        $val = $glob->value;
        $this->stack->pushValue($val);
    }

    private function execInstrVariableGlobalSet(Instrs\Variable\GlobalSet $instr): void
    {
        $x = $instr->var;
        $f = $this->stack->currentFrame();
        $a = $f->module->globalAddrs[$x];
        $glob = $this->store->globals[$a];
        $val = $this->stack->popValue();
        $glob->value = $val;
    }

    private function execInstrVariableLocalGet(Instrs\Variable\LocalGet $instr): void
    {
        $x = $instr->var;
        $f = $this->stack->currentFrame();
        $val = $f->locals[$x] ?? null;
        if ($val === null) {
            throw new RuntimeException("local.get: local $x not found in [$f->debugName]");
        }
        $this->stack->pushValue($val);
    }

    private function execInstrVariableLocalSet(Instrs\Variable\LocalSet $instr): void
    {
        $x = $instr->var;
        $f = $this->stack->currentFrame();
        $val = $this->stack->popValue();
        // @phpstan-ignore-next-line
        $f->locals[$x] = $val;
    }

    private function execInstrVariableLocalTee(Instrs\Variable\LocalTee $instr): void
    {
        $x = $instr->var;
        $f = $this->stack->currentFrame();
        $val = $this->stack->popValue();
        // @phpstan-ignore-next-line
        $f->locals[$x] = $val;
        $this->stack->pushValue($val);
    }

    private function execInstrTableElemDrop(Instrs\Table\ElemDrop $instr): void
    {
        $x = $instr->elem;
        $f = $this->stack->currentFrame();
        $a = $f->module->elemAddrs[$x];
        $elem = $this->store->elems[$a];
        // @phpstan-ignore-next-line
        $this->store->elems[$a] = new ElemInst($elem->type, []);
    }

    private function execInstrTableTableCopy(Instrs\Table\TableCopy $instr): void
    {
        $x = $instr->to;
        $y = $instr->from;
        $f = $this->stack->currentFrame();
        $taX = $f->module->tableAddrs[$x];
        $tabX = $this->store->tables[$taX];
        $taY = $f->module->tableAddrs[$y];
        $tabY = $this->store->tables[$taY];
        $n = NumericOps::convertS32ToU32($this->stack->popInt());
        $s = NumericOps::convertS32ToU32($this->stack->popInt());
        $d = NumericOps::convertS32ToU32($this->stack->popInt());
        if (count($tabX->elem) < $d + $n || count($tabY->elem) < $s + $n) {
            throw new TrapException("table.copy: out of bounds", trapKind: TrapKind::OutOfBoundsTableAccess);
        }
        if ($n === 0 || ($x === $y && $d === $s)) {
            return;
        }
        for ($i = 0; $i < $n; $i++) {
            $s_ = ($d < $s) ? ($s + $i) : ($s + $n - 1 - $i);
            $d_ = ($d < $s) ? ($d + $i) : ($d + $n - 1 - $i);
            // @phpstan-ignore-next-line
            $tabX->elem[$d_] = $tabY->elem[$s_];
        }
    }

    private function execInstrTableTableFill(Instrs\Table\TableFill $instr): void
    {
        $x = $instr->table;
        $f = $this->stack->currentFrame();
        $ta = $f->module->tableAddrs[$x];
        $tab = $this->store->tables[$ta];
        $n = NumericOps::convertS32ToU32($this->stack->popInt());
        $val = $this->stack->popRef();
        $i = NumericOps::convertS32ToU32($this->stack->popInt());
        if (count($tab->elem) < $i + $n) {
            throw new TrapException("table.fill: out of bounds", trapKind: TrapKind::OutOfBoundsTableAccess);
        }
        for ($k = 0; $k < $n; $k++) {
            // @phpstan-ignore-next-line
            $tab->elem[$i + $k] = $val;
        }
    }

    private function execInstrTableTableGet(Instrs\Table\TableGet $instr): void
    {
        $x = $instr->table;
        $f = $this->stack->currentFrame();
        $a = $f->module->tableAddrs[$x];
        $tab = $this->store->tables[$a];
        $i = NumericOps::convertS32ToU32($this->stack->popInt());
        if (count($tab->elem) <= $i) {
            throw new TrapException("table.get: out of bounds", trapKind: TrapKind::OutOfBoundsTableAccess);
        }
        $val = $tab->elem[$i];
        $this->stack->pushValue($val);
    }

    private function execInstrTableTableGrow(Instrs\Table\TableGrow $instr): void
    {
        $x = $instr->table;
        $f = $this->stack->currentFrame();
        $a = $f->module->tableAddrs[$x];
        $tab = $this->store->tables[$a];
        $sz = count($tab->elem);
        $n = NumericOps::convertS32ToU32($this->stack->popInt());
        $val = $this->stack->popRef();

        $len = $sz + $n;
        if ((1 << 32) <= $len) {
            $this->stack->pushValue(-1);
            return;
        }

        $limits = $tab->type->limits;
        $limits_ = new Limits($len, $limits->max);
        if (!$limits_->isValid()) {
            $this->stack->pushValue(-1);
            return;
        }

        for ($i = 0; $i < $n; $i++) {
            $tab->elem[] = $val;
        }
        $tab->type = new TableType($limits_, $tab->type->refType);

        $this->stack->pushValue($sz);
    }

    private function execInstrTableTableInit(Instrs\Table\TableInit $instr): void
    {
        $x = $instr->to;
        $y = $instr->from;
        $f = $this->stack->currentFrame();
        $ta = $f->module->tableAddrs[$x];
        $tab = $this->store->tables[$ta];
        $ea = $f->module->elemAddrs[$y];
        $elem = $this->store->elems[$ea];
        $n = NumericOps::convertS32ToU32($this->stack->popInt());
        $s = NumericOps::convertS32ToU32($this->stack->popInt());
        $d = NumericOps::convertS32ToU32($this->stack->popInt());
        if (count($elem->elem) < $s + $n) {
            throw new TrapException("table.init: out of bounds", trapKind: TrapKind::OutOfBoundsTableAccess);
        }
        if (count($tab->elem) < $d + $n) {
            throw new TrapException("table.init: out of bounds", trapKind: TrapKind::OutOfBoundsTableAccess);
        }
        for ($i = 0; $i < $n; $i++) {
            // @phpstan-ignore-next-line
            $tab->elem[$d + $i] = $elem->elem[$s + $i];
        }
    }

    private function execInstrTableTableSet(Instrs\Table\TableSet $instr): void
    {
        $x = $instr->table;
        $f = $this->stack->currentFrame();
        $a = $f->module->tableAddrs[$x];
        $tab = $this->store->tables[$a];
        $val = $this->stack->popRef();
        $i = NumericOps::convertS32ToU32($this->stack->popInt());
        if (count($tab->elem) <= $i) {
            throw new TrapException("table.set: out of bounds", trapKind: TrapKind::OutOfBoundsTableAccess);
        }
        // @phpstan-ignore-next-line
        $tab->elem[$i] = $val;
    }

    private function execInstrTableTableSize(Instrs\Table\TableSize $instr): void
    {
        $x = $instr->table;
        $f = $this->stack->currentFrame();
        $a = $f->module->tableAddrs[$x];
        $tab = $this->store->tables[$a];
        $sz = count($tab->elem);
        $this->stack->pushValue($sz);
    }

    private function execInstrMemoryDataDrop(Instrs\Memory\DataDrop $instr): void
    {
        $x = $instr->data;
        $f = $this->stack->currentFrame();
        $a = $f->module->dataAddrs[$x];
        // @phpstan-ignore-next-line
        $this->store->datas[$a] = new DataInst([]);
    }

    private function execInstrMemoryF32Load(Instrs\Memory\F32Load $instr): void
    {
        $this->doLoadF32($instr->offset, $instr::opName());
    }

    private function execInstrMemoryF32Store(Instrs\Memory\F32Store $instr): void
    {
        $offset = $instr->offset;
        $f = $this->stack->currentFrame();
        $a = $f->module->memAddrs[0];
        $mem = $this->store->mems[$a];
        $c = $this->stack->popFloat();
        $i = NumericOps::convertS32ToU32($this->stack->popInt());
        $ea = $i + $offset;
        $ok = $mem->storeF32($ea, $c);
        if (!$ok) {
            throw new TrapException($instr::opName() . ": out of bounds", trapKind: TrapKind::OutOfBoundsMemoryAccess);
        }
    }

    private function execInstrMemoryF64Load(Instrs\Memory\F64Load $instr): void
    {
        $this->doLoadF64($instr->offset, $instr::opName());
    }

    private function execInstrMemoryF64Store(Instrs\Memory\F64Store $instr): void
    {
        $offset = $instr->offset;
        $f = $this->stack->currentFrame();
        $a = $f->module->memAddrs[0];
        $mem = $this->store->mems[$a];
        $c = $this->stack->popFloat();
        $i = NumericOps::convertS32ToU32($this->stack->popInt());
        $ea = $i + $offset;
        $ok = $mem->storeF64($ea, $c);
        if (!$ok) {
            throw new TrapException($instr::opName() . ": out of bounds", trapKind: TrapKind::OutOfBoundsMemoryAccess);
        }
    }

    private function execInstrMemoryI32Load(Instrs\Memory\I32Load $instr): void
    {
        $offset = $instr->offset;
        $f = $this->stack->currentFrame();
        $a = $f->module->memAddrs[0];
        $mem = $this->store->mems[$a];
        $i = NumericOps::convertS32ToU32($this->stack->popInt());
        $ea = $i + $offset;
        $c = $mem->loadI32_s32($ea);
        if ($c === null) {
            throw new TrapException($instr::opName() . ": out of bounds", trapKind: TrapKind::OutOfBoundsMemoryAccess);
        }
        $this->stack->pushValue($c);
    }

    private function execInstrMemoryI32Load16S(Instrs\Memory\I32Load16S $instr): void
    {
        $offset = $instr->offset;
        $f = $this->stack->currentFrame();
        $a = $f->module->memAddrs[0];
        $mem = $this->store->mems[$a];
        $i = NumericOps::convertS32ToU32($this->stack->popInt());
        $ea = $i + $offset;
        $c = $mem->loadI32_s16($ea);
        if ($c === null) {
            throw new TrapException($instr::opName() . ": out of bounds", trapKind: TrapKind::OutOfBoundsMemoryAccess);
        }
        $this->stack->pushValue($c);
    }

    private function execInstrMemoryI32Load16U(Instrs\Memory\I32Load16U $instr): void
    {
        $offset = $instr->offset;
        $f = $this->stack->currentFrame();
        $a = $f->module->memAddrs[0];
        $mem = $this->store->mems[$a];
        $i = NumericOps::convertS32ToU32($this->stack->popInt());
        $ea = $i + $offset;
        $c = $mem->loadI32_u16($ea);
        if ($c === null) {
            throw new TrapException($instr::opName() . ": out of bounds", trapKind: TrapKind::OutOfBoundsMemoryAccess);
        }
        $this->stack->pushValue($c);
    }

    private function execInstrMemoryI32Load8S(Instrs\Memory\I32Load8S $instr): void
    {
        $offset = $instr->offset;
        $f = $this->stack->currentFrame();
        $a = $f->module->memAddrs[0];
        $mem = $this->store->mems[$a];
        $i = NumericOps::convertS32ToU32($this->stack->popInt());
        $ea = $i + $offset;
        $c = $mem->loadI32_s8($ea);
        if ($c === null) {
            throw new TrapException($instr::opName() . ": out of bounds", trapKind: TrapKind::OutOfBoundsMemoryAccess);
        }
        $this->stack->pushValue($c);
    }

    private function execInstrMemoryI32Load8U(Instrs\Memory\I32Load8U $instr): void
    {
        $offset = $instr->offset;
        $f = $this->stack->currentFrame();
        $a = $f->module->memAddrs[0];
        $mem = $this->store->mems[$a];
        $i = NumericOps::convertS32ToU32($this->stack->popInt());
        $ea = $i + $offset;
        $c = $mem->loadI32_u8($ea);
        if ($c === null) {
            throw new TrapException($instr::opName() . ": out of bounds", trapKind: TrapKind::OutOfBoundsMemoryAccess);
        }
        $this->stack->pushValue($c);
    }

    private function execInstrMemoryI32Store(Instrs\Memory\I32Store $instr): void
    {
        $offset = $instr->offset;
        $f = $this->stack->currentFrame();
        $a = $f->module->memAddrs[0];
        $mem = $this->store->mems[$a];
        $c = $this->stack->popInt();
        $i = NumericOps::convertS32ToU32($this->stack->popInt());
        $ea = $i + $offset;
        $ok = $mem->storeI32_s32($ea, $c);
        if (!$ok) {
            throw new TrapException($instr::opName() . ": out of bounds", trapKind: TrapKind::OutOfBoundsMemoryAccess);
        }
    }

    private function execInstrMemoryI32Store16(Instrs\Memory\I32Store16 $instr): void
    {
        $offset = $instr->offset;
        $f = $this->stack->currentFrame();
        $a = $f->module->memAddrs[0];
        $mem = $this->store->mems[$a];
        $c = $this->stack->popInt();
        $i = NumericOps::convertS32ToU32($this->stack->popInt());
        $ea = $i + $offset;
        $ok = $mem->storeI32_s16($ea, $c);
        if (!$ok) {
            throw new TrapException($instr::opName() . ": out of bounds", trapKind: TrapKind::OutOfBoundsMemoryAccess);
        }
    }

    private function execInstrMemoryI32Store8(Instrs\Memory\I32Store8 $instr): void
    {
        $offset = $instr->offset;
        $f = $this->stack->currentFrame();
        $a = $f->module->memAddrs[0];
        $mem = $this->store->mems[$a];
        $c = $this->stack->popInt();
        $i = NumericOps::convertS32ToU32($this->stack->popInt());
        $ea = $i + $offset;
        $ok = $mem->storeI32_s8($ea, $c);
        if (!$ok) {
            throw new TrapException($instr::opName() . ": out of bounds", trapKind: TrapKind::OutOfBoundsMemoryAccess);
        }
    }

    private function execInstrMemoryI64Load(Instrs\Memory\I64Load $instr): void
    {
        $offset = $instr->offset;
        $f = $this->stack->currentFrame();
        $a = $f->module->memAddrs[0];
        $mem = $this->store->mems[$a];
        $i = NumericOps::convertS32ToU32($this->stack->popInt());
        $ea = $i + $offset;
        $c = $mem->loadI64_s64($ea);
        if ($c === null) {
            throw new TrapException($instr::opName() . ": out of bounds", trapKind: TrapKind::OutOfBoundsMemoryAccess);
        }
        $this->stack->pushValue($c);
    }

    private function execInstrMemoryI64Load16S(Instrs\Memory\I64Load16S $instr): void
    {
        $offset = $instr->offset;
        $f = $this->stack->currentFrame();
        $a = $f->module->memAddrs[0];
        $mem = $this->store->mems[$a];
        $i = NumericOps::convertS32ToU32($this->stack->popInt());
        $ea = $i + $offset;
        $c = $mem->loadI64_s16($ea);
        if ($c === null) {
            throw new TrapException($instr::opName() . ": out of bounds", trapKind: TrapKind::OutOfBoundsMemoryAccess);
        }
        $this->stack->pushValue($c);
    }

    private function execInstrMemoryI64Load16U(Instrs\Memory\I64Load16U $instr): void
    {
        $offset = $instr->offset;
        $f = $this->stack->currentFrame();
        $a = $f->module->memAddrs[0];
        $mem = $this->store->mems[$a];
        $i = NumericOps::convertS32ToU32($this->stack->popInt());
        $ea = $i + $offset;
        $c = $mem->loadI64_u16($ea);
        if ($c === null) {
            throw new TrapException($instr::opName() . ": out of bounds", trapKind: TrapKind::OutOfBoundsMemoryAccess);
        }
        $this->stack->pushValue($c);
    }

    private function execInstrMemoryI64Load32S(Instrs\Memory\I64Load32S $instr): void
    {
        $offset = $instr->offset;
        $f = $this->stack->currentFrame();
        $a = $f->module->memAddrs[0];
        $mem = $this->store->mems[$a];
        $i = NumericOps::convertS32ToU32($this->stack->popInt());
        $ea = $i + $offset;
        $c = $mem->loadI64_s32($ea);
        if ($c === null) {
            throw new TrapException($instr::opName() . ": out of bounds", trapKind: TrapKind::OutOfBoundsMemoryAccess);
        }
        $this->stack->pushValue($c);
    }

    private function execInstrMemoryI64Load32U(Instrs\Memory\I64Load32U $instr): void
    {
        $offset = $instr->offset;
        $f = $this->stack->currentFrame();
        $a = $f->module->memAddrs[0];
        $mem = $this->store->mems[$a];
        $i = NumericOps::convertS32ToU32($this->stack->popInt());
        $ea = $i + $offset;
        $c = $mem->loadI64_u32($ea);
        if ($c === null) {
            throw new TrapException($instr::opName() . ": out of bounds", trapKind: TrapKind::OutOfBoundsMemoryAccess);
        }
        $this->stack->pushValue($c);
    }

    private function execInstrMemoryI64Load8S(Instrs\Memory\I64Load8S $instr): void
    {
        $offset = $instr->offset;
        $f = $this->stack->currentFrame();
        $a = $f->module->memAddrs[0];
        $mem = $this->store->mems[$a];
        $i = NumericOps::convertS32ToU32($this->stack->popInt());
        $ea = $i + $offset;
        $c = $mem->loadI64_s8($ea);
        if ($c === null) {
            throw new TrapException($instr::opName() . ": out of bounds", trapKind: TrapKind::OutOfBoundsMemoryAccess);
        }
        $this->stack->pushValue($c);
    }

    private function execInstrMemoryI64Load8U(Instrs\Memory\I64Load8U $instr): void
    {
        $offset = $instr->offset;
        $f = $this->stack->currentFrame();
        $a = $f->module->memAddrs[0];
        $mem = $this->store->mems[$a];
        $i = NumericOps::convertS32ToU32($this->stack->popInt());
        $ea = $i + $offset;
        $c = $mem->loadI64_u8($ea);
        if ($c === null) {
            throw new TrapException($instr::opName() . ": out of bounds", trapKind: TrapKind::OutOfBoundsMemoryAccess);
        }
        $this->stack->pushValue($c);
    }

    private function execInstrMemoryI64Store(Instrs\Memory\I64Store $instr): void
    {
        $offset = $instr->offset;
        $f = $this->stack->currentFrame();
        $a = $f->module->memAddrs[0];
        $mem = $this->store->mems[$a];
        $c = $this->stack->popInt();
        $i = NumericOps::convertS32ToU32($this->stack->popInt());
        $ea = $i + $offset;
        $ok = $mem->storeI64_s64($ea, $c);
        if (!$ok) {
            throw new TrapException($instr::opName() . ": out of bounds: $ea >= " . $mem->size(), trapKind: TrapKind::OutOfBoundsMemoryAccess);
        }
    }

    private function execInstrMemoryI64Store16(Instrs\Memory\I64Store16 $instr): void
    {
        $offset = $instr->offset;
        $f = $this->stack->currentFrame();
        $a = $f->module->memAddrs[0];
        $mem = $this->store->mems[$a];
        $c = $this->stack->popInt();
        $i = NumericOps::convertS32ToU32($this->stack->popInt());
        $ea = $i + $offset;
        $ok = $mem->storeI64_s16($ea, $c);
        if (!$ok) {
            throw new TrapException($instr::opName() . ": out of bounds: $ea >= " . $mem->size(), trapKind: TrapKind::OutOfBoundsMemoryAccess);
        }
    }

    private function execInstrMemoryI64Store32(Instrs\Memory\I64Store32 $instr): void
    {
        $offset = $instr->offset;
        $f = $this->stack->currentFrame();
        $a = $f->module->memAddrs[0];
        $mem = $this->store->mems[$a];
        $c = $this->stack->popInt();
        $i = NumericOps::convertS32ToU32($this->stack->popInt());
        $ea = $i + $offset;
        $ok = $mem->storeI64_s32($ea, $c);
        if (!$ok) {
            throw new TrapException($instr::opName() . ": out of bounds: $ea >= " . $mem->size(), trapKind: TrapKind::OutOfBoundsMemoryAccess);
        }
    }

    private function execInstrMemoryI64Store8(Instrs\Memory\I64Store8 $instr): void
    {
        $offset = $instr->offset;
        $f = $this->stack->currentFrame();
        $a = $f->module->memAddrs[0];
        $mem = $this->store->mems[$a];
        $c = $this->stack->popInt();
        $i = NumericOps::convertS32ToU32($this->stack->popInt());
        $ea = $i + $offset;
        $ok = $mem->storeI64_s8($ea, $c);
        if (!$ok) {
            throw new TrapException($instr::opName() . ": out of bounds: $ea >= " . $mem->size(), trapKind: TrapKind::OutOfBoundsMemoryAccess);
        }
    }

    private function execInstrMemoryMemoryCopy(Instrs\Memory\MemoryCopy $instr): void
    {
        $f = $this->stack->currentFrame();
        $ma = $f->module->memAddrs[0];
        $mem = $this->store->mems[$ma];
        $n = NumericOps::convertS32ToU32($this->stack->popInt());
        $s = NumericOps::convertS32ToU32($this->stack->popInt());
        $d = NumericOps::convertS32ToU32($this->stack->popInt());
        if ($mem->size() < $s + $n || $mem->size() < $d + $n) {
            throw new TrapException("memory.copy: out of bounds", trapKind: TrapKind::OutOfBoundsMemoryAccess);
        }
        $mem->memcpy($d, $s, $n);
    }

    private function execInstrMemoryMemoryFill(Instrs\Memory\MemoryFill $instr): void
    {
        $f = $this->stack->currentFrame();
        $ma = $f->module->memAddrs[0];
        $mem = $this->store->mems[$ma];
        $n = NumericOps::convertS32ToU32($this->stack->popInt());
        $val = $this->stack->popInt();
        $d = NumericOps::convertS32ToU32($this->stack->popInt());
        if ($mem->size() < $d + $n) {
            throw new TrapException("memory.fill: out of bounds", trapKind: TrapKind::OutOfBoundsMemoryAccess);
        }
        $mem->memset($d, $val, $n);
    }

    private function execInstrMemoryMemoryGrow(Instrs\Memory\MemoryGrow $instr): void
    {
        $f = $this->stack->currentFrame();
        $a = $f->module->memAddrs[0];
        $mem = $this->store->mems[$a];
        $n = NumericOps::convertS32ToU32($this->stack->popInt());
        $result = $mem->grow($n);
        $this->stack->pushValue($result);
    }

    private function execInstrMemoryMemoryInit(Instrs\Memory\MemoryInit $instr): void
    {
        $x = $instr->data;
        $f = $this->stack->currentFrame();
        $ma = $f->module->memAddrs[0];
        $mem = $this->store->mems[$ma];
        $da = $f->module->dataAddrs[$x];
        $data = $this->store->datas[$da];
        $n = NumericOps::convertS32ToU32($this->stack->popInt());
        $s = NumericOps::convertS32ToU32($this->stack->popInt());
        $d = NumericOps::convertS32ToU32($this->stack->popInt());
        if (count($data->data) < $s + $n) {
            throw new TrapException("memory.init: out of bounds", trapKind: TrapKind::OutOfBoundsMemoryAccess);
        }
        if ($mem->size() < $d + $n) {
            throw new TrapException("memory.init: out of bounds", trapKind: TrapKind::OutOfBoundsMemoryAccess);
        }
        $mem->copyData($data->data, $s, $d, $n);
    }

    private function execInstrMemoryMemorySize(Instrs\Memory\MemorySize $instr): void
    {
        $f = $this->stack->currentFrame();
        $a = $f->module->memAddrs[0];
        $mem = $this->store->mems[$a];
        $szInByte = $mem->size();
        assert(is_int($szInByte / (64 * 1024)));
        $sz = $szInByte / (64 * 1024);
        $this->stack->pushValue($sz);
    }

    private function execInstrControlBlock(Instrs\Control\Block $instr): ?int
    {
        $blockType = $instr->type;
        $instrs = $instr->body;
        $f = $this->stack->currentFrame();
        $bt = self::expandBlockType($blockType, $f->module);
        $params = array_reverse($this->stack->popNValues(count($bt->params)));
        $n = count($bt->results);
        $l = new Label($n);
        $result = $this->execInstrs($instrs, $l, $params);
        if ($result === null) {
            // Do nothing.
        } elseif ($result === -1) {
            return -1;
        } elseif ($result === 0) {
            $this->deactivateLabel($n);
        } else {
            $this->deactivateLabel(null);
            return $result - 1;
        }
        return null;
    }

    private function execInstrControlBr(Instrs\Control\Br $instr): int
    {
        return $instr->label;
    }

    private function execInstrControlBrIf(Instrs\Control\BrIf $instr): ?int
    {
        $l = $instr->label;
        $c = $this->stack->popInt();
        if ($c !== 0) {
            return $l;
        } else {
            return null;
        }
    }

    private function execInstrControlBrTable(Instrs\Control\BrTable $instr): int
    {
        $ls = $instr->labelTable;
        $ln = $instr->defaultLabel;
        $i = NumericOps::convertS32ToU32($this->stack->popInt());
        if ($i < count($ls)) {
            return $ls[$i];
        } else {
            return $ln;
        }
    }

    private function execInstrControlCall(Instrs\Control\Call $instr): void
    {
        $x = $instr->func;
        $f = $this->stack->currentFrame();
        $a = $f->module->funcAddrs[$x];
        $this->doInvokeFunc($a);
    }

    private function execInstrControlCallIndirect(Instrs\Control\CallIndirect $instr): void
    {
        $x = $instr->funcTable;
        $y = $instr->type;
        $f = $this->stack->currentFrame();
        $ta = $f->module->tableAddrs[$x];
        $tab = $this->store->tables[$ta];
        $ftExpect = $f->module->types[$y];
        $i = NumericOps::convertS32ToU32($this->stack->popInt());
        if (count($tab->elem) <= $i) {
            throw new TrapException("call_indirect: out of bounds", trapKind: TrapKind::UndefinedElement);
        }
        $r = $tab->elem[$i];
        if ($r instanceof Refs\RefNull) {
            throw new TrapException("call_indirect: ref.null", trapKind: TrapKind::UninitializedElement);
        }
        assert($r instanceof Refs\RefFunc);
        $a = $r->addr;
        $fn = $this->store->funcs[$a];
        assert($fn instanceof FuncInsts\Wasm || $fn instanceof FuncInsts\Host);
        $ftActual = $fn->type;
        if (!$ftExpect->equals($ftActual)) {
            throw new TrapException("call_indirect: type mismatch", trapKind: TrapKind::IndirectCallTypeMismatch);
        }
        $this->doInvokeFunc($a);
    }

    private function execInstrControlElse_(Instrs\Control\Else_ $instr): void
    {
        // Do nothing.
    }

    private function execInstrControlEnd(Instrs\Control\End $instr): void
    {
        // Do nothing.
    }

    private function execInstrControlIf_(Instrs\Control\If_ $instr): ?int
    {
        $blockType = $instr->type;
        $instrs1 = $instr->thenBody;
        $instrs2 = $instr->elseBody;
        $c = $this->stack->popInt();
        if ($c !== 0) {
            return $this->execInstr(Instr::Block($blockType, $instrs1));
        } else {
            return $this->execInstr(Instr::Block($blockType, $instrs2));
        }
    }

    private function execInstrControlLoop(Instrs\Control\Loop $instr): ?int
    {
        $blockType = $instr->type;
        $instrs = $instr->body;
        $f = $this->stack->currentFrame();
        $bt = self::expandBlockType($blockType, $f->module);
        $m = count($bt->params);
        $l = new Label($m);
        while (true) {
            $params = array_reverse($this->stack->popNValues($m));
            $result = $this->execInstrs($instrs, $l, $params);
            if ($result === null) {
                return null;
            } elseif ($result === -1) {
                return -1;
            } elseif ($result === 0) {
                $this->deactivateLabel($m);
                continue;
            } else {
                $this->deactivateLabel(null);
                return $result - 1;
            }
        }
    }

    private function execInstrControlNop(Instrs\Control\Nop $instr): void
    {
        // Do nothing.
    }

    private function execInstrControlReturn_(Instrs\Control\Return_ $instr): int
    {
        return -1;
    }

    private function execInstrControlUnreachable(Instrs\Control\Unreachable $instr): void
    {
        throw new TrapException("unreachable", trapKind: TrapKind::Unreachable);
    }

    private function doLoadF32(int $offset, string $instrOpName): void
    {
        $f = $this->stack->currentFrame();
        $a = $f->module->memAddrs[0];
        $mem = $this->store->mems[$a];
        $i = NumericOps::convertS32ToU32($this->stack->popInt());
        $ea = $i + $offset;
        $c = $mem->loadF32($ea);
        if ($c === null) {
            throw new TrapException("$instrOpName: out of bounds", trapKind: TrapKind::OutOfBoundsMemoryAccess);
        }
        $this->stack->pushValue($c);
    }

    private function doLoadF64(int $offset, string $instrOpName): void
    {
        $f = $this->stack->currentFrame();
        $a = $f->module->memAddrs[0];
        $mem = $this->store->mems[$a];
        $i = NumericOps::convertS32ToU32($this->stack->popInt());
        $ea = $i + $offset;
        $c = $mem->loadF64($ea);
        if ($c === null) {
            throw new TrapException("$instrOpName: out of bounds", trapKind: TrapKind::OutOfBoundsMemoryAccess);
        }
        $this->stack->pushValue($c);
    }

    private static function defaultValueFromValType(ValType $type): int|float|Ref
    {
        return match ($type) {
            ValType::I32 => 0,
            ValType::I64 => 0,
            ValType::F32 => 0.0,
            ValType::F64 => 0.0,
            ValType::FuncRef, ValType::ExternRef => Ref::RefNull($type),
            default => throw new RuntimeException("unreachable"),
        };
    }

    private static function expandBlockType(BlockType $bt, ModuleInst $module): FuncType
    {
        if ($bt instanceof BlockTypes\TypeIdx) {
            return $module->types[$bt->inner];
        } elseif ($bt instanceof BlockTypes\ValType) {
            $t = $bt->inner;
            return new FuncType(
                [],
                $t === null ? [] : [$t],
            );
        } else {
            throw new RuntimeException("expand(): invalid blocktype");
        }
    }
}
