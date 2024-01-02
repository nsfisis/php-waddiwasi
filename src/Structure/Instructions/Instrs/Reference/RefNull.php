<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Reference;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;
use Nsfisis\Waddiwasi\Structure\Types\RefType;

final readonly class RefNull extends Instr
{
    public function __construct(
        public RefType $type,
    ) {
    }
}
