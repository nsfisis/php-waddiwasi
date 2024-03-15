<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Modules;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;
use Nsfisis\Waddiwasi\Structure\Types\GlobalType;

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
