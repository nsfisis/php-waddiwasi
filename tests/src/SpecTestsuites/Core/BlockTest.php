<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class BlockTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'block.0.wasm',
            name: null,
            line: 3,
        );
    }

    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'empty', 'args' => []],
            expected: [],
            line: 353,
        );
    }

    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'singular', 'args' => []],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 354,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'multi', 'args' => []],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 355,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 356,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'deep', 'args' => []],
            expected: [['type' => 'i32', 'value' => '150']],
            line: 357,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 359,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-mid', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 360,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 361,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 363,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-mid', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 364,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 365,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-condition', 'args' => []],
            expected: [],
            line: 367,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-then', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 368,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-else', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 369,
        );
    }

    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 371,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 372,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 374,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 375,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 377,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-mid', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 378,
        );
    }

    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 379,
        );
    }

    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-first', 'args' => []],
            expected: [],
            line: 381,
        );
    }

    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-last', 'args' => []],
            expected: [],
            line: 382,
        );
    }

    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-memory.grow-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 384,
        );
    }

    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 385,
        );
    }

    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-return-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 386,
        );
    }

    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-drop-operand', 'args' => []],
            expected: [],
            line: 387,
        );
    }

    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 388,
        );
    }

    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.set-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 389,
        );
    }

    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.tee-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 390,
        );
    }

    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-global.set-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 391,
        );
    }

    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-load-operand', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 392,
        );
    }

    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-unary-operand', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 394,
        );
    }

    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-operand', 'args' => []],
            expected: [['type' => 'i32', 'value' => '12']],
            line: 395,
        );
    }

    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-test-operand', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 396,
        );
    }

    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-operand', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 397,
        );
    }

    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-operands', 'args' => []],
            expected: [['type' => 'i32', 'value' => '12']],
            line: 398,
        );
    }

    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-operands', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 399,
        );
    }

    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-mixed-operands', 'args' => []],
            expected: [['type' => 'i32', 'value' => '27']],
            line: 400,
        );
    }

    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-bare', 'args' => []],
            expected: [['type' => 'i32', 'value' => '19']],
            line: 402,
        );
    }

    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '18']],
            line: 403,
        );
    }

    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-multi-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '18'], ['type' => 'i32', 'value' => '4294967278'], ['type' => 'i64', 'value' => '18']],
            line: 404,
        );
    }

    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-repeated', 'args' => []],
            expected: [['type' => 'i32', 'value' => '18']],
            line: 407,
        );
    }

    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-inner', 'args' => []],
            expected: [['type' => 'i32', 'value' => '15']],
            line: 408,
        );
    }

    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'param', 'args' => []],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 410,
        );
    }

    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'params', 'args' => []],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 411,
        );
    }

    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'params-id', 'args' => []],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 412,
        );
    }

    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'param-break', 'args' => []],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 413,
        );
    }

    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'params-break', 'args' => []],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 414,
        );
    }

    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'params-id-break', 'args' => []],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 415,
        );
    }

    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'effects', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 417,
        );
    }

    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-use', 'args' => []],
            expected: [],
            line: 419,
        );
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed53(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed54(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed55(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed56(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed57(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed58(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed59(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed60(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed61(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed62(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed63(): void
    {
    }

    public function testAssertInvalid64(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.12.wasm',
            text: 'type mismatch',
            line: 497,
        );
    }

    public function testAssertInvalid65(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.13.wasm',
            text: 'type mismatch',
            line: 505,
        );
    }

    public function testAssertInvalid66(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.14.wasm',
            text: 'type mismatch',
            line: 509,
        );
    }

    public function testAssertInvalid67(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.15.wasm',
            text: 'type mismatch',
            line: 513,
        );
    }

    public function testAssertInvalid68(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.16.wasm',
            text: 'type mismatch',
            line: 517,
        );
    }

    public function testAssertInvalid69(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.17.wasm',
            text: 'type mismatch',
            line: 522,
        );
    }

    public function testAssertInvalid70(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.18.wasm',
            text: 'type mismatch',
            line: 528,
        );
    }

    public function testAssertInvalid71(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.19.wasm',
            text: 'type mismatch',
            line: 534,
        );
    }

    public function testAssertInvalid72(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.20.wasm',
            text: 'type mismatch',
            line: 540,
        );
    }

    public function testAssertInvalid73(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.21.wasm',
            text: 'type mismatch',
            line: 546,
        );
    }

    public function testAssertInvalid74(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.22.wasm',
            text: 'type mismatch',
            line: 552,
        );
    }

    public function testAssertInvalid75(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.23.wasm',
            text: 'type mismatch',
            line: 558,
        );
    }

    public function testAssertInvalid76(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.24.wasm',
            text: 'type mismatch',
            line: 564,
        );
    }

    public function testAssertInvalid77(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.25.wasm',
            text: 'type mismatch',
            line: 570,
        );
    }

    public function testAssertInvalid78(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.26.wasm',
            text: 'type mismatch',
            line: 576,
        );
    }

    public function testAssertInvalid79(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.27.wasm',
            text: 'type mismatch',
            line: 583,
        );
    }

    public function testAssertInvalid80(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.28.wasm',
            text: 'type mismatch',
            line: 592,
        );
    }

    public function testAssertInvalid81(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.29.wasm',
            text: 'type mismatch',
            line: 601,
        );
    }

    public function testAssertInvalid82(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.30.wasm',
            text: 'type mismatch',
            line: 611,
        );
    }

    public function testAssertInvalid83(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.31.wasm',
            text: 'type mismatch',
            line: 617,
        );
    }

    public function testAssertInvalid84(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.32.wasm',
            text: 'type mismatch',
            line: 623,
        );
    }

    public function testAssertInvalid85(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.33.wasm',
            text: 'type mismatch',
            line: 629,
        );
    }

    public function testAssertInvalid86(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.34.wasm',
            text: 'type mismatch',
            line: 635,
        );
    }

    public function testAssertInvalid87(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.35.wasm',
            text: 'type mismatch',
            line: 641,
        );
    }

    public function testAssertInvalid88(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.36.wasm',
            text: 'type mismatch',
            line: 647,
        );
    }

    public function testAssertInvalid89(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.37.wasm',
            text: 'type mismatch',
            line: 653,
        );
    }

    public function testAssertInvalid90(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.38.wasm',
            text: 'type mismatch',
            line: 659,
        );
    }

    public function testAssertInvalid91(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.39.wasm',
            text: 'type mismatch',
            line: 665,
        );
    }

    public function testAssertInvalid92(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.40.wasm',
            text: 'type mismatch',
            line: 671,
        );
    }

    public function testAssertInvalid93(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.41.wasm',
            text: 'type mismatch',
            line: 677,
        );
    }

    public function testAssertInvalid94(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.42.wasm',
            text: 'type mismatch',
            line: 683,
        );
    }

    public function testAssertInvalid95(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.43.wasm',
            text: 'type mismatch',
            line: 689,
        );
    }

    public function testAssertInvalid96(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.44.wasm',
            text: 'type mismatch',
            line: 695,
        );
    }

    public function testAssertInvalid97(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.45.wasm',
            text: 'type mismatch',
            line: 701,
        );
    }

    public function testAssertInvalid98(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.46.wasm',
            text: 'type mismatch',
            line: 707,
        );
    }

    public function testAssertInvalid99(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.47.wasm',
            text: 'type mismatch',
            line: 713,
        );
    }

    public function testAssertInvalid100(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.48.wasm',
            text: 'type mismatch',
            line: 719,
        );
    }

    public function testAssertInvalid101(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.49.wasm',
            text: 'type mismatch',
            line: 725,
        );
    }

    public function testAssertInvalid102(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.50.wasm',
            text: 'type mismatch',
            line: 732,
        );
    }

    public function testAssertInvalid103(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.51.wasm',
            text: 'type mismatch',
            line: 738,
        );
    }

    public function testAssertInvalid104(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.52.wasm',
            text: 'type mismatch',
            line: 744,
        );
    }

    public function testAssertInvalid105(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.53.wasm',
            text: 'type mismatch',
            line: 750,
        );
    }

    public function testAssertInvalid106(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.54.wasm',
            text: 'type mismatch',
            line: 756,
        );
    }

    public function testAssertInvalid107(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.55.wasm',
            text: 'type mismatch',
            line: 762,
        );
    }

    public function testAssertInvalid108(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.56.wasm',
            text: 'type mismatch',
            line: 768,
        );
    }

    public function testAssertInvalid109(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.57.wasm',
            text: 'type mismatch',
            line: 774,
        );
    }

    public function testAssertInvalid110(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.58.wasm',
            text: 'type mismatch',
            line: 780,
        );
    }

    public function testAssertInvalid111(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.59.wasm',
            text: 'type mismatch',
            line: 786,
        );
    }

    public function testAssertInvalid112(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.60.wasm',
            text: 'type mismatch',
            line: 792,
        );
    }

    public function testAssertInvalid113(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.61.wasm',
            text: 'type mismatch',
            line: 798,
        );
    }

    public function testAssertInvalid114(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.62.wasm',
            text: 'type mismatch',
            line: 805,
        );
    }

    public function testAssertInvalid115(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.63.wasm',
            text: 'type mismatch',
            line: 811,
        );
    }

    public function testAssertInvalid116(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.64.wasm',
            text: 'type mismatch',
            line: 817,
        );
    }

    public function testAssertInvalid117(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.65.wasm',
            text: 'type mismatch',
            line: 823,
        );
    }

    public function testAssertInvalid118(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.66.wasm',
            text: 'type mismatch',
            line: 829,
        );
    }

    public function testAssertInvalid119(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.67.wasm',
            text: 'type mismatch',
            line: 836,
        );
    }

    public function testAssertInvalid120(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.68.wasm',
            text: 'type mismatch',
            line: 842,
        );
    }

    public function testAssertInvalid121(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.69.wasm',
            text: 'type mismatch',
            line: 848,
        );
    }

    public function testAssertInvalid122(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.70.wasm',
            text: 'type mismatch',
            line: 854,
        );
    }

    public function testAssertInvalid123(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.71.wasm',
            text: 'type mismatch',
            line: 860,
        );
    }

    public function testAssertInvalid124(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.72.wasm',
            text: 'type mismatch',
            line: 867,
        );
    }

    public function testAssertInvalid125(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.73.wasm',
            text: 'type mismatch',
            line: 873,
        );
    }

    public function testAssertInvalid126(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.74.wasm',
            text: 'type mismatch',
            line: 879,
        );
    }

    public function testAssertInvalid127(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.75.wasm',
            text: 'type mismatch',
            line: 885,
        );
    }

    public function testAssertInvalid128(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.76.wasm',
            text: 'type mismatch',
            line: 892,
        );
    }

    public function testAssertInvalid129(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.77.wasm',
            text: 'type mismatch',
            line: 898,
        );
    }

    public function testAssertInvalid130(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.78.wasm',
            text: 'type mismatch',
            line: 904,
        );
    }

    public function testAssertInvalid131(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.79.wasm',
            text: 'type mismatch',
            line: 910,
        );
    }

    public function testAssertInvalid132(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.80.wasm',
            text: 'type mismatch',
            line: 916,
        );
    }

    public function testAssertInvalid133(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.81.wasm',
            text: 'type mismatch',
            line: 922,
        );
    }

    public function testAssertInvalid134(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.82.wasm',
            text: 'type mismatch',
            line: 928,
        );
    }

    public function testAssertInvalid135(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.83.wasm',
            text: 'type mismatch',
            line: 934,
        );
    }

    public function testAssertInvalid136(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.84.wasm',
            text: 'type mismatch',
            line: 940,
        );
    }

    public function testAssertInvalid137(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.85.wasm',
            text: 'type mismatch',
            line: 946,
        );
    }

    public function testAssertInvalid138(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.86.wasm',
            text: 'type mismatch',
            line: 952,
        );
    }

    public function testAssertInvalid139(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.87.wasm',
            text: 'type mismatch',
            line: 958,
        );
    }

    public function testAssertInvalid140(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.88.wasm',
            text: 'type mismatch',
            line: 964,
        );
    }

    public function testAssertInvalid141(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.89.wasm',
            text: 'type mismatch',
            line: 970,
        );
    }

    public function testAssertInvalid142(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.90.wasm',
            text: 'type mismatch',
            line: 977,
        );
    }

    public function testAssertInvalid143(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.91.wasm',
            text: 'type mismatch',
            line: 983,
        );
    }

    public function testAssertInvalid144(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.92.wasm',
            text: 'type mismatch',
            line: 989,
        );
    }

    public function testAssertInvalid145(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.93.wasm',
            text: 'type mismatch',
            line: 995,
        );
    }

    public function testAssertInvalid146(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.94.wasm',
            text: 'type mismatch',
            line: 1001,
        );
    }

    public function testAssertInvalid147(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.95.wasm',
            text: 'type mismatch',
            line: 1008,
        );
    }

    public function testAssertInvalid148(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.96.wasm',
            text: 'type mismatch',
            line: 1014,
        );
    }

    public function testAssertInvalid149(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.97.wasm',
            text: 'type mismatch',
            line: 1020,
        );
    }

    public function testAssertInvalid150(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.98.wasm',
            text: 'type mismatch',
            line: 1026,
        );
    }

    public function testAssertInvalid151(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.99.wasm',
            text: 'type mismatch',
            line: 1032,
        );
    }

    public function testAssertInvalid152(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.100.wasm',
            text: 'type mismatch',
            line: 1038,
        );
    }

    public function testAssertInvalid153(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.101.wasm',
            text: 'type mismatch',
            line: 1044,
        );
    }

    public function testAssertInvalid154(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.102.wasm',
            text: 'type mismatch',
            line: 1050,
        );
    }

    public function testAssertInvalid155(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.103.wasm',
            text: 'type mismatch',
            line: 1056,
        );
    }

    public function testAssertInvalid156(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.104.wasm',
            text: 'type mismatch',
            line: 1062,
        );
    }

    public function testAssertInvalid157(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.105.wasm',
            text: 'type mismatch',
            line: 1068,
        );
    }

    public function testAssertInvalid158(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.106.wasm',
            text: 'type mismatch',
            line: 1074,
        );
    }

    public function testAssertInvalid159(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.107.wasm',
            text: 'type mismatch',
            line: 1080,
        );
    }

    public function testAssertInvalid160(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.108.wasm',
            text: 'type mismatch',
            line: 1087,
        );
    }

    public function testAssertInvalid161(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.109.wasm',
            text: 'type mismatch',
            line: 1093,
        );
    }

    public function testAssertInvalid162(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.110.wasm',
            text: 'type mismatch',
            line: 1099,
        );
    }

    public function testAssertInvalid163(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.111.wasm',
            text: 'type mismatch',
            line: 1105,
        );
    }

    public function testAssertInvalid164(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.112.wasm',
            text: 'type mismatch',
            line: 1111,
        );
    }

    public function testAssertInvalid165(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.113.wasm',
            text: 'type mismatch',
            line: 1118,
        );
    }

    public function testAssertInvalid166(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.114.wasm',
            text: 'type mismatch',
            line: 1124,
        );
    }

    public function testAssertInvalid167(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.115.wasm',
            text: 'type mismatch',
            line: 1130,
        );
    }

    public function testAssertInvalid168(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.116.wasm',
            text: 'type mismatch',
            line: 1136,
        );
    }

    public function testAssertInvalid169(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.117.wasm',
            text: 'type mismatch',
            line: 1142,
        );
    }

    public function testAssertInvalid170(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.118.wasm',
            text: 'type mismatch',
            line: 1149,
        );
    }

    public function testAssertInvalid171(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.119.wasm',
            text: 'type mismatch',
            line: 1155,
        );
    }

    public function testAssertInvalid172(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.120.wasm',
            text: 'type mismatch',
            line: 1161,
        );
    }

    public function testAssertInvalid173(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.121.wasm',
            text: 'type mismatch',
            line: 1167,
        );
    }

    public function testAssertInvalid174(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.122.wasm',
            text: 'type mismatch',
            line: 1173,
        );
    }

    public function testAssertInvalid175(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.123.wasm',
            text: 'type mismatch',
            line: 1180,
        );
    }

    public function testAssertInvalid176(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.124.wasm',
            text: 'type mismatch',
            line: 1188,
        );
    }

    public function testAssertInvalid177(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.125.wasm',
            text: 'type mismatch',
            line: 1196,
        );
    }

    public function testAssertInvalid178(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.126.wasm',
            text: 'type mismatch',
            line: 1204,
        );
    }

    public function testAssertInvalid179(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.127.wasm',
            text: 'type mismatch',
            line: 1212,
        );
    }

    public function testAssertInvalid180(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.128.wasm',
            text: 'type mismatch',
            line: 1220,
        );
    }

    public function testAssertInvalid181(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.129.wasm',
            text: 'type mismatch',
            line: 1228,
        );
    }

    public function testAssertInvalid182(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.130.wasm',
            text: 'type mismatch',
            line: 1236,
        );
    }

    public function testAssertInvalid183(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.131.wasm',
            text: 'type mismatch',
            line: 1244,
        );
    }

    public function testAssertInvalid184(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.132.wasm',
            text: 'type mismatch',
            line: 1252,
        );
    }

    public function testAssertInvalid185(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.133.wasm',
            text: 'type mismatch',
            line: 1260,
        );
    }

    public function testAssertInvalid186(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.134.wasm',
            text: 'type mismatch',
            line: 1268,
        );
    }

    public function testAssertInvalid187(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.135.wasm',
            text: 'type mismatch',
            line: 1276,
        );
    }

    public function testAssertInvalid188(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.136.wasm',
            text: 'type mismatch',
            line: 1285,
        );
    }

    public function testAssertInvalid189(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.137.wasm',
            text: 'type mismatch',
            line: 1291,
        );
    }

    public function testAssertInvalid190(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.138.wasm',
            text: 'type mismatch',
            line: 1297,
        );
    }

    public function testAssertInvalid191(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.139.wasm',
            text: 'type mismatch',
            line: 1303,
        );
    }

    public function testAssertInvalid192(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.140.wasm',
            text: 'type mismatch',
            line: 1309,
        );
    }

    public function testAssertInvalid193(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.141.wasm',
            text: 'type mismatch',
            line: 1316,
        );
    }

    public function testAssertInvalid194(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.142.wasm',
            text: 'type mismatch',
            line: 1322,
        );
    }

    public function testAssertInvalid195(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.143.wasm',
            text: 'type mismatch',
            line: 1328,
        );
    }

    public function testAssertInvalid196(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.144.wasm',
            text: 'type mismatch',
            line: 1334,
        );
    }

    public function testAssertInvalid197(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.145.wasm',
            text: 'type mismatch',
            line: 1340,
        );
    }

    public function testAssertInvalid198(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.146.wasm',
            text: 'type mismatch',
            line: 1347,
        );
    }

    public function testAssertInvalid199(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.147.wasm',
            text: 'type mismatch',
            line: 1353,
        );
    }

    public function testAssertInvalid200(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.148.wasm',
            text: 'type mismatch',
            line: 1359,
        );
    }

    public function testAssertInvalid201(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.149.wasm',
            text: 'type mismatch',
            line: 1365,
        );
    }

    public function testAssertInvalid202(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.150.wasm',
            text: 'type mismatch',
            line: 1371,
        );
    }

    public function testAssertInvalid203(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.151.wasm',
            text: 'type mismatch',
            line: 1377,
        );
    }

    public function testAssertInvalid204(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.152.wasm',
            text: 'type mismatch',
            line: 1383,
        );
    }

    public function testAssertInvalid205(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.153.wasm',
            text: 'type mismatch',
            line: 1389,
        );
    }

    public function testAssertInvalid206(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.154.wasm',
            text: 'type mismatch',
            line: 1395,
        );
    }

    public function testAssertInvalid207(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.155.wasm',
            text: 'type mismatch',
            line: 1401,
        );
    }

    public function testAssertInvalid208(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.156.wasm',
            text: 'type mismatch',
            line: 1407,
        );
    }

    public function testAssertInvalid209(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.157.wasm',
            text: 'type mismatch',
            line: 1413,
        );
    }

    public function testAssertInvalid210(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.158.wasm',
            text: 'type mismatch',
            line: 1419,
        );
    }

    public function testAssertInvalid211(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.159.wasm',
            text: 'type mismatch',
            line: 1426,
        );
    }

    public function testAssertInvalid212(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.160.wasm',
            text: 'type mismatch',
            line: 1432,
        );
    }

    public function testAssertInvalid213(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.161.wasm',
            text: 'type mismatch',
            line: 1438,
        );
    }

    public function testAssertInvalid214(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.162.wasm',
            text: 'type mismatch',
            line: 1444,
        );
    }

    public function testAssertInvalid215(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.163.wasm',
            text: 'type mismatch',
            line: 1450,
        );
    }

    public function testAssertInvalid216(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.164.wasm',
            text: 'type mismatch',
            line: 1456,
        );
    }

    public function testAssertInvalid217(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.165.wasm',
            text: 'type mismatch',
            line: 1462,
        );
    }

    public function testAssertInvalid218(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'block.166.wasm',
            text: 'type mismatch',
            line: 1468,
        );
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed219(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed220(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed221(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed222(): void
    {
    }
}
