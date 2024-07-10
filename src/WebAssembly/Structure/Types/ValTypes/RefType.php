<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Types\ValTypes;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\RefType as OrigRefType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\ValType;

final readonly class RefType extends ValType
{
    protected function __construct(public OrigRefType $inner)
    {
    }

    public function equals(ValType $other): bool
    {
        return $other instanceof self
            && $this->inner === $other->inner;
    }
}
