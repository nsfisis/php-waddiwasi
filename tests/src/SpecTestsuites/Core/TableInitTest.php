<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class TableInitTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.0.wasm',
            name: null,
            line: 6,
        );
    }

    public function testRegister1(): void
    {
        $this->runRegisterCommand(
            name: null,
            as: 'a',
            line: 13,
        );
    }

    public function testModule2(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.1.wasm',
            name: null,
            line: 15,
        );
    }

    public function testAction3(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 41,
        );
    }

    public function testAssertTrap4(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 42,
        );
    }

    public function testAssertTrap5(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 43,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 44,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 45,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 46,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 47,
        );
    }

    public function testAssertTrap10(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 48,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '7']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 49,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 50,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '9']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 51,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 52,
        );
    }

    public function testAssertTrap15(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 53,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 54,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 55,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 56,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 57,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 58,
        );
    }

    public function testAssertTrap21(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 59,
        );
    }

    public function testAssertTrap22(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 60,
        );
    }

    public function testAssertTrap23(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 61,
        );
    }

    public function testAssertTrap24(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 62,
        );
    }

    public function testAssertTrap25(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 63,
        );
    }

    public function testAssertTrap26(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 64,
        );
    }

    public function testAssertTrap27(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 65,
        );
    }

    public function testAssertTrap28(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 66,
        );
    }

    public function testAssertTrap29(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 67,
        );
    }

    public function testAssertTrap30(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 68,
        );
    }

    public function testAssertTrap31(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 69,
        );
    }

    public function testAssertTrap32(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 70,
        );
    }

    public function testAssertTrap33(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 71,
        );
    }

    public function testModule34(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.2.wasm',
            name: null,
            line: 73,
        );
    }

    public function testAction35(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 99,
        );
    }

    public function testAssertTrap36(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 100,
        );
    }

    public function testAssertTrap37(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 101,
        );
    }

    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 102,
        );
    }

    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 103,
        );
    }

    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 104,
        );
    }

    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 105,
        );
    }

    public function testAssertTrap42(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 106,
        );
    }

    public function testAssertTrap43(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 107,
        );
    }

    public function testAssertTrap44(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 108,
        );
    }

    public function testAssertTrap45(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 109,
        );
    }

    public function testAssertTrap46(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 110,
        );
    }

    public function testAssertTrap47(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 111,
        );
    }

    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 112,
        );
    }

    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 113,
        );
    }

    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 114,
        );
    }

    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 115,
        );
    }

    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 116,
        );
    }

    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '17']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 117,
        );
    }

    public function testAssertTrap54(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 118,
        );
    }

    public function testAssertTrap55(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 119,
        );
    }

    public function testAssertTrap56(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 120,
        );
    }

    public function testAssertTrap57(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 121,
        );
    }

    public function testAssertTrap58(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 122,
        );
    }

    public function testAssertTrap59(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 123,
        );
    }

    public function testAssertTrap60(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 124,
        );
    }

    public function testAssertTrap61(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 125,
        );
    }

    public function testAssertTrap62(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 126,
        );
    }

    public function testAssertTrap63(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 127,
        );
    }

    public function testAssertTrap64(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 128,
        );
    }

    public function testAssertTrap65(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 129,
        );
    }

    public function testModule66(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.3.wasm',
            name: null,
            line: 131,
        );
    }

    public function testAction67(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 165,
        );
    }

    public function testAssertTrap68(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 166,
        );
    }

    public function testAssertTrap69(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 167,
        );
    }

    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 168,
        );
    }

    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 169,
        );
    }

    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 170,
        );
    }

    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 171,
        );
    }

    public function testAssertTrap74(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 172,
        );
    }

    public function testAssertReturn75(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '7']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 173,
        );
    }

    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 174,
        );
    }

    public function testAssertReturn77(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '9']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 175,
        );
    }

    public function testAssertReturn78(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 176,
        );
    }

    public function testAssertTrap79(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 177,
        );
    }

    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 178,
        );
    }

    public function testAssertTrap81(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 179,
        );
    }

    public function testAssertReturn82(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 180,
        );
    }

    public function testAssertReturn83(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 181,
        );
    }

    public function testAssertReturn84(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 182,
        );
    }

    public function testAssertReturn85(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '17']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 183,
        );
    }

    public function testAssertTrap86(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 184,
        );
    }

    public function testAssertReturn87(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '19']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 185,
        );
    }

    public function testAssertTrap88(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 186,
        );
    }

    public function testAssertReturn89(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '21']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 187,
        );
    }

    public function testAssertTrap90(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 188,
        );
    }

    public function testAssertReturn91(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '23']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 189,
        );
    }

    public function testAssertReturn92(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '24']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 190,
        );
    }

    public function testAssertTrap93(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 191,
        );
    }

    public function testAssertTrap94(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 192,
        );
    }

    public function testAssertTrap95(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 193,
        );
    }

    public function testAssertTrap96(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 194,
        );
    }

    public function testAssertTrap97(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 195,
        );
    }

    public function testModule98(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.4.wasm',
            name: null,
            line: 197,
        );
    }

    public function testAction99(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 223,
        );
    }

    public function testAssertTrap100(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 224,
        );
    }

    public function testAssertTrap101(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 225,
        );
    }

    public function testAssertReturn102(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 226,
        );
    }

    public function testAssertReturn103(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 227,
        );
    }

    public function testAssertReturn104(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 228,
        );
    }

    public function testAssertReturn105(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 229,
        );
    }

    public function testAssertTrap106(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 230,
        );
    }

    public function testAssertReturn107(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '7']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 231,
        );
    }

    public function testAssertReturn108(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 232,
        );
    }

    public function testAssertReturn109(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '9']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 233,
        );
    }

    public function testAssertReturn110(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 234,
        );
    }

    public function testAssertTrap111(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 235,
        );
    }

    public function testAssertReturn112(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 236,
        );
    }

    public function testAssertReturn113(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 237,
        );
    }

    public function testAssertReturn114(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 238,
        );
    }

    public function testAssertReturn115(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 239,
        );
    }

    public function testAssertReturn116(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 240,
        );
    }

    public function testAssertTrap117(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 241,
        );
    }

    public function testAssertTrap118(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 242,
        );
    }

    public function testAssertTrap119(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 243,
        );
    }

    public function testAssertTrap120(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 244,
        );
    }

    public function testAssertTrap121(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 245,
        );
    }

    public function testAssertTrap122(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 246,
        );
    }

    public function testAssertTrap123(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 247,
        );
    }

    public function testAssertTrap124(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 248,
        );
    }

    public function testAssertTrap125(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 249,
        );
    }

    public function testAssertTrap126(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 250,
        );
    }

    public function testAssertTrap127(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 251,
        );
    }

    public function testAssertTrap128(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 252,
        );
    }

    public function testAssertTrap129(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 253,
        );
    }

    public function testModule130(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.5.wasm',
            name: null,
            line: 255,
        );
    }

    public function testAction131(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 281,
        );
    }

    public function testAssertTrap132(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 282,
        );
    }

    public function testAssertTrap133(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 283,
        );
    }

    public function testAssertReturn134(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 284,
        );
    }

    public function testAssertReturn135(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 285,
        );
    }

    public function testAssertReturn136(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 286,
        );
    }

    public function testAssertReturn137(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 287,
        );
    }

    public function testAssertTrap138(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 288,
        );
    }

    public function testAssertTrap139(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 289,
        );
    }

    public function testAssertTrap140(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 290,
        );
    }

    public function testAssertTrap141(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 291,
        );
    }

    public function testAssertTrap142(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 292,
        );
    }

    public function testAssertTrap143(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 293,
        );
    }

    public function testAssertReturn144(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 294,
        );
    }

    public function testAssertReturn145(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 295,
        );
    }

    public function testAssertReturn146(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 296,
        );
    }

    public function testAssertReturn147(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 297,
        );
    }

    public function testAssertReturn148(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 298,
        );
    }

    public function testAssertReturn149(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '17']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 299,
        );
    }

    public function testAssertTrap150(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 300,
        );
    }

    public function testAssertTrap151(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 301,
        );
    }

    public function testAssertTrap152(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 302,
        );
    }

    public function testAssertTrap153(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 303,
        );
    }

    public function testAssertTrap154(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 304,
        );
    }

    public function testAssertTrap155(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 305,
        );
    }

    public function testAssertTrap156(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 306,
        );
    }

    public function testAssertTrap157(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 307,
        );
    }

    public function testAssertTrap158(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 308,
        );
    }

    public function testAssertTrap159(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 309,
        );
    }

    public function testAssertTrap160(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 310,
        );
    }

    public function testAssertTrap161(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 311,
        );
    }

    public function testModule162(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.6.wasm',
            name: null,
            line: 313,
        );
    }

    public function testAction163(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 347,
        );
    }

    public function testAssertTrap164(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 348,
        );
    }

    public function testAssertTrap165(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 349,
        );
    }

    public function testAssertReturn166(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 350,
        );
    }

    public function testAssertReturn167(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 351,
        );
    }

    public function testAssertReturn168(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 352,
        );
    }

    public function testAssertReturn169(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 353,
        );
    }

    public function testAssertTrap170(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 354,
        );
    }

    public function testAssertReturn171(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '7']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 355,
        );
    }

    public function testAssertReturn172(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 356,
        );
    }

    public function testAssertReturn173(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '9']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 357,
        );
    }

    public function testAssertReturn174(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 358,
        );
    }

    public function testAssertTrap175(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 359,
        );
    }

    public function testAssertReturn176(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 360,
        );
    }

    public function testAssertTrap177(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 361,
        );
    }

    public function testAssertReturn178(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 362,
        );
    }

    public function testAssertReturn179(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 363,
        );
    }

    public function testAssertReturn180(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 364,
        );
    }

    public function testAssertReturn181(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '17']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 365,
        );
    }

    public function testAssertTrap182(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 366,
        );
    }

    public function testAssertReturn183(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '19']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 367,
        );
    }

    public function testAssertTrap184(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 368,
        );
    }

    public function testAssertReturn185(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '21']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 369,
        );
    }

    public function testAssertTrap186(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 370,
        );
    }

    public function testAssertReturn187(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '23']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 371,
        );
    }

    public function testAssertReturn188(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '24']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 372,
        );
    }

    public function testAssertTrap189(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 373,
        );
    }

    public function testAssertTrap190(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 374,
        );
    }

    public function testAssertTrap191(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 375,
        );
    }

    public function testAssertTrap192(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 376,
        );
    }

    public function testAssertTrap193(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 377,
        );
    }

    public function testAssertInvalid194(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.7.wasm',
            text: 'unknown elem segment 0',
            line: 379,
        );
    }

    public function testAssertInvalid195(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.8.wasm',
            text: 'unknown table 0',
            line: 385,
        );
    }

    public function testAssertInvalid196(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.9.wasm',
            text: 'unknown elem segment 4',
            line: 391,
        );
    }

    public function testAssertInvalid197(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.10.wasm',
            text: 'unknown table 0',
            line: 399,
        );
    }

    public function testModule198(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.11.wasm',
            name: null,
            line: 407,
        );
    }

    public function testAction199(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 429,
        );
    }

    public function testModule200(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.12.wasm',
            name: null,
            line: 431,
        );
    }

    public function testAssertTrap201(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 453,
        );
    }

    public function testModule202(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.13.wasm',
            name: null,
            line: 455,
        );
    }

    public function testAction203(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 477,
        );
    }

    public function testModule204(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.14.wasm',
            name: null,
            line: 479,
        );
    }

    public function testAction205(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 501,
        );
    }

    public function testModule206(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.15.wasm',
            name: null,
            line: 503,
        );
    }

    public function testAssertTrap207(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 525,
        );
    }

    public function testModule208(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.16.wasm',
            name: null,
            line: 527,
        );
    }

    public function testAssertTrap209(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 549,
        );
    }

    public function testModule210(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.17.wasm',
            name: null,
            line: 551,
        );
    }

    public function testAssertTrap211(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 573,
        );
    }

    public function testModule212(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.18.wasm',
            name: null,
            line: 575,
        );
    }

    public function testAssertTrap213(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 597,
        );
    }

    public function testModule214(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.19.wasm',
            name: null,
            line: 599,
        );
    }

    public function testAction215(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 621,
        );
    }

    public function testModule216(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.20.wasm',
            name: null,
            line: 623,
        );
    }

    public function testAssertTrap217(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 645,
        );
    }

    public function testModule218(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.21.wasm',
            name: null,
            line: 647,
        );
    }

    public function testAction219(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 669,
        );
    }

    public function testModule220(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.22.wasm',
            name: null,
            line: 671,
        );
    }

    public function testAssertTrap221(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 693,
        );
    }

    public function testModule222(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.23.wasm',
            name: null,
            line: 695,
        );
    }

    public function testAction223(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 717,
        );
    }

    public function testModule224(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.24.wasm',
            name: null,
            line: 719,
        );
    }

    public function testAssertTrap225(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 741,
        );
    }

    public function testModule226(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.25.wasm',
            name: null,
            line: 743,
        );
    }

    public function testAssertTrap227(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 765,
        );
    }

    public function testModule228(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.26.wasm',
            name: null,
            line: 767,
        );
    }

    public function testAction229(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 789,
        );
    }

    public function testModule230(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.27.wasm',
            name: null,
            line: 791,
        );
    }

    public function testAssertTrap231(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 813,
        );
    }

    public function testModule232(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.28.wasm',
            name: null,
            line: 815,
        );
    }

    public function testAction233(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 837,
        );
    }

    public function testModule234(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.29.wasm',
            name: null,
            line: 839,
        );
    }

    public function testAssertTrap235(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 861,
        );
    }

    public function testModule236(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.30.wasm',
            name: null,
            line: 863,
        );
    }

    public function testAction237(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 885,
        );
    }

    public function testModule238(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.31.wasm',
            name: null,
            line: 887,
        );
    }

    public function testAssertTrap239(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 909,
        );
    }

    public function testAssertInvalid240(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.32.wasm',
            text: 'type mismatch',
            line: 912,
        );
    }

    public function testAssertInvalid241(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.33.wasm',
            text: 'type mismatch',
            line: 921,
        );
    }

    public function testAssertInvalid242(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.34.wasm',
            text: 'type mismatch',
            line: 930,
        );
    }

    public function testAssertInvalid243(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.35.wasm',
            text: 'type mismatch',
            line: 939,
        );
    }

    public function testAssertInvalid244(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.36.wasm',
            text: 'type mismatch',
            line: 948,
        );
    }

    public function testAssertInvalid245(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.37.wasm',
            text: 'type mismatch',
            line: 957,
        );
    }

    public function testAssertInvalid246(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.38.wasm',
            text: 'type mismatch',
            line: 966,
        );
    }

    public function testAssertInvalid247(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.39.wasm',
            text: 'type mismatch',
            line: 975,
        );
    }

    public function testAssertInvalid248(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.40.wasm',
            text: 'type mismatch',
            line: 984,
        );
    }

    public function testAssertInvalid249(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.41.wasm',
            text: 'type mismatch',
            line: 993,
        );
    }

    public function testAssertInvalid250(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.42.wasm',
            text: 'type mismatch',
            line: 1002,
        );
    }

    public function testAssertInvalid251(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.43.wasm',
            text: 'type mismatch',
            line: 1011,
        );
    }

    public function testAssertInvalid252(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.44.wasm',
            text: 'type mismatch',
            line: 1020,
        );
    }

    public function testAssertInvalid253(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.45.wasm',
            text: 'type mismatch',
            line: 1029,
        );
    }

    public function testAssertInvalid254(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.46.wasm',
            text: 'type mismatch',
            line: 1038,
        );
    }

    public function testAssertInvalid255(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.47.wasm',
            text: 'type mismatch',
            line: 1047,
        );
    }

    public function testAssertInvalid256(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.48.wasm',
            text: 'type mismatch',
            line: 1056,
        );
    }

    public function testAssertInvalid257(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.49.wasm',
            text: 'type mismatch',
            line: 1065,
        );
    }

    public function testAssertInvalid258(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.50.wasm',
            text: 'type mismatch',
            line: 1074,
        );
    }

    public function testAssertInvalid259(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.51.wasm',
            text: 'type mismatch',
            line: 1083,
        );
    }

    public function testAssertInvalid260(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.52.wasm',
            text: 'type mismatch',
            line: 1092,
        );
    }

    public function testAssertInvalid261(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.53.wasm',
            text: 'type mismatch',
            line: 1101,
        );
    }

    public function testAssertInvalid262(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.54.wasm',
            text: 'type mismatch',
            line: 1110,
        );
    }

    public function testAssertInvalid263(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.55.wasm',
            text: 'type mismatch',
            line: 1119,
        );
    }

    public function testAssertInvalid264(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.56.wasm',
            text: 'type mismatch',
            line: 1128,
        );
    }

    public function testAssertInvalid265(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.57.wasm',
            text: 'type mismatch',
            line: 1137,
        );
    }

    public function testAssertInvalid266(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.58.wasm',
            text: 'type mismatch',
            line: 1146,
        );
    }

    public function testAssertInvalid267(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.59.wasm',
            text: 'type mismatch',
            line: 1155,
        );
    }

    public function testAssertInvalid268(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.60.wasm',
            text: 'type mismatch',
            line: 1164,
        );
    }

    public function testAssertInvalid269(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.61.wasm',
            text: 'type mismatch',
            line: 1173,
        );
    }

    public function testAssertInvalid270(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.62.wasm',
            text: 'type mismatch',
            line: 1182,
        );
    }

    public function testAssertInvalid271(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.63.wasm',
            text: 'type mismatch',
            line: 1191,
        );
    }

    public function testAssertInvalid272(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.64.wasm',
            text: 'type mismatch',
            line: 1200,
        );
    }

    public function testAssertInvalid273(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.65.wasm',
            text: 'type mismatch',
            line: 1209,
        );
    }

    public function testAssertInvalid274(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.66.wasm',
            text: 'type mismatch',
            line: 1218,
        );
    }

    public function testAssertInvalid275(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.67.wasm',
            text: 'type mismatch',
            line: 1227,
        );
    }

    public function testAssertInvalid276(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.68.wasm',
            text: 'type mismatch',
            line: 1236,
        );
    }

    public function testAssertInvalid277(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.69.wasm',
            text: 'type mismatch',
            line: 1245,
        );
    }

    public function testAssertInvalid278(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.70.wasm',
            text: 'type mismatch',
            line: 1254,
        );
    }

    public function testAssertInvalid279(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.71.wasm',
            text: 'type mismatch',
            line: 1263,
        );
    }

    public function testAssertInvalid280(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.72.wasm',
            text: 'type mismatch',
            line: 1272,
        );
    }

    public function testAssertInvalid281(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.73.wasm',
            text: 'type mismatch',
            line: 1281,
        );
    }

    public function testAssertInvalid282(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.74.wasm',
            text: 'type mismatch',
            line: 1290,
        );
    }

    public function testAssertInvalid283(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.75.wasm',
            text: 'type mismatch',
            line: 1299,
        );
    }

    public function testAssertInvalid284(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.76.wasm',
            text: 'type mismatch',
            line: 1308,
        );
    }

    public function testAssertInvalid285(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.77.wasm',
            text: 'type mismatch',
            line: 1317,
        );
    }

    public function testAssertInvalid286(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.78.wasm',
            text: 'type mismatch',
            line: 1326,
        );
    }

    public function testAssertInvalid287(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.79.wasm',
            text: 'type mismatch',
            line: 1335,
        );
    }

    public function testAssertInvalid288(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.80.wasm',
            text: 'type mismatch',
            line: 1344,
        );
    }

    public function testAssertInvalid289(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.81.wasm',
            text: 'type mismatch',
            line: 1353,
        );
    }

    public function testAssertInvalid290(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.82.wasm',
            text: 'type mismatch',
            line: 1362,
        );
    }

    public function testAssertInvalid291(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.83.wasm',
            text: 'type mismatch',
            line: 1371,
        );
    }

    public function testAssertInvalid292(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.84.wasm',
            text: 'type mismatch',
            line: 1380,
        );
    }

    public function testAssertInvalid293(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.85.wasm',
            text: 'type mismatch',
            line: 1389,
        );
    }

    public function testAssertInvalid294(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.86.wasm',
            text: 'type mismatch',
            line: 1398,
        );
    }

    public function testAssertInvalid295(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.87.wasm',
            text: 'type mismatch',
            line: 1407,
        );
    }

    public function testAssertInvalid296(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.88.wasm',
            text: 'type mismatch',
            line: 1416,
        );
    }

    public function testAssertInvalid297(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.89.wasm',
            text: 'type mismatch',
            line: 1425,
        );
    }

    public function testAssertInvalid298(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.90.wasm',
            text: 'type mismatch',
            line: 1434,
        );
    }

    public function testAssertInvalid299(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.91.wasm',
            text: 'type mismatch',
            line: 1443,
        );
    }

    public function testAssertInvalid300(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.92.wasm',
            text: 'type mismatch',
            line: 1452,
        );
    }

    public function testAssertInvalid301(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.93.wasm',
            text: 'type mismatch',
            line: 1461,
        );
    }

    public function testAssertInvalid302(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.94.wasm',
            text: 'type mismatch',
            line: 1470,
        );
    }

    public function testModule303(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.95.wasm',
            name: null,
            line: 1478,
        );
    }

    public function testAssertTrap304(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '24'], ['type' => 'i32', 'value' => '16']]],
            text: 'out of bounds table access',
            line: 1506,
        );
    }

    public function testAssertTrap305(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1507,
        );
    }

    public function testAssertTrap306(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1508,
        );
    }

    public function testAssertTrap307(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 1509,
        );
    }

    public function testAssertTrap308(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '3']]],
            text: 'uninitialized element',
            line: 1510,
        );
    }

    public function testAssertTrap309(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '4']]],
            text: 'uninitialized element',
            line: 1511,
        );
    }

    public function testAssertTrap310(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '5']]],
            text: 'uninitialized element',
            line: 1512,
        );
    }

    public function testAssertTrap311(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 1513,
        );
    }

    public function testAssertTrap312(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1514,
        );
    }

    public function testAssertTrap313(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1515,
        );
    }

    public function testAssertTrap314(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1516,
        );
    }

    public function testAssertTrap315(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1517,
        );
    }

    public function testAssertTrap316(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 1518,
        );
    }

    public function testAssertTrap317(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '12']]],
            text: 'uninitialized element',
            line: 1519,
        );
    }

    public function testAssertTrap318(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 1520,
        );
    }

    public function testAssertTrap319(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '14']]],
            text: 'uninitialized element',
            line: 1521,
        );
    }

    public function testAssertTrap320(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 1522,
        );
    }

    public function testAssertTrap321(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 1523,
        );
    }

    public function testAssertTrap322(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1524,
        );
    }

    public function testAssertTrap323(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1525,
        );
    }

    public function testAssertTrap324(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1526,
        );
    }

    public function testAssertTrap325(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1527,
        );
    }

    public function testAssertTrap326(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1528,
        );
    }

    public function testAssertTrap327(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1529,
        );
    }

    public function testAssertTrap328(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1530,
        );
    }

    public function testAssertTrap329(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1531,
        );
    }

    public function testAssertTrap330(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 1532,
        );
    }

    public function testAssertTrap331(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 1533,
        );
    }

    public function testAssertTrap332(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1534,
        );
    }

    public function testAssertTrap333(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1535,
        );
    }

    public function testAssertTrap334(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1536,
        );
    }

    public function testAssertTrap335(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '30']]],
            text: 'uninitialized element',
            line: 1537,
        );
    }

    public function testAssertTrap336(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '31']]],
            text: 'uninitialized element',
            line: 1538,
        );
    }

    public function testModule337(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.96.wasm',
            name: null,
            line: 1540,
        );
    }

    public function testAssertTrap338(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '25'], ['type' => 'i32', 'value' => '16']]],
            text: 'out of bounds table access',
            line: 1568,
        );
    }

    public function testAssertTrap339(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1569,
        );
    }

    public function testAssertTrap340(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1570,
        );
    }

    public function testAssertTrap341(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 1571,
        );
    }

    public function testAssertTrap342(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '3']]],
            text: 'uninitialized element',
            line: 1572,
        );
    }

    public function testAssertTrap343(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '4']]],
            text: 'uninitialized element',
            line: 1573,
        );
    }

    public function testAssertTrap344(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '5']]],
            text: 'uninitialized element',
            line: 1574,
        );
    }

    public function testAssertTrap345(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 1575,
        );
    }

    public function testAssertTrap346(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1576,
        );
    }

    public function testAssertTrap347(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1577,
        );
    }

    public function testAssertTrap348(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1578,
        );
    }

    public function testAssertTrap349(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1579,
        );
    }

    public function testAssertTrap350(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 1580,
        );
    }

    public function testAssertTrap351(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '12']]],
            text: 'uninitialized element',
            line: 1581,
        );
    }

    public function testAssertTrap352(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 1582,
        );
    }

    public function testAssertTrap353(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '14']]],
            text: 'uninitialized element',
            line: 1583,
        );
    }

    public function testAssertTrap354(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 1584,
        );
    }

    public function testAssertTrap355(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 1585,
        );
    }

    public function testAssertTrap356(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1586,
        );
    }

    public function testAssertTrap357(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1587,
        );
    }

    public function testAssertTrap358(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1588,
        );
    }

    public function testAssertTrap359(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1589,
        );
    }

    public function testAssertTrap360(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1590,
        );
    }

    public function testAssertTrap361(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1591,
        );
    }

    public function testAssertTrap362(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1592,
        );
    }

    public function testAssertTrap363(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1593,
        );
    }

    public function testAssertTrap364(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 1594,
        );
    }

    public function testAssertTrap365(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 1595,
        );
    }

    public function testAssertTrap366(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1596,
        );
    }

    public function testAssertTrap367(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1597,
        );
    }

    public function testAssertTrap368(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1598,
        );
    }

    public function testAssertTrap369(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '30']]],
            text: 'uninitialized element',
            line: 1599,
        );
    }

    public function testAssertTrap370(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '31']]],
            text: 'uninitialized element',
            line: 1600,
        );
    }

    public function testModule371(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.97.wasm',
            name: null,
            line: 1602,
        );
    }

    public function testAssertTrap372(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '96'], ['type' => 'i32', 'value' => '32']]],
            text: 'out of bounds table access',
            line: 1630,
        );
    }

    public function testAssertTrap373(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1631,
        );
    }

    public function testAssertTrap374(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1632,
        );
    }

    public function testAssertTrap375(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 1633,
        );
    }

    public function testAssertTrap376(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '3']]],
            text: 'uninitialized element',
            line: 1634,
        );
    }

    public function testAssertTrap377(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '4']]],
            text: 'uninitialized element',
            line: 1635,
        );
    }

    public function testAssertTrap378(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '5']]],
            text: 'uninitialized element',
            line: 1636,
        );
    }

    public function testAssertTrap379(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 1637,
        );
    }

    public function testAssertTrap380(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1638,
        );
    }

    public function testAssertTrap381(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1639,
        );
    }

    public function testAssertTrap382(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1640,
        );
    }

    public function testAssertTrap383(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1641,
        );
    }

    public function testAssertTrap384(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 1642,
        );
    }

    public function testAssertTrap385(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '12']]],
            text: 'uninitialized element',
            line: 1643,
        );
    }

    public function testAssertTrap386(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 1644,
        );
    }

    public function testAssertTrap387(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '14']]],
            text: 'uninitialized element',
            line: 1645,
        );
    }

    public function testAssertTrap388(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 1646,
        );
    }

    public function testAssertTrap389(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 1647,
        );
    }

    public function testAssertTrap390(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1648,
        );
    }

    public function testAssertTrap391(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1649,
        );
    }

    public function testAssertTrap392(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1650,
        );
    }

    public function testAssertTrap393(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1651,
        );
    }

    public function testAssertTrap394(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1652,
        );
    }

    public function testAssertTrap395(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1653,
        );
    }

    public function testAssertTrap396(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1654,
        );
    }

    public function testAssertTrap397(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1655,
        );
    }

    public function testAssertTrap398(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 1656,
        );
    }

    public function testAssertTrap399(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 1657,
        );
    }

    public function testAssertTrap400(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1658,
        );
    }

    public function testAssertTrap401(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1659,
        );
    }

    public function testAssertTrap402(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1660,
        );
    }

    public function testAssertTrap403(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '30']]],
            text: 'uninitialized element',
            line: 1661,
        );
    }

    public function testAssertTrap404(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '31']]],
            text: 'uninitialized element',
            line: 1662,
        );
    }

    public function testAssertTrap405(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '32']]],
            text: 'uninitialized element',
            line: 1663,
        );
    }

    public function testAssertTrap406(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '33']]],
            text: 'uninitialized element',
            line: 1664,
        );
    }

    public function testAssertTrap407(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '34']]],
            text: 'uninitialized element',
            line: 1665,
        );
    }

    public function testAssertTrap408(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '35']]],
            text: 'uninitialized element',
            line: 1666,
        );
    }

    public function testAssertTrap409(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '36']]],
            text: 'uninitialized element',
            line: 1667,
        );
    }

    public function testAssertTrap410(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '37']]],
            text: 'uninitialized element',
            line: 1668,
        );
    }

    public function testAssertTrap411(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '38']]],
            text: 'uninitialized element',
            line: 1669,
        );
    }

    public function testAssertTrap412(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '39']]],
            text: 'uninitialized element',
            line: 1670,
        );
    }

    public function testAssertTrap413(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '40']]],
            text: 'uninitialized element',
            line: 1671,
        );
    }

    public function testAssertTrap414(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '41']]],
            text: 'uninitialized element',
            line: 1672,
        );
    }

    public function testAssertTrap415(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '42']]],
            text: 'uninitialized element',
            line: 1673,
        );
    }

    public function testAssertTrap416(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '43']]],
            text: 'uninitialized element',
            line: 1674,
        );
    }

    public function testAssertTrap417(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '44']]],
            text: 'uninitialized element',
            line: 1675,
        );
    }

    public function testAssertTrap418(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '45']]],
            text: 'uninitialized element',
            line: 1676,
        );
    }

    public function testAssertTrap419(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '46']]],
            text: 'uninitialized element',
            line: 1677,
        );
    }

    public function testAssertTrap420(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '47']]],
            text: 'uninitialized element',
            line: 1678,
        );
    }

    public function testAssertTrap421(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '48']]],
            text: 'uninitialized element',
            line: 1679,
        );
    }

    public function testAssertTrap422(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '49']]],
            text: 'uninitialized element',
            line: 1680,
        );
    }

    public function testAssertTrap423(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '50']]],
            text: 'uninitialized element',
            line: 1681,
        );
    }

    public function testAssertTrap424(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '51']]],
            text: 'uninitialized element',
            line: 1682,
        );
    }

    public function testAssertTrap425(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '52']]],
            text: 'uninitialized element',
            line: 1683,
        );
    }

    public function testAssertTrap426(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '53']]],
            text: 'uninitialized element',
            line: 1684,
        );
    }

    public function testAssertTrap427(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '54']]],
            text: 'uninitialized element',
            line: 1685,
        );
    }

    public function testAssertTrap428(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '55']]],
            text: 'uninitialized element',
            line: 1686,
        );
    }

    public function testAssertTrap429(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '56']]],
            text: 'uninitialized element',
            line: 1687,
        );
    }

    public function testAssertTrap430(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '57']]],
            text: 'uninitialized element',
            line: 1688,
        );
    }

    public function testAssertTrap431(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '58']]],
            text: 'uninitialized element',
            line: 1689,
        );
    }

    public function testAssertTrap432(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '59']]],
            text: 'uninitialized element',
            line: 1690,
        );
    }

    public function testAssertTrap433(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '60']]],
            text: 'uninitialized element',
            line: 1691,
        );
    }

    public function testAssertTrap434(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '61']]],
            text: 'uninitialized element',
            line: 1692,
        );
    }

    public function testAssertTrap435(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '62']]],
            text: 'uninitialized element',
            line: 1693,
        );
    }

    public function testAssertTrap436(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '63']]],
            text: 'uninitialized element',
            line: 1694,
        );
    }

    public function testAssertTrap437(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '64']]],
            text: 'uninitialized element',
            line: 1695,
        );
    }

    public function testAssertTrap438(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '65']]],
            text: 'uninitialized element',
            line: 1696,
        );
    }

    public function testAssertTrap439(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '66']]],
            text: 'uninitialized element',
            line: 1697,
        );
    }

    public function testAssertTrap440(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '67']]],
            text: 'uninitialized element',
            line: 1698,
        );
    }

    public function testAssertTrap441(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '68']]],
            text: 'uninitialized element',
            line: 1699,
        );
    }

    public function testAssertTrap442(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '69']]],
            text: 'uninitialized element',
            line: 1700,
        );
    }

    public function testAssertTrap443(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '70']]],
            text: 'uninitialized element',
            line: 1701,
        );
    }

    public function testAssertTrap444(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '71']]],
            text: 'uninitialized element',
            line: 1702,
        );
    }

    public function testAssertTrap445(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '72']]],
            text: 'uninitialized element',
            line: 1703,
        );
    }

    public function testAssertTrap446(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '73']]],
            text: 'uninitialized element',
            line: 1704,
        );
    }

    public function testAssertTrap447(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '74']]],
            text: 'uninitialized element',
            line: 1705,
        );
    }

    public function testAssertTrap448(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '75']]],
            text: 'uninitialized element',
            line: 1706,
        );
    }

    public function testAssertTrap449(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '76']]],
            text: 'uninitialized element',
            line: 1707,
        );
    }

    public function testAssertTrap450(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '77']]],
            text: 'uninitialized element',
            line: 1708,
        );
    }

    public function testAssertTrap451(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '78']]],
            text: 'uninitialized element',
            line: 1709,
        );
    }

    public function testAssertTrap452(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '79']]],
            text: 'uninitialized element',
            line: 1710,
        );
    }

    public function testAssertTrap453(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '80']]],
            text: 'uninitialized element',
            line: 1711,
        );
    }

    public function testAssertTrap454(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '81']]],
            text: 'uninitialized element',
            line: 1712,
        );
    }

    public function testAssertTrap455(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '82']]],
            text: 'uninitialized element',
            line: 1713,
        );
    }

    public function testAssertTrap456(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '83']]],
            text: 'uninitialized element',
            line: 1714,
        );
    }

    public function testAssertTrap457(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '84']]],
            text: 'uninitialized element',
            line: 1715,
        );
    }

    public function testAssertTrap458(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '85']]],
            text: 'uninitialized element',
            line: 1716,
        );
    }

    public function testAssertTrap459(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '86']]],
            text: 'uninitialized element',
            line: 1717,
        );
    }

    public function testAssertTrap460(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '87']]],
            text: 'uninitialized element',
            line: 1718,
        );
    }

    public function testAssertTrap461(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '88']]],
            text: 'uninitialized element',
            line: 1719,
        );
    }

    public function testAssertTrap462(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '89']]],
            text: 'uninitialized element',
            line: 1720,
        );
    }

    public function testAssertTrap463(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '90']]],
            text: 'uninitialized element',
            line: 1721,
        );
    }

    public function testAssertTrap464(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '91']]],
            text: 'uninitialized element',
            line: 1722,
        );
    }

    public function testAssertTrap465(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '92']]],
            text: 'uninitialized element',
            line: 1723,
        );
    }

    public function testAssertTrap466(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '93']]],
            text: 'uninitialized element',
            line: 1724,
        );
    }

    public function testAssertTrap467(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '94']]],
            text: 'uninitialized element',
            line: 1725,
        );
    }

    public function testAssertTrap468(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '95']]],
            text: 'uninitialized element',
            line: 1726,
        );
    }

    public function testAssertTrap469(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '96']]],
            text: 'uninitialized element',
            line: 1727,
        );
    }

    public function testAssertTrap470(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '97']]],
            text: 'uninitialized element',
            line: 1728,
        );
    }

    public function testAssertTrap471(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '98']]],
            text: 'uninitialized element',
            line: 1729,
        );
    }

    public function testAssertTrap472(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '99']]],
            text: 'uninitialized element',
            line: 1730,
        );
    }

    public function testAssertTrap473(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '100']]],
            text: 'uninitialized element',
            line: 1731,
        );
    }

    public function testAssertTrap474(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '101']]],
            text: 'uninitialized element',
            line: 1732,
        );
    }

    public function testAssertTrap475(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '102']]],
            text: 'uninitialized element',
            line: 1733,
        );
    }

    public function testAssertTrap476(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '103']]],
            text: 'uninitialized element',
            line: 1734,
        );
    }

    public function testAssertTrap477(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '104']]],
            text: 'uninitialized element',
            line: 1735,
        );
    }

    public function testAssertTrap478(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '105']]],
            text: 'uninitialized element',
            line: 1736,
        );
    }

    public function testAssertTrap479(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '106']]],
            text: 'uninitialized element',
            line: 1737,
        );
    }

    public function testAssertTrap480(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '107']]],
            text: 'uninitialized element',
            line: 1738,
        );
    }

    public function testAssertTrap481(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '108']]],
            text: 'uninitialized element',
            line: 1739,
        );
    }

    public function testAssertTrap482(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '109']]],
            text: 'uninitialized element',
            line: 1740,
        );
    }

    public function testAssertTrap483(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '110']]],
            text: 'uninitialized element',
            line: 1741,
        );
    }

    public function testAssertTrap484(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '111']]],
            text: 'uninitialized element',
            line: 1742,
        );
    }

    public function testAssertTrap485(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '112']]],
            text: 'uninitialized element',
            line: 1743,
        );
    }

    public function testAssertTrap486(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '113']]],
            text: 'uninitialized element',
            line: 1744,
        );
    }

    public function testAssertTrap487(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '114']]],
            text: 'uninitialized element',
            line: 1745,
        );
    }

    public function testAssertTrap488(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '115']]],
            text: 'uninitialized element',
            line: 1746,
        );
    }

    public function testAssertTrap489(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '116']]],
            text: 'uninitialized element',
            line: 1747,
        );
    }

    public function testAssertTrap490(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '117']]],
            text: 'uninitialized element',
            line: 1748,
        );
    }

    public function testAssertTrap491(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '118']]],
            text: 'uninitialized element',
            line: 1749,
        );
    }

    public function testAssertTrap492(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '119']]],
            text: 'uninitialized element',
            line: 1750,
        );
    }

    public function testAssertTrap493(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '120']]],
            text: 'uninitialized element',
            line: 1751,
        );
    }

    public function testAssertTrap494(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '121']]],
            text: 'uninitialized element',
            line: 1752,
        );
    }

    public function testAssertTrap495(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '122']]],
            text: 'uninitialized element',
            line: 1753,
        );
    }

    public function testAssertTrap496(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '123']]],
            text: 'uninitialized element',
            line: 1754,
        );
    }

    public function testAssertTrap497(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '124']]],
            text: 'uninitialized element',
            line: 1755,
        );
    }

    public function testAssertTrap498(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '125']]],
            text: 'uninitialized element',
            line: 1756,
        );
    }

    public function testAssertTrap499(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '126']]],
            text: 'uninitialized element',
            line: 1757,
        );
    }

    public function testAssertTrap500(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '127']]],
            text: 'uninitialized element',
            line: 1758,
        );
    }

    public function testAssertTrap501(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '128']]],
            text: 'uninitialized element',
            line: 1759,
        );
    }

    public function testAssertTrap502(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '129']]],
            text: 'uninitialized element',
            line: 1760,
        );
    }

    public function testAssertTrap503(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '130']]],
            text: 'uninitialized element',
            line: 1761,
        );
    }

    public function testAssertTrap504(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '131']]],
            text: 'uninitialized element',
            line: 1762,
        );
    }

    public function testAssertTrap505(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '132']]],
            text: 'uninitialized element',
            line: 1763,
        );
    }

    public function testAssertTrap506(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '133']]],
            text: 'uninitialized element',
            line: 1764,
        );
    }

    public function testAssertTrap507(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '134']]],
            text: 'uninitialized element',
            line: 1765,
        );
    }

    public function testAssertTrap508(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '135']]],
            text: 'uninitialized element',
            line: 1766,
        );
    }

    public function testAssertTrap509(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '136']]],
            text: 'uninitialized element',
            line: 1767,
        );
    }

    public function testAssertTrap510(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '137']]],
            text: 'uninitialized element',
            line: 1768,
        );
    }

    public function testAssertTrap511(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '138']]],
            text: 'uninitialized element',
            line: 1769,
        );
    }

    public function testAssertTrap512(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '139']]],
            text: 'uninitialized element',
            line: 1770,
        );
    }

    public function testAssertTrap513(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '140']]],
            text: 'uninitialized element',
            line: 1771,
        );
    }

    public function testAssertTrap514(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '141']]],
            text: 'uninitialized element',
            line: 1772,
        );
    }

    public function testAssertTrap515(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '142']]],
            text: 'uninitialized element',
            line: 1773,
        );
    }

    public function testAssertTrap516(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '143']]],
            text: 'uninitialized element',
            line: 1774,
        );
    }

    public function testAssertTrap517(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '144']]],
            text: 'uninitialized element',
            line: 1775,
        );
    }

    public function testAssertTrap518(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '145']]],
            text: 'uninitialized element',
            line: 1776,
        );
    }

    public function testAssertTrap519(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '146']]],
            text: 'uninitialized element',
            line: 1777,
        );
    }

    public function testAssertTrap520(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '147']]],
            text: 'uninitialized element',
            line: 1778,
        );
    }

    public function testAssertTrap521(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '148']]],
            text: 'uninitialized element',
            line: 1779,
        );
    }

    public function testAssertTrap522(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '149']]],
            text: 'uninitialized element',
            line: 1780,
        );
    }

    public function testAssertTrap523(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '150']]],
            text: 'uninitialized element',
            line: 1781,
        );
    }

    public function testAssertTrap524(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '151']]],
            text: 'uninitialized element',
            line: 1782,
        );
    }

    public function testAssertTrap525(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '152']]],
            text: 'uninitialized element',
            line: 1783,
        );
    }

    public function testAssertTrap526(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '153']]],
            text: 'uninitialized element',
            line: 1784,
        );
    }

    public function testAssertTrap527(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '154']]],
            text: 'uninitialized element',
            line: 1785,
        );
    }

    public function testAssertTrap528(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '155']]],
            text: 'uninitialized element',
            line: 1786,
        );
    }

    public function testAssertTrap529(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '156']]],
            text: 'uninitialized element',
            line: 1787,
        );
    }

    public function testAssertTrap530(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '157']]],
            text: 'uninitialized element',
            line: 1788,
        );
    }

    public function testAssertTrap531(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '158']]],
            text: 'uninitialized element',
            line: 1789,
        );
    }

    public function testAssertTrap532(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '159']]],
            text: 'uninitialized element',
            line: 1790,
        );
    }

    public function testModule533(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.98.wasm',
            name: null,
            line: 1792,
        );
    }

    public function testAssertTrap534(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '97'], ['type' => 'i32', 'value' => '31']]],
            text: 'out of bounds table access',
            line: 1820,
        );
    }

    public function testAssertTrap535(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1821,
        );
    }

    public function testAssertTrap536(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1822,
        );
    }

    public function testAssertTrap537(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 1823,
        );
    }

    public function testAssertTrap538(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '3']]],
            text: 'uninitialized element',
            line: 1824,
        );
    }

    public function testAssertTrap539(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '4']]],
            text: 'uninitialized element',
            line: 1825,
        );
    }

    public function testAssertTrap540(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '5']]],
            text: 'uninitialized element',
            line: 1826,
        );
    }

    public function testAssertTrap541(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 1827,
        );
    }

    public function testAssertTrap542(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1828,
        );
    }

    public function testAssertTrap543(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1829,
        );
    }

    public function testAssertTrap544(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1830,
        );
    }

    public function testAssertTrap545(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1831,
        );
    }

    public function testAssertTrap546(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 1832,
        );
    }

    public function testAssertTrap547(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '12']]],
            text: 'uninitialized element',
            line: 1833,
        );
    }

    public function testAssertTrap548(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 1834,
        );
    }

    public function testAssertTrap549(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '14']]],
            text: 'uninitialized element',
            line: 1835,
        );
    }

    public function testAssertTrap550(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 1836,
        );
    }

    public function testAssertTrap551(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 1837,
        );
    }

    public function testAssertTrap552(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1838,
        );
    }

    public function testAssertTrap553(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1839,
        );
    }

    public function testAssertTrap554(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1840,
        );
    }

    public function testAssertTrap555(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1841,
        );
    }

    public function testAssertTrap556(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1842,
        );
    }

    public function testAssertTrap557(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1843,
        );
    }

    public function testAssertTrap558(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1844,
        );
    }

    public function testAssertTrap559(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1845,
        );
    }

    public function testAssertTrap560(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 1846,
        );
    }

    public function testAssertTrap561(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 1847,
        );
    }

    public function testAssertTrap562(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1848,
        );
    }

    public function testAssertTrap563(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1849,
        );
    }

    public function testAssertTrap564(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1850,
        );
    }

    public function testAssertTrap565(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '30']]],
            text: 'uninitialized element',
            line: 1851,
        );
    }

    public function testAssertTrap566(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '31']]],
            text: 'uninitialized element',
            line: 1852,
        );
    }

    public function testAssertTrap567(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '32']]],
            text: 'uninitialized element',
            line: 1853,
        );
    }

    public function testAssertTrap568(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '33']]],
            text: 'uninitialized element',
            line: 1854,
        );
    }

    public function testAssertTrap569(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '34']]],
            text: 'uninitialized element',
            line: 1855,
        );
    }

    public function testAssertTrap570(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '35']]],
            text: 'uninitialized element',
            line: 1856,
        );
    }

    public function testAssertTrap571(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '36']]],
            text: 'uninitialized element',
            line: 1857,
        );
    }

    public function testAssertTrap572(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '37']]],
            text: 'uninitialized element',
            line: 1858,
        );
    }

    public function testAssertTrap573(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '38']]],
            text: 'uninitialized element',
            line: 1859,
        );
    }

    public function testAssertTrap574(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '39']]],
            text: 'uninitialized element',
            line: 1860,
        );
    }

    public function testAssertTrap575(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '40']]],
            text: 'uninitialized element',
            line: 1861,
        );
    }

    public function testAssertTrap576(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '41']]],
            text: 'uninitialized element',
            line: 1862,
        );
    }

    public function testAssertTrap577(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '42']]],
            text: 'uninitialized element',
            line: 1863,
        );
    }

    public function testAssertTrap578(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '43']]],
            text: 'uninitialized element',
            line: 1864,
        );
    }

    public function testAssertTrap579(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '44']]],
            text: 'uninitialized element',
            line: 1865,
        );
    }

    public function testAssertTrap580(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '45']]],
            text: 'uninitialized element',
            line: 1866,
        );
    }

    public function testAssertTrap581(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '46']]],
            text: 'uninitialized element',
            line: 1867,
        );
    }

    public function testAssertTrap582(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '47']]],
            text: 'uninitialized element',
            line: 1868,
        );
    }

    public function testAssertTrap583(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '48']]],
            text: 'uninitialized element',
            line: 1869,
        );
    }

    public function testAssertTrap584(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '49']]],
            text: 'uninitialized element',
            line: 1870,
        );
    }

    public function testAssertTrap585(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '50']]],
            text: 'uninitialized element',
            line: 1871,
        );
    }

    public function testAssertTrap586(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '51']]],
            text: 'uninitialized element',
            line: 1872,
        );
    }

    public function testAssertTrap587(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '52']]],
            text: 'uninitialized element',
            line: 1873,
        );
    }

    public function testAssertTrap588(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '53']]],
            text: 'uninitialized element',
            line: 1874,
        );
    }

    public function testAssertTrap589(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '54']]],
            text: 'uninitialized element',
            line: 1875,
        );
    }

    public function testAssertTrap590(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '55']]],
            text: 'uninitialized element',
            line: 1876,
        );
    }

    public function testAssertTrap591(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '56']]],
            text: 'uninitialized element',
            line: 1877,
        );
    }

    public function testAssertTrap592(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '57']]],
            text: 'uninitialized element',
            line: 1878,
        );
    }

    public function testAssertTrap593(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '58']]],
            text: 'uninitialized element',
            line: 1879,
        );
    }

    public function testAssertTrap594(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '59']]],
            text: 'uninitialized element',
            line: 1880,
        );
    }

    public function testAssertTrap595(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '60']]],
            text: 'uninitialized element',
            line: 1881,
        );
    }

    public function testAssertTrap596(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '61']]],
            text: 'uninitialized element',
            line: 1882,
        );
    }

    public function testAssertTrap597(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '62']]],
            text: 'uninitialized element',
            line: 1883,
        );
    }

    public function testAssertTrap598(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '63']]],
            text: 'uninitialized element',
            line: 1884,
        );
    }

    public function testAssertTrap599(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '64']]],
            text: 'uninitialized element',
            line: 1885,
        );
    }

    public function testAssertTrap600(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '65']]],
            text: 'uninitialized element',
            line: 1886,
        );
    }

    public function testAssertTrap601(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '66']]],
            text: 'uninitialized element',
            line: 1887,
        );
    }

    public function testAssertTrap602(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '67']]],
            text: 'uninitialized element',
            line: 1888,
        );
    }

    public function testAssertTrap603(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '68']]],
            text: 'uninitialized element',
            line: 1889,
        );
    }

    public function testAssertTrap604(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '69']]],
            text: 'uninitialized element',
            line: 1890,
        );
    }

    public function testAssertTrap605(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '70']]],
            text: 'uninitialized element',
            line: 1891,
        );
    }

    public function testAssertTrap606(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '71']]],
            text: 'uninitialized element',
            line: 1892,
        );
    }

    public function testAssertTrap607(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '72']]],
            text: 'uninitialized element',
            line: 1893,
        );
    }

    public function testAssertTrap608(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '73']]],
            text: 'uninitialized element',
            line: 1894,
        );
    }

    public function testAssertTrap609(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '74']]],
            text: 'uninitialized element',
            line: 1895,
        );
    }

    public function testAssertTrap610(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '75']]],
            text: 'uninitialized element',
            line: 1896,
        );
    }

    public function testAssertTrap611(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '76']]],
            text: 'uninitialized element',
            line: 1897,
        );
    }

    public function testAssertTrap612(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '77']]],
            text: 'uninitialized element',
            line: 1898,
        );
    }

    public function testAssertTrap613(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '78']]],
            text: 'uninitialized element',
            line: 1899,
        );
    }

    public function testAssertTrap614(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '79']]],
            text: 'uninitialized element',
            line: 1900,
        );
    }

    public function testAssertTrap615(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '80']]],
            text: 'uninitialized element',
            line: 1901,
        );
    }

    public function testAssertTrap616(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '81']]],
            text: 'uninitialized element',
            line: 1902,
        );
    }

    public function testAssertTrap617(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '82']]],
            text: 'uninitialized element',
            line: 1903,
        );
    }

    public function testAssertTrap618(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '83']]],
            text: 'uninitialized element',
            line: 1904,
        );
    }

    public function testAssertTrap619(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '84']]],
            text: 'uninitialized element',
            line: 1905,
        );
    }

    public function testAssertTrap620(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '85']]],
            text: 'uninitialized element',
            line: 1906,
        );
    }

    public function testAssertTrap621(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '86']]],
            text: 'uninitialized element',
            line: 1907,
        );
    }

    public function testAssertTrap622(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '87']]],
            text: 'uninitialized element',
            line: 1908,
        );
    }

    public function testAssertTrap623(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '88']]],
            text: 'uninitialized element',
            line: 1909,
        );
    }

    public function testAssertTrap624(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '89']]],
            text: 'uninitialized element',
            line: 1910,
        );
    }

    public function testAssertTrap625(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '90']]],
            text: 'uninitialized element',
            line: 1911,
        );
    }

    public function testAssertTrap626(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '91']]],
            text: 'uninitialized element',
            line: 1912,
        );
    }

    public function testAssertTrap627(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '92']]],
            text: 'uninitialized element',
            line: 1913,
        );
    }

    public function testAssertTrap628(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '93']]],
            text: 'uninitialized element',
            line: 1914,
        );
    }

    public function testAssertTrap629(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '94']]],
            text: 'uninitialized element',
            line: 1915,
        );
    }

    public function testAssertTrap630(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '95']]],
            text: 'uninitialized element',
            line: 1916,
        );
    }

    public function testAssertTrap631(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '96']]],
            text: 'uninitialized element',
            line: 1917,
        );
    }

    public function testAssertTrap632(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '97']]],
            text: 'uninitialized element',
            line: 1918,
        );
    }

    public function testAssertTrap633(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '98']]],
            text: 'uninitialized element',
            line: 1919,
        );
    }

    public function testAssertTrap634(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '99']]],
            text: 'uninitialized element',
            line: 1920,
        );
    }

    public function testAssertTrap635(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '100']]],
            text: 'uninitialized element',
            line: 1921,
        );
    }

    public function testAssertTrap636(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '101']]],
            text: 'uninitialized element',
            line: 1922,
        );
    }

    public function testAssertTrap637(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '102']]],
            text: 'uninitialized element',
            line: 1923,
        );
    }

    public function testAssertTrap638(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '103']]],
            text: 'uninitialized element',
            line: 1924,
        );
    }

    public function testAssertTrap639(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '104']]],
            text: 'uninitialized element',
            line: 1925,
        );
    }

    public function testAssertTrap640(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '105']]],
            text: 'uninitialized element',
            line: 1926,
        );
    }

    public function testAssertTrap641(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '106']]],
            text: 'uninitialized element',
            line: 1927,
        );
    }

    public function testAssertTrap642(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '107']]],
            text: 'uninitialized element',
            line: 1928,
        );
    }

    public function testAssertTrap643(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '108']]],
            text: 'uninitialized element',
            line: 1929,
        );
    }

    public function testAssertTrap644(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '109']]],
            text: 'uninitialized element',
            line: 1930,
        );
    }

    public function testAssertTrap645(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '110']]],
            text: 'uninitialized element',
            line: 1931,
        );
    }

    public function testAssertTrap646(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '111']]],
            text: 'uninitialized element',
            line: 1932,
        );
    }

    public function testAssertTrap647(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '112']]],
            text: 'uninitialized element',
            line: 1933,
        );
    }

    public function testAssertTrap648(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '113']]],
            text: 'uninitialized element',
            line: 1934,
        );
    }

    public function testAssertTrap649(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '114']]],
            text: 'uninitialized element',
            line: 1935,
        );
    }

    public function testAssertTrap650(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '115']]],
            text: 'uninitialized element',
            line: 1936,
        );
    }

    public function testAssertTrap651(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '116']]],
            text: 'uninitialized element',
            line: 1937,
        );
    }

    public function testAssertTrap652(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '117']]],
            text: 'uninitialized element',
            line: 1938,
        );
    }

    public function testAssertTrap653(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '118']]],
            text: 'uninitialized element',
            line: 1939,
        );
    }

    public function testAssertTrap654(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '119']]],
            text: 'uninitialized element',
            line: 1940,
        );
    }

    public function testAssertTrap655(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '120']]],
            text: 'uninitialized element',
            line: 1941,
        );
    }

    public function testAssertTrap656(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '121']]],
            text: 'uninitialized element',
            line: 1942,
        );
    }

    public function testAssertTrap657(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '122']]],
            text: 'uninitialized element',
            line: 1943,
        );
    }

    public function testAssertTrap658(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '123']]],
            text: 'uninitialized element',
            line: 1944,
        );
    }

    public function testAssertTrap659(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '124']]],
            text: 'uninitialized element',
            line: 1945,
        );
    }

    public function testAssertTrap660(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '125']]],
            text: 'uninitialized element',
            line: 1946,
        );
    }

    public function testAssertTrap661(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '126']]],
            text: 'uninitialized element',
            line: 1947,
        );
    }

    public function testAssertTrap662(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '127']]],
            text: 'uninitialized element',
            line: 1948,
        );
    }

    public function testAssertTrap663(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '128']]],
            text: 'uninitialized element',
            line: 1949,
        );
    }

    public function testAssertTrap664(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '129']]],
            text: 'uninitialized element',
            line: 1950,
        );
    }

    public function testAssertTrap665(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '130']]],
            text: 'uninitialized element',
            line: 1951,
        );
    }

    public function testAssertTrap666(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '131']]],
            text: 'uninitialized element',
            line: 1952,
        );
    }

    public function testAssertTrap667(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '132']]],
            text: 'uninitialized element',
            line: 1953,
        );
    }

    public function testAssertTrap668(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '133']]],
            text: 'uninitialized element',
            line: 1954,
        );
    }

    public function testAssertTrap669(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '134']]],
            text: 'uninitialized element',
            line: 1955,
        );
    }

    public function testAssertTrap670(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '135']]],
            text: 'uninitialized element',
            line: 1956,
        );
    }

    public function testAssertTrap671(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '136']]],
            text: 'uninitialized element',
            line: 1957,
        );
    }

    public function testAssertTrap672(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '137']]],
            text: 'uninitialized element',
            line: 1958,
        );
    }

    public function testAssertTrap673(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '138']]],
            text: 'uninitialized element',
            line: 1959,
        );
    }

    public function testAssertTrap674(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '139']]],
            text: 'uninitialized element',
            line: 1960,
        );
    }

    public function testAssertTrap675(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '140']]],
            text: 'uninitialized element',
            line: 1961,
        );
    }

    public function testAssertTrap676(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '141']]],
            text: 'uninitialized element',
            line: 1962,
        );
    }

    public function testAssertTrap677(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '142']]],
            text: 'uninitialized element',
            line: 1963,
        );
    }

    public function testAssertTrap678(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '143']]],
            text: 'uninitialized element',
            line: 1964,
        );
    }

    public function testAssertTrap679(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '144']]],
            text: 'uninitialized element',
            line: 1965,
        );
    }

    public function testAssertTrap680(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '145']]],
            text: 'uninitialized element',
            line: 1966,
        );
    }

    public function testAssertTrap681(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '146']]],
            text: 'uninitialized element',
            line: 1967,
        );
    }

    public function testAssertTrap682(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '147']]],
            text: 'uninitialized element',
            line: 1968,
        );
    }

    public function testAssertTrap683(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '148']]],
            text: 'uninitialized element',
            line: 1969,
        );
    }

    public function testAssertTrap684(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '149']]],
            text: 'uninitialized element',
            line: 1970,
        );
    }

    public function testAssertTrap685(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '150']]],
            text: 'uninitialized element',
            line: 1971,
        );
    }

    public function testAssertTrap686(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '151']]],
            text: 'uninitialized element',
            line: 1972,
        );
    }

    public function testAssertTrap687(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '152']]],
            text: 'uninitialized element',
            line: 1973,
        );
    }

    public function testAssertTrap688(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '153']]],
            text: 'uninitialized element',
            line: 1974,
        );
    }

    public function testAssertTrap689(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '154']]],
            text: 'uninitialized element',
            line: 1975,
        );
    }

    public function testAssertTrap690(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '155']]],
            text: 'uninitialized element',
            line: 1976,
        );
    }

    public function testAssertTrap691(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '156']]],
            text: 'uninitialized element',
            line: 1977,
        );
    }

    public function testAssertTrap692(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '157']]],
            text: 'uninitialized element',
            line: 1978,
        );
    }

    public function testAssertTrap693(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '158']]],
            text: 'uninitialized element',
            line: 1979,
        );
    }

    public function testAssertTrap694(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '159']]],
            text: 'uninitialized element',
            line: 1980,
        );
    }

    public function testModule695(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.99.wasm',
            name: null,
            line: 1982,
        );
    }

    public function testAssertTrap696(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '48'], ['type' => 'i32', 'value' => '4294967280']]],
            text: 'out of bounds table access',
            line: 2010,
        );
    }

    public function testAssertTrap697(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 2011,
        );
    }

    public function testAssertTrap698(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 2012,
        );
    }

    public function testAssertTrap699(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 2013,
        );
    }

    public function testAssertTrap700(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '3']]],
            text: 'uninitialized element',
            line: 2014,
        );
    }

    public function testAssertTrap701(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '4']]],
            text: 'uninitialized element',
            line: 2015,
        );
    }

    public function testAssertTrap702(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '5']]],
            text: 'uninitialized element',
            line: 2016,
        );
    }

    public function testAssertTrap703(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 2017,
        );
    }

    public function testAssertTrap704(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 2018,
        );
    }

    public function testAssertTrap705(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 2019,
        );
    }

    public function testAssertTrap706(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 2020,
        );
    }

    public function testAssertTrap707(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 2021,
        );
    }

    public function testAssertTrap708(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 2022,
        );
    }

    public function testAssertTrap709(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '12']]],
            text: 'uninitialized element',
            line: 2023,
        );
    }

    public function testAssertTrap710(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 2024,
        );
    }

    public function testAssertTrap711(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '14']]],
            text: 'uninitialized element',
            line: 2025,
        );
    }

    public function testAssertTrap712(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 2026,
        );
    }

    public function testAssertTrap713(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 2027,
        );
    }

    public function testAssertTrap714(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 2028,
        );
    }

    public function testAssertTrap715(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 2029,
        );
    }

    public function testAssertTrap716(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 2030,
        );
    }

    public function testAssertTrap717(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 2031,
        );
    }

    public function testAssertTrap718(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 2032,
        );
    }

    public function testAssertTrap719(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 2033,
        );
    }

    public function testAssertTrap720(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 2034,
        );
    }

    public function testAssertTrap721(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 2035,
        );
    }

    public function testAssertTrap722(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 2036,
        );
    }

    public function testAssertTrap723(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 2037,
        );
    }

    public function testAssertTrap724(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 2038,
        );
    }

    public function testAssertTrap725(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 2039,
        );
    }

    public function testAssertTrap726(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 2040,
        );
    }

    public function testAssertTrap727(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '30']]],
            text: 'uninitialized element',
            line: 2041,
        );
    }

    public function testAssertTrap728(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '31']]],
            text: 'uninitialized element',
            line: 2042,
        );
    }

    public function testAssertTrap729(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '32']]],
            text: 'uninitialized element',
            line: 2043,
        );
    }

    public function testAssertTrap730(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '33']]],
            text: 'uninitialized element',
            line: 2044,
        );
    }

    public function testAssertTrap731(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '34']]],
            text: 'uninitialized element',
            line: 2045,
        );
    }

    public function testAssertTrap732(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '35']]],
            text: 'uninitialized element',
            line: 2046,
        );
    }

    public function testAssertTrap733(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '36']]],
            text: 'uninitialized element',
            line: 2047,
        );
    }

    public function testAssertTrap734(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '37']]],
            text: 'uninitialized element',
            line: 2048,
        );
    }

    public function testAssertTrap735(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '38']]],
            text: 'uninitialized element',
            line: 2049,
        );
    }

    public function testAssertTrap736(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '39']]],
            text: 'uninitialized element',
            line: 2050,
        );
    }

    public function testAssertTrap737(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '40']]],
            text: 'uninitialized element',
            line: 2051,
        );
    }

    public function testAssertTrap738(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '41']]],
            text: 'uninitialized element',
            line: 2052,
        );
    }

    public function testAssertTrap739(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '42']]],
            text: 'uninitialized element',
            line: 2053,
        );
    }

    public function testAssertTrap740(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '43']]],
            text: 'uninitialized element',
            line: 2054,
        );
    }

    public function testAssertTrap741(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '44']]],
            text: 'uninitialized element',
            line: 2055,
        );
    }

    public function testAssertTrap742(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '45']]],
            text: 'uninitialized element',
            line: 2056,
        );
    }

    public function testAssertTrap743(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '46']]],
            text: 'uninitialized element',
            line: 2057,
        );
    }

    public function testAssertTrap744(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '47']]],
            text: 'uninitialized element',
            line: 2058,
        );
    }

    public function testAssertTrap745(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '48']]],
            text: 'uninitialized element',
            line: 2059,
        );
    }

    public function testAssertTrap746(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '49']]],
            text: 'uninitialized element',
            line: 2060,
        );
    }

    public function testAssertTrap747(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '50']]],
            text: 'uninitialized element',
            line: 2061,
        );
    }

    public function testAssertTrap748(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '51']]],
            text: 'uninitialized element',
            line: 2062,
        );
    }

    public function testAssertTrap749(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '52']]],
            text: 'uninitialized element',
            line: 2063,
        );
    }

    public function testAssertTrap750(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '53']]],
            text: 'uninitialized element',
            line: 2064,
        );
    }

    public function testAssertTrap751(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '54']]],
            text: 'uninitialized element',
            line: 2065,
        );
    }

    public function testAssertTrap752(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '55']]],
            text: 'uninitialized element',
            line: 2066,
        );
    }

    public function testAssertTrap753(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '56']]],
            text: 'uninitialized element',
            line: 2067,
        );
    }

    public function testAssertTrap754(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '57']]],
            text: 'uninitialized element',
            line: 2068,
        );
    }

    public function testAssertTrap755(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '58']]],
            text: 'uninitialized element',
            line: 2069,
        );
    }

    public function testAssertTrap756(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '59']]],
            text: 'uninitialized element',
            line: 2070,
        );
    }

    public function testAssertTrap757(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '60']]],
            text: 'uninitialized element',
            line: 2071,
        );
    }

    public function testAssertTrap758(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '61']]],
            text: 'uninitialized element',
            line: 2072,
        );
    }

    public function testAssertTrap759(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '62']]],
            text: 'uninitialized element',
            line: 2073,
        );
    }

    public function testAssertTrap760(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '63']]],
            text: 'uninitialized element',
            line: 2074,
        );
    }

    public function testModule761(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.100.wasm',
            name: null,
            line: 2076,
        );
    }

    public function testAssertTrap762(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '4294967292']]],
            text: 'out of bounds table access',
            line: 2104,
        );
    }

    public function testAssertTrap763(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 2105,
        );
    }

    public function testAssertTrap764(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 2106,
        );
    }

    public function testAssertTrap765(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 2107,
        );
    }

    public function testAssertTrap766(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '3']]],
            text: 'uninitialized element',
            line: 2108,
        );
    }

    public function testAssertTrap767(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '4']]],
            text: 'uninitialized element',
            line: 2109,
        );
    }

    public function testAssertTrap768(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '5']]],
            text: 'uninitialized element',
            line: 2110,
        );
    }

    public function testAssertTrap769(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 2111,
        );
    }

    public function testAssertTrap770(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 2112,
        );
    }

    public function testAssertTrap771(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 2113,
        );
    }

    public function testAssertTrap772(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 2114,
        );
    }

    public function testAssertTrap773(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 2115,
        );
    }

    public function testAssertTrap774(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 2116,
        );
    }

    public function testAssertTrap775(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '12']]],
            text: 'uninitialized element',
            line: 2117,
        );
    }

    public function testAssertTrap776(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 2118,
        );
    }

    public function testAssertTrap777(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '14']]],
            text: 'uninitialized element',
            line: 2119,
        );
    }

    public function testAssertTrap778(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 2120,
        );
    }

    public function testModule779(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.101.wasm',
            name: null,
            line: 2122,
        );
    }
}
