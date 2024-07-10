<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\ElemModes;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instr;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\ElemMode;

final readonly class Active extends ElemMode
{
    /**
     * @param list<Instr> $offset
     */
    protected function __construct(
        public int $table,
        public array $offset,
    ) {
    }
}
