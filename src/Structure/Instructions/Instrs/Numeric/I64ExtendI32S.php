<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Numeric;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;

final readonly class I64ExtendI32S extends Instr
{
    public static function opName(): string
    {
        return "i64.extend_i32_s";
    }
}