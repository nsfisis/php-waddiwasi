<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Execution\Refs;

use Nsfisis\Waddiwasi\WebAssembly\Execution\Ref;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\ValType;

final readonly class RefNull extends Ref
{
    /**
     * @param ValType::FuncRef|ValType::ExternRef $type
     */
    public function __construct(
        public ValType $type,
    ) {
    }
}
