<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Control;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;

final readonly class Call extends Instr
{
    protected function __construct(
        public int $func,
    ) {
    }

    public static function opName(): string
    {
        return "call";
    }
}
