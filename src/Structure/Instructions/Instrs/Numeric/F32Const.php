<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Numeric;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;

final readonly class F32Const extends Instr
{
    /**
     * @param F32 $value
     */
    public function __construct(
        public float $value,
    ) {
    }
}
