<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Execution;

use FFI;
use FFI\CData;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\Limits;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\MemType;
use function assert;
use function count;

final class MemInst
{
    private const PAGE_SIZE = 64 * 1024;

    private const MAX_PAGES = 0x10000;

    private CData $dataU8;
    private CData $dataS8;

    private CData $dataU16_0;
    private CData $dataU16_1;
    private CData $dataS16_0;
    private CData $dataS16_1;

    private CData $dataU32_0;
    private CData $dataU32_1;
    private CData $dataU32_2;
    private CData $dataU32_3;
    private CData $dataS32_0;
    private CData $dataS32_1;
    private CData $dataS32_2;
    private CData $dataS32_3;

    private CData $dataS64_0;
    private CData $dataS64_1;
    private CData $dataS64_2;
    private CData $dataS64_3;
    private CData $dataS64_4;
    private CData $dataS64_5;
    private CData $dataS64_6;
    private CData $dataS64_7;

    private CData $dataF32_0;
    private CData $dataF32_1;
    private CData $dataF32_2;
    private CData $dataF32_3;

    private CData $dataF64_0;
    private CData $dataF64_1;
    private CData $dataF64_2;
    private CData $dataF64_3;
    private CData $dataF64_4;
    private CData $dataF64_5;
    private CData $dataF64_6;
    private CData $dataF64_7;

    private int $dataSize;

    private readonly FFI $ffi;

    public function __construct(
        public MemType $type,
    ) {
        $this->ffi = FFI::cdef();
        $this->initInternalMemory($type->limits->min);
    }

    public function size(): int
    {
        return $this->dataSize;
    }

    public function nPages(): int
    {
        return $this->size() / self::PAGE_SIZE;
    }

    /**
     * @return int
     *   Returns the original size of the memory in pages or -1 if failed.
     */
    public function grow(int $n): int
    {
        $sz = $this->nPages();
        $len = $sz + $n;
        if (self::MAX_PAGES < $len) {
            return -1;
        }

        $limits = $this->type->limits;
        $limits_ = new Limits($len, $limits->max);
        if (!$limits_->isValid()) {
            return -1;
        }

        $originalSize = $this->size();
        // @phpstan-ignore-next-line
        $originalData = $this->ffi->new("uint8_t[$originalSize+8]");
        assert($originalData !== null);
        FFI::memcpy($originalData, $this->dataU8, $originalSize);

        $this->initInternalMemory($len);

        FFI::memcpy($this->dataU8, $originalData, $originalSize);

        return $sz;
    }

