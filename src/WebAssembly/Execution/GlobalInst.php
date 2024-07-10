<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Execution;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\GlobalType;

final class GlobalInst
{
    public function __construct(
        public readonly GlobalType $type,
        public int|float|Ref $value,
    ) {
    }
}
