<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Reference;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;
use Nsfisis\Waddiwasi\Structure\Types\RefType;

final readonly class RefNull extends Instr
{
    protected function __construct(
        public RefType $type,
    ) {
    }

    public static function opName(): string
    {
        return "ref.null";
    }
}
