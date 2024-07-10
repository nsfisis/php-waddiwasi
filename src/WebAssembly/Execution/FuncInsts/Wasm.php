<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Execution\FuncInsts;

use Nsfisis\Waddiwasi\WebAssembly\Execution\FuncInst;
use Nsfisis\Waddiwasi\WebAssembly\Execution\ModuleInst;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\Func;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\FuncType;

final readonly class Wasm extends FuncInst
{
    public function __construct(
        public FuncType $type,
        public ModuleInst $module,
        public Func $code,
    ) {
    }
}
