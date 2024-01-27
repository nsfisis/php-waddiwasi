<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution;

use Nsfisis\Waddiwasi\Structure\Types\RefType;

abstract readonly class Ref
{
    final public static function RefNull(RefType $type): Refs\RefNull
    {
        return new Refs\RefNull($type);
    }

    final public static function RefFunc(FuncAddr $addr): Refs\RefFunc
    {
        return new Refs\RefFunc($addr);
    }

    final public static function RefExtern(ExternAddr $addr): Refs\RefExtern
    {
        return new Refs\RefExtern($addr);
    }
}
