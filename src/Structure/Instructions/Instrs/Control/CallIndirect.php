<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Control;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;
use Nsfisis\Waddiwasi\Structure\Types\TableIdx;
use Nsfisis\Waddiwasi\Structure\Types\TypeIdx;

final readonly class CallIndirect extends Instr
{
    protected function __construct(
        public TableIdx $funcTable,
        public TypeIdx $type,
    ) {
    }
}
