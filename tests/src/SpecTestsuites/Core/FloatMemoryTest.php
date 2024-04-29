<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class FloatMemoryTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'float_memory.0.wasm',
            name: null,
            line: 5,
        );
    }

    #[Depends('testModule0')]
    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2141192192']],
            line: 15,
        );
    }

    #[Depends('testAssertReturn1')]
    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2141192192']],
            line: 16,
        );
    }

    #[Depends('testAssertReturn2')]
    public function testAction3(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'reset', 'args' => []],
            line: 17,
        );
    }

    #[Depends('testAction3')]
    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 18,
        );
    }

    #[Depends('testAssertReturn4')]
    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => []],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 19,
        );
    }

    #[Depends('testAssertReturn5')]
    public function testAction6(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.store', 'args' => []],
            line: 20,
        );
    }

    #[Depends('testAction6')]
    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2141192192']],
            line: 21,
        );
    }

    #[Depends('testAssertReturn7')]
    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2141192192']],
            line: 22,
        );
    }

    #[Depends('testAssertReturn8')]
    public function testAction9(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'reset', 'args' => []],
            line: 23,
        );
    }

    #[Depends('testAction9')]
    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 24,
        );
    }

    #[Depends('testAssertReturn10')]
    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => []],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 25,
        );
    }

    #[Depends('testAssertReturn11')]
    public function testAction12(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.store', 'args' => []],
            line: 26,
        );
    }

    #[Depends('testAction12')]
    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2141192192']],
            line: 27,
        );
    }

    #[Depends('testAssertReturn13')]
    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2141192192']],
            line: 28,
        );
    }

    #[Depends('testAssertReturn14')]
    public function testModule15(): void
    {
        $this->runModuleCommand(
            filename: 'float_memory.1.wasm',
            name: null,
            line: 30,
        );
    }

    #[Depends('testModule15')]
    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9219994337134247936']],
            line: 40,
        );
    }

    #[Depends('testAssertReturn16')]
    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9219994337134247936']],
            line: 41,
        );
    }

    #[Depends('testAssertReturn17')]
    public function testAction18(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'reset', 'args' => []],
            line: 42,
        );
    }

    #[Depends('testAction18')]
    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => []],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 43,
        );
    }

    #[Depends('testAssertReturn19')]
    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => []],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 44,
        );
    }

    #[Depends('testAssertReturn20')]
    public function testAction21(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => []],
            line: 45,
        );
    }

    #[Depends('testAction21')]
    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9219994337134247936']],
            line: 46,
        );
    }

    #[Depends('testAssertReturn22')]
    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9219994337134247936']],
            line: 47,
        );
    }

    #[Depends('testAssertReturn23')]
    public function testAction24(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'reset', 'args' => []],
            line: 48,
        );
    }

    #[Depends('testAction24')]
    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => []],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 49,
        );
    }

    #[Depends('testAssertReturn25')]
    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => []],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 50,
        );
    }

    #[Depends('testAssertReturn26')]
    public function testAction27(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => []],
            line: 51,
        );
    }

    #[Depends('testAction27')]
    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9219994337134247936']],
            line: 52,
        );
    }

    #[Depends('testAssertReturn28')]
    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9219994337134247936']],
            line: 53,
        );
    }

    #[Depends('testAssertReturn29')]
    public function testModule30(): void
    {
        $this->runModuleCommand(
            filename: 'float_memory.2.wasm',
            name: null,
            line: 57,
        );
    }

    #[Depends('testModule30')]
    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2141192192']],
            line: 67,
        );
    }

    #[Depends('testAssertReturn31')]
    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2141192192']],
            line: 68,
        );
    }

    #[Depends('testAssertReturn32')]
    public function testAction33(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'reset', 'args' => []],
            line: 69,
        );
    }

    #[Depends('testAction33')]
    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 70,
        );
    }

    #[Depends('testAssertReturn34')]
    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => []],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 71,
        );
    }

    #[Depends('testAssertReturn35')]
    public function testAction36(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.store', 'args' => []],
            line: 72,
        );
    }

    #[Depends('testAction36')]
    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2141192192']],
            line: 73,
        );
    }

    #[Depends('testAssertReturn37')]
    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2141192192']],
            line: 74,
        );
    }

    #[Depends('testAssertReturn38')]
    public function testAction39(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'reset', 'args' => []],
            line: 75,
        );
    }

    #[Depends('testAction39')]
    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 76,
        );
    }

    #[Depends('testAssertReturn40')]
    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => []],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 77,
        );
    }

    #[Depends('testAssertReturn41')]
    public function testAction42(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.store', 'args' => []],
            line: 78,
        );
    }

    #[Depends('testAction42')]
    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2141192192']],
            line: 79,
        );
    }

    #[Depends('testAssertReturn43')]
    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2141192192']],
            line: 80,
        );
    }

    #[Depends('testAssertReturn44')]
    public function testModule45(): void
    {
        $this->runModuleCommand(
            filename: 'float_memory.3.wasm',
            name: null,
            line: 82,
        );
    }

    #[Depends('testModule45')]
    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9219994337134247936']],
            line: 92,
        );
    }

    #[Depends('testAssertReturn46')]
    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9219994337134247936']],
            line: 93,
        );
    }

    #[Depends('testAssertReturn47')]
    public function testAction48(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'reset', 'args' => []],
            line: 94,
        );
    }

    #[Depends('testAction48')]
    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => []],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 95,
        );
    }

    #[Depends('testAssertReturn49')]
    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => []],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 96,
        );
    }

    #[Depends('testAssertReturn50')]
    public function testAction51(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => []],
            line: 97,
        );
    }

    #[Depends('testAction51')]
    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9219994337134247936']],
            line: 98,
        );
    }

    #[Depends('testAssertReturn52')]
    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9219994337134247936']],
            line: 99,
        );
    }

    #[Depends('testAssertReturn53')]
    public function testAction54(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'reset', 'args' => []],
            line: 100,
        );
    }

    #[Depends('testAction54')]
    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => []],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 101,
        );
    }

    #[Depends('testAssertReturn55')]
    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => []],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 102,
        );
    }

    #[Depends('testAssertReturn56')]
    public function testAction57(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => []],
            line: 103,
        );
    }

    #[Depends('testAction57')]
    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9219994337134247936']],
            line: 104,
        );
    }

    #[Depends('testAssertReturn58')]
    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9219994337134247936']],
            line: 105,
        );
    }

    #[Depends('testAssertReturn59')]
    public function testModule60(): void
    {
        $this->runModuleCommand(
            filename: 'float_memory.4.wasm',
            name: null,
            line: 109,
        );
    }

    #[Depends('testModule60')]
    public function testAssertReturn61(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2144337921']],
            line: 119,
        );
    }

    #[Depends('testAssertReturn61')]
    public function testAssertReturn62(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2144337921']],
            line: 120,
        );
    }

    #[Depends('testAssertReturn62')]
    public function testAction63(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'reset', 'args' => []],
            line: 121,
        );
    }

    #[Depends('testAction63')]
    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 122,
        );
    }

    #[Depends('testAssertReturn64')]
    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => []],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 123,
        );
    }

    #[Depends('testAssertReturn65')]
    public function testAction66(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.store', 'args' => []],
            line: 124,
        );
    }

    #[Depends('testAction66')]
    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2144337921']],
            line: 125,
        );
    }

    #[Depends('testAssertReturn67')]
    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2144337921']],
            line: 126,
        );
    }

    #[Depends('testAssertReturn68')]
    public function testAction69(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'reset', 'args' => []],
            line: 127,
        );
    }

    #[Depends('testAction69')]
    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 128,
        );
    }

    #[Depends('testAssertReturn70')]
    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => []],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 129,
        );
    }

    #[Depends('testAssertReturn71')]
    public function testAction72(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.store', 'args' => []],
            line: 130,
        );
    }

    #[Depends('testAction72')]
    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2144337921']],
            line: 131,
        );
    }

    #[Depends('testAssertReturn73')]
    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2144337921']],
            line: 132,
        );
    }

    #[Depends('testAssertReturn74')]
    public function testModule75(): void
    {
        $this->runModuleCommand(
            filename: 'float_memory.5.wasm',
            name: null,
            line: 134,
        );
    }

    #[Depends('testModule75')]
    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9222246136947933185']],
            line: 144,
        );
    }

    #[Depends('testAssertReturn76')]
    public function testAssertReturn77(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9222246136947933185']],
            line: 145,
        );
    }

    #[Depends('testAssertReturn77')]
    public function testAction78(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'reset', 'args' => []],
            line: 146,
        );
    }

    #[Depends('testAction78')]
    public function testAssertReturn79(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => []],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 147,
        );
    }

    #[Depends('testAssertReturn79')]
    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => []],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 148,
        );
    }

    #[Depends('testAssertReturn80')]
    public function testAction81(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => []],
            line: 149,
        );
    }

    #[Depends('testAction81')]
    public function testAssertReturn82(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9222246136947933185']],
            line: 150,
        );
    }

    #[Depends('testAssertReturn82')]
    public function testAssertReturn83(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9222246136947933185']],
            line: 151,
        );
    }

    #[Depends('testAssertReturn83')]
    public function testAction84(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'reset', 'args' => []],
            line: 152,
        );
    }

    #[Depends('testAction84')]
    public function testAssertReturn85(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => []],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 153,
        );
    }

    #[Depends('testAssertReturn85')]
    public function testAssertReturn86(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => []],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 154,
        );
    }

    #[Depends('testAssertReturn86')]
    public function testAction87(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => []],
            line: 155,
        );
    }

    #[Depends('testAction87')]
    public function testAssertReturn88(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9222246136947933185']],
            line: 156,
        );
    }

    #[Depends('testAssertReturn88')]
    public function testAssertReturn89(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9222246136947933185']],
            line: 157,
        );
    }
}
