<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
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

    #[Depends('testAssertInvalid0')]
    public function testAssertInvalid1(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'start.1.wasm',
            text: 'start function',
            line: 7,
        );
    }

    #[Depends('testAssertInvalid1')]
    public function testAssertInvalid2(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'start.2.wasm',
            text: 'start function',
            line: 14,
        );
    }

    #[Depends('testAssertInvalid2')]
    public function testModule3(): void
    {
        $this->runModuleCommand(
            filename: 'start.3.wasm',
            name: null,
            line: 21,
        );
    }

    #[Depends('testModule3')]
    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'get', 'args' => []],
            expected: [['type' => 'i32', 'value' => '68']],
            line: 45,
        );
    }

    #[Depends('testAssertReturn4')]
    public function testAction5(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'inc', 'args' => []],
            line: 46,
        );
    }

    #[Depends('testAction5')]
    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'get', 'args' => []],
            expected: [['type' => 'i32', 'value' => '69']],
            line: 47,
        );
    }

    #[Depends('testAssertReturn6')]
    public function testAction7(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'inc', 'args' => []],
            line: 48,
        );
    }

    #[Depends('testAction7')]
    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'get', 'args' => []],
            expected: [['type' => 'i32', 'value' => '70']],
            line: 49,
        );
    }

    #[Depends('testAssertReturn8')]
    public function testModule9(): void
    {
        $this->runModuleCommand(
            filename: 'start.4.wasm',
            name: null,
            line: 51,
        );
    }

    #[Depends('testModule9')]
    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'get', 'args' => []],
            expected: [['type' => 'i32', 'value' => '68']],
            line: 74,
        );
    }

    #[Depends('testAssertReturn10')]
    public function testAction11(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'inc', 'args' => []],
            line: 75,
        );
    }

    #[Depends('testAction11')]
    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'get', 'args' => []],
            expected: [['type' => 'i32', 'value' => '69']],
            line: 76,
        );
    }

    #[Depends('testAssertReturn12')]
    public function testAction13(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'inc', 'args' => []],
            line: 77,
        );
    }

    #[Depends('testAction13')]
    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'get', 'args' => []],
            expected: [['type' => 'i32', 'value' => '70']],
            line: 78,
        );
    }

    #[Depends('testAssertReturn14')]
    public function testModule15(): void
    {
        $this->runModuleCommand(
            filename: 'start.5.wasm',
            name: null,
            line: 80,
        );
    }

    #[Depends('testModule15')]
    public function testModule16(): void
    {
        $this->runModuleCommand(
            filename: 'start.6.wasm',
            name: null,
            line: 86,
        );
    }

    #[Depends('testModule16')]
    public function testModule17(): void
    {
        $this->runModuleCommand(
            filename: 'start.7.wasm',
            name: null,
            line: 92,
        );
    }

    #[Depends('testModule17')]
    public function testAssertUninstantiable18(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'start.8.wasm',
            text: 'unreachable',
            line: 98,
        );
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertUninstantiable18')]
    public function testAssertMalformed19(): void
    {
    }
}
