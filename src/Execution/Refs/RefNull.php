<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution\Refs;

use Nsfisis\Waddiwasi\Execution\Ref;
use Nsfisis\Waddiwasi\Structure\Types\RefType;

final readonly class RefNull extends Ref
{
    public function __construct(
        public RefType $type,
    ) {
    }
}
