<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution;

abstract readonly class ExternVal
{
    final public static function Func(FuncAddr $addr): ExternVals\Func
    {
        return new ExternVals\Func($addr);
    }

    final public static function Table(TableAddr $addr): ExternVals\Table
    {
        return new ExternVals\Table($addr);
    }

    final public static function Mem(MemAddr $addr): ExternVals\Mem
    {
        return new ExternVals\Mem($addr);
    }

    final public static function Global_(GlobalAddr $addr): ExternVals\Global_
    {
        return new ExternVals\Global_($addr);
    }
}
