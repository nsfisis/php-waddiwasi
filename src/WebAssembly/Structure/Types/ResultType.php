<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Types;

use function count;

final readonly class ResultType
{
    /**
     * @param list<ValType> $types
     */
    public function __construct(
        public array $types,
    ) {
    }

    public function equals(ResultType $other): bool
    {
        if (count($this->types) !== count($other->types)) {
            return false;
        }
        foreach ($this->types as $i => $type) {
            if (!$type->equals($other->types[$i])) {
                return false;
            }
        }
        return true;
    }
}
