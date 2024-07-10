<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\ImportDescs;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\ImportDesc;

final readonly class Func extends ImportDesc
{
    protected function __construct(
        public int $func,
    ) {
    }
}
