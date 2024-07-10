<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Modules;

final readonly class Import
{
    /**
     * @param Name $module
     * @param Name $name
     */
    public function __construct(
        public string $module,
        public string $name,
        public ImportDesc $desc,
    ) {
    }
}
