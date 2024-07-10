<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution\Externs;

use Nsfisis\Waddiwasi\Execution\Extern;
use Nsfisis\Waddiwasi\Execution\MemInst;

final readonly class Mem extends Extern
{
    protected function __construct(
        public MemInst $mem,
    ) {
    }
}
