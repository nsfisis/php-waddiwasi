<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
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
            filename: 'table_copy.1.wasm',
            name: null,
            line: 15,
        );
    }

    public function testAction3(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 45,
        );
    }

    public function testAssertTrap4(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 46,
        );
    }

    public function testAssertTrap5(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 47,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 48,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 49,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 50,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 51,
        );
    }

    public function testAssertTrap10(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 52,
        );
    }

    public function testAssertTrap11(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 53,
        );
    }

    public function testAssertTrap12(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 54,
        );
    }

    public function testAssertTrap13(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 55,
        );
    }

    public function testAssertTrap14(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 56,
        );
    }

    public function testAssertTrap15(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 57,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 58,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 59,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 60,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 61,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 62,
        );
    }

    public function testAssertTrap21(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 63,
        );
    }

    public function testAssertTrap22(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 64,
        );
    }

    public function testAssertTrap23(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 65,
        );
    }

    public function testAssertTrap24(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 66,
        );
    }

    public function testAssertTrap25(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 67,
        );
    }

    public function testAssertTrap26(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 68,
        );
    }

    public function testAssertTrap27(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 69,
        );
    }

    public function testAssertTrap28(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 70,
        );
    }

    public function testAssertTrap29(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 71,
        );
    }

    public function testAssertTrap30(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 72,
        );
    }

    public function testAssertTrap31(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 73,
        );
    }

    public function testAssertTrap32(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 74,
        );
    }

    public function testAssertTrap33(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 75,
        );
    }

    public function testAssertTrap34(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 76,
        );
    }

    public function testAssertTrap35(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 77,
        );
    }

    public function testAssertTrap36(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 78,
        );
    }

    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 79,
        );
    }

    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 80,
        );
    }

    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 81,
        );
    }

    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 82,
        );
    }

    public function testAssertTrap41(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 83,
        );
    }

    public function testAssertTrap42(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 84,
        );
    }

    public function testAssertTrap43(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 85,
        );
    }

    public function testAssertTrap44(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 86,
        );
    }

    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 87,
        );
    }

    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 88,
        );
    }

    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 89,
        );
    }

    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 90,
        );
    }

    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 91,
        );
    }

    public function testAssertTrap50(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 92,
        );
    }

    public function testAssertTrap51(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 93,
        );
    }

    public function testAssertTrap52(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 94,
        );
    }

    public function testAssertTrap53(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 95,
        );
    }

    public function testAssertTrap54(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 96,
        );
    }

    public function testAssertTrap55(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 97,
        );
    }

    public function testAssertTrap56(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 98,
        );
    }

    public function testAssertTrap57(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 99,
        );
    }

    public function testAssertTrap58(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 100,
        );
    }

    public function testAssertTrap59(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 101,
        );
    }

    public function testAssertTrap60(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 102,
        );
    }

    public function testAssertTrap61(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 103,
        );
    }

    public function testAssertTrap62(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 104,
        );
    }

    public function testAssertTrap63(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 105,
        );
    }

    public function testModule64(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.2.wasm',
            name: null,
            line: 107,
        );
    }

    public function testAction65(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 137,
        );
    }

    public function testAssertTrap66(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 138,
        );
    }

    public function testAssertTrap67(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 139,
        );
    }

    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 140,
        );
    }

    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 141,
        );
    }

    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 142,
        );
    }

    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 143,
        );
    }

    public function testAssertTrap72(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 144,
        );
    }

    public function testAssertTrap73(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 145,
        );
    }

    public function testAssertTrap74(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 146,
        );
    }

    public function testAssertTrap75(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 147,
        );
    }

    public function testAssertTrap76(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 148,
        );
    }

    public function testAssertTrap77(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 149,
        );
    }

    public function testAssertReturn78(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 150,
        );
    }

    public function testAssertReturn79(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 151,
        );
    }

    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 152,
        );
    }

    public function testAssertReturn81(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 153,
        );
    }

    public function testAssertReturn82(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 154,
        );
    }

    public function testAssertTrap83(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 155,
        );
    }

    public function testAssertTrap84(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 156,
        );
    }

    public function testAssertTrap85(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 157,
        );
    }

    public function testAssertTrap86(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 158,
        );
    }

    public function testAssertTrap87(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 159,
        );
    }

    public function testAssertTrap88(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 160,
        );
    }

    public function testAssertTrap89(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 161,
        );
    }

    public function testAssertTrap90(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 162,
        );
    }

    public function testAssertTrap91(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 163,
        );
    }

    public function testAssertTrap92(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 164,
        );
    }

    public function testAssertTrap93(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 165,
        );
    }

    public function testAssertTrap94(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 166,
        );
    }

    public function testAssertTrap95(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 167,
        );
    }

    public function testAssertTrap96(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 168,
        );
    }

    public function testAssertTrap97(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 169,
        );
    }

    public function testAssertTrap98(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 170,
        );
    }

    public function testAssertReturn99(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 171,
        );
    }

    public function testAssertReturn100(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 172,
        );
    }

    public function testAssertReturn101(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 173,
        );
    }

    public function testAssertReturn102(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 174,
        );
    }

    public function testAssertTrap103(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 175,
        );
    }

    public function testAssertTrap104(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 176,
        );
    }

    public function testAssertTrap105(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 177,
        );
    }

    public function testAssertTrap106(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 178,
        );
    }

    public function testAssertReturn107(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 179,
        );
    }

    public function testAssertReturn108(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 180,
        );
    }

    public function testAssertReturn109(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 181,
        );
    }

    public function testAssertReturn110(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 182,
        );
    }

    public function testAssertReturn111(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 183,
        );
    }

    public function testAssertTrap112(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 184,
        );
    }

    public function testAssertTrap113(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 185,
        );
    }

    public function testAssertTrap114(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 186,
        );
    }

    public function testAssertTrap115(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 187,
        );
    }

    public function testAssertTrap116(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 188,
        );
    }

    public function testAssertTrap117(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 189,
        );
    }

    public function testAssertTrap118(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 190,
        );
    }

    public function testAssertTrap119(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 191,
        );
    }

    public function testAssertTrap120(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 192,
        );
    }

    public function testAssertTrap121(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 193,
        );
    }

    public function testAssertTrap122(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 194,
        );
    }

    public function testAssertTrap123(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 195,
        );
    }

    public function testAssertTrap124(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 196,
        );
    }

    public function testAssertTrap125(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 197,
        );
    }

    public function testModule126(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.3.wasm',
            name: null,
            line: 199,
        );
    }

    public function testAction127(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 229,
        );
    }

    public function testAssertTrap128(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 230,
        );
    }

    public function testAssertTrap129(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 231,
        );
    }

    public function testAssertReturn130(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 232,
        );
    }

    public function testAssertReturn131(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 233,
        );
    }

    public function testAssertReturn132(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 234,
        );
    }

    public function testAssertReturn133(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 235,
        );
    }

    public function testAssertTrap134(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 236,
        );
    }

    public function testAssertTrap135(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 237,
        );
    }

    public function testAssertTrap136(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 238,
        );
    }

    public function testAssertTrap137(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 239,
        );
    }

    public function testAssertTrap138(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 240,
        );
    }

    public function testAssertTrap139(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 241,
        );
    }

    public function testAssertReturn140(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 242,
        );
    }

    public function testAssertReturn141(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 243,
        );
    }

    public function testAssertReturn142(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 244,
        );
    }

    public function testAssertReturn143(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 245,
        );
    }

    public function testAssertReturn144(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 246,
        );
    }

    public function testAssertTrap145(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 247,
        );
    }

    public function testAssertTrap146(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 248,
        );
    }

    public function testAssertTrap147(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 249,
        );
    }

    public function testAssertTrap148(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 250,
        );
    }

    public function testAssertTrap149(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 251,
        );
    }

    public function testAssertTrap150(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 252,
        );
    }

    public function testAssertTrap151(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 253,
        );
    }

    public function testAssertTrap152(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 254,
        );
    }

    public function testAssertReturn153(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 255,
        );
    }

    public function testAssertReturn154(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 256,
        );
    }

    public function testAssertTrap155(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 257,
        );
    }

    public function testAssertTrap156(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 258,
        );
    }

    public function testAssertTrap157(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 259,
        );
    }

    public function testAssertTrap158(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 260,
        );
    }

    public function testAssertTrap159(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 261,
        );
    }

    public function testAssertTrap160(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 262,
        );
    }

    public function testAssertReturn161(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 263,
        );
    }

    public function testAssertReturn162(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 264,
        );
    }

    public function testAssertReturn163(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 265,
        );
    }

    public function testAssertReturn164(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 266,
        );
    }

    public function testAssertTrap165(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 267,
        );
    }

    public function testAssertTrap166(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 268,
        );
    }

    public function testAssertTrap167(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 269,
        );
    }

    public function testAssertTrap168(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 270,
        );
    }

    public function testAssertReturn169(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 271,
        );
    }

    public function testAssertReturn170(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 272,
        );
    }

    public function testAssertReturn171(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 273,
        );
    }

    public function testAssertReturn172(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 274,
        );
    }

    public function testAssertReturn173(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 275,
        );
    }

    public function testAssertTrap174(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 276,
        );
    }

    public function testAssertTrap175(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 277,
        );
    }

    public function testAssertTrap176(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 278,
        );
    }

    public function testAssertTrap177(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 279,
        );
    }

    public function testAssertTrap178(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 280,
        );
    }

    public function testAssertTrap179(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 281,
        );
    }

    public function testAssertTrap180(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 282,
        );
    }

    public function testAssertTrap181(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 283,
        );
    }

    public function testAssertTrap182(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 284,
        );
    }

    public function testAssertTrap183(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 285,
        );
    }

    public function testAssertTrap184(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 286,
        );
    }

    public function testAssertTrap185(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 287,
        );
    }

    public function testAssertTrap186(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 288,
        );
    }

    public function testAssertTrap187(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 289,
        );
    }

    public function testModule188(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.4.wasm',
            name: null,
            line: 291,
        );
    }

    public function testAction189(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 321,
        );
    }

    public function testAssertTrap190(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 322,
        );
    }

    public function testAssertTrap191(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 323,
        );
    }

    public function testAssertReturn192(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 324,
        );
    }

    public function testAssertReturn193(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 325,
        );
    }

    public function testAssertReturn194(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 326,
        );
    }

    public function testAssertReturn195(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 327,
        );
    }

    public function testAssertTrap196(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 328,
        );
    }

    public function testAssertTrap197(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 329,
        );
    }

    public function testAssertTrap198(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 330,
        );
    }

    public function testAssertTrap199(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 331,
        );
    }

    public function testAssertTrap200(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 332,
        );
    }

    public function testAssertTrap201(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 333,
        );
    }

    public function testAssertReturn202(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 334,
        );
    }

    public function testAssertTrap203(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 335,
        );
    }

    public function testAssertTrap204(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            text: 'uninitialized element',
            line: 336,
        );
    }

    public function testAssertTrap205(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 337,
        );
    }

    public function testAssertReturn206(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 338,
        );
    }

    public function testAssertTrap207(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 339,
        );
    }

    public function testAssertTrap208(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 340,
        );
    }

    public function testAssertTrap209(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 341,
        );
    }

    public function testAssertTrap210(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 342,
        );
    }

    public function testAssertTrap211(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 343,
        );
    }

    public function testAssertTrap212(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 344,
        );
    }

    public function testAssertTrap213(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 345,
        );
    }

    public function testAssertTrap214(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 346,
        );
    }

    public function testAssertTrap215(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 347,
        );
    }

    public function testAssertTrap216(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 348,
        );
    }

    public function testAssertTrap217(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 349,
        );
    }

    public function testAssertTrap218(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 350,
        );
    }

    public function testAssertTrap219(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 351,
        );
    }

    public function testAssertTrap220(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 352,
        );
    }

    public function testAssertTrap221(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 353,
        );
    }

    public function testAssertTrap222(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 354,
        );
    }

    public function testAssertReturn223(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 355,
        );
    }

    public function testAssertReturn224(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 356,
        );
    }

    public function testAssertReturn225(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 357,
        );
    }

    public function testAssertReturn226(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 358,
        );
    }

    public function testAssertTrap227(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 359,
        );
    }

    public function testAssertTrap228(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 360,
        );
    }

    public function testAssertTrap229(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 361,
        );
    }

    public function testAssertTrap230(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 362,
        );
    }

    public function testAssertReturn231(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 363,
        );
    }

    public function testAssertReturn232(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 364,
        );
    }

    public function testAssertReturn233(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 365,
        );
    }

    public function testAssertReturn234(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 366,
        );
    }

    public function testAssertReturn235(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 367,
        );
    }

    public function testAssertTrap236(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 368,
        );
    }

    public function testAssertTrap237(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 369,
        );
    }

    public function testAssertTrap238(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 370,
        );
    }

    public function testAssertTrap239(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 371,
        );
    }

    public function testAssertTrap240(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 372,
        );
    }

    public function testAssertTrap241(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 373,
        );
    }

    public function testAssertTrap242(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 374,
        );
    }

    public function testAssertTrap243(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 375,
        );
    }

    public function testAssertTrap244(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 376,
        );
    }

    public function testAssertTrap245(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 377,
        );
    }

    public function testAssertTrap246(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 378,
        );
    }

    public function testAssertTrap247(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 379,
        );
    }

    public function testAssertTrap248(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 380,
        );
    }

    public function testAssertTrap249(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 381,
        );
    }

    public function testModule250(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.5.wasm',
            name: null,
            line: 383,
        );
    }

    public function testAction251(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 413,
        );
    }

    public function testAssertTrap252(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 414,
        );
    }

    public function testAssertTrap253(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 415,
        );
    }

    public function testAssertReturn254(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 416,
        );
    }

    public function testAssertReturn255(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 417,
        );
    }

    public function testAssertReturn256(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 418,
        );
    }

    public function testAssertReturn257(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 419,
        );
    }

    public function testAssertTrap258(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 420,
        );
    }

    public function testAssertTrap259(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 421,
        );
    }

    public function testAssertTrap260(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 422,
        );
    }

    public function testAssertTrap261(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 423,
        );
    }

    public function testAssertTrap262(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 424,
        );
    }

    public function testAssertTrap263(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 425,
        );
    }

    public function testAssertReturn264(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 426,
        );
    }

    public function testAssertReturn265(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 427,
        );
    }

    public function testAssertReturn266(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 428,
        );
    }

    public function testAssertReturn267(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 429,
        );
    }

    public function testAssertReturn268(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 430,
        );
    }

    public function testAssertTrap269(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 431,
        );
    }

    public function testAssertTrap270(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 432,
        );
    }

    public function testAssertTrap271(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 433,
        );
    }

    public function testAssertTrap272(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 434,
        );
    }

    public function testAssertTrap273(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 435,
        );
    }

    public function testAssertTrap274(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 436,
        );
    }

    public function testAssertTrap275(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 437,
        );
    }

    public function testAssertTrap276(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 438,
        );
    }

    public function testAssertTrap277(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 439,
        );
    }

    public function testAssertTrap278(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 440,
        );
    }

    public function testAssertTrap279(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 441,
        );
    }

    public function testAssertTrap280(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 442,
        );
    }

    public function testAssertTrap281(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 443,
        );
    }

    public function testAssertTrap282(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 444,
        );
    }

    public function testAssertTrap283(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 445,
        );
    }

    public function testAssertTrap284(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 446,
        );
    }

    public function testAssertReturn285(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 447,
        );
    }

    public function testAssertReturn286(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 448,
        );
    }

    public function testAssertReturn287(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 449,
        );
    }

    public function testAssertReturn288(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 450,
        );
    }

    public function testAssertTrap289(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 451,
        );
    }

    public function testAssertTrap290(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 452,
        );
    }

    public function testAssertTrap291(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 453,
        );
    }

    public function testAssertTrap292(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 454,
        );
    }

    public function testAssertReturn293(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 455,
        );
    }

    public function testAssertReturn294(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 456,
        );
    }

    public function testAssertReturn295(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 457,
        );
    }

    public function testAssertReturn296(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 458,
        );
    }

    public function testAssertReturn297(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 459,
        );
    }

    public function testAssertTrap298(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 460,
        );
    }

    public function testAssertTrap299(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 461,
        );
    }

    public function testAssertTrap300(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 462,
        );
    }

    public function testAssertTrap301(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 463,
        );
    }

    public function testAssertTrap302(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 464,
        );
    }

    public function testAssertTrap303(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 465,
        );
    }

    public function testAssertTrap304(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 466,
        );
    }

    public function testAssertTrap305(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 467,
        );
    }

    public function testAssertTrap306(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 468,
        );
    }

    public function testAssertTrap307(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 469,
        );
    }

    public function testAssertTrap308(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 470,
        );
    }

    public function testAssertTrap309(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 471,
        );
    }

    public function testAssertTrap310(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 472,
        );
    }

    public function testAssertTrap311(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 473,
        );
    }

    public function testModule312(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.6.wasm',
            name: null,
            line: 475,
        );
    }

    public function testAction313(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 505,
        );
    }

    public function testAssertTrap314(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 506,
        );
    }

    public function testAssertTrap315(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 507,
        );
    }

    public function testAssertReturn316(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 508,
        );
    }

    public function testAssertReturn317(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 509,
        );
    }

    public function testAssertReturn318(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 510,
        );
    }

    public function testAssertReturn319(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 511,
        );
    }

    public function testAssertTrap320(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 512,
        );
    }

    public function testAssertTrap321(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 513,
        );
    }

    public function testAssertTrap322(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 514,
        );
    }

    public function testAssertTrap323(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 515,
        );
    }

    public function testAssertTrap324(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 516,
        );
    }

    public function testAssertTrap325(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 517,
        );
    }

    public function testAssertReturn326(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 518,
        );
    }

    public function testAssertReturn327(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 519,
        );
    }

    public function testAssertReturn328(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 520,
        );
    }

    public function testAssertReturn329(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 521,
        );
    }

    public function testAssertReturn330(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 522,
        );
    }

    public function testAssertTrap331(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 523,
        );
    }

    public function testAssertTrap332(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 524,
        );
    }

    public function testAssertTrap333(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 525,
        );
    }

    public function testAssertTrap334(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 526,
        );
    }

    public function testAssertTrap335(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 527,
        );
    }

    public function testAssertTrap336(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 528,
        );
    }

    public function testAssertTrap337(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 529,
        );
    }

    public function testAssertTrap338(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 530,
        );
    }

    public function testAssertTrap339(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 531,
        );
    }

    public function testAssertReturn340(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 532,
        );
    }

    public function testAssertReturn341(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 533,
        );
    }

    public function testAssertTrap342(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 534,
        );
    }

    public function testAssertTrap343(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 535,
        );
    }

    public function testAssertTrap344(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 536,
        );
    }

    public function testAssertTrap345(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 537,
        );
    }

    public function testAssertTrap346(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 538,
        );
    }

    public function testAssertReturn347(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 539,
        );
    }

    public function testAssertReturn348(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 540,
        );
    }

    public function testAssertReturn349(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 541,
        );
    }

    public function testAssertReturn350(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 542,
        );
    }

    public function testAssertTrap351(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 543,
        );
    }

    public function testAssertTrap352(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 544,
        );
    }

    public function testAssertTrap353(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 545,
        );
    }

    public function testAssertTrap354(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 546,
        );
    }

    public function testAssertReturn355(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 547,
        );
    }

    public function testAssertReturn356(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 548,
        );
    }

    public function testAssertReturn357(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 549,
        );
    }

    public function testAssertReturn358(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 550,
        );
    }

    public function testAssertReturn359(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 551,
        );
    }

    public function testAssertTrap360(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 552,
        );
    }

    public function testAssertTrap361(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 553,
        );
    }

    public function testAssertTrap362(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 554,
        );
    }

    public function testAssertTrap363(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 555,
        );
    }

    public function testAssertTrap364(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 556,
        );
    }

    public function testAssertTrap365(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 557,
        );
    }

    public function testAssertTrap366(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 558,
        );
    }

    public function testAssertTrap367(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 559,
        );
    }

    public function testAssertTrap368(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 560,
        );
    }

    public function testAssertTrap369(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 561,
        );
    }

    public function testAssertTrap370(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 562,
        );
    }

    public function testAssertTrap371(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 563,
        );
    }

    public function testAssertTrap372(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 564,
        );
    }

    public function testAssertTrap373(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 565,
        );
    }

    public function testModule374(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.7.wasm',
            name: null,
            line: 567,
        );
    }

    public function testAction375(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 597,
        );
    }

    public function testAssertTrap376(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 598,
        );
    }

    public function testAssertTrap377(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 599,
        );
    }

    public function testAssertReturn378(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 600,
        );
    }

    public function testAssertReturn379(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 601,
        );
    }

    public function testAssertReturn380(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 602,
        );
    }

    public function testAssertReturn381(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 603,
        );
    }

    public function testAssertTrap382(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 604,
        );
    }

    public function testAssertTrap383(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 605,
        );
    }

    public function testAssertTrap384(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 606,
        );
    }

    public function testAssertTrap385(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 607,
        );
    }

    public function testAssertReturn386(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 608,
        );
    }

    public function testAssertReturn387(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 609,
        );
    }

    public function testAssertReturn388(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 610,
        );
    }

    public function testAssertReturn389(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 611,
        );
    }

    public function testAssertReturn390(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 612,
        );
    }

    public function testAssertTrap391(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 613,
        );
    }

    public function testAssertTrap392(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 614,
        );
    }

    public function testAssertTrap393(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 615,
        );
    }

    public function testAssertTrap394(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 616,
        );
    }

    public function testAssertTrap395(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 617,
        );
    }

    public function testAssertTrap396(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 618,
        );
    }

    public function testAssertTrap397(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 619,
        );
    }

    public function testAssertTrap398(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 620,
        );
    }

    public function testAssertTrap399(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 621,
        );
    }

    public function testAssertTrap400(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 622,
        );
    }

    public function testAssertTrap401(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 623,
        );
    }

    public function testAssertTrap402(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 624,
        );
    }

    public function testAssertTrap403(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 625,
        );
    }

    public function testAssertTrap404(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 626,
        );
    }

    public function testAssertTrap405(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 627,
        );
    }

    public function testAssertTrap406(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 628,
        );
    }

    public function testAssertTrap407(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 629,
        );
    }

    public function testAssertTrap408(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 630,
        );
    }

    public function testAssertReturn409(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 631,
        );
    }

    public function testAssertReturn410(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 632,
        );
    }

    public function testAssertReturn411(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 633,
        );
    }

    public function testAssertReturn412(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 634,
        );
    }

    public function testAssertTrap413(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 635,
        );
    }

    public function testAssertTrap414(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 636,
        );
    }

    public function testAssertTrap415(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 637,
        );
    }

    public function testAssertTrap416(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 638,
        );
    }

    public function testAssertReturn417(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 639,
        );
    }

    public function testAssertReturn418(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 640,
        );
    }

    public function testAssertReturn419(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 641,
        );
    }

    public function testAssertReturn420(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 642,
        );
    }

    public function testAssertReturn421(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 643,
        );
    }

    public function testAssertTrap422(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 644,
        );
    }

    public function testAssertTrap423(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 645,
        );
    }

    public function testAssertTrap424(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 646,
        );
    }

    public function testAssertTrap425(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 647,
        );
    }

    public function testAssertTrap426(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 648,
        );
    }

    public function testAssertTrap427(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 649,
        );
    }

    public function testAssertTrap428(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 650,
        );
    }

    public function testAssertTrap429(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 651,
        );
    }

    public function testAssertTrap430(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 652,
        );
    }

    public function testAssertTrap431(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 653,
        );
    }

    public function testAssertTrap432(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 654,
        );
    }

    public function testAssertTrap433(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 655,
        );
    }

    public function testAssertTrap434(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 656,
        );
    }

    public function testAssertTrap435(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 657,
        );
    }

    public function testModule436(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.8.wasm',
            name: null,
            line: 659,
        );
    }

    public function testAction437(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 689,
        );
    }

    public function testAssertTrap438(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 690,
        );
    }

    public function testAssertTrap439(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 691,
        );
    }

    public function testAssertReturn440(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 692,
        );
    }

    public function testAssertReturn441(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 693,
        );
    }

    public function testAssertReturn442(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 694,
        );
    }

    public function testAssertReturn443(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 695,
        );
    }

    public function testAssertTrap444(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 696,
        );
    }

    public function testAssertTrap445(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 697,
        );
    }

    public function testAssertTrap446(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 698,
        );
    }

    public function testAssertTrap447(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 699,
        );
    }

    public function testAssertTrap448(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 700,
        );
    }

    public function testAssertTrap449(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 701,
        );
    }

    public function testAssertTrap450(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            text: 'uninitialized element',
            line: 702,
        );
    }

    public function testAssertTrap451(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 703,
        );
    }

    public function testAssertReturn452(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 704,
        );
    }

    public function testAssertReturn453(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 705,
        );
    }

    public function testAssertReturn454(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 706,
        );
    }

    public function testAssertReturn455(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 707,
        );
    }

    public function testAssertReturn456(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 708,
        );
    }

    public function testAssertTrap457(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 709,
        );
    }

    public function testAssertTrap458(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 710,
        );
    }

    public function testAssertTrap459(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 711,
        );
    }

    public function testAssertTrap460(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 712,
        );
    }

    public function testAssertTrap461(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 713,
        );
    }

    public function testAssertTrap462(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 714,
        );
    }

    public function testAssertTrap463(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 715,
        );
    }

    public function testAssertTrap464(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 716,
        );
    }

    public function testAssertTrap465(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 717,
        );
    }

    public function testAssertTrap466(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 718,
        );
    }

    public function testAssertTrap467(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 719,
        );
    }

    public function testAssertTrap468(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 720,
        );
    }

    public function testAssertTrap469(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 721,
        );
    }

    public function testAssertTrap470(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 722,
        );
    }

    public function testAssertReturn471(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 723,
        );
    }

    public function testAssertReturn472(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 724,
        );
    }

    public function testAssertReturn473(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 725,
        );
    }

    public function testAssertReturn474(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 726,
        );
    }

    public function testAssertTrap475(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 727,
        );
    }

    public function testAssertTrap476(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 728,
        );
    }

    public function testAssertTrap477(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 729,
        );
    }

    public function testAssertTrap478(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 730,
        );
    }

    public function testAssertReturn479(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 731,
        );
    }

    public function testAssertReturn480(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 732,
        );
    }

    public function testAssertReturn481(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 733,
        );
    }

    public function testAssertReturn482(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 734,
        );
    }

    public function testAssertReturn483(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 735,
        );
    }

    public function testAssertTrap484(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 736,
        );
    }

    public function testAssertTrap485(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 737,
        );
    }

    public function testAssertTrap486(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 738,
        );
    }

    public function testAssertTrap487(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 739,
        );
    }

    public function testAssertTrap488(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 740,
        );
    }

    public function testAssertTrap489(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 741,
        );
    }

    public function testAssertTrap490(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 742,
        );
    }

    public function testAssertTrap491(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 743,
        );
    }

    public function testAssertTrap492(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 744,
        );
    }

    public function testAssertTrap493(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 745,
        );
    }

    public function testAssertTrap494(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 746,
        );
    }

    public function testAssertTrap495(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 747,
        );
    }

    public function testAssertTrap496(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 748,
        );
    }

    public function testAssertTrap497(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 749,
        );
    }

    public function testModule498(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.9.wasm',
            name: null,
            line: 751,
        );
    }

    public function testAction499(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 781,
        );
    }

    public function testAssertTrap500(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 782,
        );
    }

    public function testAssertTrap501(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 783,
        );
    }

    public function testAssertReturn502(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 784,
        );
    }

    public function testAssertReturn503(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 785,
        );
    }

    public function testAssertReturn504(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 786,
        );
    }

    public function testAssertReturn505(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 787,
        );
    }

    public function testAssertTrap506(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 788,
        );
    }

    public function testAssertTrap507(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 789,
        );
    }

    public function testAssertTrap508(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 790,
        );
    }

    public function testAssertTrap509(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 791,
        );
    }

    public function testAssertTrap510(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 792,
        );
    }

    public function testAssertTrap511(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 793,
        );
    }

    public function testAssertReturn512(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 794,
        );
    }

    public function testAssertReturn513(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 795,
        );
    }

    public function testAssertReturn514(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 796,
        );
    }

    public function testAssertReturn515(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 797,
        );
    }

    public function testAssertReturn516(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 798,
        );
    }

    public function testAssertTrap517(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 799,
        );
    }

    public function testAssertTrap518(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 800,
        );
    }

    public function testAssertTrap519(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 801,
        );
    }

    public function testAssertTrap520(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 802,
        );
    }

    public function testAssertTrap521(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 803,
        );
    }

    public function testAssertTrap522(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 804,
        );
    }

    public function testAssertTrap523(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 805,
        );
    }

    public function testAssertTrap524(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 806,
        );
    }

    public function testAssertTrap525(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 807,
        );
    }

    public function testAssertTrap526(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 808,
        );
    }

    public function testAssertTrap527(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 809,
        );
    }

    public function testAssertTrap528(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 810,
        );
    }

    public function testAssertTrap529(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 811,
        );
    }

    public function testAssertTrap530(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 812,
        );
    }

    public function testAssertTrap531(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 813,
        );
    }

    public function testAssertTrap532(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 814,
        );
    }

    public function testAssertReturn533(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 815,
        );
    }

    public function testAssertReturn534(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 816,
        );
    }

    public function testAssertReturn535(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 817,
        );
    }

    public function testAssertReturn536(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 818,
        );
    }

    public function testAssertTrap537(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 819,
        );
    }

    public function testAssertTrap538(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 820,
        );
    }

    public function testAssertTrap539(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 821,
        );
    }

    public function testAssertTrap540(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 822,
        );
    }

    public function testAssertTrap541(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 823,
        );
    }

    public function testAssertReturn542(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 824,
        );
    }

    public function testAssertReturn543(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 825,
        );
    }

    public function testAssertReturn544(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 826,
        );
    }

    public function testAssertReturn545(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 827,
        );
    }

    public function testAssertTrap546(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 828,
        );
    }

    public function testAssertTrap547(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 829,
        );
    }

    public function testAssertTrap548(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 830,
        );
    }

    public function testAssertTrap549(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 831,
        );
    }

    public function testAssertTrap550(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 832,
        );
    }

    public function testAssertTrap551(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 833,
        );
    }

    public function testAssertReturn552(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 834,
        );
    }

    public function testAssertReturn553(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 835,
        );
    }

    public function testAssertReturn554(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 836,
        );
    }

    public function testAssertReturn555(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 837,
        );
    }

    public function testAssertReturn556(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 838,
        );
    }

    public function testAssertTrap557(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 839,
        );
    }

    public function testAssertTrap558(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 840,
        );
    }

    public function testAssertTrap559(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 841,
        );
    }

    public function testModule560(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.10.wasm',
            name: null,
            line: 843,
        );
    }

    public function testAction561(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 873,
        );
    }

    public function testAssertTrap562(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 874,
        );
    }

    public function testAssertTrap563(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 875,
        );
    }

    public function testAssertReturn564(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 876,
        );
    }

    public function testAssertReturn565(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 877,
        );
    }

    public function testAssertReturn566(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 878,
        );
    }

    public function testAssertReturn567(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 879,
        );
    }

    public function testAssertTrap568(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 880,
        );
    }

    public function testAssertTrap569(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 881,
        );
    }

    public function testAssertTrap570(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 882,
        );
    }

    public function testAssertTrap571(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 883,
        );
    }

    public function testAssertTrap572(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 884,
        );
    }

    public function testAssertTrap573(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 885,
        );
    }

    public function testAssertReturn574(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 886,
        );
    }

    public function testAssertReturn575(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 887,
        );
    }

    public function testAssertReturn576(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 888,
        );
    }

    public function testAssertReturn577(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 889,
        );
    }

    public function testAssertReturn578(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 890,
        );
    }

    public function testAssertTrap579(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 891,
        );
    }

    public function testAssertTrap580(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 892,
        );
    }

    public function testAssertTrap581(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 893,
        );
    }

    public function testAssertTrap582(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 894,
        );
    }

    public function testAssertTrap583(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 895,
        );
    }

    public function testAssertTrap584(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 896,
        );
    }

    public function testAssertTrap585(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 897,
        );
    }

    public function testAssertTrap586(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 898,
        );
    }

    public function testAssertTrap587(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 899,
        );
    }

    public function testAssertTrap588(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 900,
        );
    }

    public function testAssertTrap589(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 901,
        );
    }

    public function testAssertTrap590(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 902,
        );
    }

    public function testAssertTrap591(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 903,
        );
    }

    public function testAssertTrap592(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 904,
        );
    }

    public function testAssertTrap593(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 905,
        );
    }

    public function testAssertTrap594(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 906,
        );
    }

    public function testAssertReturn595(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 907,
        );
    }

    public function testAssertReturn596(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 908,
        );
    }

    public function testAssertReturn597(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 909,
        );
    }

    public function testAssertReturn598(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 910,
        );
    }

    public function testAssertTrap599(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 911,
        );
    }

    public function testAssertTrap600(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 912,
        );
    }

    public function testAssertTrap601(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 913,
        );
    }

    public function testAssertTrap602(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 914,
        );
    }

    public function testAssertReturn603(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 915,
        );
    }

    public function testAssertReturn604(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 916,
        );
    }

    public function testAssertReturn605(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 917,
        );
    }

    public function testAssertReturn606(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 918,
        );
    }

    public function testAssertReturn607(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 919,
        );
    }

    public function testAssertTrap608(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 920,
        );
    }

    public function testAssertTrap609(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 921,
        );
    }

    public function testAssertTrap610(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 922,
        );
    }

    public function testAssertTrap611(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 923,
        );
    }

    public function testAssertTrap612(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 924,
        );
    }

    public function testAssertTrap613(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 925,
        );
    }

    public function testAssertTrap614(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 926,
        );
    }

    public function testAssertTrap615(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 927,
        );
    }

    public function testAssertTrap616(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 928,
        );
    }

    public function testAssertTrap617(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 929,
        );
    }

    public function testAssertTrap618(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 930,
        );
    }

    public function testAssertTrap619(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 931,
        );
    }

    public function testAssertTrap620(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 932,
        );
    }

    public function testAssertTrap621(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 933,
        );
    }

    public function testModule622(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.11.wasm',
            name: null,
            line: 935,
        );
    }

    public function testAction623(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 965,
        );
    }

    public function testAssertTrap624(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 966,
        );
    }

    public function testAssertTrap625(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 967,
        );
    }

    public function testAssertReturn626(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 968,
        );
    }

    public function testAssertReturn627(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 969,
        );
    }

    public function testAssertReturn628(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 970,
        );
    }

    public function testAssertReturn629(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 971,
        );
    }

    public function testAssertTrap630(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 972,
        );
    }

    public function testAssertTrap631(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 973,
        );
    }

    public function testAssertTrap632(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 974,
        );
    }

    public function testAssertTrap633(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 975,
        );
    }

    public function testAssertTrap634(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 976,
        );
    }

    public function testAssertTrap635(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 977,
        );
    }

    public function testAssertReturn636(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 978,
        );
    }

    public function testAssertReturn637(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 979,
        );
    }

    public function testAssertReturn638(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 980,
        );
    }

    public function testAssertReturn639(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 981,
        );
    }

    public function testAssertReturn640(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 982,
        );
    }

    public function testAssertTrap641(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 983,
        );
    }

    public function testAssertTrap642(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 984,
        );
    }

    public function testAssertTrap643(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 985,
        );
    }

    public function testAssertTrap644(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 986,
        );
    }

    public function testAssertTrap645(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 987,
        );
    }

    public function testAssertTrap646(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 988,
        );
    }

    public function testAssertTrap647(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 989,
        );
    }

    public function testAssertTrap648(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 990,
        );
    }

    public function testAssertTrap649(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 991,
        );
    }

    public function testAssertTrap650(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 992,
        );
    }

    public function testAssertTrap651(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 993,
        );
    }

    public function testAssertTrap652(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 994,
        );
    }

    public function testAssertTrap653(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 995,
        );
    }

    public function testAssertTrap654(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 996,
        );
    }

    public function testAssertTrap655(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 997,
        );
    }

    public function testAssertTrap656(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 998,
        );
    }

    public function testAssertReturn657(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 999,
        );
    }

    public function testAssertReturn658(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1000,
        );
    }

    public function testAssertReturn659(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1001,
        );
    }

    public function testAssertReturn660(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1002,
        );
    }

    public function testAssertTrap661(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1003,
        );
    }

    public function testAssertTrap662(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1004,
        );
    }

    public function testAssertTrap663(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1005,
        );
    }

    public function testAssertTrap664(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1006,
        );
    }

    public function testAssertReturn665(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1007,
        );
    }

    public function testAssertReturn666(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1008,
        );
    }

    public function testAssertReturn667(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 1009,
        );
    }

    public function testAssertReturn668(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 1010,
        );
    }

    public function testAssertReturn669(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 1011,
        );
    }

    public function testAssertTrap670(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 1012,
        );
    }

    public function testAssertTrap671(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1013,
        );
    }

    public function testAssertTrap672(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1014,
        );
    }

    public function testAssertTrap673(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1015,
        );
    }

    public function testAssertTrap674(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1016,
        );
    }

    public function testAssertTrap675(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1017,
        );
    }

    public function testAssertTrap676(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1018,
        );
    }

    public function testAssertTrap677(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1019,
        );
    }

    public function testAssertTrap678(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1020,
        );
    }

    public function testAssertTrap679(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 1021,
        );
    }

    public function testAssertTrap680(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 1022,
        );
    }

    public function testAssertTrap681(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1023,
        );
    }

    public function testAssertTrap682(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1024,
        );
    }

    public function testAssertTrap683(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1025,
        );
    }

    public function testModule684(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.12.wasm',
            name: null,
            line: 1027,
        );
    }

    public function testAction685(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 1057,
        );
    }

    public function testAssertTrap686(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1058,
        );
    }

    public function testAssertTrap687(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1059,
        );
    }

    public function testAssertReturn688(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1060,
        );
    }

    public function testAssertReturn689(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1061,
        );
    }

    public function testAssertReturn690(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1062,
        );
    }

    public function testAssertReturn691(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1063,
        );
    }

    public function testAssertTrap692(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 1064,
        );
    }

    public function testAssertTrap693(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1065,
        );
    }

    public function testAssertTrap694(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1066,
        );
    }

    public function testAssertTrap695(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1067,
        );
    }

    public function testAssertTrap696(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1068,
        );
    }

    public function testAssertTrap697(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 1069,
        );
    }

    public function testAssertReturn698(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 1070,
        );
    }

    public function testAssertReturn699(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 1071,
        );
    }

    public function testAssertReturn700(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 1072,
        );
    }

    public function testAssertReturn701(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1073,
        );
    }

    public function testAssertReturn702(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1074,
        );
    }

    public function testAssertTrap703(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1075,
        );
    }

    public function testAssertTrap704(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1076,
        );
    }

    public function testAssertTrap705(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1077,
        );
    }

    public function testAssertTrap706(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1078,
        );
    }

    public function testAssertTrap707(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1079,
        );
    }

    public function testAssertTrap708(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1080,
        );
    }

    public function testAssertTrap709(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1081,
        );
    }

    public function testAssertTrap710(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1082,
        );
    }

    public function testAssertReturn711(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1083,
        );
    }

    public function testAssertReturn712(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1084,
        );
    }

    public function testAssertTrap713(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1085,
        );
    }

    public function testAssertTrap714(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1086,
        );
    }

    public function testAssertTrap715(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1087,
        );
    }

    public function testAssertTrap716(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1088,
        );
    }

    public function testAssertTrap717(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1089,
        );
    }

    public function testAssertTrap718(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 1090,
        );
    }

    public function testAssertReturn719(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1091,
        );
    }

    public function testAssertReturn720(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1092,
        );
    }

    public function testAssertReturn721(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1093,
        );
    }

    public function testAssertReturn722(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1094,
        );
    }

    public function testAssertTrap723(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1095,
        );
    }

    public function testAssertTrap724(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1096,
        );
    }

    public function testAssertTrap725(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1097,
        );
    }

    public function testAssertTrap726(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1098,
        );
    }

    public function testAssertReturn727(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1099,
        );
    }

    public function testAssertReturn728(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1100,
        );
    }

    public function testAssertReturn729(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 1101,
        );
    }

    public function testAssertReturn730(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 1102,
        );
    }

    public function testAssertReturn731(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 1103,
        );
    }

    public function testAssertTrap732(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 1104,
        );
    }

    public function testAssertTrap733(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1105,
        );
    }

    public function testAssertTrap734(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1106,
        );
    }

    public function testAssertTrap735(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1107,
        );
    }

    public function testAssertTrap736(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1108,
        );
    }

    public function testAssertTrap737(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1109,
        );
    }

    public function testAssertTrap738(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1110,
        );
    }

    public function testAssertTrap739(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1111,
        );
    }

    public function testAssertTrap740(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1112,
        );
    }

    public function testAssertTrap741(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 1113,
        );
    }

    public function testAssertTrap742(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 1114,
        );
    }

    public function testAssertTrap743(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1115,
        );
    }

    public function testAssertTrap744(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1116,
        );
    }

    public function testAssertTrap745(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1117,
        );
    }

    public function testModule746(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.13.wasm',
            name: null,
            line: 1119,
        );
    }

    public function testAction747(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 1149,
        );
    }

    public function testAssertTrap748(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1150,
        );
    }

    public function testAssertTrap749(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1151,
        );
    }

    public function testAssertReturn750(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1152,
        );
    }

    public function testAssertReturn751(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1153,
        );
    }

    public function testAssertReturn752(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1154,
        );
    }

    public function testAssertReturn753(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1155,
        );
    }

    public function testAssertTrap754(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 1156,
        );
    }

    public function testAssertTrap755(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1157,
        );
    }

    public function testAssertTrap756(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1158,
        );
    }

    public function testAssertTrap757(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1159,
        );
    }

    public function testAssertTrap758(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1160,
        );
    }

    public function testAssertTrap759(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 1161,
        );
    }

    public function testAssertReturn760(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 1162,
        );
    }

    public function testAssertTrap761(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 1163,
        );
    }

    public function testAssertTrap762(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            text: 'uninitialized element',
            line: 1164,
        );
    }

    public function testAssertTrap763(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 1165,
        );
    }

    public function testAssertReturn764(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1166,
        );
    }

    public function testAssertTrap765(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1167,
        );
    }

    public function testAssertTrap766(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1168,
        );
    }

    public function testAssertTrap767(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1169,
        );
    }

    public function testAssertTrap768(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1170,
        );
    }

    public function testAssertTrap769(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1171,
        );
    }

    public function testAssertTrap770(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1172,
        );
    }

    public function testAssertTrap771(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1173,
        );
    }

    public function testAssertTrap772(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1174,
        );
    }

    public function testAssertTrap773(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 1175,
        );
    }

    public function testAssertTrap774(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 1176,
        );
    }

    public function testAssertTrap775(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1177,
        );
    }

    public function testAssertTrap776(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1178,
        );
    }

    public function testAssertTrap777(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1179,
        );
    }

    public function testAssertTrap778(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1180,
        );
    }

    public function testAssertTrap779(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1181,
        );
    }

    public function testAssertTrap780(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 1182,
        );
    }

    public function testAssertReturn781(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1183,
        );
    }

    public function testAssertReturn782(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1184,
        );
    }

    public function testAssertReturn783(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1185,
        );
    }

    public function testAssertReturn784(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1186,
        );
    }

    public function testAssertTrap785(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1187,
        );
    }

    public function testAssertTrap786(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1188,
        );
    }

    public function testAssertTrap787(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1189,
        );
    }

    public function testAssertTrap788(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1190,
        );
    }

    public function testAssertReturn789(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1191,
        );
    }

    public function testAssertReturn790(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1192,
        );
    }

    public function testAssertReturn791(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 1193,
        );
    }

    public function testAssertReturn792(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 1194,
        );
    }

    public function testAssertReturn793(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 1195,
        );
    }

    public function testAssertTrap794(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 1196,
        );
    }

    public function testAssertTrap795(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1197,
        );
    }

    public function testAssertTrap796(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1198,
        );
    }

    public function testAssertTrap797(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1199,
        );
    }

    public function testAssertTrap798(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1200,
        );
    }

    public function testAssertTrap799(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1201,
        );
    }

    public function testAssertTrap800(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1202,
        );
    }

    public function testAssertTrap801(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1203,
        );
    }

    public function testAssertTrap802(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1204,
        );
    }

    public function testAssertTrap803(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 1205,
        );
    }

    public function testAssertTrap804(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 1206,
        );
    }

    public function testAssertTrap805(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1207,
        );
    }

    public function testAssertTrap806(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1208,
        );
    }

    public function testAssertTrap807(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1209,
        );
    }

    public function testModule808(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.14.wasm',
            name: null,
            line: 1211,
        );
    }

    public function testAction809(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 1241,
        );
    }

    public function testAssertTrap810(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1242,
        );
    }

    public function testAssertTrap811(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1243,
        );
    }

    public function testAssertReturn812(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1244,
        );
    }

    public function testAssertReturn813(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1245,
        );
    }

    public function testAssertReturn814(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1246,
        );
    }

    public function testAssertReturn815(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1247,
        );
    }

    public function testAssertTrap816(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 1248,
        );
    }

    public function testAssertTrap817(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1249,
        );
    }

    public function testAssertTrap818(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1250,
        );
    }

    public function testAssertTrap819(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1251,
        );
    }

    public function testAssertTrap820(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1252,
        );
    }

    public function testAssertTrap821(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 1253,
        );
    }

    public function testAssertReturn822(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 1254,
        );
    }

    public function testAssertReturn823(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 1255,
        );
    }

    public function testAssertReturn824(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 1256,
        );
    }

    public function testAssertReturn825(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1257,
        );
    }

    public function testAssertReturn826(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1258,
        );
    }

    public function testAssertTrap827(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1259,
        );
    }

    public function testAssertTrap828(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1260,
        );
    }

    public function testAssertTrap829(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1261,
        );
    }

    public function testAssertTrap830(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1262,
        );
    }

    public function testAssertTrap831(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1263,
        );
    }

    public function testAssertTrap832(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1264,
        );
    }

    public function testAssertTrap833(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1265,
        );
    }

    public function testAssertTrap834(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1266,
        );
    }

    public function testAssertTrap835(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 1267,
        );
    }

    public function testAssertTrap836(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 1268,
        );
    }

    public function testAssertTrap837(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1269,
        );
    }

    public function testAssertTrap838(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1270,
        );
    }

    public function testAssertTrap839(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1271,
        );
    }

    public function testAssertTrap840(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1272,
        );
    }

    public function testAssertTrap841(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1273,
        );
    }

    public function testAssertTrap842(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 1274,
        );
    }

    public function testAssertReturn843(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1275,
        );
    }

    public function testAssertReturn844(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1276,
        );
    }

    public function testAssertReturn845(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1277,
        );
    }

    public function testAssertReturn846(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1278,
        );
    }

    public function testAssertTrap847(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1279,
        );
    }

    public function testAssertTrap848(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1280,
        );
    }

    public function testAssertTrap849(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1281,
        );
    }

    public function testAssertTrap850(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1282,
        );
    }

    public function testAssertReturn851(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1283,
        );
    }

    public function testAssertReturn852(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1284,
        );
    }

    public function testAssertReturn853(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 1285,
        );
    }

    public function testAssertReturn854(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 1286,
        );
    }

    public function testAssertReturn855(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 1287,
        );
    }

    public function testAssertTrap856(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 1288,
        );
    }

    public function testAssertTrap857(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1289,
        );
    }

    public function testAssertTrap858(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1290,
        );
    }

    public function testAssertTrap859(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1291,
        );
    }

    public function testAssertTrap860(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1292,
        );
    }

    public function testAssertTrap861(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1293,
        );
    }

    public function testAssertTrap862(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1294,
        );
    }

    public function testAssertTrap863(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1295,
        );
    }

    public function testAssertTrap864(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1296,
        );
    }

    public function testAssertTrap865(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 1297,
        );
    }

    public function testAssertTrap866(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 1298,
        );
    }

    public function testAssertTrap867(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1299,
        );
    }

    public function testAssertTrap868(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1300,
        );
    }

    public function testAssertTrap869(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1301,
        );
    }

    public function testModule870(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.15.wasm',
            name: null,
            line: 1303,
        );
    }

    public function testAction871(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 1333,
        );
    }

    public function testAssertTrap872(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1334,
        );
    }

    public function testAssertTrap873(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1335,
        );
    }

    public function testAssertReturn874(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1336,
        );
    }

    public function testAssertReturn875(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1337,
        );
    }

    public function testAssertReturn876(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1338,
        );
    }

    public function testAssertReturn877(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1339,
        );
    }

    public function testAssertTrap878(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 1340,
        );
    }

    public function testAssertTrap879(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1341,
        );
    }

    public function testAssertTrap880(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1342,
        );
    }

    public function testAssertTrap881(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1343,
        );
    }

    public function testAssertTrap882(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1344,
        );
    }

    public function testAssertTrap883(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 1345,
        );
    }

    public function testAssertReturn884(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 1346,
        );
    }

    public function testAssertReturn885(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 1347,
        );
    }

    public function testAssertReturn886(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 1348,
        );
    }

    public function testAssertReturn887(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1349,
        );
    }

    public function testAssertReturn888(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1350,
        );
    }

    public function testAssertTrap889(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1351,
        );
    }

    public function testAssertTrap890(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1352,
        );
    }

    public function testAssertTrap891(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1353,
        );
    }

    public function testAssertTrap892(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1354,
        );
    }

    public function testAssertTrap893(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1355,
        );
    }

    public function testAssertTrap894(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1356,
        );
    }

    public function testAssertTrap895(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1357,
        );
    }

    public function testAssertTrap896(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1358,
        );
    }

    public function testAssertTrap897(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 1359,
        );
    }

    public function testAssertReturn898(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1360,
        );
    }

    public function testAssertReturn899(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1361,
        );
    }

    public function testAssertTrap900(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1362,
        );
    }

    public function testAssertTrap901(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1363,
        );
    }

    public function testAssertTrap902(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1364,
        );
    }

    public function testAssertTrap903(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1365,
        );
    }

    public function testAssertTrap904(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 1366,
        );
    }

    public function testAssertReturn905(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1367,
        );
    }

    public function testAssertReturn906(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1368,
        );
    }

    public function testAssertReturn907(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1369,
        );
    }

    public function testAssertReturn908(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1370,
        );
    }

    public function testAssertTrap909(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1371,
        );
    }

    public function testAssertTrap910(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1372,
        );
    }

    public function testAssertTrap911(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1373,
        );
    }

    public function testAssertTrap912(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1374,
        );
    }

    public function testAssertReturn913(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1375,
        );
    }

    public function testAssertReturn914(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1376,
        );
    }

    public function testAssertReturn915(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 1377,
        );
    }

    public function testAssertReturn916(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 1378,
        );
    }

    public function testAssertReturn917(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 1379,
        );
    }

    public function testAssertTrap918(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 1380,
        );
    }

    public function testAssertTrap919(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1381,
        );
    }

    public function testAssertTrap920(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1382,
        );
    }

    public function testAssertTrap921(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1383,
        );
    }

    public function testAssertTrap922(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1384,
        );
    }

    public function testAssertTrap923(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1385,
        );
    }

    public function testAssertTrap924(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1386,
        );
    }

    public function testAssertTrap925(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1387,
        );
    }

    public function testAssertTrap926(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1388,
        );
    }

    public function testAssertTrap927(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 1389,
        );
    }

    public function testAssertTrap928(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 1390,
        );
    }

    public function testAssertTrap929(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1391,
        );
    }

    public function testAssertTrap930(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1392,
        );
    }

    public function testAssertTrap931(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1393,
        );
    }

    public function testModule932(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.16.wasm',
            name: null,
            line: 1395,
        );
    }

    public function testAction933(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 1425,
        );
    }

    public function testAssertTrap934(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1426,
        );
    }

    public function testAssertTrap935(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1427,
        );
    }

    public function testAssertReturn936(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1428,
        );
    }

    public function testAssertReturn937(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1429,
        );
    }

    public function testAssertReturn938(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1430,
        );
    }

    public function testAssertReturn939(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1431,
        );
    }

    public function testAssertTrap940(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 1432,
        );
    }

    public function testAssertTrap941(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1433,
        );
    }

    public function testAssertTrap942(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1434,
        );
    }

    public function testAssertTrap943(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1435,
        );
    }

    public function testAssertReturn944(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 1436,
        );
    }

    public function testAssertReturn945(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 1437,
        );
    }

    public function testAssertReturn946(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 1438,
        );
    }

    public function testAssertReturn947(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1439,
        );
    }

    public function testAssertReturn948(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1440,
        );
    }

    public function testAssertTrap949(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 1441,
        );
    }

    public function testAssertTrap950(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 1442,
        );
    }

    public function testAssertTrap951(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1443,
        );
    }

    public function testAssertTrap952(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1444,
        );
    }

    public function testAssertTrap953(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1445,
        );
    }

    public function testAssertTrap954(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1446,
        );
    }

    public function testAssertTrap955(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1447,
        );
    }

    public function testAssertTrap956(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1448,
        );
    }

    public function testAssertTrap957(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1449,
        );
    }

    public function testAssertTrap958(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1450,
        );
    }

    public function testAssertTrap959(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 1451,
        );
    }

    public function testAssertTrap960(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 1452,
        );
    }

    public function testAssertTrap961(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1453,
        );
    }

    public function testAssertTrap962(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1454,
        );
    }

    public function testAssertTrap963(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1455,
        );
    }

    public function testAssertTrap964(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1456,
        );
    }

    public function testAssertTrap965(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1457,
        );
    }

    public function testAssertTrap966(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 1458,
        );
    }

    public function testAssertReturn967(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1459,
        );
    }

    public function testAssertReturn968(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1460,
        );
    }

    public function testAssertReturn969(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1461,
        );
    }

    public function testAssertReturn970(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1462,
        );
    }

    public function testAssertTrap971(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1463,
        );
    }

    public function testAssertTrap972(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1464,
        );
    }

    public function testAssertTrap973(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1465,
        );
    }

    public function testAssertTrap974(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1466,
        );
    }

    public function testAssertReturn975(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1467,
        );
    }

    public function testAssertReturn976(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1468,
        );
    }

    public function testAssertReturn977(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 1469,
        );
    }

    public function testAssertReturn978(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 1470,
        );
    }

    public function testAssertReturn979(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 1471,
        );
    }

    public function testAssertTrap980(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 1472,
        );
    }

    public function testAssertTrap981(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1473,
        );
    }

    public function testAssertTrap982(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1474,
        );
    }

    public function testAssertTrap983(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1475,
        );
    }

    public function testAssertTrap984(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1476,
        );
    }

    public function testAssertTrap985(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1477,
        );
    }

    public function testAssertTrap986(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1478,
        );
    }

    public function testAssertTrap987(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1479,
        );
    }

    public function testAssertTrap988(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1480,
        );
    }

    public function testAssertTrap989(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 1481,
        );
    }

    public function testAssertTrap990(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 1482,
        );
    }

    public function testAssertTrap991(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1483,
        );
    }

    public function testAssertTrap992(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1484,
        );
    }

    public function testAssertTrap993(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1485,
        );
    }

    public function testModule994(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.17.wasm',
            name: null,
            line: 1487,
        );
    }

    public function testAction995(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 1517,
        );
    }

    public function testAssertTrap996(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1518,
        );
    }

    public function testAssertTrap997(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1519,
        );
    }

    public function testAssertReturn998(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1520,
        );
    }

    public function testAssertReturn999(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1521,
        );
    }

    public function testAssertReturn1000(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1522,
        );
    }

    public function testAssertReturn1001(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1523,
        );
    }

    public function testAssertTrap1002(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 1524,
        );
    }

    public function testAssertTrap1003(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1525,
        );
    }

    public function testAssertTrap1004(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1526,
        );
    }

    public function testAssertTrap1005(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1527,
        );
    }

    public function testAssertTrap1006(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1528,
        );
    }

    public function testAssertTrap1007(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 1529,
        );
    }

    public function testAssertTrap1008(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            text: 'uninitialized element',
            line: 1530,
        );
    }

    public function testAssertTrap1009(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 1531,
        );
    }

    public function testAssertReturn1010(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 1532,
        );
    }

    public function testAssertReturn1011(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 1533,
        );
    }

    public function testAssertReturn1012(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 1534,
        );
    }

    public function testAssertReturn1013(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1535,
        );
    }

    public function testAssertReturn1014(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1536,
        );
    }

    public function testAssertTrap1015(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1537,
        );
    }

    public function testAssertTrap1016(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1538,
        );
    }

    public function testAssertTrap1017(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1539,
        );
    }

    public function testAssertTrap1018(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1540,
        );
    }

    public function testAssertTrap1019(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1541,
        );
    }

    public function testAssertTrap1020(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1542,
        );
    }

    public function testAssertTrap1021(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 1543,
        );
    }

    public function testAssertTrap1022(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 1544,
        );
    }

    public function testAssertTrap1023(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1545,
        );
    }

    public function testAssertTrap1024(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1546,
        );
    }

    public function testAssertTrap1025(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1547,
        );
    }

    public function testAssertTrap1026(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1548,
        );
    }

    public function testAssertTrap1027(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1549,
        );
    }

    public function testAssertTrap1028(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 1550,
        );
    }

    public function testAssertReturn1029(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1551,
        );
    }

    public function testAssertReturn1030(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1552,
        );
    }

    public function testAssertReturn1031(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1553,
        );
    }

    public function testAssertReturn1032(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1554,
        );
    }

    public function testAssertTrap1033(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1555,
        );
    }

    public function testAssertTrap1034(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1556,
        );
    }

    public function testAssertTrap1035(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1557,
        );
    }

    public function testAssertTrap1036(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1558,
        );
    }

    public function testAssertReturn1037(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1559,
        );
    }

    public function testAssertReturn1038(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1560,
        );
    }

    public function testAssertReturn1039(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 1561,
        );
    }

    public function testAssertReturn1040(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 1562,
        );
    }

    public function testAssertReturn1041(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 1563,
        );
    }

    public function testAssertTrap1042(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 1564,
        );
    }

    public function testAssertTrap1043(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1565,
        );
    }

    public function testAssertTrap1044(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1566,
        );
    }

    public function testAssertTrap1045(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1567,
        );
    }

    public function testAssertTrap1046(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1568,
        );
    }

    public function testAssertTrap1047(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1569,
        );
    }

    public function testAssertTrap1048(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1570,
        );
    }

    public function testAssertTrap1049(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1571,
        );
    }

    public function testAssertTrap1050(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1572,
        );
    }

    public function testAssertTrap1051(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 1573,
        );
    }

    public function testAssertTrap1052(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 1574,
        );
    }

    public function testAssertTrap1053(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1575,
        );
    }

    public function testAssertTrap1054(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1576,
        );
    }

    public function testAssertTrap1055(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1577,
        );
    }

    public function testModule1056(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.18.wasm',
            name: null,
            line: 1579,
        );
    }

    public function testAction1057(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 1609,
        );
    }

    public function testAssertTrap1058(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1610,
        );
    }

    public function testAssertTrap1059(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1611,
        );
    }

    public function testAssertReturn1060(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1612,
        );
    }

    public function testAssertReturn1061(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1613,
        );
    }

    public function testAssertReturn1062(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1614,
        );
    }

    public function testAssertReturn1063(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1615,
        );
    }

    public function testAssertTrap1064(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 1616,
        );
    }

    public function testAssertTrap1065(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1617,
        );
    }

    public function testAssertTrap1066(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1618,
        );
    }

    public function testAssertTrap1067(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1619,
        );
    }

    public function testAssertTrap1068(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1620,
        );
    }

    public function testAssertTrap1069(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 1621,
        );
    }

    public function testAssertReturn1070(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 1622,
        );
    }

    public function testAssertReturn1071(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 1623,
        );
    }

    public function testAssertReturn1072(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 1624,
        );
    }

    public function testAssertReturn1073(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1625,
        );
    }

    public function testAssertReturn1074(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1626,
        );
    }

    public function testAssertTrap1075(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1627,
        );
    }

    public function testAssertTrap1076(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1628,
        );
    }

    public function testAssertTrap1077(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1629,
        );
    }

    public function testAssertTrap1078(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1630,
        );
    }

    public function testAssertTrap1079(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1631,
        );
    }

    public function testAssertTrap1080(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 1632,
        );
    }

    public function testAssertTrap1081(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 1633,
        );
    }

    public function testAssertTrap1082(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 1634,
        );
    }

    public function testAssertTrap1083(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 1635,
        );
    }

    public function testAssertTrap1084(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 1636,
        );
    }

    public function testAssertTrap1085(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1637,
        );
    }

    public function testAssertTrap1086(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1638,
        );
    }

    public function testAssertTrap1087(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t0', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1639,
        );
    }

    public function testAssertTrap1088(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 1640,
        );
    }

    public function testAssertTrap1089(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 1641,
        );
    }

    public function testAssertTrap1090(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 1642,
        );
    }

    public function testAssertReturn1091(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1643,
        );
    }

    public function testAssertReturn1092(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1644,
        );
    }

    public function testAssertReturn1093(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1645,
        );
    }

    public function testAssertReturn1094(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1646,
        );
    }

    public function testAssertTrap1095(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 1647,
        );
    }

    public function testAssertTrap1096(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 1648,
        );
    }

    public function testAssertTrap1097(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 1649,
        );
    }

    public function testAssertTrap1098(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 1650,
        );
    }

    public function testAssertTrap1099(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 1651,
        );
    }

    public function testAssertReturn1100(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1652,
        );
    }

    public function testAssertReturn1101(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1653,
        );
    }

    public function testAssertReturn1102(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1654,
        );
    }

    public function testAssertReturn1103(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1655,
        );
    }

    public function testAssertTrap1104(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 1656,
        );
    }

    public function testAssertTrap1105(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 1657,
        );
    }

    public function testAssertTrap1106(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 1658,
        );
    }

    public function testAssertTrap1107(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 1659,
        );
    }

    public function testAssertTrap1108(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 1660,
        );
    }

    public function testAssertTrap1109(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 1661,
        );
    }

    public function testAssertReturn1110(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '22']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 1662,
        );
    }

    public function testAssertReturn1111(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '23']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 1663,
        );
    }

    public function testAssertReturn1112(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '24']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 1664,
        );
    }

    public function testAssertReturn1113(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '25']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1665,
        );
    }

    public function testAssertReturn1114(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '26']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1666,
        );
    }

    public function testAssertTrap1115(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 1667,
        );
    }

    public function testAssertTrap1116(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 1668,
        );
    }

    public function testAssertTrap1117(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'check_t1', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 1669,
        );
    }

    public function testModule1118(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.19.wasm',
            name: null,
            line: 1671,
        );
    }

    public function testAssertTrap1119(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 1694,
        );
    }

    public function testModule1120(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.20.wasm',
            name: null,
            line: 1696,
        );
    }

    public function testAssertTrap1121(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 1719,
        );
    }

    public function testModule1122(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.21.wasm',
            name: null,
            line: 1721,
        );
    }

    public function testAssertTrap1123(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 1744,
        );
    }

    public function testModule1124(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.22.wasm',
            name: null,
            line: 1746,
        );
    }

    public function testAssertTrap1125(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 1769,
        );
    }

    public function testModule1126(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.23.wasm',
            name: null,
            line: 1771,
        );
    }

    public function testAction1127(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 1794,
        );
    }

    public function testModule1128(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.24.wasm',
            name: null,
            line: 1796,
        );
    }

    public function testAction1129(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 1819,
        );
    }

    public function testModule1130(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.25.wasm',
            name: null,
            line: 1821,
        );
    }

    public function testAssertTrap1131(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 1844,
        );
    }

    public function testModule1132(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.26.wasm',
            name: null,
            line: 1846,
        );
    }

    public function testAction1133(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 1869,
        );
    }

    public function testModule1134(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.27.wasm',
            name: null,
            line: 1871,
        );
    }

    public function testAssertTrap1135(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 1894,
        );
    }

    public function testModule1136(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.28.wasm',
            name: null,
            line: 1896,
        );
    }

    public function testAction1137(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 1919,
        );
    }

    public function testModule1138(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.29.wasm',
            name: null,
            line: 1921,
        );
    }

    public function testAssertTrap1139(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 1944,
        );
    }

    public function testModule1140(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.30.wasm',
            name: null,
            line: 1946,
        );
    }

    public function testAssertTrap1141(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 1969,
        );
    }

    public function testModule1142(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.31.wasm',
            name: null,
            line: 1971,
        );
    }

    public function testAssertTrap1143(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 1994,
        );
    }

    public function testModule1144(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.32.wasm',
            name: null,
            line: 1996,
        );
    }

    public function testAssertTrap1145(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 2019,
        );
    }

    public function testModule1146(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.33.wasm',
            name: null,
            line: 2021,
        );
    }

    public function testAssertTrap1147(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 2044,
        );
    }

    public function testModule1148(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.34.wasm',
            name: null,
            line: 2046,
        );
    }

    public function testAction1149(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 2069,
        );
    }

    public function testModule1150(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.35.wasm',
            name: null,
            line: 2071,
        );
    }

    public function testAction1151(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 2094,
        );
    }

    public function testModule1152(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.36.wasm',
            name: null,
            line: 2096,
        );
    }

    public function testAssertTrap1153(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 2119,
        );
    }

    public function testModule1154(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.37.wasm',
            name: null,
            line: 2121,
        );
    }

    public function testAction1155(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 2144,
        );
    }

    public function testModule1156(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.38.wasm',
            name: null,
            line: 2146,
        );
    }

    public function testAssertTrap1157(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 2169,
        );
    }

    public function testModule1158(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.39.wasm',
            name: null,
            line: 2171,
        );
    }

    public function testAction1159(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 2194,
        );
    }

    public function testModule1160(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.40.wasm',
            name: null,
            line: 2196,
        );
    }

    public function testAssertTrap1161(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds table access',
            line: 2219,
        );
    }

    public function testModule1162(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.41.wasm',
            name: null,
            line: 2221,
        );
    }

    public function testAssertTrap1163(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '24'], ['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '16']]],
            text: 'out of bounds table access',
            line: 2247,
        );
    }

    public function testAssertReturn1164(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2249,
        );
    }

    public function testAssertReturn1165(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2250,
        );
    }

    public function testAssertReturn1166(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 2251,
        );
    }

    public function testAssertReturn1167(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 2252,
        );
    }

    public function testAssertReturn1168(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 2253,
        );
    }

    public function testAssertReturn1169(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 2254,
        );
    }

    public function testAssertReturn1170(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 2255,
        );
    }

    public function testAssertReturn1171(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '7']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 2256,
        );
    }

    public function testAssertTrap1172(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 2257,
        );
    }

    public function testAssertTrap1173(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 2258,
        );
    }

    public function testAssertTrap1174(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 2259,
        );
    }

    public function testAssertTrap1175(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 2260,
        );
    }

    public function testAssertTrap1176(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '12']]],
            text: 'uninitialized element',
            line: 2261,
        );
    }

    public function testAssertTrap1177(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 2262,
        );
    }

    public function testAssertTrap1178(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '14']]],
            text: 'uninitialized element',
            line: 2263,
        );
    }

    public function testAssertTrap1179(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 2264,
        );
    }

    public function testAssertTrap1180(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 2265,
        );
    }

    public function testAssertTrap1181(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 2266,
        );
    }

    public function testAssertTrap1182(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 2267,
        );
    }

    public function testAssertTrap1183(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 2268,
        );
    }

    public function testAssertTrap1184(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 2269,
        );
    }

    public function testAssertTrap1185(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 2270,
        );
    }

    public function testAssertTrap1186(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 2271,
        );
    }

    public function testAssertTrap1187(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 2272,
        );
    }

    public function testAssertTrap1188(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 2273,
        );
    }

    public function testAssertTrap1189(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 2274,
        );
    }

    public function testAssertTrap1190(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 2275,
        );
    }

    public function testAssertTrap1191(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 2276,
        );
    }

    public function testAssertTrap1192(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 2277,
        );
    }

    public function testAssertTrap1193(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 2278,
        );
    }

    public function testAssertTrap1194(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '30']]],
            text: 'uninitialized element',
            line: 2279,
        );
    }

    public function testAssertTrap1195(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '31']]],
            text: 'uninitialized element',
            line: 2280,
        );
    }

    public function testModule1196(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.42.wasm',
            name: null,
            line: 2282,
        );
    }

    public function testAssertTrap1197(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '23'], ['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '15']]],
            text: 'out of bounds table access',
            line: 2308,
        );
    }

    public function testAssertReturn1198(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2310,
        );
    }

    public function testAssertReturn1199(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2311,
        );
    }

    public function testAssertReturn1200(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 2312,
        );
    }

    public function testAssertReturn1201(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 2313,
        );
    }

    public function testAssertReturn1202(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 2314,
        );
    }

    public function testAssertReturn1203(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 2315,
        );
    }

    public function testAssertReturn1204(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 2316,
        );
    }

    public function testAssertReturn1205(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '7']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 2317,
        );
    }

    public function testAssertReturn1206(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 2318,
        );
    }

    public function testAssertTrap1207(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 2319,
        );
    }

    public function testAssertTrap1208(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 2320,
        );
    }

    public function testAssertTrap1209(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 2321,
        );
    }

    public function testAssertTrap1210(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '12']]],
            text: 'uninitialized element',
            line: 2322,
        );
    }

    public function testAssertTrap1211(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 2323,
        );
    }

    public function testAssertTrap1212(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '14']]],
            text: 'uninitialized element',
            line: 2324,
        );
    }

    public function testAssertTrap1213(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 2325,
        );
    }

    public function testAssertTrap1214(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 2326,
        );
    }

    public function testAssertTrap1215(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 2327,
        );
    }

    public function testAssertTrap1216(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 2328,
        );
    }

    public function testAssertTrap1217(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 2329,
        );
    }

    public function testAssertTrap1218(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 2330,
        );
    }

    public function testAssertTrap1219(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 2331,
        );
    }

    public function testAssertTrap1220(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 2332,
        );
    }

    public function testAssertTrap1221(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 2333,
        );
    }

    public function testAssertTrap1222(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 2334,
        );
    }

    public function testAssertTrap1223(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 2335,
        );
    }

    public function testAssertTrap1224(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 2336,
        );
    }

    public function testAssertTrap1225(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 2337,
        );
    }

    public function testAssertTrap1226(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 2338,
        );
    }

    public function testAssertTrap1227(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 2339,
        );
    }

    public function testAssertTrap1228(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '30']]],
            text: 'uninitialized element',
            line: 2340,
        );
    }

    public function testAssertTrap1229(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '31']]],
            text: 'uninitialized element',
            line: 2341,
        );
    }

    public function testModule1230(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.43.wasm',
            name: null,
            line: 2343,
        );
    }

    public function testAssertTrap1231(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '24'], ['type' => 'i32', 'value' => '16']]],
            text: 'out of bounds table access',
            line: 2369,
        );
    }

    public function testAssertTrap1232(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 2371,
        );
    }

    public function testAssertTrap1233(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 2372,
        );
    }

    public function testAssertTrap1234(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 2373,
        );
    }

    public function testAssertTrap1235(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '3']]],
            text: 'uninitialized element',
            line: 2374,
        );
    }

    public function testAssertTrap1236(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '4']]],
            text: 'uninitialized element',
            line: 2375,
        );
    }

    public function testAssertTrap1237(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '5']]],
            text: 'uninitialized element',
            line: 2376,
        );
    }

    public function testAssertTrap1238(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 2377,
        );
    }

    public function testAssertTrap1239(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 2378,
        );
    }

    public function testAssertTrap1240(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 2379,
        );
    }

    public function testAssertTrap1241(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 2380,
        );
    }

    public function testAssertTrap1242(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 2381,
        );
    }

    public function testAssertTrap1243(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 2382,
        );
    }

    public function testAssertTrap1244(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '12']]],
            text: 'uninitialized element',
            line: 2383,
        );
    }

    public function testAssertTrap1245(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 2384,
        );
    }

    public function testAssertTrap1246(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '14']]],
            text: 'uninitialized element',
            line: 2385,
        );
    }

    public function testAssertTrap1247(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 2386,
        );
    }

    public function testAssertTrap1248(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 2387,
        );
    }

    public function testAssertTrap1249(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 2388,
        );
    }

    public function testAssertTrap1250(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 2389,
        );
    }

    public function testAssertTrap1251(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 2390,
        );
    }

    public function testAssertTrap1252(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 2391,
        );
    }

    public function testAssertTrap1253(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 2392,
        );
    }

    public function testAssertTrap1254(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 2393,
        );
    }

    public function testAssertTrap1255(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 2394,
        );
    }

    public function testAssertReturn1256(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '24']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2395,
        );
    }

    public function testAssertReturn1257(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '25']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2396,
        );
    }

    public function testAssertReturn1258(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '26']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 2397,
        );
    }

    public function testAssertReturn1259(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '27']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 2398,
        );
    }

    public function testAssertReturn1260(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '28']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 2399,
        );
    }

    public function testAssertReturn1261(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '29']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 2400,
        );
    }

    public function testAssertReturn1262(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '30']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 2401,
        );
    }

    public function testAssertReturn1263(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '31']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 2402,
        );
    }

    public function testModule1264(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.44.wasm',
            name: null,
            line: 2404,
        );
    }

    public function testAssertTrap1265(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '23'], ['type' => 'i32', 'value' => '15']]],
            text: 'out of bounds table access',
            line: 2430,
        );
    }

    public function testAssertTrap1266(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 2432,
        );
    }

    public function testAssertTrap1267(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 2433,
        );
    }

    public function testAssertTrap1268(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 2434,
        );
    }

    public function testAssertTrap1269(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '3']]],
            text: 'uninitialized element',
            line: 2435,
        );
    }

    public function testAssertTrap1270(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '4']]],
            text: 'uninitialized element',
            line: 2436,
        );
    }

    public function testAssertTrap1271(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '5']]],
            text: 'uninitialized element',
            line: 2437,
        );
    }

    public function testAssertTrap1272(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 2438,
        );
    }

    public function testAssertTrap1273(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 2439,
        );
    }

    public function testAssertTrap1274(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 2440,
        );
    }

    public function testAssertTrap1275(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 2441,
        );
    }

    public function testAssertTrap1276(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 2442,
        );
    }

    public function testAssertTrap1277(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 2443,
        );
    }

    public function testAssertTrap1278(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '12']]],
            text: 'uninitialized element',
            line: 2444,
        );
    }

    public function testAssertTrap1279(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 2445,
        );
    }

    public function testAssertTrap1280(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '14']]],
            text: 'uninitialized element',
            line: 2446,
        );
    }

    public function testAssertTrap1281(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 2447,
        );
    }

    public function testAssertTrap1282(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 2448,
        );
    }

    public function testAssertTrap1283(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 2449,
        );
    }

    public function testAssertTrap1284(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 2450,
        );
    }

    public function testAssertTrap1285(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 2451,
        );
    }

    public function testAssertTrap1286(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 2452,
        );
    }

    public function testAssertTrap1287(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 2453,
        );
    }

    public function testAssertTrap1288(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 2454,
        );
    }

    public function testAssertReturn1289(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '23']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2455,
        );
    }

    public function testAssertReturn1290(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '24']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2456,
        );
    }

    public function testAssertReturn1291(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '25']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 2457,
        );
    }

    public function testAssertReturn1292(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '26']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 2458,
        );
    }

    public function testAssertReturn1293(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '27']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 2459,
        );
    }

    public function testAssertReturn1294(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '28']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 2460,
        );
    }

    public function testAssertReturn1295(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '29']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 2461,
        );
    }

    public function testAssertReturn1296(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '30']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 2462,
        );
    }

    public function testAssertReturn1297(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '31']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 2463,
        );
    }

    public function testModule1298(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.45.wasm',
            name: null,
            line: 2465,
        );
    }

    public function testAssertTrap1299(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '24'], ['type' => 'i32', 'value' => '11'], ['type' => 'i32', 'value' => '16']]],
            text: 'out of bounds table access',
            line: 2491,
        );
    }

    public function testAssertTrap1300(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 2493,
        );
    }

    public function testAssertTrap1301(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 2494,
        );
    }

    public function testAssertTrap1302(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 2495,
        );
    }

    public function testAssertTrap1303(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '3']]],
            text: 'uninitialized element',
            line: 2496,
        );
    }

    public function testAssertTrap1304(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '4']]],
            text: 'uninitialized element',
            line: 2497,
        );
    }

    public function testAssertTrap1305(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '5']]],
            text: 'uninitialized element',
            line: 2498,
        );
    }

    public function testAssertTrap1306(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 2499,
        );
    }

    public function testAssertTrap1307(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 2500,
        );
    }

    public function testAssertTrap1308(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 2501,
        );
    }

    public function testAssertTrap1309(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 2502,
        );
    }

    public function testAssertTrap1310(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 2503,
        );
    }

    public function testAssertReturn1311(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2504,
        );
    }

    public function testAssertReturn1312(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2505,
        );
    }

    public function testAssertReturn1313(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 2506,
        );
    }

    public function testAssertReturn1314(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 2507,
        );
    }

    public function testAssertReturn1315(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 2508,
        );
    }

    public function testAssertReturn1316(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 2509,
        );
    }

    public function testAssertReturn1317(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '17']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 2510,
        );
    }

    public function testAssertReturn1318(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '18']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 2511,
        );
    }

    public function testAssertTrap1319(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 2512,
        );
    }

    public function testAssertTrap1320(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 2513,
        );
    }

    public function testAssertTrap1321(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 2514,
        );
    }

    public function testAssertTrap1322(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 2515,
        );
    }

    public function testAssertTrap1323(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 2516,
        );
    }

    public function testAssertTrap1324(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 2517,
        );
    }

    public function testAssertTrap1325(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 2518,
        );
    }

    public function testAssertTrap1326(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 2519,
        );
    }

    public function testAssertTrap1327(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 2520,
        );
    }

    public function testAssertTrap1328(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 2521,
        );
    }

    public function testAssertTrap1329(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 2522,
        );
    }

    public function testAssertTrap1330(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '30']]],
            text: 'uninitialized element',
            line: 2523,
        );
    }

    public function testAssertTrap1331(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '31']]],
            text: 'uninitialized element',
            line: 2524,
        );
    }

    public function testModule1332(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.46.wasm',
            name: null,
            line: 2526,
        );
    }

    public function testAssertTrap1333(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '11'], ['type' => 'i32', 'value' => '24'], ['type' => 'i32', 'value' => '16']]],
            text: 'out of bounds table access',
            line: 2552,
        );
    }

    public function testAssertTrap1334(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 2554,
        );
    }

    public function testAssertTrap1335(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 2555,
        );
    }

    public function testAssertTrap1336(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 2556,
        );
    }

    public function testAssertTrap1337(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '3']]],
            text: 'uninitialized element',
            line: 2557,
        );
    }

    public function testAssertTrap1338(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '4']]],
            text: 'uninitialized element',
            line: 2558,
        );
    }

    public function testAssertTrap1339(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '5']]],
            text: 'uninitialized element',
            line: 2559,
        );
    }

    public function testAssertTrap1340(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 2560,
        );
    }

    public function testAssertTrap1341(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 2561,
        );
    }

    public function testAssertTrap1342(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 2562,
        );
    }

    public function testAssertTrap1343(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 2563,
        );
    }

    public function testAssertTrap1344(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 2564,
        );
    }

    public function testAssertTrap1345(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 2565,
        );
    }

    public function testAssertTrap1346(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '12']]],
            text: 'uninitialized element',
            line: 2566,
        );
    }

    public function testAssertTrap1347(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 2567,
        );
    }

    public function testAssertTrap1348(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '14']]],
            text: 'uninitialized element',
            line: 2568,
        );
    }

    public function testAssertTrap1349(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 2569,
        );
    }

    public function testAssertTrap1350(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 2570,
        );
    }

    public function testAssertTrap1351(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 2571,
        );
    }

    public function testAssertTrap1352(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 2572,
        );
    }

    public function testAssertTrap1353(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 2573,
        );
    }

    public function testAssertTrap1354(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 2574,
        );
    }

    public function testAssertTrap1355(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 2575,
        );
    }

    public function testAssertTrap1356(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 2576,
        );
    }

    public function testAssertTrap1357(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 2577,
        );
    }

    public function testAssertReturn1358(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '24']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2578,
        );
    }

    public function testAssertReturn1359(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '25']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2579,
        );
    }

    public function testAssertReturn1360(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '26']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 2580,
        );
    }

    public function testAssertReturn1361(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '27']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 2581,
        );
    }

    public function testAssertReturn1362(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '28']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 2582,
        );
    }

    public function testAssertReturn1363(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '29']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 2583,
        );
    }

    public function testAssertReturn1364(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '30']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 2584,
        );
    }

    public function testAssertReturn1365(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '31']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 2585,
        );
    }

    public function testModule1366(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.47.wasm',
            name: null,
            line: 2587,
        );
    }

    public function testAssertTrap1367(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '24'], ['type' => 'i32', 'value' => '21'], ['type' => 'i32', 'value' => '16']]],
            text: 'out of bounds table access',
            line: 2613,
        );
    }

    public function testAssertTrap1368(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 2615,
        );
    }

    public function testAssertTrap1369(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 2616,
        );
    }

    public function testAssertTrap1370(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 2617,
        );
    }

    public function testAssertTrap1371(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '3']]],
            text: 'uninitialized element',
            line: 2618,
        );
    }

    public function testAssertTrap1372(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '4']]],
            text: 'uninitialized element',
            line: 2619,
        );
    }

    public function testAssertTrap1373(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '5']]],
            text: 'uninitialized element',
            line: 2620,
        );
    }

    public function testAssertTrap1374(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 2621,
        );
    }

    public function testAssertTrap1375(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 2622,
        );
    }

    public function testAssertTrap1376(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 2623,
        );
    }

    public function testAssertTrap1377(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 2624,
        );
    }

    public function testAssertTrap1378(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 2625,
        );
    }

    public function testAssertTrap1379(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 2626,
        );
    }

    public function testAssertTrap1380(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '12']]],
            text: 'uninitialized element',
            line: 2627,
        );
    }

    public function testAssertTrap1381(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 2628,
        );
    }

    public function testAssertTrap1382(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '14']]],
            text: 'uninitialized element',
            line: 2629,
        );
    }

    public function testAssertTrap1383(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 2630,
        );
    }

    public function testAssertTrap1384(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 2631,
        );
    }

    public function testAssertTrap1385(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 2632,
        );
    }

    public function testAssertTrap1386(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 2633,
        );
    }

    public function testAssertTrap1387(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 2634,
        );
    }

    public function testAssertTrap1388(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 2635,
        );
    }

    public function testAssertReturn1389(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '21']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2636,
        );
    }

    public function testAssertReturn1390(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '22']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2637,
        );
    }

    public function testAssertReturn1391(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '23']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 2638,
        );
    }

    public function testAssertReturn1392(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '24']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 2639,
        );
    }

    public function testAssertReturn1393(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '25']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 2640,
        );
    }

    public function testAssertReturn1394(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '26']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 2641,
        );
    }

    public function testAssertReturn1395(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '27']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 2642,
        );
    }

    public function testAssertReturn1396(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '28']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 2643,
        );
    }

    public function testAssertTrap1397(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 2644,
        );
    }

    public function testAssertTrap1398(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '30']]],
            text: 'uninitialized element',
            line: 2645,
        );
    }

    public function testAssertTrap1399(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '31']]],
            text: 'uninitialized element',
            line: 2646,
        );
    }

    public function testModule1400(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.48.wasm',
            name: null,
            line: 2648,
        );
    }

    public function testAssertTrap1401(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '21'], ['type' => 'i32', 'value' => '24'], ['type' => 'i32', 'value' => '16']]],
            text: 'out of bounds table access',
            line: 2674,
        );
    }

    public function testAssertTrap1402(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 2676,
        );
    }

    public function testAssertTrap1403(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 2677,
        );
    }

    public function testAssertTrap1404(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 2678,
        );
    }

    public function testAssertTrap1405(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '3']]],
            text: 'uninitialized element',
            line: 2679,
        );
    }

    public function testAssertTrap1406(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '4']]],
            text: 'uninitialized element',
            line: 2680,
        );
    }

    public function testAssertTrap1407(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '5']]],
            text: 'uninitialized element',
            line: 2681,
        );
    }

    public function testAssertTrap1408(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 2682,
        );
    }

    public function testAssertTrap1409(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 2683,
        );
    }

    public function testAssertTrap1410(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 2684,
        );
    }

    public function testAssertTrap1411(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 2685,
        );
    }

    public function testAssertTrap1412(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 2686,
        );
    }

    public function testAssertTrap1413(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 2687,
        );
    }

    public function testAssertTrap1414(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '12']]],
            text: 'uninitialized element',
            line: 2688,
        );
    }

    public function testAssertTrap1415(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 2689,
        );
    }

    public function testAssertTrap1416(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '14']]],
            text: 'uninitialized element',
            line: 2690,
        );
    }

    public function testAssertTrap1417(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 2691,
        );
    }

    public function testAssertTrap1418(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 2692,
        );
    }

    public function testAssertTrap1419(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 2693,
        );
    }

    public function testAssertTrap1420(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 2694,
        );
    }

    public function testAssertTrap1421(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 2695,
        );
    }

    public function testAssertTrap1422(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 2696,
        );
    }

    public function testAssertTrap1423(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 2697,
        );
    }

    public function testAssertTrap1424(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 2698,
        );
    }

    public function testAssertTrap1425(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 2699,
        );
    }

    public function testAssertReturn1426(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '24']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2700,
        );
    }

    public function testAssertReturn1427(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '25']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2701,
        );
    }

    public function testAssertReturn1428(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '26']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 2702,
        );
    }

    public function testAssertReturn1429(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '27']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 2703,
        );
    }

    public function testAssertReturn1430(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '28']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 2704,
        );
    }

    public function testAssertReturn1431(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '29']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 2705,
        );
    }

    public function testAssertReturn1432(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '30']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 2706,
        );
    }

    public function testAssertReturn1433(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '31']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 2707,
        );
    }

    public function testModule1434(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.49.wasm',
            name: null,
            line: 2709,
        );
    }

    public function testAssertTrap1435(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '21'], ['type' => 'i32', 'value' => '21'], ['type' => 'i32', 'value' => '16']]],
            text: 'out of bounds table access',
            line: 2735,
        );
    }

    public function testAssertTrap1436(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 2737,
        );
    }

    public function testAssertTrap1437(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 2738,
        );
    }

    public function testAssertTrap1438(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 2739,
        );
    }

    public function testAssertTrap1439(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '3']]],
            text: 'uninitialized element',
            line: 2740,
        );
    }

    public function testAssertTrap1440(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '4']]],
            text: 'uninitialized element',
            line: 2741,
        );
    }

    public function testAssertTrap1441(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '5']]],
            text: 'uninitialized element',
            line: 2742,
        );
    }

    public function testAssertTrap1442(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 2743,
        );
    }

    public function testAssertTrap1443(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 2744,
        );
    }

    public function testAssertTrap1444(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 2745,
        );
    }

    public function testAssertTrap1445(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 2746,
        );
    }

    public function testAssertTrap1446(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 2747,
        );
    }

    public function testAssertTrap1447(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 2748,
        );
    }

    public function testAssertTrap1448(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '12']]],
            text: 'uninitialized element',
            line: 2749,
        );
    }

    public function testAssertTrap1449(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 2750,
        );
    }

    public function testAssertTrap1450(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '14']]],
            text: 'uninitialized element',
            line: 2751,
        );
    }

    public function testAssertTrap1451(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 2752,
        );
    }

    public function testAssertTrap1452(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 2753,
        );
    }

    public function testAssertTrap1453(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 2754,
        );
    }

    public function testAssertTrap1454(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 2755,
        );
    }

    public function testAssertTrap1455(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 2756,
        );
    }

    public function testAssertTrap1456(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 2757,
        );
    }

    public function testAssertReturn1457(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '21']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2758,
        );
    }

    public function testAssertReturn1458(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '22']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2759,
        );
    }

    public function testAssertReturn1459(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '23']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 2760,
        );
    }

    public function testAssertReturn1460(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '24']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 2761,
        );
    }

    public function testAssertReturn1461(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '25']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 2762,
        );
    }

    public function testAssertReturn1462(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '26']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 2763,
        );
    }

    public function testAssertReturn1463(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '27']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 2764,
        );
    }

    public function testAssertReturn1464(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '28']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 2765,
        );
    }

    public function testAssertReturn1465(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '29']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 2766,
        );
    }

    public function testAssertReturn1466(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '30']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 2767,
        );
    }

    public function testAssertReturn1467(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '31']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 2768,
        );
    }

    public function testModule1468(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.50.wasm',
            name: null,
            line: 2770,
        );
    }

    public function testAssertTrap1469(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '112'], ['type' => 'i32', 'value' => '4294967264']]],
            text: 'out of bounds table access',
            line: 2796,
        );
    }

    public function testAssertTrap1470(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'uninitialized element',
            line: 2798,
        );
    }

    public function testAssertTrap1471(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'uninitialized element',
            line: 2799,
        );
    }

    public function testAssertTrap1472(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 2800,
        );
    }

    public function testAssertTrap1473(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '3']]],
            text: 'uninitialized element',
            line: 2801,
        );
    }

    public function testAssertTrap1474(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '4']]],
            text: 'uninitialized element',
            line: 2802,
        );
    }

    public function testAssertTrap1475(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '5']]],
            text: 'uninitialized element',
            line: 2803,
        );
    }

    public function testAssertTrap1476(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '6']]],
            text: 'uninitialized element',
            line: 2804,
        );
    }

    public function testAssertTrap1477(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '7']]],
            text: 'uninitialized element',
            line: 2805,
        );
    }

    public function testAssertTrap1478(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'uninitialized element',
            line: 2806,
        );
    }

    public function testAssertTrap1479(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'uninitialized element',
            line: 2807,
        );
    }

    public function testAssertTrap1480(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'uninitialized element',
            line: 2808,
        );
    }

    public function testAssertTrap1481(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'uninitialized element',
            line: 2809,
        );
    }

    public function testAssertTrap1482(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '12']]],
            text: 'uninitialized element',
            line: 2810,
        );
    }

    public function testAssertTrap1483(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '13']]],
            text: 'uninitialized element',
            line: 2811,
        );
    }

    public function testAssertTrap1484(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '14']]],
            text: 'uninitialized element',
            line: 2812,
        );
    }

    public function testAssertTrap1485(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '15']]],
            text: 'uninitialized element',
            line: 2813,
        );
    }

    public function testAssertTrap1486(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 2814,
        );
    }

    public function testAssertTrap1487(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 2815,
        );
    }

    public function testAssertTrap1488(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 2816,
        );
    }

    public function testAssertTrap1489(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 2817,
        );
    }

    public function testAssertTrap1490(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 2818,
        );
    }

    public function testAssertTrap1491(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 2819,
        );
    }

    public function testAssertTrap1492(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 2820,
        );
    }

    public function testAssertTrap1493(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 2821,
        );
    }

    public function testAssertTrap1494(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 2822,
        );
    }

    public function testAssertTrap1495(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 2823,
        );
    }

    public function testAssertTrap1496(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 2824,
        );
    }

    public function testAssertTrap1497(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 2825,
        );
    }

    public function testAssertTrap1498(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 2826,
        );
    }

    public function testAssertTrap1499(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 2827,
        );
    }

    public function testAssertTrap1500(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '30']]],
            text: 'uninitialized element',
            line: 2828,
        );
    }

    public function testAssertTrap1501(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '31']]],
            text: 'uninitialized element',
            line: 2829,
        );
    }

    public function testAssertTrap1502(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '32']]],
            text: 'uninitialized element',
            line: 2830,
        );
    }

    public function testAssertTrap1503(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '33']]],
            text: 'uninitialized element',
            line: 2831,
        );
    }

    public function testAssertTrap1504(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '34']]],
            text: 'uninitialized element',
            line: 2832,
        );
    }

    public function testAssertTrap1505(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '35']]],
            text: 'uninitialized element',
            line: 2833,
        );
    }

    public function testAssertTrap1506(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '36']]],
            text: 'uninitialized element',
            line: 2834,
        );
    }

    public function testAssertTrap1507(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '37']]],
            text: 'uninitialized element',
            line: 2835,
        );
    }

    public function testAssertTrap1508(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '38']]],
            text: 'uninitialized element',
            line: 2836,
        );
    }

    public function testAssertTrap1509(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '39']]],
            text: 'uninitialized element',
            line: 2837,
        );
    }

    public function testAssertTrap1510(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '40']]],
            text: 'uninitialized element',
            line: 2838,
        );
    }

    public function testAssertTrap1511(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '41']]],
            text: 'uninitialized element',
            line: 2839,
        );
    }

    public function testAssertTrap1512(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '42']]],
            text: 'uninitialized element',
            line: 2840,
        );
    }

    public function testAssertTrap1513(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '43']]],
            text: 'uninitialized element',
            line: 2841,
        );
    }

    public function testAssertTrap1514(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '44']]],
            text: 'uninitialized element',
            line: 2842,
        );
    }

    public function testAssertTrap1515(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '45']]],
            text: 'uninitialized element',
            line: 2843,
        );
    }

    public function testAssertTrap1516(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '46']]],
            text: 'uninitialized element',
            line: 2844,
        );
    }

    public function testAssertTrap1517(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '47']]],
            text: 'uninitialized element',
            line: 2845,
        );
    }

    public function testAssertTrap1518(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '48']]],
            text: 'uninitialized element',
            line: 2846,
        );
    }

    public function testAssertTrap1519(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '49']]],
            text: 'uninitialized element',
            line: 2847,
        );
    }

    public function testAssertTrap1520(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '50']]],
            text: 'uninitialized element',
            line: 2848,
        );
    }

    public function testAssertTrap1521(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '51']]],
            text: 'uninitialized element',
            line: 2849,
        );
    }

    public function testAssertTrap1522(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '52']]],
            text: 'uninitialized element',
            line: 2850,
        );
    }

    public function testAssertTrap1523(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '53']]],
            text: 'uninitialized element',
            line: 2851,
        );
    }

    public function testAssertTrap1524(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '54']]],
            text: 'uninitialized element',
            line: 2852,
        );
    }

    public function testAssertTrap1525(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '55']]],
            text: 'uninitialized element',
            line: 2853,
        );
    }

    public function testAssertTrap1526(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '56']]],
            text: 'uninitialized element',
            line: 2854,
        );
    }

    public function testAssertTrap1527(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '57']]],
            text: 'uninitialized element',
            line: 2855,
        );
    }

    public function testAssertTrap1528(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '58']]],
            text: 'uninitialized element',
            line: 2856,
        );
    }

    public function testAssertTrap1529(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '59']]],
            text: 'uninitialized element',
            line: 2857,
        );
    }

    public function testAssertTrap1530(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '60']]],
            text: 'uninitialized element',
            line: 2858,
        );
    }

    public function testAssertTrap1531(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '61']]],
            text: 'uninitialized element',
            line: 2859,
        );
    }

    public function testAssertTrap1532(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '62']]],
            text: 'uninitialized element',
            line: 2860,
        );
    }

    public function testAssertTrap1533(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '63']]],
            text: 'uninitialized element',
            line: 2861,
        );
    }

    public function testAssertTrap1534(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '64']]],
            text: 'uninitialized element',
            line: 2862,
        );
    }

    public function testAssertTrap1535(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '65']]],
            text: 'uninitialized element',
            line: 2863,
        );
    }

    public function testAssertTrap1536(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '66']]],
            text: 'uninitialized element',
            line: 2864,
        );
    }

    public function testAssertTrap1537(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '67']]],
            text: 'uninitialized element',
            line: 2865,
        );
    }

    public function testAssertTrap1538(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '68']]],
            text: 'uninitialized element',
            line: 2866,
        );
    }

    public function testAssertTrap1539(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '69']]],
            text: 'uninitialized element',
            line: 2867,
        );
    }

    public function testAssertTrap1540(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '70']]],
            text: 'uninitialized element',
            line: 2868,
        );
    }

    public function testAssertTrap1541(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '71']]],
            text: 'uninitialized element',
            line: 2869,
        );
    }

    public function testAssertTrap1542(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '72']]],
            text: 'uninitialized element',
            line: 2870,
        );
    }

    public function testAssertTrap1543(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '73']]],
            text: 'uninitialized element',
            line: 2871,
        );
    }

    public function testAssertTrap1544(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '74']]],
            text: 'uninitialized element',
            line: 2872,
        );
    }

    public function testAssertTrap1545(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '75']]],
            text: 'uninitialized element',
            line: 2873,
        );
    }

    public function testAssertTrap1546(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '76']]],
            text: 'uninitialized element',
            line: 2874,
        );
    }

    public function testAssertTrap1547(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '77']]],
            text: 'uninitialized element',
            line: 2875,
        );
    }

    public function testAssertTrap1548(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '78']]],
            text: 'uninitialized element',
            line: 2876,
        );
    }

    public function testAssertTrap1549(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '79']]],
            text: 'uninitialized element',
            line: 2877,
        );
    }

    public function testAssertTrap1550(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '80']]],
            text: 'uninitialized element',
            line: 2878,
        );
    }

    public function testAssertTrap1551(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '81']]],
            text: 'uninitialized element',
            line: 2879,
        );
    }

    public function testAssertTrap1552(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '82']]],
            text: 'uninitialized element',
            line: 2880,
        );
    }

    public function testAssertTrap1553(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '83']]],
            text: 'uninitialized element',
            line: 2881,
        );
    }

    public function testAssertTrap1554(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '84']]],
            text: 'uninitialized element',
            line: 2882,
        );
    }

    public function testAssertTrap1555(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '85']]],
            text: 'uninitialized element',
            line: 2883,
        );
    }

    public function testAssertTrap1556(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '86']]],
            text: 'uninitialized element',
            line: 2884,
        );
    }

    public function testAssertTrap1557(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '87']]],
            text: 'uninitialized element',
            line: 2885,
        );
    }

    public function testAssertTrap1558(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '88']]],
            text: 'uninitialized element',
            line: 2886,
        );
    }

    public function testAssertTrap1559(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '89']]],
            text: 'uninitialized element',
            line: 2887,
        );
    }

    public function testAssertTrap1560(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '90']]],
            text: 'uninitialized element',
            line: 2888,
        );
    }

    public function testAssertTrap1561(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '91']]],
            text: 'uninitialized element',
            line: 2889,
        );
    }

    public function testAssertTrap1562(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '92']]],
            text: 'uninitialized element',
            line: 2890,
        );
    }

    public function testAssertTrap1563(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '93']]],
            text: 'uninitialized element',
            line: 2891,
        );
    }

    public function testAssertTrap1564(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '94']]],
            text: 'uninitialized element',
            line: 2892,
        );
    }

    public function testAssertTrap1565(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '95']]],
            text: 'uninitialized element',
            line: 2893,
        );
    }

    public function testAssertTrap1566(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '96']]],
            text: 'uninitialized element',
            line: 2894,
        );
    }

    public function testAssertTrap1567(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '97']]],
            text: 'uninitialized element',
            line: 2895,
        );
    }

    public function testAssertTrap1568(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '98']]],
            text: 'uninitialized element',
            line: 2896,
        );
    }

    public function testAssertTrap1569(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '99']]],
            text: 'uninitialized element',
            line: 2897,
        );
    }

    public function testAssertTrap1570(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '100']]],
            text: 'uninitialized element',
            line: 2898,
        );
    }

    public function testAssertTrap1571(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '101']]],
            text: 'uninitialized element',
            line: 2899,
        );
    }

    public function testAssertTrap1572(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '102']]],
            text: 'uninitialized element',
            line: 2900,
        );
    }

    public function testAssertTrap1573(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '103']]],
            text: 'uninitialized element',
            line: 2901,
        );
    }

    public function testAssertTrap1574(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '104']]],
            text: 'uninitialized element',
            line: 2902,
        );
    }

    public function testAssertTrap1575(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '105']]],
            text: 'uninitialized element',
            line: 2903,
        );
    }

    public function testAssertTrap1576(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '106']]],
            text: 'uninitialized element',
            line: 2904,
        );
    }

    public function testAssertTrap1577(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '107']]],
            text: 'uninitialized element',
            line: 2905,
        );
    }

    public function testAssertTrap1578(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '108']]],
            text: 'uninitialized element',
            line: 2906,
        );
    }

    public function testAssertTrap1579(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '109']]],
            text: 'uninitialized element',
            line: 2907,
        );
    }

    public function testAssertTrap1580(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '110']]],
            text: 'uninitialized element',
            line: 2908,
        );
    }

    public function testAssertTrap1581(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '111']]],
            text: 'uninitialized element',
            line: 2909,
        );
    }

    public function testAssertReturn1582(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '112']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2910,
        );
    }

    public function testAssertReturn1583(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '113']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2911,
        );
    }

    public function testAssertReturn1584(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '114']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 2912,
        );
    }

    public function testAssertReturn1585(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '115']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 2913,
        );
    }

    public function testAssertReturn1586(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '116']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 2914,
        );
    }

    public function testAssertReturn1587(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '117']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 2915,
        );
    }

    public function testAssertReturn1588(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '118']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 2916,
        );
    }

    public function testAssertReturn1589(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '119']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 2917,
        );
    }

    public function testAssertReturn1590(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '120']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 2918,
        );
    }

    public function testAssertReturn1591(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '121']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 2919,
        );
    }

    public function testAssertReturn1592(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '122']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 2920,
        );
    }

    public function testAssertReturn1593(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '123']]],
            expected: [['type' => 'i32', 'value' => '11']],
            line: 2921,
        );
    }

    public function testAssertReturn1594(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '124']]],
            expected: [['type' => 'i32', 'value' => '12']],
            line: 2922,
        );
    }

    public function testAssertReturn1595(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '125']]],
            expected: [['type' => 'i32', 'value' => '13']],
            line: 2923,
        );
    }

    public function testAssertReturn1596(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '126']]],
            expected: [['type' => 'i32', 'value' => '14']],
            line: 2924,
        );
    }

    public function testAssertReturn1597(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '127']]],
            expected: [['type' => 'i32', 'value' => '15']],
            line: 2925,
        );
    }

    public function testModule1598(): void
    {
        $this->runModuleCommand(
            filename: 'table_copy.51.wasm',
            name: null,
            line: 2927,
        );
    }

    public function testAssertTrap1599(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '112'], ['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '4294967264']]],
            text: 'out of bounds table access',
            line: 2953,
        );
    }

    public function testAssertReturn1600(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2955,
        );
    }

    public function testAssertReturn1601(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2956,
        );
    }

    public function testAssertReturn1602(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 2957,
        );
    }

    public function testAssertReturn1603(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 2958,
        );
    }

    public function testAssertReturn1604(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 2959,
        );
    }

    public function testAssertReturn1605(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 2960,
        );
    }

    public function testAssertReturn1606(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 2961,
        );
    }

    public function testAssertReturn1607(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '7']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 2962,
        );
    }

    public function testAssertReturn1608(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 2963,
        );
    }

    public function testAssertReturn1609(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '9']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 2964,
        );
    }

    public function testAssertReturn1610(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 2965,
        );
    }

    public function testAssertReturn1611(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '11']],
            line: 2966,
        );
    }

    public function testAssertReturn1612(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '12']],
            line: 2967,
        );
    }

    public function testAssertReturn1613(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '13']],
            line: 2968,
        );
    }

    public function testAssertReturn1614(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '14']],
            line: 2969,
        );
    }

    public function testAssertReturn1615(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '15']],
            line: 2970,
        );
    }

    public function testAssertTrap1616(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '16']]],
            text: 'uninitialized element',
            line: 2971,
        );
    }

    public function testAssertTrap1617(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '17']]],
            text: 'uninitialized element',
            line: 2972,
        );
    }

    public function testAssertTrap1618(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'uninitialized element',
            line: 2973,
        );
    }

    public function testAssertTrap1619(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'uninitialized element',
            line: 2974,
        );
    }

    public function testAssertTrap1620(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '20']]],
            text: 'uninitialized element',
            line: 2975,
        );
    }

    public function testAssertTrap1621(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'uninitialized element',
            line: 2976,
        );
    }

    public function testAssertTrap1622(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'uninitialized element',
            line: 2977,
        );
    }

    public function testAssertTrap1623(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '23']]],
            text: 'uninitialized element',
            line: 2978,
        );
    }

    public function testAssertTrap1624(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '24']]],
            text: 'uninitialized element',
            line: 2979,
        );
    }

    public function testAssertTrap1625(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '25']]],
            text: 'uninitialized element',
            line: 2980,
        );
    }

    public function testAssertTrap1626(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '26']]],
            text: 'uninitialized element',
            line: 2981,
        );
    }

    public function testAssertTrap1627(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '27']]],
            text: 'uninitialized element',
            line: 2982,
        );
    }

    public function testAssertTrap1628(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '28']]],
            text: 'uninitialized element',
            line: 2983,
        );
    }

    public function testAssertTrap1629(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '29']]],
            text: 'uninitialized element',
            line: 2984,
        );
    }

    public function testAssertTrap1630(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '30']]],
            text: 'uninitialized element',
            line: 2985,
        );
    }

    public function testAssertTrap1631(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '31']]],
            text: 'uninitialized element',
            line: 2986,
        );
    }

    public function testAssertTrap1632(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '32']]],
            text: 'uninitialized element',
            line: 2987,
        );
    }

    public function testAssertTrap1633(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '33']]],
            text: 'uninitialized element',
            line: 2988,
        );
    }

    public function testAssertTrap1634(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '34']]],
            text: 'uninitialized element',
            line: 2989,
        );
    }

    public function testAssertTrap1635(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '35']]],
            text: 'uninitialized element',
            line: 2990,
        );
    }

    public function testAssertTrap1636(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '36']]],
            text: 'uninitialized element',
            line: 2991,
        );
    }

    public function testAssertTrap1637(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '37']]],
            text: 'uninitialized element',
            line: 2992,
        );
    }

    public function testAssertTrap1638(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '38']]],
            text: 'uninitialized element',
            line: 2993,
        );
    }

    public function testAssertTrap1639(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '39']]],
            text: 'uninitialized element',
            line: 2994,
        );
    }

    public function testAssertTrap1640(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '40']]],
            text: 'uninitialized element',
            line: 2995,
        );
    }

    public function testAssertTrap1641(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '41']]],
            text: 'uninitialized element',
            line: 2996,
        );
    }

    public function testAssertTrap1642(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '42']]],
            text: 'uninitialized element',
            line: 2997,
        );
    }

    public function testAssertTrap1643(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '43']]],
            text: 'uninitialized element',
            line: 2998,
        );
    }

    public function testAssertTrap1644(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '44']]],
            text: 'uninitialized element',
            line: 2999,
        );
    }

    public function testAssertTrap1645(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '45']]],
            text: 'uninitialized element',
            line: 3000,
        );
    }

    public function testAssertTrap1646(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '46']]],
            text: 'uninitialized element',
            line: 3001,
        );
    }

    public function testAssertTrap1647(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '47']]],
            text: 'uninitialized element',
            line: 3002,
        );
    }

    public function testAssertTrap1648(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '48']]],
            text: 'uninitialized element',
            line: 3003,
        );
    }

    public function testAssertTrap1649(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '49']]],
            text: 'uninitialized element',
            line: 3004,
        );
    }

    public function testAssertTrap1650(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '50']]],
            text: 'uninitialized element',
            line: 3005,
        );
    }

    public function testAssertTrap1651(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '51']]],
            text: 'uninitialized element',
            line: 3006,
        );
    }

    public function testAssertTrap1652(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '52']]],
            text: 'uninitialized element',
            line: 3007,
        );
    }

    public function testAssertTrap1653(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '53']]],
            text: 'uninitialized element',
            line: 3008,
        );
    }

    public function testAssertTrap1654(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '54']]],
            text: 'uninitialized element',
            line: 3009,
        );
    }

    public function testAssertTrap1655(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '55']]],
            text: 'uninitialized element',
            line: 3010,
        );
    }

    public function testAssertTrap1656(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '56']]],
            text: 'uninitialized element',
            line: 3011,
        );
    }

    public function testAssertTrap1657(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '57']]],
            text: 'uninitialized element',
            line: 3012,
        );
    }

    public function testAssertTrap1658(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '58']]],
            text: 'uninitialized element',
            line: 3013,
        );
    }

    public function testAssertTrap1659(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '59']]],
            text: 'uninitialized element',
            line: 3014,
        );
    }

    public function testAssertTrap1660(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '60']]],
            text: 'uninitialized element',
            line: 3015,
        );
    }

    public function testAssertTrap1661(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '61']]],
            text: 'uninitialized element',
            line: 3016,
        );
    }

    public function testAssertTrap1662(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '62']]],
            text: 'uninitialized element',
            line: 3017,
        );
    }

    public function testAssertTrap1663(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '63']]],
            text: 'uninitialized element',
            line: 3018,
        );
    }

    public function testAssertTrap1664(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '64']]],
            text: 'uninitialized element',
            line: 3019,
        );
    }

    public function testAssertTrap1665(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '65']]],
            text: 'uninitialized element',
            line: 3020,
        );
    }

    public function testAssertTrap1666(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '66']]],
            text: 'uninitialized element',
            line: 3021,
        );
    }

    public function testAssertTrap1667(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '67']]],
            text: 'uninitialized element',
            line: 3022,
        );
    }

    public function testAssertTrap1668(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '68']]],
            text: 'uninitialized element',
            line: 3023,
        );
    }

    public function testAssertTrap1669(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '69']]],
            text: 'uninitialized element',
            line: 3024,
        );
    }

    public function testAssertTrap1670(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '70']]],
            text: 'uninitialized element',
            line: 3025,
        );
    }

    public function testAssertTrap1671(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '71']]],
            text: 'uninitialized element',
            line: 3026,
        );
    }

    public function testAssertTrap1672(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '72']]],
            text: 'uninitialized element',
            line: 3027,
        );
    }

    public function testAssertTrap1673(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '73']]],
            text: 'uninitialized element',
            line: 3028,
        );
    }

    public function testAssertTrap1674(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '74']]],
            text: 'uninitialized element',
            line: 3029,
        );
    }

    public function testAssertTrap1675(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '75']]],
            text: 'uninitialized element',
            line: 3030,
        );
    }

    public function testAssertTrap1676(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '76']]],
            text: 'uninitialized element',
            line: 3031,
        );
    }

    public function testAssertTrap1677(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '77']]],
            text: 'uninitialized element',
            line: 3032,
        );
    }

    public function testAssertTrap1678(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '78']]],
            text: 'uninitialized element',
            line: 3033,
        );
    }

    public function testAssertTrap1679(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '79']]],
            text: 'uninitialized element',
            line: 3034,
        );
    }

    public function testAssertTrap1680(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '80']]],
            text: 'uninitialized element',
            line: 3035,
        );
    }

    public function testAssertTrap1681(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '81']]],
            text: 'uninitialized element',
            line: 3036,
        );
    }

    public function testAssertTrap1682(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '82']]],
            text: 'uninitialized element',
            line: 3037,
        );
    }

    public function testAssertTrap1683(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '83']]],
            text: 'uninitialized element',
            line: 3038,
        );
    }

    public function testAssertTrap1684(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '84']]],
            text: 'uninitialized element',
            line: 3039,
        );
    }

    public function testAssertTrap1685(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '85']]],
            text: 'uninitialized element',
            line: 3040,
        );
    }

    public function testAssertTrap1686(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '86']]],
            text: 'uninitialized element',
            line: 3041,
        );
    }

    public function testAssertTrap1687(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '87']]],
            text: 'uninitialized element',
            line: 3042,
        );
    }

    public function testAssertTrap1688(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '88']]],
            text: 'uninitialized element',
            line: 3043,
        );
    }

    public function testAssertTrap1689(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '89']]],
            text: 'uninitialized element',
            line: 3044,
        );
    }

    public function testAssertTrap1690(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '90']]],
            text: 'uninitialized element',
            line: 3045,
        );
    }

    public function testAssertTrap1691(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '91']]],
            text: 'uninitialized element',
            line: 3046,
        );
    }

    public function testAssertTrap1692(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '92']]],
            text: 'uninitialized element',
            line: 3047,
        );
    }

    public function testAssertTrap1693(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '93']]],
            text: 'uninitialized element',
            line: 3048,
        );
    }

    public function testAssertTrap1694(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '94']]],
            text: 'uninitialized element',
            line: 3049,
        );
    }

    public function testAssertTrap1695(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '95']]],
            text: 'uninitialized element',
            line: 3050,
        );
    }

    public function testAssertTrap1696(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '96']]],
            text: 'uninitialized element',
            line: 3051,
        );
    }

    public function testAssertTrap1697(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '97']]],
            text: 'uninitialized element',
            line: 3052,
        );
    }

    public function testAssertTrap1698(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '98']]],
            text: 'uninitialized element',
            line: 3053,
        );
    }

    public function testAssertTrap1699(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '99']]],
            text: 'uninitialized element',
            line: 3054,
        );
    }

    public function testAssertTrap1700(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '100']]],
            text: 'uninitialized element',
            line: 3055,
        );
    }

    public function testAssertTrap1701(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '101']]],
            text: 'uninitialized element',
            line: 3056,
        );
    }

    public function testAssertTrap1702(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '102']]],
            text: 'uninitialized element',
            line: 3057,
        );
    }

    public function testAssertTrap1703(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '103']]],
            text: 'uninitialized element',
            line: 3058,
        );
    }

    public function testAssertTrap1704(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '104']]],
            text: 'uninitialized element',
            line: 3059,
        );
    }

    public function testAssertTrap1705(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '105']]],
            text: 'uninitialized element',
            line: 3060,
        );
    }

    public function testAssertTrap1706(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '106']]],
            text: 'uninitialized element',
            line: 3061,
        );
    }

    public function testAssertTrap1707(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '107']]],
            text: 'uninitialized element',
            line: 3062,
        );
    }

    public function testAssertTrap1708(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '108']]],
            text: 'uninitialized element',
            line: 3063,
        );
    }

    public function testAssertTrap1709(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '109']]],
            text: 'uninitialized element',
            line: 3064,
        );
    }

    public function testAssertTrap1710(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '110']]],
            text: 'uninitialized element',
            line: 3065,
        );
    }

    public function testAssertTrap1711(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '111']]],
            text: 'uninitialized element',
            line: 3066,
        );
    }

    public function testAssertTrap1712(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '112']]],
            text: 'uninitialized element',
            line: 3067,
        );
    }

    public function testAssertTrap1713(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '113']]],
            text: 'uninitialized element',
            line: 3068,
        );
    }

    public function testAssertTrap1714(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '114']]],
            text: 'uninitialized element',
            line: 3069,
        );
    }

    public function testAssertTrap1715(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '115']]],
            text: 'uninitialized element',
            line: 3070,
        );
    }

    public function testAssertTrap1716(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '116']]],
            text: 'uninitialized element',
            line: 3071,
        );
    }

    public function testAssertTrap1717(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '117']]],
            text: 'uninitialized element',
            line: 3072,
        );
    }

    public function testAssertTrap1718(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '118']]],
            text: 'uninitialized element',
            line: 3073,
        );
    }

    public function testAssertTrap1719(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '119']]],
            text: 'uninitialized element',
            line: 3074,
        );
    }

    public function testAssertTrap1720(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '120']]],
            text: 'uninitialized element',
            line: 3075,
        );
    }

    public function testAssertTrap1721(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '121']]],
            text: 'uninitialized element',
            line: 3076,
        );
    }

    public function testAssertTrap1722(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '122']]],
            text: 'uninitialized element',
            line: 3077,
        );
    }

    public function testAssertTrap1723(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '123']]],
            text: 'uninitialized element',
            line: 3078,
        );
    }

    public function testAssertTrap1724(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '124']]],
            text: 'uninitialized element',
            line: 3079,
        );
    }

    public function testAssertTrap1725(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '125']]],
            text: 'uninitialized element',
            line: 3080,
        );
    }

    public function testAssertTrap1726(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '126']]],
            text: 'uninitialized element',
            line: 3081,
        );
    }

    public function testAssertTrap1727(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => [['type' => 'i32', 'value' => '127']]],
            text: 'uninitialized element',
            line: 3082,
        );
    }
}
