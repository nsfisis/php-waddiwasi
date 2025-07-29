<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs\Control;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instr;

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

    public static function opName(): string
    {
        return 'if';
    }
}
