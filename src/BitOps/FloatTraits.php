<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\BitOps;

final readonly class FloatTraits
{
    public const int F32_EXPONENT_BITS = 8;
    public const int F32_MANTISSA_BITS = 23;

    public const int F32_SIGN_MASK = 0b10000000_00000000_00000000_00000000;
    public const int F32_EXPONENT_MASK = 0b01111111_10000000_00000000_00000000;
    public const int F32_MANTISSA_MASK = 0b00000000_01111111_11111111_11111111;

    public const int F32_SIGN_UNSIGNED = 0;
    public const int F32_SIGN_SIGNED = 0b10000000_00000000_00000000_00000000;
    public const int F32_EXPONENT_NAN = 0b01111111_10000000_00000000_00000000;

    public const int F64_EXPONENT_BITS = 11;
    public const int F64_MANTISSA_BITS = 52;

    public const int F64_SIGN_MASK = PHP_INT_MIN;
    public const int F64_EXPONENT_MASK = 0b01111111_11110000_00000000_00000000_00000000_00000000_00000000_00000000;
    public const int F64_MANTISSA_MASK = 0b00000000_00001111_11111111_11111111_11111111_11111111_11111111_11111111;

    public const int F64_SIGN_UNSIGNED = 0;
    public const int F64_SIGN_SIGNED = PHP_INT_MIN;
    public const int F64_EXPONENT_NAN = 0b01111111_11110000_00000000_00000000_00000000_00000000_00000000_00000000;

    private function __construct()
    {
    }

    public static function getF32SignBit(Signedness $sign): int
    {
        return match ($sign) {
            Signedness::Unsigned => self::F32_SIGN_UNSIGNED,
            Signedness::Signed => self::F32_SIGN_SIGNED,
        };
    }

    public static function getF64SignBit(Signedness $sign): int
    {
        return match ($sign) {
            Signedness::Unsigned => self::F64_SIGN_UNSIGNED,
            Signedness::Signed => self::F64_SIGN_SIGNED,
        };
    }
}
