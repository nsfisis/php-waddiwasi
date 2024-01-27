<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution\Refs;

use Nsfisis\Waddiwasi\Execution\FuncAddr;
use Nsfisis\Waddiwasi\Execution\Ref;

final readonly class RefFunc extends Ref
{
    public function __construct(
        public FuncAddr $addr,
    ) {
    }
}
