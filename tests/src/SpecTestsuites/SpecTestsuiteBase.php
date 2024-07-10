<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites;

use Nsfisis\Waddiwasi\Stream\FileStream;
use Nsfisis\Waddiwasi\WebAssembly\BinaryFormat\Decoder;
use Nsfisis\Waddiwasi\WebAssembly\BinaryFormat\InvalidBinaryFormatException;
use Nsfisis\Waddiwasi\WebAssembly\Execution\Extern;
use Nsfisis\Waddiwasi\WebAssembly\Execution\GlobalInst;
use Nsfisis\Waddiwasi\WebAssembly\Execution\MemInst;
use Nsfisis\Waddiwasi\WebAssembly\Execution\Ref;
use Nsfisis\Waddiwasi\WebAssembly\Execution\Refs\RefExtern;
use Nsfisis\Waddiwasi\WebAssembly\Execution\Refs\RefFunc;
use Nsfisis\Waddiwasi\WebAssembly\Execution\Refs\RefNull;
use Nsfisis\Waddiwasi\WebAssembly\Execution\Runtime;
use Nsfisis\Waddiwasi\WebAssembly\Execution\StackOverflowException;
use Nsfisis\Waddiwasi\WebAssembly\Execution\Store;
use Nsfisis\Waddiwasi\WebAssembly\Execution\TableInst;
use Nsfisis\Waddiwasi\WebAssembly\Execution\TrapException;
use Nsfisis\Waddiwasi\WebAssembly\Execution\TrapKind;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\GlobalType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\Limits;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\MemType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\Mut;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\NumType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\RefType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\TableType;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\ValType;
use PHPUnit\Framework\TestCase;
use RuntimeException;
use function count;
use function is_float;

abstract class SpecTestsuiteBase extends TestCase
{
    private static $modules = [];
    private static $runtimes = [];
    private static $registeredModules = [];
    private static $registeredRuntimes = [];

    protected function runModuleCommand(
        string $filename,
        ?string $name,
        int $line,
    ): void {
        $moduleName = $name ?? '_';
        $filePath = __DIR__ . "/../../fixtures/spec_testsuites/core/$filename";
        $wasmBinaryStream = new FileStream($filePath);
        $module = (new Decoder($wasmBinaryStream))->decode();
        self::$modules[$moduleName] = $module;
        $importObj = [
            'spectest' => [
                'memory' => Extern::Mem(new MemInst(new MemType(new Limits(1, 2)))),
                'table' => Extern::Table(new TableInst(new TableType(new Limits(10, 20), RefType::FuncRef), [
                    Ref::RefNull(RefType::FuncRef),
                    Ref::RefNull(RefType::FuncRef),
                    Ref::RefNull(RefType::FuncRef),
                    Ref::RefNull(RefType::FuncRef),
                    Ref::RefNull(RefType::FuncRef),
                    Ref::RefNull(RefType::FuncRef),
                    Ref::RefNull(RefType::FuncRef),
                    Ref::RefNull(RefType::FuncRef),
                    Ref::RefNull(RefType::FuncRef),
                    Ref::RefNull(RefType::FuncRef),
                ])),
                'global_i32' => Extern::Global_(new GlobalInst(new GlobalType(Mut::Const, ValType::NumType(NumType::I32)), 666)),
                'global_i64' => Extern::Global_(new GlobalInst(new GlobalType(Mut::Const, ValType::NumType(NumType::I64)), 666)),
                'global_f32' => Extern::Global_(new GlobalInst(new GlobalType(Mut::Const, ValType::NumType(NumType::F32)), 666.6)),
                'global_f64' => Extern::Global_(new GlobalInst(new GlobalType(Mut::Const, ValType::NumType(NumType::F64)), 666.6)),
            ],
        ];
        foreach (self::$registeredModules as $registeredModuleName => $registeredModule) {
            $registeredRuntime = self::$registeredRuntimes[$registeredModuleName];
            foreach ($registeredModule->exports as $export) {
                $fn = $registeredRuntime->store->funcs[$registeredRuntime->getExport($export->name)->addr];
                $importObj[$registeredModuleName][$export->name] = Extern::Func($fn);
            }
        }
        $runtime = Runtime::instantiate(Store::empty(), $module, $importObj);
        self::$runtimes[$moduleName] = $runtime;
        $this->assertTrue(true);
    }

