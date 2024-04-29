<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class FuncPtrsTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'func_ptrs.0.wasm',
            name: null,
            line: 1,
        );
    }

    #[Depends('testModule0')]
    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'one', 'args' => []],
            expected: [['type' => 'i32', 'value' => '13']],
            line: 27,
        );
    }

    #[Depends('testAssertReturn1')]
    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'two', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '14']],
            line: 28,
        );
    }

    #[Depends('testAssertReturn2')]
    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'three', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '11']],
            line: 29,
        );
    }

    #[Depends('testAssertReturn3')]
    public function testAction4(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'four', 'args' => [['type' => 'i32', 'value' => '83']]],
            line: 30,
        );
    }

    #[Depends('testAction4')]
    public function testAssertInvalid5(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func_ptrs.1.wasm',
            text: 'unknown table',
            line: 32,
        );
    }

    #[Depends('testAssertInvalid5')]
    public function testAssertInvalid6(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func_ptrs.2.wasm',
            text: 'unknown table',
            line: 33,
        );
    }

    #[Depends('testAssertInvalid6')]
    public function testAssertInvalid7(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func_ptrs.3.wasm',
            text: 'type mismatch',
            line: 36,
        );
    }

    #[Depends('testAssertInvalid7')]
    public function testAssertInvalid8(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func_ptrs.4.wasm',
            text: 'constant expression required',
            line: 40,
        );
    }

    #[Depends('testAssertInvalid8')]
    public function testAssertInvalid9(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func_ptrs.5.wasm',
            text: 'constant expression required',
            line: 44,
        );
    }

    #[Depends('testAssertInvalid9')]
    public function testAssertInvalid10(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func_ptrs.6.wasm',
            text: 'unknown type',
            line: 48,
        );
    }

    #[Depends('testAssertInvalid10')]
    public function testAssertInvalid11(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func_ptrs.7.wasm',
            text: 'unknown type',
            line: 49,
        );
    }

    #[Depends('testAssertInvalid11')]
    public function testModule12(): void
    {
        $this->runModuleCommand(
            filename: 'func_ptrs.8.wasm',
            name: null,
            line: 51,
        );
    }

    #[Depends('testModule12')]
    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'callt', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 71,
        );
    }

    #[Depends('testAssertReturn13')]
    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'callt', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 72,
        );
    }

    #[Depends('testAssertReturn14')]
    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'callt', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 73,
        );
    }

    #[Depends('testAssertReturn15')]
    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'callt', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 74,
        );
    }

    #[Depends('testAssertReturn16')]
    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'callt', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 75,
        );
    }

    #[Depends('testAssertReturn17')]
    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'callt', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 76,
        );
    }

    #[Depends('testAssertReturn18')]
    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'callt', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 77,
        );
    }

    #[Depends('testAssertReturn19')]
    public function testAssertTrap20(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'callt', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'undefined element',
            line: 78,
        );
    }

    #[Depends('testAssertTrap20')]
    public function testAssertTrap21(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'callt', 'args' => [['type' => 'i32', 'value' => '100']]],
            text: 'undefined element',
            line: 79,
        );
    }

    #[Depends('testAssertTrap21')]
    public function testAssertTrap22(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'callt', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'undefined element',
            line: 80,
        );
    }

    #[Depends('testAssertTrap22')]
    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'callu', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 82,
        );
    }

    #[Depends('testAssertReturn23')]
    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'callu', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 83,
        );
    }

    #[Depends('testAssertReturn24')]
    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'callu', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 84,
        );
    }

    #[Depends('testAssertReturn25')]
    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'callu', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 85,
        );
    }

    #[Depends('testAssertReturn26')]
    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'callu', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 86,
        );
    }

    #[Depends('testAssertReturn27')]
    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'callu', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 87,
        );
    }

    #[Depends('testAssertReturn28')]
    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'callu', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 88,
        );
    }

    #[Depends('testAssertReturn29')]
    public function testAssertTrap30(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'callu', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'undefined element',
            line: 89,
        );
    }

    #[Depends('testAssertTrap30')]
    public function testAssertTrap31(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'callu', 'args' => [['type' => 'i32', 'value' => '100']]],
            text: 'undefined element',
            line: 90,
        );
    }

    #[Depends('testAssertTrap31')]
    public function testAssertTrap32(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'callu', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'undefined element',
            line: 91,
        );
    }

    #[Depends('testAssertTrap32')]
    public function testModule33(): void
    {
        $this->runModuleCommand(
            filename: 'func_ptrs.9.wasm',
            name: null,
            line: 93,
        );
    }

    #[Depends('testModule33')]
    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'callt', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 105,
        );
    }

    #[Depends('testAssertReturn34')]
    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'callt', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 106,
        );
    }
}
