<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Execution;

abstract readonly class Result
{
    /**
     * @param list<int|float|Ref> $values
     */
    final public static function Values(array $values): Results\Values
    {
        return new Results\Values($values);
    }

    final public static function Trap(): Results\Trap
    {
        return new Results\Trap();
    }
}
