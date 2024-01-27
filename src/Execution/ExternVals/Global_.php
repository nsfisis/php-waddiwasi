<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution\ExternVals;

use Nsfisis\Waddiwasi\Execution\ExternVal;
use Nsfisis\Waddiwasi\Execution\GlobalAddr;

final readonly class Global_ extends ExternVal
{
    protected function __construct(
        public GlobalAddr $addr,
    ) {
    }
}
