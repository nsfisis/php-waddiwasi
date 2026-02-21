<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Validation;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instr;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs\Control\BlockType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs\Control\BlockTypes;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\FuncType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\Mut;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\ValType;
use function count;
use function in_array;

final class FunctionValidator
{
    /**
     * @var list<string>
     */
    private array $errors = [];

    public function __construct(
        private readonly Context $context,
        private readonly ValidationStack $validationStack,
    ) {
    }

    /**
     * @param list<Instr> $body
     * @return list<string>
     */
    public function validate(array $body): array
    {
        $this->validateInstrs($body);
        $this->validateEnd();

        return $this->errors;
    }

    /**
     * @param list<Instr> $instrs
     */
    private function validateInstrs(array $instrs): void
    {
        foreach ($instrs as $instr) {
            $this->validateInstr($instr);
        }
    }

    private function validateInstr(Instr $instr): void
    {
        switch ($instr::class) {
            case Instrs\Numeric\I32Const::class:
                $this->validationStack->pushVal(ValType::I32);
                break;

            case Instrs\Numeric\I64Const::class:
                $this->validationStack->pushVal(ValType::I64);
                break;

            case Instrs\Numeric\F32Const::class:
                $this->validationStack->pushVal(ValType::F32);
                break;

            case Instrs\Numeric\F64Const::class:
                $this->validationStack->pushVal(ValType::F64);
                break;

            case Instrs\Numeric\I32Eqz::class:
            case Instrs\Numeric\I32Clz::class:
            case Instrs\Numeric\I32Ctz::class:
            case Instrs\Numeric\I32Popcnt::class:
            case Instrs\Numeric\I32Extend8S::class:
            case Instrs\Numeric\I32Extend16S::class:
                $this->validationStack->popValOf(ValType::I32);
                $this->validationStack->pushVal(ValType::I32);
                break;

            case Instrs\Numeric\I32Add::class:
            case Instrs\Numeric\I32Sub::class:
            case Instrs\Numeric\I32Mul::class:
            case Instrs\Numeric\I32DivS::class:
            case Instrs\Numeric\I32DivU::class:
            case Instrs\Numeric\I32RemS::class:
            case Instrs\Numeric\I32RemU::class:
            case Instrs\Numeric\I32And::class:
            case Instrs\Numeric\I32Or::class:
            case Instrs\Numeric\I32Xor::class:
            case Instrs\Numeric\I32Shl::class:
            case Instrs\Numeric\I32ShrS::class:
            case Instrs\Numeric\I32ShrU::class:
            case Instrs\Numeric\I32RotL::class:
            case Instrs\Numeric\I32RotR::class:
                $this->validationStack->popValOf(ValType::I32);
                $this->validationStack->popValOf(ValType::I32);
                $this->validationStack->pushVal(ValType::I32);
                break;

            case Instrs\Numeric\I32Eq::class:
            case Instrs\Numeric\I32Ne::class:
            case Instrs\Numeric\I32LtS::class:
            case Instrs\Numeric\I32LtU::class:
            case Instrs\Numeric\I32GtS::class:
            case Instrs\Numeric\I32GtU::class:
            case Instrs\Numeric\I32LeS::class:
            case Instrs\Numeric\I32LeU::class:
            case Instrs\Numeric\I32GeS::class:
            case Instrs\Numeric\I32GeU::class:
                $this->validationStack->popValOf(ValType::I32);
                $this->validationStack->popValOf(ValType::I32);
                $this->validationStack->pushVal(ValType::I32);
                break;

            case Instrs\Numeric\I64Eqz::class:
            case Instrs\Numeric\I64Clz::class:
            case Instrs\Numeric\I64Ctz::class:
            case Instrs\Numeric\I64Popcnt::class:
            case Instrs\Numeric\I64Extend8S::class:
            case Instrs\Numeric\I64Extend16S::class:
            case Instrs\Numeric\I64Extend32S::class:
                $this->validationStack->popValOf(ValType::I64);
                $this->validationStack->pushVal(ValType::I64);
                break;

            case Instrs\Numeric\I64Add::class:
            case Instrs\Numeric\I64Sub::class:
            case Instrs\Numeric\I64Mul::class:
            case Instrs\Numeric\I64DivS::class:
            case Instrs\Numeric\I64DivU::class:
            case Instrs\Numeric\I64RemS::class:
            case Instrs\Numeric\I64RemU::class:
            case Instrs\Numeric\I64And::class:
            case Instrs\Numeric\I64Or::class:
            case Instrs\Numeric\I64Xor::class:
            case Instrs\Numeric\I64Shl::class:
            case Instrs\Numeric\I64ShrS::class:
            case Instrs\Numeric\I64ShrU::class:
            case Instrs\Numeric\I64RotL::class:
            case Instrs\Numeric\I64RotR::class:
                $this->validationStack->popValOf(ValType::I64);
                $this->validationStack->popValOf(ValType::I64);
                $this->validationStack->pushVal(ValType::I64);
                break;

            case Instrs\Numeric\I64Eq::class:
            case Instrs\Numeric\I64Ne::class:
            case Instrs\Numeric\I64LtS::class:
            case Instrs\Numeric\I64LtU::class:
            case Instrs\Numeric\I64GtS::class:
            case Instrs\Numeric\I64GtU::class:
            case Instrs\Numeric\I64LeS::class:
            case Instrs\Numeric\I64LeU::class:
            case Instrs\Numeric\I64GeS::class:
            case Instrs\Numeric\I64GeU::class:
                $this->validationStack->popValOf(ValType::I64);
                $this->validationStack->popValOf(ValType::I64);
                $this->validationStack->pushVal(ValType::I32);
                break;

            case Instrs\Numeric\F32Abs::class:
            case Instrs\Numeric\F32Neg::class:
            case Instrs\Numeric\F32Ceil::class:
            case Instrs\Numeric\F32Floor::class:
            case Instrs\Numeric\F32Trunc::class:
            case Instrs\Numeric\F32Nearest::class:
            case Instrs\Numeric\F32Sqrt::class:
                $this->validationStack->popValOf(ValType::F32);
                $this->validationStack->pushVal(ValType::F32);
                break;

            case Instrs\Numeric\F32Add::class:
            case Instrs\Numeric\F32Sub::class:
            case Instrs\Numeric\F32Mul::class:
            case Instrs\Numeric\F32Div::class:
            case Instrs\Numeric\F32Min::class:
            case Instrs\Numeric\F32Max::class:
            case Instrs\Numeric\F32CopySign::class:
                $this->validationStack->popValOf(ValType::F32);
                $this->validationStack->popValOf(ValType::F32);
                $this->validationStack->pushVal(ValType::F32);
                break;

            case Instrs\Numeric\F32Eq::class:
            case Instrs\Numeric\F32Ne::class:
            case Instrs\Numeric\F32Lt::class:
            case Instrs\Numeric\F32Gt::class:
            case Instrs\Numeric\F32Le::class:
            case Instrs\Numeric\F32Ge::class:
                $this->validationStack->popValOf(ValType::F32);
                $this->validationStack->popValOf(ValType::F32);
                $this->validationStack->pushVal(ValType::I32);
                break;

            case Instrs\Numeric\F64Abs::class:
            case Instrs\Numeric\F64Neg::class:
            case Instrs\Numeric\F64Ceil::class:
            case Instrs\Numeric\F64Floor::class:
            case Instrs\Numeric\F64Trunc::class:
            case Instrs\Numeric\F64Nearest::class:
            case Instrs\Numeric\F64Sqrt::class:
                $this->validationStack->popValOf(ValType::F64);
                $this->validationStack->pushVal(ValType::F64);
                break;

            case Instrs\Numeric\F64Add::class:
            case Instrs\Numeric\F64Sub::class:
            case Instrs\Numeric\F64Mul::class:
            case Instrs\Numeric\F64Div::class:
            case Instrs\Numeric\F64Min::class:
            case Instrs\Numeric\F64Max::class:
            case Instrs\Numeric\F64CopySign::class:
                $this->validationStack->popValOf(ValType::F64);
                $this->validationStack->popValOf(ValType::F64);
                $this->validationStack->pushVal(ValType::F64);
                break;

            case Instrs\Numeric\F64Eq::class:
            case Instrs\Numeric\F64Ne::class:
            case Instrs\Numeric\F64Lt::class:
            case Instrs\Numeric\F64Gt::class:
            case Instrs\Numeric\F64Le::class:
            case Instrs\Numeric\F64Ge::class:
                $this->validationStack->popValOf(ValType::F64);
                $this->validationStack->popValOf(ValType::F64);
                $this->validationStack->pushVal(ValType::I32);
                break;

            case Instrs\Numeric\I32WrapI64::class:
                $this->validationStack->popValOf(ValType::I64);
                $this->validationStack->pushVal(ValType::I32);
                break;

            case Instrs\Numeric\I32TruncF32S::class:
            case Instrs\Numeric\I32TruncF32U::class:
            case Instrs\Numeric\I32TruncSatF32S::class:
            case Instrs\Numeric\I32TruncSatF32U::class:
                $this->validationStack->popValOf(ValType::F32);
                $this->validationStack->pushVal(ValType::I32);
                break;

            case Instrs\Numeric\I32TruncF64S::class:
            case Instrs\Numeric\I32TruncF64U::class:
            case Instrs\Numeric\I32TruncSatF64S::class:
            case Instrs\Numeric\I32TruncSatF64U::class:
                $this->validationStack->popValOf(ValType::F64);
                $this->validationStack->pushVal(ValType::I32);
                break;

            case Instrs\Numeric\I64ExtendI32S::class:
            case Instrs\Numeric\I64ExtendI32U::class:
                $this->validationStack->popValOf(ValType::I32);
                $this->validationStack->pushVal(ValType::I64);
                break;

            case Instrs\Numeric\I64TruncF32S::class:
            case Instrs\Numeric\I64TruncF32U::class:
            case Instrs\Numeric\I64TruncSatF32S::class:
            case Instrs\Numeric\I64TruncSatF32U::class:
                $this->validationStack->popValOf(ValType::F32);
                $this->validationStack->pushVal(ValType::I64);
                break;

            case Instrs\Numeric\I64TruncF64S::class:
            case Instrs\Numeric\I64TruncF64U::class:
            case Instrs\Numeric\I64TruncSatF64S::class:
            case Instrs\Numeric\I64TruncSatF64U::class:
                $this->validationStack->popValOf(ValType::F64);
                $this->validationStack->pushVal(ValType::I64);
                break;

            case Instrs\Numeric\F32ConvertI32S::class:
            case Instrs\Numeric\F32ConvertI32U::class:
                $this->validationStack->popValOf(ValType::I32);
                $this->validationStack->pushVal(ValType::F32);
                break;

            case Instrs\Numeric\F32ConvertI64S::class:
            case Instrs\Numeric\F32ConvertI64U::class:
                $this->validationStack->popValOf(ValType::I64);
                $this->validationStack->pushVal(ValType::F32);
                break;

            case Instrs\Numeric\F32DemoteF64::class:
                $this->validationStack->popValOf(ValType::F64);
                $this->validationStack->pushVal(ValType::F32);
                break;

            case Instrs\Numeric\F64ConvertI32S::class:
            case Instrs\Numeric\F64ConvertI32U::class:
                $this->validationStack->popValOf(ValType::I32);
                $this->validationStack->pushVal(ValType::F64);
                break;

            case Instrs\Numeric\F64ConvertI64S::class:
            case Instrs\Numeric\F64ConvertI64U::class:
                $this->validationStack->popValOf(ValType::I64);
                $this->validationStack->pushVal(ValType::F64);
                break;

            case Instrs\Numeric\F64PromoteF32::class:
                $this->validationStack->popValOf(ValType::F32);
                $this->validationStack->pushVal(ValType::F64);
                break;

            case Instrs\Numeric\I32ReinterpretF32::class:
                $this->validationStack->popValOf(ValType::F32);
                $this->validationStack->pushVal(ValType::I32);
                break;

            case Instrs\Numeric\I64ReinterpretF64::class:
                $this->validationStack->popValOf(ValType::F64);
                $this->validationStack->pushVal(ValType::I64);
                break;

            case Instrs\Numeric\F32ReinterpretI32::class:
                $this->validationStack->popValOf(ValType::I32);
                $this->validationStack->pushVal(ValType::F32);
                break;

            case Instrs\Numeric\F64ReinterpretI64::class:
                $this->validationStack->popValOf(ValType::I64);
                $this->validationStack->pushVal(ValType::F64);
                break;

            case Instrs\Numeric\I32ReinterpretF64::class:
                $this->validationStack->popValOf(ValType::F64);
                $this->validationStack->pushVal(ValType::I32);
                break;

            case Instrs\Numeric\I64ReinterpretF32::class:
                $this->validationStack->popValOf(ValType::F32);
                $this->validationStack->pushVal(ValType::I64);
                break;

            case Instrs\Numeric\F32ReinterpretI64::class:
                $this->validationStack->popValOf(ValType::I64);
                $this->validationStack->pushVal(ValType::F32);
                break;

            case Instrs\Numeric\F64ReinterpretI32::class:
                $this->validationStack->popValOf(ValType::I32);
                $this->validationStack->pushVal(ValType::F64);
                break;

            case Instrs\Parametric\Drop::class:
                $this->validationStack->popVal();
                break;

            case Instrs\Parametric\Select::class:
                $this->validateSelect();
                break;

            case Instrs\Control\Nop::class:
                break;

            case Instrs\Control\Unreachable::class:
                $this->validationStack->unreachable();
                break;

            case Instrs\Control\Block::class:
                $this->validateBlock($instr);
                break;

            case Instrs\Control\Loop::class:
                $this->validateLoop($instr);
                break;

            case Instrs\Control\If_::class:
                $this->validateIf($instr);
                break;

            case Instrs\Control\End::class:
                $this->validateEnd();
                break;

            case Instrs\Control\Else_::class:
                $this->validateElse($instr);
                break;

            case Instrs\Control\Br::class:
                $this->validateBr($instr);
                break;

            case Instrs\Control\BrIf::class:
                $this->validateBrIf($instr);
                break;

            case Instrs\Control\BrTable::class:
                $this->validateBrTable($instr);
                break;

            case Instrs\Control\Call::class:
                $this->validateCall($instr);
                break;

            case Instrs\Control\CallIndirect::class:
                $this->validateCallIndirect($instr);
                break;

            case Instrs\Control\Return_::class:
                $this->validateReturn();
                break;

            case Instrs\Variable\LocalGet::class:
                $this->validateLocalGet($instr);
                break;

            case Instrs\Variable\LocalSet::class:
                $this->validateLocalSet($instr);
                break;

            case Instrs\Variable\LocalTee::class:
                $this->validateLocalTee($instr);
                break;

            case Instrs\Variable\GlobalGet::class:
                $this->validateGlobalGet($instr);
                break;

            case Instrs\Variable\GlobalSet::class:
                $this->validateGlobalSet($instr);
                break;

            case Instrs\Reference\RefNull::class:
                $this->validateRefNull($instr);
                break;

            case Instrs\Reference\RefIsNull::class:
                $this->validateRefIsNull();
                break;

            case Instrs\Reference\RefFunc::class:
                $this->validateRefFunc($instr);
                break;

            case Instrs\Table\TableGet::class:
                $this->validateTableGet($instr);
                break;

            case Instrs\Table\TableSet::class:
                $this->validateTableSet($instr);
                break;

            case Instrs\Table\TableSize::class:
                $this->validateTableSize($instr);
                break;

            case Instrs\Table\TableGrow::class:
                $this->validateTableGrow($instr);
                break;

            case Instrs\Table\TableFill::class:
                $this->validateTableFill($instr);
                break;

            case Instrs\Table\TableCopy::class:
                $this->validateTableCopy($instr);
                break;

            case Instrs\Table\TableInit::class:
                $this->validateTableInit($instr);
                break;

            case Instrs\Table\ElemDrop::class:
                $this->validateElemDrop($instr);
                break;

            case Instrs\Memory\I32Load::class:
                $this->validateMemLoad($instr->align, 4, ValType::I32);
                break;

            case Instrs\Memory\I32Load8S::class:
            case Instrs\Memory\I32Load8U::class:
                $this->validateMemLoad($instr->align, 1, ValType::I32);
                break;

            case Instrs\Memory\I32Load16S::class:
            case Instrs\Memory\I32Load16U::class:
                $this->validateMemLoad($instr->align, 2, ValType::I32);
                break;

            case Instrs\Memory\I64Load::class:
                $this->validateMemLoad($instr->align, 8, ValType::I64);
                break;

            case Instrs\Memory\I64Load8S::class:
            case Instrs\Memory\I64Load8U::class:
                $this->validateMemLoad($instr->align, 1, ValType::I64);
                break;

            case Instrs\Memory\I64Load16S::class:
            case Instrs\Memory\I64Load16U::class:
                $this->validateMemLoad($instr->align, 2, ValType::I64);
                break;

            case Instrs\Memory\I64Load32S::class:
            case Instrs\Memory\I64Load32U::class:
                $this->validateMemLoad($instr->align, 4, ValType::I64);
                break;

            case Instrs\Memory\F32Load::class:
                $this->validateMemLoad($instr->align, 4, ValType::F32);
                break;

            case Instrs\Memory\F64Load::class:
                $this->validateMemLoad($instr->align, 8, ValType::F64);
                break;

            case Instrs\Memory\I32Store::class:
                $this->validateMemStore($instr->align, 4, ValType::I32);
                break;

            case Instrs\Memory\I32Store8::class:
                $this->validateMemStore($instr->align, 1, ValType::I32);
                break;

            case Instrs\Memory\I32Store16::class:
                $this->validateMemStore($instr->align, 2, ValType::I32);
                break;

            case Instrs\Memory\I64Store::class:
                $this->validateMemStore($instr->align, 8, ValType::I64);
                break;

            case Instrs\Memory\I64Store8::class:
                $this->validateMemStore($instr->align, 1, ValType::I64);
                break;

            case Instrs\Memory\I64Store16::class:
                $this->validateMemStore($instr->align, 2, ValType::I64);
                break;

            case Instrs\Memory\I64Store32::class:
                $this->validateMemStore($instr->align, 4, ValType::I64);
                break;

            case Instrs\Memory\F32Store::class:
                $this->validateMemStore($instr->align, 4, ValType::F32);
                break;

            case Instrs\Memory\F64Store::class:
                $this->validateMemStore($instr->align, 8, ValType::F64);
                break;

            case Instrs\Memory\MemorySize::class:
                $this->validateMemoryExists();
                $this->validationStack->pushVal(ValType::I32);
                break;

            case Instrs\Memory\MemoryGrow::class:
                $this->validateMemoryExists();
                $this->validationStack->popValOf(ValType::I32);
                $this->validationStack->pushVal(ValType::I32);
                break;

            case Instrs\Memory\MemoryFill::class:
                $this->validateMemoryExists();
                $this->validationStack->popValOf(ValType::I32);
                $this->validationStack->popValOf(ValType::I32);
                $this->validationStack->popValOf(ValType::I32);
                break;

            case Instrs\Memory\MemoryCopy::class:
                $this->validateMemoryExists();
                $this->validationStack->popValOf(ValType::I32);
                $this->validationStack->popValOf(ValType::I32);
                $this->validationStack->popValOf(ValType::I32);
                break;

            case Instrs\Memory\MemoryInit::class:
                $this->validateMemoryInit($instr);
                break;

            case Instrs\Memory\DataDrop::class:
                $this->validateDataDrop($instr);
                break;

            default:
                $this->addError('Unsupported instruction: ' . $instr::class);
        }
    }

