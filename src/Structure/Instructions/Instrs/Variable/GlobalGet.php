<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Variable;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;
use Nsfisis\Waddiwasi\Structure\Types\GlobalIdx;

final readonly class GlobalGet extends Instr
{
    protected function __construct(
        public GlobalIdx $var,
    ) {
    }

    public static function opName(): string
    {
        return "global.get";
    }
}