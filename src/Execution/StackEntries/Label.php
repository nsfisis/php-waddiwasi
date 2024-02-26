<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution\StackEntries;

use Nsfisis\Waddiwasi\Execution\StackEntry;

final class Label extends StackEntry
{
    /**
     * @param int<0, max> $arity
     */
    public function __construct(
        public readonly int $arity,
    ) {
    }
}
