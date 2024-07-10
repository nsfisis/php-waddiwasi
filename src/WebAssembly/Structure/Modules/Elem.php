<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Modules;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instr;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\ValType;

final readonly class Elem
{
    /**
     * @param ValType::FuncRef|ValType::ExternRef $type
     * @param list<list<Instr>> $init
     */
    public function __construct(
        public ValType $type,
        public array $init,
        public ElemMode $mode,
    ) {
    }
}
