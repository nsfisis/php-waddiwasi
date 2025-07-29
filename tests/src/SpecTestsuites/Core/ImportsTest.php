<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class ImportsTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'imports.0.wasm',
            name: null,
            line: 3,
        );
    }

    public function testRegister1(): void
    {
        $this->runRegisterCommand(
            name: null,
            as: 'test',
            line: 21,
        );
    }

    public function testModule2(): void
    {
        $this->runModuleCommand(
            filename: 'imports.1.wasm',
            name: null,
            line: 26,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'print32', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [],
            line: 85,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'print64', 'args' => [['type' => 'i64', 'value' => '24']]],
            expected: [],
            line: 86,
        );
    }

    public function testAssertInvalid5(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'imports.2.wasm',
            text: 'unknown type',
            line: 89,
        );
    }

    public function testModule6(): void
    {
        $this->runModuleCommand(
            filename: 'imports.3.wasm',
            name: null,
            line: 97,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'print_i32', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [],
            line: 104,
        );
    }

    public function testModule8(): void
    {
        $this->runModuleCommand(
            filename: 'imports.4.wasm',
            name: null,
            line: 107,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'print_i32', 'args' => [['type' => 'i32', 'value' => '5'], ['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '16']],
            line: 114,
        );
    }

    public function testModule10(): void
    {
        $this->runModuleCommand(
            filename: 'imports.5.wasm',
            name: null,
            line: 116,
        );
    }

    public function testModule11(): void
    {
        $this->runModuleCommand(
            filename: 'imports.6.wasm',
            name: null,
            line: 117,
        );
    }

    public function testModule12(): void
    {
        $this->runModuleCommand(
            filename: 'imports.7.wasm',
            name: null,
            line: 118,
        );
    }

    public function testModule13(): void
    {
        $this->runModuleCommand(
            filename: 'imports.8.wasm',
            name: null,
            line: 119,
        );
    }

    public function testModule14(): void
    {
        $this->runModuleCommand(
            filename: 'imports.9.wasm',
            name: null,
            line: 120,
        );
    }

    public function testModule15(): void
    {
        $this->runModuleCommand(
            filename: 'imports.10.wasm',
            name: null,
            line: 121,
        );
    }

    public function testModule16(): void
    {
        $this->runModuleCommand(
            filename: 'imports.11.wasm',
            name: null,
            line: 122,
        );
    }

    public function testAssertUnlinkable17(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.12.wasm',
            text: 'unknown import',
            line: 125,
        );
    }

    public function testAssertUnlinkable18(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.13.wasm',
            text: 'unknown import',
            line: 129,
        );
    }

    public function testAssertUnlinkable19(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.14.wasm',
            text: 'incompatible import type',
            line: 134,
        );
    }

    public function testAssertUnlinkable20(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.15.wasm',
            text: 'incompatible import type',
            line: 138,
        );
    }

    public function testAssertUnlinkable21(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.16.wasm',
            text: 'incompatible import type',
            line: 142,
        );
    }

    public function testAssertUnlinkable22(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.17.wasm',
            text: 'incompatible import type',
            line: 146,
        );
    }

    public function testAssertUnlinkable23(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.18.wasm',
            text: 'incompatible import type',
            line: 150,
        );
    }

    public function testAssertUnlinkable24(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.19.wasm',
            text: 'incompatible import type',
            line: 154,
        );
    }

    public function testAssertUnlinkable25(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.20.wasm',
            text: 'incompatible import type',
            line: 158,
        );
    }

    public function testAssertUnlinkable26(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.21.wasm',
            text: 'incompatible import type',
            line: 162,
        );
    }

    public function testAssertUnlinkable27(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.22.wasm',
            text: 'incompatible import type',
            line: 166,
        );
    }

    public function testAssertUnlinkable28(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.23.wasm',
            text: 'incompatible import type',
            line: 170,
        );
    }

    public function testAssertUnlinkable29(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.24.wasm',
            text: 'incompatible import type',
            line: 174,
        );
    }

    public function testAssertUnlinkable30(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.25.wasm',
            text: 'incompatible import type',
            line: 178,
        );
    }

    public function testAssertUnlinkable31(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.26.wasm',
            text: 'incompatible import type',
            line: 182,
        );
    }

    public function testAssertUnlinkable32(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.27.wasm',
            text: 'incompatible import type',
            line: 186,
        );
    }

    public function testAssertUnlinkable33(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.28.wasm',
            text: 'incompatible import type',
            line: 190,
        );
    }

    public function testAssertUnlinkable34(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.29.wasm',
            text: 'incompatible import type',
            line: 194,
        );
    }

    public function testAssertUnlinkable35(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.30.wasm',
            text: 'incompatible import type',
            line: 199,
        );
    }

    public function testAssertUnlinkable36(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.31.wasm',
            text: 'incompatible import type',
            line: 203,
        );
    }

    public function testAssertUnlinkable37(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.32.wasm',
            text: 'incompatible import type',
            line: 207,
        );
    }

    public function testAssertUnlinkable38(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.33.wasm',
            text: 'incompatible import type',
            line: 211,
        );
    }

    public function testAssertUnlinkable39(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.34.wasm',
            text: 'incompatible import type',
            line: 215,
        );
    }

    public function testAssertUnlinkable40(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.35.wasm',
            text: 'incompatible import type',
            line: 219,
        );
    }

    public function testModule41(): void
    {
        $this->runModuleCommand(
            filename: 'imports.36.wasm',
            name: null,
            line: 226,
        );
    }

    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-0', 'args' => []],
            expected: [['type' => 'i32', 'value' => '666']],
            line: 246,
        );
    }

    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-1', 'args' => []],
            expected: [['type' => 'i32', 'value' => '666']],
            line: 247,
        );
    }

    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-x', 'args' => []],
            expected: [['type' => 'i32', 'value' => '666']],
            line: 248,
        );
    }

    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-y', 'args' => []],
            expected: [['type' => 'i32', 'value' => '666']],
            line: 249,
        );
    }

    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-4', 'args' => []],
            expected: [['type' => 'i64', 'value' => '666']],
            line: 250,
        );
    }

    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-5', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1143383654']],
            line: 251,
        );
    }

    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-6', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4649074691427585229']],
            line: 252,
        );
    }

    public function testModule49(): void
    {
        $this->runModuleCommand(
            filename: 'imports.37.wasm',
            name: null,
            line: 254,
        );
    }

    public function testModule50(): void
    {
        $this->runModuleCommand(
            filename: 'imports.38.wasm',
            name: null,
            line: 255,
        );
    }

    public function testModule51(): void
    {
        $this->runModuleCommand(
            filename: 'imports.39.wasm',
            name: null,
            line: 256,
        );
    }

    public function testAssertUnlinkable52(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.40.wasm',
            text: 'unknown import',
            line: 259,
        );
    }

    public function testAssertUnlinkable53(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.41.wasm',
            text: 'unknown import',
            line: 263,
        );
    }

    public function testAssertUnlinkable54(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.42.wasm',
            text: 'incompatible import type',
            line: 268,
        );
    }

    public function testAssertUnlinkable55(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.43.wasm',
            text: 'incompatible import type',
            line: 272,
        );
    }

    public function testAssertUnlinkable56(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.44.wasm',
            text: 'incompatible import type',
            line: 276,
        );
    }

    public function testAssertUnlinkable57(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.45.wasm',
            text: 'incompatible import type',
            line: 280,
        );
    }

    public function testAssertUnlinkable58(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.46.wasm',
            text: 'incompatible import type',
            line: 284,
        );
    }

    public function testAssertUnlinkable59(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.47.wasm',
            text: 'incompatible import type',
            line: 288,
        );
    }

    public function testAssertUnlinkable60(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.48.wasm',
            text: 'incompatible import type',
            line: 292,
        );
    }

    public function testAssertUnlinkable61(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.49.wasm',
            text: 'incompatible import type',
            line: 296,
        );
    }

    public function testAssertUnlinkable62(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.50.wasm',
            text: 'incompatible import type',
            line: 300,
        );
    }

    public function testAssertUnlinkable63(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.51.wasm',
            text: 'incompatible import type',
            line: 304,
        );
    }

    public function testAssertUnlinkable64(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.52.wasm',
            text: 'incompatible import type',
            line: 308,
        );
    }

    public function testAssertUnlinkable65(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.53.wasm',
            text: 'incompatible import type',
            line: 312,
        );
    }

    public function testAssertUnlinkable66(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.54.wasm',
            text: 'incompatible import type',
            line: 317,
        );
    }

    public function testAssertUnlinkable67(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.55.wasm',
            text: 'incompatible import type',
            line: 321,
        );
    }

    public function testAssertUnlinkable68(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.56.wasm',
            text: 'incompatible import type',
            line: 325,
        );
    }

    public function testAssertUnlinkable69(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.57.wasm',
            text: 'incompatible import type',
            line: 329,
        );
    }

    public function testAssertUnlinkable70(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.58.wasm',
            text: 'incompatible import type',
            line: 333,
        );
    }

    public function testAssertUnlinkable71(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.59.wasm',
            text: 'incompatible import type',
            line: 337,
        );
    }

    public function testModule72(): void
    {
        $this->runModuleCommand(
            filename: 'imports.60.wasm',
            name: null,
            line: 344,
        );
    }

    public function testAssertTrap73(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 356,
        );
    }

    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '11']],
            line: 357,
        );
    }

    public function testAssertReturn75(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '22']],
            line: 358,
        );
    }

    public function testAssertTrap76(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '3']]],
            text: 'uninitialized element',
            line: 359,
        );
    }

    public function testAssertTrap77(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '100']]],
            text: 'undefined element',
            line: 360,
        );
    }

    public function testModule78(): void
    {
        $this->runModuleCommand(
            filename: 'imports.61.wasm',
            name: null,
            line: 363,
        );
    }

    public function testAssertTrap79(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 375,
        );
    }

    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '11']],
            line: 376,
        );
    }

    public function testAssertReturn81(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '22']],
            line: 377,
        );
    }

    public function testAssertTrap82(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '3']]],
            text: 'uninitialized element',
            line: 378,
        );
    }

    public function testAssertTrap83(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '100']]],
            text: 'undefined element',
            line: 379,
        );
    }

    public function testModule84(): void
    {
        $this->runModuleCommand(
            filename: 'imports.62.wasm',
            name: null,
            line: 382,
        );
    }

    public function testModule85(): void
    {
        $this->runModuleCommand(
            filename: 'imports.63.wasm',
            name: null,
            line: 389,
        );
    }

    public function testModule86(): void
    {
        $this->runModuleCommand(
            filename: 'imports.64.wasm',
            name: null,
            line: 390,
        );
    }

    public function testModule87(): void
    {
        $this->runModuleCommand(
            filename: 'imports.65.wasm',
            name: null,
            line: 391,
        );
    }

    public function testModule88(): void
    {
        $this->runModuleCommand(
            filename: 'imports.66.wasm',
            name: null,
            line: 392,
        );
    }

    public function testModule89(): void
    {
        $this->runModuleCommand(
            filename: 'imports.67.wasm',
            name: null,
            line: 393,
        );
    }

    public function testModule90(): void
    {
        $this->runModuleCommand(
            filename: 'imports.68.wasm',
            name: null,
            line: 394,
        );
    }

    public function testModule91(): void
    {
        $this->runModuleCommand(
            filename: 'imports.69.wasm',
            name: null,
            line: 395,
        );
    }

    public function testModule92(): void
    {
        $this->runModuleCommand(
            filename: 'imports.70.wasm',
            name: null,
            line: 396,
        );
    }

    public function testModule93(): void
    {
        $this->runModuleCommand(
            filename: 'imports.71.wasm',
            name: null,
            line: 397,
        );
    }

    public function testModule94(): void
    {
        $this->runModuleCommand(
            filename: 'imports.72.wasm',
            name: null,
            line: 398,
        );
    }

    public function testModule95(): void
    {
        $this->runModuleCommand(
            filename: 'imports.73.wasm',
            name: null,
            line: 399,
        );
    }

    public function testModule96(): void
    {
        $this->runModuleCommand(
            filename: 'imports.74.wasm',
            name: null,
            line: 400,
        );
    }

    public function testModule97(): void
    {
        $this->runModuleCommand(
            filename: 'imports.75.wasm',
            name: null,
            line: 401,
        );
    }

    public function testModule98(): void
    {
        $this->runModuleCommand(
            filename: 'imports.76.wasm',
            name: null,
            line: 402,
        );
    }

    public function testModule99(): void
    {
        $this->runModuleCommand(
            filename: 'imports.77.wasm',
            name: null,
            line: 403,
        );
    }

    public function testModule100(): void
    {
        $this->runModuleCommand(
            filename: 'imports.78.wasm',
            name: null,
            line: 404,
        );
    }

    public function testModule101(): void
    {
        $this->runModuleCommand(
            filename: 'imports.79.wasm',
            name: null,
            line: 405,
        );
    }

    public function testModule102(): void
    {
        $this->runModuleCommand(
            filename: 'imports.80.wasm',
            name: null,
            line: 406,
        );
    }

    public function testModule103(): void
    {
        $this->runModuleCommand(
            filename: 'imports.81.wasm',
            name: null,
            line: 407,
        );
    }

    public function testModule104(): void
    {
        $this->runModuleCommand(
            filename: 'imports.82.wasm',
            name: null,
            line: 408,
        );
    }

    public function testAssertUnlinkable105(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.83.wasm',
            text: 'unknown import',
            line: 411,
        );
    }

    public function testAssertUnlinkable106(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.84.wasm',
            text: 'unknown import',
            line: 415,
        );
    }

    public function testAssertUnlinkable107(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.85.wasm',
            text: 'incompatible import type',
            line: 420,
        );
    }

    public function testAssertUnlinkable108(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.86.wasm',
            text: 'incompatible import type',
            line: 424,
        );
    }

    public function testAssertUnlinkable109(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.87.wasm',
            text: 'incompatible import type',
            line: 428,
        );
    }

    public function testAssertUnlinkable110(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.88.wasm',
            text: 'incompatible import type',
            line: 432,
        );
    }

    public function testAssertUnlinkable111(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.89.wasm',
            text: 'incompatible import type',
            line: 436,
        );
    }

    public function testAssertUnlinkable112(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.90.wasm',
            text: 'incompatible import type',
            line: 440,
        );
    }

    public function testAssertUnlinkable113(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.91.wasm',
            text: 'incompatible import type',
            line: 445,
        );
    }

    public function testAssertUnlinkable114(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.92.wasm',
            text: 'incompatible import type',
            line: 449,
        );
    }

    public function testAssertUnlinkable115(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.93.wasm',
            text: 'incompatible import type',
            line: 453,
        );
    }

    public function testAssertUnlinkable116(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.94.wasm',
            text: 'incompatible import type',
            line: 457,
        );
    }

    public function testModule117(): void
    {
        $this->runModuleCommand(
            filename: 'imports.95.wasm',
            name: null,
            line: 465,
        );
    }

    public function testAssertReturn118(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 472,
        );
    }

    public function testAssertReturn119(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '16']],
            line: 473,
        );
    }

    public function testAssertReturn120(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'i32', 'value' => '1048576']],
            line: 474,
        );
    }

    public function testAssertTrap121(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '1000000']]],
            text: 'out of bounds memory access',
            line: 475,
        );
    }

    public function testModule122(): void
    {
        $this->runModuleCommand(
            filename: 'imports.96.wasm',
            name: null,
            line: 477,
        );
    }

    public function testAssertReturn123(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 483,
        );
    }

    public function testAssertReturn124(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '16']],
            line: 484,
        );
    }

    public function testAssertReturn125(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'i32', 'value' => '1048576']],
            line: 485,
        );
    }

    public function testAssertTrap126(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '1000000']]],
            text: 'out of bounds memory access',
            line: 486,
        );
    }

    public function testAssertInvalid127(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'imports.97.wasm',
            text: 'multiple memories',
            line: 489,
        );
    }

    public function testAssertInvalid128(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'imports.98.wasm',
            text: 'multiple memories',
            line: 493,
        );
    }

    public function testAssertInvalid129(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'imports.99.wasm',
            text: 'multiple memories',
            line: 497,
        );
    }

    public function testModule130(): void
    {
        $this->runModuleCommand(
            filename: 'imports.100.wasm',
            name: null,
            line: 501,
        );
    }

    public function testModule131(): void
    {
        $this->runModuleCommand(
            filename: 'imports.101.wasm',
            name: null,
            line: 502,
        );
    }

    public function testModule132(): void
    {
        $this->runModuleCommand(
            filename: 'imports.102.wasm',
            name: null,
            line: 503,
        );
    }

    public function testModule133(): void
    {
        $this->runModuleCommand(
            filename: 'imports.103.wasm',
            name: null,
            line: 504,
        );
    }

    public function testModule134(): void
    {
        $this->runModuleCommand(
            filename: 'imports.104.wasm',
            name: null,
            line: 505,
        );
    }

    public function testModule135(): void
    {
        $this->runModuleCommand(
            filename: 'imports.105.wasm',
            name: null,
            line: 506,
        );
    }

    public function testModule136(): void
    {
        $this->runModuleCommand(
            filename: 'imports.106.wasm',
            name: null,
            line: 507,
        );
    }

    public function testModule137(): void
    {
        $this->runModuleCommand(
            filename: 'imports.107.wasm',
            name: null,
            line: 508,
        );
    }

    public function testModule138(): void
    {
        $this->runModuleCommand(
            filename: 'imports.108.wasm',
            name: null,
            line: 509,
        );
    }

    public function testAssertUnlinkable139(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.109.wasm',
            text: 'unknown import',
            line: 512,
        );
    }

    public function testAssertUnlinkable140(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.110.wasm',
            text: 'unknown import',
            line: 516,
        );
    }

    public function testAssertUnlinkable141(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.111.wasm',
            text: 'incompatible import type',
            line: 521,
        );
    }

    public function testAssertUnlinkable142(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.112.wasm',
            text: 'incompatible import type',
            line: 525,
        );
    }

    public function testAssertUnlinkable143(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.113.wasm',
            text: 'incompatible import type',
            line: 529,
        );
    }

    public function testAssertUnlinkable144(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.114.wasm',
            text: 'incompatible import type',
            line: 533,
        );
    }

    public function testAssertUnlinkable145(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.115.wasm',
            text: 'incompatible import type',
            line: 538,
        );
    }

    public function testAssertUnlinkable146(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.116.wasm',
            text: 'incompatible import type',
            line: 542,
        );
    }

    public function testAssertUnlinkable147(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.117.wasm',
            text: 'incompatible import type',
            line: 546,
        );
    }

    public function testAssertUnlinkable148(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.118.wasm',
            text: 'incompatible import type',
            line: 550,
        );
    }

    public function testAssertUnlinkable149(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.119.wasm',
            text: 'incompatible import type',
            line: 554,
        );
    }

    public function testAssertUnlinkable150(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.120.wasm',
            text: 'incompatible import type',
            line: 558,
        );
    }

    public function testAssertUnlinkable151(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.121.wasm',
            text: 'incompatible import type',
            line: 563,
        );
    }

    public function testAssertUnlinkable152(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.122.wasm',
            text: 'incompatible import type',
            line: 567,
        );
    }

    public function testModule153(): void
    {
        $this->runModuleCommand(
            filename: 'imports.123.wasm',
            name: null,
            line: 571,
        );
    }

    public function testAssertReturn154(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 575,
        );
    }

    public function testAssertReturn155(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 576,
        );
    }

    public function testAssertReturn156(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 577,
        );
    }

    public function testAssertReturn157(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 578,
        );
    }

    public function testAssertReturn158(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 579,
        );
    }

    public function testModule159(): void
    {
        $this->runModuleCommand(
            filename: 'imports.124.wasm',
            name: '$Mgm',
            line: 581,
        );
    }

    public function testRegister160(): void
    {
        $this->runRegisterCommand(
            name: '$Mgm',
            as: 'grown-memory',
            line: 585,
        );
    }

    public function testAssertReturn161(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Mgm', 'field' => 'grow', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 586,
        );
    }

    public function testModule162(): void
    {
        $this->runModuleCommand(
            filename: 'imports.125.wasm',
            name: '$Mgim1',
            line: 587,
        );
    }

    public function testRegister163(): void
    {
        $this->runRegisterCommand(
            name: '$Mgim1',
            as: 'grown-imported-memory',
            line: 592,
        );
    }

    public function testAssertReturn164(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Mgim1', 'field' => 'grow', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 593,
        );
    }

    public function testModule165(): void
    {
        $this->runModuleCommand(
            filename: 'imports.126.wasm',
            name: '$Mgim2',
            line: 594,
        );
    }

    public function testAssertReturn166(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Mgim2', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 599,
        );
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed167(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed168(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed169(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed170(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed171(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed172(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed173(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed174(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed175(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed176(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed177(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed178(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed179(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed180(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed181(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed182(): void
    {
    }

    public function testModule183(): void
    {
        $this->runModuleCommand(
            filename: 'imports.143.wasm',
            name: null,
            line: 675,
        );
    }

    public function testRegister184(): void
    {
        $this->runRegisterCommand(
            name: null,
            as: 'not wasm',
            line: 676,
        );
    }

    public function testAssertUnlinkable185(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.144.wasm',
            text: 'unknown import',
            line: 678,
        );
    }
}
