<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Control;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;

final readonly class If_ extends Instr
{
    /**
     * @param list<Instr> $thenBody
     * @param list<Instr> $elseBody
     */
    protected function __construct(
        public BlockType $type,
        public array $thenBody,
        public array $elseBody,
    ) {
    }
}
