<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Validation;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instr;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs\Control\BlockType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs\Control\BlockTypes;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\Func;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\Module;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\FuncType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\Limits;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\MemType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\TableType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\ValType;
use function array_slice;
use function count;

final class Validator
{
    /**
     * @var list<string>
     */
    private array $errors = [];

    /**
     * @var list<?ValType>
     */
    private array $valueStack = [];

    /**
     * @var list<ControlFrame>
     */
    private array $controlStack = [];

    public function __construct(
        private readonly Module $module,
        private readonly array $externVals,
    ) {
    }

    public function validate(): ValidationResult
    {
        try {
            return new ValidationResult($this->errors);
        } catch (ValidationFailureException $e) {
            return new ValidationResult([...$this->errors, $e->getMessage()]);
        }
    }

    private function validateModule(): void {
        $this->context->types = $this->module->types;
        $this->context->funcs = TODO;
        $this->context->tables = TODO;
        $this->context->mems = TODO;
        $this->context->globals = TODO;
        $this->context->elems = TODO;
        $this->context->datas = TODO;
        $this->context->locals = [];
        $this->context->labels = [];
        $this->context->return = [];
        $this->context->refs = TODO;

        $this->validateTypes();
        $this->validateTables();
        $this->validateMems();
        $this->validateGlobals();
        $this->validateElems();
        $this->validateDatas();

        $this->context = TODO;

        $this->validateFuncs();
        $this->validateStart();
        $this->validateImports();
        $this->validateExports();

        $this->validateMemsCount();
        $this->validateExportsHaveDifferentNames();
    }

    private function validateTypes(): void {
        // Do nothing because function types are always valid.
    }

    private function validateFuncs(): void {
            foreach ($this->module->funcs as $func) {
                $this->validateFunc($func);
            }
    }

    private function validateTables(): void {
        foreach ($this->module->tables as $i => $table) {
            $this->validateTableType($table->type);
        }
    }

    private function validateTableType(TableType $tableType): void {
        $this->validateLimits($tableType->limits, 2**32 - 1);
    }

    private function validateLimits(Limits $limits, int $k): void {
        $n = $limits->min;
        $m = $limits->max;
        $this->assertTrue($n <= $k, "invalid limits");
        if ($m !== null) {
            $this->assertTrue($m <= $k, "invalid limits");
            $this->assertTrue($n <= $m, "invalid limits");
        }
    }

    private function validateMems(): void {
        foreach ($this->module->mems as $i => $mem) {
            $this->validateMemType($mem->type);
        }
    }

    private function validateMemType(MemType $memType): void {
        $this->validateLimits($memType->limits, 2**16);
    }

    private function validateGlobals(): void {
        foreach ($this->module->globals as $i => $global) {
            $this->validateExpr($global->init, TODO);
            $this->validateExprIsConstant($global->init);
        }
    }

    private function validateExpr(array $instrs, TODO $todo): void {
    }

    private function validateExprIsConstant(array $instrs): void {
        $this->assertTrue(count($instrs) === 1, "expr is not constant");
        match ($instrs[0]::class) {
            Instrs\Numeric\F32Const::class,
            Instrs\Numeric\F64Const::class,
            Instrs\Numeric\I32Const::class,
            Instrs\Numeric\I64Const::class,
            Instrs\Reference\RefFunc::class,
            Instrs\Reference\RefNull::class => true,
            Instrs\Variable\GlobalGet::class => TODO,
            default => $this->addError("expr is not constant"),
        };
    }

    private function validateElems(): void {
        foreach ($this->module->elems as $i => $elem) {
            todo();
        }
    }

    private function validateDatas(): void {
        foreach ($this->module->datas as $i => $data) {
            todo();
        }
    }

    private function validateStart(): void { TODO(); }

    private function validateImports(): void { TODO(); }

    private function validateExports(): void { TODO(); }

    private function validateMemsCount(): void { TODO(); }

    private function validateExportsHaveDifferentNames(): void { TODO(); }

