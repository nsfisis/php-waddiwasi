<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\ImportDescs;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\ImportDesc;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\MemType;

final readonly class Mem extends ImportDesc
{
    protected function __construct(
        public MemType $mem,
    ) {
    }
}
