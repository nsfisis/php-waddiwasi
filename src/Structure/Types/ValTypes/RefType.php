<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Types\ValTypes;

use Nsfisis\Waddiwasi\Structure\Types\RefType as OrigRefType;
use Nsfisis\Waddiwasi\Structure\Types\ValType;

final readonly class RefType extends ValType
{
    protected function __construct(public OrigRefType $inner)
    {
    }
}
