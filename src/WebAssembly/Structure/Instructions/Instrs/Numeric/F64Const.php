<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs\Numeric;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instr;

final readonly class F64Const extends Instr
{
    /**
     * @param F64 $value
     */
    protected function __construct(
        public float $value,
    ) {
    }

    public static function opName(): string
    {
        return 'f64.const';
    }
}
