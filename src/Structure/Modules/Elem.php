<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Modules;

use Nsfisis\Waddiwasi\Structure\Types\RefType;
use Nsfisis\Waddiwasi\Structure\Instructions\Instr;

final readonly class Elem
{
    /**
     * @param list<list<Instr>> $init
     */
    public function __construct(
        public RefType $type,
        public array $init,
        public ElemMode $mode,
    ) {
    }
}
