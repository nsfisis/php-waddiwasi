<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution\ExternVals;

use Nsfisis\Waddiwasi\Execution\ExternVal;

final readonly class Mem extends ExternVal
{
    protected function __construct(
        public int $addr,
    ) {
    }
}