    private function validateSelect(): void
    {
        $this->validationStack->popValOf(ValType::I32);
        $t1 = $this->validationStack->popVal();
        $t2 = $this->validationStack->popVal();
        if (! (($t1 === null || $t1->isNum()) && ($t2 === null || $t2->isNum()) ||
               ($t1 === null || $t1->isVec()) && ($t2 === null || $t2->isVec()))) {
            $this->addError('Invalid select operand types');
            return;
        }
        if ($t1 !== $t2 && $t1 !== null && $t2 !== null) {
            $this->addError('Type mismatch in select');
        }
        $this->validationStack->pushVal($t1 ?? $t2);
    }

    private function validateBlock(Instrs\Control\Block $instr): void
    {
        [$t1, $t2] = $this->extractBlockTypes($instr->type);
        $this->validationStack->popVals($t1);
        $this->validationStack->pushCtrl($instr::class, $t1, $t2);
        $this->validateInstrs($instr->body);
        $ctrl = $this->validationStack->popCtrl();
        $this->validationStack->pushVals($ctrl->endTypes);
    }

    private function validateLoop(Instrs\Control\Loop $instr): void
    {
        [$t1, $t2] = $this->extractBlockTypes($instr->type);
        $this->validationStack->popVals($t1);
        $this->validationStack->pushCtrl($instr::class, $t1, $t2);
        $this->validateInstrs($instr->body);
        $ctrl = $this->validationStack->popCtrl();
        $this->validationStack->pushVals($ctrl->endTypes);
    }

