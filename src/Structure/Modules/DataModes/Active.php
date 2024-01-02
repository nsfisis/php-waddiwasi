<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Modules\DataModes;

use Nsfisis\Waddiwasi\Structure\Instructions\Expr;
use Nsfisis\Waddiwasi\Structure\Modules\DataMode;
use Nsfisis\Waddiwasi\Structure\Types\MemIdx;

final readonly class Active extends DataMode
{
    protected function __construct(
        public MemIdx $memory,
        public Expr $offset,
    ) {
    }
}
