<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Table;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;
use Nsfisis\Waddiwasi\Structure\Types\TableIdx;

final readonly class TableGrow extends Instr
{
    protected function __construct(
        public TableIdx $table,
    ) {
    }

    public static function opName(): string
    {
        return "table.grow";
    }
}