<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution;

use Nsfisis\Waddiwasi\Structure\Types\GlobalType;

final class GlobalInst
{
    public function __construct(
        public readonly GlobalType $type,
        public Val $value,
    ) {
    }
}
