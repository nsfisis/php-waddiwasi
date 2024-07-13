<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Execution;

use InvalidArgumentException;
use function abs;
use function assert;
use function bcadd;
use function bccomp;
use function bcmod;
use function bcpow;
use function bcsub;
use function bindec;
use function ceil;
use function decbin;
use function fdiv;
use function floor;
use function intdiv;
use function is_infinite;
use function is_int;
use function is_nan;
use function max;
use function min;
use function pack;
use function round;
use function sqrt;
use function substr;
use function unpack;
use const PHP_INT_MAX;
use const PHP_INT_MIN;
use const PHP_ROUND_HALF_EVEN;

final readonly class NumericOps
{
    private function __construct()
    {
    }

    public static function f32Abs(float $x): float
    {
        return abs($x);
    }

    public static function f32Add(float $x, float $y): float
    {
        return self::truncateF64ToF32($x + $y);
    }

    public static function f32Ceil(float $x): float
    {
        return ceil($x);
    }

    public static function f32ConvertI32S(int $x): float
    {
        return self::truncateF64ToF32((float) $x);
    }

    public static function f32ConvertI32U(int $x): float
    {
        $x = self::convertS32ToU32($x);
        return self::truncateF64ToF32((float) $x);
    }

    public static function f32ConvertI64S(int $x): float
    {
        return self::truncateF64ToF32((float) $x);
    }

    public static function f32ConvertI64U(int $x): float
    {
        return self::truncateF64ToF32((float) $x);
    }

    public static function f32CopySign(float $x, float $y): float
    {
        $xSign = self::getFloatSign($x);
        $ySign = self::getFloatSign($y);
        return $xSign === $ySign ? $x : -$x;
    }

    public static function f32DemoteF64(float $x): float
    {
        return $x;
    }

    public static function f32Div(float $x, float $y): float
    {
        return self::truncateF64ToF32(fdiv($x, $y));
    }

    public static function f32Eq(float $x, float $y): bool
    {
        return $x === $y;
    }

    public static function f32Floor(float $x): float
    {
        return floor($x);
    }

    public static function f32Ge(float $x, float $y): bool
    {
        return $x >= $y;
    }

    public static function f32Gt(float $x, float $y): bool
    {
        return $x > $y;
    }

    public static function f32Le(float $x, float $y): bool
    {
        return $x <= $y;
    }

    public static function f32Lt(float $x, float $y): bool
    {
        return $x < $y;
    }

    public static function f32Max(float $x, float $y): float
    {
        if (is_nan($x) || is_nan($y)) {
            // PHP's standard max() handles NaNs in diffrent way than WebAssembly spec does.
            return NAN;
        }
        return max($x, $y);
    }

    public static function f32Min(float $x, float $y): float
    {
        if (is_nan($x) || is_nan($y)) {
            // PHP's standard min() handles NaNs in diffrent way than WebAssembly spec does.
            return NAN;
        }
        return min($x, $y);
    }

    public static function f32Mul(float $x, float $y): float
    {
        return self::truncateF64ToF32($x * $y);
    }

    public static function f32Ne(float $x, float $y): bool
    {
        return $x !== $y;
    }

    public static function f32Nearest(float $x): float
    {
        return round($x, mode: PHP_ROUND_HALF_EVEN);
    }

    public static function f32Neg(float $x): float
    {
        return -$x;
    }

    public static function f32ReinterpretI32(int $x): float
    {
        return self::reinterpretI32AsF32($x);
    }

    public static function f32ReinterpretI64(int $x): float
    {
        return self::reinterpretI64AsF32($x);
    }

    public static function f32Sqrt(float $x): float
    {
        return self::truncateF64ToF32(sqrt($x));
    }

    public static function f32Sub(float $x, float $y): float
    {
        return self::truncateF64ToF32($x - $y);
    }

    public static function f32Trunc(float $x): float
    {
        if ($x < 0) {
            return self::truncateF64ToF32(ceil($x));
        } else {
            return self::truncateF64ToF32(floor($x));
        }
    }

    public static function f64Abs(float $x): float
    {
        return abs($x);
    }

    public static function f64Add(float $x, float $y): float
    {
        return $x + $y;
    }

    public static function f64Ceil(float $x): float
    {
        return ceil($x);
    }

    public static function f64ConvertI32S(int $x): float
    {
        return (float) $x;
    }

    public static function f64ConvertI32U(int $x): float
    {
        return (float) $x;
    }

    public static function f64ConvertI64S(int $x): float
    {
        return (float) $x;
    }

    public static function f64ConvertI64U(int $x): float
    {
        return (float) $x;
    }

    public static function f64CopySign(float $x, float $y): float
    {
        $xSign = self::getFloatSign($x);
        $ySign = self::getFloatSign($y);
        return $xSign === $ySign ? $x : -$x;
    }

    public static function f64Div(float $x, float $y): float
    {
        return fdiv($x, $y);
    }

    public static function f64Eq(float $x, float $y): bool
    {
        return $x === $y;
    }

    public static function f64Floor(float $x): float
    {
        return floor($x);
    }

    public static function f64Ge(float $x, float $y): bool
    {
        return $x >= $y;
    }

    public static function f64Gt(float $x, float $y): bool
    {
        return $x > $y;
    }

    public static function f64Le(float $x, float $y): bool
    {
        return $x <= $y;
    }

    public static function f64Lt(float $x, float $y): bool
    {
        return $x < $y;
    }

    public static function f64Max(float $x, float $y): float
    {
        if (is_nan($x) || is_nan($y)) {
            // PHP's standard max() handles NaNs in diffrent way than WebAssembly spec does.
            return NAN;
        }
        return max($x, $y);
    }

    public static function f64Min(float $x, float $y): float
    {
        if (is_nan($x) || is_nan($y)) {
            // PHP's standard min() handles NaNs in diffrent way than WebAssembly spec does.
            return NAN;
        }
        return min($x, $y);
    }

    public static function f64Mul(float $x, float $y): float
    {
        return $x * $y;
    }

    public static function f64Ne(float $x, float $y): bool
    {
        return $x !== $y;
    }

    public static function f64Nearest(float $x): float
    {
        return round($x, mode: PHP_ROUND_HALF_EVEN);
    }

    public static function f64Neg(float $x): float
    {
        return -$x;
    }

    public static function f64PromoteF32(float $x): float
    {
        return $x;
    }

    public static function f64ReinterpretI32(int $x): float
    {
        return self::reinterpretI32AsF64($x);
    }

    public static function f64ReinterpretI64(int $x): float
    {
        return self::reinterpretI64AsF64($x);
    }

    public static function f64Sqrt(float $x): float
    {
        return sqrt($x);
    }

    public static function f64Sub(float $x, float $y): float
    {
        return $x - $y;
    }

    public static function f64Trunc(float $x): float
    {
        if ($x < 0) {
            return ceil($x);
        } else {
            return floor($x);
        }
    }

    public static function i32Add(int $x, int $y): int
    {
        return self::convertU32ToS32(($x + $y) & 0xFFFFFFFF);
    }

    public static function i32And(int $x, int $y): int
    {
        $y = self::convertS32ToU32($y);
        $x = self::convertS32ToU32($x);
        return self::convertU32ToS32(($x & $y) & 0xFFFFFFFF);
    }

    public static function i32Clz(int $x): int
    {
        $x = self::convertS32ToU32($x);
        $zeros = 0;
        for ($i = 31; 0 <= $i; $i--) {
            if (($x & (1 << $i)) === 0) {
                $zeros++;
            } else {
                break;
            }
        }
        return $zeros;
    }

    public static function i32Ctz(int $x): int
    {
        $x = self::convertS32ToU32($x);
        $zeros = 0;
        for ($i = 0; $i < 32; $i++) {
            if (($x & (1 << $i)) === 0) {
                $zeros++;
            } else {
                break;
            }
        }
        return $zeros;
    }

    public static function i32DivS(int $x, int $y): int|TrapKind
    {
        if ($y === 0) {
            return TrapKind::DivideByZero;
        }
        if ($x === -2147483648 && $y === -1) {
            return TrapKind::IntegerOverflow;
        }
        return intdiv($x, $y);
    }

    public static function i32DivU(int $x, int $y): int|TrapKind
    {
        $y = self::convertS32ToU32($y);
        $x = self::convertS32ToU32($x);
        if ($y === 0) {
            return TrapKind::DivideByZero;
        }
        return self::convertU32ToS32(intdiv($x, $y));
    }

    public static function i32Eq(int $x, int $y): bool
    {
        return $x === $y;
    }

    public static function i32Eqz(int $x): bool
    {
        return $x === 0;
    }

    public static function i32Extend16S(int $x): int
    {
        $x = self::convertS32ToU32($x);
        $result = unpack('s', pack('S', $x & 0xFFFF));
        assert($result !== false);
        return $result[1];
    }

    public static function i32Extend8S(int $x): int
    {
        $x = self::convertS32ToU32($x);
        $result = unpack('c', pack('C', $x & 0xFF));
        assert($result !== false);
        return $result[1];
    }

    public static function i32GeS(int $x, int $y): bool
    {
        return $x >= $y;
    }

    public static function i32GeU(int $x, int $y): bool
    {
        $y = self::convertS32ToU32($y);
        $x = self::convertS32ToU32($x);
        return $x >= $y;
    }

    public static function i32GtS(int $x, int $y): bool
    {
        return $x > $y;
    }

    public static function i32GtU(int $x, int $y): bool
    {
        $y = self::convertS32ToU32($y);
        $x = self::convertS32ToU32($x);
        return $x > $y;
    }

    public static function i32LeS(int $x, int $y): bool
    {
        return $x <= $y;
    }

    public static function i32LeU(int $x, int $y): bool
    {
        $y = self::convertS32ToU32($y);
        $x = self::convertS32ToU32($x);
        return $x <= $y;
    }

    public static function i32LtS(int $x, int $y): bool
    {
        return $x < $y;
    }

    public static function i32LtU(int $x, int $y): bool
    {
        $y = self::convertS32ToU32($y);
        $x = self::convertS32ToU32($x);
        return $x < $y;
    }

    public static function i32Mul(int $x, int $y): int
    {
        return self::convertU32ToS32(($x * $y) & 0xFFFFFFFF);
    }

    public static function i32Ne(int $x, int $y): bool
    {
        return $x !== $y;
    }

    public static function i32Or(int $x, int $y): int
    {
        $y = self::convertS32ToU32($y);
        $x = self::convertS32ToU32($x);
        return self::convertU32ToS32(($x | $y) & 0xFFFFFFFF);
    }

    public static function i32Popcnt(int $x): int
    {
        $x = self::convertS32ToU32($x);
        $ones = 0;
        for ($i = 0; $i < 32; $i++) {
            if (($x & (1 << $i)) !== 0) {
                $ones++;
            }
        }
        return $ones;
    }

    public static function i32ReinterpretF32(float $x): int
    {
        return self::reinterpretF32AsI32($x);
    }

    public static function i32ReinterpretF64(float $x): int
    {
        return self::reinterpretF64AsI32($x);
    }

    public static function i32RemS(int $x, int $y): int|TrapKind
    {
        if ($y === 0) {
            return TrapKind::DivideByZero;
        }
        return $x % $y;
    }

    public static function i32RemU(int $x, int $y): int|TrapKind
    {
        $y = self::convertS32ToU32($y);
        $x = self::convertS32ToU32($x);
        if ($y === 0) {
            return TrapKind::DivideByZero;
        }
        return self::convertU32ToS32($x % $y);
    }

    public static function i32RotL(int $x, int $y): int
    {
        $y = self::convertS32ToU32($y);
        $x = self::convertS32ToU32($x);
        $k = $y % 32;
        return self::convertU32ToS32((($x << $k) | ($x >> (32 - $k))) & 0xFFFFFFFF);
    }

    public static function i32RotR(int $x, int $y): int
    {
        $y = self::convertS32ToU32($y);
        $x = self::convertS32ToU32($x);
        $k = $y % 32;
        return self::convertU32ToS32((($x >> $k) | ($x << (32 - $k))) & 0xFFFFFFFF);
    }

    public static function i32Shl(int $x, int $y): int
    {
        $y = self::convertS32ToU32($y);
        $k = $y % 32;
        return self::convertU32ToS32(($x << $k) & 0xFFFFFFFF);
    }

    public static function i32ShrS(int $x, int $y): int
    {
        $y = self::convertS32ToU32($y);
        $x = self::convertS32ToU32($x);
        $k = $y % 32;
        $signed = $x & 0x80000000;
        if ($signed !== 0) {
            $result = $x;
            for ($i = 0; $i < $k; $i++) {
                $result = ($result >> 1) | 0x80000000;
            }
            return self::convertU32ToS32($result);
        } else {
            return $x >> $k;
        }
    }

    public static function i32ShrU(int $x, int $y): int
    {
        $y = self::convertS32ToU32($y);
        $x = self::convertS32ToU32($x);
        $k = $y % 32;
        return self::convertU32ToS32($x >> $k);
    }

    public static function i32Sub(int $x, int $y): int
    {
        $y = self::convertS32ToU32($y);
        $x = self::convertS32ToU32($x);
        $yNeg = ((~$y & 0xFFFFFFFF) + 1) & 0xFFFFFFFF;
        return self::convertU32ToS32(($x + $yNeg) & 0xFFFFFFFF);
    }

    public static function i32TruncF32S(float $x): int|TrapKind
    {
        if (is_nan($x)) {
            return TrapKind::InvalidConversionToInteger;
        }
        if (is_infinite($x)) {
            return TrapKind::IntegerOverflow;
        }
        if ($x <= -2147483649.0 || 2147483648.0 <= $x) {
            return TrapKind::IntegerOverflow;
        }
        return (int) $x;
    }

    public static function i32TruncF32U(float $x): int|TrapKind
    {
        if (is_nan($x)) {
            return TrapKind::InvalidConversionToInteger;
        }
        if (is_infinite($x)) {
            return TrapKind::IntegerOverflow;
        }
        if ($x <= -1.0 || 4294967296.0 <= $x) {
            return TrapKind::IntegerOverflow;
        }
        return self::convertU32ToS32((int) $x);
    }

    public static function i32TruncF64S(float $x): int|TrapKind
    {
        if (is_nan($x)) {
            return TrapKind::InvalidConversionToInteger;
        }
        if (is_infinite($x)) {
            return TrapKind::IntegerOverflow;
        }
        if ($x <= -2147483649.0 || 2147483648.0 <= $x) {
            return TrapKind::IntegerOverflow;
        }
        return (int) $x;
    }

    public static function i32TruncF64U(float $x): int|TrapKind
    {
        if (is_nan($x)) {
            return TrapKind::InvalidConversionToInteger;
        }
        if (is_infinite($x)) {
            return TrapKind::IntegerOverflow;
        }
        if ($x <= -1.0 || 4294967296.0 <= $x) {
            return TrapKind::IntegerOverflow;
        }
        return self::convertU32ToS32((int) $x);
    }

    public static function i32TruncSatF32S(float $x): int
    {
        if ($x < -2147483648.0) {
            return -2147483648;
        } elseif (2147483647.0 < $x) {
            return 2147483647;
        } else {
            return (int) $x;
        }
    }

    public static function i32TruncSatF32U(float $x): int
    {
        if ($x < 0.0) {
            return 0;
        } elseif (4294967295.0 < $x) {
            return 4294967295;
        } else {
            return (int) $x;
        }
    }

    public static function i32TruncSatF64S(float $x): int
    {
        if ($x < -2147483648.0) {
            return -2147483648;
        } elseif (2147483647.0 < $x) {
            return 2147483647;
        } else {
            return (int) $x;
        }
    }

    public static function i32TruncSatF64U(float $x): int
    {
        if ($x < 0.0) {
            return 0;
        } elseif (4294967295.0 < $x) {
            return 4294967295;
        } else {
            return (int) $x;
        }
    }

    public static function i32WrapI64(int $x): int
    {
        return self::convertU32ToS32($x & 0xFFFFFFFF);
    }

    public static function i32Xor(int $x, int $y): int
    {
        $y = self::convertS32ToU32($y);
        $x = self::convertS32ToU32($x);
        return self::convertU32ToS32(($x ^ $y) & 0xFFFFFFFF);
    }

    public static function i64Add(int $x, int $y): int
    {
        return self::bigIntToPhpInt(bcadd((string)$x, (string)$y));
    }

    public static function i64And(int $x, int $y): int
    {
        return $x & $y;
    }

    public static function i64Clz(int $x): int
    {
        $zeros = 0;
        for ($i = 63; 0 <= $i; $i--) {
            if ($i === 63) {
                if ($x < 0) {
                    break;
                } else {
                    $zeros++;
                }
            } else {
                if (($x & (1 << $i)) === 0) {
                    $zeros++;
                } else {
                    break;
                }
            }
        }
        return $zeros;
    }

    public static function i64Ctz(int $x): int
    {
        $zeros = 0;
        for ($i = 0; $i < 64; $i++) {
            if ($i === 63) {
                if (0 <= $x) {
                    $zeros++;
                }
            } else {
                if (($x & (1 << $i)) === 0) {
                    $zeros++;
                } else {
                    break;
                }
            }
        }
        return $zeros;
    }

    public static function i64DivS(int $x, int $y): int|TrapKind
    {
        if ($y === 0) {
            return TrapKind::DivideByZero;
        }
        if ($x === PHP_INT_MIN && $y === -1) {
            return TrapKind::IntegerOverflow;
        }
        return intdiv($x, $y);
    }

    public static function i64DivU(int $x, int $y): int|TrapKind
    {
        $y = self::convertS64ToBigUInt($y);
        $x = self::convertS64ToBigUInt($x);
        if ($y === '0') {
            return TrapKind::DivideByZero;
        }
        return self::bigIntToPhpInt(bcdiv($x, $y, 0));
    }

    public static function i64Eq(int $x, int $y): bool
    {
        return $x === $y;
    }

    public static function i64Eqz(int $x): bool
    {
        return $x === 0;
    }

    public static function i64Extend16S(int $x): int
    {
        $result = unpack('s', pack('S', $x & 0xFFFF));
        assert($result !== false);
        return $result[1];
    }

    public static function i64Extend32S(int $x): int
    {
        $result = unpack('l', pack('L', $x & 0xFFFFFFFF));
        assert($result !== false);
        return $result[1];
    }

    public static function i64Extend8S(int $x): int
    {
        $result = unpack('c', pack('C', $x & 0xFF));
        assert($result !== false);
        return $result[1];
    }

    public static function i64ExtendI32S(int $x): int
    {
        return $x;
    }

    public static function i64ExtendI32U(int $x): int
    {
        $x = self::convertS32ToU32($x);
        return $x & 0xFFFFFFFF;
    }

    public static function i64GeS(int $x, int $y): bool
    {
        return $x >= $y;
    }

    public static function i64GeU(int $x, int $y): bool
    {
        $yPacked = pack('J', $y);
        $xPacked = pack('J', $x);
        return $xPacked >= $yPacked;
    }

    public static function i64GtS(int $x, int $y): bool
    {
        return $x > $y;
    }

    public static function i64GtU(int $x, int $y): bool
    {
        $yPacked = pack('J', $y);
        $xPacked = pack('J', $x);
        return $xPacked > $yPacked;
    }

    public static function i64LeS(int $x, int $y): bool
    {
        return $x <= $y;
    }

    public static function i64LeU(int $x, int $y): bool
    {
        $yPacked = pack('J', $y);
        $xPacked = pack('J', $x);
        return $xPacked <= $yPacked;
    }

    public static function i64LtS(int $x, int $y): bool
    {
        return $x < $y;
    }

    public static function i64LtU(int $x, int $y): bool
    {
        $yPacked = pack('J', $y);
        $xPacked = pack('J', $x);
        return $xPacked < $yPacked;
    }

    public static function i64Mul(int $x, int $y): int
    {
        return self::bigIntToPhpInt(bcmul((string)$x, (string)$y));
    }

    public static function i64Ne(int $x, int $y): bool
    {
        return $x !== $y;
    }

    public static function i64Or(int $x, int $y): int
    {
        return $x | $y;
    }

    public static function i64Popcnt(int $x): int
    {
        $ones = 0;
        for ($i = 0; $i < 64; $i++) {
            if (($x & (1 << $i)) !== 0) {
                $ones++;
            }
        }
        return $ones;
    }

    public static function i64ReinterpretF32(float $x): int
    {
        return self::reinterpretF32AsI64($x);
    }

    public static function i64ReinterpretF64(float $x): int
    {
        return self::reinterpretF64AsI64($x);
    }

    public static function i64RemS(int $x, int $y): int|TrapKind
    {
        if ($y === 0) {
            return TrapKind::DivideByZero;
        }
        return $x % $y;
    }

    public static function i64RemU(int $x, int $y): int|TrapKind
    {
        $y = self::convertS64ToBigUInt($y);
        $x = self::convertS64ToBigUInt($x);
        if ($y === '0') {
            return TrapKind::DivideByZero;
        }
        return self::bigIntToPhpInt(bcmod($x, $y, 0));
    }

    public static function i64RotL(int $x, int $y): int
    {
        $y = self::convertS64ToBigUInt($y);
        $k = (int)bcmod($y, '64');
        $left = $x << $k;
        $right = $x;
        for ($i = 0; $i < 64 - $k; $i++) {
            $right = ($right >> 1) & 0x7FFFFFFFFFFFFFFF;
        }
        return $left | $right;
    }

    public static function i64RotR(int $x, int $y): int
    {
        $y = self::convertS64ToBigUInt($y);
        $k = (int)bcmod($y, '64');
        $left = $x;
        for ($i = 0; $i < $k; $i++) {
            $left = ($left >> 1) & 0x7FFFFFFFFFFFFFFF;
        }
        $right = $x << (64 - $k);
        return $left | $right;
    }

    public static function i64Shl(int $x, int $y): int
    {
        $y = self::convertS64ToBigUInt($y);
        $k = (int)bcmod($y, '64');
        return $x << $k;
    }

    public static function i64ShrS(int $x, int $y): int
    {
        $y = self::convertS64ToBigUInt($y);
        $k = (int)bcmod($y, '64');
        return $x >> $k;
    }

    public static function i64ShrU(int $x, int $y): int
    {
        $y = self::convertS64ToBigUInt($y);
        $k = (int)bcmod($y, '64');
        if ($k === 0) {
            return $x;
        }
        // Perform shr_u by string-based manipulation because PHP does not
        // support shr_u operation.
        $result = bindec(substr(decbin($x), 0, -$k));
        assert(is_int($result));
        return $result;
    }

    public static function i64Sub(int $x, int $y): int
    {
        $result = self::bigIntToPhpInt(bcsub((string)$x, (string)$y));
        return $result;
    }

    public static function i64TruncF32S(float $x): int|TrapKind
    {
        if (is_nan($x)) {
            return TrapKind::InvalidConversionToInteger;
        }
        if (is_infinite($x)) {
            return TrapKind::IntegerOverflow;
        }
        if ($x <= -9223372036854775809.0 || 9223372036854775808.0 <= $x) {
            return TrapKind::IntegerOverflow;
        }
        return (int) $x;
    }

    public static function i64TruncF32U(float $x): int|TrapKind
    {
        if (is_nan($x)) {
            return TrapKind::InvalidConversionToInteger;
        }
        if (is_infinite($x)) {
            return TrapKind::IntegerOverflow;
        }
        if ($x <= -1.0 || 18446744073709551616.0 <= $x) {
            return TrapKind::IntegerOverflow;
        }
        return (int) $x;
    }

    public static function i64TruncF64S(float $x): int|TrapKind
    {
        if (is_nan($x)) {
            return TrapKind::InvalidConversionToInteger;
        }
        if (is_infinite($x)) {
            return TrapKind::IntegerOverflow;
        }
        if ($x <= -9223372036854775809.0 || 9223372036854775808.0 <= $x) {
            return TrapKind::IntegerOverflow;
        }
        return (int) $x;
    }

    public static function i64TruncF64U(float $x): int|TrapKind
    {
        if (is_nan($x)) {
            return TrapKind::InvalidConversionToInteger;
        }
        if (is_infinite($x)) {
            return TrapKind::IntegerOverflow;
        }
        if ($x <= -1.0 || 18446744073709551616.0 <= $x) {
            return TrapKind::IntegerOverflow;
        }
        return (int) $x;
    }

    public static function i64TruncSatF32S(float $x): int
    {
        if ($x < -9223372036854775808.0) {
            return PHP_INT_MIN;
        } elseif (9223372036854775807.0 < $x) {
            return PHP_INT_MAX;
        } else {
            return (int) $x;
        }
    }

    public static function i64TruncSatF32U(float $x): int
    {
        if ($x < 0.0) {
            return 0;
        } elseif (9223372036854775807.0 < $x) {
            // @todo
            return (int) $x;
        } else {
            return (int) $x;
        }
    }

    public static function i64TruncSatF64S(float $x): int
    {
        if ($x < -9223372036854775808.0) {
            return PHP_INT_MIN;
        } elseif (9223372036854775807.0 < $x) {
            return PHP_INT_MAX;
        } else {
            return (int) $x;
        }
    }

    public static function i64TruncSatF64U(float $x): int
    {
        if ($x < 0.0) {
            return 0;
        } elseif (9223372036854775807.0 < $x) {
            // @todo
            return (int) $x;
        } else {
            return (int) $x;
        }
    }

    public static function i64Xor(int $x, int $y): int
    {
        return $x ^ $y;
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
