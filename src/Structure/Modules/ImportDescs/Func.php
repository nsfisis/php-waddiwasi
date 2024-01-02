<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Modules\ImportDescs;

use Nsfisis\Waddiwasi\Structure\Modules\ImportDesc;
use Nsfisis\Waddiwasi\Structure\Types\TypeIdx;

final readonly class Func extends ImportDesc
{
    protected function __construct(
        public TypeIdx $func,
    ) {
    }
}
