<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution;

abstract readonly class Extern
{
    final public static function Func(FuncInst $func): Externs\Func
    {
        return new Externs\Func($func);
    }

    final public static function Table(TableInst $table): Externs\Table
    {
        return new Externs\Table($table);
    }

    final public static function Mem(MemInst $mem): Externs\Mem
    {
        return new Externs\Mem($mem);
    }

    final public static function Global_(GlobalInst $global): Externs\Global_
    {
        return new Externs\Global_($global);
    }
}
