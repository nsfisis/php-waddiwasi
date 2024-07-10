<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Execution;

use RuntimeException;
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

    public function register(Extern $extern): ExternVal
    {
        match ($extern::class) {
            Externs\Func::class => $this->funcs[] = $extern->func,
            Externs\Table::class => $this->tables[] = $extern->table,
            Externs\Mem::class => $this->mems[] = $extern->mem,
            Externs\Global_::class => $this->globals[] = $extern->global,
            default => throw new RuntimeException("unreachable"),
        };
        return match ($extern::class) {
            Externs\Func::class => ExternVal::Func(count($this->funcs) - 1),
            Externs\Table::class => ExternVal::Table(count($this->tables) - 1),
            Externs\Mem::class => ExternVal::Mem(count($this->mems) - 1),
            Externs\Global_::class => ExternVal::Global_(count($this->globals) - 1),
            default => throw new RuntimeException("unreachable"),
        };
    }
}
