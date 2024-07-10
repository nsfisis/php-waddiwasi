<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Stream;

use function assert;
use function chr;
use function fclose;
use function fopen;
use function fread;
use function ord;
use function strlen;

final class FileStream implements StreamInterface
{
    /**
     * @var resource
     */
    private readonly mixed $fp;

    /**
     * @var ?int<0, 255>
     */
    private ?int $peekedByte = null;

    public function __construct(
        private readonly string $path,
    ) {
        $fp = fopen($path, 'rb');
        if ($fp === false) {
            throw new IoException("Failed to open file: $path");
        }
        $this->fp = $fp;
    }

    public function close(): void
    {
        fclose($this->fp);
    }

    public function read(int $bytes): string
    {
        if ($this->peekedByte !== null) {
            $first = chr($this->peekedByte);
            $this->peekedByte = null;
            if ($bytes === 1) {
                return $first;
            } else {
                return $first . $this->doRead($bytes - 1);
            }
        } else {
            return $this->doRead($bytes);
        }
    }

    public function readByte(): int
    {
        if ($this->peekedByte !== null) {
            $ret = $this->peekedByte;
            $this->peekedByte = null;
            return $ret;
        }
        return ord($this->doRead(1));
    }

    public function peekByte(): int
    {
        if ($this->peekedByte === null) {
            $this->peekedByte = ord($this->doRead(1));
        }
        return $this->peekedByte;
    }

    public function seek(int $bytes): void
    {
        $this->read($bytes);
    }

    public function tell(): int
    {
        $ret = ftell($this->fp);
        if ($ret === false) {
            throw new IoException("Failed to get current position in file: $this->path");
        }
        assert(0 <= $ret);
        return $ret;
    }

    public function eof(): bool
    {
        // feof() does not work because it returns true only after an
        // unsuccessful fread().
        if ($this->peekedByte !== null) {
            return false;
        }
        $result = fread($this->fp, 1);
        if ($result === false || $result === '') {
            return true;
        }
        $this->peekedByte = ord($result);
        return false;
    }

    /**
     * @param positive-int $bytes
     *
     * @return non-empty-string
     *
     * @phpstan-impure
     */
    private function doRead(int $bytes): string
    {
        $result = fread($this->fp, $bytes);
        if ($result === false) {
            throw new IoException("Failed to read from file: $this->path");
        }
        if (strlen($result) < $bytes) {
            throw new UnexpectedEofException(sprintf("Unexpected EOF while reading from file: %s (%d bytes expected, %d bytes read)", $this->path, $bytes, strlen($result)));
        }
        return $result;
    }
}
