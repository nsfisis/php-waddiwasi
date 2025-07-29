<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class LinkingTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'linking.0.wasm',
            name: '$Mf',
            line: 3,
        );
    }

    public function testRegister1(): void
    {
        $this->runRegisterCommand(
            name: '$Mf',
            as: 'Mf',
            line: 7,
        );
    }

    public function testModule2(): void
    {
        $this->runModuleCommand(
            filename: 'linking.1.wasm',
            name: '$Nf',
            line: 9,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Mf', 'field' => 'call', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 17,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Nf', 'field' => 'Mf.call', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 18,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Nf', 'field' => 'call', 'args' => []],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 19,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Nf', 'field' => 'call Mf.call', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 20,
        );
    }

    public function testModule7(): void
    {
        $this->runModuleCommand(
            filename: 'linking.2.wasm',
            name: null,
            line: 22,
        );
    }

    public function testRegister8(): void
    {
        $this->runRegisterCommand(
            name: null,
            as: 'reexport_f',
            line: 26,
        );
    }

    public function testAssertUnlinkable9(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'linking.3.wasm',
            text: 'incompatible import type',
            line: 28,
        );
    }

    public function testAssertUnlinkable10(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'linking.4.wasm',
            text: 'incompatible import type',
            line: 32,
        );
    }

    public function testModule11(): void
    {
        $this->runModuleCommand(
            filename: 'linking.5.wasm',
            name: '$Mg',
            line: 39,
        );
    }

    public function testRegister12(): void
    {
        $this->runRegisterCommand(
            name: '$Mg',
            as: 'Mg',
            line: 48,
        );
    }

    public function testModule13(): void
    {
        $this->runModuleCommand(
            filename: 'linking.6.wasm',
            name: '$Ng',
            line: 50,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'get', 'module' => '$Mg', 'field' => 'glob'],
            expected: [['type' => 'i32', 'value' => '42']],
            line: 67,
        );
    }

    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'get', 'module' => '$Ng', 'field' => 'Mg.glob'],
            expected: [['type' => 'i32', 'value' => '42']],
            line: 68,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'get', 'module' => '$Ng', 'field' => 'glob'],
            expected: [['type' => 'i32', 'value' => '43']],
            line: 69,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Mg', 'field' => 'get', 'args' => []],
            expected: [['type' => 'i32', 'value' => '42']],
            line: 70,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Ng', 'field' => 'Mg.get', 'args' => []],
            expected: [['type' => 'i32', 'value' => '42']],
            line: 71,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Ng', 'field' => 'get', 'args' => []],
            expected: [['type' => 'i32', 'value' => '43']],
            line: 72,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'get', 'module' => '$Mg', 'field' => 'mut_glob'],
            expected: [['type' => 'i32', 'value' => '142']],
            line: 74,
        );
    }

    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'get', 'module' => '$Ng', 'field' => 'Mg.mut_glob'],
            expected: [['type' => 'i32', 'value' => '142']],
            line: 75,
        );
    }

    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Mg', 'field' => 'get_mut', 'args' => []],
            expected: [['type' => 'i32', 'value' => '142']],
            line: 76,
        );
    }

    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Ng', 'field' => 'Mg.get_mut', 'args' => []],
            expected: [['type' => 'i32', 'value' => '142']],
            line: 77,
        );
    }

    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Mg', 'field' => 'set_mut', 'args' => [['type' => 'i32', 'value' => '241']]],
            expected: [],
            line: 79,
        );
    }

    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'get', 'module' => '$Mg', 'field' => 'mut_glob'],
            expected: [['type' => 'i32', 'value' => '241']],
            line: 80,
        );
    }

    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'get', 'module' => '$Ng', 'field' => 'Mg.mut_glob'],
            expected: [['type' => 'i32', 'value' => '241']],
            line: 81,
        );
    }

    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Mg', 'field' => 'get_mut', 'args' => []],
            expected: [['type' => 'i32', 'value' => '241']],
            line: 82,
        );
    }

    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Ng', 'field' => 'Mg.get_mut', 'args' => []],
            expected: [['type' => 'i32', 'value' => '241']],
            line: 83,
        );
    }

    public function testAssertUnlinkable29(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'linking.7.wasm',
            text: 'incompatible import type',
            line: 87,
        );
    }

    public function testAssertUnlinkable30(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'linking.8.wasm',
            text: 'incompatible import type',
            line: 91,
        );
    }

    public function testModule31(): void
    {
        $this->runModuleCommand(
            filename: 'linking.9.wasm',
            name: '$Mref_ex',
            line: 96,
        );
    }

    public function testRegister32(): void
    {
        $this->runRegisterCommand(
            name: '$Mref_ex',
            as: 'Mref_ex',
            line: 102,
        );
    }

    public function testModule33(): void
    {
        $this->runModuleCommand(
            filename: 'linking.10.wasm',
            name: '$Mref_im',
            line: 104,
        );
    }

    public function testAssertUnlinkable34(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'linking.11.wasm',
            text: 'incompatible import type',
            line: 113,
        );
    }

    public function testAssertUnlinkable35(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'linking.12.wasm',
            text: 'incompatible import type',
            line: 117,
        );
    }

    public function testAssertUnlinkable36(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'linking.13.wasm',
            text: 'incompatible import type',
            line: 123,
        );
    }

    public function testAssertUnlinkable37(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'linking.14.wasm',
            text: 'incompatible import type',
            line: 127,
        );
    }

    public function testModule38(): void
    {
        $this->runModuleCommand(
            filename: 'linking.15.wasm',
            name: '$Mt',
            line: 134,
        );
    }

    public function testRegister39(): void
    {
        $this->runRegisterCommand(
            name: '$Mt',
            as: 'Mt',
            line: 147,
        );
    }

    public function testModule40(): void
    {
        $this->runModuleCommand(
            filename: 'linking.16.wasm',
            name: '$Nt',
            line: 149,
        );
    }

    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Mt', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 168,
        );
    }

    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Nt', 'field' => 'Mt.call', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 169,
        );
    }

    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Nt', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 170,
        );
    }

    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Nt', 'field' => 'call Mt.call', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 171,
        );
    }

    public function testAssertTrap45(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'module' => '$Mt', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 173,
        );
    }

    public function testAssertTrap46(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'module' => '$Nt', 'field' => 'Mt.call', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 174,
        );
    }

    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Nt', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 175,
        );
    }

    public function testAssertTrap48(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'module' => '$Nt', 'field' => 'call Mt.call', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 176,
        );
    }

    public function testAssertTrap49(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'module' => '$Mt', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 178,
        );
    }

    public function testAssertTrap50(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'module' => '$Nt', 'field' => 'Mt.call', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 179,
        );
    }

    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Nt', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 180,
        );
    }

    public function testAssertTrap52(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'module' => '$Nt', 'field' => 'call Mt.call', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 181,
        );
    }

    public function testAssertTrap53(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'module' => '$Mt', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'undefined element',
            line: 183,
        );
    }

    public function testAssertTrap54(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'module' => '$Nt', 'field' => 'Mt.call', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'undefined element',
            line: 184,
        );
    }

    public function testAssertTrap55(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'module' => '$Nt', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'undefined element',
            line: 185,
        );
    }

    public function testAssertTrap56(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'module' => '$Nt', 'field' => 'call Mt.call', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'undefined element',
            line: 186,
        );
    }

    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Nt', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '4294967292']],
            line: 188,
        );
    }

    public function testAssertTrap58(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'module' => '$Nt', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '4']]],
            text: 'indirect call type mismatch',
            line: 189,
        );
    }

    public function testModule59(): void
    {
        $this->runModuleCommand(
            filename: 'linking.17.wasm',
            name: '$Ot',
            line: 191,
        );
    }

    public function testAssertReturn60(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Mt', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 204,
        );
    }

    public function testAssertReturn61(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Nt', 'field' => 'Mt.call', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 205,
        );
    }

    public function testAssertReturn62(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Nt', 'field' => 'call Mt.call', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 206,
        );
    }

    public function testAssertReturn63(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Ot', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 207,
        );
    }

    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Mt', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '4294967292']],
            line: 209,
        );
    }

    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Nt', 'field' => 'Mt.call', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '4294967292']],
            line: 210,
        );
    }

    public function testAssertReturn66(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Nt', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 211,
        );
    }

    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Nt', 'field' => 'call Mt.call', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '4294967292']],
            line: 212,
        );
    }

    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Ot', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '4294967292']],
            line: 213,
        );
    }

    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Mt', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 215,
        );
    }

    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Nt', 'field' => 'Mt.call', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 216,
        );
    }

    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Nt', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 217,
        );
    }

    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Nt', 'field' => 'call Mt.call', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 218,
        );
    }

    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Ot', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 219,
        );
    }

    public function testAssertTrap74(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'module' => '$Mt', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 221,
        );
    }

    public function testAssertTrap75(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'module' => '$Nt', 'field' => 'Mt.call', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 222,
        );
    }

    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Nt', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 223,
        );
    }

    public function testAssertTrap77(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'module' => '$Nt', 'field' => 'call Mt.call', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 224,
        );
    }

    public function testAssertTrap78(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'module' => '$Ot', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 225,
        );
    }

    public function testAssertTrap79(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'module' => '$Ot', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'undefined element',
            line: 227,
        );
    }

    public function testModule80(): void
    {
        $this->runModuleCommand(
            filename: 'linking.18.wasm',
            name: null,
            line: 229,
        );
    }

    public function testModule81(): void
    {
        $this->runModuleCommand(
            filename: 'linking.19.wasm',
            name: '$G1',
            line: 235,
        );
    }

    public function testRegister82(): void
    {
        $this->runRegisterCommand(
            name: '$G1',
            as: 'G1',
            line: 236,
        );
    }

    public function testModule83(): void
    {
        $this->runModuleCommand(
            filename: 'linking.20.wasm',
            name: '$G2',
            line: 237,
        );
    }

    public function testAssertReturn84(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'get', 'module' => '$G2', 'field' => 'g'],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 241,
        );
    }

    public function testAssertUninstantiable85(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'linking.21.wasm',
            text: 'out of bounds table access',
            line: 244,
        );
    }

    public function testAssertUnlinkable86(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'linking.22.wasm',
            text: 'unknown import',
            line: 253,
        );
    }

    public function testAssertTrap87(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'module' => '$Mt', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 262,
        );
    }

    public function testAssertUninstantiable88(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'linking.23.wasm',
            text: 'out of bounds table access',
            line: 267,
        );
    }

    public function testAssertReturn89(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Mt', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '7']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 275,
        );
    }

    public function testAssertTrap90(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'module' => '$Mt', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 276,
        );
    }

    public function testAssertUninstantiable91(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'linking.24.wasm',
            text: 'out of bounds memory access',
            line: 279,
        );
    }

    public function testAssertReturn92(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Mt', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '7']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 288,
        );
    }

    public function testModule93(): void
    {
        $this->runModuleCommand(
            filename: 'linking.25.wasm',
            name: '$Mtable_ex',
            line: 291,
        );
    }

    public function testRegister94(): void
    {
        $this->runRegisterCommand(
            name: '$Mtable_ex',
            as: 'Mtable_ex',
            line: 295,
        );
    }

    public function testModule95(): void
    {
        $this->runModuleCommand(
            filename: 'linking.26.wasm',
            name: null,
            line: 297,
        );
    }

    public function testAssertUnlinkable96(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'linking.27.wasm',
            text: 'incompatible import type',
            line: 303,
        );
    }

    public function testAssertUnlinkable97(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'linking.28.wasm',
            text: 'incompatible import type',
            line: 307,
        );
    }

    public function testModule98(): void
    {
        $this->runModuleCommand(
            filename: 'linking.29.wasm',
            name: '$Mm',
            line: 314,
        );
    }

    public function testRegister99(): void
    {
        $this->runRegisterCommand(
            name: '$Mm',
            as: 'Mm',
            line: 322,
        );
    }

    public function testModule100(): void
    {
        $this->runModuleCommand(
            filename: 'linking.30.wasm',
            name: '$Nm',
            line: 324,
        );
    }

    public function testAssertReturn101(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Mm', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 336,
        );
    }

    public function testAssertReturn102(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Nm', 'field' => 'Mm.load', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 337,
        );
    }

    public function testAssertReturn103(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Nm', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '242']],
            line: 338,
        );
    }

    public function testModule104(): void
    {
        $this->runModuleCommand(
            filename: 'linking.31.wasm',
            name: '$Om',
            line: 340,
        );
    }

    public function testAssertReturn105(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Mm', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '167']],
            line: 349,
        );
    }

    public function testAssertReturn106(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Nm', 'field' => 'Mm.load', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '167']],
            line: 350,
        );
    }

    public function testAssertReturn107(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Nm', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '242']],
            line: 351,
        );
    }

    public function testAssertReturn108(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Om', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '167']],
            line: 352,
        );
    }

    public function testModule109(): void
    {
        $this->runModuleCommand(
            filename: 'linking.32.wasm',
            name: null,
            line: 354,
        );
    }

    public function testAssertUninstantiable110(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'linking.33.wasm',
            text: 'out of bounds memory access',
            line: 360,
        );
    }

    public function testModule111(): void
    {
        $this->runModuleCommand(
            filename: 'linking.34.wasm',
            name: '$Pm',
            line: 367,
        );
    }

    public function testAssertReturn112(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Pm', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 375,
        );
    }

    public function testAssertReturn113(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Pm', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 376,
        );
    }

    public function testAssertReturn114(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Pm', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 377,
        );
    }

    public function testAssertReturn115(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Pm', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 378,
        );
    }

    public function testAssertReturn116(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Pm', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 379,
        );
    }

    public function testAssertReturn117(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Pm', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 380,
        );
    }

    public function testAssertReturn118(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Pm', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 381,
        );
    }

    public function testAssertReturn119(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Pm', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 382,
        );
    }

    public function testAssertUnlinkable120(): void
    {
        $this->runAssertUnlinkableCommand(
            filename: 'linking.35.wasm',
            text: 'unknown import',
            line: 385,
        );
    }

    public function testAssertReturn121(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Mm', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 393,
        );
    }

    public function testAssertUninstantiable122(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'linking.36.wasm',
            text: 'out of bounds memory access',
            line: 398,
        );
    }

    public function testAssertReturn123(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Mm', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '97']],
            line: 406,
        );
    }

    public function testAssertReturn124(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Mm', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '327670']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 407,
        );
    }

    public function testAssertUninstantiable125(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'linking.37.wasm',
            text: 'out of bounds table access',
            line: 410,
        );
    }

    public function testAssertReturn126(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Mm', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '97']],
            line: 419,
        );
    }

    public function testModule127(): void
    {
        $this->runModuleCommand(
            filename: 'linking.38.wasm',
            name: '$Ms',
            line: 422,
        );
    }

    public function testRegister128(): void
    {
        $this->runRegisterCommand(
            name: '$Ms',
            as: 'Ms',
            line: 433,
        );
    }

    public function testAssertUninstantiable129(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'linking.39.wasm',
            text: 'unreachable',
            line: 436,
        );
    }

    public function testAssertReturn130(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Ms', 'field' => 'get memory[0]', 'args' => []],
            expected: [['type' => 'i32', 'value' => '104']],
            line: 452,
        );
    }

    public function testAssertReturn131(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$Ms', 'field' => 'get table[0]', 'args' => []],
            expected: [['type' => 'i32', 'value' => '57005']],
            line: 453,
        );
    }
}
