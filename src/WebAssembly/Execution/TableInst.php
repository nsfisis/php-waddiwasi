<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Execution;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\TableType;

final class TableInst
{
    /**
     * @param list<Ref> $elem
     */
    public function __construct(
        public TableType $type,
        public array $elem,
    ) {
    }
}
