<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Execution\Externs;

use Nsfisis\Waddiwasi\WebAssembly\Execution\Extern;
use Nsfisis\Waddiwasi\WebAssembly\Execution\GlobalInst;

final readonly class Global_ extends Extern
{
    protected function __construct(
        public GlobalInst $global,
    ) {
    }
}
