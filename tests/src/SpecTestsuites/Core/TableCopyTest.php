<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class TableCopyTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.0.wasm',
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
            filename: 'table_copy.1.wasm',
            name: null,
            line: 15,
        );
    }

    #[Depends('testModule2')]
    public function testAction3(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 45,
        );
    }

    #[Depends('testAction3')]
    public function testAssertTrap4(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 46,
        );
    }

    #[Depends('testAssertTrap4')]
    public function testAssertTrap5(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 47,
        );
    }

    #[Depends('testAssertTrap5')]
    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 48,
        );
    }

    #[Depends('testAssertReturn6')]
    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 49,
        );
    }

    #[Depends('testAssertReturn7')]
    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 50,
        );
    }

    #[Depends('testAssertReturn8')]
    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 51,
        );
    }

    #[Depends('testAssertReturn9')]
    public function testAssertTrap10(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 52,
        );
    }

    #[Depends('testAssertTrap10')]
    public function testAssertTrap11(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 53,
        );
    }

    #[Depends('testAssertTrap11')]
    public function testAssertTrap12(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 54,
        );
    }

    #[Depends('testAssertTrap12')]
    public function testAssertTrap13(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 55,
        );
    }

    #[Depends('testAssertTrap13')]
    public function testAssertTrap14(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 56,
        );
    }

    #[Depends('testAssertTrap14')]
    public function testAssertTrap15(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 57,
        );
    }

    #[Depends('testAssertTrap15')]
    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 58,
        );
    }

    #[Depends('testAssertReturn16')]
    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 59,
        );
    }

    #[Depends('testAssertReturn17')]
    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 60,
        );
    }

    #[Depends('testAssertReturn18')]
    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 61,
        );
    }

    #[Depends('testAssertReturn19')]
    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 62,
        );
    }

    #[Depends('testAssertReturn20')]
    public function testAssertTrap21(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 63,
        );
    }

    #[Depends('testAssertTrap21')]
    public function testAssertTrap22(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 64,
        );
    }

    #[Depends('testAssertTrap22')]
    public function testAssertTrap23(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 65,
        );
    }

    #[Depends('testAssertTrap23')]
    public function testAssertTrap24(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 66,
        );
    }

    #[Depends('testAssertTrap24')]
    public function testAssertTrap25(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 67,
        );
    }

    #[Depends('testAssertTrap25')]
    public function testAssertTrap26(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 68,
        );
    }

    #[Depends('testAssertTrap26')]
    public function testAssertTrap27(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 69,
        );
    }

    #[Depends('testAssertTrap27')]
    public function testAssertTrap28(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 70,
        );
    }

    #[Depends('testAssertTrap28')]
    public function testAssertTrap29(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 71,
        );
    }

    #[Depends('testAssertTrap29')]
    public function testAssertTrap30(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 72,
        );
    }

    #[Depends('testAssertTrap30')]
    public function testAssertTrap31(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 73,
        );
    }

    #[Depends('testAssertTrap31')]
    public function testAssertTrap32(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 74,
        );
    }

    #[Depends('testAssertTrap32')]
    public function testAssertTrap33(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 75,
        );
    }

    #[Depends('testAssertTrap33')]
    public function testAssertTrap34(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 76,
        );
    }

    #[Depends('testAssertTrap34')]
    public function testAssertTrap35(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 77,
        );
    }

    #[Depends('testAssertTrap35')]
    public function testAssertTrap36(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 78,
        );
    }

    #[Depends('testAssertTrap36')]
    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 79,
        );
    }

    #[Depends('testAssertReturn37')]
    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 80,
        );
    }

    #[Depends('testAssertReturn38')]
    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 81,
        );
    }

    #[Depends('testAssertReturn39')]
    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 82,
        );
    }

    #[Depends('testAssertReturn40')]
    public function testAssertTrap41(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 83,
        );
    }

    #[Depends('testAssertTrap41')]
    public function testAssertTrap42(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 84,
        );
    }

    #[Depends('testAssertTrap42')]
    public function testAssertTrap43(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 85,
        );
    }

    #[Depends('testAssertTrap43')]
    public function testAssertTrap44(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 86,
        );
    }

    #[Depends('testAssertTrap44')]
    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 87,
        );
    }

    #[Depends('testAssertReturn45')]
    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 88,
        );
    }

    #[Depends('testAssertReturn46')]
    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 89,
        );
    }

    #[Depends('testAssertReturn47')]
    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 90,
        );
    }

    #[Depends('testAssertReturn48')]
    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 91,
        );
    }

    #[Depends('testAssertReturn49')]
    public function testAssertTrap50(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 92,
        );
    }

    #[Depends('testAssertTrap50')]
    public function testAssertTrap51(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 93,
        );
    }

    #[Depends('testAssertTrap51')]
    public function testAssertTrap52(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 94,
        );
    }

    #[Depends('testAssertTrap52')]
    public function testAssertTrap53(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 95,
        );
    }

    #[Depends('testAssertTrap53')]
    public function testAssertTrap54(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 96,
        );
    }

    #[Depends('testAssertTrap54')]
    public function testAssertTrap55(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 97,
        );
    }

    #[Depends('testAssertTrap55')]
    public function testAssertTrap56(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 98,
        );
    }

    #[Depends('testAssertTrap56')]
    public function testAssertTrap57(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 99,
        );
    }

    #[Depends('testAssertTrap57')]
    public function testAssertTrap58(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 100,
        );
    }

    #[Depends('testAssertTrap58')]
    public function testAssertTrap59(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 101,
        );
    }

    #[Depends('testAssertTrap59')]
    public function testAssertTrap60(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 102,
        );
    }

    #[Depends('testAssertTrap60')]
    public function testAssertTrap61(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 103,
        );
    }

    #[Depends('testAssertTrap61')]
    public function testAssertTrap62(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 104,
        );
    }

    #[Depends('testAssertTrap62')]
    public function testAssertTrap63(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 105,
        );
    }

    #[Depends('testAssertTrap63')]
    public function testModule64(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.2.wasm',
            name: null,
            line: 107,
        );
    }

    #[Depends('testModule64')]
    public function testAction65(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 137,
        );
    }

    #[Depends('testAction65')]
    public function testAssertTrap66(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 138,
        );
    }

    #[Depends('testAssertTrap66')]
    public function testAssertTrap67(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 139,
        );
    }

    #[Depends('testAssertTrap67')]
    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 140,
        );
    }

    #[Depends('testAssertReturn68')]
    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 141,
        );
    }

    #[Depends('testAssertReturn69')]
    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 142,
        );
    }

    #[Depends('testAssertReturn70')]
    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 143,
        );
    }

    #[Depends('testAssertReturn71')]
    public function testAssertTrap72(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 144,
        );
    }

    #[Depends('testAssertTrap72')]
    public function testAssertTrap73(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 145,
        );
    }

    #[Depends('testAssertTrap73')]
    public function testAssertTrap74(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 146,
        );
    }

    #[Depends('testAssertTrap74')]
    public function testAssertTrap75(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 147,
        );
    }

    #[Depends('testAssertTrap75')]
    public function testAssertTrap76(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 148,
        );
    }

    #[Depends('testAssertTrap76')]
    public function testAssertTrap77(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 149,
        );
    }

    #[Depends('testAssertTrap77')]
    public function testAssertReturn78(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 150,
        );
    }

    #[Depends('testAssertReturn78')]
    public function testAssertReturn79(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 151,
        );
    }

    #[Depends('testAssertReturn79')]
    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 152,
        );
    }

    #[Depends('testAssertReturn80')]
    public function testAssertReturn81(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 153,
        );
    }

    #[Depends('testAssertReturn81')]
    public function testAssertReturn82(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 154,
        );
    }

    #[Depends('testAssertReturn82')]
    public function testAssertTrap83(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 155,
        );
    }

    #[Depends('testAssertTrap83')]
    public function testAssertTrap84(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 156,
        );
    }

    #[Depends('testAssertTrap84')]
    public function testAssertTrap85(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 157,
        );
    }

    #[Depends('testAssertTrap85')]
    public function testAssertTrap86(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 158,
        );
    }

    #[Depends('testAssertTrap86')]
    public function testAssertTrap87(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 159,
        );
    }

    #[Depends('testAssertTrap87')]
    public function testAssertTrap88(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 160,
        );
    }

    #[Depends('testAssertTrap88')]
    public function testAssertTrap89(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 161,
        );
    }

    #[Depends('testAssertTrap89')]
    public function testAssertTrap90(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 162,
        );
    }

    #[Depends('testAssertTrap90')]
    public function testAssertTrap91(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 163,
        );
    }

    #[Depends('testAssertTrap91')]
    public function testAssertTrap92(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 164,
        );
    }

    #[Depends('testAssertTrap92')]
    public function testAssertTrap93(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 165,
        );
    }

    #[Depends('testAssertTrap93')]
    public function testAssertTrap94(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 166,
        );
    }

    #[Depends('testAssertTrap94')]
    public function testAssertTrap95(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 167,
        );
    }

    #[Depends('testAssertTrap95')]
    public function testAssertTrap96(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 168,
        );
    }

    #[Depends('testAssertTrap96')]
    public function testAssertTrap97(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 169,
        );
    }

    #[Depends('testAssertTrap97')]
    public function testAssertTrap98(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 170,
        );
    }

    #[Depends('testAssertTrap98')]
    public function testAssertReturn99(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 171,
        );
    }

    #[Depends('testAssertReturn99')]
    public function testAssertReturn100(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 172,
        );
    }

    #[Depends('testAssertReturn100')]
    public function testAssertReturn101(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 173,
        );
    }

    #[Depends('testAssertReturn101')]
    public function testAssertReturn102(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 174,
        );
    }

    #[Depends('testAssertReturn102')]
    public function testAssertTrap103(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 175,
        );
    }

    #[Depends('testAssertTrap103')]
    public function testAssertTrap104(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 176,
        );
    }

    #[Depends('testAssertTrap104')]
    public function testAssertTrap105(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 177,
        );
    }

    #[Depends('testAssertTrap105')]
    public function testAssertTrap106(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 178,
        );
    }

    #[Depends('testAssertTrap106')]
    public function testAssertReturn107(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 179,
        );
    }

    #[Depends('testAssertReturn107')]
    public function testAssertReturn108(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 180,
        );
    }

    #[Depends('testAssertReturn108')]
    public function testAssertReturn109(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 181,
        );
    }

    #[Depends('testAssertReturn109')]
    public function testAssertReturn110(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 182,
        );
    }

    #[Depends('testAssertReturn110')]
    public function testAssertReturn111(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 183,
        );
    }

    #[Depends('testAssertReturn111')]
    public function testAssertTrap112(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 184,
        );
    }

    #[Depends('testAssertTrap112')]
    public function testAssertTrap113(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 185,
        );
    }

    #[Depends('testAssertTrap113')]
    public function testAssertTrap114(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 186,
        );
    }

    #[Depends('testAssertTrap114')]
    public function testAssertTrap115(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 187,
        );
    }

    #[Depends('testAssertTrap115')]
    public function testAssertTrap116(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 188,
        );
    }

    #[Depends('testAssertTrap116')]
    public function testAssertTrap117(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 189,
        );
    }

    #[Depends('testAssertTrap117')]
    public function testAssertTrap118(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 190,
        );
    }

    #[Depends('testAssertTrap118')]
    public function testAssertTrap119(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 191,
        );
    }

    #[Depends('testAssertTrap119')]
    public function testAssertTrap120(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 192,
        );
    }

    #[Depends('testAssertTrap120')]
    public function testAssertTrap121(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 193,
        );
    }

    #[Depends('testAssertTrap121')]
    public function testAssertTrap122(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 194,
        );
    }

    #[Depends('testAssertTrap122')]
    public function testAssertTrap123(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 195,
        );
    }

    #[Depends('testAssertTrap123')]
    public function testAssertTrap124(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 196,
        );
    }

    #[Depends('testAssertTrap124')]
    public function testAssertTrap125(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 197,
        );
    }

    #[Depends('testAssertTrap125')]
    public function testModule126(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.3.wasm',
            name: null,
            line: 199,
        );
    }

    #[Depends('testModule126')]
    public function testAction127(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 229,
        );
    }

    #[Depends('testAction127')]
    public function testAssertTrap128(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 230,
        );
    }

    #[Depends('testAssertTrap128')]
    public function testAssertTrap129(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 231,
        );
    }

    #[Depends('testAssertTrap129')]
    public function testAssertReturn130(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 232,
        );
    }

    #[Depends('testAssertReturn130')]
    public function testAssertReturn131(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 233,
        );
    }

    #[Depends('testAssertReturn131')]
    public function testAssertReturn132(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 234,
        );
    }

    #[Depends('testAssertReturn132')]
    public function testAssertReturn133(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 235,
        );
    }

    #[Depends('testAssertReturn133')]
    public function testAssertTrap134(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 236,
        );
    }

    #[Depends('testAssertTrap134')]
    public function testAssertTrap135(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 237,
        );
    }

    #[Depends('testAssertTrap135')]
    public function testAssertTrap136(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 238,
        );
    }

    #[Depends('testAssertTrap136')]
    public function testAssertTrap137(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 239,
        );
    }

    #[Depends('testAssertTrap137')]
    public function testAssertTrap138(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 240,
        );
    }

    #[Depends('testAssertTrap138')]
    public function testAssertTrap139(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 241,
        );
    }

    #[Depends('testAssertTrap139')]
    public function testAssertReturn140(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 242,
        );
    }

    #[Depends('testAssertReturn140')]
    public function testAssertReturn141(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 243,
        );
    }

    #[Depends('testAssertReturn141')]
    public function testAssertReturn142(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 244,
        );
    }

    #[Depends('testAssertReturn142')]
    public function testAssertReturn143(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 245,
        );
    }

    #[Depends('testAssertReturn143')]
    public function testAssertReturn144(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 246,
        );
    }

    #[Depends('testAssertReturn144')]
    public function testAssertTrap145(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 247,
        );
    }

    #[Depends('testAssertTrap145')]
    public function testAssertTrap146(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 248,
        );
    }

    #[Depends('testAssertTrap146')]
    public function testAssertTrap147(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 249,
        );
    }

    #[Depends('testAssertTrap147')]
    public function testAssertTrap148(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 250,
        );
    }

    #[Depends('testAssertTrap148')]
    public function testAssertTrap149(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 251,
        );
    }

    #[Depends('testAssertTrap149')]
    public function testAssertTrap150(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 252,
        );
    }

    #[Depends('testAssertTrap150')]
    public function testAssertTrap151(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 253,
        );
    }

    #[Depends('testAssertTrap151')]
    public function testAssertTrap152(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 254,
        );
    }

    #[Depends('testAssertTrap152')]
    public function testAssertReturn153(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 255,
        );
    }

    #[Depends('testAssertReturn153')]
    public function testAssertReturn154(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 256,
        );
    }

    #[Depends('testAssertReturn154')]
    public function testAssertTrap155(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 257,
        );
    }

    #[Depends('testAssertTrap155')]
    public function testAssertTrap156(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 258,
        );
    }

    #[Depends('testAssertTrap156')]
    public function testAssertTrap157(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 259,
        );
    }

    #[Depends('testAssertTrap157')]
    public function testAssertTrap158(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 260,
        );
    }

    #[Depends('testAssertTrap158')]
    public function testAssertTrap159(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 261,
        );
    }

    #[Depends('testAssertTrap159')]
    public function testAssertTrap160(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 262,
        );
    }

    #[Depends('testAssertTrap160')]
    public function testAssertReturn161(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 263,
        );
    }

    #[Depends('testAssertReturn161')]
    public function testAssertReturn162(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 264,
        );
    }

    #[Depends('testAssertReturn162')]
    public function testAssertReturn163(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 265,
        );
    }

    #[Depends('testAssertReturn163')]
    public function testAssertReturn164(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 266,
        );
    }

    #[Depends('testAssertReturn164')]
    public function testAssertTrap165(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 267,
        );
    }

    #[Depends('testAssertTrap165')]
    public function testAssertTrap166(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 268,
        );
    }

    #[Depends('testAssertTrap166')]
    public function testAssertTrap167(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 269,
        );
    }

    #[Depends('testAssertTrap167')]
    public function testAssertTrap168(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 270,
        );
    }

    #[Depends('testAssertTrap168')]
    public function testAssertReturn169(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 271,
        );
    }

    #[Depends('testAssertReturn169')]
    public function testAssertReturn170(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 272,
        );
    }

    #[Depends('testAssertReturn170')]
    public function testAssertReturn171(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 273,
        );
    }

    #[Depends('testAssertReturn171')]
    public function testAssertReturn172(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 274,
        );
    }

    #[Depends('testAssertReturn172')]
    public function testAssertReturn173(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 275,
        );
    }

    #[Depends('testAssertReturn173')]
    public function testAssertTrap174(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 276,
        );
    }

    #[Depends('testAssertTrap174')]
    public function testAssertTrap175(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 277,
        );
    }

    #[Depends('testAssertTrap175')]
    public function testAssertTrap176(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 278,
        );
    }

    #[Depends('testAssertTrap176')]
    public function testAssertTrap177(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 279,
        );
    }

    #[Depends('testAssertTrap177')]
    public function testAssertTrap178(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 280,
        );
    }

    #[Depends('testAssertTrap178')]
    public function testAssertTrap179(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 281,
        );
    }

    #[Depends('testAssertTrap179')]
    public function testAssertTrap180(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 282,
        );
    }

    #[Depends('testAssertTrap180')]
    public function testAssertTrap181(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 283,
        );
    }

    #[Depends('testAssertTrap181')]
    public function testAssertTrap182(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 284,
        );
    }

    #[Depends('testAssertTrap182')]
    public function testAssertTrap183(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 285,
        );
    }

    #[Depends('testAssertTrap183')]
    public function testAssertTrap184(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 286,
        );
    }

    #[Depends('testAssertTrap184')]
    public function testAssertTrap185(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 287,
        );
    }

    #[Depends('testAssertTrap185')]
    public function testAssertTrap186(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 288,
        );
    }

    #[Depends('testAssertTrap186')]
    public function testAssertTrap187(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 289,
        );
    }

    #[Depends('testAssertTrap187')]
    public function testModule188(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.4.wasm',
            name: null,
            line: 291,
        );
    }

    #[Depends('testModule188')]
    public function testAction189(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 321,
        );
    }

    #[Depends('testAction189')]
    public function testAssertTrap190(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 322,
        );
    }

    #[Depends('testAssertTrap190')]
    public function testAssertTrap191(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 323,
        );
    }

    #[Depends('testAssertTrap191')]
    public function testAssertReturn192(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 324,
        );
    }

    #[Depends('testAssertReturn192')]
    public function testAssertReturn193(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 325,
        );
    }

    #[Depends('testAssertReturn193')]
    public function testAssertReturn194(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 326,
        );
    }

    #[Depends('testAssertReturn194')]
    public function testAssertReturn195(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 327,
        );
    }

    #[Depends('testAssertReturn195')]
    public function testAssertTrap196(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 328,
        );
    }

    #[Depends('testAssertTrap196')]
    public function testAssertTrap197(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 329,
        );
    }

    #[Depends('testAssertTrap197')]
    public function testAssertTrap198(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 330,
        );
    }

    #[Depends('testAssertTrap198')]
    public function testAssertTrap199(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 331,
        );
    }

    #[Depends('testAssertTrap199')]
    public function testAssertTrap200(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 332,
        );
    }

    #[Depends('testAssertTrap200')]
    public function testAssertTrap201(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 333,
        );
    }

    #[Depends('testAssertTrap201')]
    public function testAssertReturn202(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 334,
        );
    }

    #[Depends('testAssertReturn202')]
    public function testAssertTrap203(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 335,
        );
    }

    #[Depends('testAssertTrap203')]
    public function testAssertTrap204(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            text: 'uninitialized element',
            line: 336,
        );
    }

    #[Depends('testAssertTrap204')]
    public function testAssertTrap205(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 337,
        );
    }

    #[Depends('testAssertTrap205')]
    public function testAssertReturn206(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 338,
        );
    }

    #[Depends('testAssertReturn206')]
    public function testAssertTrap207(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 339,
        );
    }

    #[Depends('testAssertTrap207')]
    public function testAssertTrap208(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 340,
        );
    }

    #[Depends('testAssertTrap208')]
    public function testAssertTrap209(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 341,
        );
    }

    #[Depends('testAssertTrap209')]
    public function testAssertTrap210(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 342,
        );
    }

    #[Depends('testAssertTrap210')]
    public function testAssertTrap211(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 343,
        );
    }

    #[Depends('testAssertTrap211')]
    public function testAssertTrap212(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 344,
        );
    }

    #[Depends('testAssertTrap212')]
    public function testAssertTrap213(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 345,
        );
    }

    #[Depends('testAssertTrap213')]
    public function testAssertTrap214(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 346,
        );
    }

    #[Depends('testAssertTrap214')]
    public function testAssertTrap215(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 347,
        );
    }

    #[Depends('testAssertTrap215')]
    public function testAssertTrap216(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 348,
        );
    }

    #[Depends('testAssertTrap216')]
    public function testAssertTrap217(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 349,
        );
    }

    #[Depends('testAssertTrap217')]
    public function testAssertTrap218(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 350,
        );
    }

    #[Depends('testAssertTrap218')]
    public function testAssertTrap219(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 351,
        );
    }

    #[Depends('testAssertTrap219')]
    public function testAssertTrap220(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 352,
        );
    }

    #[Depends('testAssertTrap220')]
    public function testAssertTrap221(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 353,
        );
    }

    #[Depends('testAssertTrap221')]
    public function testAssertTrap222(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 354,
        );
    }

    #[Depends('testAssertTrap222')]
    public function testAssertReturn223(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 355,
        );
    }

    #[Depends('testAssertReturn223')]
    public function testAssertReturn224(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 356,
        );
    }

    #[Depends('testAssertReturn224')]
    public function testAssertReturn225(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 357,
        );
    }

    #[Depends('testAssertReturn225')]
    public function testAssertReturn226(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 358,
        );
    }

    #[Depends('testAssertReturn226')]
    public function testAssertTrap227(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 359,
        );
    }

    #[Depends('testAssertTrap227')]
    public function testAssertTrap228(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 360,
        );
    }

    #[Depends('testAssertTrap228')]
    public function testAssertTrap229(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 361,
        );
    }

    #[Depends('testAssertTrap229')]
    public function testAssertTrap230(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 362,
        );
    }

    #[Depends('testAssertTrap230')]
    public function testAssertReturn231(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 363,
        );
    }

    #[Depends('testAssertReturn231')]
    public function testAssertReturn232(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 364,
        );
    }

    #[Depends('testAssertReturn232')]
    public function testAssertReturn233(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 365,
        );
    }

    #[Depends('testAssertReturn233')]
    public function testAssertReturn234(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 366,
        );
    }

    #[Depends('testAssertReturn234')]
    public function testAssertReturn235(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 367,
        );
    }

    #[Depends('testAssertReturn235')]
    public function testAssertTrap236(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 368,
        );
    }

    #[Depends('testAssertTrap236')]
    public function testAssertTrap237(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 369,
        );
    }

    #[Depends('testAssertTrap237')]
    public function testAssertTrap238(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 370,
        );
    }

    #[Depends('testAssertTrap238')]
    public function testAssertTrap239(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 371,
        );
    }

    #[Depends('testAssertTrap239')]
    public function testAssertTrap240(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 372,
        );
    }

    #[Depends('testAssertTrap240')]
    public function testAssertTrap241(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 373,
        );
    }

    #[Depends('testAssertTrap241')]
    public function testAssertTrap242(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 374,
        );
    }

    #[Depends('testAssertTrap242')]
    public function testAssertTrap243(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 375,
        );
    }

    #[Depends('testAssertTrap243')]
    public function testAssertTrap244(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 376,
        );
    }

    #[Depends('testAssertTrap244')]
    public function testAssertTrap245(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 377,
        );
    }

    #[Depends('testAssertTrap245')]
    public function testAssertTrap246(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 378,
        );
    }

    #[Depends('testAssertTrap246')]
    public function testAssertTrap247(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 379,
        );
    }

    #[Depends('testAssertTrap247')]
    public function testAssertTrap248(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 380,
        );
    }

    #[Depends('testAssertTrap248')]
    public function testAssertTrap249(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 381,
        );
    }

    #[Depends('testAssertTrap249')]
    public function testModule250(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.5.wasm',
            name: null,
            line: 383,
        );
    }

    #[Depends('testModule250')]
    public function testAction251(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 413,
        );
    }

    #[Depends('testAction251')]
    public function testAssertTrap252(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 414,
        );
    }

    #[Depends('testAssertTrap252')]
    public function testAssertTrap253(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 415,
        );
    }

    #[Depends('testAssertTrap253')]
    public function testAssertReturn254(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 416,
        );
    }

    #[Depends('testAssertReturn254')]
    public function testAssertReturn255(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 417,
        );
    }

    #[Depends('testAssertReturn255')]
    public function testAssertReturn256(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 418,
        );
    }

    #[Depends('testAssertReturn256')]
    public function testAssertReturn257(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 419,
        );
    }

    #[Depends('testAssertReturn257')]
    public function testAssertTrap258(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 420,
        );
    }

    #[Depends('testAssertTrap258')]
    public function testAssertTrap259(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 421,
        );
    }

    #[Depends('testAssertTrap259')]
    public function testAssertTrap260(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 422,
        );
    }

    #[Depends('testAssertTrap260')]
    public function testAssertTrap261(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 423,
        );
    }

    #[Depends('testAssertTrap261')]
    public function testAssertTrap262(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 424,
        );
    }

    #[Depends('testAssertTrap262')]
    public function testAssertTrap263(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 425,
        );
    }

    #[Depends('testAssertTrap263')]
    public function testAssertReturn264(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 426,
        );
    }

    #[Depends('testAssertReturn264')]
    public function testAssertReturn265(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 427,
        );
    }

    #[Depends('testAssertReturn265')]
    public function testAssertReturn266(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 428,
        );
    }

    #[Depends('testAssertReturn266')]
    public function testAssertReturn267(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 429,
        );
    }

    #[Depends('testAssertReturn267')]
    public function testAssertReturn268(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 430,
        );
    }

    #[Depends('testAssertReturn268')]
    public function testAssertTrap269(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 431,
        );
    }

    #[Depends('testAssertTrap269')]
    public function testAssertTrap270(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 432,
        );
    }

    #[Depends('testAssertTrap270')]
    public function testAssertTrap271(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 433,
        );
    }

    #[Depends('testAssertTrap271')]
    public function testAssertTrap272(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 434,
        );
    }

    #[Depends('testAssertTrap272')]
    public function testAssertTrap273(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 435,
        );
    }

    #[Depends('testAssertTrap273')]
    public function testAssertTrap274(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 436,
        );
    }

    #[Depends('testAssertTrap274')]
    public function testAssertTrap275(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 437,
        );
    }

    #[Depends('testAssertTrap275')]
    public function testAssertTrap276(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 438,
        );
    }

    #[Depends('testAssertTrap276')]
    public function testAssertTrap277(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 439,
        );
    }

    #[Depends('testAssertTrap277')]
    public function testAssertTrap278(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 440,
        );
    }

    #[Depends('testAssertTrap278')]
    public function testAssertTrap279(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 441,
        );
    }

    #[Depends('testAssertTrap279')]
    public function testAssertTrap280(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 442,
        );
    }

    #[Depends('testAssertTrap280')]
    public function testAssertTrap281(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 443,
        );
    }

    #[Depends('testAssertTrap281')]
    public function testAssertTrap282(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 444,
        );
    }

    #[Depends('testAssertTrap282')]
    public function testAssertTrap283(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 445,
        );
    }

    #[Depends('testAssertTrap283')]
    public function testAssertTrap284(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 446,
        );
    }

    #[Depends('testAssertTrap284')]
    public function testAssertReturn285(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 447,
        );
    }

    #[Depends('testAssertReturn285')]
    public function testAssertReturn286(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 448,
        );
    }

    #[Depends('testAssertReturn286')]
    public function testAssertReturn287(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 449,
        );
    }

    #[Depends('testAssertReturn287')]
    public function testAssertReturn288(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 450,
        );
    }

    #[Depends('testAssertReturn288')]
    public function testAssertTrap289(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 451,
        );
    }

    #[Depends('testAssertTrap289')]
    public function testAssertTrap290(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 452,
        );
    }

    #[Depends('testAssertTrap290')]
    public function testAssertTrap291(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 453,
        );
    }

    #[Depends('testAssertTrap291')]
    public function testAssertTrap292(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 454,
        );
    }

    #[Depends('testAssertTrap292')]
    public function testAssertReturn293(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 455,
        );
    }

    #[Depends('testAssertReturn293')]
    public function testAssertReturn294(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 456,
        );
    }

    #[Depends('testAssertReturn294')]
    public function testAssertReturn295(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 457,
        );
    }

    #[Depends('testAssertReturn295')]
    public function testAssertReturn296(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 458,
        );
    }

    #[Depends('testAssertReturn296')]
    public function testAssertReturn297(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 459,
        );
    }

    #[Depends('testAssertReturn297')]
    public function testAssertTrap298(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 460,
        );
    }

    #[Depends('testAssertTrap298')]
    public function testAssertTrap299(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 461,
        );
    }

    #[Depends('testAssertTrap299')]
    public function testAssertTrap300(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 462,
        );
    }

    #[Depends('testAssertTrap300')]
    public function testAssertTrap301(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 463,
        );
    }

    #[Depends('testAssertTrap301')]
    public function testAssertTrap302(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 464,
        );
    }

    #[Depends('testAssertTrap302')]
    public function testAssertTrap303(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 465,
        );
    }

    #[Depends('testAssertTrap303')]
    public function testAssertTrap304(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 466,
        );
    }

    #[Depends('testAssertTrap304')]
    public function testAssertTrap305(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 467,
        );
    }

    #[Depends('testAssertTrap305')]
    public function testAssertTrap306(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 468,
        );
    }

    #[Depends('testAssertTrap306')]
    public function testAssertTrap307(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 469,
        );
    }

    #[Depends('testAssertTrap307')]
    public function testAssertTrap308(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 470,
        );
    }

    #[Depends('testAssertTrap308')]
    public function testAssertTrap309(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 471,
        );
    }

    #[Depends('testAssertTrap309')]
    public function testAssertTrap310(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 472,
        );
    }

    #[Depends('testAssertTrap310')]
    public function testAssertTrap311(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 473,
        );
    }

    #[Depends('testAssertTrap311')]
    public function testModule312(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.6.wasm',
            name: null,
            line: 475,
        );
    }

    #[Depends('testModule312')]
    public function testAction313(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 505,
        );
    }

    #[Depends('testAction313')]
    public function testAssertTrap314(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 506,
        );
    }

    #[Depends('testAssertTrap314')]
    public function testAssertTrap315(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 507,
        );
    }

    #[Depends('testAssertTrap315')]
    public function testAssertReturn316(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 508,
        );
    }

    #[Depends('testAssertReturn316')]
    public function testAssertReturn317(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 509,
        );
    }

    #[Depends('testAssertReturn317')]
    public function testAssertReturn318(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 510,
        );
    }

    #[Depends('testAssertReturn318')]
    public function testAssertReturn319(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 511,
        );
    }

    #[Depends('testAssertReturn319')]
    public function testAssertTrap320(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 512,
        );
    }

    #[Depends('testAssertTrap320')]
    public function testAssertTrap321(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 513,
        );
    }

    #[Depends('testAssertTrap321')]
    public function testAssertTrap322(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 514,
        );
    }

    #[Depends('testAssertTrap322')]
    public function testAssertTrap323(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 515,
        );
    }

    #[Depends('testAssertTrap323')]
    public function testAssertTrap324(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 516,
        );
    }

    #[Depends('testAssertTrap324')]
    public function testAssertTrap325(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 517,
        );
    }

    #[Depends('testAssertTrap325')]
    public function testAssertReturn326(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 518,
        );
    }

    #[Depends('testAssertReturn326')]
    public function testAssertReturn327(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 519,
        );
    }

    #[Depends('testAssertReturn327')]
    public function testAssertReturn328(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 520,
        );
    }

    #[Depends('testAssertReturn328')]
    public function testAssertReturn329(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 521,
        );
    }

    #[Depends('testAssertReturn329')]
    public function testAssertReturn330(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 522,
        );
    }

    #[Depends('testAssertReturn330')]
    public function testAssertTrap331(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 523,
        );
    }

    #[Depends('testAssertTrap331')]
    public function testAssertTrap332(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 524,
        );
    }

    #[Depends('testAssertTrap332')]
    public function testAssertTrap333(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 525,
        );
    }

    #[Depends('testAssertTrap333')]
    public function testAssertTrap334(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 526,
        );
    }

    #[Depends('testAssertTrap334')]
    public function testAssertTrap335(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 527,
        );
    }

    #[Depends('testAssertTrap335')]
    public function testAssertTrap336(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 528,
        );
    }

    #[Depends('testAssertTrap336')]
    public function testAssertTrap337(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 529,
        );
    }

    #[Depends('testAssertTrap337')]
    public function testAssertTrap338(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 530,
        );
    }

    #[Depends('testAssertTrap338')]
    public function testAssertTrap339(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 531,
        );
    }

    #[Depends('testAssertTrap339')]
    public function testAssertReturn340(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 532,
        );
    }

    #[Depends('testAssertReturn340')]
    public function testAssertReturn341(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 533,
        );
    }

    #[Depends('testAssertReturn341')]
    public function testAssertTrap342(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 534,
        );
    }

    #[Depends('testAssertTrap342')]
    public function testAssertTrap343(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 535,
        );
    }

    #[Depends('testAssertTrap343')]
    public function testAssertTrap344(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 536,
        );
    }

    #[Depends('testAssertTrap344')]
    public function testAssertTrap345(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 537,
        );
    }

    #[Depends('testAssertTrap345')]
    public function testAssertTrap346(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 538,
        );
    }

    #[Depends('testAssertTrap346')]
    public function testAssertReturn347(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 539,
        );
    }

    #[Depends('testAssertReturn347')]
    public function testAssertReturn348(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 540,
        );
    }

    #[Depends('testAssertReturn348')]
    public function testAssertReturn349(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 541,
        );
    }

    #[Depends('testAssertReturn349')]
    public function testAssertReturn350(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 542,
        );
    }

    #[Depends('testAssertReturn350')]
    public function testAssertTrap351(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 543,
        );
    }

    #[Depends('testAssertTrap351')]
    public function testAssertTrap352(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 544,
        );
    }

    #[Depends('testAssertTrap352')]
    public function testAssertTrap353(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 545,
        );
    }

    #[Depends('testAssertTrap353')]
    public function testAssertTrap354(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 546,
        );
    }

    #[Depends('testAssertTrap354')]
    public function testAssertReturn355(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 547,
        );
    }

    #[Depends('testAssertReturn355')]
    public function testAssertReturn356(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 548,
        );
    }

    #[Depends('testAssertReturn356')]
    public function testAssertReturn357(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 549,
        );
    }

    #[Depends('testAssertReturn357')]
    public function testAssertReturn358(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 550,
        );
    }

    #[Depends('testAssertReturn358')]
    public function testAssertReturn359(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 551,
        );
    }

    #[Depends('testAssertReturn359')]
    public function testAssertTrap360(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 552,
        );
    }

    #[Depends('testAssertTrap360')]
    public function testAssertTrap361(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 553,
        );
    }

    #[Depends('testAssertTrap361')]
    public function testAssertTrap362(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 554,
        );
    }

    #[Depends('testAssertTrap362')]
    public function testAssertTrap363(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 555,
        );
    }

    #[Depends('testAssertTrap363')]
    public function testAssertTrap364(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 556,
        );
    }

    #[Depends('testAssertTrap364')]
    public function testAssertTrap365(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 557,
        );
    }

    #[Depends('testAssertTrap365')]
    public function testAssertTrap366(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 558,
        );
    }

    #[Depends('testAssertTrap366')]
    public function testAssertTrap367(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 559,
        );
    }

    #[Depends('testAssertTrap367')]
    public function testAssertTrap368(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 560,
        );
    }

    #[Depends('testAssertTrap368')]
    public function testAssertTrap369(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 561,
        );
    }

    #[Depends('testAssertTrap369')]
    public function testAssertTrap370(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 562,
        );
    }

    #[Depends('testAssertTrap370')]
    public function testAssertTrap371(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 563,
        );
    }

    #[Depends('testAssertTrap371')]
    public function testAssertTrap372(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 564,
        );
    }

    #[Depends('testAssertTrap372')]
    public function testAssertTrap373(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 565,
        );
    }

    #[Depends('testAssertTrap373')]
    public function testModule374(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.7.wasm',
            name: null,
            line: 567,
        );
    }

    #[Depends('testModule374')]
    public function testAction375(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 597,
        );
    }

    #[Depends('testAction375')]
    public function testAssertTrap376(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 598,
        );
    }

    #[Depends('testAssertTrap376')]
    public function testAssertTrap377(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 599,
        );
    }

    #[Depends('testAssertTrap377')]
    public function testAssertReturn378(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 600,
        );
    }

    #[Depends('testAssertReturn378')]
    public function testAssertReturn379(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 601,
        );
    }

    #[Depends('testAssertReturn379')]
    public function testAssertReturn380(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 602,
        );
    }

    #[Depends('testAssertReturn380')]
    public function testAssertReturn381(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 603,
        );
    }

    #[Depends('testAssertReturn381')]
    public function testAssertTrap382(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 604,
        );
    }

    #[Depends('testAssertTrap382')]
    public function testAssertTrap383(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 605,
        );
    }

    #[Depends('testAssertTrap383')]
    public function testAssertTrap384(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 606,
        );
    }

    #[Depends('testAssertTrap384')]
    public function testAssertTrap385(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 607,
        );
    }

    #[Depends('testAssertTrap385')]
    public function testAssertReturn386(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 608,
        );
    }

    #[Depends('testAssertReturn386')]
    public function testAssertReturn387(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 609,
        );
    }

    #[Depends('testAssertReturn387')]
    public function testAssertReturn388(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 610,
        );
    }

    #[Depends('testAssertReturn388')]
    public function testAssertReturn389(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 611,
        );
    }

    #[Depends('testAssertReturn389')]
    public function testAssertReturn390(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 612,
        );
    }

    #[Depends('testAssertReturn390')]
    public function testAssertTrap391(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 613,
        );
    }

    #[Depends('testAssertTrap391')]
    public function testAssertTrap392(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 614,
        );
    }

    #[Depends('testAssertTrap392')]
    public function testAssertTrap393(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 615,
        );
    }

    #[Depends('testAssertTrap393')]
    public function testAssertTrap394(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 616,
        );
    }

    #[Depends('testAssertTrap394')]
    public function testAssertTrap395(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 617,
        );
    }

    #[Depends('testAssertTrap395')]
    public function testAssertTrap396(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 618,
        );
    }

    #[Depends('testAssertTrap396')]
    public function testAssertTrap397(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 619,
        );
    }

    #[Depends('testAssertTrap397')]
    public function testAssertTrap398(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 620,
        );
    }

    #[Depends('testAssertTrap398')]
    public function testAssertTrap399(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 621,
        );
    }

    #[Depends('testAssertTrap399')]
    public function testAssertTrap400(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 622,
        );
    }

    #[Depends('testAssertTrap400')]
    public function testAssertTrap401(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 623,
        );
    }

    #[Depends('testAssertTrap401')]
    public function testAssertTrap402(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 624,
        );
    }

    #[Depends('testAssertTrap402')]
    public function testAssertTrap403(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 625,
        );
    }

    #[Depends('testAssertTrap403')]
    public function testAssertTrap404(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 626,
        );
    }

    #[Depends('testAssertTrap404')]
    public function testAssertTrap405(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 627,
        );
    }

    #[Depends('testAssertTrap405')]
    public function testAssertTrap406(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 628,
        );
    }

    #[Depends('testAssertTrap406')]
    public function testAssertTrap407(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 629,
        );
    }

    #[Depends('testAssertTrap407')]
    public function testAssertTrap408(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 630,
        );
    }

    #[Depends('testAssertTrap408')]
    public function testAssertReturn409(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 631,
        );
    }

    #[Depends('testAssertReturn409')]
    public function testAssertReturn410(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 632,
        );
    }

    #[Depends('testAssertReturn410')]
    public function testAssertReturn411(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 633,
        );
    }

    #[Depends('testAssertReturn411')]
    public function testAssertReturn412(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 634,
        );
    }

    #[Depends('testAssertReturn412')]
    public function testAssertTrap413(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 635,
        );
    }

    #[Depends('testAssertTrap413')]
    public function testAssertTrap414(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 636,
        );
    }

    #[Depends('testAssertTrap414')]
    public function testAssertTrap415(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 637,
        );
    }

    #[Depends('testAssertTrap415')]
    public function testAssertTrap416(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 638,
        );
    }

    #[Depends('testAssertTrap416')]
    public function testAssertReturn417(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 639,
        );
    }

    #[Depends('testAssertReturn417')]
    public function testAssertReturn418(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 640,
        );
    }

    #[Depends('testAssertReturn418')]
    public function testAssertReturn419(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 641,
        );
    }

    #[Depends('testAssertReturn419')]
    public function testAssertReturn420(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 642,
        );
    }

    #[Depends('testAssertReturn420')]
    public function testAssertReturn421(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 643,
        );
    }

    #[Depends('testAssertReturn421')]
    public function testAssertTrap422(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 644,
        );
    }

    #[Depends('testAssertTrap422')]
    public function testAssertTrap423(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 645,
        );
    }

    #[Depends('testAssertTrap423')]
    public function testAssertTrap424(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 646,
        );
    }

    #[Depends('testAssertTrap424')]
    public function testAssertTrap425(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 647,
        );
    }

    #[Depends('testAssertTrap425')]
    public function testAssertTrap426(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 648,
        );
    }

    #[Depends('testAssertTrap426')]
    public function testAssertTrap427(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 649,
        );
    }

    #[Depends('testAssertTrap427')]
    public function testAssertTrap428(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 650,
        );
    }

    #[Depends('testAssertTrap428')]
    public function testAssertTrap429(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 651,
        );
    }

    #[Depends('testAssertTrap429')]
    public function testAssertTrap430(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 652,
        );
    }

    #[Depends('testAssertTrap430')]
    public function testAssertTrap431(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 653,
        );
    }

    #[Depends('testAssertTrap431')]
    public function testAssertTrap432(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 654,
        );
    }

    #[Depends('testAssertTrap432')]
    public function testAssertTrap433(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 655,
        );
    }

    #[Depends('testAssertTrap433')]
    public function testAssertTrap434(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 656,
        );
    }

    #[Depends('testAssertTrap434')]
    public function testAssertTrap435(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 657,
        );
    }

    #[Depends('testAssertTrap435')]
    public function testModule436(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.8.wasm',
            name: null,
            line: 659,
        );
    }

    #[Depends('testModule436')]
    public function testAction437(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 689,
        );
    }

    #[Depends('testAction437')]
    public function testAssertTrap438(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 690,
        );
    }

    #[Depends('testAssertTrap438')]
    public function testAssertTrap439(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 691,
        );
    }

    #[Depends('testAssertTrap439')]
    public function testAssertReturn440(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 692,
        );
    }

    #[Depends('testAssertReturn440')]
    public function testAssertReturn441(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 693,
        );
    }

    #[Depends('testAssertReturn441')]
    public function testAssertReturn442(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 694,
        );
    }

    #[Depends('testAssertReturn442')]
    public function testAssertReturn443(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 695,
        );
    }

    #[Depends('testAssertReturn443')]
    public function testAssertTrap444(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 696,
        );
    }

    #[Depends('testAssertTrap444')]
    public function testAssertTrap445(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 697,
        );
    }

    #[Depends('testAssertTrap445')]
    public function testAssertTrap446(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 698,
        );
    }

    #[Depends('testAssertTrap446')]
    public function testAssertTrap447(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 699,
        );
    }

    #[Depends('testAssertTrap447')]
    public function testAssertTrap448(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 700,
        );
    }

    #[Depends('testAssertTrap448')]
    public function testAssertTrap449(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 701,
        );
    }

    #[Depends('testAssertTrap449')]
    public function testAssertTrap450(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            text: 'uninitialized element',
            line: 702,
        );
    }

    #[Depends('testAssertTrap450')]
    public function testAssertTrap451(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 703,
        );
    }

    #[Depends('testAssertTrap451')]
    public function testAssertReturn452(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 704,
        );
    }

    #[Depends('testAssertReturn452')]
    public function testAssertReturn453(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 705,
        );
    }

    #[Depends('testAssertReturn453')]
    public function testAssertReturn454(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 706,
        );
    }

    #[Depends('testAssertReturn454')]
    public function testAssertReturn455(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 707,
        );
    }

    #[Depends('testAssertReturn455')]
    public function testAssertReturn456(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 708,
        );
    }

    #[Depends('testAssertReturn456')]
    public function testAssertTrap457(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 709,
        );
    }

    #[Depends('testAssertTrap457')]
    public function testAssertTrap458(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 710,
        );
    }

    #[Depends('testAssertTrap458')]
    public function testAssertTrap459(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 711,
        );
    }

    #[Depends('testAssertTrap459')]
    public function testAssertTrap460(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 712,
        );
    }

    #[Depends('testAssertTrap460')]
    public function testAssertTrap461(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 713,
        );
    }

    #[Depends('testAssertTrap461')]
    public function testAssertTrap462(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 714,
        );
    }

    #[Depends('testAssertTrap462')]
    public function testAssertTrap463(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 715,
        );
    }

    #[Depends('testAssertTrap463')]
    public function testAssertTrap464(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 716,
        );
    }

    #[Depends('testAssertTrap464')]
    public function testAssertTrap465(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 717,
        );
    }

    #[Depends('testAssertTrap465')]
    public function testAssertTrap466(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 718,
        );
    }

    #[Depends('testAssertTrap466')]
    public function testAssertTrap467(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 719,
        );
    }

    #[Depends('testAssertTrap467')]
    public function testAssertTrap468(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 720,
        );
    }

    #[Depends('testAssertTrap468')]
    public function testAssertTrap469(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 721,
        );
    }

    #[Depends('testAssertTrap469')]
    public function testAssertTrap470(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 722,
        );
    }

    #[Depends('testAssertTrap470')]
    public function testAssertReturn471(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 723,
        );
    }

    #[Depends('testAssertReturn471')]
    public function testAssertReturn472(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 724,
        );
    }

    #[Depends('testAssertReturn472')]
    public function testAssertReturn473(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 725,
        );
    }

    #[Depends('testAssertReturn473')]
    public function testAssertReturn474(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 726,
        );
    }

    #[Depends('testAssertReturn474')]
    public function testAssertTrap475(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 727,
        );
    }

    #[Depends('testAssertTrap475')]
    public function testAssertTrap476(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 728,
        );
    }

    #[Depends('testAssertTrap476')]
    public function testAssertTrap477(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 729,
        );
    }

    #[Depends('testAssertTrap477')]
    public function testAssertTrap478(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 730,
        );
    }

    #[Depends('testAssertTrap478')]
    public function testAssertReturn479(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 731,
        );
    }

    #[Depends('testAssertReturn479')]
    public function testAssertReturn480(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 732,
        );
    }

    #[Depends('testAssertReturn480')]
    public function testAssertReturn481(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 733,
        );
    }

    #[Depends('testAssertReturn481')]
    public function testAssertReturn482(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 734,
        );
    }

    #[Depends('testAssertReturn482')]
    public function testAssertReturn483(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 735,
        );
    }

    #[Depends('testAssertReturn483')]
    public function testAssertTrap484(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 736,
        );
    }

    #[Depends('testAssertTrap484')]
    public function testAssertTrap485(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 737,
        );
    }

    #[Depends('testAssertTrap485')]
    public function testAssertTrap486(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 738,
        );
    }

    #[Depends('testAssertTrap486')]
    public function testAssertTrap487(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 739,
        );
    }

    #[Depends('testAssertTrap487')]
    public function testAssertTrap488(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 740,
        );
    }

    #[Depends('testAssertTrap488')]
    public function testAssertTrap489(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 741,
        );
    }

    #[Depends('testAssertTrap489')]
    public function testAssertTrap490(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 742,
        );
    }

    #[Depends('testAssertTrap490')]
    public function testAssertTrap491(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 743,
        );
    }

    #[Depends('testAssertTrap491')]
    public function testAssertTrap492(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 744,
        );
    }

    #[Depends('testAssertTrap492')]
    public function testAssertTrap493(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 745,
        );
    }

    #[Depends('testAssertTrap493')]
    public function testAssertTrap494(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 746,
        );
    }

    #[Depends('testAssertTrap494')]
    public function testAssertTrap495(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 747,
        );
    }

    #[Depends('testAssertTrap495')]
    public function testAssertTrap496(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 748,
        );
    }

    #[Depends('testAssertTrap496')]
    public function testAssertTrap497(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 749,
        );
    }

    #[Depends('testAssertTrap497')]
    public function testModule498(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.9.wasm',
            name: null,
            line: 751,
        );
    }

    #[Depends('testModule498')]
    public function testAction499(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 781,
        );
    }

    #[Depends('testAction499')]
    public function testAssertTrap500(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 782,
        );
    }

    #[Depends('testAssertTrap500')]
    public function testAssertTrap501(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 783,
        );
    }

    #[Depends('testAssertTrap501')]
    public function testAssertReturn502(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 784,
        );
    }

    #[Depends('testAssertReturn502')]
    public function testAssertReturn503(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 785,
        );
    }

    #[Depends('testAssertReturn503')]
    public function testAssertReturn504(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 786,
        );
    }

    #[Depends('testAssertReturn504')]
    public function testAssertReturn505(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 787,
        );
    }

    #[Depends('testAssertReturn505')]
    public function testAssertTrap506(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 788,
        );
    }

    #[Depends('testAssertTrap506')]
    public function testAssertTrap507(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 789,
        );
    }

    #[Depends('testAssertTrap507')]
    public function testAssertTrap508(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 790,
        );
    }

    #[Depends('testAssertTrap508')]
    public function testAssertTrap509(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 791,
        );
    }

    #[Depends('testAssertTrap509')]
    public function testAssertTrap510(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 792,
        );
    }

    #[Depends('testAssertTrap510')]
    public function testAssertTrap511(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 793,
        );
    }

    #[Depends('testAssertTrap511')]
    public function testAssertReturn512(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 794,
        );
    }

    #[Depends('testAssertReturn512')]
    public function testAssertReturn513(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 795,
        );
    }

    #[Depends('testAssertReturn513')]
    public function testAssertReturn514(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 796,
        );
    }

    #[Depends('testAssertReturn514')]
    public function testAssertReturn515(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 797,
        );
    }

    #[Depends('testAssertReturn515')]
    public function testAssertReturn516(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 798,
        );
    }

    #[Depends('testAssertReturn516')]
    public function testAssertTrap517(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 799,
        );
    }

    #[Depends('testAssertTrap517')]
    public function testAssertTrap518(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 800,
        );
    }

    #[Depends('testAssertTrap518')]
    public function testAssertTrap519(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 801,
        );
    }

    #[Depends('testAssertTrap519')]
    public function testAssertTrap520(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 802,
        );
    }

    #[Depends('testAssertTrap520')]
    public function testAssertTrap521(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 803,
        );
    }

    #[Depends('testAssertTrap521')]
    public function testAssertTrap522(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 804,
        );
    }

    #[Depends('testAssertTrap522')]
    public function testAssertTrap523(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 805,
        );
    }

    #[Depends('testAssertTrap523')]
    public function testAssertTrap524(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 806,
        );
    }

    #[Depends('testAssertTrap524')]
    public function testAssertTrap525(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 807,
        );
    }

    #[Depends('testAssertTrap525')]
    public function testAssertTrap526(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 808,
        );
    }

    #[Depends('testAssertTrap526')]
    public function testAssertTrap527(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 809,
        );
    }

    #[Depends('testAssertTrap527')]
    public function testAssertTrap528(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 810,
        );
    }

    #[Depends('testAssertTrap528')]
    public function testAssertTrap529(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 811,
        );
    }

    #[Depends('testAssertTrap529')]
    public function testAssertTrap530(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 812,
        );
    }

    #[Depends('testAssertTrap530')]
    public function testAssertTrap531(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 813,
        );
    }

    #[Depends('testAssertTrap531')]
    public function testAssertTrap532(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 814,
        );
    }

    #[Depends('testAssertTrap532')]
    public function testAssertReturn533(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 815,
        );
    }

    #[Depends('testAssertReturn533')]
    public function testAssertReturn534(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 816,
        );
    }

    #[Depends('testAssertReturn534')]
    public function testAssertReturn535(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 817,
        );
    }

    #[Depends('testAssertReturn535')]
    public function testAssertReturn536(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 818,
        );
    }

    #[Depends('testAssertReturn536')]
    public function testAssertTrap537(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 819,
        );
    }

    #[Depends('testAssertTrap537')]
    public function testAssertTrap538(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 820,
        );
    }

    #[Depends('testAssertTrap538')]
    public function testAssertTrap539(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 821,
        );
    }

    #[Depends('testAssertTrap539')]
    public function testAssertTrap540(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 822,
        );
    }

    #[Depends('testAssertTrap540')]
    public function testAssertTrap541(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 823,
        );
    }

    #[Depends('testAssertTrap541')]
    public function testAssertReturn542(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 824,
        );
    }

    #[Depends('testAssertReturn542')]
    public function testAssertReturn543(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 825,
        );
    }

    #[Depends('testAssertReturn543')]
    public function testAssertReturn544(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 826,
        );
    }

    #[Depends('testAssertReturn544')]
    public function testAssertReturn545(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 827,
        );
    }

    #[Depends('testAssertReturn545')]
    public function testAssertTrap546(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 828,
        );
    }

    #[Depends('testAssertTrap546')]
    public function testAssertTrap547(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 829,
        );
    }

    #[Depends('testAssertTrap547')]
    public function testAssertTrap548(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 830,
        );
    }

    #[Depends('testAssertTrap548')]
    public function testAssertTrap549(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 831,
        );
    }

    #[Depends('testAssertTrap549')]
    public function testAssertTrap550(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 832,
        );
    }

    #[Depends('testAssertTrap550')]
    public function testAssertTrap551(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 833,
        );
    }

    #[Depends('testAssertTrap551')]
    public function testAssertReturn552(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 834,
        );
    }

    #[Depends('testAssertReturn552')]
    public function testAssertReturn553(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 835,
        );
    }

    #[Depends('testAssertReturn553')]
    public function testAssertReturn554(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 836,
        );
    }

    #[Depends('testAssertReturn554')]
    public function testAssertReturn555(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 837,
        );
    }

    #[Depends('testAssertReturn555')]
    public function testAssertReturn556(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 838,
        );
    }

    #[Depends('testAssertReturn556')]
    public function testAssertTrap557(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 839,
        );
    }

    #[Depends('testAssertTrap557')]
    public function testAssertTrap558(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 840,
        );
    }

    #[Depends('testAssertTrap558')]
    public function testAssertTrap559(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 841,
        );
    }

    #[Depends('testAssertTrap559')]
    public function testModule560(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.10.wasm',
            name: null,
            line: 843,
        );
    }

    #[Depends('testModule560')]
    public function testAction561(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 873,
        );
    }

    #[Depends('testAction561')]
    public function testAssertTrap562(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 874,
        );
    }

    #[Depends('testAssertTrap562')]
    public function testAssertTrap563(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 875,
        );
    }

    #[Depends('testAssertTrap563')]
    public function testAssertReturn564(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 876,
        );
    }

    #[Depends('testAssertReturn564')]
    public function testAssertReturn565(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 877,
        );
    }

    #[Depends('testAssertReturn565')]
    public function testAssertReturn566(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 878,
        );
    }

    #[Depends('testAssertReturn566')]
    public function testAssertReturn567(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 879,
        );
    }

    #[Depends('testAssertReturn567')]
    public function testAssertTrap568(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 880,
        );
    }

    #[Depends('testAssertTrap568')]
    public function testAssertTrap569(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 881,
        );
    }

    #[Depends('testAssertTrap569')]
    public function testAssertTrap570(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 882,
        );
    }

    #[Depends('testAssertTrap570')]
    public function testAssertTrap571(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 883,
        );
    }

    #[Depends('testAssertTrap571')]
    public function testAssertTrap572(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 884,
        );
    }

    #[Depends('testAssertTrap572')]
    public function testAssertTrap573(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 885,
        );
    }

    #[Depends('testAssertTrap573')]
    public function testAssertReturn574(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 886,
        );
    }

    #[Depends('testAssertReturn574')]
    public function testAssertReturn575(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 887,
        );
    }

    #[Depends('testAssertReturn575')]
    public function testAssertReturn576(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 888,
        );
    }

    #[Depends('testAssertReturn576')]
    public function testAssertReturn577(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 889,
        );
    }

    #[Depends('testAssertReturn577')]
    public function testAssertReturn578(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 890,
        );
    }

    #[Depends('testAssertReturn578')]
    public function testAssertTrap579(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 891,
        );
    }

    #[Depends('testAssertTrap579')]
    public function testAssertTrap580(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 892,
        );
    }

    #[Depends('testAssertTrap580')]
    public function testAssertTrap581(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 893,
        );
    }

    #[Depends('testAssertTrap581')]
    public function testAssertTrap582(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 894,
        );
    }

    #[Depends('testAssertTrap582')]
    public function testAssertTrap583(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 895,
        );
    }

    #[Depends('testAssertTrap583')]
    public function testAssertTrap584(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 896,
        );
    }

    #[Depends('testAssertTrap584')]
    public function testAssertTrap585(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 897,
        );
    }

    #[Depends('testAssertTrap585')]
    public function testAssertTrap586(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 898,
        );
    }

    #[Depends('testAssertTrap586')]
    public function testAssertTrap587(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 899,
        );
    }

    #[Depends('testAssertTrap587')]
    public function testAssertTrap588(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 900,
        );
    }

    #[Depends('testAssertTrap588')]
    public function testAssertTrap589(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 901,
        );
    }

    #[Depends('testAssertTrap589')]
    public function testAssertTrap590(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 902,
        );
    }

    #[Depends('testAssertTrap590')]
    public function testAssertTrap591(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 903,
        );
    }

    #[Depends('testAssertTrap591')]
    public function testAssertTrap592(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 904,
        );
    }

    #[Depends('testAssertTrap592')]
    public function testAssertTrap593(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 905,
        );
    }

    #[Depends('testAssertTrap593')]
    public function testAssertTrap594(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 906,
        );
    }

    #[Depends('testAssertTrap594')]
    public function testAssertReturn595(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 907,
        );
    }

    #[Depends('testAssertReturn595')]
    public function testAssertReturn596(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 908,
        );
    }

    #[Depends('testAssertReturn596')]
    public function testAssertReturn597(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 909,
        );
    }

    #[Depends('testAssertReturn597')]
    public function testAssertReturn598(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 910,
        );
    }

    #[Depends('testAssertReturn598')]
    public function testAssertTrap599(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 911,
        );
    }

    #[Depends('testAssertTrap599')]
    public function testAssertTrap600(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 912,
        );
    }

    #[Depends('testAssertTrap600')]
    public function testAssertTrap601(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 913,
        );
    }

    #[Depends('testAssertTrap601')]
    public function testAssertTrap602(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 914,
        );
    }

    #[Depends('testAssertTrap602')]
    public function testAssertReturn603(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 915,
        );
    }

    #[Depends('testAssertReturn603')]
    public function testAssertReturn604(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 916,
        );
    }

    #[Depends('testAssertReturn604')]
    public function testAssertReturn605(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 917,
        );
    }

    #[Depends('testAssertReturn605')]
    public function testAssertReturn606(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 918,
        );
    }

    #[Depends('testAssertReturn606')]
    public function testAssertReturn607(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 919,
        );
    }

    #[Depends('testAssertReturn607')]
    public function testAssertTrap608(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 920,
        );
    }

    #[Depends('testAssertTrap608')]
    public function testAssertTrap609(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 921,
        );
    }

    #[Depends('testAssertTrap609')]
    public function testAssertTrap610(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 922,
        );
    }

    #[Depends('testAssertTrap610')]
    public function testAssertTrap611(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 923,
        );
    }

    #[Depends('testAssertTrap611')]
    public function testAssertTrap612(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 924,
        );
    }

    #[Depends('testAssertTrap612')]
    public function testAssertTrap613(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 925,
        );
    }

    #[Depends('testAssertTrap613')]
    public function testAssertTrap614(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 926,
        );
    }

    #[Depends('testAssertTrap614')]
    public function testAssertTrap615(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 927,
        );
    }

    #[Depends('testAssertTrap615')]
    public function testAssertTrap616(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 928,
        );
    }

    #[Depends('testAssertTrap616')]
    public function testAssertTrap617(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 929,
        );
    }

    #[Depends('testAssertTrap617')]
    public function testAssertTrap618(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 930,
        );
    }

    #[Depends('testAssertTrap618')]
    public function testAssertTrap619(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 931,
        );
    }

    #[Depends('testAssertTrap619')]
    public function testAssertTrap620(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 932,
        );
    }

    #[Depends('testAssertTrap620')]
    public function testAssertTrap621(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 933,
        );
    }

    #[Depends('testAssertTrap621')]
    public function testModule622(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.11.wasm',
            name: null,
            line: 935,
        );
    }

    #[Depends('testModule622')]
    public function testAction623(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 965,
        );
    }

    #[Depends('testAction623')]
    public function testAssertTrap624(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 966,
        );
    }

    #[Depends('testAssertTrap624')]
    public function testAssertTrap625(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 967,
        );
    }

    #[Depends('testAssertTrap625')]
    public function testAssertReturn626(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 968,
        );
    }

    #[Depends('testAssertReturn626')]
    public function testAssertReturn627(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 969,
        );
    }

    #[Depends('testAssertReturn627')]
    public function testAssertReturn628(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 970,
        );
    }

    #[Depends('testAssertReturn628')]
    public function testAssertReturn629(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 971,
        );
    }

    #[Depends('testAssertReturn629')]
    public function testAssertTrap630(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 972,
        );
    }

    #[Depends('testAssertTrap630')]
    public function testAssertTrap631(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 973,
        );
    }

    #[Depends('testAssertTrap631')]
    public function testAssertTrap632(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 974,
        );
    }

    #[Depends('testAssertTrap632')]
    public function testAssertTrap633(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 975,
        );
    }

    #[Depends('testAssertTrap633')]
    public function testAssertTrap634(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 976,
        );
    }

    #[Depends('testAssertTrap634')]
    public function testAssertTrap635(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 977,
        );
    }

    #[Depends('testAssertTrap635')]
    public function testAssertReturn636(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 978,
        );
    }

    #[Depends('testAssertReturn636')]
    public function testAssertReturn637(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 979,
        );
    }

    #[Depends('testAssertReturn637')]
    public function testAssertReturn638(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 980,
        );
    }

    #[Depends('testAssertReturn638')]
    public function testAssertReturn639(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 981,
        );
    }

    #[Depends('testAssertReturn639')]
    public function testAssertReturn640(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 982,
        );
    }

    #[Depends('testAssertReturn640')]
    public function testAssertTrap641(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 983,
        );
    }

    #[Depends('testAssertTrap641')]
    public function testAssertTrap642(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 984,
        );
    }

    #[Depends('testAssertTrap642')]
    public function testAssertTrap643(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 985,
        );
    }

    #[Depends('testAssertTrap643')]
    public function testAssertTrap644(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 986,
        );
    }

    #[Depends('testAssertTrap644')]
    public function testAssertTrap645(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 987,
        );
    }

    #[Depends('testAssertTrap645')]
    public function testAssertTrap646(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 988,
        );
    }

    #[Depends('testAssertTrap646')]
    public function testAssertTrap647(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 989,
        );
    }

    #[Depends('testAssertTrap647')]
    public function testAssertTrap648(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 990,
        );
    }

    #[Depends('testAssertTrap648')]
    public function testAssertTrap649(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 991,
        );
    }

    #[Depends('testAssertTrap649')]
    public function testAssertTrap650(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 992,
        );
    }

    #[Depends('testAssertTrap650')]
    public function testAssertTrap651(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 993,
        );
    }

    #[Depends('testAssertTrap651')]
    public function testAssertTrap652(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 994,
        );
    }

    #[Depends('testAssertTrap652')]
    public function testAssertTrap653(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 995,
        );
    }

    #[Depends('testAssertTrap653')]
    public function testAssertTrap654(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 996,
        );
    }

    #[Depends('testAssertTrap654')]
    public function testAssertTrap655(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 997,
        );
    }

    #[Depends('testAssertTrap655')]
    public function testAssertTrap656(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 998,
        );
    }

    #[Depends('testAssertTrap656')]
    public function testAssertReturn657(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 999,
        );
    }

    #[Depends('testAssertReturn657')]
    public function testAssertReturn658(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1000,
        );
    }

    #[Depends('testAssertReturn658')]
    public function testAssertReturn659(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1001,
        );
    }

    #[Depends('testAssertReturn659')]
    public function testAssertReturn660(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1002,
        );
    }

    #[Depends('testAssertReturn660')]
    public function testAssertTrap661(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1003,
        );
    }

    #[Depends('testAssertTrap661')]
    public function testAssertTrap662(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1004,
        );
    }

    #[Depends('testAssertTrap662')]
    public function testAssertTrap663(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1005,
        );
    }

    #[Depends('testAssertTrap663')]
    public function testAssertTrap664(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1006,
        );
    }

    #[Depends('testAssertTrap664')]
    public function testAssertReturn665(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1007,
        );
    }

    #[Depends('testAssertReturn665')]
    public function testAssertReturn666(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1008,
        );
    }

    #[Depends('testAssertReturn666')]
    public function testAssertReturn667(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 1009,
        );
    }

    #[Depends('testAssertReturn667')]
    public function testAssertReturn668(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 1010,
        );
    }

    #[Depends('testAssertReturn668')]
    public function testAssertReturn669(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 1011,
        );
    }

    #[Depends('testAssertReturn669')]
    public function testAssertTrap670(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 1012,
        );
    }

    #[Depends('testAssertTrap670')]
    public function testAssertTrap671(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1013,
        );
    }

    #[Depends('testAssertTrap671')]
    public function testAssertTrap672(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1014,
        );
    }

    #[Depends('testAssertTrap672')]
    public function testAssertTrap673(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1015,
        );
    }

    #[Depends('testAssertTrap673')]
    public function testAssertTrap674(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1016,
        );
    }

    #[Depends('testAssertTrap674')]
    public function testAssertTrap675(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1017,
        );
    }

    #[Depends('testAssertTrap675')]
    public function testAssertTrap676(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1018,
        );
    }

    #[Depends('testAssertTrap676')]
    public function testAssertTrap677(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1019,
        );
    }

    #[Depends('testAssertTrap677')]
    public function testAssertTrap678(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1020,
        );
    }

    #[Depends('testAssertTrap678')]
    public function testAssertTrap679(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 1021,
        );
    }

    #[Depends('testAssertTrap679')]
    public function testAssertTrap680(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 1022,
        );
    }

    #[Depends('testAssertTrap680')]
    public function testAssertTrap681(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1023,
        );
    }

    #[Depends('testAssertTrap681')]
    public function testAssertTrap682(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1024,
        );
    }

    #[Depends('testAssertTrap682')]
    public function testAssertTrap683(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1025,
        );
    }

    #[Depends('testAssertTrap683')]
    public function testModule684(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.12.wasm',
            name: null,
            line: 1027,
        );
    }

    #[Depends('testModule684')]
    public function testAction685(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 1057,
        );
    }

    #[Depends('testAction685')]
    public function testAssertTrap686(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1058,
        );
    }

    #[Depends('testAssertTrap686')]
    public function testAssertTrap687(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1059,
        );
    }

    #[Depends('testAssertTrap687')]
    public function testAssertReturn688(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1060,
        );
    }

    #[Depends('testAssertReturn688')]
    public function testAssertReturn689(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1061,
        );
    }

    #[Depends('testAssertReturn689')]
    public function testAssertReturn690(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1062,
        );
    }

    #[Depends('testAssertReturn690')]
    public function testAssertReturn691(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1063,
        );
    }

    #[Depends('testAssertReturn691')]
    public function testAssertTrap692(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 1064,
        );
    }

    #[Depends('testAssertTrap692')]
    public function testAssertTrap693(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1065,
        );
    }

    #[Depends('testAssertTrap693')]
    public function testAssertTrap694(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1066,
        );
    }

    #[Depends('testAssertTrap694')]
    public function testAssertTrap695(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1067,
        );
    }

    #[Depends('testAssertTrap695')]
    public function testAssertTrap696(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1068,
        );
    }

    #[Depends('testAssertTrap696')]
    public function testAssertTrap697(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 1069,
        );
    }

    #[Depends('testAssertTrap697')]
    public function testAssertReturn698(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 1070,
        );
    }

    #[Depends('testAssertReturn698')]
    public function testAssertReturn699(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 1071,
        );
    }

    #[Depends('testAssertReturn699')]
    public function testAssertReturn700(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 1072,
        );
    }

    #[Depends('testAssertReturn700')]
    public function testAssertReturn701(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1073,
        );
    }

    #[Depends('testAssertReturn701')]
    public function testAssertReturn702(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1074,
        );
    }

    #[Depends('testAssertReturn702')]
    public function testAssertTrap703(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1075,
        );
    }

    #[Depends('testAssertTrap703')]
    public function testAssertTrap704(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1076,
        );
    }

    #[Depends('testAssertTrap704')]
    public function testAssertTrap705(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1077,
        );
    }

    #[Depends('testAssertTrap705')]
    public function testAssertTrap706(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1078,
        );
    }

    #[Depends('testAssertTrap706')]
    public function testAssertTrap707(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1079,
        );
    }

    #[Depends('testAssertTrap707')]
    public function testAssertTrap708(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1080,
        );
    }

    #[Depends('testAssertTrap708')]
    public function testAssertTrap709(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1081,
        );
    }

    #[Depends('testAssertTrap709')]
    public function testAssertTrap710(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1082,
        );
    }

    #[Depends('testAssertTrap710')]
    public function testAssertReturn711(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1083,
        );
    }

    #[Depends('testAssertReturn711')]
    public function testAssertReturn712(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1084,
        );
    }

    #[Depends('testAssertReturn712')]
    public function testAssertTrap713(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1085,
        );
    }

    #[Depends('testAssertTrap713')]
    public function testAssertTrap714(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1086,
        );
    }

    #[Depends('testAssertTrap714')]
    public function testAssertTrap715(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1087,
        );
    }

    #[Depends('testAssertTrap715')]
    public function testAssertTrap716(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1088,
        );
    }

    #[Depends('testAssertTrap716')]
    public function testAssertTrap717(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1089,
        );
    }

    #[Depends('testAssertTrap717')]
    public function testAssertTrap718(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 1090,
        );
    }

    #[Depends('testAssertTrap718')]
    public function testAssertReturn719(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1091,
        );
    }

    #[Depends('testAssertReturn719')]
    public function testAssertReturn720(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1092,
        );
    }

    #[Depends('testAssertReturn720')]
    public function testAssertReturn721(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1093,
        );
    }

    #[Depends('testAssertReturn721')]
    public function testAssertReturn722(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1094,
        );
    }

    #[Depends('testAssertReturn722')]
    public function testAssertTrap723(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1095,
        );
    }

    #[Depends('testAssertTrap723')]
    public function testAssertTrap724(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1096,
        );
    }

    #[Depends('testAssertTrap724')]
    public function testAssertTrap725(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1097,
        );
    }

    #[Depends('testAssertTrap725')]
    public function testAssertTrap726(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1098,
        );
    }

    #[Depends('testAssertTrap726')]
    public function testAssertReturn727(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1099,
        );
    }

    #[Depends('testAssertReturn727')]
    public function testAssertReturn728(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1100,
        );
    }

    #[Depends('testAssertReturn728')]
    public function testAssertReturn729(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 1101,
        );
    }

    #[Depends('testAssertReturn729')]
    public function testAssertReturn730(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 1102,
        );
    }

    #[Depends('testAssertReturn730')]
    public function testAssertReturn731(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 1103,
        );
    }

    #[Depends('testAssertReturn731')]
    public function testAssertTrap732(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 1104,
        );
    }

    #[Depends('testAssertTrap732')]
    public function testAssertTrap733(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1105,
        );
    }

    #[Depends('testAssertTrap733')]
    public function testAssertTrap734(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1106,
        );
    }

    #[Depends('testAssertTrap734')]
    public function testAssertTrap735(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1107,
        );
    }

    #[Depends('testAssertTrap735')]
    public function testAssertTrap736(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1108,
        );
    }

    #[Depends('testAssertTrap736')]
    public function testAssertTrap737(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1109,
        );
    }

    #[Depends('testAssertTrap737')]
    public function testAssertTrap738(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1110,
        );
    }

    #[Depends('testAssertTrap738')]
    public function testAssertTrap739(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1111,
        );
    }

    #[Depends('testAssertTrap739')]
    public function testAssertTrap740(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1112,
        );
    }

    #[Depends('testAssertTrap740')]
    public function testAssertTrap741(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 1113,
        );
    }

    #[Depends('testAssertTrap741')]
    public function testAssertTrap742(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 1114,
        );
    }

    #[Depends('testAssertTrap742')]
    public function testAssertTrap743(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1115,
        );
    }

    #[Depends('testAssertTrap743')]
    public function testAssertTrap744(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1116,
        );
    }

    #[Depends('testAssertTrap744')]
    public function testAssertTrap745(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1117,
        );
    }

    #[Depends('testAssertTrap745')]
    public function testModule746(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.13.wasm',
            name: null,
            line: 1119,
        );
    }

    #[Depends('testModule746')]
    public function testAction747(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 1149,
        );
    }

    #[Depends('testAction747')]
    public function testAssertTrap748(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1150,
        );
    }

    #[Depends('testAssertTrap748')]
    public function testAssertTrap749(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1151,
        );
    }

    #[Depends('testAssertTrap749')]
    public function testAssertReturn750(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1152,
        );
    }

    #[Depends('testAssertReturn750')]
    public function testAssertReturn751(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1153,
        );
    }

    #[Depends('testAssertReturn751')]
    public function testAssertReturn752(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1154,
        );
    }

    #[Depends('testAssertReturn752')]
    public function testAssertReturn753(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1155,
        );
    }

    #[Depends('testAssertReturn753')]
    public function testAssertTrap754(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 1156,
        );
    }

    #[Depends('testAssertTrap754')]
    public function testAssertTrap755(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1157,
        );
    }

    #[Depends('testAssertTrap755')]
    public function testAssertTrap756(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1158,
        );
    }

    #[Depends('testAssertTrap756')]
    public function testAssertTrap757(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1159,
        );
    }

    #[Depends('testAssertTrap757')]
    public function testAssertTrap758(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1160,
        );
    }

    #[Depends('testAssertTrap758')]
    public function testAssertTrap759(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 1161,
        );
    }

    #[Depends('testAssertTrap759')]
    public function testAssertReturn760(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 1162,
        );
    }

    #[Depends('testAssertReturn760')]
    public function testAssertTrap761(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 1163,
        );
    }

    #[Depends('testAssertTrap761')]
    public function testAssertTrap762(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            text: 'uninitialized element',
            line: 1164,
        );
    }

    #[Depends('testAssertTrap762')]
    public function testAssertTrap763(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 1165,
        );
    }

    #[Depends('testAssertTrap763')]
    public function testAssertReturn764(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1166,
        );
    }

    #[Depends('testAssertReturn764')]
    public function testAssertTrap765(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1167,
        );
    }

    #[Depends('testAssertTrap765')]
    public function testAssertTrap766(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1168,
        );
    }

    #[Depends('testAssertTrap766')]
    public function testAssertTrap767(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1169,
        );
    }

    #[Depends('testAssertTrap767')]
    public function testAssertTrap768(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1170,
        );
    }

    #[Depends('testAssertTrap768')]
    public function testAssertTrap769(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1171,
        );
    }

    #[Depends('testAssertTrap769')]
    public function testAssertTrap770(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1172,
        );
    }

    #[Depends('testAssertTrap770')]
    public function testAssertTrap771(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1173,
        );
    }

    #[Depends('testAssertTrap771')]
    public function testAssertTrap772(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1174,
        );
    }

    #[Depends('testAssertTrap772')]
    public function testAssertTrap773(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 1175,
        );
    }

    #[Depends('testAssertTrap773')]
    public function testAssertTrap774(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 1176,
        );
    }

    #[Depends('testAssertTrap774')]
    public function testAssertTrap775(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1177,
        );
    }

    #[Depends('testAssertTrap775')]
    public function testAssertTrap776(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1178,
        );
    }

    #[Depends('testAssertTrap776')]
    public function testAssertTrap777(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1179,
        );
    }

    #[Depends('testAssertTrap777')]
    public function testAssertTrap778(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1180,
        );
    }

    #[Depends('testAssertTrap778')]
    public function testAssertTrap779(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1181,
        );
    }

    #[Depends('testAssertTrap779')]
    public function testAssertTrap780(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 1182,
        );
    }

    #[Depends('testAssertTrap780')]
    public function testAssertReturn781(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1183,
        );
    }

    #[Depends('testAssertReturn781')]
    public function testAssertReturn782(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1184,
        );
    }

    #[Depends('testAssertReturn782')]
    public function testAssertReturn783(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1185,
        );
    }

    #[Depends('testAssertReturn783')]
    public function testAssertReturn784(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1186,
        );
    }

    #[Depends('testAssertReturn784')]
    public function testAssertTrap785(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1187,
        );
    }

    #[Depends('testAssertTrap785')]
    public function testAssertTrap786(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1188,
        );
    }

    #[Depends('testAssertTrap786')]
    public function testAssertTrap787(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1189,
        );
    }

    #[Depends('testAssertTrap787')]
    public function testAssertTrap788(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1190,
        );
    }

    #[Depends('testAssertTrap788')]
    public function testAssertReturn789(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1191,
        );
    }

    #[Depends('testAssertReturn789')]
    public function testAssertReturn790(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1192,
        );
    }

    #[Depends('testAssertReturn790')]
    public function testAssertReturn791(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 1193,
        );
    }

    #[Depends('testAssertReturn791')]
    public function testAssertReturn792(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 1194,
        );
    }

    #[Depends('testAssertReturn792')]
    public function testAssertReturn793(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 1195,
        );
    }

    #[Depends('testAssertReturn793')]
    public function testAssertTrap794(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 1196,
        );
    }

    #[Depends('testAssertTrap794')]
    public function testAssertTrap795(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1197,
        );
    }

    #[Depends('testAssertTrap795')]
    public function testAssertTrap796(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1198,
        );
    }

    #[Depends('testAssertTrap796')]
    public function testAssertTrap797(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1199,
        );
    }

    #[Depends('testAssertTrap797')]
    public function testAssertTrap798(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1200,
        );
    }

    #[Depends('testAssertTrap798')]
    public function testAssertTrap799(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1201,
        );
    }

    #[Depends('testAssertTrap799')]
    public function testAssertTrap800(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1202,
        );
    }

    #[Depends('testAssertTrap800')]
    public function testAssertTrap801(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1203,
        );
    }

    #[Depends('testAssertTrap801')]
    public function testAssertTrap802(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1204,
        );
    }

    #[Depends('testAssertTrap802')]
    public function testAssertTrap803(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 1205,
        );
    }

    #[Depends('testAssertTrap803')]
    public function testAssertTrap804(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 1206,
        );
    }

    #[Depends('testAssertTrap804')]
    public function testAssertTrap805(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1207,
        );
    }

    #[Depends('testAssertTrap805')]
    public function testAssertTrap806(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1208,
        );
    }

    #[Depends('testAssertTrap806')]
    public function testAssertTrap807(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1209,
        );
    }

    #[Depends('testAssertTrap807')]
    public function testModule808(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.14.wasm',
            name: null,
            line: 1211,
        );
    }

    #[Depends('testModule808')]
    public function testAction809(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 1241,
        );
    }

    #[Depends('testAction809')]
    public function testAssertTrap810(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1242,
        );
    }

    #[Depends('testAssertTrap810')]
    public function testAssertTrap811(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1243,
        );
    }

    #[Depends('testAssertTrap811')]
    public function testAssertReturn812(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1244,
        );
    }

    #[Depends('testAssertReturn812')]
    public function testAssertReturn813(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1245,
        );
    }

    #[Depends('testAssertReturn813')]
    public function testAssertReturn814(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1246,
        );
    }

    #[Depends('testAssertReturn814')]
    public function testAssertReturn815(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1247,
        );
    }

    #[Depends('testAssertReturn815')]
    public function testAssertTrap816(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 1248,
        );
    }

    #[Depends('testAssertTrap816')]
    public function testAssertTrap817(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1249,
        );
    }

    #[Depends('testAssertTrap817')]
    public function testAssertTrap818(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1250,
        );
    }

    #[Depends('testAssertTrap818')]
    public function testAssertTrap819(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1251,
        );
    }

    #[Depends('testAssertTrap819')]
    public function testAssertTrap820(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1252,
        );
    }

    #[Depends('testAssertTrap820')]
    public function testAssertTrap821(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 1253,
        );
    }

    #[Depends('testAssertTrap821')]
    public function testAssertReturn822(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 1254,
        );
    }

    #[Depends('testAssertReturn822')]
    public function testAssertReturn823(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 1255,
        );
    }

    #[Depends('testAssertReturn823')]
    public function testAssertReturn824(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 1256,
        );
    }

    #[Depends('testAssertReturn824')]
    public function testAssertReturn825(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1257,
        );
    }

    #[Depends('testAssertReturn825')]
    public function testAssertReturn826(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1258,
        );
    }

    #[Depends('testAssertReturn826')]
    public function testAssertTrap827(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1259,
        );
    }

    #[Depends('testAssertTrap827')]
    public function testAssertTrap828(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1260,
        );
    }

    #[Depends('testAssertTrap828')]
    public function testAssertTrap829(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1261,
        );
    }

    #[Depends('testAssertTrap829')]
    public function testAssertTrap830(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1262,
        );
    }

    #[Depends('testAssertTrap830')]
    public function testAssertTrap831(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1263,
        );
    }

    #[Depends('testAssertTrap831')]
    public function testAssertTrap832(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1264,
        );
    }

    #[Depends('testAssertTrap832')]
    public function testAssertTrap833(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1265,
        );
    }

    #[Depends('testAssertTrap833')]
    public function testAssertTrap834(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1266,
        );
    }

    #[Depends('testAssertTrap834')]
    public function testAssertTrap835(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 1267,
        );
    }

    #[Depends('testAssertTrap835')]
    public function testAssertTrap836(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 1268,
        );
    }

    #[Depends('testAssertTrap836')]
    public function testAssertTrap837(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1269,
        );
    }

    #[Depends('testAssertTrap837')]
    public function testAssertTrap838(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1270,
        );
    }

    #[Depends('testAssertTrap838')]
    public function testAssertTrap839(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1271,
        );
    }

    #[Depends('testAssertTrap839')]
    public function testAssertTrap840(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1272,
        );
    }

    #[Depends('testAssertTrap840')]
    public function testAssertTrap841(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1273,
        );
    }

    #[Depends('testAssertTrap841')]
    public function testAssertTrap842(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 1274,
        );
    }

    #[Depends('testAssertTrap842')]
    public function testAssertReturn843(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1275,
        );
    }

    #[Depends('testAssertReturn843')]
    public function testAssertReturn844(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1276,
        );
    }

    #[Depends('testAssertReturn844')]
    public function testAssertReturn845(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1277,
        );
    }

    #[Depends('testAssertReturn845')]
    public function testAssertReturn846(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1278,
        );
    }

    #[Depends('testAssertReturn846')]
    public function testAssertTrap847(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1279,
        );
    }

    #[Depends('testAssertTrap847')]
    public function testAssertTrap848(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1280,
        );
    }

    #[Depends('testAssertTrap848')]
    public function testAssertTrap849(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1281,
        );
    }

    #[Depends('testAssertTrap849')]
    public function testAssertTrap850(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1282,
        );
    }

    #[Depends('testAssertTrap850')]
    public function testAssertReturn851(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1283,
        );
    }

    #[Depends('testAssertReturn851')]
    public function testAssertReturn852(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1284,
        );
    }

    #[Depends('testAssertReturn852')]
    public function testAssertReturn853(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 1285,
        );
    }

    #[Depends('testAssertReturn853')]
    public function testAssertReturn854(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 1286,
        );
    }

    #[Depends('testAssertReturn854')]
    public function testAssertReturn855(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 1287,
        );
    }

    #[Depends('testAssertReturn855')]
    public function testAssertTrap856(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 1288,
        );
    }

    #[Depends('testAssertTrap856')]
    public function testAssertTrap857(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1289,
        );
    }

    #[Depends('testAssertTrap857')]
    public function testAssertTrap858(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1290,
        );
    }

    #[Depends('testAssertTrap858')]
    public function testAssertTrap859(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1291,
        );
    }

    #[Depends('testAssertTrap859')]
    public function testAssertTrap860(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1292,
        );
    }

    #[Depends('testAssertTrap860')]
    public function testAssertTrap861(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1293,
        );
    }

    #[Depends('testAssertTrap861')]
    public function testAssertTrap862(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1294,
        );
    }

    #[Depends('testAssertTrap862')]
    public function testAssertTrap863(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1295,
        );
    }

    #[Depends('testAssertTrap863')]
    public function testAssertTrap864(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1296,
        );
    }

    #[Depends('testAssertTrap864')]
    public function testAssertTrap865(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 1297,
        );
    }

    #[Depends('testAssertTrap865')]
    public function testAssertTrap866(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 1298,
        );
    }

    #[Depends('testAssertTrap866')]
    public function testAssertTrap867(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1299,
        );
    }

    #[Depends('testAssertTrap867')]
    public function testAssertTrap868(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1300,
        );
    }

    #[Depends('testAssertTrap868')]
    public function testAssertTrap869(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1301,
        );
    }

    #[Depends('testAssertTrap869')]
    public function testModule870(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.15.wasm',
            name: null,
            line: 1303,
        );
    }

    #[Depends('testModule870')]
    public function testAction871(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 1333,
        );
    }

    #[Depends('testAction871')]
    public function testAssertTrap872(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1334,
        );
    }

    #[Depends('testAssertTrap872')]
    public function testAssertTrap873(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1335,
        );
    }

    #[Depends('testAssertTrap873')]
    public function testAssertReturn874(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1336,
        );
    }

    #[Depends('testAssertReturn874')]
    public function testAssertReturn875(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1337,
        );
    }

    #[Depends('testAssertReturn875')]
    public function testAssertReturn876(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1338,
        );
    }

    #[Depends('testAssertReturn876')]
    public function testAssertReturn877(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1339,
        );
    }

    #[Depends('testAssertReturn877')]
    public function testAssertTrap878(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 1340,
        );
    }

    #[Depends('testAssertTrap878')]
    public function testAssertTrap879(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1341,
        );
    }

    #[Depends('testAssertTrap879')]
    public function testAssertTrap880(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1342,
        );
    }

    #[Depends('testAssertTrap880')]
    public function testAssertTrap881(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1343,
        );
    }

    #[Depends('testAssertTrap881')]
    public function testAssertTrap882(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1344,
        );
    }

    #[Depends('testAssertTrap882')]
    public function testAssertTrap883(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 1345,
        );
    }

    #[Depends('testAssertTrap883')]
    public function testAssertReturn884(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 1346,
        );
    }

    #[Depends('testAssertReturn884')]
    public function testAssertReturn885(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 1347,
        );
    }

    #[Depends('testAssertReturn885')]
    public function testAssertReturn886(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 1348,
        );
    }

    #[Depends('testAssertReturn886')]
    public function testAssertReturn887(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1349,
        );
    }

    #[Depends('testAssertReturn887')]
    public function testAssertReturn888(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1350,
        );
    }

    #[Depends('testAssertReturn888')]
    public function testAssertTrap889(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1351,
        );
    }

    #[Depends('testAssertTrap889')]
    public function testAssertTrap890(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1352,
        );
    }

    #[Depends('testAssertTrap890')]
    public function testAssertTrap891(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1353,
        );
    }

    #[Depends('testAssertTrap891')]
    public function testAssertTrap892(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1354,
        );
    }

    #[Depends('testAssertTrap892')]
    public function testAssertTrap893(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1355,
        );
    }

    #[Depends('testAssertTrap893')]
    public function testAssertTrap894(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1356,
        );
    }

    #[Depends('testAssertTrap894')]
    public function testAssertTrap895(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1357,
        );
    }

    #[Depends('testAssertTrap895')]
    public function testAssertTrap896(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1358,
        );
    }

    #[Depends('testAssertTrap896')]
    public function testAssertTrap897(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 1359,
        );
    }

    #[Depends('testAssertTrap897')]
    public function testAssertReturn898(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1360,
        );
    }

    #[Depends('testAssertReturn898')]
    public function testAssertReturn899(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1361,
        );
    }

    #[Depends('testAssertReturn899')]
    public function testAssertTrap900(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1362,
        );
    }

    #[Depends('testAssertTrap900')]
    public function testAssertTrap901(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1363,
        );
    }

    #[Depends('testAssertTrap901')]
    public function testAssertTrap902(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1364,
        );
    }

    #[Depends('testAssertTrap902')]
    public function testAssertTrap903(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1365,
        );
    }

    #[Depends('testAssertTrap903')]
    public function testAssertTrap904(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 1366,
        );
    }

    #[Depends('testAssertTrap904')]
    public function testAssertReturn905(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1367,
        );
    }

    #[Depends('testAssertReturn905')]
    public function testAssertReturn906(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1368,
        );
    }

    #[Depends('testAssertReturn906')]
    public function testAssertReturn907(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1369,
        );
    }

    #[Depends('testAssertReturn907')]
    public function testAssertReturn908(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1370,
        );
    }

    #[Depends('testAssertReturn908')]
    public function testAssertTrap909(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1371,
        );
    }

    #[Depends('testAssertTrap909')]
    public function testAssertTrap910(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1372,
        );
    }

    #[Depends('testAssertTrap910')]
    public function testAssertTrap911(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1373,
        );
    }

    #[Depends('testAssertTrap911')]
    public function testAssertTrap912(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1374,
        );
    }

    #[Depends('testAssertTrap912')]
    public function testAssertReturn913(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1375,
        );
    }

    #[Depends('testAssertReturn913')]
    public function testAssertReturn914(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1376,
        );
    }

    #[Depends('testAssertReturn914')]
    public function testAssertReturn915(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 1377,
        );
    }

    #[Depends('testAssertReturn915')]
    public function testAssertReturn916(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 1378,
        );
    }

    #[Depends('testAssertReturn916')]
    public function testAssertReturn917(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 1379,
        );
    }

    #[Depends('testAssertReturn917')]
    public function testAssertTrap918(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 1380,
        );
    }

    #[Depends('testAssertTrap918')]
    public function testAssertTrap919(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1381,
        );
    }

    #[Depends('testAssertTrap919')]
    public function testAssertTrap920(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1382,
        );
    }

    #[Depends('testAssertTrap920')]
    public function testAssertTrap921(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1383,
        );
    }

    #[Depends('testAssertTrap921')]
    public function testAssertTrap922(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1384,
        );
    }

    #[Depends('testAssertTrap922')]
    public function testAssertTrap923(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1385,
        );
    }

    #[Depends('testAssertTrap923')]
    public function testAssertTrap924(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1386,
        );
    }

    #[Depends('testAssertTrap924')]
    public function testAssertTrap925(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1387,
        );
    }

    #[Depends('testAssertTrap925')]
    public function testAssertTrap926(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1388,
        );
    }

    #[Depends('testAssertTrap926')]
    public function testAssertTrap927(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 1389,
        );
    }

    #[Depends('testAssertTrap927')]
    public function testAssertTrap928(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 1390,
        );
    }

    #[Depends('testAssertTrap928')]
    public function testAssertTrap929(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1391,
        );
    }

    #[Depends('testAssertTrap929')]
    public function testAssertTrap930(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1392,
        );
    }

    #[Depends('testAssertTrap930')]
    public function testAssertTrap931(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1393,
        );
    }

    #[Depends('testAssertTrap931')]
    public function testModule932(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.16.wasm',
            name: null,
            line: 1395,
        );
    }

    #[Depends('testModule932')]
    public function testAction933(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 1425,
        );
    }

    #[Depends('testAction933')]
    public function testAssertTrap934(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1426,
        );
    }

    #[Depends('testAssertTrap934')]
    public function testAssertTrap935(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1427,
        );
    }

    #[Depends('testAssertTrap935')]
    public function testAssertReturn936(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1428,
        );
    }

    #[Depends('testAssertReturn936')]
    public function testAssertReturn937(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1429,
        );
    }

    #[Depends('testAssertReturn937')]
    public function testAssertReturn938(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1430,
        );
    }

    #[Depends('testAssertReturn938')]
    public function testAssertReturn939(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1431,
        );
    }

    #[Depends('testAssertReturn939')]
    public function testAssertTrap940(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 1432,
        );
    }

    #[Depends('testAssertTrap940')]
    public function testAssertTrap941(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1433,
        );
    }

    #[Depends('testAssertTrap941')]
    public function testAssertTrap942(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1434,
        );
    }

    #[Depends('testAssertTrap942')]
    public function testAssertTrap943(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1435,
        );
    }

    #[Depends('testAssertTrap943')]
    public function testAssertReturn944(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 1436,
        );
    }

    #[Depends('testAssertReturn944')]
    public function testAssertReturn945(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 1437,
        );
    }

    #[Depends('testAssertReturn945')]
    public function testAssertReturn946(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 1438,
        );
    }

    #[Depends('testAssertReturn946')]
    public function testAssertReturn947(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1439,
        );
    }

    #[Depends('testAssertReturn947')]
    public function testAssertReturn948(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1440,
        );
    }

    #[Depends('testAssertReturn948')]
    public function testAssertTrap949(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 1441,
        );
    }

    #[Depends('testAssertTrap949')]
    public function testAssertTrap950(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 1442,
        );
    }

    #[Depends('testAssertTrap950')]
    public function testAssertTrap951(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1443,
        );
    }

    #[Depends('testAssertTrap951')]
    public function testAssertTrap952(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1444,
        );
    }

    #[Depends('testAssertTrap952')]
    public function testAssertTrap953(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1445,
        );
    }

    #[Depends('testAssertTrap953')]
    public function testAssertTrap954(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1446,
        );
    }

    #[Depends('testAssertTrap954')]
    public function testAssertTrap955(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1447,
        );
    }

    #[Depends('testAssertTrap955')]
    public function testAssertTrap956(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1448,
        );
    }

    #[Depends('testAssertTrap956')]
    public function testAssertTrap957(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1449,
        );
    }

    #[Depends('testAssertTrap957')]
    public function testAssertTrap958(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1450,
        );
    }

    #[Depends('testAssertTrap958')]
    public function testAssertTrap959(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 1451,
        );
    }

    #[Depends('testAssertTrap959')]
    public function testAssertTrap960(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 1452,
        );
    }

    #[Depends('testAssertTrap960')]
    public function testAssertTrap961(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1453,
        );
    }

    #[Depends('testAssertTrap961')]
    public function testAssertTrap962(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1454,
        );
    }

    #[Depends('testAssertTrap962')]
    public function testAssertTrap963(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1455,
        );
    }

    #[Depends('testAssertTrap963')]
    public function testAssertTrap964(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1456,
        );
    }

    #[Depends('testAssertTrap964')]
    public function testAssertTrap965(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1457,
        );
    }

    #[Depends('testAssertTrap965')]
    public function testAssertTrap966(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 1458,
        );
    }

    #[Depends('testAssertTrap966')]
    public function testAssertReturn967(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1459,
        );
    }

    #[Depends('testAssertReturn967')]
    public function testAssertReturn968(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1460,
        );
    }

    #[Depends('testAssertReturn968')]
    public function testAssertReturn969(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1461,
        );
    }

    #[Depends('testAssertReturn969')]
    public function testAssertReturn970(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1462,
        );
    }

    #[Depends('testAssertReturn970')]
    public function testAssertTrap971(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1463,
        );
    }

    #[Depends('testAssertTrap971')]
    public function testAssertTrap972(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1464,
        );
    }

    #[Depends('testAssertTrap972')]
    public function testAssertTrap973(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1465,
        );
    }

    #[Depends('testAssertTrap973')]
    public function testAssertTrap974(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1466,
        );
    }

    #[Depends('testAssertTrap974')]
    public function testAssertReturn975(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1467,
        );
    }

    #[Depends('testAssertReturn975')]
    public function testAssertReturn976(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1468,
        );
    }

    #[Depends('testAssertReturn976')]
    public function testAssertReturn977(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 1469,
        );
    }

    #[Depends('testAssertReturn977')]
    public function testAssertReturn978(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 1470,
        );
    }

    #[Depends('testAssertReturn978')]
    public function testAssertReturn979(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 1471,
        );
    }

    #[Depends('testAssertReturn979')]
    public function testAssertTrap980(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 1472,
        );
    }

    #[Depends('testAssertTrap980')]
    public function testAssertTrap981(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1473,
        );
    }

    #[Depends('testAssertTrap981')]
    public function testAssertTrap982(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1474,
        );
    }

    #[Depends('testAssertTrap982')]
    public function testAssertTrap983(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1475,
        );
    }

    #[Depends('testAssertTrap983')]
    public function testAssertTrap984(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1476,
        );
    }

    #[Depends('testAssertTrap984')]
    public function testAssertTrap985(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1477,
        );
    }

    #[Depends('testAssertTrap985')]
    public function testAssertTrap986(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1478,
        );
    }

    #[Depends('testAssertTrap986')]
    public function testAssertTrap987(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1479,
        );
    }

    #[Depends('testAssertTrap987')]
    public function testAssertTrap988(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1480,
        );
    }

    #[Depends('testAssertTrap988')]
    public function testAssertTrap989(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 1481,
        );
    }

    #[Depends('testAssertTrap989')]
    public function testAssertTrap990(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 1482,
        );
    }

    #[Depends('testAssertTrap990')]
    public function testAssertTrap991(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1483,
        );
    }

    #[Depends('testAssertTrap991')]
    public function testAssertTrap992(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1484,
        );
    }

    #[Depends('testAssertTrap992')]
    public function testAssertTrap993(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1485,
        );
    }

    #[Depends('testAssertTrap993')]
    public function testModule994(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.17.wasm',
            name: null,
            line: 1487,
        );
    }

    #[Depends('testModule994')]
    public function testAction995(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 1517,
        );
    }

    #[Depends('testAction995')]
    public function testAssertTrap996(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1518,
        );
    }

    #[Depends('testAssertTrap996')]
    public function testAssertTrap997(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1519,
        );
    }

    #[Depends('testAssertTrap997')]
    public function testAssertReturn998(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1520,
        );
    }

    #[Depends('testAssertReturn998')]
    public function testAssertReturn999(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1521,
        );
    }

    #[Depends('testAssertReturn999')]
    public function testAssertReturn1000(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1522,
        );
    }

    #[Depends('testAssertReturn1000')]
    public function testAssertReturn1001(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1523,
        );
    }

    #[Depends('testAssertReturn1001')]
    public function testAssertTrap1002(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 1524,
        );
    }

    #[Depends('testAssertTrap1002')]
    public function testAssertTrap1003(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1525,
        );
    }

    #[Depends('testAssertTrap1003')]
    public function testAssertTrap1004(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1526,
        );
    }

    #[Depends('testAssertTrap1004')]
    public function testAssertTrap1005(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1527,
        );
    }

    #[Depends('testAssertTrap1005')]
    public function testAssertTrap1006(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1528,
        );
    }

    #[Depends('testAssertTrap1006')]
    public function testAssertTrap1007(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 1529,
        );
    }

    #[Depends('testAssertTrap1007')]
    public function testAssertTrap1008(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            text: 'uninitialized element',
            line: 1530,
        );
    }

    #[Depends('testAssertTrap1008')]
    public function testAssertTrap1009(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 1531,
        );
    }

    #[Depends('testAssertTrap1009')]
    public function testAssertReturn1010(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 1532,
        );
    }

    #[Depends('testAssertReturn1010')]
    public function testAssertReturn1011(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 1533,
        );
    }

    #[Depends('testAssertReturn1011')]
    public function testAssertReturn1012(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 1534,
        );
    }

    #[Depends('testAssertReturn1012')]
    public function testAssertReturn1013(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1535,
        );
    }

    #[Depends('testAssertReturn1013')]
    public function testAssertReturn1014(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1536,
        );
    }

    #[Depends('testAssertReturn1014')]
    public function testAssertTrap1015(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1537,
        );
    }

    #[Depends('testAssertTrap1015')]
    public function testAssertTrap1016(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1538,
        );
    }

    #[Depends('testAssertTrap1016')]
    public function testAssertTrap1017(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1539,
        );
    }

    #[Depends('testAssertTrap1017')]
    public function testAssertTrap1018(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1540,
        );
    }

    #[Depends('testAssertTrap1018')]
    public function testAssertTrap1019(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1541,
        );
    }

    #[Depends('testAssertTrap1019')]
    public function testAssertTrap1020(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1542,
        );
    }

    #[Depends('testAssertTrap1020')]
    public function testAssertTrap1021(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 1543,
        );
    }

    #[Depends('testAssertTrap1021')]
    public function testAssertTrap1022(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 1544,
        );
    }

    #[Depends('testAssertTrap1022')]
    public function testAssertTrap1023(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1545,
        );
    }

    #[Depends('testAssertTrap1023')]
    public function testAssertTrap1024(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1546,
        );
    }

    #[Depends('testAssertTrap1024')]
    public function testAssertTrap1025(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1547,
        );
    }

    #[Depends('testAssertTrap1025')]
    public function testAssertTrap1026(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1548,
        );
    }

    #[Depends('testAssertTrap1026')]
    public function testAssertTrap1027(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1549,
        );
    }

    #[Depends('testAssertTrap1027')]
    public function testAssertTrap1028(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 1550,
        );
    }

    #[Depends('testAssertTrap1028')]
    public function testAssertReturn1029(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1551,
        );
    }

    #[Depends('testAssertReturn1029')]
    public function testAssertReturn1030(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1552,
        );
    }

    #[Depends('testAssertReturn1030')]
    public function testAssertReturn1031(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1553,
        );
    }

    #[Depends('testAssertReturn1031')]
    public function testAssertReturn1032(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1554,
        );
    }

    #[Depends('testAssertReturn1032')]
    public function testAssertTrap1033(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1555,
        );
    }

    #[Depends('testAssertTrap1033')]
    public function testAssertTrap1034(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1556,
        );
    }

    #[Depends('testAssertTrap1034')]
    public function testAssertTrap1035(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1557,
        );
    }

    #[Depends('testAssertTrap1035')]
    public function testAssertTrap1036(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1558,
        );
    }

    #[Depends('testAssertTrap1036')]
    public function testAssertReturn1037(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1559,
        );
    }

    #[Depends('testAssertReturn1037')]
    public function testAssertReturn1038(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1560,
        );
    }

    #[Depends('testAssertReturn1038')]
    public function testAssertReturn1039(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 1561,
        );
    }

    #[Depends('testAssertReturn1039')]
    public function testAssertReturn1040(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 1562,
        );
    }

    #[Depends('testAssertReturn1040')]
    public function testAssertReturn1041(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 1563,
        );
    }

    #[Depends('testAssertReturn1041')]
    public function testAssertTrap1042(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 1564,
        );
    }

    #[Depends('testAssertTrap1042')]
    public function testAssertTrap1043(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1565,
        );
    }

    #[Depends('testAssertTrap1043')]
    public function testAssertTrap1044(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1566,
        );
    }

    #[Depends('testAssertTrap1044')]
    public function testAssertTrap1045(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1567,
        );
    }

    #[Depends('testAssertTrap1045')]
    public function testAssertTrap1046(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1568,
        );
    }

    #[Depends('testAssertTrap1046')]
    public function testAssertTrap1047(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1569,
        );
    }

    #[Depends('testAssertTrap1047')]
    public function testAssertTrap1048(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1570,
        );
    }

    #[Depends('testAssertTrap1048')]
    public function testAssertTrap1049(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1571,
        );
    }

    #[Depends('testAssertTrap1049')]
    public function testAssertTrap1050(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1572,
        );
    }

    #[Depends('testAssertTrap1050')]
    public function testAssertTrap1051(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 1573,
        );
    }

    #[Depends('testAssertTrap1051')]
    public function testAssertTrap1052(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 1574,
        );
    }

    #[Depends('testAssertTrap1052')]
    public function testAssertTrap1053(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1575,
        );
    }

    #[Depends('testAssertTrap1053')]
    public function testAssertTrap1054(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1576,
        );
    }

    #[Depends('testAssertTrap1054')]
    public function testAssertTrap1055(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1577,
        );
    }

    #[Depends('testAssertTrap1055')]
    public function testModule1056(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.18.wasm',
            name: null,
            line: 1579,
        );
    }

    #[Depends('testModule1056')]
    public function testAction1057(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 1609,
        );
    }

    #[Depends('testAction1057')]
    public function testAssertTrap1058(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1610,
        );
    }

    #[Depends('testAssertTrap1058')]
    public function testAssertTrap1059(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1611,
        );
    }

    #[Depends('testAssertTrap1059')]
    public function testAssertReturn1060(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1612,
        );
    }

    #[Depends('testAssertReturn1060')]
    public function testAssertReturn1061(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1613,
        );
    }

    #[Depends('testAssertReturn1061')]
    public function testAssertReturn1062(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1614,
        );
    }

    #[Depends('testAssertReturn1062')]
    public function testAssertReturn1063(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1615,
        );
    }

    #[Depends('testAssertReturn1063')]
    public function testAssertTrap1064(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 1616,
        );
    }

    #[Depends('testAssertTrap1064')]
    public function testAssertTrap1065(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1617,
        );
    }

    #[Depends('testAssertTrap1065')]
    public function testAssertTrap1066(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1618,
        );
    }

    #[Depends('testAssertTrap1066')]
    public function testAssertTrap1067(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1619,
        );
    }

    #[Depends('testAssertTrap1067')]
    public function testAssertTrap1068(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1620,
        );
    }

    #[Depends('testAssertTrap1068')]
    public function testAssertTrap1069(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 1621,
        );
    }

    #[Depends('testAssertTrap1069')]
    public function testAssertReturn1070(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 1622,
        );
    }

    #[Depends('testAssertReturn1070')]
    public function testAssertReturn1071(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 1623,
        );
    }

    #[Depends('testAssertReturn1071')]
    public function testAssertReturn1072(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 1624,
        );
    }

    #[Depends('testAssertReturn1072')]
    public function testAssertReturn1073(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1625,
        );
    }

    #[Depends('testAssertReturn1073')]
    public function testAssertReturn1074(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1626,
        );
    }

    #[Depends('testAssertReturn1074')]
    public function testAssertTrap1075(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1627,
        );
    }

    #[Depends('testAssertTrap1075')]
    public function testAssertTrap1076(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1628,
        );
    }

    #[Depends('testAssertTrap1076')]
    public function testAssertTrap1077(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1629,
        );
    }

    #[Depends('testAssertTrap1077')]
    public function testAssertTrap1078(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1630,
        );
    }

    #[Depends('testAssertTrap1078')]
    public function testAssertTrap1079(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1631,
        );
    }

    #[Depends('testAssertTrap1079')]
    public function testAssertTrap1080(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1632,
        );
    }

    #[Depends('testAssertTrap1080')]
    public function testAssertTrap1081(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1633,
        );
    }

    #[Depends('testAssertTrap1081')]
    public function testAssertTrap1082(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1634,
        );
    }

    #[Depends('testAssertTrap1082')]
    public function testAssertTrap1083(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 1635,
        );
    }

    #[Depends('testAssertTrap1083')]
    public function testAssertTrap1084(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 1636,
        );
    }

    #[Depends('testAssertTrap1084')]
    public function testAssertTrap1085(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1637,
        );
    }

    #[Depends('testAssertTrap1085')]
    public function testAssertTrap1086(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1638,
        );
    }

    #[Depends('testAssertTrap1086')]
    public function testAssertTrap1087(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1639,
        );
    }

    #[Depends('testAssertTrap1087')]
    public function testAssertTrap1088(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1640,
        );
    }

    #[Depends('testAssertTrap1088')]
    public function testAssertTrap1089(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1641,
        );
    }

    #[Depends('testAssertTrap1089')]
    public function testAssertTrap1090(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 1642,
        );
    }

    #[Depends('testAssertTrap1090')]
    public function testAssertReturn1091(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1643,
        );
    }

    #[Depends('testAssertReturn1091')]
    public function testAssertReturn1092(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1644,
        );
    }

    #[Depends('testAssertReturn1092')]
    public function testAssertReturn1093(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1645,
        );
    }

    #[Depends('testAssertReturn1093')]
    public function testAssertReturn1094(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1646,
        );
    }

    #[Depends('testAssertReturn1094')]
    public function testAssertTrap1095(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1647,
        );
    }

    #[Depends('testAssertTrap1095')]
    public function testAssertTrap1096(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1648,
        );
    }

    #[Depends('testAssertTrap1096')]
    public function testAssertTrap1097(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1649,
        );
    }

    #[Depends('testAssertTrap1097')]
    public function testAssertTrap1098(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1650,
        );
    }

    #[Depends('testAssertTrap1098')]
    public function testAssertTrap1099(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 1651,
        );
    }

    #[Depends('testAssertTrap1099')]
    public function testAssertReturn1100(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1652,
        );
    }

    #[Depends('testAssertReturn1100')]
    public function testAssertReturn1101(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1653,
        );
    }

    #[Depends('testAssertReturn1101')]
    public function testAssertReturn1102(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1654,
        );
    }

    #[Depends('testAssertReturn1102')]
    public function testAssertReturn1103(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1655,
        );
    }

    #[Depends('testAssertReturn1103')]
    public function testAssertTrap1104(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 1656,
        );
    }

    #[Depends('testAssertTrap1104')]
    public function testAssertTrap1105(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1657,
        );
    }

    #[Depends('testAssertTrap1105')]
    public function testAssertTrap1106(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1658,
        );
    }

    #[Depends('testAssertTrap1106')]
    public function testAssertTrap1107(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1659,
        );
    }

    #[Depends('testAssertTrap1107')]
    public function testAssertTrap1108(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1660,
        );
    }

    #[Depends('testAssertTrap1108')]
    public function testAssertTrap1109(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1661,
        );
    }

    #[Depends('testAssertTrap1109')]
    public function testAssertReturn1110(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 1662,
        );
    }

    #[Depends('testAssertReturn1110')]
    public function testAssertReturn1111(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 1663,
        );
    }

    #[Depends('testAssertReturn1111')]
    public function testAssertReturn1112(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 1664,
        );
    }

    #[Depends('testAssertReturn1112')]
    public function testAssertReturn1113(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1665,
        );
    }

    #[Depends('testAssertReturn1113')]
    public function testAssertReturn1114(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1666,
        );
    }

    #[Depends('testAssertReturn1114')]
    public function testAssertTrap1115(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1667,
        );
    }

    #[Depends('testAssertTrap1115')]
    public function testAssertTrap1116(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1668,
        );
    }

    #[Depends('testAssertTrap1116')]
    public function testAssertTrap1117(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1669,
        );
    }

    #[Depends('testAssertTrap1117')]
    public function testModule1118(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.19.wasm',
            name: null,
            line: 1671,
        );
    }

    #[Depends('testModule1118')]
    public function testAssertTrap1119(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 1694,
        );
    }

    #[Depends('testAssertTrap1119')]
    public function testModule1120(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.20.wasm',
            name: null,
            line: 1696,
        );
    }

    #[Depends('testModule1120')]
    public function testAssertTrap1121(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 1719,
        );
    }

    #[Depends('testAssertTrap1121')]
    public function testModule1122(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.21.wasm',
            name: null,
            line: 1721,
        );
    }

    #[Depends('testModule1122')]
    public function testAssertTrap1123(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 1744,
        );
    }

    #[Depends('testAssertTrap1123')]
    public function testModule1124(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.22.wasm',
            name: null,
            line: 1746,
        );
    }

    #[Depends('testModule1124')]
    public function testAssertTrap1125(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 1769,
        );
    }

    #[Depends('testAssertTrap1125')]
    public function testModule1126(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.23.wasm',
            name: null,
            line: 1771,
        );
    }

    #[Depends('testModule1126')]
    public function testAction1127(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 1794,
        );
    }

    #[Depends('testAction1127')]
    public function testModule1128(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.24.wasm',
            name: null,
            line: 1796,
        );
    }

    #[Depends('testModule1128')]
    public function testAction1129(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 1819,
        );
    }

    #[Depends('testAction1129')]
    public function testModule1130(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.25.wasm',
            name: null,
            line: 1821,
        );
    }

    #[Depends('testModule1130')]
    public function testAssertTrap1131(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 1844,
        );
    }

    #[Depends('testAssertTrap1131')]
    public function testModule1132(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.26.wasm',
            name: null,
            line: 1846,
        );
    }

    #[Depends('testModule1132')]
    public function testAction1133(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 1869,
        );
    }

    #[Depends('testAction1133')]
    public function testModule1134(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.27.wasm',
            name: null,
            line: 1871,
        );
    }

    #[Depends('testModule1134')]
    public function testAssertTrap1135(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 1894,
        );
    }

    #[Depends('testAssertTrap1135')]
    public function testModule1136(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.28.wasm',
            name: null,
            line: 1896,
        );
    }

    #[Depends('testModule1136')]
    public function testAction1137(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 1919,
        );
    }

    #[Depends('testAction1137')]
    public function testModule1138(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.29.wasm',
            name: null,
            line: 1921,
        );
    }

    #[Depends('testModule1138')]
    public function testAssertTrap1139(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 1944,
        );
    }

    #[Depends('testAssertTrap1139')]
    public function testModule1140(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.30.wasm',
            name: null,
            line: 1946,
        );
    }

    #[Depends('testModule1140')]
    public function testAssertTrap1141(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 1969,
        );
    }

    #[Depends('testAssertTrap1141')]
    public function testModule1142(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.31.wasm',
            name: null,
            line: 1971,
        );
    }

    #[Depends('testModule1142')]
    public function testAssertTrap1143(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 1994,
        );
    }

    #[Depends('testAssertTrap1143')]
    public function testModule1144(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.32.wasm',
            name: null,
            line: 1996,
        );
    }

    #[Depends('testModule1144')]
    public function testAssertTrap1145(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 2019,
        );
    }

    #[Depends('testAssertTrap1145')]
    public function testModule1146(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.33.wasm',
            name: null,
            line: 2021,
        );
    }

    #[Depends('testModule1146')]
    public function testAssertTrap1147(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 2044,
        );
    }

    #[Depends('testAssertTrap1147')]
    public function testModule1148(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.34.wasm',
            name: null,
            line: 2046,
        );
    }

    #[Depends('testModule1148')]
    public function testAction1149(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 2069,
        );
    }

    #[Depends('testAction1149')]
    public function testModule1150(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.35.wasm',
            name: null,
            line: 2071,
        );
    }

    #[Depends('testModule1150')]
    public function testAction1151(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 2094,
        );
    }

    #[Depends('testAction1151')]
    public function testModule1152(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.36.wasm',
            name: null,
            line: 2096,
        );
    }

    #[Depends('testModule1152')]
    public function testAssertTrap1153(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 2119,
        );
    }

    #[Depends('testAssertTrap1153')]
    public function testModule1154(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.37.wasm',
            name: null,
            line: 2121,
        );
    }

    #[Depends('testModule1154')]
    public function testAction1155(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 2144,
        );
    }

    #[Depends('testAction1155')]
    public function testModule1156(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.38.wasm',
            name: null,
            line: 2146,
        );
    }

    #[Depends('testModule1156')]
    public function testAssertTrap1157(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 2169,
        );
    }

    #[Depends('testAssertTrap1157')]
    public function testModule1158(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.39.wasm',
            name: null,
            line: 2171,
        );
    }

    #[Depends('testModule1158')]
    public function testAction1159(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 2194,
        );
    }

    #[Depends('testAction1159')]
    public function testModule1160(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.40.wasm',
            name: null,
            line: 2196,
        );
    }

    #[Depends('testModule1160')]
    public function testAssertTrap1161(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 2219,
        );
    }

    #[Depends('testAssertTrap1161')]
    public function testModule1162(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.41.wasm',
            name: null,
            line: 2221,
        );
    }

    #[Depends('testModule1162')]
    public function testAssertTrap1163(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '24'], ['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '16']]],
            text: 'out of bounds table access',
            line: 2247,
        );
    }

    #[Depends('testAssertTrap1163')]
    public function testAssertReturn1164(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2249,
        );
    }

    #[Depends('testAssertReturn1164')]
    public function testAssertReturn1165(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2250,
        );
    }

    #[Depends('testAssertReturn1165')]
    public function testAssertReturn1166(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 2251,
        );
    }

    #[Depends('testAssertReturn1166')]
    public function testAssertReturn1167(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 2252,
        );
    }

    #[Depends('testAssertReturn1167')]
    public function testAssertReturn1168(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 2253,
        );
    }

    #[Depends('testAssertReturn1168')]
    public function testAssertReturn1169(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 2254,
        );
    }

    #[Depends('testAssertReturn1169')]
    public function testAssertReturn1170(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 2255,
        );
    }

    #[Depends('testAssertReturn1170')]
    public function testAssertReturn1171(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '7']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 2256,
        );
    }

    #[Depends('testAssertReturn1171')]
    public function testAssertTrap1172(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 2257,
        );
    }

    #[Depends('testAssertTrap1172')]
    public function testAssertTrap1173(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 2258,
        );
    }

    #[Depends('testAssertTrap1173')]
    public function testAssertTrap1174(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 2259,
        );
    }

    #[Depends('testAssertTrap1174')]
    public function testAssertTrap1175(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 2260,
        );
    }

    #[Depends('testAssertTrap1175')]
    public function testAssertTrap1176(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '12']]],
            text: 'uninitialized element',
            line: 2261,
        );
    }

    #[Depends('testAssertTrap1176')]
    public function testAssertTrap1177(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 2262,
        );
    }

    #[Depends('testAssertTrap1177')]
    public function testAssertTrap1178(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '14']]],
            text: 'uninitialized element',
            line: 2263,
        );
    }

    #[Depends('testAssertTrap1178')]
    public function testAssertTrap1179(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 2264,
        );
    }

    #[Depends('testAssertTrap1179')]
    public function testAssertTrap1180(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 2265,
        );
    }

    #[Depends('testAssertTrap1180')]
    public function testAssertTrap1181(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 2266,
        );
    }

    #[Depends('testAssertTrap1181')]
    public function testAssertTrap1182(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 2267,
        );
    }

    #[Depends('testAssertTrap1182')]
    public function testAssertTrap1183(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 2268,
        );
    }

    #[Depends('testAssertTrap1183')]
    public function testAssertTrap1184(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 2269,
        );
    }

    #[Depends('testAssertTrap1184')]
    public function testAssertTrap1185(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 2270,
        );
    }

    #[Depends('testAssertTrap1185')]
    public function testAssertTrap1186(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 2271,
        );
    }

    #[Depends('testAssertTrap1186')]
    public function testAssertTrap1187(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 2272,
        );
    }

    #[Depends('testAssertTrap1187')]
    public function testAssertTrap1188(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 2273,
        );
    }

    #[Depends('testAssertTrap1188')]
    public function testAssertTrap1189(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 2274,
        );
    }

    #[Depends('testAssertTrap1189')]
    public function testAssertTrap1190(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 2275,
        );
    }

    #[Depends('testAssertTrap1190')]
    public function testAssertTrap1191(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 2276,
        );
    }

    #[Depends('testAssertTrap1191')]
    public function testAssertTrap1192(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 2277,
        );
    }

    #[Depends('testAssertTrap1192')]
    public function testAssertTrap1193(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 2278,
        );
    }

    #[Depends('testAssertTrap1193')]
    public function testAssertTrap1194(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '30']]],
            text: 'uninitialized element',
            line: 2279,
        );
    }

    #[Depends('testAssertTrap1194')]
    public function testAssertTrap1195(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '31']]],
            text: 'uninitialized element',
            line: 2280,
        );
    }

    #[Depends('testAssertTrap1195')]
    public function testModule1196(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.42.wasm',
            name: null,
            line: 2282,
        );
    }

    #[Depends('testModule1196')]
    public function testAssertTrap1197(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '23'], ['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '15']]],
            text: 'out of bounds table access',
            line: 2308,
        );
    }

    #[Depends('testAssertTrap1197')]
    public function testAssertReturn1198(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2310,
        );
    }

    #[Depends('testAssertReturn1198')]
    public function testAssertReturn1199(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2311,
        );
    }

    #[Depends('testAssertReturn1199')]
    public function testAssertReturn1200(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 2312,
        );
    }

    #[Depends('testAssertReturn1200')]
    public function testAssertReturn1201(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 2313,
        );
    }

    #[Depends('testAssertReturn1201')]
    public function testAssertReturn1202(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 2314,
        );
    }

    #[Depends('testAssertReturn1202')]
    public function testAssertReturn1203(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 2315,
        );
    }

    #[Depends('testAssertReturn1203')]
    public function testAssertReturn1204(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 2316,
        );
    }

    #[Depends('testAssertReturn1204')]
    public function testAssertReturn1205(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '7']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 2317,
        );
    }

    #[Depends('testAssertReturn1205')]
    public function testAssertReturn1206(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 2318,
        );
    }

    #[Depends('testAssertReturn1206')]
    public function testAssertTrap1207(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 2319,
        );
    }

    #[Depends('testAssertTrap1207')]
    public function testAssertTrap1208(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 2320,
        );
    }

    #[Depends('testAssertTrap1208')]
    public function testAssertTrap1209(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 2321,
        );
    }

    #[Depends('testAssertTrap1209')]
    public function testAssertTrap1210(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '12']]],
            text: 'uninitialized element',
            line: 2322,
        );
    }

    #[Depends('testAssertTrap1210')]
    public function testAssertTrap1211(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 2323,
        );
    }

    #[Depends('testAssertTrap1211')]
    public function testAssertTrap1212(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '14']]],
            text: 'uninitialized element',
            line: 2324,
        );
    }

    #[Depends('testAssertTrap1212')]
    public function testAssertTrap1213(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 2325,
        );
    }

    #[Depends('testAssertTrap1213')]
    public function testAssertTrap1214(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 2326,
        );
    }

    #[Depends('testAssertTrap1214')]
    public function testAssertTrap1215(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 2327,
        );
    }

    #[Depends('testAssertTrap1215')]
    public function testAssertTrap1216(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 2328,
        );
    }

    #[Depends('testAssertTrap1216')]
    public function testAssertTrap1217(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 2329,
        );
    }

    #[Depends('testAssertTrap1217')]
    public function testAssertTrap1218(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 2330,
        );
    }

    #[Depends('testAssertTrap1218')]
    public function testAssertTrap1219(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 2331,
        );
    }

    #[Depends('testAssertTrap1219')]
    public function testAssertTrap1220(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 2332,
        );
    }

    #[Depends('testAssertTrap1220')]
    public function testAssertTrap1221(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 2333,
        );
    }

    #[Depends('testAssertTrap1221')]
    public function testAssertTrap1222(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 2334,
        );
    }

    #[Depends('testAssertTrap1222')]
    public function testAssertTrap1223(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 2335,
        );
    }

    #[Depends('testAssertTrap1223')]
    public function testAssertTrap1224(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 2336,
        );
    }

    #[Depends('testAssertTrap1224')]
    public function testAssertTrap1225(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 2337,
        );
    }

    #[Depends('testAssertTrap1225')]
    public function testAssertTrap1226(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 2338,
        );
    }

    #[Depends('testAssertTrap1226')]
    public function testAssertTrap1227(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 2339,
        );
    }

    #[Depends('testAssertTrap1227')]
    public function testAssertTrap1228(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '30']]],
            text: 'uninitialized element',
            line: 2340,
        );
    }

    #[Depends('testAssertTrap1228')]
    public function testAssertTrap1229(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '31']]],
            text: 'uninitialized element',
            line: 2341,
        );
    }

    #[Depends('testAssertTrap1229')]
    public function testModule1230(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.43.wasm',
            name: null,
            line: 2343,
        );
    }

    #[Depends('testModule1230')]
    public function testAssertTrap1231(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '24'], ['type' => 'i32', 'value' => '16']]],
            text: 'out of bounds table access',
            line: 2369,
        );
    }

    #[Depends('testAssertTrap1231')]
    public function testAssertTrap1232(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 2371,
        );
    }

    #[Depends('testAssertTrap1232')]
    public function testAssertTrap1233(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 2372,
        );
    }

    #[Depends('testAssertTrap1233')]
    public function testAssertTrap1234(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 2373,
        );
    }

    #[Depends('testAssertTrap1234')]
    public function testAssertTrap1235(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '3']]],
            text: 'uninitialized element',
            line: 2374,
        );
    }

    #[Depends('testAssertTrap1235')]
    public function testAssertTrap1236(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '4']]],
            text: 'uninitialized element',
            line: 2375,
        );
    }

    #[Depends('testAssertTrap1236')]
    public function testAssertTrap1237(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '5']]],
            text: 'uninitialized element',
            line: 2376,
        );
    }

    #[Depends('testAssertTrap1237')]
    public function testAssertTrap1238(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 2377,
        );
    }

    #[Depends('testAssertTrap1238')]
    public function testAssertTrap1239(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 2378,
        );
    }

    #[Depends('testAssertTrap1239')]
    public function testAssertTrap1240(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 2379,
        );
    }

    #[Depends('testAssertTrap1240')]
    public function testAssertTrap1241(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 2380,
        );
    }

    #[Depends('testAssertTrap1241')]
    public function testAssertTrap1242(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 2381,
        );
    }

    #[Depends('testAssertTrap1242')]
    public function testAssertTrap1243(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 2382,
        );
    }

    #[Depends('testAssertTrap1243')]
    public function testAssertTrap1244(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '12']]],
            text: 'uninitialized element',
            line: 2383,
        );
    }

    #[Depends('testAssertTrap1244')]
    public function testAssertTrap1245(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 2384,
        );
    }

    #[Depends('testAssertTrap1245')]
    public function testAssertTrap1246(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '14']]],
            text: 'uninitialized element',
            line: 2385,
        );
    }

    #[Depends('testAssertTrap1246')]
    public function testAssertTrap1247(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 2386,
        );
    }

    #[Depends('testAssertTrap1247')]
    public function testAssertTrap1248(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 2387,
        );
    }

    #[Depends('testAssertTrap1248')]
    public function testAssertTrap1249(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 2388,
        );
    }

    #[Depends('testAssertTrap1249')]
    public function testAssertTrap1250(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 2389,
        );
    }

    #[Depends('testAssertTrap1250')]
    public function testAssertTrap1251(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 2390,
        );
    }

    #[Depends('testAssertTrap1251')]
    public function testAssertTrap1252(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 2391,
        );
    }

    #[Depends('testAssertTrap1252')]
    public function testAssertTrap1253(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 2392,
        );
    }

    #[Depends('testAssertTrap1253')]
    public function testAssertTrap1254(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 2393,
        );
    }

    #[Depends('testAssertTrap1254')]
    public function testAssertTrap1255(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 2394,
        );
    }

    #[Depends('testAssertTrap1255')]
    public function testAssertReturn1256(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '24']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2395,
        );
    }

    #[Depends('testAssertReturn1256')]
    public function testAssertReturn1257(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '25']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2396,
        );
    }

    #[Depends('testAssertReturn1257')]
    public function testAssertReturn1258(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '26']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 2397,
        );
    }

    #[Depends('testAssertReturn1258')]
    public function testAssertReturn1259(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '27']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 2398,
        );
    }

    #[Depends('testAssertReturn1259')]
    public function testAssertReturn1260(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '28']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 2399,
        );
    }

    #[Depends('testAssertReturn1260')]
    public function testAssertReturn1261(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '29']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 2400,
        );
    }

    #[Depends('testAssertReturn1261')]
    public function testAssertReturn1262(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '30']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 2401,
        );
    }

    #[Depends('testAssertReturn1262')]
    public function testAssertReturn1263(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '31']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 2402,
        );
    }

    #[Depends('testAssertReturn1263')]
    public function testModule1264(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.44.wasm',
            name: null,
            line: 2404,
        );
    }

    #[Depends('testModule1264')]
    public function testAssertTrap1265(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '23'], ['type' => 'i32', 'value' => '15']]],
            text: 'out of bounds table access',
            line: 2430,
        );
    }

    #[Depends('testAssertTrap1265')]
    public function testAssertTrap1266(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 2432,
        );
    }

    #[Depends('testAssertTrap1266')]
    public function testAssertTrap1267(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 2433,
        );
    }

    #[Depends('testAssertTrap1267')]
    public function testAssertTrap1268(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 2434,
        );
    }

    #[Depends('testAssertTrap1268')]
    public function testAssertTrap1269(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '3']]],
            text: 'uninitialized element',
            line: 2435,
        );
    }

    #[Depends('testAssertTrap1269')]
    public function testAssertTrap1270(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '4']]],
            text: 'uninitialized element',
            line: 2436,
        );
    }

    #[Depends('testAssertTrap1270')]
    public function testAssertTrap1271(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '5']]],
            text: 'uninitialized element',
            line: 2437,
        );
    }

    #[Depends('testAssertTrap1271')]
    public function testAssertTrap1272(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 2438,
        );
    }

    #[Depends('testAssertTrap1272')]
    public function testAssertTrap1273(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 2439,
        );
    }

    #[Depends('testAssertTrap1273')]
    public function testAssertTrap1274(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 2440,
        );
    }

    #[Depends('testAssertTrap1274')]
    public function testAssertTrap1275(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 2441,
        );
    }

    #[Depends('testAssertTrap1275')]
    public function testAssertTrap1276(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 2442,
        );
    }

    #[Depends('testAssertTrap1276')]
    public function testAssertTrap1277(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 2443,
        );
    }

    #[Depends('testAssertTrap1277')]
    public function testAssertTrap1278(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '12']]],
            text: 'uninitialized element',
            line: 2444,
        );
    }

    #[Depends('testAssertTrap1278')]
    public function testAssertTrap1279(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 2445,
        );
    }

    #[Depends('testAssertTrap1279')]
    public function testAssertTrap1280(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '14']]],
            text: 'uninitialized element',
            line: 2446,
        );
    }

    #[Depends('testAssertTrap1280')]
    public function testAssertTrap1281(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 2447,
        );
    }

    #[Depends('testAssertTrap1281')]
    public function testAssertTrap1282(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 2448,
        );
    }

    #[Depends('testAssertTrap1282')]
    public function testAssertTrap1283(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 2449,
        );
    }

    #[Depends('testAssertTrap1283')]
    public function testAssertTrap1284(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 2450,
        );
    }

    #[Depends('testAssertTrap1284')]
    public function testAssertTrap1285(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 2451,
        );
    }

    #[Depends('testAssertTrap1285')]
    public function testAssertTrap1286(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 2452,
        );
    }

    #[Depends('testAssertTrap1286')]
    public function testAssertTrap1287(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 2453,
        );
    }

    #[Depends('testAssertTrap1287')]
    public function testAssertTrap1288(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 2454,
        );
    }

    #[Depends('testAssertTrap1288')]
    public function testAssertReturn1289(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '23']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2455,
        );
    }

    #[Depends('testAssertReturn1289')]
    public function testAssertReturn1290(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '24']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2456,
        );
    }

    #[Depends('testAssertReturn1290')]
    public function testAssertReturn1291(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '25']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 2457,
        );
    }

    #[Depends('testAssertReturn1291')]
    public function testAssertReturn1292(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '26']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 2458,
        );
    }

    #[Depends('testAssertReturn1292')]
    public function testAssertReturn1293(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '27']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 2459,
        );
    }

    #[Depends('testAssertReturn1293')]
    public function testAssertReturn1294(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '28']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 2460,
        );
    }

    #[Depends('testAssertReturn1294')]
    public function testAssertReturn1295(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '29']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 2461,
        );
    }

    #[Depends('testAssertReturn1295')]
    public function testAssertReturn1296(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '30']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 2462,
        );
    }

    #[Depends('testAssertReturn1296')]
    public function testAssertReturn1297(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '31']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 2463,
        );
    }

    #[Depends('testAssertReturn1297')]
    public function testModule1298(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.45.wasm',
            name: null,
            line: 2465,
        );
    }

    #[Depends('testModule1298')]
    public function testAssertTrap1299(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '24'], ['type' => 'i32', 'value' => '11'], ['type' => 'i32', 'value' => '16']]],
            text: 'out of bounds table access',
            line: 2491,
        );
    }

    #[Depends('testAssertTrap1299')]
    public function testAssertTrap1300(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 2493,
        );
    }

    #[Depends('testAssertTrap1300')]
    public function testAssertTrap1301(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 2494,
        );
    }

    #[Depends('testAssertTrap1301')]
    public function testAssertTrap1302(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 2495,
        );
    }

    #[Depends('testAssertTrap1302')]
    public function testAssertTrap1303(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '3']]],
            text: 'uninitialized element',
            line: 2496,
        );
    }

    #[Depends('testAssertTrap1303')]
    public function testAssertTrap1304(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '4']]],
            text: 'uninitialized element',
            line: 2497,
        );
    }

    #[Depends('testAssertTrap1304')]
    public function testAssertTrap1305(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '5']]],
            text: 'uninitialized element',
            line: 2498,
        );
    }

    #[Depends('testAssertTrap1305')]
    public function testAssertTrap1306(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 2499,
        );
    }

    #[Depends('testAssertTrap1306')]
    public function testAssertTrap1307(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 2500,
        );
    }

    #[Depends('testAssertTrap1307')]
    public function testAssertTrap1308(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 2501,
        );
    }

    #[Depends('testAssertTrap1308')]
    public function testAssertTrap1309(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 2502,
        );
    }

    #[Depends('testAssertTrap1309')]
    public function testAssertTrap1310(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 2503,
        );
    }

    #[Depends('testAssertTrap1310')]
    public function testAssertReturn1311(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2504,
        );
    }

    #[Depends('testAssertReturn1311')]
    public function testAssertReturn1312(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2505,
        );
    }

    #[Depends('testAssertReturn1312')]
    public function testAssertReturn1313(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 2506,
        );
    }

    #[Depends('testAssertReturn1313')]
    public function testAssertReturn1314(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 2507,
        );
    }

    #[Depends('testAssertReturn1314')]
    public function testAssertReturn1315(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 2508,
        );
    }

    #[Depends('testAssertReturn1315')]
    public function testAssertReturn1316(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 2509,
        );
    }

    #[Depends('testAssertReturn1316')]
    public function testAssertReturn1317(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '17']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 2510,
        );
    }

    #[Depends('testAssertReturn1317')]
    public function testAssertReturn1318(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '18']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 2511,
        );
    }

    #[Depends('testAssertReturn1318')]
    public function testAssertTrap1319(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 2512,
        );
    }

    #[Depends('testAssertTrap1319')]
    public function testAssertTrap1320(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 2513,
        );
    }

    #[Depends('testAssertTrap1320')]
    public function testAssertTrap1321(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 2514,
        );
    }

    #[Depends('testAssertTrap1321')]
    public function testAssertTrap1322(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 2515,
        );
    }

    #[Depends('testAssertTrap1322')]
    public function testAssertTrap1323(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 2516,
        );
    }

    #[Depends('testAssertTrap1323')]
    public function testAssertTrap1324(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 2517,
        );
    }

    #[Depends('testAssertTrap1324')]
    public function testAssertTrap1325(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 2518,
        );
    }

    #[Depends('testAssertTrap1325')]
    public function testAssertTrap1326(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 2519,
        );
    }

    #[Depends('testAssertTrap1326')]
    public function testAssertTrap1327(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 2520,
        );
    }

    #[Depends('testAssertTrap1327')]
    public function testAssertTrap1328(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 2521,
        );
    }

    #[Depends('testAssertTrap1328')]
    public function testAssertTrap1329(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 2522,
        );
    }

    #[Depends('testAssertTrap1329')]
    public function testAssertTrap1330(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '30']]],
            text: 'uninitialized element',
            line: 2523,
        );
    }

    #[Depends('testAssertTrap1330')]
    public function testAssertTrap1331(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '31']]],
            text: 'uninitialized element',
            line: 2524,
        );
    }

    #[Depends('testAssertTrap1331')]
    public function testModule1332(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.46.wasm',
            name: null,
            line: 2526,
        );
    }

    #[Depends('testModule1332')]
    public function testAssertTrap1333(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '11'], ['type' => 'i32', 'value' => '24'], ['type' => 'i32', 'value' => '16']]],
            text: 'out of bounds table access',
            line: 2552,
        );
    }

    #[Depends('testAssertTrap1333')]
    public function testAssertTrap1334(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 2554,
        );
    }

    #[Depends('testAssertTrap1334')]
    public function testAssertTrap1335(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 2555,
        );
    }

    #[Depends('testAssertTrap1335')]
    public function testAssertTrap1336(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 2556,
        );
    }

    #[Depends('testAssertTrap1336')]
    public function testAssertTrap1337(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '3']]],
            text: 'uninitialized element',
            line: 2557,
        );
    }

    #[Depends('testAssertTrap1337')]
    public function testAssertTrap1338(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '4']]],
            text: 'uninitialized element',
            line: 2558,
        );
    }

    #[Depends('testAssertTrap1338')]
    public function testAssertTrap1339(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '5']]],
            text: 'uninitialized element',
            line: 2559,
        );
    }

    #[Depends('testAssertTrap1339')]
    public function testAssertTrap1340(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 2560,
        );
    }

    #[Depends('testAssertTrap1340')]
    public function testAssertTrap1341(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 2561,
        );
    }

    #[Depends('testAssertTrap1341')]
    public function testAssertTrap1342(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 2562,
        );
    }

    #[Depends('testAssertTrap1342')]
    public function testAssertTrap1343(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 2563,
        );
    }

    #[Depends('testAssertTrap1343')]
    public function testAssertTrap1344(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 2564,
        );
    }

    #[Depends('testAssertTrap1344')]
    public function testAssertTrap1345(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 2565,
        );
    }

    #[Depends('testAssertTrap1345')]
    public function testAssertTrap1346(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '12']]],
            text: 'uninitialized element',
            line: 2566,
        );
    }

    #[Depends('testAssertTrap1346')]
    public function testAssertTrap1347(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 2567,
        );
    }

    #[Depends('testAssertTrap1347')]
    public function testAssertTrap1348(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '14']]],
            text: 'uninitialized element',
            line: 2568,
        );
    }

    #[Depends('testAssertTrap1348')]
    public function testAssertTrap1349(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 2569,
        );
    }

    #[Depends('testAssertTrap1349')]
    public function testAssertTrap1350(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 2570,
        );
    }

    #[Depends('testAssertTrap1350')]
    public function testAssertTrap1351(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 2571,
        );
    }

    #[Depends('testAssertTrap1351')]
    public function testAssertTrap1352(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 2572,
        );
    }

    #[Depends('testAssertTrap1352')]
    public function testAssertTrap1353(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 2573,
        );
    }

    #[Depends('testAssertTrap1353')]
    public function testAssertTrap1354(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 2574,
        );
    }

    #[Depends('testAssertTrap1354')]
    public function testAssertTrap1355(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 2575,
        );
    }

    #[Depends('testAssertTrap1355')]
    public function testAssertTrap1356(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 2576,
        );
    }

    #[Depends('testAssertTrap1356')]
    public function testAssertTrap1357(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 2577,
        );
    }

    #[Depends('testAssertTrap1357')]
    public function testAssertReturn1358(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '24']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2578,
        );
    }

    #[Depends('testAssertReturn1358')]
    public function testAssertReturn1359(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '25']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2579,
        );
    }

    #[Depends('testAssertReturn1359')]
    public function testAssertReturn1360(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '26']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 2580,
        );
    }

    #[Depends('testAssertReturn1360')]
    public function testAssertReturn1361(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '27']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 2581,
        );
    }

    #[Depends('testAssertReturn1361')]
    public function testAssertReturn1362(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '28']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 2582,
        );
    }

    #[Depends('testAssertReturn1362')]
    public function testAssertReturn1363(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '29']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 2583,
        );
    }

    #[Depends('testAssertReturn1363')]
    public function testAssertReturn1364(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '30']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 2584,
        );
    }

    #[Depends('testAssertReturn1364')]
    public function testAssertReturn1365(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '31']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 2585,
        );
    }

    #[Depends('testAssertReturn1365')]
    public function testModule1366(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.47.wasm',
            name: null,
            line: 2587,
        );
    }

    #[Depends('testModule1366')]
    public function testAssertTrap1367(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '24'], ['type' => 'i32', 'value' => '21'], ['type' => 'i32', 'value' => '16']]],
            text: 'out of bounds table access',
            line: 2613,
        );
    }

    #[Depends('testAssertTrap1367')]
    public function testAssertTrap1368(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 2615,
        );
    }

    #[Depends('testAssertTrap1368')]
    public function testAssertTrap1369(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 2616,
        );
    }

    #[Depends('testAssertTrap1369')]
    public function testAssertTrap1370(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 2617,
        );
    }

    #[Depends('testAssertTrap1370')]
    public function testAssertTrap1371(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '3']]],
            text: 'uninitialized element',
            line: 2618,
        );
    }

    #[Depends('testAssertTrap1371')]
    public function testAssertTrap1372(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '4']]],
            text: 'uninitialized element',
            line: 2619,
        );
    }

    #[Depends('testAssertTrap1372')]
    public function testAssertTrap1373(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '5']]],
            text: 'uninitialized element',
            line: 2620,
        );
    }

    #[Depends('testAssertTrap1373')]
    public function testAssertTrap1374(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 2621,
        );
    }

    #[Depends('testAssertTrap1374')]
    public function testAssertTrap1375(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 2622,
        );
    }

    #[Depends('testAssertTrap1375')]
    public function testAssertTrap1376(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 2623,
        );
    }

    #[Depends('testAssertTrap1376')]
    public function testAssertTrap1377(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 2624,
        );
    }

    #[Depends('testAssertTrap1377')]
    public function testAssertTrap1378(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 2625,
        );
    }

    #[Depends('testAssertTrap1378')]
    public function testAssertTrap1379(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 2626,
        );
    }

    #[Depends('testAssertTrap1379')]
    public function testAssertTrap1380(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '12']]],
            text: 'uninitialized element',
            line: 2627,
        );
    }

    #[Depends('testAssertTrap1380')]
    public function testAssertTrap1381(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 2628,
        );
    }

    #[Depends('testAssertTrap1381')]
    public function testAssertTrap1382(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '14']]],
            text: 'uninitialized element',
            line: 2629,
        );
    }

    #[Depends('testAssertTrap1382')]
    public function testAssertTrap1383(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 2630,
        );
    }

    #[Depends('testAssertTrap1383')]
    public function testAssertTrap1384(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 2631,
        );
    }

    #[Depends('testAssertTrap1384')]
    public function testAssertTrap1385(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 2632,
        );
    }

    #[Depends('testAssertTrap1385')]
    public function testAssertTrap1386(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 2633,
        );
    }

    #[Depends('testAssertTrap1386')]
    public function testAssertTrap1387(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 2634,
        );
    }

    #[Depends('testAssertTrap1387')]
    public function testAssertTrap1388(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 2635,
        );
    }

    #[Depends('testAssertTrap1388')]
    public function testAssertReturn1389(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '21']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2636,
        );
    }

    #[Depends('testAssertReturn1389')]
    public function testAssertReturn1390(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '22']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2637,
        );
    }

    #[Depends('testAssertReturn1390')]
    public function testAssertReturn1391(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '23']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 2638,
        );
    }

    #[Depends('testAssertReturn1391')]
    public function testAssertReturn1392(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '24']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 2639,
        );
    }

    #[Depends('testAssertReturn1392')]
    public function testAssertReturn1393(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '25']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 2640,
        );
    }

    #[Depends('testAssertReturn1393')]
    public function testAssertReturn1394(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '26']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 2641,
        );
    }

    #[Depends('testAssertReturn1394')]
    public function testAssertReturn1395(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '27']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 2642,
        );
    }

    #[Depends('testAssertReturn1395')]
    public function testAssertReturn1396(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '28']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 2643,
        );
    }

    #[Depends('testAssertReturn1396')]
    public function testAssertTrap1397(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 2644,
        );
    }

    #[Depends('testAssertTrap1397')]
    public function testAssertTrap1398(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '30']]],
            text: 'uninitialized element',
            line: 2645,
        );
    }

    #[Depends('testAssertTrap1398')]
    public function testAssertTrap1399(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '31']]],
            text: 'uninitialized element',
            line: 2646,
        );
    }

    #[Depends('testAssertTrap1399')]
    public function testModule1400(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.48.wasm',
            name: null,
            line: 2648,
        );
    }

    #[Depends('testModule1400')]
    public function testAssertTrap1401(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '21'], ['type' => 'i32', 'value' => '24'], ['type' => 'i32', 'value' => '16']]],
            text: 'out of bounds table access',
            line: 2674,
        );
    }

    #[Depends('testAssertTrap1401')]
    public function testAssertTrap1402(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 2676,
        );
    }

    #[Depends('testAssertTrap1402')]
    public function testAssertTrap1403(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 2677,
        );
    }

    #[Depends('testAssertTrap1403')]
    public function testAssertTrap1404(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 2678,
        );
    }

    #[Depends('testAssertTrap1404')]
    public function testAssertTrap1405(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '3']]],
            text: 'uninitialized element',
            line: 2679,
        );
    }

    #[Depends('testAssertTrap1405')]
    public function testAssertTrap1406(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '4']]],
            text: 'uninitialized element',
            line: 2680,
        );
    }

    #[Depends('testAssertTrap1406')]
    public function testAssertTrap1407(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '5']]],
            text: 'uninitialized element',
            line: 2681,
        );
    }

    #[Depends('testAssertTrap1407')]
    public function testAssertTrap1408(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 2682,
        );
    }

    #[Depends('testAssertTrap1408')]
    public function testAssertTrap1409(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 2683,
        );
    }

    #[Depends('testAssertTrap1409')]
    public function testAssertTrap1410(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 2684,
        );
    }

    #[Depends('testAssertTrap1410')]
    public function testAssertTrap1411(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 2685,
        );
    }

    #[Depends('testAssertTrap1411')]
    public function testAssertTrap1412(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 2686,
        );
    }

    #[Depends('testAssertTrap1412')]
    public function testAssertTrap1413(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 2687,
        );
    }

    #[Depends('testAssertTrap1413')]
    public function testAssertTrap1414(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '12']]],
            text: 'uninitialized element',
            line: 2688,
        );
    }

    #[Depends('testAssertTrap1414')]
    public function testAssertTrap1415(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 2689,
        );
    }

    #[Depends('testAssertTrap1415')]
    public function testAssertTrap1416(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '14']]],
            text: 'uninitialized element',
            line: 2690,
        );
    }

    #[Depends('testAssertTrap1416')]
    public function testAssertTrap1417(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 2691,
        );
    }

    #[Depends('testAssertTrap1417')]
    public function testAssertTrap1418(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 2692,
        );
    }

    #[Depends('testAssertTrap1418')]
    public function testAssertTrap1419(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 2693,
        );
    }

    #[Depends('testAssertTrap1419')]
    public function testAssertTrap1420(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 2694,
        );
    }

    #[Depends('testAssertTrap1420')]
    public function testAssertTrap1421(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 2695,
        );
    }

    #[Depends('testAssertTrap1421')]
    public function testAssertTrap1422(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 2696,
        );
    }

    #[Depends('testAssertTrap1422')]
    public function testAssertTrap1423(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 2697,
        );
    }

    #[Depends('testAssertTrap1423')]
    public function testAssertTrap1424(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 2698,
        );
    }

    #[Depends('testAssertTrap1424')]
    public function testAssertTrap1425(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 2699,
        );
    }

    #[Depends('testAssertTrap1425')]
    public function testAssertReturn1426(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '24']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2700,
        );
    }

    #[Depends('testAssertReturn1426')]
    public function testAssertReturn1427(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '25']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2701,
        );
    }

    #[Depends('testAssertReturn1427')]
    public function testAssertReturn1428(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '26']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 2702,
        );
    }

    #[Depends('testAssertReturn1428')]
    public function testAssertReturn1429(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '27']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 2703,
        );
    }

    #[Depends('testAssertReturn1429')]
    public function testAssertReturn1430(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '28']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 2704,
        );
    }

    #[Depends('testAssertReturn1430')]
    public function testAssertReturn1431(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '29']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 2705,
        );
    }

    #[Depends('testAssertReturn1431')]
    public function testAssertReturn1432(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '30']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 2706,
        );
    }

    #[Depends('testAssertReturn1432')]
    public function testAssertReturn1433(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '31']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 2707,
        );
    }

    #[Depends('testAssertReturn1433')]
    public function testModule1434(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.49.wasm',
            name: null,
            line: 2709,
        );
    }

    #[Depends('testModule1434')]
    public function testAssertTrap1435(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '21'], ['type' => 'i32', 'value' => '21'], ['type' => 'i32', 'value' => '16']]],
            text: 'out of bounds table access',
            line: 2735,
        );
    }

    #[Depends('testAssertTrap1435')]
    public function testAssertTrap1436(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 2737,
        );
    }

    #[Depends('testAssertTrap1436')]
    public function testAssertTrap1437(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 2738,
        );
    }

    #[Depends('testAssertTrap1437')]
    public function testAssertTrap1438(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 2739,
        );
    }

    #[Depends('testAssertTrap1438')]
    public function testAssertTrap1439(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '3']]],
            text: 'uninitialized element',
            line: 2740,
        );
    }

    #[Depends('testAssertTrap1439')]
    public function testAssertTrap1440(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '4']]],
            text: 'uninitialized element',
            line: 2741,
        );
    }

    #[Depends('testAssertTrap1440')]
    public function testAssertTrap1441(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '5']]],
            text: 'uninitialized element',
            line: 2742,
        );
    }

    #[Depends('testAssertTrap1441')]
    public function testAssertTrap1442(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 2743,
        );
    }

    #[Depends('testAssertTrap1442')]
    public function testAssertTrap1443(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 2744,
        );
    }

    #[Depends('testAssertTrap1443')]
    public function testAssertTrap1444(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 2745,
        );
    }

    #[Depends('testAssertTrap1444')]
    public function testAssertTrap1445(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 2746,
        );
    }

    #[Depends('testAssertTrap1445')]
    public function testAssertTrap1446(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 2747,
        );
    }

    #[Depends('testAssertTrap1446')]
    public function testAssertTrap1447(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 2748,
        );
    }

    #[Depends('testAssertTrap1447')]
    public function testAssertTrap1448(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '12']]],
            text: 'uninitialized element',
            line: 2749,
        );
    }

    #[Depends('testAssertTrap1448')]
    public function testAssertTrap1449(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 2750,
        );
    }

    #[Depends('testAssertTrap1449')]
    public function testAssertTrap1450(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '14']]],
            text: 'uninitialized element',
            line: 2751,
        );
    }

    #[Depends('testAssertTrap1450')]
    public function testAssertTrap1451(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 2752,
        );
    }

    #[Depends('testAssertTrap1451')]
    public function testAssertTrap1452(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 2753,
        );
    }

    #[Depends('testAssertTrap1452')]
    public function testAssertTrap1453(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 2754,
        );
    }

    #[Depends('testAssertTrap1453')]
    public function testAssertTrap1454(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 2755,
        );
    }

    #[Depends('testAssertTrap1454')]
    public function testAssertTrap1455(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 2756,
        );
    }

    #[Depends('testAssertTrap1455')]
    public function testAssertTrap1456(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 2757,
        );
    }

    #[Depends('testAssertTrap1456')]
    public function testAssertReturn1457(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '21']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2758,
        );
    }

    #[Depends('testAssertReturn1457')]
    public function testAssertReturn1458(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '22']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2759,
        );
    }

    #[Depends('testAssertReturn1458')]
    public function testAssertReturn1459(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '23']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 2760,
        );
    }

    #[Depends('testAssertReturn1459')]
    public function testAssertReturn1460(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '24']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 2761,
        );
    }

    #[Depends('testAssertReturn1460')]
    public function testAssertReturn1461(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '25']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 2762,
        );
    }

    #[Depends('testAssertReturn1461')]
    public function testAssertReturn1462(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '26']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 2763,
        );
    }

    #[Depends('testAssertReturn1462')]
    public function testAssertReturn1463(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '27']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 2764,
        );
    }

    #[Depends('testAssertReturn1463')]
    public function testAssertReturn1464(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '28']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 2765,
        );
    }

    #[Depends('testAssertReturn1464')]
    public function testAssertReturn1465(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '29']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 2766,
        );
    }

    #[Depends('testAssertReturn1465')]
    public function testAssertReturn1466(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '30']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 2767,
        );
    }

    #[Depends('testAssertReturn1466')]
    public function testAssertReturn1467(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '31']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 2768,
        );
    }

    #[Depends('testAssertReturn1467')]
    public function testModule1468(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.50.wasm',
            name: null,
            line: 2770,
        );
    }

    #[Depends('testModule1468')]
    public function testAssertTrap1469(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '112'], ['type' => 'i32', 'value' => '4294967264']]],
            text: 'out of bounds table access',
            line: 2796,
        );
    }

    #[Depends('testAssertTrap1469')]
    public function testAssertTrap1470(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 2798,
        );
    }

    #[Depends('testAssertTrap1470')]
    public function testAssertTrap1471(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 2799,
        );
    }

    #[Depends('testAssertTrap1471')]
    public function testAssertTrap1472(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 2800,
        );
    }

    #[Depends('testAssertTrap1472')]
    public function testAssertTrap1473(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '3']]],
            text: 'uninitialized element',
            line: 2801,
        );
    }

    #[Depends('testAssertTrap1473')]
    public function testAssertTrap1474(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '4']]],
            text: 'uninitialized element',
            line: 2802,
        );
    }

    #[Depends('testAssertTrap1474')]
    public function testAssertTrap1475(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '5']]],
            text: 'uninitialized element',
            line: 2803,
        );
    }

    #[Depends('testAssertTrap1475')]
    public function testAssertTrap1476(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 2804,
        );
    }

    #[Depends('testAssertTrap1476')]
    public function testAssertTrap1477(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 2805,
        );
    }

    #[Depends('testAssertTrap1477')]
    public function testAssertTrap1478(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 2806,
        );
    }

    #[Depends('testAssertTrap1478')]
    public function testAssertTrap1479(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 2807,
        );
    }

    #[Depends('testAssertTrap1479')]
    public function testAssertTrap1480(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 2808,
        );
    }

    #[Depends('testAssertTrap1480')]
    public function testAssertTrap1481(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 2809,
        );
    }

    #[Depends('testAssertTrap1481')]
    public function testAssertTrap1482(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '12']]],
            text: 'uninitialized element',
            line: 2810,
        );
    }

    #[Depends('testAssertTrap1482')]
    public function testAssertTrap1483(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 2811,
        );
    }

    #[Depends('testAssertTrap1483')]
    public function testAssertTrap1484(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '14']]],
            text: 'uninitialized element',
            line: 2812,
        );
    }

    #[Depends('testAssertTrap1484')]
    public function testAssertTrap1485(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 2813,
        );
    }

    #[Depends('testAssertTrap1485')]
    public function testAssertTrap1486(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 2814,
        );
    }

    #[Depends('testAssertTrap1486')]
    public function testAssertTrap1487(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 2815,
        );
    }

    #[Depends('testAssertTrap1487')]
    public function testAssertTrap1488(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 2816,
        );
    }

    #[Depends('testAssertTrap1488')]
    public function testAssertTrap1489(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 2817,
        );
    }

    #[Depends('testAssertTrap1489')]
    public function testAssertTrap1490(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 2818,
        );
    }

    #[Depends('testAssertTrap1490')]
    public function testAssertTrap1491(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 2819,
        );
    }

    #[Depends('testAssertTrap1491')]
    public function testAssertTrap1492(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 2820,
        );
    }

    #[Depends('testAssertTrap1492')]
    public function testAssertTrap1493(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 2821,
        );
    }

    #[Depends('testAssertTrap1493')]
    public function testAssertTrap1494(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 2822,
        );
    }

    #[Depends('testAssertTrap1494')]
    public function testAssertTrap1495(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 2823,
        );
    }

    #[Depends('testAssertTrap1495')]
    public function testAssertTrap1496(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 2824,
        );
    }

    #[Depends('testAssertTrap1496')]
    public function testAssertTrap1497(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 2825,
        );
    }

    #[Depends('testAssertTrap1497')]
    public function testAssertTrap1498(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 2826,
        );
    }

    #[Depends('testAssertTrap1498')]
    public function testAssertTrap1499(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 2827,
        );
    }

    #[Depends('testAssertTrap1499')]
    public function testAssertTrap1500(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '30']]],
            text: 'uninitialized element',
            line: 2828,
        );
    }

    #[Depends('testAssertTrap1500')]
    public function testAssertTrap1501(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '31']]],
            text: 'uninitialized element',
            line: 2829,
        );
    }

    #[Depends('testAssertTrap1501')]
    public function testAssertTrap1502(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '32']]],
            text: 'uninitialized element',
            line: 2830,
        );
    }

    #[Depends('testAssertTrap1502')]
    public function testAssertTrap1503(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '33']]],
            text: 'uninitialized element',
            line: 2831,
        );
    }

    #[Depends('testAssertTrap1503')]
    public function testAssertTrap1504(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '34']]],
            text: 'uninitialized element',
            line: 2832,
        );
    }

    #[Depends('testAssertTrap1504')]
    public function testAssertTrap1505(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '35']]],
            text: 'uninitialized element',
            line: 2833,
        );
    }

    #[Depends('testAssertTrap1505')]
    public function testAssertTrap1506(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '36']]],
            text: 'uninitialized element',
            line: 2834,
        );
    }

    #[Depends('testAssertTrap1506')]
    public function testAssertTrap1507(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '37']]],
            text: 'uninitialized element',
            line: 2835,
        );
    }

    #[Depends('testAssertTrap1507')]
    public function testAssertTrap1508(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '38']]],
            text: 'uninitialized element',
            line: 2836,
        );
    }

    #[Depends('testAssertTrap1508')]
    public function testAssertTrap1509(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '39']]],
            text: 'uninitialized element',
            line: 2837,
        );
    }

    #[Depends('testAssertTrap1509')]
    public function testAssertTrap1510(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '40']]],
            text: 'uninitialized element',
            line: 2838,
        );
    }

    #[Depends('testAssertTrap1510')]
    public function testAssertTrap1511(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '41']]],
            text: 'uninitialized element',
            line: 2839,
        );
    }

    #[Depends('testAssertTrap1511')]
    public function testAssertTrap1512(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '42']]],
            text: 'uninitialized element',
            line: 2840,
        );
    }

    #[Depends('testAssertTrap1512')]
    public function testAssertTrap1513(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '43']]],
            text: 'uninitialized element',
            line: 2841,
        );
    }

    #[Depends('testAssertTrap1513')]
    public function testAssertTrap1514(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '44']]],
            text: 'uninitialized element',
            line: 2842,
        );
    }

    #[Depends('testAssertTrap1514')]
    public function testAssertTrap1515(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '45']]],
            text: 'uninitialized element',
            line: 2843,
        );
    }

    #[Depends('testAssertTrap1515')]
    public function testAssertTrap1516(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '46']]],
            text: 'uninitialized element',
            line: 2844,
        );
    }

    #[Depends('testAssertTrap1516')]
    public function testAssertTrap1517(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '47']]],
            text: 'uninitialized element',
            line: 2845,
        );
    }

    #[Depends('testAssertTrap1517')]
    public function testAssertTrap1518(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '48']]],
            text: 'uninitialized element',
            line: 2846,
        );
    }

    #[Depends('testAssertTrap1518')]
    public function testAssertTrap1519(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '49']]],
            text: 'uninitialized element',
            line: 2847,
        );
    }

    #[Depends('testAssertTrap1519')]
    public function testAssertTrap1520(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '50']]],
            text: 'uninitialized element',
            line: 2848,
        );
    }

    #[Depends('testAssertTrap1520')]
    public function testAssertTrap1521(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '51']]],
            text: 'uninitialized element',
            line: 2849,
        );
    }

    #[Depends('testAssertTrap1521')]
    public function testAssertTrap1522(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '52']]],
            text: 'uninitialized element',
            line: 2850,
        );
    }

    #[Depends('testAssertTrap1522')]
    public function testAssertTrap1523(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '53']]],
            text: 'uninitialized element',
            line: 2851,
        );
    }

    #[Depends('testAssertTrap1523')]
    public function testAssertTrap1524(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '54']]],
            text: 'uninitialized element',
            line: 2852,
        );
    }

    #[Depends('testAssertTrap1524')]
    public function testAssertTrap1525(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '55']]],
            text: 'uninitialized element',
            line: 2853,
        );
    }

    #[Depends('testAssertTrap1525')]
    public function testAssertTrap1526(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '56']]],
            text: 'uninitialized element',
            line: 2854,
        );
    }

    #[Depends('testAssertTrap1526')]
    public function testAssertTrap1527(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '57']]],
            text: 'uninitialized element',
            line: 2855,
        );
    }

    #[Depends('testAssertTrap1527')]
    public function testAssertTrap1528(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '58']]],
            text: 'uninitialized element',
            line: 2856,
        );
    }

    #[Depends('testAssertTrap1528')]
    public function testAssertTrap1529(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '59']]],
            text: 'uninitialized element',
            line: 2857,
        );
    }

    #[Depends('testAssertTrap1529')]
    public function testAssertTrap1530(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '60']]],
            text: 'uninitialized element',
            line: 2858,
        );
    }

    #[Depends('testAssertTrap1530')]
    public function testAssertTrap1531(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '61']]],
            text: 'uninitialized element',
            line: 2859,
        );
    }

    #[Depends('testAssertTrap1531')]
    public function testAssertTrap1532(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '62']]],
            text: 'uninitialized element',
            line: 2860,
        );
    }

    #[Depends('testAssertTrap1532')]
    public function testAssertTrap1533(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '63']]],
            text: 'uninitialized element',
            line: 2861,
        );
    }

    #[Depends('testAssertTrap1533')]
    public function testAssertTrap1534(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '64']]],
            text: 'uninitialized element',
            line: 2862,
        );
    }

    #[Depends('testAssertTrap1534')]
    public function testAssertTrap1535(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '65']]],
            text: 'uninitialized element',
            line: 2863,
        );
    }

    #[Depends('testAssertTrap1535')]
    public function testAssertTrap1536(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '66']]],
            text: 'uninitialized element',
            line: 2864,
        );
    }

    #[Depends('testAssertTrap1536')]
    public function testAssertTrap1537(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '67']]],
            text: 'uninitialized element',
            line: 2865,
        );
    }

    #[Depends('testAssertTrap1537')]
    public function testAssertTrap1538(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '68']]],
            text: 'uninitialized element',
            line: 2866,
        );
    }

    #[Depends('testAssertTrap1538')]
    public function testAssertTrap1539(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '69']]],
            text: 'uninitialized element',
            line: 2867,
        );
    }

    #[Depends('testAssertTrap1539')]
    public function testAssertTrap1540(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '70']]],
            text: 'uninitialized element',
            line: 2868,
        );
    }

    #[Depends('testAssertTrap1540')]
    public function testAssertTrap1541(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '71']]],
            text: 'uninitialized element',
            line: 2869,
        );
    }

    #[Depends('testAssertTrap1541')]
    public function testAssertTrap1542(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '72']]],
            text: 'uninitialized element',
            line: 2870,
        );
    }

    #[Depends('testAssertTrap1542')]
    public function testAssertTrap1543(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '73']]],
            text: 'uninitialized element',
            line: 2871,
        );
    }

    #[Depends('testAssertTrap1543')]
    public function testAssertTrap1544(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '74']]],
            text: 'uninitialized element',
            line: 2872,
        );
    }

    #[Depends('testAssertTrap1544')]
    public function testAssertTrap1545(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '75']]],
            text: 'uninitialized element',
            line: 2873,
        );
    }

    #[Depends('testAssertTrap1545')]
    public function testAssertTrap1546(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '76']]],
            text: 'uninitialized element',
            line: 2874,
        );
    }

    #[Depends('testAssertTrap1546')]
    public function testAssertTrap1547(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '77']]],
            text: 'uninitialized element',
            line: 2875,
        );
    }

    #[Depends('testAssertTrap1547')]
    public function testAssertTrap1548(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '78']]],
            text: 'uninitialized element',
            line: 2876,
        );
    }

    #[Depends('testAssertTrap1548')]
    public function testAssertTrap1549(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '79']]],
            text: 'uninitialized element',
            line: 2877,
        );
    }

    #[Depends('testAssertTrap1549')]
    public function testAssertTrap1550(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '80']]],
            text: 'uninitialized element',
            line: 2878,
        );
    }

    #[Depends('testAssertTrap1550')]
    public function testAssertTrap1551(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '81']]],
            text: 'uninitialized element',
            line: 2879,
        );
    }

    #[Depends('testAssertTrap1551')]
    public function testAssertTrap1552(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '82']]],
            text: 'uninitialized element',
            line: 2880,
        );
    }

    #[Depends('testAssertTrap1552')]
    public function testAssertTrap1553(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '83']]],
            text: 'uninitialized element',
            line: 2881,
        );
    }

    #[Depends('testAssertTrap1553')]
    public function testAssertTrap1554(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '84']]],
            text: 'uninitialized element',
            line: 2882,
        );
    }

    #[Depends('testAssertTrap1554')]
    public function testAssertTrap1555(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '85']]],
            text: 'uninitialized element',
            line: 2883,
        );
    }

    #[Depends('testAssertTrap1555')]
    public function testAssertTrap1556(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '86']]],
            text: 'uninitialized element',
            line: 2884,
        );
    }

    #[Depends('testAssertTrap1556')]
    public function testAssertTrap1557(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '87']]],
            text: 'uninitialized element',
            line: 2885,
        );
    }

    #[Depends('testAssertTrap1557')]
    public function testAssertTrap1558(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '88']]],
            text: 'uninitialized element',
            line: 2886,
        );
    }

    #[Depends('testAssertTrap1558')]
    public function testAssertTrap1559(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '89']]],
            text: 'uninitialized element',
            line: 2887,
        );
    }

    #[Depends('testAssertTrap1559')]
    public function testAssertTrap1560(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '90']]],
            text: 'uninitialized element',
            line: 2888,
        );
    }

    #[Depends('testAssertTrap1560')]
    public function testAssertTrap1561(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '91']]],
            text: 'uninitialized element',
            line: 2889,
        );
    }

    #[Depends('testAssertTrap1561')]
    public function testAssertTrap1562(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '92']]],
            text: 'uninitialized element',
            line: 2890,
        );
    }

    #[Depends('testAssertTrap1562')]
    public function testAssertTrap1563(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '93']]],
            text: 'uninitialized element',
            line: 2891,
        );
    }

    #[Depends('testAssertTrap1563')]
    public function testAssertTrap1564(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '94']]],
            text: 'uninitialized element',
            line: 2892,
        );
    }

    #[Depends('testAssertTrap1564')]
    public function testAssertTrap1565(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '95']]],
            text: 'uninitialized element',
            line: 2893,
        );
    }

    #[Depends('testAssertTrap1565')]
    public function testAssertTrap1566(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '96']]],
            text: 'uninitialized element',
            line: 2894,
        );
    }

    #[Depends('testAssertTrap1566')]
    public function testAssertTrap1567(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '97']]],
            text: 'uninitialized element',
            line: 2895,
        );
    }

    #[Depends('testAssertTrap1567')]
    public function testAssertTrap1568(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '98']]],
            text: 'uninitialized element',
            line: 2896,
        );
    }

    #[Depends('testAssertTrap1568')]
    public function testAssertTrap1569(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '99']]],
            text: 'uninitialized element',
            line: 2897,
        );
    }

    #[Depends('testAssertTrap1569')]
    public function testAssertTrap1570(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '100']]],
            text: 'uninitialized element',
            line: 2898,
        );
    }

    #[Depends('testAssertTrap1570')]
    public function testAssertTrap1571(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '101']]],
            text: 'uninitialized element',
            line: 2899,
        );
    }

    #[Depends('testAssertTrap1571')]
    public function testAssertTrap1572(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '102']]],
            text: 'uninitialized element',
            line: 2900,
        );
    }

    #[Depends('testAssertTrap1572')]
    public function testAssertTrap1573(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '103']]],
            text: 'uninitialized element',
            line: 2901,
        );
    }

    #[Depends('testAssertTrap1573')]
    public function testAssertTrap1574(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '104']]],
            text: 'uninitialized element',
            line: 2902,
        );
    }

    #[Depends('testAssertTrap1574')]
    public function testAssertTrap1575(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '105']]],
            text: 'uninitialized element',
            line: 2903,
        );
    }

    #[Depends('testAssertTrap1575')]
    public function testAssertTrap1576(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '106']]],
            text: 'uninitialized element',
            line: 2904,
        );
    }

    #[Depends('testAssertTrap1576')]
    public function testAssertTrap1577(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '107']]],
            text: 'uninitialized element',
            line: 2905,
        );
    }

    #[Depends('testAssertTrap1577')]
    public function testAssertTrap1578(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '108']]],
            text: 'uninitialized element',
            line: 2906,
        );
    }

    #[Depends('testAssertTrap1578')]
    public function testAssertTrap1579(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '109']]],
            text: 'uninitialized element',
            line: 2907,
        );
    }

    #[Depends('testAssertTrap1579')]
    public function testAssertTrap1580(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '110']]],
            text: 'uninitialized element',
            line: 2908,
        );
    }

    #[Depends('testAssertTrap1580')]
    public function testAssertTrap1581(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '111']]],
            text: 'uninitialized element',
            line: 2909,
        );
    }

    #[Depends('testAssertTrap1581')]
    public function testAssertReturn1582(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '112']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2910,
        );
    }

    #[Depends('testAssertReturn1582')]
    public function testAssertReturn1583(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '113']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2911,
        );
    }

    #[Depends('testAssertReturn1583')]
    public function testAssertReturn1584(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '114']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 2912,
        );
    }

    #[Depends('testAssertReturn1584')]
    public function testAssertReturn1585(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '115']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 2913,
        );
    }

    #[Depends('testAssertReturn1585')]
    public function testAssertReturn1586(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '116']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 2914,
        );
    }

    #[Depends('testAssertReturn1586')]
    public function testAssertReturn1587(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '117']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 2915,
        );
    }

    #[Depends('testAssertReturn1587')]
    public function testAssertReturn1588(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '118']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 2916,
        );
    }

    #[Depends('testAssertReturn1588')]
    public function testAssertReturn1589(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '119']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 2917,
        );
    }

    #[Depends('testAssertReturn1589')]
    public function testAssertReturn1590(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '120']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 2918,
        );
    }

    #[Depends('testAssertReturn1590')]
    public function testAssertReturn1591(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '121']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 2919,
        );
    }

    #[Depends('testAssertReturn1591')]
    public function testAssertReturn1592(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '122']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 2920,
        );
    }

    #[Depends('testAssertReturn1592')]
    public function testAssertReturn1593(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '123']]],
            expected: [['type' => 'i32', 'value' => '11']],
            line: 2921,
        );
    }

    #[Depends('testAssertReturn1593')]
    public function testAssertReturn1594(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '124']]],
            expected: [['type' => 'i32', 'value' => '12']],
            line: 2922,
        );
    }

    #[Depends('testAssertReturn1594')]
    public function testAssertReturn1595(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '125']]],
            expected: [['type' => 'i32', 'value' => '13']],
            line: 2923,
        );
    }

    #[Depends('testAssertReturn1595')]
    public function testAssertReturn1596(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '126']]],
            expected: [['type' => 'i32', 'value' => '14']],
            line: 2924,
        );
    }

    #[Depends('testAssertReturn1596')]
    public function testAssertReturn1597(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '127']]],
            expected: [['type' => 'i32', 'value' => '15']],
            line: 2925,
        );
    }

    #[Depends('testAssertReturn1597')]
    public function testModule1598(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.51.wasm',
            name: null,
            line: 2927,
        );
    }

    #[Depends('testModule1598')]
    public function testAssertTrap1599(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '112'], ['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '4294967264']]],
            text: 'out of bounds table access',
            line: 2953,
        );
    }

    #[Depends('testAssertTrap1599')]
    public function testAssertReturn1600(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2955,
        );
    }

    #[Depends('testAssertReturn1600')]
    public function testAssertReturn1601(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2956,
        );
    }

    #[Depends('testAssertReturn1601')]
    public function testAssertReturn1602(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 2957,
        );
    }

    #[Depends('testAssertReturn1602')]
    public function testAssertReturn1603(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 2958,
        );
    }

    #[Depends('testAssertReturn1603')]
    public function testAssertReturn1604(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 2959,
        );
    }

    #[Depends('testAssertReturn1604')]
    public function testAssertReturn1605(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 2960,
        );
    }

    #[Depends('testAssertReturn1605')]
    public function testAssertReturn1606(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 2961,
        );
    }

    #[Depends('testAssertReturn1606')]
    public function testAssertReturn1607(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '7']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 2962,
        );
    }

    #[Depends('testAssertReturn1607')]
    public function testAssertReturn1608(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 2963,
        );
    }

    #[Depends('testAssertReturn1608')]
    public function testAssertReturn1609(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '9']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 2964,
        );
    }

    #[Depends('testAssertReturn1609')]
    public function testAssertReturn1610(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 2965,
        );
    }

    #[Depends('testAssertReturn1610')]
    public function testAssertReturn1611(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '11']],
            line: 2966,
        );
    }

    #[Depends('testAssertReturn1611')]
    public function testAssertReturn1612(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '12']],
            line: 2967,
        );
    }

    #[Depends('testAssertReturn1612')]
    public function testAssertReturn1613(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '13']],
            line: 2968,
        );
    }

    #[Depends('testAssertReturn1613')]
    public function testAssertReturn1614(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '14']],
            line: 2969,
        );
    }

    #[Depends('testAssertReturn1614')]
    public function testAssertReturn1615(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '15']],
            line: 2970,
        );
    }

    #[Depends('testAssertReturn1615')]
    public function testAssertTrap1616(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 2971,
        );
    }

    #[Depends('testAssertTrap1616')]
    public function testAssertTrap1617(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 2972,
        );
    }

    #[Depends('testAssertTrap1617')]
    public function testAssertTrap1618(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 2973,
        );
    }

    #[Depends('testAssertTrap1618')]
    public function testAssertTrap1619(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 2974,
        );
    }

    #[Depends('testAssertTrap1619')]
    public function testAssertTrap1620(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 2975,
        );
    }

    #[Depends('testAssertTrap1620')]
    public function testAssertTrap1621(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 2976,
        );
    }

    #[Depends('testAssertTrap1621')]
    public function testAssertTrap1622(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 2977,
        );
    }

    #[Depends('testAssertTrap1622')]
    public function testAssertTrap1623(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 2978,
        );
    }

    #[Depends('testAssertTrap1623')]
    public function testAssertTrap1624(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 2979,
        );
    }

    #[Depends('testAssertTrap1624')]
    public function testAssertTrap1625(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 2980,
        );
    }

    #[Depends('testAssertTrap1625')]
    public function testAssertTrap1626(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 2981,
        );
    }

    #[Depends('testAssertTrap1626')]
    public function testAssertTrap1627(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 2982,
        );
    }

    #[Depends('testAssertTrap1627')]
    public function testAssertTrap1628(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 2983,
        );
    }

    #[Depends('testAssertTrap1628')]
    public function testAssertTrap1629(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 2984,
        );
    }

    #[Depends('testAssertTrap1629')]
    public function testAssertTrap1630(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '30']]],
            text: 'uninitialized element',
            line: 2985,
        );
    }

    #[Depends('testAssertTrap1630')]
    public function testAssertTrap1631(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '31']]],
            text: 'uninitialized element',
            line: 2986,
        );
    }

    #[Depends('testAssertTrap1631')]
    public function testAssertTrap1632(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '32']]],
            text: 'uninitialized element',
            line: 2987,
        );
    }

    #[Depends('testAssertTrap1632')]
    public function testAssertTrap1633(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '33']]],
            text: 'uninitialized element',
            line: 2988,
        );
    }

    #[Depends('testAssertTrap1633')]
    public function testAssertTrap1634(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '34']]],
            text: 'uninitialized element',
            line: 2989,
        );
    }

    #[Depends('testAssertTrap1634')]
    public function testAssertTrap1635(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '35']]],
            text: 'uninitialized element',
            line: 2990,
        );
    }

    #[Depends('testAssertTrap1635')]
    public function testAssertTrap1636(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '36']]],
            text: 'uninitialized element',
            line: 2991,
        );
    }

    #[Depends('testAssertTrap1636')]
    public function testAssertTrap1637(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '37']]],
            text: 'uninitialized element',
            line: 2992,
        );
    }

    #[Depends('testAssertTrap1637')]
    public function testAssertTrap1638(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '38']]],
            text: 'uninitialized element',
            line: 2993,
        );
    }

    #[Depends('testAssertTrap1638')]
    public function testAssertTrap1639(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '39']]],
            text: 'uninitialized element',
            line: 2994,
        );
    }

    #[Depends('testAssertTrap1639')]
    public function testAssertTrap1640(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '40']]],
            text: 'uninitialized element',
            line: 2995,
        );
    }

    #[Depends('testAssertTrap1640')]
    public function testAssertTrap1641(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '41']]],
            text: 'uninitialized element',
            line: 2996,
        );
    }

    #[Depends('testAssertTrap1641')]
    public function testAssertTrap1642(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '42']]],
            text: 'uninitialized element',
            line: 2997,
        );
    }

    #[Depends('testAssertTrap1642')]
    public function testAssertTrap1643(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '43']]],
            text: 'uninitialized element',
            line: 2998,
        );
    }

    #[Depends('testAssertTrap1643')]
    public function testAssertTrap1644(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '44']]],
            text: 'uninitialized element',
            line: 2999,
        );
    }

    #[Depends('testAssertTrap1644')]
    public function testAssertTrap1645(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '45']]],
            text: 'uninitialized element',
            line: 3000,
        );
    }

    #[Depends('testAssertTrap1645')]
    public function testAssertTrap1646(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '46']]],
            text: 'uninitialized element',
            line: 3001,
        );
    }

    #[Depends('testAssertTrap1646')]
    public function testAssertTrap1647(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '47']]],
            text: 'uninitialized element',
            line: 3002,
        );
    }

    #[Depends('testAssertTrap1647')]
    public function testAssertTrap1648(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '48']]],
            text: 'uninitialized element',
            line: 3003,
        );
    }

    #[Depends('testAssertTrap1648')]
    public function testAssertTrap1649(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '49']]],
            text: 'uninitialized element',
            line: 3004,
        );
    }

    #[Depends('testAssertTrap1649')]
    public function testAssertTrap1650(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '50']]],
            text: 'uninitialized element',
            line: 3005,
        );
    }

    #[Depends('testAssertTrap1650')]
    public function testAssertTrap1651(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '51']]],
            text: 'uninitialized element',
            line: 3006,
        );
    }

    #[Depends('testAssertTrap1651')]
    public function testAssertTrap1652(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '52']]],
            text: 'uninitialized element',
            line: 3007,
        );
    }

    #[Depends('testAssertTrap1652')]
    public function testAssertTrap1653(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '53']]],
            text: 'uninitialized element',
            line: 3008,
        );
    }

    #[Depends('testAssertTrap1653')]
    public function testAssertTrap1654(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '54']]],
            text: 'uninitialized element',
            line: 3009,
        );
    }

    #[Depends('testAssertTrap1654')]
    public function testAssertTrap1655(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '55']]],
            text: 'uninitialized element',
            line: 3010,
        );
    }

    #[Depends('testAssertTrap1655')]
    public function testAssertTrap1656(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '56']]],
            text: 'uninitialized element',
            line: 3011,
        );
    }

    #[Depends('testAssertTrap1656')]
    public function testAssertTrap1657(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '57']]],
            text: 'uninitialized element',
            line: 3012,
        );
    }

    #[Depends('testAssertTrap1657')]
    public function testAssertTrap1658(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '58']]],
            text: 'uninitialized element',
            line: 3013,
        );
    }

    #[Depends('testAssertTrap1658')]
    public function testAssertTrap1659(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '59']]],
            text: 'uninitialized element',
            line: 3014,
        );
    }

    #[Depends('testAssertTrap1659')]
    public function testAssertTrap1660(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '60']]],
            text: 'uninitialized element',
            line: 3015,
        );
    }

    #[Depends('testAssertTrap1660')]
    public function testAssertTrap1661(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '61']]],
            text: 'uninitialized element',
            line: 3016,
        );
    }

    #[Depends('testAssertTrap1661')]
    public function testAssertTrap1662(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '62']]],
            text: 'uninitialized element',
            line: 3017,
        );
    }

    #[Depends('testAssertTrap1662')]
    public function testAssertTrap1663(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '63']]],
            text: 'uninitialized element',
            line: 3018,
        );
    }

    #[Depends('testAssertTrap1663')]
    public function testAssertTrap1664(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '64']]],
            text: 'uninitialized element',
            line: 3019,
        );
    }

    #[Depends('testAssertTrap1664')]
    public function testAssertTrap1665(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '65']]],
            text: 'uninitialized element',
            line: 3020,
        );
    }

    #[Depends('testAssertTrap1665')]
    public function testAssertTrap1666(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '66']]],
            text: 'uninitialized element',
            line: 3021,
        );
    }

    #[Depends('testAssertTrap1666')]
    public function testAssertTrap1667(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '67']]],
            text: 'uninitialized element',
            line: 3022,
        );
    }

    #[Depends('testAssertTrap1667')]
    public function testAssertTrap1668(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '68']]],
            text: 'uninitialized element',
            line: 3023,
        );
    }

    #[Depends('testAssertTrap1668')]
    public function testAssertTrap1669(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '69']]],
            text: 'uninitialized element',
            line: 3024,
        );
    }

    #[Depends('testAssertTrap1669')]
    public function testAssertTrap1670(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '70']]],
            text: 'uninitialized element',
            line: 3025,
        );
    }

    #[Depends('testAssertTrap1670')]
    public function testAssertTrap1671(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '71']]],
            text: 'uninitialized element',
            line: 3026,
        );
    }

    #[Depends('testAssertTrap1671')]
    public function testAssertTrap1672(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '72']]],
            text: 'uninitialized element',
            line: 3027,
        );
    }

    #[Depends('testAssertTrap1672')]
    public function testAssertTrap1673(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '73']]],
            text: 'uninitialized element',
            line: 3028,
        );
    }

    #[Depends('testAssertTrap1673')]
    public function testAssertTrap1674(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '74']]],
            text: 'uninitialized element',
            line: 3029,
        );
    }

    #[Depends('testAssertTrap1674')]
    public function testAssertTrap1675(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '75']]],
            text: 'uninitialized element',
            line: 3030,
        );
    }

    #[Depends('testAssertTrap1675')]
    public function testAssertTrap1676(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '76']]],
            text: 'uninitialized element',
            line: 3031,
        );
    }

    #[Depends('testAssertTrap1676')]
    public function testAssertTrap1677(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '77']]],
            text: 'uninitialized element',
            line: 3032,
        );
    }

    #[Depends('testAssertTrap1677')]
    public function testAssertTrap1678(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '78']]],
            text: 'uninitialized element',
            line: 3033,
        );
    }

    #[Depends('testAssertTrap1678')]
    public function testAssertTrap1679(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '79']]],
            text: 'uninitialized element',
            line: 3034,
        );
    }

    #[Depends('testAssertTrap1679')]
    public function testAssertTrap1680(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '80']]],
            text: 'uninitialized element',
            line: 3035,
        );
    }

    #[Depends('testAssertTrap1680')]
    public function testAssertTrap1681(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '81']]],
            text: 'uninitialized element',
            line: 3036,
        );
    }

    #[Depends('testAssertTrap1681')]
    public function testAssertTrap1682(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '82']]],
            text: 'uninitialized element',
            line: 3037,
        );
    }

    #[Depends('testAssertTrap1682')]
    public function testAssertTrap1683(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '83']]],
            text: 'uninitialized element',
            line: 3038,
        );
    }

    #[Depends('testAssertTrap1683')]
    public function testAssertTrap1684(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '84']]],
            text: 'uninitialized element',
            line: 3039,
        );
    }

    #[Depends('testAssertTrap1684')]
    public function testAssertTrap1685(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '85']]],
            text: 'uninitialized element',
            line: 3040,
        );
    }

    #[Depends('testAssertTrap1685')]
    public function testAssertTrap1686(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '86']]],
            text: 'uninitialized element',
            line: 3041,
        );
    }

    #[Depends('testAssertTrap1686')]
    public function testAssertTrap1687(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '87']]],
            text: 'uninitialized element',
            line: 3042,
        );
    }

    #[Depends('testAssertTrap1687')]
    public function testAssertTrap1688(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '88']]],
            text: 'uninitialized element',
            line: 3043,
        );
    }

    #[Depends('testAssertTrap1688')]
    public function testAssertTrap1689(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '89']]],
            text: 'uninitialized element',
            line: 3044,
        );
    }

    #[Depends('testAssertTrap1689')]
    public function testAssertTrap1690(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '90']]],
            text: 'uninitialized element',
            line: 3045,
        );
    }

    #[Depends('testAssertTrap1690')]
    public function testAssertTrap1691(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '91']]],
            text: 'uninitialized element',
            line: 3046,
        );
    }

    #[Depends('testAssertTrap1691')]
    public function testAssertTrap1692(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '92']]],
            text: 'uninitialized element',
            line: 3047,
        );
    }

    #[Depends('testAssertTrap1692')]
    public function testAssertTrap1693(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '93']]],
            text: 'uninitialized element',
            line: 3048,
        );
    }

    #[Depends('testAssertTrap1693')]
    public function testAssertTrap1694(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '94']]],
            text: 'uninitialized element',
            line: 3049,
        );
    }

    #[Depends('testAssertTrap1694')]
    public function testAssertTrap1695(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '95']]],
            text: 'uninitialized element',
            line: 3050,
        );
    }

    #[Depends('testAssertTrap1695')]
    public function testAssertTrap1696(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '96']]],
            text: 'uninitialized element',
            line: 3051,
        );
    }

    #[Depends('testAssertTrap1696')]
    public function testAssertTrap1697(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '97']]],
            text: 'uninitialized element',
            line: 3052,
        );
    }

    #[Depends('testAssertTrap1697')]
    public function testAssertTrap1698(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '98']]],
            text: 'uninitialized element',
            line: 3053,
        );
    }

    #[Depends('testAssertTrap1698')]
    public function testAssertTrap1699(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '99']]],
            text: 'uninitialized element',
            line: 3054,
        );
    }

    #[Depends('testAssertTrap1699')]
    public function testAssertTrap1700(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '100']]],
            text: 'uninitialized element',
            line: 3055,
        );
    }

    #[Depends('testAssertTrap1700')]
    public function testAssertTrap1701(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '101']]],
            text: 'uninitialized element',
            line: 3056,
        );
    }

    #[Depends('testAssertTrap1701')]
    public function testAssertTrap1702(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '102']]],
            text: 'uninitialized element',
            line: 3057,
        );
    }

    #[Depends('testAssertTrap1702')]
    public function testAssertTrap1703(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '103']]],
            text: 'uninitialized element',
            line: 3058,
        );
    }

    #[Depends('testAssertTrap1703')]
    public function testAssertTrap1704(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '104']]],
            text: 'uninitialized element',
            line: 3059,
        );
    }

    #[Depends('testAssertTrap1704')]
    public function testAssertTrap1705(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '105']]],
            text: 'uninitialized element',
            line: 3060,
        );
    }

    #[Depends('testAssertTrap1705')]
    public function testAssertTrap1706(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '106']]],
            text: 'uninitialized element',
            line: 3061,
        );
    }

    #[Depends('testAssertTrap1706')]
    public function testAssertTrap1707(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '107']]],
            text: 'uninitialized element',
            line: 3062,
        );
    }

    #[Depends('testAssertTrap1707')]
    public function testAssertTrap1708(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '108']]],
            text: 'uninitialized element',
            line: 3063,
        );
    }

    #[Depends('testAssertTrap1708')]
    public function testAssertTrap1709(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '109']]],
            text: 'uninitialized element',
            line: 3064,
        );
    }

    #[Depends('testAssertTrap1709')]
    public function testAssertTrap1710(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '110']]],
            text: 'uninitialized element',
            line: 3065,
        );
    }

    #[Depends('testAssertTrap1710')]
    public function testAssertTrap1711(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '111']]],
            text: 'uninitialized element',
            line: 3066,
        );
    }

    #[Depends('testAssertTrap1711')]
    public function testAssertTrap1712(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '112']]],
            text: 'uninitialized element',
            line: 3067,
        );
    }

    #[Depends('testAssertTrap1712')]
    public function testAssertTrap1713(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '113']]],
            text: 'uninitialized element',
            line: 3068,
        );
    }

    #[Depends('testAssertTrap1713')]
    public function testAssertTrap1714(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '114']]],
            text: 'uninitialized element',
            line: 3069,
        );
    }

    #[Depends('testAssertTrap1714')]
    public function testAssertTrap1715(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '115']]],
            text: 'uninitialized element',
            line: 3070,
        );
    }

    #[Depends('testAssertTrap1715')]
    public function testAssertTrap1716(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '116']]],
            text: 'uninitialized element',
            line: 3071,
        );
    }

    #[Depends('testAssertTrap1716')]
    public function testAssertTrap1717(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '117']]],
            text: 'uninitialized element',
            line: 3072,
        );
    }

    #[Depends('testAssertTrap1717')]
    public function testAssertTrap1718(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '118']]],
            text: 'uninitialized element',
            line: 3073,
        );
    }

    #[Depends('testAssertTrap1718')]
    public function testAssertTrap1719(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '119']]],
            text: 'uninitialized element',
            line: 3074,
        );
    }

    #[Depends('testAssertTrap1719')]
    public function testAssertTrap1720(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '120']]],
            text: 'uninitialized element',
            line: 3075,
        );
    }

    #[Depends('testAssertTrap1720')]
    public function testAssertTrap1721(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '121']]],
            text: 'uninitialized element',
            line: 3076,
        );
    }

    #[Depends('testAssertTrap1721')]
    public function testAssertTrap1722(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '122']]],
            text: 'uninitialized element',
            line: 3077,
        );
    }

    #[Depends('testAssertTrap1722')]
    public function testAssertTrap1723(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '123']]],
            text: 'uninitialized element',
            line: 3078,
        );
    }

    #[Depends('testAssertTrap1723')]
    public function testAssertTrap1724(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '124']]],
            text: 'uninitialized element',
            line: 3079,
        );
    }

    #[Depends('testAssertTrap1724')]
    public function testAssertTrap1725(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '125']]],
            text: 'uninitialized element',
            line: 3080,
        );
    }

    #[Depends('testAssertTrap1725')]
    public function testAssertTrap1726(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '126']]],
            text: 'uninitialized element',
            line: 3081,
        );
    }

    #[Depends('testAssertTrap1726')]
    public function testAssertTrap1727(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '127']]],
            text: 'uninitialized element',
            line: 3082,
        );
    }
}
