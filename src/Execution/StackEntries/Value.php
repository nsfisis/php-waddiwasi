<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution\StackEntries;

use Nsfisis\Waddiwasi\Execution\StackEntry;
use Nsfisis\Waddiwasi\Execution\Val;

final readonly class Value extends StackEntry
{
    public function __construct(
        public Val $inner,
    ) {
    }
}
