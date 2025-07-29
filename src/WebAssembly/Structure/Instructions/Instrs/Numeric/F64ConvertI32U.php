<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs\Numeric;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instr;

final readonly class F64ConvertI32U extends Instr
{
    public static function opName(): string
    {
        return 'f64.convert_i32_u';
    }
}
