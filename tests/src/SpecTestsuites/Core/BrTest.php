<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class BrTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'br.0.wasm',
            name: null,
            line: 3,
        );
    }

    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-i32', 'args' => []],
            expected: [],
            line: 372,
        );
    }

    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-i64', 'args' => []],
            expected: [],
            line: 373,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-f32', 'args' => []],
            expected: [],
            line: 374,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-f64', 'args' => []],
            expected: [],
            line: 375,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-i32-i32', 'args' => []],
            expected: [],
            line: 376,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-i64-i64', 'args' => []],
            expected: [],
            line: 377,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-f32-f32', 'args' => []],
            expected: [],
            line: 378,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-f64-f64', 'args' => []],
            expected: [],
            line: 379,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-i32-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 381,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-i64-value', 'args' => []],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 382,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-f32-value', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1077936128']],
            line: 383,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-f64-value', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4616189618054758400']],
            line: 384,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-f64-f64-value', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4616189618054758400'], ['type' => 'f64', 'value' => '4617315517961601024']],
            line: 385,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-block-first', 'args' => []],
            expected: [],
            line: 387,
        );
    }

    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-block-mid', 'args' => []],
            expected: [],
            line: 388,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-block-last', 'args' => []],
            expected: [],
            line: 389,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-block-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 390,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 392,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-mid', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 393,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 394,
        );
    }

    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 396,
        );
    }

    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-cond', 'args' => []],
            expected: [],
            line: 398,
        );
    }

    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 399,
        );
    }

    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-value-cond', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 400,
        );
    }

    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-index', 'args' => []],
            expected: [],
            line: 402,
        );
    }

    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 403,
        );
    }

    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-value-index', 'args' => []],
            expected: [['type' => 'i32', 'value' => '11']],
            line: 404,
        );
    }

    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-return-value', 'args' => []],
            expected: [['type' => 'i64', 'value' => '7']],
            line: 406,
        );
    }

    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-return-values', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2'], ['type' => 'i64', 'value' => '7']],
            line: 407,
        );
    }

    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-cond', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 409,
        );
    }

    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-then', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 410,
        );
    }

    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-then', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 411,
        );
    }

    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-else', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 412,
        );
    }

    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-else', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 413,
        );
    }

    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-first', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 415,
        );
    }

    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-first', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 416,
        );
    }

    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-second', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 417,
        );
    }

    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-second', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 418,
        );
    }

    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-cond', 'args' => []],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 419,
        );
    }

    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-all', 'args' => []],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 420,
        );
    }

    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '12']],
            line: 422,
        );
    }

    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call-mid', 'args' => []],
            expected: [['type' => 'i32', 'value' => '13']],
            line: 423,
        );
    }

    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '14']],
            line: 424,
        );
    }

    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call-all', 'args' => []],
            expected: [['type' => 'i32', 'value' => '15']],
            line: 425,
        );
    }

    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-func', 'args' => []],
            expected: [['type' => 'i32', 'value' => '20']],
            line: 427,
        );
    }

    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '21']],
            line: 428,
        );
    }

    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-mid', 'args' => []],
            expected: [['type' => 'i32', 'value' => '22']],
            line: 429,
        );
    }

    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '23']],
            line: 430,
        );
    }

    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-all', 'args' => []],
            expected: [['type' => 'i32', 'value' => '24']],
            line: 431,
        );
    }

    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.set-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '17']],
            line: 433,
        );
    }

    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.tee-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 434,
        );
    }

    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-global.set-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 435,
        );
    }

    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-load-address', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1071225242']],
            line: 437,
        );
    }

    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loadN-address', 'args' => []],
            expected: [['type' => 'i64', 'value' => '30']],
            line: 438,
        );
    }

    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-address', 'args' => []],
            expected: [['type' => 'i32', 'value' => '30']],
            line: 440,
        );
    }

    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '31']],
            line: 441,
        );
    }

    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-both', 'args' => []],
            expected: [['type' => 'i32', 'value' => '32']],
            line: 442,
        );
    }

    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-storeN-address', 'args' => []],
            expected: [['type' => 'i32', 'value' => '32']],
            line: 443,
        );
    }

    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-storeN-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '33']],
            line: 444,
        );
    }

    public function testAssertReturn60(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-storeN-both', 'args' => []],
            expected: [['type' => 'i32', 'value' => '34']],
            line: 445,
        );
    }

    public function testAssertReturn61(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-unary-operand', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1079613850']],
            line: 447,
        );
    }

    public function testAssertReturn62(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-left', 'args' => []],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 449,
        );
    }

    public function testAssertReturn63(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-right', 'args' => []],
            expected: [['type' => 'i64', 'value' => '45']],
            line: 450,
        );
    }

    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-both', 'args' => []],
            expected: [['type' => 'i32', 'value' => '46']],
            line: 451,
        );
    }

    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-test-operand', 'args' => []],
            expected: [['type' => 'i32', 'value' => '44']],
            line: 453,
        );
    }

    public function testAssertReturn66(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-left', 'args' => []],
            expected: [['type' => 'i32', 'value' => '43']],
            line: 455,
        );
    }

    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-right', 'args' => []],
            expected: [['type' => 'i32', 'value' => '42']],
            line: 456,
        );
    }

    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-both', 'args' => []],
            expected: [['type' => 'i32', 'value' => '44']],
            line: 457,
        );
    }

    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-convert-operand', 'args' => []],
            expected: [['type' => 'i32', 'value' => '41']],
            line: 459,
        );
    }

    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-memory.grow-size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '40']],
            line: 461,
        );
    }

    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-block-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 463,
        );
    }

    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 464,
        );
    }

    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_if-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 465,
        );
    }

    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_if-value-cond', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 466,
        );
    }

    public function testAssertReturn75(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_table-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 467,
        );
    }

    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_table-value-index', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 468,
        );
    }

    public function testAssertInvalid77(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br.1.wasm',
            text: 'type mismatch',
            line: 471,
        );
    }

    public function testAssertInvalid78(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br.2.wasm',
            text: 'type mismatch',
            line: 478,
        );
    }

    public function testAssertInvalid79(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br.3.wasm',
            text: 'type mismatch',
            line: 484,
        );
    }

    public function testAssertInvalid80(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br.4.wasm',
            text: 'type mismatch',
            line: 490,
        );
    }

    public function testAssertInvalid81(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br.5.wasm',
            text: 'type mismatch',
            line: 497,
        );
    }

    public function testAssertInvalid82(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br.6.wasm',
            text: 'type mismatch',
            line: 506,
        );
    }

    public function testAssertInvalid83(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br.7.wasm',
            text: 'type mismatch',
            line: 515,
        );
    }

    public function testAssertInvalid84(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br.8.wasm',
            text: 'type mismatch',
            line: 524,
        );
    }

    public function testAssertInvalid85(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br.9.wasm',
            text: 'type mismatch',
            line: 535,
        );
    }

    public function testAssertInvalid86(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br.10.wasm',
            text: 'type mismatch',
            line: 546,
        );
    }

    public function testAssertInvalid87(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br.11.wasm',
            text: 'type mismatch',
            line: 558,
        );
    }

    public function testAssertInvalid88(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br.12.wasm',
            text: 'type mismatch',
            line: 574,
        );
    }

    public function testAssertInvalid89(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br.13.wasm',
            text: 'type mismatch',
            line: 586,
        );
    }

    public function testAssertInvalid90(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br.14.wasm',
            text: 'type mismatch',
            line: 598,
        );
    }

    public function testAssertInvalid91(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br.15.wasm',
            text: 'type mismatch',
            line: 610,
        );
    }

    public function testAssertInvalid92(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br.16.wasm',
            text: 'type mismatch',
            line: 622,
        );
    }

    public function testAssertInvalid93(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br.17.wasm',
            text: 'type mismatch',
            line: 634,
        );
    }

    public function testAssertInvalid94(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br.18.wasm',
            text: 'unknown label',
            line: 647,
        );
    }

    public function testAssertInvalid95(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br.19.wasm',
            text: 'unknown label',
            line: 651,
        );
    }

    public function testAssertInvalid96(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br.20.wasm',
            text: 'unknown label',
            line: 655,
        );
    }
}
