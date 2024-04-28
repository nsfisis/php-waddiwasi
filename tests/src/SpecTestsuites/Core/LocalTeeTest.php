<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;

final class LocalTeeTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'local_tee.0.wasm',
            name: null,
            line: 3,
        );
    }

    #[Depends('testModule0')]
    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'type-local-i32', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 280,
        );
    }

    #[Depends('testAssertReturn1')]
    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'type-local-i64', 'args' => []],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 281,
        );
    }

    #[Depends('testAssertReturn2')]
    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'type-local-f32', 'args' => []],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 282,
        );
    }

    #[Depends('testAssertReturn3')]
    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'type-local-f64', 'args' => []],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 283,
        );
    }

    #[Depends('testAssertReturn4')]
    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'type-param-i32', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 285,
        );
    }

    #[Depends('testAssertReturn5')]
    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'type-param-i64', 'args' => [['type' => 'i64', 'value' => '3']]],
            expected: [['type' => 'i64', 'value' => '11']],
            line: 286,
        );
    }

    #[Depends('testAssertReturn6')]
    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'type-param-f32', 'args' => [['type' => 'f32', 'value' => '1082969293']]],
            expected: [['type' => 'f32', 'value' => '1093769626']],
            line: 287,
        );
    }

    #[Depends('testAssertReturn7')]
    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'type-param-f64', 'args' => [['type' => 'f64', 'value' => '4617878467915022336']]],
            expected: [['type' => 'f64', 'value' => '4623057607486498406']],
            line: 288,
        );
    }

    #[Depends('testAssertReturn8')]
    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-block-first', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 290,
        );
    }

    #[Depends('testAssertReturn9')]
    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-block-mid', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 291,
        );
    }

    #[Depends('testAssertReturn10')]
    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-block-last', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 292,
        );
    }

    #[Depends('testAssertReturn11')]
    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-loop-first', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 294,
        );
    }

    #[Depends('testAssertReturn12')]
    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-loop-mid', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 295,
        );
    }

    #[Depends('testAssertReturn13')]
    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-loop-last', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 296,
        );
    }

    #[Depends('testAssertReturn14')]
    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 298,
        );
    }

    #[Depends('testAssertReturn15')]
    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br_if-cond', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 300,
        );
    }

    #[Depends('testAssertReturn16')]
    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br_if-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 301,
        );
    }

    #[Depends('testAssertReturn17')]
    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br_if-value-cond', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 302,
        );
    }

    #[Depends('testAssertReturn18')]
    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br_table-index', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 304,
        );
    }

    #[Depends('testAssertReturn19')]
    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br_table-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 305,
        );
    }

    #[Depends('testAssertReturn20')]
    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br_table-value-index', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 306,
        );
    }

    #[Depends('testAssertReturn21')]
    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-return-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 308,
        );
    }

    #[Depends('testAssertReturn22')]
    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-if-cond', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 310,
        );
    }

    #[Depends('testAssertReturn23')]
    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-if-then', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 311,
        );
    }

    #[Depends('testAssertReturn24')]
    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-if-else', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 312,
        );
    }

    #[Depends('testAssertReturn25')]
    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-select-first', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 314,
        );
    }

    #[Depends('testAssertReturn26')]
    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-select-second', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 315,
        );
    }

    #[Depends('testAssertReturn27')]
    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-select-cond', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 316,
        );
    }

    #[Depends('testAssertReturn28')]
    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-call-first', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 318,
        );
    }

    #[Depends('testAssertReturn29')]
    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-call-mid', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 319,
        );
    }

    #[Depends('testAssertReturn30')]
    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-call-last', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 320,
        );
    }

    #[Depends('testAssertReturn31')]
    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-first', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 322,
        );
    }

    #[Depends('testAssertReturn32')]
    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-mid', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 323,
        );
    }

    #[Depends('testAssertReturn33')]
    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-last', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 324,
        );
    }

    #[Depends('testAssertReturn34')]
    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-index', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 325,
        );
    }

    #[Depends('testAssertReturn35')]
    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-local.set-value', 'args' => []],
            expected: [],
            line: 327,
        );
    }

    #[Depends('testAssertReturn36')]
    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-local.tee-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 328,
        );
    }

    #[Depends('testAssertReturn37')]
    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-global.set-value', 'args' => []],
            expected: [],
            line: 329,
        );
    }

    #[Depends('testAssertReturn38')]
    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-load-address', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 331,
        );
    }

    #[Depends('testAssertReturn39')]
    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-loadN-address', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 332,
        );
    }

    #[Depends('testAssertReturn40')]
    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-store-address', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 333,
        );
    }

    #[Depends('testAssertReturn41')]
    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-store-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 334,
        );
    }

    #[Depends('testAssertReturn42')]
    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-storeN-address', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 335,
        );
    }

    #[Depends('testAssertReturn43')]
    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-storeN-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 336,
        );
    }

    #[Depends('testAssertReturn44')]
    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-unary-operand', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '4286640610']],
            line: 338,
        );
    }

    #[Depends('testAssertReturn45')]
    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-binary-left', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '13']],
            line: 339,
        );
    }

    #[Depends('testAssertReturn46')]
    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-binary-right', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 340,
        );
    }

    #[Depends('testAssertReturn47')]
    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-test-operand', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 341,
        );
    }

    #[Depends('testAssertReturn48')]
    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-compare-left', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 342,
        );
    }

    #[Depends('testAssertReturn49')]
    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-compare-right', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 343,
        );
    }

    #[Depends('testAssertReturn50')]
    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-convert-operand', 'args' => [['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '41']],
            line: 344,
        );
    }

    #[Depends('testAssertReturn51')]
    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-memory.grow-size', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 345,
        );
    }

    #[Depends('testAssertReturn52')]
    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'type-mixed', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'f32', 'value' => '1074580685'], ['type' => 'f64', 'value' => '4614613358185178726'], ['type' => 'i32', 'value' => '4'], ['type' => 'i32', 'value' => '5']]],
            expected: [],
            line: 348,
        );
    }

    #[Depends('testAssertReturn53')]
    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'write', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'f32', 'value' => '1073741824'], ['type' => 'f64', 'value' => '4614613358185178726'], ['type' => 'i32', 'value' => '4'], ['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i64', 'value' => '56']],
            line: 354,
        );
    }

    #[Depends('testAssertReturn54')]
    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'result', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'f32', 'value' => '3221225472'], ['type' => 'f64', 'value' => '13837985395039954534'], ['type' => 'i32', 'value' => '4294967292'], ['type' => 'i32', 'value' => '4294967291']]],
            expected: [['type' => 'f64', 'value' => '4630094481904264806']],
            line: 361,
        );
    }

    #[Depends('testAssertReturn55')]
    public function testAssertInvalid56(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.1.wasm',
            text: 'type mismatch',
            line: 371,
        );
    }

    #[Depends('testAssertInvalid56')]
    public function testAssertInvalid57(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.2.wasm',
            text: 'type mismatch',
            line: 375,
        );
    }

    #[Depends('testAssertInvalid57')]
    public function testAssertInvalid58(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.3.wasm',
            text: 'type mismatch',
            line: 379,
        );
    }

    #[Depends('testAssertInvalid58')]
    public function testAssertInvalid59(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.4.wasm',
            text: 'type mismatch',
            line: 384,
        );
    }

    #[Depends('testAssertInvalid59')]
    public function testAssertInvalid60(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.5.wasm',
            text: 'type mismatch',
            line: 388,
        );
    }

    #[Depends('testAssertInvalid60')]
    public function testAssertInvalid61(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.6.wasm',
            text: 'type mismatch',
            line: 392,
        );
    }

    #[Depends('testAssertInvalid61')]
    public function testAssertInvalid62(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.7.wasm',
            text: 'type mismatch',
            line: 396,
        );
    }

    #[Depends('testAssertInvalid62')]
    public function testAssertInvalid63(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.8.wasm',
            text: 'type mismatch',
            line: 404,
        );
    }

    #[Depends('testAssertInvalid63')]
    public function testAssertInvalid64(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.9.wasm',
            text: 'type mismatch',
            line: 408,
        );
    }

    #[Depends('testAssertInvalid64')]
    public function testAssertInvalid65(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.10.wasm',
            text: 'type mismatch',
            line: 412,
        );
    }

    #[Depends('testAssertInvalid65')]
    public function testAssertInvalid66(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.11.wasm',
            text: 'type mismatch',
            line: 417,
        );
    }

    #[Depends('testAssertInvalid66')]
    public function testAssertInvalid67(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.12.wasm',
            text: 'type mismatch',
            line: 421,
        );
    }

    #[Depends('testAssertInvalid67')]
    public function testAssertInvalid68(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.13.wasm',
            text: 'type mismatch',
            line: 425,
        );
    }

    #[Depends('testAssertInvalid68')]
    public function testAssertInvalid69(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.14.wasm',
            text: 'type mismatch',
            line: 429,
        );
    }

    #[Depends('testAssertInvalid69')]
    public function testAssertInvalid70(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.15.wasm',
            text: 'type mismatch',
            line: 434,
        );
    }

    #[Depends('testAssertInvalid70')]
    public function testAssertInvalid71(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.16.wasm',
            text: 'type mismatch',
            line: 442,
        );
    }

    #[Depends('testAssertInvalid71')]
    public function testAssertInvalid72(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.17.wasm',
            text: 'type mismatch',
            line: 451,
        );
    }

    #[Depends('testAssertInvalid72')]
    public function testAssertInvalid73(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.18.wasm',
            text: 'type mismatch',
            line: 460,
        );
    }

    #[Depends('testAssertInvalid73')]
    public function testAssertInvalid74(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.19.wasm',
            text: 'type mismatch',
            line: 469,
        );
    }

    #[Depends('testAssertInvalid74')]
    public function testAssertInvalid75(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.20.wasm',
            text: 'type mismatch',
            line: 478,
        );
    }

    #[Depends('testAssertInvalid75')]
    public function testAssertInvalid76(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.21.wasm',
            text: 'type mismatch',
            line: 487,
        );
    }

    #[Depends('testAssertInvalid76')]
    public function testAssertInvalid77(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.22.wasm',
            text: 'type mismatch',
            line: 496,
        );
    }

    #[Depends('testAssertInvalid77')]
    public function testAssertInvalid78(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.23.wasm',
            text: 'type mismatch',
            line: 505,
        );
    }

    #[Depends('testAssertInvalid78')]
    public function testAssertInvalid79(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.24.wasm',
            text: 'type mismatch',
            line: 513,
        );
    }

    #[Depends('testAssertInvalid79')]
    public function testAssertInvalid80(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.25.wasm',
            text: 'type mismatch',
            line: 521,
        );
    }

    #[Depends('testAssertInvalid80')]
    public function testAssertInvalid81(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.26.wasm',
            text: 'type mismatch',
            line: 530,
        );
    }

    #[Depends('testAssertInvalid81')]
    public function testAssertInvalid82(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.27.wasm',
            text: 'type mismatch',
            line: 546,
        );
    }

    #[Depends('testAssertInvalid82')]
    public function testAssertInvalid83(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.28.wasm',
            text: 'type mismatch',
            line: 554,
        );
    }

    #[Depends('testAssertInvalid83')]
    public function testAssertInvalid84(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.29.wasm',
            text: 'type mismatch',
            line: 562,
        );
    }

    #[Depends('testAssertInvalid84')]
    public function testAssertInvalid85(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.30.wasm',
            text: 'type mismatch',
            line: 571,
        );
    }

    #[Depends('testAssertInvalid85')]
    public function testAssertInvalid86(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.31.wasm',
            text: 'type mismatch',
            line: 580,
        );
    }

    #[Depends('testAssertInvalid86')]
    public function testAssertInvalid87(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.32.wasm',
            text: 'type mismatch',
            line: 589,
        );
    }

    #[Depends('testAssertInvalid87')]
    public function testAssertInvalid88(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.33.wasm',
            text: 'type mismatch',
            line: 599,
        );
    }

    #[Depends('testAssertInvalid88')]
    public function testAssertInvalid89(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.34.wasm',
            text: 'type mismatch',
            line: 603,
        );
    }

    #[Depends('testAssertInvalid89')]
    public function testAssertInvalid90(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.35.wasm',
            text: 'type mismatch',
            line: 607,
        );
    }

    #[Depends('testAssertInvalid90')]
    public function testAssertInvalid91(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.36.wasm',
            text: 'unknown local',
            line: 615,
        );
    }

    #[Depends('testAssertInvalid91')]
    public function testAssertInvalid92(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.37.wasm',
            text: 'unknown local',
            line: 619,
        );
    }

    #[Depends('testAssertInvalid92')]
    public function testAssertInvalid93(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.38.wasm',
            text: 'unknown local',
            line: 624,
        );
    }

    #[Depends('testAssertInvalid93')]
    public function testAssertInvalid94(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.39.wasm',
            text: 'unknown local',
            line: 628,
        );
    }

    #[Depends('testAssertInvalid94')]
    public function testAssertInvalid95(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.40.wasm',
            text: 'unknown local',
            line: 633,
        );
    }

    #[Depends('testAssertInvalid95')]
    public function testAssertInvalid96(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_tee.41.wasm',
            text: 'unknown local',
            line: 637,
        );
    }
}