    private function validateIf(Instrs\Control\If_ $instr): void
    {
        [$t1, $t2] = $this->extractBlockTypes($instr->type);
        $this->validationStack->popValOf(ValType::I32);
        $this->validationStack->popVals($t1);
        $this->validationStack->pushCtrl($instr::class, $t1, $t2);
        $this->validateInstrs($instr->thenBody);
        $ctrl = $this->validationStack->popCtrl();
        $this->validationStack->pushCtrl(Instrs\Control\Else_::class, $ctrl->startTypes, $ctrl->endTypes);
        $this->validateInstrs($instr->elseBody);
        $ctrl = $this->validationStack->popCtrl();
        $this->validationStack->pushVals($ctrl->endTypes);
    }

    private function validateEnd(): void
    {
        $ctrl = $this->validationStack->popCtrl();
        $this->validationStack->pushVals($ctrl->endTypes);
    }

    private function validateElse(Instrs\Control\Else_ $instr): void
    {
        $ctrl = $this->validationStack->popCtrl();
        if ($ctrl->opcode !== Instrs\Control\If_::class) {
            $this->addError('else without matching if');
            return;
        }
        $this->validationStack->pushCtrl($instr::class, $ctrl->startTypes, $ctrl->endTypes);
    }

    private function validateBr(Instrs\Control\Br $instr): void
    {
        $ctrl = $this->validationStack->getControl($instr->label);
        if ($ctrl === null) {
            $this->addError('Invalid label index');
            return;
        }
        $this->validationStack->popVals($this->validationStack->labelTypes($ctrl));
        $this->validationStack->unreachable();
    }

