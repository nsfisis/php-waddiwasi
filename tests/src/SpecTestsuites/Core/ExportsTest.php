<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class ExportsTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'exports.0.wasm',
            name: null,
            line: 3,
        );
    }

    public function testModule1(): void
    {
        $this->runModuleCommand(
            filename: 'exports.1.wasm',
            name: null,
            line: 4,
        );
    }

    public function testModule2(): void
    {
        $this->runModuleCommand(
            filename: 'exports.2.wasm',
            name: null,
            line: 5,
        );
    }

    public function testModule3(): void
    {
        $this->runModuleCommand(
            filename: 'exports.3.wasm',
            name: null,
            line: 7,
        );
    }

    public function testModule4(): void
    {
        $this->runModuleCommand(
            filename: 'exports.4.wasm',
            name: null,
            line: 8,
        );
    }

    public function testModule5(): void
    {
        $this->runModuleCommand(
            filename: 'exports.5.wasm',
            name: null,
            line: 9,
        );
    }

    public function testModule6(): void
    {
        $this->runModuleCommand(
            filename: 'exports.6.wasm',
            name: null,
            line: 10,
        );
    }

    public function testModule7(): void
    {
        $this->runModuleCommand(
            filename: 'exports.7.wasm',
            name: null,
            line: 11,
        );
    }

    public function testModule8(): void
    {
        $this->runModuleCommand(
            filename: 'exports.8.wasm',
            name: null,
            line: 12,
        );
    }

    public function testModule9(): void
    {
        $this->runModuleCommand(
            filename: 'exports.9.wasm',
            name: null,
            line: 13,
        );
    }

    public function testModule10(): void
    {
        $this->runModuleCommand(
            filename: 'exports.10.wasm',
            name: null,
            line: 14,
        );
    }

    public function testModule11(): void
    {
        $this->runModuleCommand(
            filename: 'exports.11.wasm',
            name: '$Func',
            line: 16,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'e', 'args' => [['type' => 'i32', 'value' => '42']]],
            expected: [['type' => 'i32', 'value' => '43']],
            line: 22,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Func', 'field' => 'e', 'args' => [['type' => 'i32', 'value' => '42']]],
            expected: [['type' => 'i32', 'value' => '43']],
            line: 23,
        );
    }

    public function testModule14(): void
    {
        $this->runModuleCommand(
            filename: 'exports.12.wasm',
            name: null,
            line: 24,
        );
    }

    public function testModule15(): void
    {
        $this->runModuleCommand(
            filename: 'exports.13.wasm',
            name: '$Other1',
            line: 25,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Func', 'field' => 'e', 'args' => [['type' => 'i32', 'value' => '42']]],
            expected: [['type' => 'i32', 'value' => '43']],
            line: 26,
        );
    }

    public function testModule17(): void
    {
        $this->runModuleCommand(
            filename: 'exports.14.wasm',
            name: null,
            line: 28,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'a', 'args' => []],
            expected: [['type' => 'i32', 'value' => '42']],
            line: 34,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'b', 'args' => []],
            expected: [['type' => 'i32', 'value' => '42']],
            line: 35,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'c', 'args' => []],
            expected: [['type' => 'i32', 'value' => '42']],
            line: 36,
        );
    }

    public function testAssertInvalid21(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'exports.15.wasm',
            text: 'unknown function',
            line: 39,
        );
    }

    public function testAssertInvalid22(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'exports.16.wasm',
            text: 'unknown function',
            line: 43,
        );
    }

    public function testAssertInvalid23(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'exports.17.wasm',
            text: 'unknown function',
            line: 47,
        );
    }

    public function testAssertInvalid24(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'exports.18.wasm',
            text: 'duplicate export name',
            line: 51,
        );
    }

    public function testAssertInvalid25(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'exports.19.wasm',
            text: 'duplicate export name',
            line: 55,
        );
    }

    public function testAssertInvalid26(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'exports.20.wasm',
            text: 'duplicate export name',
            line: 59,
        );
    }

    public function testAssertInvalid27(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'exports.21.wasm',
            text: 'duplicate export name',
            line: 63,
        );
    }

    public function testAssertInvalid28(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'exports.22.wasm',
            text: 'duplicate export name',
            line: 67,
        );
    }

    public function testModule29(): void
    {
        $this->runModuleCommand(
            filename: 'exports.23.wasm',
            name: null,
            line: 74,
        );
    }

    public function testModule30(): void
    {
        $this->runModuleCommand(
            filename: 'exports.24.wasm',
            name: null,
            line: 75,
        );
    }

    public function testModule31(): void
    {
        $this->runModuleCommand(
            filename: 'exports.25.wasm',
            name: null,
            line: 76,
        );
    }

    public function testModule32(): void
    {
        $this->runModuleCommand(
            filename: 'exports.26.wasm',
            name: null,
            line: 78,
        );
    }

    public function testModule33(): void
    {
        $this->runModuleCommand(
            filename: 'exports.27.wasm',
            name: null,
            line: 79,
        );
    }

    public function testModule34(): void
    {
        $this->runModuleCommand(
            filename: 'exports.28.wasm',
            name: null,
            line: 80,
        );
    }

    public function testModule35(): void
    {
        $this->runModuleCommand(
            filename: 'exports.29.wasm',
            name: null,
            line: 81,
        );
    }

    public function testModule36(): void
    {
        $this->runModuleCommand(
            filename: 'exports.30.wasm',
            name: null,
            line: 82,
        );
    }

    public function testModule37(): void
    {
        $this->runModuleCommand(
            filename: 'exports.31.wasm',
            name: null,
            line: 83,
        );
    }

    public function testModule38(): void
    {
        $this->runModuleCommand(
            filename: 'exports.32.wasm',
            name: '$Global',
            line: 85,
        );
    }

    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'get', 'field' => 'e'],
            expected: [['type' => 'i32', 'value' => '42']],
            line: 89,
        );
    }

    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'get', 'module' => '$Global', 'field' => 'e'],
            expected: [['type' => 'i32', 'value' => '42']],
            line: 90,
        );
    }

    public function testModule41(): void
    {
        $this->runModuleCommand(
            filename: 'exports.33.wasm',
            name: null,
            line: 91,
        );
    }

    public function testModule42(): void
    {
        $this->runModuleCommand(
            filename: 'exports.34.wasm',
            name: '$Other2',
            line: 92,
        );
    }

    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'get', 'module' => '$Global', 'field' => 'e'],
            expected: [['type' => 'i32', 'value' => '42']],
            line: 93,
        );
    }

    public function testAssertInvalid44(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'exports.35.wasm',
            text: 'unknown global',
            line: 96,
        );
    }

    public function testAssertInvalid45(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'exports.36.wasm',
            text: 'unknown global',
            line: 100,
        );
    }

    public function testAssertInvalid46(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'exports.37.wasm',
            text: 'unknown global',
            line: 104,
        );
    }

    public function testAssertInvalid47(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'exports.38.wasm',
            text: 'duplicate export name',
            line: 108,
        );
    }

    public function testAssertInvalid48(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'exports.39.wasm',
            text: 'duplicate export name',
            line: 112,
        );
    }

    public function testAssertInvalid49(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'exports.40.wasm',
            text: 'duplicate export name',
            line: 116,
        );
    }

    public function testAssertInvalid50(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'exports.41.wasm',
            text: 'duplicate export name',
            line: 120,
        );
    }

    public function testAssertInvalid51(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'exports.42.wasm',
            text: 'duplicate export name',
            line: 124,
        );
    }

    public function testModule52(): void
    {
        $this->runModuleCommand(
            filename: 'exports.43.wasm',
            name: null,
            line: 131,
        );
    }

    public function testModule53(): void
    {
        $this->runModuleCommand(
            filename: 'exports.44.wasm',
            name: null,
            line: 132,
        );
    }

    public function testModule54(): void
    {
        $this->runModuleCommand(
            filename: 'exports.45.wasm',
            name: null,
            line: 133,
        );
    }

    public function testModule55(): void
    {
        $this->runModuleCommand(
            filename: 'exports.46.wasm',
            name: null,
            line: 135,
        );
    }

    public function testModule56(): void
    {
        $this->runModuleCommand(
            filename: 'exports.47.wasm',
            name: null,
            line: 136,
        );
    }

    public function testModule57(): void
    {
        $this->runModuleCommand(
            filename: 'exports.48.wasm',
            name: null,
            line: 137,
        );
    }

    public function testModule58(): void
    {
        $this->runModuleCommand(
            filename: 'exports.49.wasm',
            name: null,
            line: 138,
        );
    }

    public function testModule59(): void
    {
        $this->runModuleCommand(
            filename: 'exports.50.wasm',
            name: null,
            line: 139,
        );
    }

    public function testModule60(): void
    {
        $this->runModuleCommand(
            filename: 'exports.51.wasm',
            name: null,
            line: 140,
        );
    }

    public function testModule61(): void
    {
        $this->runModuleCommand(
            filename: 'exports.52.wasm',
            name: null,
            line: 141,
        );
    }

    public function testModule62(): void
    {
        $this->runModuleCommand(
            filename: 'exports.53.wasm',
            name: null,
            line: 142,
        );
    }

    public function testModule63(): void
    {
        $this->runModuleCommand(
            filename: 'exports.54.wasm',
            name: null,
            line: 143,
        );
    }

    public function testModule64(): void
    {
        $this->runModuleCommand(
            filename: 'exports.55.wasm',
            name: null,
            line: 144,
        );
    }

    public function testModule65(): void
    {
        $this->runModuleCommand(
            filename: 'exports.56.wasm',
            name: null,
            line: 145,
        );
    }

    public function testModule66(): void
    {
        $this->runModuleCommand(
            filename: 'exports.57.wasm',
            name: null,
            line: 146,
        );
    }

    public function testAssertInvalid67(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'exports.58.wasm',
            text: 'unknown table',
            line: 151,
        );
    }

    public function testAssertInvalid68(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'exports.59.wasm',
            text: 'unknown table',
            line: 155,
        );
    }

    public function testAssertInvalid69(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'exports.60.wasm',
            text: 'unknown table',
            line: 159,
        );
    }

    public function testAssertInvalid70(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'exports.61.wasm',
            text: 'duplicate export name',
            line: 163,
        );
    }

    public function testAssertInvalid71(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'exports.62.wasm',
            text: 'duplicate export name',
            line: 167,
        );
    }

    public function testAssertInvalid72(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'exports.63.wasm',
            text: 'duplicate export name',
            line: 171,
        );
    }

    public function testAssertInvalid73(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'exports.64.wasm',
            text: 'duplicate export name',
            line: 175,
        );
    }

    public function testAssertInvalid74(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'exports.65.wasm',
            text: 'duplicate export name',
            line: 179,
        );
    }

    public function testModule75(): void
    {
        $this->runModuleCommand(
            filename: 'exports.66.wasm',
            name: null,
            line: 186,
        );
    }

    public function testModule76(): void
    {
        $this->runModuleCommand(
            filename: 'exports.67.wasm',
            name: null,
            line: 187,
        );
    }

    public function testModule77(): void
    {
        $this->runModuleCommand(
            filename: 'exports.68.wasm',
            name: null,
            line: 191,
        );
    }

    public function testModule78(): void
    {
        $this->runModuleCommand(
            filename: 'exports.69.wasm',
            name: null,
            line: 192,
        );
    }

    public function testModule79(): void
    {
        $this->runModuleCommand(
            filename: 'exports.70.wasm',
            name: null,
            line: 193,
        );
    }

    public function testModule80(): void
    {
        $this->runModuleCommand(
            filename: 'exports.71.wasm',
            name: null,
            line: 194,
        );
    }

    public function testModule81(): void
    {
        $this->runModuleCommand(
            filename: 'exports.72.wasm',
            name: null,
            line: 195,
        );
    }

    public function testModule82(): void
    {
        $this->runModuleCommand(
            filename: 'exports.73.wasm',
            name: null,
            line: 196,
        );
    }

    public function testModule83(): void
    {
        $this->runModuleCommand(
            filename: 'exports.74.wasm',
            name: null,
            line: 197,
        );
    }

    public function testModule84(): void
    {
        $this->runModuleCommand(
            filename: 'exports.75.wasm',
            name: null,
            line: 198,
        );
    }

    public function testModule85(): void
    {
        $this->runModuleCommand(
            filename: 'exports.76.wasm',
            name: null,
            line: 199,
        );
    }

    public function testModule86(): void
    {
        $this->runModuleCommand(
            filename: 'exports.77.wasm',
            name: null,
            line: 200,
        );
    }

    public function testModule87(): void
    {
        $this->runModuleCommand(
            filename: 'exports.78.wasm',
            name: null,
            line: 201,
        );
    }

    public function testModule88(): void
    {
        $this->runModuleCommand(
            filename: 'exports.79.wasm',
            name: null,
            line: 202,
        );
    }

    public function testAssertInvalid89(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'exports.80.wasm',
            text: 'unknown memory',
            line: 207,
        );
    }

    public function testAssertInvalid90(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'exports.81.wasm',
            text: 'unknown memory',
            line: 211,
        );
    }

    public function testAssertInvalid91(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'exports.82.wasm',
            text: 'unknown memory',
            line: 215,
        );
    }

    public function testAssertInvalid92(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'exports.83.wasm',
            text: 'duplicate export name',
            line: 219,
        );
    }

    public function testAssertInvalid93(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'exports.84.wasm',
            text: 'duplicate export name',
            line: 228,
        );
    }

    public function testAssertInvalid94(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'exports.85.wasm',
            text: 'duplicate export name',
            line: 232,
        );
    }

    public function testAssertInvalid95(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'exports.86.wasm',
            text: 'duplicate export name',
            line: 236,
        );
    }
}
