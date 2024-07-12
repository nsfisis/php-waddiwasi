<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Execution;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Modules\Module;

final class Linker
{
    /**
     * @var array<string, array<string, ExternVal>>
     */
    private array $symbols = [];

    public function __construct(
        private Store $store,
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
            $externVals[] = $externVal;
        }
        return $externVals;
    }
}
