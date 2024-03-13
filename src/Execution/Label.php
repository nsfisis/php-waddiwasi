<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution;

final readonly class Label
{
    /**
     * @param int<0, max> $arity
     */
    public function __construct(
        public int $arity,
    ) {
    }
}
