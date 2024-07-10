<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Modules;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\ValType;

final readonly class Local
{
    public function __construct(
        public ValType $type,
    ) {
    }
}
