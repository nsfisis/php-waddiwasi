<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class StartTest extends SpecTestsuiteBase
{
    public function testAssertInvalid0(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'start.0.wasm',
            text: 'unknown function',
            line: 2,
        );
    }

    public function testAssertInvalid1(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'start.1.wasm',
            text: 'start function',
            line: 7,
        );
    }

    public function testAssertInvalid2(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'start.2.wasm',
            text: 'start function',
            line: 14,
        );
    }

    public function testModule3(): void
    {
        $this->runModuleCommand(
            filename: 'start.3.wasm',
            name: null,
            line: 21,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => []],
            expected: [['type' => 'i32', 'value' => '68']],
            line: 45,
        );
    }

    public function testAction5(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'inc', 'args' => []],
            line: 46,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => []],
            expected: [['type' => 'i32', 'value' => '69']],
            line: 47,
        );
    }

    public function testAction7(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'inc', 'args' => []],
            line: 48,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => []],
            expected: [['type' => 'i32', 'value' => '70']],
            line: 49,
        );
    }

    public function testModule9(): void
    {
        $this->runModuleCommand(
            filename: 'start.4.wasm',
            name: null,
            line: 51,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => []],
            expected: [['type' => 'i32', 'value' => '68']],
            line: 74,
        );
    }

    public function testAction11(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'inc', 'args' => []],
            line: 75,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => []],
            expected: [['type' => 'i32', 'value' => '69']],
            line: 76,
        );
    }

    public function testAction13(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'inc', 'args' => []],
            line: 77,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => []],
            expected: [['type' => 'i32', 'value' => '70']],
            line: 78,
        );
    }

    public function testModule15(): void
    {
        $this->runModuleCommand(
            filename: 'start.5.wasm',
            name: null,
            line: 80,
        );
    }

    public function testModule16(): void
    {
        $this->runModuleCommand(
            filename: 'start.6.wasm',
            name: null,
            line: 86,
        );
    }

    public function testModule17(): void
    {
        $this->runModuleCommand(
            filename: 'start.7.wasm',
            name: null,
            line: 92,
        );
    }

    public function testAssertUninstantiable18(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'start.8.wasm',
            text: 'unreachable',
            line: 98,
        );
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed19(): void
    {
    }
}
