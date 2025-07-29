<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
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

    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2141192192']],
            line: 15,
        );
    }

    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2141192192']],
            line: 16,
        );
    }

    public function testAction3(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'reset', 'args' => []],
            line: 17,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 18,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => []],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 19,
        );
    }

    public function testAction6(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'f32.store', 'args' => []],
            line: 20,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2141192192']],
            line: 21,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2141192192']],
            line: 22,
        );
    }

    public function testAction9(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'reset', 'args' => []],
            line: 23,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 24,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => []],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 25,
        );
    }

    public function testAction12(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'i32.store', 'args' => []],
            line: 26,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2141192192']],
            line: 27,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2141192192']],
            line: 28,
        );
    }

    public function testModule15(): void
    {
        $this->runModuleCommand(
            filename: 'float_memory.1.wasm',
            name: null,
            line: 30,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9219994337134247936']],
            line: 40,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9219994337134247936']],
            line: 41,
        );
    }

    public function testAction18(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'reset', 'args' => []],
            line: 42,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => []],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 43,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => []],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 44,
        );
    }

    public function testAction21(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => []],
            line: 45,
        );
    }

    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9219994337134247936']],
            line: 46,
        );
    }

    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9219994337134247936']],
            line: 47,
        );
    }

    public function testAction24(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'reset', 'args' => []],
            line: 48,
        );
    }

    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => []],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 49,
        );
    }

    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => []],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 50,
        );
    }

    public function testAction27(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => []],
            line: 51,
        );
    }

    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9219994337134247936']],
            line: 52,
        );
    }

    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9219994337134247936']],
            line: 53,
        );
    }

    public function testModule30(): void
    {
        $this->runModuleCommand(
            filename: 'float_memory.2.wasm',
            name: null,
            line: 57,
        );
    }

    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2141192192']],
            line: 67,
        );
    }

    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2141192192']],
            line: 68,
        );
    }

    public function testAction33(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'reset', 'args' => []],
            line: 69,
        );
    }

    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 70,
        );
    }

    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => []],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 71,
        );
    }

    public function testAction36(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'f32.store', 'args' => []],
            line: 72,
        );
    }

    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2141192192']],
            line: 73,
        );
    }

    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2141192192']],
            line: 74,
        );
    }

    public function testAction39(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'reset', 'args' => []],
            line: 75,
        );
    }

    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 76,
        );
    }

    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => []],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 77,
        );
    }

    public function testAction42(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'i32.store', 'args' => []],
            line: 78,
        );
    }

    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2141192192']],
            line: 79,
        );
    }

    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2141192192']],
            line: 80,
        );
    }

    public function testModule45(): void
    {
        $this->runModuleCommand(
            filename: 'float_memory.3.wasm',
            name: null,
            line: 82,
        );
    }

    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9219994337134247936']],
            line: 92,
        );
    }

    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9219994337134247936']],
            line: 93,
        );
    }

    public function testAction48(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'reset', 'args' => []],
            line: 94,
        );
    }

    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => []],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 95,
        );
    }

    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => []],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 96,
        );
    }

    public function testAction51(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => []],
            line: 97,
        );
    }

    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9219994337134247936']],
            line: 98,
        );
    }

    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9219994337134247936']],
            line: 99,
        );
    }

    public function testAction54(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'reset', 'args' => []],
            line: 100,
        );
    }

    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => []],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 101,
        );
    }

    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => []],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 102,
        );
    }

    public function testAction57(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => []],
            line: 103,
        );
    }

    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9219994337134247936']],
            line: 104,
        );
    }

    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9219994337134247936']],
            line: 105,
        );
    }

    public function testModule60(): void
    {
        $this->runModuleCommand(
            filename: 'float_memory.4.wasm',
            name: null,
            line: 109,
        );
    }

    public function testAssertReturn61(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2144337921']],
            line: 119,
        );
    }

    public function testAssertReturn62(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2144337921']],
            line: 120,
        );
    }

    public function testAction63(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'reset', 'args' => []],
            line: 121,
        );
    }

    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 122,
        );
    }

    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => []],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 123,
        );
    }

    public function testAction66(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'f32.store', 'args' => []],
            line: 124,
        );
    }

    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2144337921']],
            line: 125,
        );
    }

    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2144337921']],
            line: 126,
        );
    }

    public function testAction69(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'reset', 'args' => []],
            line: 127,
        );
    }

    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 128,
        );
    }

    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => []],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 129,
        );
    }

    public function testAction72(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'i32.store', 'args' => []],
            line: 130,
        );
    }

    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2144337921']],
            line: 131,
        );
    }

    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2144337921']],
            line: 132,
        );
    }

    public function testModule75(): void
    {
        $this->runModuleCommand(
            filename: 'float_memory.5.wasm',
            name: null,
            line: 134,
        );
    }

    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9222246136947933185']],
            line: 144,
        );
    }

    public function testAssertReturn77(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9222246136947933185']],
            line: 145,
        );
    }

    public function testAction78(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'reset', 'args' => []],
            line: 146,
        );
    }

    public function testAssertReturn79(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => []],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 147,
        );
    }

    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => []],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 148,
        );
    }

    public function testAction81(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => []],
            line: 149,
        );
    }

    public function testAssertReturn82(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9222246136947933185']],
            line: 150,
        );
    }

    public function testAssertReturn83(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9222246136947933185']],
            line: 151,
        );
    }

    public function testAction84(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'reset', 'args' => []],
            line: 152,
        );
    }

    public function testAssertReturn85(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => []],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 153,
        );
    }

    public function testAssertReturn86(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => []],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 154,
        );
    }

    public function testAction87(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => []],
            line: 155,
        );
    }

    public function testAssertReturn88(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9222246136947933185']],
            line: 156,
        );
    }

    public function testAssertReturn89(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9222246136947933185']],
            line: 157,
        );
    }
}
