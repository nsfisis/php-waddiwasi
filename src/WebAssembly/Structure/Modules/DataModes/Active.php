<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\DataModes;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instr;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\DataMode;

final readonly class Active extends DataMode
{
    /**
     * @param list<Instr> $offset
     */
    protected function __construct(
        public int $memory,
        public array $offset,
    ) {
    }
}