    private function initInternalMemory(int $n): void
    {
        $this->dataSize = $n * self::PAGE_SIZE;

        // @phpstan-ignore-next-line
        $this->dataU8 = $this->ffi->new("uint8_t[$this->dataSize+8]");
        // @phpstan-ignore-next-line
        $this->dataS8 = $this->ffi->cast("int8_t[$this->dataSize]", $this->dataU8);

        // @phpstan-ignore-next-line
        $castInt = fn ($n, $signed, $offset) => $this->ffi->cast(
            sprintf("%sint%d_t[$this->dataSize/%d]", $signed ? "" : "u", $n, $n / 8),
            // @phpstan-ignore-next-line
            $this->ffi->cast("uint8_t[$this->dataSize+8]", $this->dataU8 + $offset),
        );

        // @phpstan-ignore-next-line
        $castFloat = fn ($n, $offset) => $this->ffi->cast(
            sprintf("%s[$this->dataSize/%d]", $n === 32 ? "float" : "double", $n / 8),
            // @phpstan-ignore-next-line
            $this->ffi->cast("uint8_t[$this->dataSize+8]", $this->dataU8 + $offset),
        );

        // @phpstan-ignore-next-line
        $this->dataU16_0 = $castInt(16, false, 0);
        // @phpstan-ignore-next-line
        $this->dataU16_1 = $castInt(16, false, 1);
        // @phpstan-ignore-next-line
        $this->dataS16_0 = $castInt(16, true, 0);
        // @phpstan-ignore-next-line
        $this->dataS16_1 = $castInt(16, true, 1);

        // @phpstan-ignore-next-line
        $this->dataU32_0 = $castInt(32, false, 0);
        // @phpstan-ignore-next-line
        $this->dataU32_1 = $castInt(32, false, 1);
        // @phpstan-ignore-next-line
        $this->dataU32_2 = $castInt(32, false, 2);
        // @phpstan-ignore-next-line
        $this->dataU32_3 = $castInt(32, false, 3);
        // @phpstan-ignore-next-line
        $this->dataS32_0 = $castInt(32, true, 0);
        // @phpstan-ignore-next-line
        $this->dataS32_1 = $castInt(32, true, 1);
        // @phpstan-ignore-next-line
        $this->dataS32_2 = $castInt(32, true, 2);
        // @phpstan-ignore-next-line
        $this->dataS32_3 = $castInt(32, true, 3);

        // @phpstan-ignore-next-line
        $this->dataS64_0 = $castInt(64, true, 0);
        // @phpstan-ignore-next-line
        $this->dataS64_1 = $castInt(64, true, 1);
        // @phpstan-ignore-next-line
        $this->dataS64_2 = $castInt(64, true, 2);
        // @phpstan-ignore-next-line
        $this->dataS64_3 = $castInt(64, true, 3);
        // @phpstan-ignore-next-line
        $this->dataS64_4 = $castInt(64, true, 4);
        // @phpstan-ignore-next-line
        $this->dataS64_5 = $castInt(64, true, 5);
        // @phpstan-ignore-next-line
        $this->dataS64_6 = $castInt(64, true, 6);
        // @phpstan-ignore-next-line
        $this->dataS64_7 = $castInt(64, true, 7);

        // @phpstan-ignore-next-line
        $this->dataF32_0 = $castFloat(32, 0);
        // @phpstan-ignore-next-line
        $this->dataF32_1 = $castFloat(32, 1);
        // @phpstan-ignore-next-line
        $this->dataF32_2 = $castFloat(32, 2);
        // @phpstan-ignore-next-line
        $this->dataF32_3 = $castFloat(32, 3);

        // @phpstan-ignore-next-line
        $this->dataF64_0 = $castFloat(64, 0);
        // @phpstan-ignore-next-line
        $this->dataF64_1 = $castFloat(64, 1);
        // @phpstan-ignore-next-line
        $this->dataF64_2 = $castFloat(64, 2);
        // @phpstan-ignore-next-line
        $this->dataF64_3 = $castFloat(64, 3);
        // @phpstan-ignore-next-line
        $this->dataF64_4 = $castFloat(64, 4);
        // @phpstan-ignore-next-line
        $this->dataF64_5 = $castFloat(64, 5);
        // @phpstan-ignore-next-line
        $this->dataF64_6 = $castFloat(64, 6);
        // @phpstan-ignore-next-line
        $this->dataF64_7 = $castFloat(64, 7);

        // @phpstan-ignore-next-line
        FFI::memset($this->dataU8, 0, $this->dataSize);
    }

    /**
     * @param list<int> $data
     */
    public function copyData(array $data, int $src, int $dst, int $len): void
    {
        assert(0 <= $len);
        assert(0 <= $src);
        assert(0 <= $dst);
        assert($src + $len <= count($data));
        assert($dst + $len <= $this->size());
        for ($i = 0; $i < $len; $i++) {
            $this->storeByte($dst + $i, $data[$src + $i]);
        }
    }

    public function memcpy(int $dst, int $src, int $len): void
    {
        assert(0 <= $len);
        assert(0 <= $src);
        assert(0 <= $dst);
        assert($src + $len <= $this->size());
        assert($dst + $len <= $this->size());
        if ($src === $dst || $len === 0) {
            return;
        }
        for ($i = 0; $i < $len; $i++) {
            $s = ($dst < $src) ? ($src + $i) : ($src + $len - 1 - $i);
            $d = ($dst < $src) ? ($dst + $i) : ($dst + $len - 1 - $i);
            $x = $this->loadByte($s);
            assert($x !== null);
            $this->storeByte($d, $x);
        }
    }

    public function memset(int $dst, int $c, int $len): void
    {
        assert(0 <= $len);
        assert(0 <= $dst);
        assert($dst + $len <= $this->size());
        for ($i = 0; $i < $len; $i++) {
            $this->storeI32_s8($dst + $i, $c);
        }
    }

    /**
     * @return ?S32
     */
    public function loadI32_s8(int $ptr): ?int
    {
        if ($this->size() < $ptr + 1) {
            return null;
        }
        // @phpstan-ignore-next-line
        $c = $this->dataS8[$ptr];
        assert(-0x80 <= $c && $c <= 0x7F, "$c");
        return $c;
    }

    /**
     * @return ?S32
     */
    public function loadI32_u8(int $ptr): ?int
    {
        if ($this->size() < $ptr + 1) {
            return null;
        }
        // @phpstan-ignore-next-line
        $c = $this->dataU8[$ptr];
        assert(0 <= $c && $c <= 0xFF, "$c");
        return $c;
    }

    /**
     * @return ?S32
     */
    public function loadI32_s16(int $ptr): ?int
    {
        if ($this->size() < $ptr + 2) {
            return null;
        }
        // @phpstan-ignore-next-line
        $c = $this->dataS16($ptr)[$ptr >> 1];
        assert(-0x8000 <= $c && $c <= 0x7FFF, "$c");
        return $c;
    }

