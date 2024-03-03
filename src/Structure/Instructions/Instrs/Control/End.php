<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Control;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;

final readonly class End extends Instr
{
    public static function opName(): string
    {
        return "end";
    }
}
