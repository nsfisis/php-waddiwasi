<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs\Numeric;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instr;

final readonly class F64ReinterpretI32 extends Instr
{
    public static function opName(): string
    {
        return 'f64.reinterpret_i32';
    }
}
