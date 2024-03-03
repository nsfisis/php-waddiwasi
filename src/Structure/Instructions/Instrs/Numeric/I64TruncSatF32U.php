<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Numeric;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;

final readonly class I64TruncSatF32U extends Instr
{
    public static function opName(): string
    {
        return "i64.trunc_sat_f32_u";
    }
}
