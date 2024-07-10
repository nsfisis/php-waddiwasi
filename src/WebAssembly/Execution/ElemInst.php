<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Execution;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\RefType;

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
