<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution;

final readonly class MemAddr
{
    public function __construct(
        public int $value,
    ) {
    }
}
