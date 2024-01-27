<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution\ExternVals;

use Nsfisis\Waddiwasi\Execution\ExternVal;
use Nsfisis\Waddiwasi\Execution\FuncAddr;

final readonly class Func extends ExternVal
{
    protected function __construct(
        public FuncAddr $addr,
    ) {
    }
}
