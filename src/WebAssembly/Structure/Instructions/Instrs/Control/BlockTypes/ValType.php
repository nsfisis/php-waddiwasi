<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs\Control\BlockTypes;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs\Control\BlockType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\ValType as OrigValType;

final readonly class ValType extends BlockType
{
    protected function __construct(
        public ?OrigValType $inner
    ) {
    }

    public static function opName(): string
    {
        return 'hoge';
    }
}
