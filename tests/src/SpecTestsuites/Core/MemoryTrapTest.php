<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
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

    #[Depends('testModule0')]
    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'store', 'args' => [['type' => 'i32', 'value' => '4294967292'], ['type' => 'i32', 'value' => '42']]],
            expected: [],
            line: 21,
        );
    }

    #[Depends('testAssertReturn1')]
    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '4294967292']]],
            expected: [['type' => 'i32', 'value' => '42']],
            line: 22,
        );
    }

    #[Depends('testAssertReturn2')]
    public function testAssertTrap3(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'store', 'args' => [['type' => 'i32', 'value' => '4294967293'], ['type' => 'i32', 'value' => '305419896']]],
            text: 'out of bounds memory access',
            line: 23,
        );
    }

    #[Depends('testAssertTrap3')]
    public function testAssertTrap4(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '4294967293']]],
            text: 'out of bounds memory access',
            line: 24,
        );
    }

    #[Depends('testAssertTrap4')]
    public function testAssertTrap5(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'store', 'args' => [['type' => 'i32', 'value' => '4294967294'], ['type' => 'i32', 'value' => '13']]],
            text: 'out of bounds memory access',
            line: 25,
        );
    }

    #[Depends('testAssertTrap5')]
    public function testAssertTrap6(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '4294967294']]],
            text: 'out of bounds memory access',
            line: 26,
        );
    }

    #[Depends('testAssertTrap6')]
    public function testAssertTrap7(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'store', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '13']]],
            text: 'out of bounds memory access',
            line: 27,
        );
    }

    #[Depends('testAssertTrap7')]
    public function testAssertTrap8(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 28,
        );
    }

    #[Depends('testAssertTrap8')]
    public function testAssertTrap9(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'store', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '13']]],
            text: 'out of bounds memory access',
            line: 29,
        );
    }

    #[Depends('testAssertTrap9')]
    public function testAssertTrap10(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 30,
        );
    }

    #[Depends('testAssertTrap10')]
    public function testAssertTrap11(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'store', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '13']]],
            text: 'out of bounds memory access',
            line: 31,
        );
    }

    #[Depends('testAssertTrap11')]
    public function testAssertTrap12(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '2147483648']]],
            text: 'out of bounds memory access',
            line: 32,
        );
    }

    #[Depends('testAssertTrap12')]
    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'memory.grow', 'args' => [['type' => 'i32', 'value' => '65537']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 33,
        );
    }

    #[Depends('testAssertReturn13')]
    public function testModule14(): void
    {
        $this->runModuleCommand(
            filename: 'memory_trap.1.wasm',
            name: null,
            line: 35,
        );
    }

    #[Depends('testModule14')]
    public function testAssertTrap15(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.store', 'args' => [['type' => 'i32', 'value' => '65536'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 111,
        );
    }

    #[Depends('testAssertTrap15')]
    public function testAssertTrap16(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.store', 'args' => [['type' => 'i32', 'value' => '65535'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 112,
        );
    }

    #[Depends('testAssertTrap16')]
    public function testAssertTrap17(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.store', 'args' => [['type' => 'i32', 'value' => '65534'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 113,
        );
    }

    #[Depends('testAssertTrap17')]
    public function testAssertTrap18(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.store', 'args' => [['type' => 'i32', 'value' => '65533'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 114,
        );
    }

    #[Depends('testAssertTrap18')]
    public function testAssertTrap19(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.store', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 115,
        );
    }

    #[Depends('testAssertTrap19')]
    public function testAssertTrap20(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.store', 'args' => [['type' => 'i32', 'value' => '4294967294'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 116,
        );
    }

    #[Depends('testAssertTrap20')]
    public function testAssertTrap21(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.store', 'args' => [['type' => 'i32', 'value' => '4294967293'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 117,
        );
    }

    #[Depends('testAssertTrap21')]
    public function testAssertTrap22(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.store', 'args' => [['type' => 'i32', 'value' => '4294967292'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 118,
        );
    }

    #[Depends('testAssertTrap22')]
    public function testAssertTrap23(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '65536'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 119,
        );
    }

    #[Depends('testAssertTrap23')]
    public function testAssertTrap24(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '65535'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 120,
        );
    }

    #[Depends('testAssertTrap24')]
    public function testAssertTrap25(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '65534'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 121,
        );
    }

    #[Depends('testAssertTrap25')]
    public function testAssertTrap26(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '65533'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 122,
        );
    }

    #[Depends('testAssertTrap26')]
    public function testAssertTrap27(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '65532'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 123,
        );
    }

    #[Depends('testAssertTrap27')]
    public function testAssertTrap28(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '65531'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 124,
        );
    }

    #[Depends('testAssertTrap28')]
    public function testAssertTrap29(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '65530'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 125,
        );
    }

    #[Depends('testAssertTrap29')]
    public function testAssertTrap30(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '65529'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 126,
        );
    }

    #[Depends('testAssertTrap30')]
    public function testAssertTrap31(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 127,
        );
    }

    #[Depends('testAssertTrap31')]
    public function testAssertTrap32(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '4294967294'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 128,
        );
    }

    #[Depends('testAssertTrap32')]
    public function testAssertTrap33(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '4294967293'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 129,
        );
    }

    #[Depends('testAssertTrap33')]
    public function testAssertTrap34(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '4294967292'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 130,
        );
    }

    #[Depends('testAssertTrap34')]
    public function testAssertTrap35(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '4294967291'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 131,
        );
    }

    #[Depends('testAssertTrap35')]
    public function testAssertTrap36(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '4294967290'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 132,
        );
    }

    #[Depends('testAssertTrap36')]
    public function testAssertTrap37(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '4294967289'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 133,
        );
    }

    #[Depends('testAssertTrap37')]
    public function testAssertTrap38(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '4294967288'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 134,
        );
    }

    #[Depends('testAssertTrap38')]
    public function testAssertTrap39(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f32.store', 'args' => [['type' => 'i32', 'value' => '65536'], ['type' => 'f32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 135,
        );
    }

    #[Depends('testAssertTrap39')]
    public function testAssertTrap40(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f32.store', 'args' => [['type' => 'i32', 'value' => '65535'], ['type' => 'f32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 136,
        );
    }

    #[Depends('testAssertTrap40')]
    public function testAssertTrap41(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f32.store', 'args' => [['type' => 'i32', 'value' => '65534'], ['type' => 'f32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 137,
        );
    }

    #[Depends('testAssertTrap41')]
    public function testAssertTrap42(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f32.store', 'args' => [['type' => 'i32', 'value' => '65533'], ['type' => 'f32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 138,
        );
    }

    #[Depends('testAssertTrap42')]
    public function testAssertTrap43(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f32.store', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'f32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 139,
        );
    }

    #[Depends('testAssertTrap43')]
    public function testAssertTrap44(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f32.store', 'args' => [['type' => 'i32', 'value' => '4294967294'], ['type' => 'f32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 140,
        );
    }

    #[Depends('testAssertTrap44')]
    public function testAssertTrap45(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f32.store', 'args' => [['type' => 'i32', 'value' => '4294967293'], ['type' => 'f32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 141,
        );
    }

    #[Depends('testAssertTrap45')]
    public function testAssertTrap46(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f32.store', 'args' => [['type' => 'i32', 'value' => '4294967292'], ['type' => 'f32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 142,
        );
    }

    #[Depends('testAssertTrap46')]
    public function testAssertTrap47(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => [['type' => 'i32', 'value' => '65536'], ['type' => 'f64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 143,
        );
    }

    #[Depends('testAssertTrap47')]
    public function testAssertTrap48(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => [['type' => 'i32', 'value' => '65535'], ['type' => 'f64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 144,
        );
    }

    #[Depends('testAssertTrap48')]
    public function testAssertTrap49(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => [['type' => 'i32', 'value' => '65534'], ['type' => 'f64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 145,
        );
    }

    #[Depends('testAssertTrap49')]
    public function testAssertTrap50(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => [['type' => 'i32', 'value' => '65533'], ['type' => 'f64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 146,
        );
    }

    #[Depends('testAssertTrap50')]
    public function testAssertTrap51(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => [['type' => 'i32', 'value' => '65532'], ['type' => 'f64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 147,
        );
    }

    #[Depends('testAssertTrap51')]
    public function testAssertTrap52(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => [['type' => 'i32', 'value' => '65531'], ['type' => 'f64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 148,
        );
    }

    #[Depends('testAssertTrap52')]
    public function testAssertTrap53(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => [['type' => 'i32', 'value' => '65530'], ['type' => 'f64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 149,
        );
    }

    #[Depends('testAssertTrap53')]
    public function testAssertTrap54(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => [['type' => 'i32', 'value' => '65529'], ['type' => 'f64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 150,
        );
    }

    #[Depends('testAssertTrap54')]
    public function testAssertTrap55(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'f64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 151,
        );
    }

    #[Depends('testAssertTrap55')]
    public function testAssertTrap56(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => [['type' => 'i32', 'value' => '4294967294'], ['type' => 'f64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 152,
        );
    }

    #[Depends('testAssertTrap56')]
    public function testAssertTrap57(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => [['type' => 'i32', 'value' => '4294967293'], ['type' => 'f64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 153,
        );
    }

    #[Depends('testAssertTrap57')]
    public function testAssertTrap58(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => [['type' => 'i32', 'value' => '4294967292'], ['type' => 'f64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 154,
        );
    }

    #[Depends('testAssertTrap58')]
    public function testAssertTrap59(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => [['type' => 'i32', 'value' => '4294967291'], ['type' => 'f64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 155,
        );
    }

    #[Depends('testAssertTrap59')]
    public function testAssertTrap60(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => [['type' => 'i32', 'value' => '4294967290'], ['type' => 'f64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 156,
        );
    }

    #[Depends('testAssertTrap60')]
    public function testAssertTrap61(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => [['type' => 'i32', 'value' => '4294967289'], ['type' => 'f64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 157,
        );
    }

    #[Depends('testAssertTrap61')]
    public function testAssertTrap62(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => [['type' => 'i32', 'value' => '4294967288'], ['type' => 'f64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 158,
        );
    }

    #[Depends('testAssertTrap62')]
    public function testAssertTrap63(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.store8', 'args' => [['type' => 'i32', 'value' => '65536'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 159,
        );
    }

    #[Depends('testAssertTrap63')]
    public function testAssertTrap64(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.store8', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 160,
        );
    }

    #[Depends('testAssertTrap64')]
    public function testAssertTrap65(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.store16', 'args' => [['type' => 'i32', 'value' => '65536'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 161,
        );
    }

    #[Depends('testAssertTrap65')]
    public function testAssertTrap66(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.store16', 'args' => [['type' => 'i32', 'value' => '65535'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 162,
        );
    }

    #[Depends('testAssertTrap66')]
    public function testAssertTrap67(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.store16', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 163,
        );
    }

    #[Depends('testAssertTrap67')]
    public function testAssertTrap68(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.store16', 'args' => [['type' => 'i32', 'value' => '4294967294'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 164,
        );
    }

    #[Depends('testAssertTrap68')]
    public function testAssertTrap69(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store8', 'args' => [['type' => 'i32', 'value' => '65536'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 165,
        );
    }

    #[Depends('testAssertTrap69')]
    public function testAssertTrap70(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store8', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 166,
        );
    }

    #[Depends('testAssertTrap70')]
    public function testAssertTrap71(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store16', 'args' => [['type' => 'i32', 'value' => '65536'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 167,
        );
    }

    #[Depends('testAssertTrap71')]
    public function testAssertTrap72(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store16', 'args' => [['type' => 'i32', 'value' => '65535'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 168,
        );
    }

    #[Depends('testAssertTrap72')]
    public function testAssertTrap73(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store16', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 169,
        );
    }

    #[Depends('testAssertTrap73')]
    public function testAssertTrap74(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store16', 'args' => [['type' => 'i32', 'value' => '4294967294'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 170,
        );
    }

    #[Depends('testAssertTrap74')]
    public function testAssertTrap75(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store32', 'args' => [['type' => 'i32', 'value' => '65536'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 171,
        );
    }

    #[Depends('testAssertTrap75')]
    public function testAssertTrap76(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store32', 'args' => [['type' => 'i32', 'value' => '65535'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 172,
        );
    }

    #[Depends('testAssertTrap76')]
    public function testAssertTrap77(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store32', 'args' => [['type' => 'i32', 'value' => '65534'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 173,
        );
    }

    #[Depends('testAssertTrap77')]
    public function testAssertTrap78(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store32', 'args' => [['type' => 'i32', 'value' => '65533'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 174,
        );
    }

    #[Depends('testAssertTrap78')]
    public function testAssertTrap79(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store32', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 175,
        );
    }

    #[Depends('testAssertTrap79')]
    public function testAssertTrap80(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store32', 'args' => [['type' => 'i32', 'value' => '4294967294'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 176,
        );
    }

    #[Depends('testAssertTrap80')]
    public function testAssertTrap81(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store32', 'args' => [['type' => 'i32', 'value' => '4294967293'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 177,
        );
    }

    #[Depends('testAssertTrap81')]
    public function testAssertTrap82(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store32', 'args' => [['type' => 'i32', 'value' => '4294967292'], ['type' => 'i64', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 178,
        );
    }

    #[Depends('testAssertTrap82')]
    public function testAssertTrap83(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 179,
        );
    }

    #[Depends('testAssertTrap83')]
    public function testAssertTrap84(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => [['type' => 'i32', 'value' => '65535']]],
            text: 'out of bounds memory access',
            line: 180,
        );
    }

    #[Depends('testAssertTrap84')]
    public function testAssertTrap85(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => [['type' => 'i32', 'value' => '65534']]],
            text: 'out of bounds memory access',
            line: 181,
        );
    }

    #[Depends('testAssertTrap85')]
    public function testAssertTrap86(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => [['type' => 'i32', 'value' => '65533']]],
            text: 'out of bounds memory access',
            line: 182,
        );
    }

    #[Depends('testAssertTrap86')]
    public function testAssertTrap87(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 183,
        );
    }

    #[Depends('testAssertTrap87')]
    public function testAssertTrap88(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => [['type' => 'i32', 'value' => '4294967294']]],
            text: 'out of bounds memory access',
            line: 184,
        );
    }

    #[Depends('testAssertTrap88')]
    public function testAssertTrap89(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => [['type' => 'i32', 'value' => '4294967293']]],
            text: 'out of bounds memory access',
            line: 185,
        );
    }

    #[Depends('testAssertTrap89')]
    public function testAssertTrap90(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => [['type' => 'i32', 'value' => '4294967292']]],
            text: 'out of bounds memory access',
            line: 186,
        );
    }

    #[Depends('testAssertTrap90')]
    public function testAssertTrap91(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 187,
        );
    }

    #[Depends('testAssertTrap91')]
    public function testAssertTrap92(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '65535']]],
            text: 'out of bounds memory access',
            line: 188,
        );
    }

    #[Depends('testAssertTrap92')]
    public function testAssertTrap93(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '65534']]],
            text: 'out of bounds memory access',
            line: 189,
        );
    }

    #[Depends('testAssertTrap93')]
    public function testAssertTrap94(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '65533']]],
            text: 'out of bounds memory access',
            line: 190,
        );
    }

    #[Depends('testAssertTrap94')]
    public function testAssertTrap95(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '65532']]],
            text: 'out of bounds memory access',
            line: 191,
        );
    }

    #[Depends('testAssertTrap95')]
    public function testAssertTrap96(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '65531']]],
            text: 'out of bounds memory access',
            line: 192,
        );
    }

    #[Depends('testAssertTrap96')]
    public function testAssertTrap97(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '65530']]],
            text: 'out of bounds memory access',
            line: 193,
        );
    }

    #[Depends('testAssertTrap97')]
    public function testAssertTrap98(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '65529']]],
            text: 'out of bounds memory access',
            line: 194,
        );
    }

    #[Depends('testAssertTrap98')]
    public function testAssertTrap99(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 195,
        );
    }

    #[Depends('testAssertTrap99')]
    public function testAssertTrap100(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '4294967294']]],
            text: 'out of bounds memory access',
            line: 196,
        );
    }

    #[Depends('testAssertTrap100')]
    public function testAssertTrap101(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '4294967293']]],
            text: 'out of bounds memory access',
            line: 197,
        );
    }

    #[Depends('testAssertTrap101')]
    public function testAssertTrap102(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '4294967292']]],
            text: 'out of bounds memory access',
            line: 198,
        );
    }

    #[Depends('testAssertTrap102')]
    public function testAssertTrap103(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '4294967291']]],
            text: 'out of bounds memory access',
            line: 199,
        );
    }

    #[Depends('testAssertTrap103')]
    public function testAssertTrap104(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '4294967290']]],
            text: 'out of bounds memory access',
            line: 200,
        );
    }

    #[Depends('testAssertTrap104')]
    public function testAssertTrap105(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '4294967289']]],
            text: 'out of bounds memory access',
            line: 201,
        );
    }

    #[Depends('testAssertTrap105')]
    public function testAssertTrap106(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '4294967288']]],
            text: 'out of bounds memory access',
            line: 202,
        );
    }

    #[Depends('testAssertTrap106')]
    public function testAssertTrap107(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 203,
        );
    }

    #[Depends('testAssertTrap107')]
    public function testAssertTrap108(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => [['type' => 'i32', 'value' => '65535']]],
            text: 'out of bounds memory access',
            line: 204,
        );
    }

    #[Depends('testAssertTrap108')]
    public function testAssertTrap109(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => [['type' => 'i32', 'value' => '65534']]],
            text: 'out of bounds memory access',
            line: 205,
        );
    }

    #[Depends('testAssertTrap109')]
    public function testAssertTrap110(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => [['type' => 'i32', 'value' => '65533']]],
            text: 'out of bounds memory access',
            line: 206,
        );
    }

    #[Depends('testAssertTrap110')]
    public function testAssertTrap111(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 207,
        );
    }

    #[Depends('testAssertTrap111')]
    public function testAssertTrap112(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => [['type' => 'i32', 'value' => '4294967294']]],
            text: 'out of bounds memory access',
            line: 208,
        );
    }

    #[Depends('testAssertTrap112')]
    public function testAssertTrap113(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => [['type' => 'i32', 'value' => '4294967293']]],
            text: 'out of bounds memory access',
            line: 209,
        );
    }

    #[Depends('testAssertTrap113')]
    public function testAssertTrap114(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => [['type' => 'i32', 'value' => '4294967292']]],
            text: 'out of bounds memory access',
            line: 210,
        );
    }

    #[Depends('testAssertTrap114')]
    public function testAssertTrap115(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 211,
        );
    }

    #[Depends('testAssertTrap115')]
    public function testAssertTrap116(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '65535']]],
            text: 'out of bounds memory access',
            line: 212,
        );
    }

    #[Depends('testAssertTrap116')]
    public function testAssertTrap117(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '65534']]],
            text: 'out of bounds memory access',
            line: 213,
        );
    }

    #[Depends('testAssertTrap117')]
    public function testAssertTrap118(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '65533']]],
            text: 'out of bounds memory access',
            line: 214,
        );
    }

    #[Depends('testAssertTrap118')]
    public function testAssertTrap119(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '65532']]],
            text: 'out of bounds memory access',
            line: 215,
        );
    }

    #[Depends('testAssertTrap119')]
    public function testAssertTrap120(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '65531']]],
            text: 'out of bounds memory access',
            line: 216,
        );
    }

    #[Depends('testAssertTrap120')]
    public function testAssertTrap121(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '65530']]],
            text: 'out of bounds memory access',
            line: 217,
        );
    }

    #[Depends('testAssertTrap121')]
    public function testAssertTrap122(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '65529']]],
            text: 'out of bounds memory access',
            line: 218,
        );
    }

    #[Depends('testAssertTrap122')]
    public function testAssertTrap123(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 219,
        );
    }

    #[Depends('testAssertTrap123')]
    public function testAssertTrap124(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '4294967294']]],
            text: 'out of bounds memory access',
            line: 220,
        );
    }

    #[Depends('testAssertTrap124')]
    public function testAssertTrap125(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '4294967293']]],
            text: 'out of bounds memory access',
            line: 221,
        );
    }

    #[Depends('testAssertTrap125')]
    public function testAssertTrap126(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '4294967292']]],
            text: 'out of bounds memory access',
            line: 222,
        );
    }

    #[Depends('testAssertTrap126')]
    public function testAssertTrap127(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '4294967291']]],
            text: 'out of bounds memory access',
            line: 223,
        );
    }

    #[Depends('testAssertTrap127')]
    public function testAssertTrap128(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '4294967290']]],
            text: 'out of bounds memory access',
            line: 224,
        );
    }

    #[Depends('testAssertTrap128')]
    public function testAssertTrap129(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '4294967289']]],
            text: 'out of bounds memory access',
            line: 225,
        );
    }

    #[Depends('testAssertTrap129')]
    public function testAssertTrap130(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '4294967288']]],
            text: 'out of bounds memory access',
            line: 226,
        );
    }

    #[Depends('testAssertTrap130')]
    public function testAssertTrap131(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load8_s', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 227,
        );
    }

    #[Depends('testAssertTrap131')]
    public function testAssertTrap132(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load8_s', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 228,
        );
    }

    #[Depends('testAssertTrap132')]
    public function testAssertTrap133(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load8_u', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 229,
        );
    }

    #[Depends('testAssertTrap133')]
    public function testAssertTrap134(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load8_u', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 230,
        );
    }

    #[Depends('testAssertTrap134')]
    public function testAssertTrap135(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load16_s', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 231,
        );
    }

    #[Depends('testAssertTrap135')]
    public function testAssertTrap136(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load16_s', 'args' => [['type' => 'i32', 'value' => '65535']]],
            text: 'out of bounds memory access',
            line: 232,
        );
    }

    #[Depends('testAssertTrap136')]
    public function testAssertTrap137(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load16_s', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 233,
        );
    }

    #[Depends('testAssertTrap137')]
    public function testAssertTrap138(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load16_s', 'args' => [['type' => 'i32', 'value' => '4294967294']]],
            text: 'out of bounds memory access',
            line: 234,
        );
    }

    #[Depends('testAssertTrap138')]
    public function testAssertTrap139(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load16_u', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 235,
        );
    }

    #[Depends('testAssertTrap139')]
    public function testAssertTrap140(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load16_u', 'args' => [['type' => 'i32', 'value' => '65535']]],
            text: 'out of bounds memory access',
            line: 236,
        );
    }

    #[Depends('testAssertTrap140')]
    public function testAssertTrap141(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load16_u', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 237,
        );
    }

    #[Depends('testAssertTrap141')]
    public function testAssertTrap142(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load16_u', 'args' => [['type' => 'i32', 'value' => '4294967294']]],
            text: 'out of bounds memory access',
            line: 238,
        );
    }

    #[Depends('testAssertTrap142')]
    public function testAssertTrap143(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load8_s', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 239,
        );
    }

    #[Depends('testAssertTrap143')]
    public function testAssertTrap144(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load8_s', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 240,
        );
    }

    #[Depends('testAssertTrap144')]
    public function testAssertTrap145(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load8_u', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 241,
        );
    }

    #[Depends('testAssertTrap145')]
    public function testAssertTrap146(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load8_u', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 242,
        );
    }

    #[Depends('testAssertTrap146')]
    public function testAssertTrap147(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load16_s', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 243,
        );
    }

    #[Depends('testAssertTrap147')]
    public function testAssertTrap148(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load16_s', 'args' => [['type' => 'i32', 'value' => '65535']]],
            text: 'out of bounds memory access',
            line: 244,
        );
    }

    #[Depends('testAssertTrap148')]
    public function testAssertTrap149(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load16_s', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 245,
        );
    }

    #[Depends('testAssertTrap149')]
    public function testAssertTrap150(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load16_s', 'args' => [['type' => 'i32', 'value' => '4294967294']]],
            text: 'out of bounds memory access',
            line: 246,
        );
    }

    #[Depends('testAssertTrap150')]
    public function testAssertTrap151(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load16_u', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 247,
        );
    }

    #[Depends('testAssertTrap151')]
    public function testAssertTrap152(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load16_u', 'args' => [['type' => 'i32', 'value' => '65535']]],
            text: 'out of bounds memory access',
            line: 248,
        );
    }

    #[Depends('testAssertTrap152')]
    public function testAssertTrap153(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load16_u', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 249,
        );
    }

    #[Depends('testAssertTrap153')]
    public function testAssertTrap154(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load16_u', 'args' => [['type' => 'i32', 'value' => '4294967294']]],
            text: 'out of bounds memory access',
            line: 250,
        );
    }

    #[Depends('testAssertTrap154')]
    public function testAssertTrap155(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load32_s', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 251,
        );
    }

    #[Depends('testAssertTrap155')]
    public function testAssertTrap156(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load32_s', 'args' => [['type' => 'i32', 'value' => '65535']]],
            text: 'out of bounds memory access',
            line: 252,
        );
    }

    #[Depends('testAssertTrap156')]
    public function testAssertTrap157(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load32_s', 'args' => [['type' => 'i32', 'value' => '65534']]],
            text: 'out of bounds memory access',
            line: 253,
        );
    }

    #[Depends('testAssertTrap157')]
    public function testAssertTrap158(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load32_s', 'args' => [['type' => 'i32', 'value' => '65533']]],
            text: 'out of bounds memory access',
            line: 254,
        );
    }

    #[Depends('testAssertTrap158')]
    public function testAssertTrap159(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load32_s', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 255,
        );
    }

    #[Depends('testAssertTrap159')]
    public function testAssertTrap160(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load32_s', 'args' => [['type' => 'i32', 'value' => '4294967294']]],
            text: 'out of bounds memory access',
            line: 256,
        );
    }

    #[Depends('testAssertTrap160')]
    public function testAssertTrap161(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load32_s', 'args' => [['type' => 'i32', 'value' => '4294967293']]],
            text: 'out of bounds memory access',
            line: 257,
        );
    }

    #[Depends('testAssertTrap161')]
    public function testAssertTrap162(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load32_s', 'args' => [['type' => 'i32', 'value' => '4294967292']]],
            text: 'out of bounds memory access',
            line: 258,
        );
    }

    #[Depends('testAssertTrap162')]
    public function testAssertTrap163(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load32_u', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 259,
        );
    }

    #[Depends('testAssertTrap163')]
    public function testAssertTrap164(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load32_u', 'args' => [['type' => 'i32', 'value' => '65535']]],
            text: 'out of bounds memory access',
            line: 260,
        );
    }

    #[Depends('testAssertTrap164')]
    public function testAssertTrap165(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load32_u', 'args' => [['type' => 'i32', 'value' => '65534']]],
            text: 'out of bounds memory access',
            line: 261,
        );
    }

    #[Depends('testAssertTrap165')]
    public function testAssertTrap166(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load32_u', 'args' => [['type' => 'i32', 'value' => '65533']]],
            text: 'out of bounds memory access',
            line: 262,
        );
    }

    #[Depends('testAssertTrap166')]
    public function testAssertTrap167(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load32_u', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 263,
        );
    }

    #[Depends('testAssertTrap167')]
    public function testAssertTrap168(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load32_u', 'args' => [['type' => 'i32', 'value' => '4294967294']]],
            text: 'out of bounds memory access',
            line: 264,
        );
    }

    #[Depends('testAssertTrap168')]
    public function testAssertTrap169(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load32_u', 'args' => [['type' => 'i32', 'value' => '4294967293']]],
            text: 'out of bounds memory access',
            line: 265,
        );
    }

    #[Depends('testAssertTrap169')]
    public function testAssertTrap170(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load32_u', 'args' => [['type' => 'i32', 'value' => '4294967292']]],
            text: 'out of bounds memory access',
            line: 266,
        );
    }

    #[Depends('testAssertTrap170')]
    public function testAssertReturn171(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '65528']]],
            expected: [['type' => 'i64', 'value' => '7523094288207667809']],
            line: 269,
        );
    }

    #[Depends('testAssertReturn171')]
    public function testAssertReturn172(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '7523094288207667809']],
            line: 270,
        );
    }

    #[Depends('testAssertReturn172')]
    public function testAssertReturn173(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '65528'], ['type' => 'i64', 'value' => '0']]],
            expected: [],
            line: 274,
        );
    }

    #[Depends('testAssertReturn173')]
    public function testAssertTrap174(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.store', 'args' => [['type' => 'i32', 'value' => '65533'], ['type' => 'i32', 'value' => '305419896']]],
            text: 'out of bounds memory access',
            line: 275,
        );
    }

    #[Depends('testAssertTrap174')]
    public function testAssertReturn175(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.load', 'args' => [['type' => 'i32', 'value' => '65532']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 276,
        );
    }

    #[Depends('testAssertReturn175')]
    public function testAssertTrap176(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.store', 'args' => [['type' => 'i32', 'value' => '65529'], ['type' => 'i64', 'value' => '1311768467294899695']]],
            text: 'out of bounds memory access',
            line: 277,
        );
    }

    #[Depends('testAssertTrap176')]
    public function testAssertReturn177(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.load', 'args' => [['type' => 'i32', 'value' => '65528']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 278,
        );
    }

    #[Depends('testAssertReturn177')]
    public function testAssertTrap178(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f32.store', 'args' => [['type' => 'i32', 'value' => '65533'], ['type' => 'f32', 'value' => '1301390004']]],
            text: 'out of bounds memory access',
            line: 279,
        );
    }

    #[Depends('testAssertTrap178')]
    public function testAssertReturn179(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => [['type' => 'i32', 'value' => '65532']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 280,
        );
    }

    #[Depends('testAssertReturn179')]
    public function testAssertTrap180(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'f64.store', 'args' => [['type' => 'i32', 'value' => '65529'], ['type' => 'f64', 'value' => '4878018892390247374']]],
            text: 'out of bounds memory access',
            line: 281,
        );
    }

    #[Depends('testAssertTrap180')]
    public function testAssertReturn181(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '65528']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 282,
        );
    }
}
