<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class CallTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'call.0.wasm',
            name: null,
            line: 3,
        );
    }

    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-i32', 'args' => []],
            expected: [['type' => 'i32', 'value' => '306']],
            line: 285,
        );
    }

    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-i64', 'args' => []],
            expected: [['type' => 'i64', 'value' => '356']],
            line: 286,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-f32', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1165172736']],
            line: 287,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-f64', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4660882566700597248']],
            line: 288,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-i32-i64', 'args' => []],
            expected: [['type' => 'i32', 'value' => '306'], ['type' => 'i64', 'value' => '356']],
            line: 289,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-first-i32', 'args' => []],
            expected: [['type' => 'i32', 'value' => '32']],
            line: 291,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-first-i64', 'args' => []],
            expected: [['type' => 'i64', 'value' => '64']],
            line: 292,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-first-f32', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1068037571']],
            line: 293,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-first-f64', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4610064722561534525']],
            line: 294,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-second-i32', 'args' => []],
            expected: [['type' => 'i32', 'value' => '32']],
            line: 296,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-second-i64', 'args' => []],
            expected: [['type' => 'i64', 'value' => '64']],
            line: 297,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-second-f32', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1107296256']],
            line: 298,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-second-f64', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4634211053438658150']],
            line: 299,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-all-i32-f64', 'args' => []],
            expected: [['type' => 'i32', 'value' => '32'], ['type' => 'f64', 'value' => '4610064722561534525']],
            line: 301,
        );
    }

    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-all-i32-i32', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '1']],
            line: 302,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-all-f32-f64', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f32', 'value' => '1065353216']],
            line: 303,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-all-f64-i32', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2'], ['type' => 'f64', 'value' => '4607182418800017408']],
            line: 304,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-all-operands', 'args' => []],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 306,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-mixed-operands', 'args' => []],
            expected: [['type' => 'i32', 'value' => '32']],
            line: 307,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call-all-operands', 'args' => []],
            expected: [['type' => 'i32', 'value' => '3'], ['type' => 'i32', 'value' => '4']],
            line: 308,
        );
    }

    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fac', 'args' => [['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 310,
        );
    }

    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fac', 'args' => [['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 311,
        );
    }

    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fac', 'args' => [['type' => 'i64', 'value' => '5']]],
            expected: [['type' => 'i64', 'value' => '120']],
            line: 312,
        );
    }

    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fac', 'args' => [['type' => 'i64', 'value' => '25']]],
            expected: [['type' => 'i64', 'value' => '7034535277573963776']],
            line: 313,
        );
    }

    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fac-acc', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 314,
        );
    }

    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fac-acc', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 315,
        );
    }

    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fac-acc', 'args' => [['type' => 'i64', 'value' => '5'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '120']],
            line: 316,
        );
    }

    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fac-acc', 'args' => [['type' => 'i64', 'value' => '25'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '7034535277573963776']],
            line: 318,
        );
    }

    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fib', 'args' => [['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 322,
        );
    }

    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fib', 'args' => [['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 323,
        );
    }

    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fib', 'args' => [['type' => 'i64', 'value' => '2']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 324,
        );
    }

    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fib', 'args' => [['type' => 'i64', 'value' => '5']]],
            expected: [['type' => 'i64', 'value' => '8']],
            line: 325,
        );
    }

    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fib', 'args' => [['type' => 'i64', 'value' => '20']]],
            expected: [['type' => 'i64', 'value' => '10946']],
            line: 326,
        );
    }

    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'even', 'args' => [['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '44']],
            line: 328,
        );
    }

    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'even', 'args' => [['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '99']],
            line: 329,
        );
    }

    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'even', 'args' => [['type' => 'i64', 'value' => '100']]],
            expected: [['type' => 'i32', 'value' => '44']],
            line: 330,
        );
    }

    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'even', 'args' => [['type' => 'i64', 'value' => '77']]],
            expected: [['type' => 'i32', 'value' => '99']],
            line: 331,
        );
    }

    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'odd', 'args' => [['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '99']],
            line: 332,
        );
    }

    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'odd', 'args' => [['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '44']],
            line: 333,
        );
    }

    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'odd', 'args' => [['type' => 'i64', 'value' => '200']]],
            expected: [['type' => 'i32', 'value' => '99']],
            line: 334,
        );
    }

    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'odd', 'args' => [['type' => 'i64', 'value' => '77']]],
            expected: [['type' => 'i32', 'value' => '44']],
            line: 335,
        );
    }

    public function testAssertExhaustion42(): void
    {
        $this->runAssertExhaustionCommand(
            action: ['type' => 'invoke', 'field' => 'runaway', 'args' => []],
            text: 'call stack exhausted',
            line: 337,
        );
    }

    public function testAssertExhaustion43(): void
    {
        $this->runAssertExhaustionCommand(
            action: ['type' => 'invoke', 'field' => 'mutual-runaway', 'args' => []],
            text: 'call stack exhausted',
            line: 338,
        );
    }

    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '306']],
            line: 340,
        );
    }

    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-mid', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 341,
        );
    }

    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 342,
        );
    }

    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-condition', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 344,
        );
    }

    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '306']],
            line: 346,
        );
    }

    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 347,
        );
    }

    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '306']],
            line: 349,
        );
    }

    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 350,
        );
    }

    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '306']],
            line: 352,
        );
    }

    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-mid', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 353,
        );
    }

    public function testAssertTrap54(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-last', 'args' => []],
            text: 'undefined element',
            line: 354,
        );
    }

    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-first', 'args' => []],
            expected: [],
            line: 356,
        );
    }

    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-last', 'args' => []],
            expected: [],
            line: 357,
        );
    }

    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-memory.grow-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 359,
        );
    }

    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-return-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '306']],
            line: 360,
        );
    }

    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-drop-operand', 'args' => []],
            expected: [],
            line: 361,
        );
    }

    public function testAssertReturn60(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '306']],
            line: 362,
        );
    }

    public function testAssertReturn61(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.set-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '306']],
            line: 363,
        );
    }

    public function testAssertReturn62(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.tee-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '306']],
            line: 364,
        );
    }

    public function testAssertReturn63(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-global.set-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '306']],
            line: 365,
        );
    }

    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-load-operand', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 366,
        );
    }

    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-unary-operand', 'args' => []],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 368,
        );
    }

    public function testAssertReturn66(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-left', 'args' => []],
            expected: [['type' => 'i32', 'value' => '11']],
            line: 369,
        );
    }

    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-right', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 370,
        );
    }

    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-test-operand', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 371,
        );
    }

    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-left', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 372,
        );
    }

    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-right', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 373,
        );
    }

    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-convert-operand', 'args' => []],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 374,
        );
    }

    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'return-from-long-argument-list', 'args' => [['type' => 'i32', 'value' => '42']]],
            expected: [['type' => 'i32', 'value' => '42']],
            line: 376,
        );
    }

    public function testAssertInvalid73(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call.1.wasm',
            text: 'type mismatch',
            line: 381,
        );
    }

    public function testAssertInvalid74(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call.2.wasm',
            text: 'type mismatch',
            line: 388,
        );
    }

    public function testAssertInvalid75(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call.3.wasm',
            text: 'type mismatch',
            line: 396,
        );
    }

    public function testAssertInvalid76(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call.4.wasm',
            text: 'type mismatch',
            line: 403,
        );
    }

    public function testAssertInvalid77(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call.5.wasm',
            text: 'type mismatch',
            line: 410,
        );
    }

    public function testAssertInvalid78(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call.6.wasm',
            text: 'type mismatch',
            line: 417,
        );
    }

    public function testAssertInvalid79(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call.7.wasm',
            text: 'type mismatch',
            line: 425,
        );
    }

    public function testAssertInvalid80(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call.8.wasm',
            text: 'type mismatch',
            line: 432,
        );
    }

    public function testAssertInvalid81(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call.9.wasm',
            text: 'type mismatch',
            line: 439,
        );
    }

    public function testAssertInvalid82(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call.10.wasm',
            text: 'type mismatch',
            line: 446,
        );
    }

    public function testAssertInvalid83(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call.11.wasm',
            text: 'type mismatch',
            line: 454,
        );
    }

    public function testAssertInvalid84(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call.12.wasm',
            text: 'type mismatch',
            line: 463,
        );
    }

    public function testAssertInvalid85(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call.13.wasm',
            text: 'type mismatch',
            line: 472,
        );
    }

    public function testAssertInvalid86(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call.14.wasm',
            text: 'type mismatch',
            line: 481,
        );
    }

    public function testAssertInvalid87(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call.15.wasm',
            text: 'type mismatch',
            line: 490,
        );
    }

    public function testAssertInvalid88(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call.16.wasm',
            text: 'type mismatch',
            line: 499,
        );
    }

    public function testAssertInvalid89(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call.17.wasm',
            text: 'unknown function',
            line: 512,
        );
    }

    public function testAssertInvalid90(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call.18.wasm',
            text: 'unknown function',
            line: 516,
        );
    }
}
