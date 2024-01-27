<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution\Nums;

use Nsfisis\Waddiwasi\Execution\Num;

final readonly class F32_ extends Num
{
    /**
     * @param F32 $value
     */
    public function __construct(
        public float $value,
    ) {
    }
}
