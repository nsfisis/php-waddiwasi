<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution;

final class Frame
{
    /**
     * @param int<0, max> $arity
     * @param list<int|float|Ref> $locals
     */
    public function __construct(
        public readonly int $arity,
        public array $locals,
        public readonly ModuleInst $module,
        public string $debugName,
    ) {
    }
}
