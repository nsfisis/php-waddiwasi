<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Execution;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\RefType;

abstract readonly class Ref
{
    final public static function RefNull(RefType $type): Refs\RefNull
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
