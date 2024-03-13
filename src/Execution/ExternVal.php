<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution;

abstract readonly class ExternVal
{
    final public static function Func(int $addr): ExternVals\Func
    {
        return new ExternVals\Func($addr);
    }

    final public static function Table(int $addr): ExternVals\Table
    {
        return new ExternVals\Table($addr);
    }

    final public static function Mem(int $addr): ExternVals\Mem
    {
        return new ExternVals\Mem($addr);
    }

    final public static function Global_(int $addr): ExternVals\Global_
    {
        return new ExternVals\Global_($addr);
    }
}
