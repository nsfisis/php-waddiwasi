<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Types\ExternTypes;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\ExternType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\FuncType;

final readonly class Func extends ExternType
{
    protected function __construct(
        public FuncType $inner,
    ) {
    }
}
