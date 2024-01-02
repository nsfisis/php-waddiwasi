<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Modules\ExportDescs;

use Nsfisis\Waddiwasi\Structure\Modules\ExportDesc;
use Nsfisis\Waddiwasi\Structure\Types\TableIdx;

final readonly class Table extends ExportDesc
{
    protected function __construct(
        public TableIdx $table,
    ) {
    }
}
