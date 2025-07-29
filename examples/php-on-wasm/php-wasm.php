<?php

declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';

use Nsfisis\Waddiwasi\Stream\FileStream;
use Nsfisis\Waddiwasi\WebAssembly\Execution\Runtime;

const PHP_HELLO_WORLD = <<<'EOS'
echo "Hello, World!\n";
EOS;

$linker = (require_once __DIR__ . '/emscripten_bridge.php');

$wasmBinaryStream = new FileStream(__DIR__ . '/php-wasm.wasm');

$runtime = Runtime::instantiateFromStream($wasmBinaryStream, $linker);
$codePtr = allocateStringOnWasmMemory($runtime, PHP_HELLO_WORLD);

$results = $runtime->invoke('php_wasm_run', [$codePtr]);
\assert(\count($results) === 1);
$exitCode = $results[0];
\assert(\is_int($exitCode));
