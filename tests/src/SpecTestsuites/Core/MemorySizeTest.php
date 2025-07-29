<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class MemorySizeTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'memory_size.0.wasm',
            name: null,
            line: 1,
        );
    }

    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 7,
        );
    }

    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 8,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 9,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [],
            line: 10,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 11,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 12,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 13,
        );
    }

    public function testModule8(): void
    {
        $this->runModuleCommand(
            filename: 'memory_size.1.wasm',
            name: null,
            line: 15,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 21,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 22,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 23,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [],
            line: 24,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 25,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 26,
        );
    }

    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 27,
        );
    }

    public function testModule16(): void
    {
        $this->runModuleCommand(
            filename: 'memory_size.2.wasm',
            name: null,
            line: 29,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 35,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [],
            line: 36,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 37,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 38,
        );
    }

    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 39,
        );
    }

    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 40,
        );
    }

    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 41,
        );
    }

    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [],
            line: 42,
        );
    }

    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 43,
        );
    }

    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 44,
        );
    }

    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 45,
        );
    }

    public function testModule28(): void
    {
        $this->runModuleCommand(
            filename: 'memory_size.3.wasm',
            name: null,
            line: 47,
        );
    }

    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 53,
        );
    }

    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 54,
        );
    }

    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 55,
        );
    }

    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [],
            line: 56,
        );
    }

    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 57,
        );
    }

    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 58,
        );
    }

    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 59,
        );
    }

    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [],
            line: 60,
        );
    }

    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 61,
        );
    }

    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 62,
        );
    }

    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 63,
        );
    }

    public function testAssertInvalid40(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_size.4.wasm',
            text: 'type mismatch',
            line: 69,
        );
    }

    public function testAssertInvalid41(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_size.5.wasm',
            text: 'type mismatch',
            line: 78,
        );
    }
}
