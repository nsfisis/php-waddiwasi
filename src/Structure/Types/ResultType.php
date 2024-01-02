<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Types;

final readonly class ResultType
{
    /**
     * @param list<ValType> $types
     */
    public function __construct(
        public array $types,
    ) {
    }
}
