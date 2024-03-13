<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Control;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;

final readonly class BrIf extends Instr
{
    protected function __construct(
        public int $label,
    ) {
    }

    public static function opName(): string
    {
        return "br_if";
    }
}
