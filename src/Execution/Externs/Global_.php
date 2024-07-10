<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution\Externs;

use Nsfisis\Waddiwasi\Execution\Extern;
use Nsfisis\Waddiwasi\Execution\GlobalInst;

final readonly class Global_ extends Extern
{
    protected function __construct(
        public GlobalInst $global,
    ) {
    }
}
