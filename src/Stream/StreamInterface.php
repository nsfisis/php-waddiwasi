<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Stream;

interface StreamInterface
{
    /**
     * Reads $bytes bytes from the stream.
     *
     * @param positive-int $bytes
     *
     * @return non-empty-string
     *   A binary string of $bytes bytes.
     *
     * @throws UnexpectedEofException
     *   Thrown if the stream does not have enough bytes to read.
     *
     * @phpstan-impure
     */
    public function read(int $bytes): string;

    /**
     * Reads a single byte from the stream.
     *
     * @return int<0, 255>
     *   An 8-bit unsigned integer read from the stream.
     *
     * @throws UnexpectedEofException
     *   Thrown if the stream have reached the end.
     *
     * @phpstan-impure
     */
    public function readByte(): int;

    /**
     * Reads a single byte from the stream without advancing the position.
     *
     * @return int<0, 255>
     *   An 8-bit unsigned integer read from the stream.
     *
     * @throws UnexpectedEofException
     *   Thrown if the stream have reached the end.
     *
     * @phpstan-impure
     */
    public function peekByte(): int;

    /**
     * Seeks $bytes bytes from the current position.
     *
     * @param positive-int $bytes
     *
     * @throws UnexpectedEofException
     *   Thrown if the stream does not have enough bytes to seek.
     *
     * @phpstan-impure
     */
    public function seek(int $bytes): void;

    /**
     * Returns the current position in the stream.
     *
     * @return 0|positive-int
     *
     * @phpstan-impure
     */
    public function tell(): int;

    /**
     * Returns whether the stream has reached the end.
     *
     * @phpstan-impure
     */
    public function eof(): bool;
}
