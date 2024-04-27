<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution;

use Nsfisis\Waddiwasi\Structure\Types\TableType;

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
