<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Utility;

use InvalidArgumentException;
use function pack;
use function unpack;

final readonly class BinaryConversion
{
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
}
