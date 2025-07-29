<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class MemoryFillTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'memory_fill.0.wasm',
            name: null,
            line: 6,
        );
    }

    public function testAction1(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 22,
        );
    }

    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'checkRange', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '65280'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 24,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'checkRange', 'args' => [['type' => 'i32', 'value' => '65280'], ['type' => 'i32', 'value' => '65536'], ['type' => 'i32', 'value' => '85']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 26,
        );
    }

    public function testModule4(): void
    {
        $this->runModuleCommand(
            filename: 'memory_fill.1.wasm',
            name: null,
            line: 28,
        );
    }

    public function testAssertTrap5(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds memory access',
            line: 44,
        );
    }

    public function testModule6(): void
    {
        $this->runModuleCommand(
            filename: 'memory_fill.2.wasm',
            name: null,
            line: 46,
        );
    }

    public function testAssertTrap7(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds memory access',
            line: 62,
        );
    }

    public function testModule8(): void
    {
        $this->runModuleCommand(
            filename: 'memory_fill.3.wasm',
            name: null,
            line: 64,
        );
    }

    public function testAction9(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 80,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'checkRange', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '65536'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 82,
        );
    }

    public function testModule11(): void
    {
        $this->runModuleCommand(
            filename: 'memory_fill.4.wasm',
            name: null,
            line: 84,
        );
    }

    public function testAction12(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 100,
        );
    }

    public function testModule13(): void
    {
        $this->runModuleCommand(
            filename: 'memory_fill.5.wasm',
            name: null,
            line: 102,
        );
    }

    public function testAssertTrap14(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds memory access',
            line: 118,
        );
    }

    public function testModule15(): void
    {
        $this->runModuleCommand(
            filename: 'memory_fill.6.wasm',
            name: null,
            line: 120,
        );
    }

    public function testAction16(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 136,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'checkRange', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 138,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'checkRange', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '65535'], ['type' => 'i32', 'value' => '170']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 140,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'checkRange', 'args' => [['type' => 'i32', 'value' => '65535'], ['type' => 'i32', 'value' => '65536'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 142,
        );
    }

    public function testModule20(): void
    {
        $this->runModuleCommand(
            filename: 'memory_fill.7.wasm',
            name: null,
            line: 145,
        );
    }

    public function testAction21(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 162,
        );
    }

    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'checkRange', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '18'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 164,
        );
    }

    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'checkRange', 'args' => [['type' => 'i32', 'value' => '18'], ['type' => 'i32', 'value' => '21'], ['type' => 'i32', 'value' => '85']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 166,
        );
    }

    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'checkRange', 'args' => [['type' => 'i32', 'value' => '21'], ['type' => 'i32', 'value' => '25'], ['type' => 'i32', 'value' => '170']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 168,
        );
    }

    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'checkRange', 'args' => [['type' => 'i32', 'value' => '25'], ['type' => 'i32', 'value' => '28'], ['type' => 'i32', 'value' => '85']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 170,
        );
    }

    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'checkRange', 'args' => [['type' => 'i32', 'value' => '28'], ['type' => 'i32', 'value' => '65536'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 172,
        );
    }

    public function testAssertInvalid27(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.8.wasm',
            text: 'unknown memory 0',
            line: 175,
        );
    }

    public function testAssertInvalid28(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.9.wasm',
            text: 'type mismatch',
            line: 181,
        );
    }

    public function testAssertInvalid29(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.10.wasm',
            text: 'type mismatch',
            line: 188,
        );
    }

    public function testAssertInvalid30(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.11.wasm',
            text: 'type mismatch',
            line: 195,
        );
    }

    public function testAssertInvalid31(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.12.wasm',
            text: 'type mismatch',
            line: 202,
        );
    }

    public function testAssertInvalid32(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.13.wasm',
            text: 'type mismatch',
            line: 209,
        );
    }

    public function testAssertInvalid33(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.14.wasm',
            text: 'type mismatch',
            line: 216,
        );
    }

    public function testAssertInvalid34(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.15.wasm',
            text: 'type mismatch',
            line: 223,
        );
    }

    public function testAssertInvalid35(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.16.wasm',
            text: 'type mismatch',
            line: 230,
        );
    }

    public function testAssertInvalid36(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.17.wasm',
            text: 'type mismatch',
            line: 237,
        );
    }

    public function testAssertInvalid37(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.18.wasm',
            text: 'type mismatch',
            line: 244,
        );
    }

    public function testAssertInvalid38(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.19.wasm',
            text: 'type mismatch',
            line: 251,
        );
    }

    public function testAssertInvalid39(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.20.wasm',
            text: 'type mismatch',
            line: 258,
        );
    }

    public function testAssertInvalid40(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.21.wasm',
            text: 'type mismatch',
            line: 265,
        );
    }

    public function testAssertInvalid41(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.22.wasm',
            text: 'type mismatch',
            line: 272,
        );
    }

    public function testAssertInvalid42(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.23.wasm',
            text: 'type mismatch',
            line: 279,
        );
    }

    public function testAssertInvalid43(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.24.wasm',
            text: 'type mismatch',
            line: 286,
        );
    }

    public function testAssertInvalid44(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.25.wasm',
            text: 'type mismatch',
            line: 293,
        );
    }

    public function testAssertInvalid45(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.26.wasm',
            text: 'type mismatch',
            line: 300,
        );
    }

    public function testAssertInvalid46(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.27.wasm',
            text: 'type mismatch',
            line: 307,
        );
    }

    public function testAssertInvalid47(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.28.wasm',
            text: 'type mismatch',
            line: 314,
        );
    }

    public function testAssertInvalid48(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.29.wasm',
            text: 'type mismatch',
            line: 321,
        );
    }

    public function testAssertInvalid49(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.30.wasm',
            text: 'type mismatch',
            line: 328,
        );
    }

    public function testAssertInvalid50(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.31.wasm',
            text: 'type mismatch',
            line: 335,
        );
    }

    public function testAssertInvalid51(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.32.wasm',
            text: 'type mismatch',
            line: 342,
        );
    }

    public function testAssertInvalid52(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.33.wasm',
            text: 'type mismatch',
            line: 349,
        );
    }

    public function testAssertInvalid53(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.34.wasm',
            text: 'type mismatch',
            line: 356,
        );
    }

    public function testAssertInvalid54(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.35.wasm',
            text: 'type mismatch',
            line: 363,
        );
    }

    public function testAssertInvalid55(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.36.wasm',
            text: 'type mismatch',
            line: 370,
        );
    }

    public function testAssertInvalid56(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.37.wasm',
            text: 'type mismatch',
            line: 377,
        );
    }

    public function testAssertInvalid57(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.38.wasm',
            text: 'type mismatch',
            line: 384,
        );
    }

    public function testAssertInvalid58(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.39.wasm',
            text: 'type mismatch',
            line: 391,
        );
    }

    public function testAssertInvalid59(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.40.wasm',
            text: 'type mismatch',
            line: 398,
        );
    }

    public function testAssertInvalid60(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.41.wasm',
            text: 'type mismatch',
            line: 405,
        );
    }

    public function testAssertInvalid61(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.42.wasm',
            text: 'type mismatch',
            line: 412,
        );
    }

    public function testAssertInvalid62(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.43.wasm',
            text: 'type mismatch',
            line: 419,
        );
    }

    public function testAssertInvalid63(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.44.wasm',
            text: 'type mismatch',
            line: 426,
        );
    }

    public function testAssertInvalid64(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.45.wasm',
            text: 'type mismatch',
            line: 433,
        );
    }

    public function testAssertInvalid65(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.46.wasm',
            text: 'type mismatch',
            line: 440,
        );
    }

    public function testAssertInvalid66(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.47.wasm',
            text: 'type mismatch',
            line: 447,
        );
    }

    public function testAssertInvalid67(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.48.wasm',
            text: 'type mismatch',
            line: 454,
        );
    }

    public function testAssertInvalid68(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.49.wasm',
            text: 'type mismatch',
            line: 461,
        );
    }

    public function testAssertInvalid69(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.50.wasm',
            text: 'type mismatch',
            line: 468,
        );
    }

    public function testAssertInvalid70(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.51.wasm',
            text: 'type mismatch',
            line: 475,
        );
    }

    public function testAssertInvalid71(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.52.wasm',
            text: 'type mismatch',
            line: 482,
        );
    }

    public function testAssertInvalid72(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.53.wasm',
            text: 'type mismatch',
            line: 489,
        );
    }

    public function testAssertInvalid73(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.54.wasm',
            text: 'type mismatch',
            line: 496,
        );
    }

    public function testAssertInvalid74(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.55.wasm',
            text: 'type mismatch',
            line: 503,
        );
    }

    public function testAssertInvalid75(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.56.wasm',
            text: 'type mismatch',
            line: 510,
        );
    }

    public function testAssertInvalid76(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.57.wasm',
            text: 'type mismatch',
            line: 517,
        );
    }

    public function testAssertInvalid77(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.58.wasm',
            text: 'type mismatch',
            line: 524,
        );
    }

    public function testAssertInvalid78(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.59.wasm',
            text: 'type mismatch',
            line: 531,
        );
    }

    public function testAssertInvalid79(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.60.wasm',
            text: 'type mismatch',
            line: 538,
        );
    }

    public function testAssertInvalid80(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.61.wasm',
            text: 'type mismatch',
            line: 545,
        );
    }

    public function testAssertInvalid81(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.62.wasm',
            text: 'type mismatch',
            line: 552,
        );
    }

    public function testAssertInvalid82(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.63.wasm',
            text: 'type mismatch',
            line: 559,
        );
    }

    public function testAssertInvalid83(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.64.wasm',
            text: 'type mismatch',
            line: 566,
        );
    }

    public function testAssertInvalid84(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.65.wasm',
            text: 'type mismatch',
            line: 573,
        );
    }

    public function testAssertInvalid85(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.66.wasm',
            text: 'type mismatch',
            line: 580,
        );
    }

    public function testAssertInvalid86(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.67.wasm',
            text: 'type mismatch',
            line: 587,
        );
    }

    public function testAssertInvalid87(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.68.wasm',
            text: 'type mismatch',
            line: 594,
        );
    }

    public function testAssertInvalid88(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.69.wasm',
            text: 'type mismatch',
            line: 601,
        );
    }

    public function testAssertInvalid89(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.70.wasm',
            text: 'type mismatch',
            line: 608,
        );
    }

    public function testAssertInvalid90(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_fill.71.wasm',
            text: 'type mismatch',
            line: 615,
        );
    }

    public function testModule91(): void
    {
        $this->runModuleCommand(
            filename: 'memory_fill.72.wasm',
            name: null,
            line: 621,
        );
    }

    public function testAssertTrap92(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '65280'], ['type' => 'i32', 'value' => '37'], ['type' => 'i32', 'value' => '512']]],
            text: 'out of bounds memory access',
            line: 638,
        );
    }

    public function testAssertReturn93(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'checkRange', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 641,
        );
    }

    public function testModule94(): void
    {
        $this->runModuleCommand(
            filename: 'memory_fill.73.wasm',
            name: null,
            line: 643,
        );
    }

    public function testAssertTrap95(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '65279'], ['type' => 'i32', 'value' => '37'], ['type' => 'i32', 'value' => '514']]],
            text: 'out of bounds memory access',
            line: 660,
        );
    }

    public function testAssertReturn96(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'checkRange', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 663,
        );
    }

    public function testModule97(): void
    {
        $this->runModuleCommand(
            filename: 'memory_fill.74.wasm',
            name: null,
            line: 665,
        );
    }

    public function testAssertTrap98(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '65279'], ['type' => 'i32', 'value' => '37'], ['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 682,
        );
    }

    public function testAssertReturn99(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'checkRange', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 685,
        );
    }
}
