<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Execution\Externs;

use Nsfisis\Waddiwasi\WebAssembly\Execution\Extern;
use Nsfisis\Waddiwasi\WebAssembly\Execution\MemInst;

final readonly class Mem extends Extern
{
    protected function __construct(
        public MemInst $mem,
    ) {
    }
}
