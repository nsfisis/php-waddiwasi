<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Memory;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;

final readonly class MemoryInit extends Instr
{
    protected function __construct(
        public int $data,
    ) {
    }

    public static function opName(): string
    {
        return "memory.init";
    }
}
