<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution\ControlFlowResults;

use Nsfisis\Waddiwasi\Execution\ControlFlowResult;

final readonly class Br extends ControlFlowResult
{
    protected function __construct(
        public int $label,
    ) {
    }
}
