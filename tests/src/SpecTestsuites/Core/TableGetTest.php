<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class TableGetTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'table_get.0.wasm',
            name: null,
            line: 1,
        );
    }

    public function testAction1(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'init', 'args' => [['type' => 'externref', 'value' => '1']]],
            line: 24,
        );
    }

    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-externref', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'externref', 'value' => 'null']],
            line: 26,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-externref', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'externref', 'value' => '1']],
            line: 27,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-funcref', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'funcref', 'value' => 'null']],
            line: 29,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'is_null-funcref', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 30,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'is_null-funcref', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 31,
        );
    }

    public function testAssertTrap7(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'get-externref', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'out of bounds table access',
            line: 33,
        );
    }

    public function testAssertTrap8(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'get-funcref', 'args' => [['type' => 'i32', 'value' => '3']]],
            text: 'out of bounds table access',
            line: 34,
        );
    }

    public function testAssertTrap9(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'get-externref', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds table access',
            line: 35,
        );
    }

    public function testAssertTrap10(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'get-funcref', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds table access',
            line: 36,
        );
    }

    public function testAssertInvalid11(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_get.1.wasm',
            text: 'type mismatch',
            line: 42,
        );
    }

    public function testAssertInvalid12(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_get.2.wasm',
            text: 'type mismatch',
            line: 51,
        );
    }

    public function testAssertInvalid13(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_get.3.wasm',
            text: 'type mismatch',
            line: 61,
        );
    }

    public function testAssertInvalid14(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_get.4.wasm',
            text: 'type mismatch',
            line: 70,
        );
    }

    public function testAssertInvalid15(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_get.5.wasm',
            text: 'type mismatch',
            line: 80,
        );
    }
}
