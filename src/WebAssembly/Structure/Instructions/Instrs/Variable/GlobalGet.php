<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs\Variable;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instr;

final readonly class GlobalGet extends Instr
{
    protected function __construct(
        public int $var,
    ) {
    }

    public static function opName(): string
    {
        return "global.get";
    }
}