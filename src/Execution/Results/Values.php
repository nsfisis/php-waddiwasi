<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution\Results;

use Nsfisis\Waddiwasi\Execution\Result;
use Nsfisis\Waddiwasi\Execution\Val;

final readonly class Values extends Result
{
    /**
     * @param list<Val> $values
     */
    protected function __construct(
        public array $values,
    ) {
    }
}
