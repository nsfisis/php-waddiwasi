<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Execution;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\Func;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\FuncType;

abstract readonly class FuncInst
{
    final public static function Wasm(FuncType $type, ModuleInst $module, Func $code): FuncInsts\Wasm
    {
        return new FuncInsts\Wasm($type, $module, $code);
    }

    final public static function Host(FuncType $type, callable $callback): FuncInsts\Host
    {
        return new FuncInsts\Host($type, $callback);
    }
}
