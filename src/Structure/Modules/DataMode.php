<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Modules;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;

abstract readonly class DataMode
{
    final public static function Passive(): DataModes\Passive
    {
        return new DataModes\Passive();
    }

    /**
     * @param list<Instr> $offset
     */
    final public static function Active(
        int $memory,
        array $offset,
    ): DataModes\Active {
        return new DataModes\Active($memory, $offset);
    }
}
