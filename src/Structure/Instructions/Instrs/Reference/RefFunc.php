<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Reference;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;
use Nsfisis\Waddiwasi\Structure\Types\FuncIdx;

final readonly class RefFunc extends Instr
{
    public function __construct(
        public FuncIdx $func,
    ) {
    }
}
