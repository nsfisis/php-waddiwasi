<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Execution;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\ExportDescs;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\Func;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\Module;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\GlobalType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\MemType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\TableType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\ValType;
use RuntimeException;
use function assert;
use function count;

final readonly class Allocator
{
    public function __construct(
        private readonly Store $store,
    ) {
    }

    /**
     * @param list<ExternVal> $externVals
     */
    public function allocPreInitModule(
        Module $module,
        array $externVals,
    ): ModuleInst {
        $m = new ModuleInst($module->types, [], [], [], [], [], [], []);

        foreach ($externVals as $externVal) {
            match ($externVal::class) {
                ExternVals\Func::class => $m->funcAddrs[] = $externVal->addr,
                ExternVals\Global_::class => $m->globalAddrs[] = $externVal->addr,
                default => null,
            };
        }
        foreach ($module->funcs as $func) {
            $m->funcAddrs[] = $this->allocFunc($func, $m);
        }

        return $m;
    }

    /**
     * @param list<ExternVal> $externVals
     * @param list<int|float|Ref> $vals
     * @param list<list<Ref>> $refsList
     * @param list<int> $preAllocatedFuncs
     */
    public function allocModule(
        Module $module,
        array $externVals,
        array $vals,
        array $refsList,
        array $preAllocatedFuncs,
    ): ModuleInst {
        $m = new ModuleInst($module->types, [], [], [], [], [], [], []);

        foreach ($externVals as $externVal) {
            match ($externVal::class) {
                ExternVals\Func::class => $m->funcAddrs[] = $externVal->addr,
                ExternVals\Table::class => $m->tableAddrs[] = $externVal->addr,
                ExternVals\Mem::class => $m->memAddrs[] = $externVal->addr,
                ExternVals\Global_::class => $m->globalAddrs[] = $externVal->addr,
                default => throw new RuntimeException('unreachable'),
            };
        }

        foreach ($preAllocatedFuncs as $funcAddr) {
            $m->funcAddrs[] = $funcAddr;
            $funcInst = $this->store->funcs[$funcAddr];
            assert($funcInst instanceof FuncInsts\Wasm);
            // @phpstan-ignore-next-line
            $this->store->funcs[$funcAddr] = FuncInst::Wasm(
                $funcInst->type,
                $m,
                $funcInst->code,
            );
        }
        foreach ($module->tables as $table) {
            $m->tableAddrs[] = $this->allocTable($table->type, Ref::RefNull($table->type->refType));
        }
        foreach ($module->mems as $mem) {
            $m->memAddrs[] = $this->allocMem($mem->type);
        }
        foreach ($module->datas as $data) {
            $m->dataAddrs[] = $this->allocData($data->init);
        }

        foreach ($module->globals as $i => $global) {
            $m->globalAddrs[] = $this->allocGlobal($global->type, $vals[$i]);
        }
        foreach ($module->elems as $i => $elem) {
            $m->elemAddrs[] = $this->allocElem($elem->type, $refsList[$i]);
        }

        foreach ($module->exports as $export) {
            $value = match ($export->desc::class) {
                ExportDescs\Func::class => ExternVal::Func($m->funcAddrs[$export->desc->func]),
                ExportDescs\Table::class => ExternVal::Table($m->tableAddrs[$export->desc->table]),
                ExportDescs\Mem::class => ExternVal::Mem($m->memAddrs[$export->desc->mem]),
                ExportDescs\Global_::class => ExternVal::Global_($m->globalAddrs[$export->desc->global]),
                default => throw new RuntimeException('unreachable'),
            };
            $m->exports[] = new ExportInst($export->name, $value);
        }

        return $m;
    }

    private function allocFunc(Func $func, ModuleInst $moduleInst): int
    {
        $funcType = $moduleInst->types[$func->type];
        $funcInst = FuncInst::Wasm($funcType, $moduleInst, $func);
        $this->store->funcs[] = $funcInst;
        return count($this->store->funcs) - 1;
    }

    private function allocTable(TableType $tableType, Ref $ref): int
    {
        $minSize = $tableType->limits->min;
        $elem = array_fill(0, $minSize, $ref);
        $tableInst = new TableInst($tableType, $elem);
        $this->store->tables[] = $tableInst;
        return count($this->store->tables) - 1;
    }

    private function allocMem(MemType $memType): int
    {
        $memInst = new MemInst($memType);
        $this->store->mems[] = $memInst;
        return count($this->store->mems) - 1;
    }

    private function allocGlobal(GlobalType $globalType, int|float|Ref $val): int
    {
        $globalInst = new GlobalInst($globalType, $val);
        $this->store->globals[] = $globalInst;
        return count($this->store->globals) - 1;
    }

    /**
     * @param ValType::FuncRef|ValType::ExternRef $refType
     * @param list<Ref> $elem
     */
    private function allocElem(ValType $refType, array $elem): int
    {
        $elemInst = new ElemInst($refType, $elem);
        $this->store->elems[] = $elemInst;
        return count($this->store->elems) - 1;
    }

    /**
     * @param list<Byte> $data
     */
    private function allocData(array $data): int
    {
        $dataInst = new DataInst($data);
        $this->store->datas[] = $dataInst;
        return count($this->store->datas) - 1;
    }
}
