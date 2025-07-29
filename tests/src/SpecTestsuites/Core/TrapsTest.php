<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
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

    public function testAssertTrap1(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i32.div_s', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 16,
        );
    }

    public function testAssertTrap2(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i32.div_u', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 17,
        );
    }

    public function testAssertTrap3(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i64.div_s', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 18,
        );
    }

    public function testAssertTrap4(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i64.div_u', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 19,
        );
    }

    public function testAssertTrap5(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i32.div_s', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '4294967295']]],
            text: 'integer overflow',
            line: 20,
        );
    }

    public function testAssertTrap6(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i64.div_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            text: 'integer overflow',
            line: 21,
        );
    }

    public function testModule7(): void
    {
        $this->runModuleCommand(
            filename: 'traps.1.wasm',
            name: null,
            line: 23,
        );
    }

    public function testAssertTrap8(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i32.rem_s', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 34,
        );
    }

    public function testAssertTrap9(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i32.rem_u', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 35,
        );
    }

    public function testAssertTrap10(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i64.rem_s', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 36,
        );
    }

    public function testAssertTrap11(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i64.rem_u', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 37,
        );
    }

    public function testModule12(): void
    {
        $this->runModuleCommand(
            filename: 'traps.2.wasm',
            name: null,
            line: 39,
        );
    }

    public function testAssertTrap13(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            text: 'invalid conversion to integer',
            line: 50,
        );
    }

    public function testAssertTrap14(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            text: 'invalid conversion to integer',
            line: 51,
        );
    }

    public function testAssertTrap15(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            text: 'invalid conversion to integer',
            line: 52,
        );
    }

    public function testAssertTrap16(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            text: 'invalid conversion to integer',
            line: 53,
        );
    }

    public function testAssertTrap17(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            text: 'invalid conversion to integer',
            line: 54,
        );
    }

    public function testAssertTrap18(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            text: 'invalid conversion to integer',
            line: 55,
        );
    }

    public function testAssertTrap19(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            text: 'invalid conversion to integer',
            line: 56,
        );
    }

    public function testAssertTrap20(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            text: 'invalid conversion to integer',
            line: 57,
        );
    }

    public function testModule21(): void
    {
        $this->runModuleCommand(
            filename: 'traps.3.wasm',
            name: null,
            line: 59,
        );
    }

    public function testAssertTrap22(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i32.load', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 78,
        );
    }

    public function testAssertTrap23(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i32.load16_s', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 79,
        );
    }

    public function testAssertTrap24(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i32.load16_u', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 80,
        );
    }

    public function testAssertTrap25(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i32.load8_s', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 81,
        );
    }

    public function testAssertTrap26(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i32.load8_u', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 82,
        );
    }

    public function testAssertTrap27(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i64.load', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 83,
        );
    }

    public function testAssertTrap28(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i64.load32_s', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 84,
        );
    }

    public function testAssertTrap29(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i64.load32_u', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 85,
        );
    }

    public function testAssertTrap30(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i64.load16_s', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 86,
        );
    }

    public function testAssertTrap31(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i64.load16_u', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 87,
        );
    }

    public function testAssertTrap32(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i64.load8_s', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 88,
        );
    }

    public function testAssertTrap33(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.i64.load8_u', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 89,
        );
    }

    public function testAssertTrap34(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.f32.load', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 90,
        );
    }

    public function testAssertTrap35(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'no_dce.f64.load', 'args' => [['type' => 'i32', 'value' => '65536']]],
            text: 'out of bounds memory access',
            line: 91,
        );
    }
}