    private function validateBrIf(Instrs\Control\BrIf $instr): void
    {
        $ctrl = $this->validationStack->getControl($instr->label);
        if ($ctrl === null) {
            $this->addError('Invalid label index');
            return;
        }
        $this->validationStack->popValOf(ValType::I32);
        $labelType = $this->validationStack->labelTypes($ctrl);
        $this->validationStack->popVals($labelType);
        $this->validationStack->pushVals($labelType);
    }

    private function validateBrTable(Instrs\Control\BrTable $instr): void
    {
        $this->validationStack->popValOf(ValType::I32);

        $defaultCtrl = $this->validationStack->getControl($instr->defaultLabel);
        if ($defaultCtrl === null) {
            $this->addError('Invalid default label');
            return;
        }
        $arity = count($this->validationStack->labelTypes($defaultCtrl));

        foreach ($instr->labelTable as $labelIdx) {
            $labelCtrl = $this->validationStack->getControl($labelIdx);
            if ($labelCtrl === null) {
                $this->addError('Invalid label index');
                return;
            }
            if (count($this->validationStack->labelTypes($labelCtrl)) !== $arity) {
                $this->addError('Inconsistent label arity');
                return;
            }
            $types = $this->validationStack->labelTypes($labelCtrl);
            $this->validationStack->pushVals($this->validationStack->popVals($types));
        }

        $this->validationStack->popVals($this->validationStack->labelTypes($defaultCtrl));
        $this->validationStack->unreachable();
    }

