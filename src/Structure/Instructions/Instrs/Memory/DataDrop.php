<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Instructions\Instrs\Memory;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;
use Nsfisis\Waddiwasi\Structure\Types\DataIdx;

final readonly class DataDrop extends Instr
{
    public function __construct(
        public DataIdx $data,
    ) {
    }
}
