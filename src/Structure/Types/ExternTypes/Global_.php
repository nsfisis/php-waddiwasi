<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Types\ExternTypes;

use Nsfisis\Waddiwasi\Structure\Types\ExternType;
use Nsfisis\Waddiwasi\Structure\Types\GlobalType;

final readonly class Global_ extends ExternType
{
    protected function __construct(
        public GlobalType $inner,
    ) {
    }
}
