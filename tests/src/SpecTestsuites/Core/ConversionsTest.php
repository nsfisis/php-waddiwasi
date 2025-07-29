<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class ConversionsTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'conversions.0.wasm',
            name: null,
            line: 1,
        );
    }

    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.extend_i32_s', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 37,
        );
    }

    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.extend_i32_s', 'args' => [['type' => 'i32', 'value' => '10000']]],
            expected: [['type' => 'i64', 'value' => '10000']],
            line: 38,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.extend_i32_s', 'args' => [['type' => 'i32', 'value' => '4294957296']]],
            expected: [['type' => 'i64', 'value' => '18446744073709541616']],
            line: 39,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.extend_i32_s', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 40,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.extend_i32_s', 'args' => [['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i64', 'value' => '2147483647']],
            line: 41,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.extend_i32_s', 'args' => [['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i64', 'value' => '18446744071562067968']],
            line: 42,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.extend_i32_u', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 44,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.extend_i32_u', 'args' => [['type' => 'i32', 'value' => '10000']]],
            expected: [['type' => 'i64', 'value' => '10000']],
            line: 45,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.extend_i32_u', 'args' => [['type' => 'i32', 'value' => '4294957296']]],
            expected: [['type' => 'i64', 'value' => '4294957296']],
            line: 46,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.extend_i32_u', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i64', 'value' => '4294967295']],
            line: 47,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.extend_i32_u', 'args' => [['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i64', 'value' => '2147483647']],
            line: 48,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.extend_i32_u', 'args' => [['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i64', 'value' => '2147483648']],
            line: 49,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.wrap_i64', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 51,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.wrap_i64', 'args' => [['type' => 'i64', 'value' => '18446744073709451616']]],
            expected: [['type' => 'i32', 'value' => '4294867296']],
            line: 52,
        );
    }

    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.wrap_i64', 'args' => [['type' => 'i64', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 53,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.wrap_i64', 'args' => [['type' => 'i64', 'value' => '18446744071562067967']]],
            expected: [['type' => 'i32', 'value' => '2147483647']],
            line: 54,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.wrap_i64', 'args' => [['type' => 'i64', 'value' => '18446744069414584320']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 55,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.wrap_i64', 'args' => [['type' => 'i64', 'value' => '18446744069414584319']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 56,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.wrap_i64', 'args' => [['type' => 'i64', 'value' => '18446744069414584321']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 57,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.wrap_i64', 'args' => [['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 58,
        );
    }

    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.wrap_i64', 'args' => [['type' => 'i64', 'value' => '1311768467463790320']]],
            expected: [['type' => 'i32', 'value' => '2596069104']],
            line: 59,
        );
    }

    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.wrap_i64', 'args' => [['type' => 'i64', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 60,
        );
    }

    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.wrap_i64', 'args' => [['type' => 'i64', 'value' => '4294967296']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 61,
        );
    }

    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.wrap_i64', 'args' => [['type' => 'i64', 'value' => '4294967297']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 62,
        );
    }

    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 64,
        );
    }

    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 65,
        );
    }

    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 66,
        );
    }

    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 67,
        );
    }

    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 68,
        );
    }

    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '1066192077']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 69,
        );
    }

    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '1069547520']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 70,
        );
    }

    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 71,
        );
    }

    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '3213675725']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 72,
        );
    }

    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '3217031168']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 73,
        );
    }

    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '3220386611']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 74,
        );
    }

    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '3221225472']]],
            expected: [['type' => 'i32', 'value' => '4294967294']],
            line: 75,
        );
    }

    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '1325400063']]],
            expected: [['type' => 'i32', 'value' => '2147483520']],
            line: 76,
        );
    }

    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '3472883712']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 77,
        );
    }

    public function testAssertTrap39(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '1325400064']]],
            text: 'integer overflow',
            line: 78,
        );
    }

    public function testAssertTrap40(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '3472883713']]],
            text: 'integer overflow',
            line: 79,
        );
    }

    public function testAssertTrap41(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            text: 'integer overflow',
            line: 80,
        );
    }

    public function testAssertTrap42(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '4286578688']]],
            text: 'integer overflow',
            line: 81,
        );
    }

    public function testAssertTrap43(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            text: 'invalid conversion to integer',
            line: 82,
        );
    }

    public function testAssertTrap44(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            text: 'invalid conversion to integer',
            line: 83,
        );
    }

    public function testAssertTrap45(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            text: 'invalid conversion to integer',
            line: 84,
        );
    }

    public function testAssertTrap46(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '4288675840']]],
            text: 'invalid conversion to integer',
            line: 85,
        );
    }

    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 87,
        );
    }

    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 88,
        );
    }

    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 89,
        );
    }

    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 90,
        );
    }

    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 91,
        );
    }

    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '1066192077']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 92,
        );
    }

    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '1069547520']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 93,
        );
    }

    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '1072902963']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 94,
        );
    }

    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '1073741824']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 95,
        );
    }

    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '1325400064']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 96,
        );
    }

    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '1333788671']]],
            expected: [['type' => 'i32', 'value' => '4294967040']],
            line: 97,
        );
    }

    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '3211159142']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 98,
        );
    }

    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '3212836863']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 99,
        );
    }

    public function testAssertTrap60(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '1333788672']]],
            text: 'integer overflow',
            line: 100,
        );
    }

    public function testAssertTrap61(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '3212836864']]],
            text: 'integer overflow',
            line: 101,
        );
    }

    public function testAssertTrap62(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            text: 'integer overflow',
            line: 102,
        );
    }

    public function testAssertTrap63(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '4286578688']]],
            text: 'integer overflow',
            line: 103,
        );
    }

    public function testAssertTrap64(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            text: 'invalid conversion to integer',
            line: 104,
        );
    }

    public function testAssertTrap65(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            text: 'invalid conversion to integer',
            line: 105,
        );
    }

    public function testAssertTrap66(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            text: 'invalid conversion to integer',
            line: 106,
        );
    }

    public function testAssertTrap67(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '4288675840']]],
            text: 'invalid conversion to integer',
            line: 107,
        );
    }

    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 109,
        );
    }

    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 110,
        );
    }

    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 111,
        );
    }

    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '9223372036854775809']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 112,
        );
    }

    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '4607182418800017408']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 113,
        );
    }

    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '4607632778762754458']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 114,
        );
    }

    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '4609434218613702656']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 115,
        );
    }

    public function testAssertReturn75(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '13830554455654793216']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 116,
        );
    }

    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '13831004815617530266']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 117,
        );
    }

    public function testAssertReturn77(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '13832806255468478464']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 118,
        );
    }

    public function testAssertReturn78(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '13834607695319426662']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 119,
        );
    }

    public function testAssertReturn79(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '13835058055282163712']]],
            expected: [['type' => 'i32', 'value' => '4294967294']],
            line: 120,
        );
    }

    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '4746794007244308480']]],
            expected: [['type' => 'i32', 'value' => '2147483647']],
            line: 121,
        );
    }

    public function testAssertReturn81(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '13970166044103278592']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 122,
        );
    }

    public function testAssertReturn82(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '13970166044105166029']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 123,
        );
    }

    public function testAssertReturn83(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '4746794007248083354']]],
            expected: [['type' => 'i32', 'value' => '2147483647']],
            line: 124,
        );
    }

    public function testAssertTrap84(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '4746794007248502784']]],
            text: 'integer overflow',
            line: 125,
        );
    }

    public function testAssertTrap85(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '13970166044105375744']]],
            text: 'integer overflow',
            line: 126,
        );
    }

    public function testAssertTrap86(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '9218868437227405312']]],
            text: 'integer overflow',
            line: 127,
        );
    }

    public function testAssertTrap87(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '18442240474082181120']]],
            text: 'integer overflow',
            line: 128,
        );
    }

    public function testAssertTrap88(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            text: 'invalid conversion to integer',
            line: 129,
        );
    }

    public function testAssertTrap89(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            text: 'invalid conversion to integer',
            line: 130,
        );
    }

    public function testAssertTrap90(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '18444492273895866368']]],
            text: 'invalid conversion to integer',
            line: 131,
        );
    }

    public function testAssertTrap91(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '18443366373989023744']]],
            text: 'invalid conversion to integer',
            line: 132,
        );
    }

    public function testAssertReturn92(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 134,
        );
    }

    public function testAssertReturn93(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 135,
        );
    }

    public function testAssertReturn94(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 136,
        );
    }

    public function testAssertReturn95(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '9223372036854775809']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 137,
        );
    }

    public function testAssertReturn96(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4607182418800017408']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 138,
        );
    }

    public function testAssertReturn97(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4607632778762754458']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 139,
        );
    }

    public function testAssertReturn98(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4609434218613702656']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 140,
        );
    }

    public function testAssertReturn99(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4611235658464650854']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 141,
        );
    }

    public function testAssertReturn100(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4611686018427387904']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 142,
        );
    }

    public function testAssertReturn101(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4746794007248502784']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 143,
        );
    }

    public function testAssertReturn102(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4751297606873776128']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 144,
        );
    }

    public function testAssertReturn103(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '13829653735729319117']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 145,
        );
    }

    public function testAssertReturn104(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '13830554455654793215']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 146,
        );
    }

    public function testAssertReturn105(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4726483295884279808']]],
            expected: [['type' => 'i32', 'value' => '100000000']],
            line: 147,
        );
    }

    public function testAssertReturn106(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '13829653735729319117']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 148,
        );
    }

    public function testAssertReturn107(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4751297606875663565']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 149,
        );
    }

    public function testAssertTrap108(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4751297606875873280']]],
            text: 'integer overflow',
            line: 150,
        );
    }

    public function testAssertTrap109(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '13830554455654793216']]],
            text: 'integer overflow',
            line: 151,
        );
    }

    public function testAssertTrap110(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4846369599423283200']]],
            text: 'integer overflow',
            line: 152,
        );
    }

    public function testAssertTrap111(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '5055640609639927018']]],
            text: 'integer overflow',
            line: 153,
        );
    }

    public function testAssertTrap112(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4890909195324358656']]],
            text: 'integer overflow',
            line: 154,
        );
    }

    public function testAssertTrap113(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '9218868437227405312']]],
            text: 'integer overflow',
            line: 155,
        );
    }

    public function testAssertTrap114(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '18442240474082181120']]],
            text: 'integer overflow',
            line: 156,
        );
    }

    public function testAssertTrap115(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            text: 'invalid conversion to integer',
            line: 157,
        );
    }

    public function testAssertTrap116(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            text: 'invalid conversion to integer',
            line: 158,
        );
    }

    public function testAssertTrap117(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '18444492273895866368']]],
            text: 'invalid conversion to integer',
            line: 159,
        );
    }

    public function testAssertTrap118(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '18443366373989023744']]],
            text: 'invalid conversion to integer',
            line: 160,
        );
    }

    public function testAssertReturn119(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 162,
        );
    }

    public function testAssertReturn120(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 163,
        );
    }

    public function testAssertReturn121(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 164,
        );
    }

    public function testAssertReturn122(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 165,
        );
    }

    public function testAssertReturn123(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 166,
        );
    }

    public function testAssertReturn124(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '1066192077']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 167,
        );
    }

    public function testAssertReturn125(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '1069547520']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 168,
        );
    }

    public function testAssertReturn126(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 169,
        );
    }

    public function testAssertReturn127(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '3213675725']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 170,
        );
    }

    public function testAssertReturn128(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '3217031168']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 171,
        );
    }

    public function testAssertReturn129(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '3220386611']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 172,
        );
    }

    public function testAssertReturn130(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '3221225472']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551614']],
            line: 173,
        );
    }

    public function testAssertReturn131(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '1333788672']]],
            expected: [['type' => 'i64', 'value' => '4294967296']],
            line: 174,
        );
    }

    public function testAssertReturn132(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '3481272320']]],
            expected: [['type' => 'i64', 'value' => '18446744069414584320']],
            line: 175,
        );
    }

    public function testAssertReturn133(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '1593835519']]],
            expected: [['type' => 'i64', 'value' => '9223371487098961920']],
            line: 176,
        );
    }

    public function testAssertReturn134(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '3741319168']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 177,
        );
    }

    public function testAssertTrap135(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '1593835520']]],
            text: 'integer overflow',
            line: 178,
        );
    }

    public function testAssertTrap136(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '3741319169']]],
            text: 'integer overflow',
            line: 179,
        );
    }

    public function testAssertTrap137(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            text: 'integer overflow',
            line: 180,
        );
    }

    public function testAssertTrap138(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '4286578688']]],
            text: 'integer overflow',
            line: 181,
        );
    }

    public function testAssertTrap139(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            text: 'invalid conversion to integer',
            line: 182,
        );
    }

    public function testAssertTrap140(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            text: 'invalid conversion to integer',
            line: 183,
        );
    }

    public function testAssertTrap141(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            text: 'invalid conversion to integer',
            line: 184,
        );
    }

    public function testAssertTrap142(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '4288675840']]],
            text: 'invalid conversion to integer',
            line: 185,
        );
    }

    public function testAssertReturn143(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 187,
        );
    }

    public function testAssertReturn144(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 188,
        );
    }

    public function testAssertReturn145(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 189,
        );
    }

    public function testAssertReturn146(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 190,
        );
    }

    public function testAssertReturn147(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 191,
        );
    }

    public function testAssertReturn148(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '1066192077']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 192,
        );
    }

    public function testAssertReturn149(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '1069547520']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 193,
        );
    }

    public function testAssertReturn150(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '1333788672']]],
            expected: [['type' => 'i64', 'value' => '4294967296']],
            line: 194,
        );
    }

    public function testAssertReturn151(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '1602224127']]],
            expected: [['type' => 'i64', 'value' => '18446742974197923840']],
            line: 195,
        );
    }

    public function testAssertReturn152(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '3211159142']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 196,
        );
    }

    public function testAssertReturn153(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '3212836863']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 197,
        );
    }

    public function testAssertTrap154(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '1602224128']]],
            text: 'integer overflow',
            line: 198,
        );
    }

    public function testAssertTrap155(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '3212836864']]],
            text: 'integer overflow',
            line: 199,
        );
    }

    public function testAssertTrap156(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            text: 'integer overflow',
            line: 200,
        );
    }

    public function testAssertTrap157(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '4286578688']]],
            text: 'integer overflow',
            line: 201,
        );
    }

    public function testAssertTrap158(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            text: 'invalid conversion to integer',
            line: 202,
        );
    }

    public function testAssertTrap159(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            text: 'invalid conversion to integer',
            line: 203,
        );
    }

    public function testAssertTrap160(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            text: 'invalid conversion to integer',
            line: 204,
        );
    }

    public function testAssertTrap161(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '4288675840']]],
            text: 'invalid conversion to integer',
            line: 205,
        );
    }

    public function testAssertReturn162(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 207,
        );
    }

    public function testAssertReturn163(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 208,
        );
    }

    public function testAssertReturn164(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 209,
        );
    }

    public function testAssertReturn165(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '9223372036854775809']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 210,
        );
    }

    public function testAssertReturn166(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '4607182418800017408']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 211,
        );
    }

    public function testAssertReturn167(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '4607632778762754458']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 212,
        );
    }

    public function testAssertReturn168(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '4609434218613702656']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 213,
        );
    }

    public function testAssertReturn169(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '13830554455654793216']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 214,
        );
    }

    public function testAssertReturn170(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '13831004815617530266']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 215,
        );
    }

    public function testAssertReturn171(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '13832806255468478464']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 216,
        );
    }

    public function testAssertReturn172(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '13834607695319426662']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 217,
        );
    }

    public function testAssertReturn173(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '13835058055282163712']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551614']],
            line: 218,
        );
    }

    public function testAssertReturn174(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '4751297606875873280']]],
            expected: [['type' => 'i64', 'value' => '4294967296']],
            line: 219,
        );
    }

    public function testAssertReturn175(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '13974669643730649088']]],
            expected: [['type' => 'i64', 'value' => '18446744069414584320']],
            line: 220,
        );
    }

    public function testAssertReturn176(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '4890909195324358655']]],
            expected: [['type' => 'i64', 'value' => '9223372036854774784']],
            line: 221,
        );
    }

    public function testAssertReturn177(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '14114281232179134464']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 222,
        );
    }

    public function testAssertTrap178(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '4890909195324358656']]],
            text: 'integer overflow',
            line: 223,
        );
    }

    public function testAssertTrap179(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '14114281232179134465']]],
            text: 'integer overflow',
            line: 224,
        );
    }

    public function testAssertTrap180(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '9218868437227405312']]],
            text: 'integer overflow',
            line: 225,
        );
    }

    public function testAssertTrap181(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '18442240474082181120']]],
            text: 'integer overflow',
            line: 226,
        );
    }

    public function testAssertTrap182(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            text: 'invalid conversion to integer',
            line: 227,
        );
    }

    public function testAssertTrap183(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            text: 'invalid conversion to integer',
            line: 228,
        );
    }

    public function testAssertTrap184(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '18444492273895866368']]],
            text: 'invalid conversion to integer',
            line: 229,
        );
    }

    public function testAssertTrap185(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '18443366373989023744']]],
            text: 'invalid conversion to integer',
            line: 230,
        );
    }

    public function testAssertReturn186(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 232,
        );
    }

    public function testAssertReturn187(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 233,
        );
    }

    public function testAssertReturn188(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 234,
        );
    }

    public function testAssertReturn189(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '9223372036854775809']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 235,
        );
    }

    public function testAssertReturn190(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4607182418800017408']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 236,
        );
    }

    public function testAssertReturn191(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4607632778762754458']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 237,
        );
    }

    public function testAssertReturn192(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4609434218613702656']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 238,
        );
    }

    public function testAssertReturn193(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4751297606873776128']]],
            expected: [['type' => 'i64', 'value' => '4294967295']],
            line: 239,
        );
    }

    public function testAssertReturn194(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4751297606875873280']]],
            expected: [['type' => 'i64', 'value' => '4294967296']],
            line: 240,
        );
    }

    public function testAssertReturn195(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4895412794951729151']]],
            expected: [['type' => 'i64', 'value' => '18446744073709549568']],
            line: 241,
        );
    }

    public function testAssertReturn196(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '13829653735729319117']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 242,
        );
    }

    public function testAssertReturn197(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '13830554455654793215']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 243,
        );
    }

    public function testAssertReturn198(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4726483295884279808']]],
            expected: [['type' => 'i64', 'value' => '100000000']],
            line: 244,
        );
    }

    public function testAssertReturn199(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4846369599423283200']]],
            expected: [['type' => 'i64', 'value' => '10000000000000000']],
            line: 245,
        );
    }

    public function testAssertReturn200(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4890909195324358656']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 246,
        );
    }

    public function testAssertTrap201(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4895412794951729152']]],
            text: 'integer overflow',
            line: 247,
        );
    }

    public function testAssertTrap202(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '13830554455654793216']]],
            text: 'integer overflow',
            line: 248,
        );
    }

    public function testAssertTrap203(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '9218868437227405312']]],
            text: 'integer overflow',
            line: 249,
        );
    }

    public function testAssertTrap204(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '18442240474082181120']]],
            text: 'integer overflow',
            line: 250,
        );
    }

    public function testAssertTrap205(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            text: 'invalid conversion to integer',
            line: 251,
        );
    }

    public function testAssertTrap206(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            text: 'invalid conversion to integer',
            line: 252,
        );
    }

    public function testAssertTrap207(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '18444492273895866368']]],
            text: 'invalid conversion to integer',
            line: 253,
        );
    }

    public function testAssertTrap208(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '18443366373989023744']]],
            text: 'invalid conversion to integer',
            line: 254,
        );
    }

    public function testAssertReturn209(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_s', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 256,
        );
    }

    public function testAssertReturn210(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_s', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 257,
        );
    }

    public function testAssertReturn211(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_s', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 258,
        );
    }

    public function testAssertReturn212(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_s', 'args' => [['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'f32', 'value' => '1325400064']],
            line: 259,
        );
    }

    public function testAssertReturn213(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_s', 'args' => [['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '3472883712']],
            line: 260,
        );
    }

    public function testAssertReturn214(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_s', 'args' => [['type' => 'i32', 'value' => '1234567890']]],
            expected: [['type' => 'f32', 'value' => '1318267910']],
            line: 261,
        );
    }

    public function testAssertReturn215(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 265,
        );
    }

    public function testAssertReturn216(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 266,
        );
    }

    public function testAssertReturn217(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 267,
        );
    }

    public function testAssertReturn218(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 268,
        );
    }

    public function testAssertReturn219(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 269,
        );
    }

    public function testAssertReturn220(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '1066192077']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 270,
        );
    }

    public function testAssertReturn221(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '1069547520']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 271,
        );
    }

    public function testAssertReturn222(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 272,
        );
    }

    public function testAssertReturn223(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '3213675725']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 273,
        );
    }

    public function testAssertReturn224(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '3217031168']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 274,
        );
    }

    public function testAssertReturn225(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '3220386611']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 275,
        );
    }

    public function testAssertReturn226(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '3221225472']]],
            expected: [['type' => 'i32', 'value' => '4294967294']],
            line: 276,
        );
    }

    public function testAssertReturn227(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '1325400063']]],
            expected: [['type' => 'i32', 'value' => '2147483520']],
            line: 277,
        );
    }

    public function testAssertReturn228(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '3472883712']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 278,
        );
    }

    public function testAssertReturn229(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '1325400064']]],
            expected: [['type' => 'i32', 'value' => '2147483647']],
            line: 279,
        );
    }

    public function testAssertReturn230(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '3472883713']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 280,
        );
    }

    public function testAssertReturn231(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '2147483647']],
            line: 281,
        );
    }

    public function testAssertReturn232(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 282,
        );
    }

    public function testAssertReturn233(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 283,
        );
    }

    public function testAssertReturn234(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 284,
        );
    }

    public function testAssertReturn235(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 285,
        );
    }

    public function testAssertReturn236(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 286,
        );
    }

    public function testAssertReturn237(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 288,
        );
    }

    public function testAssertReturn238(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 289,
        );
    }

    public function testAssertReturn239(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 290,
        );
    }

    public function testAssertReturn240(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 291,
        );
    }

    public function testAssertReturn241(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 292,
        );
    }

    public function testAssertReturn242(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '1066192077']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 293,
        );
    }

    public function testAssertReturn243(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '1069547520']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 294,
        );
    }

    public function testAssertReturn244(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '1072902963']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 295,
        );
    }

    public function testAssertReturn245(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '1073741824']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 296,
        );
    }

    public function testAssertReturn246(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '1325400064']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 297,
        );
    }

    public function testAssertReturn247(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '1333788671']]],
            expected: [['type' => 'i32', 'value' => '4294967040']],
            line: 298,
        );
    }

    public function testAssertReturn248(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '3211159142']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 299,
        );
    }

    public function testAssertReturn249(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '3212836863']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 300,
        );
    }

    public function testAssertReturn250(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '1333788672']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 301,
        );
    }

    public function testAssertReturn251(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 302,
        );
    }

    public function testAssertReturn252(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 303,
        );
    }

    public function testAssertReturn253(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 304,
        );
    }

    public function testAssertReturn254(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 305,
        );
    }

    public function testAssertReturn255(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 306,
        );
    }

    public function testAssertReturn256(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 307,
        );
    }

    public function testAssertReturn257(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 308,
        );
    }

    public function testAssertReturn258(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 310,
        );
    }

    public function testAssertReturn259(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 311,
        );
    }

    public function testAssertReturn260(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 312,
        );
    }

    public function testAssertReturn261(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '9223372036854775809']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 313,
        );
    }

    public function testAssertReturn262(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '4607182418800017408']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 314,
        );
    }

    public function testAssertReturn263(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '4607632778762754458']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 315,
        );
    }

    public function testAssertReturn264(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '4609434218613702656']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 316,
        );
    }

    public function testAssertReturn265(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '13830554455654793216']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 317,
        );
    }

    public function testAssertReturn266(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '13831004815617530266']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 318,
        );
    }

    public function testAssertReturn267(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '13832806255468478464']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 319,
        );
    }

    public function testAssertReturn268(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '13834607695319426662']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 320,
        );
    }

    public function testAssertReturn269(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '13835058055282163712']]],
            expected: [['type' => 'i32', 'value' => '4294967294']],
            line: 321,
        );
    }

    public function testAssertReturn270(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '4746794007244308480']]],
            expected: [['type' => 'i32', 'value' => '2147483647']],
            line: 322,
        );
    }

    public function testAssertReturn271(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '13970166044103278592']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 323,
        );
    }

    public function testAssertReturn272(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '4746794007248502784']]],
            expected: [['type' => 'i32', 'value' => '2147483647']],
            line: 324,
        );
    }

    public function testAssertReturn273(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '13970166044105375744']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 325,
        );
    }

    public function testAssertReturn274(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '9218868437227405312']]],
            expected: [['type' => 'i32', 'value' => '2147483647']],
            line: 326,
        );
    }

    public function testAssertReturn275(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '18442240474082181120']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 327,
        );
    }

    public function testAssertReturn276(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 328,
        );
    }

    public function testAssertReturn277(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 329,
        );
    }

    public function testAssertReturn278(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '18444492273895866368']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 330,
        );
    }

    public function testAssertReturn279(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '18443366373989023744']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 331,
        );
    }

    public function testAssertReturn280(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 333,
        );
    }

    public function testAssertReturn281(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 334,
        );
    }

    public function testAssertReturn282(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 335,
        );
    }

    public function testAssertReturn283(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '9223372036854775809']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 336,
        );
    }

    public function testAssertReturn284(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4607182418800017408']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 337,
        );
    }

    public function testAssertReturn285(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4607632778762754458']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 338,
        );
    }

    public function testAssertReturn286(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4609434218613702656']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 339,
        );
    }

    public function testAssertReturn287(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4611235658464650854']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 340,
        );
    }

    public function testAssertReturn288(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4611686018427387904']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 341,
        );
    }

    public function testAssertReturn289(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4746794007248502784']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 342,
        );
    }

    public function testAssertReturn290(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4751297606873776128']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 343,
        );
    }

    public function testAssertReturn291(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '13829653735729319117']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 344,
        );
    }

    public function testAssertReturn292(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '13830554455654793215']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 345,
        );
    }

    public function testAssertReturn293(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4726483295884279808']]],
            expected: [['type' => 'i32', 'value' => '100000000']],
            line: 346,
        );
    }

    public function testAssertReturn294(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4751297606875873280']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 347,
        );
    }

    public function testAssertReturn295(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '13830554455654793216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 348,
        );
    }

    public function testAssertReturn296(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4846369599423283200']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 349,
        );
    }

    public function testAssertReturn297(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '5055640609639927018']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 350,
        );
    }

    public function testAssertReturn298(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4890909195324358656']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 351,
        );
    }

    public function testAssertReturn299(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '9218868437227405312']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 352,
        );
    }

    public function testAssertReturn300(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '18442240474082181120']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 353,
        );
    }

    public function testAssertReturn301(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 354,
        );
    }

    public function testAssertReturn302(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 355,
        );
    }

    public function testAssertReturn303(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '18444492273895866368']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 356,
        );
    }

    public function testAssertReturn304(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '18443366373989023744']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 357,
        );
    }

    public function testAssertReturn305(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 359,
        );
    }

    public function testAssertReturn306(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 360,
        );
    }

    public function testAssertReturn307(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 361,
        );
    }

    public function testAssertReturn308(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 362,
        );
    }

    public function testAssertReturn309(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 363,
        );
    }

    public function testAssertReturn310(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '1066192077']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 364,
        );
    }

    public function testAssertReturn311(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '1069547520']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 365,
        );
    }

    public function testAssertReturn312(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 366,
        );
    }

    public function testAssertReturn313(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '3213675725']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 367,
        );
    }

    public function testAssertReturn314(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '3217031168']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 368,
        );
    }

    public function testAssertReturn315(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '3220386611']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 369,
        );
    }

    public function testAssertReturn316(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '3221225472']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551614']],
            line: 370,
        );
    }

    public function testAssertReturn317(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '1333788672']]],
            expected: [['type' => 'i64', 'value' => '4294967296']],
            line: 371,
        );
    }

    public function testAssertReturn318(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '3481272320']]],
            expected: [['type' => 'i64', 'value' => '18446744069414584320']],
            line: 372,
        );
    }

    public function testAssertReturn319(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '1593835519']]],
            expected: [['type' => 'i64', 'value' => '9223371487098961920']],
            line: 373,
        );
    }

    public function testAssertReturn320(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '3741319168']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 374,
        );
    }

    public function testAssertReturn321(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '1593835520']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775807']],
            line: 375,
        );
    }

    public function testAssertReturn322(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '3741319169']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 376,
        );
    }

    public function testAssertReturn323(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775807']],
            line: 377,
        );
    }

    public function testAssertReturn324(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 378,
        );
    }

    public function testAssertReturn325(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 379,
        );
    }

    public function testAssertReturn326(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 380,
        );
    }

    public function testAssertReturn327(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 381,
        );
    }

    public function testAssertReturn328(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 382,
        );
    }

    public function testAssertReturn329(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 384,
        );
    }

    public function testAssertReturn330(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 385,
        );
    }

    public function testAssertReturn331(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 386,
        );
    }

    public function testAssertReturn332(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 387,
        );
    }

    public function testAssertReturn333(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 388,
        );
    }

    public function testAssertReturn334(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '1066192077']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 389,
        );
    }

    public function testAssertReturn335(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '1069547520']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 390,
        );
    }

    public function testAssertReturn336(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '1333788672']]],
            expected: [['type' => 'i64', 'value' => '4294967296']],
            line: 391,
        );
    }

    public function testAssertReturn337(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '1602224127']]],
            expected: [['type' => 'i64', 'value' => '18446742974197923840']],
            line: 392,
        );
    }

    public function testAssertReturn338(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '3211159142']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 393,
        );
    }

    public function testAssertReturn339(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '3212836863']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 394,
        );
    }

    public function testAssertReturn340(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '1602224128']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 395,
        );
    }

    public function testAssertReturn341(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 396,
        );
    }

    public function testAssertReturn342(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 397,
        );
    }

    public function testAssertReturn343(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 398,
        );
    }

    public function testAssertReturn344(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 399,
        );
    }

    public function testAssertReturn345(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 400,
        );
    }

    public function testAssertReturn346(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 401,
        );
    }

    public function testAssertReturn347(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 402,
        );
    }

    public function testAssertReturn348(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 404,
        );
    }

    public function testAssertReturn349(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 405,
        );
    }

    public function testAssertReturn350(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 406,
        );
    }

    public function testAssertReturn351(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '9223372036854775809']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 407,
        );
    }

    public function testAssertReturn352(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '4607182418800017408']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 408,
        );
    }

    public function testAssertReturn353(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '4607632778762754458']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 409,
        );
    }

    public function testAssertReturn354(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '4609434218613702656']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 410,
        );
    }

    public function testAssertReturn355(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '13830554455654793216']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 411,
        );
    }

    public function testAssertReturn356(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '13831004815617530266']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 412,
        );
    }

    public function testAssertReturn357(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '13832806255468478464']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 413,
        );
    }

    public function testAssertReturn358(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '13834607695319426662']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 414,
        );
    }

    public function testAssertReturn359(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '13835058055282163712']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551614']],
            line: 415,
        );
    }

    public function testAssertReturn360(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '4751297606875873280']]],
            expected: [['type' => 'i64', 'value' => '4294967296']],
            line: 416,
        );
    }

    public function testAssertReturn361(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '13974669643730649088']]],
            expected: [['type' => 'i64', 'value' => '18446744069414584320']],
            line: 417,
        );
    }

    public function testAssertReturn362(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '4890909195324358655']]],
            expected: [['type' => 'i64', 'value' => '9223372036854774784']],
            line: 418,
        );
    }

    public function testAssertReturn363(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '14114281232179134464']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 419,
        );
    }

    public function testAssertReturn364(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '4890909195324358656']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775807']],
            line: 420,
        );
    }

    public function testAssertReturn365(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '14114281232179134465']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 421,
        );
    }

    public function testAssertReturn366(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '9218868437227405312']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775807']],
            line: 422,
        );
    }

    public function testAssertReturn367(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '18442240474082181120']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 423,
        );
    }

    public function testAssertReturn368(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 424,
        );
    }

    public function testAssertReturn369(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 425,
        );
    }

    public function testAssertReturn370(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '18444492273895866368']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 426,
        );
    }

    public function testAssertReturn371(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '18443366373989023744']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 427,
        );
    }

    public function testAssertReturn372(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 429,
        );
    }

    public function testAssertReturn373(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 430,
        );
    }

    public function testAssertReturn374(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 431,
        );
    }

    public function testAssertReturn375(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '9223372036854775809']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 432,
        );
    }

    public function testAssertReturn376(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4607182418800017408']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 433,
        );
    }

    public function testAssertReturn377(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4607632778762754458']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 434,
        );
    }

    public function testAssertReturn378(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4609434218613702656']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 435,
        );
    }

    public function testAssertReturn379(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4751297606873776128']]],
            expected: [['type' => 'i64', 'value' => '4294967295']],
            line: 436,
        );
    }

    public function testAssertReturn380(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4751297606875873280']]],
            expected: [['type' => 'i64', 'value' => '4294967296']],
            line: 437,
        );
    }

    public function testAssertReturn381(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4895412794951729151']]],
            expected: [['type' => 'i64', 'value' => '18446744073709549568']],
            line: 438,
        );
    }

    public function testAssertReturn382(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '13829653735729319117']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 439,
        );
    }

    public function testAssertReturn383(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '13830554455654793215']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 440,
        );
    }

    public function testAssertReturn384(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4726483295884279808']]],
            expected: [['type' => 'i64', 'value' => '100000000']],
            line: 441,
        );
    }

    public function testAssertReturn385(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4846369599423283200']]],
            expected: [['type' => 'i64', 'value' => '10000000000000000']],
            line: 442,
        );
    }

    public function testAssertReturn386(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4890909195324358656']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 443,
        );
    }

    public function testAssertReturn387(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4895412794951729152']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 444,
        );
    }

    public function testAssertReturn388(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '13830554455654793216']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 445,
        );
    }

    public function testAssertReturn389(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '9218868437227405312']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 446,
        );
    }

    public function testAssertReturn390(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '18442240474082181120']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 447,
        );
    }

    public function testAssertReturn391(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 448,
        );
    }

    public function testAssertReturn392(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 449,
        );
    }

    public function testAssertReturn393(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '18444492273895866368']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 450,
        );
    }

    public function testAssertReturn394(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '18443366373989023744']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 451,
        );
    }

    public function testAssertReturn395(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_s', 'args' => [['type' => 'i32', 'value' => '16777217']]],
            expected: [['type' => 'f32', 'value' => '1266679808']],
            line: 454,
        );
    }

    public function testAssertReturn396(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_s', 'args' => [['type' => 'i32', 'value' => '4278190079']]],
            expected: [['type' => 'f32', 'value' => '3414163456']],
            line: 455,
        );
    }

    public function testAssertReturn397(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_s', 'args' => [['type' => 'i32', 'value' => '16777219']]],
            expected: [['type' => 'f32', 'value' => '1266679810']],
            line: 456,
        );
    }

    public function testAssertReturn398(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_s', 'args' => [['type' => 'i32', 'value' => '4278190077']]],
            expected: [['type' => 'f32', 'value' => '3414163458']],
            line: 457,
        );
    }

    public function testAssertReturn399(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 459,
        );
    }

    public function testAssertReturn400(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 460,
        );
    }

    public function testAssertReturn401(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 461,
        );
    }

    public function testAssertReturn402(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'f32', 'value' => '1593835520']],
            line: 462,
        );
    }

    public function testAssertReturn403(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f32', 'value' => '3741319168']],
            line: 463,
        );
    }

    public function testAssertReturn404(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '314159265358979']]],
            expected: [['type' => 'f32', 'value' => '1468980468']],
            line: 464,
        );
    }

    public function testAssertReturn405(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '16777217']]],
            expected: [['type' => 'f32', 'value' => '1266679808']],
            line: 466,
        );
    }

    public function testAssertReturn406(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '18446744073692774399']]],
            expected: [['type' => 'f32', 'value' => '3414163456']],
            line: 467,
        );
    }

    public function testAssertReturn407(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '16777219']]],
            expected: [['type' => 'f32', 'value' => '1266679810']],
            line: 468,
        );
    }

    public function testAssertReturn408(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '18446744073692774397']]],
            expected: [['type' => 'f32', 'value' => '3414163458']],
            line: 469,
        );
    }

    public function testAssertReturn409(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '9223371212221054977']]],
            expected: [['type' => 'f32', 'value' => '1593835519']],
            line: 471,
        );
    }

    public function testAssertReturn410(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '9223372311732682753']]],
            expected: [['type' => 'f32', 'value' => '3741319167']],
            line: 472,
        );
    }

    public function testAssertReturn411(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '9007199791611905']]],
            expected: [['type' => 'f32', 'value' => '1509949441']],
            line: 473,
        );
    }

    public function testAssertReturn412(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '18437736873917939711']]],
            expected: [['type' => 'f32', 'value' => '3657433089']],
            line: 474,
        );
    }

    public function testAssertReturn413(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.convert_i32_s', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 476,
        );
    }

    public function testAssertReturn414(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.convert_i32_s', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'f64', 'value' => '13830554455654793216']],
            line: 477,
        );
    }

    public function testAssertReturn415(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.convert_i32_s', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 478,
        );
    }

    public function testAssertReturn416(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.convert_i32_s', 'args' => [['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'f64', 'value' => '4746794007244308480']],
            line: 479,
        );
    }

    public function testAssertReturn417(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.convert_i32_s', 'args' => [['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'f64', 'value' => '13970166044103278592']],
            line: 480,
        );
    }

    public function testAssertReturn418(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.convert_i32_s', 'args' => [['type' => 'i32', 'value' => '987654321']]],
            expected: [['type' => 'f64', 'value' => '4741568253304766464']],
            line: 481,
        );
    }

    public function testAssertReturn419(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 483,
        );
    }

    public function testAssertReturn420(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'f64', 'value' => '13830554455654793216']],
            line: 484,
        );
    }

    public function testAssertReturn421(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 485,
        );
    }

    public function testAssertReturn422(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'f64', 'value' => '4890909195324358656']],
            line: 486,
        );
    }

    public function testAssertReturn423(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => '14114281232179134464']],
            line: 487,
        );
    }

    public function testAssertReturn424(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '4669201609102990']]],
            expected: [['type' => 'f64', 'value' => '4841535201405015694']],
            line: 488,
        );
    }

    public function testAssertReturn425(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '9007199254740993']]],
            expected: [['type' => 'f64', 'value' => '4845873199050653696']],
            line: 490,
        );
    }

    public function testAssertReturn426(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '18437736874454810623']]],
            expected: [['type' => 'f64', 'value' => '14069245235905429504']],
            line: 491,
        );
    }

    public function testAssertReturn427(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '9007199254740995']]],
            expected: [['type' => 'f64', 'value' => '4845873199050653698']],
            line: 492,
        );
    }

    public function testAssertReturn428(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '18437736874454810621']]],
            expected: [['type' => 'f64', 'value' => '14069245235905429506']],
            line: 493,
        );
    }

    public function testAssertReturn429(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 495,
        );
    }

    public function testAssertReturn430(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 496,
        );
    }

    public function testAssertReturn431(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'f32', 'value' => '1325400064']],
            line: 497,
        );
    }

    public function testAssertReturn432(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '1325400064']],
            line: 498,
        );
    }

    public function testAssertReturn433(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '305419896']]],
            expected: [['type' => 'f32', 'value' => '1301390004']],
            line: 499,
        );
    }

    public function testAssertReturn434(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'f32', 'value' => '1333788672']],
            line: 500,
        );
    }

    public function testAssertReturn435(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '2147483776']]],
            expected: [['type' => 'f32', 'value' => '1325400064']],
            line: 501,
        );
    }

    public function testAssertReturn436(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '2147483777']]],
            expected: [['type' => 'f32', 'value' => '1325400065']],
            line: 502,
        );
    }

    public function testAssertReturn437(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '2147483778']]],
            expected: [['type' => 'f32', 'value' => '1325400065']],
            line: 503,
        );
    }

    public function testAssertReturn438(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '4294966912']]],
            expected: [['type' => 'f32', 'value' => '1333788670']],
            line: 504,
        );
    }

    public function testAssertReturn439(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '4294966913']]],
            expected: [['type' => 'f32', 'value' => '1333788671']],
            line: 505,
        );
    }

    public function testAssertReturn440(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '4294966914']]],
            expected: [['type' => 'f32', 'value' => '1333788671']],
            line: 506,
        );
    }

    public function testAssertReturn441(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '16777217']]],
            expected: [['type' => 'f32', 'value' => '1266679808']],
            line: 508,
        );
    }

    public function testAssertReturn442(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '16777219']]],
            expected: [['type' => 'f32', 'value' => '1266679810']],
            line: 509,
        );
    }

    public function testAssertReturn443(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 511,
        );
    }

    public function testAssertReturn444(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 512,
        );
    }

    public function testAssertReturn445(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'f32', 'value' => '1593835520']],
            line: 513,
        );
    }

    public function testAssertReturn446(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f32', 'value' => '1593835520']],
            line: 514,
        );
    }

    public function testAssertReturn447(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'f32', 'value' => '1602224128']],
            line: 515,
        );
    }

    public function testAssertReturn448(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '16777217']]],
            expected: [['type' => 'f32', 'value' => '1266679808']],
            line: 517,
        );
    }

    public function testAssertReturn449(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '16777219']]],
            expected: [['type' => 'f32', 'value' => '1266679810']],
            line: 518,
        );
    }

    public function testAssertReturn450(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '9007199791611905']]],
            expected: [['type' => 'f32', 'value' => '1509949441']],
            line: 520,
        );
    }

    public function testAssertReturn451(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '9223371761976868863']]],
            expected: [['type' => 'f32', 'value' => '1593835519']],
            line: 521,
        );
    }

    public function testAssertReturn452(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '9223372586610589697']]],
            expected: [['type' => 'f32', 'value' => '1593835521']],
            line: 522,
        );
    }

    public function testAssertReturn453(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '18446742424442109953']]],
            expected: [['type' => 'f32', 'value' => '1602224127']],
            line: 523,
        );
    }

    public function testAssertReturn454(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 525,
        );
    }

    public function testAssertReturn455(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 526,
        );
    }

    public function testAssertReturn456(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'f64', 'value' => '4746794007244308480']],
            line: 527,
        );
    }

    public function testAssertReturn457(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'f64', 'value' => '4746794007248502784']],
            line: 528,
        );
    }

    public function testAssertReturn458(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'f64', 'value' => '4751297606873776128']],
            line: 529,
        );
    }

    public function testAssertReturn459(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 531,
        );
    }

    public function testAssertReturn460(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 532,
        );
    }

    public function testAssertReturn461(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'f64', 'value' => '4890909195324358656']],
            line: 533,
        );
    }

    public function testAssertReturn462(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => '4890909195324358656']],
            line: 534,
        );
    }

    public function testAssertReturn463(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'f64', 'value' => '4895412794951729152']],
            line: 535,
        );
    }

    public function testAssertReturn464(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '9223372036854776832']]],
            expected: [['type' => 'f64', 'value' => '4890909195324358656']],
            line: 536,
        );
    }

    public function testAssertReturn465(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '9223372036854776833']]],
            expected: [['type' => 'f64', 'value' => '4890909195324358657']],
            line: 537,
        );
    }

    public function testAssertReturn466(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '9223372036854776834']]],
            expected: [['type' => 'f64', 'value' => '4890909195324358657']],
            line: 538,
        );
    }

    public function testAssertReturn467(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '18446744073709548544']]],
            expected: [['type' => 'f64', 'value' => '4895412794951729150']],
            line: 539,
        );
    }

    public function testAssertReturn468(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '18446744073709548545']]],
            expected: [['type' => 'f64', 'value' => '4895412794951729151']],
            line: 540,
        );
    }

    public function testAssertReturn469(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '18446744073709548546']]],
            expected: [['type' => 'f64', 'value' => '4895412794951729151']],
            line: 541,
        );
    }

    public function testAssertReturn470(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '9007199254740993']]],
            expected: [['type' => 'f64', 'value' => '4845873199050653696']],
            line: 543,
        );
    }

    public function testAssertReturn471(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '9007199254740995']]],
            expected: [['type' => 'f64', 'value' => '4845873199050653698']],
            line: 544,
        );
    }

    public function testAssertReturn472(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.promote_f32', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 546,
        );
    }

    public function testAssertReturn473(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.promote_f32', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 547,
        );
    }

    public function testAssertReturn474(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.promote_f32', 'args' => [['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f64', 'value' => '3936146074321813504']],
            line: 548,
        );
    }

    public function testAssertReturn475(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.promote_f32', 'args' => [['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f64', 'value' => '13159518111176589312']],
            line: 549,
        );
    }

    public function testAssertReturn476(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.promote_f32', 'args' => [['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 550,
        );
    }

    public function testAssertReturn477(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.promote_f32', 'args' => [['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f64', 'value' => '13830554455654793216']],
            line: 551,
        );
    }

    public function testAssertReturn478(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.promote_f32', 'args' => [['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f64', 'value' => '14407015207421345792']],
            line: 552,
        );
    }

    public function testAssertReturn479(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.promote_f32', 'args' => [['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f64', 'value' => '5183643170566569984']],
            line: 553,
        );
    }

    public function testAssertReturn480(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.promote_f32', 'args' => [['type' => 'f32', 'value' => '67108864']]],
            expected: [['type' => 'f64', 'value' => '4071254063142928384']],
            line: 555,
        );
    }

    public function testAssertReturn481(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.promote_f32', 'args' => [['type' => 'f32', 'value' => '2118632255']]],
            expected: [['type' => 'f64', 'value' => '5172657297058430976']],
            line: 557,
        );
    }

    public function testAssertReturn482(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.promote_f32', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f64', 'value' => '9218868437227405312']],
            line: 558,
        );
    }

    public function testAssertReturn483(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.promote_f32', 'args' => [['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f64', 'value' => '18442240474082181120']],
            line: 559,
        );
    }

    public function testAssertReturn484(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.promote_f32', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f64', 'value' => 'nan:canonical']],
            line: 560,
        );
    }

    public function testAssertReturn485(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.promote_f32', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f64', 'value' => 'nan:arithmetic']],
            line: 561,
        );
    }

    public function testAssertReturn486(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.promote_f32', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f64', 'value' => 'nan:canonical']],
            line: 562,
        );
    }

    public function testAssertReturn487(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.promote_f32', 'args' => [['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f64', 'value' => 'nan:arithmetic']],
            line: 563,
        );
    }

    public function testAssertReturn488(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 565,
        );
    }

    public function testAssertReturn489(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 566,
        );
    }

    public function testAssertReturn490(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 567,
        );
    }

    public function testAssertReturn491(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '9223372036854775809']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 568,
        );
    }

    public function testAssertReturn492(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4607182418800017408']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 569,
        );
    }

    public function testAssertReturn493(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '13830554455654793216']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 570,
        );
    }

    public function testAssertReturn494(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4039728865214464000']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 571,
        );
    }

    public function testAssertReturn495(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '13263100902069239808']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 572,
        );
    }

    public function testAssertReturn496(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4039728865214463999']]],
            expected: [['type' => 'f32', 'value' => '8388607']],
            line: 573,
        );
    }

    public function testAssertReturn497(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '13263100902069239807']]],
            expected: [['type' => 'f32', 'value' => '2155872255']],
            line: 574,
        );
    }

    public function testAssertReturn498(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '3936146074321813504']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 575,
        );
    }

    public function testAssertReturn499(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '13159518111176589312']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 576,
        );
    }

    public function testAssertReturn500(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '5183643170298134528']]],
            expected: [['type' => 'f32', 'value' => '2139095038']],
            line: 577,
        );
    }

    public function testAssertReturn501(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '14407015207152910336']]],
            expected: [['type' => 'f32', 'value' => '4286578686']],
            line: 578,
        );
    }

    public function testAssertReturn502(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '5183643170298134529']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 579,
        );
    }

    public function testAssertReturn503(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '14407015207152910337']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 580,
        );
    }

    public function testAssertReturn504(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '5183643170566569984']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 581,
        );
    }

    public function testAssertReturn505(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '14407015207421345792']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 582,
        );
    }

    public function testAssertReturn506(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '5183643170835005439']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 583,
        );
    }

    public function testAssertReturn507(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '14407015207689781247']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 584,
        );
    }

    public function testAssertReturn508(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '5183643170835005440']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 585,
        );
    }

    public function testAssertReturn509(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '14407015207689781248']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 586,
        );
    }

    public function testAssertReturn510(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4071254063142928384']]],
            expected: [['type' => 'f32', 'value' => '67108864']],
            line: 587,
        );
    }

    public function testAssertReturn511(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '5172657297058430976']]],
            expected: [['type' => 'f32', 'value' => '2118632255']],
            line: 588,
        );
    }

    public function testAssertReturn512(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '9218868437227405312']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 589,
        );
    }

    public function testAssertReturn513(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '18442240474082181120']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 590,
        );
    }

    public function testAssertReturn514(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4607182418800017409']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 591,
        );
    }

    public function testAssertReturn515(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4607182418800017407']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 592,
        );
    }

    public function testAssertReturn516(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4607182419068452864']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 593,
        );
    }

    public function testAssertReturn517(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4607182419068452865']]],
            expected: [['type' => 'f32', 'value' => '1065353217']],
            line: 594,
        );
    }

    public function testAssertReturn518(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4607182419605323775']]],
            expected: [['type' => 'f32', 'value' => '1065353217']],
            line: 595,
        );
    }

    public function testAssertReturn519(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4607182419605323776']]],
            expected: [['type' => 'f32', 'value' => '1065353218']],
            line: 596,
        );
    }

    public function testAssertReturn520(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4607182420142194688']]],
            expected: [['type' => 'f32', 'value' => '1065353218']],
            line: 597,
        );
    }

    public function testAssertReturn521(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4715268810125344768']]],
            expected: [['type' => 'f32', 'value' => '1266679808']],
            line: 598,
        );
    }

    public function testAssertReturn522(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4715268810125344769']]],
            expected: [['type' => 'f32', 'value' => '1266679809']],
            line: 599,
        );
    }

    public function testAssertReturn523(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4715268810662215679']]],
            expected: [['type' => 'f32', 'value' => '1266679809']],
            line: 600,
        );
    }

    public function testAssertReturn524(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4715268810662215680']]],
            expected: [['type' => 'f32', 'value' => '1266679810']],
            line: 601,
        );
    }

    public function testAssertReturn525(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '5094955347580439664']]],
            expected: [['type' => 'f32', 'value' => '1973901096']],
            line: 602,
        );
    }

    public function testAssertReturn526(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4101111194527827589']]],
            expected: [['type' => 'f32', 'value' => '122722105']],
            line: 603,
        );
    }

    public function testAssertReturn527(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4038806939559600639']]],
            expected: [['type' => 'f32', 'value' => '7529997']],
            line: 604,
        );
    }

    public function testAssertReturn528(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '13836913116900734306']]],
            expected: [['type' => 'f32', 'value' => '3224680794']],
            line: 605,
        );
    }

    public function testAssertReturn529(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '14338315240173327556']]],
            expected: [['type' => 'f32', 'value' => '4158615026']],
            line: 606,
        );
    }

    public function testAssertReturn530(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 607,
        );
    }

    public function testAssertReturn531(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 608,
        );
    }

    public function testAssertReturn532(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '18444492273895866368']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 609,
        );
    }

    public function testAssertReturn533(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '18443366373989023744']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 610,
        );
    }

    public function testAssertReturn534(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4503599627370496']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 611,
        );
    }

    public function testAssertReturn535(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '9227875636482146304']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 612,
        );
    }

    public function testAssertReturn536(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '3931642474694443008']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 613,
        );
    }

    public function testAssertReturn537(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '13155014511549218816']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 614,
        );
    }

    public function testAssertReturn538(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '3931642474694443009']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 615,
        );
    }

    public function testAssertReturn539(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '13155014511549218817']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 616,
        );
    }

    public function testAssertReturn540(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.reinterpret_i32', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 618,
        );
    }

    public function testAssertReturn541(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.reinterpret_i32', 'args' => [['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 619,
        );
    }

    public function testAssertReturn542(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.reinterpret_i32', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 620,
        );
    }

    public function testAssertReturn543(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.reinterpret_i32', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'f32', 'value' => '4294967295']],
            line: 621,
        );
    }

    public function testAssertReturn544(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.reinterpret_i32', 'args' => [['type' => 'i32', 'value' => '123456789']]],
            expected: [['type' => 'f32', 'value' => '123456789']],
            line: 622,
        );
    }

    public function testAssertReturn545(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.reinterpret_i32', 'args' => [['type' => 'i32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 623,
        );
    }

    public function testAssertReturn546(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.reinterpret_i32', 'args' => [['type' => 'i32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 624,
        );
    }

    public function testAssertReturn547(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.reinterpret_i32', 'args' => [['type' => 'i32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 625,
        );
    }

    public function testAssertReturn548(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.reinterpret_i32', 'args' => [['type' => 'i32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 626,
        );
    }

    public function testAssertReturn549(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.reinterpret_i32', 'args' => [['type' => 'i32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 627,
        );
    }

    public function testAssertReturn550(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.reinterpret_i32', 'args' => [['type' => 'i32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => '2141192192']],
            line: 628,
        );
    }

    public function testAssertReturn551(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.reinterpret_i32', 'args' => [['type' => 'i32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => '4288675840']],
            line: 629,
        );
    }

    public function testAssertReturn552(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.reinterpret_i64', 'args' => [['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 631,
        );
    }

    public function testAssertReturn553(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.reinterpret_i64', 'args' => [['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'f64', 'value' => '1']],
            line: 632,
        );
    }

    public function testAssertReturn554(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.reinterpret_i64', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'f64', 'value' => '18446744073709551615']],
            line: 633,
        );
    }

    public function testAssertReturn555(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.reinterpret_i64', 'args' => [['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 634,
        );
    }

    public function testAssertReturn556(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.reinterpret_i64', 'args' => [['type' => 'i64', 'value' => '1234567890']]],
            expected: [['type' => 'f64', 'value' => '1234567890']],
            line: 635,
        );
    }

    public function testAssertReturn557(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.reinterpret_i64', 'args' => [['type' => 'i64', 'value' => '9223372036854775809']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775809']],
            line: 636,
        );
    }

    public function testAssertReturn558(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.reinterpret_i64', 'args' => [['type' => 'i64', 'value' => '9218868437227405312']]],
            expected: [['type' => 'f64', 'value' => '9218868437227405312']],
            line: 637,
        );
    }

    public function testAssertReturn559(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.reinterpret_i64', 'args' => [['type' => 'i64', 'value' => '18442240474082181120']]],
            expected: [['type' => 'f64', 'value' => '18442240474082181120']],
            line: 638,
        );
    }

    public function testAssertReturn560(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.reinterpret_i64', 'args' => [['type' => 'i64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'f64', 'value' => '9221120237041090560']],
            line: 639,
        );
    }

    public function testAssertReturn561(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.reinterpret_i64', 'args' => [['type' => 'i64', 'value' => '18444492273895866368']]],
            expected: [['type' => 'f64', 'value' => '18444492273895866368']],
            line: 640,
        );
    }

    public function testAssertReturn562(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.reinterpret_i64', 'args' => [['type' => 'i64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'f64', 'value' => '9219994337134247936']],
            line: 641,
        );
    }

    public function testAssertReturn563(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.reinterpret_i64', 'args' => [['type' => 'i64', 'value' => '18443366373989023744']]],
            expected: [['type' => 'f64', 'value' => '18443366373989023744']],
            line: 642,
        );
    }

    public function testAssertReturn564(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.reinterpret_f32', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 644,
        );
    }

    public function testAssertReturn565(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.reinterpret_f32', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 645,
        );
    }

    public function testAssertReturn566(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.reinterpret_f32', 'args' => [['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 646,
        );
    }

    public function testAssertReturn567(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.reinterpret_f32', 'args' => [['type' => 'f32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 647,
        );
    }

    public function testAssertReturn568(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.reinterpret_f32', 'args' => [['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '2147483649']],
            line: 648,
        );
    }

    public function testAssertReturn569(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.reinterpret_f32', 'args' => [['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1065353216']],
            line: 649,
        );
    }

    public function testAssertReturn570(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.reinterpret_f32', 'args' => [['type' => 'f32', 'value' => '1078530010']]],
            expected: [['type' => 'i32', 'value' => '1078530010']],
            line: 650,
        );
    }

    public function testAssertReturn571(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.reinterpret_f32', 'args' => [['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '2139095039']],
            line: 651,
        );
    }

    public function testAssertReturn572(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.reinterpret_f32', 'args' => [['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '4286578687']],
            line: 652,
        );
    }

    public function testAssertReturn573(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.reinterpret_f32', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '2139095040']],
            line: 653,
        );
    }

    public function testAssertReturn574(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.reinterpret_f32', 'args' => [['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '4286578688']],
            line: 654,
        );
    }

    public function testAssertReturn575(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.reinterpret_f32', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '2143289344']],
            line: 655,
        );
    }

    public function testAssertReturn576(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.reinterpret_f32', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '4290772992']],
            line: 656,
        );
    }

    public function testAssertReturn577(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.reinterpret_f32', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '2141192192']],
            line: 657,
        );
    }

    public function testAssertReturn578(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.reinterpret_f32', 'args' => [['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '4288675840']],
            line: 658,
        );
    }

    public function testAssertReturn579(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.reinterpret_f64', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 660,
        );
    }

    public function testAssertReturn580(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.reinterpret_f64', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 661,
        );
    }

    public function testAssertReturn581(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.reinterpret_f64', 'args' => [['type' => 'f64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 662,
        );
    }

    public function testAssertReturn582(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.reinterpret_f64', 'args' => [['type' => 'f64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 663,
        );
    }

    public function testAssertReturn583(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.reinterpret_f64', 'args' => [['type' => 'f64', 'value' => '9223372036854775809']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775809']],
            line: 664,
        );
    }

    public function testAssertReturn584(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.reinterpret_f64', 'args' => [['type' => 'f64', 'value' => '4607182418800017408']]],
            expected: [['type' => 'i64', 'value' => '4607182418800017408']],
            line: 665,
        );
    }

    public function testAssertReturn585(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.reinterpret_f64', 'args' => [['type' => 'f64', 'value' => '4614256656552045841']]],
            expected: [['type' => 'i64', 'value' => '4614256656552045841']],
            line: 666,
        );
    }

    public function testAssertReturn586(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.reinterpret_f64', 'args' => [['type' => 'f64', 'value' => '9218868437227405311']]],
            expected: [['type' => 'i64', 'value' => '9218868437227405311']],
            line: 667,
        );
    }

    public function testAssertReturn587(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.reinterpret_f64', 'args' => [['type' => 'f64', 'value' => '18442240474082181119']]],
            expected: [['type' => 'i64', 'value' => '18442240474082181119']],
            line: 668,
        );
    }

    public function testAssertReturn588(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.reinterpret_f64', 'args' => [['type' => 'f64', 'value' => '9218868437227405312']]],
            expected: [['type' => 'i64', 'value' => '9218868437227405312']],
            line: 669,
        );
    }

    public function testAssertReturn589(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.reinterpret_f64', 'args' => [['type' => 'f64', 'value' => '18442240474082181120']]],
            expected: [['type' => 'i64', 'value' => '18442240474082181120']],
            line: 670,
        );
    }

    public function testAssertReturn590(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.reinterpret_f64', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'i64', 'value' => '9221120237041090560']],
            line: 671,
        );
    }

    public function testAssertReturn591(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.reinterpret_f64', 'args' => [['type' => 'f64', 'value' => '18444492273895866368']]],
            expected: [['type' => 'i64', 'value' => '18444492273895866368']],
            line: 672,
        );
    }

    public function testAssertReturn592(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.reinterpret_f64', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'i64', 'value' => '9219994337134247936']],
            line: 673,
        );
    }

    public function testAssertReturn593(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.reinterpret_f64', 'args' => [['type' => 'f64', 'value' => '18443366373989023744']]],
            expected: [['type' => 'i64', 'value' => '18443366373989023744']],
            line: 674,
        );
    }

    public function testAssertInvalid594(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.1.wasm',
            text: 'type mismatch',
            line: 678,
        );
    }

    public function testAssertInvalid595(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.2.wasm',
            text: 'type mismatch',
            line: 679,
        );
    }

    public function testAssertInvalid596(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.3.wasm',
            text: 'type mismatch',
            line: 680,
        );
    }

    public function testAssertInvalid597(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.4.wasm',
            text: 'type mismatch',
            line: 681,
        );
    }

    public function testAssertInvalid598(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.5.wasm',
            text: 'type mismatch',
            line: 682,
        );
    }

    public function testAssertInvalid599(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.6.wasm',
            text: 'type mismatch',
            line: 683,
        );
    }

    public function testAssertInvalid600(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.7.wasm',
            text: 'type mismatch',
            line: 684,
        );
    }

    public function testAssertInvalid601(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.8.wasm',
            text: 'type mismatch',
            line: 685,
        );
    }

    public function testAssertInvalid602(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.9.wasm',
            text: 'type mismatch',
            line: 686,
        );
    }

    public function testAssertInvalid603(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.10.wasm',
            text: 'type mismatch',
            line: 687,
        );
    }

    public function testAssertInvalid604(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.11.wasm',
            text: 'type mismatch',
            line: 688,
        );
    }

    public function testAssertInvalid605(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.12.wasm',
            text: 'type mismatch',
            line: 689,
        );
    }

    public function testAssertInvalid606(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.13.wasm',
            text: 'type mismatch',
            line: 690,
        );
    }

    public function testAssertInvalid607(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.14.wasm',
            text: 'type mismatch',
            line: 691,
        );
    }

    public function testAssertInvalid608(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.15.wasm',
            text: 'type mismatch',
            line: 692,
        );
    }

    public function testAssertInvalid609(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.16.wasm',
            text: 'type mismatch',
            line: 693,
        );
    }

    public function testAssertInvalid610(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.17.wasm',
            text: 'type mismatch',
            line: 694,
        );
    }

    public function testAssertInvalid611(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.18.wasm',
            text: 'type mismatch',
            line: 695,
        );
    }

    public function testAssertInvalid612(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.19.wasm',
            text: 'type mismatch',
            line: 696,
        );
    }

    public function testAssertInvalid613(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.20.wasm',
            text: 'type mismatch',
            line: 697,
        );
    }

    public function testAssertInvalid614(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.21.wasm',
            text: 'type mismatch',
            line: 698,
        );
    }

    public function testAssertInvalid615(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.22.wasm',
            text: 'type mismatch',
            line: 699,
        );
    }

    public function testAssertInvalid616(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.23.wasm',
            text: 'type mismatch',
            line: 700,
        );
    }

    public function testAssertInvalid617(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.24.wasm',
            text: 'type mismatch',
            line: 701,
        );
    }

    public function testAssertInvalid618(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.25.wasm',
            text: 'type mismatch',
            line: 702,
        );
    }
}
