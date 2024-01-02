<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Modules;

final readonly class Export
{
    /**
     * @param Name $name
     */
    public function __construct(
        public string $name,
        public ExportDesc $desc,
    ) {
    }
}
