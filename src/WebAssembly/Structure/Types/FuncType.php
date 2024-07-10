<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Types;

final readonly class FuncType
{
    public function __construct(
        public ResultType $params,
        public ResultType $results,
    ) {
    }

    public function equals(FuncType $other): bool
    {
        return $this->params->equals($other->params)
            && $this->results->equals($other->results);
    }
}
