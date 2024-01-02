<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Modules\ExportDescs;

use Nsfisis\Waddiwasi\Structure\Modules\ExportDesc;
use Nsfisis\Waddiwasi\Structure\Types\FuncIdx;

final readonly class Func extends ExportDesc
{
    protected function __construct(
        public FuncIdx $func,
    ) {
    }
}
