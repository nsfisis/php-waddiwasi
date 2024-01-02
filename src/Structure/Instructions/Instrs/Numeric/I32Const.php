<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Numeric;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;

final readonly class I32Const extends Instr
{
    /**
     * @param U32 $value
     */
    public function __construct(
        public int $value,
    ) {
    }
}
