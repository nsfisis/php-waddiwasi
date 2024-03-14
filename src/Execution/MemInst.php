<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution;

use Nsfisis\Waddiwasi\Structure\Types\MemType;
use function assert;
use function chr;
use function count;
use function ord;
use function strlen;

final class MemInst
{
    private string $data;

    private const PAGE_SIZE = 64 * 1024;

    public function __construct(
        public readonly MemType $type,
    ) {
        $minSize = $type->limits->min;
        // @todo hack
        $minSize *= 8;
        $this->data = str_repeat("\0", $minSize * self::PAGE_SIZE);
    }

    public function size(): int
    {
        return strlen($this->data);
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

    /**
     * @return ?S32
     */
    public function loadI32_s8(int $ptr): ?int
    {
        if ($this->size() < $ptr) {
            return null;
        }
        $result = unpack('c', $this->data, $ptr);
        assert($result !== false);
        $c = $result[1];
        assert(-0x80 <= $c && $c <= 0x7F);
        return $c;
    }

    /**
     * @return ?S32
     */
    public function loadI32_u8(int $ptr): ?int
    {
        if ($this->size() < $ptr) {
            return null;
        }
        $result = unpack('C', $this->data, $ptr);
        assert($result !== false);
        $c = $result[1];
        assert(0x00 <= $c && $c <= 0xFF);
        return $c;
    }

    /**
     * @return ?S32
     */
    public function loadI32_s16(int $ptr): ?int
    {
        $buf = $this->sliceNBytes($ptr, 2);
        if ($buf === null) {
            return null;
        }
        $result = unpack('s', $buf);
        assert($result !== false);
        return $result[1];
    }

    /**
     * @return ?S32
     */
    public function loadI32_u16(int $ptr): ?int
    {
        $buf = $this->sliceNBytes($ptr, 2);
        if ($buf === null) {
            return null;
        }
        $result = unpack('S', $buf);
        assert($result !== false);
        return $result[1];
    }

    /**
     * @return ?S32
     */
    public function loadI32_s32(int $ptr): ?int
    {
        $buf = $this->sliceNBytes($ptr, 4);
        if ($buf === null) {
            return null;
        }
        $result = unpack('l', $buf);
        assert($result !== false);
        return $result[1];
    }

    /**
     * @return ?S64
     */
    public function loadI64_s8(int $ptr): ?int
    {
        if ($this->size() < $ptr) {
            return null;
        }
        $result = unpack('c', $this->data, $ptr);
        assert($result !== false);
        $c = $result[1];
        assert(-0x80 <= $c && $c <= 0x7F);
        return $c;
    }

    /**
     * @return ?S64
     */
    public function loadI64_u8(int $ptr): ?int
    {
        if ($this->size() < $ptr) {
            return null;
        }
        $result = unpack('C', $this->data, $ptr);
        assert($result !== false);
        $c = $result[1];
        assert(0x00 <= $c && $c <= 0xFF);
        return $c;
    }

    /**
     * @return ?S64
     */
    public function loadI64_s16(int $ptr): ?int
    {
        $buf = $this->sliceNBytes($ptr, 2);
        if ($buf === null) {
            return null;
        }
        $result = unpack('s', $buf);
        assert($result !== false);
        return $result[1];
    }

    /**
     * @return ?S64
     */
    public function loadI64_u16(int $ptr): ?int
    {
        $buf = $this->sliceNBytes($ptr, 2);
        if ($buf === null) {
            return null;
        }
        $result = unpack('S', $buf);
        assert($result !== false);
        return $result[1];
    }

    /**
     * @return ?S64
     */
    public function loadI64_s32(int $ptr): ?int
    {
        $buf = $this->sliceNBytes($ptr, 4);
        if ($buf === null) {
            return null;
        }
        $result = unpack('l', $buf);
        assert($result !== false);
        return $result[1];
    }

    /**
     * @return ?S64
     */
    public function loadI64_u32(int $ptr): ?int
    {
        $buf = $this->sliceNBytes($ptr, 4);
        if ($buf === null) {
            return null;
        }
        $result = unpack('L', $buf);
        assert($result !== false);
        return $result[1];
    }

    /**
     * @return ?S64
     */
    public function loadI64_s64(int $ptr): ?int
    {
        $buf = $this->sliceNBytes($ptr, 8);
        if ($buf === null) {
            return null;
        }
        $result = unpack('q', $buf);
        assert($result !== false);
        return $result[1];
    }

    /**
     * @return ?F32
     */
    public function loadF32(int $ptr): ?float
    {
        $buf = $this->sliceNBytes($ptr, 4);
        if ($buf === null) {
            return null;
        }
        $result = unpack('f', $buf);
        assert($result !== false);
        return $result[1];
    }

    /**
     * @return ?F64
     */
    public function loadF64(int $ptr): ?float
    {
        $buf = $this->sliceNBytes($ptr, 8);
        if ($buf === null) {
            return null;
        }
        $result = unpack('d', $buf);
        assert($result !== false);
        return $result[1];
    }

    /**
     * @return ?int
     */
    public function loadByte(int $ptr): ?int
    {
        if ($this->size() < $ptr) {
            return null;
        }
        $result = unpack('C', $this->data, $ptr);
        assert($result !== false);
        $c = $result[1];
        assert(0x00 <= $c && $c <= 0xFF);
        return $c;
    }

    /**
     * @return bool
     */
    public function storeByte(int $ptr, int $c): bool
    {
        assert(0x00 <= $c && $c <= 0xFF);
        if ($this->size() < $ptr) {
            return false;
        }
        $this->data[$ptr] = chr($c);
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
        $buf = pack('s', $c);
        for ($i = 0; $i < 1; $i++) {
            $this->storeByte($ptr + $i, ord($buf[$i]));
        }
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
        $buf = pack('s', $c);
        for ($i = 0; $i < 2; $i++) {
            $this->storeByte($ptr + $i, ord($buf[$i]));
        }
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
        $buf = pack('l', $c);
        for ($i = 0; $i < 4; $i++) {
            $this->storeByte($ptr + $i, ord($buf[$i]));
        }
        return true;
    }

    /**
     * @param S64 $c
     * @return bool
     */
    public function storeI64_s8(int $ptr, int $c): bool
    {
        return $this->storeByte($ptr, $c);
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
        $buf = pack('s', $c);
        for ($i = 0; $i < 2; $i++) {
            $this->storeByte($ptr + $i, ord($buf[$i]));
        }
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
        $buf = pack('l', $c);
        for ($i = 0; $i < 4; $i++) {
            $this->storeByte($ptr + $i, ord($buf[$i]));
        }
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
        $buf = pack('q', $c);
        for ($i = 0; $i < 8; $i++) {
            $this->storeByte($ptr + $i, ord($buf[$i]));
        }
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
        $buf = pack('f', $c);
        for ($i = 0; $i < 4; $i++) {
            $this->storeByte($ptr + $i, ord($buf[$i]));
        }
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
        $buf = pack('d', $c);
        for ($i = 0; $i < 8; $i++) {
            $this->storeByte($ptr + $i, ord($buf[$i]));
        }
        return true;
    }

    private function sliceNBytes(int $ptr, int $len): ?string
    {
        if ($this->size() < $ptr + $len) {
            return null;
        }
        return substr($this->data, $ptr, $len);
    }
}
