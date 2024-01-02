<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Modules;

use Nsfisis\Waddiwasi\Structure\Instructions\Expr;
use Nsfisis\Waddiwasi\Structure\Types\GlobalType;

final readonly class Global_
{
    public function __construct(
        public GlobalType $type,
        public Expr $init,
    ) {
    }
}
