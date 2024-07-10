<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Types\ExternTypes;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\ExternType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\TableType;

final readonly class Table extends ExternType
{
    protected function __construct(
        public TableType $inner,
    ) {
    }
}
