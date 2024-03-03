<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Numeric;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;

final readonly class F64Sqrt extends Instr
{
    public static function opName(): string
    {
        return "f64.sqrt";
    }
}