    private function validateCall(Instrs\Control\Call $instr): void
    {
        $funcIdx = $instr->func;
        if (! isset($this->context->funcs[$funcIdx])) {
            $this->addError("Invalid function index: {$funcIdx}");
            return;
        }
        $funcType = $this->context->funcs[$funcIdx];
        $this->validationStack->popVals($funcType->params);
        $this->validationStack->pushVals($funcType->results);
    }

    private function validateCallIndirect(Instrs\Control\CallIndirect $instr): void
    {
        $tableIdx = $instr->funcTable;
        if (! isset($this->context->tables[$tableIdx])) {
            $this->addError("Invalid table index: {$tableIdx}");
            return;
        }
        $tableType = $this->context->tables[$tableIdx];
        if ($tableType->refType !== ValType::FuncRef) {
            $this->addError('call_indirect requires a table with funcref element type');
        }
        $typeIdx = $instr->type;
        if (! isset($this->context->types[$typeIdx])) {
            $this->addError("Invalid type index: {$typeIdx}");
            return;
        }
        $funcType = $this->context->types[$typeIdx];
        $this->validationStack->popValOf(ValType::I32);
        $this->validationStack->popVals($funcType->params);
        $this->validationStack->pushVals($funcType->results);
    }

    private function validateReturn(): void
    {
        $this->validationStack->popVals($this->context->return);
        $this->validationStack->unreachable();
    }

