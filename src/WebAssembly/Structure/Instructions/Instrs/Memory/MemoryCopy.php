<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs\Memory;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instr;

final readonly class MemoryCopy extends Instr
{
    public static function opName(): string
    {
        return "memory.copy";
    }
}