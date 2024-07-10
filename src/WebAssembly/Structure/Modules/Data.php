<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Modules;

final readonly class Data
{
    /**
     * @param list<Byte> $init
     */
    public function __construct(
        public array $init,
        public DataMode $mode,
    ) {
    }
}
