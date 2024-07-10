<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Types;

final readonly class TableType
{
    /**
     * @param ValType::FuncRef|ValType::ExternRef $refType
     */
    public function __construct(
        public Limits $limits,
        public ValType $refType,
    ) {
    }
}
