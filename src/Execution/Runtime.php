<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;
use Nsfisis\Waddiwasi\Structure\Instructions\Instrs;
use Nsfisis\Waddiwasi\Structure\Modules\DataModes;
use Nsfisis\Waddiwasi\Structure\Modules\ElemModes;
use Nsfisis\Waddiwasi\Structure\Modules\Module;
use Nsfisis\Waddiwasi\Structure\Types\DataIdx;
use Nsfisis\Waddiwasi\Structure\Types\ElemIdx;

// @todo split this class into multiple classes
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
            $vals[] = $runtimeInit->evalInstrs($instrs);
            assert($stack->top() === $frameInit);
        }

        $refsList = [];
        foreach ($module->elems as $elem) {
            $refs = [];
            foreach ($elem->init as $expr) {
                $instrs = $expr->instrs;
                array_pop($instrs); // drop "end"
                $result = $runtimeInit->evalInstrs($instrs);
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
                $runtime->execInstrs($instrs);
            } elseif ($elem->mode instanceof ElemModes\Declarative) {
                $runtime->execInstrs([Instr::ElemDrop(new ElemIdx($i))]);
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
                $runtime->execInstrs($instrs);
            }
        }

        if ($module->start !== null) {
            $runtime->execInstrs([Instr::Call($module->start->func)]);
        }

        assert($stack->top() === $frame);
        $stack->pop();

        return new self($store, $stack, $moduleInst);
    }

    public function invoke(): void
    {
    }

    /**
     * @param list<Instr> $instrs
     */
    private function execInstrs(array $instrs): void
    {
        foreach ($instrs as $i) {
            $this->interpret($i);
        }
    }

    /**
     * @param list<Instr> $instrs
     */
    private function evalInstrs(array $instrs): Val
    {
        $this->execInstrs($instrs);
        $result = $this->stack->pop();
        assert($result instanceof StackEntries\Value);
        return $result->inner;
    }

    private function interpret(Instr $instr): void
    {
        if ($instr instanceof Instrs\Numeric\F32Abs) {
            $v = $this->stack->pop();
            assert($v instanceof StackEntries\Value);
            assert($v->inner instanceof Vals\Num);
            assert($v->inner->inner instanceof Nums\F32_);
            $this->stack->push(StackEntry::Value(Val::Num(Num::F32($v->inner->inner))));
        } elseif ($instr instanceof Instrs\Numeric\F32Add) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F32Ceil) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F32Const) {
            $this->stack->push(StackEntry::Value(Val::Num(Num::F32($instr->value))));
        } elseif ($instr instanceof Instrs\Numeric\F32ConvertI32S) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F32ConvertI32U) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F32ConvertI64S) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F32ConvertI64U) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F32CopySign) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F32DemoteF64) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F32Div) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F32Eq) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F32Floor) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F32Ge) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F32Gt) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F32Le) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F32Lt) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F32Max) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F32Min) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F32Mul) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F32Ne) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F32Nearest) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F32Neg) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F32ReinterpretI32) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F32ReinterpretI64) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F32Sqrt) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F32Sub) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F32Trunc) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F64Abs) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F64Add) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F64Ceil) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F64Const) {
            $this->stack->push(StackEntry::Value(Val::Num(Num::F64($instr->value))));
        } elseif ($instr instanceof Instrs\Numeric\F64ConvertI32S) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F64ConvertI32U) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F64ConvertI64S) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F64ConvertI64U) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F64CopySign) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F64Div) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F64Eq) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F64Floor) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F64Ge) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F64Gt) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F64Le) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F64Lt) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F64Max) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F64Min) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F64Mul) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F64Ne) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F64Nearest) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F64Neg) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F64PromoteF32) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F64ReinterpretI32) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F64ReinterpretI64) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F64Sqrt) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F64Sub) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\F64Trunc) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32Add) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32And) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32Clz) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32Const) {
            $this->stack->push(StackEntry::Value(Val::Num(Num::I32($instr->value))));
        } elseif ($instr instanceof Instrs\Numeric\I32Ctz) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32DivS) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32DivU) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32Eq) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32Eqz) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32Extend16S) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32Extend8S) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32GeS) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32GeU) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32GtS) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32GtU) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32LeS) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32LeU) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32LtS) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32LtU) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32Mul) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32Ne) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32Or) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32Popcnt) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32ReinterpretF32) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32ReinterpretF64) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32RemS) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32RemU) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32RotL) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32RotR) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32Shl) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32ShrS) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32ShrU) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32Sub) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32TruncF32S) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32TruncF32U) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32TruncF64S) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32TruncF64U) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32TruncSatF32S) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32TruncSatF32U) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32TruncSatF64S) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32TruncSatF64U) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32WrapI64) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I32Xor) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64Add) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64And) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64Clz) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64Const) {
            $this->stack->push(StackEntry::Value(Val::Num(Num::I64($instr->value))));
        } elseif ($instr instanceof Instrs\Numeric\I64Ctz) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64DivS) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64DivU) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64Eq) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64Eqz) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64Extend16S) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64Extend32S) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64Extend8S) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64ExtendI32S) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64ExtendI32U) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64GeS) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64GeU) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64GtS) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64GtU) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64LeS) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64LeU) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64LtS) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64LtU) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64Mul) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64Ne) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64Or) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64Popcnt) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64ReinterpretF32) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64ReinterpretF64) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64RemS) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64RemU) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64RotL) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64RotR) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64Shl) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64ShrS) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64ShrU) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64Sub) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64TruncF32S) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64TruncF32U) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64TruncF64S) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64TruncF64U) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64TruncSatF32S) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64TruncSatF32U) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64TruncSatF64S) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64TruncSatF64U) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Numeric\I64Xor) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Reference\RefFunc) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Reference\RefIsNull) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Reference\RefNull) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Parametric\Drop) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Parametric\Select) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Variable\GlobalGet) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Variable\GlobalSet) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Variable\LocalGet) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Variable\LocalSet) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Variable\LocalTee) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Table\ElemDrop) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Table\TableCopy) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Table\TableFill) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Table\TableGet) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Table\TableGrow) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Table\TableInit) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Table\TableSet) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Table\TableSize) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Memory\DataDrop) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Memory\F32Load) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Memory\F32Store) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Memory\F64Load) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Memory\F64Store) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Memory\I32Load) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Memory\I32Load16S) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Memory\I32Load16U) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Memory\I32Load8S) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Memory\I32Load8U) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Memory\I32Store) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Memory\I32Store16) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Memory\I32Store8) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Memory\I64Load) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Memory\I64Load16S) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Memory\I64Load16U) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Memory\I64Load32S) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Memory\I64Load32U) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Memory\I64Load8S) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Memory\I64Load8U) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Memory\I64Store) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Memory\I64Store16) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Memory\I64Store32) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Memory\I64Store8) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Memory\MemoryCopy) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Memory\MemoryFill) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Memory\MemoryGrow) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Memory\MemoryInit) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Memory\MemorySize) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Control\Block) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Control\Br) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Control\BrIf) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Control\BrTable) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Control\Call) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Control\CallIndirect) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Control\Else_) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Control\End) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Control\If_) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Control\Loop) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Control\Nop) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Control\Return_) {
            assert(false, "not implemented " . $instr::class);
        } elseif ($instr instanceof Instrs\Control\Unreachable) {
            assert(false, "not implemented " . $instr::class);
        } else {
            assert(false);
        }
    }
}
