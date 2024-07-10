<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Modules;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\MemType;

final readonly class Mem
{
    public function __construct(
        public MemType $type,
    ) {
    }
}
