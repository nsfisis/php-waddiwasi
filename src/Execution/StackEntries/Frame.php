<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution\StackEntries;

use Nsfisis\Waddiwasi\Execution\ModuleInst;
use Nsfisis\Waddiwasi\Execution\StackEntry;
use Nsfisis\Waddiwasi\Execution\Val;

final readonly class Frame extends StackEntry
{
    /**
     * @param int<0, max> $arity
     * @param list<Val> $locals
     */
    public function __construct(
        public int $arity,
        public array $locals,
        public ModuleInst $module,
    ) {
    }
}
