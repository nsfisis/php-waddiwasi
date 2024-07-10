<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution\Externs;

use Nsfisis\Waddiwasi\Execution\Extern;
use Nsfisis\Waddiwasi\Execution\TableInst;

final readonly class Table extends Extern
{
    protected function __construct(
        public TableInst $table,
    ) {
    }
}
