<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Memory;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;

final readonly class MemoryCopy extends Instr
{
    public static function opName(): string
    {
        return "memory.copy";
    }
}
