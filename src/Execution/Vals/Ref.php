<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution\Vals;

use Nsfisis\Waddiwasi\Execution\Ref as OrigRef;
use Nsfisis\Waddiwasi\Execution\Val;

final readonly class Ref extends Val
{
    public function __construct(
        public OrigRef $inner,
    ) {
    }
}
