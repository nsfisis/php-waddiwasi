<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution;

use Nsfisis\Waddiwasi\Structure\Types\MemType;

final class MemInst
{
    /**
     * @var list<string>
     */
    private array $data;

    private const PAGE_SIZE = 64 * 1024;

    public function __construct(
        public readonly MemType $type,
    ) {
        $minSize = $type->limits->min;
        // @todo hack
        $minSize *= 8;
        $this->data = array_fill(0, $minSize, str_repeat("\0", self::PAGE_SIZE));
    }

    public function size(): int
    {
        return count($this->data) * self::PAGE_SIZE;
    }

    /**
     * @return ?S32
     */
    public function loadI32(int $ptr, int $n, bool $signed): ?int
    {
        assert($n !== 4 || $signed);
        $buf = $this->sliceNBytes($ptr, $n);
        if ($buf === null) {
            return null;
        }
        $result = unpack(match ($n) {
            1 => $signed ? 'c' : 'C',
            2 => $signed ? 's' : 'S',
            4 => 'l',
            default => throw new \LogicException('Invalid byte length'),
        }, $buf);
        assert($result !== false);
        return $result[1];
    }

    /**
     * @return ?S64
     */
    public function loadI64(int $ptr, int $n, bool $signed): ?int
    {
        assert($n !== 8 || $signed);
        $buf = $this->sliceNBytes($ptr, $n);
        if ($buf === null) {
            return null;
        }
        $result = unpack(match ($n) {
            1 => $signed ? 'c' : 'C',
            2 => $signed ? 's' : 'S',
            4 => $signed ? 'l' : 'L',
            8 => 'q',
            default => throw new \LogicException('Invalid byte length'),
        }, $buf);
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
        $page = $this->data[intdiv($ptr, self::PAGE_SIZE)];
        $result = unpack('C', $page, $ptr % self::PAGE_SIZE);
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
        // @phpstan-ignore-next-line
        $this->data[intdiv($ptr, self::PAGE_SIZE)][$ptr % self::PAGE_SIZE] = chr($c);
        return true;
    }

    /**
     * @param S32 $c
     * @return bool
     */
    public function storeI32(int $ptr, int $c, int $n): bool
    {
        if ($this->size() < $ptr + $n) {
            return false;
        }
        $buf = pack(match ($n) {
            1 => 'c',
            2 => 's',
            4 => 'l',
            default => throw new \LogicException('Invalid byte length'),
        }, $c);
        for ($i = 0; $i < $n; $i++) {
            $this->storeByte($ptr + $i, ord($buf[$i]));
        }
        return true;
    }

    /**
     * @param S64 $c
     * @return bool
     */
    public function storeI64(int $ptr, int $c, int $n): bool
    {
        if ($this->size() < $ptr + $n) {
            return false;
        }
        $buf = pack(match ($n) {
            1 => 'c',
            2 => 's',
            4 => 'l',
            8 => 'q',
            default => throw new \LogicException('Invalid byte length'),
        }, $c);
        for ($i = 0; $i < $n; $i++) {
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
        $buf = '';
        $idx = $ptr % self::PAGE_SIZE;
        for ($p = intdiv($ptr, self::PAGE_SIZE); ; $p++) {
            $page = $this->data[$p];
            $readLen = min(self::PAGE_SIZE - $idx, $len);
            $buf .= substr($page, $idx, $readLen);
            $len -= $readLen;
            if ($len === 0) {
                break;
            }
            $idx = 0;
        }
        return $buf;
    }
}
