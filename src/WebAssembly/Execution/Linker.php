<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Execution;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\Import;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\ImportDescs;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\Module;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\FuncType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\GlobalType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\Limits;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\MemType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\TableType;

final class Linker
{
    /**
     * @var array<string, array<string, ExternVal>>
     */
    private array $symbols = [];

    public function __construct(
        public readonly Store $store,
    ) {
    }

    public function register(string $namespace, string $name, Extern $extern): void
    {
        $externVal = $this->store->register($extern);
        $this->symbols[$namespace][$name] = $externVal;
    }

    public function registerNamespace(string $namespace, ExporterInterface $exporter): void
    {
        foreach ($exporter->exports() as $export) {
            $this->symbols[$namespace][$export->name] = $export->value;
        }
    }

    /**
     * @return list<ExternVal>
     */
    public function resolve(Module $module): array
    {
        $externVals = [];
        foreach ($module->imports as $import) {
            $externVal = $this->symbols[$import->module][$import->name] ?? null;
            if ($externVal === null) {
                throw new LinkErrorException("import not found: {$import->module}::{$import->name}");
            }

            $this->validateImportTypeCompatibility($module, $import, $externVal);

            $externVals[] = $externVal;
        }
        return $externVals;
    }

    private function validateImportTypeCompatibility(Module $module, Import $import, ExternVal $externVal): void
    {
        switch ($import->desc::class) {
            case ImportDescs\Func::class:
                if (!$externVal instanceof ExternVals\Func) {
                    throw new LinkErrorException("incompatible import type: expected function, got " . $externVal::class);
                }
                $expectedType = $module->types[$import->desc->func];
                $actualFunc = $this->store->funcs[$externVal->addr];
                $actualType = match (true) {
                    $actualFunc instanceof FuncInsts\Wasm => $actualFunc->type,
                    $actualFunc instanceof FuncInsts\Host => $actualFunc->type,
                    default => throw new LinkErrorException("unknown function instance type"),
                };
                if (!$this->functionsTypesMatch($expectedType, $actualType)) {
                    throw new LinkErrorException("incompatible import type: function signature mismatch");
                }
                break;

            case ImportDescs\Global_::class:
                if (!$externVal instanceof ExternVals\Global_) {
                    throw new LinkErrorException("incompatible import type: expected global, got " . $externVal::class);
                }
                $expectedType = $import->desc->global;
                $actualGlobal = $this->store->globals[$externVal->addr];
                if (!$this->globalTypesMatch($expectedType, $actualGlobal->type)) {
                    throw new LinkErrorException("incompatible import type: global type mismatch");
                }
                break;

            case ImportDescs\Table::class:
                if (!$externVal instanceof ExternVals\Table) {
                    throw new LinkErrorException("incompatible import type: expected table, got " . $externVal::class);
                }
                $expectedType = $import->desc->table;
                $actualTable = $this->store->tables[$externVal->addr];
                if (!$this->tableTypesMatch($expectedType, $actualTable->type)) {
                    throw new LinkErrorException("incompatible import type: table type mismatch");
                }
                break;

            case ImportDescs\Mem::class:
                if (!$externVal instanceof ExternVals\Mem) {
                    throw new LinkErrorException("incompatible import type: expected memory, got " . $externVal::class);
                }
                $expectedType = $import->desc->mem;
                $actualMem = $this->store->mems[$externVal->addr];
                if (!$this->memTypesMatch($expectedType, $actualMem->type)) {
                    throw new LinkErrorException("incompatible import type: memory type mismatch");
                }
                break;
        }
    }

    private function functionsTypesMatch(FuncType $expectedType, FuncType $actualType): bool
    {
        return $expectedType->params === $actualType->params
            && $expectedType->results === $actualType->results;
    }

    private function globalTypesMatch(GlobalType $expectedType, GlobalType $actualType): bool
    {
        return $expectedType->mut === $actualType->mut
            && $expectedType->valType === $actualType->valType;
    }

    private function tableTypesMatch(TableType $expectedType, TableType $actualType): bool
    {
        return $expectedType->refType === $actualType->refType
            && $this->limitsMatch($expectedType->limits, $actualType->limits);
    }

    private function memTypesMatch(MemType $expectedType, MemType $actualType): bool
    {
        return $this->limitsMatch($expectedType->limits, $actualType->limits);
    }

    private function limitsMatch(Limits $expectedLimits, Limits $actualLimits): bool
    {
        // Limits subtyping:
        // For limits [n1, m1?] <: [n2, m2?]:
        // - n1 >= n2
        // - either:
        //   - m2 is empty
        // - or:
        //   - both m1 and m2 are non-empty
        //   - m1 <= m2
        $n1 = $actualLimits->min;
        $m1 = $actualLimits->max;
        $n2 = $expectedLimits->min;
        $m2 = $expectedLimits->max;
        return $n1 >= $n2 && ($m2 === null || $m1 !== null && $m1 <= $m2);
    }
}
