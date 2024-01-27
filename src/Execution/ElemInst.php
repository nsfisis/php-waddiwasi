<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution;

use Nsfisis\Waddiwasi\Structure\Types\RefType;

final readonly class ElemInst
{
    /**
     * @param list<Ref> $elem
     */
    public function __construct(
        public RefType $type,
        public array $elem,
    ) {
    }
}