    /**
     * @return ?S32
     */
    public function loadI32_u16(int $ptr): ?int
    {
        if ($this->size() < $ptr + 2) {
            return null;
        }
        // @phpstan-ignore-next-line
        $c = $this->dataU16($ptr)[$ptr >> 1];
        assert(0 <= $c && $c <= 0xFFFF, "$c");
        return $c;
    }

    /**
     * @return ?S32
     */
    public function loadI32_s32(int $ptr): ?int
    {
        if ($this->size() < $ptr + 4) {
            return null;
        }
        // @phpstan-ignore-next-line
        $c = $this->dataS32($ptr)[$ptr >> 2];
        assert(-0x80000000 <= $c && $c <= 0x7FFFFFFF, "$c");
        return $c;
    }

    /**
     * @return ?S64
     */
    public function loadI64_s8(int $ptr): ?int
    {
        if ($this->size() < $ptr + 1) {
            return null;
        }
        // @phpstan-ignore-next-line
        $c = $this->dataS8[$ptr];
        assert(-0x80 <= $c && $c <= 0x7F, "$c");
        return $c;
    }

    /**
     * @return ?S64
     */
    public function loadI64_u8(int $ptr): ?int
    {
        if ($this->size() < $ptr + 1) {
            return null;
        }
        // @phpstan-ignore-next-line
        $c = $this->dataU8[$ptr];
        assert(0 <= $c && $c <= 0xFF, "$c");
        return $c;
    }

    /**
     * @return ?S64
     */
    public function loadI64_s16(int $ptr): ?int
    {
        if ($this->size() < $ptr + 2) {
            return null;
        }
        // @phpstan-ignore-next-line
        $c = $this->dataS16($ptr)[$ptr >> 1];
        assert(-0x8000 <= $c && $c <= 0x7FFF, "$c");
        return $c;
    }

    /**
     * @return ?S64
     */
    public function loadI64_u16(int $ptr): ?int
    {
        if ($this->size() < $ptr + 2) {
            return null;
        }
        // @phpstan-ignore-next-line
        $c = $this->dataU16($ptr)[$ptr >> 1];
        assert(0 <= $c && $c <= 0xFFFF, "$c");
        return $c;
    }

    /**
     * @return ?S64
     */
    public function loadI64_s32(int $ptr): ?int
    {
        if ($this->size() < $ptr + 4) {
            return null;
        }
        // @phpstan-ignore-next-line
        $c = $this->dataS32($ptr)[$ptr >> 2];
        assert(-0x80000000 <= $c && $c <= 0x7FFFFFFF, "$c");
        return $c;
    }

    /**
     * @return ?S64
     */
    public function loadI64_u32(int $ptr): ?int
    {
        if ($this->size() < $ptr + 4) {
            return null;
        }
        // @phpstan-ignore-next-line
        $c = $this->dataU32($ptr)[$ptr >> 2];
        assert(0 <= $c && $c <= 0xFFFFFFFF, "$c");
        return $c;
    }

    /**
     * @return ?S64
     */
    public function loadI64_s64(int $ptr): ?int
    {
        if ($this->size() < $ptr + 8) {
            return null;
        }
        // @phpstan-ignore-next-line
        $c = $this->dataS64($ptr)[$ptr >> 3];
        assert(-0x8000000000000000 <= $c && $c <= 0x7FFFFFFFFFFFFFFF, "$c");
        return $c;
    }

    /**
     * @return ?F32
     */
    public function loadF32(int $ptr): ?float
    {
        if ($this->size() < $ptr + 4) {
            return null;
        }
        // @phpstan-ignore-next-line
        return $this->dataF32($ptr)[$ptr >> 2];
    }

    /**
     * @return ?F64
     */
    public function loadF64(int $ptr): ?float
    {
        if ($this->size() < $ptr + 8) {
            return null;
        }
        // @phpstan-ignore-next-line
        return $this->dataF64($ptr)[$ptr >> 3];
    }

    /**
     * @return ?int
     */
    public function loadByte(int $ptr): ?int
    {
        if ($this->size() < $ptr + 1) {
            return null;
        }
        // @phpstan-ignore-next-line
        return $this->dataU8[$ptr];
    }

    /**
     * @return bool
     */
    public function storeByte(int $ptr, int $c): bool
    {
        if ($this->size() < $ptr + 1) {
            return false;
        }
        // @phpstan-ignore-next-line
        $this->dataU8[$ptr] = $c;
        return true;
    }

