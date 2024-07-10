<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\BinaryFormat\Internal;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instr;

/**
 * @internal
 */
final readonly class Code
{
    /**
     * @param list<Locals> $compressedLocals
     * @param list<Instr> $body
     */
    public function __construct(
        public array $compressedLocals,
        public array $body,
    ) {
    }
}
