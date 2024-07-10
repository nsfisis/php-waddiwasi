<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Modules;

final readonly class Start
{
    public function __construct(
        public int $func,
    ) {
    }
}
