<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs\Reference;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instr;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\ValType;

final readonly class RefNull extends Instr
{
    /**
     * @param ValType::FuncRef|ValType::ExternRef $type
     */
    protected function __construct(
        public ValType $type,
    ) {
    }

    public static function opName(): string
    {
        return "ref.null";
    }
}
