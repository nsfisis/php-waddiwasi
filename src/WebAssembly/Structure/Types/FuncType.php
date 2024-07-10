<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Types;

use function count;

final readonly class FuncType
{
    /**
     * @param list<ValType> $params
     * @param list<ValType> $results
     */
    public function __construct(
        public array $params,
        public array $results,
    ) {
    }

    public function equals(FuncType $other): bool
    {
        if (count($this->params) !== count($other->params)) {
            return false;
        }
        if (count($this->results) !== count($other->results)) {
            return false;
        }
        foreach ($this->params as $i => $type) {
            if ($type !== $other->params[$i]) {
                return false;
            }
        }
        foreach ($this->results as $i => $type) {
            if ($type !== $other->results[$i]) {
                return false;
            }
        }
        return true;
    }
}
