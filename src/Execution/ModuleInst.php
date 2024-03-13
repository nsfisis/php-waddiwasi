<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution;

use Nsfisis\Waddiwasi\Structure\Types\FuncType;

final class ModuleInst
{
    /**
     * @param list<FuncType> $types
     * @param list<int> $funcAddrs
     * @param list<int> $tableAddrs
     * @param list<int> $memAddrs
     * @param list<int> $globalAddrs
     * @param list<int> $elemAddrs
     * @param list<int> $dataAddrs
     * @param list<ExportInst> $exports
     */
    public function __construct(
        public array $types,
        public array $funcAddrs,
        public array $tableAddrs,
        public array $memAddrs,
        public array $globalAddrs,
        public array $elemAddrs,
        public array $dataAddrs,
        public array $exports,
    ) {
    }
}
