<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\BinaryFormat\Internal;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\ValType;

/**
 * @internal
 */
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
