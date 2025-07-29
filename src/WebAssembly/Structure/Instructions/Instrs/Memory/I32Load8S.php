<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs\Memory;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instr;

final readonly class I32Load8S extends Instr
{
    /**
     * @param U32 $offset
     * @param U32 $align
     */
    protected function __construct(
        public int $offset,
        public int $align,
    ) {
    }

    public static function opName(): string
    {
        return 'i32.load8_s';
    }
}
