<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class TrapsTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'traps.0.wasm',
            name: null,
            line: 5,
        );
    }

    #[Depends('testModule0')]
    public function testAssertTrap1(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i32.div_s', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 16,
        );
    }

    #[Depends('testAssertTrap1')]
    public function testAssertTrap2(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i32.div_u', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 17,
        );
    }

    #[Depends('testAssertTrap2')]
    public function testAssertTrap3(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i64.div_s', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 18,
        );
    }

    #[Depends('testAssertTrap3')]
    public function testAssertTrap4(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i64.div_u', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 19,
        );
    }

    #[Depends('testAssertTrap4')]
    public function testAssertTrap5(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i32.div_s', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '4294967295']]],
            text: 'integer overflow',
            line: 20,
        );
    }

    #[Depends('testAssertTrap5')]
    public function testAssertTrap6(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i64.div_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            text: 'integer overflow',
            line: 21,
        );
    }

    #[Depends('testAssertTrap6')]
    public function testModule7(): void
    {
        $this->runModuleCommand(
            filename: 'traps.1.wasm',
            name: null,
            line: 23,
        );
    }

    #[Depends('testModule7')]
    public function testAssertTrap8(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i32.rem_s', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 34,
        );
    }

    #[Depends('testAssertTrap8')]
    public function testAssertTrap9(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i32.rem_u', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 35,
        );
    }

    #[Depends('testAssertTrap9')]
    public function testAssertTrap10(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i64.rem_s', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 36,
        );
    }

    #[Depends('testAssertTrap10')]
    public function testAssertTrap11(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i64.rem_u', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 37,
        );
    }

    #[Depends('testAssertTrap11')]
    public function testModule12(): void
    {
        $this->runModuleCommand(
            filename: 'traps.2.wasm',
            name: null,
            line: 39,
        );
    }

    #[Depends('testModule12')]
    public function testAssertTrap13(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            text: 'invalid conversion to integer',
            line: 50,
        );
    }

    #[Depends('testAssertTrap13')]
    public function testAssertTrap14(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            text: 'invalid conversion to integer',
            line: 51,
        );
    }

    #[Depends('testAssertTrap14')]
    public function testAssertTrap15(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            text: 'invalid conversion to integer',
            line: 52,
        );
    }

    #[Depends('testAssertTrap15')]
    public function testAssertTrap16(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            text: 'invalid conversion to integer',
            line: 53,
        );
    }

    #[Depends('testAssertTrap16')]
    public function testAssertTrap17(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            text: 'invalid conversion to integer',
            line: 54,
        );
    }

    #[Depends('testAssertTrap17')]
    public function testAssertTrap18(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            text: 'invalid conversion to integer',
            line: 55,
        );
    }

    #[Depends('testAssertTrap18')]
    public function testAssertTrap19(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            text: 'invalid conversion to integer',
            line: 56,
        );
    }

    #[Depends('testAssertTrap19')]
    public function testAssertTrap20(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            text: 'invalid conversion to integer',
            line: 57,
        );
    }

    #[Depends('testAssertTrap20')]
    public function testModule21(): void
    {
        $this->runModuleCommand(
            filename: 'traps.3.wasm',
            name: null,
            line: 59,
        );
    }

    #[Depends('testModule21')]
    public function testAssertTrap22(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i32.load', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 78,
        );
    }

    #[Depends('testAssertTrap22')]
    public function testAssertTrap23(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i32.load16_s', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 79,
        );
    }

    #[Depends('testAssertTrap23')]
    public function testAssertTrap24(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i32.load16_u', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 80,
        );
    }

    #[Depends('testAssertTrap24')]
    public function testAssertTrap25(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i32.load8_s', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 81,
        );
    }

    #[Depends('testAssertTrap25')]
    public function testAssertTrap26(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i32.load8_u', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 82,
        );
    }

    #[Depends('testAssertTrap26')]
    public function testAssertTrap27(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i64.load', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 83,
        );
    }

    #[Depends('testAssertTrap27')]
    public function testAssertTrap28(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i64.load32_s', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 84,
        );
    }

    #[Depends('testAssertTrap28')]
    public function testAssertTrap29(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i64.load32_u', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 85,
        );
    }

    #[Depends('testAssertTrap29')]
    public function testAssertTrap30(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i64.load16_s', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 86,
        );
    }

    #[Depends('testAssertTrap30')]
    public function testAssertTrap31(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i64.load16_u', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 87,
        );
    }

    #[Depends('testAssertTrap31')]
    public function testAssertTrap32(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i64.load8_s', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 88,
        );
    }

    #[Depends('testAssertTrap32')]
    public function testAssertTrap33(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i64.load8_u', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 89,
        );
    }

    #[Depends('testAssertTrap33')]
    public function testAssertTrap34(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.f32.load', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 90,
        );
    }

    #[Depends('testAssertTrap34')]
    public function testAssertTrap35(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.f64.load', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 91,
        );
    }
}
