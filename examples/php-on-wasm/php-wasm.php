<?php

declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';

use Nsfisis\Waddiwasi\BinaryFormat\Decoder;
use Nsfisis\Waddiwasi\BinaryFormat\InvalidBinaryFormatException;
use Nsfisis\Waddiwasi\Execution\FuncInst;
use Nsfisis\Waddiwasi\Execution\Refs;
use Nsfisis\Waddiwasi\Execution\Runtime;
use Nsfisis\Waddiwasi\Execution\Store;
use Nsfisis\Waddiwasi\Structure\Types\FuncType;
use Nsfisis\Waddiwasi\Structure\Types\NumType;
use Nsfisis\Waddiwasi\Structure\Types\ResultType;
use Nsfisis\Waddiwasi\Structure\Types\ValType;

const PHP_EMPTY = '';

const PHP_HELLO_WORLD = <<<'EOS'
echo "Hello, World!\n";
EOS;

$wasmBinary = file_get_contents(__DIR__ . '/php-wasm.wasm');
\assert($wasmBinary !== false);

try {
    $module = (new Decoder($wasmBinary))->decode();
} catch (InvalidBinaryFormatException $e) {
    fprintf(STDERR, $e->getMessage() . "\n");
    exit(1);
}

$hostFuncs = [
    makeHostFunc('(i32, i32, i32) -> (i32)', hostFunc__env__invoke_iii(...)),
    makeHostFunc('(i32, i32, i32, i32, i32) -> (i32)', hostFunc__env__invoke_iiiii(...)),
    makeHostFunc('(i32) -> ()', hostFunc__env__invoke_v(...)),
    makeHostFunc('(i32, i32, i32, i32) -> (i32)', hostFunc__env__invoke_iiii(...)),
    makeHostFunc('(i32, i32) -> (i32)', hostFunc__env__invoke_ii(...)),
    makeHostFunc('() -> ()', hostFunc__env__abort(...)),
    makeHostFunc('(i32) -> ()', hostFunc__env__exit(...)),
    makeHostFunc('(i32, i32, i32, i32) -> ()', hostFunc__env__invoke_viii(...)),
    makeHostFunc('(i32, i32, i32) -> ()', hostFunc__env__invoke_vii(...)),
    makeHostFunc('(i32, i32) -> ()', hostFunc__env__invoke_vi(...)),
    makeHostFunc('(i32) -> (i32)', hostFunc__env__invoke_i(...)),
    makeHostFunc('(i32, i32, i32, i32, i32, i32, i32) -> (i32)', hostFunc__env__invoke_iiiiiii(...)),
    makeHostFunc('(i32, i32, i32, i32) -> ()', hostFunc__env____assert_fail(...)),
    makeHostFunc('(i32, i32, i32, i32, i32) -> ()', hostFunc__env__invoke_viiii(...)),
    makeHostFunc('(i32, i32, i32, i32, i32, i32) -> ()', hostFunc__env__invoke_viiiii(...)),
    makeHostFunc('(i32, i32, i32, i32, i32, i32) -> (i32)', hostFunc__env__invoke_iiiiii(...)),
    makeHostFunc('(i32, i32, i32, i32, i32, i32, i32, i32, i32, i32) -> (i32)', hostFunc__env__invoke_iiiiiiiiii(...)),
    makeHostFunc('(i32, i32, i32, i32) -> (i32)', hostFunc__env__strftime(...)),
    makeHostFunc('(i32, i32, i32, i32) -> (i32)', hostFunc__env__getaddrinfo(...)),
    makeHostFunc('(i32, i32, i32, i32, i32, i32) -> (i32)', hostFunc__env__gethostbyname_r(...)),
    makeHostFunc('() -> (i32)', hostFunc__env__getdtablesize(...)),
    makeHostFunc('(i32) -> (i32)', hostFunc__env__getprotobyname(...)),
    makeHostFunc('(i32) -> (i32)', hostFunc__env__getprotobynumber(...)),
    makeHostFunc('(i32, i32, i32) -> (i32)', hostFunc__env__strptime(...)),
    makeHostFunc('(i32, i32, i32, i32, i32, i32, i32) -> (i32)', hostFunc__env__getnameinfo(...)),
    makeHostFunc('(i32, i32, i32, i32, i32, i32, i32) -> ()', hostFunc__env__invoke_viiiiii(...)),
    makeHostFunc('(i32, i32, i32, f64, i32, i32) -> ()', hostFunc__env__invoke_viidii(...)),
    makeHostFunc('(i32) -> (i32)', hostFunc__env__getcontext(...)),
    makeHostFunc('(i32, i32, i32, i32) -> ()', hostFunc__env__makecontext(...)),
    makeHostFunc('(i32, i32) -> (i32)', hostFunc__env__swapcontext(...)),
    makeHostFunc('(i32, i32) -> (i32)', hostFunc__wasi_snapshot_preview1__environ_sizes_get(...)),
    makeHostFunc('(i32, i32) -> (i32)', hostFunc__wasi_snapshot_preview1__environ_get(...)),
    makeHostFunc('(i32, i32, i32) -> (i32)', hostFunc__env____syscall_fcntl64(...)),
    makeHostFunc('(i32, i32, i32) -> (i32)', hostFunc__env____syscall_ioctl(...)),
    makeHostFunc('(i32) -> (i32)', hostFunc__wasi_snapshot_preview1__fd_close(...)),
    makeHostFunc('(i32, i32, i32, i32) -> (i32)', hostFunc__wasi_snapshot_preview1__fd_read(...)),
    makeHostFunc('(i32, i32, i32, i32) -> (i32)', hostFunc__wasi_snapshot_preview1__fd_write(...)),
    makeHostFunc('(i32) -> ()', hostFunc__wasi_snapshot_preview1__proc_exit(...)),
    makeHostFunc('(i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall_faccessat(...)),
    makeHostFunc('(i32) -> (i32)', hostFunc__env____syscall_chdir(...)),
    makeHostFunc('(i32, i32) -> (i32)', hostFunc__env____syscall_chmod(...)),
    makeHostFunc('(i32, i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall_fchownat(...)),
    makeHostFunc('(i32) -> (i32)', hostFunc__env____syscall_dup(...)),
    makeHostFunc('(i32, i32, i32) -> (i32)', hostFunc__env____syscall_dup3(...)),
    makeHostFunc('(i32, i32, i32) -> ()', hostFunc__env__emscripten_memcpy_js(...)),
    makeHostFunc('() -> (f64)', hostFunc__env__emscripten_date_now(...)),
    makeHostFunc('() -> (i32)', hostFunc__env___emscripten_get_now_is_monotonic(...)),
    makeHostFunc('() -> (f64)', hostFunc__env__emscripten_get_now(...)),
    makeHostFunc('(i32) -> (i32)', hostFunc__env____syscall_fdatasync(...)),
    makeHostFunc('(i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall_openat(...)),
    makeHostFunc('(i32, i32) -> (i32)', hostFunc__env____syscall_fstat64(...)),
    makeHostFunc('(i32, i32) -> (i32)', hostFunc__env____syscall_stat64(...)),
    makeHostFunc('(i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall_newfstatat(...)),
    makeHostFunc('(i32, i32) -> (i32)', hostFunc__env____syscall_lstat64(...)),
    makeHostFunc('(i32) -> (i32)', hostFunc__wasi_snapshot_preview1__fd_sync(...)),
    makeHostFunc('(i32, i32) -> (i32)', hostFunc__env____syscall_getcwd(...)),
    makeHostFunc('(i32) -> ()', hostFunc__env__emscripten_err(...)),
    makeHostFunc('(i32, i32) -> (i32)', hostFunc__wasi_snapshot_preview1__fd_fdstat_get(...)),
    makeHostFunc('(i32, i32, i32) -> (i32)', hostFunc__env____syscall_mkdirat(...)),
    makeHostFunc('(i32) -> (i32)', hostFunc__env____syscall_pipe(...)),
    makeHostFunc('(i32, i32, i32) -> (i32)', hostFunc__env____syscall_poll(...)),
    makeHostFunc('(i32, i32) -> ()', hostFunc__env____call_sighandler(...)),
    makeHostFunc('(i32, i32, i32) -> (i32)', hostFunc__env____syscall_getdents64(...)),
    makeHostFunc('(i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall_readlinkat(...)),
    makeHostFunc('(i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall_renameat(...)),
    makeHostFunc('(i32) -> (i32)', hostFunc__env____syscall_rmdir(...)),
    makeHostFunc('(i32, i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall__newselect(...)),
    makeHostFunc('(i32, f64) -> (i32)', hostFunc__env___setitimer_js(...)),
    makeHostFunc('(i32, i32, i32) -> (i32)', hostFunc__env____syscall_statfs64(...)),
    makeHostFunc('(i32, i32) -> (i32)', hostFunc__env____syscall_symlink(...)),
    makeHostFunc('() -> (i32)', hostFunc__env__emscripten_get_heap_max(...)),
    makeHostFunc('(i32, i32, i32) -> ()', hostFunc__env___tzset_js(...)),
    makeHostFunc('(i32, i32, i32) -> (i32)', hostFunc__env____syscall_unlinkat(...)),
    makeHostFunc('(i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall_utimensat(...)),
    makeHostFunc('(i32) -> (i32)', hostFunc__env__emscripten_resize_heap(...)),
    makeHostFunc('() -> ()', hostFunc__env___emscripten_throw_longjmp(...)),
    makeHostFunc('(i32, i32, i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall_accept4(...)),
    makeHostFunc('(i32, i32, i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall_bind(...)),
    makeHostFunc('(i32, i32, i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall_connect(...)),
    makeHostFunc('(i32, i32, i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall_getpeername(...)),
    makeHostFunc('(i32, i32, i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall_getsockname(...)),
    makeHostFunc('(i32, i32, i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall_getsockopt(...)),
    makeHostFunc('(i32, i32, i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall_listen(...)),
    makeHostFunc('(i32, i32, i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall_recvfrom(...)),
    makeHostFunc('(i32, i32, i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall_sendto(...)),
    makeHostFunc('(i32, i32, i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall_socket(...)),
    makeHostFunc('(i32, i32, i32) -> (i32)', hostFunc__env____syscall_ftruncate64(...)),
    makeHostFunc('(i32, i32, i32, i32, i32) -> (i32)', hostFunc__wasi_snapshot_preview1__fd_seek(...)),
    makeHostFunc('(i32) -> (i32)', hostFunc__env___mktime_js(...)),
    makeHostFunc('(i32, i32, i32) -> ()', hostFunc__env___localtime_js(...)),
    makeHostFunc('(i32, i32, i32) -> ()', hostFunc__env___gmtime_js(...)),
    makeHostFunc('(i32, i32, i32, i32, i32, i32, i32) -> (i32)', hostFunc__env___munmap_js(...)),
    makeHostFunc('(i32, i32, i32, i32, i32, i32, i32, i32) -> (i32)', hostFunc__env___mmap_js(...)),
];
$store = Store::empty();
$externVals = [];
foreach ($hostFuncs as $hostFunc) {
    $externVals[] = $store->registerFunc($hostFunc);
}
$runtime = Runtime::instantiate($store, $module, $externVals);
$codePtr = allocateStringOnWasmMemory($runtime, PHP_HELLO_WORLD);

$results = $runtime->invoke("php_wasm_run", [$codePtr]);
\assert(\count($results) === 1);
$exitCode = $results[0];
\assert(\is_int($exitCode));

function allocateStringOnWasmMemory(Runtime $runtime, string $str): int
{
    // Plus 1 for the null terminator in C.
    $size = \strlen($str) + 1;
    $outPtr = wasm_stackAlloc($runtime, $size);
    copyStringToWasmMemory($runtime, $outPtr, $str);
    return $outPtr;
}

function wasm_stackAlloc(Runtime $runtime, int $size): int
{
    $results = $runtime->invoke("stackAlloc", [$size]);
    \assert(\count($results) === 1);
    $result = $results[0];
    \assert(\is_int($result));
    return $result;
}

function wasm_stackSave(Runtime $runtime): int
{
    $results = $runtime->invoke("stackSave", []);
    \assert(\count($results) === 1);
    $result = $results[0];
    \assert(\is_int($result));
    return $result;
}

function copyStringToWasmMemory(Runtime $runtime, int $dst, string $src): void
{
    $mem = $runtime->getExportedMemory('memory');
    \assert($mem !== null);
    for ($i = 0; $i < \strlen($src); $i++) {
        $ok = $mem->storeByte($dst + $i, \ord($src[$i]));
        \assert($ok);
    }
    // Terminate the string with a null byte for interoperation with C.
    $ok = $mem->storeByte($dst + \strlen($src), 0);
    \assert($ok);
}

function makeHostFunc(string $typeDef, callable $fn): FuncInst
{
    $stringToType = fn (string $s) => match ($s) {
        'i32' => ValType::NumType(NumType::I32),
        'i64' => ValType::NumType(NumType::I64),
        'f32' => ValType::NumType(NumType::F32),
        'f64' => ValType::NumType(NumType::F64),
        default => throw new \RuntimeException('Invalid type: ' . $s),
    };
    preg_match('/^\(([^)]*)\) -> \(([^)]*)\)$/', $typeDef, $matches);
    $paramsDef = $matches[1];
    $resultsDef = $matches[2];
    $params = array_map($stringToType, $paramsDef === '' ? [] : explode(', ', $paramsDef));
    $results = array_map($stringToType, $resultsDef === '' ? [] : explode(', ', $resultsDef));
    $type = new FuncType(new ResultType($params), new ResultType($results));
    return FuncInst::Host($type, $fn);
}

function getWasmTableEntry(Runtime $runtime, int $funcPtr): int
{
    static $wasmTable = null;

    if ($wasmTable === null) {
        $wasmTable = $runtime->getExportedTable('__indirect_function_table');
        \assert($wasmTable !== null);
    }

    $func = $wasmTable->elem[$funcPtr] ?? null;
    \assert($func instanceof Refs\RefFunc, "Expected RefFunc, but got " . \get_class($func));
    return $func->addr;
}

function syscallGetStr(Runtime $runtime, int $ptr): string
{
    $mem = $runtime->getExportedMemory('memory');
    \assert($mem !== null);
    $str = '';
    for ($i = $ptr; $mem->loadByte($i) !== 0; $i++) {
        $c = $mem->loadByte($i);
        \assert($c !== null);
        $str .= \chr($c);
    }
    return $str;
}

function syscallCalculateAt(Runtime $runtime, int $dirfd, string $path): string
{
    if ($path[0] === '/') {
        return $path;
    }
    if ($dirfd === -100) {
        $dir = getcwd();
        \assert($dir !== false);
    } else {
        throw new \RuntimeException("syscallCalculateAt: not implemented ($dirfd)");
    }
    if ($path === '.') {
        return $dir;
    } else {
        return $dir . '/' . $path;
    }
}

// Type: (i32, i32, i32) -> (i32)
function hostFunc__env__invoke_iii(Runtime $runtime, int $index, int $a1, int $a2): int
{
    $sp = wasm_stackSave($runtime);
    $func = getWasmTableEntry($runtime, $index);
    $runtime->stack->pushValue($a1);
    $runtime->stack->pushValue($a2);
    $runtime->invokeByFuncAddr($func);
    return $runtime->stack->popInt();
}

// Type: (i32, i32, i32, i32, i32) -> (i32)
function hostFunc__env__invoke_iiiii(Runtime $runtime, int $index, int $a1, int $a2, int $a3, int $a4): int
{
    $sp = wasm_stackSave($runtime);
    $func = getWasmTableEntry($runtime, $index);
    $runtime->stack->pushValue($a1);
    $runtime->stack->pushValue($a2);
    $runtime->stack->pushValue($a3);
    $runtime->stack->pushValue($a4);
    $runtime->invokeByFuncAddr($func);
    return $runtime->stack->popInt();
}

// Type: (i32) -> ()
function hostFunc__env__invoke_v(Runtime $runtime, int $index): void
{
    $sp = wasm_stackSave($runtime);
    $func = getWasmTableEntry($runtime, $index);
    $runtime->invokeByFuncAddr($func);
}

// Type: (i32, i32, i32, i32) -> (i32)
function hostFunc__env__invoke_iiii(Runtime $runtime, int $index, int $a1, int $a2, int $a3): int
{
    $sp = wasm_stackSave($runtime);
    $func = getWasmTableEntry($runtime, $index);
    $runtime->stack->pushValue($a1);
    $runtime->stack->pushValue($a2);
    $runtime->stack->pushValue($a3);
    $runtime->invokeByFuncAddr($func);
    return $runtime->stack->popInt();
}

// Type: (i32, i32) -> (i32)
function hostFunc__env__invoke_ii(Runtime $runtime, int $index, int $a1): int
{
    $sp = wasm_stackSave($runtime);
    $func = getWasmTableEntry($runtime, $index);
    $runtime->stack->pushValue($a1);
    $runtime->invokeByFuncAddr($func);
    return $runtime->stack->popInt();
}

// Type: () -> ()
function hostFunc__env__abort(Runtime $runtime): void
{
    throw new \RuntimeException('env::abort: not implemented');
}

// Type: (i32) -> ()
function hostFunc__env__exit(Runtime $runtime): void
{
    throw new \RuntimeException('env::exit: not implemented');
}

// Type: (i32, i32, i32, i32) -> ()
function hostFunc__env__invoke_viii(Runtime $runtime, int $index, int $a1, int $a2, int $a3): void
{
    $sp = wasm_stackSave($runtime);
    $func = getWasmTableEntry($runtime, $index);
    $runtime->stack->pushValue($a1);
    $runtime->stack->pushValue($a2);
    $runtime->stack->pushValue($a3);
    $runtime->invokeByFuncAddr($func);
}

// Type: (i32, i32, i32) -> ()
function hostFunc__env__invoke_vii(Runtime $runtime, int $index, int $a1, int $a2): void
{
    $sp = wasm_stackSave($runtime);
    $func = getWasmTableEntry($runtime, $index);
    $runtime->stack->pushValue($a1);
    $runtime->stack->pushValue($a2);
    $runtime->invokeByFuncAddr($func);
}

// Type: (i32, i32) -> ()
function hostFunc__env__invoke_vi(Runtime $runtime, int $index, int $a1): void
{
    $sp = wasm_stackSave($runtime);
    $func = getWasmTableEntry($runtime, $index);
    $runtime->stack->pushValue($a1);
    $runtime->invokeByFuncAddr($func);
}

// Type: (i32) -> (i32)
function hostFunc__env__invoke_i(Runtime $runtime, int $index): int
{
    $sp = wasm_stackSave($runtime);
    $func = getWasmTableEntry($runtime, $index);
    $runtime->invokeByFuncAddr($func);
    return $runtime->stack->popInt();
}

// Type: (i32, i32, i32, i32, i32, i32, i32) -> (i32)
function hostFunc__env__invoke_iiiiiii(Runtime $runtime, int $index, int $a1, int $a2, int $a3, int $a4, int $a5, int $a6): int
{
    $sp = wasm_stackSave($runtime);
    $func = getWasmTableEntry($runtime, $index);
    $runtime->stack->pushValue($a1);
    $runtime->stack->pushValue($a2);
    $runtime->stack->pushValue($a3);
    $runtime->stack->pushValue($a4);
    $runtime->stack->pushValue($a5);
    $runtime->stack->pushValue($a6);
    $runtime->invokeByFuncAddr($func);
    return $runtime->stack->popInt();
}

// Type: (i32, i32, i32, i32) -> ()
function hostFunc__env____assert_fail(Runtime $runtime, int $index, int $a1, int $a2, int $a3): void
{
    $sp = wasm_stackSave($runtime);
    $func = getWasmTableEntry($runtime, $index);
    $runtime->stack->pushValue($a1);
    $runtime->stack->pushValue($a2);
    $runtime->stack->pushValue($a3);
    $runtime->invokeByFuncAddr($func);
}

// Type: (i32, i32, i32, i32, i32) -> ()
function hostFunc__env__invoke_viiii(Runtime $runtime, int $index, int $a1, int $a2, int $a3, int $a4): void
{
    $sp = wasm_stackSave($runtime);
    $func = getWasmTableEntry($runtime, $index);
    $runtime->stack->pushValue($a1);
    $runtime->stack->pushValue($a2);
    $runtime->stack->pushValue($a3);
    $runtime->stack->pushValue($a4);
    $runtime->invokeByFuncAddr($func);
}

// Type: (i32, i32, i32, i32, i32, i32) -> ()
function hostFunc__env__invoke_viiiii(Runtime $runtime, int $index, int $a1, int $a2, int $a3, int $a4, int $a5): void
{
    $sp = wasm_stackSave($runtime);
    $func = getWasmTableEntry($runtime, $index);
    $runtime->stack->pushValue($a1);
    $runtime->stack->pushValue($a2);
    $runtime->stack->pushValue($a3);
    $runtime->stack->pushValue($a4);
    $runtime->stack->pushValue($a5);
    $runtime->invokeByFuncAddr($func);
}

// Type: (i32, i32, i32, i32, i32, i32) -> (i32)
function hostFunc__env__invoke_iiiiii(Runtime $runtime, int $index, int $a1, int $a2, int $a3, int $a4, int $a5): int
{
    $sp = wasm_stackSave($runtime);
    $func = getWasmTableEntry($runtime, $index);
    $runtime->stack->pushValue($a1);
    $runtime->stack->pushValue($a2);
    $runtime->stack->pushValue($a3);
    $runtime->stack->pushValue($a4);
    $runtime->stack->pushValue($a5);
    $runtime->invokeByFuncAddr($func);
    return $runtime->stack->popInt();
}

// Type: (i32, i32, i32, i32, i32, i32, i32, i32, i32, i32) -> (i32)
function hostFunc__env__invoke_iiiiiiiiii(Runtime $runtime, int $index, int $a1, int $a2, int $a3, int $a4, int $a5, int $a6, int $a7, int $a8, int $a9): int
{
    $sp = wasm_stackSave($runtime);
    $func = getWasmTableEntry($runtime, $index);
    $runtime->stack->pushValue($a1);
    $runtime->stack->pushValue($a2);
    $runtime->stack->pushValue($a3);
    $runtime->stack->pushValue($a4);
    $runtime->stack->pushValue($a5);
    $runtime->stack->pushValue($a6);
    $runtime->stack->pushValue($a7);
    $runtime->stack->pushValue($a8);
    $runtime->stack->pushValue($a9);
    $runtime->invokeByFuncAddr($func);
    return $runtime->stack->popInt();
}

// Type: (i32, i32, i32, i32) -> (i32)
function hostFunc__env__strftime(Runtime $runtime): void
{
    throw new \RuntimeException('env::strftime: not implemented');
}

// Type: (i32, i32, i32, i32) -> (i32)
function hostFunc__env__getaddrinfo(Runtime $runtime): void
{
    throw new \RuntimeException('env::getaddrinfo: not implemented');
}

// Type: (i32, i32, i32, i32, i32, i32) -> (i32)
function hostFunc__env__gethostbyname_r(Runtime $runtime): void
{
    throw new \RuntimeException('env::gethostbyname_r: not implemented');
}

// Type: () -> (i32)
function hostFunc__env__getdtablesize(Runtime $runtime): void
{
    throw new \RuntimeException('env::getdtablesize: not implemented');
}

// Type: (i32) -> (i32)
function hostFunc__env__getprotobyname(Runtime $runtime): void
{
    throw new \RuntimeException('env::getprotobyname: not implemented');
}

// Type: (i32) -> (i32)
function hostFunc__env__getprotobynumber(Runtime $runtime): void
{
    throw new \RuntimeException('env::getprotobynumber: not implemented');
}

// Type: (i32, i32, i32) -> (i32)
function hostFunc__env__strptime(Runtime $runtime): void
{
    throw new \RuntimeException('env::strptime: not implemented');
}

// Type: (i32, i32, i32, i32, i32, i32, i32) -> (i32)
function hostFunc__env__getnameinfo(Runtime $runtime): void
{
    throw new \RuntimeException('env::getnameinfo: not implemented');
}

// Type: (i32, i32, i32, i32, i32, i32, i32) -> ()
function hostFunc__env__invoke_viiiiii(Runtime $runtime, int $index, int $a1, int $a2, int $a3, int $a4, int $a5, int $a6): void
{
    $sp = wasm_stackSave($runtime);
    $func = getWasmTableEntry($runtime, $index);
    $runtime->stack->pushValue($a1);
    $runtime->stack->pushValue($a2);
    $runtime->stack->pushValue($a3);
    $runtime->stack->pushValue($a4);
    $runtime->stack->pushValue($a5);
    $runtime->stack->pushValue($a6);
    $runtime->invokeByFuncAddr($func);
}

// Type: (i32, i32, i32, f64, i32, i32) -> ()
function hostFunc__env__invoke_viidii(Runtime $runtime, int $index, int $a1, int $a2, float $a3, int $a4, int $a5): void
{
    $sp = wasm_stackSave($runtime);
    $func = getWasmTableEntry($runtime, $index);
    $runtime->stack->pushValue($a1);
    $runtime->stack->pushValue($a2);
    $runtime->stack->pushValue($a3);
    $runtime->stack->pushValue($a4);
    $runtime->stack->pushValue($a5);
    $runtime->invokeByFuncAddr($func);
}

// Type: (i32) -> (i32)
function hostFunc__env__getcontext(Runtime $runtime): void
{
    throw new \RuntimeException('env::getcontext: not implemented');
}

// Type: (i32, i32, i32, i32) -> ()
function hostFunc__env__makecontext(Runtime $runtime): void
{
    throw new \RuntimeException('env::makecontext: not implemented');
}

// Type: (i32, i32) -> (i32)
function hostFunc__env__swapcontext(Runtime $runtime): void
{
    throw new \RuntimeException('env::swapcontext: not implemented');
}

// Type: (i32, i32) -> (i32)
function hostFunc__wasi_snapshot_preview1__environ_sizes_get(Runtime $runtime): void
{
    throw new \RuntimeException('wasi_snapshot_preview1::environ_sizes_get: not implemented');
}

// Type: (i32, i32) -> (i32)
function hostFunc__wasi_snapshot_preview1__environ_get(Runtime $runtime): void
{
    throw new \RuntimeException('wasi_snapshot_preview1::environ_get: not implemented');
}

// Type: (i32, i32, i32) -> (i32)
function hostFunc__env____syscall_fcntl64(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_fcntl64: not implemented');
}

// Type: (i32, i32, i32) -> (i32)
function hostFunc__env____syscall_ioctl(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_ioctl: not implemented');
}

// Type: (i32) -> (i32)
function hostFunc__wasi_snapshot_preview1__fd_close(Runtime $runtime): void
{
    throw new \RuntimeException('wasi_snapshot_preview1::fd_close: not implemented');
}

// Type: (i32, i32, i32, i32) -> (i32)
function hostFunc__wasi_snapshot_preview1__fd_read(Runtime $runtime): void
{
    throw new \RuntimeException('wasi_snapshot_preview1::fd_read: not implemented');
}

// Type: (i32, i32, i32, i32) -> (i32)
function hostFunc__wasi_snapshot_preview1__fd_write(Runtime $runtime, int $fd, int $iov, int $iovcnt, int $pnum): int
{
    \assert($fd === 1 || $fd === 2, "fd: $fd");

    $mem = $runtime->getExportedMemory('memory');
    \assert($mem !== null);

    // struct iov {
    //   ptr: u32, pointer to the data
    //   len: u32
    // }
    $nWritten = 0;
    for ($i = 0; $i < $iovcnt; $i++) {
        $ptr = $mem->loadI32_s32($iov + $i * 8);
        \assert($ptr !== null);
        $len = $mem->loadI32_s32($iov + $i * 8 + 4);
        \assert($len !== null);
        $buf = '';
        for ($j = 0; $j < $len; $j++) {
            $c = $mem->loadByte($ptr + $j);
            \assert($c !== null);
            $buf .= \chr($c);
        }
        if ($fd === 1) {
            fputs(STDOUT, $buf);
        } else {
            fputs(STDERR, $buf);
        }
        $nWritten += $len;
    }
    $mem->storeI32_s32($pnum, $nWritten);

    return 0;
}

// Type: (i32) -> ()
function hostFunc__wasi_snapshot_preview1__proc_exit(Runtime $runtime): void
{
    throw new \RuntimeException('wasi_snapshot_preview1::proc_exit: not implemented');
}

// Type: (i32, i32, i32, i32) -> (i32)
function hostFunc__env____syscall_faccessat(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_faccessat: not implemented');
}

// Type: (i32) -> (i32)
function hostFunc__env____syscall_chdir(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_chdir: not implemented');
}

// Type: (i32, i32) -> (i32)
function hostFunc__env____syscall_chmod(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_chmod: not implemented');
}

// Type: (i32, i32, i32, i32, i32) -> (i32)
function hostFunc__env____syscall_fchownat(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_fchownat: not implemented');
}

// Type: (i32) -> (i32)
function hostFunc__env____syscall_dup(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_dup: not implemented');
}

// Type: (i32, i32, i32) -> (i32)
function hostFunc__env____syscall_dup3(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_dup3: not implemented');
}

// Type: (i32, i32, i32) -> ()
function hostFunc__env__emscripten_memcpy_js(Runtime $runtime, int $dest, int $src, int $num): void
{
    $mem = $runtime->getExportedMemory('memory');
    \assert($mem !== null);
    for ($i = 0; $i < $num; $i++) {
        $byte = $mem->loadByte($src + $i);
        \assert($byte !== null);
        $mem->storeByte($dest + $i, $byte);
    }
}

// Type: () -> (f64)
function hostFunc__env__emscripten_date_now(Runtime $runtime): void
{
    throw new \RuntimeException('env::emscripten_date_now: not implemented');
}

// Type: () -> (i32)
function hostFunc__env___emscripten_get_now_is_monotonic(Runtime $runtime): void
{
    throw new \RuntimeException('env::_emscripten_get_now_is_monotonic: not implemented');
}

// Type: () -> (f64)
function hostFunc__env__emscripten_get_now(Runtime $runtime): void
{
    throw new \RuntimeException('env::emscripten_get_now: not implemented');
}

// Type: (i32) -> (i32)
function hostFunc__env____syscall_fdatasync(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_fdatasync: not implemented');
}

// Type: (i32, i32, i32, i32) -> (i32)
function hostFunc__env____syscall_openat(Runtime $runtime, int $dirfd, int $path, int $flags, int $varargs): int
{
    $path = syscallGetStr($runtime, $path);
    $path = syscallCalculateAt($runtime, $dirfd, $path);

    $mem = $runtime->getExportedMemory('memory');
    \assert($mem !== null);

    if ($varargs !== 0) {
        $mode = $mem->loadI32_s32($varargs);
        $varargs += 4;
    } else {
        $mode = 0;
    }

    // no such file
    return -44;
}

// Type: (i32, i32) -> (i32)
function hostFunc__env____syscall_fstat64(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_fstat64: not implemented');
}

// Type: (i32, i32) -> (i32)
function hostFunc__env____syscall_stat64(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_stat64: not implemented');
}

// Type: (i32, i32, i32, i32) -> (i32)
function hostFunc__env____syscall_newfstatat(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_newfstatat: not implemented');
}

// Type: (i32, i32) -> (i32)
function hostFunc__env____syscall_lstat64(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_lstat64: not implemented');
}

// Type: (i32) -> (i32)
function hostFunc__wasi_snapshot_preview1__fd_sync(Runtime $runtime): void
{
    throw new \RuntimeException('wasi_snapshot_preview1::fd_sync: not implemented');
}

// Type: (i32, i32) -> (i32)
function hostFunc__env____syscall_getcwd(Runtime $runtime, int $bufPtr, int $size): int
{
    if ($size === 0) {
        return -28;
    }
    $cwd = getcwd();
    \assert($cwd !== false);
    $cwdLen = \strlen($cwd) + 1;
    if ($size < $cwdLen) {
        return -68;
    }
    copyStringToWasmMemory($runtime, $bufPtr, $cwd);
    return $cwdLen;
}

// Type: (i32) -> ()
function hostFunc__env__emscripten_err(Runtime $runtime): void
{
    throw new \RuntimeException('env::emscripten_err: not implemented');
}

// Type: (i32, i32) -> (i32)
function hostFunc__wasi_snapshot_preview1__fd_fdstat_get(Runtime $runtime): void
{
    throw new \RuntimeException('wasi_snapshot_preview1::fd_fdstat_get: not implemented');
}

// Type: (i32, i32, i32) -> (i32)
function hostFunc__env____syscall_mkdirat(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_mkdirat: not implemented');
}

// Type: (i32) -> (i32)
function hostFunc__env____syscall_pipe(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_pipe: not implemented');
}

// Type: (i32, i32, i32) -> (i32)
function hostFunc__env____syscall_poll(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_poll: not implemented');
}

// Type: (i32, i32) -> ()
function hostFunc__env____call_sighandler(Runtime $runtime): void
{
    throw new \RuntimeException('env::__call_sighandler: not implemented');
}

// Type: (i32, i32, i32) -> (i32)
function hostFunc__env____syscall_getdents64(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_getdents64: not implemented');
}

// Type: (i32, i32, i32, i32) -> (i32)
function hostFunc__env____syscall_readlinkat(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_readlinkat: not implemented');
}

// Type: (i32, i32, i32, i32) -> (i32)
function hostFunc__env____syscall_renameat(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_renameat: not implemented');
}

// Type: (i32) -> (i32)
function hostFunc__env____syscall_rmdir(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_rmdir: not implemented');
}

// Type: (i32, i32, i32, i32, i32) -> (i32)
function hostFunc__env____syscall__newselect(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall__newselect: not implemented');
}

// Type: (i32, f64) -> (i32)
function hostFunc__env___setitimer_js(Runtime $runtime): void
{
    throw new \RuntimeException('env::_setitimer_js: not implemented');
}

// Type: (i32, i32, i32) -> (i32)
function hostFunc__env____syscall_statfs64(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_statfs64: not implemented');
}

// Type: (i32, i32) -> (i32)
function hostFunc__env____syscall_symlink(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_symlink: not implemented');
}

// Type: () -> (i32)
function hostFunc__env__emscripten_get_heap_max(Runtime $runtime): void
{
    throw new \RuntimeException('env::emscripten_get_heap_max: not implemented');
}

// Type: (i32, i32, i32) -> ()
function hostFunc__env___tzset_js(Runtime $runtime): void
{
    // Do nothing ;)
}

// Type: (i32, i32, i32) -> (i32)
function hostFunc__env____syscall_unlinkat(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_unlinkat: not implemented');
}

// Type: (i32, i32, i32, i32) -> (i32)
function hostFunc__env____syscall_utimensat(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_utimensat: not implemented');
}

// Type: (i32) -> (i32)
function hostFunc__env__emscripten_resize_heap(Runtime $runtime): void
{
    throw new \RuntimeException('env::emscripten_resize_heap: not implemented');
}

// Type: () -> ()
function hostFunc__env___emscripten_throw_longjmp(Runtime $runtime): void
{
    throw new \RuntimeException('env::_emscripten_throw_longjmp: not implemented');
}

// Type: (i32, i32, i32, i32, i32, i32) -> (i32)
function hostFunc__env____syscall_accept4(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_accept4: not implemented');
}

// Type: (i32, i32, i32, i32, i32, i32) -> (i32)
function hostFunc__env____syscall_bind(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_bind: not implemented');
}

// Type: (i32, i32, i32, i32, i32, i32) -> (i32)
function hostFunc__env____syscall_connect(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_connect: not implemented');
}

// Type: (i32, i32, i32, i32, i32, i32) -> (i32)
function hostFunc__env____syscall_getpeername(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_getpeername: not implemented');
}

// Type: (i32, i32, i32, i32, i32, i32) -> (i32)
function hostFunc__env____syscall_getsockname(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_getsockname: not implemented');
}

// Type: (i32, i32, i32, i32, i32, i32) -> (i32)
function hostFunc__env____syscall_getsockopt(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_getsockopt: not implemented');
}

// Type: (i32, i32, i32, i32, i32, i32) -> (i32)
function hostFunc__env____syscall_listen(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_listen: not implemented');
}

// Type: (i32, i32, i32, i32, i32, i32) -> (i32)
function hostFunc__env____syscall_recvfrom(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_recvfrom: not implemented');
}

// Type: (i32, i32, i32, i32, i32, i32) -> (i32)
function hostFunc__env____syscall_sendto(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_sendto: not implemented');
}

// Type: (i32, i32, i32, i32, i32, i32) -> (i32)
function hostFunc__env____syscall_socket(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_socket: not implemented');
}

// Type: (i32, i32, i32) -> (i32)
function hostFunc__env____syscall_ftruncate64(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_ftruncate64: not implemented');
}

// Type: (i32, i32, i32, i32, i32) -> (i32)
function hostFunc__wasi_snapshot_preview1__fd_seek(Runtime $runtime): void
{
    throw new \RuntimeException('wasi_snapshot_preview1::fd_seek: not implemented');
}

// Type: (i32) -> (i32)
function hostFunc__env___mktime_js(Runtime $runtime): void
{
    throw new \RuntimeException('env::_mktime_js: not implemented');
}

// Type: (i32, i32, i32) -> ()
function hostFunc__env___localtime_js(Runtime $runtime): void
{
    throw new \RuntimeException('env::_localtime_js: not implemented');
}

// Type: (i32, i32, i32) -> ()
function hostFunc__env___gmtime_js(Runtime $runtime): void
{
    throw new \RuntimeException('env::_gmtime_js: not implemented');
}

// Type: (i32, i32, i32, i32, i32, i32, i32) -> (i32)
function hostFunc__env___munmap_js(Runtime $runtime): void
{
    throw new \RuntimeException('env::_munmap_js: not implemented');
}

// Type: (i32, i32, i32, i32, i32, i32, i32, i32) -> (i32)
function hostFunc__env___mmap_js(Runtime $runtime): void
{
    throw new \RuntimeException('env::_mmap_js: not implemented');
}
