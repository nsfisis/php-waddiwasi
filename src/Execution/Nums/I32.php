<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution\Nums;

use Nsfisis\Waddiwasi\Execution\Num;

final readonly class I32 extends Num
{
    /**
     * @param S32 $value
     */
    public function __construct(
        public int $value,
    ) {
    }
}
