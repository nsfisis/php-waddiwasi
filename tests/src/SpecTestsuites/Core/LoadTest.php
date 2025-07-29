<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class LoadTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'load.0.wasm',
            name: null,
            line: 3,
        );
    }

    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 161,
        );
    }

    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-cond', 'args' => []],
            expected: [],
            line: 163,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 164,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-value-cond', 'args' => []],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 165,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-index', 'args' => []],
            expected: [],
            line: 167,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 168,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-value-index', 'args' => []],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 169,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-return-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 171,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-cond', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 173,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-then', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 174,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-else', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 175,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-first', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 177,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-second', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 178,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-cond', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 179,
        );
    }

    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 181,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call-mid', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 182,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 183,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 185,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-mid', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 186,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 187,
        );
    }

    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-index', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 188,
        );
    }

    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.set-value', 'args' => []],
            expected: [],
            line: 190,
        );
    }

    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.tee-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 191,
        );
    }

    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-global.set-value', 'args' => []],
            expected: [],
            line: 192,
        );
    }

    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-load-address', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 194,
        );
    }

    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loadN-address', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 195,
        );
    }

    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-address', 'args' => []],
            expected: [],
            line: 196,
        );
    }

    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-value', 'args' => []],
            expected: [],
            line: 197,
        );
    }

    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-storeN-address', 'args' => []],
            expected: [],
            line: 198,
        );
    }

    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-storeN-value', 'args' => []],
            expected: [],
            line: 199,
        );
    }

    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-unary-operand', 'args' => []],
            expected: [['type' => 'i32', 'value' => '32']],
            line: 201,
        );
    }

    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-left', 'args' => []],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 203,
        );
    }

    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-right', 'args' => []],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 204,
        );
    }

    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-test-operand', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 206,
        );
    }

    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-left', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 208,
        );
    }

    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-right', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 209,
        );
    }

    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-memory.grow-size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 211,
        );
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed38(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed39(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed40(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed41(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed42(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed43(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed44(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed45(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed46(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed47(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed48(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed49(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed50(): void
    {
    }

    public function testAssertInvalid51(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.14.wasm',
            text: 'type mismatch',
            line: 312,
        );
    }

    public function testAssertInvalid52(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.15.wasm',
            text: 'type mismatch',
            line: 316,
        );
    }

    public function testAssertInvalid53(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.16.wasm',
            text: 'type mismatch',
            line: 320,
        );
    }

    public function testAssertInvalid54(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.17.wasm',
            text: 'type mismatch',
            line: 324,
        );
    }

    public function testAssertInvalid55(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.18.wasm',
            text: 'type mismatch',
            line: 328,
        );
    }

    public function testAssertInvalid56(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.19.wasm',
            text: 'type mismatch',
            line: 332,
        );
    }

    public function testAssertInvalid57(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.20.wasm',
            text: 'type mismatch',
            line: 336,
        );
    }

    public function testAssertInvalid58(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.21.wasm',
            text: 'type mismatch',
            line: 340,
        );
    }

    public function testAssertInvalid59(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.22.wasm',
            text: 'type mismatch',
            line: 344,
        );
    }

    public function testAssertInvalid60(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.23.wasm',
            text: 'type mismatch',
            line: 348,
        );
    }

    public function testAssertInvalid61(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.24.wasm',
            text: 'type mismatch',
            line: 352,
        );
    }

    public function testAssertInvalid62(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.25.wasm',
            text: 'type mismatch',
            line: 356,
        );
    }

    public function testAssertInvalid63(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.26.wasm',
            text: 'type mismatch',
            line: 360,
        );
    }

    public function testAssertInvalid64(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.27.wasm',
            text: 'type mismatch',
            line: 364,
        );
    }

    public function testAssertInvalid65(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.28.wasm',
            text: 'type mismatch',
            line: 371,
        );
    }

    public function testAssertInvalid66(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.29.wasm',
            text: 'type mismatch',
            line: 372,
        );
    }

    public function testAssertInvalid67(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.30.wasm',
            text: 'type mismatch',
            line: 373,
        );
    }

    public function testAssertInvalid68(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.31.wasm',
            text: 'type mismatch',
            line: 374,
        );
    }

    public function testAssertInvalid69(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.32.wasm',
            text: 'type mismatch',
            line: 375,
        );
    }

    public function testAssertInvalid70(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.33.wasm',
            text: 'type mismatch',
            line: 376,
        );
    }

    public function testAssertInvalid71(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.34.wasm',
            text: 'type mismatch',
            line: 377,
        );
    }

    public function testAssertInvalid72(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.35.wasm',
            text: 'type mismatch',
            line: 378,
        );
    }

    public function testAssertInvalid73(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.36.wasm',
            text: 'type mismatch',
            line: 379,
        );
    }

    public function testAssertInvalid74(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.37.wasm',
            text: 'type mismatch',
            line: 380,
        );
    }

    public function testAssertInvalid75(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.38.wasm',
            text: 'type mismatch',
            line: 381,
        );
    }

    public function testAssertInvalid76(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.39.wasm',
            text: 'type mismatch',
            line: 382,
        );
    }

    public function testAssertInvalid77(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.40.wasm',
            text: 'type mismatch',
            line: 383,
        );
    }

    public function testAssertInvalid78(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.41.wasm',
            text: 'type mismatch',
            line: 384,
        );
    }

    public function testAssertInvalid79(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.42.wasm',
            text: 'type mismatch',
            line: 388,
        );
    }

    public function testAssertInvalid80(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.43.wasm',
            text: 'type mismatch',
            line: 397,
        );
    }

    public function testAssertInvalid81(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.44.wasm',
            text: 'type mismatch',
            line: 407,
        );
    }

    public function testAssertInvalid82(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.45.wasm',
            text: 'type mismatch',
            line: 417,
        );
    }

    public function testAssertInvalid83(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.46.wasm',
            text: 'type mismatch',
            line: 427,
        );
    }

    public function testAssertInvalid84(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.47.wasm',
            text: 'type mismatch',
            line: 437,
        );
    }

    public function testAssertInvalid85(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.48.wasm',
            text: 'type mismatch',
            line: 447,
        );
    }

    public function testAssertInvalid86(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.49.wasm',
            text: 'type mismatch',
            line: 457,
        );
    }

    public function testAssertInvalid87(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.50.wasm',
            text: 'type mismatch',
            line: 467,
        );
    }

    public function testAssertInvalid88(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.51.wasm',
            text: 'type mismatch',
            line: 476,
        );
    }

    public function testAssertInvalid89(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.52.wasm',
            text: 'type mismatch',
            line: 485,
        );
    }

    public function testAssertInvalid90(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.53.wasm',
            text: 'type mismatch',
            line: 495,
        );
    }

    public function testAssertInvalid91(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.54.wasm',
            text: 'type mismatch',
            line: 512,
        );
    }

    public function testAssertInvalid92(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.55.wasm',
            text: 'type mismatch',
            line: 522,
        );
    }

    public function testAssertInvalid93(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.56.wasm',
            text: 'type mismatch',
            line: 532,
        );
    }

    public function testAssertInvalid94(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.57.wasm',
            text: 'type mismatch',
            line: 542,
        );
    }

    public function testAssertInvalid95(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.58.wasm',
            text: 'type mismatch',
            line: 551,
        );
    }

    public function testAssertInvalid96(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'load.59.wasm',
            text: 'type mismatch',
            line: 560,
        );
    }
}
