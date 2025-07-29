<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class TableSizeTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'table_size.0.wasm',
            name: null,
            line: 1,
        );
    }

    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size-t0', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 26,
        );
    }

    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow-t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 27,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size-t0', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 28,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow-t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [],
            line: 29,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size-t0', 'args' => []],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 30,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow-t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 31,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size-t0', 'args' => []],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 32,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size-t1', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 34,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow-t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 35,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size-t1', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 36,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow-t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [],
            line: 37,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size-t1', 'args' => []],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 38,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow-t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 39,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size-t1', 'args' => []],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 40,
        );
    }

    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size-t2', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 42,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow-t2', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [],
            line: 43,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size-t2', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 44,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow-t2', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 45,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size-t2', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 46,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow-t2', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 47,
        );
    }

    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size-t2', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 48,
        );
    }

    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow-t2', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [],
            line: 49,
        );
    }

    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size-t2', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 50,
        );
    }

    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow-t2', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 51,
        );
    }

    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size-t2', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 52,
        );
    }

    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size-t3', 'args' => []],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 54,
        );
    }

    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow-t3', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 55,
        );
    }

    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size-t3', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 56,
        );
    }

    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow-t3', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [],
            line: 57,
        );
    }

    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size-t3', 'args' => []],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 58,
        );
    }

    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow-t3', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 59,
        );
    }

    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size-t3', 'args' => []],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 60,
        );
    }

    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow-t3', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [],
            line: 61,
        );
    }

    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size-t3', 'args' => []],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 62,
        );
    }

    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow-t3', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 63,
        );
    }

    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size-t3', 'args' => []],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 64,
        );
    }

    public function testAssertInvalid37(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_size.1.wasm',
            text: 'type mismatch',
            line: 70,
        );
    }

    public function testAssertInvalid38(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_size.2.wasm',
            text: 'type mismatch',
            line: 79,
        );
    }
}
