<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Modules;

use Nsfisis\Waddiwasi\Structure\Types\ValType;

final readonly class Local
{
    public function __construct(
        public ValType $type,
    ) {
    }
}
