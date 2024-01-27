<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution\FuncInsts;

use Nsfisis\Waddiwasi\Execution\FuncInst;
use Nsfisis\Waddiwasi\Structure\Types\FuncType;

final readonly class Host extends FuncInst
{
    /**
     * @param callable $code
     */
    public function __construct(
        public FuncType $type,
        public mixed $code,
    ) {
    }
}
