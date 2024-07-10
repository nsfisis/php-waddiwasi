<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Execution;

final readonly class ExportInst
{
    /**
     * @param Name $name
     */
    public function __construct(
        public string $name,
        public ExternVal $value,
    ) {
    }
}
