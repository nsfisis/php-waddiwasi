<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Numeric;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;

final readonly class F64PromoteF32 extends Instr
{
    public static function opName(): string
    {
        return "f64.promote_f32";
    }
}