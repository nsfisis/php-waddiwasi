<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class F32CmpTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'f32_cmp.0.wasm',
            name: null,
            line: 4,
        );
    }

    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 13,
        );
    }

    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 14,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 15,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 16,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 17,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 18,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 19,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 20,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 21,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 22,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 23,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 24,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 25,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 26,
        );
    }

    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 27,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 28,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 29,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 30,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 31,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 32,
        );
    }

    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 33,
        );
    }

    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 34,
        );
    }

    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 35,
        );
    }

    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 36,
        );
    }

    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 37,
        );
    }

    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 38,
        );
    }

    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 39,
        );
    }

    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 40,
        );
    }

    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 41,
        );
    }

    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 42,
        );
    }

    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 43,
        );
    }

    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 44,
        );
    }

    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 45,
        );
    }

    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 46,
        );
    }

    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 47,
        );
    }

    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 48,
        );
    }

    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 49,
        );
    }

    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 50,
        );
    }

    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 51,
        );
    }

    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 52,
        );
    }

    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 53,
        );
    }

    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 54,
        );
    }

    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 55,
        );
    }

    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 56,
        );
    }

    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 57,
        );
    }

    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 58,
        );
    }

    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 59,
        );
    }

    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 60,
        );
    }

    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 61,
        );
    }

    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 62,
        );
    }

    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 63,
        );
    }

    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 64,
        );
    }

    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 65,
        );
    }

    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 66,
        );
    }

    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 67,
        );
    }

    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 68,
        );
    }

    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 69,
        );
    }

    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 70,
        );
    }

    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 71,
        );
    }

    public function testAssertReturn60(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 72,
        );
    }

    public function testAssertReturn61(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 73,
        );
    }

    public function testAssertReturn62(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 74,
        );
    }

    public function testAssertReturn63(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 75,
        );
    }

    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 76,
        );
    }

    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 77,
        );
    }

    public function testAssertReturn66(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 78,
        );
    }

    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 79,
        );
    }

    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 80,
        );
    }

    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 81,
        );
    }

    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 82,
        );
    }

    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 83,
        );
    }

    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 84,
        );
    }

    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 85,
        );
    }

    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 86,
        );
    }

    public function testAssertReturn75(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 87,
        );
    }

    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 88,
        );
    }

    public function testAssertReturn77(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 89,
        );
    }

    public function testAssertReturn78(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 90,
        );
    }

    public function testAssertReturn79(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 91,
        );
    }

    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 92,
        );
    }

    public function testAssertReturn81(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 93,
        );
    }

    public function testAssertReturn82(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 94,
        );
    }

    public function testAssertReturn83(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 95,
        );
    }

    public function testAssertReturn84(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 96,
        );
    }

    public function testAssertReturn85(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 97,
        );
    }

    public function testAssertReturn86(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 98,
        );
    }

    public function testAssertReturn87(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 99,
        );
    }

    public function testAssertReturn88(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 100,
        );
    }

    public function testAssertReturn89(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 101,
        );
    }

    public function testAssertReturn90(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 102,
        );
    }

    public function testAssertReturn91(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 103,
        );
    }

    public function testAssertReturn92(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 104,
        );
    }

    public function testAssertReturn93(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 105,
        );
    }

    public function testAssertReturn94(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 106,
        );
    }

    public function testAssertReturn95(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 107,
        );
    }

    public function testAssertReturn96(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 108,
        );
    }

    public function testAssertReturn97(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 109,
        );
    }

    public function testAssertReturn98(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 110,
        );
    }

    public function testAssertReturn99(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 111,
        );
    }

    public function testAssertReturn100(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 112,
        );
    }

    public function testAssertReturn101(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 113,
        );
    }

    public function testAssertReturn102(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 114,
        );
    }

    public function testAssertReturn103(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 115,
        );
    }

    public function testAssertReturn104(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 116,
        );
    }

    public function testAssertReturn105(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 117,
        );
    }

    public function testAssertReturn106(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 118,
        );
    }

    public function testAssertReturn107(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 119,
        );
    }

    public function testAssertReturn108(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 120,
        );
    }

    public function testAssertReturn109(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 121,
        );
    }

    public function testAssertReturn110(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 122,
        );
    }

    public function testAssertReturn111(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 123,
        );
    }

    public function testAssertReturn112(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 124,
        );
    }

    public function testAssertReturn113(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 125,
        );
    }

    public function testAssertReturn114(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 126,
        );
    }

    public function testAssertReturn115(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 127,
        );
    }

    public function testAssertReturn116(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 128,
        );
    }

    public function testAssertReturn117(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 129,
        );
    }

    public function testAssertReturn118(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 130,
        );
    }

    public function testAssertReturn119(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 131,
        );
    }

    public function testAssertReturn120(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 132,
        );
    }

    public function testAssertReturn121(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 133,
        );
    }

    public function testAssertReturn122(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 134,
        );
    }

    public function testAssertReturn123(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 135,
        );
    }

    public function testAssertReturn124(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 136,
        );
    }

    public function testAssertReturn125(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 137,
        );
    }

    public function testAssertReturn126(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 138,
        );
    }

    public function testAssertReturn127(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 139,
        );
    }

    public function testAssertReturn128(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 140,
        );
    }

    public function testAssertReturn129(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 141,
        );
    }

    public function testAssertReturn130(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 142,
        );
    }

    public function testAssertReturn131(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 143,
        );
    }

    public function testAssertReturn132(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 144,
        );
    }

    public function testAssertReturn133(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 145,
        );
    }

    public function testAssertReturn134(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 146,
        );
    }

    public function testAssertReturn135(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 147,
        );
    }

    public function testAssertReturn136(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 148,
        );
    }

    public function testAssertReturn137(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 149,
        );
    }

    public function testAssertReturn138(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 150,
        );
    }

    public function testAssertReturn139(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 151,
        );
    }

    public function testAssertReturn140(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 152,
        );
    }

    public function testAssertReturn141(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 153,
        );
    }

    public function testAssertReturn142(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 154,
        );
    }

    public function testAssertReturn143(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 155,
        );
    }

    public function testAssertReturn144(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 156,
        );
    }

    public function testAssertReturn145(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 157,
        );
    }

    public function testAssertReturn146(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 158,
        );
    }

    public function testAssertReturn147(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 159,
        );
    }

    public function testAssertReturn148(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 160,
        );
    }

    public function testAssertReturn149(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 161,
        );
    }

    public function testAssertReturn150(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 162,
        );
    }

    public function testAssertReturn151(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 163,
        );
    }

    public function testAssertReturn152(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 164,
        );
    }

    public function testAssertReturn153(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 165,
        );
    }

    public function testAssertReturn154(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 166,
        );
    }

    public function testAssertReturn155(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 167,
        );
    }

    public function testAssertReturn156(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 168,
        );
    }

    public function testAssertReturn157(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 169,
        );
    }

    public function testAssertReturn158(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 170,
        );
    }

    public function testAssertReturn159(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 171,
        );
    }

    public function testAssertReturn160(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 172,
        );
    }

    public function testAssertReturn161(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 173,
        );
    }

    public function testAssertReturn162(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 174,
        );
    }

    public function testAssertReturn163(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 175,
        );
    }

    public function testAssertReturn164(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 176,
        );
    }

    public function testAssertReturn165(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 177,
        );
    }

    public function testAssertReturn166(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 178,
        );
    }

    public function testAssertReturn167(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 179,
        );
    }

    public function testAssertReturn168(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 180,
        );
    }

    public function testAssertReturn169(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 181,
        );
    }

    public function testAssertReturn170(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 182,
        );
    }

    public function testAssertReturn171(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 183,
        );
    }

    public function testAssertReturn172(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 184,
        );
    }

    public function testAssertReturn173(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 185,
        );
    }

    public function testAssertReturn174(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 186,
        );
    }

    public function testAssertReturn175(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 187,
        );
    }

    public function testAssertReturn176(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 188,
        );
    }

    public function testAssertReturn177(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 189,
        );
    }

    public function testAssertReturn178(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 190,
        );
    }

    public function testAssertReturn179(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 191,
        );
    }

    public function testAssertReturn180(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 192,
        );
    }

    public function testAssertReturn181(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 193,
        );
    }

    public function testAssertReturn182(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 194,
        );
    }

    public function testAssertReturn183(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 195,
        );
    }

    public function testAssertReturn184(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 196,
        );
    }

    public function testAssertReturn185(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 197,
        );
    }

    public function testAssertReturn186(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 198,
        );
    }

    public function testAssertReturn187(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 199,
        );
    }

    public function testAssertReturn188(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 200,
        );
    }

    public function testAssertReturn189(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 201,
        );
    }

    public function testAssertReturn190(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 202,
        );
    }

    public function testAssertReturn191(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 203,
        );
    }

    public function testAssertReturn192(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 204,
        );
    }

    public function testAssertReturn193(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 205,
        );
    }

    public function testAssertReturn194(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 206,
        );
    }

    public function testAssertReturn195(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 207,
        );
    }

    public function testAssertReturn196(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 208,
        );
    }

    public function testAssertReturn197(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 209,
        );
    }

    public function testAssertReturn198(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 210,
        );
    }

    public function testAssertReturn199(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 211,
        );
    }

    public function testAssertReturn200(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 212,
        );
    }

    public function testAssertReturn201(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 213,
        );
    }

    public function testAssertReturn202(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 214,
        );
    }

    public function testAssertReturn203(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 215,
        );
    }

    public function testAssertReturn204(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 216,
        );
    }

    public function testAssertReturn205(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 217,
        );
    }

    public function testAssertReturn206(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 218,
        );
    }

    public function testAssertReturn207(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 219,
        );
    }

    public function testAssertReturn208(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 220,
        );
    }

    public function testAssertReturn209(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 221,
        );
    }

    public function testAssertReturn210(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 222,
        );
    }

    public function testAssertReturn211(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 223,
        );
    }

    public function testAssertReturn212(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 224,
        );
    }

    public function testAssertReturn213(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 225,
        );
    }

    public function testAssertReturn214(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 226,
        );
    }

    public function testAssertReturn215(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 227,
        );
    }

    public function testAssertReturn216(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 228,
        );
    }

    public function testAssertReturn217(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 229,
        );
    }

    public function testAssertReturn218(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 230,
        );
    }

    public function testAssertReturn219(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 231,
        );
    }

    public function testAssertReturn220(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 232,
        );
    }

    public function testAssertReturn221(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 233,
        );
    }

    public function testAssertReturn222(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 234,
        );
    }

    public function testAssertReturn223(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 235,
        );
    }

    public function testAssertReturn224(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 236,
        );
    }

    public function testAssertReturn225(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 237,
        );
    }

    public function testAssertReturn226(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 238,
        );
    }

    public function testAssertReturn227(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 239,
        );
    }

    public function testAssertReturn228(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 240,
        );
    }

    public function testAssertReturn229(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 241,
        );
    }

    public function testAssertReturn230(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 242,
        );
    }

    public function testAssertReturn231(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 243,
        );
    }

    public function testAssertReturn232(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 244,
        );
    }

    public function testAssertReturn233(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 245,
        );
    }

    public function testAssertReturn234(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 246,
        );
    }

    public function testAssertReturn235(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 247,
        );
    }

    public function testAssertReturn236(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 248,
        );
    }

    public function testAssertReturn237(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 249,
        );
    }

    public function testAssertReturn238(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 250,
        );
    }

    public function testAssertReturn239(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 251,
        );
    }

    public function testAssertReturn240(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 252,
        );
    }

    public function testAssertReturn241(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 253,
        );
    }

    public function testAssertReturn242(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 254,
        );
    }

    public function testAssertReturn243(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 255,
        );
    }

    public function testAssertReturn244(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 256,
        );
    }

    public function testAssertReturn245(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 257,
        );
    }

    public function testAssertReturn246(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 258,
        );
    }

    public function testAssertReturn247(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 259,
        );
    }

    public function testAssertReturn248(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 260,
        );
    }

    public function testAssertReturn249(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 261,
        );
    }

    public function testAssertReturn250(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 262,
        );
    }

    public function testAssertReturn251(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 263,
        );
    }

    public function testAssertReturn252(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 264,
        );
    }

    public function testAssertReturn253(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 265,
        );
    }

    public function testAssertReturn254(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 266,
        );
    }

    public function testAssertReturn255(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 267,
        );
    }

    public function testAssertReturn256(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 268,
        );
    }

    public function testAssertReturn257(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 269,
        );
    }

    public function testAssertReturn258(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 270,
        );
    }

    public function testAssertReturn259(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 271,
        );
    }

    public function testAssertReturn260(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 272,
        );
    }

    public function testAssertReturn261(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 273,
        );
    }

    public function testAssertReturn262(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 274,
        );
    }

    public function testAssertReturn263(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 275,
        );
    }

    public function testAssertReturn264(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 276,
        );
    }

    public function testAssertReturn265(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 277,
        );
    }

    public function testAssertReturn266(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 278,
        );
    }

    public function testAssertReturn267(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 279,
        );
    }

    public function testAssertReturn268(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 280,
        );
    }

    public function testAssertReturn269(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 281,
        );
    }

    public function testAssertReturn270(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 282,
        );
    }

    public function testAssertReturn271(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 283,
        );
    }

    public function testAssertReturn272(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 284,
        );
    }

    public function testAssertReturn273(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 285,
        );
    }

    public function testAssertReturn274(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 286,
        );
    }

    public function testAssertReturn275(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 287,
        );
    }

    public function testAssertReturn276(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 288,
        );
    }

    public function testAssertReturn277(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 289,
        );
    }

    public function testAssertReturn278(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 290,
        );
    }

    public function testAssertReturn279(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 291,
        );
    }

    public function testAssertReturn280(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 292,
        );
    }

    public function testAssertReturn281(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 293,
        );
    }

    public function testAssertReturn282(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 294,
        );
    }

    public function testAssertReturn283(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 295,
        );
    }

    public function testAssertReturn284(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 296,
        );
    }

    public function testAssertReturn285(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 297,
        );
    }

    public function testAssertReturn286(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 298,
        );
    }

    public function testAssertReturn287(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 299,
        );
    }

    public function testAssertReturn288(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 300,
        );
    }

    public function testAssertReturn289(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 301,
        );
    }

    public function testAssertReturn290(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 302,
        );
    }

    public function testAssertReturn291(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 303,
        );
    }

    public function testAssertReturn292(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 304,
        );
    }

    public function testAssertReturn293(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 305,
        );
    }

    public function testAssertReturn294(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 306,
        );
    }

    public function testAssertReturn295(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 307,
        );
    }

    public function testAssertReturn296(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 308,
        );
    }

    public function testAssertReturn297(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 309,
        );
    }

    public function testAssertReturn298(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 310,
        );
    }

    public function testAssertReturn299(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 311,
        );
    }

    public function testAssertReturn300(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 312,
        );
    }

    public function testAssertReturn301(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 313,
        );
    }

    public function testAssertReturn302(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 314,
        );
    }

    public function testAssertReturn303(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 315,
        );
    }

    public function testAssertReturn304(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 316,
        );
    }

    public function testAssertReturn305(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 317,
        );
    }

    public function testAssertReturn306(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 318,
        );
    }

    public function testAssertReturn307(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 319,
        );
    }

    public function testAssertReturn308(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 320,
        );
    }

    public function testAssertReturn309(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 321,
        );
    }

    public function testAssertReturn310(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 322,
        );
    }

    public function testAssertReturn311(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 323,
        );
    }

    public function testAssertReturn312(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 324,
        );
    }

    public function testAssertReturn313(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 325,
        );
    }

    public function testAssertReturn314(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 326,
        );
    }

    public function testAssertReturn315(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 327,
        );
    }

    public function testAssertReturn316(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 328,
        );
    }

    public function testAssertReturn317(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 329,
        );
    }

    public function testAssertReturn318(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 330,
        );
    }

    public function testAssertReturn319(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 331,
        );
    }

    public function testAssertReturn320(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 332,
        );
    }

    public function testAssertReturn321(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 333,
        );
    }

    public function testAssertReturn322(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 334,
        );
    }

    public function testAssertReturn323(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 335,
        );
    }

    public function testAssertReturn324(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 336,
        );
    }

    public function testAssertReturn325(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 337,
        );
    }

    public function testAssertReturn326(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 338,
        );
    }

    public function testAssertReturn327(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 339,
        );
    }

    public function testAssertReturn328(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 340,
        );
    }

    public function testAssertReturn329(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 341,
        );
    }

    public function testAssertReturn330(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 342,
        );
    }

    public function testAssertReturn331(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 343,
        );
    }

    public function testAssertReturn332(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 344,
        );
    }

    public function testAssertReturn333(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 345,
        );
    }

    public function testAssertReturn334(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 346,
        );
    }

    public function testAssertReturn335(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 347,
        );
    }

    public function testAssertReturn336(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 348,
        );
    }

    public function testAssertReturn337(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 349,
        );
    }

    public function testAssertReturn338(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 350,
        );
    }

    public function testAssertReturn339(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 351,
        );
    }

    public function testAssertReturn340(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 352,
        );
    }

    public function testAssertReturn341(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 353,
        );
    }

    public function testAssertReturn342(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 354,
        );
    }

    public function testAssertReturn343(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 355,
        );
    }

    public function testAssertReturn344(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 356,
        );
    }

    public function testAssertReturn345(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 357,
        );
    }

    public function testAssertReturn346(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 358,
        );
    }

    public function testAssertReturn347(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 359,
        );
    }

    public function testAssertReturn348(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 360,
        );
    }

    public function testAssertReturn349(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 361,
        );
    }

    public function testAssertReturn350(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 362,
        );
    }

    public function testAssertReturn351(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 363,
        );
    }

    public function testAssertReturn352(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 364,
        );
    }

    public function testAssertReturn353(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 365,
        );
    }

    public function testAssertReturn354(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 366,
        );
    }

    public function testAssertReturn355(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 367,
        );
    }

    public function testAssertReturn356(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 368,
        );
    }

    public function testAssertReturn357(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 369,
        );
    }

    public function testAssertReturn358(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 370,
        );
    }

    public function testAssertReturn359(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 371,
        );
    }

    public function testAssertReturn360(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 372,
        );
    }

    public function testAssertReturn361(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 373,
        );
    }

    public function testAssertReturn362(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 374,
        );
    }

    public function testAssertReturn363(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 375,
        );
    }

    public function testAssertReturn364(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 376,
        );
    }

    public function testAssertReturn365(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 377,
        );
    }

    public function testAssertReturn366(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 378,
        );
    }

    public function testAssertReturn367(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 379,
        );
    }

    public function testAssertReturn368(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 380,
        );
    }

    public function testAssertReturn369(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 381,
        );
    }

    public function testAssertReturn370(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 382,
        );
    }

    public function testAssertReturn371(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 383,
        );
    }

    public function testAssertReturn372(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 384,
        );
    }

    public function testAssertReturn373(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 385,
        );
    }

    public function testAssertReturn374(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 386,
        );
    }

    public function testAssertReturn375(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 387,
        );
    }

    public function testAssertReturn376(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 388,
        );
    }

    public function testAssertReturn377(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 389,
        );
    }

    public function testAssertReturn378(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 390,
        );
    }

    public function testAssertReturn379(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 391,
        );
    }

    public function testAssertReturn380(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 392,
        );
    }

    public function testAssertReturn381(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 393,
        );
    }

    public function testAssertReturn382(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 394,
        );
    }

    public function testAssertReturn383(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 395,
        );
    }

    public function testAssertReturn384(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 396,
        );
    }

    public function testAssertReturn385(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 397,
        );
    }

    public function testAssertReturn386(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 398,
        );
    }

    public function testAssertReturn387(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 399,
        );
    }

    public function testAssertReturn388(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 400,
        );
    }

    public function testAssertReturn389(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 401,
        );
    }

    public function testAssertReturn390(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 402,
        );
    }

    public function testAssertReturn391(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 403,
        );
    }

    public function testAssertReturn392(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 404,
        );
    }

    public function testAssertReturn393(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 405,
        );
    }

    public function testAssertReturn394(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 406,
        );
    }

    public function testAssertReturn395(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 407,
        );
    }

    public function testAssertReturn396(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 408,
        );
    }

    public function testAssertReturn397(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 409,
        );
    }

    public function testAssertReturn398(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 410,
        );
    }

    public function testAssertReturn399(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 411,
        );
    }

    public function testAssertReturn400(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 412,
        );
    }

    public function testAssertReturn401(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 413,
        );
    }

    public function testAssertReturn402(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 414,
        );
    }

    public function testAssertReturn403(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 415,
        );
    }

    public function testAssertReturn404(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 416,
        );
    }

    public function testAssertReturn405(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 417,
        );
    }

    public function testAssertReturn406(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 418,
        );
    }

    public function testAssertReturn407(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 419,
        );
    }

    public function testAssertReturn408(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 420,
        );
    }

    public function testAssertReturn409(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 421,
        );
    }

    public function testAssertReturn410(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 422,
        );
    }

    public function testAssertReturn411(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 423,
        );
    }

    public function testAssertReturn412(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 424,
        );
    }

    public function testAssertReturn413(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 425,
        );
    }

    public function testAssertReturn414(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 426,
        );
    }

    public function testAssertReturn415(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 427,
        );
    }

    public function testAssertReturn416(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 428,
        );
    }

    public function testAssertReturn417(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 429,
        );
    }

    public function testAssertReturn418(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 430,
        );
    }

    public function testAssertReturn419(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 431,
        );
    }

    public function testAssertReturn420(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 432,
        );
    }

    public function testAssertReturn421(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 433,
        );
    }

    public function testAssertReturn422(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 434,
        );
    }

    public function testAssertReturn423(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 435,
        );
    }

    public function testAssertReturn424(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 436,
        );
    }

    public function testAssertReturn425(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 437,
        );
    }

    public function testAssertReturn426(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 438,
        );
    }

    public function testAssertReturn427(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 439,
        );
    }

    public function testAssertReturn428(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 440,
        );
    }

    public function testAssertReturn429(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 441,
        );
    }

    public function testAssertReturn430(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 442,
        );
    }

    public function testAssertReturn431(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 443,
        );
    }

    public function testAssertReturn432(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 444,
        );
    }

    public function testAssertReturn433(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 445,
        );
    }

    public function testAssertReturn434(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 446,
        );
    }

    public function testAssertReturn435(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 447,
        );
    }

    public function testAssertReturn436(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 448,
        );
    }

    public function testAssertReturn437(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 449,
        );
    }

    public function testAssertReturn438(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 450,
        );
    }

    public function testAssertReturn439(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 451,
        );
    }

    public function testAssertReturn440(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 452,
        );
    }

    public function testAssertReturn441(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 453,
        );
    }

    public function testAssertReturn442(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 454,
        );
    }

    public function testAssertReturn443(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 455,
        );
    }

    public function testAssertReturn444(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 456,
        );
    }

    public function testAssertReturn445(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 457,
        );
    }

    public function testAssertReturn446(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 458,
        );
    }

    public function testAssertReturn447(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 459,
        );
    }

    public function testAssertReturn448(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 460,
        );
    }

    public function testAssertReturn449(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 461,
        );
    }

    public function testAssertReturn450(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 462,
        );
    }

    public function testAssertReturn451(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 463,
        );
    }

    public function testAssertReturn452(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 464,
        );
    }

    public function testAssertReturn453(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 465,
        );
    }

    public function testAssertReturn454(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 466,
        );
    }

    public function testAssertReturn455(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 467,
        );
    }

    public function testAssertReturn456(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 468,
        );
    }

    public function testAssertReturn457(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 469,
        );
    }

    public function testAssertReturn458(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 470,
        );
    }

    public function testAssertReturn459(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 471,
        );
    }

    public function testAssertReturn460(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 472,
        );
    }

    public function testAssertReturn461(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 473,
        );
    }

    public function testAssertReturn462(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 474,
        );
    }

    public function testAssertReturn463(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 475,
        );
    }

    public function testAssertReturn464(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 476,
        );
    }

    public function testAssertReturn465(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 477,
        );
    }

    public function testAssertReturn466(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 478,
        );
    }

    public function testAssertReturn467(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 479,
        );
    }

    public function testAssertReturn468(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 480,
        );
    }

    public function testAssertReturn469(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 481,
        );
    }

    public function testAssertReturn470(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 482,
        );
    }

    public function testAssertReturn471(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 483,
        );
    }

    public function testAssertReturn472(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 484,
        );
    }

    public function testAssertReturn473(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 485,
        );
    }

    public function testAssertReturn474(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 486,
        );
    }

    public function testAssertReturn475(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 487,
        );
    }

    public function testAssertReturn476(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 488,
        );
    }

    public function testAssertReturn477(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 489,
        );
    }

    public function testAssertReturn478(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 490,
        );
    }

    public function testAssertReturn479(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 491,
        );
    }

    public function testAssertReturn480(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 492,
        );
    }

    public function testAssertReturn481(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 493,
        );
    }

    public function testAssertReturn482(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 494,
        );
    }

    public function testAssertReturn483(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 495,
        );
    }

    public function testAssertReturn484(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 496,
        );
    }

    public function testAssertReturn485(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 497,
        );
    }

    public function testAssertReturn486(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 498,
        );
    }

    public function testAssertReturn487(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 499,
        );
    }

    public function testAssertReturn488(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 500,
        );
    }

    public function testAssertReturn489(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 501,
        );
    }

    public function testAssertReturn490(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 502,
        );
    }

    public function testAssertReturn491(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 503,
        );
    }

    public function testAssertReturn492(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 504,
        );
    }

    public function testAssertReturn493(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 505,
        );
    }

    public function testAssertReturn494(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 506,
        );
    }

    public function testAssertReturn495(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 507,
        );
    }

    public function testAssertReturn496(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 508,
        );
    }

    public function testAssertReturn497(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 509,
        );
    }

    public function testAssertReturn498(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 510,
        );
    }

    public function testAssertReturn499(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 511,
        );
    }

    public function testAssertReturn500(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 512,
        );
    }

    public function testAssertReturn501(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 513,
        );
    }

    public function testAssertReturn502(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 514,
        );
    }

    public function testAssertReturn503(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 515,
        );
    }

    public function testAssertReturn504(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 516,
        );
    }

    public function testAssertReturn505(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 517,
        );
    }

    public function testAssertReturn506(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 518,
        );
    }

    public function testAssertReturn507(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 519,
        );
    }

    public function testAssertReturn508(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 520,
        );
    }

    public function testAssertReturn509(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 521,
        );
    }

    public function testAssertReturn510(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 522,
        );
    }

    public function testAssertReturn511(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 523,
        );
    }

    public function testAssertReturn512(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 524,
        );
    }

    public function testAssertReturn513(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 525,
        );
    }

    public function testAssertReturn514(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 526,
        );
    }

    public function testAssertReturn515(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 527,
        );
    }

    public function testAssertReturn516(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 528,
        );
    }

    public function testAssertReturn517(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 529,
        );
    }

    public function testAssertReturn518(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 530,
        );
    }

    public function testAssertReturn519(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 531,
        );
    }

    public function testAssertReturn520(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 532,
        );
    }

    public function testAssertReturn521(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 533,
        );
    }

    public function testAssertReturn522(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 534,
        );
    }

    public function testAssertReturn523(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 535,
        );
    }

    public function testAssertReturn524(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 536,
        );
    }

    public function testAssertReturn525(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 537,
        );
    }

    public function testAssertReturn526(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 538,
        );
    }

    public function testAssertReturn527(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 539,
        );
    }

    public function testAssertReturn528(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 540,
        );
    }

    public function testAssertReturn529(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 541,
        );
    }

    public function testAssertReturn530(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 542,
        );
    }

    public function testAssertReturn531(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 543,
        );
    }

    public function testAssertReturn532(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 544,
        );
    }

    public function testAssertReturn533(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 545,
        );
    }

    public function testAssertReturn534(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 546,
        );
    }

    public function testAssertReturn535(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 547,
        );
    }

    public function testAssertReturn536(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 548,
        );
    }

    public function testAssertReturn537(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 549,
        );
    }

    public function testAssertReturn538(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 550,
        );
    }

    public function testAssertReturn539(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 551,
        );
    }

    public function testAssertReturn540(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 552,
        );
    }

    public function testAssertReturn541(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 553,
        );
    }

    public function testAssertReturn542(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 554,
        );
    }

    public function testAssertReturn543(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 555,
        );
    }

    public function testAssertReturn544(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 556,
        );
    }

    public function testAssertReturn545(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 557,
        );
    }

    public function testAssertReturn546(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 558,
        );
    }

    public function testAssertReturn547(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 559,
        );
    }

    public function testAssertReturn548(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 560,
        );
    }

    public function testAssertReturn549(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 561,
        );
    }

    public function testAssertReturn550(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 562,
        );
    }

    public function testAssertReturn551(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 563,
        );
    }

    public function testAssertReturn552(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 564,
        );
    }

    public function testAssertReturn553(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 565,
        );
    }

    public function testAssertReturn554(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 566,
        );
    }

    public function testAssertReturn555(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 567,
        );
    }

    public function testAssertReturn556(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 568,
        );
    }

    public function testAssertReturn557(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 569,
        );
    }

    public function testAssertReturn558(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 570,
        );
    }

    public function testAssertReturn559(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 571,
        );
    }

    public function testAssertReturn560(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 572,
        );
    }

    public function testAssertReturn561(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 573,
        );
    }

    public function testAssertReturn562(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 574,
        );
    }

    public function testAssertReturn563(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 575,
        );
    }

    public function testAssertReturn564(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 576,
        );
    }

    public function testAssertReturn565(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 577,
        );
    }

    public function testAssertReturn566(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 578,
        );
    }

    public function testAssertReturn567(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 579,
        );
    }

    public function testAssertReturn568(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 580,
        );
    }

    public function testAssertReturn569(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 581,
        );
    }

    public function testAssertReturn570(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 582,
        );
    }

    public function testAssertReturn571(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 583,
        );
    }

    public function testAssertReturn572(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 584,
        );
    }

    public function testAssertReturn573(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 585,
        );
    }

    public function testAssertReturn574(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 586,
        );
    }

    public function testAssertReturn575(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 587,
        );
    }

    public function testAssertReturn576(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 588,
        );
    }

    public function testAssertReturn577(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 589,
        );
    }

    public function testAssertReturn578(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 590,
        );
    }

    public function testAssertReturn579(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 591,
        );
    }

    public function testAssertReturn580(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 592,
        );
    }

    public function testAssertReturn581(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 593,
        );
    }

    public function testAssertReturn582(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 594,
        );
    }

    public function testAssertReturn583(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 595,
        );
    }

    public function testAssertReturn584(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 596,
        );
    }

    public function testAssertReturn585(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 597,
        );
    }

    public function testAssertReturn586(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 598,
        );
    }

    public function testAssertReturn587(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 599,
        );
    }

    public function testAssertReturn588(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 600,
        );
    }

    public function testAssertReturn589(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 601,
        );
    }

    public function testAssertReturn590(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 602,
        );
    }

    public function testAssertReturn591(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 603,
        );
    }

    public function testAssertReturn592(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 604,
        );
    }

    public function testAssertReturn593(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 605,
        );
    }

    public function testAssertReturn594(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 606,
        );
    }

    public function testAssertReturn595(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 607,
        );
    }

    public function testAssertReturn596(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 608,
        );
    }

    public function testAssertReturn597(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 609,
        );
    }

    public function testAssertReturn598(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 610,
        );
    }

    public function testAssertReturn599(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 611,
        );
    }

    public function testAssertReturn600(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 612,
        );
    }

    public function testAssertReturn601(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 613,
        );
    }

    public function testAssertReturn602(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 614,
        );
    }

    public function testAssertReturn603(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 615,
        );
    }

    public function testAssertReturn604(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 616,
        );
    }

    public function testAssertReturn605(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 617,
        );
    }

    public function testAssertReturn606(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 618,
        );
    }

    public function testAssertReturn607(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 619,
        );
    }

    public function testAssertReturn608(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 620,
        );
    }

    public function testAssertReturn609(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 621,
        );
    }

    public function testAssertReturn610(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 622,
        );
    }

    public function testAssertReturn611(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 623,
        );
    }

    public function testAssertReturn612(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 624,
        );
    }

    public function testAssertReturn613(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 625,
        );
    }

    public function testAssertReturn614(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 626,
        );
    }

    public function testAssertReturn615(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 627,
        );
    }

    public function testAssertReturn616(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 628,
        );
    }

    public function testAssertReturn617(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 629,
        );
    }

    public function testAssertReturn618(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 630,
        );
    }

    public function testAssertReturn619(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 631,
        );
    }

    public function testAssertReturn620(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 632,
        );
    }

    public function testAssertReturn621(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 633,
        );
    }

    public function testAssertReturn622(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 634,
        );
    }

    public function testAssertReturn623(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 635,
        );
    }

    public function testAssertReturn624(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 636,
        );
    }

    public function testAssertReturn625(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 637,
        );
    }

    public function testAssertReturn626(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 638,
        );
    }

    public function testAssertReturn627(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 639,
        );
    }

    public function testAssertReturn628(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 640,
        );
    }

    public function testAssertReturn629(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 641,
        );
    }

    public function testAssertReturn630(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 642,
        );
    }

    public function testAssertReturn631(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 643,
        );
    }

    public function testAssertReturn632(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 644,
        );
    }

    public function testAssertReturn633(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 645,
        );
    }

    public function testAssertReturn634(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 646,
        );
    }

    public function testAssertReturn635(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 647,
        );
    }

    public function testAssertReturn636(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 648,
        );
    }

    public function testAssertReturn637(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 649,
        );
    }

    public function testAssertReturn638(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 650,
        );
    }

    public function testAssertReturn639(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 651,
        );
    }

    public function testAssertReturn640(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 652,
        );
    }

    public function testAssertReturn641(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 653,
        );
    }

    public function testAssertReturn642(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 654,
        );
    }

    public function testAssertReturn643(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 655,
        );
    }

    public function testAssertReturn644(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 656,
        );
    }

    public function testAssertReturn645(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 657,
        );
    }

    public function testAssertReturn646(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 658,
        );
    }

    public function testAssertReturn647(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 659,
        );
    }

    public function testAssertReturn648(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 660,
        );
    }

    public function testAssertReturn649(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 661,
        );
    }

    public function testAssertReturn650(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 662,
        );
    }

    public function testAssertReturn651(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 663,
        );
    }

    public function testAssertReturn652(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 664,
        );
    }

    public function testAssertReturn653(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 665,
        );
    }

    public function testAssertReturn654(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 666,
        );
    }

    public function testAssertReturn655(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 667,
        );
    }

    public function testAssertReturn656(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 668,
        );
    }

    public function testAssertReturn657(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 669,
        );
    }

    public function testAssertReturn658(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 670,
        );
    }

    public function testAssertReturn659(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 671,
        );
    }

    public function testAssertReturn660(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 672,
        );
    }

    public function testAssertReturn661(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 673,
        );
    }

    public function testAssertReturn662(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 674,
        );
    }

    public function testAssertReturn663(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 675,
        );
    }

    public function testAssertReturn664(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 676,
        );
    }

    public function testAssertReturn665(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 677,
        );
    }

    public function testAssertReturn666(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 678,
        );
    }

    public function testAssertReturn667(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 679,
        );
    }

    public function testAssertReturn668(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 680,
        );
    }

    public function testAssertReturn669(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 681,
        );
    }

    public function testAssertReturn670(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 682,
        );
    }

    public function testAssertReturn671(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 683,
        );
    }

    public function testAssertReturn672(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 684,
        );
    }

    public function testAssertReturn673(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 685,
        );
    }

    public function testAssertReturn674(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 686,
        );
    }

    public function testAssertReturn675(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 687,
        );
    }

    public function testAssertReturn676(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 688,
        );
    }

    public function testAssertReturn677(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 689,
        );
    }

    public function testAssertReturn678(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 690,
        );
    }

    public function testAssertReturn679(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 691,
        );
    }

    public function testAssertReturn680(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 692,
        );
    }

    public function testAssertReturn681(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 693,
        );
    }

    public function testAssertReturn682(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 694,
        );
    }

    public function testAssertReturn683(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 695,
        );
    }

    public function testAssertReturn684(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 696,
        );
    }

    public function testAssertReturn685(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 697,
        );
    }

    public function testAssertReturn686(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 698,
        );
    }

    public function testAssertReturn687(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 699,
        );
    }

    public function testAssertReturn688(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 700,
        );
    }

    public function testAssertReturn689(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 701,
        );
    }

    public function testAssertReturn690(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 702,
        );
    }

    public function testAssertReturn691(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 703,
        );
    }

    public function testAssertReturn692(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 704,
        );
    }

    public function testAssertReturn693(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 705,
        );
    }

    public function testAssertReturn694(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 706,
        );
    }

    public function testAssertReturn695(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 707,
        );
    }

    public function testAssertReturn696(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 708,
        );
    }

    public function testAssertReturn697(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 709,
        );
    }

    public function testAssertReturn698(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 710,
        );
    }

    public function testAssertReturn699(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 711,
        );
    }

    public function testAssertReturn700(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 712,
        );
    }

    public function testAssertReturn701(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 713,
        );
    }

    public function testAssertReturn702(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 714,
        );
    }

    public function testAssertReturn703(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 715,
        );
    }

    public function testAssertReturn704(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 716,
        );
    }

    public function testAssertReturn705(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 717,
        );
    }

    public function testAssertReturn706(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 718,
        );
    }

    public function testAssertReturn707(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 719,
        );
    }

    public function testAssertReturn708(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 720,
        );
    }

    public function testAssertReturn709(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 721,
        );
    }

    public function testAssertReturn710(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 722,
        );
    }

    public function testAssertReturn711(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 723,
        );
    }

    public function testAssertReturn712(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 724,
        );
    }

    public function testAssertReturn713(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 725,
        );
    }

    public function testAssertReturn714(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 726,
        );
    }

    public function testAssertReturn715(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 727,
        );
    }

    public function testAssertReturn716(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 728,
        );
    }

    public function testAssertReturn717(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 729,
        );
    }

    public function testAssertReturn718(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 730,
        );
    }

    public function testAssertReturn719(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 731,
        );
    }

    public function testAssertReturn720(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 732,
        );
    }

    public function testAssertReturn721(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 733,
        );
    }

    public function testAssertReturn722(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 734,
        );
    }

    public function testAssertReturn723(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 735,
        );
    }

    public function testAssertReturn724(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 736,
        );
    }

    public function testAssertReturn725(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 737,
        );
    }

    public function testAssertReturn726(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 738,
        );
    }

    public function testAssertReturn727(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 739,
        );
    }

    public function testAssertReturn728(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 740,
        );
    }

    public function testAssertReturn729(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 741,
        );
    }

    public function testAssertReturn730(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 742,
        );
    }

    public function testAssertReturn731(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 743,
        );
    }

    public function testAssertReturn732(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 744,
        );
    }

    public function testAssertReturn733(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 745,
        );
    }

    public function testAssertReturn734(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 746,
        );
    }

    public function testAssertReturn735(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 747,
        );
    }

    public function testAssertReturn736(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 748,
        );
    }

    public function testAssertReturn737(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 749,
        );
    }

    public function testAssertReturn738(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 750,
        );
    }

    public function testAssertReturn739(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 751,
        );
    }

    public function testAssertReturn740(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 752,
        );
    }

    public function testAssertReturn741(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 753,
        );
    }

    public function testAssertReturn742(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 754,
        );
    }

    public function testAssertReturn743(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 755,
        );
    }

    public function testAssertReturn744(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 756,
        );
    }

    public function testAssertReturn745(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 757,
        );
    }

    public function testAssertReturn746(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 758,
        );
    }

    public function testAssertReturn747(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 759,
        );
    }

    public function testAssertReturn748(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 760,
        );
    }

    public function testAssertReturn749(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 761,
        );
    }

    public function testAssertReturn750(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 762,
        );
    }

    public function testAssertReturn751(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 763,
        );
    }

    public function testAssertReturn752(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 764,
        );
    }

    public function testAssertReturn753(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 765,
        );
    }

    public function testAssertReturn754(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 766,
        );
    }

    public function testAssertReturn755(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 767,
        );
    }

    public function testAssertReturn756(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 768,
        );
    }

    public function testAssertReturn757(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 769,
        );
    }

    public function testAssertReturn758(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 770,
        );
    }

    public function testAssertReturn759(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 771,
        );
    }

    public function testAssertReturn760(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 772,
        );
    }

    public function testAssertReturn761(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 773,
        );
    }

    public function testAssertReturn762(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 774,
        );
    }

    public function testAssertReturn763(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 775,
        );
    }

    public function testAssertReturn764(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 776,
        );
    }

    public function testAssertReturn765(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 777,
        );
    }

    public function testAssertReturn766(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 778,
        );
    }

    public function testAssertReturn767(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 779,
        );
    }

    public function testAssertReturn768(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 780,
        );
    }

    public function testAssertReturn769(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 781,
        );
    }

    public function testAssertReturn770(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 782,
        );
    }

    public function testAssertReturn771(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 783,
        );
    }

    public function testAssertReturn772(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 784,
        );
    }

    public function testAssertReturn773(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 785,
        );
    }

    public function testAssertReturn774(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 786,
        );
    }

    public function testAssertReturn775(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 787,
        );
    }

    public function testAssertReturn776(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 788,
        );
    }

    public function testAssertReturn777(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 789,
        );
    }

    public function testAssertReturn778(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 790,
        );
    }

    public function testAssertReturn779(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 791,
        );
    }

    public function testAssertReturn780(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 792,
        );
    }

    public function testAssertReturn781(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 793,
        );
    }

    public function testAssertReturn782(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 794,
        );
    }

    public function testAssertReturn783(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 795,
        );
    }

    public function testAssertReturn784(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 796,
        );
    }

    public function testAssertReturn785(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 797,
        );
    }

    public function testAssertReturn786(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 798,
        );
    }

    public function testAssertReturn787(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 799,
        );
    }

    public function testAssertReturn788(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 800,
        );
    }

    public function testAssertReturn789(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 801,
        );
    }

    public function testAssertReturn790(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 802,
        );
    }

    public function testAssertReturn791(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 803,
        );
    }

    public function testAssertReturn792(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 804,
        );
    }

    public function testAssertReturn793(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 805,
        );
    }

    public function testAssertReturn794(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 806,
        );
    }

    public function testAssertReturn795(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 807,
        );
    }

    public function testAssertReturn796(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 808,
        );
    }

    public function testAssertReturn797(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 809,
        );
    }

    public function testAssertReturn798(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 810,
        );
    }

    public function testAssertReturn799(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 811,
        );
    }

    public function testAssertReturn800(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 812,
        );
    }

    public function testAssertReturn801(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 813,
        );
    }

    public function testAssertReturn802(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 814,
        );
    }

    public function testAssertReturn803(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 815,
        );
    }

    public function testAssertReturn804(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 816,
        );
    }

    public function testAssertReturn805(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 817,
        );
    }

    public function testAssertReturn806(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 818,
        );
    }

    public function testAssertReturn807(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 819,
        );
    }

    public function testAssertReturn808(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 820,
        );
    }

    public function testAssertReturn809(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 821,
        );
    }

    public function testAssertReturn810(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 822,
        );
    }

    public function testAssertReturn811(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 823,
        );
    }

    public function testAssertReturn812(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 824,
        );
    }

    public function testAssertReturn813(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 825,
        );
    }

    public function testAssertReturn814(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 826,
        );
    }

    public function testAssertReturn815(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 827,
        );
    }

    public function testAssertReturn816(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 828,
        );
    }

    public function testAssertReturn817(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 829,
        );
    }

    public function testAssertReturn818(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 830,
        );
    }

    public function testAssertReturn819(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 831,
        );
    }

    public function testAssertReturn820(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 832,
        );
    }

    public function testAssertReturn821(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 833,
        );
    }

    public function testAssertReturn822(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 834,
        );
    }

    public function testAssertReturn823(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 835,
        );
    }

    public function testAssertReturn824(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 836,
        );
    }

    public function testAssertReturn825(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 837,
        );
    }

    public function testAssertReturn826(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 838,
        );
    }

    public function testAssertReturn827(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 839,
        );
    }

    public function testAssertReturn828(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 840,
        );
    }

    public function testAssertReturn829(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 841,
        );
    }

    public function testAssertReturn830(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 842,
        );
    }

    public function testAssertReturn831(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 843,
        );
    }

    public function testAssertReturn832(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 844,
        );
    }

    public function testAssertReturn833(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 845,
        );
    }

    public function testAssertReturn834(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 846,
        );
    }

    public function testAssertReturn835(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 847,
        );
    }

    public function testAssertReturn836(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 848,
        );
    }

    public function testAssertReturn837(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 849,
        );
    }

    public function testAssertReturn838(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 850,
        );
    }

    public function testAssertReturn839(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 851,
        );
    }

    public function testAssertReturn840(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 852,
        );
    }

    public function testAssertReturn841(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 853,
        );
    }

    public function testAssertReturn842(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 854,
        );
    }

    public function testAssertReturn843(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 855,
        );
    }

    public function testAssertReturn844(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 856,
        );
    }

    public function testAssertReturn845(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 857,
        );
    }

    public function testAssertReturn846(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 858,
        );
    }

    public function testAssertReturn847(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 859,
        );
    }

    public function testAssertReturn848(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 860,
        );
    }

    public function testAssertReturn849(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 861,
        );
    }

    public function testAssertReturn850(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 862,
        );
    }

    public function testAssertReturn851(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 863,
        );
    }

    public function testAssertReturn852(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 864,
        );
    }

    public function testAssertReturn853(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 865,
        );
    }

    public function testAssertReturn854(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 866,
        );
    }

    public function testAssertReturn855(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 867,
        );
    }

    public function testAssertReturn856(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 868,
        );
    }

    public function testAssertReturn857(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 869,
        );
    }

    public function testAssertReturn858(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 870,
        );
    }

    public function testAssertReturn859(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 871,
        );
    }

    public function testAssertReturn860(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 872,
        );
    }

    public function testAssertReturn861(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 873,
        );
    }

    public function testAssertReturn862(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 874,
        );
    }

    public function testAssertReturn863(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 875,
        );
    }

    public function testAssertReturn864(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 876,
        );
    }

    public function testAssertReturn865(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 877,
        );
    }

    public function testAssertReturn866(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 878,
        );
    }

    public function testAssertReturn867(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 879,
        );
    }

    public function testAssertReturn868(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 880,
        );
    }

    public function testAssertReturn869(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 881,
        );
    }

    public function testAssertReturn870(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 882,
        );
    }

    public function testAssertReturn871(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 883,
        );
    }

    public function testAssertReturn872(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 884,
        );
    }

    public function testAssertReturn873(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 885,
        );
    }

    public function testAssertReturn874(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 886,
        );
    }

    public function testAssertReturn875(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 887,
        );
    }

    public function testAssertReturn876(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 888,
        );
    }

    public function testAssertReturn877(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 889,
        );
    }

    public function testAssertReturn878(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 890,
        );
    }

    public function testAssertReturn879(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 891,
        );
    }

    public function testAssertReturn880(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 892,
        );
    }

    public function testAssertReturn881(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 893,
        );
    }

    public function testAssertReturn882(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 894,
        );
    }

    public function testAssertReturn883(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 895,
        );
    }

    public function testAssertReturn884(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 896,
        );
    }

    public function testAssertReturn885(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 897,
        );
    }

    public function testAssertReturn886(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 898,
        );
    }

    public function testAssertReturn887(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 899,
        );
    }

    public function testAssertReturn888(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 900,
        );
    }

    public function testAssertReturn889(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 901,
        );
    }

    public function testAssertReturn890(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 902,
        );
    }

    public function testAssertReturn891(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 903,
        );
    }

    public function testAssertReturn892(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 904,
        );
    }

    public function testAssertReturn893(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 905,
        );
    }

    public function testAssertReturn894(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 906,
        );
    }

    public function testAssertReturn895(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 907,
        );
    }

    public function testAssertReturn896(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 908,
        );
    }

    public function testAssertReturn897(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 909,
        );
    }

    public function testAssertReturn898(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 910,
        );
    }

    public function testAssertReturn899(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 911,
        );
    }

    public function testAssertReturn900(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 912,
        );
    }

    public function testAssertReturn901(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 913,
        );
    }

    public function testAssertReturn902(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 914,
        );
    }

    public function testAssertReturn903(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 915,
        );
    }

    public function testAssertReturn904(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 916,
        );
    }

    public function testAssertReturn905(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 917,
        );
    }

    public function testAssertReturn906(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 918,
        );
    }

    public function testAssertReturn907(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 919,
        );
    }

    public function testAssertReturn908(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 920,
        );
    }

    public function testAssertReturn909(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 921,
        );
    }

    public function testAssertReturn910(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 922,
        );
    }

    public function testAssertReturn911(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 923,
        );
    }

    public function testAssertReturn912(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 924,
        );
    }

    public function testAssertReturn913(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 925,
        );
    }

    public function testAssertReturn914(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 926,
        );
    }

    public function testAssertReturn915(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 927,
        );
    }

    public function testAssertReturn916(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 928,
        );
    }

    public function testAssertReturn917(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 929,
        );
    }

    public function testAssertReturn918(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 930,
        );
    }

    public function testAssertReturn919(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 931,
        );
    }

    public function testAssertReturn920(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 932,
        );
    }

    public function testAssertReturn921(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 933,
        );
    }

    public function testAssertReturn922(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 934,
        );
    }

    public function testAssertReturn923(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 935,
        );
    }

    public function testAssertReturn924(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 936,
        );
    }

    public function testAssertReturn925(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 937,
        );
    }

    public function testAssertReturn926(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 938,
        );
    }

    public function testAssertReturn927(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 939,
        );
    }

    public function testAssertReturn928(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 940,
        );
    }

    public function testAssertReturn929(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 941,
        );
    }

    public function testAssertReturn930(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 942,
        );
    }

    public function testAssertReturn931(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 943,
        );
    }

    public function testAssertReturn932(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 944,
        );
    }

    public function testAssertReturn933(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 945,
        );
    }

    public function testAssertReturn934(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 946,
        );
    }

    public function testAssertReturn935(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 947,
        );
    }

    public function testAssertReturn936(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 948,
        );
    }

    public function testAssertReturn937(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 949,
        );
    }

    public function testAssertReturn938(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 950,
        );
    }

    public function testAssertReturn939(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 951,
        );
    }

    public function testAssertReturn940(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 952,
        );
    }

    public function testAssertReturn941(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 953,
        );
    }

    public function testAssertReturn942(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 954,
        );
    }

    public function testAssertReturn943(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 955,
        );
    }

    public function testAssertReturn944(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 956,
        );
    }

    public function testAssertReturn945(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 957,
        );
    }

    public function testAssertReturn946(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 958,
        );
    }

    public function testAssertReturn947(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 959,
        );
    }

    public function testAssertReturn948(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 960,
        );
    }

    public function testAssertReturn949(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 961,
        );
    }

    public function testAssertReturn950(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 962,
        );
    }

    public function testAssertReturn951(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 963,
        );
    }

    public function testAssertReturn952(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 964,
        );
    }

    public function testAssertReturn953(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 965,
        );
    }

    public function testAssertReturn954(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 966,
        );
    }

    public function testAssertReturn955(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 967,
        );
    }

    public function testAssertReturn956(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 968,
        );
    }

    public function testAssertReturn957(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 969,
        );
    }

    public function testAssertReturn958(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 970,
        );
    }

    public function testAssertReturn959(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 971,
        );
    }

    public function testAssertReturn960(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 972,
        );
    }

    public function testAssertReturn961(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 973,
        );
    }

    public function testAssertReturn962(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 974,
        );
    }

    public function testAssertReturn963(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 975,
        );
    }

    public function testAssertReturn964(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 976,
        );
    }

    public function testAssertReturn965(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 977,
        );
    }

    public function testAssertReturn966(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 978,
        );
    }

    public function testAssertReturn967(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 979,
        );
    }

    public function testAssertReturn968(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 980,
        );
    }

    public function testAssertReturn969(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 981,
        );
    }

    public function testAssertReturn970(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 982,
        );
    }

    public function testAssertReturn971(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 983,
        );
    }

    public function testAssertReturn972(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 984,
        );
    }

    public function testAssertReturn973(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 985,
        );
    }

    public function testAssertReturn974(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 986,
        );
    }

    public function testAssertReturn975(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 987,
        );
    }

    public function testAssertReturn976(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 988,
        );
    }

    public function testAssertReturn977(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 989,
        );
    }

    public function testAssertReturn978(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 990,
        );
    }

    public function testAssertReturn979(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 991,
        );
    }

    public function testAssertReturn980(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 992,
        );
    }

    public function testAssertReturn981(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 993,
        );
    }

    public function testAssertReturn982(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 994,
        );
    }

    public function testAssertReturn983(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 995,
        );
    }

    public function testAssertReturn984(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 996,
        );
    }

    public function testAssertReturn985(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 997,
        );
    }

    public function testAssertReturn986(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 998,
        );
    }

    public function testAssertReturn987(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 999,
        );
    }

    public function testAssertReturn988(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1000,
        );
    }

    public function testAssertReturn989(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1001,
        );
    }

    public function testAssertReturn990(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1002,
        );
    }

    public function testAssertReturn991(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1003,
        );
    }

    public function testAssertReturn992(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1004,
        );
    }

    public function testAssertReturn993(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1005,
        );
    }

    public function testAssertReturn994(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1006,
        );
    }

    public function testAssertReturn995(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1007,
        );
    }

    public function testAssertReturn996(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1008,
        );
    }

    public function testAssertReturn997(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1009,
        );
    }

    public function testAssertReturn998(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1010,
        );
    }

    public function testAssertReturn999(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1011,
        );
    }

    public function testAssertReturn1000(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1012,
        );
    }

    public function testAssertReturn1001(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1013,
        );
    }

    public function testAssertReturn1002(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1014,
        );
    }

    public function testAssertReturn1003(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1015,
        );
    }

    public function testAssertReturn1004(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1016,
        );
    }

    public function testAssertReturn1005(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1017,
        );
    }

    public function testAssertReturn1006(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1018,
        );
    }

    public function testAssertReturn1007(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1019,
        );
    }

    public function testAssertReturn1008(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1020,
        );
    }

    public function testAssertReturn1009(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1021,
        );
    }

    public function testAssertReturn1010(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1022,
        );
    }

    public function testAssertReturn1011(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1023,
        );
    }

    public function testAssertReturn1012(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1024,
        );
    }

    public function testAssertReturn1013(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1025,
        );
    }

    public function testAssertReturn1014(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1026,
        );
    }

    public function testAssertReturn1015(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1027,
        );
    }

    public function testAssertReturn1016(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1028,
        );
    }

    public function testAssertReturn1017(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1029,
        );
    }

    public function testAssertReturn1018(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1030,
        );
    }

    public function testAssertReturn1019(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1031,
        );
    }

    public function testAssertReturn1020(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1032,
        );
    }

    public function testAssertReturn1021(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1033,
        );
    }

    public function testAssertReturn1022(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1034,
        );
    }

    public function testAssertReturn1023(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1035,
        );
    }

    public function testAssertReturn1024(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1036,
        );
    }

    public function testAssertReturn1025(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1037,
        );
    }

    public function testAssertReturn1026(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1038,
        );
    }

    public function testAssertReturn1027(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1039,
        );
    }

    public function testAssertReturn1028(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1040,
        );
    }

    public function testAssertReturn1029(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1041,
        );
    }

    public function testAssertReturn1030(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1042,
        );
    }

    public function testAssertReturn1031(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1043,
        );
    }

    public function testAssertReturn1032(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1044,
        );
    }

    public function testAssertReturn1033(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1045,
        );
    }

    public function testAssertReturn1034(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1046,
        );
    }

    public function testAssertReturn1035(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1047,
        );
    }

    public function testAssertReturn1036(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1048,
        );
    }

    public function testAssertReturn1037(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1049,
        );
    }

    public function testAssertReturn1038(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1050,
        );
    }

    public function testAssertReturn1039(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1051,
        );
    }

    public function testAssertReturn1040(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1052,
        );
    }

    public function testAssertReturn1041(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1053,
        );
    }

    public function testAssertReturn1042(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1054,
        );
    }

    public function testAssertReturn1043(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1055,
        );
    }

    public function testAssertReturn1044(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1056,
        );
    }

    public function testAssertReturn1045(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1057,
        );
    }

    public function testAssertReturn1046(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1058,
        );
    }

    public function testAssertReturn1047(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1059,
        );
    }

    public function testAssertReturn1048(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1060,
        );
    }

    public function testAssertReturn1049(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1061,
        );
    }

    public function testAssertReturn1050(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1062,
        );
    }

    public function testAssertReturn1051(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1063,
        );
    }

    public function testAssertReturn1052(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1064,
        );
    }

    public function testAssertReturn1053(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1065,
        );
    }

    public function testAssertReturn1054(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1066,
        );
    }

    public function testAssertReturn1055(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1067,
        );
    }

    public function testAssertReturn1056(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1068,
        );
    }

    public function testAssertReturn1057(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1069,
        );
    }

    public function testAssertReturn1058(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1070,
        );
    }

    public function testAssertReturn1059(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1071,
        );
    }

    public function testAssertReturn1060(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1072,
        );
    }

    public function testAssertReturn1061(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1073,
        );
    }

    public function testAssertReturn1062(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1074,
        );
    }

    public function testAssertReturn1063(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1075,
        );
    }

    public function testAssertReturn1064(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1076,
        );
    }

    public function testAssertReturn1065(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1077,
        );
    }

    public function testAssertReturn1066(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1078,
        );
    }

    public function testAssertReturn1067(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1079,
        );
    }

    public function testAssertReturn1068(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1080,
        );
    }

    public function testAssertReturn1069(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1081,
        );
    }

    public function testAssertReturn1070(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1082,
        );
    }

    public function testAssertReturn1071(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1083,
        );
    }

    public function testAssertReturn1072(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1084,
        );
    }

    public function testAssertReturn1073(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1085,
        );
    }

    public function testAssertReturn1074(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1086,
        );
    }

    public function testAssertReturn1075(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1087,
        );
    }

    public function testAssertReturn1076(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1088,
        );
    }

    public function testAssertReturn1077(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1089,
        );
    }

    public function testAssertReturn1078(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1090,
        );
    }

    public function testAssertReturn1079(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1091,
        );
    }

    public function testAssertReturn1080(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1092,
        );
    }

    public function testAssertReturn1081(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1093,
        );
    }

    public function testAssertReturn1082(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1094,
        );
    }

    public function testAssertReturn1083(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1095,
        );
    }

    public function testAssertReturn1084(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1096,
        );
    }

    public function testAssertReturn1085(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1097,
        );
    }

    public function testAssertReturn1086(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1098,
        );
    }

    public function testAssertReturn1087(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1099,
        );
    }

    public function testAssertReturn1088(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1100,
        );
    }

    public function testAssertReturn1089(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1101,
        );
    }

    public function testAssertReturn1090(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1102,
        );
    }

    public function testAssertReturn1091(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1103,
        );
    }

    public function testAssertReturn1092(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1104,
        );
    }

    public function testAssertReturn1093(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1105,
        );
    }

    public function testAssertReturn1094(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1106,
        );
    }

    public function testAssertReturn1095(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1107,
        );
    }

    public function testAssertReturn1096(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1108,
        );
    }

    public function testAssertReturn1097(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1109,
        );
    }

    public function testAssertReturn1098(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1110,
        );
    }

    public function testAssertReturn1099(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1111,
        );
    }

    public function testAssertReturn1100(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1112,
        );
    }

    public function testAssertReturn1101(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1113,
        );
    }

    public function testAssertReturn1102(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1114,
        );
    }

    public function testAssertReturn1103(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1115,
        );
    }

    public function testAssertReturn1104(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1116,
        );
    }

    public function testAssertReturn1105(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1117,
        );
    }

    public function testAssertReturn1106(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1118,
        );
    }

    public function testAssertReturn1107(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1119,
        );
    }

    public function testAssertReturn1108(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1120,
        );
    }

    public function testAssertReturn1109(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1121,
        );
    }

    public function testAssertReturn1110(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1122,
        );
    }

    public function testAssertReturn1111(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1123,
        );
    }

    public function testAssertReturn1112(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1124,
        );
    }

    public function testAssertReturn1113(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1125,
        );
    }

    public function testAssertReturn1114(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1126,
        );
    }

    public function testAssertReturn1115(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1127,
        );
    }

    public function testAssertReturn1116(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1128,
        );
    }

    public function testAssertReturn1117(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1129,
        );
    }

    public function testAssertReturn1118(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1130,
        );
    }

    public function testAssertReturn1119(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1131,
        );
    }

    public function testAssertReturn1120(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1132,
        );
    }

    public function testAssertReturn1121(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1133,
        );
    }

    public function testAssertReturn1122(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1134,
        );
    }

    public function testAssertReturn1123(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1135,
        );
    }

    public function testAssertReturn1124(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1136,
        );
    }

    public function testAssertReturn1125(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1137,
        );
    }

    public function testAssertReturn1126(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1138,
        );
    }

    public function testAssertReturn1127(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1139,
        );
    }

    public function testAssertReturn1128(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1140,
        );
    }

    public function testAssertReturn1129(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1141,
        );
    }

    public function testAssertReturn1130(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1142,
        );
    }

    public function testAssertReturn1131(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1143,
        );
    }

    public function testAssertReturn1132(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1144,
        );
    }

    public function testAssertReturn1133(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1145,
        );
    }

    public function testAssertReturn1134(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1146,
        );
    }

    public function testAssertReturn1135(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1147,
        );
    }

    public function testAssertReturn1136(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1148,
        );
    }

    public function testAssertReturn1137(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1149,
        );
    }

    public function testAssertReturn1138(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1150,
        );
    }

    public function testAssertReturn1139(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1151,
        );
    }

    public function testAssertReturn1140(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1152,
        );
    }

    public function testAssertReturn1141(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1153,
        );
    }

    public function testAssertReturn1142(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1154,
        );
    }

    public function testAssertReturn1143(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1155,
        );
    }

    public function testAssertReturn1144(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1156,
        );
    }

    public function testAssertReturn1145(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1157,
        );
    }

    public function testAssertReturn1146(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1158,
        );
    }

    public function testAssertReturn1147(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1159,
        );
    }

    public function testAssertReturn1148(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1160,
        );
    }

    public function testAssertReturn1149(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1161,
        );
    }

    public function testAssertReturn1150(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1162,
        );
    }

    public function testAssertReturn1151(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1163,
        );
    }

    public function testAssertReturn1152(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1164,
        );
    }

    public function testAssertReturn1153(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1165,
        );
    }

    public function testAssertReturn1154(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1166,
        );
    }

    public function testAssertReturn1155(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1167,
        );
    }

    public function testAssertReturn1156(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1168,
        );
    }

    public function testAssertReturn1157(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1169,
        );
    }

    public function testAssertReturn1158(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1170,
        );
    }

    public function testAssertReturn1159(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1171,
        );
    }

    public function testAssertReturn1160(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1172,
        );
    }

    public function testAssertReturn1161(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1173,
        );
    }

    public function testAssertReturn1162(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1174,
        );
    }

    public function testAssertReturn1163(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1175,
        );
    }

    public function testAssertReturn1164(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1176,
        );
    }

    public function testAssertReturn1165(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1177,
        );
    }

    public function testAssertReturn1166(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1178,
        );
    }

    public function testAssertReturn1167(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1179,
        );
    }

    public function testAssertReturn1168(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1180,
        );
    }

    public function testAssertReturn1169(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1181,
        );
    }

    public function testAssertReturn1170(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1182,
        );
    }

    public function testAssertReturn1171(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1183,
        );
    }

    public function testAssertReturn1172(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1184,
        );
    }

    public function testAssertReturn1173(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1185,
        );
    }

    public function testAssertReturn1174(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1186,
        );
    }

    public function testAssertReturn1175(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1187,
        );
    }

    public function testAssertReturn1176(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1188,
        );
    }

    public function testAssertReturn1177(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1189,
        );
    }

    public function testAssertReturn1178(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1190,
        );
    }

    public function testAssertReturn1179(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1191,
        );
    }

    public function testAssertReturn1180(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1192,
        );
    }

    public function testAssertReturn1181(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1193,
        );
    }

    public function testAssertReturn1182(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1194,
        );
    }

    public function testAssertReturn1183(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1195,
        );
    }

    public function testAssertReturn1184(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1196,
        );
    }

    public function testAssertReturn1185(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1197,
        );
    }

    public function testAssertReturn1186(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1198,
        );
    }

    public function testAssertReturn1187(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1199,
        );
    }

    public function testAssertReturn1188(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1200,
        );
    }

    public function testAssertReturn1189(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1201,
        );
    }

    public function testAssertReturn1190(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1202,
        );
    }

    public function testAssertReturn1191(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1203,
        );
    }

    public function testAssertReturn1192(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1204,
        );
    }

    public function testAssertReturn1193(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1205,
        );
    }

    public function testAssertReturn1194(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1206,
        );
    }

    public function testAssertReturn1195(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1207,
        );
    }

    public function testAssertReturn1196(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1208,
        );
    }

    public function testAssertReturn1197(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1209,
        );
    }

    public function testAssertReturn1198(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1210,
        );
    }

    public function testAssertReturn1199(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1211,
        );
    }

    public function testAssertReturn1200(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1212,
        );
    }

    public function testAssertReturn1201(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1213,
        );
    }

    public function testAssertReturn1202(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1214,
        );
    }

    public function testAssertReturn1203(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1215,
        );
    }

    public function testAssertReturn1204(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1216,
        );
    }

    public function testAssertReturn1205(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1217,
        );
    }

    public function testAssertReturn1206(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1218,
        );
    }

    public function testAssertReturn1207(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1219,
        );
    }

    public function testAssertReturn1208(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1220,
        );
    }

    public function testAssertReturn1209(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1221,
        );
    }

    public function testAssertReturn1210(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1222,
        );
    }

    public function testAssertReturn1211(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1223,
        );
    }

    public function testAssertReturn1212(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1224,
        );
    }

    public function testAssertReturn1213(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1225,
        );
    }

    public function testAssertReturn1214(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1226,
        );
    }

    public function testAssertReturn1215(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1227,
        );
    }

    public function testAssertReturn1216(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1228,
        );
    }

    public function testAssertReturn1217(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1229,
        );
    }

    public function testAssertReturn1218(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1230,
        );
    }

    public function testAssertReturn1219(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1231,
        );
    }

    public function testAssertReturn1220(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1232,
        );
    }

    public function testAssertReturn1221(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1233,
        );
    }

    public function testAssertReturn1222(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1234,
        );
    }

    public function testAssertReturn1223(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1235,
        );
    }

    public function testAssertReturn1224(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1236,
        );
    }

    public function testAssertReturn1225(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1237,
        );
    }

    public function testAssertReturn1226(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1238,
        );
    }

    public function testAssertReturn1227(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1239,
        );
    }

    public function testAssertReturn1228(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1240,
        );
    }

    public function testAssertReturn1229(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1241,
        );
    }

    public function testAssertReturn1230(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1242,
        );
    }

    public function testAssertReturn1231(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1243,
        );
    }

    public function testAssertReturn1232(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1244,
        );
    }

    public function testAssertReturn1233(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1245,
        );
    }

    public function testAssertReturn1234(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1246,
        );
    }

    public function testAssertReturn1235(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1247,
        );
    }

    public function testAssertReturn1236(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1248,
        );
    }

    public function testAssertReturn1237(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1249,
        );
    }

    public function testAssertReturn1238(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1250,
        );
    }

    public function testAssertReturn1239(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1251,
        );
    }

    public function testAssertReturn1240(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1252,
        );
    }

    public function testAssertReturn1241(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1253,
        );
    }

    public function testAssertReturn1242(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1254,
        );
    }

    public function testAssertReturn1243(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1255,
        );
    }

    public function testAssertReturn1244(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1256,
        );
    }

    public function testAssertReturn1245(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1257,
        );
    }

    public function testAssertReturn1246(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1258,
        );
    }

    public function testAssertReturn1247(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1259,
        );
    }

    public function testAssertReturn1248(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1260,
        );
    }

    public function testAssertReturn1249(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1261,
        );
    }

    public function testAssertReturn1250(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1262,
        );
    }

    public function testAssertReturn1251(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1263,
        );
    }

    public function testAssertReturn1252(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1264,
        );
    }

    public function testAssertReturn1253(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1265,
        );
    }

    public function testAssertReturn1254(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1266,
        );
    }

    public function testAssertReturn1255(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1267,
        );
    }

    public function testAssertReturn1256(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1268,
        );
    }

    public function testAssertReturn1257(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1269,
        );
    }

    public function testAssertReturn1258(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1270,
        );
    }

    public function testAssertReturn1259(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1271,
        );
    }

    public function testAssertReturn1260(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1272,
        );
    }

    public function testAssertReturn1261(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1273,
        );
    }

    public function testAssertReturn1262(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1274,
        );
    }

    public function testAssertReturn1263(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1275,
        );
    }

    public function testAssertReturn1264(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1276,
        );
    }

    public function testAssertReturn1265(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1277,
        );
    }

    public function testAssertReturn1266(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1278,
        );
    }

    public function testAssertReturn1267(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1279,
        );
    }

    public function testAssertReturn1268(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1280,
        );
    }

    public function testAssertReturn1269(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1281,
        );
    }

    public function testAssertReturn1270(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1282,
        );
    }

    public function testAssertReturn1271(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1283,
        );
    }

    public function testAssertReturn1272(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1284,
        );
    }

    public function testAssertReturn1273(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1285,
        );
    }

    public function testAssertReturn1274(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1286,
        );
    }

    public function testAssertReturn1275(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1287,
        );
    }

    public function testAssertReturn1276(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1288,
        );
    }

    public function testAssertReturn1277(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1289,
        );
    }

    public function testAssertReturn1278(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1290,
        );
    }

    public function testAssertReturn1279(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1291,
        );
    }

    public function testAssertReturn1280(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1292,
        );
    }

    public function testAssertReturn1281(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1293,
        );
    }

    public function testAssertReturn1282(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1294,
        );
    }

    public function testAssertReturn1283(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1295,
        );
    }

    public function testAssertReturn1284(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1296,
        );
    }

    public function testAssertReturn1285(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1297,
        );
    }

    public function testAssertReturn1286(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1298,
        );
    }

    public function testAssertReturn1287(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1299,
        );
    }

    public function testAssertReturn1288(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1300,
        );
    }

    public function testAssertReturn1289(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1301,
        );
    }

    public function testAssertReturn1290(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1302,
        );
    }

    public function testAssertReturn1291(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1303,
        );
    }

    public function testAssertReturn1292(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1304,
        );
    }

    public function testAssertReturn1293(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1305,
        );
    }

    public function testAssertReturn1294(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1306,
        );
    }

    public function testAssertReturn1295(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1307,
        );
    }

    public function testAssertReturn1296(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1308,
        );
    }

    public function testAssertReturn1297(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1309,
        );
    }

    public function testAssertReturn1298(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1310,
        );
    }

    public function testAssertReturn1299(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1311,
        );
    }

    public function testAssertReturn1300(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1312,
        );
    }

    public function testAssertReturn1301(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1313,
        );
    }

    public function testAssertReturn1302(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1314,
        );
    }

    public function testAssertReturn1303(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1315,
        );
    }

    public function testAssertReturn1304(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1316,
        );
    }

    public function testAssertReturn1305(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1317,
        );
    }

    public function testAssertReturn1306(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1318,
        );
    }

    public function testAssertReturn1307(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1319,
        );
    }

    public function testAssertReturn1308(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1320,
        );
    }

    public function testAssertReturn1309(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1321,
        );
    }

    public function testAssertReturn1310(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1322,
        );
    }

    public function testAssertReturn1311(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1323,
        );
    }

    public function testAssertReturn1312(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1324,
        );
    }

    public function testAssertReturn1313(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1325,
        );
    }

    public function testAssertReturn1314(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1326,
        );
    }

    public function testAssertReturn1315(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1327,
        );
    }

    public function testAssertReturn1316(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1328,
        );
    }

    public function testAssertReturn1317(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1329,
        );
    }

    public function testAssertReturn1318(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1330,
        );
    }

    public function testAssertReturn1319(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1331,
        );
    }

    public function testAssertReturn1320(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1332,
        );
    }

    public function testAssertReturn1321(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1333,
        );
    }

    public function testAssertReturn1322(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1334,
        );
    }

    public function testAssertReturn1323(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1335,
        );
    }

    public function testAssertReturn1324(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1336,
        );
    }

    public function testAssertReturn1325(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1337,
        );
    }

    public function testAssertReturn1326(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1338,
        );
    }

    public function testAssertReturn1327(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1339,
        );
    }

    public function testAssertReturn1328(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1340,
        );
    }

    public function testAssertReturn1329(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1341,
        );
    }

    public function testAssertReturn1330(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1342,
        );
    }

    public function testAssertReturn1331(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1343,
        );
    }

    public function testAssertReturn1332(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1344,
        );
    }

    public function testAssertReturn1333(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1345,
        );
    }

    public function testAssertReturn1334(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1346,
        );
    }

    public function testAssertReturn1335(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1347,
        );
    }

    public function testAssertReturn1336(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1348,
        );
    }

    public function testAssertReturn1337(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1349,
        );
    }

    public function testAssertReturn1338(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1350,
        );
    }

    public function testAssertReturn1339(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1351,
        );
    }

    public function testAssertReturn1340(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1352,
        );
    }

    public function testAssertReturn1341(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1353,
        );
    }

    public function testAssertReturn1342(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1354,
        );
    }

    public function testAssertReturn1343(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1355,
        );
    }

    public function testAssertReturn1344(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1356,
        );
    }

    public function testAssertReturn1345(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1357,
        );
    }

    public function testAssertReturn1346(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1358,
        );
    }

    public function testAssertReturn1347(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1359,
        );
    }

    public function testAssertReturn1348(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1360,
        );
    }

    public function testAssertReturn1349(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1361,
        );
    }

    public function testAssertReturn1350(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1362,
        );
    }

    public function testAssertReturn1351(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1363,
        );
    }

    public function testAssertReturn1352(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1364,
        );
    }

    public function testAssertReturn1353(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1365,
        );
    }

    public function testAssertReturn1354(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1366,
        );
    }

    public function testAssertReturn1355(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1367,
        );
    }

    public function testAssertReturn1356(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1368,
        );
    }

    public function testAssertReturn1357(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1369,
        );
    }

    public function testAssertReturn1358(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1370,
        );
    }

    public function testAssertReturn1359(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1371,
        );
    }

    public function testAssertReturn1360(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1372,
        );
    }

    public function testAssertReturn1361(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1373,
        );
    }

    public function testAssertReturn1362(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1374,
        );
    }

    public function testAssertReturn1363(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1375,
        );
    }

    public function testAssertReturn1364(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1376,
        );
    }

    public function testAssertReturn1365(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1377,
        );
    }

    public function testAssertReturn1366(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1378,
        );
    }

    public function testAssertReturn1367(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1379,
        );
    }

    public function testAssertReturn1368(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1380,
        );
    }

    public function testAssertReturn1369(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1381,
        );
    }

    public function testAssertReturn1370(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1382,
        );
    }

    public function testAssertReturn1371(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1383,
        );
    }

    public function testAssertReturn1372(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1384,
        );
    }

    public function testAssertReturn1373(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1385,
        );
    }

    public function testAssertReturn1374(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1386,
        );
    }

    public function testAssertReturn1375(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1387,
        );
    }

    public function testAssertReturn1376(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1388,
        );
    }

    public function testAssertReturn1377(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1389,
        );
    }

    public function testAssertReturn1378(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1390,
        );
    }

    public function testAssertReturn1379(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1391,
        );
    }

    public function testAssertReturn1380(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1392,
        );
    }

    public function testAssertReturn1381(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1393,
        );
    }

    public function testAssertReturn1382(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1394,
        );
    }

    public function testAssertReturn1383(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1395,
        );
    }

    public function testAssertReturn1384(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1396,
        );
    }

    public function testAssertReturn1385(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1397,
        );
    }

    public function testAssertReturn1386(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1398,
        );
    }

    public function testAssertReturn1387(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1399,
        );
    }

    public function testAssertReturn1388(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1400,
        );
    }

    public function testAssertReturn1389(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1401,
        );
    }

    public function testAssertReturn1390(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1402,
        );
    }

    public function testAssertReturn1391(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1403,
        );
    }

    public function testAssertReturn1392(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1404,
        );
    }

    public function testAssertReturn1393(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1405,
        );
    }

    public function testAssertReturn1394(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1406,
        );
    }

    public function testAssertReturn1395(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1407,
        );
    }

    public function testAssertReturn1396(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1408,
        );
    }

    public function testAssertReturn1397(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1409,
        );
    }

    public function testAssertReturn1398(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1410,
        );
    }

    public function testAssertReturn1399(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1411,
        );
    }

    public function testAssertReturn1400(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1412,
        );
    }

    public function testAssertReturn1401(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1413,
        );
    }

    public function testAssertReturn1402(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1414,
        );
    }

    public function testAssertReturn1403(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1415,
        );
    }

    public function testAssertReturn1404(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1416,
        );
    }

    public function testAssertReturn1405(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1417,
        );
    }

    public function testAssertReturn1406(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1418,
        );
    }

    public function testAssertReturn1407(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1419,
        );
    }

    public function testAssertReturn1408(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1420,
        );
    }

    public function testAssertReturn1409(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1421,
        );
    }

    public function testAssertReturn1410(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1422,
        );
    }

    public function testAssertReturn1411(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1423,
        );
    }

    public function testAssertReturn1412(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1424,
        );
    }

    public function testAssertReturn1413(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1425,
        );
    }

    public function testAssertReturn1414(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1426,
        );
    }

    public function testAssertReturn1415(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1427,
        );
    }

    public function testAssertReturn1416(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1428,
        );
    }

    public function testAssertReturn1417(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1429,
        );
    }

    public function testAssertReturn1418(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1430,
        );
    }

    public function testAssertReturn1419(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1431,
        );
    }

    public function testAssertReturn1420(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1432,
        );
    }

    public function testAssertReturn1421(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1433,
        );
    }

    public function testAssertReturn1422(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1434,
        );
    }

    public function testAssertReturn1423(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1435,
        );
    }

    public function testAssertReturn1424(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1436,
        );
    }

    public function testAssertReturn1425(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1437,
        );
    }

    public function testAssertReturn1426(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1438,
        );
    }

    public function testAssertReturn1427(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1439,
        );
    }

    public function testAssertReturn1428(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1440,
        );
    }

    public function testAssertReturn1429(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1441,
        );
    }

    public function testAssertReturn1430(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1442,
        );
    }

    public function testAssertReturn1431(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1443,
        );
    }

    public function testAssertReturn1432(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1444,
        );
    }

    public function testAssertReturn1433(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1445,
        );
    }

    public function testAssertReturn1434(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1446,
        );
    }

    public function testAssertReturn1435(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1447,
        );
    }

    public function testAssertReturn1436(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1448,
        );
    }

    public function testAssertReturn1437(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1449,
        );
    }

    public function testAssertReturn1438(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1450,
        );
    }

    public function testAssertReturn1439(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1451,
        );
    }

    public function testAssertReturn1440(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1452,
        );
    }

    public function testAssertReturn1441(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1453,
        );
    }

    public function testAssertReturn1442(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1454,
        );
    }

    public function testAssertReturn1443(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1455,
        );
    }

    public function testAssertReturn1444(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1456,
        );
    }

    public function testAssertReturn1445(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1457,
        );
    }

    public function testAssertReturn1446(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1458,
        );
    }

    public function testAssertReturn1447(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1459,
        );
    }

    public function testAssertReturn1448(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1460,
        );
    }

    public function testAssertReturn1449(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1461,
        );
    }

    public function testAssertReturn1450(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1462,
        );
    }

    public function testAssertReturn1451(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1463,
        );
    }

    public function testAssertReturn1452(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1464,
        );
    }

    public function testAssertReturn1453(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1465,
        );
    }

    public function testAssertReturn1454(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1466,
        );
    }

    public function testAssertReturn1455(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1467,
        );
    }

    public function testAssertReturn1456(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1468,
        );
    }

    public function testAssertReturn1457(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1469,
        );
    }

    public function testAssertReturn1458(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1470,
        );
    }

    public function testAssertReturn1459(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1471,
        );
    }

    public function testAssertReturn1460(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1472,
        );
    }

    public function testAssertReturn1461(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1473,
        );
    }

    public function testAssertReturn1462(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1474,
        );
    }

    public function testAssertReturn1463(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1475,
        );
    }

    public function testAssertReturn1464(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1476,
        );
    }

    public function testAssertReturn1465(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1477,
        );
    }

    public function testAssertReturn1466(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1478,
        );
    }

    public function testAssertReturn1467(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1479,
        );
    }

    public function testAssertReturn1468(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1480,
        );
    }

    public function testAssertReturn1469(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1481,
        );
    }

    public function testAssertReturn1470(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1482,
        );
    }

    public function testAssertReturn1471(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1483,
        );
    }

    public function testAssertReturn1472(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1484,
        );
    }

    public function testAssertReturn1473(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1485,
        );
    }

    public function testAssertReturn1474(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1486,
        );
    }

    public function testAssertReturn1475(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1487,
        );
    }

    public function testAssertReturn1476(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1488,
        );
    }

    public function testAssertReturn1477(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1489,
        );
    }

    public function testAssertReturn1478(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1490,
        );
    }

    public function testAssertReturn1479(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1491,
        );
    }

    public function testAssertReturn1480(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1492,
        );
    }

    public function testAssertReturn1481(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1493,
        );
    }

    public function testAssertReturn1482(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1494,
        );
    }

    public function testAssertReturn1483(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1495,
        );
    }

    public function testAssertReturn1484(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1496,
        );
    }

    public function testAssertReturn1485(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1497,
        );
    }

    public function testAssertReturn1486(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1498,
        );
    }

    public function testAssertReturn1487(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1499,
        );
    }

    public function testAssertReturn1488(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1500,
        );
    }

    public function testAssertReturn1489(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1501,
        );
    }

    public function testAssertReturn1490(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1502,
        );
    }

    public function testAssertReturn1491(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1503,
        );
    }

    public function testAssertReturn1492(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1504,
        );
    }

    public function testAssertReturn1493(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1505,
        );
    }

    public function testAssertReturn1494(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1506,
        );
    }

    public function testAssertReturn1495(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1507,
        );
    }

    public function testAssertReturn1496(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1508,
        );
    }

    public function testAssertReturn1497(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1509,
        );
    }

    public function testAssertReturn1498(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1510,
        );
    }

    public function testAssertReturn1499(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1511,
        );
    }

    public function testAssertReturn1500(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1512,
        );
    }

    public function testAssertReturn1501(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1513,
        );
    }

    public function testAssertReturn1502(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1514,
        );
    }

    public function testAssertReturn1503(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1515,
        );
    }

    public function testAssertReturn1504(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1516,
        );
    }

    public function testAssertReturn1505(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1517,
        );
    }

    public function testAssertReturn1506(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1518,
        );
    }

    public function testAssertReturn1507(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1519,
        );
    }

    public function testAssertReturn1508(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1520,
        );
    }

    public function testAssertReturn1509(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1521,
        );
    }

    public function testAssertReturn1510(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1522,
        );
    }

    public function testAssertReturn1511(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1523,
        );
    }

    public function testAssertReturn1512(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1524,
        );
    }

    public function testAssertReturn1513(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1525,
        );
    }

    public function testAssertReturn1514(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1526,
        );
    }

    public function testAssertReturn1515(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1527,
        );
    }

    public function testAssertReturn1516(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1528,
        );
    }

    public function testAssertReturn1517(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1529,
        );
    }

    public function testAssertReturn1518(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1530,
        );
    }

    public function testAssertReturn1519(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1531,
        );
    }

    public function testAssertReturn1520(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1532,
        );
    }

    public function testAssertReturn1521(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1533,
        );
    }

    public function testAssertReturn1522(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1534,
        );
    }

    public function testAssertReturn1523(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1535,
        );
    }

    public function testAssertReturn1524(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1536,
        );
    }

    public function testAssertReturn1525(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1537,
        );
    }

    public function testAssertReturn1526(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1538,
        );
    }

    public function testAssertReturn1527(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1539,
        );
    }

    public function testAssertReturn1528(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1540,
        );
    }

    public function testAssertReturn1529(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1541,
        );
    }

    public function testAssertReturn1530(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1542,
        );
    }

    public function testAssertReturn1531(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1543,
        );
    }

    public function testAssertReturn1532(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1544,
        );
    }

    public function testAssertReturn1533(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1545,
        );
    }

    public function testAssertReturn1534(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1546,
        );
    }

    public function testAssertReturn1535(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1547,
        );
    }

    public function testAssertReturn1536(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1548,
        );
    }

    public function testAssertReturn1537(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1549,
        );
    }

    public function testAssertReturn1538(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1550,
        );
    }

    public function testAssertReturn1539(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1551,
        );
    }

    public function testAssertReturn1540(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1552,
        );
    }

    public function testAssertReturn1541(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1553,
        );
    }

    public function testAssertReturn1542(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1554,
        );
    }

    public function testAssertReturn1543(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1555,
        );
    }

    public function testAssertReturn1544(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1556,
        );
    }

    public function testAssertReturn1545(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1557,
        );
    }

    public function testAssertReturn1546(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1558,
        );
    }

    public function testAssertReturn1547(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1559,
        );
    }

    public function testAssertReturn1548(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1560,
        );
    }

    public function testAssertReturn1549(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1561,
        );
    }

    public function testAssertReturn1550(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1562,
        );
    }

    public function testAssertReturn1551(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1563,
        );
    }

    public function testAssertReturn1552(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1564,
        );
    }

    public function testAssertReturn1553(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1565,
        );
    }

    public function testAssertReturn1554(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1566,
        );
    }

    public function testAssertReturn1555(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1567,
        );
    }

    public function testAssertReturn1556(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1568,
        );
    }

    public function testAssertReturn1557(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1569,
        );
    }

    public function testAssertReturn1558(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1570,
        );
    }

    public function testAssertReturn1559(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1571,
        );
    }

    public function testAssertReturn1560(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1572,
        );
    }

    public function testAssertReturn1561(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1573,
        );
    }

    public function testAssertReturn1562(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1574,
        );
    }

    public function testAssertReturn1563(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1575,
        );
    }

    public function testAssertReturn1564(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1576,
        );
    }

    public function testAssertReturn1565(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1577,
        );
    }

    public function testAssertReturn1566(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1578,
        );
    }

    public function testAssertReturn1567(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1579,
        );
    }

    public function testAssertReturn1568(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1580,
        );
    }

    public function testAssertReturn1569(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1581,
        );
    }

    public function testAssertReturn1570(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1582,
        );
    }

    public function testAssertReturn1571(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1583,
        );
    }

    public function testAssertReturn1572(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1584,
        );
    }

    public function testAssertReturn1573(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1585,
        );
    }

    public function testAssertReturn1574(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1586,
        );
    }

    public function testAssertReturn1575(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1587,
        );
    }

    public function testAssertReturn1576(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1588,
        );
    }

    public function testAssertReturn1577(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1589,
        );
    }

    public function testAssertReturn1578(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1590,
        );
    }

    public function testAssertReturn1579(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1591,
        );
    }

    public function testAssertReturn1580(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1592,
        );
    }

    public function testAssertReturn1581(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1593,
        );
    }

    public function testAssertReturn1582(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1594,
        );
    }

    public function testAssertReturn1583(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1595,
        );
    }

    public function testAssertReturn1584(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1596,
        );
    }

    public function testAssertReturn1585(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1597,
        );
    }

    public function testAssertReturn1586(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1598,
        );
    }

    public function testAssertReturn1587(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1599,
        );
    }

    public function testAssertReturn1588(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1600,
        );
    }

    public function testAssertReturn1589(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1601,
        );
    }

    public function testAssertReturn1590(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1602,
        );
    }

    public function testAssertReturn1591(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1603,
        );
    }

    public function testAssertReturn1592(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1604,
        );
    }

    public function testAssertReturn1593(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1605,
        );
    }

    public function testAssertReturn1594(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1606,
        );
    }

    public function testAssertReturn1595(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1607,
        );
    }

    public function testAssertReturn1596(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1608,
        );
    }

    public function testAssertReturn1597(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1609,
        );
    }

    public function testAssertReturn1598(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1610,
        );
    }

    public function testAssertReturn1599(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1611,
        );
    }

    public function testAssertReturn1600(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1612,
        );
    }

    public function testAssertReturn1601(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1613,
        );
    }

    public function testAssertReturn1602(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1614,
        );
    }

    public function testAssertReturn1603(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1615,
        );
    }

    public function testAssertReturn1604(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1616,
        );
    }

    public function testAssertReturn1605(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1617,
        );
    }

    public function testAssertReturn1606(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1618,
        );
    }

    public function testAssertReturn1607(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1619,
        );
    }

    public function testAssertReturn1608(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1620,
        );
    }

    public function testAssertReturn1609(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1621,
        );
    }

    public function testAssertReturn1610(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1622,
        );
    }

    public function testAssertReturn1611(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1623,
        );
    }

    public function testAssertReturn1612(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1624,
        );
    }

    public function testAssertReturn1613(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1625,
        );
    }

    public function testAssertReturn1614(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1626,
        );
    }

    public function testAssertReturn1615(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1627,
        );
    }

    public function testAssertReturn1616(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1628,
        );
    }

    public function testAssertReturn1617(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1629,
        );
    }

    public function testAssertReturn1618(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1630,
        );
    }

    public function testAssertReturn1619(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1631,
        );
    }

    public function testAssertReturn1620(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1632,
        );
    }

    public function testAssertReturn1621(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1633,
        );
    }

    public function testAssertReturn1622(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1634,
        );
    }

    public function testAssertReturn1623(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1635,
        );
    }

    public function testAssertReturn1624(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1636,
        );
    }

    public function testAssertReturn1625(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1637,
        );
    }

    public function testAssertReturn1626(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1638,
        );
    }

    public function testAssertReturn1627(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1639,
        );
    }

    public function testAssertReturn1628(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1640,
        );
    }

    public function testAssertReturn1629(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1641,
        );
    }

    public function testAssertReturn1630(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1642,
        );
    }

    public function testAssertReturn1631(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1643,
        );
    }

    public function testAssertReturn1632(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1644,
        );
    }

    public function testAssertReturn1633(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1645,
        );
    }

    public function testAssertReturn1634(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1646,
        );
    }

    public function testAssertReturn1635(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1647,
        );
    }

    public function testAssertReturn1636(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1648,
        );
    }

    public function testAssertReturn1637(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1649,
        );
    }

    public function testAssertReturn1638(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1650,
        );
    }

    public function testAssertReturn1639(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1651,
        );
    }

    public function testAssertReturn1640(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1652,
        );
    }

    public function testAssertReturn1641(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1653,
        );
    }

    public function testAssertReturn1642(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1654,
        );
    }

    public function testAssertReturn1643(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1655,
        );
    }

    public function testAssertReturn1644(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1656,
        );
    }

    public function testAssertReturn1645(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1657,
        );
    }

    public function testAssertReturn1646(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1658,
        );
    }

    public function testAssertReturn1647(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1659,
        );
    }

    public function testAssertReturn1648(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1660,
        );
    }

    public function testAssertReturn1649(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1661,
        );
    }

    public function testAssertReturn1650(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1662,
        );
    }

    public function testAssertReturn1651(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1663,
        );
    }

    public function testAssertReturn1652(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1664,
        );
    }

    public function testAssertReturn1653(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1665,
        );
    }

    public function testAssertReturn1654(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1666,
        );
    }

    public function testAssertReturn1655(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1667,
        );
    }

    public function testAssertReturn1656(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1668,
        );
    }

    public function testAssertReturn1657(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1669,
        );
    }

    public function testAssertReturn1658(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1670,
        );
    }

    public function testAssertReturn1659(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1671,
        );
    }

    public function testAssertReturn1660(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1672,
        );
    }

    public function testAssertReturn1661(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1673,
        );
    }

    public function testAssertReturn1662(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1674,
        );
    }

    public function testAssertReturn1663(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1675,
        );
    }

    public function testAssertReturn1664(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1676,
        );
    }

    public function testAssertReturn1665(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1677,
        );
    }

    public function testAssertReturn1666(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1678,
        );
    }

    public function testAssertReturn1667(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1679,
        );
    }

    public function testAssertReturn1668(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1680,
        );
    }

    public function testAssertReturn1669(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1681,
        );
    }

    public function testAssertReturn1670(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1682,
        );
    }

    public function testAssertReturn1671(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1683,
        );
    }

    public function testAssertReturn1672(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1684,
        );
    }

    public function testAssertReturn1673(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1685,
        );
    }

    public function testAssertReturn1674(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1686,
        );
    }

    public function testAssertReturn1675(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1687,
        );
    }

    public function testAssertReturn1676(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1688,
        );
    }

    public function testAssertReturn1677(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1689,
        );
    }

    public function testAssertReturn1678(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1690,
        );
    }

    public function testAssertReturn1679(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1691,
        );
    }

    public function testAssertReturn1680(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1692,
        );
    }

    public function testAssertReturn1681(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1693,
        );
    }

    public function testAssertReturn1682(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1694,
        );
    }

    public function testAssertReturn1683(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1695,
        );
    }

    public function testAssertReturn1684(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1696,
        );
    }

    public function testAssertReturn1685(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1697,
        );
    }

    public function testAssertReturn1686(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1698,
        );
    }

    public function testAssertReturn1687(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1699,
        );
    }

    public function testAssertReturn1688(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1700,
        );
    }

    public function testAssertReturn1689(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1701,
        );
    }

    public function testAssertReturn1690(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1702,
        );
    }

    public function testAssertReturn1691(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1703,
        );
    }

    public function testAssertReturn1692(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1704,
        );
    }

    public function testAssertReturn1693(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1705,
        );
    }

    public function testAssertReturn1694(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1706,
        );
    }

    public function testAssertReturn1695(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1707,
        );
    }

    public function testAssertReturn1696(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1708,
        );
    }

    public function testAssertReturn1697(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1709,
        );
    }

    public function testAssertReturn1698(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1710,
        );
    }

    public function testAssertReturn1699(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1711,
        );
    }

    public function testAssertReturn1700(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1712,
        );
    }

    public function testAssertReturn1701(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1713,
        );
    }

    public function testAssertReturn1702(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1714,
        );
    }

    public function testAssertReturn1703(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1715,
        );
    }

    public function testAssertReturn1704(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1716,
        );
    }

    public function testAssertReturn1705(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1717,
        );
    }

    public function testAssertReturn1706(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1718,
        );
    }

    public function testAssertReturn1707(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1719,
        );
    }

    public function testAssertReturn1708(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1720,
        );
    }

    public function testAssertReturn1709(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1721,
        );
    }

    public function testAssertReturn1710(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1722,
        );
    }

    public function testAssertReturn1711(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1723,
        );
    }

    public function testAssertReturn1712(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1724,
        );
    }

    public function testAssertReturn1713(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1725,
        );
    }

    public function testAssertReturn1714(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1726,
        );
    }

    public function testAssertReturn1715(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1727,
        );
    }

    public function testAssertReturn1716(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1728,
        );
    }

    public function testAssertReturn1717(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1729,
        );
    }

    public function testAssertReturn1718(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1730,
        );
    }

    public function testAssertReturn1719(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1731,
        );
    }

    public function testAssertReturn1720(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1732,
        );
    }

    public function testAssertReturn1721(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1733,
        );
    }

    public function testAssertReturn1722(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1734,
        );
    }

    public function testAssertReturn1723(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1735,
        );
    }

    public function testAssertReturn1724(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1736,
        );
    }

    public function testAssertReturn1725(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1737,
        );
    }

    public function testAssertReturn1726(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1738,
        );
    }

    public function testAssertReturn1727(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1739,
        );
    }

    public function testAssertReturn1728(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1740,
        );
    }

    public function testAssertReturn1729(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1741,
        );
    }

    public function testAssertReturn1730(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1742,
        );
    }

    public function testAssertReturn1731(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1743,
        );
    }

    public function testAssertReturn1732(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1744,
        );
    }

    public function testAssertReturn1733(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1745,
        );
    }

    public function testAssertReturn1734(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1746,
        );
    }

    public function testAssertReturn1735(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1747,
        );
    }

    public function testAssertReturn1736(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1748,
        );
    }

    public function testAssertReturn1737(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1749,
        );
    }

    public function testAssertReturn1738(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1750,
        );
    }

    public function testAssertReturn1739(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1751,
        );
    }

    public function testAssertReturn1740(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1752,
        );
    }

    public function testAssertReturn1741(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1753,
        );
    }

    public function testAssertReturn1742(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1754,
        );
    }

    public function testAssertReturn1743(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1755,
        );
    }

    public function testAssertReturn1744(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1756,
        );
    }

    public function testAssertReturn1745(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1757,
        );
    }

    public function testAssertReturn1746(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1758,
        );
    }

    public function testAssertReturn1747(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1759,
        );
    }

    public function testAssertReturn1748(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1760,
        );
    }

    public function testAssertReturn1749(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1761,
        );
    }

    public function testAssertReturn1750(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1762,
        );
    }

    public function testAssertReturn1751(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1763,
        );
    }

    public function testAssertReturn1752(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1764,
        );
    }

    public function testAssertReturn1753(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1765,
        );
    }

    public function testAssertReturn1754(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1766,
        );
    }

    public function testAssertReturn1755(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1767,
        );
    }

    public function testAssertReturn1756(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1768,
        );
    }

    public function testAssertReturn1757(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1769,
        );
    }

    public function testAssertReturn1758(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1770,
        );
    }

    public function testAssertReturn1759(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1771,
        );
    }

    public function testAssertReturn1760(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1772,
        );
    }

    public function testAssertReturn1761(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1773,
        );
    }

    public function testAssertReturn1762(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1774,
        );
    }

    public function testAssertReturn1763(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1775,
        );
    }

    public function testAssertReturn1764(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1776,
        );
    }

    public function testAssertReturn1765(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1777,
        );
    }

    public function testAssertReturn1766(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1778,
        );
    }

    public function testAssertReturn1767(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1779,
        );
    }

    public function testAssertReturn1768(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1780,
        );
    }

    public function testAssertReturn1769(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1781,
        );
    }

    public function testAssertReturn1770(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1782,
        );
    }

    public function testAssertReturn1771(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1783,
        );
    }

    public function testAssertReturn1772(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1784,
        );
    }

    public function testAssertReturn1773(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1785,
        );
    }

    public function testAssertReturn1774(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1786,
        );
    }

    public function testAssertReturn1775(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1787,
        );
    }

    public function testAssertReturn1776(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1788,
        );
    }

    public function testAssertReturn1777(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1789,
        );
    }

    public function testAssertReturn1778(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1790,
        );
    }

    public function testAssertReturn1779(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1791,
        );
    }

    public function testAssertReturn1780(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1792,
        );
    }

    public function testAssertReturn1781(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1793,
        );
    }

    public function testAssertReturn1782(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1794,
        );
    }

    public function testAssertReturn1783(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1795,
        );
    }

    public function testAssertReturn1784(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1796,
        );
    }

    public function testAssertReturn1785(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1797,
        );
    }

    public function testAssertReturn1786(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1798,
        );
    }

    public function testAssertReturn1787(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1799,
        );
    }

    public function testAssertReturn1788(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1800,
        );
    }

    public function testAssertReturn1789(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1801,
        );
    }

    public function testAssertReturn1790(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1802,
        );
    }

    public function testAssertReturn1791(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1803,
        );
    }

    public function testAssertReturn1792(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1804,
        );
    }

    public function testAssertReturn1793(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1805,
        );
    }

    public function testAssertReturn1794(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1806,
        );
    }

    public function testAssertReturn1795(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1807,
        );
    }

    public function testAssertReturn1796(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1808,
        );
    }

    public function testAssertReturn1797(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1809,
        );
    }

    public function testAssertReturn1798(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1810,
        );
    }

    public function testAssertReturn1799(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1811,
        );
    }

    public function testAssertReturn1800(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1812,
        );
    }

    public function testAssertReturn1801(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1813,
        );
    }

    public function testAssertReturn1802(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1814,
        );
    }

    public function testAssertReturn1803(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1815,
        );
    }

    public function testAssertReturn1804(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1816,
        );
    }

    public function testAssertReturn1805(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1817,
        );
    }

    public function testAssertReturn1806(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1818,
        );
    }

    public function testAssertReturn1807(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1819,
        );
    }

    public function testAssertReturn1808(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1820,
        );
    }

    public function testAssertReturn1809(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1821,
        );
    }

    public function testAssertReturn1810(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1822,
        );
    }

    public function testAssertReturn1811(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1823,
        );
    }

    public function testAssertReturn1812(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1824,
        );
    }

    public function testAssertReturn1813(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1825,
        );
    }

    public function testAssertReturn1814(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1826,
        );
    }

    public function testAssertReturn1815(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1827,
        );
    }

    public function testAssertReturn1816(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1828,
        );
    }

    public function testAssertReturn1817(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1829,
        );
    }

    public function testAssertReturn1818(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1830,
        );
    }

    public function testAssertReturn1819(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1831,
        );
    }

    public function testAssertReturn1820(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1832,
        );
    }

    public function testAssertReturn1821(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1833,
        );
    }

    public function testAssertReturn1822(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1834,
        );
    }

    public function testAssertReturn1823(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1835,
        );
    }

    public function testAssertReturn1824(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1836,
        );
    }

    public function testAssertReturn1825(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1837,
        );
    }

    public function testAssertReturn1826(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1838,
        );
    }

    public function testAssertReturn1827(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1839,
        );
    }

    public function testAssertReturn1828(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1840,
        );
    }

    public function testAssertReturn1829(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1841,
        );
    }

    public function testAssertReturn1830(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1842,
        );
    }

    public function testAssertReturn1831(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1843,
        );
    }

    public function testAssertReturn1832(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1844,
        );
    }

    public function testAssertReturn1833(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1845,
        );
    }

    public function testAssertReturn1834(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1846,
        );
    }

    public function testAssertReturn1835(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1847,
        );
    }

    public function testAssertReturn1836(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1848,
        );
    }

    public function testAssertReturn1837(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1849,
        );
    }

    public function testAssertReturn1838(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1850,
        );
    }

    public function testAssertReturn1839(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1851,
        );
    }

    public function testAssertReturn1840(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1852,
        );
    }

    public function testAssertReturn1841(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1853,
        );
    }

    public function testAssertReturn1842(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1854,
        );
    }

    public function testAssertReturn1843(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1855,
        );
    }

    public function testAssertReturn1844(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1856,
        );
    }

    public function testAssertReturn1845(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1857,
        );
    }

    public function testAssertReturn1846(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1858,
        );
    }

    public function testAssertReturn1847(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1859,
        );
    }

    public function testAssertReturn1848(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1860,
        );
    }

    public function testAssertReturn1849(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1861,
        );
    }

    public function testAssertReturn1850(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1862,
        );
    }

    public function testAssertReturn1851(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1863,
        );
    }

    public function testAssertReturn1852(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1864,
        );
    }

    public function testAssertReturn1853(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1865,
        );
    }

    public function testAssertReturn1854(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1866,
        );
    }

    public function testAssertReturn1855(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1867,
        );
    }

    public function testAssertReturn1856(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1868,
        );
    }

    public function testAssertReturn1857(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1869,
        );
    }

    public function testAssertReturn1858(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1870,
        );
    }

    public function testAssertReturn1859(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1871,
        );
    }

    public function testAssertReturn1860(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1872,
        );
    }

    public function testAssertReturn1861(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1873,
        );
    }

    public function testAssertReturn1862(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1874,
        );
    }

    public function testAssertReturn1863(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1875,
        );
    }

    public function testAssertReturn1864(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1876,
        );
    }

    public function testAssertReturn1865(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1877,
        );
    }

    public function testAssertReturn1866(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1878,
        );
    }

    public function testAssertReturn1867(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1879,
        );
    }

    public function testAssertReturn1868(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1880,
        );
    }

    public function testAssertReturn1869(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1881,
        );
    }

    public function testAssertReturn1870(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1882,
        );
    }

    public function testAssertReturn1871(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1883,
        );
    }

    public function testAssertReturn1872(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1884,
        );
    }

    public function testAssertReturn1873(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1885,
        );
    }

    public function testAssertReturn1874(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1886,
        );
    }

    public function testAssertReturn1875(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1887,
        );
    }

    public function testAssertReturn1876(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1888,
        );
    }

    public function testAssertReturn1877(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1889,
        );
    }

    public function testAssertReturn1878(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1890,
        );
    }

    public function testAssertReturn1879(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1891,
        );
    }

    public function testAssertReturn1880(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1892,
        );
    }

    public function testAssertReturn1881(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1893,
        );
    }

    public function testAssertReturn1882(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1894,
        );
    }

    public function testAssertReturn1883(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1895,
        );
    }

    public function testAssertReturn1884(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1896,
        );
    }

    public function testAssertReturn1885(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1897,
        );
    }

    public function testAssertReturn1886(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1898,
        );
    }

    public function testAssertReturn1887(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1899,
        );
    }

    public function testAssertReturn1888(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1900,
        );
    }

    public function testAssertReturn1889(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1901,
        );
    }

    public function testAssertReturn1890(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1902,
        );
    }

    public function testAssertReturn1891(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1903,
        );
    }

    public function testAssertReturn1892(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1904,
        );
    }

    public function testAssertReturn1893(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1905,
        );
    }

    public function testAssertReturn1894(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1906,
        );
    }

    public function testAssertReturn1895(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1907,
        );
    }

    public function testAssertReturn1896(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1908,
        );
    }

    public function testAssertReturn1897(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1909,
        );
    }

    public function testAssertReturn1898(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1910,
        );
    }

    public function testAssertReturn1899(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1911,
        );
    }

    public function testAssertReturn1900(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1912,
        );
    }

    public function testAssertReturn1901(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1913,
        );
    }

    public function testAssertReturn1902(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1914,
        );
    }

    public function testAssertReturn1903(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1915,
        );
    }

    public function testAssertReturn1904(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1916,
        );
    }

    public function testAssertReturn1905(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1917,
        );
    }

    public function testAssertReturn1906(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1918,
        );
    }

    public function testAssertReturn1907(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1919,
        );
    }

    public function testAssertReturn1908(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1920,
        );
    }

    public function testAssertReturn1909(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1921,
        );
    }

    public function testAssertReturn1910(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1922,
        );
    }

    public function testAssertReturn1911(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1923,
        );
    }

    public function testAssertReturn1912(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1924,
        );
    }

    public function testAssertReturn1913(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1925,
        );
    }

    public function testAssertReturn1914(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1926,
        );
    }

    public function testAssertReturn1915(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1927,
        );
    }

    public function testAssertReturn1916(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1928,
        );
    }

    public function testAssertReturn1917(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1929,
        );
    }

    public function testAssertReturn1918(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1930,
        );
    }

    public function testAssertReturn1919(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1931,
        );
    }

    public function testAssertReturn1920(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1932,
        );
    }

    public function testAssertReturn1921(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1933,
        );
    }

    public function testAssertReturn1922(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1934,
        );
    }

    public function testAssertReturn1923(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1935,
        );
    }

    public function testAssertReturn1924(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1936,
        );
    }

    public function testAssertReturn1925(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1937,
        );
    }

    public function testAssertReturn1926(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1938,
        );
    }

    public function testAssertReturn1927(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1939,
        );
    }

    public function testAssertReturn1928(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1940,
        );
    }

    public function testAssertReturn1929(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1941,
        );
    }

    public function testAssertReturn1930(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1942,
        );
    }

    public function testAssertReturn1931(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1943,
        );
    }

    public function testAssertReturn1932(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1944,
        );
    }

    public function testAssertReturn1933(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1945,
        );
    }

    public function testAssertReturn1934(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1946,
        );
    }

    public function testAssertReturn1935(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1947,
        );
    }

    public function testAssertReturn1936(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1948,
        );
    }

    public function testAssertReturn1937(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1949,
        );
    }

    public function testAssertReturn1938(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1950,
        );
    }

    public function testAssertReturn1939(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1951,
        );
    }

    public function testAssertReturn1940(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1952,
        );
    }

    public function testAssertReturn1941(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1953,
        );
    }

    public function testAssertReturn1942(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1954,
        );
    }

    public function testAssertReturn1943(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1955,
        );
    }

    public function testAssertReturn1944(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1956,
        );
    }

    public function testAssertReturn1945(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1957,
        );
    }

    public function testAssertReturn1946(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1958,
        );
    }

    public function testAssertReturn1947(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1959,
        );
    }

    public function testAssertReturn1948(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1960,
        );
    }

    public function testAssertReturn1949(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1961,
        );
    }

    public function testAssertReturn1950(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1962,
        );
    }

    public function testAssertReturn1951(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1963,
        );
    }

    public function testAssertReturn1952(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1964,
        );
    }

    public function testAssertReturn1953(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1965,
        );
    }

    public function testAssertReturn1954(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1966,
        );
    }

    public function testAssertReturn1955(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1967,
        );
    }

    public function testAssertReturn1956(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1968,
        );
    }

    public function testAssertReturn1957(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1969,
        );
    }

    public function testAssertReturn1958(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1970,
        );
    }

    public function testAssertReturn1959(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1971,
        );
    }

    public function testAssertReturn1960(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1972,
        );
    }

    public function testAssertReturn1961(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1973,
        );
    }

    public function testAssertReturn1962(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1974,
        );
    }

    public function testAssertReturn1963(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1975,
        );
    }

    public function testAssertReturn1964(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1976,
        );
    }

    public function testAssertReturn1965(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1977,
        );
    }

    public function testAssertReturn1966(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1978,
        );
    }

    public function testAssertReturn1967(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1979,
        );
    }

    public function testAssertReturn1968(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1980,
        );
    }

    public function testAssertReturn1969(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1981,
        );
    }

    public function testAssertReturn1970(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1982,
        );
    }

    public function testAssertReturn1971(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1983,
        );
    }

    public function testAssertReturn1972(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1984,
        );
    }

    public function testAssertReturn1973(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1985,
        );
    }

    public function testAssertReturn1974(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1986,
        );
    }

    public function testAssertReturn1975(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1987,
        );
    }

    public function testAssertReturn1976(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1988,
        );
    }

    public function testAssertReturn1977(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1989,
        );
    }

    public function testAssertReturn1978(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1990,
        );
    }

    public function testAssertReturn1979(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1991,
        );
    }

    public function testAssertReturn1980(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1992,
        );
    }

    public function testAssertReturn1981(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1993,
        );
    }

    public function testAssertReturn1982(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1994,
        );
    }

    public function testAssertReturn1983(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1995,
        );
    }

    public function testAssertReturn1984(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1996,
        );
    }

    public function testAssertReturn1985(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1997,
        );
    }

    public function testAssertReturn1986(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1998,
        );
    }

    public function testAssertReturn1987(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1999,
        );
    }

    public function testAssertReturn1988(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2000,
        );
    }

    public function testAssertReturn1989(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2001,
        );
    }

    public function testAssertReturn1990(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2002,
        );
    }

    public function testAssertReturn1991(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2003,
        );
    }

    public function testAssertReturn1992(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2004,
        );
    }

    public function testAssertReturn1993(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2005,
        );
    }

    public function testAssertReturn1994(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2006,
        );
    }

    public function testAssertReturn1995(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2007,
        );
    }

    public function testAssertReturn1996(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2008,
        );
    }

    public function testAssertReturn1997(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2009,
        );
    }

    public function testAssertReturn1998(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2010,
        );
    }

    public function testAssertReturn1999(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2011,
        );
    }

    public function testAssertReturn2000(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2012,
        );
    }

    public function testAssertReturn2001(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2013,
        );
    }

    public function testAssertReturn2002(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2014,
        );
    }

    public function testAssertReturn2003(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2015,
        );
    }

    public function testAssertReturn2004(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2016,
        );
    }

    public function testAssertReturn2005(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2017,
        );
    }

    public function testAssertReturn2006(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2018,
        );
    }

    public function testAssertReturn2007(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2019,
        );
    }

    public function testAssertReturn2008(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2020,
        );
    }

    public function testAssertReturn2009(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2021,
        );
    }

    public function testAssertReturn2010(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2022,
        );
    }

    public function testAssertReturn2011(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2023,
        );
    }

    public function testAssertReturn2012(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2024,
        );
    }

    public function testAssertReturn2013(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2025,
        );
    }

    public function testAssertReturn2014(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2026,
        );
    }

    public function testAssertReturn2015(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2027,
        );
    }

    public function testAssertReturn2016(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2028,
        );
    }

    public function testAssertReturn2017(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2029,
        );
    }

    public function testAssertReturn2018(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2030,
        );
    }

    public function testAssertReturn2019(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2031,
        );
    }

    public function testAssertReturn2020(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2032,
        );
    }

    public function testAssertReturn2021(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2033,
        );
    }

    public function testAssertReturn2022(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2034,
        );
    }

    public function testAssertReturn2023(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2035,
        );
    }

    public function testAssertReturn2024(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2036,
        );
    }

    public function testAssertReturn2025(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2037,
        );
    }

    public function testAssertReturn2026(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2038,
        );
    }

    public function testAssertReturn2027(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2039,
        );
    }

    public function testAssertReturn2028(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2040,
        );
    }

    public function testAssertReturn2029(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2041,
        );
    }

    public function testAssertReturn2030(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2042,
        );
    }

    public function testAssertReturn2031(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2043,
        );
    }

    public function testAssertReturn2032(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2044,
        );
    }

    public function testAssertReturn2033(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2045,
        );
    }

    public function testAssertReturn2034(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2046,
        );
    }

    public function testAssertReturn2035(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2047,
        );
    }

    public function testAssertReturn2036(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2048,
        );
    }

    public function testAssertReturn2037(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2049,
        );
    }

    public function testAssertReturn2038(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2050,
        );
    }

    public function testAssertReturn2039(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2051,
        );
    }

    public function testAssertReturn2040(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2052,
        );
    }

    public function testAssertReturn2041(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2053,
        );
    }

    public function testAssertReturn2042(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2054,
        );
    }

    public function testAssertReturn2043(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2055,
        );
    }

    public function testAssertReturn2044(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2056,
        );
    }

    public function testAssertReturn2045(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2057,
        );
    }

    public function testAssertReturn2046(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2058,
        );
    }

    public function testAssertReturn2047(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2059,
        );
    }

    public function testAssertReturn2048(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2060,
        );
    }

    public function testAssertReturn2049(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2061,
        );
    }

    public function testAssertReturn2050(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2062,
        );
    }

    public function testAssertReturn2051(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2063,
        );
    }

    public function testAssertReturn2052(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2064,
        );
    }

    public function testAssertReturn2053(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2065,
        );
    }

    public function testAssertReturn2054(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2066,
        );
    }

    public function testAssertReturn2055(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2067,
        );
    }

    public function testAssertReturn2056(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2068,
        );
    }

    public function testAssertReturn2057(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2069,
        );
    }

    public function testAssertReturn2058(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2070,
        );
    }

    public function testAssertReturn2059(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2071,
        );
    }

    public function testAssertReturn2060(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2072,
        );
    }

    public function testAssertReturn2061(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2073,
        );
    }

    public function testAssertReturn2062(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2074,
        );
    }

    public function testAssertReturn2063(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2075,
        );
    }

    public function testAssertReturn2064(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2076,
        );
    }

    public function testAssertReturn2065(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2077,
        );
    }

    public function testAssertReturn2066(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2078,
        );
    }

    public function testAssertReturn2067(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2079,
        );
    }

    public function testAssertReturn2068(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2080,
        );
    }

    public function testAssertReturn2069(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2081,
        );
    }

    public function testAssertReturn2070(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2082,
        );
    }

    public function testAssertReturn2071(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2083,
        );
    }

    public function testAssertReturn2072(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2084,
        );
    }

    public function testAssertReturn2073(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2085,
        );
    }

    public function testAssertReturn2074(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2086,
        );
    }

    public function testAssertReturn2075(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2087,
        );
    }

    public function testAssertReturn2076(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2088,
        );
    }

    public function testAssertReturn2077(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2089,
        );
    }

    public function testAssertReturn2078(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2090,
        );
    }

    public function testAssertReturn2079(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2091,
        );
    }

    public function testAssertReturn2080(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2092,
        );
    }

    public function testAssertReturn2081(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2093,
        );
    }

    public function testAssertReturn2082(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2094,
        );
    }

    public function testAssertReturn2083(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2095,
        );
    }

    public function testAssertReturn2084(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2096,
        );
    }

    public function testAssertReturn2085(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2097,
        );
    }

    public function testAssertReturn2086(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2098,
        );
    }

    public function testAssertReturn2087(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2099,
        );
    }

    public function testAssertReturn2088(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2100,
        );
    }

    public function testAssertReturn2089(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2101,
        );
    }

    public function testAssertReturn2090(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2102,
        );
    }

    public function testAssertReturn2091(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2103,
        );
    }

    public function testAssertReturn2092(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2104,
        );
    }

    public function testAssertReturn2093(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2105,
        );
    }

    public function testAssertReturn2094(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2106,
        );
    }

    public function testAssertReturn2095(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2107,
        );
    }

    public function testAssertReturn2096(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2108,
        );
    }

    public function testAssertReturn2097(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2109,
        );
    }

    public function testAssertReturn2098(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2110,
        );
    }

    public function testAssertReturn2099(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2111,
        );
    }

    public function testAssertReturn2100(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2112,
        );
    }

    public function testAssertReturn2101(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2113,
        );
    }

    public function testAssertReturn2102(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2114,
        );
    }

    public function testAssertReturn2103(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2115,
        );
    }

    public function testAssertReturn2104(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2116,
        );
    }

    public function testAssertReturn2105(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2117,
        );
    }

    public function testAssertReturn2106(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2118,
        );
    }

    public function testAssertReturn2107(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2119,
        );
    }

    public function testAssertReturn2108(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2120,
        );
    }

    public function testAssertReturn2109(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2121,
        );
    }

    public function testAssertReturn2110(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2122,
        );
    }

    public function testAssertReturn2111(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2123,
        );
    }

    public function testAssertReturn2112(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2124,
        );
    }

    public function testAssertReturn2113(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2125,
        );
    }

    public function testAssertReturn2114(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2126,
        );
    }

    public function testAssertReturn2115(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2127,
        );
    }

    public function testAssertReturn2116(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2128,
        );
    }

    public function testAssertReturn2117(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2129,
        );
    }

    public function testAssertReturn2118(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2130,
        );
    }

    public function testAssertReturn2119(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2131,
        );
    }

    public function testAssertReturn2120(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2132,
        );
    }

    public function testAssertReturn2121(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2133,
        );
    }

    public function testAssertReturn2122(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2134,
        );
    }

    public function testAssertReturn2123(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2135,
        );
    }

    public function testAssertReturn2124(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2136,
        );
    }

    public function testAssertReturn2125(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2137,
        );
    }

    public function testAssertReturn2126(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2138,
        );
    }

    public function testAssertReturn2127(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2139,
        );
    }

    public function testAssertReturn2128(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2140,
        );
    }

    public function testAssertReturn2129(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2141,
        );
    }

    public function testAssertReturn2130(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2142,
        );
    }

    public function testAssertReturn2131(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2143,
        );
    }

    public function testAssertReturn2132(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2144,
        );
    }

    public function testAssertReturn2133(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2145,
        );
    }

    public function testAssertReturn2134(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2146,
        );
    }

    public function testAssertReturn2135(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2147,
        );
    }

    public function testAssertReturn2136(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2148,
        );
    }

    public function testAssertReturn2137(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2149,
        );
    }

    public function testAssertReturn2138(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2150,
        );
    }

    public function testAssertReturn2139(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2151,
        );
    }

    public function testAssertReturn2140(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2152,
        );
    }

    public function testAssertReturn2141(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2153,
        );
    }

    public function testAssertReturn2142(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2154,
        );
    }

    public function testAssertReturn2143(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2155,
        );
    }

    public function testAssertReturn2144(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2156,
        );
    }

    public function testAssertReturn2145(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2157,
        );
    }

    public function testAssertReturn2146(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2158,
        );
    }

    public function testAssertReturn2147(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2159,
        );
    }

    public function testAssertReturn2148(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2160,
        );
    }

    public function testAssertReturn2149(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2161,
        );
    }

    public function testAssertReturn2150(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2162,
        );
    }

    public function testAssertReturn2151(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2163,
        );
    }

    public function testAssertReturn2152(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2164,
        );
    }

    public function testAssertReturn2153(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2165,
        );
    }

    public function testAssertReturn2154(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2166,
        );
    }

    public function testAssertReturn2155(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2167,
        );
    }

    public function testAssertReturn2156(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2168,
        );
    }

    public function testAssertReturn2157(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2169,
        );
    }

    public function testAssertReturn2158(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2170,
        );
    }

    public function testAssertReturn2159(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2171,
        );
    }

    public function testAssertReturn2160(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2172,
        );
    }

    public function testAssertReturn2161(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2173,
        );
    }

    public function testAssertReturn2162(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2174,
        );
    }

    public function testAssertReturn2163(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2175,
        );
    }

    public function testAssertReturn2164(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2176,
        );
    }

    public function testAssertReturn2165(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2177,
        );
    }

    public function testAssertReturn2166(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2178,
        );
    }

    public function testAssertReturn2167(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2179,
        );
    }

    public function testAssertReturn2168(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2180,
        );
    }

    public function testAssertReturn2169(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2181,
        );
    }

    public function testAssertReturn2170(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2182,
        );
    }

    public function testAssertReturn2171(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2183,
        );
    }

    public function testAssertReturn2172(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2184,
        );
    }

    public function testAssertReturn2173(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2185,
        );
    }

    public function testAssertReturn2174(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2186,
        );
    }

    public function testAssertReturn2175(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2187,
        );
    }

    public function testAssertReturn2176(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2188,
        );
    }

    public function testAssertReturn2177(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2189,
        );
    }

    public function testAssertReturn2178(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2190,
        );
    }

    public function testAssertReturn2179(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2191,
        );
    }

    public function testAssertReturn2180(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2192,
        );
    }

    public function testAssertReturn2181(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2193,
        );
    }

    public function testAssertReturn2182(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2194,
        );
    }

    public function testAssertReturn2183(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2195,
        );
    }

    public function testAssertReturn2184(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2196,
        );
    }

    public function testAssertReturn2185(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2197,
        );
    }

    public function testAssertReturn2186(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2198,
        );
    }

    public function testAssertReturn2187(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2199,
        );
    }

    public function testAssertReturn2188(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2200,
        );
    }

    public function testAssertReturn2189(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2201,
        );
    }

    public function testAssertReturn2190(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2202,
        );
    }

    public function testAssertReturn2191(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2203,
        );
    }

    public function testAssertReturn2192(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2204,
        );
    }

    public function testAssertReturn2193(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2205,
        );
    }

    public function testAssertReturn2194(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2206,
        );
    }

    public function testAssertReturn2195(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2207,
        );
    }

    public function testAssertReturn2196(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2208,
        );
    }

    public function testAssertReturn2197(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2209,
        );
    }

    public function testAssertReturn2198(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2210,
        );
    }

    public function testAssertReturn2199(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2211,
        );
    }

    public function testAssertReturn2200(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2212,
        );
    }

    public function testAssertReturn2201(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2213,
        );
    }

    public function testAssertReturn2202(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2214,
        );
    }

    public function testAssertReturn2203(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2215,
        );
    }

    public function testAssertReturn2204(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2216,
        );
    }

    public function testAssertReturn2205(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2217,
        );
    }

    public function testAssertReturn2206(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2218,
        );
    }

    public function testAssertReturn2207(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2219,
        );
    }

    public function testAssertReturn2208(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2220,
        );
    }

    public function testAssertReturn2209(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2221,
        );
    }

    public function testAssertReturn2210(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2222,
        );
    }

    public function testAssertReturn2211(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2223,
        );
    }

    public function testAssertReturn2212(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2224,
        );
    }

    public function testAssertReturn2213(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2225,
        );
    }

    public function testAssertReturn2214(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2226,
        );
    }

    public function testAssertReturn2215(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2227,
        );
    }

    public function testAssertReturn2216(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2228,
        );
    }

    public function testAssertReturn2217(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2229,
        );
    }

    public function testAssertReturn2218(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2230,
        );
    }

    public function testAssertReturn2219(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2231,
        );
    }

    public function testAssertReturn2220(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2232,
        );
    }

    public function testAssertReturn2221(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2233,
        );
    }

    public function testAssertReturn2222(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2234,
        );
    }

    public function testAssertReturn2223(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2235,
        );
    }

    public function testAssertReturn2224(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2236,
        );
    }

    public function testAssertReturn2225(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2237,
        );
    }

    public function testAssertReturn2226(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2238,
        );
    }

    public function testAssertReturn2227(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2239,
        );
    }

    public function testAssertReturn2228(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2240,
        );
    }

    public function testAssertReturn2229(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2241,
        );
    }

    public function testAssertReturn2230(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2242,
        );
    }

    public function testAssertReturn2231(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2243,
        );
    }

    public function testAssertReturn2232(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2244,
        );
    }

    public function testAssertReturn2233(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2245,
        );
    }

    public function testAssertReturn2234(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2246,
        );
    }

    public function testAssertReturn2235(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2247,
        );
    }

    public function testAssertReturn2236(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2248,
        );
    }

    public function testAssertReturn2237(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2249,
        );
    }

    public function testAssertReturn2238(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2250,
        );
    }

    public function testAssertReturn2239(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2251,
        );
    }

    public function testAssertReturn2240(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2252,
        );
    }

    public function testAssertReturn2241(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2253,
        );
    }

    public function testAssertReturn2242(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2254,
        );
    }

    public function testAssertReturn2243(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2255,
        );
    }

    public function testAssertReturn2244(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2256,
        );
    }

    public function testAssertReturn2245(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2257,
        );
    }

    public function testAssertReturn2246(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2258,
        );
    }

    public function testAssertReturn2247(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2259,
        );
    }

    public function testAssertReturn2248(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2260,
        );
    }

    public function testAssertReturn2249(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2261,
        );
    }

    public function testAssertReturn2250(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2262,
        );
    }

    public function testAssertReturn2251(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2263,
        );
    }

    public function testAssertReturn2252(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2264,
        );
    }

    public function testAssertReturn2253(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2265,
        );
    }

    public function testAssertReturn2254(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2266,
        );
    }

    public function testAssertReturn2255(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2267,
        );
    }

    public function testAssertReturn2256(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2268,
        );
    }

    public function testAssertReturn2257(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2269,
        );
    }

    public function testAssertReturn2258(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2270,
        );
    }

    public function testAssertReturn2259(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2271,
        );
    }

    public function testAssertReturn2260(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2272,
        );
    }

    public function testAssertReturn2261(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2273,
        );
    }

    public function testAssertReturn2262(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2274,
        );
    }

    public function testAssertReturn2263(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2275,
        );
    }

    public function testAssertReturn2264(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2276,
        );
    }

    public function testAssertReturn2265(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2277,
        );
    }

    public function testAssertReturn2266(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2278,
        );
    }

    public function testAssertReturn2267(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2279,
        );
    }

    public function testAssertReturn2268(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2280,
        );
    }

    public function testAssertReturn2269(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2281,
        );
    }

    public function testAssertReturn2270(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2282,
        );
    }

    public function testAssertReturn2271(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2283,
        );
    }

    public function testAssertReturn2272(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2284,
        );
    }

    public function testAssertReturn2273(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2285,
        );
    }

    public function testAssertReturn2274(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2286,
        );
    }

    public function testAssertReturn2275(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2287,
        );
    }

    public function testAssertReturn2276(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2288,
        );
    }

    public function testAssertReturn2277(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2289,
        );
    }

    public function testAssertReturn2278(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2290,
        );
    }

    public function testAssertReturn2279(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2291,
        );
    }

    public function testAssertReturn2280(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2292,
        );
    }

    public function testAssertReturn2281(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2293,
        );
    }

    public function testAssertReturn2282(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2294,
        );
    }

    public function testAssertReturn2283(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2295,
        );
    }

    public function testAssertReturn2284(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2296,
        );
    }

    public function testAssertReturn2285(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2297,
        );
    }

    public function testAssertReturn2286(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2298,
        );
    }

    public function testAssertReturn2287(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2299,
        );
    }

    public function testAssertReturn2288(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2300,
        );
    }

    public function testAssertReturn2289(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2301,
        );
    }

    public function testAssertReturn2290(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2302,
        );
    }

    public function testAssertReturn2291(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2303,
        );
    }

    public function testAssertReturn2292(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2304,
        );
    }

    public function testAssertReturn2293(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2305,
        );
    }

    public function testAssertReturn2294(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2306,
        );
    }

    public function testAssertReturn2295(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2307,
        );
    }

    public function testAssertReturn2296(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2308,
        );
    }

    public function testAssertReturn2297(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2309,
        );
    }

    public function testAssertReturn2298(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2310,
        );
    }

    public function testAssertReturn2299(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2311,
        );
    }

    public function testAssertReturn2300(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2312,
        );
    }

    public function testAssertReturn2301(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2313,
        );
    }

    public function testAssertReturn2302(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2314,
        );
    }

    public function testAssertReturn2303(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2315,
        );
    }

    public function testAssertReturn2304(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2316,
        );
    }

    public function testAssertReturn2305(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2317,
        );
    }

    public function testAssertReturn2306(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2318,
        );
    }

    public function testAssertReturn2307(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2319,
        );
    }

    public function testAssertReturn2308(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2320,
        );
    }

    public function testAssertReturn2309(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2321,
        );
    }

    public function testAssertReturn2310(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2322,
        );
    }

    public function testAssertReturn2311(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2323,
        );
    }

    public function testAssertReturn2312(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2324,
        );
    }

    public function testAssertReturn2313(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2325,
        );
    }

    public function testAssertReturn2314(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2326,
        );
    }

    public function testAssertReturn2315(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2327,
        );
    }

    public function testAssertReturn2316(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2328,
        );
    }

    public function testAssertReturn2317(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2329,
        );
    }

    public function testAssertReturn2318(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2330,
        );
    }

    public function testAssertReturn2319(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2331,
        );
    }

    public function testAssertReturn2320(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2332,
        );
    }

    public function testAssertReturn2321(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2333,
        );
    }

    public function testAssertReturn2322(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2334,
        );
    }

    public function testAssertReturn2323(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2335,
        );
    }

    public function testAssertReturn2324(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2336,
        );
    }

    public function testAssertReturn2325(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2337,
        );
    }

    public function testAssertReturn2326(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2338,
        );
    }

    public function testAssertReturn2327(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2339,
        );
    }

    public function testAssertReturn2328(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2340,
        );
    }

    public function testAssertReturn2329(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2341,
        );
    }

    public function testAssertReturn2330(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2342,
        );
    }

    public function testAssertReturn2331(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2343,
        );
    }

    public function testAssertReturn2332(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2344,
        );
    }

    public function testAssertReturn2333(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2345,
        );
    }

    public function testAssertReturn2334(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2346,
        );
    }

    public function testAssertReturn2335(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2347,
        );
    }

    public function testAssertReturn2336(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2348,
        );
    }

    public function testAssertReturn2337(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2349,
        );
    }

    public function testAssertReturn2338(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2350,
        );
    }

    public function testAssertReturn2339(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2351,
        );
    }

    public function testAssertReturn2340(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2352,
        );
    }

    public function testAssertReturn2341(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2353,
        );
    }

    public function testAssertReturn2342(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2354,
        );
    }

    public function testAssertReturn2343(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2355,
        );
    }

    public function testAssertReturn2344(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2356,
        );
    }

    public function testAssertReturn2345(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2357,
        );
    }

    public function testAssertReturn2346(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2358,
        );
    }

    public function testAssertReturn2347(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2359,
        );
    }

    public function testAssertReturn2348(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2360,
        );
    }

    public function testAssertReturn2349(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2361,
        );
    }

    public function testAssertReturn2350(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2362,
        );
    }

    public function testAssertReturn2351(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2363,
        );
    }

    public function testAssertReturn2352(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2364,
        );
    }

    public function testAssertReturn2353(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2365,
        );
    }

    public function testAssertReturn2354(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2366,
        );
    }

    public function testAssertReturn2355(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2367,
        );
    }

    public function testAssertReturn2356(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2368,
        );
    }

    public function testAssertReturn2357(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2369,
        );
    }

    public function testAssertReturn2358(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2370,
        );
    }

    public function testAssertReturn2359(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2371,
        );
    }

    public function testAssertReturn2360(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2372,
        );
    }

    public function testAssertReturn2361(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2373,
        );
    }

    public function testAssertReturn2362(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2374,
        );
    }

    public function testAssertReturn2363(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2375,
        );
    }

    public function testAssertReturn2364(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2376,
        );
    }

    public function testAssertReturn2365(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2377,
        );
    }

    public function testAssertReturn2366(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2378,
        );
    }

    public function testAssertReturn2367(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2379,
        );
    }

    public function testAssertReturn2368(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2380,
        );
    }

    public function testAssertReturn2369(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2381,
        );
    }

    public function testAssertReturn2370(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2382,
        );
    }

    public function testAssertReturn2371(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2383,
        );
    }

    public function testAssertReturn2372(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2384,
        );
    }

    public function testAssertReturn2373(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2385,
        );
    }

    public function testAssertReturn2374(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2386,
        );
    }

    public function testAssertReturn2375(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2387,
        );
    }

    public function testAssertReturn2376(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2388,
        );
    }

    public function testAssertReturn2377(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2389,
        );
    }

    public function testAssertReturn2378(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2390,
        );
    }

    public function testAssertReturn2379(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2391,
        );
    }

    public function testAssertReturn2380(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2392,
        );
    }

    public function testAssertReturn2381(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2393,
        );
    }

    public function testAssertReturn2382(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2394,
        );
    }

    public function testAssertReturn2383(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2395,
        );
    }

    public function testAssertReturn2384(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2396,
        );
    }

    public function testAssertReturn2385(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2397,
        );
    }

    public function testAssertReturn2386(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2398,
        );
    }

    public function testAssertReturn2387(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2399,
        );
    }

    public function testAssertReturn2388(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2400,
        );
    }

    public function testAssertReturn2389(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2401,
        );
    }

    public function testAssertReturn2390(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2402,
        );
    }

    public function testAssertReturn2391(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2403,
        );
    }

    public function testAssertReturn2392(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2404,
        );
    }

    public function testAssertReturn2393(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2405,
        );
    }

    public function testAssertReturn2394(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2406,
        );
    }

    public function testAssertReturn2395(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2407,
        );
    }

    public function testAssertReturn2396(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2408,
        );
    }

    public function testAssertReturn2397(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2409,
        );
    }

    public function testAssertReturn2398(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2410,
        );
    }

    public function testAssertReturn2399(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2411,
        );
    }

    public function testAssertReturn2400(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2412,
        );
    }

    public function testAssertInvalid2401(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'f32_cmp.1.wasm',
            text: 'type mismatch',
            line: 2417,
        );
    }

    public function testAssertInvalid2402(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'f32_cmp.2.wasm',
            text: 'type mismatch',
            line: 2418,
        );
    }

    public function testAssertInvalid2403(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'f32_cmp.3.wasm',
            text: 'type mismatch',
            line: 2419,
        );
    }

    public function testAssertInvalid2404(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'f32_cmp.4.wasm',
            text: 'type mismatch',
            line: 2420,
        );
    }

    public function testAssertInvalid2405(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'f32_cmp.5.wasm',
            text: 'type mismatch',
            line: 2421,
        );
    }

    public function testAssertInvalid2406(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'f32_cmp.6.wasm',
            text: 'type mismatch',
            line: 2422,
        );
    }
}
