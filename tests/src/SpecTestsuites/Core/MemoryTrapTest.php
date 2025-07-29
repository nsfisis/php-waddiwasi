<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class MemoryTrapTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'memory_trap.0.wasm',
            name: null,
            line: 1,
        );
    }

    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'store', 'args' => [['type' => 'i32', 'value' => '4294967292'], ['type' => 'i32', 'value' => '42']]],
            expected: [],
            line: 21,
        );
    }

    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '4294967292']]],
            expected: [['type' => 'i32', 'value' => '42']],
            line: 22,
        );
    }

    public function testAssertTrap3(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'store', 'args' => [['type' => 'i32', 'value' => '4294967293'], ['type' => 'i32', 'value' => '305419896']]],
            text: 'out of bounds memory access',
            line: 23,
        );
    }

    public function testAssertTrap4(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '4294967293']]],
            text: 'out of bounds memory access',
            line: 24,
        );
    }

    public function testAssertTrap5(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'store', 'args' => [['type' => 'i32', 'value' => '4294967294'], ['type' => 'i32', 'value' => '13']]],
            text: 'out of bounds memory access',
            line: 25,
        );
    }

    public function testAssertTrap6(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '4294967294']]],
            text: 'out of bounds memory access',
            line: 26,
        );
    }

    public function testAssertTrap7(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'store', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '13']]],
            text: 'out of bounds memory access',
            line: 27,
        );
    }

    public function testAssertTrap8(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 28,
        );
    }

    public function testAssertTrap9(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'store', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '13']]],
            text: 'out of bounds memory access',
            line: 29,
        );
    }

    public function testAssertTrap10(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 30,
        );
    }

    public function testAssertTrap11(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'store', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '13']]],
            text: 'out of bounds memory access',
            line: 31,
        );
    }

    public function testAssertTrap12(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '2147483648']]],
            text: 'out of bounds memory access',
            line: 32,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'memory.grow', 'args' => [['type' => 'i32', 'value' => '65537']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 33,
        );
    }

    public function testModule14(): void
    {
        $this->runModuleCommand(
            filename: 'memory_trap.1.wasm',
            name: null,
            line: 35,
        );
    }

    public function testAssertTrap15(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.store', 'args' => [['type' => 'i32', 'value' => '65536'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 111,
        );
    }

    public function testAssertTrap16(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.store', 'args' => [['type' => 'i32', 'value' => '65535'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 112,
        );
    }

    public function testAssertTrap17(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.store', 'args' => [['type' => 'i32', 'value' => '65534'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 113,
        );
    }

    public function testAssertTrap18(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.store', 'args' => [['type' => 'i32', 'value' => '65533'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 114,
        );
    }

    public function testAssertTrap19(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.store', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 115,
        );
    }

    public function testAssertTrap20(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.store', 'args' => [['type' => 'i32', 'value' => '4294967294'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 116,
        );
    }

    public function testAssertTrap21(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.store', 'args' => [['type' => 'i32', 'value' => '4294967293'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 117,
        );
    }

    public function testAssertTrap22(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.store', 'args' => [['type' => 'i32', 'value' => '4294967292'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 118,
        );
    }

    public function testAssertTrap23(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '65536'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 119,
        );
    }

    public function testAssertTrap24(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '65535'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 120,
        );
    }

    public function testAssertTrap25(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '65534'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 121,
        );
    }

    public function testAssertTrap26(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '65533'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 122,
        );
    }

    public function testAssertTrap27(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '65532'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 123,
        );
    }

    public function testAssertTrap28(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '65531'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 124,
        );
    }

    public function testAssertTrap29(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '65530'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 125,
        );
    }

    public function testAssertTrap30(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '65529'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 126,
        );
    }

    public function testAssertTrap31(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 127,
        );
    }

    public function testAssertTrap32(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '4294967294'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 128,
        );
    }

    public function testAssertTrap33(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '4294967293'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 129,
        );
    }

    public function testAssertTrap34(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '4294967292'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 130,
        );
    }

    public function testAssertTrap35(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '4294967291'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 131,
        );
    }

    public function testAssertTrap36(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '4294967290'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 132,
        );
    }

    public function testAssertTrap37(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '4294967289'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 133,
        );
    }

    public function testAssertTrap38(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '4294967288'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 134,
        );
    }

    public function testAssertTrap39(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f32.store', 'args' => [['type' => 'i32', 'value' => '65536'], ['type' => 'f32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 135,
        );
    }

    public function testAssertTrap40(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f32.store', 'args' => [['type' => 'i32', 'value' => '65535'], ['type' => 'f32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 136,
        );
    }

    public function testAssertTrap41(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f32.store', 'args' => [['type' => 'i32', 'value' => '65534'], ['type' => 'f32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 137,
        );
    }

    public function testAssertTrap42(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f32.store', 'args' => [['type' => 'i32', 'value' => '65533'], ['type' => 'f32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 138,
        );
    }

    public function testAssertTrap43(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f32.store', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'f32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 139,
        );
    }

    public function testAssertTrap44(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f32.store', 'args' => [['type' => 'i32', 'value' => '4294967294'], ['type' => 'f32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 140,
        );
    }

    public function testAssertTrap45(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f32.store', 'args' => [['type' => 'i32', 'value' => '4294967293'], ['type' => 'f32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 141,
        );
    }

    public function testAssertTrap46(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f32.store', 'args' => [['type' => 'i32', 'value' => '4294967292'], ['type' => 'f32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 142,
        );
    }

    public function testAssertTrap47(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => [['type' => 'i32', 'value' => '65536'], ['type' => 'f64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 143,
        );
    }

    public function testAssertTrap48(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => [['type' => 'i32', 'value' => '65535'], ['type' => 'f64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 144,
        );
    }

    public function testAssertTrap49(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => [['type' => 'i32', 'value' => '65534'], ['type' => 'f64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 145,
        );
    }

    public function testAssertTrap50(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => [['type' => 'i32', 'value' => '65533'], ['type' => 'f64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 146,
        );
    }

    public function testAssertTrap51(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => [['type' => 'i32', 'value' => '65532'], ['type' => 'f64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 147,
        );
    }

    public function testAssertTrap52(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => [['type' => 'i32', 'value' => '65531'], ['type' => 'f64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 148,
        );
    }

    public function testAssertTrap53(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => [['type' => 'i32', 'value' => '65530'], ['type' => 'f64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 149,
        );
    }

    public function testAssertTrap54(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => [['type' => 'i32', 'value' => '65529'], ['type' => 'f64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 150,
        );
    }

    public function testAssertTrap55(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'f64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 151,
        );
    }

    public function testAssertTrap56(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => [['type' => 'i32', 'value' => '4294967294'], ['type' => 'f64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 152,
        );
    }

    public function testAssertTrap57(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => [['type' => 'i32', 'value' => '4294967293'], ['type' => 'f64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 153,
        );
    }

    public function testAssertTrap58(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => [['type' => 'i32', 'value' => '4294967292'], ['type' => 'f64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 154,
        );
    }

    public function testAssertTrap59(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => [['type' => 'i32', 'value' => '4294967291'], ['type' => 'f64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 155,
        );
    }

    public function testAssertTrap60(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => [['type' => 'i32', 'value' => '4294967290'], ['type' => 'f64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 156,
        );
    }

    public function testAssertTrap61(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => [['type' => 'i32', 'value' => '4294967289'], ['type' => 'f64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 157,
        );
    }

    public function testAssertTrap62(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => [['type' => 'i32', 'value' => '4294967288'], ['type' => 'f64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 158,
        );
    }

    public function testAssertTrap63(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.store8', 'args' => [['type' => 'i32', 'value' => '65536'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 159,
        );
    }

    public function testAssertTrap64(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.store8', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 160,
        );
    }

    public function testAssertTrap65(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.store16', 'args' => [['type' => 'i32', 'value' => '65536'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 161,
        );
    }

    public function testAssertTrap66(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.store16', 'args' => [['type' => 'i32', 'value' => '65535'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 162,
        );
    }

    public function testAssertTrap67(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.store16', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 163,
        );
    }

    public function testAssertTrap68(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.store16', 'args' => [['type' => 'i32', 'value' => '4294967294'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 164,
        );
    }

    public function testAssertTrap69(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store8', 'args' => [['type' => 'i32', 'value' => '65536'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 165,
        );
    }

    public function testAssertTrap70(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store8', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 166,
        );
    }

    public function testAssertTrap71(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store16', 'args' => [['type' => 'i32', 'value' => '65536'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 167,
        );
    }

    public function testAssertTrap72(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store16', 'args' => [['type' => 'i32', 'value' => '65535'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 168,
        );
    }

    public function testAssertTrap73(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store16', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 169,
        );
    }

    public function testAssertTrap74(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store16', 'args' => [['type' => 'i32', 'value' => '4294967294'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 170,
        );
    }

    public function testAssertTrap75(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store32', 'args' => [['type' => 'i32', 'value' => '65536'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 171,
        );
    }

    public function testAssertTrap76(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store32', 'args' => [['type' => 'i32', 'value' => '65535'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 172,
        );
    }

    public function testAssertTrap77(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store32', 'args' => [['type' => 'i32', 'value' => '65534'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 173,
        );
    }

    public function testAssertTrap78(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store32', 'args' => [['type' => 'i32', 'value' => '65533'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 174,
        );
    }

    public function testAssertTrap79(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store32', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 175,
        );
    }

    public function testAssertTrap80(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store32', 'args' => [['type' => 'i32', 'value' => '4294967294'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 176,
        );
    }

    public function testAssertTrap81(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store32', 'args' => [['type' => 'i32', 'value' => '4294967293'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 177,
        );
    }

    public function testAssertTrap82(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store32', 'args' => [['type' => 'i32', 'value' => '4294967292'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 178,
        );
    }

    public function testAssertTrap83(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 179,
        );
    }

    public function testAssertTrap84(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => [['type' => 'i32', 'value' => '65535']]],
            text: 'out of bounds memory access',
            line: 180,
        );
    }

    public function testAssertTrap85(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => [['type' => 'i32', 'value' => '65534']]],
            text: 'out of bounds memory access',
            line: 181,
        );
    }

    public function testAssertTrap86(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => [['type' => 'i32', 'value' => '65533']]],
            text: 'out of bounds memory access',
            line: 182,
        );
    }

    public function testAssertTrap87(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 183,
        );
    }

    public function testAssertTrap88(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => [['type' => 'i32', 'value' => '4294967294']]],
            text: 'out of bounds memory access',
            line: 184,
        );
    }

    public function testAssertTrap89(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => [['type' => 'i32', 'value' => '4294967293']]],
            text: 'out of bounds memory access',
            line: 185,
        );
    }

    public function testAssertTrap90(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => [['type' => 'i32', 'value' => '4294967292']]],
            text: 'out of bounds memory access',
            line: 186,
        );
    }

    public function testAssertTrap91(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 187,
        );
    }

    public function testAssertTrap92(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '65535']]],
            text: 'out of bounds memory access',
            line: 188,
        );
    }

    public function testAssertTrap93(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '65534']]],
            text: 'out of bounds memory access',
            line: 189,
        );
    }

    public function testAssertTrap94(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '65533']]],
            text: 'out of bounds memory access',
            line: 190,
        );
    }

    public function testAssertTrap95(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '65532']]],
            text: 'out of bounds memory access',
            line: 191,
        );
    }

    public function testAssertTrap96(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '65531']]],
            text: 'out of bounds memory access',
            line: 192,
        );
    }

    public function testAssertTrap97(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '65530']]],
            text: 'out of bounds memory access',
            line: 193,
        );
    }

    public function testAssertTrap98(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '65529']]],
            text: 'out of bounds memory access',
            line: 194,
        );
    }

    public function testAssertTrap99(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 195,
        );
    }

    public function testAssertTrap100(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '4294967294']]],
            text: 'out of bounds memory access',
            line: 196,
        );
    }

    public function testAssertTrap101(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '4294967293']]],
            text: 'out of bounds memory access',
            line: 197,
        );
    }

    public function testAssertTrap102(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '4294967292']]],
            text: 'out of bounds memory access',
            line: 198,
        );
    }

    public function testAssertTrap103(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '4294967291']]],
            text: 'out of bounds memory access',
            line: 199,
        );
    }

    public function testAssertTrap104(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '4294967290']]],
            text: 'out of bounds memory access',
            line: 200,
        );
    }

    public function testAssertTrap105(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '4294967289']]],
            text: 'out of bounds memory access',
            line: 201,
        );
    }

    public function testAssertTrap106(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '4294967288']]],
            text: 'out of bounds memory access',
            line: 202,
        );
    }

    public function testAssertTrap107(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 203,
        );
    }

    public function testAssertTrap108(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => [['type' => 'i32', 'value' => '65535']]],
            text: 'out of bounds memory access',
            line: 204,
        );
    }

    public function testAssertTrap109(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => [['type' => 'i32', 'value' => '65534']]],
            text: 'out of bounds memory access',
            line: 205,
        );
    }

    public function testAssertTrap110(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => [['type' => 'i32', 'value' => '65533']]],
            text: 'out of bounds memory access',
            line: 206,
        );
    }

    public function testAssertTrap111(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 207,
        );
    }

    public function testAssertTrap112(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => [['type' => 'i32', 'value' => '4294967294']]],
            text: 'out of bounds memory access',
            line: 208,
        );
    }

    public function testAssertTrap113(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => [['type' => 'i32', 'value' => '4294967293']]],
            text: 'out of bounds memory access',
            line: 209,
        );
    }

    public function testAssertTrap114(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => [['type' => 'i32', 'value' => '4294967292']]],
            text: 'out of bounds memory access',
            line: 210,
        );
    }

    public function testAssertTrap115(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 211,
        );
    }

    public function testAssertTrap116(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '65535']]],
            text: 'out of bounds memory access',
            line: 212,
        );
    }

    public function testAssertTrap117(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '65534']]],
            text: 'out of bounds memory access',
            line: 213,
        );
    }

    public function testAssertTrap118(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '65533']]],
            text: 'out of bounds memory access',
            line: 214,
        );
    }

    public function testAssertTrap119(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '65532']]],
            text: 'out of bounds memory access',
            line: 215,
        );
    }

    public function testAssertTrap120(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '65531']]],
            text: 'out of bounds memory access',
            line: 216,
        );
    }

    public function testAssertTrap121(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '65530']]],
            text: 'out of bounds memory access',
            line: 217,
        );
    }

    public function testAssertTrap122(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '65529']]],
            text: 'out of bounds memory access',
            line: 218,
        );
    }

    public function testAssertTrap123(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 219,
        );
    }

    public function testAssertTrap124(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '4294967294']]],
            text: 'out of bounds memory access',
            line: 220,
        );
    }

    public function testAssertTrap125(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '4294967293']]],
            text: 'out of bounds memory access',
            line: 221,
        );
    }

    public function testAssertTrap126(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '4294967292']]],
            text: 'out of bounds memory access',
            line: 222,
        );
    }

    public function testAssertTrap127(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '4294967291']]],
            text: 'out of bounds memory access',
            line: 223,
        );
    }

    public function testAssertTrap128(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '4294967290']]],
            text: 'out of bounds memory access',
            line: 224,
        );
    }

    public function testAssertTrap129(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '4294967289']]],
            text: 'out of bounds memory access',
            line: 225,
        );
    }

    public function testAssertTrap130(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '4294967288']]],
            text: 'out of bounds memory access',
            line: 226,
        );
    }

    public function testAssertTrap131(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load8_s', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 227,
        );
    }

    public function testAssertTrap132(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load8_s', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 228,
        );
    }

    public function testAssertTrap133(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load8_u', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 229,
        );
    }

    public function testAssertTrap134(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load8_u', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 230,
        );
    }

    public function testAssertTrap135(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load16_s', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 231,
        );
    }

    public function testAssertTrap136(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load16_s', 'args' => [['type' => 'i32', 'value' => '65535']]],
            text: 'out of bounds memory access',
            line: 232,
        );
    }

    public function testAssertTrap137(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load16_s', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 233,
        );
    }

    public function testAssertTrap138(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load16_s', 'args' => [['type' => 'i32', 'value' => '4294967294']]],
            text: 'out of bounds memory access',
            line: 234,
        );
    }

    public function testAssertTrap139(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load16_u', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 235,
        );
    }

    public function testAssertTrap140(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load16_u', 'args' => [['type' => 'i32', 'value' => '65535']]],
            text: 'out of bounds memory access',
            line: 236,
        );
    }

    public function testAssertTrap141(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load16_u', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 237,
        );
    }

    public function testAssertTrap142(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load16_u', 'args' => [['type' => 'i32', 'value' => '4294967294']]],
            text: 'out of bounds memory access',
            line: 238,
        );
    }

    public function testAssertTrap143(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load8_s', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 239,
        );
    }

    public function testAssertTrap144(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load8_s', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 240,
        );
    }

    public function testAssertTrap145(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load8_u', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 241,
        );
    }

    public function testAssertTrap146(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load8_u', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 242,
        );
    }

    public function testAssertTrap147(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load16_s', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 243,
        );
    }

    public function testAssertTrap148(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load16_s', 'args' => [['type' => 'i32', 'value' => '65535']]],
            text: 'out of bounds memory access',
            line: 244,
        );
    }

    public function testAssertTrap149(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load16_s', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 245,
        );
    }

    public function testAssertTrap150(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load16_s', 'args' => [['type' => 'i32', 'value' => '4294967294']]],
            text: 'out of bounds memory access',
            line: 246,
        );
    }

    public function testAssertTrap151(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load16_u', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 247,
        );
    }

    public function testAssertTrap152(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load16_u', 'args' => [['type' => 'i32', 'value' => '65535']]],
            text: 'out of bounds memory access',
            line: 248,
        );
    }

    public function testAssertTrap153(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load16_u', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 249,
        );
    }

    public function testAssertTrap154(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load16_u', 'args' => [['type' => 'i32', 'value' => '4294967294']]],
            text: 'out of bounds memory access',
            line: 250,
        );
    }

    public function testAssertTrap155(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load32_s', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 251,
        );
    }

    public function testAssertTrap156(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load32_s', 'args' => [['type' => 'i32', 'value' => '65535']]],
            text: 'out of bounds memory access',
            line: 252,
        );
    }

    public function testAssertTrap157(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load32_s', 'args' => [['type' => 'i32', 'value' => '65534']]],
            text: 'out of bounds memory access',
            line: 253,
        );
    }

    public function testAssertTrap158(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load32_s', 'args' => [['type' => 'i32', 'value' => '65533']]],
            text: 'out of bounds memory access',
            line: 254,
        );
    }

    public function testAssertTrap159(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load32_s', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 255,
        );
    }

    public function testAssertTrap160(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load32_s', 'args' => [['type' => 'i32', 'value' => '4294967294']]],
            text: 'out of bounds memory access',
            line: 256,
        );
    }

    public function testAssertTrap161(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load32_s', 'args' => [['type' => 'i32', 'value' => '4294967293']]],
            text: 'out of bounds memory access',
            line: 257,
        );
    }

    public function testAssertTrap162(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load32_s', 'args' => [['type' => 'i32', 'value' => '4294967292']]],
            text: 'out of bounds memory access',
            line: 258,
        );
    }

    public function testAssertTrap163(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load32_u', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 259,
        );
    }

    public function testAssertTrap164(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load32_u', 'args' => [['type' => 'i32', 'value' => '65535']]],
            text: 'out of bounds memory access',
            line: 260,
        );
    }

    public function testAssertTrap165(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load32_u', 'args' => [['type' => 'i32', 'value' => '65534']]],
            text: 'out of bounds memory access',
            line: 261,
        );
    }

    public function testAssertTrap166(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load32_u', 'args' => [['type' => 'i32', 'value' => '65533']]],
            text: 'out of bounds memory access',
            line: 262,
        );
    }

    public function testAssertTrap167(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load32_u', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 263,
        );
    }

    public function testAssertTrap168(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load32_u', 'args' => [['type' => 'i32', 'value' => '4294967294']]],
            text: 'out of bounds memory access',
            line: 264,
        );
    }

    public function testAssertTrap169(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load32_u', 'args' => [['type' => 'i32', 'value' => '4294967293']]],
            text: 'out of bounds memory access',
            line: 265,
        );
    }

    public function testAssertTrap170(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load32_u', 'args' => [['type' => 'i32', 'value' => '4294967292']]],
            text: 'out of bounds memory access',
            line: 266,
        );
    }

    public function testAssertReturn171(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '65528']]],
            expected: [['type' => 'i64', 'value' => '7523094288207667809']],
            line: 269,
        );
    }

    public function testAssertReturn172(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '7523094288207667809']],
            line: 270,
        );
    }

    public function testAssertReturn173(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '65528'], ['type' => 'i64', 'value' => '0']]],
            expected: [],
            line: 274,
        );
    }

    public function testAssertTrap174(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.store', 'args' => [['type' => 'i32', 'value' => '65533'], ['type' => 'i32', 'value' => '305419896']]],
            text: 'out of bounds memory access',
            line: 275,
        );
    }

    public function testAssertReturn175(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => [['type' => 'i32', 'value' => '65532']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 276,
        );
    }

    public function testAssertTrap176(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '65529'], ['type' => 'i64', 'value' => '1311768467294899695']]],
            text: 'out of bounds memory access',
            line: 277,
        );
    }

    public function testAssertReturn177(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '65528']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 278,
        );
    }

    public function testAssertTrap178(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f32.store', 'args' => [['type' => 'i32', 'value' => '65533'], ['type' => 'f32', 'value' => '1301390004']]],
            text: 'out of bounds memory access',
            line: 279,
        );
    }

    public function testAssertReturn179(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => [['type' => 'i32', 'value' => '65532']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 280,
        );
    }

    public function testAssertTrap180(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => [['type' => 'i32', 'value' => '65529'], ['type' => 'f64', 'value' => '4878018892390247374']]],
            text: 'out of bounds memory access',
            line: 281,
        );
    }

    public function testAssertReturn181(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '65528']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 282,
        );
    }
}
