<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Modules\ElemModes;

use Nsfisis\Waddiwasi\Structure\Instructions\Expr;
use Nsfisis\Waddiwasi\Structure\Modules\ElemMode;
use Nsfisis\Waddiwasi\Structure\Types\TableIdx;

final readonly class Active extends ElemMode
{
    protected function __construct(
        public TableIdx $table,
        public Expr $offset,
    ) {
    }
}
