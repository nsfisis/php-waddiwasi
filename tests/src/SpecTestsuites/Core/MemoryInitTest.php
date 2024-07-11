<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
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

    #[Depends('testModule0')]
    public function testAction1(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 17,
        );
    }

    #[Depends('testAction1')]
    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 19,
        );
    }

    #[Depends('testAssertReturn2')]
    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 20,
        );
    }

    #[Depends('testAssertReturn3')]
    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 21,
        );
    }

    #[Depends('testAssertReturn4')]
    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 22,
        );
    }

    #[Depends('testAssertReturn5')]
    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 23,
        );
    }

    #[Depends('testAssertReturn6')]
    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 24,
        );
    }

    #[Depends('testAssertReturn7')]
    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 25,
        );
    }

    #[Depends('testAssertReturn8')]
    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '7']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 26,
        );
    }

    #[Depends('testAssertReturn9')]
    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 27,
        );
    }

    #[Depends('testAssertReturn10')]
    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '9']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 28,
        );
    }

    #[Depends('testAssertReturn11')]
    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 29,
        );
    }

    #[Depends('testAssertReturn12')]
    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 30,
        );
    }

    #[Depends('testAssertReturn13')]
    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 31,
        );
    }

    #[Depends('testAssertReturn14')]
    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 32,
        );
    }

    #[Depends('testAssertReturn15')]
    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 33,
        );
    }

    #[Depends('testAssertReturn16')]
    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 34,
        );
    }

    #[Depends('testAssertReturn17')]
    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 35,
        );
    }

    #[Depends('testAssertReturn18')]
    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '17']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 36,
        );
    }

    #[Depends('testAssertReturn19')]
    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '18']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 37,
        );
    }

    #[Depends('testAssertReturn20')]
    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '19']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 38,
        );
    }

    #[Depends('testAssertReturn21')]
    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '20']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 39,
        );
    }

    #[Depends('testAssertReturn22')]
    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '21']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 40,
        );
    }

    #[Depends('testAssertReturn23')]
    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '22']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 41,
        );
    }

    #[Depends('testAssertReturn24')]
    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '23']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 42,
        );
    }

    #[Depends('testAssertReturn25')]
    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '24']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 43,
        );
    }

    #[Depends('testAssertReturn26')]
    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '25']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 44,
        );
    }

    #[Depends('testAssertReturn27')]
    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '26']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 45,
        );
    }

    #[Depends('testAssertReturn28')]
    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '27']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 46,
        );
    }

    #[Depends('testAssertReturn29')]
    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '28']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 47,
        );
    }

    #[Depends('testAssertReturn30')]
    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '29']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 48,
        );
    }

    #[Depends('testAssertReturn31')]
    public function testModule32(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.1.wasm',
            name: null,
            line: 50,
        );
    }

    #[Depends('testModule32')]
    public function testAction33(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 61,
        );
    }

    #[Depends('testAction33')]
    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 63,
        );
    }

    #[Depends('testAssertReturn34')]
    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 64,
        );
    }

    #[Depends('testAssertReturn35')]
    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 65,
        );
    }

    #[Depends('testAssertReturn36')]
    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 66,
        );
    }

    #[Depends('testAssertReturn37')]
    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 67,
        );
    }

    #[Depends('testAssertReturn38')]
    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 68,
        );
    }

    #[Depends('testAssertReturn39')]
    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 69,
        );
    }

    #[Depends('testAssertReturn40')]
    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '7']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 70,
        );
    }

    #[Depends('testAssertReturn41')]
    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 71,
        );
    }

    #[Depends('testAssertReturn42')]
    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '9']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 72,
        );
    }

    #[Depends('testAssertReturn43')]
    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 73,
        );
    }

    #[Depends('testAssertReturn44')]
    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 74,
        );
    }

    #[Depends('testAssertReturn45')]
    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 75,
        );
    }

    #[Depends('testAssertReturn46')]
    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 76,
        );
    }

    #[Depends('testAssertReturn47')]
    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 77,
        );
    }

    #[Depends('testAssertReturn48')]
    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 78,
        );
    }

    #[Depends('testAssertReturn49')]
    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 79,
        );
    }

    #[Depends('testAssertReturn50')]
    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '17']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 80,
        );
    }

    #[Depends('testAssertReturn51')]
    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '18']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 81,
        );
    }

    #[Depends('testAssertReturn52')]
    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '19']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 82,
        );
    }

    #[Depends('testAssertReturn53')]
    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '20']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 83,
        );
    }

    #[Depends('testAssertReturn54')]
    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '21']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 84,
        );
    }

    #[Depends('testAssertReturn55')]
    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '22']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 85,
        );
    }

    #[Depends('testAssertReturn56')]
    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '23']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 86,
        );
    }

    #[Depends('testAssertReturn57')]
    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '24']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 87,
        );
    }

    #[Depends('testAssertReturn58')]
    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '25']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 88,
        );
    }

    #[Depends('testAssertReturn59')]
    public function testAssertReturn60(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '26']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 89,
        );
    }

    #[Depends('testAssertReturn60')]
    public function testAssertReturn61(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '27']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 90,
        );
    }

    #[Depends('testAssertReturn61')]
    public function testAssertReturn62(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '28']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 91,
        );
    }

    #[Depends('testAssertReturn62')]
    public function testAssertReturn63(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '29']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 92,
        );
    }

    #[Depends('testAssertReturn63')]
    public function testModule64(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.2.wasm',
            name: null,
            line: 94,
        );
    }

    #[Depends('testModule64')]
    public function testAction65(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 105,
        );
    }

    #[Depends('testAction65')]
    public function testAssertReturn66(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 107,
        );
    }

    #[Depends('testAssertReturn66')]
    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 108,
        );
    }

    #[Depends('testAssertReturn67')]
    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 109,
        );
    }

    #[Depends('testAssertReturn68')]
    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 110,
        );
    }

    #[Depends('testAssertReturn69')]
    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 111,
        );
    }

    #[Depends('testAssertReturn70')]
    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 112,
        );
    }

    #[Depends('testAssertReturn71')]
    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 113,
        );
    }

    #[Depends('testAssertReturn72')]
    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '7']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 114,
        );
    }

    #[Depends('testAssertReturn73')]
    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 115,
        );
    }

    #[Depends('testAssertReturn74')]
    public function testAssertReturn75(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '9']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 116,
        );
    }

    #[Depends('testAssertReturn75')]
    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 117,
        );
    }

    #[Depends('testAssertReturn76')]
    public function testAssertReturn77(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 118,
        );
    }

    #[Depends('testAssertReturn77')]
    public function testAssertReturn78(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 119,
        );
    }

    #[Depends('testAssertReturn78')]
    public function testAssertReturn79(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 120,
        );
    }

    #[Depends('testAssertReturn79')]
    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 121,
        );
    }

    #[Depends('testAssertReturn80')]
    public function testAssertReturn81(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 122,
        );
    }

    #[Depends('testAssertReturn81')]
    public function testAssertReturn82(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 123,
        );
    }

    #[Depends('testAssertReturn82')]
    public function testAssertReturn83(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '17']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 124,
        );
    }

    #[Depends('testAssertReturn83')]
    public function testAssertReturn84(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '18']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 125,
        );
    }

    #[Depends('testAssertReturn84')]
    public function testAssertReturn85(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '19']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 126,
        );
    }

    #[Depends('testAssertReturn85')]
    public function testAssertReturn86(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '20']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 127,
        );
    }

    #[Depends('testAssertReturn86')]
    public function testAssertReturn87(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '21']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 128,
        );
    }

    #[Depends('testAssertReturn87')]
    public function testAssertReturn88(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '22']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 129,
        );
    }

    #[Depends('testAssertReturn88')]
    public function testAssertReturn89(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '23']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 130,
        );
    }

    #[Depends('testAssertReturn89')]
    public function testAssertReturn90(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '24']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 131,
        );
    }

    #[Depends('testAssertReturn90')]
    public function testAssertReturn91(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '25']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 132,
        );
    }

    #[Depends('testAssertReturn91')]
    public function testAssertReturn92(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '26']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 133,
        );
    }

    #[Depends('testAssertReturn92')]
    public function testAssertReturn93(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '27']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 134,
        );
    }

    #[Depends('testAssertReturn93')]
    public function testAssertReturn94(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '28']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 135,
        );
    }

    #[Depends('testAssertReturn94')]
    public function testAssertReturn95(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '29']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 136,
        );
    }

    #[Depends('testAssertReturn95')]
    public function testModule96(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.3.wasm',
            name: null,
            line: 138,
        );
    }

    #[Depends('testModule96')]
    public function testAction97(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 157,
        );
    }

    #[Depends('testAction97')]
    public function testAssertReturn98(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 159,
        );
    }

    #[Depends('testAssertReturn98')]
    public function testAssertReturn99(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 160,
        );
    }

    #[Depends('testAssertReturn99')]
    public function testAssertReturn100(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 161,
        );
    }

    #[Depends('testAssertReturn100')]
    public function testAssertReturn101(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 162,
        );
    }

    #[Depends('testAssertReturn101')]
    public function testAssertReturn102(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 163,
        );
    }

    #[Depends('testAssertReturn102')]
    public function testAssertReturn103(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 164,
        );
    }

    #[Depends('testAssertReturn103')]
    public function testAssertReturn104(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 165,
        );
    }

    #[Depends('testAssertReturn104')]
    public function testAssertReturn105(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '7']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 166,
        );
    }

    #[Depends('testAssertReturn105')]
    public function testAssertReturn106(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 167,
        );
    }

    #[Depends('testAssertReturn106')]
    public function testAssertReturn107(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '9']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 168,
        );
    }

    #[Depends('testAssertReturn107')]
    public function testAssertReturn108(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 169,
        );
    }

    #[Depends('testAssertReturn108')]
    public function testAssertReturn109(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 170,
        );
    }

    #[Depends('testAssertReturn109')]
    public function testAssertReturn110(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 171,
        );
    }

    #[Depends('testAssertReturn110')]
    public function testAssertReturn111(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 172,
        );
    }

    #[Depends('testAssertReturn111')]
    public function testAssertReturn112(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 173,
        );
    }

    #[Depends('testAssertReturn112')]
    public function testAssertReturn113(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 174,
        );
    }

    #[Depends('testAssertReturn113')]
    public function testAssertReturn114(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 175,
        );
    }

    #[Depends('testAssertReturn114')]
    public function testAssertReturn115(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '17']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 176,
        );
    }

    #[Depends('testAssertReturn115')]
    public function testAssertReturn116(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '18']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 177,
        );
    }

    #[Depends('testAssertReturn116')]
    public function testAssertReturn117(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '19']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 178,
        );
    }

    #[Depends('testAssertReturn117')]
    public function testAssertReturn118(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '20']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 179,
        );
    }

    #[Depends('testAssertReturn118')]
    public function testAssertReturn119(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '21']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 180,
        );
    }

    #[Depends('testAssertReturn119')]
    public function testAssertReturn120(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '22']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 181,
        );
    }

    #[Depends('testAssertReturn120')]
    public function testAssertReturn121(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '23']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 182,
        );
    }

    #[Depends('testAssertReturn121')]
    public function testAssertReturn122(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '24']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 183,
        );
    }

    #[Depends('testAssertReturn122')]
    public function testAssertReturn123(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '25']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 184,
        );
    }

    #[Depends('testAssertReturn123')]
    public function testAssertReturn124(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '26']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 185,
        );
    }

    #[Depends('testAssertReturn124')]
    public function testAssertReturn125(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '27']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 186,
        );
    }

    #[Depends('testAssertReturn125')]
    public function testAssertReturn126(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '28']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 187,
        );
    }

    #[Depends('testAssertReturn126')]
    public function testAssertReturn127(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '29']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 188,
        );
    }

    #[Depends('testAssertReturn127')]
    public function testAssertInvalid128(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.4.wasm',
            text: 'unknown data segment',
            line: 190,
        );
    }

    #[Depends('testAssertInvalid128')]
    public function testAssertInvalid129(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.5.wasm',
            text: 'unknown data segment',
            line: 196,
        );
    }

    #[Depends('testAssertInvalid129')]
    public function testModule130(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.6.wasm',
            name: null,
            line: 203,
        );
    }

    #[Depends('testModule130')]
    public function testAction131(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 209,
        );
    }

    #[Depends('testAction131')]
    public function testModule132(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.7.wasm',
            name: null,
            line: 211,
        );
    }

    #[Depends('testModule132')]
    public function testAssertTrap133(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds memory access',
            line: 217,
        );
    }

    #[Depends('testAssertTrap133')]
    public function testModule134(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.8.wasm',
            name: null,
            line: 219,
        );
    }

    #[Depends('testModule134')]
    public function testAssertTrap135(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds memory access',
            line: 224,
        );
    }

    #[Depends('testAssertTrap135')]
    public function testAssertInvalid136(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.9.wasm',
            text: 'unknown memory 0',
            line: 227,
        );
    }

    #[Depends('testAssertInvalid136')]
    public function testAssertInvalid137(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.10.wasm',
            text: 'unknown data segment 1',
            line: 233,
        );
    }

    #[Depends('testAssertInvalid137')]
    public function testModule138(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.11.wasm',
            name: null,
            line: 240,
        );
    }

    #[Depends('testModule138')]
    public function testAction139(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 246,
        );
    }

    #[Depends('testAction139')]
    public function testModule140(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.12.wasm',
            name: null,
            line: 248,
        );
    }

    #[Depends('testModule140')]
    public function testAssertTrap141(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds memory access',
            line: 253,
        );
    }

    #[Depends('testAssertTrap141')]
    public function testModule142(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.13.wasm',
            name: null,
            line: 255,
        );
    }

    #[Depends('testModule142')]
    public function testAssertTrap143(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds memory access',
            line: 260,
        );
    }

    #[Depends('testAssertTrap143')]
    public function testModule144(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.14.wasm',
            name: null,
            line: 262,
        );
    }

    #[Depends('testModule144')]
    public function testAssertTrap145(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds memory access',
            line: 267,
        );
    }

    #[Depends('testAssertTrap145')]
    public function testModule146(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.15.wasm',
            name: null,
            line: 269,
        );
    }

    #[Depends('testModule146')]
    public function testAssertTrap147(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds memory access',
            line: 274,
        );
    }

    #[Depends('testAssertTrap147')]
    public function testModule148(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.16.wasm',
            name: null,
            line: 276,
        );
    }

    #[Depends('testModule148')]
    public function testAction149(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 281,
        );
    }

    #[Depends('testAction149')]
    public function testModule150(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.17.wasm',
            name: null,
            line: 283,
        );
    }

    #[Depends('testModule150')]
    public function testAssertTrap151(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds memory access',
            line: 288,
        );
    }

    #[Depends('testAssertTrap151')]
    public function testModule152(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.18.wasm',
            name: null,
            line: 290,
        );
    }

    #[Depends('testModule152')]
    public function testAction153(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 295,
        );
    }

    #[Depends('testAction153')]
    public function testModule154(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.19.wasm',
            name: null,
            line: 297,
        );
    }

    #[Depends('testModule154')]
    public function testAction155(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            line: 302,
        );
    }

    #[Depends('testAction155')]
    public function testModule156(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.20.wasm',
            name: null,
            line: 304,
        );
    }

    #[Depends('testModule156')]
    public function testAssertTrap157(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'test', 'args' => []],
            text: 'out of bounds memory access',
            line: 309,
        );
    }

    #[Depends('testAssertTrap157')]
    public function testAssertInvalid158(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.21.wasm',
            text: 'type mismatch',
            line: 312,
        );
    }

    #[Depends('testAssertInvalid158')]
    public function testAssertInvalid159(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.22.wasm',
            text: 'type mismatch',
            line: 320,
        );
    }

    #[Depends('testAssertInvalid159')]
    public function testAssertInvalid160(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.23.wasm',
            text: 'type mismatch',
            line: 328,
        );
    }

    #[Depends('testAssertInvalid160')]
    public function testAssertInvalid161(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.24.wasm',
            text: 'type mismatch',
            line: 336,
        );
    }

    #[Depends('testAssertInvalid161')]
    public function testAssertInvalid162(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.25.wasm',
            text: 'type mismatch',
            line: 344,
        );
    }

    #[Depends('testAssertInvalid162')]
    public function testAssertInvalid163(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.26.wasm',
            text: 'type mismatch',
            line: 352,
        );
    }

    #[Depends('testAssertInvalid163')]
    public function testAssertInvalid164(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.27.wasm',
            text: 'type mismatch',
            line: 360,
        );
    }

    #[Depends('testAssertInvalid164')]
    public function testAssertInvalid165(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.28.wasm',
            text: 'type mismatch',
            line: 368,
        );
    }

    #[Depends('testAssertInvalid165')]
    public function testAssertInvalid166(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.29.wasm',
            text: 'type mismatch',
            line: 376,
        );
    }

    #[Depends('testAssertInvalid166')]
    public function testAssertInvalid167(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.30.wasm',
            text: 'type mismatch',
            line: 384,
        );
    }

    #[Depends('testAssertInvalid167')]
    public function testAssertInvalid168(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.31.wasm',
            text: 'type mismatch',
            line: 392,
        );
    }

    #[Depends('testAssertInvalid168')]
    public function testAssertInvalid169(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.32.wasm',
            text: 'type mismatch',
            line: 400,
        );
    }

    #[Depends('testAssertInvalid169')]
    public function testAssertInvalid170(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.33.wasm',
            text: 'type mismatch',
            line: 408,
        );
    }

    #[Depends('testAssertInvalid170')]
    public function testAssertInvalid171(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.34.wasm',
            text: 'type mismatch',
            line: 416,
        );
    }

    #[Depends('testAssertInvalid171')]
    public function testAssertInvalid172(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.35.wasm',
            text: 'type mismatch',
            line: 424,
        );
    }

    #[Depends('testAssertInvalid172')]
    public function testAssertInvalid173(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.36.wasm',
            text: 'type mismatch',
            line: 432,
        );
    }

    #[Depends('testAssertInvalid173')]
    public function testAssertInvalid174(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.37.wasm',
            text: 'type mismatch',
            line: 440,
        );
    }

    #[Depends('testAssertInvalid174')]
    public function testAssertInvalid175(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.38.wasm',
            text: 'type mismatch',
            line: 448,
        );
    }

    #[Depends('testAssertInvalid175')]
    public function testAssertInvalid176(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.39.wasm',
            text: 'type mismatch',
            line: 456,
        );
    }

    #[Depends('testAssertInvalid176')]
    public function testAssertInvalid177(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.40.wasm',
            text: 'type mismatch',
            line: 464,
        );
    }

    #[Depends('testAssertInvalid177')]
    public function testAssertInvalid178(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.41.wasm',
            text: 'type mismatch',
            line: 472,
        );
    }

    #[Depends('testAssertInvalid178')]
    public function testAssertInvalid179(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.42.wasm',
            text: 'type mismatch',
            line: 480,
        );
    }

    #[Depends('testAssertInvalid179')]
    public function testAssertInvalid180(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.43.wasm',
            text: 'type mismatch',
            line: 488,
        );
    }

    #[Depends('testAssertInvalid180')]
    public function testAssertInvalid181(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.44.wasm',
            text: 'type mismatch',
            line: 496,
        );
    }

    #[Depends('testAssertInvalid181')]
    public function testAssertInvalid182(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.45.wasm',
            text: 'type mismatch',
            line: 504,
        );
    }

    #[Depends('testAssertInvalid182')]
    public function testAssertInvalid183(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.46.wasm',
            text: 'type mismatch',
            line: 512,
        );
    }

    #[Depends('testAssertInvalid183')]
    public function testAssertInvalid184(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.47.wasm',
            text: 'type mismatch',
            line: 520,
        );
    }

    #[Depends('testAssertInvalid184')]
    public function testAssertInvalid185(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.48.wasm',
            text: 'type mismatch',
            line: 528,
        );
    }

    #[Depends('testAssertInvalid185')]
    public function testAssertInvalid186(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.49.wasm',
            text: 'type mismatch',
            line: 536,
        );
    }

    #[Depends('testAssertInvalid186')]
    public function testAssertInvalid187(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.50.wasm',
            text: 'type mismatch',
            line: 544,
        );
    }

    #[Depends('testAssertInvalid187')]
    public function testAssertInvalid188(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.51.wasm',
            text: 'type mismatch',
            line: 552,
        );
    }

    #[Depends('testAssertInvalid188')]
    public function testAssertInvalid189(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.52.wasm',
            text: 'type mismatch',
            line: 560,
        );
    }

    #[Depends('testAssertInvalid189')]
    public function testAssertInvalid190(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.53.wasm',
            text: 'type mismatch',
            line: 568,
        );
    }

    #[Depends('testAssertInvalid190')]
    public function testAssertInvalid191(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.54.wasm',
            text: 'type mismatch',
            line: 576,
        );
    }

    #[Depends('testAssertInvalid191')]
    public function testAssertInvalid192(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.55.wasm',
            text: 'type mismatch',
            line: 584,
        );
    }

    #[Depends('testAssertInvalid192')]
    public function testAssertInvalid193(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.56.wasm',
            text: 'type mismatch',
            line: 592,
        );
    }

    #[Depends('testAssertInvalid193')]
    public function testAssertInvalid194(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.57.wasm',
            text: 'type mismatch',
            line: 600,
        );
    }

    #[Depends('testAssertInvalid194')]
    public function testAssertInvalid195(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.58.wasm',
            text: 'type mismatch',
            line: 608,
        );
    }

    #[Depends('testAssertInvalid195')]
    public function testAssertInvalid196(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.59.wasm',
            text: 'type mismatch',
            line: 616,
        );
    }

    #[Depends('testAssertInvalid196')]
    public function testAssertInvalid197(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.60.wasm',
            text: 'type mismatch',
            line: 624,
        );
    }

    #[Depends('testAssertInvalid197')]
    public function testAssertInvalid198(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.61.wasm',
            text: 'type mismatch',
            line: 632,
        );
    }

    #[Depends('testAssertInvalid198')]
    public function testAssertInvalid199(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.62.wasm',
            text: 'type mismatch',
            line: 640,
        );
    }

    #[Depends('testAssertInvalid199')]
    public function testAssertInvalid200(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.63.wasm',
            text: 'type mismatch',
            line: 648,
        );
    }

    #[Depends('testAssertInvalid200')]
    public function testAssertInvalid201(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.64.wasm',
            text: 'type mismatch',
            line: 656,
        );
    }

    #[Depends('testAssertInvalid201')]
    public function testAssertInvalid202(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.65.wasm',
            text: 'type mismatch',
            line: 664,
        );
    }

    #[Depends('testAssertInvalid202')]
    public function testAssertInvalid203(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.66.wasm',
            text: 'type mismatch',
            line: 672,
        );
    }

    #[Depends('testAssertInvalid203')]
    public function testAssertInvalid204(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.67.wasm',
            text: 'type mismatch',
            line: 680,
        );
    }

    #[Depends('testAssertInvalid204')]
    public function testAssertInvalid205(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.68.wasm',
            text: 'type mismatch',
            line: 688,
        );
    }

    #[Depends('testAssertInvalid205')]
    public function testAssertInvalid206(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.69.wasm',
            text: 'type mismatch',
            line: 696,
        );
    }

    #[Depends('testAssertInvalid206')]
    public function testAssertInvalid207(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.70.wasm',
            text: 'type mismatch',
            line: 704,
        );
    }

    #[Depends('testAssertInvalid207')]
    public function testAssertInvalid208(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.71.wasm',
            text: 'type mismatch',
            line: 712,
        );
    }

    #[Depends('testAssertInvalid208')]
    public function testAssertInvalid209(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.72.wasm',
            text: 'type mismatch',
            line: 720,
        );
    }

    #[Depends('testAssertInvalid209')]
    public function testAssertInvalid210(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.73.wasm',
            text: 'type mismatch',
            line: 728,
        );
    }

    #[Depends('testAssertInvalid210')]
    public function testAssertInvalid211(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.74.wasm',
            text: 'type mismatch',
            line: 736,
        );
    }

    #[Depends('testAssertInvalid211')]
    public function testAssertInvalid212(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.75.wasm',
            text: 'type mismatch',
            line: 744,
        );
    }

    #[Depends('testAssertInvalid212')]
    public function testAssertInvalid213(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.76.wasm',
            text: 'type mismatch',
            line: 752,
        );
    }

    #[Depends('testAssertInvalid213')]
    public function testAssertInvalid214(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.77.wasm',
            text: 'type mismatch',
            line: 760,
        );
    }

    #[Depends('testAssertInvalid214')]
    public function testAssertInvalid215(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.78.wasm',
            text: 'type mismatch',
            line: 768,
        );
    }

    #[Depends('testAssertInvalid215')]
    public function testAssertInvalid216(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.79.wasm',
            text: 'type mismatch',
            line: 776,
        );
    }

    #[Depends('testAssertInvalid216')]
    public function testAssertInvalid217(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.80.wasm',
            text: 'type mismatch',
            line: 784,
        );
    }

    #[Depends('testAssertInvalid217')]
    public function testAssertInvalid218(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.81.wasm',
            text: 'type mismatch',
            line: 792,
        );
    }

    #[Depends('testAssertInvalid218')]
    public function testAssertInvalid219(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.82.wasm',
            text: 'type mismatch',
            line: 800,
        );
    }

    #[Depends('testAssertInvalid219')]
    public function testAssertInvalid220(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_init.83.wasm',
            text: 'type mismatch',
            line: 808,
        );
    }

    #[Depends('testAssertInvalid220')]
    public function testModule221(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.84.wasm',
            name: null,
            line: 815,
        );
    }

    #[Depends('testModule221')]
    public function testAssertTrap222(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '65528'], ['type' => 'i32', 'value' => '16']]],
            text: 'out of bounds memory access',
            line: 833,
        );
    }

    #[Depends('testAssertTrap222')]
    public function testAssertReturn223(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'checkRange', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 836,
        );
    }

    #[Depends('testAssertReturn223')]
    public function testModule224(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.85.wasm',
            name: null,
            line: 838,
        );
    }

    #[Depends('testModule224')]
    public function testAssertTrap225(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '65527'], ['type' => 'i32', 'value' => '16']]],
            text: 'out of bounds memory access',
            line: 856,
        );
    }

    #[Depends('testAssertTrap225')]
    public function testAssertReturn226(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'checkRange', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 859,
        );
    }

    #[Depends('testAssertReturn226')]
    public function testModule227(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.86.wasm',
            name: null,
            line: 861,
        );
    }

    #[Depends('testModule227')]
    public function testAssertTrap228(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '65472'], ['type' => 'i32', 'value' => '30']]],
            text: 'out of bounds memory access',
            line: 879,
        );
    }

    #[Depends('testAssertTrap228')]
    public function testAssertReturn229(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'checkRange', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 882,
        );
    }

    #[Depends('testAssertReturn229')]
    public function testModule230(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.87.wasm',
            name: null,
            line: 884,
        );
    }

    #[Depends('testModule230')]
    public function testAssertTrap231(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '65473'], ['type' => 'i32', 'value' => '31']]],
            text: 'out of bounds memory access',
            line: 902,
        );
    }

    #[Depends('testAssertTrap231')]
    public function testAssertReturn232(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'checkRange', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 905,
        );
    }

    #[Depends('testAssertReturn232')]
    public function testModule233(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.88.wasm',
            name: null,
            line: 907,
        );
    }

    #[Depends('testModule233')]
    public function testAssertTrap234(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '65528'], ['type' => 'i32', 'value' => '4294967040']]],
            text: 'out of bounds memory access',
            line: 925,
        );
    }

    #[Depends('testAssertTrap234')]
    public function testAssertReturn235(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'checkRange', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 928,
        );
    }

    #[Depends('testAssertReturn235')]
    public function testModule236(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.89.wasm',
            name: null,
            line: 930,
        );
    }

    #[Depends('testModule236')]
    public function testAssertTrap237(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '4294967292']]],
            text: 'out of bounds memory access',
            line: 948,
        );
    }

    #[Depends('testAssertTrap237')]
    public function testAssertReturn238(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'checkRange', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 951,
        );
    }

    #[Depends('testAssertReturn238')]
    public function testModule239(): void
    {
        $this->runModuleCommand(
            filename: 'memory_init.90.wasm',
            name: null,
            line: 954,
        );
    }
}
