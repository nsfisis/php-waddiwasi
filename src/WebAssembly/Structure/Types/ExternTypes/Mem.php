<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Types\ExternTypes;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\ExternType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\MemType;

final readonly class Mem extends ExternType
{
    protected function __construct(
        public MemType $inner,
    ) {
    }
}
