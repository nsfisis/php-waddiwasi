<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution;

use Nsfisis\Waddiwasi\Structure\Types\MemType;

final readonly class MemInst
{
    /**
     * @param list<Byte> $data
     */
    public function __construct(
        public MemType $type,
        public array $data,
    ) {
    }
}
