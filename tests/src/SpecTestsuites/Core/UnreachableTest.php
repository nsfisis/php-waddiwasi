<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
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

    #[Depends('testModule0')]
    public function testAssertTrap1(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'type-i32', 'args' => []],
            text: 'unreachable',
            line: 221,
        );
    }

    #[Depends('testAssertTrap1')]
    public function testAssertTrap2(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'type-i64', 'args' => []],
            text: 'unreachable',
            line: 222,
        );
    }

    #[Depends('testAssertTrap2')]
    public function testAssertTrap3(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'type-f32', 'args' => []],
            text: 'unreachable',
            line: 223,
        );
    }

    #[Depends('testAssertTrap3')]
    public function testAssertTrap4(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'type-f64', 'args' => []],
            text: 'unreachable',
            line: 224,
        );
    }

    #[Depends('testAssertTrap4')]
    public function testAssertTrap5(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-func-first', 'args' => []],
            text: 'unreachable',
            line: 226,
        );
    }

    #[Depends('testAssertTrap5')]
    public function testAssertTrap6(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-func-mid', 'args' => []],
            text: 'unreachable',
            line: 227,
        );
    }

    #[Depends('testAssertTrap6')]
    public function testAssertTrap7(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-func-last', 'args' => []],
            text: 'unreachable',
            line: 228,
        );
    }

    #[Depends('testAssertTrap7')]
    public function testAssertTrap8(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-func-value', 'args' => []],
            text: 'unreachable',
            line: 229,
        );
    }

    #[Depends('testAssertTrap8')]
    public function testAssertTrap9(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-block-first', 'args' => []],
            text: 'unreachable',
            line: 231,
        );
    }

    #[Depends('testAssertTrap9')]
    public function testAssertTrap10(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-block-mid', 'args' => []],
            text: 'unreachable',
            line: 232,
        );
    }

    #[Depends('testAssertTrap10')]
    public function testAssertTrap11(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-block-last', 'args' => []],
            text: 'unreachable',
            line: 233,
        );
    }

    #[Depends('testAssertTrap11')]
    public function testAssertTrap12(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-block-value', 'args' => []],
            text: 'unreachable',
            line: 234,
        );
    }

    #[Depends('testAssertTrap12')]
    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-block-broke', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 235,
        );
    }

    #[Depends('testAssertReturn13')]
    public function testAssertTrap14(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-first', 'args' => []],
            text: 'unreachable',
            line: 237,
        );
    }

    #[Depends('testAssertTrap14')]
    public function testAssertTrap15(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-mid', 'args' => []],
            text: 'unreachable',
            line: 238,
        );
    }

    #[Depends('testAssertTrap15')]
    public function testAssertTrap16(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-last', 'args' => []],
            text: 'unreachable',
            line: 239,
        );
    }

    #[Depends('testAssertTrap16')]
    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-broke', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 240,
        );
    }

    #[Depends('testAssertReturn17')]
    public function testAssertTrap18(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-br-value', 'args' => []],
            text: 'unreachable',
            line: 242,
        );
    }

    #[Depends('testAssertTrap18')]
    public function testAssertTrap19(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-cond', 'args' => []],
            text: 'unreachable',
            line: 244,
        );
    }

    #[Depends('testAssertTrap19')]
    public function testAssertTrap20(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-value', 'args' => []],
            text: 'unreachable',
            line: 245,
        );
    }

    #[Depends('testAssertTrap20')]
    public function testAssertTrap21(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-value-cond', 'args' => []],
            text: 'unreachable',
            line: 246,
        );
    }

    #[Depends('testAssertTrap21')]
    public function testAssertTrap22(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-index', 'args' => []],
            text: 'unreachable',
            line: 248,
        );
    }

    #[Depends('testAssertTrap22')]
    public function testAssertTrap23(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-value', 'args' => []],
            text: 'unreachable',
            line: 249,
        );
    }

    #[Depends('testAssertTrap23')]
    public function testAssertTrap24(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-value-2', 'args' => []],
            text: 'unreachable',
            line: 250,
        );
    }

    #[Depends('testAssertTrap24')]
    public function testAssertTrap25(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-value-index', 'args' => []],
            text: 'unreachable',
            line: 251,
        );
    }

    #[Depends('testAssertTrap25')]
    public function testAssertTrap26(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-value-and-index', 'args' => []],
            text: 'unreachable',
            line: 252,
        );
    }

    #[Depends('testAssertTrap26')]
    public function testAssertTrap27(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-return-value', 'args' => []],
            text: 'unreachable',
            line: 254,
        );
    }

    #[Depends('testAssertTrap27')]
    public function testAssertTrap28(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-cond', 'args' => []],
            text: 'unreachable',
            line: 256,
        );
    }

    #[Depends('testAssertTrap28')]
    public function testAssertTrap29(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-then', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '6']]],
            text: 'unreachable',
            line: 257,
        );
    }

    #[Depends('testAssertTrap29')]
    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-then', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 258,
        );
    }

    #[Depends('testAssertReturn30')]
    public function testAssertTrap31(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-else', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '6']]],
            text: 'unreachable',
            line: 259,
        );
    }

    #[Depends('testAssertTrap31')]
    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-else', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 260,
        );
    }

    #[Depends('testAssertReturn32')]
    public function testAssertTrap33(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-then-no-else', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '6']]],
            text: 'unreachable',
            line: 261,
        );
    }

    #[Depends('testAssertTrap33')]
    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-then-no-else', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 262,
        );
    }

    #[Depends('testAssertReturn34')]
    public function testAssertTrap35(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-first', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '6']]],
            text: 'unreachable',
            line: 264,
        );
    }

    #[Depends('testAssertTrap35')]
    public function testAssertTrap36(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-first', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '6']]],
            text: 'unreachable',
            line: 265,
        );
    }

    #[Depends('testAssertTrap36')]
    public function testAssertTrap37(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-second', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '6']]],
            text: 'unreachable',
            line: 266,
        );
    }

    #[Depends('testAssertTrap37')]
    public function testAssertTrap38(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-second', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '6']]],
            text: 'unreachable',
            line: 267,
        );
    }

    #[Depends('testAssertTrap38')]
    public function testAssertTrap39(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-cond', 'args' => []],
            text: 'unreachable',
            line: 268,
        );
    }

    #[Depends('testAssertTrap39')]
    public function testAssertTrap40(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-call-first', 'args' => []],
            text: 'unreachable',
            line: 270,
        );
    }

    #[Depends('testAssertTrap40')]
    public function testAssertTrap41(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-call-mid', 'args' => []],
            text: 'unreachable',
            line: 271,
        );
    }

    #[Depends('testAssertTrap41')]
    public function testAssertTrap42(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-call-last', 'args' => []],
            text: 'unreachable',
            line: 272,
        );
    }

    #[Depends('testAssertTrap42')]
    public function testAssertTrap43(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-func', 'args' => []],
            text: 'unreachable',
            line: 274,
        );
    }

    #[Depends('testAssertTrap43')]
    public function testAssertTrap44(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-first', 'args' => []],
            text: 'unreachable',
            line: 275,
        );
    }

    #[Depends('testAssertTrap44')]
    public function testAssertTrap45(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-mid', 'args' => []],
            text: 'unreachable',
            line: 276,
        );
    }

    #[Depends('testAssertTrap45')]
    public function testAssertTrap46(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-last', 'args' => []],
            text: 'unreachable',
            line: 277,
        );
    }

    #[Depends('testAssertTrap46')]
    public function testAssertTrap47(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.set-value', 'args' => []],
            text: 'unreachable',
            line: 279,
        );
    }

    #[Depends('testAssertTrap47')]
    public function testAssertTrap48(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.tee-value', 'args' => []],
            text: 'unreachable',
            line: 280,
        );
    }

    #[Depends('testAssertTrap48')]
    public function testAssertTrap49(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-global.set-value', 'args' => []],
            text: 'unreachable',
            line: 281,
        );
    }

    #[Depends('testAssertTrap49')]
    public function testAssertTrap50(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-load-address', 'args' => []],
            text: 'unreachable',
            line: 283,
        );
    }

    #[Depends('testAssertTrap50')]
    public function testAssertTrap51(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-loadN-address', 'args' => []],
            text: 'unreachable',
            line: 284,
        );
    }

    #[Depends('testAssertTrap51')]
    public function testAssertTrap52(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-address', 'args' => []],
            text: 'unreachable',
            line: 286,
        );
    }

    #[Depends('testAssertTrap52')]
    public function testAssertTrap53(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-value', 'args' => []],
            text: 'unreachable',
            line: 287,
        );
    }

    #[Depends('testAssertTrap53')]
    public function testAssertTrap54(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-storeN-address', 'args' => []],
            text: 'unreachable',
            line: 288,
        );
    }

    #[Depends('testAssertTrap54')]
    public function testAssertTrap55(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-storeN-value', 'args' => []],
            text: 'unreachable',
            line: 289,
        );
    }

    #[Depends('testAssertTrap55')]
    public function testAssertTrap56(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-unary-operand', 'args' => []],
            text: 'unreachable',
            line: 291,
        );
    }

    #[Depends('testAssertTrap56')]
    public function testAssertTrap57(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-left', 'args' => []],
            text: 'unreachable',
            line: 293,
        );
    }

    #[Depends('testAssertTrap57')]
    public function testAssertTrap58(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-right', 'args' => []],
            text: 'unreachable',
            line: 294,
        );
    }

    #[Depends('testAssertTrap58')]
    public function testAssertTrap59(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-test-operand', 'args' => []],
            text: 'unreachable',
            line: 296,
        );
    }

    #[Depends('testAssertTrap59')]
    public function testAssertTrap60(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-left', 'args' => []],
            text: 'unreachable',
            line: 298,
        );
    }

    #[Depends('testAssertTrap60')]
    public function testAssertTrap61(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-right', 'args' => []],
            text: 'unreachable',
            line: 299,
        );
    }

    #[Depends('testAssertTrap61')]
    public function testAssertTrap62(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-convert-operand', 'args' => []],
            text: 'unreachable',
            line: 301,
        );
    }

    #[Depends('testAssertTrap62')]
    public function testAssertTrap63(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-memory.grow-size', 'args' => []],
            text: 'unreachable',
            line: 303,
        );
    }
}
