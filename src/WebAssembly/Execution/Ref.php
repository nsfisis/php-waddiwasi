<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Execution;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\ValType;

abstract readonly class Ref
{
    /**
     * @param ValType::FuncRef|ValType::ExternRef $type
     */
    final public static function RefNull(ValType $type): Refs\RefNull
    {
        return new Refs\RefNull($type);
    }

    final public static function RefFunc(int $addr): Refs\RefFunc
    {
        return new Refs\RefFunc($addr);
    }

    final public static function RefExtern(int $addr): Refs\RefExtern
    {
        return new Refs\RefExtern($addr);
    }
}
