<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class UnreachableTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'unreachable.0.wasm',
            name: null,
            line: 3,
        );
    }

    public function testAssertTrap1(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'type-i32', 'args' => []],
            text: 'unreachable',
            line: 221,
        );
    }

    public function testAssertTrap2(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'type-i64', 'args' => []],
            text: 'unreachable',
            line: 222,
        );
    }

    public function testAssertTrap3(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'type-f32', 'args' => []],
            text: 'unreachable',
            line: 223,
        );
    }

    public function testAssertTrap4(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'type-f64', 'args' => []],
            text: 'unreachable',
            line: 224,
        );
    }

    public function testAssertTrap5(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-func-first', 'args' => []],
            text: 'unreachable',
            line: 226,
        );
    }

    public function testAssertTrap6(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-func-mid', 'args' => []],
            text: 'unreachable',
            line: 227,
        );
    }

    public function testAssertTrap7(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-func-last', 'args' => []],
            text: 'unreachable',
            line: 228,
        );
    }

    public function testAssertTrap8(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-func-value', 'args' => []],
            text: 'unreachable',
            line: 229,
        );
    }

    public function testAssertTrap9(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-block-first', 'args' => []],
            text: 'unreachable',
            line: 231,
        );
    }

    public function testAssertTrap10(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-block-mid', 'args' => []],
            text: 'unreachable',
            line: 232,
        );
    }

    public function testAssertTrap11(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-block-last', 'args' => []],
            text: 'unreachable',
            line: 233,
        );
    }

    public function testAssertTrap12(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-block-value', 'args' => []],
            text: 'unreachable',
            line: 234,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-block-broke', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 235,
        );
    }

    public function testAssertTrap14(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-first', 'args' => []],
            text: 'unreachable',
            line: 237,
        );
    }

    public function testAssertTrap15(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-mid', 'args' => []],
            text: 'unreachable',
            line: 238,
        );
    }

    public function testAssertTrap16(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-last', 'args' => []],
            text: 'unreachable',
            line: 239,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-broke', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 240,
        );
    }

    public function testAssertTrap18(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-br-value', 'args' => []],
            text: 'unreachable',
            line: 242,
        );
    }

    public function testAssertTrap19(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-cond', 'args' => []],
            text: 'unreachable',
            line: 244,
        );
    }

    public function testAssertTrap20(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-value', 'args' => []],
            text: 'unreachable',
            line: 245,
        );
    }

    public function testAssertTrap21(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-value-cond', 'args' => []],
            text: 'unreachable',
            line: 246,
        );
    }

    public function testAssertTrap22(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-index', 'args' => []],
            text: 'unreachable',
            line: 248,
        );
    }

    public function testAssertTrap23(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-value', 'args' => []],
            text: 'unreachable',
            line: 249,
        );
    }

    public function testAssertTrap24(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-value-2', 'args' => []],
            text: 'unreachable',
            line: 250,
        );
    }

    public function testAssertTrap25(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-value-index', 'args' => []],
            text: 'unreachable',
            line: 251,
        );
    }

    public function testAssertTrap26(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-value-and-index', 'args' => []],
            text: 'unreachable',
            line: 252,
        );
    }

    public function testAssertTrap27(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-return-value', 'args' => []],
            text: 'unreachable',
            line: 254,
        );
    }

    public function testAssertTrap28(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-cond', 'args' => []],
            text: 'unreachable',
            line: 256,
        );
    }

    public function testAssertTrap29(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-then', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '6']]],
            text: 'unreachable',
            line: 257,
        );
    }

    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-then', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 258,
        );
    }

    public function testAssertTrap31(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-else', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '6']]],
            text: 'unreachable',
            line: 259,
        );
    }

    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-else', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 260,
        );
    }

    public function testAssertTrap33(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-then-no-else', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '6']]],
            text: 'unreachable',
            line: 261,
        );
    }

    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-then-no-else', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 262,
        );
    }

    public function testAssertTrap35(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-first', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '6']]],
            text: 'unreachable',
            line: 264,
        );
    }

    public function testAssertTrap36(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-first', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '6']]],
            text: 'unreachable',
            line: 265,
        );
    }

    public function testAssertTrap37(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-second', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '6']]],
            text: 'unreachable',
            line: 266,
        );
    }

    public function testAssertTrap38(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-second', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '6']]],
            text: 'unreachable',
            line: 267,
        );
    }

    public function testAssertTrap39(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-cond', 'args' => []],
            text: 'unreachable',
            line: 268,
        );
    }

    public function testAssertTrap40(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-call-first', 'args' => []],
            text: 'unreachable',
            line: 270,
        );
    }

    public function testAssertTrap41(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-call-mid', 'args' => []],
            text: 'unreachable',
            line: 271,
        );
    }

    public function testAssertTrap42(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-call-last', 'args' => []],
            text: 'unreachable',
            line: 272,
        );
    }

    public function testAssertTrap43(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-func', 'args' => []],
            text: 'unreachable',
            line: 274,
        );
    }

    public function testAssertTrap44(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-first', 'args' => []],
            text: 'unreachable',
            line: 275,
        );
    }

    public function testAssertTrap45(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-mid', 'args' => []],
            text: 'unreachable',
            line: 276,
        );
    }

    public function testAssertTrap46(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-last', 'args' => []],
            text: 'unreachable',
            line: 277,
        );
    }

    public function testAssertTrap47(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.set-value', 'args' => []],
            text: 'unreachable',
            line: 279,
        );
    }

    public function testAssertTrap48(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.tee-value', 'args' => []],
            text: 'unreachable',
            line: 280,
        );
    }

    public function testAssertTrap49(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-global.set-value', 'args' => []],
            text: 'unreachable',
            line: 281,
        );
    }

    public function testAssertTrap50(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-load-address', 'args' => []],
            text: 'unreachable',
            line: 283,
        );
    }

    public function testAssertTrap51(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-loadN-address', 'args' => []],
            text: 'unreachable',
            line: 284,
        );
    }

    public function testAssertTrap52(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-address', 'args' => []],
            text: 'unreachable',
            line: 286,
        );
    }

    public function testAssertTrap53(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-value', 'args' => []],
            text: 'unreachable',
            line: 287,
        );
    }

    public function testAssertTrap54(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-storeN-address', 'args' => []],
            text: 'unreachable',
            line: 288,
        );
    }

    public function testAssertTrap55(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-storeN-value', 'args' => []],
            text: 'unreachable',
            line: 289,
        );
    }

    public function testAssertTrap56(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-unary-operand', 'args' => []],
            text: 'unreachable',
            line: 291,
        );
    }

    public function testAssertTrap57(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-left', 'args' => []],
            text: 'unreachable',
            line: 293,
        );
    }

    public function testAssertTrap58(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-right', 'args' => []],
            text: 'unreachable',
            line: 294,
        );
    }

    public function testAssertTrap59(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-test-operand', 'args' => []],
            text: 'unreachable',
            line: 296,
        );
    }

    public function testAssertTrap60(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-left', 'args' => []],
            text: 'unreachable',
            line: 298,
        );
    }

    public function testAssertTrap61(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-right', 'args' => []],
            text: 'unreachable',
            line: 299,
        );
    }

    public function testAssertTrap62(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-convert-operand', 'args' => []],
            text: 'unreachable',
            line: 301,
        );
    }

    public function testAssertTrap63(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-memory.grow-size', 'args' => []],
            text: 'unreachable',
            line: 303,
        );
    }
}
