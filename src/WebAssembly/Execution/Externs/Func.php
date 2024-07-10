<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Execution\Externs;

use Nsfisis\Waddiwasi\WebAssembly\Execution\Extern;
use Nsfisis\Waddiwasi\WebAssembly\Execution\FuncInst;

final readonly class Func extends Extern
{
    protected function __construct(
        public FuncInst $func,
    ) {
    }
}
