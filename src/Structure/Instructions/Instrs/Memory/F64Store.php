<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Memory;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;

final readonly class F64Store extends Instr
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
        return "f64.store";
    }
}