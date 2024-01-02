<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Types;

final readonly class FuncType
{
    public function __construct(
        public ResultType $args,
        public ResultType $returns,
    ) {
    }
}
