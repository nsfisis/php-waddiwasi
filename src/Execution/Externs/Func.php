<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution\Externs;

use Nsfisis\Waddiwasi\Execution\Extern;
use Nsfisis\Waddiwasi\Execution\FuncInst;

final readonly class Func extends Extern
{
    protected function __construct(
        public FuncInst $func,
    ) {
    }
}
