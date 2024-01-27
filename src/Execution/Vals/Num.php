<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution\Vals;

use Nsfisis\Waddiwasi\Execution\Num as OrigNum;
use Nsfisis\Waddiwasi\Execution\Val;

final readonly class Num extends Val
{
    public function __construct(
        public OrigNum $inner,
    ) {
    }
}
