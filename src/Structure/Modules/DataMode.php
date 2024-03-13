<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Modules;

use Nsfisis\Waddiwasi\Structure\Instructions\Expr;

abstract readonly class DataMode
{
    final public static function Passive(): DataModes\Passive
    {
        return new DataModes\Passive();
    }

    final public static function Active(
        int $memory,
        Expr $offset,
    ): DataModes\Active {
        return new DataModes\Active($memory, $offset);
    }
}
