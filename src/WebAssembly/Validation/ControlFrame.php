<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Validation;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\ValType;

final readonly class ControlFrame
{
    /**
     * @param list<ValType> $startTypes
     * @param list<ValType> $endTypes
     */
    public function __construct(
        public string $opcode,
        public array $startTypes,
        public array $endTypes,
        public int $height,
        public bool $unreachable,
    ) {
    }
}
