<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Validation;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\FuncType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\GlobalType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\MemType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\TableType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\ValType;

final readonly class Context
{
    /**
     * @param list<FuncType> $types
     * @param list<FuncType> $funcs
     * @param list<TableType> $tables
     * @param list<MemType> $mems
     * @param list<GlobalType> $globals
     * @param list<ValType> $elems
     * @param list<bool> $datas
     * @param list<ValType> $locals
     * @param list<list<ValType>> $labels
     * @param list<ValType> $return
     * @param list<int> $refs
     */
    public function __construct(
        public array $types,
        public array $funcs,
        public array $tables,
        public array $mems,
        public array $globals,
        public array $elems,
        public array $datas,
        public array $locals,
        public array $labels,
        public array $return,
        public array $refs,
    ) {
    }
}
