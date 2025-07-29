<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class MemoryInitTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.0.wasm',
            name: null,
            line: 6,
        );
    }

    public function testAction1(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 17,
        );
    }

    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 19,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 20,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 21,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 22,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 23,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 24,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 25,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '7']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 26,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 27,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '9']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 28,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 29,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 30,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 31,
        );
    }

    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 32,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 33,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 34,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 35,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '17']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 36,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '18']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 37,
        );
    }

    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '19']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 38,
        );
    }

    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '20']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 39,
        );
    }

    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '21']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 40,
        );
    }

    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '22']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 41,
        );
    }

    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '23']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 42,
        );
    }

    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '24']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 43,
        );
    }

    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '25']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 44,
        );
    }

    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '26']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 45,
        );
    }

    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '27']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 46,
        );
    }

    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '28']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 47,
        );
    }

    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '29']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 48,
        );
    }

    public function testModule32(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.1.wasm',
            name: null,
            line: 50,
        );
    }

    public function testAction33(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 61,
        );
    }

    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 63,
        );
    }

    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 64,
        );
    }

    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 65,
        );
    }

    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 66,
        );
    }

    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 67,
        );
    }

    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 68,
        );
    }

    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 69,
        );
    }

    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '7']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 70,
        );
    }

    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 71,
        );
    }

    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '9']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 72,
        );
    }

    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 73,
        );
    }

    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 74,
        );
    }

    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 75,
        );
    }

    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 76,
        );
    }

    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 77,
        );
    }

    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 78,
        );
    }

    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 79,
        );
    }

    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '17']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 80,
        );
    }

    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '18']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 81,
        );
    }

    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '19']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 82,
        );
    }

    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '20']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 83,
        );
    }

    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '21']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 84,
        );
    }

    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '22']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 85,
        );
    }

    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '23']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 86,
        );
    }

    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '24']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 87,
        );
    }

    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '25']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 88,
        );
    }

    public function testAssertReturn60(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '26']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 89,
        );
    }

    public function testAssertReturn61(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '27']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 90,
        );
    }

    public function testAssertReturn62(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '28']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 91,
        );
    }

    public function testAssertReturn63(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '29']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 92,
        );
    }

    public function testModule64(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.2.wasm',
            name: null,
            line: 94,
        );
    }

    public function testAction65(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 105,
        );
    }

    public function testAssertReturn66(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 107,
        );
    }

    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 108,
        );
    }

    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 109,
        );
    }

    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 110,
        );
    }

    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 111,
        );
    }

    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 112,
        );
    }

    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 113,
        );
    }

    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '7']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 114,
        );
    }

    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 115,
        );
    }

    public function testAssertReturn75(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '9']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 116,
        );
    }

    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 117,
        );
    }

    public function testAssertReturn77(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 118,
        );
    }

    public function testAssertReturn78(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 119,
        );
    }

    public function testAssertReturn79(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 120,
        );
    }

    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 121,
        );
    }

    public function testAssertReturn81(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 122,
        );
    }

    public function testAssertReturn82(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 123,
        );
    }

    public function testAssertReturn83(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '17']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 124,
        );
    }

    public function testAssertReturn84(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '18']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 125,
        );
    }

    public function testAssertReturn85(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '19']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 126,
        );
    }

    public function testAssertReturn86(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '20']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 127,
        );
    }

    public function testAssertReturn87(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '21']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 128,
        );
    }

    public function testAssertReturn88(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '22']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 129,
        );
    }

    public function testAssertReturn89(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '23']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 130,
        );
    }

    public function testAssertReturn90(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '24']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 131,
        );
    }

    public function testAssertReturn91(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '25']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 132,
        );
    }

    public function testAssertReturn92(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '26']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 133,
        );
    }

    public function testAssertReturn93(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '27']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 134,
        );
    }

    public function testAssertReturn94(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '28']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 135,
        );
    }

    public function testAssertReturn95(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '29']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 136,
        );
    }

    public function testModule96(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.3.wasm',
            name: null,
            line: 138,
        );
    }

    public function testAction97(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 157,
        );
    }

    public function testAssertReturn98(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 159,
        );
    }

    public function testAssertReturn99(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 160,
        );
    }

    public function testAssertReturn100(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 161,
        );
    }

    public function testAssertReturn101(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 162,
        );
    }

    public function testAssertReturn102(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 163,
        );
    }

    public function testAssertReturn103(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 164,
        );
    }

    public function testAssertReturn104(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 165,
        );
    }

    public function testAssertReturn105(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '7']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 166,
        );
    }

    public function testAssertReturn106(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 167,
        );
    }

    public function testAssertReturn107(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '9']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 168,
        );
    }

    public function testAssertReturn108(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 169,
        );
    }

    public function testAssertReturn109(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 170,
        );
    }

    public function testAssertReturn110(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 171,
        );
    }

    public function testAssertReturn111(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 172,
        );
    }

    public function testAssertReturn112(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 173,
        );
    }

    public function testAssertReturn113(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 174,
        );
    }

    public function testAssertReturn114(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 175,
        );
    }

    public function testAssertReturn115(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '17']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 176,
        );
    }

    public function testAssertReturn116(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '18']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 177,
        );
    }

    public function testAssertReturn117(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '19']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 178,
        );
    }

    public function testAssertReturn118(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '20']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 179,
        );
    }

    public function testAssertReturn119(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '21']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 180,
        );
    }

    public function testAssertReturn120(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '22']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 181,
        );
    }

    public function testAssertReturn121(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '23']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 182,
        );
    }

    public function testAssertReturn122(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '24']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 183,
        );
    }

    public function testAssertReturn123(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '25']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 184,
        );
    }

    public function testAssertReturn124(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '26']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 185,
        );
    }

    public function testAssertReturn125(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '27']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 186,
        );
    }

    public function testAssertReturn126(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '28']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 187,
        );
    }

    public function testAssertReturn127(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '29']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 188,
        );
    }

    public function testAssertInvalid128(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.4.wasm',
            text: 'unknown data segment',
            line: 190,
        );
    }

    public function testAssertInvalid129(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.5.wasm',
            text: 'unknown data segment',
            line: 196,
        );
    }

    public function testModule130(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.6.wasm',
            name: null,
            line: 203,
        );
    }

    public function testAction131(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 209,
        );
    }

    public function testModule132(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.7.wasm',
            name: null,
            line: 211,
        );
    }

    public function testAssertTrap133(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds memory access',
            line: 217,
        );
    }

    public function testModule134(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.8.wasm',
            name: null,
            line: 219,
        );
    }

    public function testAssertTrap135(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds memory access',
            line: 224,
        );
    }

    public function testAssertInvalid136(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.9.wasm',
            text: 'unknown memory 0',
            line: 227,
        );
    }

    public function testAssertInvalid137(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.10.wasm',
            text: 'unknown data segment 1',
            line: 233,
        );
    }

    public function testModule138(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.11.wasm',
            name: null,
            line: 240,
        );
    }

    public function testAction139(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 246,
        );
    }

    public function testModule140(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.12.wasm',
            name: null,
            line: 248,
        );
    }

    public function testAssertTrap141(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds memory access',
            line: 253,
        );
    }

    public function testModule142(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.13.wasm',
            name: null,
            line: 255,
        );
    }

    public function testAssertTrap143(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds memory access',
            line: 260,
        );
    }

    public function testModule144(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.14.wasm',
            name: null,
            line: 262,
        );
    }

    public function testAssertTrap145(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds memory access',
            line: 267,
        );
    }

    public function testModule146(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.15.wasm',
            name: null,
            line: 269,
        );
    }

    public function testAssertTrap147(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds memory access',
            line: 274,
        );
    }

    public function testModule148(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.16.wasm',
            name: null,
            line: 276,
        );
    }

    public function testAction149(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 281,
        );
    }

    public function testModule150(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.17.wasm',
            name: null,
            line: 283,
        );
    }

    public function testAssertTrap151(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds memory access',
            line: 288,
        );
    }

    public function testModule152(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.18.wasm',
            name: null,
            line: 290,
        );
    }

    public function testAction153(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 295,
        );
    }

    public function testModule154(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.19.wasm',
            name: null,
            line: 297,
        );
    }

    public function testAction155(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 302,
        );
    }

    public function testModule156(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.20.wasm',
            name: null,
            line: 304,
        );
    }

    public function testAssertTrap157(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds memory access',
            line: 309,
        );
    }

    public function testAssertInvalid158(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.21.wasm',
            text: 'type mismatch',
            line: 312,
        );
    }

    public function testAssertInvalid159(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.22.wasm',
            text: 'type mismatch',
            line: 320,
        );
    }

    public function testAssertInvalid160(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.23.wasm',
            text: 'type mismatch',
            line: 328,
        );
    }

    public function testAssertInvalid161(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.24.wasm',
            text: 'type mismatch',
            line: 336,
        );
    }

    public function testAssertInvalid162(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.25.wasm',
            text: 'type mismatch',
            line: 344,
        );
    }

    public function testAssertInvalid163(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.26.wasm',
            text: 'type mismatch',
            line: 352,
        );
    }

    public function testAssertInvalid164(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.27.wasm',
            text: 'type mismatch',
            line: 360,
        );
    }

    public function testAssertInvalid165(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.28.wasm',
            text: 'type mismatch',
            line: 368,
        );
    }

    public function testAssertInvalid166(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.29.wasm',
            text: 'type mismatch',
            line: 376,
        );
    }

    public function testAssertInvalid167(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.30.wasm',
            text: 'type mismatch',
            line: 384,
        );
    }

    public function testAssertInvalid168(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.31.wasm',
            text: 'type mismatch',
            line: 392,
        );
    }

    public function testAssertInvalid169(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.32.wasm',
            text: 'type mismatch',
            line: 400,
        );
    }

    public function testAssertInvalid170(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.33.wasm',
            text: 'type mismatch',
            line: 408,
        );
    }

    public function testAssertInvalid171(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.34.wasm',
            text: 'type mismatch',
            line: 416,
        );
    }

    public function testAssertInvalid172(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.35.wasm',
            text: 'type mismatch',
            line: 424,
        );
    }

    public function testAssertInvalid173(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.36.wasm',
            text: 'type mismatch',
            line: 432,
        );
    }

    public function testAssertInvalid174(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.37.wasm',
            text: 'type mismatch',
            line: 440,
        );
    }

    public function testAssertInvalid175(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.38.wasm',
            text: 'type mismatch',
            line: 448,
        );
    }

    public function testAssertInvalid176(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.39.wasm',
            text: 'type mismatch',
            line: 456,
        );
    }

    public function testAssertInvalid177(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.40.wasm',
            text: 'type mismatch',
            line: 464,
        );
    }

    public function testAssertInvalid178(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.41.wasm',
            text: 'type mismatch',
            line: 472,
        );
    }

    public function testAssertInvalid179(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.42.wasm',
            text: 'type mismatch',
            line: 480,
        );
    }

    public function testAssertInvalid180(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.43.wasm',
            text: 'type mismatch',
            line: 488,
        );
    }

    public function testAssertInvalid181(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.44.wasm',
            text: 'type mismatch',
            line: 496,
        );
    }

    public function testAssertInvalid182(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.45.wasm',
            text: 'type mismatch',
            line: 504,
        );
    }

    public function testAssertInvalid183(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.46.wasm',
            text: 'type mismatch',
            line: 512,
        );
    }

    public function testAssertInvalid184(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.47.wasm',
            text: 'type mismatch',
            line: 520,
        );
    }

    public function testAssertInvalid185(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.48.wasm',
            text: 'type mismatch',
            line: 528,
        );
    }

    public function testAssertInvalid186(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.49.wasm',
            text: 'type mismatch',
            line: 536,
        );
    }

    public function testAssertInvalid187(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.50.wasm',
            text: 'type mismatch',
            line: 544,
        );
    }

    public function testAssertInvalid188(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.51.wasm',
            text: 'type mismatch',
            line: 552,
        );
    }

    public function testAssertInvalid189(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.52.wasm',
            text: 'type mismatch',
            line: 560,
        );
    }

    public function testAssertInvalid190(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.53.wasm',
            text: 'type mismatch',
            line: 568,
        );
    }

    public function testAssertInvalid191(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.54.wasm',
            text: 'type mismatch',
            line: 576,
        );
    }

    public function testAssertInvalid192(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.55.wasm',
            text: 'type mismatch',
            line: 584,
        );
    }

    public function testAssertInvalid193(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.56.wasm',
            text: 'type mismatch',
            line: 592,
        );
    }

    public function testAssertInvalid194(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.57.wasm',
            text: 'type mismatch',
            line: 600,
        );
    }

    public function testAssertInvalid195(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.58.wasm',
            text: 'type mismatch',
            line: 608,
        );
    }

    public function testAssertInvalid196(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.59.wasm',
            text: 'type mismatch',
            line: 616,
        );
    }

    public function testAssertInvalid197(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.60.wasm',
            text: 'type mismatch',
            line: 624,
        );
    }

    public function testAssertInvalid198(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.61.wasm',
            text: 'type mismatch',
            line: 632,
        );
    }

    public function testAssertInvalid199(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.62.wasm',
            text: 'type mismatch',
            line: 640,
        );
    }

    public function testAssertInvalid200(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.63.wasm',
            text: 'type mismatch',
            line: 648,
        );
    }

    public function testAssertInvalid201(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.64.wasm',
            text: 'type mismatch',
            line: 656,
        );
    }

    public function testAssertInvalid202(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.65.wasm',
            text: 'type mismatch',
            line: 664,
        );
    }

    public function testAssertInvalid203(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.66.wasm',
            text: 'type mismatch',
            line: 672,
        );
    }

    public function testAssertInvalid204(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.67.wasm',
            text: 'type mismatch',
            line: 680,
        );
    }

    public function testAssertInvalid205(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.68.wasm',
            text: 'type mismatch',
            line: 688,
        );
    }

    public function testAssertInvalid206(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.69.wasm',
            text: 'type mismatch',
            line: 696,
        );
    }

    public function testAssertInvalid207(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.70.wasm',
            text: 'type mismatch',
            line: 704,
        );
    }

    public function testAssertInvalid208(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.71.wasm',
            text: 'type mismatch',
            line: 712,
        );
    }

    public function testAssertInvalid209(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.72.wasm',
            text: 'type mismatch',
            line: 720,
        );
    }

    public function testAssertInvalid210(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.73.wasm',
            text: 'type mismatch',
            line: 728,
        );
    }

    public function testAssertInvalid211(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.74.wasm',
            text: 'type mismatch',
            line: 736,
        );
    }

    public function testAssertInvalid212(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.75.wasm',
            text: 'type mismatch',
            line: 744,
        );
    }

    public function testAssertInvalid213(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.76.wasm',
            text: 'type mismatch',
            line: 752,
        );
    }

    public function testAssertInvalid214(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.77.wasm',
            text: 'type mismatch',
            line: 760,
        );
    }

    public function testAssertInvalid215(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.78.wasm',
            text: 'type mismatch',
            line: 768,
        );
    }

    public function testAssertInvalid216(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.79.wasm',
            text: 'type mismatch',
            line: 776,
        );
    }

    public function testAssertInvalid217(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.80.wasm',
            text: 'type mismatch',
            line: 784,
        );
    }

    public function testAssertInvalid218(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.81.wasm',
            text: 'type mismatch',
            line: 792,
        );
    }

    public function testAssertInvalid219(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.82.wasm',
            text: 'type mismatch',
            line: 800,
        );
    }

    public function testAssertInvalid220(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.83.wasm',
            text: 'type mismatch',
            line: 808,
        );
    }

    public function testModule221(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.84.wasm',
            name: null,
            line: 815,
        );
    }

    public function testAssertTrap222(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '65528'], ['type' => 'i32', 'value' => '16']]],
            text: 'out of bounds memory access',
            line: 833,
        );
    }

    public function testAssertReturn223(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'checkRange', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 836,
        );
    }

    public function testModule224(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.85.wasm',
            name: null,
            line: 838,
        );
    }

    public function testAssertTrap225(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '65527'], ['type' => 'i32', 'value' => '16']]],
            text: 'out of bounds memory access',
            line: 856,
        );
    }

    public function testAssertReturn226(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'checkRange', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 859,
        );
    }

    public function testModule227(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.86.wasm',
            name: null,
            line: 861,
        );
    }

    public function testAssertTrap228(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '65472'], ['type' => 'i32', 'value' => '30']]],
            text: 'out of bounds memory access',
            line: 879,
        );
    }

    public function testAssertReturn229(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'checkRange', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 882,
        );
    }

    public function testModule230(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.87.wasm',
            name: null,
            line: 884,
        );
    }

    public function testAssertTrap231(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '65473'], ['type' => 'i32', 'value' => '31']]],
            text: 'out of bounds memory access',
            line: 902,
        );
    }

    public function testAssertReturn232(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'checkRange', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 905,
        );
    }

    public function testModule233(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.88.wasm',
            name: null,
            line: 907,
        );
    }

    public function testAssertTrap234(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '65528'], ['type' => 'i32', 'value' => '4294967040']]],
            text: 'out of bounds memory access',
            line: 925,
        );
    }

    public function testAssertReturn235(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'checkRange', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 928,
        );
    }

    public function testModule236(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.89.wasm',
            name: null,
            line: 930,
        );
    }

    public function testAssertTrap237(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '4294967292']]],
            text: 'out of bounds memory access',
            line: 948,
        );
    }

    public function testAssertReturn238(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'checkRange', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 951,
        );
    }

    public function testModule239(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.90.wasm',
            name: null,
            line: 954,
        );
    }
}
