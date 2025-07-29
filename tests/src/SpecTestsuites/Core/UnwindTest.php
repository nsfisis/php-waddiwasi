<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class UnwindTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'unwind.0.wasm',
            name: null,
            line: 3,
        );
    }

    public function testAssertTrap1(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'func-unwind-by-unreachable', 'args' => []],
            text: 'unreachable',
            line: 212,
        );
    }

    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'func-unwind-by-br', 'args' => []],
            expected: [],
            line: 213,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'func-unwind-by-br-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 214,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'func-unwind-by-br_if', 'args' => []],
            expected: [],
            line: 215,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'func-unwind-by-br_if-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 216,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'func-unwind-by-br_table', 'args' => []],
            expected: [],
            line: 217,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'func-unwind-by-br_table-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 218,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'func-unwind-by-return', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 219,
        );
    }

    public function testAssertTrap9(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'block-unwind-by-unreachable', 'args' => []],
            text: 'unreachable',
            line: 221,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'block-unwind-by-br', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 222,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'block-unwind-by-br-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 223,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'block-unwind-by-br_if', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 224,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'block-unwind-by-br_if-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 225,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'block-unwind-by-br_table', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 226,
        );
    }

    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'block-unwind-by-br_table-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 227,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'block-unwind-by-return', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 228,
        );
    }

    public function testAssertTrap17(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'block-nested-unwind-by-unreachable', 'args' => []],
            text: 'unreachable',
            line: 230,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'block-nested-unwind-by-br', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 231,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'block-nested-unwind-by-br-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 232,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'block-nested-unwind-by-br_if', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 233,
        );
    }

    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'block-nested-unwind-by-br_if-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 234,
        );
    }

    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'block-nested-unwind-by-br_table', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 235,
        );
    }

    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'block-nested-unwind-by-br_table-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 236,
        );
    }

    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'block-nested-unwind-by-return', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 237,
        );
    }

    public function testAssertTrap25(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'unary-after-unreachable', 'args' => []],
            text: 'unreachable',
            line: 239,
        );
    }

    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'unary-after-br', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 240,
        );
    }

    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'unary-after-br_if', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 241,
        );
    }

    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'unary-after-br_table', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 242,
        );
    }

    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'unary-after-return', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 243,
        );
    }

    public function testAssertTrap30(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'binary-after-unreachable', 'args' => []],
            text: 'unreachable',
            line: 245,
        );
    }

    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'binary-after-br', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 246,
        );
    }

    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'binary-after-br_if', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 247,
        );
    }

    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'binary-after-br_table', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 248,
        );
    }

    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'binary-after-return', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 249,
        );
    }

    public function testAssertTrap35(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'select-after-unreachable', 'args' => []],
            text: 'unreachable',
            line: 251,
        );
    }

    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-after-br', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 252,
        );
    }

    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-after-br_if', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 253,
        );
    }

    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-after-br_table', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 254,
        );
    }

    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-after-return', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 255,
        );
    }

    public function testAssertTrap40(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'block-value-after-unreachable', 'args' => []],
            text: 'unreachable',
            line: 257,
        );
    }

    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'block-value-after-br', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 258,
        );
    }

    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'block-value-after-br_if', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 259,
        );
    }

    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'block-value-after-br_table', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 260,
        );
    }

    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'block-value-after-return', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 261,
        );
    }

    public function testAssertTrap45(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'loop-value-after-unreachable', 'args' => []],
            text: 'unreachable',
            line: 263,
        );
    }

    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'loop-value-after-br', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 264,
        );
    }

    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'loop-value-after-br_if', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 265,
        );
    }

    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'loop-value-after-br_table', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 266,
        );
    }

    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'loop-value-after-return', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 267,
        );
    }
}
