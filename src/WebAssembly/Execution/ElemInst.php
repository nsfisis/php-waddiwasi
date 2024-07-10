<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Execution;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\ValType;

final readonly class ElemInst
{
    /**
     * @param ValType::FuncRef|ValType::ExternRef $type
     * @param list<Ref> $elem
     */
    public function __construct(
        public ValType $type,
        public array $elem,
    ) {
    }
}
