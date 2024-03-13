<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Control;

use Nsfisis\Waddiwasi\Structure\Types\ValType;

abstract readonly class BlockType
{
    final public static function TypeIdx(int $type): BlockTypes\TypeIdx
    {
        return new BlockTypes\TypeIdx($type);
    }

    final public static function ValType(?ValType $type): BlockTypes\ValType
    {
        return new BlockTypes\ValType($type);
    }

    public static function opName(): string
    {
        return "hoge";
    }
}
