<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use Nsfisis\Waddiwasi\BinaryFormat\Decoder;
use Nsfisis\Waddiwasi\BinaryFormat\InvalidBinaryFormatException;
use Nsfisis\Waddiwasi\Execution\ExternVal;
use Nsfisis\Waddiwasi\Execution\FuncInst;
use Nsfisis\Waddiwasi\Execution\Refs;
use Nsfisis\Waddiwasi\Execution\Runtime;
use Nsfisis\Waddiwasi\Execution\Store;
use Nsfisis\Waddiwasi\Structure\Types\FuncType;
use Nsfisis\Waddiwasi\Structure\Types\NumType;
use Nsfisis\Waddiwasi\Structure\Types\ResultType;
use Nsfisis\Waddiwasi\Structure\Types\ValType;

$base_dir = __DIR__ . '/fixtures/spec_testsuites/core';

$testsuiteNames = [
    // 'address',
    // 'align',
    // 'binary-leb128',
    // 'binary',
    // 'block',
    'br',
    // 'br_if',
    // 'br_table',
    // 'bulk',
    // 'call',
    // 'call_indirect',
    // 'const',
    // 'conversions',
    // 'custom',
    // 'data',
    // 'elem',
    // 'endianness',
    // 'exports',
    // 'f32',
    // 'f32_bitwise',
    // 'f32_cmp',
    // 'f64',
    // 'f64_bitwise',
    // 'f64_cmp',
    // 'fac',
    // 'float_exprs',
    // 'float_literals',
    // 'float_memory',
    // 'float_misc',
    // 'forward',
    // 'func',
    // 'func_ptrs',
    // 'global',
    // 'i32',
    // 'i64',
    // 'if',
    // 'imports',
    // 'inline-module',
    // 'int_exprs',
    // 'int_literals',
    // 'labels',
    // 'left-to-right',
    // 'linking',
    // 'load',
    // 'local_get',
    // 'local_set',
    // 'local_tee',
    // 'loop',
    // 'memory',
    // 'memory_copy',
    // 'memory_fill',
    // 'memory_grow',
    // 'memory_init',
    // 'memory_redundancy',
    // 'memory_size',
    // 'memory_trap',
    // 'names',
    // 'nop',
    // 'obsolete-keywords',
    // 'ref_func',
    // 'ref_is_null',
    // 'ref_null',
    // 'return',
    // 'select',
    // 'skip-stack-guard-page',
    // 'stack',
    // 'start',
    // 'store',
    // 'switch',
    // 'table-sub',
    // 'table',
    // 'table_copy',
    // 'table_fill',
    // 'table_get',
    // 'table_grow',
    // 'table_init',
    // 'table_set',
    // 'table_size',
    // 'token',
    // 'traps',
    // 'type',
    // 'unreachable',
    // 'unreached-invalid',
    // 'unreached-valid',
    // 'unwind',
    // 'utf8-custom-section-id',
    // 'utf8-import-field',
    // 'utf8-import-module',
    // 'utf8-invalid-encoding',
];

foreach ($testsuiteNames as $testsuiteName) {
    $testsuiteDefinitionFileContent = file_get_contents("$base_dir/$testsuiteName.json");
    $testsuiteDefinition = json_decode($testsuiteDefinitionFileContent, true);
    runTestsuite($testsuiteDefinition, $testsuiteName);
}

function runTestsuite(array $testsuiteDefinition, string $testsuiteName): void
{
    global $base_dir;

    $commands = $testsuiteDefinition['commands'];
    $modules = null;
    foreach ($commands as $command) {
        switch ($command['type']) {
            case 'module':
                $filename = $command['filename'];
                $moduleName = $command['name'] ?? '_';
                $filePath = "$base_dir/$filename";
                $wasmBinary = file_get_contents($filePath);
                try {
                    $module = (new Decoder($wasmBinary))->decode();
                } catch (InvalidBinaryFormatException $e) {
                    fprintf(STDERR, "%s: %s\n", $filename, $e->getMessage());
                }
                $modules[$moduleName] = $module;
                break;
            case 'action':
                break;
            case 'assert_exhaustion':
                break;
            case 'assert_invalid':
                break;
            case 'assert_malformed':
                break;
            case 'assert_return':
                $targetModuleName = $command['module'] ?? '_';
                $targetModule = $modules[$targetModuleName];
                $expected = $command['expected'];
                $action = $command['action'];
                $actionType = $action['type'];
                $actionField = $action['field'];
                if ($actionType === 'invoke') {
                    $actionArgs = $action['args'];
                    $runtime = Runtime::instantiate(Store::empty(), $module, []);
                    if (count($actionArgs) === 0) {
                        $results = $runtime->invoke($actionField, []);
                        assert(count($expected) === count($results));
                        for ($i = 0; $i < count($expected); $i++) {
                            $e = $expected[$i];
                            $r = $results[$i];
                            if ($e['type'] === 'f32') {
                                $v = unpack('g', pack('l', (int)$e['value']))[1];
                                assert($v === $r, "$v !== $r (at $command[line])");
                            } else if ($e['type'] === 'f64') {
                                $v = unpack('e', pack('q', (int)$e['value']))[1];
                                assert($v === $r, "$v !== $r (at $command[line])");
                            } else {
                                $v = (int)$e['value'];
                                assert($v === $r, "$v !== $r (at $command[line])");
                            }
                        }
                    }
                } else {
                }
                break;
            case 'assert_trap':
                break;
            case 'assert_uninstantiable':
                break;
            case 'assert_unlinkable':
                break;
            case 'register':
                break;
        }
    }
}
