<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Stream;

use function assert;
use function ord;
use function strlen;
use function substr;

/**
 * Read-only blob stream.
 */
final class BlobStream implements StreamInterface
{
    /**
     * @var int<0, max>
     */
    private int $pos = 0;

    /**
     * @var positive-int
     */
    private readonly int $len;

    /**
     * Creates a new blob stream with the given content.
     *
     * @param non-empty-string $content
     *   The content of the blob.
     */
    public function __construct(
        private readonly string $content,
    ) {
        $this->len = strlen($content);
    }

    public function close(): void
    {
    }

    public function read(int $bytes): string
    {
        $this->ensureNBytesAvailable($bytes);
        $ret = substr($this->content, $this->pos, $bytes);
        $this->pos += $bytes;
        assert($ret !== '');
        return $ret;
    }

    public function readByte(): int
    {
        $this->ensureNBytesAvailable(1);
        return ord($this->content[$this->pos++]);
    }

    public function peekByte(): int
    {
        $this->ensureNBytesAvailable(1);
        return ord($this->content[$this->pos]);
    }

    public function seek(int $bytes): void
    {
        $this->ensureNBytesAvailable($bytes);
        $this->pos += $bytes;
    }

    /**
     * @phpstan-pure
     */
    public function tell(): int
    {
        return $this->pos;
    }

    /**
     * @phpstan-pure
     */
    public function eof(): bool
    {
        return $this->len <= $this->pos;
    }

    /**
     * @param positive-int $bytes
     */
    private function ensureNBytesAvailable(int $bytes): void
    {
        if ($this->len < $this->pos + $bytes) {
            throw new UnexpectedEofException(sprintf("Unexpected EOF while reading from blob (%d bytes expected, %d bytes read)", $bytes, $this->len - $this->pos));
        }
    }
}
