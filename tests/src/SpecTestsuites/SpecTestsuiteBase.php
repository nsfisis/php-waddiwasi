<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites;

use Nsfisis\Waddiwasi\BinaryFormat\Decoder;
use Nsfisis\Waddiwasi\BinaryFormat\InvalidBinaryFormatException;
use Nsfisis\Waddiwasi\Execution\Runtime;
use Nsfisis\Waddiwasi\Execution\Store;
use Nsfisis\Waddiwasi\Execution\TrapException;
use Nsfisis\Waddiwasi\Execution\TrapKind;
use PHPUnit\Framework\TestCase;
use function count;

abstract class SpecTestsuiteBase extends TestCase
{
    private static $modules = [];
    private static $runtimes = [];

    protected function runModuleCommand(
        string $filename,
        ?string $name,
        int $line,
    ): void {
        $moduleName = $name ?? '_';
        $filePath = __DIR__ . "/../../fixtures/spec_testsuites/core/$filename";
        $wasmBinary = file_get_contents($filePath);
        $module = (new Decoder($wasmBinary))->decode();
        self::$modules[$moduleName] = $module;
        $runtime = Runtime::instantiate(Store::empty(), $module, []);
        self::$runtimes[$moduleName] = $runtime;
        $this->assertTrue(true);
    }

    protected function runAssertReturnCommand(
        ?string $module,
        array $action,
        array $expected,
        int $line,
    ): void {
        $targetModuleName = $module ?? '_';
        $targetModule = self::$modules[$targetModuleName];
        $actionType = $action['type'];
        $actionField = $action['field'];
        if ($actionType === 'invoke') {
            $actionArgs = $action['args'];
            $runtime = self::$runtimes[$targetModuleName];
            try {
                $this->assertWasmInvokeResults(
                    $expected,
                    $runtime->invoke(
                        $actionField,
                        array_map($this->toWasmArg(...), $actionArgs),
                    ),
                    "at $line",
                );
            } catch (TrapException $e) {
                $this->assertTrue(false, "assert_return: trap, $e at $line");
            }
        } else {
            $this->assertTrue(false, "assert_return: unknown action, $actionType");
        }
    }

    protected function runAssertTrapCommand(
        ?string $module,
        array $action,
        string $text,
        int $line,
    ): void {
        $targetModuleName = $module ?? '_';
        $targetModule = self::$modules[$targetModuleName];
        $actionType = $action['type'];
        $actionField = $action['field'];
        if ($actionType === 'invoke') {
            $actionArgs = $action['args'];
            $runtime = self::$runtimes[$targetModuleName];
            $exception = null;
            try {
                $runtime->invoke(
                    $actionField,
                    array_map($this->toWasmArg(...), $actionArgs),
                );
            } catch (TrapException $e) {
                $exception = $e;
            }
            $this->assertNotNull($exception, "at $line");
            $this->assertTrapKind($text, $e->getTrapKind(), "at $line");
        } else {
            $this->assertTrue(false, "assert_trap: unknown action, $actionType");
        }
    }

    protected function runAssertMalformedCommand(
        string $filename,
        string $text,
        int $line,
    ): void {
        $filePath = __DIR__ . "/../../fixtures/spec_testsuites/core/$filename";
        $wasmBinary = file_get_contents($filePath);
        $exception = null;
        try {
            (new Decoder($wasmBinary))->decode();
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
        array $action,
        string $text,
        int $line,
    ): void {
        $this->assertTrue(false, "assert_exhaustion");
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
        array $action,
        int $line,
    ): void {
        $this->assertTrue(false, "action");
    }

    protected function runRegisterCommand(
        ?string $name,
        string $as,
        int $line,
    ): void {
        $this->assertTrue(false, "register");
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
            'results count mismatch' . $message,
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

    private function assertTrapKind(
        string $expectedErrorMessage,
        TrapKind $kind,
        string $message = '',
    ): void {
        if ($message !== '') {
            $message = " ($message)";
        }
        $actualErrorMessage = match ($kind) {
            TrapKind::OutOfBoundsMemoryAccess => 'out of bounds memory access',
            TrapKind::Unknown => 'unknown',
        };
        $this->assertSame(
            $expectedErrorMessage,
            $actualErrorMessage,
            'trap kind mismatch' . $message,
        );
    }
}