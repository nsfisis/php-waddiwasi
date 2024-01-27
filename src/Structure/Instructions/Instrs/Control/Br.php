<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Control;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;
use Nsfisis\Waddiwasi\Structure\Types\LabelIdx;

final readonly class Br extends Instr
{
    protected function __construct(
        public LabelIdx $label,
    ) {
    }
}
