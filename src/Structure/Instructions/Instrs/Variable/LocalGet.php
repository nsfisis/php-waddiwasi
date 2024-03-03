<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Variable;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;
use Nsfisis\Waddiwasi\Structure\Types\LocalIdx;

final readonly class LocalGet extends Instr
{
    protected function __construct(
        public LocalIdx $var,
    ) {
    }

    public static function opName(): string
    {
        return "local.get";
    }
}
