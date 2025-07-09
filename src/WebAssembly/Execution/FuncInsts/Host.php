<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Execution\FuncInsts;

use Nsfisis\Waddiwasi\WebAssembly\Execution\FuncInst;
use Nsfisis\Waddiwasi\WebAssembly\Execution\Ref;
use Nsfisis\Waddiwasi\WebAssembly\Execution\Runtime;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\FuncType;

final readonly class Host extends FuncInst
{
    /**
     * @param callable(Runtime, int|float|Ref...): ?(int|float|Ref|list<int|float|Ref>) $callback
     */
    public function __construct(
        public FuncType $type,
        public mixed $callback,
    ) {
    }
}
