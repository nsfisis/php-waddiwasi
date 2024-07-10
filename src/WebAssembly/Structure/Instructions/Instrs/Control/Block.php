<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs\Control;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instr;

final readonly class Block extends Instr
{
    /**
     * @param list<Instr> $body
     */
    protected function __construct(
        public BlockType $type,
        public array $body,
    ) {
    }

    public static function opName(): string
    {
        return "block";
    }
}
