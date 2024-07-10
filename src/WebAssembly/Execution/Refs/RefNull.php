<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Execution\Refs;

use Nsfisis\Waddiwasi\WebAssembly\Execution\Ref;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\RefType;

final readonly class RefNull extends Ref
{
    public function __construct(
        public RefType $type,
    ) {
    }
}
