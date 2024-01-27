<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution\FuncInsts;

use Nsfisis\Waddiwasi\Execution\FuncInst;
use Nsfisis\Waddiwasi\Execution\ModuleInst;
use Nsfisis\Waddiwasi\Structure\Modules\Func;
use Nsfisis\Waddiwasi\Structure\Types\FuncType;

final readonly class Wasm extends FuncInst
{
    public function __construct(
        public FuncType $type,
        public ModuleInst $module,
        public Func $code,
    ) {
    }
}
