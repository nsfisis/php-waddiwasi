<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution\Nums;

use Nsfisis\Waddiwasi\Execution\Num;

final readonly class F64_ extends Num
{
    /**
     * @param F64 $value
     */
    public function __construct(
        public float $value,
    ) {
    }
}
