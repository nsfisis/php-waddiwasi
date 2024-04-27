<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites;

use Nsfisis\Waddiwasi\BinaryFormat\Decoder;
use Nsfisis\Waddiwasi\Execution\Runtime;
use Nsfisis\Waddiwasi\Execution\Store;
use Nsfisis\Waddiwasi\Execution\TrapException;
use PHPUnit\Framework\TestCase;
use function count;

final class CoreTest extends TestCase
{
    public function testAddress(): void
    {
        $this->runSpecTestsuite('address');
    }

    public function testAlign(): void
    {
        // $this->runSpecTestsuite('align');
    }

    public function testBinaryLeb128(): void
    {
        // $this->runSpecTestsuite('binary-leb128');
    }

    public function testBinary(): void
    {
        // $this->runSpecTestsuite('binary');
    }

    public function testBlock(): void
    {
        // $this->runSpecTestsuite('block');
    }

    public function testBr(): void
    {
        // $this->runSpecTestsuite('br');
    }

    public function testBrIf(): void
    {
        // $this->runSpecTestsuite('br_if');
    }

    public function testBrTable(): void
    {
        // $this->runSpecTestsuite('br_table');
    }

    public function testBulk(): void
    {
        // $this->runSpecTestsuite('bulk');
    }

    public function testCall(): void
    {
        // $this->runSpecTestsuite('call');
    }

    public function testCallIndirect(): void
    {
        // $this->runSpecTestsuite('call_indirect');
    }

    public function testConst(): void
    {
        // $this->runSpecTestsuite('const');
    }

    public function testConversions(): void
    {
        // $this->runSpecTestsuite('conversions');
    }

    public function testCustom(): void
    {
        // $this->runSpecTestsuite('custom');
    }

    public function testData(): void
    {
        // $this->runSpecTestsuite('data');
    }

    public function testElem(): void
    {
        // $this->runSpecTestsuite('elem');
    }

    public function testEndianness(): void
    {
        // $this->runSpecTestsuite('endianness');
    }

    public function testExports(): void
    {
        // $this->runSpecTestsuite('exports');
    }

    public function testF32(): void
    {
        // $this->runSpecTestsuite('f32');
    }

    public function testF32Bitwise(): void
    {
        // $this->runSpecTestsuite('f32_bitwise');
    }

    public function testF32Cmp(): void
    {
        // $this->runSpecTestsuite('f32_cmp');
    }

    public function testF64(): void
    {
        // $this->runSpecTestsuite('f64');
    }

    public function testF64Bitwise(): void
    {
        // $this->runSpecTestsuite('f64_bitwise');
    }

    public function testF64Cmp(): void
    {
        // $this->runSpecTestsuite('f64_cmp');
    }

    public function testFac(): void
    {
        // $this->runSpecTestsuite('fac');
    }

    public function testFloatExprs(): void
    {
        // $this->runSpecTestsuite('float_exprs');
    }

    public function testFloatLiterals(): void
    {
        // $this->runSpecTestsuite('float_literals');
    }

    public function testFloatMemory(): void
    {
        // $this->runSpecTestsuite('float_memory');
    }

    public function testFloatMisc(): void
    {
        // $this->runSpecTestsuite('float_misc');
    }

    public function testForward(): void
    {
        // $this->runSpecTestsuite('forward');
    }

    public function testFunc(): void
    {
        // $this->runSpecTestsuite('func');
    }

    public function testFuncPtrs(): void
    {
        // $this->runSpecTestsuite('func_ptrs');
    }

    public function testGlobal(): void
    {
        // $this->runSpecTestsuite('global');
    }

    public function testI32(): void
    {
        // $this->runSpecTestsuite('i32');
    }

    public function testI64(): void
    {
        // $this->runSpecTestsuite('i64');
    }

    public function testIf(): void
    {
        // $this->runSpecTestsuite('if');
    }

    public function testImports(): void
    {
        // $this->runSpecTestsuite('imports');
    }

    public function testInlineModule(): void
    {
        // $this->runSpecTestsuite('inline-module');
    }

    public function testIntExprs(): void
    {
        // $this->runSpecTestsuite('int_exprs');
    }

    public function testIntLiterals(): void
    {
        // $this->runSpecTestsuite('int_literals');
    }

    public function testLabels(): void
    {
        // $this->runSpecTestsuite('labels');
    }

    public function testLeftToRight(): void
    {
        $this->runSpecTestsuite('left-to-right');
    }

    public function testLinking(): void
    {
        // $this->runSpecTestsuite('linking');
    }

    public function testLoad(): void
    {
        // $this->runSpecTestsuite('load');
    }

    public function testLocalGet(): void
    {
        // $this->runSpecTestsuite('local_get');
    }

    public function testLocalSet(): void
    {
        // $this->runSpecTestsuite('local_set');
    }

    public function testLocalTee(): void
    {
        // $this->runSpecTestsuite('local_tee');
    }

    public function testLoop(): void
    {
        // $this->runSpecTestsuite('loop');
    }

