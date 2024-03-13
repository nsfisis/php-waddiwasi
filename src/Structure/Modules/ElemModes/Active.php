<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Modules\ElemModes;

use Nsfisis\Waddiwasi\Structure\Instructions\Expr;
use Nsfisis\Waddiwasi\Structure\Modules\ElemMode;

final readonly class Active extends ElemMode
{
    protected function __construct(
        public int $table,
        public Expr $offset,
    ) {
    }
}
