<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Modules;

final readonly class Start
{
    public function __construct(
        public int $func,
    ) {
    }
}
