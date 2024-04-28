<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;

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

    #[Depends('testModule0')]
    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.extend_i32_s', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 37,
        );
    }

    #[Depends('testAssertReturn1')]
    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.extend_i32_s', 'args' => [['type' => 'i32', 'value' => '10000']]],
            expected: [['type' => 'i64', 'value' => '10000']],
            line: 38,
        );
    }

    #[Depends('testAssertReturn2')]
    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.extend_i32_s', 'args' => [['type' => 'i32', 'value' => '4294957296']]],
            expected: [['type' => 'i64', 'value' => '18446744073709541616']],
            line: 39,
        );
    }

    #[Depends('testAssertReturn3')]
    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.extend_i32_s', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 40,
        );
    }

    #[Depends('testAssertReturn4')]
    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.extend_i32_s', 'args' => [['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i64', 'value' => '2147483647']],
            line: 41,
        );
    }

    #[Depends('testAssertReturn5')]
    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.extend_i32_s', 'args' => [['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i64', 'value' => '18446744071562067968']],
            line: 42,
        );
    }

    #[Depends('testAssertReturn6')]
    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.extend_i32_u', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 44,
        );
    }

    #[Depends('testAssertReturn7')]
    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.extend_i32_u', 'args' => [['type' => 'i32', 'value' => '10000']]],
            expected: [['type' => 'i64', 'value' => '10000']],
            line: 45,
        );
    }

    #[Depends('testAssertReturn8')]
    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.extend_i32_u', 'args' => [['type' => 'i32', 'value' => '4294957296']]],
            expected: [['type' => 'i64', 'value' => '4294957296']],
            line: 46,
        );
    }

    #[Depends('testAssertReturn9')]
    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.extend_i32_u', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i64', 'value' => '4294967295']],
            line: 47,
        );
    }

    #[Depends('testAssertReturn10')]
    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.extend_i32_u', 'args' => [['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i64', 'value' => '2147483647']],
            line: 48,
        );
    }

    #[Depends('testAssertReturn11')]
    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.extend_i32_u', 'args' => [['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i64', 'value' => '2147483648']],
            line: 49,
        );
    }

    #[Depends('testAssertReturn12')]
    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.wrap_i64', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 51,
        );
    }

    #[Depends('testAssertReturn13')]
    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.wrap_i64', 'args' => [['type' => 'i64', 'value' => '18446744073709451616']]],
            expected: [['type' => 'i32', 'value' => '4294867296']],
            line: 52,
        );
    }

    #[Depends('testAssertReturn14')]
    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.wrap_i64', 'args' => [['type' => 'i64', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 53,
        );
    }

    #[Depends('testAssertReturn15')]
    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.wrap_i64', 'args' => [['type' => 'i64', 'value' => '18446744071562067967']]],
            expected: [['type' => 'i32', 'value' => '2147483647']],
            line: 54,
        );
    }

    #[Depends('testAssertReturn16')]
    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.wrap_i64', 'args' => [['type' => 'i64', 'value' => '18446744069414584320']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 55,
        );
    }

    #[Depends('testAssertReturn17')]
    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.wrap_i64', 'args' => [['type' => 'i64', 'value' => '18446744069414584319']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 56,
        );
    }

    #[Depends('testAssertReturn18')]
    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.wrap_i64', 'args' => [['type' => 'i64', 'value' => '18446744069414584321']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 57,
        );
    }

    #[Depends('testAssertReturn19')]
    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.wrap_i64', 'args' => [['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 58,
        );
    }

    #[Depends('testAssertReturn20')]
    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.wrap_i64', 'args' => [['type' => 'i64', 'value' => '1311768467463790320']]],
            expected: [['type' => 'i32', 'value' => '2596069104']],
            line: 59,
        );
    }

    #[Depends('testAssertReturn21')]
    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.wrap_i64', 'args' => [['type' => 'i64', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 60,
        );
    }

    #[Depends('testAssertReturn22')]
    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.wrap_i64', 'args' => [['type' => 'i64', 'value' => '4294967296']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 61,
        );
    }

    #[Depends('testAssertReturn23')]
    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.wrap_i64', 'args' => [['type' => 'i64', 'value' => '4294967297']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 62,
        );
    }

    #[Depends('testAssertReturn24')]
    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 64,
        );
    }

    #[Depends('testAssertReturn25')]
    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 65,
        );
    }

    #[Depends('testAssertReturn26')]
    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 66,
        );
    }

    #[Depends('testAssertReturn27')]
    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 67,
        );
    }

    #[Depends('testAssertReturn28')]
    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 68,
        );
    }

    #[Depends('testAssertReturn29')]
    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '1066192077']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 69,
        );
    }

    #[Depends('testAssertReturn30')]
    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '1069547520']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 70,
        );
    }

    #[Depends('testAssertReturn31')]
    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 71,
        );
    }

    #[Depends('testAssertReturn32')]
    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '3213675725']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 72,
        );
    }

    #[Depends('testAssertReturn33')]
    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '3217031168']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 73,
        );
    }

    #[Depends('testAssertReturn34')]
    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '3220386611']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 74,
        );
    }

    #[Depends('testAssertReturn35')]
    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '3221225472']]],
            expected: [['type' => 'i32', 'value' => '4294967294']],
            line: 75,
        );
    }

    #[Depends('testAssertReturn36')]
    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '1325400063']]],
            expected: [['type' => 'i32', 'value' => '2147483520']],
            line: 76,
        );
    }

    #[Depends('testAssertReturn37')]
    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '3472883712']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 77,
        );
    }

    #[Depends('testAssertReturn38')]
    public function testAssertTrap39(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '1325400064']]],
            text: 'integer overflow',
            line: 78,
        );
    }

    #[Depends('testAssertTrap39')]
    public function testAssertTrap40(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '3472883713']]],
            text: 'integer overflow',
            line: 79,
        );
    }

    #[Depends('testAssertTrap40')]
    public function testAssertTrap41(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            text: 'integer overflow',
            line: 80,
        );
    }

    #[Depends('testAssertTrap41')]
    public function testAssertTrap42(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '4286578688']]],
            text: 'integer overflow',
            line: 81,
        );
    }

    #[Depends('testAssertTrap42')]
    public function testAssertTrap43(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            text: 'invalid conversion to integer',
            line: 82,
        );
    }

    #[Depends('testAssertTrap43')]
    public function testAssertTrap44(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            text: 'invalid conversion to integer',
            line: 83,
        );
    }

    #[Depends('testAssertTrap44')]
    public function testAssertTrap45(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            text: 'invalid conversion to integer',
            line: 84,
        );
    }

    #[Depends('testAssertTrap45')]
    public function testAssertTrap46(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '4288675840']]],
            text: 'invalid conversion to integer',
            line: 85,
        );
    }

    #[Depends('testAssertTrap46')]
    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 87,
        );
    }

    #[Depends('testAssertReturn47')]
    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 88,
        );
    }

    #[Depends('testAssertReturn48')]
    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 89,
        );
    }

    #[Depends('testAssertReturn49')]
    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 90,
        );
    }

    #[Depends('testAssertReturn50')]
    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 91,
        );
    }

    #[Depends('testAssertReturn51')]
    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '1066192077']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 92,
        );
    }

    #[Depends('testAssertReturn52')]
    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '1069547520']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 93,
        );
    }

    #[Depends('testAssertReturn53')]
    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '1072902963']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 94,
        );
    }

    #[Depends('testAssertReturn54')]
    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '1073741824']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 95,
        );
    }

    #[Depends('testAssertReturn55')]
    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '1325400064']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 96,
        );
    }

    #[Depends('testAssertReturn56')]
    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '1333788671']]],
            expected: [['type' => 'i32', 'value' => '4294967040']],
            line: 97,
        );
    }

    #[Depends('testAssertReturn57')]
    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '3211159142']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 98,
        );
    }

    #[Depends('testAssertReturn58')]
    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '3212836863']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 99,
        );
    }

    #[Depends('testAssertReturn59')]
    public function testAssertTrap60(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '1333788672']]],
            text: 'integer overflow',
            line: 100,
        );
    }

    #[Depends('testAssertTrap60')]
    public function testAssertTrap61(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '3212836864']]],
            text: 'integer overflow',
            line: 101,
        );
    }

    #[Depends('testAssertTrap61')]
    public function testAssertTrap62(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            text: 'integer overflow',
            line: 102,
        );
    }

    #[Depends('testAssertTrap62')]
    public function testAssertTrap63(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '4286578688']]],
            text: 'integer overflow',
            line: 103,
        );
    }

    #[Depends('testAssertTrap63')]
    public function testAssertTrap64(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            text: 'invalid conversion to integer',
            line: 104,
        );
    }

    #[Depends('testAssertTrap64')]
    public function testAssertTrap65(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            text: 'invalid conversion to integer',
            line: 105,
        );
    }

    #[Depends('testAssertTrap65')]
    public function testAssertTrap66(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            text: 'invalid conversion to integer',
            line: 106,
        );
    }

    #[Depends('testAssertTrap66')]
    public function testAssertTrap67(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '4288675840']]],
            text: 'invalid conversion to integer',
            line: 107,
        );
    }

    #[Depends('testAssertTrap67')]
    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 109,
        );
    }

    #[Depends('testAssertReturn68')]
    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 110,
        );
    }

    #[Depends('testAssertReturn69')]
    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 111,
        );
    }

    #[Depends('testAssertReturn70')]
    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '9223372036854775809']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 112,
        );
    }

    #[Depends('testAssertReturn71')]
    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '4607182418800017408']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 113,
        );
    }

    #[Depends('testAssertReturn72')]
    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '4607632778762754458']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 114,
        );
    }

    #[Depends('testAssertReturn73')]
    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '4609434218613702656']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 115,
        );
    }

    #[Depends('testAssertReturn74')]
    public function testAssertReturn75(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '13830554455654793216']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 116,
        );
    }

    #[Depends('testAssertReturn75')]
    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '13831004815617530266']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 117,
        );
    }

    #[Depends('testAssertReturn76')]
    public function testAssertReturn77(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '13832806255468478464']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 118,
        );
    }

    #[Depends('testAssertReturn77')]
    public function testAssertReturn78(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '13834607695319426662']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 119,
        );
    }

    #[Depends('testAssertReturn78')]
    public function testAssertReturn79(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '13835058055282163712']]],
            expected: [['type' => 'i32', 'value' => '4294967294']],
            line: 120,
        );
    }

    #[Depends('testAssertReturn79')]
    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '4746794007244308480']]],
            expected: [['type' => 'i32', 'value' => '2147483647']],
            line: 121,
        );
    }

    #[Depends('testAssertReturn80')]
    public function testAssertReturn81(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '13970166044103278592']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 122,
        );
    }

    #[Depends('testAssertReturn81')]
    public function testAssertReturn82(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '13970166044105166029']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 123,
        );
    }

    #[Depends('testAssertReturn82')]
    public function testAssertReturn83(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '4746794007248083354']]],
            expected: [['type' => 'i32', 'value' => '2147483647']],
            line: 124,
        );
    }

    #[Depends('testAssertReturn83')]
    public function testAssertTrap84(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '4746794007248502784']]],
            text: 'integer overflow',
            line: 125,
        );
    }

    #[Depends('testAssertTrap84')]
    public function testAssertTrap85(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '13970166044105375744']]],
            text: 'integer overflow',
            line: 126,
        );
    }

    #[Depends('testAssertTrap85')]
    public function testAssertTrap86(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '9218868437227405312']]],
            text: 'integer overflow',
            line: 127,
        );
    }

    #[Depends('testAssertTrap86')]
    public function testAssertTrap87(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '18442240474082181120']]],
            text: 'integer overflow',
            line: 128,
        );
    }

    #[Depends('testAssertTrap87')]
    public function testAssertTrap88(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            text: 'invalid conversion to integer',
            line: 129,
        );
    }

    #[Depends('testAssertTrap88')]
    public function testAssertTrap89(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            text: 'invalid conversion to integer',
            line: 130,
        );
    }

    #[Depends('testAssertTrap89')]
    public function testAssertTrap90(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '18444492273895866368']]],
            text: 'invalid conversion to integer',
            line: 131,
        );
    }

    #[Depends('testAssertTrap90')]
    public function testAssertTrap91(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '18443366373989023744']]],
            text: 'invalid conversion to integer',
            line: 132,
        );
    }

    #[Depends('testAssertTrap91')]
    public function testAssertReturn92(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 134,
        );
    }

    #[Depends('testAssertReturn92')]
    public function testAssertReturn93(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 135,
        );
    }

    #[Depends('testAssertReturn93')]
    public function testAssertReturn94(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 136,
        );
    }

    #[Depends('testAssertReturn94')]
    public function testAssertReturn95(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '9223372036854775809']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 137,
        );
    }

    #[Depends('testAssertReturn95')]
    public function testAssertReturn96(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4607182418800017408']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 138,
        );
    }

    #[Depends('testAssertReturn96')]
    public function testAssertReturn97(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4607632778762754458']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 139,
        );
    }

    #[Depends('testAssertReturn97')]
    public function testAssertReturn98(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4609434218613702656']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 140,
        );
    }

    #[Depends('testAssertReturn98')]
    public function testAssertReturn99(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4611235658464650854']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 141,
        );
    }

    #[Depends('testAssertReturn99')]
    public function testAssertReturn100(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4611686018427387904']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 142,
        );
    }

    #[Depends('testAssertReturn100')]
    public function testAssertReturn101(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4746794007248502784']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 143,
        );
    }

    #[Depends('testAssertReturn101')]
    public function testAssertReturn102(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4751297606873776128']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 144,
        );
    }

    #[Depends('testAssertReturn102')]
    public function testAssertReturn103(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '13829653735729319117']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 145,
        );
    }

    #[Depends('testAssertReturn103')]
    public function testAssertReturn104(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '13830554455654793215']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 146,
        );
    }

    #[Depends('testAssertReturn104')]
    public function testAssertReturn105(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4726483295884279808']]],
            expected: [['type' => 'i32', 'value' => '100000000']],
            line: 147,
        );
    }

    #[Depends('testAssertReturn105')]
    public function testAssertReturn106(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '13829653735729319117']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 148,
        );
    }

    #[Depends('testAssertReturn106')]
    public function testAssertReturn107(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4751297606875663565']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 149,
        );
    }

    #[Depends('testAssertReturn107')]
    public function testAssertTrap108(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4751297606875873280']]],
            text: 'integer overflow',
            line: 150,
        );
    }

    #[Depends('testAssertTrap108')]
    public function testAssertTrap109(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '13830554455654793216']]],
            text: 'integer overflow',
            line: 151,
        );
    }

    #[Depends('testAssertTrap109')]
    public function testAssertTrap110(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4846369599423283200']]],
            text: 'integer overflow',
            line: 152,
        );
    }

    #[Depends('testAssertTrap110')]
    public function testAssertTrap111(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '5055640609639927018']]],
            text: 'integer overflow',
            line: 153,
        );
    }

    #[Depends('testAssertTrap111')]
    public function testAssertTrap112(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4890909195324358656']]],
            text: 'integer overflow',
            line: 154,
        );
    }

    #[Depends('testAssertTrap112')]
    public function testAssertTrap113(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '9218868437227405312']]],
            text: 'integer overflow',
            line: 155,
        );
    }

    #[Depends('testAssertTrap113')]
    public function testAssertTrap114(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '18442240474082181120']]],
            text: 'integer overflow',
            line: 156,
        );
    }

    #[Depends('testAssertTrap114')]
    public function testAssertTrap115(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            text: 'invalid conversion to integer',
            line: 157,
        );
    }

    #[Depends('testAssertTrap115')]
    public function testAssertTrap116(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            text: 'invalid conversion to integer',
            line: 158,
        );
    }

    #[Depends('testAssertTrap116')]
    public function testAssertTrap117(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '18444492273895866368']]],
            text: 'invalid conversion to integer',
            line: 159,
        );
    }

    #[Depends('testAssertTrap117')]
    public function testAssertTrap118(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '18443366373989023744']]],
            text: 'invalid conversion to integer',
            line: 160,
        );
    }

    #[Depends('testAssertTrap118')]
    public function testAssertReturn119(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 162,
        );
    }

    #[Depends('testAssertReturn119')]
    public function testAssertReturn120(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 163,
        );
    }

    #[Depends('testAssertReturn120')]
    public function testAssertReturn121(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 164,
        );
    }

    #[Depends('testAssertReturn121')]
    public function testAssertReturn122(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 165,
        );
    }

    #[Depends('testAssertReturn122')]
    public function testAssertReturn123(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 166,
        );
    }

    #[Depends('testAssertReturn123')]
    public function testAssertReturn124(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '1066192077']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 167,
        );
    }

    #[Depends('testAssertReturn124')]
    public function testAssertReturn125(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '1069547520']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 168,
        );
    }

    #[Depends('testAssertReturn125')]
    public function testAssertReturn126(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 169,
        );
    }

    #[Depends('testAssertReturn126')]
    public function testAssertReturn127(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '3213675725']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 170,
        );
    }

    #[Depends('testAssertReturn127')]
    public function testAssertReturn128(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '3217031168']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 171,
        );
    }

    #[Depends('testAssertReturn128')]
    public function testAssertReturn129(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '3220386611']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 172,
        );
    }

    #[Depends('testAssertReturn129')]
    public function testAssertReturn130(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '3221225472']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551614']],
            line: 173,
        );
    }

    #[Depends('testAssertReturn130')]
    public function testAssertReturn131(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '1333788672']]],
            expected: [['type' => 'i64', 'value' => '4294967296']],
            line: 174,
        );
    }

    #[Depends('testAssertReturn131')]
    public function testAssertReturn132(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '3481272320']]],
            expected: [['type' => 'i64', 'value' => '18446744069414584320']],
            line: 175,
        );
    }

    #[Depends('testAssertReturn132')]
    public function testAssertReturn133(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '1593835519']]],
            expected: [['type' => 'i64', 'value' => '9223371487098961920']],
            line: 176,
        );
    }

    #[Depends('testAssertReturn133')]
    public function testAssertReturn134(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '3741319168']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 177,
        );
    }

    #[Depends('testAssertReturn134')]
    public function testAssertTrap135(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '1593835520']]],
            text: 'integer overflow',
            line: 178,
        );
    }

    #[Depends('testAssertTrap135')]
    public function testAssertTrap136(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '3741319169']]],
            text: 'integer overflow',
            line: 179,
        );
    }

    #[Depends('testAssertTrap136')]
    public function testAssertTrap137(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            text: 'integer overflow',
            line: 180,
        );
    }

    #[Depends('testAssertTrap137')]
    public function testAssertTrap138(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '4286578688']]],
            text: 'integer overflow',
            line: 181,
        );
    }

    #[Depends('testAssertTrap138')]
    public function testAssertTrap139(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            text: 'invalid conversion to integer',
            line: 182,
        );
    }

    #[Depends('testAssertTrap139')]
    public function testAssertTrap140(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            text: 'invalid conversion to integer',
            line: 183,
        );
    }

    #[Depends('testAssertTrap140')]
    public function testAssertTrap141(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            text: 'invalid conversion to integer',
            line: 184,
        );
    }

    #[Depends('testAssertTrap141')]
    public function testAssertTrap142(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_s', 'args' => [['type' => 'f32', 'value' => '4288675840']]],
            text: 'invalid conversion to integer',
            line: 185,
        );
    }

    #[Depends('testAssertTrap142')]
    public function testAssertReturn143(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 187,
        );
    }

    #[Depends('testAssertReturn143')]
    public function testAssertReturn144(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 188,
        );
    }

    #[Depends('testAssertReturn144')]
    public function testAssertReturn145(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 189,
        );
    }

    #[Depends('testAssertReturn145')]
    public function testAssertReturn146(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 190,
        );
    }

    #[Depends('testAssertReturn146')]
    public function testAssertReturn147(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 191,
        );
    }

    #[Depends('testAssertReturn147')]
    public function testAssertReturn148(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '1066192077']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 192,
        );
    }

    #[Depends('testAssertReturn148')]
    public function testAssertReturn149(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '1069547520']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 193,
        );
    }

    #[Depends('testAssertReturn149')]
    public function testAssertReturn150(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '1333788672']]],
            expected: [['type' => 'i64', 'value' => '4294967296']],
            line: 194,
        );
    }

    #[Depends('testAssertReturn150')]
    public function testAssertReturn151(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '1602224127']]],
            expected: [['type' => 'i64', 'value' => '18446742974197923840']],
            line: 195,
        );
    }

    #[Depends('testAssertReturn151')]
    public function testAssertReturn152(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '3211159142']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 196,
        );
    }

    #[Depends('testAssertReturn152')]
    public function testAssertReturn153(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '3212836863']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 197,
        );
    }

    #[Depends('testAssertReturn153')]
    public function testAssertTrap154(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '1602224128']]],
            text: 'integer overflow',
            line: 198,
        );
    }

    #[Depends('testAssertTrap154')]
    public function testAssertTrap155(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '3212836864']]],
            text: 'integer overflow',
            line: 199,
        );
    }

    #[Depends('testAssertTrap155')]
    public function testAssertTrap156(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            text: 'integer overflow',
            line: 200,
        );
    }

    #[Depends('testAssertTrap156')]
    public function testAssertTrap157(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '4286578688']]],
            text: 'integer overflow',
            line: 201,
        );
    }

    #[Depends('testAssertTrap157')]
    public function testAssertTrap158(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            text: 'invalid conversion to integer',
            line: 202,
        );
    }

    #[Depends('testAssertTrap158')]
    public function testAssertTrap159(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            text: 'invalid conversion to integer',
            line: 203,
        );
    }

    #[Depends('testAssertTrap159')]
    public function testAssertTrap160(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            text: 'invalid conversion to integer',
            line: 204,
        );
    }

    #[Depends('testAssertTrap160')]
    public function testAssertTrap161(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f32_u', 'args' => [['type' => 'f32', 'value' => '4288675840']]],
            text: 'invalid conversion to integer',
            line: 205,
        );
    }

    #[Depends('testAssertTrap161')]
    public function testAssertReturn162(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 207,
        );
    }

    #[Depends('testAssertReturn162')]
    public function testAssertReturn163(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 208,
        );
    }

    #[Depends('testAssertReturn163')]
    public function testAssertReturn164(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 209,
        );
    }

    #[Depends('testAssertReturn164')]
    public function testAssertReturn165(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '9223372036854775809']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 210,
        );
    }

    #[Depends('testAssertReturn165')]
    public function testAssertReturn166(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '4607182418800017408']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 211,
        );
    }

    #[Depends('testAssertReturn166')]
    public function testAssertReturn167(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '4607632778762754458']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 212,
        );
    }

    #[Depends('testAssertReturn167')]
    public function testAssertReturn168(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '4609434218613702656']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 213,
        );
    }

    #[Depends('testAssertReturn168')]
    public function testAssertReturn169(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '13830554455654793216']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 214,
        );
    }

    #[Depends('testAssertReturn169')]
    public function testAssertReturn170(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '13831004815617530266']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 215,
        );
    }

    #[Depends('testAssertReturn170')]
    public function testAssertReturn171(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '13832806255468478464']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 216,
        );
    }

    #[Depends('testAssertReturn171')]
    public function testAssertReturn172(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '13834607695319426662']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 217,
        );
    }

    #[Depends('testAssertReturn172')]
    public function testAssertReturn173(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '13835058055282163712']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551614']],
            line: 218,
        );
    }

    #[Depends('testAssertReturn173')]
    public function testAssertReturn174(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '4751297606875873280']]],
            expected: [['type' => 'i64', 'value' => '4294967296']],
            line: 219,
        );
    }

    #[Depends('testAssertReturn174')]
    public function testAssertReturn175(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '13974669643730649088']]],
            expected: [['type' => 'i64', 'value' => '18446744069414584320']],
            line: 220,
        );
    }

    #[Depends('testAssertReturn175')]
    public function testAssertReturn176(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '4890909195324358655']]],
            expected: [['type' => 'i64', 'value' => '9223372036854774784']],
            line: 221,
        );
    }

    #[Depends('testAssertReturn176')]
    public function testAssertReturn177(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '14114281232179134464']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 222,
        );
    }

    #[Depends('testAssertReturn177')]
    public function testAssertTrap178(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '4890909195324358656']]],
            text: 'integer overflow',
            line: 223,
        );
    }

    #[Depends('testAssertTrap178')]
    public function testAssertTrap179(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '14114281232179134465']]],
            text: 'integer overflow',
            line: 224,
        );
    }

    #[Depends('testAssertTrap179')]
    public function testAssertTrap180(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '9218868437227405312']]],
            text: 'integer overflow',
            line: 225,
        );
    }

    #[Depends('testAssertTrap180')]
    public function testAssertTrap181(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '18442240474082181120']]],
            text: 'integer overflow',
            line: 226,
        );
    }

    #[Depends('testAssertTrap181')]
    public function testAssertTrap182(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            text: 'invalid conversion to integer',
            line: 227,
        );
    }

    #[Depends('testAssertTrap182')]
    public function testAssertTrap183(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            text: 'invalid conversion to integer',
            line: 228,
        );
    }

    #[Depends('testAssertTrap183')]
    public function testAssertTrap184(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '18444492273895866368']]],
            text: 'invalid conversion to integer',
            line: 229,
        );
    }

    #[Depends('testAssertTrap184')]
    public function testAssertTrap185(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_s', 'args' => [['type' => 'f64', 'value' => '18443366373989023744']]],
            text: 'invalid conversion to integer',
            line: 230,
        );
    }

    #[Depends('testAssertTrap185')]
    public function testAssertReturn186(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 232,
        );
    }

    #[Depends('testAssertReturn186')]
    public function testAssertReturn187(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 233,
        );
    }

    #[Depends('testAssertReturn187')]
    public function testAssertReturn188(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 234,
        );
    }

    #[Depends('testAssertReturn188')]
    public function testAssertReturn189(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '9223372036854775809']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 235,
        );
    }

    #[Depends('testAssertReturn189')]
    public function testAssertReturn190(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4607182418800017408']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 236,
        );
    }

    #[Depends('testAssertReturn190')]
    public function testAssertReturn191(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4607632778762754458']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 237,
        );
    }

    #[Depends('testAssertReturn191')]
    public function testAssertReturn192(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4609434218613702656']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 238,
        );
    }

    #[Depends('testAssertReturn192')]
    public function testAssertReturn193(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4751297606873776128']]],
            expected: [['type' => 'i64', 'value' => '4294967295']],
            line: 239,
        );
    }

    #[Depends('testAssertReturn193')]
    public function testAssertReturn194(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4751297606875873280']]],
            expected: [['type' => 'i64', 'value' => '4294967296']],
            line: 240,
        );
    }

    #[Depends('testAssertReturn194')]
    public function testAssertReturn195(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4895412794951729151']]],
            expected: [['type' => 'i64', 'value' => '18446744073709549568']],
            line: 241,
        );
    }

    #[Depends('testAssertReturn195')]
    public function testAssertReturn196(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '13829653735729319117']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 242,
        );
    }

    #[Depends('testAssertReturn196')]
    public function testAssertReturn197(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '13830554455654793215']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 243,
        );
    }

    #[Depends('testAssertReturn197')]
    public function testAssertReturn198(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4726483295884279808']]],
            expected: [['type' => 'i64', 'value' => '100000000']],
            line: 244,
        );
    }

    #[Depends('testAssertReturn198')]
    public function testAssertReturn199(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4846369599423283200']]],
            expected: [['type' => 'i64', 'value' => '10000000000000000']],
            line: 245,
        );
    }

    #[Depends('testAssertReturn199')]
    public function testAssertReturn200(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4890909195324358656']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 246,
        );
    }

    #[Depends('testAssertReturn200')]
    public function testAssertTrap201(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '4895412794951729152']]],
            text: 'integer overflow',
            line: 247,
        );
    }

    #[Depends('testAssertTrap201')]
    public function testAssertTrap202(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '13830554455654793216']]],
            text: 'integer overflow',
            line: 248,
        );
    }

    #[Depends('testAssertTrap202')]
    public function testAssertTrap203(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '9218868437227405312']]],
            text: 'integer overflow',
            line: 249,
        );
    }

    #[Depends('testAssertTrap203')]
    public function testAssertTrap204(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '18442240474082181120']]],
            text: 'integer overflow',
            line: 250,
        );
    }

    #[Depends('testAssertTrap204')]
    public function testAssertTrap205(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            text: 'invalid conversion to integer',
            line: 251,
        );
    }

    #[Depends('testAssertTrap205')]
    public function testAssertTrap206(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            text: 'invalid conversion to integer',
            line: 252,
        );
    }

    #[Depends('testAssertTrap206')]
    public function testAssertTrap207(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '18444492273895866368']]],
            text: 'invalid conversion to integer',
            line: 253,
        );
    }

    #[Depends('testAssertTrap207')]
    public function testAssertTrap208(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_f64_u', 'args' => [['type' => 'f64', 'value' => '18443366373989023744']]],
            text: 'invalid conversion to integer',
            line: 254,
        );
    }

    #[Depends('testAssertTrap208')]
    public function testAssertReturn209(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_s', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 256,
        );
    }

    #[Depends('testAssertReturn209')]
    public function testAssertReturn210(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_s', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 257,
        );
    }

    #[Depends('testAssertReturn210')]
    public function testAssertReturn211(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_s', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 258,
        );
    }

    #[Depends('testAssertReturn211')]
    public function testAssertReturn212(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_s', 'args' => [['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'f32', 'value' => '1325400064']],
            line: 259,
        );
    }

    #[Depends('testAssertReturn212')]
    public function testAssertReturn213(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_s', 'args' => [['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '3472883712']],
            line: 260,
        );
    }

    #[Depends('testAssertReturn213')]
    public function testAssertReturn214(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_s', 'args' => [['type' => 'i32', 'value' => '1234567890']]],
            expected: [['type' => 'f32', 'value' => '1318267910']],
            line: 261,
        );
    }

    #[Depends('testAssertReturn214')]
    public function testAssertReturn215(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 265,
        );
    }

    #[Depends('testAssertReturn215')]
    public function testAssertReturn216(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 266,
        );
    }

    #[Depends('testAssertReturn216')]
    public function testAssertReturn217(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 267,
        );
    }

    #[Depends('testAssertReturn217')]
    public function testAssertReturn218(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 268,
        );
    }

    #[Depends('testAssertReturn218')]
    public function testAssertReturn219(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 269,
        );
    }

    #[Depends('testAssertReturn219')]
    public function testAssertReturn220(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '1066192077']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 270,
        );
    }

    #[Depends('testAssertReturn220')]
    public function testAssertReturn221(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '1069547520']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 271,
        );
    }

    #[Depends('testAssertReturn221')]
    public function testAssertReturn222(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 272,
        );
    }

    #[Depends('testAssertReturn222')]
    public function testAssertReturn223(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '3213675725']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 273,
        );
    }

    #[Depends('testAssertReturn223')]
    public function testAssertReturn224(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '3217031168']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 274,
        );
    }

    #[Depends('testAssertReturn224')]
    public function testAssertReturn225(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '3220386611']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 275,
        );
    }

    #[Depends('testAssertReturn225')]
    public function testAssertReturn226(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '3221225472']]],
            expected: [['type' => 'i32', 'value' => '4294967294']],
            line: 276,
        );
    }

    #[Depends('testAssertReturn226')]
    public function testAssertReturn227(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '1325400063']]],
            expected: [['type' => 'i32', 'value' => '2147483520']],
            line: 277,
        );
    }

    #[Depends('testAssertReturn227')]
    public function testAssertReturn228(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '3472883712']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 278,
        );
    }

    #[Depends('testAssertReturn228')]
    public function testAssertReturn229(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '1325400064']]],
            expected: [['type' => 'i32', 'value' => '2147483647']],
            line: 279,
        );
    }

    #[Depends('testAssertReturn229')]
    public function testAssertReturn230(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '3472883713']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 280,
        );
    }

    #[Depends('testAssertReturn230')]
    public function testAssertReturn231(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '2147483647']],
            line: 281,
        );
    }

    #[Depends('testAssertReturn231')]
    public function testAssertReturn232(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 282,
        );
    }

    #[Depends('testAssertReturn232')]
    public function testAssertReturn233(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 283,
        );
    }

    #[Depends('testAssertReturn233')]
    public function testAssertReturn234(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 284,
        );
    }

    #[Depends('testAssertReturn234')]
    public function testAssertReturn235(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 285,
        );
    }

    #[Depends('testAssertReturn235')]
    public function testAssertReturn236(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 286,
        );
    }

    #[Depends('testAssertReturn236')]
    public function testAssertReturn237(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 288,
        );
    }

    #[Depends('testAssertReturn237')]
    public function testAssertReturn238(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 289,
        );
    }

    #[Depends('testAssertReturn238')]
    public function testAssertReturn239(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 290,
        );
    }

    #[Depends('testAssertReturn239')]
    public function testAssertReturn240(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 291,
        );
    }

    #[Depends('testAssertReturn240')]
    public function testAssertReturn241(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 292,
        );
    }

    #[Depends('testAssertReturn241')]
    public function testAssertReturn242(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '1066192077']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 293,
        );
    }

    #[Depends('testAssertReturn242')]
    public function testAssertReturn243(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '1069547520']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 294,
        );
    }

    #[Depends('testAssertReturn243')]
    public function testAssertReturn244(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '1072902963']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 295,
        );
    }

    #[Depends('testAssertReturn244')]
    public function testAssertReturn245(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '1073741824']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 296,
        );
    }

    #[Depends('testAssertReturn245')]
    public function testAssertReturn246(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '1325400064']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 297,
        );
    }

    #[Depends('testAssertReturn246')]
    public function testAssertReturn247(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '1333788671']]],
            expected: [['type' => 'i32', 'value' => '4294967040']],
            line: 298,
        );
    }

    #[Depends('testAssertReturn247')]
    public function testAssertReturn248(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '3211159142']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 299,
        );
    }

    #[Depends('testAssertReturn248')]
    public function testAssertReturn249(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '3212836863']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 300,
        );
    }

    #[Depends('testAssertReturn249')]
    public function testAssertReturn250(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '1333788672']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 301,
        );
    }

    #[Depends('testAssertReturn250')]
    public function testAssertReturn251(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 302,
        );
    }

    #[Depends('testAssertReturn251')]
    public function testAssertReturn252(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 303,
        );
    }

    #[Depends('testAssertReturn252')]
    public function testAssertReturn253(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 304,
        );
    }

    #[Depends('testAssertReturn253')]
    public function testAssertReturn254(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 305,
        );
    }

    #[Depends('testAssertReturn254')]
    public function testAssertReturn255(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 306,
        );
    }

    #[Depends('testAssertReturn255')]
    public function testAssertReturn256(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 307,
        );
    }

    #[Depends('testAssertReturn256')]
    public function testAssertReturn257(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 308,
        );
    }

    #[Depends('testAssertReturn257')]
    public function testAssertReturn258(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 310,
        );
    }

    #[Depends('testAssertReturn258')]
    public function testAssertReturn259(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 311,
        );
    }

    #[Depends('testAssertReturn259')]
    public function testAssertReturn260(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 312,
        );
    }

    #[Depends('testAssertReturn260')]
    public function testAssertReturn261(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '9223372036854775809']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 313,
        );
    }

    #[Depends('testAssertReturn261')]
    public function testAssertReturn262(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '4607182418800017408']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 314,
        );
    }

    #[Depends('testAssertReturn262')]
    public function testAssertReturn263(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '4607632778762754458']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 315,
        );
    }

    #[Depends('testAssertReturn263')]
    public function testAssertReturn264(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '4609434218613702656']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 316,
        );
    }

    #[Depends('testAssertReturn264')]
    public function testAssertReturn265(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '13830554455654793216']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 317,
        );
    }

    #[Depends('testAssertReturn265')]
    public function testAssertReturn266(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '13831004815617530266']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 318,
        );
    }

    #[Depends('testAssertReturn266')]
    public function testAssertReturn267(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '13832806255468478464']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 319,
        );
    }

    #[Depends('testAssertReturn267')]
    public function testAssertReturn268(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '13834607695319426662']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 320,
        );
    }

    #[Depends('testAssertReturn268')]
    public function testAssertReturn269(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '13835058055282163712']]],
            expected: [['type' => 'i32', 'value' => '4294967294']],
            line: 321,
        );
    }

    #[Depends('testAssertReturn269')]
    public function testAssertReturn270(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '4746794007244308480']]],
            expected: [['type' => 'i32', 'value' => '2147483647']],
            line: 322,
        );
    }

    #[Depends('testAssertReturn270')]
    public function testAssertReturn271(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '13970166044103278592']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 323,
        );
    }

    #[Depends('testAssertReturn271')]
    public function testAssertReturn272(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '4746794007248502784']]],
            expected: [['type' => 'i32', 'value' => '2147483647']],
            line: 324,
        );
    }

    #[Depends('testAssertReturn272')]
    public function testAssertReturn273(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '13970166044105375744']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 325,
        );
    }

    #[Depends('testAssertReturn273')]
    public function testAssertReturn274(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '9218868437227405312']]],
            expected: [['type' => 'i32', 'value' => '2147483647']],
            line: 326,
        );
    }

    #[Depends('testAssertReturn274')]
    public function testAssertReturn275(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '18442240474082181120']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 327,
        );
    }

    #[Depends('testAssertReturn275')]
    public function testAssertReturn276(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 328,
        );
    }

    #[Depends('testAssertReturn276')]
    public function testAssertReturn277(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 329,
        );
    }

    #[Depends('testAssertReturn277')]
    public function testAssertReturn278(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '18444492273895866368']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 330,
        );
    }

    #[Depends('testAssertReturn278')]
    public function testAssertReturn279(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '18443366373989023744']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 331,
        );
    }

    #[Depends('testAssertReturn279')]
    public function testAssertReturn280(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 333,
        );
    }

    #[Depends('testAssertReturn280')]
    public function testAssertReturn281(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 334,
        );
    }

    #[Depends('testAssertReturn281')]
    public function testAssertReturn282(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 335,
        );
    }

    #[Depends('testAssertReturn282')]
    public function testAssertReturn283(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '9223372036854775809']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 336,
        );
    }

    #[Depends('testAssertReturn283')]
    public function testAssertReturn284(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4607182418800017408']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 337,
        );
    }

    #[Depends('testAssertReturn284')]
    public function testAssertReturn285(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4607632778762754458']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 338,
        );
    }

    #[Depends('testAssertReturn285')]
    public function testAssertReturn286(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4609434218613702656']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 339,
        );
    }

    #[Depends('testAssertReturn286')]
    public function testAssertReturn287(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4611235658464650854']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 340,
        );
    }

    #[Depends('testAssertReturn287')]
    public function testAssertReturn288(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4611686018427387904']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 341,
        );
    }

    #[Depends('testAssertReturn288')]
    public function testAssertReturn289(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4746794007248502784']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 342,
        );
    }

    #[Depends('testAssertReturn289')]
    public function testAssertReturn290(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4751297606873776128']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 343,
        );
    }

    #[Depends('testAssertReturn290')]
    public function testAssertReturn291(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '13829653735729319117']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 344,
        );
    }

    #[Depends('testAssertReturn291')]
    public function testAssertReturn292(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '13830554455654793215']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 345,
        );
    }

    #[Depends('testAssertReturn292')]
    public function testAssertReturn293(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4726483295884279808']]],
            expected: [['type' => 'i32', 'value' => '100000000']],
            line: 346,
        );
    }

    #[Depends('testAssertReturn293')]
    public function testAssertReturn294(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4751297606875873280']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 347,
        );
    }

    #[Depends('testAssertReturn294')]
    public function testAssertReturn295(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '13830554455654793216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 348,
        );
    }

    #[Depends('testAssertReturn295')]
    public function testAssertReturn296(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4846369599423283200']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 349,
        );
    }

    #[Depends('testAssertReturn296')]
    public function testAssertReturn297(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '5055640609639927018']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 350,
        );
    }

    #[Depends('testAssertReturn297')]
    public function testAssertReturn298(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4890909195324358656']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 351,
        );
    }

    #[Depends('testAssertReturn298')]
    public function testAssertReturn299(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '9218868437227405312']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 352,
        );
    }

    #[Depends('testAssertReturn299')]
    public function testAssertReturn300(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '18442240474082181120']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 353,
        );
    }

    #[Depends('testAssertReturn300')]
    public function testAssertReturn301(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 354,
        );
    }

    #[Depends('testAssertReturn301')]
    public function testAssertReturn302(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 355,
        );
    }

    #[Depends('testAssertReturn302')]
    public function testAssertReturn303(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '18444492273895866368']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 356,
        );
    }

    #[Depends('testAssertReturn303')]
    public function testAssertReturn304(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '18443366373989023744']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 357,
        );
    }

    #[Depends('testAssertReturn304')]
    public function testAssertReturn305(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 359,
        );
    }

    #[Depends('testAssertReturn305')]
    public function testAssertReturn306(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 360,
        );
    }

    #[Depends('testAssertReturn306')]
    public function testAssertReturn307(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 361,
        );
    }

    #[Depends('testAssertReturn307')]
    public function testAssertReturn308(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 362,
        );
    }

    #[Depends('testAssertReturn308')]
    public function testAssertReturn309(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 363,
        );
    }

    #[Depends('testAssertReturn309')]
    public function testAssertReturn310(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '1066192077']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 364,
        );
    }

    #[Depends('testAssertReturn310')]
    public function testAssertReturn311(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '1069547520']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 365,
        );
    }

    #[Depends('testAssertReturn311')]
    public function testAssertReturn312(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 366,
        );
    }

    #[Depends('testAssertReturn312')]
    public function testAssertReturn313(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '3213675725']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 367,
        );
    }

    #[Depends('testAssertReturn313')]
    public function testAssertReturn314(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '3217031168']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 368,
        );
    }

    #[Depends('testAssertReturn314')]
    public function testAssertReturn315(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '3220386611']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 369,
        );
    }

    #[Depends('testAssertReturn315')]
    public function testAssertReturn316(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '3221225472']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551614']],
            line: 370,
        );
    }

    #[Depends('testAssertReturn316')]
    public function testAssertReturn317(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '1333788672']]],
            expected: [['type' => 'i64', 'value' => '4294967296']],
            line: 371,
        );
    }

    #[Depends('testAssertReturn317')]
    public function testAssertReturn318(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '3481272320']]],
            expected: [['type' => 'i64', 'value' => '18446744069414584320']],
            line: 372,
        );
    }

    #[Depends('testAssertReturn318')]
    public function testAssertReturn319(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '1593835519']]],
            expected: [['type' => 'i64', 'value' => '9223371487098961920']],
            line: 373,
        );
    }

    #[Depends('testAssertReturn319')]
    public function testAssertReturn320(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '3741319168']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 374,
        );
    }

    #[Depends('testAssertReturn320')]
    public function testAssertReturn321(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '1593835520']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775807']],
            line: 375,
        );
    }

    #[Depends('testAssertReturn321')]
    public function testAssertReturn322(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '3741319169']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 376,
        );
    }

    #[Depends('testAssertReturn322')]
    public function testAssertReturn323(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775807']],
            line: 377,
        );
    }

    #[Depends('testAssertReturn323')]
    public function testAssertReturn324(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 378,
        );
    }

    #[Depends('testAssertReturn324')]
    public function testAssertReturn325(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 379,
        );
    }

    #[Depends('testAssertReturn325')]
    public function testAssertReturn326(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 380,
        );
    }

    #[Depends('testAssertReturn326')]
    public function testAssertReturn327(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 381,
        );
    }

    #[Depends('testAssertReturn327')]
    public function testAssertReturn328(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_s', 'args' => [['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 382,
        );
    }

    #[Depends('testAssertReturn328')]
    public function testAssertReturn329(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 384,
        );
    }

    #[Depends('testAssertReturn329')]
    public function testAssertReturn330(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 385,
        );
    }

    #[Depends('testAssertReturn330')]
    public function testAssertReturn331(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 386,
        );
    }

    #[Depends('testAssertReturn331')]
    public function testAssertReturn332(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 387,
        );
    }

    #[Depends('testAssertReturn332')]
    public function testAssertReturn333(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 388,
        );
    }

    #[Depends('testAssertReturn333')]
    public function testAssertReturn334(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '1066192077']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 389,
        );
    }

    #[Depends('testAssertReturn334')]
    public function testAssertReturn335(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '1069547520']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 390,
        );
    }

    #[Depends('testAssertReturn335')]
    public function testAssertReturn336(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '1333788672']]],
            expected: [['type' => 'i64', 'value' => '4294967296']],
            line: 391,
        );
    }

    #[Depends('testAssertReturn336')]
    public function testAssertReturn337(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '1602224127']]],
            expected: [['type' => 'i64', 'value' => '18446742974197923840']],
            line: 392,
        );
    }

    #[Depends('testAssertReturn337')]
    public function testAssertReturn338(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '3211159142']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 393,
        );
    }

    #[Depends('testAssertReturn338')]
    public function testAssertReturn339(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '3212836863']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 394,
        );
    }

    #[Depends('testAssertReturn339')]
    public function testAssertReturn340(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '1602224128']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 395,
        );
    }

    #[Depends('testAssertReturn340')]
    public function testAssertReturn341(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 396,
        );
    }

    #[Depends('testAssertReturn341')]
    public function testAssertReturn342(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 397,
        );
    }

    #[Depends('testAssertReturn342')]
    public function testAssertReturn343(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 398,
        );
    }

    #[Depends('testAssertReturn343')]
    public function testAssertReturn344(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 399,
        );
    }

    #[Depends('testAssertReturn344')]
    public function testAssertReturn345(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 400,
        );
    }

    #[Depends('testAssertReturn345')]
    public function testAssertReturn346(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 401,
        );
    }

    #[Depends('testAssertReturn346')]
    public function testAssertReturn347(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f32_u', 'args' => [['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 402,
        );
    }

    #[Depends('testAssertReturn347')]
    public function testAssertReturn348(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 404,
        );
    }

    #[Depends('testAssertReturn348')]
    public function testAssertReturn349(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 405,
        );
    }

    #[Depends('testAssertReturn349')]
    public function testAssertReturn350(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 406,
        );
    }

    #[Depends('testAssertReturn350')]
    public function testAssertReturn351(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '9223372036854775809']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 407,
        );
    }

    #[Depends('testAssertReturn351')]
    public function testAssertReturn352(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '4607182418800017408']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 408,
        );
    }

    #[Depends('testAssertReturn352')]
    public function testAssertReturn353(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '4607632778762754458']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 409,
        );
    }

    #[Depends('testAssertReturn353')]
    public function testAssertReturn354(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '4609434218613702656']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 410,
        );
    }

    #[Depends('testAssertReturn354')]
    public function testAssertReturn355(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '13830554455654793216']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 411,
        );
    }

    #[Depends('testAssertReturn355')]
    public function testAssertReturn356(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '13831004815617530266']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 412,
        );
    }

    #[Depends('testAssertReturn356')]
    public function testAssertReturn357(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '13832806255468478464']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 413,
        );
    }

    #[Depends('testAssertReturn357')]
    public function testAssertReturn358(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '13834607695319426662']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 414,
        );
    }

    #[Depends('testAssertReturn358')]
    public function testAssertReturn359(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '13835058055282163712']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551614']],
            line: 415,
        );
    }

    #[Depends('testAssertReturn359')]
    public function testAssertReturn360(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '4751297606875873280']]],
            expected: [['type' => 'i64', 'value' => '4294967296']],
            line: 416,
        );
    }

    #[Depends('testAssertReturn360')]
    public function testAssertReturn361(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '13974669643730649088']]],
            expected: [['type' => 'i64', 'value' => '18446744069414584320']],
            line: 417,
        );
    }

    #[Depends('testAssertReturn361')]
    public function testAssertReturn362(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '4890909195324358655']]],
            expected: [['type' => 'i64', 'value' => '9223372036854774784']],
            line: 418,
        );
    }

    #[Depends('testAssertReturn362')]
    public function testAssertReturn363(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '14114281232179134464']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 419,
        );
    }

    #[Depends('testAssertReturn363')]
    public function testAssertReturn364(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '4890909195324358656']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775807']],
            line: 420,
        );
    }

    #[Depends('testAssertReturn364')]
    public function testAssertReturn365(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '14114281232179134465']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 421,
        );
    }

    #[Depends('testAssertReturn365')]
    public function testAssertReturn366(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '9218868437227405312']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775807']],
            line: 422,
        );
    }

    #[Depends('testAssertReturn366')]
    public function testAssertReturn367(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '18442240474082181120']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 423,
        );
    }

    #[Depends('testAssertReturn367')]
    public function testAssertReturn368(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 424,
        );
    }

    #[Depends('testAssertReturn368')]
    public function testAssertReturn369(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 425,
        );
    }

    #[Depends('testAssertReturn369')]
    public function testAssertReturn370(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '18444492273895866368']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 426,
        );
    }

    #[Depends('testAssertReturn370')]
    public function testAssertReturn371(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_s', 'args' => [['type' => 'f64', 'value' => '18443366373989023744']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 427,
        );
    }

    #[Depends('testAssertReturn371')]
    public function testAssertReturn372(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 429,
        );
    }

    #[Depends('testAssertReturn372')]
    public function testAssertReturn373(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 430,
        );
    }

    #[Depends('testAssertReturn373')]
    public function testAssertReturn374(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 431,
        );
    }

    #[Depends('testAssertReturn374')]
    public function testAssertReturn375(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '9223372036854775809']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 432,
        );
    }

    #[Depends('testAssertReturn375')]
    public function testAssertReturn376(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4607182418800017408']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 433,
        );
    }

    #[Depends('testAssertReturn376')]
    public function testAssertReturn377(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4607632778762754458']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 434,
        );
    }

    #[Depends('testAssertReturn377')]
    public function testAssertReturn378(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4609434218613702656']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 435,
        );
    }

    #[Depends('testAssertReturn378')]
    public function testAssertReturn379(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4751297606873776128']]],
            expected: [['type' => 'i64', 'value' => '4294967295']],
            line: 436,
        );
    }

    #[Depends('testAssertReturn379')]
    public function testAssertReturn380(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4751297606875873280']]],
            expected: [['type' => 'i64', 'value' => '4294967296']],
            line: 437,
        );
    }

    #[Depends('testAssertReturn380')]
    public function testAssertReturn381(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4895412794951729151']]],
            expected: [['type' => 'i64', 'value' => '18446744073709549568']],
            line: 438,
        );
    }

    #[Depends('testAssertReturn381')]
    public function testAssertReturn382(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '13829653735729319117']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 439,
        );
    }

    #[Depends('testAssertReturn382')]
    public function testAssertReturn383(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '13830554455654793215']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 440,
        );
    }

    #[Depends('testAssertReturn383')]
    public function testAssertReturn384(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4726483295884279808']]],
            expected: [['type' => 'i64', 'value' => '100000000']],
            line: 441,
        );
    }

    #[Depends('testAssertReturn384')]
    public function testAssertReturn385(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4846369599423283200']]],
            expected: [['type' => 'i64', 'value' => '10000000000000000']],
            line: 442,
        );
    }

    #[Depends('testAssertReturn385')]
    public function testAssertReturn386(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4890909195324358656']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 443,
        );
    }

    #[Depends('testAssertReturn386')]
    public function testAssertReturn387(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '4895412794951729152']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 444,
        );
    }

    #[Depends('testAssertReturn387')]
    public function testAssertReturn388(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '13830554455654793216']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 445,
        );
    }

    #[Depends('testAssertReturn388')]
    public function testAssertReturn389(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '9218868437227405312']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 446,
        );
    }

    #[Depends('testAssertReturn389')]
    public function testAssertReturn390(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '18442240474082181120']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 447,
        );
    }

    #[Depends('testAssertReturn390')]
    public function testAssertReturn391(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 448,
        );
    }

    #[Depends('testAssertReturn391')]
    public function testAssertReturn392(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 449,
        );
    }

    #[Depends('testAssertReturn392')]
    public function testAssertReturn393(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '18444492273895866368']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 450,
        );
    }

    #[Depends('testAssertReturn393')]
    public function testAssertReturn394(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.trunc_sat_f64_u', 'args' => [['type' => 'f64', 'value' => '18443366373989023744']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 451,
        );
    }

    #[Depends('testAssertReturn394')]
    public function testAssertReturn395(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_s', 'args' => [['type' => 'i32', 'value' => '16777217']]],
            expected: [['type' => 'f32', 'value' => '1266679808']],
            line: 454,
        );
    }

    #[Depends('testAssertReturn395')]
    public function testAssertReturn396(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_s', 'args' => [['type' => 'i32', 'value' => '4278190079']]],
            expected: [['type' => 'f32', 'value' => '3414163456']],
            line: 455,
        );
    }

    #[Depends('testAssertReturn396')]
    public function testAssertReturn397(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_s', 'args' => [['type' => 'i32', 'value' => '16777219']]],
            expected: [['type' => 'f32', 'value' => '1266679810']],
            line: 456,
        );
    }

    #[Depends('testAssertReturn397')]
    public function testAssertReturn398(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_s', 'args' => [['type' => 'i32', 'value' => '4278190077']]],
            expected: [['type' => 'f32', 'value' => '3414163458']],
            line: 457,
        );
    }

    #[Depends('testAssertReturn398')]
    public function testAssertReturn399(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 459,
        );
    }

    #[Depends('testAssertReturn399')]
    public function testAssertReturn400(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 460,
        );
    }

    #[Depends('testAssertReturn400')]
    public function testAssertReturn401(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 461,
        );
    }

    #[Depends('testAssertReturn401')]
    public function testAssertReturn402(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'f32', 'value' => '1593835520']],
            line: 462,
        );
    }

    #[Depends('testAssertReturn402')]
    public function testAssertReturn403(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f32', 'value' => '3741319168']],
            line: 463,
        );
    }

    #[Depends('testAssertReturn403')]
    public function testAssertReturn404(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '314159265358979']]],
            expected: [['type' => 'f32', 'value' => '1468980468']],
            line: 464,
        );
    }

    #[Depends('testAssertReturn404')]
    public function testAssertReturn405(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '16777217']]],
            expected: [['type' => 'f32', 'value' => '1266679808']],
            line: 466,
        );
    }

    #[Depends('testAssertReturn405')]
    public function testAssertReturn406(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '18446744073692774399']]],
            expected: [['type' => 'f32', 'value' => '3414163456']],
            line: 467,
        );
    }

    #[Depends('testAssertReturn406')]
    public function testAssertReturn407(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '16777219']]],
            expected: [['type' => 'f32', 'value' => '1266679810']],
            line: 468,
        );
    }

    #[Depends('testAssertReturn407')]
    public function testAssertReturn408(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '18446744073692774397']]],
            expected: [['type' => 'f32', 'value' => '3414163458']],
            line: 469,
        );
    }

    #[Depends('testAssertReturn408')]
    public function testAssertReturn409(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '9223371212221054977']]],
            expected: [['type' => 'f32', 'value' => '1593835519']],
            line: 471,
        );
    }

    #[Depends('testAssertReturn409')]
    public function testAssertReturn410(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '9223372311732682753']]],
            expected: [['type' => 'f32', 'value' => '3741319167']],
            line: 472,
        );
    }

    #[Depends('testAssertReturn410')]
    public function testAssertReturn411(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '9007199791611905']]],
            expected: [['type' => 'f32', 'value' => '1509949441']],
            line: 473,
        );
    }

    #[Depends('testAssertReturn411')]
    public function testAssertReturn412(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '18437736873917939711']]],
            expected: [['type' => 'f32', 'value' => '3657433089']],
            line: 474,
        );
    }

    #[Depends('testAssertReturn412')]
    public function testAssertReturn413(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.convert_i32_s', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 476,
        );
    }

    #[Depends('testAssertReturn413')]
    public function testAssertReturn414(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.convert_i32_s', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'f64', 'value' => '13830554455654793216']],
            line: 477,
        );
    }

    #[Depends('testAssertReturn414')]
    public function testAssertReturn415(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.convert_i32_s', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 478,
        );
    }

    #[Depends('testAssertReturn415')]
    public function testAssertReturn416(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.convert_i32_s', 'args' => [['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'f64', 'value' => '4746794007244308480']],
            line: 479,
        );
    }

    #[Depends('testAssertReturn416')]
    public function testAssertReturn417(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.convert_i32_s', 'args' => [['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'f64', 'value' => '13970166044103278592']],
            line: 480,
        );
    }

    #[Depends('testAssertReturn417')]
    public function testAssertReturn418(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.convert_i32_s', 'args' => [['type' => 'i32', 'value' => '987654321']]],
            expected: [['type' => 'f64', 'value' => '4741568253304766464']],
            line: 481,
        );
    }

    #[Depends('testAssertReturn418')]
    public function testAssertReturn419(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 483,
        );
    }

    #[Depends('testAssertReturn419')]
    public function testAssertReturn420(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'f64', 'value' => '13830554455654793216']],
            line: 484,
        );
    }

    #[Depends('testAssertReturn420')]
    public function testAssertReturn421(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 485,
        );
    }

    #[Depends('testAssertReturn421')]
    public function testAssertReturn422(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'f64', 'value' => '4890909195324358656']],
            line: 486,
        );
    }

    #[Depends('testAssertReturn422')]
    public function testAssertReturn423(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => '14114281232179134464']],
            line: 487,
        );
    }

    #[Depends('testAssertReturn423')]
    public function testAssertReturn424(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '4669201609102990']]],
            expected: [['type' => 'f64', 'value' => '4841535201405015694']],
            line: 488,
        );
    }

    #[Depends('testAssertReturn424')]
    public function testAssertReturn425(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '9007199254740993']]],
            expected: [['type' => 'f64', 'value' => '4845873199050653696']],
            line: 490,
        );
    }

    #[Depends('testAssertReturn425')]
    public function testAssertReturn426(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '18437736874454810623']]],
            expected: [['type' => 'f64', 'value' => '14069245235905429504']],
            line: 491,
        );
    }

    #[Depends('testAssertReturn426')]
    public function testAssertReturn427(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '9007199254740995']]],
            expected: [['type' => 'f64', 'value' => '4845873199050653698']],
            line: 492,
        );
    }

    #[Depends('testAssertReturn427')]
    public function testAssertReturn428(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_s', 'args' => [['type' => 'i64', 'value' => '18437736874454810621']]],
            expected: [['type' => 'f64', 'value' => '14069245235905429506']],
            line: 493,
        );
    }

    #[Depends('testAssertReturn428')]
    public function testAssertReturn429(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 495,
        );
    }

    #[Depends('testAssertReturn429')]
    public function testAssertReturn430(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 496,
        );
    }

    #[Depends('testAssertReturn430')]
    public function testAssertReturn431(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'f32', 'value' => '1325400064']],
            line: 497,
        );
    }

    #[Depends('testAssertReturn431')]
    public function testAssertReturn432(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '1325400064']],
            line: 498,
        );
    }

    #[Depends('testAssertReturn432')]
    public function testAssertReturn433(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '305419896']]],
            expected: [['type' => 'f32', 'value' => '1301390004']],
            line: 499,
        );
    }

    #[Depends('testAssertReturn433')]
    public function testAssertReturn434(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'f32', 'value' => '1333788672']],
            line: 500,
        );
    }

    #[Depends('testAssertReturn434')]
    public function testAssertReturn435(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '2147483776']]],
            expected: [['type' => 'f32', 'value' => '1325400064']],
            line: 501,
        );
    }

    #[Depends('testAssertReturn435')]
    public function testAssertReturn436(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '2147483777']]],
            expected: [['type' => 'f32', 'value' => '1325400065']],
            line: 502,
        );
    }

    #[Depends('testAssertReturn436')]
    public function testAssertReturn437(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '2147483778']]],
            expected: [['type' => 'f32', 'value' => '1325400065']],
            line: 503,
        );
    }

    #[Depends('testAssertReturn437')]
    public function testAssertReturn438(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '4294966912']]],
            expected: [['type' => 'f32', 'value' => '1333788670']],
            line: 504,
        );
    }

    #[Depends('testAssertReturn438')]
    public function testAssertReturn439(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '4294966913']]],
            expected: [['type' => 'f32', 'value' => '1333788671']],
            line: 505,
        );
    }

    #[Depends('testAssertReturn439')]
    public function testAssertReturn440(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '4294966914']]],
            expected: [['type' => 'f32', 'value' => '1333788671']],
            line: 506,
        );
    }

    #[Depends('testAssertReturn440')]
    public function testAssertReturn441(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '16777217']]],
            expected: [['type' => 'f32', 'value' => '1266679808']],
            line: 508,
        );
    }

    #[Depends('testAssertReturn441')]
    public function testAssertReturn442(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '16777219']]],
            expected: [['type' => 'f32', 'value' => '1266679810']],
            line: 509,
        );
    }

    #[Depends('testAssertReturn442')]
    public function testAssertReturn443(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 511,
        );
    }

    #[Depends('testAssertReturn443')]
    public function testAssertReturn444(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 512,
        );
    }

    #[Depends('testAssertReturn444')]
    public function testAssertReturn445(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'f32', 'value' => '1593835520']],
            line: 513,
        );
    }

    #[Depends('testAssertReturn445')]
    public function testAssertReturn446(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f32', 'value' => '1593835520']],
            line: 514,
        );
    }

    #[Depends('testAssertReturn446')]
    public function testAssertReturn447(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'f32', 'value' => '1602224128']],
            line: 515,
        );
    }

    #[Depends('testAssertReturn447')]
    public function testAssertReturn448(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '16777217']]],
            expected: [['type' => 'f32', 'value' => '1266679808']],
            line: 517,
        );
    }

    #[Depends('testAssertReturn448')]
    public function testAssertReturn449(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '16777219']]],
            expected: [['type' => 'f32', 'value' => '1266679810']],
            line: 518,
        );
    }

    #[Depends('testAssertReturn449')]
    public function testAssertReturn450(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '9007199791611905']]],
            expected: [['type' => 'f32', 'value' => '1509949441']],
            line: 520,
        );
    }

    #[Depends('testAssertReturn450')]
    public function testAssertReturn451(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '9223371761976868863']]],
            expected: [['type' => 'f32', 'value' => '1593835519']],
            line: 521,
        );
    }

    #[Depends('testAssertReturn451')]
    public function testAssertReturn452(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '9223372586610589697']]],
            expected: [['type' => 'f32', 'value' => '1593835521']],
            line: 522,
        );
    }

    #[Depends('testAssertReturn452')]
    public function testAssertReturn453(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '18446742424442109953']]],
            expected: [['type' => 'f32', 'value' => '1602224127']],
            line: 523,
        );
    }

    #[Depends('testAssertReturn453')]
    public function testAssertReturn454(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 525,
        );
    }

    #[Depends('testAssertReturn454')]
    public function testAssertReturn455(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 526,
        );
    }

    #[Depends('testAssertReturn455')]
    public function testAssertReturn456(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'f64', 'value' => '4746794007244308480']],
            line: 527,
        );
    }

    #[Depends('testAssertReturn456')]
    public function testAssertReturn457(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'f64', 'value' => '4746794007248502784']],
            line: 528,
        );
    }

    #[Depends('testAssertReturn457')]
    public function testAssertReturn458(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.convert_i32_u', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'f64', 'value' => '4751297606873776128']],
            line: 529,
        );
    }

    #[Depends('testAssertReturn458')]
    public function testAssertReturn459(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 531,
        );
    }

    #[Depends('testAssertReturn459')]
    public function testAssertReturn460(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 532,
        );
    }

    #[Depends('testAssertReturn460')]
    public function testAssertReturn461(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'f64', 'value' => '4890909195324358656']],
            line: 533,
        );
    }

    #[Depends('testAssertReturn461')]
    public function testAssertReturn462(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => '4890909195324358656']],
            line: 534,
        );
    }

    #[Depends('testAssertReturn462')]
    public function testAssertReturn463(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'f64', 'value' => '4895412794951729152']],
            line: 535,
        );
    }

    #[Depends('testAssertReturn463')]
    public function testAssertReturn464(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '9223372036854776832']]],
            expected: [['type' => 'f64', 'value' => '4890909195324358656']],
            line: 536,
        );
    }

    #[Depends('testAssertReturn464')]
    public function testAssertReturn465(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '9223372036854776833']]],
            expected: [['type' => 'f64', 'value' => '4890909195324358657']],
            line: 537,
        );
    }

    #[Depends('testAssertReturn465')]
    public function testAssertReturn466(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '9223372036854776834']]],
            expected: [['type' => 'f64', 'value' => '4890909195324358657']],
            line: 538,
        );
    }

    #[Depends('testAssertReturn466')]
    public function testAssertReturn467(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '18446744073709548544']]],
            expected: [['type' => 'f64', 'value' => '4895412794951729150']],
            line: 539,
        );
    }

    #[Depends('testAssertReturn467')]
    public function testAssertReturn468(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '18446744073709548545']]],
            expected: [['type' => 'f64', 'value' => '4895412794951729151']],
            line: 540,
        );
    }

    #[Depends('testAssertReturn468')]
    public function testAssertReturn469(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '18446744073709548546']]],
            expected: [['type' => 'f64', 'value' => '4895412794951729151']],
            line: 541,
        );
    }

    #[Depends('testAssertReturn469')]
    public function testAssertReturn470(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '9007199254740993']]],
            expected: [['type' => 'f64', 'value' => '4845873199050653696']],
            line: 543,
        );
    }

    #[Depends('testAssertReturn470')]
    public function testAssertReturn471(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.convert_i64_u', 'args' => [['type' => 'i64', 'value' => '9007199254740995']]],
            expected: [['type' => 'f64', 'value' => '4845873199050653698']],
            line: 544,
        );
    }

    #[Depends('testAssertReturn471')]
    public function testAssertReturn472(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.promote_f32', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 546,
        );
    }

    #[Depends('testAssertReturn472')]
    public function testAssertReturn473(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.promote_f32', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 547,
        );
    }

    #[Depends('testAssertReturn473')]
    public function testAssertReturn474(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.promote_f32', 'args' => [['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f64', 'value' => '3936146074321813504']],
            line: 548,
        );
    }

    #[Depends('testAssertReturn474')]
    public function testAssertReturn475(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.promote_f32', 'args' => [['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f64', 'value' => '13159518111176589312']],
            line: 549,
        );
    }

    #[Depends('testAssertReturn475')]
    public function testAssertReturn476(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.promote_f32', 'args' => [['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 550,
        );
    }

    #[Depends('testAssertReturn476')]
    public function testAssertReturn477(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.promote_f32', 'args' => [['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f64', 'value' => '13830554455654793216']],
            line: 551,
        );
    }

    #[Depends('testAssertReturn477')]
    public function testAssertReturn478(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.promote_f32', 'args' => [['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f64', 'value' => '14407015207421345792']],
            line: 552,
        );
    }

    #[Depends('testAssertReturn478')]
    public function testAssertReturn479(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.promote_f32', 'args' => [['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f64', 'value' => '5183643170566569984']],
            line: 553,
        );
    }

    #[Depends('testAssertReturn479')]
    public function testAssertReturn480(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.promote_f32', 'args' => [['type' => 'f32', 'value' => '67108864']]],
            expected: [['type' => 'f64', 'value' => '4071254063142928384']],
            line: 555,
        );
    }

    #[Depends('testAssertReturn480')]
    public function testAssertReturn481(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.promote_f32', 'args' => [['type' => 'f32', 'value' => '2118632255']]],
            expected: [['type' => 'f64', 'value' => '5172657297058430976']],
            line: 557,
        );
    }

    #[Depends('testAssertReturn481')]
    public function testAssertReturn482(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.promote_f32', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f64', 'value' => '9218868437227405312']],
            line: 558,
        );
    }

    #[Depends('testAssertReturn482')]
    public function testAssertReturn483(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.promote_f32', 'args' => [['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f64', 'value' => '18442240474082181120']],
            line: 559,
        );
    }

    #[Depends('testAssertReturn483')]
    public function testAssertReturn484(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.promote_f32', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f64', 'value' => 'nan:canonical']],
            line: 560,
        );
    }

    #[Depends('testAssertReturn484')]
    public function testAssertReturn485(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.promote_f32', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f64', 'value' => 'nan:arithmetic']],
            line: 561,
        );
    }

    #[Depends('testAssertReturn485')]
    public function testAssertReturn486(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.promote_f32', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f64', 'value' => 'nan:canonical']],
            line: 562,
        );
    }

    #[Depends('testAssertReturn486')]
    public function testAssertReturn487(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.promote_f32', 'args' => [['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f64', 'value' => 'nan:arithmetic']],
            line: 563,
        );
    }

    #[Depends('testAssertReturn487')]
    public function testAssertReturn488(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 565,
        );
    }

    #[Depends('testAssertReturn488')]
    public function testAssertReturn489(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 566,
        );
    }

    #[Depends('testAssertReturn489')]
    public function testAssertReturn490(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 567,
        );
    }

    #[Depends('testAssertReturn490')]
    public function testAssertReturn491(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '9223372036854775809']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 568,
        );
    }

    #[Depends('testAssertReturn491')]
    public function testAssertReturn492(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4607182418800017408']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 569,
        );
    }

    #[Depends('testAssertReturn492')]
    public function testAssertReturn493(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '13830554455654793216']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 570,
        );
    }

    #[Depends('testAssertReturn493')]
    public function testAssertReturn494(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4039728865214464000']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 571,
        );
    }

    #[Depends('testAssertReturn494')]
    public function testAssertReturn495(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '13263100902069239808']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 572,
        );
    }

    #[Depends('testAssertReturn495')]
    public function testAssertReturn496(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4039728865214463999']]],
            expected: [['type' => 'f32', 'value' => '8388607']],
            line: 573,
        );
    }

    #[Depends('testAssertReturn496')]
    public function testAssertReturn497(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '13263100902069239807']]],
            expected: [['type' => 'f32', 'value' => '2155872255']],
            line: 574,
        );
    }

    #[Depends('testAssertReturn497')]
    public function testAssertReturn498(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '3936146074321813504']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 575,
        );
    }

    #[Depends('testAssertReturn498')]
    public function testAssertReturn499(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '13159518111176589312']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 576,
        );
    }

    #[Depends('testAssertReturn499')]
    public function testAssertReturn500(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '5183643170298134528']]],
            expected: [['type' => 'f32', 'value' => '2139095038']],
            line: 577,
        );
    }

    #[Depends('testAssertReturn500')]
    public function testAssertReturn501(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '14407015207152910336']]],
            expected: [['type' => 'f32', 'value' => '4286578686']],
            line: 578,
        );
    }

    #[Depends('testAssertReturn501')]
    public function testAssertReturn502(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '5183643170298134529']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 579,
        );
    }

    #[Depends('testAssertReturn502')]
    public function testAssertReturn503(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '14407015207152910337']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 580,
        );
    }

    #[Depends('testAssertReturn503')]
    public function testAssertReturn504(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '5183643170566569984']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 581,
        );
    }

    #[Depends('testAssertReturn504')]
    public function testAssertReturn505(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '14407015207421345792']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 582,
        );
    }

    #[Depends('testAssertReturn505')]
    public function testAssertReturn506(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '5183643170835005439']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 583,
        );
    }

    #[Depends('testAssertReturn506')]
    public function testAssertReturn507(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '14407015207689781247']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 584,
        );
    }

    #[Depends('testAssertReturn507')]
    public function testAssertReturn508(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '5183643170835005440']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 585,
        );
    }

    #[Depends('testAssertReturn508')]
    public function testAssertReturn509(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '14407015207689781248']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 586,
        );
    }

    #[Depends('testAssertReturn509')]
    public function testAssertReturn510(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4071254063142928384']]],
            expected: [['type' => 'f32', 'value' => '67108864']],
            line: 587,
        );
    }

    #[Depends('testAssertReturn510')]
    public function testAssertReturn511(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '5172657297058430976']]],
            expected: [['type' => 'f32', 'value' => '2118632255']],
            line: 588,
        );
    }

    #[Depends('testAssertReturn511')]
    public function testAssertReturn512(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '9218868437227405312']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 589,
        );
    }

    #[Depends('testAssertReturn512')]
    public function testAssertReturn513(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '18442240474082181120']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 590,
        );
    }

    #[Depends('testAssertReturn513')]
    public function testAssertReturn514(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4607182418800017409']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 591,
        );
    }

    #[Depends('testAssertReturn514')]
    public function testAssertReturn515(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4607182418800017407']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 592,
        );
    }

    #[Depends('testAssertReturn515')]
    public function testAssertReturn516(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4607182419068452864']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 593,
        );
    }

    #[Depends('testAssertReturn516')]
    public function testAssertReturn517(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4607182419068452865']]],
            expected: [['type' => 'f32', 'value' => '1065353217']],
            line: 594,
        );
    }

    #[Depends('testAssertReturn517')]
    public function testAssertReturn518(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4607182419605323775']]],
            expected: [['type' => 'f32', 'value' => '1065353217']],
            line: 595,
        );
    }

    #[Depends('testAssertReturn518')]
    public function testAssertReturn519(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4607182419605323776']]],
            expected: [['type' => 'f32', 'value' => '1065353218']],
            line: 596,
        );
    }

    #[Depends('testAssertReturn519')]
    public function testAssertReturn520(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4607182420142194688']]],
            expected: [['type' => 'f32', 'value' => '1065353218']],
            line: 597,
        );
    }

    #[Depends('testAssertReturn520')]
    public function testAssertReturn521(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4715268810125344768']]],
            expected: [['type' => 'f32', 'value' => '1266679808']],
            line: 598,
        );
    }

    #[Depends('testAssertReturn521')]
    public function testAssertReturn522(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4715268810125344769']]],
            expected: [['type' => 'f32', 'value' => '1266679809']],
            line: 599,
        );
    }

    #[Depends('testAssertReturn522')]
    public function testAssertReturn523(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4715268810662215679']]],
            expected: [['type' => 'f32', 'value' => '1266679809']],
            line: 600,
        );
    }

    #[Depends('testAssertReturn523')]
    public function testAssertReturn524(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4715268810662215680']]],
            expected: [['type' => 'f32', 'value' => '1266679810']],
            line: 601,
        );
    }

    #[Depends('testAssertReturn524')]
    public function testAssertReturn525(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '5094955347580439664']]],
            expected: [['type' => 'f32', 'value' => '1973901096']],
            line: 602,
        );
    }

    #[Depends('testAssertReturn525')]
    public function testAssertReturn526(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4101111194527827589']]],
            expected: [['type' => 'f32', 'value' => '122722105']],
            line: 603,
        );
    }

    #[Depends('testAssertReturn526')]
    public function testAssertReturn527(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4038806939559600639']]],
            expected: [['type' => 'f32', 'value' => '7529997']],
            line: 604,
        );
    }

    #[Depends('testAssertReturn527')]
    public function testAssertReturn528(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '13836913116900734306']]],
            expected: [['type' => 'f32', 'value' => '3224680794']],
            line: 605,
        );
    }

    #[Depends('testAssertReturn528')]
    public function testAssertReturn529(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '14338315240173327556']]],
            expected: [['type' => 'f32', 'value' => '4158615026']],
            line: 606,
        );
    }

    #[Depends('testAssertReturn529')]
    public function testAssertReturn530(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 607,
        );
    }

    #[Depends('testAssertReturn530')]
    public function testAssertReturn531(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 608,
        );
    }

    #[Depends('testAssertReturn531')]
    public function testAssertReturn532(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '18444492273895866368']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 609,
        );
    }

    #[Depends('testAssertReturn532')]
    public function testAssertReturn533(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '18443366373989023744']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 610,
        );
    }

    #[Depends('testAssertReturn533')]
    public function testAssertReturn534(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '4503599627370496']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 611,
        );
    }

    #[Depends('testAssertReturn534')]
    public function testAssertReturn535(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '9227875636482146304']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 612,
        );
    }

    #[Depends('testAssertReturn535')]
    public function testAssertReturn536(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '3931642474694443008']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 613,
        );
    }

    #[Depends('testAssertReturn536')]
    public function testAssertReturn537(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '13155014511549218816']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 614,
        );
    }

    #[Depends('testAssertReturn537')]
    public function testAssertReturn538(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '3931642474694443009']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 615,
        );
    }

    #[Depends('testAssertReturn538')]
    public function testAssertReturn539(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.demote_f64', 'args' => [['type' => 'f64', 'value' => '13155014511549218817']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 616,
        );
    }

    #[Depends('testAssertReturn539')]
    public function testAssertReturn540(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.reinterpret_i32', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 618,
        );
    }

    #[Depends('testAssertReturn540')]
    public function testAssertReturn541(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.reinterpret_i32', 'args' => [['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 619,
        );
    }

    #[Depends('testAssertReturn541')]
    public function testAssertReturn542(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.reinterpret_i32', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 620,
        );
    }

    #[Depends('testAssertReturn542')]
    public function testAssertReturn543(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.reinterpret_i32', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'f32', 'value' => '4294967295']],
            line: 621,
        );
    }

    #[Depends('testAssertReturn543')]
    public function testAssertReturn544(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.reinterpret_i32', 'args' => [['type' => 'i32', 'value' => '123456789']]],
            expected: [['type' => 'f32', 'value' => '123456789']],
            line: 622,
        );
    }

    #[Depends('testAssertReturn544')]
    public function testAssertReturn545(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.reinterpret_i32', 'args' => [['type' => 'i32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 623,
        );
    }

    #[Depends('testAssertReturn545')]
    public function testAssertReturn546(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.reinterpret_i32', 'args' => [['type' => 'i32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 624,
        );
    }

    #[Depends('testAssertReturn546')]
    public function testAssertReturn547(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.reinterpret_i32', 'args' => [['type' => 'i32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 625,
        );
    }

    #[Depends('testAssertReturn547')]
    public function testAssertReturn548(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.reinterpret_i32', 'args' => [['type' => 'i32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 626,
        );
    }

    #[Depends('testAssertReturn548')]
    public function testAssertReturn549(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.reinterpret_i32', 'args' => [['type' => 'i32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 627,
        );
    }

    #[Depends('testAssertReturn549')]
    public function testAssertReturn550(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.reinterpret_i32', 'args' => [['type' => 'i32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => '2141192192']],
            line: 628,
        );
    }

    #[Depends('testAssertReturn550')]
    public function testAssertReturn551(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.reinterpret_i32', 'args' => [['type' => 'i32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => '4288675840']],
            line: 629,
        );
    }

    #[Depends('testAssertReturn551')]
    public function testAssertReturn552(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.reinterpret_i64', 'args' => [['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 631,
        );
    }

    #[Depends('testAssertReturn552')]
    public function testAssertReturn553(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.reinterpret_i64', 'args' => [['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'f64', 'value' => '1']],
            line: 632,
        );
    }

    #[Depends('testAssertReturn553')]
    public function testAssertReturn554(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.reinterpret_i64', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'f64', 'value' => '18446744073709551615']],
            line: 633,
        );
    }

    #[Depends('testAssertReturn554')]
    public function testAssertReturn555(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.reinterpret_i64', 'args' => [['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 634,
        );
    }

    #[Depends('testAssertReturn555')]
    public function testAssertReturn556(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.reinterpret_i64', 'args' => [['type' => 'i64', 'value' => '1234567890']]],
            expected: [['type' => 'f64', 'value' => '1234567890']],
            line: 635,
        );
    }

    #[Depends('testAssertReturn556')]
    public function testAssertReturn557(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.reinterpret_i64', 'args' => [['type' => 'i64', 'value' => '9223372036854775809']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775809']],
            line: 636,
        );
    }

    #[Depends('testAssertReturn557')]
    public function testAssertReturn558(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.reinterpret_i64', 'args' => [['type' => 'i64', 'value' => '9218868437227405312']]],
            expected: [['type' => 'f64', 'value' => '9218868437227405312']],
            line: 637,
        );
    }

    #[Depends('testAssertReturn558')]
    public function testAssertReturn559(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.reinterpret_i64', 'args' => [['type' => 'i64', 'value' => '18442240474082181120']]],
            expected: [['type' => 'f64', 'value' => '18442240474082181120']],
            line: 638,
        );
    }

    #[Depends('testAssertReturn559')]
    public function testAssertReturn560(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.reinterpret_i64', 'args' => [['type' => 'i64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'f64', 'value' => '9221120237041090560']],
            line: 639,
        );
    }

    #[Depends('testAssertReturn560')]
    public function testAssertReturn561(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.reinterpret_i64', 'args' => [['type' => 'i64', 'value' => '18444492273895866368']]],
            expected: [['type' => 'f64', 'value' => '18444492273895866368']],
            line: 640,
        );
    }

    #[Depends('testAssertReturn561')]
    public function testAssertReturn562(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.reinterpret_i64', 'args' => [['type' => 'i64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'f64', 'value' => '9219994337134247936']],
            line: 641,
        );
    }

    #[Depends('testAssertReturn562')]
    public function testAssertReturn563(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.reinterpret_i64', 'args' => [['type' => 'i64', 'value' => '18443366373989023744']]],
            expected: [['type' => 'f64', 'value' => '18443366373989023744']],
            line: 642,
        );
    }

    #[Depends('testAssertReturn563')]
    public function testAssertReturn564(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.reinterpret_f32', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 644,
        );
    }

    #[Depends('testAssertReturn564')]
    public function testAssertReturn565(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.reinterpret_f32', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 645,
        );
    }

    #[Depends('testAssertReturn565')]
    public function testAssertReturn566(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.reinterpret_f32', 'args' => [['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 646,
        );
    }

    #[Depends('testAssertReturn566')]
    public function testAssertReturn567(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.reinterpret_f32', 'args' => [['type' => 'f32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 647,
        );
    }

    #[Depends('testAssertReturn567')]
    public function testAssertReturn568(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.reinterpret_f32', 'args' => [['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '2147483649']],
            line: 648,
        );
    }

    #[Depends('testAssertReturn568')]
    public function testAssertReturn569(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.reinterpret_f32', 'args' => [['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1065353216']],
            line: 649,
        );
    }

    #[Depends('testAssertReturn569')]
    public function testAssertReturn570(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.reinterpret_f32', 'args' => [['type' => 'f32', 'value' => '1078530010']]],
            expected: [['type' => 'i32', 'value' => '1078530010']],
            line: 650,
        );
    }

    #[Depends('testAssertReturn570')]
    public function testAssertReturn571(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.reinterpret_f32', 'args' => [['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '2139095039']],
            line: 651,
        );
    }

    #[Depends('testAssertReturn571')]
    public function testAssertReturn572(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.reinterpret_f32', 'args' => [['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '4286578687']],
            line: 652,
        );
    }

    #[Depends('testAssertReturn572')]
    public function testAssertReturn573(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.reinterpret_f32', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '2139095040']],
            line: 653,
        );
    }

    #[Depends('testAssertReturn573')]
    public function testAssertReturn574(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.reinterpret_f32', 'args' => [['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '4286578688']],
            line: 654,
        );
    }

    #[Depends('testAssertReturn574')]
    public function testAssertReturn575(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.reinterpret_f32', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '2143289344']],
            line: 655,
        );
    }

    #[Depends('testAssertReturn575')]
    public function testAssertReturn576(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.reinterpret_f32', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '4290772992']],
            line: 656,
        );
    }

    #[Depends('testAssertReturn576')]
    public function testAssertReturn577(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.reinterpret_f32', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '2141192192']],
            line: 657,
        );
    }

    #[Depends('testAssertReturn577')]
    public function testAssertReturn578(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.reinterpret_f32', 'args' => [['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '4288675840']],
            line: 658,
        );
    }

    #[Depends('testAssertReturn578')]
    public function testAssertReturn579(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.reinterpret_f64', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 660,
        );
    }

    #[Depends('testAssertReturn579')]
    public function testAssertReturn580(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.reinterpret_f64', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 661,
        );
    }

    #[Depends('testAssertReturn580')]
    public function testAssertReturn581(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.reinterpret_f64', 'args' => [['type' => 'f64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 662,
        );
    }

    #[Depends('testAssertReturn581')]
    public function testAssertReturn582(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.reinterpret_f64', 'args' => [['type' => 'f64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 663,
        );
    }

    #[Depends('testAssertReturn582')]
    public function testAssertReturn583(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.reinterpret_f64', 'args' => [['type' => 'f64', 'value' => '9223372036854775809']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775809']],
            line: 664,
        );
    }

    #[Depends('testAssertReturn583')]
    public function testAssertReturn584(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.reinterpret_f64', 'args' => [['type' => 'f64', 'value' => '4607182418800017408']]],
            expected: [['type' => 'i64', 'value' => '4607182418800017408']],
            line: 665,
        );
    }

    #[Depends('testAssertReturn584')]
    public function testAssertReturn585(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.reinterpret_f64', 'args' => [['type' => 'f64', 'value' => '4614256656552045841']]],
            expected: [['type' => 'i64', 'value' => '4614256656552045841']],
            line: 666,
        );
    }

    #[Depends('testAssertReturn585')]
    public function testAssertReturn586(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.reinterpret_f64', 'args' => [['type' => 'f64', 'value' => '9218868437227405311']]],
            expected: [['type' => 'i64', 'value' => '9218868437227405311']],
            line: 667,
        );
    }

    #[Depends('testAssertReturn586')]
    public function testAssertReturn587(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.reinterpret_f64', 'args' => [['type' => 'f64', 'value' => '18442240474082181119']]],
            expected: [['type' => 'i64', 'value' => '18442240474082181119']],
            line: 668,
        );
    }

    #[Depends('testAssertReturn587')]
    public function testAssertReturn588(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.reinterpret_f64', 'args' => [['type' => 'f64', 'value' => '9218868437227405312']]],
            expected: [['type' => 'i64', 'value' => '9218868437227405312']],
            line: 669,
        );
    }

    #[Depends('testAssertReturn588')]
    public function testAssertReturn589(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.reinterpret_f64', 'args' => [['type' => 'f64', 'value' => '18442240474082181120']]],
            expected: [['type' => 'i64', 'value' => '18442240474082181120']],
            line: 670,
        );
    }

    #[Depends('testAssertReturn589')]
    public function testAssertReturn590(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.reinterpret_f64', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'i64', 'value' => '9221120237041090560']],
            line: 671,
        );
    }

    #[Depends('testAssertReturn590')]
    public function testAssertReturn591(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.reinterpret_f64', 'args' => [['type' => 'f64', 'value' => '18444492273895866368']]],
            expected: [['type' => 'i64', 'value' => '18444492273895866368']],
            line: 672,
        );
    }

    #[Depends('testAssertReturn591')]
    public function testAssertReturn592(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.reinterpret_f64', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'i64', 'value' => '9219994337134247936']],
            line: 673,
        );
    }

    #[Depends('testAssertReturn592')]
    public function testAssertReturn593(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.reinterpret_f64', 'args' => [['type' => 'f64', 'value' => '18443366373989023744']]],
            expected: [['type' => 'i64', 'value' => '18443366373989023744']],
            line: 674,
        );
    }

    #[Depends('testAssertReturn593')]
    public function testAssertInvalid594(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.1.wasm',
            text: 'type mismatch',
            line: 678,
        );
    }

    #[Depends('testAssertInvalid594')]
    public function testAssertInvalid595(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.2.wasm',
            text: 'type mismatch',
            line: 679,
        );
    }

    #[Depends('testAssertInvalid595')]
    public function testAssertInvalid596(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.3.wasm',
            text: 'type mismatch',
            line: 680,
        );
    }

    #[Depends('testAssertInvalid596')]
    public function testAssertInvalid597(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.4.wasm',
            text: 'type mismatch',
            line: 681,
        );
    }

    #[Depends('testAssertInvalid597')]
    public function testAssertInvalid598(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.5.wasm',
            text: 'type mismatch',
            line: 682,
        );
    }

    #[Depends('testAssertInvalid598')]
    public function testAssertInvalid599(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.6.wasm',
            text: 'type mismatch',
            line: 683,
        );
    }

    #[Depends('testAssertInvalid599')]
    public function testAssertInvalid600(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.7.wasm',
            text: 'type mismatch',
            line: 684,
        );
    }

    #[Depends('testAssertInvalid600')]
    public function testAssertInvalid601(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.8.wasm',
            text: 'type mismatch',
            line: 685,
        );
    }

    #[Depends('testAssertInvalid601')]
    public function testAssertInvalid602(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.9.wasm',
            text: 'type mismatch',
            line: 686,
        );
    }

    #[Depends('testAssertInvalid602')]
    public function testAssertInvalid603(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.10.wasm',
            text: 'type mismatch',
            line: 687,
        );
    }

    #[Depends('testAssertInvalid603')]
    public function testAssertInvalid604(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.11.wasm',
            text: 'type mismatch',
            line: 688,
        );
    }

    #[Depends('testAssertInvalid604')]
    public function testAssertInvalid605(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.12.wasm',
            text: 'type mismatch',
            line: 689,
        );
    }

    #[Depends('testAssertInvalid605')]
    public function testAssertInvalid606(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.13.wasm',
            text: 'type mismatch',
            line: 690,
        );
    }

    #[Depends('testAssertInvalid606')]
    public function testAssertInvalid607(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.14.wasm',
            text: 'type mismatch',
            line: 691,
        );
    }

    #[Depends('testAssertInvalid607')]
    public function testAssertInvalid608(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.15.wasm',
            text: 'type mismatch',
            line: 692,
        );
    }

    #[Depends('testAssertInvalid608')]
    public function testAssertInvalid609(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.16.wasm',
            text: 'type mismatch',
            line: 693,
        );
    }

    #[Depends('testAssertInvalid609')]
    public function testAssertInvalid610(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.17.wasm',
            text: 'type mismatch',
            line: 694,
        );
    }

    #[Depends('testAssertInvalid610')]
    public function testAssertInvalid611(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.18.wasm',
            text: 'type mismatch',
            line: 695,
        );
    }

    #[Depends('testAssertInvalid611')]
    public function testAssertInvalid612(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.19.wasm',
            text: 'type mismatch',
            line: 696,
        );
    }

    #[Depends('testAssertInvalid612')]
    public function testAssertInvalid613(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.20.wasm',
            text: 'type mismatch',
            line: 697,
        );
    }

    #[Depends('testAssertInvalid613')]
    public function testAssertInvalid614(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.21.wasm',
            text: 'type mismatch',
            line: 698,
        );
    }

    #[Depends('testAssertInvalid614')]
    public function testAssertInvalid615(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.22.wasm',
            text: 'type mismatch',
            line: 699,
        );
    }

    #[Depends('testAssertInvalid615')]
    public function testAssertInvalid616(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.23.wasm',
            text: 'type mismatch',
            line: 700,
        );
    }

    #[Depends('testAssertInvalid616')]
    public function testAssertInvalid617(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.24.wasm',
            text: 'type mismatch',
            line: 701,
        );
    }

    #[Depends('testAssertInvalid617')]
    public function testAssertInvalid618(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'conversions.25.wasm',
            text: 'type mismatch',
            line: 702,
        );
    }
}
