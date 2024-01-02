<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Structure\Modules;

use Nsfisis\Waddiwasi\Structure\Types\FuncType;

final readonly class Module
{
    /**
     * @param list<FuncType> $types
     * @param list<Func> $funcs
     * @param list<Table> $tables
     * @param list<Mem> $mems
     * @param list<Global_> $globals
     * @param list<Elem> $elems
     * @param list<Data> $datas
     * @param list<Import> $imports
     * @param list<Export> $exports
     */
    public function __construct(
        public array $types,
        public array $funcs,
        public array $tables,
        public array $mems,
        public array $globals,
        public array $elems,
        public array $datas,
        public ?Start $start,
        public array $imports,
        public array $exports,
    ) {
    }
}
