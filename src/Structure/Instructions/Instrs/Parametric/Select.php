<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Parametric;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;
use Nsfisis\Waddiwasi\Structure\Types\ValType;

final readonly class Select extends Instr
{
    /**
     * @param list<ValType> $types
     */
    protected function __construct(
        public array $types,
    ) {
    }

    public static function opName(): string
    {
        return "select";
    }
}
