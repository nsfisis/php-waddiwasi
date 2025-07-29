<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs\Control\BlockTypes;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs\Control\BlockType;

final readonly class TypeIdx extends BlockType
{
    protected function __construct(
        public int $inner
    ) {
    }
}
