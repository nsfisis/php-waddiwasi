<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Modules;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\TableType;

final readonly class Table
{
    public function __construct(
        public TableType $type,
    ) {
    }
}
