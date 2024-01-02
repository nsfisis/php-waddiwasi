<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions;

final readonly class Expr
{
    /**
     * @var non-empty-list<Instr>
     */
    public array $instrs;

    /**
     * @param list<Instr> $instrs
     */
    public function __construct(
        array $instrs,
    ) {
        $instrs[] = Instr::End();
        $this->instrs = $instrs;
    }
}
