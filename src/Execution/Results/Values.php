<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution\Results;

use Nsfisis\Waddiwasi\Execution\Ref;
use Nsfisis\Waddiwasi\Execution\Result;

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
