<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use Nsfisis\Waddiwasi\BinaryFormat\Decoder;
use Nsfisis\Waddiwasi\BinaryFormat\InvalidBinaryFormatException;
use Nsfisis\Waddiwasi\Execution\Extern;
use Nsfisis\Waddiwasi\Execution\Externs;
use Nsfisis\Waddiwasi\Execution\FuncInst;
use Nsfisis\Waddiwasi\Execution\MemInst;
use Nsfisis\Waddiwasi\Execution\Refs;
use Nsfisis\Waddiwasi\Execution\Runtime;
use Nsfisis\Waddiwasi\Execution\Store;
use Nsfisis\Waddiwasi\Structure\Types\FuncType;
use Nsfisis\Waddiwasi\Structure\Types\NumType;
use Nsfisis\Waddiwasi\Structure\Types\ResultType;
use Nsfisis\Waddiwasi\Structure\Types\ValType;

const PHP_EMPTY = '';

const PHP_HELLO_WORLD = <<<'EOS'
require_once '%DIR%/HelloWorld.php';
EOS;

$wasmBinary = file_get_contents(__DIR__ . '/php-wasm.wasm');
\assert($wasmBinary !== false);

try {
    $module = (new Decoder($wasmBinary))->decode();
} catch (InvalidBinaryFormatException $e) {
    fprintf(STDERR, $e->getMessage() . "\n");
    exit(1);
}