    /**
     * @param S32 $c
     * @return bool
     */
    public function storeI32_s8(int $ptr, int $c): bool
    {
        if ($this->size() < $ptr + 1) {
            return false;
        }
        // @phpstan-ignore-next-line
        $this->dataS8[$ptr] = $c;
        return true;
    }

    /**
     * @param S32 $c
     * @return bool
     */
    public function storeI32_s16(int $ptr, int $c): bool
    {
        if ($this->size() < $ptr + 2) {
            return false;
        }
        // @phpstan-ignore-next-line
        $this->dataS16($ptr)[$ptr >> 1] = $c;
        return true;
    }

    /**
     * @param S32 $c
     * @return bool
     */
    public function storeI32_s32(int $ptr, int $c): bool
    {
        if ($this->size() < $ptr + 4) {
            return false;
        }
        // @phpstan-ignore-next-line
        $this->dataS32($ptr)[$ptr >> 2] = $c;
        return true;
    }

    /**
     * @param S64 $c
     * @return bool
     */
    public function storeI64_s8(int $ptr, int $c): bool
    {
        if ($this->size() < $ptr + 1) {
            return false;
        }
        // @phpstan-ignore-next-line
        $this->dataS8[$ptr] = $c;
        return true;
    }

    /**
     * @param S64 $c
     * @return bool
     */
    public function storeI64_s16(int $ptr, int $c): bool
    {
        if ($this->size() < $ptr + 2) {
            return false;
        }
        // @phpstan-ignore-next-line
        $this->dataS16($ptr)[$ptr >> 1] = $c;
        return true;
    }

    /**
     * @param S64 $c
     * @return bool
     */
    public function storeI64_s32(int $ptr, int $c): bool
    {
        if ($this->size() < $ptr + 4) {
            return false;
        }
        // @phpstan-ignore-next-line
        $this->dataS32($ptr)[$ptr >> 2] = $c;
        return true;
    }

    /**
     * @param S64 $c
     * @return bool
     */
    public function storeI64_s64(int $ptr, int $c): bool
    {
        if ($this->size() < $ptr + 8) {
            return false;
        }
        // @phpstan-ignore-next-line
        $this->dataS64($ptr)[$ptr >> 3] = $c;
        return true;
    }

    /**
     * @param F32 $c
     * @return bool
     */
    public function storeF32(int $ptr, float $c): bool
    {
        if ($this->size() < $ptr + 4) {
            return false;
        }
        // @phpstan-ignore-next-line
        $this->dataF32($ptr)[$ptr >> 2] = $c;
        return true;
    }

    /**
     * @param F64 $c
     * @return bool
     */
    public function storeF64(int $ptr, float $c): bool
    {
        if ($this->size() < $ptr + 8) {
            return false;
        }
        // @phpstan-ignore-next-line
        $this->dataF64($ptr)[$ptr >> 3] = $c;
        return true;
    }

    private function dataU16(int $ptr): CData
    {
        return ($ptr & 1) !== 0 ? $this->dataU16_1 : $this->dataU16_0;
    }

    private function dataS16(int $ptr): CData
    {
        return ($ptr & 1) !== 0 ? $this->dataS16_1 : $this->dataS16_0;
    }

    private function dataU32(int $ptr): CData
    {
        return match ($ptr & 3) {
            0 => $this->dataU32_0,
            1 => $this->dataU32_1,
            2 => $this->dataU32_2,
            3 => $this->dataU32_3,
        };
    }

    private function dataS32(int $ptr): CData
    {
        return match ($ptr & 3) {
            0 => $this->dataS32_0,
            1 => $this->dataS32_1,
            2 => $this->dataS32_2,
            3 => $this->dataS32_3,
        };
    }

    private function dataS64(int $ptr): CData
    {
        return match ($ptr & 7) {
            0 => $this->dataS64_0,
            1 => $this->dataS64_1,
            2 => $this->dataS64_2,
            3 => $this->dataS64_3,
            4 => $this->dataS64_4,
            5 => $this->dataS64_5,
            6 => $this->dataS64_6,
            7 => $this->dataS64_7,
        };
    }

    private function dataF32(int $ptr): CData
    {
        return match ($ptr & 3) {
            0 => $this->dataF32_0,
            1 => $this->dataF32_1,
            2 => $this->dataF32_2,
            3 => $this->dataF32_3,
        };
    }

    private function dataF64(int $ptr): CData
    {
        return match ($ptr & 7) {
            0 => $this->dataF64_0,
            1 => $this->dataF64_1,
            2 => $this->dataF64_2,
            3 => $this->dataF64_3,
            4 => $this->dataF64_4,
            5 => $this->dataF64_5,
            6 => $this->dataF64_6,
            7 => $this->dataF64_7,
        };
    }
}
