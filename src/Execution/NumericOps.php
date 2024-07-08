<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution;

use InvalidArgumentException;
use function assert;
use function bcadd;
use function bccomp;
use function bcmod;
use function bcpow;
use function bcsub;
use function fdiv;
use function is_nan;
use function pack;
use function unpack;

final readonly class NumericOps
{
    private function __construct()
    {
    }

    public static function reinterpretI32AsF32(int $x): float
    {
        return self::deserializeF32FromBytes(self::serializeI32ToBytes($x));
    }

    public static function reinterpretI64AsF32(int $x): float
    {
        return self::deserializeF32FromBytes(self::serializeI64ToBytes($x));
    }

    public static function reinterpretI32AsF64(int $x): float
    {
        return self::deserializeF64FromBytes(self::serializeI32ToBytes($x));
    }

    public static function reinterpretI64AsF64(int $x): float
    {
        return self::deserializeF64FromBytes(self::serializeI64ToBytes($x));
    }

    public static function reinterpretF32AsI32(float $x): int
    {
        return self::deserializeI32FromBytes(self::serializeF32ToBytes($x));
    }

    public static function reinterpretF64AsI32(float $x): int
    {
        return self::deserializeI32FromBytes(self::serializeF64ToBytes($x));
    }

    public static function reinterpretF32AsI64(float $x): int
    {
        return self::deserializeI64FromBytes(self::serializeF32ToBytes($x));
    }

    public static function reinterpretF64AsI64(float $x): int
    {
        return self::deserializeI64FromBytes(self::serializeF64ToBytes($x));
    }

    public static function truncateF64ToF32(float $x): float
    {
        return self::deserializeF32FromBytes(self::serializeF32ToBytes($x));
    }

    public static function serializeI32ToBytes(int $x): string
    {
        return pack('l', $x);
    }

    public static function deserializeI32FromBytes(string $s): int
    {
        $result = unpack('l', $s);
        if ($result === false) {
            throw new InvalidArgumentException("Failed to unpack i32: $s");
        }
        return $result[1];
    }

    public static function serializeI64ToBytes(int $x): string
    {
        return pack('q', $x);
    }

    public static function deserializeI64FromBytes(string $s): int
    {
        $result = unpack('q', $s);
        if ($result === false) {
            throw new InvalidArgumentException("Failed to unpack i64: $s");
        }
        return $result[1];
    }

    public static function serializeF32ToBytes(float $x): string
    {
        return pack('f', $x);
    }

    public static function deserializeF32FromBytes(string $s): float
    {
        $result = unpack('f', $s);
        if ($result === false) {
            throw new InvalidArgumentException("Failed to unpack f32: $s");
        }
        return $result[1];
    }

    public static function serializeF64ToBytes(float $x): string
    {
        return pack('d', $x);
    }

    public static function deserializeF64FromBytes(string $s): float
    {
        $result = unpack('d', $s);
        if ($result === false) {
            throw new InvalidArgumentException("Failed to unpack f64: $s");
        }
        return $result[1];
    }

    public static function convertS32ToU32(int $x): int
    {
        // assert(-0x80000000 <= $x && $x <= 0x7FFFFFFF, "convertS32ToU32: out of range $x");
        if ($x < 0) {
            $buf = pack('l', $x);
            $result = unpack('L', $buf);
            assert($result !== false);
            assert(0x00000000 <= $result[1] && $result[1] <= 0xFFFFFFFF, "convertS32ToU32: out of range $result[1]");
            return $result[1];
        } else {
            return $x;
        }
    }

    public static function convertU32ToS32(int $x): int
    {
        assert(0x00000000 <= $x && $x <= 0xFFFFFFFF);
        if (($x & 0x80000000) !== 0) {
            $buf = pack('L', $x);
            $result = unpack('l', $buf);
            assert($result !== false);
            assert(-0x80000000 <= $result[1] && $result[1] <= 0x7FFFFFFF, "convertU32ToS32: out of range $result[1]");
            return $result[1];
        } else {
            return $x;
        }
    }

    public static function convertS64ToBigUInt(int $x): string
    {
        if ($x < 0) {
            return bcadd((string)$x, '18446744073709551616');
        } else {
            return (string)$x;
        }
    }

    public static function bigIntToPhpInt(string $s): int
    {
        $result = bcmod($s, bcpow('2', '64'));
        if ($result[0] === '-') {
            // 2^63 <= -$result
            if (bccomp(bcpow('2', '63'), bcsub('0', $result)) <= 0) {
                $result = bcadd($result, bcpow('2', '64'));
            }
        } else {
            // 2^63-1 < $result
            if (bccomp(bcsub(bcpow('2', '63'), '1'), $result) < 0) {
                $result = bcsub($result, bcpow('2', '64'));
            }
        }
        return (int)$result;
    }

    public static function getFloatSign(float $p): int
    {
        if (is_nan($p)) {
            $n = self::reinterpretF64AsI64($p);
            // The MSB is the sign bit.
            return (($n >> 63) & 1) === 1 ? -1 : 1;
        } elseif ($p !== 0.0) {
            return $p < 0.0 ? -1 : 1;
        } else {
            // Comparison with 0 does not work for -0.0.
            return fdiv(1, $p) < 0.0 ? -1 : 1;
        }
    }
}
