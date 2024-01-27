<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution\Nums;

use Nsfisis\Waddiwasi\Execution\Num;

final readonly class I64 extends Num
{
    /**
     * @param S64 $value
     */
    public function __construct(
        public int $value,
    ) {
    }
}
