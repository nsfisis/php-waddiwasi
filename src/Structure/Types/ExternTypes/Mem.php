<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Types\ExternTypes;

use Nsfisis\Waddiwasi\Structure\Types\ExternType;
use Nsfisis\Waddiwasi\Structure\Types\MemType;

final readonly class Mem extends ExternType
{
    protected function __construct(
        public MemType $inner,
    ) {
    }
}
