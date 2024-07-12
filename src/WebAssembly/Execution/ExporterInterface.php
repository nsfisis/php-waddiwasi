<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Execution;

interface ExporterInterface
{
    /**
     * @return list<ExportInst>
     */
    public function exports(): array;
}
