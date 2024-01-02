<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Modules\ImportDescs;

use Nsfisis\Waddiwasi\Structure\Modules\ImportDesc;
use Nsfisis\Waddiwasi\Structure\Types\TableType;

final readonly class Table extends ImportDesc
{
    protected function __construct(
        public TableType $table,
    ) {
    }
}
