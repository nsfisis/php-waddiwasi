<?php

declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';

use Nsfisis\Waddiwasi\Stream\FileStream;
use Nsfisis\Waddiwasi\WebAssembly\Execution\Runtime;

const PHP_HELLO_WORLD = <<<'EOS'
require_once '%DIR%/HelloWorld.php';
EOS;

$wasmBinaryStream = new FileStream(__DIR__ . '/php-wasm.wasm');

$linker = require_once __DIR__ . '/emscripten_bridge.php';

$runtime = Runtime::instantiateFromStream($wasmBinaryStream, $linker);
$codePtr = allocateStringOnWasmMemory($runtime, strtr(PHP_HELLO_WORLD, [
    '%DIR%' => __DIR__,
]));

$results = $runtime->invoke('php_wasm_run', [$codePtr]);
\assert(\count($results) === 1);
$exitCode = $results[0];
\assert(\is_int($exitCode));
