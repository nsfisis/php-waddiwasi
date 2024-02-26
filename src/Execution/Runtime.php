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
        private readonly Store $store,
        private readonly Stack $stack,
        private readonly ModuleInst $module,
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
        $frameInit = StackEntry::Frame(0, [], $moduleInstInit);
        $stack->push($frameInit);

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
        $stack->pop();

        $moduleInst = $allocator->allocModule(
            $module,
            $externVals,
            $vals,
            $refsList,
            $moduleInstInit->funcAddrs,
        );

        $runtime = new self($store, $stack, $moduleInst);

        $frame = StackEntry::Frame(0, [], $moduleInst);
        $stack->push($frame);

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
        $stack->pop();

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
        $f = StackEntry::Frame(0, [], new ModuleInst([], [], [], [], [], [], [], []));
        $this->stack->push($f);
        foreach ($vals as $val) {
            $this->stack->pushValue($val);
        }
        $this->doInvokeFunc($funcAddr);
        $results = [];
        for ($i = 0; $i < count($resultTypes); $i++) {
            $results[] = $this->stack->popValue();
        }
        $this->stack->pop();
        return $results;
    }

    private function doInvokeFunc(FuncAddr $funcAddr): void
    {
        $fn = $this->store->funcs[$funcAddr->value];
        if ($fn instanceof FuncInsts\Wasm) {
            $this->doInvokeWasmFunc($fn);
        } elseif ($fn instanceof FuncInsts\Host) {
            $this->doInvokeHostFunc($fn);
        } else {
            throw new \RuntimeException("doInvokeFunc: unreachable");
        }
    }

    private function doInvokeWasmFunc(FuncInsts\Wasm $fn): void
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
            array_map(fn ($local) => self::defaultValueFromValType($local->type), $ts),
            $fn->module,
        );
        $this->activateFrame($f);
        $l = StackEntry::Label($m);
        $this->execInstrs($instrs, $l);
        $this->deactivateFrame($m);
    }

    private function activateFrame(StackEntries\Frame $f): void
    {
        $this->stack->push($f);
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
        $this->stack->push($l);
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
        ($f->callback)();
    }

    /**
     * @param list<Instr> $instrs
     */
    private function execInstrs(
        array $instrs,
        StackEntries\Label $l,
    ): ?ControlFlowResult {
        $this->activateLabel($l);

        foreach ($instrs as $i) {
            $result = $this->execInstr($i);
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
        $result = $this->stack->pop();
        assert($result instanceof StackEntries\Value);
        return $result->inner;
    }

    private function execInstr(Instr $instr): ?ControlFlowResult
    {
        if ($instr instanceof Instrs\Numeric\F32Abs) {
            $v = $this->stack->popF32();
            $this->stack->pushF32(abs($v));
        } elseif ($instr instanceof Instrs\Numeric\F32Add) {
            throw new \RuntimeException("F32Add: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F32Ceil) {
            $v = $this->stack->popF32();
            $this->stack->pushF32(ceil($v));
        } elseif ($instr instanceof Instrs\Numeric\F32Const) {
            $this->stack->pushValue(Val::NumF32($instr->value));
        } elseif ($instr instanceof Instrs\Numeric\F32ConvertI32S) {
            echo "TRACE (F32ConvertI32S)\n";
        } elseif ($instr instanceof Instrs\Numeric\F32ConvertI32U) {
            echo "TRACE (F32ConvertI32U)\n";
        } elseif ($instr instanceof Instrs\Numeric\F32ConvertI64S) {
            throw new \RuntimeException("F32ConvertI64S: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F32ConvertI64U) {
            throw new \RuntimeException("F32ConvertI64U: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F32CopySign) {
            throw new \RuntimeException("F32CopySign: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F32DemoteF64) {
            echo "TRACE (F32DemoteF64)\n";
        } elseif ($instr instanceof Instrs\Numeric\F32Div) {
            echo "TRACE (F32Div)\n";
        } elseif ($instr instanceof Instrs\Numeric\F32Eq) {
            throw new \RuntimeException("F32Eq: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F32Floor) {
            throw new \RuntimeException("F32Floor: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F32Ge) {
            throw new \RuntimeException("F32Ge: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F32Gt) {
            throw new \RuntimeException("F32Gt: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F32Le) {
            throw new \RuntimeException("F32Le: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F32Lt) {
            echo "TRACE (F32Lt)\n";
        } elseif ($instr instanceof Instrs\Numeric\F32Max) {
            throw new \RuntimeException("F32Max: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F32Min) {
            throw new \RuntimeException("F32Min: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F32Mul) {
            echo "TRACE (F32Mul)\n";
        } elseif ($instr instanceof Instrs\Numeric\F32Ne) {
            echo "TRACE (F32Ne)\n";
        } elseif ($instr instanceof Instrs\Numeric\F32Nearest) {
            throw new \RuntimeException("F32Nearest: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F32Neg) {
            throw new \RuntimeException("F32Neg: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F32ReinterpretI32) {
            echo "TRACE (F32ReinterpretI32)\n";
        } elseif ($instr instanceof Instrs\Numeric\F32ReinterpretI64) {
            throw new \RuntimeException("F32ReinterpretI64: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F32Sqrt) {
            throw new \RuntimeException("F32Sqrt: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F32Sub) {
            throw new \RuntimeException("F32Sub: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F32Trunc) {
            throw new \RuntimeException("F32Trunc: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F64Abs) {
            echo "TRACE (F64Abs)\n";
        } elseif ($instr instanceof Instrs\Numeric\F64Add) {
            echo "TRACE (F64Add)\n";
        } elseif ($instr instanceof Instrs\Numeric\F64Ceil) {
            echo "TRACE (F64Ceil)\n";
        } elseif ($instr instanceof Instrs\Numeric\F64Const) {
            $this->stack->pushValue(Val::NumF64($instr->value));
        } elseif ($instr instanceof Instrs\Numeric\F64ConvertI32S) {
            echo "TRACE (F64ConvertI32S)\n";
        } elseif ($instr instanceof Instrs\Numeric\F64ConvertI32U) {
            echo "TRACE (F64ConvertI32U)\n";
        } elseif ($instr instanceof Instrs\Numeric\F64ConvertI64S) {
            echo "TRACE (F64ConvertI64S)\n";
        } elseif ($instr instanceof Instrs\Numeric\F64ConvertI64U) {
            echo "TRACE (F64ConvertI64U)\n";
        } elseif ($instr instanceof Instrs\Numeric\F64CopySign) {
            echo "TRACE (F64CopySign)\n";
        } elseif ($instr instanceof Instrs\Numeric\F64Div) {
            echo "TRACE (F64Div)\n";
        } elseif ($instr instanceof Instrs\Numeric\F64Eq) {
            echo "TRACE (F64Eq)\n";
        } elseif ($instr instanceof Instrs\Numeric\F64Floor) {
            echo "TRACE (F64Floor)\n";
        } elseif ($instr instanceof Instrs\Numeric\F64Ge) {
            echo "TRACE (F64Ge)\n";
        } elseif ($instr instanceof Instrs\Numeric\F64Gt) {
            echo "TRACE (F64Gt)\n";
        } elseif ($instr instanceof Instrs\Numeric\F64Le) {
            echo "TRACE (F64Le)\n";
        } elseif ($instr instanceof Instrs\Numeric\F64Lt) {
            echo "TRACE (F64Lt)\n";
        } elseif ($instr instanceof Instrs\Numeric\F64Max) {
            echo "TRACE (F64Max)\n";
        } elseif ($instr instanceof Instrs\Numeric\F64Min) {
            throw new \RuntimeException("F64Min: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F64Mul) {
            echo "TRACE (F64Mul)\n";
        } elseif ($instr instanceof Instrs\Numeric\F64Ne) {
            echo "TRACE (F64Ne)\n";
        } elseif ($instr instanceof Instrs\Numeric\F64Nearest) {
            throw new \RuntimeException("F64Nearest: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F64Neg) {
            echo "TRACE (F64Neg)\n";
        } elseif ($instr instanceof Instrs\Numeric\F64PromoteF32) {
            echo "TRACE (F64PromoteF32)\n";
        } elseif ($instr instanceof Instrs\Numeric\F64ReinterpretI32) {
            throw new \RuntimeException("F64ReinterpretI32: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\F64ReinterpretI64) {
            echo "TRACE (F64ReinterpretI64)\n";
        } elseif ($instr instanceof Instrs\Numeric\F64Sqrt) {
            echo "TRACE (F64Sqrt)\n";
        } elseif ($instr instanceof Instrs\Numeric\F64Sub) {
            echo "TRACE (F64Sub)\n";
        } elseif ($instr instanceof Instrs\Numeric\F64Trunc) {
            throw new \RuntimeException("F64Trunc: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I32Add) {
            echo "TRACE (I32Add)\n";
        } elseif ($instr instanceof Instrs\Numeric\I32And) {
            $c2 = $this->stack->popI32();
            $c1 = $this->stack->popI32();
            $this->stack->pushI32($c1 & $c2);
        } elseif ($instr instanceof Instrs\Numeric\I32Clz) {
            echo "TRACE (I32Clz)\n";
        } elseif ($instr instanceof Instrs\Numeric\I32Const) {
            $this->stack->pushValue(Val::NumI32($instr->value));
        } elseif ($instr instanceof Instrs\Numeric\I32Ctz) {
            echo "TRACE (I32Ctz)\n";
        } elseif ($instr instanceof Instrs\Numeric\I32DivS) {
            echo "TRACE (I32DivS)\n";
        } elseif ($instr instanceof Instrs\Numeric\I32DivU) {
            echo "TRACE (I32DivU)\n";
        } elseif ($instr instanceof Instrs\Numeric\I32Eq) {
            echo "TRACE (I32Eq)\n";
        } elseif ($instr instanceof Instrs\Numeric\I32Eqz) {
            echo "TRACE (I32Eqz)\n";
        } elseif ($instr instanceof Instrs\Numeric\I32Extend16S) {
            echo "TRACE (I32Extend16S)\n";
        } elseif ($instr instanceof Instrs\Numeric\I32Extend8S) {
            echo "TRACE (I32Extend8S)\n";
        } elseif ($instr instanceof Instrs\Numeric\I32GeS) {
            echo "TRACE (I32GeS)\n";
        } elseif ($instr instanceof Instrs\Numeric\I32GeU) {
            echo "TRACE (I32GeU)\n";
        } elseif ($instr instanceof Instrs\Numeric\I32GtS) {
            echo "TRACE (I32GtS)\n";
        } elseif ($instr instanceof Instrs\Numeric\I32GtU) {
            echo "TRACE (I32GtU)\n";
        } elseif ($instr instanceof Instrs\Numeric\I32LeS) {
            echo "TRACE (I32LeS)\n";
        } elseif ($instr instanceof Instrs\Numeric\I32LeU) {
            echo "TRACE (I32LeU)\n";
        } elseif ($instr instanceof Instrs\Numeric\I32LtS) {
            echo "TRACE (I32LtS)\n";
        } elseif ($instr instanceof Instrs\Numeric\I32LtU) {
            echo "TRACE (I32LtU)\n";
        } elseif ($instr instanceof Instrs\Numeric\I32Mul) {
            echo "TRACE (I32Mul)\n";
        } elseif ($instr instanceof Instrs\Numeric\I32Ne) {
            echo "TRACE (I32Ne)\n";
        } elseif ($instr instanceof Instrs\Numeric\I32Or) {
            echo "TRACE (I32Or)\n";
        } elseif ($instr instanceof Instrs\Numeric\I32Popcnt) {
            echo "TRACE (I32Popcnt)\n";
        } elseif ($instr instanceof Instrs\Numeric\I32ReinterpretF32) {
            echo "TRACE (I32ReinterpretF32)\n";
        } elseif ($instr instanceof Instrs\Numeric\I32ReinterpretF64) {
            throw new \RuntimeException("I32ReinterpretF64: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I32RemS) {
            echo "TRACE (I32RemS)\n";
        } elseif ($instr instanceof Instrs\Numeric\I32RemU) {
            echo "TRACE (I32RemU)\n";
        } elseif ($instr instanceof Instrs\Numeric\I32RotL) {
            echo "TRACE (I32RotL)\n";
        } elseif ($instr instanceof Instrs\Numeric\I32RotR) {
            echo "TRACE (I32RotR)\n";
        } elseif ($instr instanceof Instrs\Numeric\I32Shl) {
            echo "TRACE (I32Shl)\n";
        } elseif ($instr instanceof Instrs\Numeric\I32ShrS) {
            echo "TRACE (I32ShrS)\n";
        } elseif ($instr instanceof Instrs\Numeric\I32ShrU) {
            echo "TRACE (I32ShrU)\n";
        } elseif ($instr instanceof Instrs\Numeric\I32Sub) {
            $c2 = $this->stack->popI32();
            $c1 = $this->stack->popI32();
            $this->stack->pushI32($c1 - $c2);
        } elseif ($instr instanceof Instrs\Numeric\I32TruncF32S) {
            echo "TRACE (I32TruncF32S)\n";
        } elseif ($instr instanceof Instrs\Numeric\I32TruncF32U) {
            throw new \RuntimeException("I32TruncF32U: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I32TruncF64S) {
            echo "TRACE (I32TruncF64S)\n";
        } elseif ($instr instanceof Instrs\Numeric\I32TruncF64U) {
            echo "TRACE (I32TruncF64U)\n";
        } elseif ($instr instanceof Instrs\Numeric\I32TruncSatF32S) {
            throw new \RuntimeException("I32TruncSatF32S: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I32TruncSatF32U) {
            throw new \RuntimeException("I32TruncSatF32U: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I32TruncSatF64S) {
            throw new \RuntimeException("I32TruncSatF64S: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I32TruncSatF64U) {
            throw new \RuntimeException("I32TruncSatF64U: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I32WrapI64) {
            echo "TRACE (I32WrapI64)\n";
        } elseif ($instr instanceof Instrs\Numeric\I32Xor) {
            echo "TRACE (I32Xor)\n";
        } elseif ($instr instanceof Instrs\Numeric\I64Add) {
            echo "TRACE (I64Add)\n";
        } elseif ($instr instanceof Instrs\Numeric\I64And) {
            echo "TRACE (I64And)\n";
        } elseif ($instr instanceof Instrs\Numeric\I64Clz) {
            echo "TRACE (I64Clz)\n";
        } elseif ($instr instanceof Instrs\Numeric\I64Const) {
            $this->stack->pushValue(Val::NumI64($instr->value));
        } elseif ($instr instanceof Instrs\Numeric\I64Ctz) {
            throw new \RuntimeException("I64Ctz: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I64DivS) {
            echo "TRACE (I64DivS)\n";
        } elseif ($instr instanceof Instrs\Numeric\I64DivU) {
            echo "TRACE (I64DivU)\n";
        } elseif ($instr instanceof Instrs\Numeric\I64Eq) {
            echo "TRACE (I64Eq)\n";
        } elseif ($instr instanceof Instrs\Numeric\I64Eqz) {
            echo "TRACE (I64Eqz)\n";
        } elseif ($instr instanceof Instrs\Numeric\I64Extend16S) {
            echo "TRACE (I64Extend16S)\n";
        } elseif ($instr instanceof Instrs\Numeric\I64Extend32S) {
            throw new \RuntimeException("I64Extend32S: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I64Extend8S) {
            throw new \RuntimeException("I64Extend8S: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I64ExtendI32S) {
            echo "TRACE (I64ExtendI32S)\n";
        } elseif ($instr instanceof Instrs\Numeric\I64ExtendI32U) {
            echo "TRACE (I64ExtendI32U)\n";
        } elseif ($instr instanceof Instrs\Numeric\I64GeS) {
            echo "TRACE (I64GeS)\n";
        } elseif ($instr instanceof Instrs\Numeric\I64GeU) {
            echo "TRACE (I64GeU)\n";
        } elseif ($instr instanceof Instrs\Numeric\I64GtS) {
            echo "TRACE (I64GtS)\n";
        } elseif ($instr instanceof Instrs\Numeric\I64GtU) {
            echo "TRACE (I64GtU)\n";
        } elseif ($instr instanceof Instrs\Numeric\I64LeS) {
            echo "TRACE (I64LeS)\n";
        } elseif ($instr instanceof Instrs\Numeric\I64LeU) {
            echo "TRACE (I64LeU)\n";
        } elseif ($instr instanceof Instrs\Numeric\I64LtS) {
            echo "TRACE (I64LtS)\n";
        } elseif ($instr instanceof Instrs\Numeric\I64LtU) {
            echo "TRACE (I64LtU)\n";
        } elseif ($instr instanceof Instrs\Numeric\I64Mul) {
            echo "TRACE (I64Mul)\n";
        } elseif ($instr instanceof Instrs\Numeric\I64Ne) {
            echo "TRACE (I64Ne)\n";
        } elseif ($instr instanceof Instrs\Numeric\I64Or) {
            echo "TRACE (I64Or)\n";
        } elseif ($instr instanceof Instrs\Numeric\I64Popcnt) {
            throw new \RuntimeException("I64Popcnt: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I64ReinterpretF32) {
            throw new \RuntimeException("I64ReinterpretF32: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I64ReinterpretF64) {
            echo "TRACE (I64ReinterpretF64)\n";
        } elseif ($instr instanceof Instrs\Numeric\I64RemS) {
            echo "TRACE (I64RemS)\n";
        } elseif ($instr instanceof Instrs\Numeric\I64RemU) {
            echo "TRACE (I64RemU)\n";
        } elseif ($instr instanceof Instrs\Numeric\I64RotL) {
            echo "TRACE (I64RotL)\n";
        } elseif ($instr instanceof Instrs\Numeric\I64RotR) {
            echo "TRACE (I64RotR)\n";
        } elseif ($instr instanceof Instrs\Numeric\I64Shl) {
            echo "TRACE (I64Shl)\n";
        } elseif ($instr instanceof Instrs\Numeric\I64ShrS) {
            echo "TRACE (I64ShrS)\n";
        } elseif ($instr instanceof Instrs\Numeric\I64ShrU) {
            echo "TRACE (I64ShrU)\n";
        } elseif ($instr instanceof Instrs\Numeric\I64Sub) {
            echo "TRACE (I64Sub)\n";
        } elseif ($instr instanceof Instrs\Numeric\I64TruncF32S) {
            throw new \RuntimeException("I64TruncF32S: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I64TruncF32U) {
            throw new \RuntimeException("I64TruncF32U: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I64TruncF64S) {
            echo "TRACE (I64TruncF64S)\n";
        } elseif ($instr instanceof Instrs\Numeric\I64TruncF64U) {
            echo "TRACE (I64TruncF64U)\n";
        } elseif ($instr instanceof Instrs\Numeric\I64TruncSatF32S) {
            throw new \RuntimeException("I64TruncSatF32S: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I64TruncSatF32U) {
            throw new \RuntimeException("I64TruncSatF32U: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I64TruncSatF64S) {
            throw new \RuntimeException("I64TruncSatF64S: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I64TruncSatF64U) {
            throw new \RuntimeException("I64TruncSatF64U: not implemented");
        } elseif ($instr instanceof Instrs\Numeric\I64Xor) {
            echo "TRACE (I64Xor)\n";
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
            $this->stack->pop();
        } elseif ($instr instanceof Instrs\Parametric\Select) {
            $c = $this->stack->popI32();
            $val2 = $this->stack->pop();
            assert($val2 !== null);
            $val1 = $this->stack->pop();
            assert($val1 !== null);
            if ($c !== 0) {
                $this->stack->push($val1);
            } else {
                $this->stack->push($val2);
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
            $val = $f->locals[$x->value];
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
            $val = $this->stack->popValue();
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
            echo "TRACE (F32Load)\n";
        } elseif ($instr instanceof Instrs\Memory\F32Store) {
            echo "TRACE (F32Store)\n";
        } elseif ($instr instanceof Instrs\Memory\F64Load) {
            echo "TRACE (F64Load)\n";
        } elseif ($instr instanceof Instrs\Memory\F64Store) {
            echo "TRACE (F64Store)\n";
        } elseif ($instr instanceof Instrs\Memory\I32Load) {
            echo "TRACE (I32Load)\n";
        } elseif ($instr instanceof Instrs\Memory\I32Load16S) {
            echo "TRACE (I32Load16S)\n";
        } elseif ($instr instanceof Instrs\Memory\I32Load16U) {
            echo "TRACE (I32Load16U)\n";
        } elseif ($instr instanceof Instrs\Memory\I32Load8S) {
            echo "TRACE (I32Load8S)\n";
        } elseif ($instr instanceof Instrs\Memory\I32Load8U) {
            echo "TRACE (I32Load8U)\n";
        } elseif ($instr instanceof Instrs\Memory\I32Store) {
            echo "TRACE (I32Store)\n";
        } elseif ($instr instanceof Instrs\Memory\I32Store16) {
            echo "TRACE (I32Store16)\n";
        } elseif ($instr instanceof Instrs\Memory\I32Store8) {
            $offset = $instr->offset;
            $align = $instr->align;
            $f = $this->stack->currentFrame();
            $a = $f->module->memAddrs[0];
            $mem = $this->store->mems[$a->value];
            $c = $this->stack->popI32();
            $i = $this->stack->popI32();
            $ea = $i + $offset;
            if (count($mem->data) < $ea + 1) {
                throw new TrapException("i32.store8: out of bounds");
            }
            $n = $c & 0xFF;
            // @phpstan-ignore-next-line
            $mem->data[$ea] = $n;
        } elseif ($instr instanceof Instrs\Memory\I64Load) {
            echo "TRACE (I64Load)\n";
        } elseif ($instr instanceof Instrs\Memory\I64Load16S) {
            echo "TRACE (I64Load16S)\n";
        } elseif ($instr instanceof Instrs\Memory\I64Load16U) {
            echo "TRACE (I64Load16U)\n";
        } elseif ($instr instanceof Instrs\Memory\I64Load32S) {
            echo "TRACE (I64Load32S)\n";
        } elseif ($instr instanceof Instrs\Memory\I64Load32U) {
            echo "TRACE (I64Load32U)\n";
        } elseif ($instr instanceof Instrs\Memory\I64Load8S) {
            echo "TRACE (I64Load8S)\n";
        } elseif ($instr instanceof Instrs\Memory\I64Load8U) {
            echo "TRACE (I64Load8U)\n";
        } elseif ($instr instanceof Instrs\Memory\I64Store) {
            echo "TRACE (I64Store)\n";
        } elseif ($instr instanceof Instrs\Memory\I64Store16) {
            echo "TRACE (I64Store16)\n";
        } elseif ($instr instanceof Instrs\Memory\I64Store32) {
            echo "TRACE (I64Store32)\n";
        } elseif ($instr instanceof Instrs\Memory\I64Store8) {
            echo "TRACE (I64Store8)\n";
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
            if (count($mem->data) < $d + $n) {
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
            $szInByte = count($mem->data);
            assert(is_int($szInByte / (64 * 1024)));
            $sz = $szInByte / (64 * 1024);
            $this->stack->pushI32($sz);
        } elseif ($instr instanceof Instrs\Control\Block) {
            $blockType = $instr->type;
            $instrs = $instr->body;
            $f = $this->stack->currentFrame();
            $bt = self::expandBlockType($blockType, $f->module);
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
            $i = $this->stack->popI32();
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
            $i = $this->stack->popI32();
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
            if ($ftExpect->equals($ftActual)) {
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
}
