<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Modules;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instr;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\RefType;

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
