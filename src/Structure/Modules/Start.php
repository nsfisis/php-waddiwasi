<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Modules;

use Nsfisis\Waddiwasi\Structure\Types\FuncIdx;

final readonly class Start
{
    public function __construct(
        public FuncIdx $func,
    ) {
    }
}
