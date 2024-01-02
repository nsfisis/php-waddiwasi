<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Types;

final readonly class TableType
{
    public function __construct(
        public Limits $limits,
        public RefType $refType,
    ) {
    }
}
