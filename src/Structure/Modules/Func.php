<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Modules;

use Nsfisis\Waddiwasi\Structure\Instructions\Expr;
use Nsfisis\Waddiwasi\Structure\Types\TypeIdx;

final readonly class Func
{
    /**
     * @param list<Local> $locals
     */
    public function __construct(
        public TypeIdx $type,
        public array $locals,
        public Expr $body,
    ) {
    }
}