    private function validateLocalGet(Instrs\Variable\LocalGet $instr): void
    {
        $localIdx = $instr->var;
        if (! isset($this->context->locals[$localIdx])) {
            $this->addError("Invalid local index: {$localIdx}");
            return;
        }
        $localType = $this->context->locals[$localIdx];
        $this->validationStack->pushVal($localType);
    }

    private function validateLocalSet(Instrs\Variable\LocalSet $instr): void
    {
        $localIdx = $instr->var;
        if (! isset($this->context->locals[$localIdx])) {
            $this->addError("Invalid local index: {$localIdx}");
            return;
        }
        $localType = $this->context->locals[$localIdx];
        $this->validationStack->popValOf($localType);
    }

    private function validateLocalTee(Instrs\Variable\LocalTee $instr): void
    {
        $localIdx = $instr->var;
        if (! isset($this->context->locals[$localIdx])) {
            $this->addError("Invalid local index: {$localIdx}");
            return;
        }
        $type = $this->context->locals[$localIdx];
        $this->validationStack->popValOf($type);
        $this->validationStack->pushVal($type);
    }

    private function validateGlobalGet(Instrs\Variable\GlobalGet $instr): void
    {
        $globalIdx = $instr->var;
        if (! isset($this->context->globals[$globalIdx])) {
            $this->addError("Invalid global index: {$globalIdx}");
            return;
        }
        $this->validationStack->pushVal($this->context->globals[$globalIdx]->valType);
    }

