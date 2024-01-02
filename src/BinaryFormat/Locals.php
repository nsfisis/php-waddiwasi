<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\BinaryFormat;

use Nsfisis\Waddiwasi\Structure\Types\ValType;

final readonly class Locals
{
    /**
     * @param U32 $count
     */
    public function __construct(
        public int $count,
        public ValType $type,
    ) {
    }
}
