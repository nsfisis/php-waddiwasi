<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Execution;

final readonly class DataInst
{
    /**
     * @param list<Byte> $data
     */
    public function __construct(
        public array $data,
    ) {
    }
}
