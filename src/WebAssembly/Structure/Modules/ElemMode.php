<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Modules;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instr;

abstract readonly class ElemMode
{
    final public static function Passive(): ElemModes\Passive
    {
        return new ElemModes\Passive();
    }

    /**
     * @param list<Instr> $offset
     */
    final public static function Active(
        int $table,
        array $offset,
    ): ElemModes\Active {
        return new ElemModes\Active($table, $offset);
    }

    final public static function Declarative(): ElemModes\Declarative
    {
        return new ElemModes\Declarative();
    }
}
