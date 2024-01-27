<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution\ExternVals;

use Nsfisis\Waddiwasi\Execution\ExternVal;
use Nsfisis\Waddiwasi\Execution\TableAddr;

final readonly class Table extends ExternVal
{
    protected function __construct(
        public TableAddr $addr,
    ) {
    }
}
