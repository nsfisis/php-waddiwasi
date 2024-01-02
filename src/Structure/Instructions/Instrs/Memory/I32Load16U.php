<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Memory;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;

final readonly class I32Load16U extends Instr
{
    /**
     * @param U32 $offset
     * @param U32 $align
     */
    public function __construct(
        public int $offset,
        public int $align,
    ) {
    }
}
