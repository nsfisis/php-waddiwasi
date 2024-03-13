<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Table;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;

final readonly class TableGet extends Instr
{
    protected function __construct(
        public int $table,
    ) {
    }

    public static function opName(): string
    {
        return "table.get";
    }
}
