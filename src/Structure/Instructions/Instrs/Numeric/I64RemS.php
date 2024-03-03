<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Numeric;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;

final readonly class I64RemS extends Instr
{
    public static function opName(): string
    {
        return "i64.rem_s";
    }
}
