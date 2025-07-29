<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class BrIfTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'br_if.0.wasm',
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
            action: ['type' => 'invoke', 'field' => 'type-i32-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 377,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-i64-value', 'args' => []],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 378,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-f32-value', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1077936128']],
            line: 379,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-f64-value', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4616189618054758400']],
            line: 380,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-block-first', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 382,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-block-first', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 383,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-block-mid', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 384,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-block-mid', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 385,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-block-last', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 386,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-block-last', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 387,
        );
    }

    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-block-first-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '11']],
            line: 389,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-block-first-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 390,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-block-mid-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '21']],
            line: 391,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-block-mid-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '20']],
            line: 392,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-block-last-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '11']],
            line: 393,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-block-last-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '11']],
            line: 394,
        );
    }

    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-first', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 396,
        );
    }

    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-first', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 397,
        );
    }

    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-mid', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 398,
        );
    }

    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-mid', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 399,
        );
    }

    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-last', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 400,
        );
    }

    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-last', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 401,
        );
    }

    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 403,
        );
    }

    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-cond', 'args' => []],
            expected: [],
            line: 405,
        );
    }

    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 406,
        );
    }

    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-value-cond', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 407,
        );
    }

    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-value-cond', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 408,
        );
    }

    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-index', 'args' => []],
            expected: [],
            line: 410,
        );
    }

    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 411,
        );
    }

    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-value-index', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 412,
        );
    }

    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-return-value', 'args' => []],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 414,
        );
    }

    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-cond', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 416,
        );
    }

    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-cond', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 417,
        );
    }

    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-then', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 418,
        );
    }

    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-then', 'args' => [['type' => 'i32', 'value' => '4'], ['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 419,
        );
    }

    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-then', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 420,
        );
    }

    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-then', 'args' => [['type' => 'i32', 'value' => '4'], ['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 421,
        );
    }

    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-else', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 422,
        );
    }

    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-else', 'args' => [['type' => 'i32', 'value' => '3'], ['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 423,
        );
    }

    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-else', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 424,
        );
    }

    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-else', 'args' => [['type' => 'i32', 'value' => '3'], ['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 425,
        );
    }

    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-first', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 427,
        );
    }

    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-first', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 428,
        );
    }

    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-second', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 429,
        );
    }

    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-second', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 430,
        );
    }

    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-cond', 'args' => []],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 431,
        );
    }

    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '12']],
            line: 433,
        );
    }

    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call-mid', 'args' => []],
            expected: [['type' => 'i32', 'value' => '13']],
            line: 434,
        );
    }

    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '14']],
            line: 435,
        );
    }

    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-func', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 437,
        );
    }

    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 438,
        );
    }

    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-mid', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 439,
        );
    }

    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 440,
        );
    }

    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.set-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 442,
        );
    }

    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.set-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '17']],
            line: 443,
        );
    }

    public function testAssertReturn60(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.tee-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 445,
        );
    }

    public function testAssertReturn61(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.tee-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 446,
        );
    }

    public function testAssertReturn62(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-global.set-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 448,
        );
    }

    public function testAssertReturn63(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-global.set-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 449,
        );
    }

    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-load-address', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 451,
        );
    }

    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loadN-address', 'args' => []],
            expected: [['type' => 'i32', 'value' => '30']],
            line: 452,
        );
    }

    public function testAssertReturn66(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-address', 'args' => []],
            expected: [['type' => 'i32', 'value' => '30']],
            line: 454,
        );
    }

    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '31']],
            line: 455,
        );
    }

    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-storeN-address', 'args' => []],
            expected: [['type' => 'i32', 'value' => '32']],
            line: 456,
        );
    }

    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-storeN-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '33']],
            line: 457,
        );
    }

    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-unary-operand', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 459,
        );
    }

    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-left', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 460,
        );
    }

    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-right', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 461,
        );
    }

    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-test-operand', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 462,
        );
    }

    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-left', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 463,
        );
    }

    public function testAssertReturn75(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-right', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 464,
        );
    }

    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-memory.grow-size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 465,
        );
    }

    public function testAssertReturn77(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-block-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '21']],
            line: 467,
        );
    }

    public function testAssertReturn78(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-block-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 468,
        );
    }

    public function testAssertReturn79(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 469,
        );
    }

    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 470,
        );
    }

    public function testAssertReturn81(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_if-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 471,
        );
    }

    public function testAssertReturn82(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_if-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 472,
        );
    }

    public function testAssertReturn83(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_if-value-cond', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 473,
        );
    }

    public function testAssertReturn84(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_if-value-cond', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 474,
        );
    }

    public function testAssertReturn85(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_table-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 475,
        );
    }

    public function testAssertReturn86(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_table-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 476,
        );
    }

    public function testAssertReturn87(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_table-value-index', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 477,
        );
    }

    public function testAssertReturn88(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_table-value-index', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 478,
        );
    }

    public function testAssertInvalid89(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.1.wasm',
            text: 'type mismatch',
            line: 481,
        );
    }

    public function testAssertInvalid90(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.2.wasm',
            text: 'type mismatch',
            line: 485,
        );
    }

    public function testAssertInvalid91(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.3.wasm',
            text: 'type mismatch',
            line: 489,
        );
    }

    public function testAssertInvalid92(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.4.wasm',
            text: 'type mismatch',
            line: 493,
        );
    }

    public function testAssertInvalid93(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.5.wasm',
            text: 'type mismatch',
            line: 498,
        );
    }

    public function testAssertInvalid94(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.6.wasm',
            text: 'type mismatch',
            line: 502,
        );
    }

    public function testAssertInvalid95(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.7.wasm',
            text: 'type mismatch',
            line: 506,
        );
    }

    public function testAssertInvalid96(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.8.wasm',
            text: 'type mismatch',
            line: 510,
        );
    }

    public function testAssertInvalid97(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.9.wasm',
            text: 'type mismatch',
            line: 515,
        );
    }

    public function testAssertInvalid98(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.10.wasm',
            text: 'type mismatch',
            line: 521,
        );
    }

    public function testAssertInvalid99(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.11.wasm',
            text: 'type mismatch',
            line: 527,
        );
    }

    public function testAssertInvalid100(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.12.wasm',
            text: 'type mismatch',
            line: 533,
        );
    }

    public function testAssertInvalid101(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.13.wasm',
            text: 'type mismatch',
            line: 540,
        );
    }

    public function testAssertInvalid102(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.14.wasm',
            text: 'type mismatch',
            line: 546,
        );
    }

    public function testAssertInvalid103(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.15.wasm',
            text: 'type mismatch',
            line: 552,
        );
    }

    public function testAssertInvalid104(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.16.wasm',
            text: 'type mismatch',
            line: 560,
        );
    }

    public function testAssertInvalid105(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.17.wasm',
            text: 'type mismatch',
            line: 569,
        );
    }

    public function testAssertInvalid106(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.18.wasm',
            text: 'type mismatch',
            line: 575,
        );
    }

    public function testAssertInvalid107(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.19.wasm',
            text: 'type mismatch',
            line: 581,
        );
    }

    public function testAssertInvalid108(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.20.wasm',
            text: 'type mismatch',
            line: 587,
        );
    }

    public function testAssertInvalid109(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.21.wasm',
            text: 'type mismatch',
            line: 593,
        );
    }

    public function testAssertInvalid110(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.22.wasm',
            text: 'type mismatch',
            line: 599,
        );
    }

    public function testAssertInvalid111(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.23.wasm',
            text: 'type mismatch',
            line: 606,
        );
    }

    public function testAssertInvalid112(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.24.wasm',
            text: 'type mismatch',
            line: 618,
        );
    }

    public function testAssertInvalid113(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.25.wasm',
            text: 'type mismatch',
            line: 630,
        );
    }

    public function testAssertInvalid114(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.26.wasm',
            text: 'type mismatch',
            line: 641,
        );
    }

    public function testAssertInvalid115(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.27.wasm',
            text: 'unknown label',
            line: 654,
        );
    }

    public function testAssertInvalid116(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.28.wasm',
            text: 'unknown label',
            line: 658,
        );
    }

    public function testAssertInvalid117(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.29.wasm',
            text: 'unknown label',
            line: 662,
        );
    }
}
