<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\ExportDescs;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\ExportDesc;

final readonly class Table extends ExportDesc
{
    protected function __construct(
        public int $table,
    ) {
    }
}