    /**
     * @param Func $func
     */
    private function validateFunc($func): void
    {
        // Reset validation state for each function
        $this->valueStack = [];
        $this->controlStack = [];

        // Extract actual function signature types from func
        if (! isset($this->module->types[$func->type])) {
            $this->addError("Invalid function type index: {$func->type}");
            return;
        }

        $funcType = $this->module->types[$func->type];
        $this->pushCtrl('block', $funcType->params, $funcType->results);

        $this->validateInstrs($func->body);
        $this->validateEnd();
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
                $this->pushVal(ValType::I32);
                break;

            case Instrs\Numeric\I64Const::class:
                $this->pushVal(ValType::I64);
                break;

            case Instrs\Numeric\F32Const::class:
                $this->pushVal(ValType::F32);
                break;

            case Instrs\Numeric\F64Const::class:
                $this->pushVal(ValType::F64);
                break;

                // Numeric instructions - F32 binary ops
            case Instrs\Numeric\F32Add::class:
            case Instrs\Numeric\F32Sub::class:
            case Instrs\Numeric\F32Mul::class:
            case Instrs\Numeric\F32Div::class:
            case Instrs\Numeric\F32Min::class:
            case Instrs\Numeric\F32Max::class:
            case Instrs\Numeric\F32CopySign::class:
                $this->validateF32BinaryOp();
                break;

                // Numeric instructions - F32 unary ops
            case Instrs\Numeric\F32Abs::class:
            case Instrs\Numeric\F32Neg::class:
            case Instrs\Numeric\F32Ceil::class:
            case Instrs\Numeric\F32Floor::class:
            case Instrs\Numeric\F32Trunc::class:
            case Instrs\Numeric\F32Nearest::class:
            case Instrs\Numeric\F32Sqrt::class:
                $this->validateF32UnaryOp();
                break;

                // Numeric instructions - F32 compare ops
            case Instrs\Numeric\F32Eq::class:
            case Instrs\Numeric\F32Ne::class:
            case Instrs\Numeric\F32Lt::class:
            case Instrs\Numeric\F32Gt::class:
            case Instrs\Numeric\F32Le::class:
            case Instrs\Numeric\F32Ge::class:
                $this->validateF32CompareOp();
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
                $this->validateI32BinaryOp();
                break;

            case Instrs\Numeric\I32Eqz::class:
            case Instrs\Numeric\I32Clz::class:
            case Instrs\Numeric\I32Ctz::class:
            case Instrs\Numeric\I32Popcnt::class:
                $this->validateI32UnaryOp();
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
                $this->validateI32CompareOp();
                break;

            case Instrs\Parametric\Drop::class:
                $this->popVal();
                break;

            case Instrs\Control\Nop::class:
                break;

            case Instrs\Parametric\Select::class:
                $this->validateSelect();
                break;

            case Instrs\Control\Unreachable::class:
                $this->unreachable();
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
                $this->validateElse();
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

                // Numeric instructions - F64 binary ops
            case Instrs\Numeric\F64Add::class:
            case Instrs\Numeric\F64Sub::class:
            case Instrs\Numeric\F64Mul::class:
            case Instrs\Numeric\F64Div::class:
            case Instrs\Numeric\F64Min::class:
            case Instrs\Numeric\F64Max::class:
            case Instrs\Numeric\F64CopySign::class:
                $this->validateF64BinaryOp();
                break;

                // Numeric instructions - F64 unary ops
            case Instrs\Numeric\F64Abs::class:
            case Instrs\Numeric\F64Neg::class:
            case Instrs\Numeric\F64Ceil::class:
            case Instrs\Numeric\F64Floor::class:
            case Instrs\Numeric\F64Trunc::class:
            case Instrs\Numeric\F64Nearest::class:
            case Instrs\Numeric\F64Sqrt::class:
                $this->validateF64UnaryOp();
                break;

                // Numeric instructions - F64 compare ops
            case Instrs\Numeric\F64Eq::class:
            case Instrs\Numeric\F64Ne::class:
            case Instrs\Numeric\F64Lt::class:
            case Instrs\Numeric\F64Gt::class:
            case Instrs\Numeric\F64Le::class:
            case Instrs\Numeric\F64Ge::class:
                $this->validateF64CompareOp();
                break;

                // Numeric instructions - I64 binary ops
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
                $this->validateI64BinaryOp();
                break;

                // Numeric instructions - I64 unary ops
            case Instrs\Numeric\I64Eqz::class:
            case Instrs\Numeric\I64Clz::class:
            case Instrs\Numeric\I64Ctz::class:
            case Instrs\Numeric\I64Popcnt::class:
                $this->validateI64UnaryOp();
                break;

                // Numeric instructions - I64 compare ops
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
                $this->validateI64CompareOp();
                break;

                // Variable instructions
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

                // Reference instructions
            case Instrs\Reference\RefNull::class:
                $this->validateRefNull($instr);
                break;

            case Instrs\Reference\RefIsNull::class:
                $this->validateRefIsNull();
                break;

            case Instrs\Reference\RefFunc::class:
                $this->validateRefFunc($instr);
                break;

                // Type conversion instructions
            case Instrs\Numeric\I32WrapI64::class:
                $this->validateI32WrapI64();
                break;

            case Instrs\Numeric\I64ExtendI32S::class:
            case Instrs\Numeric\I64ExtendI32U::class:
                $this->validateI64ExtendI32();
                break;

            case Instrs\Numeric\F32DemoteF64::class:
                $this->validateF32DemoteF64();
                break;

            case Instrs\Numeric\F64PromoteF32::class:
                $this->validateF64PromoteF32();
                break;

            default:
                $this->addError('Unsupported instruction: ' . $instr::class);
        }
    }

    private function pushVal(?ValType $type): void
    {
        $this->valueStack[] = $type;
    }

    private function popVal(): ?ValType
    {
        $currentFrame = $this->controlStack[0] ?? throw new ValidationFailureException('No control frame available');
        if (count($this->valueStack) === $currentFrame->height && $currentFrame->unreachable) {
            return null;
        }
        if (count($this->valueStack) === $currentFrame->height) {
            throw new ValidationFailureException('Value stack underflow');
        }
        return array_pop($this->valueStack);
    }

    private function popValExpected(?ValType $expect): ?ValType
    {
        $actual = $this->popVal();
        if ($actual !== $expect && $actual !== null && $expect !== null) {
            $this->addError('Type mismatch');
        }
        return $actual;
    }

    /**
     * @param list<ValType> $types
     */
    private function pushVals(array $types): void
    {
        foreach ($types as $type) {
            $this->pushVal($type);
        }
    }

    /**
     * @param list<ValType> $types
     * @return list<ValType>
     */
    private function popVals(array $types): array
    {
        $popped = [];
        foreach (array_reverse($types) as $type) {
            $poppedVal = $this->popValExpected($type);
            array_unshift($popped, $poppedVal ?? $type);
        }
        return $popped;
    }

    /**
     * @param list<ValType> $in
     * @param list<ValType> $out
     */
    private function pushCtrl(string $opcode, array $in, array $out): void
    {
        $frame = new ControlFrame($opcode, $in, $out, count($this->valueStack), false);
        array_unshift($this->controlStack, $frame);
        $this->pushVals($in);
    }

    private function popCtrl(): ControlFrame
    {
        if (count($this->controlStack) === 0) {
            throw new ValidationFailureException('Control stack underflow');
        }
        $frame = $this->controlStack[0];
        $this->popVals($frame->endTypes);
        if (count($this->valueStack) !== $frame->height) {
            throw new ValidationFailureException('Invalid stack height');
        }
        array_shift($this->controlStack);
        return $frame;
    }

    /**
     * @return list<ValType>
     */
    private function labelTypes(ControlFrame $frame): array
    {
        return $frame->opcode === 'loop' ? $frame->startTypes : $frame->endTypes;
    }

    private function unreachable(): void
    {
        $currentFrame = $this->controlStack[0] ?? throw new ValidationFailureException('No control frame available');
        $this->valueStack = array_slice($this->valueStack, 0, $currentFrame->height);
        // Replace current frame with unreachable version
        $this->controlStack[0] = new ControlFrame(
            $currentFrame->opcode,
            $currentFrame->startTypes,
            $currentFrame->endTypes,
            $currentFrame->height,
            true
        );
    }

    private function assertTrue(bool $x, string $message): void {
        $x || $this->addError($message);
    }

    private function addError(string $message): void
    {
        $this->errors[] = $message;
    }

    private function validateI32BinaryOp(): void
    {
        $this->popValExpected(ValType::I32);
        $this->popValExpected(ValType::I32);
        $this->pushVal(ValType::I32);
    }

    private function validateI32UnaryOp(): void
    {
        $this->popValExpected(ValType::I32);
        $this->pushVal(ValType::I32);
    }

    private function validateI32CompareOp(): void
    {
        $this->popValExpected(ValType::I32);
        $this->popValExpected(ValType::I32);
        $this->pushVal(ValType::I32);
    }

    private function validateSelect(): void
    {
        $this->popValExpected(ValType::I32);
        $t1 = $this->popVal();
        $t2 = $this->popVal();
        if (! (($t1 === null || $t1->isNum()) && ($t2 === null || $t2->isNum()) || ($t1 === null || $t1->isVec()) && ($t2 === null || $t2->isVec()))) {
            $this->addError('Invalid select operand types');
            return;
        }
        if ($t1 !== $t2 && $t1 !== null && $t2 !== null) {
            $this->addError('Type mismatch in select');
        }
        $this->pushVal($t1 === null ? $t2 : $t1);
    }

    private function validateBlock(Instrs\Control\Block $instr): void
    {
        [$paramTypes, $resultTypes] = $this->extractBlockTypes($instr->type);
        $this->popVals($paramTypes);
        $this->pushCtrl('block', $paramTypes, $resultTypes);
    }

    private function validateLoop(Instrs\Control\Loop $instr): void
    {
        [$paramTypes, $resultTypes] = $this->extractBlockTypes($instr->type);
        $this->popVals($paramTypes);
        $this->pushCtrl('loop', $paramTypes, $resultTypes);
    }

    private function validateIf(Instrs\Control\If_ $instr): void
    {
        [$paramTypes, $resultTypes] = $this->extractBlockTypes($instr->type);
        $this->popValExpected(ValType::I32);
        $this->popVals($paramTypes);
        $this->pushCtrl('if', $paramTypes, $resultTypes);
    }

    private function validateEnd(): void
    {
        $frame = $this->popCtrl();
        $this->pushVals($frame->endTypes);
    }

    private function validateElse(): void
    {
        $frame = $this->popCtrl();
        if ($frame->opcode !== 'if') {
            $this->addError('else without matching if');
            return;
        }
        $this->pushCtrl('else', $frame->startTypes, $frame->endTypes);
    }

    private function validateBr(Instrs\Control\Br $instr): void
    {
        $labelIdx = $instr->label;
        if (count($this->controlStack) <= $labelIdx) {
            $this->addError('Invalid label index');
            return;
        }
        $targetFrame = $this->controlStack[$labelIdx] ?? null;
        if ($targetFrame === null) {
            $this->addError('Invalid label index');
            return;
        }
        $this->popVals($this->labelTypes($targetFrame));
        $this->unreachable();
    }

    private function validateBrIf(Instrs\Control\BrIf $instr): void
    {
        $labelIdx = $instr->label;
        if (count($this->controlStack) <= $labelIdx) {
            $this->addError('Invalid label index');
            return;
        }
        $this->popValExpected(ValType::I32);
        $targetFrame = $this->controlStack[$labelIdx] ?? null;
        if ($targetFrame === null) {
            $this->addError('Invalid label index');
            return;
        }
        $labelType = $this->labelTypes($targetFrame);
        $this->popVals($labelType);
        $this->pushVals($labelType);
    }

    private function validateBrTable(Instrs\Control\BrTable $instr): void
    {
        $labelIndices = $instr->labelTable;
        $defaultLabel = $instr->defaultLabel;
        $this->popValExpected(ValType::I32);

        if (count($this->controlStack) <= $defaultLabel) {
            $this->addError('Invalid default label index');
            return;
        }

        $defaultFrame = $this->controlStack[$defaultLabel] ?? null;
        if ($defaultFrame === null) {
            $this->addError('Invalid default label');
            return;
        }
        $arity = count($this->labelTypes($defaultFrame));

        foreach ($labelIndices as $labelIdx) {
            if (count($this->controlStack) <= $labelIdx) {
                $this->addError('Invalid label index');
                return;
            }
            $labelFrame = $this->controlStack[$labelIdx] ?? null;
            if ($labelFrame === null) {
                $this->addError('Invalid label index');
                return;
            }
            if (count($this->labelTypes($labelFrame)) !== $arity) {
                $this->addError('Inconsistent label arities');
                return;
            }
            $types = $this->labelTypes($labelFrame);
            $this->pushVals($this->popVals($types));
        }

        $this->popVals($this->labelTypes($defaultFrame));
        $this->unreachable();
    }

    private function validateF32BinaryOp(): void
    {
        $this->popValExpected(ValType::F32);
        $this->popValExpected(ValType::F32);
        $this->pushVal(ValType::F32);
    }

    private function validateF32UnaryOp(): void
    {
        $this->popValExpected(ValType::F32);
        $this->pushVal(ValType::F32);
    }

    private function validateF32CompareOp(): void
    {
        $this->popValExpected(ValType::F32);
        $this->popValExpected(ValType::F32);
        $this->pushVal(ValType::I32);
    }

    private function validateF64BinaryOp(): void
    {
        $this->popValExpected(ValType::F64);
        $this->popValExpected(ValType::F64);
        $this->pushVal(ValType::F64);
    }

    private function validateF64UnaryOp(): void
    {
        $this->popValExpected(ValType::F64);
        $this->pushVal(ValType::F64);
    }

    private function validateF64CompareOp(): void
    {
        $this->popValExpected(ValType::F64);
        $this->popValExpected(ValType::F64);
        $this->pushVal(ValType::I32);
    }

    private function validateI64BinaryOp(): void
    {
        $this->popValExpected(ValType::I64);
        $this->popValExpected(ValType::I64);
        $this->pushVal(ValType::I64);
    }

    private function validateI64UnaryOp(): void
    {
        $this->popValExpected(ValType::I64);
        $this->pushVal(ValType::I64);
    }

    private function validateI64CompareOp(): void
    {
        $this->popValExpected(ValType::I64);
        $this->popValExpected(ValType::I64);
        $this->pushVal(ValType::I32);
    }

    private function validateCall(Instrs\Control\Call $instr): void
    {
        // TODO: Validate function signature from module context
        $this->addError('Call instruction validation not fully implemented');
    }

    private function validateCallIndirect(Instrs\Control\CallIndirect $instr): void
    {
        // TODO: Validate function table and type signature
        $this->popValExpected(ValType::I32);
        $this->addError('CallIndirect instruction validation not fully implemented');
    }

    private function validateReturn(): void
    {
        if (count($this->controlStack) === 0) {
            $this->addError('Return outside function');
            return;
        }
        $funcFrame = $this->controlStack[count($this->controlStack) - 1];
        $this->popVals($funcFrame->endTypes);
        $this->unreachable();
    }

    private function validateLocalGet(Instrs\Variable\LocalGet $instr): void
    {
        // TODO: Validate local variable index and type from function context
        $this->pushVal(null);
        $this->addError('LocalGet instruction validation not fully implemented');
    }

    private function validateLocalSet(Instrs\Variable\LocalSet $instr): void
    {
        // TODO: Validate local variable index and type from function context
        $this->popVal();
        $this->addError('LocalSet instruction validation not fully implemented');
    }

    private function validateLocalTee(Instrs\Variable\LocalTee $instr): void
    {
        // TODO: Validate local variable index and type from function context
        $val = $this->popVal();
        $this->pushVal($val);
        $this->addError('LocalTee instruction validation not fully implemented');
    }

    private function validateGlobalGet(Instrs\Variable\GlobalGet $instr): void
    {
        // TODO: Validate global variable index and type from module context
        $this->pushVal(null);
        $this->addError('GlobalGet instruction validation not fully implemented');
    }

    private function validateGlobalSet(Instrs\Variable\GlobalSet $instr): void
    {
        // TODO: Validate global variable index and type from module context
        $this->popVal();
        $this->addError('GlobalSet instruction validation not fully implemented');
    }

    private function validateRefNull(Instrs\Reference\RefNull $instr): void
    {
        // TODO: Push the correct reference type based on $instr->type
        $this->pushVal(null);
        $this->addError('RefNull instruction validation not fully implemented');
    }

    private function validateRefIsNull(): void
    {
        $this->popVal(); // Pop reference value
        $this->pushVal(ValType::I32);
    }

    private function validateRefFunc(Instrs\Reference\RefFunc $instr): void
    {
        // TODO: Validate function index from module context
        $this->pushVal(null);
        $this->addError('RefFunc instruction validation not fully implemented');
    }

    private function validateI32WrapI64(): void
    {
        $this->popValExpected(ValType::I64);
        $this->pushVal(ValType::I32);
    }

    private function validateI64ExtendI32(): void
    {
        $this->popValExpected(ValType::I32);
        $this->pushVal(ValType::I64);
    }

    private function validateF32DemoteF64(): void
    {
        $this->popValExpected(ValType::F64);
        $this->pushVal(ValType::F32);
    }

    private function validateF64PromoteF32(): void
    {
        $this->popValExpected(ValType::F32);
        $this->pushVal(ValType::F64);
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
            if (! isset($this->module->types[$blockType->inner])) {
                $this->addError("Invalid type index: {$blockType->inner}");
                return new FuncType([], []);
            }
            return $this->module->types[$blockType->inner];
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
}
