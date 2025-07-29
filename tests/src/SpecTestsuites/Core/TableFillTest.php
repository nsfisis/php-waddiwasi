<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class TableFillTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'table_fill.0.wasm',
            name: null,
            line: 1,
        );
    }

    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'externref', 'value' => 'null']],
            line: 17,
        );
    }

    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'externref', 'value' => 'null']],
            line: 18,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'externref', 'value' => 'null']],
            line: 19,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'externref', 'value' => 'null']],
            line: 20,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'externref', 'value' => 'null']],
            line: 21,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fill', 'args' => [['type' => 'i32', 'value' => '2'], ['type' => 'externref', 'value' => '1'], ['type' => 'i32', 'value' => '3']]],
            expected: [],
            line: 23,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'externref', 'value' => 'null']],
            line: 24,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'externref', 'value' => '1']],
            line: 25,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'externref', 'value' => '1']],
            line: 26,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'externref', 'value' => '1']],
            line: 27,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'externref', 'value' => 'null']],
            line: 28,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fill', 'args' => [['type' => 'i32', 'value' => '4'], ['type' => 'externref', 'value' => '2'], ['type' => 'i32', 'value' => '2']]],
            expected: [],
            line: 30,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'externref', 'value' => '1']],
            line: 31,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'externref', 'value' => '2']],
            line: 32,
        );
    }

    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'externref', 'value' => '2']],
            line: 33,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'externref', 'value' => 'null']],
            line: 34,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fill', 'args' => [['type' => 'i32', 'value' => '4'], ['type' => 'externref', 'value' => '3'], ['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 36,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'externref', 'value' => '1']],
            line: 37,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'externref', 'value' => '2']],
            line: 38,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'externref', 'value' => '2']],
            line: 39,
        );
    }

    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fill', 'args' => [['type' => 'i32', 'value' => '8'], ['type' => 'externref', 'value' => '4'], ['type' => 'i32', 'value' => '2']]],
            expected: [],
            line: 41,
        );
    }

    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '7']]],
            expected: [['type' => 'externref', 'value' => 'null']],
            line: 42,
        );
    }

    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'externref', 'value' => '4']],
            line: 43,
        );
    }

    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '9']]],
            expected: [['type' => 'externref', 'value' => '4']],
            line: 44,
        );
    }

    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fill-abbrev', 'args' => [['type' => 'i32', 'value' => '9'], ['type' => 'externref', 'value' => 'null'], ['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 46,
        );
    }

    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'externref', 'value' => '4']],
            line: 47,
        );
    }

    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '9']]],
            expected: [['type' => 'externref', 'value' => 'null']],
            line: 48,
        );
    }

    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fill', 'args' => [['type' => 'i32', 'value' => '10'], ['type' => 'externref', 'value' => '5'], ['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 50,
        );
    }

    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '9']]],
            expected: [['type' => 'externref', 'value' => 'null']],
            line: 51,
        );
    }

    public function testAssertTrap30(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'fill', 'args' => [['type' => 'i32', 'value' => '8'], ['type' => 'externref', 'value' => '6'], ['type' => 'i32', 'value' => '3']]],
            text: 'out of bounds table access',
            line: 54,
        );
    }

    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '7']]],
            expected: [['type' => 'externref', 'value' => 'null']],
            line: 57,
        );
    }

    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'externref', 'value' => '4']],
            line: 58,
        );
    }

    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '9']]],
            expected: [['type' => 'externref', 'value' => 'null']],
            line: 59,
        );
    }

    public function testAssertTrap34(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'fill', 'args' => [['type' => 'i32', 'value' => '11'], ['type' => 'externref', 'value' => 'null'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds table access',
            line: 62,
        );
    }

    public function testAssertTrap35(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'fill', 'args' => [['type' => 'i32', 'value' => '11'], ['type' => 'externref', 'value' => 'null'], ['type' => 'i32', 'value' => '10']]],
            text: 'out of bounds table access',
            line: 67,
        );
    }

    public function testAssertInvalid36(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_fill.1.wasm',
            text: 'type mismatch',
            line: 75,
        );
    }

    public function testAssertInvalid37(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_fill.2.wasm',
            text: 'type mismatch',
            line: 84,
        );
    }

    public function testAssertInvalid38(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_fill.3.wasm',
            text: 'type mismatch',
            line: 93,
        );
    }

    public function testAssertInvalid39(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_fill.4.wasm',
            text: 'type mismatch',
            line: 102,
        );
    }

    public function testAssertInvalid40(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_fill.5.wasm',
            text: 'type mismatch',
            line: 111,
        );
    }

    public function testAssertInvalid41(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_fill.6.wasm',
            text: 'type mismatch',
            line: 120,
        );
    }

    public function testAssertInvalid42(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_fill.7.wasm',
            text: 'type mismatch',
            line: 129,
        );
    }

    public function testAssertInvalid43(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_fill.8.wasm',
            text: 'type mismatch',
            line: 139,
        );
    }

    public function testAssertInvalid44(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_fill.9.wasm',
            text: 'type mismatch',
            line: 150,
        );
    }
}
