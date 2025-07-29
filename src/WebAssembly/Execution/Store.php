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
        switch ($extern::class) {
            case Externs\Func::class:
                foreach ($this->funcs as $i => $f) {
                    if ($f === $extern->func) {
                        return ExternVal::Func($i);
                    }
                }
                $this->funcs[] = $extern->func;
                return ExternVal::Func(count($this->funcs) - 1);
            case Externs\Table::class:
                foreach ($this->tables as $i => $t) {
                    if ($t === $extern->table) {
                        return ExternVal::Table($i);
                    }
                }
                $this->tables[] = $extern->table;
                return ExternVal::Table(count($this->tables) - 1);
            case Externs\Mem::class:
                foreach ($this->mems as $i => $m) {
                    if ($m === $extern->mem) {
                        return ExternVal::Mem($i);
                    }
                }
                $this->mems[] = $extern->mem;
                return ExternVal::Mem(count($this->mems) - 1);
            case Externs\Global_::class:
                foreach ($this->globals as $i => $g) {
                    if ($g === $extern->global) {
                        return ExternVal::Global_($i);
                    }
                }
                $this->globals[] = $extern->global;
                return ExternVal::Global_(count($this->globals) - 1);
            default:
                throw new RuntimeException('unreachable');
        }
    }
}
