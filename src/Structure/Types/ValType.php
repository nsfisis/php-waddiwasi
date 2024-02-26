<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Types;

abstract readonly class ValType
{
    final public static function NumType(NumType $type): ValTypes\NumType
    {
        return new ValTypes\NumType($type);
    }

    final public static function VecType(VecType $type): ValTypes\VecType
    {
        return new ValTypes\VecType($type);
    }

    final public static function RefType(RefType $type): ValTypes\RefType
    {
        return new ValTypes\RefType($type);
    }

    abstract public function equals(ValType $other): bool;
}
