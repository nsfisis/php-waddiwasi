<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution\StackEntries;

use Nsfisis\Waddiwasi\Execution\StackEntry;
use Nsfisis\Waddiwasi\Structure\Instructions\Instr;

final readonly class Label extends StackEntry
{
    /**
     * @param int<0, max> $arity
     * @param list<Instr> $target
     */
    public function __construct(
        public int $arity,
        public array $target,
    ) {
    }
}