    public function testMemory(): void
    {
        // $this->runSpecTestsuite('memory');
    }

    public function testMemoryCopy(): void
    {
        // $this->runSpecTestsuite('memory_copy');
    }

    public function testMemoryFill(): void
    {
        // $this->runSpecTestsuite('memory_fill');
    }

    public function testMemoryGrow(): void
    {
        // $this->runSpecTestsuite('memory_grow');
    }

    public function testMemoryInit(): void
    {
        // $this->runSpecTestsuite('memory_init');
    }

    public function testMemoryRedundancy(): void
    {
        // $this->runSpecTestsuite('memory_redundancy');
    }

    public function testMemorySize(): void
    {
        // $this->runSpecTestsuite('memory_size');
    }

    public function testMemoryTrap(): void
    {
        // $this->runSpecTestsuite('memory_trap');
    }

    public function testNames(): void
    {
        // $this->runSpecTestsuite('names');
    }

    public function testNop(): void
    {
        // $this->runSpecTestsuite('nop');
    }

    public function testObsoleteKeywords(): void
    {
        // $this->runSpecTestsuite('obsolete-keywords');
    }

    public function testRefFunc(): void
    {
        // $this->runSpecTestsuite('ref_func');
    }

    public function testRefIsNull(): void
    {
        // $this->runSpecTestsuite('ref_is_null');
    }

    public function testRefNull(): void
    {
        // $this->runSpecTestsuite('ref_null');
    }

    public function testReturn(): void
    {
        // $this->runSpecTestsuite('return');
    }

    public function testSelect(): void
    {
        // $this->runSpecTestsuite('select');
    }

    public function testSkipStackGuardPage(): void
    {
        // $this->runSpecTestsuite('skip-stack-guard-page');
    }

    public function testStack(): void
    {
        // $this->runSpecTestsuite('stack');
    }

    public function testStart(): void
    {
        // $this->runSpecTestsuite('start');
    }

    public function testStore(): void
    {
        // $this->runSpecTestsuite('store');
    }

    public function testSwitch(): void
    {
        // $this->runSpecTestsuite('switch');
    }

    public function testTableSub(): void
    {
        // $this->runSpecTestsuite('table-sub');
    }

    public function testTable(): void
    {
        // $this->runSpecTestsuite('table');
    }

    public function testTableCopy(): void
    {
        // $this->runSpecTestsuite('table_copy');
    }

    public function testTableFill(): void
    {
        // $this->runSpecTestsuite('table_fill');
    }

    public function testTableGet(): void
    {
        // $this->runSpecTestsuite('table_get');
    }

    public function testTableGrow(): void
    {
        // $this->runSpecTestsuite('table_grow');
    }

    public function testTableInit(): void
    {
        // $this->runSpecTestsuite('table_init');
    }

    public function testTableSet(): void
    {
        // $this->runSpecTestsuite('table_set');
    }

    public function testTableSize(): void
    {
        // $this->runSpecTestsuite('table_size');
    }

    public function testToken(): void
    {
        // $this->runSpecTestsuite('token');
    }

    public function testTraps(): void
    {
        // $this->runSpecTestsuite('traps');
    }

    public function testType(): void
    {
        // $this->runSpecTestsuite('type');
    }

    public function testUnreachable(): void
    {
        // $this->runSpecTestsuite('unreachable');
    }

    public function testUnreachedInvalid(): void
    {
        // $this->runSpecTestsuite('unreached-invalid');
    }

    public function testUnreachedValid(): void
    {
        // $this->runSpecTestsuite('unreached-valid');
    }

    public function testUnwind(): void
    {
        // $this->runSpecTestsuite('unwind');
    }

    public function testUtf8CustomSectionId(): void
    {
        // $this->runSpecTestsuite('utf8-custom-section-id');
    }

    public function testUtf8ImportField(): void
    {
        // $this->runSpecTestsuite('utf8-import-field');
    }

    public function testUtf8ImportModule(): void
    {
        // $this->runSpecTestsuite('utf8-import-module');
    }

    public function testUtf8InvalidEncoding(): void
    {
        // $this->runSpecTestsuite('utf8-invalid-encoding');
    }