    private function validateGlobalSet(Instrs\Variable\GlobalSet $instr): void
    {
        $globalIdx = $instr->var;
        if (! isset($this->context->globals[$globalIdx])) {
            $this->addError("Invalid global index: {$globalIdx}");
            return;
        }
        $globalType = $this->context->globals[$globalIdx];
        if ($globalType->mut !== Mut::Var) {
            $this->addError('Cannot set immutable global');
        }
        $this->validationStack->popValOf($globalType->valType);
    }

    private function validateRefNull(Instrs\Reference\RefNull $instr): void
    {
        $this->validationStack->pushVal($instr->type);
    }

    private function validateRefIsNull(): void
    {
        $val = $this->validationStack->popVal();
        if ($val !== null && ! $val->isRef()) {
            $this->addError('ref.is_null expects a reference type');
        }
        $this->validationStack->pushVal(ValType::I32);
    }

    private function validateRefFunc(Instrs\Reference\RefFunc $instr): void
    {
        $funcIdx = $instr->func;
        if (! isset($this->context->funcs[$funcIdx])) {
            $this->addError("unknown function {$funcIdx}");
            return;
        }
        if (! in_array($funcIdx, $this->context->refs, true)) {
            $this->addError('undeclared function reference');
            return;
        }
        $this->validationStack->pushVal(ValType::FuncRef);
    }

    private function validateTableGet(Instrs\Table\TableGet $instr): void
    {
        $tableIdx = $instr->table;
        if (! isset($this->context->tables[$tableIdx])) {
            $this->addError("Invalid table index: {$tableIdx}");
            return;
        }
        $this->validationStack->popValOf(ValType::I32);
        $this->validationStack->pushVal($this->context->tables[$tableIdx]->refType);
    }

    private function validateTableSet(Instrs\Table\TableSet $instr): void
    {
        $tableIdx = $instr->table;
        if (! isset($this->context->tables[$tableIdx])) {
            $this->addError("Invalid table index: {$tableIdx}");
            return;
        }
        $this->validationStack->popValOf($this->context->tables[$tableIdx]->refType);
        $this->validationStack->popValOf(ValType::I32);
    }

    private function validateTableSize(Instrs\Table\TableSize $instr): void
    {
        $tableIdx = $instr->table;
        if (! isset($this->context->tables[$tableIdx])) {
            $this->addError("Invalid table index: {$tableIdx}");
            return;
        }
        $this->validationStack->pushVal(ValType::I32);
    }

    private function validateTableGrow(Instrs\Table\TableGrow $instr): void
    {
        $tableIdx = $instr->table;
        if (! isset($this->context->tables[$tableIdx])) {
            $this->addError("Invalid table index: {$tableIdx}");
            return;
        }
        $this->validationStack->popValOf(ValType::I32);
        $this->validationStack->popValOf($this->context->tables[$tableIdx]->refType);
        $this->validationStack->pushVal(ValType::I32);
    }

    private function validateTableFill(Instrs\Table\TableFill $instr): void
    {
        $tableIdx = $instr->table;
        if (! isset($this->context->tables[$tableIdx])) {
            $this->addError("Invalid table index: {$tableIdx}");
            return;
        }
        $this->validationStack->popValOf(ValType::I32);
        $this->validationStack->popValOf($this->context->tables[$tableIdx]->refType);
        $this->validationStack->popValOf(ValType::I32);
    }

