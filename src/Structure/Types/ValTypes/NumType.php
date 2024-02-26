<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Types\ValTypes;

use Nsfisis\Waddiwasi\Structure\Types\NumType as OrigNumType;
use Nsfisis\Waddiwasi\Structure\Types\ValType;

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
