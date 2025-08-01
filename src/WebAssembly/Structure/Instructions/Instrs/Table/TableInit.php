<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs\Table;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instr;

final readonly class TableInit extends Instr
{
    protected function __construct(
        public int $to,
        public int $from,
    ) {
    }

    public static function opName(): string
    {
        return 'table.init';
    }
}
