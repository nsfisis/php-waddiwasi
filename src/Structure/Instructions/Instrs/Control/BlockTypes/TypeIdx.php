<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Control\BlockTypes;

use Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Control\BlockType;

final readonly class TypeIdx extends BlockType
{
    protected function __construct(public int $inner)
    {
    }
}
