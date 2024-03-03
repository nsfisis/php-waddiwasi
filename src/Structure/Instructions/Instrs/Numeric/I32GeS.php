<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Numeric;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;

final readonly class I32GeS extends Instr
{
    public static function opName(): string
    {
        return "i32.ge_s";
    }
}
