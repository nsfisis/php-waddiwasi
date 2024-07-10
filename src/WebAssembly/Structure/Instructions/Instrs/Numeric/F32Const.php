<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs\Numeric;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instr;

final readonly class F32Const extends Instr
{
    /**
     * @param F32 $value
     */
    protected function __construct(
        public float $value,
    ) {
    }

    public static function opName(): string
    {
        return "f32.const";
    }
}
