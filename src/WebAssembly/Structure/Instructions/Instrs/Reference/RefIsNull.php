<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs\Reference;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instr;

final readonly class RefIsNull extends Instr
{
    public static function opName(): string
    {
        return "ref.is_null";
    }
}
