<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Types;

final readonly class TableIdx
{
    /**
     * @param U32 $value
     */
    public function __construct(
        public int $value,
    ) {
    }
}