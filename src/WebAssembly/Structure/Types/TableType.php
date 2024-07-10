<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Types;

final readonly class TableType
{
    public function __construct(
        public Limits $limits,
        public RefType $refType,
    ) {
    }
}
