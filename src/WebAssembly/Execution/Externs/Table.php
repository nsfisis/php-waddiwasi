<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Execution\Externs;

use Nsfisis\Waddiwasi\WebAssembly\Execution\Extern;
use Nsfisis\Waddiwasi\WebAssembly\Execution\TableInst;

final readonly class Table extends Extern
{
    protected function __construct(
        public TableInst $table,
    ) {
    }
}
