<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Modules\ExportDescs;

use Nsfisis\Waddiwasi\Structure\Modules\ExportDesc;

final readonly class Mem extends ExportDesc
{
    protected function __construct(
        public int $mem,
    ) {
    }
}
