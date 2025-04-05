<?php

declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';

use Nsfisis\Waddiwasi\Stream\BlobStream;
use Nsfisis\Waddiwasi\WebAssembly\Execution\Extern;
use Nsfisis\Waddiwasi\WebAssembly\Execution\FuncInst;
use Nsfisis\Waddiwasi\WebAssembly\Execution\Linker;
use Nsfisis\Waddiwasi\WebAssembly\Execution\Runtime;
use Nsfisis\Waddiwasi\WebAssembly\Execution\Store;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\FuncType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\ValType;

$wasmBinary = (""
    . "\x00\x61\x73\x6d\x01\x00\x00\x00\x01\x08\x02\x60\x00\x00\x60\x01"
    . "\x7f\x00\x02\x09\x01\x00\x04\x70\x75\x74\x63\x00\x01\x03\x02\x01"
    . "\x00\x07\x08\x01\x04\x6d\x61\x69\x6e\x00\x01\x0a\x46\x01\x44\x00"
    . "\x41\xc8\x00\x10\x00\x41\xe5\x00\x10\x00\x41\xec\x00\x10\x00\x41"
    . "\xec\x00\x10\x00\x41\xef\x00\x10\x00\x41\x2c\x10\x00\x41\x20\x10"
    . "\x00\x41\xd7\x00\x10\x00\x41\xef\x00\x10\x00\x41\xf2\x00\x10\x00"
    . "\x41\xec\x00\x10\x00\x41\xe4\x00\x10\x00\x41\x21\x10\x00\x41\x0a"
    . "\x10\x00\x0b");
$wasmBinaryStream = new BlobStream($wasmBinary);

$store = Store::empty();
$linker = new Linker($store);

$linker->register('', 'putc', Extern::Func(FuncInst::Host(new FuncType([ValType::I32], []), function (Runtime $runtime, int $c) { printf('%c', $c); })));

$runtime = Runtime::instantiateFromStream($wasmBinaryStream, $linker);

$runtime->invoke('main', []);
