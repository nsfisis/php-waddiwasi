<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class TableGrowTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'table_grow.0.wasm',
            name: null,
            line: 1,
        );
    }

    #[Depends('testModule0')]
    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 16,
        );
    }

    #[Depends('testAssertReturn1')]
    public function testAssertTrap2(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'set', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'externref', 'value' => '2']]],
            text: 'out of bounds table access',
            line: 17,
        );
    }

    #[Depends('testAssertTrap2')]
    public function testAssertTrap3(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds table access',
            line: 18,
        );
    }

    #[Depends('testAssertTrap3')]
    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'externref', 'value' => 'null']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 20,
        );
    }

    #[Depends('testAssertReturn4')]
    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 21,
        );
    }

    #[Depends('testAssertReturn5')]
    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'externref', 'value' => 'null']],
            line: 22,
        );
    }

    #[Depends('testAssertReturn6')]
    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'set', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'externref', 'value' => '2']]],
            expected: [],
            line: 23,
        );
    }

    #[Depends('testAssertReturn7')]
    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'externref', 'value' => '2']],
            line: 24,
        );
    }

    #[Depends('testAssertReturn8')]
    public function testAssertTrap9(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'set', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'externref', 'value' => '2']]],
            text: 'out of bounds table access',
            line: 25,
        );
    }

    #[Depends('testAssertTrap9')]
    public function testAssertTrap10(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'out of bounds table access',
            line: 26,
        );
    }

    #[Depends('testAssertTrap10')]
    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow-abbrev', 'args' => [['type' => 'i32', 'value' => '4'], ['type' => 'externref', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 28,
        );
    }

    #[Depends('testAssertReturn11')]
    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 29,
        );
    }

    #[Depends('testAssertReturn12')]
    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'externref', 'value' => '2']],
            line: 30,
        );
    }

    #[Depends('testAssertReturn13')]
    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'set', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'externref', 'value' => '2']]],
            expected: [],
            line: 31,
        );
    }

    #[Depends('testAssertReturn14')]
    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'externref', 'value' => '2']],
            line: 32,
        );
    }

    #[Depends('testAssertReturn15')]
    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'externref', 'value' => '3']],
            line: 33,
        );
    }

    #[Depends('testAssertReturn16')]
    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'externref', 'value' => '3']],
            line: 34,
        );
    }

    #[Depends('testAssertReturn17')]
    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'set', 'args' => [['type' => 'i32', 'value' => '4'], ['type' => 'externref', 'value' => '4']]],
            expected: [],
            line: 35,
        );
    }

    #[Depends('testAssertReturn18')]
    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'externref', 'value' => '4']],
            line: 36,
        );
    }

    #[Depends('testAssertReturn19')]
    public function testAssertTrap20(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'set', 'args' => [['type' => 'i32', 'value' => '5'], ['type' => 'externref', 'value' => '2']]],
            text: 'out of bounds table access',
            line: 37,
        );
    }

    #[Depends('testAssertTrap20')]
    public function testAssertTrap21(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '5']]],
            text: 'out of bounds table access',
            line: 38,
        );
    }

    #[Depends('testAssertTrap21')]
    public function testModule22(): void
    {
        $this->runModuleCommand(
            filename: 'table_grow.1.wasm',
            name: null,
            line: 42,
        );
    }

    #[Depends('testModule22')]
    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 50,
        );
    }

    #[Depends('testAssertReturn23')]
    public function testModule24(): void
    {
        $this->runModuleCommand(
            filename: 'table_grow.2.wasm',
            name: null,
            line: 53,
        );
    }

    #[Depends('testModule24')]
    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 60,
        );
    }

    #[Depends('testAssertReturn25')]
    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 61,
        );
    }

    #[Depends('testAssertReturn26')]
    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 62,
        );
    }

    #[Depends('testAssertReturn27')]
    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 63,
        );
    }

    #[Depends('testAssertReturn28')]
    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '800']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 64,
        );
    }

    #[Depends('testAssertReturn29')]
    public function testModule30(): void
    {
        $this->runModuleCommand(
            filename: 'table_grow.3.wasm',
            name: null,
            line: 67,
        );
    }

    #[Depends('testModule30')]
    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 74,
        );
    }

    #[Depends('testAssertReturn31')]
    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 75,
        );
    }

    #[Depends('testAssertReturn32')]
    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 76,
        );
    }

    #[Depends('testAssertReturn33')]
    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 77,
        );
    }

    #[Depends('testAssertReturn34')]
    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 78,
        );
    }

    #[Depends('testAssertReturn35')]
    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 79,
        );
    }

    #[Depends('testAssertReturn36')]
    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 80,
        );
    }

    #[Depends('testAssertReturn37')]
    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '65536']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 81,
        );
    }

    #[Depends('testAssertReturn38')]
    public function testModule39(): void
    {
        $this->runModuleCommand(
            filename: 'table_grow.4.wasm',
            name: null,
            line: 84,
        );
    }

    #[Depends('testModule39')]
    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check-table-null', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '9']]],
            expected: [['type' => 'funcref', 'value' => 'null']],
            line: 106,
        );
    }

    #[Depends('testAssertReturn40')]
    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 107,
        );
    }

    #[Depends('testAssertReturn41')]
    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check-table-null', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '19']]],
            expected: [['type' => 'funcref', 'value' => 'null']],
            line: 108,
        );
    }

    #[Depends('testAssertReturn42')]
    public function testAssertInvalid43(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_grow.5.wasm',
            text: 'type mismatch',
            line: 114,
        );
    }

    #[Depends('testAssertInvalid43')]
    public function testAssertInvalid44(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_grow.6.wasm',
            text: 'type mismatch',
            line: 123,
        );
    }

    #[Depends('testAssertInvalid44')]
    public function testAssertInvalid45(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_grow.7.wasm',
            text: 'type mismatch',
            line: 132,
        );
    }

    #[Depends('testAssertInvalid45')]
    public function testAssertInvalid46(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_grow.8.wasm',
            text: 'type mismatch',
            line: 141,
        );
    }

    #[Depends('testAssertInvalid46')]
    public function testAssertInvalid47(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_grow.9.wasm',
            text: 'type mismatch',
            line: 150,
        );
    }

    #[Depends('testAssertInvalid47')]
    public function testAssertInvalid48(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_grow.10.wasm',
            text: 'type mismatch',
            line: 160,
        );
    }

    #[Depends('testAssertInvalid48')]
    public function testAssertInvalid49(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_grow.11.wasm',
            text: 'type mismatch',
            line: 169,
        );
    }
}
