<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\BitOps;

final readonly class FloatOps
{
    private function __construct()
    {
    }

    /**
     * @return array{int, int, int}
     */
    public static function destructF64Bits(float $x): array
    {
        $i = BinaryConversion::deserializeS64(BinaryConversion::serializeF64($x));
        return [
            $i & FloatTraits::F64_SIGN_MASK,
            $i & FloatTraits::F64_EXPONENT_MASK,
            $i & FloatTraits::F64_MANTISSA_MASK,
        ];
    }

    public static function constructNan(Signedness $sign, float $x): float
    {
        [, , $payload] = self::destructF64Bits($x);
        $i = 0 |
            FloatTraits::getF64SignBit($sign) |
            FloatTraits::F64_EXPONENT_NAN |
            $payload;
        return BinaryConversion::deserializeF64(BinaryConversion::serializeI64($i));
    }

    public static function getSignedness(float $x): Signedness
    {
        return self::destructF64Bits($x)[0] === 0 ? Signedness::Unsigned : Signedness::Signed;
    }
}
