<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Execution\Refs;

use Nsfisis\Waddiwasi\WebAssembly\Execution\Ref;

final readonly class RefExtern extends Ref
{
    public function __construct(
        public int $addr,
    ) {
    }
}
