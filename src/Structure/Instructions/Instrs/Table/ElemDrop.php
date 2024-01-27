<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Table;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;
use Nsfisis\Waddiwasi\Structure\Types\ElemIdx;

final readonly class ElemDrop extends Instr
{
    protected function __construct(
        public ElemIdx $elem,
    ) {
    }
}
