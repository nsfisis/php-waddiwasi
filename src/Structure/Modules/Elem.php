<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Modules;

use Nsfisis\Waddiwasi\Structure\Instructions\Expr;
use Nsfisis\Waddiwasi\Structure\Types\RefType;

final readonly class Elem
{
    /**
     * @param list<Expr> $init
     */
    public function __construct(
        public RefType $type,
        public array $init,
        public ElemMode $mode,
    ) {
    }
}
