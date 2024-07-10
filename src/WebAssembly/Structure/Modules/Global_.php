<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Modules;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instr;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\GlobalType;

final readonly class Global_
{
    /**
     * @param list<Instr> $init
     */
    public function __construct(
        public GlobalType $type,
        public array $init,
    ) {
    }
}
