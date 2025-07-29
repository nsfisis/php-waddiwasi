<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class RefFuncTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'ref_func.0.wasm',
            name: null,
            line: 1,
        );
    }

    public function testRegister1(): void
    {
        $this->runRegisterCommand(
            name: null,
            as: 'M',
            line: 4,
        );
    }

    public function testModule2(): void
    {
        $this->runModuleCommand(
            filename: 'ref_func.1.wasm',
            name: null,
            line: 6,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'is_null-f', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 56,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'is_null-g', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 57,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'is_null-v', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 58,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'call-f', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 60,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'call-g', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 61,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'call-v', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 62,
        );
    }

    public function testAction9(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'set-g', 'args' => []],
            line: 63,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'call-v', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 64,
        );
    }

    public function testAction11(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'set-f', 'args' => []],
            line: 65,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'call-v', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 66,
        );
    }

    public function testAssertInvalid13(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'ref_func.2.wasm',
            text: 'unknown function 7',
            line: 69,
        );
    }

    public function testModule14(): void
    {
        $this->runModuleCommand(
            filename: 'ref_func.3.wasm',
            name: null,
            line: 80,
        );
    }

    public function testAssertInvalid15(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'ref_func.4.wasm',
            text: 'undeclared function reference',
            line: 109,
        );
    }

    public function testAssertInvalid16(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'ref_func.5.wasm',
            text: 'undeclared function reference',
            line: 113,
        );
    }
}
