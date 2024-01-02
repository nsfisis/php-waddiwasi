<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Modules;

use Nsfisis\Waddiwasi\Structure\Instructions\Expr;
use Nsfisis\Waddiwasi\Structure\Types\MemIdx;

abstract readonly class DataMode
{
    final public static function Passive(): DataModes\Passive
    {
        return new DataModes\Passive();
    }

    final public static function Active(
        MemIdx $memory,
        Expr $offset,
    ): DataModes\Active {
        return new DataModes\Active($memory, $offset);
    }
}
