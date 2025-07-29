<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs\Numeric;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instr;

final readonly class I64TruncSatF64S extends Instr
{
    public static function opName(): string
    {
        return 'i64.trunc_sat_f64_s';
    }
}
