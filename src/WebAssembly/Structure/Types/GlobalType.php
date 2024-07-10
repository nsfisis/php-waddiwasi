<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Types;

final readonly class GlobalType
{
    public function __construct(
        public Mut $mut,
        public ValType $valType,
    ) {
    }
}
