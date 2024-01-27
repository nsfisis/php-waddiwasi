<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution;

abstract readonly class Num
{
    /**
     * @param S32 $value
     */
    final public static function I32(int $value): Nums\I32
    {
        return new Nums\I32($value);
    }

    /**
     * @param S64 $value
     */
    final public static function I64(int $value): Nums\I64
    {
        return new Nums\I64($value);
    }

    /**
     * @param F32 $value
     */
    final public static function F32(float $value): Nums\F32_
    {
        return new Nums\F32_($value);
    }

    /**
     * @param F64 $value
     */
    final public static function F64(float $value): Nums\F64_
    {
        return new Nums\F64_($value);
    }
}
