<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Types;

abstract readonly class ExternType
{
    final public static function Func(FuncType $type): ExternTypes\Func
    {
        return new ExternTypes\Func($type);
    }

    final public static function Table(TableType $type): ExternTypes\Table
    {
        return new ExternTypes\Table($type);
    }

    final public static function Mem(MemType $type): ExternTypes\Mem
    {
        return new ExternTypes\Mem($type);
    }

    final public static function Global(GlobalType $type): ExternTypes\Global_
    {
        return new ExternTypes\Global_($type);
    }
}
