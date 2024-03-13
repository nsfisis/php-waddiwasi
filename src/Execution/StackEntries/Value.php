<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution\StackEntries;

use Nsfisis\Waddiwasi\Execution\Ref;
use Nsfisis\Waddiwasi\Execution\StackEntry;

final class Value extends StackEntry
{
    public function __construct(
        public readonly int|float|Ref $inner,
    ) {
    }
}