    private function runSpecTestsuite(string $testsuiteName): void
    {
        $baseDir = __DIR__ . '/../../fixtures/spec_testsuites/core';
        $testsuiteDefinitionFileContent = file_get_contents("$baseDir/$testsuiteName.json");
        $testsuiteDefinition = json_decode($testsuiteDefinitionFileContent, true);

        $commands = $testsuiteDefinition['commands'];
        $modules = [];
        $runtimes = [];
        foreach ($commands as $command) {
            switch ($command['type']) {
                case 'module':
                    $filename = $command['filename'];
                    $moduleName = $command['name'] ?? '_';
                    $filePath = "$baseDir/$filename";
                    $wasmBinary = file_get_contents($filePath);
                    $module = (new Decoder($wasmBinary))->decode();
                    $modules[$moduleName] = $module;
                    $runtime = Runtime::instantiate(Store::empty(), $module, []);
                    $runtimes[$moduleName] = $runtime;
                    break;
                case 'action':
                    $this->assertTrue(false, "action");
                    break;
                case 'assert_exhaustion':
                    $this->assertTrue(false, "assert_exhaustion");
                    break;
                case 'assert_invalid':
                    $this->assertTrue(false, "assert_invalid");
                    break;
                case 'assert_malformed':
                    $commandFilename = $command['filename'];
                    $commandText = $command['text'];
                    $commandModuleType = $command['module_type'];
                    if ($commandModuleType === 'text') {
                        // Text format is not supported.
                    } else {
                        $this->assertTrue(false, "assert_malformed");
                    }
                    break;
                case 'assert_return':
                    $targetModuleName = $command['module'] ?? '_';
                    $targetModule = $modules[$targetModuleName];
                    $expectedResults = $command['expected'];
                    $action = $command['action'];
                    $actionType = $action['type'];
                    $actionField = $action['field'];
                    if ($actionType === 'invoke') {
                        $actionArgs = $action['args'];
                        $runtime = $runtimes[$targetModuleName];
                        try {
                            $this->assertWasmInvokeResults(
                                $expectedResults,
                                $runtime->invoke(
                                    $actionField,
                                    array_map($this->toWasmArg(...), $actionArgs),
                                ),
                                "at $command[line]",
                            );
                        } catch (TrapException $e) {
                            $this->assertTrue(false, "assert_return: trap, $e at $command[line]");
                        }
                    } else {
                        $this->assertTrue(false, "assert_return: unknown action, $actionType");
                    }
                    break;
                case 'assert_trap':
                    $targetModuleName = $command['module'] ?? '_';
                    $targetModule = $modules[$targetModuleName];
                    $expectedResults = $command['expected'];
                    $action = $command['action'];
                    $actionType = $action['type'];
                    $actionField = $action['field'];
                    if ($actionType === 'invoke') {
                        $actionArgs = $action['args'];
                        $runtime = $runtimes[$targetModuleName];
                        $exception = null;
                        try {
                            $runtime->invoke(
                                $actionField,
                                array_map($this->toWasmArg(...), $actionArgs),
                            );
                        } catch (TrapException $e) {
                            $exception = $e;
                        }
                        $this->assertNotNull($exception, "at $command[line]");
                        // @todo check trap message
                    } else {
                        $this->assertTrue(false, "assert_trap: unknown action, $actionType");
                    }
                    break;
                case 'assert_uninstantiable':
                    $this->assertTrue(false, "assert_uninstantiable");
                    break;
                case 'assert_unlinkable':
                    $this->assertTrue(false, "assert_unlinkable");
                    break;
                case 'register':
                    $this->assertTrue(false, "register");
                    break;
            }
        }
    }

    /**
     * @param array{type: string, value: string} $arg
     */
    private function toWasmArg(array $arg): int|float
    {
        $type = $arg['type'];
        $value = $arg['value'];
        return match ($type) {
            'i32' => (int)$value,
            'i64' => (int)$value,
            'f32' => unpack('g', pack('l', (int)$value))[1],
            'f64' => unpack('e', pack('q', (int)$value))[1],
            default => $this->assertTrue(false, "unknown arg type: $type"),
        };
    }

    /**
     * @param list<mixed> $actualResults
     * @param list<array{type: string, value: string}> $expectedResults
     */
    private function assertWasmInvokeResults(
        array $expectedResults,
        array $actualResults,
        string $message = '',
    ): void {
        if ($message !== '') {
            $message = " ($message)";
        }
        $this->assertCount(
            count($expectedResults),
            $actualResults,
            "results count mismatch" . $message,
        );

        for ($i = 0; $i < count($expectedResults); $i++) {
            $expectedResult = $expectedResults[$i];
            $actualResult = $actualResults[$i];
            if ($expectedResult['type'] === 'f32') {
                $expectedValue = unpack('g', pack('l', (int)$expectedResult['value']))[1];
                if (is_nan($expectedValue)) {
                    // @todo check NaN bit pattern.
                    $this->assertTrue(
                        is_nan($actualResult),
                        "result $i is not NaN" . $message,
                    );
                } else {
                    $this->assertSame(
                        $expectedValue,
                        $actualResult,
                        "result $i mismatch" . $message,
                    );
                }
            } elseif ($expectedResult['type'] === 'f64') {
                $expectedValue = unpack('e', pack('q', (int)$expectedResult['value']))[1];
                if (is_nan($expectedValue)) {
                    // @todo check NaN bit pattern.
                    $this->assertTrue(
                        is_nan($actualResult),
                        "result $i is not NaN" . $message,
                    );
                } else {
                    $this->assertSame(
                        $expectedValue,
                        $actualResult,
                        "result $i mismatch" . $message,
                    );
                }
            } else {
                $expectedValue = (int)$expectedResult['value'];
                $this->assertSame(
                    $expectedValue,
                    $actualResult,
                    "result $i mismatch" . $message,
                );
            }
        }
    }
}
