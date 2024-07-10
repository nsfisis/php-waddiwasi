<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Execution\Results;

use Nsfisis\Waddiwasi\WebAssembly\Execution\Ref;
use Nsfisis\Waddiwasi\WebAssembly\Execution\Result;

final readonly class Values extends Result
{
    /**
     * @param list<int|float|Ref> $values
     */
    protected function __construct(
        public array $values,
    ) {
    }
}
