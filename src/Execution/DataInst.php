<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution;

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
