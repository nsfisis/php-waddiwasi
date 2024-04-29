<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
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

    #[Depends('testModule0')]
    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 7,
        );
    }

    #[Depends('testAssertReturn1')]
    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 8,
        );
    }

    #[Depends('testAssertReturn2')]
    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 9,
        );
    }

    #[Depends('testAssertReturn3')]
    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [],
            line: 10,
        );
    }

    #[Depends('testAssertReturn4')]
    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 11,
        );
    }

    #[Depends('testAssertReturn5')]
    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 12,
        );
    }

    #[Depends('testAssertReturn6')]
    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 13,
        );
    }

    #[Depends('testAssertReturn7')]
    public function testModule8(): void
    {
        $this->runModuleCommand(
            filename: 'memory_size.1.wasm',
            name: null,
            line: 15,
        );
    }

    #[Depends('testModule8')]
    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 21,
        );
    }

    #[Depends('testAssertReturn9')]
    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 22,
        );
    }

    #[Depends('testAssertReturn10')]
    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 23,
        );
    }

    #[Depends('testAssertReturn11')]
    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [],
            line: 24,
        );
    }

    #[Depends('testAssertReturn12')]
    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 25,
        );
    }

    #[Depends('testAssertReturn13')]
    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 26,
        );
    }

    #[Depends('testAssertReturn14')]
    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 27,
        );
    }

    #[Depends('testAssertReturn15')]
    public function testModule16(): void
    {
        $this->runModuleCommand(
            filename: 'memory_size.2.wasm',
            name: null,
            line: 29,
        );
    }

    #[Depends('testModule16')]
    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 35,
        );
    }

    #[Depends('testAssertReturn17')]
    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [],
            line: 36,
        );
    }

    #[Depends('testAssertReturn18')]
    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 37,
        );
    }

    #[Depends('testAssertReturn19')]
    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 38,
        );
    }

    #[Depends('testAssertReturn20')]
    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 39,
        );
    }

    #[Depends('testAssertReturn21')]
    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 40,
        );
    }

    #[Depends('testAssertReturn22')]
    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 41,
        );
    }

    #[Depends('testAssertReturn23')]
    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [],
            line: 42,
        );
    }

    #[Depends('testAssertReturn24')]
    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 43,
        );
    }

    #[Depends('testAssertReturn25')]
    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 44,
        );
    }

    #[Depends('testAssertReturn26')]
    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 45,
        );
    }

    #[Depends('testAssertReturn27')]
    public function testModule28(): void
    {
        $this->runModuleCommand(
            filename: 'memory_size.3.wasm',
            name: null,
            line: 47,
        );
    }

    #[Depends('testModule28')]
    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 53,
        );
    }

    #[Depends('testAssertReturn29')]
    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 54,
        );
    }

    #[Depends('testAssertReturn30')]
    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 55,
        );
    }

    #[Depends('testAssertReturn31')]
    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [],
            line: 56,
        );
    }

    #[Depends('testAssertReturn32')]
    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 57,
        );
    }

    #[Depends('testAssertReturn33')]
    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 58,
        );
    }

    #[Depends('testAssertReturn34')]
    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 59,
        );
    }

    #[Depends('testAssertReturn35')]
    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [],
            line: 60,
        );
    }

    #[Depends('testAssertReturn36')]
    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 61,
        );
    }

    #[Depends('testAssertReturn37')]
    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 62,
        );
    }

    #[Depends('testAssertReturn38')]
    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 63,
        );
    }

    #[Depends('testAssertReturn39')]
    public function testAssertInvalid40(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_size.4.wasm',
            text: 'type mismatch',
            line: 69,
        );
    }

    #[Depends('testAssertInvalid40')]
    public function testAssertInvalid41(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_size.5.wasm',
            text: 'type mismatch',
            line: 78,
        );
    }
}
