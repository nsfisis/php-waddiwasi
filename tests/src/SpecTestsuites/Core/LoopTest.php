<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class LoopTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'loop.0.wasm',
            name: null,
            line: 3,
        );
    }

    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'empty', 'args' => []],
            expected: [],
            line: 430,
        );
    }

    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'singular', 'args' => []],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 431,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'multi', 'args' => []],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 432,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 433,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'deep', 'args' => []],
            expected: [['type' => 'i32', 'value' => '150']],
            line: 434,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 436,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-mid', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 437,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 438,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-condition', 'args' => []],
            expected: [],
            line: 440,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-then', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 441,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-else', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 442,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 444,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 445,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 447,
        );
    }

    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 448,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 450,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-mid', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 451,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 452,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-first', 'args' => []],
            expected: [],
            line: 454,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-last', 'args' => []],
            expected: [],
            line: 455,
        );
    }

    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-memory.grow-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 457,
        );
    }

    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 458,
        );
    }

    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-return-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 459,
        );
    }

    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-drop-operand', 'args' => []],
            expected: [],
            line: 460,
        );
    }

    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 461,
        );
    }

    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.set-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 462,
        );
    }

    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.tee-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 463,
        );
    }

    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-global.set-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 464,
        );
    }

    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-load-operand', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 465,
        );
    }

    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-unary-operand', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 467,
        );
    }

    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-operand', 'args' => []],
            expected: [['type' => 'i32', 'value' => '12']],
            line: 468,
        );
    }

    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-test-operand', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 469,
        );
    }

    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-operand', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 470,
        );
    }

    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-operands', 'args' => []],
            expected: [['type' => 'i32', 'value' => '12']],
            line: 471,
        );
    }

    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-operands', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 472,
        );
    }

    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-mixed-operands', 'args' => []],
            expected: [['type' => 'i32', 'value' => '27']],
            line: 473,
        );
    }

    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-bare', 'args' => []],
            expected: [['type' => 'i32', 'value' => '19']],
            line: 475,
        );
    }

    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '18']],
            line: 476,
        );
    }

    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-multi-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '18'], ['type' => 'i32', 'value' => '4294967278'], ['type' => 'i64', 'value' => '18']],
            line: 477,
        );
    }

    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-repeated', 'args' => []],
            expected: [['type' => 'i32', 'value' => '18']],
            line: 480,
        );
    }

    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-inner', 'args' => []],
            expected: [['type' => 'i32', 'value' => '31']],
            line: 481,
        );
    }

    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'param', 'args' => []],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 483,
        );
    }

    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'params', 'args' => []],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 484,
        );
    }

    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'params-id', 'args' => []],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 485,
        );
    }

    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'param-break', 'args' => []],
            expected: [['type' => 'i32', 'value' => '13']],
            line: 486,
        );
    }

    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'params-break', 'args' => []],
            expected: [['type' => 'i32', 'value' => '12']],
            line: 487,
        );
    }

    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'params-id-break', 'args' => []],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 488,
        );
    }

    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'effects', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 490,
        );
    }

    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'while', 'args' => [['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 492,
        );
    }

    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'while', 'args' => [['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 493,
        );
    }

    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'while', 'args' => [['type' => 'i64', 'value' => '2']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 494,
        );
    }

    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'while', 'args' => [['type' => 'i64', 'value' => '3']]],
            expected: [['type' => 'i64', 'value' => '6']],
            line: 495,
        );
    }

    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'while', 'args' => [['type' => 'i64', 'value' => '5']]],
            expected: [['type' => 'i64', 'value' => '120']],
            line: 496,
        );
    }

    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'while', 'args' => [['type' => 'i64', 'value' => '20']]],
            expected: [['type' => 'i64', 'value' => '2432902008176640000']],
            line: 497,
        );
    }

    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'for', 'args' => [['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 499,
        );
    }

    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'for', 'args' => [['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 500,
        );
    }

    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'for', 'args' => [['type' => 'i64', 'value' => '2']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 501,
        );
    }

    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'for', 'args' => [['type' => 'i64', 'value' => '3']]],
            expected: [['type' => 'i64', 'value' => '6']],
            line: 502,
        );
    }

    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'for', 'args' => [['type' => 'i64', 'value' => '5']]],
            expected: [['type' => 'i64', 'value' => '120']],
            line: 503,
        );
    }

    public function testAssertReturn60(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'for', 'args' => [['type' => 'i64', 'value' => '20']]],
            expected: [['type' => 'i64', 'value' => '2432902008176640000']],
            line: 504,
        );
    }

    public function testAssertReturn61(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nesting', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1088421888']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 506,
        );
    }

    public function testAssertReturn62(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nesting', 'args' => [['type' => 'f32', 'value' => '1088421888'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 507,
        );
    }

    public function testAssertReturn63(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nesting', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 508,
        );
    }

    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nesting', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1073741824']]],
            expected: [['type' => 'f32', 'value' => '1073741824']],
            line: 509,
        );
    }

    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nesting', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1077936128']]],
            expected: [['type' => 'f32', 'value' => '1082130432']],
            line: 510,
        );
    }

    public function testAssertReturn66(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nesting', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1082130432']]],
            expected: [['type' => 'f32', 'value' => '1086324736']],
            line: 511,
        );
    }

    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nesting', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1120403456']]],
            expected: [['type' => 'f32', 'value' => '1159684096']],
            line: 512,
        );
    }

    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nesting', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1120534528']]],
            expected: [['type' => 'f32', 'value' => '1159892992']],
            line: 513,
        );
    }

    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nesting', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 514,
        );
    }

    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nesting', 'args' => [['type' => 'f32', 'value' => '1077936128'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 515,
        );
    }

    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nesting', 'args' => [['type' => 'f32', 'value' => '1092616192'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 516,
        );
    }

    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nesting', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '1073741824']]],
            expected: [['type' => 'f32', 'value' => '1077936128']],
            line: 517,
        );
    }

    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nesting', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '1077936128']]],
            expected: [['type' => 'f32', 'value' => '1082130432']],
            line: 518,
        );
    }

    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nesting', 'args' => [['type' => 'f32', 'value' => '1088421888'], ['type' => 'f32', 'value' => '1082130432']]],
            expected: [['type' => 'f32', 'value' => '1092940751']],
            line: 519,
        );
    }

    public function testAssertReturn75(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nesting', 'args' => [['type' => 'f32', 'value' => '1088421888'], ['type' => 'f32', 'value' => '1120403456']]],
            expected: [['type' => 'f32', 'value' => '1166601314']],
            line: 520,
        );
    }

    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nesting', 'args' => [['type' => 'f32', 'value' => '1088421888'], ['type' => 'f32', 'value' => '1120534528']]],
            expected: [['type' => 'f32', 'value' => '1159892992']],
            line: 521,
        );
    }

    public function testAssertReturn77(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-use', 'args' => []],
            expected: [],
            line: 523,
        );
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed78(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed79(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed80(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed81(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed82(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed83(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed84(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed85(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed86(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed87(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed88(): void
    {
    }

    public function testAssertInvalid89(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'loop.12.wasm',
            text: 'type mismatch',
            line: 601,
        );
    }

    public function testAssertInvalid90(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'loop.13.wasm',
            text: 'type mismatch',
            line: 609,
        );
    }

    public function testAssertInvalid91(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'loop.14.wasm',
            text: 'type mismatch',
            line: 613,
        );
    }

    public function testAssertInvalid92(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'loop.15.wasm',
            text: 'type mismatch',
            line: 617,
        );
    }

    public function testAssertInvalid93(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'loop.16.wasm',
            text: 'type mismatch',
            line: 621,
        );
    }

    public function testAssertInvalid94(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'loop.17.wasm',
            text: 'type mismatch',
            line: 626,
        );
    }

    public function testAssertInvalid95(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'loop.18.wasm',
            text: 'type mismatch',
            line: 632,
        );
    }

    public function testAssertInvalid96(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'loop.19.wasm',
            text: 'type mismatch',
            line: 638,
        );
    }

    public function testAssertInvalid97(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'loop.20.wasm',
            text: 'type mismatch',
            line: 644,
        );
    }

    public function testAssertInvalid98(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'loop.21.wasm',
            text: 'type mismatch',
            line: 650,
        );
    }

    public function testAssertInvalid99(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'loop.22.wasm',
            text: 'type mismatch',
            line: 656,
        );
    }

    public function testAssertInvalid100(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'loop.23.wasm',
            text: 'type mismatch',
            line: 662,
        );
    }

    public function testAssertInvalid101(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'loop.24.wasm',
            text: 'type mismatch',
            line: 668,
        );
    }

    public function testAssertInvalid102(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'loop.25.wasm',
            text: 'type mismatch',
            line: 674,
        );
    }

    public function testAssertInvalid103(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'loop.26.wasm',
            text: 'type mismatch',
            line: 680,
        );
    }

    public function testAssertInvalid104(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'loop.27.wasm',
            text: 'type mismatch',
            line: 686,
        );
    }

    public function testAssertInvalid105(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'loop.28.wasm',
            text: 'type mismatch',
            line: 693,
        );
    }

    public function testAssertInvalid106(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'loop.29.wasm',
            text: 'type mismatch',
            line: 702,
        );
    }

    public function testAssertInvalid107(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'loop.30.wasm',
            text: 'type mismatch',
            line: 711,
        );
    }

    public function testAssertInvalid108(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'loop.31.wasm',
            text: 'type mismatch',
            line: 721,
        );
    }

    public function testAssertInvalid109(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'loop.32.wasm',
            text: 'type mismatch',
            line: 727,
        );
    }

    public function testAssertInvalid110(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'loop.33.wasm',
            text: 'type mismatch',
            line: 733,
        );
    }

    public function testAssertInvalid111(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'loop.34.wasm',
            text: 'type mismatch',
            line: 739,
        );
    }

    public function testAssertInvalid112(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'loop.35.wasm',
            text: 'type mismatch',
            line: 745,
        );
    }

    public function testAssertInvalid113(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'loop.36.wasm',
            text: 'type mismatch',
            line: 751,
        );
    }

    public function testAssertInvalid114(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'loop.37.wasm',
            text: 'type mismatch',
            line: 757,
        );
    }

    public function testAssertInvalid115(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'loop.38.wasm',
            text: 'type mismatch',
            line: 763,
        );
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed116(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed117(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed118(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed119(): void
    {
    }
}
