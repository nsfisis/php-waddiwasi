<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Types\ValTypes;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\ValType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\VecType as OrigVecType;

final readonly class VecType extends ValType
{
    protected function __construct(public OrigVecType $inner)
    {
    }

    public function equals(ValType $other): bool
    {
        return $other instanceof self
            && $this->inner === $other->inner; // @phpstan-ignore-line
    }
}
