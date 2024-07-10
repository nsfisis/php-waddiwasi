<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Execution\ExternVals;

use Nsfisis\Waddiwasi\WebAssembly\Execution\ExternVal;

final readonly class Table extends ExternVal
{
    protected function __construct(
        public int $addr,
    ) {
    }
}
