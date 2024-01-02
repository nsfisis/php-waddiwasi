<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Modules;

use Nsfisis\Waddiwasi\Structure\Types\FuncIdx;
use Nsfisis\Waddiwasi\Structure\Types\GlobalIdx;
use Nsfisis\Waddiwasi\Structure\Types\MemIdx;
use Nsfisis\Waddiwasi\Structure\Types\TableIdx;

abstract readonly class ExportDesc
{
    final public static function Func(FuncIdx $func): ExportDescs\Func
    {
        return new ExportDescs\Func($func);
    }

    final public static function Table(TableIdx $table): ExportDescs\Table
    {
        return new ExportDescs\Table($table);
    }

    final public static function Mem(MemIdx $mem): ExportDescs\Mem
    {
        return new ExportDescs\Mem($mem);
    }

    final public static function Global(GlobalIdx $global): ExportDescs\Global_
    {
        return new ExportDescs\Global_($global);
    }
}
