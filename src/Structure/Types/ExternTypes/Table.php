<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Types\ExternTypes;

use Nsfisis\Waddiwasi\Structure\Types\ExternType;
use Nsfisis\Waddiwasi\Structure\Types\TableType;

final readonly class Table extends ExternType
{
    protected function __construct(
        public TableType $inner,
    ) {
    }
}
