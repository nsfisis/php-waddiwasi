<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Types;

final readonly class Limits
{
    /**
     * @param U32 $min
     * @param ?U32 $max
     */
    public function __construct(
        public int $min,
        public ?int $max,
    ) {
    }
}
