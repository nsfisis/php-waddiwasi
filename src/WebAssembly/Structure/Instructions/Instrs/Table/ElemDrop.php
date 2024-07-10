<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs\Table;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instr;

final readonly class ElemDrop extends Instr
{
    protected function __construct(
        public int $elem,
    ) {
    }

    public static function opName(): string
    {
        return "elem.drop";
    }
}
