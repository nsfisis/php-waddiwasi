<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs\Control;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instr;

final readonly class BrTable extends Instr
{
    /**
     * @param list<int> $labelTable
     */
    protected function __construct(
        public array $labelTable,
        public int $defaultLabel,
    ) {
    }

    public static function opName(): string
    {
        return "br_table";
    }
}
