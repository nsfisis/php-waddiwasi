<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Types\ValTypes;

use Nsfisis\Waddiwasi\Structure\Types\ValType;
use Nsfisis\Waddiwasi\Structure\Types\VecType as OrigVecType;

final readonly class VecType extends ValType
{
    protected function __construct(public OrigVecType $inner)
    {
    }
}
