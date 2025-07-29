<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Types;

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

    public function isValid(): bool
    {
        return $this->min >= 0 &&
            ($this->max === null || $this->min <= $this->max);
    }
}
