<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Modules;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\GlobalType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\MemType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\TableType;

abstract readonly class ImportDesc
{
    final public static function Func(int $func): ImportDescs\Func
    {
        return new ImportDescs\Func($func);
    }

    final public static function Table(TableType $table): ImportDescs\Table
    {
        return new ImportDescs\Table($table);
    }

    final public static function Mem(MemType $mem): ImportDescs\Mem
    {
        return new ImportDescs\Mem($mem);
    }

    final public static function Global(GlobalType $global): ImportDescs\Global_
    {
        return new ImportDescs\Global_($global);
    }
}