$imports = [
    'env' => [
        'invoke_iii' => makeHostFunc('(i32, i32, i32) -> (i32)', hostFunc__env__invoke_iii(...)),
        'invoke_iiiii' => makeHostFunc('(i32, i32, i32, i32, i32) -> (i32)', hostFunc__env__invoke_iiiii(...)),
        'invoke_v' => makeHostFunc('(i32) -> ()', hostFunc__env__invoke_v(...)),
        'invoke_ii' => makeHostFunc('(i32, i32) -> (i32)', hostFunc__env__invoke_ii(...)),
        'abort' => makeHostFunc('() -> ()', hostFunc__env__abort(...)),
        'exit' => makeHostFunc('(i32) -> ()', hostFunc__env__exit(...)),
        'invoke_viii' => makeHostFunc('(i32, i32, i32, i32) -> ()', hostFunc__env__invoke_viii(...)),
        'invoke_vii' => makeHostFunc('(i32, i32, i32) -> ()', hostFunc__env__invoke_vii(...)),
        'invoke_vi' => makeHostFunc('(i32, i32) -> ()', hostFunc__env__invoke_vi(...)),
        'invoke_i' => makeHostFunc('(i32) -> (i32)', hostFunc__env__invoke_i(...)),
        'invoke_iiiiiii' => makeHostFunc('(i32, i32, i32, i32, i32, i32, i32) -> (i32)', hostFunc__env__invoke_iiiiiii(...)),
        'invoke_iiii' => makeHostFunc('(i32, i32, i32, i32) -> (i32)', hostFunc__env__invoke_iiii(...)),
        '__assert_fail' => makeHostFunc('(i32, i32, i32, i32) -> ()', hostFunc__env____assert_fail(...)),
        'invoke_viiii' => makeHostFunc('(i32, i32, i32, i32, i32) -> ()', hostFunc__env__invoke_viiii(...)),
        'invoke_viiiii' => makeHostFunc('(i32, i32, i32, i32, i32, i32) -> ()', hostFunc__env__invoke_viiiii(...)),
        'invoke_iiiiii' => makeHostFunc('(i32, i32, i32, i32, i32, i32) -> (i32)', hostFunc__env__invoke_iiiiii(...)),
        'invoke_iiiiiiiiii' => makeHostFunc('(i32, i32, i32, i32, i32, i32, i32, i32, i32, i32) -> (i32)', hostFunc__env__invoke_iiiiiiiiii(...)),
        'strftime' => makeHostFunc('(i32, i32, i32, i32) -> (i32)', hostFunc__env__strftime(...)),
        'getaddrinfo' => makeHostFunc('(i32, i32, i32, i32) -> (i32)', hostFunc__env__getaddrinfo(...)),
        'gethostbyname_r' => makeHostFunc('(i32, i32, i32, i32, i32, i32) -> (i32)', hostFunc__env__gethostbyname_r(...)),
        'getdtablesize' => makeHostFunc('() -> (i32)', hostFunc__env__getdtablesize(...)),
        'getprotobyname' => makeHostFunc('(i32) -> (i32)', hostFunc__env__getprotobyname(...)),
        'getprotobynumber' => makeHostFunc('(i32) -> (i32)', hostFunc__env__getprotobynumber(...)),
        'strptime' => makeHostFunc('(i32, i32, i32) -> (i32)', hostFunc__env__strptime(...)),
        'getnameinfo' => makeHostFunc('(i32, i32, i32, i32, i32, i32, i32) -> (i32)', hostFunc__env__getnameinfo(...)),
        'invoke_viiiiii' => makeHostFunc('(i32, i32, i32, i32, i32, i32, i32) -> ()', hostFunc__env__invoke_viiiiii(...)),
        'invoke_viidii' => makeHostFunc('(i32, i32, i32, f64, i32, i32) -> ()', hostFunc__env__invoke_viidii(...)),
        'getcontext' => makeHostFunc('(i32) -> (i32)', hostFunc__env__getcontext(...)),
        'makecontext' => makeHostFunc('(i32, i32, i32, i32) -> ()', hostFunc__env__makecontext(...)),
        'swapcontext' => makeHostFunc('(i32, i32) -> (i32)', hostFunc__env__swapcontext(...)),
        '__syscall_fcntl64' => makeHostFunc('(i32, i32, i32) -> (i32)', hostFunc__env____syscall_fcntl64(...)),
        '__syscall_ioctl' => makeHostFunc('(i32, i32, i32) -> (i32)', hostFunc__env____syscall_ioctl(...)),
        '__syscall_faccessat' => makeHostFunc('(i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall_faccessat(...)),
        '__syscall_chdir' => makeHostFunc('(i32) -> (i32)', hostFunc__env____syscall_chdir(...)),
        '__syscall_chmod' => makeHostFunc('(i32, i32) -> (i32)', hostFunc__env____syscall_chmod(...)),
        '__syscall_fchownat' => makeHostFunc('(i32, i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall_fchownat(...)),
        '__syscall_dup' => makeHostFunc('(i32) -> (i32)', hostFunc__env____syscall_dup(...)),
        '__syscall_dup3' => makeHostFunc('(i32, i32, i32) -> (i32)', hostFunc__env____syscall_dup3(...)),
        'emscripten_memcpy_js' => makeHostFunc('(i32, i32, i32) -> ()', hostFunc__env__emscripten_memcpy_js(...)),
        'emscripten_date_now' => makeHostFunc('() -> (f64)', hostFunc__env__emscripten_date_now(...)),
        '_emscripten_get_now_is_monotonic' => makeHostFunc('() -> (i32)', hostFunc__env___emscripten_get_now_is_monotonic(...)),
        'emscripten_get_now' => makeHostFunc('() -> (f64)', hostFunc__env__emscripten_get_now(...)),
        '__syscall_fdatasync' => makeHostFunc('(i32) -> (i32)', hostFunc__env____syscall_fdatasync(...)),
        '__syscall_openat' => makeHostFunc('(i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall_openat(...)),
        '__syscall_fstat64' => makeHostFunc('(i32, i32) -> (i32)', hostFunc__env____syscall_fstat64(...)),
        '__syscall_stat64' => makeHostFunc('(i32, i32) -> (i32)', hostFunc__env____syscall_stat64(...)),
        '__syscall_newfstatat' => makeHostFunc('(i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall_newfstatat(...)),
        '__syscall_lstat64' => makeHostFunc('(i32, i32) -> (i32)', hostFunc__env____syscall_lstat64(...)),
        '__syscall_getcwd' => makeHostFunc('(i32, i32) -> (i32)', hostFunc__env____syscall_getcwd(...)),
        'emscripten_err' => makeHostFunc('(i32) -> ()', hostFunc__env__emscripten_err(...)),
        '__syscall_mkdirat' => makeHostFunc('(i32, i32, i32) -> (i32)', hostFunc__env____syscall_mkdirat(...)),
        '__syscall_pipe' => makeHostFunc('(i32) -> (i32)', hostFunc__env____syscall_pipe(...)),
        '__syscall_poll' => makeHostFunc('(i32, i32, i32) -> (i32)', hostFunc__env____syscall_poll(...)),
        '__call_sighandler' => makeHostFunc('(i32, i32) -> ()', hostFunc__env____call_sighandler(...)),
        '__syscall_getdents64' => makeHostFunc('(i32, i32, i32) -> (i32)', hostFunc__env____syscall_getdents64(...)),
        '__syscall_readlinkat' => makeHostFunc('(i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall_readlinkat(...)),
        '__syscall_renameat' => makeHostFunc('(i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall_renameat(...)),
        '__syscall_rmdir' => makeHostFunc('(i32) -> (i32)', hostFunc__env____syscall_rmdir(...)),
        '__syscall__newselect' => makeHostFunc('(i32, i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall__newselect(...)),
        '_setitimer_js' => makeHostFunc('(i32, f64) -> (i32)', hostFunc__env___setitimer_js(...)),
        '__syscall_statfs64' => makeHostFunc('(i32, i32, i32) -> (i32)', hostFunc__env____syscall_statfs64(...)),
        '__syscall_symlink' => makeHostFunc('(i32, i32) -> (i32)', hostFunc__env____syscall_symlink(...)),
        'emscripten_get_heap_max' => makeHostFunc('() -> (i32)', hostFunc__env__emscripten_get_heap_max(...)),
        '_tzset_js' => makeHostFunc('(i32, i32, i32) -> ()', hostFunc__env___tzset_js(...)),
        '__syscall_unlinkat' => makeHostFunc('(i32, i32, i32) -> (i32)', hostFunc__env____syscall_unlinkat(...)),
        '__syscall_utimensat' => makeHostFunc('(i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall_utimensat(...)),
        'emscripten_resize_heap' => makeHostFunc('(i32) -> (i32)', hostFunc__env__emscripten_resize_heap(...)),
        '_emscripten_throw_longjmp' => makeHostFunc('() -> ()', hostFunc__env___emscripten_throw_longjmp(...)),
        '__syscall_accept4' => makeHostFunc('(i32, i32, i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall_accept4(...)),
        '__syscall_bind' => makeHostFunc('(i32, i32, i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall_bind(...)),
        '__syscall_connect' => makeHostFunc('(i32, i32, i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall_connect(...)),
        '__syscall_getpeername' => makeHostFunc('(i32, i32, i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall_getpeername(...)),
        '__syscall_getsockname' => makeHostFunc('(i32, i32, i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall_getsockname(...)),
        '__syscall_getsockopt' => makeHostFunc('(i32, i32, i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall_getsockopt(...)),
        '__syscall_listen' => makeHostFunc('(i32, i32, i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall_listen(...)),
        '__syscall_recvfrom' => makeHostFunc('(i32, i32, i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall_recvfrom(...)),
        '__syscall_sendto' => makeHostFunc('(i32, i32, i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall_sendto(...)),
        '__syscall_socket' => makeHostFunc('(i32, i32, i32, i32, i32, i32) -> (i32)', hostFunc__env____syscall_socket(...)),
        '__syscall_ftruncate64' => makeHostFunc('(i32, i32, i32) -> (i32)', hostFunc__env____syscall_ftruncate64(...)),
        '_mktime_js' => makeHostFunc('(i32) -> (i32)', hostFunc__env___mktime_js(...)),
        '_localtime_js' => makeHostFunc('(i32, i32, i32) -> ()', hostFunc__env___localtime_js(...)),
        '_gmtime_js' => makeHostFunc('(i32, i32, i32) -> ()', hostFunc__env___gmtime_js(...)),
        '_munmap_js' => makeHostFunc('(i32, i32, i32, i32, i32, i32, i32) -> (i32)', hostFunc__env___munmap_js(...)),
        '_mmap_js' => makeHostFunc('(i32, i32, i32, i32, i32, i32, i32, i32) -> (i32)', hostFunc__env___mmap_js(...)),
    ],
    'wasi_snapshot_preview1' => [
        'environ_sizes_get' => makeHostFunc('(i32, i32) -> (i32)', hostFunc__wasi_snapshot_preview1__environ_sizes_get(...)),
        'environ_get' => makeHostFunc('(i32, i32) -> (i32)', hostFunc__wasi_snapshot_preview1__environ_get(...)),
        'fd_close' => makeHostFunc('(i32) -> (i32)', hostFunc__wasi_snapshot_preview1__fd_close(...)),
        'fd_read' => makeHostFunc('(i32, i32, i32, i32) -> (i32)', hostFunc__wasi_snapshot_preview1__fd_read(...)),
        'fd_write' => makeHostFunc('(i32, i32, i32, i32) -> (i32)', hostFunc__wasi_snapshot_preview1__fd_write(...)),
        'proc_exit' => makeHostFunc('(i32) -> ()', hostFunc__wasi_snapshot_preview1__proc_exit(...)),
        'fd_sync' => makeHostFunc('(i32) -> (i32)', hostFunc__wasi_snapshot_preview1__fd_sync(...)),
        'fd_fdstat_get' => makeHostFunc('(i32, i32) -> (i32)', hostFunc__wasi_snapshot_preview1__fd_fdstat_get(...)),
        'fd_seek' => makeHostFunc('(i32, i32, i32, i32, i32) -> (i32)', hostFunc__wasi_snapshot_preview1__fd_seek(...)),
    ],
];

$runtime = Runtime::instantiate(Store::empty(), $module, $imports);
$codePtr = allocateStringOnWasmMemory($runtime, strtr(PHP_HELLO_WORLD, ['%DIR%' => __DIR__]));

$results = $runtime->invoke("php_wasm_run", [$codePtr]);
\assert(\count($results) === 1);
$exitCode = $results[0];
\assert(\is_int($exitCode));

function dumpMemory(MemInst $mem): void
{
    $buf = '';
    $s = $mem->size();
    for ($j = 0; $j < $s; $j++) {
        $c = $mem->loadByte($j);
        \assert($c !== null);
        $buf .= \chr($c);
        if ($j % 1024 === 1023) {
            fputs(STDOUT, $buf);
            $buf = "";
        }
    }
    fputs(STDOUT, $buf);
}

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

function makeHostFunc(string $typeDef, callable $fn): Externs\Func
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
    return Extern::Func(FuncInst::Host($type, $fn));
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

function stringToUTF8(Runtime $runtime, string $s, int $ptr, $len): void
{
    $mem = $runtime->getExportedMemory('memory');
    \assert($mem !== null);
    for ($i = 0; $i < $len; $i++) {
        if ($i < \strlen($s)) {
            $mem->storeByte($ptr + $i, \ord($s[$i]));
        } else {
            $mem->storeByte($ptr + $i, 0);
        }
    }
}

function heap8Write(Runtime $runtime, int $ptr, int $value): void
{
    $mem = $runtime->getExportedMemory('memory');
    \assert($mem !== null);
    $mem->storeI32_s8($ptr, $value);
}

function heap16Write(Runtime $runtime, int $ptr, int $value): void
{
    $mem = $runtime->getExportedMemory('memory');
    \assert($mem !== null);
    $mem->storeI32_s16($ptr, $value);
}

function heap32Write(Runtime $runtime, int $ptr, int $value): void
{
    $mem = $runtime->getExportedMemory('memory');
    \assert($mem !== null);
    $mem->storeI32_s32($ptr, $value);
}

function heapU32Write(Runtime $runtime, int $ptr, int $value): void
{
    $mem = $runtime->getExportedMemory('memory');
    \assert($mem !== null);
    $mem->storeI32_s32($ptr, $value);
}

function heap64Write(Runtime $runtime, int $ptr, int $value): void
{
    $mem = $runtime->getExportedMemory('memory');
    \assert($mem !== null);
    $mem->storeI64_s64($ptr, $value);
}

function syscallDoStat(Runtime $runtime, callable $func, string $path, int $buf): void
{
    $stat = $func($path);

    heap32Write($runtime, $buf, $stat->dev);
    heap32Write($runtime, $buf + 4, $stat->mode);
    heapU32Write($runtime, $buf + 8, $stat->nlink);
    heap32Write($runtime, $buf + 12, $stat->uid);
    heap32Write($runtime, $buf + 16, $stat->gid);
    heap32Write($runtime, $buf + 20, $stat->rdev);
    heap64Write($runtime, $buf + 24, $stat->size);
    heap32Write($runtime, $buf + 32, 4096);
    heap32Write($runtime, $buf + 36, $stat->blocks);
    $atime = $stat->atime;
    heap64Write($runtime, $buf + 40, $atime);
    heapU32Write($runtime, $buf + 48, ($atime % 1000) * 1000);
    $mtime = $stat->mtime;
    heap64Write($runtime, $buf + 56, $mtime);
    heapU32Write($runtime, $buf + 64, ($mtime % 1000) * 1000);
    $ctime = $stat->ctime;
    heap64Write($runtime, $buf + 72, $ctime);
    heapU32Write($runtime, $buf + 80, ($ctime % 1000) * 1000);
    heap64Write($runtime, $buf + 88, $stat->ino);
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

function fsStat(string $path, bool $dontFollow): object
{
    if ($path === 'php://stdin') {
        return (object)[
            'dev' => 0,
            'mode' => 0,
            'nlink' => 0,
            'uid' => 0,
            'gid' => 0,
            'rdev' => 0,
            'size' => 0,
            'blocks' => 0,
            'ino' => 0,
            'atime' => 0,
            'mtime' => 0,
            'ctime' => 0,
        ];
    } elseif ($path === 'php://stdout') {
        return (object)[
            'dev' => 0,
            'mode' => 0,
            'nlink' => 0,
            'uid' => 0,
            'gid' => 0,
            'rdev' => 0,
            'size' => 0,
            'blocks' => 0,
            'ino' => 1,
            'atime' => 0,
            'mtime' => 0,
            'ctime' => 0,
        ];
    } elseif ($path === 'php://stderr') {
        return (object)[
            'dev' => 0,
            'mode' => 0,
            'nlink' => 0,
            'uid' => 0,
            'gid' => 0,
            'rdev' => 0,
            'size' => 0,
            'blocks' => 0,
            'ino' => 2,
            'atime' => 0,
            'mtime' => 0,
            'ctime' => 0,
        ];
    }

    $phpStat = $dontFollow ? lstat($path) : stat($path);
    \assert($phpStat !== false);
    return (object)[
        'dev' => $phpStat['dev'],
        'mode' => $phpStat['mode'],
        'nlink' => $phpStat['nlink'],
        'uid' => $phpStat['uid'],
        'gid' => $phpStat['gid'],
        'rdev' => $phpStat['rdev'],
        'size' => $phpStat['size'],
        'blocks' => $phpStat['blocks'],
        'ino' => $phpStat['ino'],
        'atime' => $phpStat['atime'] * 1000,
        'mtime' => $phpStat['mtime'] * 1000,
        'ctime' => $phpStat['ctime'] * 1000,
    ];
}

function fsLstat(string $path): object
{
    return fsStat($path, true);
}

final class VFile
{
    public ?array $getdents = null;

    /**
     * @param resource $fp
     */
    public function __construct(
        public readonly int $fd,
        public readonly mixed $fp,
        public readonly int $flags,
        public readonly string $path,
    ) {
    }

    public function seek(int $offset, int $whence): int
    {
        if ($whence === 0) {
            fseek($this->fp, $offset, SEEK_SET);
        } elseif ($whence === 1) {
            fseek($this->fp, $offset, SEEK_CUR);
        } elseif ($whence === 2) {
            fseek($this->fp, $offset, SEEK_END);
        } else {
            throw new \RuntimeException("VFile::seek: invalid whence");
        }
        $pos = ftell($this->fp);
        return $pos === false ? 0 : $pos;
    }

    public function read(Runtime $runtime, int $len): string
    {
        return fread($this->fp, $len);
    }

    public function close(): void
    {
        fclose($this->fp);
    }
}

function fsOpen(string $path, int $flags, int $mode): ?int
{
    global $fdTable;
    if (!isset($fdTable)) {
        $fdTable = [];
    }
    $fp = @fopen($path, 'r');
    if ($fp === false) {
        return null;
    }
    $nextFd = \count($fdTable) + 10;
    $fdTable[$nextFd] = new VFile(
        $nextFd,
        $fp,
        $flags,
        $path,
    );
    return $nextFd;
}

function fsDup(int $fd): ?int
{
    global $fdTable;
    if (!isset($fdTable)) {
        return null;
    }
    $nextFd = \count($fdTable) + 10;
    if ($fd === 0) {
        $fp = fopen('php://stdin', 'r');
        $fdTable[$nextFd] = new VFile(
            $nextFd,
            $fp,
            0,
            'php://stdin',
        );
    } elseif ($fd === 1) {
        $fp = fopen('php://stdout', 'w');
        $fdTable[$nextFd] = new VFile(
            $nextFd,
            $fp,
            0,
            'php://stdout',
        );
    } elseif ($fd === 2) {
        $fp = fopen('php://stderr', 'w');
        $fdTable[$nextFd] = new VFile(
            $nextFd,
            $fp,
            0,
            'php://stderr',
        );
    } else {
        $file = $fdTable[$fd];
        $fp = $file->fp;
        $fdTable[$nextFd] = new VFile(
            $nextFd,
            $fp,
            $file->flags,
            $file->path,
        );
    }
    return $nextFd;
}

function fsGetVFileFromFd(int $fd): ?VFile
{
    global $fdTable;
    return $fdTable[$fd] ?? null;
}

function fsGetPathFromFd(int $fd): ?string
{
    return fsGetVFileFromFd($fd)?->path;
}

function fsGetFpFromFd(int $fd): mixed
{
    return fsGetVFileFromFd($fd)?->fp;
}

function fsGetFlagsFromFd(int $fd): ?int
{
    return fsGetVFileFromFd($fd)?->flags;
}

function fsReaddir(string $p): array
{
    $dir = opendir($p);
    $entries = [];
    while (($entry = readdir($dir)) !== false) {
        $entries[] = $entry;
    }
    closedir($dir);
    return $entries;
}

function fsLookupParentPath(string $p): string
{
    return realpath($p . '/..');
}

function fsLookupChild(string $p, string $c): string
{
    return realpath($p . '/' . $c);
}

function alignMemory(int $size, int $alignment): int
{
    return (int)ceil($size / $alignment) * $alignment;
}

function _emscripten_builtin_memalign(Runtime $runtime, int $alignment, int $size): int
{
    $results = $runtime->invoke("emscripten_builtin_memalign", [$alignment, $size]);
    \assert(\count($results) === 1);
    $result = $results[0];
    \assert(\is_int($result));
    return $result;
}

function zeroMemory(Runtime $runtime, int $ptr, int $len): int
{
    $mem = $runtime->getExportedMemory('memory');
    \assert($mem !== null);
    for ($i = 0; $i < $len; $i++) {
        $mem->storeByte($ptr + $i, 0);
    }
    return $ptr;
}

function mmapAlloc(Runtime $runtime, int $len): int
{
    $len = alignMemory($len, 65536);
    $ptr = _emscripten_builtin_memalign($runtime, 65536, $len);
    if ($ptr === 0) {
        return 0;
    }
    return zeroMemory($runtime, $ptr, $len);
}

function fsMmap(Runtime $runtime, int $fd, int $len, int $offset, int $prot, int $flags): array
{
    global $fdTable;
    if (!isset($fdTable[$fd])) {
        throw new \RuntimeException("fsMmap: invalid fd");
    }
    $file = $fdTable[$fd];

    $buf = stream_get_contents($file->fp);

    $ptr = mmapAlloc($runtime, $len);
    $mem = $runtime->getExportedMemory('memory');
    \assert($mem !== null);
    for ($i = 0; $i < $len; $i++) {
        $mem->storeByte($ptr + $i, \ord($buf[$i]));
    }

    return [$ptr, 1];
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
function hostFunc__env____syscall_fcntl64(Runtime $runtime, int $fd, int $cmd, int $varargs): int
{
    switch ($cmd) {
        case 0:
            throw new \RuntimeException("env::__syscall_fcntl64: command $cmd not implemented");
        case 1:
        case 2:
            return 0;
        case 3:
            return fsGetFlagsFromFd($fd);
        case 4:
            throw new \RuntimeException("env::__syscall_fcntl64: command $cmd not implemented");
        case 5:
            throw new \RuntimeException("env::__syscall_fcntl64: command $cmd not implemented");
        case 6:
        case 7:
            return 0;
        case 16:
        case 8:
            return -28;
        case 9:
            // setErrno(28);
            return -1;
        default:
            return -28;
    }
}

// Type: (i32, i32, i32) -> (i32)
function hostFunc__env____syscall_ioctl(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_ioctl: not implemented');
}

// Type: (i32) -> (i32)
function hostFunc__wasi_snapshot_preview1__fd_close(Runtime $runtime, int $fd): int
{
    $file = fsGetVFileFromFd($fd);
    \assert($file !== null);
    $file->close();
    return 0;
}

// Type: (i32, i32, i32, i32) -> (i32)
function hostFunc__wasi_snapshot_preview1__fd_read(Runtime $runtime, int $fd, int $iov, int $iovcnt, int $pnum): int
{
    $file = fsGetVFileFromFd($fd);
    \assert($file !== null);

    // struct iov {
    //   ptr: u32, pointer to the data
    //   len: u32
    // }
    $mem = $runtime->getExportedMemory('memory');
    \assert($mem !== null);

    $nRead = 0;
    for ($i = 0; $i < $iovcnt; $i++) {
        $ptr = $mem->loadI32_s32($iov + $i * 8);
        \assert($ptr !== null);
        $len = $mem->loadI32_s32($iov + $i * 8 + 4);
        \assert($len !== null);
        $buf = $file->read($runtime, $len);
        if ($buf === false) {
            $nRead = -1;
            break;
        }
        $curr = \strlen($buf);
        if ($curr <= 0) {
            $nRead = -1;
            break;
        }
        // echo "fd_read(fd=$fd, iov=$iov, iovcnt=$iovcnt, pnum=$pnum) = { p=$ptr, l=$len }\n";
        for ($k = 0; $k < $curr; $k++) {
            $mem->storeByte($ptr + $k, \ord($buf[$k]));
            // echo "  [$k] = ord($buf[$k])\n";
        }
        $nRead += $curr;
        if ($curr < $len) {
            break;
        }
    }

    $mem->storeI32_s32($pnum, $nRead);

    return 0;
}

// Type: (i32, i32, i32, i32) -> (i32)
function hostFunc__wasi_snapshot_preview1__fd_write(Runtime $runtime, int $fd, int $iov, int $iovcnt, int $pnum): int
{
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
        // echo "fd_write($iovcnt, $iov) [$i] = { p=$ptr, l=$len };\n";
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
function hostFunc__env____syscall_faccessat(Runtime $runtime, int $dirfd, int $path, int $amode, int $flags): int
{
    $path = syscallGetStr($runtime, $path);
    $path = syscallCalculateAt($runtime, $dirfd, $path);

    // Always allow accesses.
    return 0;
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
function hostFunc__env____syscall_dup(Runtime $runtime, int $oldFd): int
{
    return fsDup($oldFd);
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
function hostFunc__env__emscripten_date_now(Runtime $runtime): float
{
    return round(microtime(true) * 1000);
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

    $fd = fsOpen($path, $flags, $mode);
    if ($fd !== null) {
        return $fd;
    } else {
        // no such file
        return -44;
    }
}

// Type: (i32, i32) -> (i32)
function hostFunc__env____syscall_fstat64(Runtime $runtime, int $fd, int $buf): int
{
    $path = fsGetPathFromFd($fd);
    \assert($path !== null);
    syscallDoStat($runtime, fn ($path) => fsStat($path, false), $path, $buf);
    return 0;
}

// Type: (i32, i32) -> (i32)
function hostFunc__env____syscall_stat64(Runtime $runtime, int $path, int $buf): int
{
    $path = syscallGetStr($runtime, $path);
    syscallDoStat($runtime, fn ($path) => fsStat($path, false), $path, $buf);
    return 0;
}

// Type: (i32, i32, i32, i32) -> (i32)
function hostFunc__env____syscall_newfstatat(Runtime $runtime): void
{
    throw new \RuntimeException('env::__syscall_newfstatat: not implemented');
}

// Type: (i32, i32) -> (i32)
function hostFunc__env____syscall_lstat64(Runtime $runtime, int $path, int $buf): int
{
    $path = syscallGetStr($runtime, $path);
    syscallDoStat($runtime, fsLstat(...), $path, $buf);
    return 0;
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
function hostFunc__env____syscall_getdents64(Runtime $runtime, int $fd, int $dirp, int $count): int
{
    $file = fsGetVFileFromFd($fd);

    if ($file->getdents === null) {
        $file->getdents = fsReaddir($file->path);
    }

    $struct_size = 280;
    $pos = 0;
    $off = $file->seek(0, 1);

    $idx = (int)floor($off / $struct_size);

    while ($idx < \count($file->getdents) && $pos + $struct_size <= $count) {
        $name = $file->getdents[$idx];
        if ($name === '.') {
            $id = fsStat($file->path, true)->ino;
            $type = 4;
        } elseif ($name === '..') {
            $lookup = fsLookupParentPath($file->path);
            $id = fsStat($lookup, true)->ino;
            $type = 4;
        } else {
            $child = fsLookupChild($file->path, $name);
            $id = fsStat($child, true)->ino;
            $type = is_dir($child) ? 4 : (is_file($child) ? 8 : 10);
        }
        heap64Write($runtime, $dirp + $pos, $id);
        heap64Write($runtime, $dirp + $pos + 8, ($idx + 1) * $struct_size);
        heap16Write($runtime, $dirp + $pos + 16, $struct_size);
        heap8Write($runtime, $dirp + $pos + 18, $type);
        stringToUTF8($runtime, $name, $dirp + $pos + 19, 256);
        $pos += $struct_size;
        $idx += 1;
    }
    $file->seek($idx * $struct_size, 0);

    return $pos;
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
function hostFunc__wasi_snapshot_preview1__fd_seek(Runtime $runtime, int $fd, int $offset_low, int $offset_high, int $whence, int $newOffset): int
{
    $offset = $offset_low + $offset_high * 4294967296;
    $file = fsGetVFileFromFd($fd);
    $pos = $file->seek($offset, $whence);
    heap64Write($runtime, $newOffset, $pos);

    return 0;
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
function hostFunc__env___munmap_js(Runtime $runtime): int
{
    // Do nothing.
    return 0;
}

// Type: (i32, i32, i32, i32, i32, i32, i32, i32) -> (i32)
function hostFunc__env___mmap_js(Runtime $runtime, int $len, int $prot, int $flags, int $fd, int $offset_low, int $offset_high, int $allocated, int $addr): int
{
    $offset = $offset_low + $offset_high * 4294967296;

    [$resultPtr, $resultAllocated] = fsMmap($runtime, $fd, $len, $offset, $prot, $flags);
    heap32Write($runtime, $allocated, $resultAllocated);
    heapU32Write($runtime, $addr, $resultPtr);

    return 0;
}
