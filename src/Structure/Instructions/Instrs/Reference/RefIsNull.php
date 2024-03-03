<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Reference;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;

final readonly class RefIsNull extends Instr
{
    public static function opName(): string
    {
        return "ref.is_null";
    }
}
