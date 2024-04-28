<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
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

    #[Depends('testModule0')]
    public function testRegister1(): void
    {
        $this->runRegisterCommand(
            name: null,
            as: 'test',
            line: 21,
        );
    }

    #[Depends('testRegister1')]
    public function testModule2(): void
    {
        $this->runModuleCommand(
            filename: 'imports.1.wasm',
            name: null,
            line: 26,
        );
    }

    #[Depends('testModule2')]
    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'print32', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [],
            line: 85,
        );
    }

    #[Depends('testAssertReturn3')]
    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'print64', 'args' => [['type' => 'i64', 'value' => '24']]],
            expected: [],
            line: 86,
        );
    }

    #[Depends('testAssertReturn4')]
    public function testAssertInvalid5(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'imports.2.wasm',
            text: 'unknown type',
            line: 89,
        );
    }

    #[Depends('testAssertInvalid5')]
    public function testModule6(): void
    {
        $this->runModuleCommand(
            filename: 'imports.3.wasm',
            name: null,
            line: 97,
        );
    }

    #[Depends('testModule6')]
    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'print_i32', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [],
            line: 104,
        );
    }

    #[Depends('testAssertReturn7')]
    public function testModule8(): void
    {
        $this->runModuleCommand(
            filename: 'imports.4.wasm',
            name: null,
            line: 107,
        );
    }

    #[Depends('testModule8')]
    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'print_i32', 'args' => [['type' => 'i32', 'value' => '5'], ['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '16']],
            line: 114,
        );
    }

    #[Depends('testAssertReturn9')]
    public function testModule10(): void
    {
        $this->runModuleCommand(
            filename: 'imports.5.wasm',
            name: null,
            line: 116,
        );
    }

    #[Depends('testModule10')]
    public function testModule11(): void
    {
        $this->runModuleCommand(
            filename: 'imports.6.wasm',
            name: null,
            line: 117,
        );
    }

    #[Depends('testModule11')]
    public function testModule12(): void
    {
        $this->runModuleCommand(
            filename: 'imports.7.wasm',
            name: null,
            line: 118,
        );
    }

    #[Depends('testModule12')]
    public function testModule13(): void
    {
        $this->runModuleCommand(
            filename: 'imports.8.wasm',
            name: null,
            line: 119,
        );
    }

    #[Depends('testModule13')]
    public function testModule14(): void
    {
        $this->runModuleCommand(
            filename: 'imports.9.wasm',
            name: null,
            line: 120,
        );
    }

    #[Depends('testModule14')]
    public function testModule15(): void
    {
        $this->runModuleCommand(
            filename: 'imports.10.wasm',
            name: null,
            line: 121,
        );
    }

    #[Depends('testModule15')]
    public function testModule16(): void
    {
        $this->runModuleCommand(
            filename: 'imports.11.wasm',
            name: null,
            line: 122,
        );
    }

    #[Depends('testModule16')]
    public function testAssertUnlinkable17(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.12.wasm',
            text: 'unknown import',
            line: 125,
        );
    }

    #[Depends('testAssertUnlinkable17')]
    public function testAssertUnlinkable18(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.13.wasm',
            text: 'unknown import',
            line: 129,
        );
    }

    #[Depends('testAssertUnlinkable18')]
    public function testAssertUnlinkable19(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.14.wasm',
            text: 'incompatible import type',
            line: 134,
        );
    }

    #[Depends('testAssertUnlinkable19')]
    public function testAssertUnlinkable20(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.15.wasm',
            text: 'incompatible import type',
            line: 138,
        );
    }

    #[Depends('testAssertUnlinkable20')]
    public function testAssertUnlinkable21(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.16.wasm',
            text: 'incompatible import type',
            line: 142,
        );
    }

    #[Depends('testAssertUnlinkable21')]
    public function testAssertUnlinkable22(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.17.wasm',
            text: 'incompatible import type',
            line: 146,
        );
    }

    #[Depends('testAssertUnlinkable22')]
    public function testAssertUnlinkable23(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.18.wasm',
            text: 'incompatible import type',
            line: 150,
        );
    }

    #[Depends('testAssertUnlinkable23')]
    public function testAssertUnlinkable24(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.19.wasm',
            text: 'incompatible import type',
            line: 154,
        );
    }

    #[Depends('testAssertUnlinkable24')]
    public function testAssertUnlinkable25(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.20.wasm',
            text: 'incompatible import type',
            line: 158,
        );
    }

    #[Depends('testAssertUnlinkable25')]
    public function testAssertUnlinkable26(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.21.wasm',
            text: 'incompatible import type',
            line: 162,
        );
    }

    #[Depends('testAssertUnlinkable26')]
    public function testAssertUnlinkable27(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.22.wasm',
            text: 'incompatible import type',
            line: 166,
        );
    }

    #[Depends('testAssertUnlinkable27')]
    public function testAssertUnlinkable28(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.23.wasm',
            text: 'incompatible import type',
            line: 170,
        );
    }

    #[Depends('testAssertUnlinkable28')]
    public function testAssertUnlinkable29(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.24.wasm',
            text: 'incompatible import type',
            line: 174,
        );
    }

    #[Depends('testAssertUnlinkable29')]
    public function testAssertUnlinkable30(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.25.wasm',
            text: 'incompatible import type',
            line: 178,
        );
    }

    #[Depends('testAssertUnlinkable30')]
    public function testAssertUnlinkable31(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.26.wasm',
            text: 'incompatible import type',
            line: 182,
        );
    }

    #[Depends('testAssertUnlinkable31')]
    public function testAssertUnlinkable32(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.27.wasm',
            text: 'incompatible import type',
            line: 186,
        );
    }

    #[Depends('testAssertUnlinkable32')]
    public function testAssertUnlinkable33(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.28.wasm',
            text: 'incompatible import type',
            line: 190,
        );
    }

    #[Depends('testAssertUnlinkable33')]
    public function testAssertUnlinkable34(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.29.wasm',
            text: 'incompatible import type',
            line: 194,
        );
    }

    #[Depends('testAssertUnlinkable34')]
    public function testAssertUnlinkable35(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.30.wasm',
            text: 'incompatible import type',
            line: 199,
        );
    }

    #[Depends('testAssertUnlinkable35')]
    public function testAssertUnlinkable36(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.31.wasm',
            text: 'incompatible import type',
            line: 203,
        );
    }

    #[Depends('testAssertUnlinkable36')]
    public function testAssertUnlinkable37(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.32.wasm',
            text: 'incompatible import type',
            line: 207,
        );
    }

    #[Depends('testAssertUnlinkable37')]
    public function testAssertUnlinkable38(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.33.wasm',
            text: 'incompatible import type',
            line: 211,
        );
    }

    #[Depends('testAssertUnlinkable38')]
    public function testAssertUnlinkable39(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.34.wasm',
            text: 'incompatible import type',
            line: 215,
        );
    }

    #[Depends('testAssertUnlinkable39')]
    public function testAssertUnlinkable40(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.35.wasm',
            text: 'incompatible import type',
            line: 219,
        );
    }

    #[Depends('testAssertUnlinkable40')]
    public function testModule41(): void
    {
        $this->runModuleCommand(
            filename: 'imports.36.wasm',
            name: null,
            line: 226,
        );
    }

    #[Depends('testModule41')]
    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'get-0', 'args' => []],
            expected: [['type' => 'i32', 'value' => '666']],
            line: 246,
        );
    }

    #[Depends('testAssertReturn42')]
    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'get-1', 'args' => []],
            expected: [['type' => 'i32', 'value' => '666']],
            line: 247,
        );
    }

    #[Depends('testAssertReturn43')]
    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'get-x', 'args' => []],
            expected: [['type' => 'i32', 'value' => '666']],
            line: 248,
        );
    }

    #[Depends('testAssertReturn44')]
    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'get-y', 'args' => []],
            expected: [['type' => 'i32', 'value' => '666']],
            line: 249,
        );
    }

    #[Depends('testAssertReturn45')]
    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'get-4', 'args' => []],
            expected: [['type' => 'i64', 'value' => '666']],
            line: 250,
        );
    }

    #[Depends('testAssertReturn46')]
    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'get-5', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1143383654']],
            line: 251,
        );
    }

    #[Depends('testAssertReturn47')]
    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'get-6', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4649074691427585229']],
            line: 252,
        );
    }

    #[Depends('testAssertReturn48')]
    public function testModule49(): void
    {
        $this->runModuleCommand(
            filename: 'imports.37.wasm',
            name: null,
            line: 254,
        );
    }

    #[Depends('testModule49')]
    public function testModule50(): void
    {
        $this->runModuleCommand(
            filename: 'imports.38.wasm',
            name: null,
            line: 255,
        );
    }

    #[Depends('testModule50')]
    public function testModule51(): void
    {
        $this->runModuleCommand(
            filename: 'imports.39.wasm',
            name: null,
            line: 256,
        );
    }

    #[Depends('testModule51')]
    public function testAssertUnlinkable52(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.40.wasm',
            text: 'unknown import',
            line: 259,
        );
    }

    #[Depends('testAssertUnlinkable52')]
    public function testAssertUnlinkable53(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.41.wasm',
            text: 'unknown import',
            line: 263,
        );
    }

    #[Depends('testAssertUnlinkable53')]
    public function testAssertUnlinkable54(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.42.wasm',
            text: 'incompatible import type',
            line: 268,
        );
    }

    #[Depends('testAssertUnlinkable54')]
    public function testAssertUnlinkable55(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.43.wasm',
            text: 'incompatible import type',
            line: 272,
        );
    }

    #[Depends('testAssertUnlinkable55')]
    public function testAssertUnlinkable56(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.44.wasm',
            text: 'incompatible import type',
            line: 276,
        );
    }

    #[Depends('testAssertUnlinkable56')]
    public function testAssertUnlinkable57(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.45.wasm',
            text: 'incompatible import type',
            line: 280,
        );
    }

    #[Depends('testAssertUnlinkable57')]
    public function testAssertUnlinkable58(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.46.wasm',
            text: 'incompatible import type',
            line: 284,
        );
    }

    #[Depends('testAssertUnlinkable58')]
    public function testAssertUnlinkable59(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.47.wasm',
            text: 'incompatible import type',
            line: 288,
        );
    }

    #[Depends('testAssertUnlinkable59')]
    public function testAssertUnlinkable60(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.48.wasm',
            text: 'incompatible import type',
            line: 292,
        );
    }

    #[Depends('testAssertUnlinkable60')]
    public function testAssertUnlinkable61(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.49.wasm',
            text: 'incompatible import type',
            line: 296,
        );
    }

    #[Depends('testAssertUnlinkable61')]
    public function testAssertUnlinkable62(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.50.wasm',
            text: 'incompatible import type',
            line: 300,
        );
    }

    #[Depends('testAssertUnlinkable62')]
    public function testAssertUnlinkable63(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.51.wasm',
            text: 'incompatible import type',
            line: 304,
        );
    }

    #[Depends('testAssertUnlinkable63')]
    public function testAssertUnlinkable64(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.52.wasm',
            text: 'incompatible import type',
            line: 308,
        );
    }

    #[Depends('testAssertUnlinkable64')]
    public function testAssertUnlinkable65(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.53.wasm',
            text: 'incompatible import type',
            line: 312,
        );
    }

    #[Depends('testAssertUnlinkable65')]
    public function testAssertUnlinkable66(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.54.wasm',
            text: 'incompatible import type',
            line: 317,
        );
    }

    #[Depends('testAssertUnlinkable66')]
    public function testAssertUnlinkable67(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.55.wasm',
            text: 'incompatible import type',
            line: 321,
        );
    }

    #[Depends('testAssertUnlinkable67')]
    public function testAssertUnlinkable68(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.56.wasm',
            text: 'incompatible import type',
            line: 325,
        );
    }

    #[Depends('testAssertUnlinkable68')]
    public function testAssertUnlinkable69(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.57.wasm',
            text: 'incompatible import type',
            line: 329,
        );
    }

    #[Depends('testAssertUnlinkable69')]
    public function testAssertUnlinkable70(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.58.wasm',
            text: 'incompatible import type',
            line: 333,
        );
    }

    #[Depends('testAssertUnlinkable70')]
    public function testAssertUnlinkable71(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.59.wasm',
            text: 'incompatible import type',
            line: 337,
        );
    }

    #[Depends('testAssertUnlinkable71')]
    public function testModule72(): void
    {
        $this->runModuleCommand(
            filename: 'imports.60.wasm',
            name: null,
            line: 344,
        );
    }

    #[Depends('testModule72')]
    public function testAssertTrap73(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 356,
        );
    }

    #[Depends('testAssertTrap73')]
    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '11']],
            line: 357,
        );
    }

    #[Depends('testAssertReturn74')]
    public function testAssertReturn75(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '22']],
            line: 358,
        );
    }

    #[Depends('testAssertReturn75')]
    public function testAssertTrap76(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '3']]],
            text: 'uninitialized element',
            line: 359,
        );
    }

    #[Depends('testAssertTrap76')]
    public function testAssertTrap77(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '100']]],
            text: 'undefined element',
            line: 360,
        );
    }

    #[Depends('testAssertTrap77')]
    public function testModule78(): void
    {
        $this->runModuleCommand(
            filename: 'imports.61.wasm',
            name: null,
            line: 363,
        );
    }

    #[Depends('testModule78')]
    public function testAssertTrap79(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 375,
        );
    }

    #[Depends('testAssertTrap79')]
    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '11']],
            line: 376,
        );
    }

    #[Depends('testAssertReturn80')]
    public function testAssertReturn81(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '22']],
            line: 377,
        );
    }

    #[Depends('testAssertReturn81')]
    public function testAssertTrap82(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '3']]],
            text: 'uninitialized element',
            line: 378,
        );
    }

    #[Depends('testAssertTrap82')]
    public function testAssertTrap83(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '100']]],
            text: 'undefined element',
            line: 379,
        );
    }

    #[Depends('testAssertTrap83')]
    public function testModule84(): void
    {
        $this->runModuleCommand(
            filename: 'imports.62.wasm',
            name: null,
            line: 382,
        );
    }

    #[Depends('testModule84')]
    public function testModule85(): void
    {
        $this->runModuleCommand(
            filename: 'imports.63.wasm',
            name: null,
            line: 389,
        );
    }

    #[Depends('testModule85')]
    public function testModule86(): void
    {
        $this->runModuleCommand(
            filename: 'imports.64.wasm',
            name: null,
            line: 390,
        );
    }

    #[Depends('testModule86')]
    public function testModule87(): void
    {
        $this->runModuleCommand(
            filename: 'imports.65.wasm',
            name: null,
            line: 391,
        );
    }

    #[Depends('testModule87')]
    public function testModule88(): void
    {
        $this->runModuleCommand(
            filename: 'imports.66.wasm',
            name: null,
            line: 392,
        );
    }

    #[Depends('testModule88')]
    public function testModule89(): void
    {
        $this->runModuleCommand(
            filename: 'imports.67.wasm',
            name: null,
            line: 393,
        );
    }

    #[Depends('testModule89')]
    public function testModule90(): void
    {
        $this->runModuleCommand(
            filename: 'imports.68.wasm',
            name: null,
            line: 394,
        );
    }

    #[Depends('testModule90')]
    public function testModule91(): void
    {
        $this->runModuleCommand(
            filename: 'imports.69.wasm',
            name: null,
            line: 395,
        );
    }

    #[Depends('testModule91')]
    public function testModule92(): void
    {
        $this->runModuleCommand(
            filename: 'imports.70.wasm',
            name: null,
            line: 396,
        );
    }

    #[Depends('testModule92')]
    public function testModule93(): void
    {
        $this->runModuleCommand(
            filename: 'imports.71.wasm',
            name: null,
            line: 397,
        );
    }

    #[Depends('testModule93')]
    public function testModule94(): void
    {
        $this->runModuleCommand(
            filename: 'imports.72.wasm',
            name: null,
            line: 398,
        );
    }

    #[Depends('testModule94')]
    public function testModule95(): void
    {
        $this->runModuleCommand(
            filename: 'imports.73.wasm',
            name: null,
            line: 399,
        );
    }

    #[Depends('testModule95')]
    public function testModule96(): void
    {
        $this->runModuleCommand(
            filename: 'imports.74.wasm',
            name: null,
            line: 400,
        );
    }

    #[Depends('testModule96')]
    public function testModule97(): void
    {
        $this->runModuleCommand(
            filename: 'imports.75.wasm',
            name: null,
            line: 401,
        );
    }

    #[Depends('testModule97')]
    public function testModule98(): void
    {
        $this->runModuleCommand(
            filename: 'imports.76.wasm',
            name: null,
            line: 402,
        );
    }

    #[Depends('testModule98')]
    public function testModule99(): void
    {
        $this->runModuleCommand(
            filename: 'imports.77.wasm',
            name: null,
            line: 403,
        );
    }

    #[Depends('testModule99')]
    public function testModule100(): void
    {
        $this->runModuleCommand(
            filename: 'imports.78.wasm',
            name: null,
            line: 404,
        );
    }

    #[Depends('testModule100')]
    public function testModule101(): void
    {
        $this->runModuleCommand(
            filename: 'imports.79.wasm',
            name: null,
            line: 405,
        );
    }

    #[Depends('testModule101')]
    public function testModule102(): void
    {
        $this->runModuleCommand(
            filename: 'imports.80.wasm',
            name: null,
            line: 406,
        );
    }

    #[Depends('testModule102')]
    public function testModule103(): void
    {
        $this->runModuleCommand(
            filename: 'imports.81.wasm',
            name: null,
            line: 407,
        );
    }

    #[Depends('testModule103')]
    public function testModule104(): void
    {
        $this->runModuleCommand(
            filename: 'imports.82.wasm',
            name: null,
            line: 408,
        );
    }

    #[Depends('testModule104')]
    public function testAssertUnlinkable105(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.83.wasm',
            text: 'unknown import',
            line: 411,
        );
    }

    #[Depends('testAssertUnlinkable105')]
    public function testAssertUnlinkable106(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.84.wasm',
            text: 'unknown import',
            line: 415,
        );
    }

    #[Depends('testAssertUnlinkable106')]
    public function testAssertUnlinkable107(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.85.wasm',
            text: 'incompatible import type',
            line: 420,
        );
    }

    #[Depends('testAssertUnlinkable107')]
    public function testAssertUnlinkable108(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.86.wasm',
            text: 'incompatible import type',
            line: 424,
        );
    }

    #[Depends('testAssertUnlinkable108')]
    public function testAssertUnlinkable109(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.87.wasm',
            text: 'incompatible import type',
            line: 428,
        );
    }

    #[Depends('testAssertUnlinkable109')]
    public function testAssertUnlinkable110(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.88.wasm',
            text: 'incompatible import type',
            line: 432,
        );
    }

    #[Depends('testAssertUnlinkable110')]
    public function testAssertUnlinkable111(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.89.wasm',
            text: 'incompatible import type',
            line: 436,
        );
    }

    #[Depends('testAssertUnlinkable111')]
    public function testAssertUnlinkable112(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.90.wasm',
            text: 'incompatible import type',
            line: 440,
        );
    }

    #[Depends('testAssertUnlinkable112')]
    public function testAssertUnlinkable113(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.91.wasm',
            text: 'incompatible import type',
            line: 445,
        );
    }

    #[Depends('testAssertUnlinkable113')]
    public function testAssertUnlinkable114(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.92.wasm',
            text: 'incompatible import type',
            line: 449,
        );
    }

    #[Depends('testAssertUnlinkable114')]
    public function testAssertUnlinkable115(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.93.wasm',
            text: 'incompatible import type',
            line: 453,
        );
    }

    #[Depends('testAssertUnlinkable115')]
    public function testAssertUnlinkable116(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.94.wasm',
            text: 'incompatible import type',
            line: 457,
        );
    }

    #[Depends('testAssertUnlinkable116')]
    public function testModule117(): void
    {
        $this->runModuleCommand(
            filename: 'imports.95.wasm',
            name: null,
            line: 465,
        );
    }

    #[Depends('testModule117')]
    public function testAssertReturn118(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 472,
        );
    }

    #[Depends('testAssertReturn118')]
    public function testAssertReturn119(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '16']],
            line: 473,
        );
    }

    #[Depends('testAssertReturn119')]
    public function testAssertReturn120(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'i32', 'value' => '1048576']],
            line: 474,
        );
    }

    #[Depends('testAssertReturn120')]
    public function testAssertTrap121(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '1000000']]],
            text: 'out of bounds memory access',
            line: 475,
        );
    }

    #[Depends('testAssertTrap121')]
    public function testModule122(): void
    {
        $this->runModuleCommand(
            filename: 'imports.96.wasm',
            name: null,
            line: 477,
        );
    }

    #[Depends('testModule122')]
    public function testAssertReturn123(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 483,
        );
    }

    #[Depends('testAssertReturn123')]
    public function testAssertReturn124(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '16']],
            line: 484,
        );
    }

    #[Depends('testAssertReturn124')]
    public function testAssertReturn125(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'i32', 'value' => '1048576']],
            line: 485,
        );
    }

    #[Depends('testAssertReturn125')]
    public function testAssertTrap126(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '1000000']]],
            text: 'out of bounds memory access',
            line: 486,
        );
    }

    #[Depends('testAssertTrap126')]
    public function testAssertInvalid127(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'imports.97.wasm',
            text: 'multiple memories',
            line: 489,
        );
    }

    #[Depends('testAssertInvalid127')]
    public function testAssertInvalid128(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'imports.98.wasm',
            text: 'multiple memories',
            line: 493,
        );
    }

    #[Depends('testAssertInvalid128')]
    public function testAssertInvalid129(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'imports.99.wasm',
            text: 'multiple memories',
            line: 497,
        );
    }

    #[Depends('testAssertInvalid129')]
    public function testModule130(): void
    {
        $this->runModuleCommand(
            filename: 'imports.100.wasm',
            name: null,
            line: 501,
        );
    }

    #[Depends('testModule130')]
    public function testModule131(): void
    {
        $this->runModuleCommand(
            filename: 'imports.101.wasm',
            name: null,
            line: 502,
        );
    }

    #[Depends('testModule131')]
    public function testModule132(): void
    {
        $this->runModuleCommand(
            filename: 'imports.102.wasm',
            name: null,
            line: 503,
        );
    }

    #[Depends('testModule132')]
    public function testModule133(): void
    {
        $this->runModuleCommand(
            filename: 'imports.103.wasm',
            name: null,
            line: 504,
        );
    }

    #[Depends('testModule133')]
    public function testModule134(): void
    {
        $this->runModuleCommand(
            filename: 'imports.104.wasm',
            name: null,
            line: 505,
        );
    }

    #[Depends('testModule134')]
    public function testModule135(): void
    {
        $this->runModuleCommand(
            filename: 'imports.105.wasm',
            name: null,
            line: 506,
        );
    }

    #[Depends('testModule135')]
    public function testModule136(): void
    {
        $this->runModuleCommand(
            filename: 'imports.106.wasm',
            name: null,
            line: 507,
        );
    }

    #[Depends('testModule136')]
    public function testModule137(): void
    {
        $this->runModuleCommand(
            filename: 'imports.107.wasm',
            name: null,
            line: 508,
        );
    }

    #[Depends('testModule137')]
    public function testModule138(): void
    {
        $this->runModuleCommand(
            filename: 'imports.108.wasm',
            name: null,
            line: 509,
        );
    }

    #[Depends('testModule138')]
    public function testAssertUnlinkable139(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.109.wasm',
            text: 'unknown import',
            line: 512,
        );
    }

    #[Depends('testAssertUnlinkable139')]
    public function testAssertUnlinkable140(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.110.wasm',
            text: 'unknown import',
            line: 516,
        );
    }

    #[Depends('testAssertUnlinkable140')]
    public function testAssertUnlinkable141(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.111.wasm',
            text: 'incompatible import type',
            line: 521,
        );
    }

    #[Depends('testAssertUnlinkable141')]
    public function testAssertUnlinkable142(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.112.wasm',
            text: 'incompatible import type',
            line: 525,
        );
    }

    #[Depends('testAssertUnlinkable142')]
    public function testAssertUnlinkable143(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.113.wasm',
            text: 'incompatible import type',
            line: 529,
        );
    }

    #[Depends('testAssertUnlinkable143')]
    public function testAssertUnlinkable144(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.114.wasm',
            text: 'incompatible import type',
            line: 533,
        );
    }

    #[Depends('testAssertUnlinkable144')]
    public function testAssertUnlinkable145(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.115.wasm',
            text: 'incompatible import type',
            line: 538,
        );
    }

    #[Depends('testAssertUnlinkable145')]
    public function testAssertUnlinkable146(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.116.wasm',
            text: 'incompatible import type',
            line: 542,
        );
    }

    #[Depends('testAssertUnlinkable146')]
    public function testAssertUnlinkable147(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.117.wasm',
            text: 'incompatible import type',
            line: 546,
        );
    }

    #[Depends('testAssertUnlinkable147')]
    public function testAssertUnlinkable148(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.118.wasm',
            text: 'incompatible import type',
            line: 550,
        );
    }

    #[Depends('testAssertUnlinkable148')]
    public function testAssertUnlinkable149(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.119.wasm',
            text: 'incompatible import type',
            line: 554,
        );
    }

    #[Depends('testAssertUnlinkable149')]
    public function testAssertUnlinkable150(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.120.wasm',
            text: 'incompatible import type',
            line: 558,
        );
    }

    #[Depends('testAssertUnlinkable150')]
    public function testAssertUnlinkable151(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.121.wasm',
            text: 'incompatible import type',
            line: 563,
        );
    }

    #[Depends('testAssertUnlinkable151')]
    public function testAssertUnlinkable152(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.122.wasm',
            text: 'incompatible import type',
            line: 567,
        );
    }

    #[Depends('testAssertUnlinkable152')]
    public function testModule153(): void
    {
        $this->runModuleCommand(
            filename: 'imports.123.wasm',
            name: null,
            line: 571,
        );
    }

    #[Depends('testModule153')]
    public function testAssertReturn154(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 575,
        );
    }

    #[Depends('testAssertReturn154')]
    public function testAssertReturn155(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 576,
        );
    }

    #[Depends('testAssertReturn155')]
    public function testAssertReturn156(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 577,
        );
    }

    #[Depends('testAssertReturn156')]
    public function testAssertReturn157(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 578,
        );
    }

    #[Depends('testAssertReturn157')]
    public function testAssertReturn158(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 579,
        );
    }

    #[Depends('testAssertReturn158')]
    public function testModule159(): void
    {
        $this->runModuleCommand(
            filename: 'imports.124.wasm',
            name: '$Mgm',
            line: 581,
        );
    }

    #[Depends('testModule159')]
    public function testRegister160(): void
    {
        $this->runRegisterCommand(
            name: '$Mgm',
            as: 'grown-memory',
            line: 585,
        );
    }

    #[Depends('testRegister160')]
    public function testAssertReturn161(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'module' => '$Mgm', 'field' => 'grow', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 586,
        );
    }

    #[Depends('testAssertReturn161')]
    public function testModule162(): void
    {
        $this->runModuleCommand(
            filename: 'imports.125.wasm',
            name: '$Mgim1',
            line: 587,
        );
    }

    #[Depends('testModule162')]
    public function testRegister163(): void
    {
        $this->runRegisterCommand(
            name: '$Mgim1',
            as: 'grown-imported-memory',
            line: 592,
        );
    }

    #[Depends('testRegister163')]
    public function testAssertReturn164(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'module' => '$Mgim1', 'field' => 'grow', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 593,
        );
    }

    #[Depends('testAssertReturn164')]
    public function testModule165(): void
    {
        $this->runModuleCommand(
            filename: 'imports.126.wasm',
            name: '$Mgim2',
            line: 594,
        );
    }

    #[Depends('testModule165')]
    public function testAssertReturn166(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'module' => '$Mgim2', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 599,
        );
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertReturn166')]
    public function testAssertMalformed167(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed167')]
    public function testAssertMalformed168(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed168')]
    public function testAssertMalformed169(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed169')]
    public function testAssertMalformed170(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed170')]
    public function testAssertMalformed171(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed171')]
    public function testAssertMalformed172(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed172')]
    public function testAssertMalformed173(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed173')]
    public function testAssertMalformed174(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed174')]
    public function testAssertMalformed175(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed175')]
    public function testAssertMalformed176(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed176')]
    public function testAssertMalformed177(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed177')]
    public function testAssertMalformed178(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed178')]
    public function testAssertMalformed179(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed179')]
    public function testAssertMalformed180(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed180')]
    public function testAssertMalformed181(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed181')]
    public function testAssertMalformed182(): void
    {
    }

    #[Depends('testAssertMalformed182')]
    public function testModule183(): void
    {
        $this->runModuleCommand(
            filename: 'imports.143.wasm',
            name: null,
            line: 675,
        );
    }

    #[Depends('testModule183')]
    public function testRegister184(): void
    {
        $this->runRegisterCommand(
            name: null,
            as: 'not wasm',
            line: 676,
        );
    }

    #[Depends('testRegister184')]
    public function testAssertUnlinkable185(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'imports.144.wasm',
            text: 'unknown import',
            line: 678,
        );
    }
}
