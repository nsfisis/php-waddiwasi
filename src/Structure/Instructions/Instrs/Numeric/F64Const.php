<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Numeric;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;

final readonly class F64Const extends Instr
{
    /**
     * @param F64 $value
     */
    protected function __construct(
        public float $value,
    ) {
    }
}
