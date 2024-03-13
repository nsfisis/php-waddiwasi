<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Modules;

use Nsfisis\Waddiwasi\Structure\Instructions\Expr;

final readonly class Func
{
    /**
     * @param list<Local> $locals
     */
    public function __construct(
        public int $type,
        public array $locals,
        public Expr $body,
    ) {
    }
}
