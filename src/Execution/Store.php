<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution;

use function count;

final class Store
{
    /**
     * @param list<FuncInst> $funcs
     * @param list<TableInst> $tables
     * @param list<MemInst> $mems
     * @param list<GlobalInst> $globals
     * @param list<ElemInst> $elems
     * @param list<DataInst> $datas
     */
    public function __construct(
        public array $funcs,
        public array $tables,
        public array $mems,
        public array $globals,
        public array $elems,
        public array $datas,
    ) {
    }

    public static function empty(): self
    {
        return new self([], [], [], [], [], []);
    }

    public function registerFunc(FuncInst $func): ExternVals\Func
    {
        $this->funcs[] = $func;
        return ExternVal::Func(count($this->funcs) - 1);
    }
}
