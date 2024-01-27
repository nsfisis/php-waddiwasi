<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Numeric;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;

final readonly class I64Const extends Instr
{
    /**
     * @param U64 $value
     */
    protected function __construct(
        public int $value,
    ) {
    }
}
