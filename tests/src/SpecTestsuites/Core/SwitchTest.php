<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class SwitchTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'switch.0.wasm',
            name: null,
            line: 1,
        );
    }

    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'stmt', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 120,
        );
    }

    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'stmt', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 121,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'stmt', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '4294967294']],
            line: 122,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'stmt', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '4294967293']],
            line: 123,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'stmt', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '100']],
            line: 124,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'stmt', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '101']],
            line: 125,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'stmt', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '102']],
            line: 126,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'stmt', 'args' => [['type' => 'i32', 'value' => '7']]],
            expected: [['type' => 'i32', 'value' => '100']],
            line: 127,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'stmt', 'args' => [['type' => 'i32', 'value' => '4294967286']]],
            expected: [['type' => 'i32', 'value' => '102']],
            line: 128,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'expr', 'args' => [['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 130,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'expr', 'args' => [['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 131,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'expr', 'args' => [['type' => 'i64', 'value' => '2']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551614']],
            line: 132,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'expr', 'args' => [['type' => 'i64', 'value' => '3']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551613']],
            line: 133,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'expr', 'args' => [['type' => 'i64', 'value' => '6']]],
            expected: [['type' => 'i64', 'value' => '101']],
            line: 134,
        );
    }

    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'expr', 'args' => [['type' => 'i64', 'value' => '7']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551611']],
            line: 135,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'expr', 'args' => [['type' => 'i64', 'value' => '18446744073709551606']]],
            expected: [['type' => 'i64', 'value' => '100']],
            line: 136,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'arg', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '110']],
            line: 138,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'arg', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '12']],
            line: 139,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'arg', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 140,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'arg', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1116']],
            line: 141,
        );
    }

    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'arg', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '118']],
            line: 142,
        );
    }

    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'arg', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '20']],
            line: 143,
        );
    }

    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'arg', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '12']],
            line: 144,
        );
    }

    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'arg', 'args' => [['type' => 'i32', 'value' => '7']]],
            expected: [['type' => 'i32', 'value' => '1124']],
            line: 145,
        );
    }

    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'arg', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'i32', 'value' => '126']],
            line: 146,
        );
    }

    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'corner', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 148,
        );
    }

    public function testAssertInvalid27(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'switch.1.wasm',
            text: 'unknown label',
            line: 150,
        );
    }
}
