<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs\Numeric;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instr;

final readonly class I32DivS extends Instr
{
    public static function opName(): string
    {
        return 'i32.div_s';
    }
}
