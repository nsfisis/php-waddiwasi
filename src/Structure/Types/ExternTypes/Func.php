<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Types\ExternTypes;

use Nsfisis\Waddiwasi\Structure\Types\ExternType;
use Nsfisis\Waddiwasi\Structure\Types\FuncType;

final readonly class Func extends ExternType
{
    protected function __construct(
        public FuncType $inner,
    ) {
    }
}