    protected function runAssertReturnCommand(
        ?string $module,
        array $action,
        array $expected,
        int $line,
    ): void {
        try {
            $this->assertWasmInvokeResults(
                $expected,
                $this->doAction($module, $action),
                "at $line",
            );
        } catch (TrapException $e) {
            $this->assertTrue(false, "assert_return: trap, $e at $line");
        }
    }

    protected function runAssertTrapCommand(
        ?string $module,
        array $action,
        string $text,
        int $line,
    ): void {
        $exception = null;
        try {
            $this->doAction($module, $action);
        } catch (TrapException $e) {
            $exception = $e;
        }
        $this->assertNotNull($exception, "at $line");
        $this->assertTrapKind($text, $e->getTrapKind(), "at $line");
    }

    protected function runAssertMalformedCommand(
        string $filename,
        string $text,
        int $line,
    ): void {
        $filePath = __DIR__ . "/../../fixtures/spec_testsuites/core/$filename";
        $wasmBinaryStream = new FileStream($filePath);
        $exception = null;
        try {
            (new Decoder($wasmBinaryStream))->decode();
        } catch (InvalidBinaryFormatException $e) {
            $exception = $e;
        }
        // @todo Check error message.
        $this->assertNotNull($exception, "decoding $filename is expected to fail (at $line)");
    }

    protected function runAssertInvalidCommand(
        string $filename,
        string $text,
        int $line,
    ): void {
        // @todo Our implementation does not support "validation" step.
        $this->assertTrue(true);
    }

    protected function runAssertExhaustionCommand(
        ?string $module,
        array $action,
        string $text,
        int $line,
    ): void {
        $exception = null;
        try {
            $this->doAction($module, $action);
        } catch (StackOverflowException $e) {
            $exception = $e;
        }
        $this->assertNotNull($exception, "at $line");
        // @todo Check $text?
    }

    protected function runAssertUninstantiableCommand(
        string $filename,
        string $text,
        int $line,
    ): void {
        $this->assertTrue(false, "assert_uninstantiable");
    }

    protected function runAssertUnlinkableCommand(
        string $filename,
        string $text,
        int $line,
    ): void {
        $this->assertTrue(false, "assert_unlinkable");
    }

    protected function runActionCommand(
        ?string $module,
        array $action,
        int $line,
    ): void {
        $this->doAction($module, $action);
        $this->assertTrue(true);
    }

    protected function runRegisterCommand(
        ?string $name,
        string $as,
        int $line,
    ): void {
        $targetModuleName = $name ?? '_';
        $targetModule = self::$modules[$targetModuleName];
        $runtime = self::$runtimes[$targetModuleName];
        self::$registeredModules[$as] = $targetModule;
        self::$registeredRuntimes[$as] = $runtime;
        $this->assertTrue(true);
    }

    /**
     * @param array{type: string, value: string} $arg
     */
    private static function wastValueToInternalValue(array $arg): int|float|Ref
    {
        $type = $arg['type'];
        $value = $arg['value'];
        return match ($type) {
            'i32' => unpack('l', pack('V', (int)$value))[1],
            'i64' => unpack('q', self::convertInt64ToBinary($value))[1],
            'f32' => match ($value) {
                'nan:canonical' => NAN,
                'nan:arithmetic' => NAN,
                default => unpack('g', pack('V', (int)$value))[1],
            },
            'f64' => match ($value) {
                'nan:canonical' => NAN,
                'nan:arithmetic' => NAN,
                default => unpack('e', self::convertInt64ToBinary($value))[1],
            },
            'externref' => $value === 'null' ? Ref::RefNull(RefType::ExternRef) : Ref::RefExtern((int)$value),
            'funcref' => $value === 'null' ? Ref::RefNull(RefType::FuncRef) : Ref::RefFunc((int)$value),
            default => throw new RuntimeException("unknown type: $type"),
        };
    }

