<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions;

use Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Control;
use Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Control\BlockType;
use Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Memory;
use Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Numeric;
use Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Parametric;
use Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Reference;
use Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Table;
use Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Variable;
use Nsfisis\Waddiwasi\Structure\Types\RefType;
use Nsfisis\Waddiwasi\Structure\Types\ValType;

abstract readonly class Instr
{
    // Numeric instructions
    final public static function F32Abs(): Numeric\F32Abs
    {
        return new Numeric\F32Abs();
    }
    final public static function F32Add(): Numeric\F32Add
    {
        return new Numeric\F32Add();
    }
    final public static function F32Ceil(): Numeric\F32Ceil
    {
        return new Numeric\F32Ceil();
    }
    /**
     * @param F32 $value
     */
    final public static function F32Const(float $value): Numeric\F32Const
    {
        return new Numeric\F32Const($value);
    }
    final public static function F32ConvertI32S(): Numeric\F32ConvertI32S
    {
        return new Numeric\F32ConvertI32S();
    }
    final public static function F32ConvertI32U(): Numeric\F32ConvertI32U
    {
        return new Numeric\F32ConvertI32U();
    }
    final public static function F32ConvertI64S(): Numeric\F32ConvertI64S
    {
        return new Numeric\F32ConvertI64S();
    }
    final public static function F32ConvertI64U(): Numeric\F32ConvertI64U
    {
        return new Numeric\F32ConvertI64U();
    }
    final public static function F32CopySign(): Numeric\F32CopySign
    {
        return new Numeric\F32CopySign();
    }
    final public static function F32DemoteF64(): Numeric\F32DemoteF64
    {
        return new Numeric\F32DemoteF64();
    }
    final public static function F32Div(): Numeric\F32Div
    {
        return new Numeric\F32Div();
    }
    final public static function F32Eq(): Numeric\F32Eq
    {
        return new Numeric\F32Eq();
    }
    final public static function F32Floor(): Numeric\F32Floor
    {
        return new Numeric\F32Floor();
    }
    final public static function F32Ge(): Numeric\F32Ge
    {
        return new Numeric\F32Ge();
    }
    final public static function F32Gt(): Numeric\F32Gt
    {
        return new Numeric\F32Gt();
    }
    final public static function F32Le(): Numeric\F32Le
    {
        return new Numeric\F32Le();
    }
    final public static function F32Lt(): Numeric\F32Lt
    {
        return new Numeric\F32Lt();
    }
    final public static function F32Max(): Numeric\F32Max
    {
        return new Numeric\F32Max();
    }
    final public static function F32Min(): Numeric\F32Min
    {
        return new Numeric\F32Min();
    }
    final public static function F32Mul(): Numeric\F32Mul
    {
        return new Numeric\F32Mul();
    }
    final public static function F32Ne(): Numeric\F32Ne
    {
        return new Numeric\F32Ne();
    }
    final public static function F32Nearest(): Numeric\F32Nearest
    {
        return new Numeric\F32Nearest();
    }
    final public static function F32Neg(): Numeric\F32Neg
    {
        return new Numeric\F32Neg();
    }
    final public static function F32ReinterpretI32(): Numeric\F32ReinterpretI32
    {
        return new Numeric\F32ReinterpretI32();
    }
    final public static function F32ReinterpretI64(): Numeric\F32ReinterpretI64
    {
        return new Numeric\F32ReinterpretI64();
    }
    final public static function F32Sqrt(): Numeric\F32Sqrt
    {
        return new Numeric\F32Sqrt();
    }
    final public static function F32Sub(): Numeric\F32Sub
    {
        return new Numeric\F32Sub();
    }
    final public static function F32Trunc(): Numeric\F32Trunc
    {
        return new Numeric\F32Trunc();
    }
    final public static function F64Abs(): Numeric\F64Abs
    {
        return new Numeric\F64Abs();
    }
    final public static function F64Add(): Numeric\F64Add
    {
        return new Numeric\F64Add();
    }
    final public static function F64Ceil(): Numeric\F64Ceil
    {
        return new Numeric\F64Ceil();
    }
    /**
     * @param F64 $value
     */
    final public static function F64Const(float $value): Numeric\F64Const
    {
        return new Numeric\F64Const($value);
    }
    final public static function F64ConvertI32S(): Numeric\F64ConvertI32S
    {
        return new Numeric\F64ConvertI32S();
    }
    final public static function F64ConvertI32U(): Numeric\F64ConvertI32U
    {
        return new Numeric\F64ConvertI32U();
    }
    final public static function F64ConvertI64S(): Numeric\F64ConvertI64S
    {
        return new Numeric\F64ConvertI64S();
    }
    final public static function F64ConvertI64U(): Numeric\F64ConvertI64U
    {
        return new Numeric\F64ConvertI64U();
    }
    final public static function F64CopySign(): Numeric\F64CopySign
    {
        return new Numeric\F64CopySign();
    }
    final public static function F64Div(): Numeric\F64Div
    {
        return new Numeric\F64Div();
    }
    final public static function F64Eq(): Numeric\F64Eq
    {
        return new Numeric\F64Eq();
    }
    final public static function F64Floor(): Numeric\F64Floor
    {
        return new Numeric\F64Floor();
    }
    final public static function F64Ge(): Numeric\F64Ge
    {
        return new Numeric\F64Ge();
    }
    final public static function F64Gt(): Numeric\F64Gt
    {
        return new Numeric\F64Gt();
    }
    final public static function F64Le(): Numeric\F64Le
    {
        return new Numeric\F64Le();
    }
    final public static function F64Lt(): Numeric\F64Lt
    {
        return new Numeric\F64Lt();
    }
    final public static function F64Max(): Numeric\F64Max
    {
        return new Numeric\F64Max();
    }
    final public static function F64Min(): Numeric\F64Min
    {
        return new Numeric\F64Min();
    }
    final public static function F64Mul(): Numeric\F64Mul
    {
        return new Numeric\F64Mul();
    }
    final public static function F64Ne(): Numeric\F64Ne
    {
        return new Numeric\F64Ne();
    }
    final public static function F64Nearest(): Numeric\F64Nearest
    {
        return new Numeric\F64Nearest();
    }
    final public static function F64Neg(): Numeric\F64Neg
    {
        return new Numeric\F64Neg();
    }
    final public static function F64PromoteF32(): Numeric\F64PromoteF32
    {
        return new Numeric\F64PromoteF32();
    }
    final public static function F64ReinterpretI32(): Numeric\F64ReinterpretI32
    {
        return new Numeric\F64ReinterpretI32();
    }
    final public static function F64ReinterpretI64(): Numeric\F64ReinterpretI64
    {
        return new Numeric\F64ReinterpretI64();
    }
    final public static function F64Sqrt(): Numeric\F64Sqrt
    {
        return new Numeric\F64Sqrt();
    }
    final public static function F64Sub(): Numeric\F64Sub
    {
        return new Numeric\F64Sub();
    }
    final public static function F64Trunc(): Numeric\F64Trunc
    {
        return new Numeric\F64Trunc();
    }
    final public static function I32Add(): Numeric\I32Add
    {
        return new Numeric\I32Add();
    }
    final public static function I32And(): Numeric\I32And
    {
        return new Numeric\I32And();
    }
    final public static function I32Clz(): Numeric\I32Clz
    {
        return new Numeric\I32Clz();
    }
    /**
     * @param S64 $value
     */
    final public static function I32Const(int $value): Numeric\I32Const
    {
        return new Numeric\I32Const($value);
    }
    final public static function I32Ctz(): Numeric\I32Ctz
    {
        return new Numeric\I32Ctz();
    }
    final public static function I32DivS(): Numeric\I32DivS
    {
        return new Numeric\I32DivS();
    }
    final public static function I32DivU(): Numeric\I32DivU
    {
        return new Numeric\I32DivU();
    }
    final public static function I32Eq(): Numeric\I32Eq
    {
        return new Numeric\I32Eq();
    }
    final public static function I32Eqz(): Numeric\I32Eqz
    {
        return new Numeric\I32Eqz();
    }
    final public static function I32Extend16S(): Numeric\I32Extend16S
    {
        return new Numeric\I32Extend16S();
    }
    final public static function I32Extend8S(): Numeric\I32Extend8S
    {
        return new Numeric\I32Extend8S();
    }
    final public static function I32GeS(): Numeric\I32GeS
    {
        return new Numeric\I32GeS();
    }
    final public static function I32GeU(): Numeric\I32GeU
    {
        return new Numeric\I32GeU();
    }
    final public static function I32GtS(): Numeric\I32GtS
    {
        return new Numeric\I32GtS();
    }
    final public static function I32GtU(): Numeric\I32GtU
    {
        return new Numeric\I32GtU();
    }
    final public static function I32LeS(): Numeric\I32LeS
    {
        return new Numeric\I32LeS();
    }
    final public static function I32LeU(): Numeric\I32LeU
    {
        return new Numeric\I32LeU();
    }
    final public static function I32LtS(): Numeric\I32LtS
    {
        return new Numeric\I32LtS();
    }
    final public static function I32LtU(): Numeric\I32LtU
    {
        return new Numeric\I32LtU();
    }
    final public static function I32Mul(): Numeric\I32Mul
    {
        return new Numeric\I32Mul();
    }
    final public static function I32Ne(): Numeric\I32Ne
    {
        return new Numeric\I32Ne();
    }
    final public static function I32Or(): Numeric\I32Or
    {
        return new Numeric\I32Or();
    }
    final public static function I32Popcnt(): Numeric\I32Popcnt
    {
        return new Numeric\I32Popcnt();
    }
    final public static function I32ReinterpretF32(): Numeric\I32ReinterpretF32
    {
        return new Numeric\I32ReinterpretF32();
    }
    final public static function I32ReinterpretF64(): Numeric\I32ReinterpretF64
    {
        return new Numeric\I32ReinterpretF64();
    }
    final public static function I32RemS(): Numeric\I32RemS
    {
        return new Numeric\I32RemS();
    }
    final public static function I32RemU(): Numeric\I32RemU
    {
        return new Numeric\I32RemU();
    }
    final public static function I32RotL(): Numeric\I32RotL
    {
        return new Numeric\I32RotL();
    }
    final public static function I32RotR(): Numeric\I32RotR
    {
        return new Numeric\I32RotR();
    }
    final public static function I32Shl(): Numeric\I32Shl
    {
        return new Numeric\I32Shl();
    }
    final public static function I32ShrS(): Numeric\I32ShrS
    {
        return new Numeric\I32ShrS();
    }
    final public static function I32ShrU(): Numeric\I32ShrU
    {
        return new Numeric\I32ShrU();
    }
    final public static function I32Sub(): Numeric\I32Sub
    {
        return new Numeric\I32Sub();
    }
    final public static function I32TruncF32S(): Numeric\I32TruncF32S
    {
        return new Numeric\I32TruncF32S();
    }
    final public static function I32TruncF32U(): Numeric\I32TruncF32U
    {
        return new Numeric\I32TruncF32U();
    }
    final public static function I32TruncF64S(): Numeric\I32TruncF64S
    {
        return new Numeric\I32TruncF64S();
    }
    final public static function I32TruncF64U(): Numeric\I32TruncF64U
    {
        return new Numeric\I32TruncF64U();
    }
    final public static function I32TruncSatF32S(): Numeric\I32TruncSatF32S
    {
        return new Numeric\I32TruncSatF32S();
    }
    final public static function I32TruncSatF32U(): Numeric\I32TruncSatF32U
    {
        return new Numeric\I32TruncSatF32U();
    }
    final public static function I32TruncSatF64S(): Numeric\I32TruncSatF64S
    {
        return new Numeric\I32TruncSatF64S();
    }
    final public static function I32TruncSatF64U(): Numeric\I32TruncSatF64U
    {
        return new Numeric\I32TruncSatF64U();
    }
    final public static function I32WrapI64(): Numeric\I32WrapI64
    {
        return new Numeric\I32WrapI64();
    }
    final public static function I32Xor(): Numeric\I32Xor
    {
        return new Numeric\I32Xor();
    }
    final public static function I64Add(): Numeric\I64Add
    {
        return new Numeric\I64Add();
    }
    final public static function I64And(): Numeric\I64And
    {
        return new Numeric\I64And();
    }
    final public static function I64Clz(): Numeric\I64Clz
    {
        return new Numeric\I64Clz();
    }
    /**
     * @param S64 $value
     */
    final public static function I64Const(int $value): Numeric\I64Const
    {
        return new Numeric\I64Const($value);
    }
    final public static function I64Ctz(): Numeric\I64Ctz
    {
        return new Numeric\I64Ctz();
    }
    final public static function I64DivS(): Numeric\I64DivS
    {
        return new Numeric\I64DivS();
    }
    final public static function I64DivU(): Numeric\I64DivU
    {
        return new Numeric\I64DivU();
    }
    final public static function I64Eq(): Numeric\I64Eq
    {
        return new Numeric\I64Eq();
    }
    final public static function I64Eqz(): Numeric\I64Eqz
    {
        return new Numeric\I64Eqz();
    }
    final public static function I64Extend16S(): Numeric\I64Extend16S
    {
        return new Numeric\I64Extend16S();
    }
    final public static function I64Extend32S(): Numeric\I64Extend32S
    {
        return new Numeric\I64Extend32S();
    }
    final public static function I64Extend8S(): Numeric\I64Extend8S
    {
        return new Numeric\I64Extend8S();
    }
    final public static function I64ExtendI32S(): Numeric\I64ExtendI32S
    {
        return new Numeric\I64ExtendI32S();
    }
    final public static function I64ExtendI32U(): Numeric\I64ExtendI32U
    {
        return new Numeric\I64ExtendI32U();
    }
    final public static function I64GeS(): Numeric\I64GeS
    {
        return new Numeric\I64GeS();
    }
    final public static function I64GeU(): Numeric\I64GeU
    {
        return new Numeric\I64GeU();
    }
    final public static function I64GtS(): Numeric\I64GtS
    {
        return new Numeric\I64GtS();
    }
    final public static function I64GtU(): Numeric\I64GtU
    {
        return new Numeric\I64GtU();
    }
    final public static function I64LeS(): Numeric\I64LeS
    {
        return new Numeric\I64LeS();
    }
    final public static function I64LeU(): Numeric\I64LeU
    {
        return new Numeric\I64LeU();
    }
    final public static function I64LtS(): Numeric\I64LtS
    {
        return new Numeric\I64LtS();
    }
    final public static function I64LtU(): Numeric\I64LtU
    {
        return new Numeric\I64LtU();
    }
    final public static function I64Mul(): Numeric\I64Mul
    {
        return new Numeric\I64Mul();
    }
    final public static function I64Ne(): Numeric\I64Ne
    {
        return new Numeric\I64Ne();
    }
    final public static function I64Or(): Numeric\I64Or
    {
        return new Numeric\I64Or();
    }
    final public static function I64Popcnt(): Numeric\I64Popcnt
    {
        return new Numeric\I64Popcnt();
    }
    final public static function I64ReinterpretF32(): Numeric\I64ReinterpretF32
    {
        return new Numeric\I64ReinterpretF32();
    }
    final public static function I64ReinterpretF64(): Numeric\I64ReinterpretF64
    {
        return new Numeric\I64ReinterpretF64();
    }
    final public static function I64RemS(): Numeric\I64RemS
    {
        return new Numeric\I64RemS();
    }
    final public static function I64RemU(): Numeric\I64RemU
    {
        return new Numeric\I64RemU();
    }
    final public static function I64RotL(): Numeric\I64RotL
    {
        return new Numeric\I64RotL();
    }
    final public static function I64RotR(): Numeric\I64RotR
    {
        return new Numeric\I64RotR();
    }
    final public static function I64Shl(): Numeric\I64Shl
    {
        return new Numeric\I64Shl();
    }
    final public static function I64ShrS(): Numeric\I64ShrS
    {
        return new Numeric\I64ShrS();
    }
    final public static function I64ShrU(): Numeric\I64ShrU
    {
        return new Numeric\I64ShrU();
    }
    final public static function I64Sub(): Numeric\I64Sub
    {
        return new Numeric\I64Sub();
    }
    final public static function I64TruncF32S(): Numeric\I64TruncF32S
    {
        return new Numeric\I64TruncF32S();
    }
    final public static function I64TruncF32U(): Numeric\I64TruncF32U
    {
        return new Numeric\I64TruncF32U();
    }
    final public static function I64TruncF64S(): Numeric\I64TruncF64S
    {
        return new Numeric\I64TruncF64S();
    }
    final public static function I64TruncF64U(): Numeric\I64TruncF64U
    {
        return new Numeric\I64TruncF64U();
    }
    final public static function I64TruncSatF32S(): Numeric\I64TruncSatF32S
    {
        return new Numeric\I64TruncSatF32S();
    }
    final public static function I64TruncSatF32U(): Numeric\I64TruncSatF32U
    {
        return new Numeric\I64TruncSatF32U();
    }
    final public static function I64TruncSatF64S(): Numeric\I64TruncSatF64S
    {
        return new Numeric\I64TruncSatF64S();
    }
    final public static function I64TruncSatF64U(): Numeric\I64TruncSatF64U
    {
        return new Numeric\I64TruncSatF64U();
    }
    final public static function I64Xor(): Numeric\I64Xor
    {
        return new Numeric\I64Xor();
    }

    // Reference instructions
    final public static function RefFunc(int $func): Reference\RefFunc
    {
        return new Reference\RefFunc($func);
    }
    final public static function RefIsNull(): Reference\RefIsNull
    {
        return new Reference\RefIsNull();
    }
    final public static function RefNull(RefType $type): Reference\RefNull
    {
        return new Reference\RefNull($type);
    }

    // Parametric instructions
    final public static function Drop(): Parametric\Drop
    {
        return new Parametric\Drop();
    }
    /**
     * @param list<ValType> $types
     */
    final public static function Select(array $types): Parametric\Select
    {
        return new Parametric\Select($types);
    }

    // Variable instructions
    final public static function GlobalGet(int $var): Variable\GlobalGet
    {
        return new Variable\GlobalGet($var);
    }
    final public static function GlobalSet(int $var): Variable\GlobalSet
    {
        return new Variable\GlobalSet($var);
    }
    final public static function LocalGet(int $var): Variable\LocalGet
    {
        return new Variable\LocalGet($var);
    }
    final public static function LocalSet(int $var): Variable\LocalSet
    {
        return new Variable\LocalSet($var);
    }
    final public static function LocalTee(int $var): Variable\LocalTee
    {
        return new Variable\LocalTee($var);
    }

    // Table instructions
    final public static function ElemDrop(int $elem): Table\ElemDrop
    {
        return new Table\ElemDrop($elem);
    }
    final public static function TableCopy(int $to, int $from): Table\TableCopy
    {
        return new Table\TableCopy($to, $from);
    }
    final public static function TableFill(int $table): Table\TableFill
    {
        return new Table\TableFill($table);
    }
    final public static function TableGet(int $table): Table\TableGet
    {
        return new Table\TableGet($table);
    }
    final public static function TableGrow(int $table): Table\TableGrow
    {
        return new Table\TableGrow($table);
    }
    final public static function TableInit(int $to, int $from): Table\TableInit
    {
        return new Table\TableInit($to, $from);
    }
    final public static function TableSet(int $table): Table\TableSet
    {
        return new Table\TableSet($table);
    }
    final public static function TableSize(int $table): Table\TableSize
    {
        return new Table\TableSize($table);
    }

    // Memory instructions
    final public static function DataDrop(int $data): Memory\DataDrop
    {
        return new Memory\DataDrop($data);
    }
    /**
     * @param U32 $offset
     * @param U32 $align
     */
    final public static function F32Load(int $offset, int $align): Memory\F32Load
    {
        return new Memory\F32Load($offset, $align);
    }
    /**
     * @param U32 $offset
     * @param U32 $align
     */
    final public static function F32Store(int $offset, int $align): Memory\F32Store
    {
        return new Memory\F32Store($offset, $align);
    }
    /**
     * @param U32 $offset
     * @param U32 $align
     */
    final public static function F64Load(int $offset, int $align): Memory\F64Load
    {
        return new Memory\F64Load($offset, $align);
    }
    /**
     * @param U32 $offset
     * @param U32 $align
     */
    final public static function F64Store(int $offset, int $align): Memory\F64Store
    {
        return new Memory\F64Store($offset, $align);
    }
    /**
     * @param U32 $offset
     * @param U32 $align
     */
    final public static function I32Load(int $offset, int $align): Memory\I32Load
    {
        return new Memory\I32Load($offset, $align);
    }
    /**
     * @param U32 $offset
     * @param U32 $align
     */
    final public static function I32Load16S(int $offset, int $align): Memory\I32Load16S
    {
        return new Memory\I32Load16S($offset, $align);
    }
    /**
     * @param U32 $offset
     * @param U32 $align
     */
    final public static function I32Load16U(int $offset, int $align): Memory\I32Load16U
    {
        return new Memory\I32Load16U($offset, $align);
    }
    /**
     * @param U32 $offset
     * @param U32 $align
     */
    final public static function I32Load8S(int $offset, int $align): Memory\I32Load8S
    {
        return new Memory\I32Load8S($offset, $align);
    }
    /**
     * @param U32 $offset
     * @param U32 $align
     */
    final public static function I32Load8U(int $offset, int $align): Memory\I32Load8U
    {
        return new Memory\I32Load8U($offset, $align);
    }
    /**
     * @param U32 $offset
     * @param U32 $align
     */
    final public static function I32Store(int $offset, int $align): Memory\I32Store
    {
        return new Memory\I32Store($offset, $align);
    }
    /**
     * @param U32 $offset
     * @param U32 $align
     */
    final public static function I32Store16(int $offset, int $align): Memory\I32Store16
    {
        return new Memory\I32Store16($offset, $align);
    }
    /**
     * @param U32 $offset
     * @param U32 $align
     */
    final public static function I32Store8(int $offset, int $align): Memory\I32Store8
    {
        return new Memory\I32Store8($offset, $align);
    }
    /**
     * @param U32 $offset
     * @param U32 $align
     */
    final public static function I64Load(int $offset, int $align): Memory\I64Load
    {
        return new Memory\I64Load($offset, $align);
    }
    /**
     * @param U32 $offset
     * @param U32 $align
     */
    final public static function I64Load16S(int $offset, int $align): Memory\I64Load16S
    {
        return new Memory\I64Load16S($offset, $align);
    }
    /**
     * @param U32 $offset
     * @param U32 $align
     */
    final public static function I64Load16U(int $offset, int $align): Memory\I64Load16U
    {
        return new Memory\I64Load16U($offset, $align);
    }
    /**
     * @param U32 $offset
     * @param U32 $align
     */
    final public static function I64Load32S(int $offset, int $align): Memory\I64Load32S
    {
        return new Memory\I64Load32S($offset, $align);
    }
    /**
     * @param U32 $offset
     * @param U32 $align
     */
    final public static function I64Load32U(int $offset, int $align): Memory\I64Load32U
    {
        return new Memory\I64Load32U($offset, $align);
    }
    /**
     * @param U32 $offset
     * @param U32 $align
     */
    final public static function I64Load8S(int $offset, int $align): Memory\I64Load8S
    {
        return new Memory\I64Load8S($offset, $align);
    }
    /**
     * @param U32 $offset
     * @param U32 $align
     */
    final public static function I64Load8U(int $offset, int $align): Memory\I64Load8U
    {
        return new Memory\I64Load8U($offset, $align);
    }
    /**
     * @param U32 $offset
     * @param U32 $align
     */
    final public static function I64Store(int $offset, int $align): Memory\I64Store
    {
        return new Memory\I64Store($offset, $align);
    }
    /**
     * @param U32 $offset
     * @param U32 $align
     */
    final public static function I64Store16(int $offset, int $align): Memory\I64Store16
    {
        return new Memory\I64Store16($offset, $align);
    }
    /**
     * @param U32 $offset
     * @param U32 $align
     */
    final public static function I64Store32(int $offset, int $align): Memory\I64Store32
    {
        return new Memory\I64Store32($offset, $align);
    }
    /**
     * @param U32 $offset
     * @param U32 $align
     */
    final public static function I64Store8(int $offset, int $align): Memory\I64Store8
    {
        return new Memory\I64Store8($offset, $align);
    }
    final public static function MemoryCopy(): Memory\MemoryCopy
    {
        return new Memory\MemoryCopy();
    }
    final public static function MemoryFill(): Memory\MemoryFill
    {
        return new Memory\MemoryFill();
    }
    final public static function MemoryGrow(): Memory\MemoryGrow
    {
        return new Memory\MemoryGrow();
    }
    final public static function MemoryInit(int $data): Memory\MemoryInit
    {
        return new Memory\MemoryInit($data);
    }
    final public static function MemorySize(): Memory\MemorySize
    {
        return new Memory\MemorySize();
    }

    // Control instructions
    /**
     * @param list<Instr> $body
     */
    final public static function Block(BlockType $type, array $body): Control\Block
    {
        return new Control\Block($type, $body);
    }
    final public static function Br(int $label): Control\Br
    {
        return new Control\Br($label);
    }
    final public static function BrIf(int $label): Control\BrIf
    {
        return new Control\BrIf($label);
    }
    /**
     * @param list<int> $labelTable
     */
    final public static function BrTable(array $labelTable, int $defaultLabel): Control\BrTable
    {
        return new Control\BrTable($labelTable, $defaultLabel);
    }
    final public static function Call(int $func): Control\Call
    {
        return new Control\Call($func);
    }
    final public static function CallIndirect(int $funcTable, int $type): Control\CallIndirect
    {
        return new Control\CallIndirect($funcTable, $type);
    }
    final public static function Else_(): Control\Else_
    {
        return new Control\Else_();
    }
    final public static function End(): Control\End
    {
        return new Control\End();
    }
    /**
     * @param list<Instr> $thenBody
     * @param list<Instr> $elseBody
     */
    final public static function If_(BlockType $type, array $thenBody, array $elseBody): Control\If_
    {
        return new Control\If_($type, $thenBody, $elseBody);
    }
    /**
     * @param list<Instr> $body
     */
    final public static function Loop(BlockType $type, array $body): Control\Loop
    {
        return new Control\Loop($type, $body);
    }
    final public static function Nop(): Control\Nop
    {
        return new Control\Nop();
    }
    final public static function Return_(): Control\Return_
    {
        return new Control\Return_();
    }
    final public static function Unreachable(): Control\Unreachable
    {
        return new Control\Unreachable();
    }

    abstract public static function opName(): string;
}
