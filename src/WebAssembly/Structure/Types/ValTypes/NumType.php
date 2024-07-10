<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Types\ValTypes;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\NumType as OrigNumType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\ValType;

final readonly class NumType extends ValType
{
    protected function __construct(public OrigNumType $inner)
    {
    }

    public function equals(ValType $other): bool
    {
        return $other instanceof self
            && $this->inner === $other->inner;
    }
}