    private function doAction(
        ?string $module,
        array $action,
    ): array {
        $targetModuleName = $module ?? '_';
        $targetModule = self::$modules[$targetModuleName];
        $actionType = $action['type'];
        $actionField = $action['field'];
        if ($actionType === 'invoke') {
            $actionArgs = $action['args'];
            $runtime = self::$runtimes[$targetModuleName];
            return $runtime->invoke(
                $actionField,
                array_map(self::wastValueToInternalValue(...), $actionArgs),
            );
        } else {
            $this->assertTrue(false, "unknown action: $actionType");
        }
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
            'results count mismatch' . $message,
        );

        for ($i = 0; $i < count($expectedResults); $i++) {
            $expectedResult = $expectedResults[$i];
            $expectedValue = self::wastValueToInternalValue($expectedResult);
            $actualResult = $actualResults[$i];
            if (is_float($expectedValue) && is_nan($expectedValue)) {
                // @todo check NaN bit pattern.
                $this->assertTrue(
                    is_nan($actualResult),
                    "result $i is not NaN" . $message,
                );
            } elseif ($expectedValue instanceof RefNull) {
                $this->assertInstanceOf(
                    RefNull::class,
                    $actualResult,
                    "result $i is not a null" . $message,
                );
            } elseif ($expectedValue instanceof RefExtern) {
                $this->assertInstanceOf(
                    RefExtern::class,
                    $actualResult,
                    "result $i is not an externref" . $message,
                );
                $this->assertSame(
                    $expectedValue->addr,
                    $actualResult->addr,
                    "result $i mismatch" . $message,
                );
            } elseif ($expectedValue instanceof RefFunc) {
                $this->assertInstanceOf(
                    RefFunc::class,
                    $actualResult,
                    "result $i is not an funcref" . $message,
                );
                $this->assertSame(
                    $expectedValue->addr,
                    $actualResult->addr,
                    "result $i mismatch" . $message,
                );
            } else {
                $this->assertSame(
                    $expectedValue,
                    $actualResult,
                    "result $i mismatch" . $message,
                );
            }
        }
    }

    private function assertTrapKind(
        string $expectedErrorMessage,
        TrapKind $kind,
        string $message = '',
    ): void {
        if ($message !== '') {
            $message = " ($message)";
        }
        $actualErrorMessage = match ($kind) {
            TrapKind::Unknown => 'unknown',
            TrapKind::Unreachable => 'unreachable',
            TrapKind::OutOfBoundsMemoryAccess => 'out of bounds memory access',
            TrapKind::OutOfBoundsTableAccess => 'out of bounds table access',
            TrapKind::UninitializedElement => 'uninitialized element',
            TrapKind::IndirectCallTypeMismatch => 'indirect call type mismatch',
            TrapKind::UndefinedElement => 'undefined element',
            TrapKind::DivideByZero => 'integer divide by zero',
            TrapKind::IntegerOverflow => 'integer overflow',
            TrapKind::InvalidConversionToInteger => 'invalid conversion to integer',
        };
        $this->assertStringContainsString(
            $actualErrorMessage,
            $expectedErrorMessage,
            'trap kind mismatch' . $message,
        );
    }

    private static function convertInt64ToBinary(string $value): string
    {
        // 2^63-1 < $value
        if (bccomp(bcsub(bcpow('2', '63'), '1'), $value) < 0) {
            $value = bcsub($value, bcpow('2', '64'));
        }
        return pack('q', (int)$value);
    }
}
