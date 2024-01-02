<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Types;

final readonly class GlobalType
{
    public function __construct(
        public Mut $mut,
        public ValType $valType,
    ) {
    }
}
