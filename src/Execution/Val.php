<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution;

abstract readonly class Val
{
    final public static function Num(Num $inner): Vals\Num
    {
        return new Vals\Num($inner);
    }

    final public static function Ref(Ref $inner): Vals\Ref
    {
        return new Vals\Ref($inner);
    }
}
