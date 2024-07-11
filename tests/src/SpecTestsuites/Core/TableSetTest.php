<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class TableSetTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'table_set.0.wasm',
            name: null,
            line: 1,
        );
    }

    #[Depends('testModule0')]
    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-externref', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'externref', 'value' => 'null']],
            line: 29,
        );
    }

    #[Depends('testAssertReturn1')]
    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'set-externref', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'externref', 'value' => '1']]],
            expected: [],
            line: 30,
        );
    }

    #[Depends('testAssertReturn2')]
    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-externref', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'externref', 'value' => '1']],
            line: 31,
        );
    }

    #[Depends('testAssertReturn3')]
    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'set-externref', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'externref', 'value' => 'null']]],
            expected: [],
            line: 32,
        );
    }

    #[Depends('testAssertReturn4')]
    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-externref', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'externref', 'value' => 'null']],
            line: 33,
        );
    }

    #[Depends('testAssertReturn5')]
    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-funcref', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'funcref', 'value' => 'null']],
            line: 35,
        );
    }

    #[Depends('testAssertReturn6')]
    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'set-funcref-from', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 36,
        );
    }

    #[Depends('testAssertReturn7')]
    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'is_null-funcref', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 37,
        );
    }

    #[Depends('testAssertReturn8')]
    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'set-funcref', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'funcref', 'value' => 'null']]],
            expected: [],
            line: 38,
        );
    }

    #[Depends('testAssertReturn9')]
    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-funcref', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'funcref', 'value' => 'null']],
            line: 39,
        );
    }

    #[Depends('testAssertReturn10')]
    public function testAssertTrap11(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'set-externref', 'args' => [['type' => 'i32', 'value' => '2'], ['type' => 'externref', 'value' => 'null']]],
            text: 'out of bounds table access',
            line: 41,
        );
    }

    #[Depends('testAssertTrap11')]
    public function testAssertTrap12(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'set-funcref', 'args' => [['type' => 'i32', 'value' => '3'], ['type' => 'funcref', 'value' => 'null']]],
            text: 'out of bounds table access',
            line: 42,
        );
    }

    #[Depends('testAssertTrap12')]
    public function testAssertTrap13(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'set-externref', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'externref', 'value' => 'null']]],
            text: 'out of bounds table access',
            line: 43,
        );
    }

    #[Depends('testAssertTrap13')]
    public function testAssertTrap14(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'set-funcref', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'funcref', 'value' => 'null']]],
            text: 'out of bounds table access',
            line: 44,
        );
    }

    #[Depends('testAssertTrap14')]
    public function testAssertTrap15(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'set-externref', 'args' => [['type' => 'i32', 'value' => '2'], ['type' => 'externref', 'value' => '0']]],
            text: 'out of bounds table access',
            line: 46,
        );
    }

    #[Depends('testAssertTrap15')]
    public function testAssertTrap16(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'set-funcref-from', 'args' => [['type' => 'i32', 'value' => '3'], ['type' => 'i32', 'value' => '1']]],
            text: 'out of bounds table access',
            line: 47,
        );
    }

    #[Depends('testAssertTrap16')]
    public function testAssertTrap17(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'set-externref', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'externref', 'value' => '0']]],
            text: 'out of bounds table access',
            line: 48,
        );
    }

    #[Depends('testAssertTrap17')]
    public function testAssertTrap18(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'set-funcref-from', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '1']]],
            text: 'out of bounds table access',
            line: 49,
        );
    }

    #[Depends('testAssertTrap18')]
    public function testAssertInvalid19(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_set.1.wasm',
            text: 'type mismatch',
            line: 55,
        );
    }

    #[Depends('testAssertInvalid19')]
    public function testAssertInvalid20(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_set.2.wasm',
            text: 'type mismatch',
            line: 64,
        );
    }

    #[Depends('testAssertInvalid20')]
    public function testAssertInvalid21(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_set.3.wasm',
            text: 'type mismatch',
            line: 73,
        );
    }

    #[Depends('testAssertInvalid21')]
    public function testAssertInvalid22(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_set.4.wasm',
            text: 'type mismatch',
            line: 82,
        );
    }

    #[Depends('testAssertInvalid22')]
    public function testAssertInvalid23(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_set.5.wasm',
            text: 'type mismatch',
            line: 91,
        );
    }

    #[Depends('testAssertInvalid23')]
    public function testAssertInvalid24(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_set.6.wasm',
            text: 'type mismatch',
            line: 101,
        );
    }

    #[Depends('testAssertInvalid24')]
    public function testAssertInvalid25(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_set.7.wasm',
            text: 'type mismatch',
            line: 112,
        );
    }
}
