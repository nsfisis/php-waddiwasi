<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution\ControlFlowResults;

use Nsfisis\Waddiwasi\Execution\ControlFlowResult;
use Nsfisis\Waddiwasi\Structure\Types\LabelIdx;

final readonly class Br extends ControlFlowResult
{
    protected function __construct(
        public LabelIdx $label,
    ) {
    }
}
