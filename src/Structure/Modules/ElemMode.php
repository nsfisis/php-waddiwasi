<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Modules;

use Nsfisis\Waddiwasi\Structure\Instructions\Expr;
use Nsfisis\Waddiwasi\Structure\Types\TableIdx;

abstract readonly class ElemMode
{
    final public static function Passive(): ElemModes\Passive
    {
        return new ElemModes\Passive();
    }

    final public static function Active(
        TableIdx $table,
        Expr $offset,
    ): ElemModes\Active {
        return new ElemModes\Active($table, $offset);
    }

    final public static function Declarative(): ElemModes\Declarative
    {
        return new ElemModes\Declarative();
    }
}
