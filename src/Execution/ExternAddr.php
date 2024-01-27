<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution;

final readonly class ExternAddr
{
    public function __construct(
        public int $value,
    ) {
    }
}
