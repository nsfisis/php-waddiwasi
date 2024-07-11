<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
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

    #[Depends('testModule0')]
    public function testRegister1(): void
    {
        $this->runRegisterCommand(
            name: null,
            as: 'a',
            line: 13,
        );
    }

    #[Depends('testRegister1')]
    public function testModule2(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.1.wasm',
            name: null,
            line: 15,
        );
    }

    #[Depends('testModule2')]
    public function testAction3(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 41,
        );
    }

    #[Depends('testAction3')]
    public function testAssertTrap4(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 42,
        );
    }

    #[Depends('testAssertTrap4')]
    public function testAssertTrap5(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 43,
        );
    }

    #[Depends('testAssertTrap5')]
    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 44,
        );
    }

    #[Depends('testAssertReturn6')]
    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 45,
        );
    }

    #[Depends('testAssertReturn7')]
    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 46,
        );
    }

    #[Depends('testAssertReturn8')]
    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 47,
        );
    }

    #[Depends('testAssertReturn9')]
    public function testAssertTrap10(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 48,
        );
    }

    #[Depends('testAssertTrap10')]
    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '7']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 49,
        );
    }

    #[Depends('testAssertReturn11')]
    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 50,
        );
    }

    #[Depends('testAssertReturn12')]
    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '9']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 51,
        );
    }

    #[Depends('testAssertReturn13')]
    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 52,
        );
    }

    #[Depends('testAssertReturn14')]
    public function testAssertTrap15(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 53,
        );
    }

    #[Depends('testAssertTrap15')]
    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 54,
        );
    }

    #[Depends('testAssertReturn16')]
    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 55,
        );
    }

    #[Depends('testAssertReturn17')]
    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 56,
        );
    }

    #[Depends('testAssertReturn18')]
    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 57,
        );
    }

    #[Depends('testAssertReturn19')]
    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 58,
        );
    }

    #[Depends('testAssertReturn20')]
    public function testAssertTrap21(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 59,
        );
    }

    #[Depends('testAssertTrap21')]
    public function testAssertTrap22(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 60,
        );
    }

    #[Depends('testAssertTrap22')]
    public function testAssertTrap23(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 61,
        );
    }

    #[Depends('testAssertTrap23')]
    public function testAssertTrap24(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 62,
        );
    }

    #[Depends('testAssertTrap24')]
    public function testAssertTrap25(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 63,
        );
    }

    #[Depends('testAssertTrap25')]
    public function testAssertTrap26(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 64,
        );
    }

    #[Depends('testAssertTrap26')]
    public function testAssertTrap27(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 65,
        );
    }

    #[Depends('testAssertTrap27')]
    public function testAssertTrap28(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 66,
        );
    }

    #[Depends('testAssertTrap28')]
    public function testAssertTrap29(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 67,
        );
    }

    #[Depends('testAssertTrap29')]
    public function testAssertTrap30(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 68,
        );
    }

    #[Depends('testAssertTrap30')]
    public function testAssertTrap31(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 69,
        );
    }

    #[Depends('testAssertTrap31')]
    public function testAssertTrap32(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 70,
        );
    }

    #[Depends('testAssertTrap32')]
    public function testAssertTrap33(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 71,
        );
    }

    #[Depends('testAssertTrap33')]
    public function testModule34(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.2.wasm',
            name: null,
            line: 73,
        );
    }

    #[Depends('testModule34')]
    public function testAction35(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 99,
        );
    }

    #[Depends('testAction35')]
    public function testAssertTrap36(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 100,
        );
    }

    #[Depends('testAssertTrap36')]
    public function testAssertTrap37(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 101,
        );
    }

    #[Depends('testAssertTrap37')]
    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 102,
        );
    }

    #[Depends('testAssertReturn38')]
    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 103,
        );
    }

    #[Depends('testAssertReturn39')]
    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 104,
        );
    }

    #[Depends('testAssertReturn40')]
    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 105,
        );
    }

    #[Depends('testAssertReturn41')]
    public function testAssertTrap42(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 106,
        );
    }

    #[Depends('testAssertTrap42')]
    public function testAssertTrap43(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 107,
        );
    }

    #[Depends('testAssertTrap43')]
    public function testAssertTrap44(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 108,
        );
    }

    #[Depends('testAssertTrap44')]
    public function testAssertTrap45(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 109,
        );
    }

    #[Depends('testAssertTrap45')]
    public function testAssertTrap46(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 110,
        );
    }

    #[Depends('testAssertTrap46')]
    public function testAssertTrap47(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 111,
        );
    }

    #[Depends('testAssertTrap47')]
    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 112,
        );
    }

    #[Depends('testAssertReturn48')]
    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 113,
        );
    }

    #[Depends('testAssertReturn49')]
    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 114,
        );
    }

    #[Depends('testAssertReturn50')]
    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 115,
        );
    }

    #[Depends('testAssertReturn51')]
    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 116,
        );
    }

    #[Depends('testAssertReturn52')]
    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '17']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 117,
        );
    }

    #[Depends('testAssertReturn53')]
    public function testAssertTrap54(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 118,
        );
    }

    #[Depends('testAssertTrap54')]
    public function testAssertTrap55(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 119,
        );
    }

    #[Depends('testAssertTrap55')]
    public function testAssertTrap56(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 120,
        );
    }

    #[Depends('testAssertTrap56')]
    public function testAssertTrap57(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 121,
        );
    }

    #[Depends('testAssertTrap57')]
    public function testAssertTrap58(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 122,
        );
    }

    #[Depends('testAssertTrap58')]
    public function testAssertTrap59(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 123,
        );
    }

    #[Depends('testAssertTrap59')]
    public function testAssertTrap60(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 124,
        );
    }

    #[Depends('testAssertTrap60')]
    public function testAssertTrap61(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 125,
        );
    }

    #[Depends('testAssertTrap61')]
    public function testAssertTrap62(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 126,
        );
    }

    #[Depends('testAssertTrap62')]
    public function testAssertTrap63(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 127,
        );
    }

    #[Depends('testAssertTrap63')]
    public function testAssertTrap64(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 128,
        );
    }

    #[Depends('testAssertTrap64')]
    public function testAssertTrap65(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 129,
        );
    }

    #[Depends('testAssertTrap65')]
    public function testModule66(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.3.wasm',
            name: null,
            line: 131,
        );
    }

    #[Depends('testModule66')]
    public function testAction67(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 165,
        );
    }

    #[Depends('testAction67')]
    public function testAssertTrap68(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 166,
        );
    }

    #[Depends('testAssertTrap68')]
    public function testAssertTrap69(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 167,
        );
    }

    #[Depends('testAssertTrap69')]
    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 168,
        );
    }

    #[Depends('testAssertReturn70')]
    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 169,
        );
    }

    #[Depends('testAssertReturn71')]
    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 170,
        );
    }

    #[Depends('testAssertReturn72')]
    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 171,
        );
    }

    #[Depends('testAssertReturn73')]
    public function testAssertTrap74(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 172,
        );
    }

    #[Depends('testAssertTrap74')]
    public function testAssertReturn75(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '7']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 173,
        );
    }

    #[Depends('testAssertReturn75')]
    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 174,
        );
    }

    #[Depends('testAssertReturn76')]
    public function testAssertReturn77(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '9']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 175,
        );
    }

    #[Depends('testAssertReturn77')]
    public function testAssertReturn78(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 176,
        );
    }

    #[Depends('testAssertReturn78')]
    public function testAssertTrap79(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 177,
        );
    }

    #[Depends('testAssertTrap79')]
    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 178,
        );
    }

    #[Depends('testAssertReturn80')]
    public function testAssertTrap81(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 179,
        );
    }

    #[Depends('testAssertTrap81')]
    public function testAssertReturn82(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 180,
        );
    }

    #[Depends('testAssertReturn82')]
    public function testAssertReturn83(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 181,
        );
    }

    #[Depends('testAssertReturn83')]
    public function testAssertReturn84(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 182,
        );
    }

    #[Depends('testAssertReturn84')]
    public function testAssertReturn85(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '17']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 183,
        );
    }

    #[Depends('testAssertReturn85')]
    public function testAssertTrap86(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 184,
        );
    }

    #[Depends('testAssertTrap86')]
    public function testAssertReturn87(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '19']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 185,
        );
    }

    #[Depends('testAssertReturn87')]
    public function testAssertTrap88(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 186,
        );
    }

    #[Depends('testAssertTrap88')]
    public function testAssertReturn89(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '21']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 187,
        );
    }

    #[Depends('testAssertReturn89')]
    public function testAssertTrap90(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 188,
        );
    }

    #[Depends('testAssertTrap90')]
    public function testAssertReturn91(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '23']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 189,
        );
    }

    #[Depends('testAssertReturn91')]
    public function testAssertReturn92(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '24']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 190,
        );
    }

    #[Depends('testAssertReturn92')]
    public function testAssertTrap93(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 191,
        );
    }

    #[Depends('testAssertTrap93')]
    public function testAssertTrap94(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 192,
        );
    }

    #[Depends('testAssertTrap94')]
    public function testAssertTrap95(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 193,
        );
    }

    #[Depends('testAssertTrap95')]
    public function testAssertTrap96(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 194,
        );
    }

    #[Depends('testAssertTrap96')]
    public function testAssertTrap97(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 195,
        );
    }

    #[Depends('testAssertTrap97')]
    public function testModule98(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.4.wasm',
            name: null,
            line: 197,
        );
    }

    #[Depends('testModule98')]
    public function testAction99(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 223,
        );
    }

    #[Depends('testAction99')]
    public function testAssertTrap100(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 224,
        );
    }

    #[Depends('testAssertTrap100')]
    public function testAssertTrap101(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 225,
        );
    }

    #[Depends('testAssertTrap101')]
    public function testAssertReturn102(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 226,
        );
    }

    #[Depends('testAssertReturn102')]
    public function testAssertReturn103(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 227,
        );
    }

    #[Depends('testAssertReturn103')]
    public function testAssertReturn104(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 228,
        );
    }

    #[Depends('testAssertReturn104')]
    public function testAssertReturn105(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 229,
        );
    }

    #[Depends('testAssertReturn105')]
    public function testAssertTrap106(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 230,
        );
    }

    #[Depends('testAssertTrap106')]
    public function testAssertReturn107(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '7']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 231,
        );
    }

    #[Depends('testAssertReturn107')]
    public function testAssertReturn108(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 232,
        );
    }

    #[Depends('testAssertReturn108')]
    public function testAssertReturn109(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '9']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 233,
        );
    }

    #[Depends('testAssertReturn109')]
    public function testAssertReturn110(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 234,
        );
    }

    #[Depends('testAssertReturn110')]
    public function testAssertTrap111(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 235,
        );
    }

    #[Depends('testAssertTrap111')]
    public function testAssertReturn112(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 236,
        );
    }

    #[Depends('testAssertReturn112')]
    public function testAssertReturn113(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 237,
        );
    }

    #[Depends('testAssertReturn113')]
    public function testAssertReturn114(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 238,
        );
    }

    #[Depends('testAssertReturn114')]
    public function testAssertReturn115(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 239,
        );
    }

    #[Depends('testAssertReturn115')]
    public function testAssertReturn116(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 240,
        );
    }

    #[Depends('testAssertReturn116')]
    public function testAssertTrap117(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 241,
        );
    }

    #[Depends('testAssertTrap117')]
    public function testAssertTrap118(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 242,
        );
    }

    #[Depends('testAssertTrap118')]
    public function testAssertTrap119(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 243,
        );
    }

    #[Depends('testAssertTrap119')]
    public function testAssertTrap120(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 244,
        );
    }

    #[Depends('testAssertTrap120')]
    public function testAssertTrap121(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 245,
        );
    }

    #[Depends('testAssertTrap121')]
    public function testAssertTrap122(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 246,
        );
    }

    #[Depends('testAssertTrap122')]
    public function testAssertTrap123(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 247,
        );
    }

    #[Depends('testAssertTrap123')]
    public function testAssertTrap124(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 248,
        );
    }

    #[Depends('testAssertTrap124')]
    public function testAssertTrap125(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 249,
        );
    }

    #[Depends('testAssertTrap125')]
    public function testAssertTrap126(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 250,
        );
    }

    #[Depends('testAssertTrap126')]
    public function testAssertTrap127(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 251,
        );
    }

    #[Depends('testAssertTrap127')]
    public function testAssertTrap128(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 252,
        );
    }

    #[Depends('testAssertTrap128')]
    public function testAssertTrap129(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 253,
        );
    }

    #[Depends('testAssertTrap129')]
    public function testModule130(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.5.wasm',
            name: null,
            line: 255,
        );
    }

    #[Depends('testModule130')]
    public function testAction131(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 281,
        );
    }

    #[Depends('testAction131')]
    public function testAssertTrap132(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 282,
        );
    }

    #[Depends('testAssertTrap132')]
    public function testAssertTrap133(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 283,
        );
    }

    #[Depends('testAssertTrap133')]
    public function testAssertReturn134(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 284,
        );
    }

    #[Depends('testAssertReturn134')]
    public function testAssertReturn135(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 285,
        );
    }

    #[Depends('testAssertReturn135')]
    public function testAssertReturn136(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 286,
        );
    }

    #[Depends('testAssertReturn136')]
    public function testAssertReturn137(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 287,
        );
    }

    #[Depends('testAssertReturn137')]
    public function testAssertTrap138(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 288,
        );
    }

    #[Depends('testAssertTrap138')]
    public function testAssertTrap139(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 289,
        );
    }

    #[Depends('testAssertTrap139')]
    public function testAssertTrap140(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 290,
        );
    }

    #[Depends('testAssertTrap140')]
    public function testAssertTrap141(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 291,
        );
    }

    #[Depends('testAssertTrap141')]
    public function testAssertTrap142(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 292,
        );
    }

    #[Depends('testAssertTrap142')]
    public function testAssertTrap143(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 293,
        );
    }

    #[Depends('testAssertTrap143')]
    public function testAssertReturn144(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 294,
        );
    }

    #[Depends('testAssertReturn144')]
    public function testAssertReturn145(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 295,
        );
    }

    #[Depends('testAssertReturn145')]
    public function testAssertReturn146(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 296,
        );
    }

    #[Depends('testAssertReturn146')]
    public function testAssertReturn147(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 297,
        );
    }

    #[Depends('testAssertReturn147')]
    public function testAssertReturn148(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 298,
        );
    }

    #[Depends('testAssertReturn148')]
    public function testAssertReturn149(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '17']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 299,
        );
    }

    #[Depends('testAssertReturn149')]
    public function testAssertTrap150(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 300,
        );
    }

    #[Depends('testAssertTrap150')]
    public function testAssertTrap151(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 301,
        );
    }

    #[Depends('testAssertTrap151')]
    public function testAssertTrap152(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 302,
        );
    }

    #[Depends('testAssertTrap152')]
    public function testAssertTrap153(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 303,
        );
    }

    #[Depends('testAssertTrap153')]
    public function testAssertTrap154(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 304,
        );
    }

    #[Depends('testAssertTrap154')]
    public function testAssertTrap155(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 305,
        );
    }

    #[Depends('testAssertTrap155')]
    public function testAssertTrap156(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 306,
        );
    }

    #[Depends('testAssertTrap156')]
    public function testAssertTrap157(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 307,
        );
    }

    #[Depends('testAssertTrap157')]
    public function testAssertTrap158(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 308,
        );
    }

    #[Depends('testAssertTrap158')]
    public function testAssertTrap159(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 309,
        );
    }

    #[Depends('testAssertTrap159')]
    public function testAssertTrap160(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 310,
        );
    }

    #[Depends('testAssertTrap160')]
    public function testAssertTrap161(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 311,
        );
    }

    #[Depends('testAssertTrap161')]
    public function testModule162(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.6.wasm',
            name: null,
            line: 313,
        );
    }

    #[Depends('testModule162')]
    public function testAction163(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 347,
        );
    }

    #[Depends('testAction163')]
    public function testAssertTrap164(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 348,
        );
    }

    #[Depends('testAssertTrap164')]
    public function testAssertTrap165(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 349,
        );
    }

    #[Depends('testAssertTrap165')]
    public function testAssertReturn166(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 350,
        );
    }

    #[Depends('testAssertReturn166')]
    public function testAssertReturn167(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 351,
        );
    }

    #[Depends('testAssertReturn167')]
    public function testAssertReturn168(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 352,
        );
    }

    #[Depends('testAssertReturn168')]
    public function testAssertReturn169(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 353,
        );
    }

    #[Depends('testAssertReturn169')]
    public function testAssertTrap170(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 354,
        );
    }

    #[Depends('testAssertTrap170')]
    public function testAssertReturn171(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '7']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 355,
        );
    }

    #[Depends('testAssertReturn171')]
    public function testAssertReturn172(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 356,
        );
    }

    #[Depends('testAssertReturn172')]
    public function testAssertReturn173(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '9']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 357,
        );
    }

    #[Depends('testAssertReturn173')]
    public function testAssertReturn174(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 358,
        );
    }

    #[Depends('testAssertReturn174')]
    public function testAssertTrap175(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 359,
        );
    }

    #[Depends('testAssertTrap175')]
    public function testAssertReturn176(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 360,
        );
    }

    #[Depends('testAssertReturn176')]
    public function testAssertTrap177(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 361,
        );
    }

    #[Depends('testAssertTrap177')]
    public function testAssertReturn178(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 362,
        );
    }

    #[Depends('testAssertReturn178')]
    public function testAssertReturn179(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 363,
        );
    }

    #[Depends('testAssertReturn179')]
    public function testAssertReturn180(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 364,
        );
    }

    #[Depends('testAssertReturn180')]
    public function testAssertReturn181(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '17']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 365,
        );
    }

    #[Depends('testAssertReturn181')]
    public function testAssertTrap182(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 366,
        );
    }

    #[Depends('testAssertTrap182')]
    public function testAssertReturn183(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '19']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 367,
        );
    }

    #[Depends('testAssertReturn183')]
    public function testAssertTrap184(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 368,
        );
    }

    #[Depends('testAssertTrap184')]
    public function testAssertReturn185(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '21']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 369,
        );
    }

    #[Depends('testAssertReturn185')]
    public function testAssertTrap186(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 370,
        );
    }

    #[Depends('testAssertTrap186')]
    public function testAssertReturn187(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '23']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 371,
        );
    }

    #[Depends('testAssertReturn187')]
    public function testAssertReturn188(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '24']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 372,
        );
    }

    #[Depends('testAssertReturn188')]
    public function testAssertTrap189(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 373,
        );
    }

    #[Depends('testAssertTrap189')]
    public function testAssertTrap190(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 374,
        );
    }

    #[Depends('testAssertTrap190')]
    public function testAssertTrap191(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 375,
        );
    }

    #[Depends('testAssertTrap191')]
    public function testAssertTrap192(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 376,
        );
    }

    #[Depends('testAssertTrap192')]
    public function testAssertTrap193(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 377,
        );
    }

    #[Depends('testAssertTrap193')]
    public function testAssertInvalid194(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.7.wasm',
            text: 'unknown elem segment 0',
            line: 379,
        );
    }

    #[Depends('testAssertInvalid194')]
    public function testAssertInvalid195(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.8.wasm',
            text: 'unknown table 0',
            line: 385,
        );
    }

    #[Depends('testAssertInvalid195')]
    public function testAssertInvalid196(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.9.wasm',
            text: 'unknown elem segment 4',
            line: 391,
        );
    }

    #[Depends('testAssertInvalid196')]
    public function testAssertInvalid197(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.10.wasm',
            text: 'unknown table 0',
            line: 399,
        );
    }

    #[Depends('testAssertInvalid197')]
    public function testModule198(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.11.wasm',
            name: null,
            line: 407,
        );
    }

    #[Depends('testModule198')]
    public function testAction199(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 429,
        );
    }

    #[Depends('testAction199')]
    public function testModule200(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.12.wasm',
            name: null,
            line: 431,
        );
    }

    #[Depends('testModule200')]
    public function testAssertTrap201(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 453,
        );
    }

    #[Depends('testAssertTrap201')]
    public function testModule202(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.13.wasm',
            name: null,
            line: 455,
        );
    }

    #[Depends('testModule202')]
    public function testAction203(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 477,
        );
    }

    #[Depends('testAction203')]
    public function testModule204(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.14.wasm',
            name: null,
            line: 479,
        );
    }

    #[Depends('testModule204')]
    public function testAction205(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 501,
        );
    }

    #[Depends('testAction205')]
    public function testModule206(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.15.wasm',
            name: null,
            line: 503,
        );
    }

    #[Depends('testModule206')]
    public function testAssertTrap207(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 525,
        );
    }

    #[Depends('testAssertTrap207')]
    public function testModule208(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.16.wasm',
            name: null,
            line: 527,
        );
    }

    #[Depends('testModule208')]
    public function testAssertTrap209(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 549,
        );
    }

    #[Depends('testAssertTrap209')]
    public function testModule210(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.17.wasm',
            name: null,
            line: 551,
        );
    }

    #[Depends('testModule210')]
    public function testAssertTrap211(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 573,
        );
    }

    #[Depends('testAssertTrap211')]
    public function testModule212(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.18.wasm',
            name: null,
            line: 575,
        );
    }

    #[Depends('testModule212')]
    public function testAssertTrap213(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 597,
        );
    }

    #[Depends('testAssertTrap213')]
    public function testModule214(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.19.wasm',
            name: null,
            line: 599,
        );
    }

    #[Depends('testModule214')]
    public function testAction215(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 621,
        );
    }

    #[Depends('testAction215')]
    public function testModule216(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.20.wasm',
            name: null,
            line: 623,
        );
    }

    #[Depends('testModule216')]
    public function testAssertTrap217(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 645,
        );
    }

    #[Depends('testAssertTrap217')]
    public function testModule218(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.21.wasm',
            name: null,
            line: 647,
        );
    }

    #[Depends('testModule218')]
    public function testAction219(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 669,
        );
    }

    #[Depends('testAction219')]
    public function testModule220(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.22.wasm',
            name: null,
            line: 671,
        );
    }

    #[Depends('testModule220')]
    public function testAssertTrap221(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 693,
        );
    }

    #[Depends('testAssertTrap221')]
    public function testModule222(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.23.wasm',
            name: null,
            line: 695,
        );
    }

    #[Depends('testModule222')]
    public function testAction223(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 717,
        );
    }

    #[Depends('testAction223')]
    public function testModule224(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.24.wasm',
            name: null,
            line: 719,
        );
    }

    #[Depends('testModule224')]
    public function testAssertTrap225(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 741,
        );
    }

    #[Depends('testAssertTrap225')]
    public function testModule226(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.25.wasm',
            name: null,
            line: 743,
        );
    }

    #[Depends('testModule226')]
    public function testAssertTrap227(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 765,
        );
    }

    #[Depends('testAssertTrap227')]
    public function testModule228(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.26.wasm',
            name: null,
            line: 767,
        );
    }

    #[Depends('testModule228')]
    public function testAction229(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 789,
        );
    }

    #[Depends('testAction229')]
    public function testModule230(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.27.wasm',
            name: null,
            line: 791,
        );
    }

    #[Depends('testModule230')]
    public function testAssertTrap231(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 813,
        );
    }

    #[Depends('testAssertTrap231')]
    public function testModule232(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.28.wasm',
            name: null,
            line: 815,
        );
    }

    #[Depends('testModule232')]
    public function testAction233(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 837,
        );
    }

    #[Depends('testAction233')]
    public function testModule234(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.29.wasm',
            name: null,
            line: 839,
        );
    }

    #[Depends('testModule234')]
    public function testAssertTrap235(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 861,
        );
    }

    #[Depends('testAssertTrap235')]
    public function testModule236(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.30.wasm',
            name: null,
            line: 863,
        );
    }

    #[Depends('testModule236')]
    public function testAction237(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 885,
        );
    }

    #[Depends('testAction237')]
    public function testModule238(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.31.wasm',
            name: null,
            line: 887,
        );
    }

    #[Depends('testModule238')]
    public function testAssertTrap239(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 909,
        );
    }

    #[Depends('testAssertTrap239')]
    public function testAssertInvalid240(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.32.wasm',
            text: 'type mismatch',
            line: 912,
        );
    }

    #[Depends('testAssertInvalid240')]
    public function testAssertInvalid241(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.33.wasm',
            text: 'type mismatch',
            line: 921,
        );
    }

    #[Depends('testAssertInvalid241')]
    public function testAssertInvalid242(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.34.wasm',
            text: 'type mismatch',
            line: 930,
        );
    }

    #[Depends('testAssertInvalid242')]
    public function testAssertInvalid243(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.35.wasm',
            text: 'type mismatch',
            line: 939,
        );
    }

    #[Depends('testAssertInvalid243')]
    public function testAssertInvalid244(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.36.wasm',
            text: 'type mismatch',
            line: 948,
        );
    }

    #[Depends('testAssertInvalid244')]
    public function testAssertInvalid245(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.37.wasm',
            text: 'type mismatch',
            line: 957,
        );
    }

    #[Depends('testAssertInvalid245')]
    public function testAssertInvalid246(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.38.wasm',
            text: 'type mismatch',
            line: 966,
        );
    }

    #[Depends('testAssertInvalid246')]
    public function testAssertInvalid247(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.39.wasm',
            text: 'type mismatch',
            line: 975,
        );
    }

    #[Depends('testAssertInvalid247')]
    public function testAssertInvalid248(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.40.wasm',
            text: 'type mismatch',
            line: 984,
        );
    }

    #[Depends('testAssertInvalid248')]
    public function testAssertInvalid249(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.41.wasm',
            text: 'type mismatch',
            line: 993,
        );
    }

    #[Depends('testAssertInvalid249')]
    public function testAssertInvalid250(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.42.wasm',
            text: 'type mismatch',
            line: 1002,
        );
    }

    #[Depends('testAssertInvalid250')]
    public function testAssertInvalid251(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.43.wasm',
            text: 'type mismatch',
            line: 1011,
        );
    }

    #[Depends('testAssertInvalid251')]
    public function testAssertInvalid252(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.44.wasm',
            text: 'type mismatch',
            line: 1020,
        );
    }

    #[Depends('testAssertInvalid252')]
    public function testAssertInvalid253(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.45.wasm',
            text: 'type mismatch',
            line: 1029,
        );
    }

    #[Depends('testAssertInvalid253')]
    public function testAssertInvalid254(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.46.wasm',
            text: 'type mismatch',
            line: 1038,
        );
    }

    #[Depends('testAssertInvalid254')]
    public function testAssertInvalid255(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.47.wasm',
            text: 'type mismatch',
            line: 1047,
        );
    }

    #[Depends('testAssertInvalid255')]
    public function testAssertInvalid256(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.48.wasm',
            text: 'type mismatch',
            line: 1056,
        );
    }

    #[Depends('testAssertInvalid256')]
    public function testAssertInvalid257(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.49.wasm',
            text: 'type mismatch',
            line: 1065,
        );
    }

    #[Depends('testAssertInvalid257')]
    public function testAssertInvalid258(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.50.wasm',
            text: 'type mismatch',
            line: 1074,
        );
    }

    #[Depends('testAssertInvalid258')]
    public function testAssertInvalid259(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.51.wasm',
            text: 'type mismatch',
            line: 1083,
        );
    }

    #[Depends('testAssertInvalid259')]
    public function testAssertInvalid260(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.52.wasm',
            text: 'type mismatch',
            line: 1092,
        );
    }

    #[Depends('testAssertInvalid260')]
    public function testAssertInvalid261(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.53.wasm',
            text: 'type mismatch',
            line: 1101,
        );
    }

    #[Depends('testAssertInvalid261')]
    public function testAssertInvalid262(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.54.wasm',
            text: 'type mismatch',
            line: 1110,
        );
    }

    #[Depends('testAssertInvalid262')]
    public function testAssertInvalid263(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.55.wasm',
            text: 'type mismatch',
            line: 1119,
        );
    }

    #[Depends('testAssertInvalid263')]
    public function testAssertInvalid264(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.56.wasm',
            text: 'type mismatch',
            line: 1128,
        );
    }

    #[Depends('testAssertInvalid264')]
    public function testAssertInvalid265(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.57.wasm',
            text: 'type mismatch',
            line: 1137,
        );
    }

    #[Depends('testAssertInvalid265')]
    public function testAssertInvalid266(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.58.wasm',
            text: 'type mismatch',
            line: 1146,
        );
    }

    #[Depends('testAssertInvalid266')]
    public function testAssertInvalid267(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.59.wasm',
            text: 'type mismatch',
            line: 1155,
        );
    }

    #[Depends('testAssertInvalid267')]
    public function testAssertInvalid268(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.60.wasm',
            text: 'type mismatch',
            line: 1164,
        );
    }

    #[Depends('testAssertInvalid268')]
    public function testAssertInvalid269(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.61.wasm',
            text: 'type mismatch',
            line: 1173,
        );
    }

    #[Depends('testAssertInvalid269')]
    public function testAssertInvalid270(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.62.wasm',
            text: 'type mismatch',
            line: 1182,
        );
    }

    #[Depends('testAssertInvalid270')]
    public function testAssertInvalid271(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.63.wasm',
            text: 'type mismatch',
            line: 1191,
        );
    }

    #[Depends('testAssertInvalid271')]
    public function testAssertInvalid272(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.64.wasm',
            text: 'type mismatch',
            line: 1200,
        );
    }

    #[Depends('testAssertInvalid272')]
    public function testAssertInvalid273(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.65.wasm',
            text: 'type mismatch',
            line: 1209,
        );
    }

    #[Depends('testAssertInvalid273')]
    public function testAssertInvalid274(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.66.wasm',
            text: 'type mismatch',
            line: 1218,
        );
    }

    #[Depends('testAssertInvalid274')]
    public function testAssertInvalid275(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.67.wasm',
            text: 'type mismatch',
            line: 1227,
        );
    }

    #[Depends('testAssertInvalid275')]
    public function testAssertInvalid276(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.68.wasm',
            text: 'type mismatch',
            line: 1236,
        );
    }

    #[Depends('testAssertInvalid276')]
    public function testAssertInvalid277(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.69.wasm',
            text: 'type mismatch',
            line: 1245,
        );
    }

    #[Depends('testAssertInvalid277')]
    public function testAssertInvalid278(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.70.wasm',
            text: 'type mismatch',
            line: 1254,
        );
    }

    #[Depends('testAssertInvalid278')]
    public function testAssertInvalid279(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.71.wasm',
            text: 'type mismatch',
            line: 1263,
        );
    }

    #[Depends('testAssertInvalid279')]
    public function testAssertInvalid280(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.72.wasm',
            text: 'type mismatch',
            line: 1272,
        );
    }

    #[Depends('testAssertInvalid280')]
    public function testAssertInvalid281(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.73.wasm',
            text: 'type mismatch',
            line: 1281,
        );
    }

    #[Depends('testAssertInvalid281')]
    public function testAssertInvalid282(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.74.wasm',
            text: 'type mismatch',
            line: 1290,
        );
    }

    #[Depends('testAssertInvalid282')]
    public function testAssertInvalid283(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.75.wasm',
            text: 'type mismatch',
            line: 1299,
        );
    }

    #[Depends('testAssertInvalid283')]
    public function testAssertInvalid284(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.76.wasm',
            text: 'type mismatch',
            line: 1308,
        );
    }

    #[Depends('testAssertInvalid284')]
    public function testAssertInvalid285(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.77.wasm',
            text: 'type mismatch',
            line: 1317,
        );
    }

    #[Depends('testAssertInvalid285')]
    public function testAssertInvalid286(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.78.wasm',
            text: 'type mismatch',
            line: 1326,
        );
    }

    #[Depends('testAssertInvalid286')]
    public function testAssertInvalid287(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.79.wasm',
            text: 'type mismatch',
            line: 1335,
        );
    }

    #[Depends('testAssertInvalid287')]
    public function testAssertInvalid288(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.80.wasm',
            text: 'type mismatch',
            line: 1344,
        );
    }

    #[Depends('testAssertInvalid288')]
    public function testAssertInvalid289(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.81.wasm',
            text: 'type mismatch',
            line: 1353,
        );
    }

    #[Depends('testAssertInvalid289')]
    public function testAssertInvalid290(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.82.wasm',
            text: 'type mismatch',
            line: 1362,
        );
    }

    #[Depends('testAssertInvalid290')]
    public function testAssertInvalid291(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.83.wasm',
            text: 'type mismatch',
            line: 1371,
        );
    }

    #[Depends('testAssertInvalid291')]
    public function testAssertInvalid292(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.84.wasm',
            text: 'type mismatch',
            line: 1380,
        );
    }

    #[Depends('testAssertInvalid292')]
    public function testAssertInvalid293(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.85.wasm',
            text: 'type mismatch',
            line: 1389,
        );
    }

    #[Depends('testAssertInvalid293')]
    public function testAssertInvalid294(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.86.wasm',
            text: 'type mismatch',
            line: 1398,
        );
    }

    #[Depends('testAssertInvalid294')]
    public function testAssertInvalid295(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.87.wasm',
            text: 'type mismatch',
            line: 1407,
        );
    }

    #[Depends('testAssertInvalid295')]
    public function testAssertInvalid296(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.88.wasm',
            text: 'type mismatch',
            line: 1416,
        );
    }

    #[Depends('testAssertInvalid296')]
    public function testAssertInvalid297(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.89.wasm',
            text: 'type mismatch',
            line: 1425,
        );
    }

    #[Depends('testAssertInvalid297')]
    public function testAssertInvalid298(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.90.wasm',
            text: 'type mismatch',
            line: 1434,
        );
    }

    #[Depends('testAssertInvalid298')]
    public function testAssertInvalid299(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.91.wasm',
            text: 'type mismatch',
            line: 1443,
        );
    }

    #[Depends('testAssertInvalid299')]
    public function testAssertInvalid300(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.92.wasm',
            text: 'type mismatch',
            line: 1452,
        );
    }

    #[Depends('testAssertInvalid300')]
    public function testAssertInvalid301(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.93.wasm',
            text: 'type mismatch',
            line: 1461,
        );
    }

    #[Depends('testAssertInvalid301')]
    public function testAssertInvalid302(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table_init.94.wasm',
            text: 'type mismatch',
            line: 1470,
        );
    }

    #[Depends('testAssertInvalid302')]
    public function testModule303(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.95.wasm',
            name: null,
            line: 1478,
        );
    }

    #[Depends('testModule303')]
    public function testAssertTrap304(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '24'], ['type' => 'i32', 'value' => '16']]],
            text: 'out of bounds table access',
            line: 1506,
        );
    }

    #[Depends('testAssertTrap304')]
    public function testAssertTrap305(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1507,
        );
    }

    #[Depends('testAssertTrap305')]
    public function testAssertTrap306(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1508,
        );
    }

    #[Depends('testAssertTrap306')]
    public function testAssertTrap307(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 1509,
        );
    }

    #[Depends('testAssertTrap307')]
    public function testAssertTrap308(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '3']]],
            text: 'uninitialized element',
            line: 1510,
        );
    }

    #[Depends('testAssertTrap308')]
    public function testAssertTrap309(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '4']]],
            text: 'uninitialized element',
            line: 1511,
        );
    }

    #[Depends('testAssertTrap309')]
    public function testAssertTrap310(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '5']]],
            text: 'uninitialized element',
            line: 1512,
        );
    }

    #[Depends('testAssertTrap310')]
    public function testAssertTrap311(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 1513,
        );
    }

    #[Depends('testAssertTrap311')]
    public function testAssertTrap312(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1514,
        );
    }

    #[Depends('testAssertTrap312')]
    public function testAssertTrap313(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1515,
        );
    }

    #[Depends('testAssertTrap313')]
    public function testAssertTrap314(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1516,
        );
    }

    #[Depends('testAssertTrap314')]
    public function testAssertTrap315(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1517,
        );
    }

    #[Depends('testAssertTrap315')]
    public function testAssertTrap316(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 1518,
        );
    }

    #[Depends('testAssertTrap316')]
    public function testAssertTrap317(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '12']]],
            text: 'uninitialized element',
            line: 1519,
        );
    }

    #[Depends('testAssertTrap317')]
    public function testAssertTrap318(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 1520,
        );
    }

    #[Depends('testAssertTrap318')]
    public function testAssertTrap319(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '14']]],
            text: 'uninitialized element',
            line: 1521,
        );
    }

    #[Depends('testAssertTrap319')]
    public function testAssertTrap320(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 1522,
        );
    }

    #[Depends('testAssertTrap320')]
    public function testAssertTrap321(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 1523,
        );
    }

    #[Depends('testAssertTrap321')]
    public function testAssertTrap322(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1524,
        );
    }

    #[Depends('testAssertTrap322')]
    public function testAssertTrap323(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1525,
        );
    }

    #[Depends('testAssertTrap323')]
    public function testAssertTrap324(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1526,
        );
    }

    #[Depends('testAssertTrap324')]
    public function testAssertTrap325(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1527,
        );
    }

    #[Depends('testAssertTrap325')]
    public function testAssertTrap326(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1528,
        );
    }

    #[Depends('testAssertTrap326')]
    public function testAssertTrap327(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1529,
        );
    }

    #[Depends('testAssertTrap327')]
    public function testAssertTrap328(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1530,
        );
    }

    #[Depends('testAssertTrap328')]
    public function testAssertTrap329(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1531,
        );
    }

    #[Depends('testAssertTrap329')]
    public function testAssertTrap330(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 1532,
        );
    }

    #[Depends('testAssertTrap330')]
    public function testAssertTrap331(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 1533,
        );
    }

    #[Depends('testAssertTrap331')]
    public function testAssertTrap332(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1534,
        );
    }

    #[Depends('testAssertTrap332')]
    public function testAssertTrap333(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1535,
        );
    }

    #[Depends('testAssertTrap333')]
    public function testAssertTrap334(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1536,
        );
    }

    #[Depends('testAssertTrap334')]
    public function testAssertTrap335(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '30']]],
            text: 'uninitialized element',
            line: 1537,
        );
    }

    #[Depends('testAssertTrap335')]
    public function testAssertTrap336(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '31']]],
            text: 'uninitialized element',
            line: 1538,
        );
    }

    #[Depends('testAssertTrap336')]
    public function testModule337(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.96.wasm',
            name: null,
            line: 1540,
        );
    }

    #[Depends('testModule337')]
    public function testAssertTrap338(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '25'], ['type' => 'i32', 'value' => '16']]],
            text: 'out of bounds table access',
            line: 1568,
        );
    }

    #[Depends('testAssertTrap338')]
    public function testAssertTrap339(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1569,
        );
    }

    #[Depends('testAssertTrap339')]
    public function testAssertTrap340(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1570,
        );
    }

    #[Depends('testAssertTrap340')]
    public function testAssertTrap341(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 1571,
        );
    }

    #[Depends('testAssertTrap341')]
    public function testAssertTrap342(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '3']]],
            text: 'uninitialized element',
            line: 1572,
        );
    }

    #[Depends('testAssertTrap342')]
    public function testAssertTrap343(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '4']]],
            text: 'uninitialized element',
            line: 1573,
        );
    }

    #[Depends('testAssertTrap343')]
    public function testAssertTrap344(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '5']]],
            text: 'uninitialized element',
            line: 1574,
        );
    }

    #[Depends('testAssertTrap344')]
    public function testAssertTrap345(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 1575,
        );
    }

    #[Depends('testAssertTrap345')]
    public function testAssertTrap346(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1576,
        );
    }

    #[Depends('testAssertTrap346')]
    public function testAssertTrap347(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1577,
        );
    }

    #[Depends('testAssertTrap347')]
    public function testAssertTrap348(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1578,
        );
    }

    #[Depends('testAssertTrap348')]
    public function testAssertTrap349(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1579,
        );
    }

    #[Depends('testAssertTrap349')]
    public function testAssertTrap350(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 1580,
        );
    }

    #[Depends('testAssertTrap350')]
    public function testAssertTrap351(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '12']]],
            text: 'uninitialized element',
            line: 1581,
        );
    }

    #[Depends('testAssertTrap351')]
    public function testAssertTrap352(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 1582,
        );
    }

    #[Depends('testAssertTrap352')]
    public function testAssertTrap353(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '14']]],
            text: 'uninitialized element',
            line: 1583,
        );
    }

    #[Depends('testAssertTrap353')]
    public function testAssertTrap354(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 1584,
        );
    }

    #[Depends('testAssertTrap354')]
    public function testAssertTrap355(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 1585,
        );
    }

    #[Depends('testAssertTrap355')]
    public function testAssertTrap356(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1586,
        );
    }

    #[Depends('testAssertTrap356')]
    public function testAssertTrap357(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1587,
        );
    }

    #[Depends('testAssertTrap357')]
    public function testAssertTrap358(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1588,
        );
    }

    #[Depends('testAssertTrap358')]
    public function testAssertTrap359(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1589,
        );
    }

    #[Depends('testAssertTrap359')]
    public function testAssertTrap360(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1590,
        );
    }

    #[Depends('testAssertTrap360')]
    public function testAssertTrap361(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1591,
        );
    }

    #[Depends('testAssertTrap361')]
    public function testAssertTrap362(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1592,
        );
    }

    #[Depends('testAssertTrap362')]
    public function testAssertTrap363(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1593,
        );
    }

    #[Depends('testAssertTrap363')]
    public function testAssertTrap364(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 1594,
        );
    }

    #[Depends('testAssertTrap364')]
    public function testAssertTrap365(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 1595,
        );
    }

    #[Depends('testAssertTrap365')]
    public function testAssertTrap366(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1596,
        );
    }

    #[Depends('testAssertTrap366')]
    public function testAssertTrap367(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1597,
        );
    }

    #[Depends('testAssertTrap367')]
    public function testAssertTrap368(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1598,
        );
    }

    #[Depends('testAssertTrap368')]
    public function testAssertTrap369(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '30']]],
            text: 'uninitialized element',
            line: 1599,
        );
    }

    #[Depends('testAssertTrap369')]
    public function testAssertTrap370(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '31']]],
            text: 'uninitialized element',
            line: 1600,
        );
    }

    #[Depends('testAssertTrap370')]
    public function testModule371(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.97.wasm',
            name: null,
            line: 1602,
        );
    }

    #[Depends('testModule371')]
    public function testAssertTrap372(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '96'], ['type' => 'i32', 'value' => '32']]],
            text: 'out of bounds table access',
            line: 1630,
        );
    }

    #[Depends('testAssertTrap372')]
    public function testAssertTrap373(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1631,
        );
    }

    #[Depends('testAssertTrap373')]
    public function testAssertTrap374(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1632,
        );
    }

    #[Depends('testAssertTrap374')]
    public function testAssertTrap375(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 1633,
        );
    }

    #[Depends('testAssertTrap375')]
    public function testAssertTrap376(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '3']]],
            text: 'uninitialized element',
            line: 1634,
        );
    }

    #[Depends('testAssertTrap376')]
    public function testAssertTrap377(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '4']]],
            text: 'uninitialized element',
            line: 1635,
        );
    }

    #[Depends('testAssertTrap377')]
    public function testAssertTrap378(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '5']]],
            text: 'uninitialized element',
            line: 1636,
        );
    }

    #[Depends('testAssertTrap378')]
    public function testAssertTrap379(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 1637,
        );
    }

    #[Depends('testAssertTrap379')]
    public function testAssertTrap380(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1638,
        );
    }

    #[Depends('testAssertTrap380')]
    public function testAssertTrap381(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1639,
        );
    }

    #[Depends('testAssertTrap381')]
    public function testAssertTrap382(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1640,
        );
    }

    #[Depends('testAssertTrap382')]
    public function testAssertTrap383(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1641,
        );
    }

    #[Depends('testAssertTrap383')]
    public function testAssertTrap384(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 1642,
        );
    }

    #[Depends('testAssertTrap384')]
    public function testAssertTrap385(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '12']]],
            text: 'uninitialized element',
            line: 1643,
        );
    }

    #[Depends('testAssertTrap385')]
    public function testAssertTrap386(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 1644,
        );
    }

    #[Depends('testAssertTrap386')]
    public function testAssertTrap387(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '14']]],
            text: 'uninitialized element',
            line: 1645,
        );
    }

    #[Depends('testAssertTrap387')]
    public function testAssertTrap388(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 1646,
        );
    }

    #[Depends('testAssertTrap388')]
    public function testAssertTrap389(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 1647,
        );
    }

    #[Depends('testAssertTrap389')]
    public function testAssertTrap390(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1648,
        );
    }

    #[Depends('testAssertTrap390')]
    public function testAssertTrap391(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1649,
        );
    }

    #[Depends('testAssertTrap391')]
    public function testAssertTrap392(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1650,
        );
    }

    #[Depends('testAssertTrap392')]
    public function testAssertTrap393(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1651,
        );
    }

    #[Depends('testAssertTrap393')]
    public function testAssertTrap394(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1652,
        );
    }

    #[Depends('testAssertTrap394')]
    public function testAssertTrap395(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1653,
        );
    }

    #[Depends('testAssertTrap395')]
    public function testAssertTrap396(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1654,
        );
    }

    #[Depends('testAssertTrap396')]
    public function testAssertTrap397(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1655,
        );
    }

    #[Depends('testAssertTrap397')]
    public function testAssertTrap398(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 1656,
        );
    }

    #[Depends('testAssertTrap398')]
    public function testAssertTrap399(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 1657,
        );
    }

    #[Depends('testAssertTrap399')]
    public function testAssertTrap400(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1658,
        );
    }

    #[Depends('testAssertTrap400')]
    public function testAssertTrap401(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1659,
        );
    }

    #[Depends('testAssertTrap401')]
    public function testAssertTrap402(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1660,
        );
    }

    #[Depends('testAssertTrap402')]
    public function testAssertTrap403(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '30']]],
            text: 'uninitialized element',
            line: 1661,
        );
    }

    #[Depends('testAssertTrap403')]
    public function testAssertTrap404(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '31']]],
            text: 'uninitialized element',
            line: 1662,
        );
    }

    #[Depends('testAssertTrap404')]
    public function testAssertTrap405(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '32']]],
            text: 'uninitialized element',
            line: 1663,
        );
    }

    #[Depends('testAssertTrap405')]
    public function testAssertTrap406(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '33']]],
            text: 'uninitialized element',
            line: 1664,
        );
    }

    #[Depends('testAssertTrap406')]
    public function testAssertTrap407(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '34']]],
            text: 'uninitialized element',
            line: 1665,
        );
    }

    #[Depends('testAssertTrap407')]
    public function testAssertTrap408(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '35']]],
            text: 'uninitialized element',
            line: 1666,
        );
    }

    #[Depends('testAssertTrap408')]
    public function testAssertTrap409(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '36']]],
            text: 'uninitialized element',
            line: 1667,
        );
    }

    #[Depends('testAssertTrap409')]
    public function testAssertTrap410(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '37']]],
            text: 'uninitialized element',
            line: 1668,
        );
    }

    #[Depends('testAssertTrap410')]
    public function testAssertTrap411(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '38']]],
            text: 'uninitialized element',
            line: 1669,
        );
    }

    #[Depends('testAssertTrap411')]
    public function testAssertTrap412(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '39']]],
            text: 'uninitialized element',
            line: 1670,
        );
    }

    #[Depends('testAssertTrap412')]
    public function testAssertTrap413(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '40']]],
            text: 'uninitialized element',
            line: 1671,
        );
    }

    #[Depends('testAssertTrap413')]
    public function testAssertTrap414(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '41']]],
            text: 'uninitialized element',
            line: 1672,
        );
    }

    #[Depends('testAssertTrap414')]
    public function testAssertTrap415(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '42']]],
            text: 'uninitialized element',
            line: 1673,
        );
    }

    #[Depends('testAssertTrap415')]
    public function testAssertTrap416(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '43']]],
            text: 'uninitialized element',
            line: 1674,
        );
    }

    #[Depends('testAssertTrap416')]
    public function testAssertTrap417(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '44']]],
            text: 'uninitialized element',
            line: 1675,
        );
    }

    #[Depends('testAssertTrap417')]
    public function testAssertTrap418(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '45']]],
            text: 'uninitialized element',
            line: 1676,
        );
    }

    #[Depends('testAssertTrap418')]
    public function testAssertTrap419(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '46']]],
            text: 'uninitialized element',
            line: 1677,
        );
    }

    #[Depends('testAssertTrap419')]
    public function testAssertTrap420(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '47']]],
            text: 'uninitialized element',
            line: 1678,
        );
    }

    #[Depends('testAssertTrap420')]
    public function testAssertTrap421(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '48']]],
            text: 'uninitialized element',
            line: 1679,
        );
    }

    #[Depends('testAssertTrap421')]
    public function testAssertTrap422(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '49']]],
            text: 'uninitialized element',
            line: 1680,
        );
    }

    #[Depends('testAssertTrap422')]
    public function testAssertTrap423(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '50']]],
            text: 'uninitialized element',
            line: 1681,
        );
    }

    #[Depends('testAssertTrap423')]
    public function testAssertTrap424(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '51']]],
            text: 'uninitialized element',
            line: 1682,
        );
    }

    #[Depends('testAssertTrap424')]
    public function testAssertTrap425(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '52']]],
            text: 'uninitialized element',
            line: 1683,
        );
    }

    #[Depends('testAssertTrap425')]
    public function testAssertTrap426(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '53']]],
            text: 'uninitialized element',
            line: 1684,
        );
    }

    #[Depends('testAssertTrap426')]
    public function testAssertTrap427(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '54']]],
            text: 'uninitialized element',
            line: 1685,
        );
    }

    #[Depends('testAssertTrap427')]
    public function testAssertTrap428(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '55']]],
            text: 'uninitialized element',
            line: 1686,
        );
    }

    #[Depends('testAssertTrap428')]
    public function testAssertTrap429(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '56']]],
            text: 'uninitialized element',
            line: 1687,
        );
    }

    #[Depends('testAssertTrap429')]
    public function testAssertTrap430(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '57']]],
            text: 'uninitialized element',
            line: 1688,
        );
    }

    #[Depends('testAssertTrap430')]
    public function testAssertTrap431(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '58']]],
            text: 'uninitialized element',
            line: 1689,
        );
    }

    #[Depends('testAssertTrap431')]
    public function testAssertTrap432(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '59']]],
            text: 'uninitialized element',
            line: 1690,
        );
    }

    #[Depends('testAssertTrap432')]
    public function testAssertTrap433(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '60']]],
            text: 'uninitialized element',
            line: 1691,
        );
    }

    #[Depends('testAssertTrap433')]
    public function testAssertTrap434(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '61']]],
            text: 'uninitialized element',
            line: 1692,
        );
    }

    #[Depends('testAssertTrap434')]
    public function testAssertTrap435(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '62']]],
            text: 'uninitialized element',
            line: 1693,
        );
    }

    #[Depends('testAssertTrap435')]
    public function testAssertTrap436(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '63']]],
            text: 'uninitialized element',
            line: 1694,
        );
    }

    #[Depends('testAssertTrap436')]
    public function testAssertTrap437(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '64']]],
            text: 'uninitialized element',
            line: 1695,
        );
    }

    #[Depends('testAssertTrap437')]
    public function testAssertTrap438(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '65']]],
            text: 'uninitialized element',
            line: 1696,
        );
    }

    #[Depends('testAssertTrap438')]
    public function testAssertTrap439(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '66']]],
            text: 'uninitialized element',
            line: 1697,
        );
    }

    #[Depends('testAssertTrap439')]
    public function testAssertTrap440(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '67']]],
            text: 'uninitialized element',
            line: 1698,
        );
    }

    #[Depends('testAssertTrap440')]
    public function testAssertTrap441(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '68']]],
            text: 'uninitialized element',
            line: 1699,
        );
    }

    #[Depends('testAssertTrap441')]
    public function testAssertTrap442(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '69']]],
            text: 'uninitialized element',
            line: 1700,
        );
    }

    #[Depends('testAssertTrap442')]
    public function testAssertTrap443(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '70']]],
            text: 'uninitialized element',
            line: 1701,
        );
    }

    #[Depends('testAssertTrap443')]
    public function testAssertTrap444(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '71']]],
            text: 'uninitialized element',
            line: 1702,
        );
    }

    #[Depends('testAssertTrap444')]
    public function testAssertTrap445(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '72']]],
            text: 'uninitialized element',
            line: 1703,
        );
    }

    #[Depends('testAssertTrap445')]
    public function testAssertTrap446(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '73']]],
            text: 'uninitialized element',
            line: 1704,
        );
    }

    #[Depends('testAssertTrap446')]
    public function testAssertTrap447(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '74']]],
            text: 'uninitialized element',
            line: 1705,
        );
    }

    #[Depends('testAssertTrap447')]
    public function testAssertTrap448(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '75']]],
            text: 'uninitialized element',
            line: 1706,
        );
    }

    #[Depends('testAssertTrap448')]
    public function testAssertTrap449(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '76']]],
            text: 'uninitialized element',
            line: 1707,
        );
    }

    #[Depends('testAssertTrap449')]
    public function testAssertTrap450(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '77']]],
            text: 'uninitialized element',
            line: 1708,
        );
    }

    #[Depends('testAssertTrap450')]
    public function testAssertTrap451(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '78']]],
            text: 'uninitialized element',
            line: 1709,
        );
    }

    #[Depends('testAssertTrap451')]
    public function testAssertTrap452(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '79']]],
            text: 'uninitialized element',
            line: 1710,
        );
    }

    #[Depends('testAssertTrap452')]
    public function testAssertTrap453(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '80']]],
            text: 'uninitialized element',
            line: 1711,
        );
    }

    #[Depends('testAssertTrap453')]
    public function testAssertTrap454(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '81']]],
            text: 'uninitialized element',
            line: 1712,
        );
    }

    #[Depends('testAssertTrap454')]
    public function testAssertTrap455(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '82']]],
            text: 'uninitialized element',
            line: 1713,
        );
    }

    #[Depends('testAssertTrap455')]
    public function testAssertTrap456(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '83']]],
            text: 'uninitialized element',
            line: 1714,
        );
    }

    #[Depends('testAssertTrap456')]
    public function testAssertTrap457(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '84']]],
            text: 'uninitialized element',
            line: 1715,
        );
    }

    #[Depends('testAssertTrap457')]
    public function testAssertTrap458(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '85']]],
            text: 'uninitialized element',
            line: 1716,
        );
    }

    #[Depends('testAssertTrap458')]
    public function testAssertTrap459(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '86']]],
            text: 'uninitialized element',
            line: 1717,
        );
    }

    #[Depends('testAssertTrap459')]
    public function testAssertTrap460(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '87']]],
            text: 'uninitialized element',
            line: 1718,
        );
    }

    #[Depends('testAssertTrap460')]
    public function testAssertTrap461(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '88']]],
            text: 'uninitialized element',
            line: 1719,
        );
    }

    #[Depends('testAssertTrap461')]
    public function testAssertTrap462(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '89']]],
            text: 'uninitialized element',
            line: 1720,
        );
    }

    #[Depends('testAssertTrap462')]
    public function testAssertTrap463(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '90']]],
            text: 'uninitialized element',
            line: 1721,
        );
    }

    #[Depends('testAssertTrap463')]
    public function testAssertTrap464(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '91']]],
            text: 'uninitialized element',
            line: 1722,
        );
    }

    #[Depends('testAssertTrap464')]
    public function testAssertTrap465(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '92']]],
            text: 'uninitialized element',
            line: 1723,
        );
    }

    #[Depends('testAssertTrap465')]
    public function testAssertTrap466(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '93']]],
            text: 'uninitialized element',
            line: 1724,
        );
    }

    #[Depends('testAssertTrap466')]
    public function testAssertTrap467(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '94']]],
            text: 'uninitialized element',
            line: 1725,
        );
    }

    #[Depends('testAssertTrap467')]
    public function testAssertTrap468(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '95']]],
            text: 'uninitialized element',
            line: 1726,
        );
    }

    #[Depends('testAssertTrap468')]
    public function testAssertTrap469(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '96']]],
            text: 'uninitialized element',
            line: 1727,
        );
    }

    #[Depends('testAssertTrap469')]
    public function testAssertTrap470(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '97']]],
            text: 'uninitialized element',
            line: 1728,
        );
    }

    #[Depends('testAssertTrap470')]
    public function testAssertTrap471(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '98']]],
            text: 'uninitialized element',
            line: 1729,
        );
    }

    #[Depends('testAssertTrap471')]
    public function testAssertTrap472(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '99']]],
            text: 'uninitialized element',
            line: 1730,
        );
    }

    #[Depends('testAssertTrap472')]
    public function testAssertTrap473(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '100']]],
            text: 'uninitialized element',
            line: 1731,
        );
    }

    #[Depends('testAssertTrap473')]
    public function testAssertTrap474(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '101']]],
            text: 'uninitialized element',
            line: 1732,
        );
    }

    #[Depends('testAssertTrap474')]
    public function testAssertTrap475(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '102']]],
            text: 'uninitialized element',
            line: 1733,
        );
    }

    #[Depends('testAssertTrap475')]
    public function testAssertTrap476(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '103']]],
            text: 'uninitialized element',
            line: 1734,
        );
    }

    #[Depends('testAssertTrap476')]
    public function testAssertTrap477(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '104']]],
            text: 'uninitialized element',
            line: 1735,
        );
    }

    #[Depends('testAssertTrap477')]
    public function testAssertTrap478(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '105']]],
            text: 'uninitialized element',
            line: 1736,
        );
    }

    #[Depends('testAssertTrap478')]
    public function testAssertTrap479(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '106']]],
            text: 'uninitialized element',
            line: 1737,
        );
    }

    #[Depends('testAssertTrap479')]
    public function testAssertTrap480(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '107']]],
            text: 'uninitialized element',
            line: 1738,
        );
    }

    #[Depends('testAssertTrap480')]
    public function testAssertTrap481(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '108']]],
            text: 'uninitialized element',
            line: 1739,
        );
    }

    #[Depends('testAssertTrap481')]
    public function testAssertTrap482(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '109']]],
            text: 'uninitialized element',
            line: 1740,
        );
    }

    #[Depends('testAssertTrap482')]
    public function testAssertTrap483(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '110']]],
            text: 'uninitialized element',
            line: 1741,
        );
    }

    #[Depends('testAssertTrap483')]
    public function testAssertTrap484(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '111']]],
            text: 'uninitialized element',
            line: 1742,
        );
    }

    #[Depends('testAssertTrap484')]
    public function testAssertTrap485(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '112']]],
            text: 'uninitialized element',
            line: 1743,
        );
    }

    #[Depends('testAssertTrap485')]
    public function testAssertTrap486(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '113']]],
            text: 'uninitialized element',
            line: 1744,
        );
    }

    #[Depends('testAssertTrap486')]
    public function testAssertTrap487(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '114']]],
            text: 'uninitialized element',
            line: 1745,
        );
    }

    #[Depends('testAssertTrap487')]
    public function testAssertTrap488(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '115']]],
            text: 'uninitialized element',
            line: 1746,
        );
    }

    #[Depends('testAssertTrap488')]
    public function testAssertTrap489(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '116']]],
            text: 'uninitialized element',
            line: 1747,
        );
    }

    #[Depends('testAssertTrap489')]
    public function testAssertTrap490(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '117']]],
            text: 'uninitialized element',
            line: 1748,
        );
    }

    #[Depends('testAssertTrap490')]
    public function testAssertTrap491(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '118']]],
            text: 'uninitialized element',
            line: 1749,
        );
    }

    #[Depends('testAssertTrap491')]
    public function testAssertTrap492(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '119']]],
            text: 'uninitialized element',
            line: 1750,
        );
    }

    #[Depends('testAssertTrap492')]
    public function testAssertTrap493(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '120']]],
            text: 'uninitialized element',
            line: 1751,
        );
    }

    #[Depends('testAssertTrap493')]
    public function testAssertTrap494(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '121']]],
            text: 'uninitialized element',
            line: 1752,
        );
    }

    #[Depends('testAssertTrap494')]
    public function testAssertTrap495(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '122']]],
            text: 'uninitialized element',
            line: 1753,
        );
    }

    #[Depends('testAssertTrap495')]
    public function testAssertTrap496(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '123']]],
            text: 'uninitialized element',
            line: 1754,
        );
    }

    #[Depends('testAssertTrap496')]
    public function testAssertTrap497(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '124']]],
            text: 'uninitialized element',
            line: 1755,
        );
    }

    #[Depends('testAssertTrap497')]
    public function testAssertTrap498(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '125']]],
            text: 'uninitialized element',
            line: 1756,
        );
    }

    #[Depends('testAssertTrap498')]
    public function testAssertTrap499(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '126']]],
            text: 'uninitialized element',
            line: 1757,
        );
    }

    #[Depends('testAssertTrap499')]
    public function testAssertTrap500(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '127']]],
            text: 'uninitialized element',
            line: 1758,
        );
    }

    #[Depends('testAssertTrap500')]
    public function testAssertTrap501(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '128']]],
            text: 'uninitialized element',
            line: 1759,
        );
    }

    #[Depends('testAssertTrap501')]
    public function testAssertTrap502(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '129']]],
            text: 'uninitialized element',
            line: 1760,
        );
    }

    #[Depends('testAssertTrap502')]
    public function testAssertTrap503(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '130']]],
            text: 'uninitialized element',
            line: 1761,
        );
    }

    #[Depends('testAssertTrap503')]
    public function testAssertTrap504(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '131']]],
            text: 'uninitialized element',
            line: 1762,
        );
    }

    #[Depends('testAssertTrap504')]
    public function testAssertTrap505(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '132']]],
            text: 'uninitialized element',
            line: 1763,
        );
    }

    #[Depends('testAssertTrap505')]
    public function testAssertTrap506(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '133']]],
            text: 'uninitialized element',
            line: 1764,
        );
    }

    #[Depends('testAssertTrap506')]
    public function testAssertTrap507(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '134']]],
            text: 'uninitialized element',
            line: 1765,
        );
    }

    #[Depends('testAssertTrap507')]
    public function testAssertTrap508(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '135']]],
            text: 'uninitialized element',
            line: 1766,
        );
    }

    #[Depends('testAssertTrap508')]
    public function testAssertTrap509(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '136']]],
            text: 'uninitialized element',
            line: 1767,
        );
    }

    #[Depends('testAssertTrap509')]
    public function testAssertTrap510(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '137']]],
            text: 'uninitialized element',
            line: 1768,
        );
    }

    #[Depends('testAssertTrap510')]
    public function testAssertTrap511(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '138']]],
            text: 'uninitialized element',
            line: 1769,
        );
    }

    #[Depends('testAssertTrap511')]
    public function testAssertTrap512(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '139']]],
            text: 'uninitialized element',
            line: 1770,
        );
    }

    #[Depends('testAssertTrap512')]
    public function testAssertTrap513(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '140']]],
            text: 'uninitialized element',
            line: 1771,
        );
    }

    #[Depends('testAssertTrap513')]
    public function testAssertTrap514(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '141']]],
            text: 'uninitialized element',
            line: 1772,
        );
    }

    #[Depends('testAssertTrap514')]
    public function testAssertTrap515(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '142']]],
            text: 'uninitialized element',
            line: 1773,
        );
    }

    #[Depends('testAssertTrap515')]
    public function testAssertTrap516(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '143']]],
            text: 'uninitialized element',
            line: 1774,
        );
    }

    #[Depends('testAssertTrap516')]
    public function testAssertTrap517(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '144']]],
            text: 'uninitialized element',
            line: 1775,
        );
    }

    #[Depends('testAssertTrap517')]
    public function testAssertTrap518(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '145']]],
            text: 'uninitialized element',
            line: 1776,
        );
    }

    #[Depends('testAssertTrap518')]
    public function testAssertTrap519(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '146']]],
            text: 'uninitialized element',
            line: 1777,
        );
    }

    #[Depends('testAssertTrap519')]
    public function testAssertTrap520(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '147']]],
            text: 'uninitialized element',
            line: 1778,
        );
    }

    #[Depends('testAssertTrap520')]
    public function testAssertTrap521(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '148']]],
            text: 'uninitialized element',
            line: 1779,
        );
    }

    #[Depends('testAssertTrap521')]
    public function testAssertTrap522(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '149']]],
            text: 'uninitialized element',
            line: 1780,
        );
    }

    #[Depends('testAssertTrap522')]
    public function testAssertTrap523(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '150']]],
            text: 'uninitialized element',
            line: 1781,
        );
    }

    #[Depends('testAssertTrap523')]
    public function testAssertTrap524(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '151']]],
            text: 'uninitialized element',
            line: 1782,
        );
    }

    #[Depends('testAssertTrap524')]
    public function testAssertTrap525(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '152']]],
            text: 'uninitialized element',
            line: 1783,
        );
    }

    #[Depends('testAssertTrap525')]
    public function testAssertTrap526(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '153']]],
            text: 'uninitialized element',
            line: 1784,
        );
    }

    #[Depends('testAssertTrap526')]
    public function testAssertTrap527(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '154']]],
            text: 'uninitialized element',
            line: 1785,
        );
    }

    #[Depends('testAssertTrap527')]
    public function testAssertTrap528(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '155']]],
            text: 'uninitialized element',
            line: 1786,
        );
    }

    #[Depends('testAssertTrap528')]
    public function testAssertTrap529(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '156']]],
            text: 'uninitialized element',
            line: 1787,
        );
    }

    #[Depends('testAssertTrap529')]
    public function testAssertTrap530(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '157']]],
            text: 'uninitialized element',
            line: 1788,
        );
    }

    #[Depends('testAssertTrap530')]
    public function testAssertTrap531(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '158']]],
            text: 'uninitialized element',
            line: 1789,
        );
    }

    #[Depends('testAssertTrap531')]
    public function testAssertTrap532(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '159']]],
            text: 'uninitialized element',
            line: 1790,
        );
    }

    #[Depends('testAssertTrap532')]
    public function testModule533(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.98.wasm',
            name: null,
            line: 1792,
        );
    }

    #[Depends('testModule533')]
    public function testAssertTrap534(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '97'], ['type' => 'i32', 'value' => '31']]],
            text: 'out of bounds table access',
            line: 1820,
        );
    }

    #[Depends('testAssertTrap534')]
    public function testAssertTrap535(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1821,
        );
    }

    #[Depends('testAssertTrap535')]
    public function testAssertTrap536(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1822,
        );
    }

    #[Depends('testAssertTrap536')]
    public function testAssertTrap537(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 1823,
        );
    }

    #[Depends('testAssertTrap537')]
    public function testAssertTrap538(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '3']]],
            text: 'uninitialized element',
            line: 1824,
        );
    }

    #[Depends('testAssertTrap538')]
    public function testAssertTrap539(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '4']]],
            text: 'uninitialized element',
            line: 1825,
        );
    }

    #[Depends('testAssertTrap539')]
    public function testAssertTrap540(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '5']]],
            text: 'uninitialized element',
            line: 1826,
        );
    }

    #[Depends('testAssertTrap540')]
    public function testAssertTrap541(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 1827,
        );
    }

    #[Depends('testAssertTrap541')]
    public function testAssertTrap542(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1828,
        );
    }

    #[Depends('testAssertTrap542')]
    public function testAssertTrap543(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1829,
        );
    }

    #[Depends('testAssertTrap543')]
    public function testAssertTrap544(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1830,
        );
    }

    #[Depends('testAssertTrap544')]
    public function testAssertTrap545(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1831,
        );
    }

    #[Depends('testAssertTrap545')]
    public function testAssertTrap546(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 1832,
        );
    }

    #[Depends('testAssertTrap546')]
    public function testAssertTrap547(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '12']]],
            text: 'uninitialized element',
            line: 1833,
        );
    }

    #[Depends('testAssertTrap547')]
    public function testAssertTrap548(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 1834,
        );
    }

    #[Depends('testAssertTrap548')]
    public function testAssertTrap549(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '14']]],
            text: 'uninitialized element',
            line: 1835,
        );
    }

    #[Depends('testAssertTrap549')]
    public function testAssertTrap550(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 1836,
        );
    }

    #[Depends('testAssertTrap550')]
    public function testAssertTrap551(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 1837,
        );
    }

    #[Depends('testAssertTrap551')]
    public function testAssertTrap552(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1838,
        );
    }

    #[Depends('testAssertTrap552')]
    public function testAssertTrap553(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1839,
        );
    }

    #[Depends('testAssertTrap553')]
    public function testAssertTrap554(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1840,
        );
    }

    #[Depends('testAssertTrap554')]
    public function testAssertTrap555(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1841,
        );
    }

    #[Depends('testAssertTrap555')]
    public function testAssertTrap556(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1842,
        );
    }

    #[Depends('testAssertTrap556')]
    public function testAssertTrap557(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1843,
        );
    }

    #[Depends('testAssertTrap557')]
    public function testAssertTrap558(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1844,
        );
    }

    #[Depends('testAssertTrap558')]
    public function testAssertTrap559(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1845,
        );
    }

    #[Depends('testAssertTrap559')]
    public function testAssertTrap560(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 1846,
        );
    }

    #[Depends('testAssertTrap560')]
    public function testAssertTrap561(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 1847,
        );
    }

    #[Depends('testAssertTrap561')]
    public function testAssertTrap562(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1848,
        );
    }

    #[Depends('testAssertTrap562')]
    public function testAssertTrap563(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1849,
        );
    }

    #[Depends('testAssertTrap563')]
    public function testAssertTrap564(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1850,
        );
    }

    #[Depends('testAssertTrap564')]
    public function testAssertTrap565(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '30']]],
            text: 'uninitialized element',
            line: 1851,
        );
    }

    #[Depends('testAssertTrap565')]
    public function testAssertTrap566(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '31']]],
            text: 'uninitialized element',
            line: 1852,
        );
    }

    #[Depends('testAssertTrap566')]
    public function testAssertTrap567(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '32']]],
            text: 'uninitialized element',
            line: 1853,
        );
    }

    #[Depends('testAssertTrap567')]
    public function testAssertTrap568(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '33']]],
            text: 'uninitialized element',
            line: 1854,
        );
    }

    #[Depends('testAssertTrap568')]
    public function testAssertTrap569(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '34']]],
            text: 'uninitialized element',
            line: 1855,
        );
    }

    #[Depends('testAssertTrap569')]
    public function testAssertTrap570(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '35']]],
            text: 'uninitialized element',
            line: 1856,
        );
    }

    #[Depends('testAssertTrap570')]
    public function testAssertTrap571(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '36']]],
            text: 'uninitialized element',
            line: 1857,
        );
    }

    #[Depends('testAssertTrap571')]
    public function testAssertTrap572(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '37']]],
            text: 'uninitialized element',
            line: 1858,
        );
    }

    #[Depends('testAssertTrap572')]
    public function testAssertTrap573(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '38']]],
            text: 'uninitialized element',
            line: 1859,
        );
    }

    #[Depends('testAssertTrap573')]
    public function testAssertTrap574(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '39']]],
            text: 'uninitialized element',
            line: 1860,
        );
    }

    #[Depends('testAssertTrap574')]
    public function testAssertTrap575(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '40']]],
            text: 'uninitialized element',
            line: 1861,
        );
    }

    #[Depends('testAssertTrap575')]
    public function testAssertTrap576(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '41']]],
            text: 'uninitialized element',
            line: 1862,
        );
    }

    #[Depends('testAssertTrap576')]
    public function testAssertTrap577(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '42']]],
            text: 'uninitialized element',
            line: 1863,
        );
    }

    #[Depends('testAssertTrap577')]
    public function testAssertTrap578(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '43']]],
            text: 'uninitialized element',
            line: 1864,
        );
    }

    #[Depends('testAssertTrap578')]
    public function testAssertTrap579(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '44']]],
            text: 'uninitialized element',
            line: 1865,
        );
    }

    #[Depends('testAssertTrap579')]
    public function testAssertTrap580(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '45']]],
            text: 'uninitialized element',
            line: 1866,
        );
    }

    #[Depends('testAssertTrap580')]
    public function testAssertTrap581(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '46']]],
            text: 'uninitialized element',
            line: 1867,
        );
    }

    #[Depends('testAssertTrap581')]
    public function testAssertTrap582(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '47']]],
            text: 'uninitialized element',
            line: 1868,
        );
    }

    #[Depends('testAssertTrap582')]
    public function testAssertTrap583(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '48']]],
            text: 'uninitialized element',
            line: 1869,
        );
    }

    #[Depends('testAssertTrap583')]
    public function testAssertTrap584(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '49']]],
            text: 'uninitialized element',
            line: 1870,
        );
    }

    #[Depends('testAssertTrap584')]
    public function testAssertTrap585(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '50']]],
            text: 'uninitialized element',
            line: 1871,
        );
    }

    #[Depends('testAssertTrap585')]
    public function testAssertTrap586(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '51']]],
            text: 'uninitialized element',
            line: 1872,
        );
    }

    #[Depends('testAssertTrap586')]
    public function testAssertTrap587(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '52']]],
            text: 'uninitialized element',
            line: 1873,
        );
    }

    #[Depends('testAssertTrap587')]
    public function testAssertTrap588(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '53']]],
            text: 'uninitialized element',
            line: 1874,
        );
    }

    #[Depends('testAssertTrap588')]
    public function testAssertTrap589(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '54']]],
            text: 'uninitialized element',
            line: 1875,
        );
    }

    #[Depends('testAssertTrap589')]
    public function testAssertTrap590(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '55']]],
            text: 'uninitialized element',
            line: 1876,
        );
    }

    #[Depends('testAssertTrap590')]
    public function testAssertTrap591(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '56']]],
            text: 'uninitialized element',
            line: 1877,
        );
    }

    #[Depends('testAssertTrap591')]
    public function testAssertTrap592(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '57']]],
            text: 'uninitialized element',
            line: 1878,
        );
    }

    #[Depends('testAssertTrap592')]
    public function testAssertTrap593(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '58']]],
            text: 'uninitialized element',
            line: 1879,
        );
    }

    #[Depends('testAssertTrap593')]
    public function testAssertTrap594(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '59']]],
            text: 'uninitialized element',
            line: 1880,
        );
    }

    #[Depends('testAssertTrap594')]
    public function testAssertTrap595(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '60']]],
            text: 'uninitialized element',
            line: 1881,
        );
    }

    #[Depends('testAssertTrap595')]
    public function testAssertTrap596(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '61']]],
            text: 'uninitialized element',
            line: 1882,
        );
    }

    #[Depends('testAssertTrap596')]
    public function testAssertTrap597(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '62']]],
            text: 'uninitialized element',
            line: 1883,
        );
    }

    #[Depends('testAssertTrap597')]
    public function testAssertTrap598(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '63']]],
            text: 'uninitialized element',
            line: 1884,
        );
    }

    #[Depends('testAssertTrap598')]
    public function testAssertTrap599(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '64']]],
            text: 'uninitialized element',
            line: 1885,
        );
    }

    #[Depends('testAssertTrap599')]
    public function testAssertTrap600(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '65']]],
            text: 'uninitialized element',
            line: 1886,
        );
    }

    #[Depends('testAssertTrap600')]
    public function testAssertTrap601(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '66']]],
            text: 'uninitialized element',
            line: 1887,
        );
    }

    #[Depends('testAssertTrap601')]
    public function testAssertTrap602(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '67']]],
            text: 'uninitialized element',
            line: 1888,
        );
    }

    #[Depends('testAssertTrap602')]
    public function testAssertTrap603(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '68']]],
            text: 'uninitialized element',
            line: 1889,
        );
    }

    #[Depends('testAssertTrap603')]
    public function testAssertTrap604(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '69']]],
            text: 'uninitialized element',
            line: 1890,
        );
    }

    #[Depends('testAssertTrap604')]
    public function testAssertTrap605(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '70']]],
            text: 'uninitialized element',
            line: 1891,
        );
    }

    #[Depends('testAssertTrap605')]
    public function testAssertTrap606(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '71']]],
            text: 'uninitialized element',
            line: 1892,
        );
    }

    #[Depends('testAssertTrap606')]
    public function testAssertTrap607(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '72']]],
            text: 'uninitialized element',
            line: 1893,
        );
    }

    #[Depends('testAssertTrap607')]
    public function testAssertTrap608(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '73']]],
            text: 'uninitialized element',
            line: 1894,
        );
    }

    #[Depends('testAssertTrap608')]
    public function testAssertTrap609(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '74']]],
            text: 'uninitialized element',
            line: 1895,
        );
    }

    #[Depends('testAssertTrap609')]
    public function testAssertTrap610(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '75']]],
            text: 'uninitialized element',
            line: 1896,
        );
    }

    #[Depends('testAssertTrap610')]
    public function testAssertTrap611(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '76']]],
            text: 'uninitialized element',
            line: 1897,
        );
    }

    #[Depends('testAssertTrap611')]
    public function testAssertTrap612(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '77']]],
            text: 'uninitialized element',
            line: 1898,
        );
    }

    #[Depends('testAssertTrap612')]
    public function testAssertTrap613(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '78']]],
            text: 'uninitialized element',
            line: 1899,
        );
    }

    #[Depends('testAssertTrap613')]
    public function testAssertTrap614(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '79']]],
            text: 'uninitialized element',
            line: 1900,
        );
    }

    #[Depends('testAssertTrap614')]
    public function testAssertTrap615(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '80']]],
            text: 'uninitialized element',
            line: 1901,
        );
    }

    #[Depends('testAssertTrap615')]
    public function testAssertTrap616(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '81']]],
            text: 'uninitialized element',
            line: 1902,
        );
    }

    #[Depends('testAssertTrap616')]
    public function testAssertTrap617(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '82']]],
            text: 'uninitialized element',
            line: 1903,
        );
    }

    #[Depends('testAssertTrap617')]
    public function testAssertTrap618(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '83']]],
            text: 'uninitialized element',
            line: 1904,
        );
    }

    #[Depends('testAssertTrap618')]
    public function testAssertTrap619(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '84']]],
            text: 'uninitialized element',
            line: 1905,
        );
    }

    #[Depends('testAssertTrap619')]
    public function testAssertTrap620(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '85']]],
            text: 'uninitialized element',
            line: 1906,
        );
    }

    #[Depends('testAssertTrap620')]
    public function testAssertTrap621(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '86']]],
            text: 'uninitialized element',
            line: 1907,
        );
    }

    #[Depends('testAssertTrap621')]
    public function testAssertTrap622(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '87']]],
            text: 'uninitialized element',
            line: 1908,
        );
    }

    #[Depends('testAssertTrap622')]
    public function testAssertTrap623(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '88']]],
            text: 'uninitialized element',
            line: 1909,
        );
    }

    #[Depends('testAssertTrap623')]
    public function testAssertTrap624(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '89']]],
            text: 'uninitialized element',
            line: 1910,
        );
    }

    #[Depends('testAssertTrap624')]
    public function testAssertTrap625(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '90']]],
            text: 'uninitialized element',
            line: 1911,
        );
    }

    #[Depends('testAssertTrap625')]
    public function testAssertTrap626(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '91']]],
            text: 'uninitialized element',
            line: 1912,
        );
    }

    #[Depends('testAssertTrap626')]
    public function testAssertTrap627(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '92']]],
            text: 'uninitialized element',
            line: 1913,
        );
    }

    #[Depends('testAssertTrap627')]
    public function testAssertTrap628(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '93']]],
            text: 'uninitialized element',
            line: 1914,
        );
    }

    #[Depends('testAssertTrap628')]
    public function testAssertTrap629(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '94']]],
            text: 'uninitialized element',
            line: 1915,
        );
    }

    #[Depends('testAssertTrap629')]
    public function testAssertTrap630(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '95']]],
            text: 'uninitialized element',
            line: 1916,
        );
    }

    #[Depends('testAssertTrap630')]
    public function testAssertTrap631(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '96']]],
            text: 'uninitialized element',
            line: 1917,
        );
    }

    #[Depends('testAssertTrap631')]
    public function testAssertTrap632(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '97']]],
            text: 'uninitialized element',
            line: 1918,
        );
    }

    #[Depends('testAssertTrap632')]
    public function testAssertTrap633(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '98']]],
            text: 'uninitialized element',
            line: 1919,
        );
    }

    #[Depends('testAssertTrap633')]
    public function testAssertTrap634(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '99']]],
            text: 'uninitialized element',
            line: 1920,
        );
    }

    #[Depends('testAssertTrap634')]
    public function testAssertTrap635(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '100']]],
            text: 'uninitialized element',
            line: 1921,
        );
    }

    #[Depends('testAssertTrap635')]
    public function testAssertTrap636(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '101']]],
            text: 'uninitialized element',
            line: 1922,
        );
    }

    #[Depends('testAssertTrap636')]
    public function testAssertTrap637(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '102']]],
            text: 'uninitialized element',
            line: 1923,
        );
    }

    #[Depends('testAssertTrap637')]
    public function testAssertTrap638(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '103']]],
            text: 'uninitialized element',
            line: 1924,
        );
    }

    #[Depends('testAssertTrap638')]
    public function testAssertTrap639(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '104']]],
            text: 'uninitialized element',
            line: 1925,
        );
    }

    #[Depends('testAssertTrap639')]
    public function testAssertTrap640(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '105']]],
            text: 'uninitialized element',
            line: 1926,
        );
    }

    #[Depends('testAssertTrap640')]
    public function testAssertTrap641(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '106']]],
            text: 'uninitialized element',
            line: 1927,
        );
    }

    #[Depends('testAssertTrap641')]
    public function testAssertTrap642(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '107']]],
            text: 'uninitialized element',
            line: 1928,
        );
    }

    #[Depends('testAssertTrap642')]
    public function testAssertTrap643(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '108']]],
            text: 'uninitialized element',
            line: 1929,
        );
    }

    #[Depends('testAssertTrap643')]
    public function testAssertTrap644(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '109']]],
            text: 'uninitialized element',
            line: 1930,
        );
    }

    #[Depends('testAssertTrap644')]
    public function testAssertTrap645(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '110']]],
            text: 'uninitialized element',
            line: 1931,
        );
    }

    #[Depends('testAssertTrap645')]
    public function testAssertTrap646(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '111']]],
            text: 'uninitialized element',
            line: 1932,
        );
    }

    #[Depends('testAssertTrap646')]
    public function testAssertTrap647(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '112']]],
            text: 'uninitialized element',
            line: 1933,
        );
    }

    #[Depends('testAssertTrap647')]
    public function testAssertTrap648(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '113']]],
            text: 'uninitialized element',
            line: 1934,
        );
    }

    #[Depends('testAssertTrap648')]
    public function testAssertTrap649(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '114']]],
            text: 'uninitialized element',
            line: 1935,
        );
    }

    #[Depends('testAssertTrap649')]
    public function testAssertTrap650(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '115']]],
            text: 'uninitialized element',
            line: 1936,
        );
    }

    #[Depends('testAssertTrap650')]
    public function testAssertTrap651(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '116']]],
            text: 'uninitialized element',
            line: 1937,
        );
    }

    #[Depends('testAssertTrap651')]
    public function testAssertTrap652(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '117']]],
            text: 'uninitialized element',
            line: 1938,
        );
    }

    #[Depends('testAssertTrap652')]
    public function testAssertTrap653(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '118']]],
            text: 'uninitialized element',
            line: 1939,
        );
    }

    #[Depends('testAssertTrap653')]
    public function testAssertTrap654(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '119']]],
            text: 'uninitialized element',
            line: 1940,
        );
    }

    #[Depends('testAssertTrap654')]
    public function testAssertTrap655(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '120']]],
            text: 'uninitialized element',
            line: 1941,
        );
    }

    #[Depends('testAssertTrap655')]
    public function testAssertTrap656(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '121']]],
            text: 'uninitialized element',
            line: 1942,
        );
    }

    #[Depends('testAssertTrap656')]
    public function testAssertTrap657(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '122']]],
            text: 'uninitialized element',
            line: 1943,
        );
    }

    #[Depends('testAssertTrap657')]
    public function testAssertTrap658(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '123']]],
            text: 'uninitialized element',
            line: 1944,
        );
    }

    #[Depends('testAssertTrap658')]
    public function testAssertTrap659(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '124']]],
            text: 'uninitialized element',
            line: 1945,
        );
    }

    #[Depends('testAssertTrap659')]
    public function testAssertTrap660(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '125']]],
            text: 'uninitialized element',
            line: 1946,
        );
    }

    #[Depends('testAssertTrap660')]
    public function testAssertTrap661(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '126']]],
            text: 'uninitialized element',
            line: 1947,
        );
    }

    #[Depends('testAssertTrap661')]
    public function testAssertTrap662(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '127']]],
            text: 'uninitialized element',
            line: 1948,
        );
    }

    #[Depends('testAssertTrap662')]
    public function testAssertTrap663(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '128']]],
            text: 'uninitialized element',
            line: 1949,
        );
    }

    #[Depends('testAssertTrap663')]
    public function testAssertTrap664(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '129']]],
            text: 'uninitialized element',
            line: 1950,
        );
    }

    #[Depends('testAssertTrap664')]
    public function testAssertTrap665(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '130']]],
            text: 'uninitialized element',
            line: 1951,
        );
    }

    #[Depends('testAssertTrap665')]
    public function testAssertTrap666(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '131']]],
            text: 'uninitialized element',
            line: 1952,
        );
    }

    #[Depends('testAssertTrap666')]
    public function testAssertTrap667(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '132']]],
            text: 'uninitialized element',
            line: 1953,
        );
    }

    #[Depends('testAssertTrap667')]
    public function testAssertTrap668(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '133']]],
            text: 'uninitialized element',
            line: 1954,
        );
    }

    #[Depends('testAssertTrap668')]
    public function testAssertTrap669(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '134']]],
            text: 'uninitialized element',
            line: 1955,
        );
    }

    #[Depends('testAssertTrap669')]
    public function testAssertTrap670(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '135']]],
            text: 'uninitialized element',
            line: 1956,
        );
    }

    #[Depends('testAssertTrap670')]
    public function testAssertTrap671(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '136']]],
            text: 'uninitialized element',
            line: 1957,
        );
    }

    #[Depends('testAssertTrap671')]
    public function testAssertTrap672(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '137']]],
            text: 'uninitialized element',
            line: 1958,
        );
    }

    #[Depends('testAssertTrap672')]
    public function testAssertTrap673(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '138']]],
            text: 'uninitialized element',
            line: 1959,
        );
    }

    #[Depends('testAssertTrap673')]
    public function testAssertTrap674(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '139']]],
            text: 'uninitialized element',
            line: 1960,
        );
    }

    #[Depends('testAssertTrap674')]
    public function testAssertTrap675(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '140']]],
            text: 'uninitialized element',
            line: 1961,
        );
    }

    #[Depends('testAssertTrap675')]
    public function testAssertTrap676(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '141']]],
            text: 'uninitialized element',
            line: 1962,
        );
    }

    #[Depends('testAssertTrap676')]
    public function testAssertTrap677(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '142']]],
            text: 'uninitialized element',
            line: 1963,
        );
    }

    #[Depends('testAssertTrap677')]
    public function testAssertTrap678(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '143']]],
            text: 'uninitialized element',
            line: 1964,
        );
    }

    #[Depends('testAssertTrap678')]
    public function testAssertTrap679(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '144']]],
            text: 'uninitialized element',
            line: 1965,
        );
    }

    #[Depends('testAssertTrap679')]
    public function testAssertTrap680(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '145']]],
            text: 'uninitialized element',
            line: 1966,
        );
    }

    #[Depends('testAssertTrap680')]
    public function testAssertTrap681(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '146']]],
            text: 'uninitialized element',
            line: 1967,
        );
    }

    #[Depends('testAssertTrap681')]
    public function testAssertTrap682(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '147']]],
            text: 'uninitialized element',
            line: 1968,
        );
    }

    #[Depends('testAssertTrap682')]
    public function testAssertTrap683(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '148']]],
            text: 'uninitialized element',
            line: 1969,
        );
    }

    #[Depends('testAssertTrap683')]
    public function testAssertTrap684(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '149']]],
            text: 'uninitialized element',
            line: 1970,
        );
    }

    #[Depends('testAssertTrap684')]
    public function testAssertTrap685(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '150']]],
            text: 'uninitialized element',
            line: 1971,
        );
    }

    #[Depends('testAssertTrap685')]
    public function testAssertTrap686(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '151']]],
            text: 'uninitialized element',
            line: 1972,
        );
    }

    #[Depends('testAssertTrap686')]
    public function testAssertTrap687(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '152']]],
            text: 'uninitialized element',
            line: 1973,
        );
    }

    #[Depends('testAssertTrap687')]
    public function testAssertTrap688(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '153']]],
            text: 'uninitialized element',
            line: 1974,
        );
    }

    #[Depends('testAssertTrap688')]
    public function testAssertTrap689(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '154']]],
            text: 'uninitialized element',
            line: 1975,
        );
    }

    #[Depends('testAssertTrap689')]
    public function testAssertTrap690(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '155']]],
            text: 'uninitialized element',
            line: 1976,
        );
    }

    #[Depends('testAssertTrap690')]
    public function testAssertTrap691(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '156']]],
            text: 'uninitialized element',
            line: 1977,
        );
    }

    #[Depends('testAssertTrap691')]
    public function testAssertTrap692(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '157']]],
            text: 'uninitialized element',
            line: 1978,
        );
    }

    #[Depends('testAssertTrap692')]
    public function testAssertTrap693(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '158']]],
            text: 'uninitialized element',
            line: 1979,
        );
    }

    #[Depends('testAssertTrap693')]
    public function testAssertTrap694(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '159']]],
            text: 'uninitialized element',
            line: 1980,
        );
    }

    #[Depends('testAssertTrap694')]
    public function testModule695(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.99.wasm',
            name: null,
            line: 1982,
        );
    }

    #[Depends('testModule695')]
    public function testAssertTrap696(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '48'], ['type' => 'i32', 'value' => '4294967280']]],
            text: 'out of bounds table access',
            line: 2010,
        );
    }

    #[Depends('testAssertTrap696')]
    public function testAssertTrap697(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 2011,
        );
    }

    #[Depends('testAssertTrap697')]
    public function testAssertTrap698(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 2012,
        );
    }

    #[Depends('testAssertTrap698')]
    public function testAssertTrap699(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 2013,
        );
    }

    #[Depends('testAssertTrap699')]
    public function testAssertTrap700(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '3']]],
            text: 'uninitialized element',
            line: 2014,
        );
    }

    #[Depends('testAssertTrap700')]
    public function testAssertTrap701(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '4']]],
            text: 'uninitialized element',
            line: 2015,
        );
    }

    #[Depends('testAssertTrap701')]
    public function testAssertTrap702(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '5']]],
            text: 'uninitialized element',
            line: 2016,
        );
    }

    #[Depends('testAssertTrap702')]
    public function testAssertTrap703(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 2017,
        );
    }

    #[Depends('testAssertTrap703')]
    public function testAssertTrap704(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 2018,
        );
    }

    #[Depends('testAssertTrap704')]
    public function testAssertTrap705(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 2019,
        );
    }

    #[Depends('testAssertTrap705')]
    public function testAssertTrap706(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 2020,
        );
    }

    #[Depends('testAssertTrap706')]
    public function testAssertTrap707(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 2021,
        );
    }

    #[Depends('testAssertTrap707')]
    public function testAssertTrap708(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 2022,
        );
    }

    #[Depends('testAssertTrap708')]
    public function testAssertTrap709(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '12']]],
            text: 'uninitialized element',
            line: 2023,
        );
    }

    #[Depends('testAssertTrap709')]
    public function testAssertTrap710(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 2024,
        );
    }

    #[Depends('testAssertTrap710')]
    public function testAssertTrap711(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '14']]],
            text: 'uninitialized element',
            line: 2025,
        );
    }

    #[Depends('testAssertTrap711')]
    public function testAssertTrap712(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 2026,
        );
    }

    #[Depends('testAssertTrap712')]
    public function testAssertTrap713(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 2027,
        );
    }

    #[Depends('testAssertTrap713')]
    public function testAssertTrap714(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 2028,
        );
    }

    #[Depends('testAssertTrap714')]
    public function testAssertTrap715(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 2029,
        );
    }

    #[Depends('testAssertTrap715')]
    public function testAssertTrap716(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 2030,
        );
    }

    #[Depends('testAssertTrap716')]
    public function testAssertTrap717(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 2031,
        );
    }

    #[Depends('testAssertTrap717')]
    public function testAssertTrap718(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 2032,
        );
    }

    #[Depends('testAssertTrap718')]
    public function testAssertTrap719(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 2033,
        );
    }

    #[Depends('testAssertTrap719')]
    public function testAssertTrap720(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 2034,
        );
    }

    #[Depends('testAssertTrap720')]
    public function testAssertTrap721(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 2035,
        );
    }

    #[Depends('testAssertTrap721')]
    public function testAssertTrap722(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 2036,
        );
    }

    #[Depends('testAssertTrap722')]
    public function testAssertTrap723(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 2037,
        );
    }

    #[Depends('testAssertTrap723')]
    public function testAssertTrap724(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 2038,
        );
    }

    #[Depends('testAssertTrap724')]
    public function testAssertTrap725(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 2039,
        );
    }

    #[Depends('testAssertTrap725')]
    public function testAssertTrap726(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 2040,
        );
    }

    #[Depends('testAssertTrap726')]
    public function testAssertTrap727(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '30']]],
            text: 'uninitialized element',
            line: 2041,
        );
    }

    #[Depends('testAssertTrap727')]
    public function testAssertTrap728(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '31']]],
            text: 'uninitialized element',
            line: 2042,
        );
    }

    #[Depends('testAssertTrap728')]
    public function testAssertTrap729(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '32']]],
            text: 'uninitialized element',
            line: 2043,
        );
    }

    #[Depends('testAssertTrap729')]
    public function testAssertTrap730(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '33']]],
            text: 'uninitialized element',
            line: 2044,
        );
    }

    #[Depends('testAssertTrap730')]
    public function testAssertTrap731(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '34']]],
            text: 'uninitialized element',
            line: 2045,
        );
    }

    #[Depends('testAssertTrap731')]
    public function testAssertTrap732(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '35']]],
            text: 'uninitialized element',
            line: 2046,
        );
    }

    #[Depends('testAssertTrap732')]
    public function testAssertTrap733(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '36']]],
            text: 'uninitialized element',
            line: 2047,
        );
    }

    #[Depends('testAssertTrap733')]
    public function testAssertTrap734(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '37']]],
            text: 'uninitialized element',
            line: 2048,
        );
    }

    #[Depends('testAssertTrap734')]
    public function testAssertTrap735(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '38']]],
            text: 'uninitialized element',
            line: 2049,
        );
    }

    #[Depends('testAssertTrap735')]
    public function testAssertTrap736(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '39']]],
            text: 'uninitialized element',
            line: 2050,
        );
    }

    #[Depends('testAssertTrap736')]
    public function testAssertTrap737(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '40']]],
            text: 'uninitialized element',
            line: 2051,
        );
    }

    #[Depends('testAssertTrap737')]
    public function testAssertTrap738(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '41']]],
            text: 'uninitialized element',
            line: 2052,
        );
    }

    #[Depends('testAssertTrap738')]
    public function testAssertTrap739(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '42']]],
            text: 'uninitialized element',
            line: 2053,
        );
    }

    #[Depends('testAssertTrap739')]
    public function testAssertTrap740(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '43']]],
            text: 'uninitialized element',
            line: 2054,
        );
    }

    #[Depends('testAssertTrap740')]
    public function testAssertTrap741(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '44']]],
            text: 'uninitialized element',
            line: 2055,
        );
    }

    #[Depends('testAssertTrap741')]
    public function testAssertTrap742(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '45']]],
            text: 'uninitialized element',
            line: 2056,
        );
    }

    #[Depends('testAssertTrap742')]
    public function testAssertTrap743(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '46']]],
            text: 'uninitialized element',
            line: 2057,
        );
    }

    #[Depends('testAssertTrap743')]
    public function testAssertTrap744(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '47']]],
            text: 'uninitialized element',
            line: 2058,
        );
    }

    #[Depends('testAssertTrap744')]
    public function testAssertTrap745(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '48']]],
            text: 'uninitialized element',
            line: 2059,
        );
    }

    #[Depends('testAssertTrap745')]
    public function testAssertTrap746(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '49']]],
            text: 'uninitialized element',
            line: 2060,
        );
    }

    #[Depends('testAssertTrap746')]
    public function testAssertTrap747(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '50']]],
            text: 'uninitialized element',
            line: 2061,
        );
    }

    #[Depends('testAssertTrap747')]
    public function testAssertTrap748(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '51']]],
            text: 'uninitialized element',
            line: 2062,
        );
    }

    #[Depends('testAssertTrap748')]
    public function testAssertTrap749(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '52']]],
            text: 'uninitialized element',
            line: 2063,
        );
    }

    #[Depends('testAssertTrap749')]
    public function testAssertTrap750(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '53']]],
            text: 'uninitialized element',
            line: 2064,
        );
    }

    #[Depends('testAssertTrap750')]
    public function testAssertTrap751(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '54']]],
            text: 'uninitialized element',
            line: 2065,
        );
    }

    #[Depends('testAssertTrap751')]
    public function testAssertTrap752(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '55']]],
            text: 'uninitialized element',
            line: 2066,
        );
    }

    #[Depends('testAssertTrap752')]
    public function testAssertTrap753(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '56']]],
            text: 'uninitialized element',
            line: 2067,
        );
    }

    #[Depends('testAssertTrap753')]
    public function testAssertTrap754(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '57']]],
            text: 'uninitialized element',
            line: 2068,
        );
    }

    #[Depends('testAssertTrap754')]
    public function testAssertTrap755(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '58']]],
            text: 'uninitialized element',
            line: 2069,
        );
    }

    #[Depends('testAssertTrap755')]
    public function testAssertTrap756(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '59']]],
            text: 'uninitialized element',
            line: 2070,
        );
    }

    #[Depends('testAssertTrap756')]
    public function testAssertTrap757(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '60']]],
            text: 'uninitialized element',
            line: 2071,
        );
    }

    #[Depends('testAssertTrap757')]
    public function testAssertTrap758(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '61']]],
            text: 'uninitialized element',
            line: 2072,
        );
    }

    #[Depends('testAssertTrap758')]
    public function testAssertTrap759(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '62']]],
            text: 'uninitialized element',
            line: 2073,
        );
    }

    #[Depends('testAssertTrap759')]
    public function testAssertTrap760(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '63']]],
            text: 'uninitialized element',
            line: 2074,
        );
    }

    #[Depends('testAssertTrap760')]
    public function testModule761(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.100.wasm',
            name: null,
            line: 2076,
        );
    }

    #[Depends('testModule761')]
    public function testAssertTrap762(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '4294967292']]],
            text: 'out of bounds table access',
            line: 2104,
        );
    }

    #[Depends('testAssertTrap762')]
    public function testAssertTrap763(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 2105,
        );
    }

    #[Depends('testAssertTrap763')]
    public function testAssertTrap764(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 2106,
        );
    }

    #[Depends('testAssertTrap764')]
    public function testAssertTrap765(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 2107,
        );
    }

    #[Depends('testAssertTrap765')]
    public function testAssertTrap766(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '3']]],
            text: 'uninitialized element',
            line: 2108,
        );
    }

    #[Depends('testAssertTrap766')]
    public function testAssertTrap767(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '4']]],
            text: 'uninitialized element',
            line: 2109,
        );
    }

    #[Depends('testAssertTrap767')]
    public function testAssertTrap768(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '5']]],
            text: 'uninitialized element',
            line: 2110,
        );
    }

    #[Depends('testAssertTrap768')]
    public function testAssertTrap769(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 2111,
        );
    }

    #[Depends('testAssertTrap769')]
    public function testAssertTrap770(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 2112,
        );
    }

    #[Depends('testAssertTrap770')]
    public function testAssertTrap771(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 2113,
        );
    }

    #[Depends('testAssertTrap771')]
    public function testAssertTrap772(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 2114,
        );
    }

    #[Depends('testAssertTrap772')]
    public function testAssertTrap773(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 2115,
        );
    }

    #[Depends('testAssertTrap773')]
    public function testAssertTrap774(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 2116,
        );
    }

    #[Depends('testAssertTrap774')]
    public function testAssertTrap775(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '12']]],
            text: 'uninitialized element',
            line: 2117,
        );
    }

    #[Depends('testAssertTrap775')]
    public function testAssertTrap776(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 2118,
        );
    }

    #[Depends('testAssertTrap776')]
    public function testAssertTrap777(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '14']]],
            text: 'uninitialized element',
            line: 2119,
        );
    }

    #[Depends('testAssertTrap777')]
    public function testAssertTrap778(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 2120,
        );
    }

    #[Depends('testAssertTrap778')]
    public function testModule779(): void
    {
        $this->runModuleCommand(
            filename: 'table_init.101.wasm',
            name: null,
            line: 2122,
        );
    }
}
