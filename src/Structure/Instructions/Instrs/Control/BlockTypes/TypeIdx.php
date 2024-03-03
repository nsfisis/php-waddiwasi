<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Control\BlockTypes;

use Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Control\BlockType;
use Nsfisis\Waddiwasi\Structure\Types\TypeIdx as OrigTypeIdx;

final readonly class TypeIdx extends BlockType
{
    protected function __construct(public OrigTypeIdx $inner)
    {
    }

    public static function opName(): string
    {
        return "hoge";
    }
}
