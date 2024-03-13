<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution\Refs;

use Nsfisis\Waddiwasi\Execution\Ref;

final readonly class RefExtern extends Ref
{
    public function __construct(
        public int $addr,
    ) {
    }
}
