<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Modules;

abstract readonly class ExportDesc
{
    final public static function Func(int $func): ExportDescs\Func
    {
        return new ExportDescs\Func($func);
    }

    final public static function Table(int $table): ExportDescs\Table
    {
        return new ExportDescs\Table($table);
    }

    final public static function Mem(int $mem): ExportDescs\Mem
    {
        return new ExportDescs\Mem($mem);
    }

    final public static function Global(int $global): ExportDescs\Global_
    {
        return new ExportDescs\Global_($global);
    }
}
