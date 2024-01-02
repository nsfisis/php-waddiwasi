<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Modules;

use Nsfisis\Waddiwasi\Structure\Types\TableType;

final readonly class Table
{
    public function __construct(
        public TableType $type,
    ) {
    }
}
