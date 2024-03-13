<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution;

use Nsfisis\Waddiwasi\Structure\Types\RefType;

abstract readonly class Val
{
    final public static function Num(Num $inner): Vals\Num
    {
        return new Vals\Num($inner);
    }

    /**
     * @param S32 $value
     */
    final public static function NumI32(int $value): Vals\Num
    {
        return self::Num(Num::I32($value));
    }

    /**
     * @param S64 $value
     */
    final public static function NumI64(int $value): Vals\Num
    {
        return self::Num(Num::I64($value));
    }

    /**
     * @param F32 $value
     */
    final public static function NumF32(float $value): Vals\Num
    {
        return self::Num(Num::F32($value));
    }

    /**
     * @param F64 $value
     */
    final public static function NumF64(float $value): Vals\Num
    {
        return self::Num(Num::F64($value));
    }

    final public static function Ref(Ref $inner): Vals\Ref
    {
        return new Vals\Ref($inner);
    }

    final public static function RefNull(RefType $type): Vals\Ref
    {
        return self::Ref(Ref::RefNull($type));
    }

    final public static function RefFunc(int $addr): Vals\Ref
    {
        return self::Ref(Ref::RefFunc($addr));
    }

    final public static function RefExtern(int $addr): Vals\Ref
    {
        return self::Ref(Ref::RefExtern($addr));
    }
}
