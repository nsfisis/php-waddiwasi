<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\BitOps;

use function assert;
use function is_float;
use function is_int;
use function ord;
use function pack;
use function strlen;
use function unpack;

final readonly class BinaryConversion
{
    private function __construct()
    {
    }

    /**
     * @return non-empty-string
     */
    public static function serializeI8(int $x): string
    {
        return self::packInt(PackIntSpecifiers::Int8, $x);
    }

    /**
     * @return non-empty-string
     */
    public static function serializeI16(int $x): string
    {
        return self::packInt(PackIntSpecifiers::Int16LittleEndian, $x);
    }

    /**
     * @return non-empty-string
     */
    public static function serializeI32(int $x): string
    {
        return self::packInt(PackIntSpecifiers::Int32LittleEndian, $x);
    }

    /**
     * @return non-empty-string
     */
    public static function serializeI64(int $x): string
    {
        return self::packInt(PackIntSpecifiers::Int64LittleEndian, $x);
    }

    /**
     * @return non-empty-string
     */
    public static function serializeI64InBigEndian(int $x): string
    {
        return self::packInt(PackIntSpecifiers::Int64BigEndian, $x);
    }

    /**
     * @return non-empty-string
     */
    public static function serializeF32(float $x): string
    {
        // PHP's pack() does not preserve NaN payload bits, so we have to
        // manually check if the float is NaN and convert it to a 32-bit float.
        if (is_nan($x)) {
            [$sign, , $payload] = FloatOps::destructF64Bits($x);
            $i = 0
                | FloatTraits::getF32SignBit(Signedness::fromSignBit($sign))
                | FloatTraits::F32_EXPONENT_NAN
                | ($payload >> (FloatTraits::F64_MANTISSA_BITS - FloatTraits::F32_MANTISSA_BITS));
            return self::packInt(PackIntSpecifiers::Int32LittleEndian, $i);
        } else {
            return self::packFloat(PackFloatSpecifiers::Float32LittleEndian, $x);
        }
    }

    /**
     * @return non-empty-string
     */
    public static function serializeF64(float $x): string
    {
        return self::packFloat(PackFloatSpecifiers::Float64LittleEndian, $x);
    }

    /**
     * @param non-empty-string $s
     */
    public static function deserializeS8(string $s): int
    {
        return self::unpackInt(UnpackIntSpecifiers::SignedInt8, $s);
    }

    /**
     * @param non-empty-string $s
     */
    public static function deserializeS16(string $s): int
    {
        // PHP does not support unpacking signed integer in fixed endian, so we
        // have to swap byte order if the machine's endianness is not little
        // endian.
        return self::unpackInt(UnpackIntSpecifiers::SignedInt16MachineOrder, self::byteSwapIfNeeded($s));
    }

    /**
     * @param non-empty-string $s
     */
    public static function deserializeS32(string $s): int
    {
        // PHP does not support unpacking signed integer in fixed endian, so we
        // have to swap byte order if the machine's endianness is not little
        // endian.
        return self::unpackInt(UnpackIntSpecifiers::SignedInt32MachineOrder, self::byteSwapIfNeeded($s));
    }

    /**
     * @param non-empty-string $s
     */
    public static function deserializeS64(string $s): int
    {
        // PHP does not support unpacking signed integer in fixed endian, so we
        // have to swap byte order if the machine's endianness is not little
        // endian.
        return self::unpackInt(UnpackIntSpecifiers::SignedInt64MachineOrder, self::byteSwapIfNeeded($s));
    }

    /**
     * @param non-empty-string $s
     */
    public static function deserializeF32(string $s): float
    {
        // PHP's unpack() does not preserve NaN payload bits, so we have to
        // manually check if the float is NaN and convert it to a 32-bit float.
        $i = self::unpackInt(UnpackIntSpecifiers::UnsignedInt32LittleEndian, $s);
        if (($i & FloatTraits::F32_EXPONENT_MASK) === FloatTraits::F32_EXPONENT_NAN) {
            $sign = $i & FloatTraits::F32_SIGN_MASK;
            $payload = $i & FloatTraits::F32_MANTISSA_MASK;
            $j = 0 |
                FloatTraits::getF64SignBit(Signedness::fromSignBit($sign)) |
                FloatTraits::F64_EXPONENT_NAN |
                ($payload << (FloatTraits::F64_MANTISSA_BITS - FloatTraits::F32_MANTISSA_BITS));
            return self::unpackFloat(UnpackFloatSpecifiers::Float64LittleEndian, self::packInt(PackIntSpecifiers::Int64LittleEndian, $j));
        } else {
            return self::unpackFloat(UnpackFloatSpecifiers::Float32LittleEndian, $s);
        }
    }

    /**
     * @param non-empty-string $s
     */
    public static function deserializeF64(string $s): float
    {
        return self::unpackFloat(UnpackFloatSpecifiers::Float64LittleEndian, $s);
    }

    public static function reinterpretI32AsF32(int $x): float
    {
        return self::deserializeF32(self::serializeI32($x));
    }

    public static function reinterpretI64AsF32(int $x): float
    {
        return self::deserializeF32(self::serializeI64($x));
    }

    public static function reinterpretI32AsF64(int $x): float
    {
        return self::deserializeF64(self::serializeI32($x));
    }

    public static function reinterpretI64AsF64(int $x): float
    {
        return self::deserializeF64(self::serializeI64($x));
    }

    public static function reinterpretF32AsI32(float $x): int
    {
        return self::deserializeS32(self::serializeF32($x));
    }

    public static function reinterpretF64AsI32(float $x): int
    {
        return self::deserializeS32(self::serializeF64($x));
    }

    public static function reinterpretF32AsI64(float $x): int
    {
        return self::deserializeS64(self::serializeF32($x));
    }

    public static function reinterpretF64AsI64(float $x): int
    {
        return self::deserializeS64(self::serializeF64($x));
    }

    /**
     * @param numeric-string $x
     */
    public static function convertBigIntToF32(string $x): float
    {
        // PHP's (float) cast is through f64, so we have to convert it to f32 directly.
        // i64 => f32 is not equal to i64 => f64 => f32.
        return self::reinterpretI32AsF32(self::convertBigIntToF32Bits($x));
    }

    /**
     * @return non-empty-string
     */
    private static function packInt(PackIntSpecifiers $spec, int $x): string
    {
        $result = pack($spec->value, $x);
        assert($result !== '');
        return $result;
    }

    /**
     * @return non-empty-string
     */
    private static function packFloat(PackFloatSpecifiers $spec, float $x): string
    {
        $result = pack($spec->value, $x);
        assert($result !== '');
        return $result;
    }

    /**
     * @param non-empty-string $s
     */
    private static function unpackInt(UnpackIntSpecifiers $spec, string $s): int
    {
        assert(strlen($s) === $spec->byteCount());
        $result = unpack($spec->value, $s);
        assert($result !== false && isset($result[1]) && is_int($result[1]));
        return $result[1];
    }

    /**
     * @param non-empty-string $s
     */
    private static function unpackFloat(UnpackFloatSpecifiers $spec, string $s): float
    {
        assert(strlen($s) === $spec->byteCount());
        $result = unpack($spec->value, $s);
        assert($result !== false && isset($result[1]) && is_float($result[1]));
        return $result[1];
    }

    /**
     * @param numeric-string $value
     */
    private static function convertBigIntToF32Bits(string $value): int
    {
        if ($value === '0') {
            return 0;
        }

        // Sign
        if (bccomp($value, '0') < 0) {
            $sign = Signedness::Signed;
            $value = bcsub('0', $value);
        } else {
            $sign = Signedness::Unsigned;
        }

        // Exponent
        if (bccomp($value, "9223372036854775807") <= 0) {
            $e = strlen(decbin((int)$value)) - 1;
        } else {
            for ($i = 63; ; $i++) {
                if (bccomp($value, bcpow('2', (string)$i)) < 0) {
                    $e = $i - 1;
                    break;
                }
            }
            assert(isset($e));
        }

        // Infinity
        if ($e >= 128) {
            return FloatTraits::getF32SignBit($sign) | FloatTraits::F32_INFINITY_BITS;
        }

        // Mantissa
        $p = bcpow('2', (string)$e); // p = 2^e
        $numerator = bcmul(bcsub($value, $p), (string)(1 << 23)); // (value - p) * 2^23
        $quotient = (int)bcdiv($numerator, $p, scale: 0);
        $remainder = bcmod($numerator, $p);

        // Round
        $half = bcdiv($p, '2', scale: 0);
        if (bccomp($remainder, $half) > 0) {
            $quotient += 1;
        } elseif ($remainder === $half) {
            // Half to even
            if ($quotient % 2 === 1) {
                $quotient += 1;
            }
        }
        if ($quotient >= (1 << 23)) {
            $quotient -= (1 << 23);
            $e += 1;
            // Infinity
            if ($e >= 128) {
                return FloatTraits::getF32SignBit($sign) | FloatTraits::F32_INFINITY_BITS;
            }
        }

        return FloatTraits::getF32SignBit($sign) | (($e + 127) << FloatTraits::F32_MANTISSA_BITS) | $quotient;
    }

    private static function isLittleEndian(): bool
    {
        return pack("s", ord("a"))[0] === "a";
    }

    /**
     * @param non-empty-string $s
     * @return non-empty-string
     */
    private static function byteSwapIfNeeded(string $s): string
    {
        // note: currently phpstan cannot infer that strrev(non-empty-string) returns non-empty-string.
        $ret = self::isLittleEndian() ? $s : strrev($s);
        assert($ret !== '');
        return $ret;
    }
}
