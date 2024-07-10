<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Modules;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instr;

final readonly class Func
{
    /**
     * @param list<Local> $locals
     * @param list<Instr> $body
     */
    public function __construct(
        public int $type,
        public array $locals,
        public array $body,
    ) {
    }
}
