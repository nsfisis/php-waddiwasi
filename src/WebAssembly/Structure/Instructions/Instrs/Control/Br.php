<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs\Control;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instr;

final readonly class Br extends Instr
{
    protected function __construct(
        public int $label,
    ) {
    }

    public static function opName(): string
    {
        return "br";
    }
}