    private function validateTableCopy(Instrs\Table\TableCopy $instr): void
    {
        $toIdx = $instr->to;
        $fromIdx = $instr->from;
        if (! isset($this->context->tables[$toIdx])) {
            $this->addError("Invalid destination table index: {$toIdx}");
            return;
        }
        if (! isset($this->context->tables[$fromIdx])) {
            $this->addError("Invalid source table index: {$fromIdx}");
            return;
        }
        if ($this->context->tables[$toIdx]->refType !== $this->context->tables[$fromIdx]->refType) {
            $this->addError('table.copy requires tables with the same reference type');
        }
        $this->validationStack->popValOf(ValType::I32);
        $this->validationStack->popValOf(ValType::I32);
        $this->validationStack->popValOf(ValType::I32);
    }

    private function validateTableInit(Instrs\Table\TableInit $instr): void
    {
        $tableIdx = $instr->to;
        $elemIdx = $instr->from;
        if (! isset($this->context->tables[$tableIdx])) {
            $this->addError("Invalid table index: {$tableIdx}");
            return;
        }
        if (! isset($this->context->elems[$elemIdx])) {
            $this->addError("Invalid element segment index: {$elemIdx}");
            return;
        }
        if ($this->context->tables[$tableIdx]->refType !== $this->context->elems[$elemIdx]) {
            $this->addError('table.init requires matching reference types');
        }
        $this->validationStack->popValOf(ValType::I32);
        $this->validationStack->popValOf(ValType::I32);
        $this->validationStack->popValOf(ValType::I32);
    }

    private function validateElemDrop(Instrs\Table\ElemDrop $instr): void
    {
        $elemIdx = $instr->elem;
        if (! isset($this->context->elems[$elemIdx])) {
            $this->addError("Invalid element segment index: {$elemIdx}");
        }
    }

    private function validateMemoryExists(): void
    {
        if (! isset($this->context->mems[0])) {
            $this->addError('Memory 0 is not defined');
        }
    }

    private function validateMemLoad(int $align, int $maxAlign, ValType $resultType): void
    {
        $this->validateMemoryExists();
        if ((1 << $align) > $maxAlign) {
            $this->addError("alignment must not be larger than natural alignment ({$maxAlign})");
        }
        $this->validationStack->popValOf(ValType::I32);
        $this->validationStack->pushVal($resultType);
    }

    private function validateMemStore(int $align, int $maxAlign, ValType $valueType): void
    {
        $this->validateMemoryExists();
        if ((1 << $align) > $maxAlign) {
            $this->addError("alignment must not be larger than natural alignment ({$maxAlign})");
        }
        $this->validationStack->popValOf($valueType);
        $this->validationStack->popValOf(ValType::I32);
    }

    private function validateMemoryInit(Instrs\Memory\MemoryInit $instr): void
    {
        if (! isset($this->context->mems[0])) {
            $this->addError('Memory 0 is not defined');
        }
        $dataIdx = $instr->data;
        if (! isset($this->context->datas[$dataIdx])) {
            $this->addError("Invalid data segment index: {$dataIdx}");
        }
        $this->validationStack->popValOf(ValType::I32);
        $this->validationStack->popValOf(ValType::I32);
        $this->validationStack->popValOf(ValType::I32);
    }

    private function validateDataDrop(Instrs\Memory\DataDrop $instr): void
    {
        $dataIdx = $instr->data;
        if (! isset($this->context->datas[$dataIdx])) {
            $this->addError("Invalid data segment index: {$dataIdx}");
        }
    }

    /**
     * @return array{list<ValType>, list<ValType>}
     */
    private function extractBlockTypes(BlockType $blockType): array
    {
        $funcType = $this->expandBlockType($blockType);
        return [$funcType->params, $funcType->results];
    }

    private function expandBlockType(BlockType $blockType): FuncType
    {
        if ($blockType instanceof BlockTypes\TypeIdx) {
            if (! isset($this->context->types[$blockType->inner])) {
                $this->addError("Invalid type index: {$blockType->inner}");
                return new FuncType([], []);
            }
            return $this->context->types[$blockType->inner];
        } elseif ($blockType instanceof BlockTypes\ValType) {
            $t = $blockType->inner;
            return new FuncType(
                [],
                $t === null ? [] : [$t],
            );
        }
        $this->addError('Unknown block type: ' . $blockType::class);
        return new FuncType([], []);
    }

    private function addError(string $message): void
    {
        $this->errors[] = $message;
    }
}
