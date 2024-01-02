<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Modules;

use Nsfisis\Waddiwasi\Structure\Types\MemType;

final readonly class Mem
{
    public function __construct(
        public MemType $type,
    ) {
    }
}
