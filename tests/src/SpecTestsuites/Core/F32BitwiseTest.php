<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class F32BitwiseTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'f32_bitwise.0.wasm',
            name: null,
            line: 4,
        );
    }

    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 10,
        );
    }

    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 11,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 12,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 13,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 14,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 15,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 16,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 17,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 18,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 19,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 20,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 21,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 22,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 23,
        );
    }

    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 24,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 25,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 26,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 27,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 28,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 29,
        );
    }

    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 30,
        );
    }

    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 31,
        );
    }

    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 32,
        );
    }

    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 33,
        );
    }

    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 34,
        );
    }

    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 35,
        );
    }

    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 36,
        );
    }

    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 37,
        );
    }

    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 38,
        );
    }

    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 39,
        );
    }

    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 40,
        );
    }

    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 41,
        );
    }

    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 42,
        );
    }

    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 43,
        );
    }

    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 44,
        );
    }

    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 45,
        );
    }

    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 46,
        );
    }

    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 47,
        );
    }

    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 48,
        );
    }

    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 49,
        );
    }

    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 50,
        );
    }

    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 51,
        );
    }

    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 52,
        );
    }

    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 53,
        );
    }

    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 54,
        );
    }

    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 55,
        );
    }

    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 56,
        );
    }

    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 57,
        );
    }

    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 58,
        );
    }

    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 59,
        );
    }

    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 60,
        );
    }

    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 61,
        );
    }

    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 62,
        );
    }

    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 63,
        );
    }

    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 64,
        );
    }

    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 65,
        );
    }

    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 66,
        );
    }

    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 67,
        );
    }

    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 68,
        );
    }

    public function testAssertReturn60(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 69,
        );
    }

    public function testAssertReturn61(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 70,
        );
    }

    public function testAssertReturn62(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 71,
        );
    }

    public function testAssertReturn63(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 72,
        );
    }

    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 73,
        );
    }

    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 74,
        );
    }

    public function testAssertReturn66(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 75,
        );
    }

    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 76,
        );
    }

    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 77,
        );
    }

    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 78,
        );
    }

    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 79,
        );
    }

    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 80,
        );
    }

    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 81,
        );
    }

    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 82,
        );
    }

    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 83,
        );
    }

    public function testAssertReturn75(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 84,
        );
    }

    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 85,
        );
    }

    public function testAssertReturn77(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 86,
        );
    }

    public function testAssertReturn78(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 87,
        );
    }

    public function testAssertReturn79(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 88,
        );
    }

    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 89,
        );
    }

    public function testAssertReturn81(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 90,
        );
    }

    public function testAssertReturn82(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 91,
        );
    }

    public function testAssertReturn83(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 92,
        );
    }

    public function testAssertReturn84(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 93,
        );
    }

    public function testAssertReturn85(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 94,
        );
    }

    public function testAssertReturn86(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 95,
        );
    }

    public function testAssertReturn87(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 96,
        );
    }

    public function testAssertReturn88(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 97,
        );
    }

    public function testAssertReturn89(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 98,
        );
    }

    public function testAssertReturn90(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 99,
        );
    }

    public function testAssertReturn91(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 100,
        );
    }

    public function testAssertReturn92(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 101,
        );
    }

    public function testAssertReturn93(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 102,
        );
    }

    public function testAssertReturn94(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 103,
        );
    }

    public function testAssertReturn95(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 104,
        );
    }

    public function testAssertReturn96(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 105,
        );
    }

    public function testAssertReturn97(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 106,
        );
    }

    public function testAssertReturn98(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 107,
        );
    }

    public function testAssertReturn99(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 108,
        );
    }

    public function testAssertReturn100(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 109,
        );
    }

    public function testAssertReturn101(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 110,
        );
    }

    public function testAssertReturn102(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 111,
        );
    }

    public function testAssertReturn103(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 112,
        );
    }

    public function testAssertReturn104(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 113,
        );
    }

    public function testAssertReturn105(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 114,
        );
    }

    public function testAssertReturn106(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 115,
        );
    }

    public function testAssertReturn107(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 116,
        );
    }

    public function testAssertReturn108(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 117,
        );
    }

    public function testAssertReturn109(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 118,
        );
    }

    public function testAssertReturn110(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 119,
        );
    }

    public function testAssertReturn111(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 120,
        );
    }

    public function testAssertReturn112(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 121,
        );
    }

    public function testAssertReturn113(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 122,
        );
    }

    public function testAssertReturn114(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 123,
        );
    }

    public function testAssertReturn115(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 124,
        );
    }

    public function testAssertReturn116(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 125,
        );
    }

    public function testAssertReturn117(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 126,
        );
    }

    public function testAssertReturn118(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 127,
        );
    }

    public function testAssertReturn119(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 128,
        );
    }

    public function testAssertReturn120(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 129,
        );
    }

    public function testAssertReturn121(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 130,
        );
    }

    public function testAssertReturn122(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 131,
        );
    }

    public function testAssertReturn123(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 132,
        );
    }

    public function testAssertReturn124(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 133,
        );
    }

    public function testAssertReturn125(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 134,
        );
    }

    public function testAssertReturn126(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 135,
        );
    }

    public function testAssertReturn127(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 136,
        );
    }

    public function testAssertReturn128(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 137,
        );
    }

    public function testAssertReturn129(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 138,
        );
    }

    public function testAssertReturn130(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 139,
        );
    }

    public function testAssertReturn131(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 140,
        );
    }

    public function testAssertReturn132(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 141,
        );
    }

    public function testAssertReturn133(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 142,
        );
    }

    public function testAssertReturn134(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 143,
        );
    }

    public function testAssertReturn135(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 144,
        );
    }

    public function testAssertReturn136(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 145,
        );
    }

    public function testAssertReturn137(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 146,
        );
    }

    public function testAssertReturn138(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 147,
        );
    }

    public function testAssertReturn139(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 148,
        );
    }

    public function testAssertReturn140(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 149,
        );
    }

    public function testAssertReturn141(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 150,
        );
    }

    public function testAssertReturn142(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 151,
        );
    }

    public function testAssertReturn143(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 152,
        );
    }

    public function testAssertReturn144(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 153,
        );
    }

    public function testAssertReturn145(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 154,
        );
    }

    public function testAssertReturn146(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 155,
        );
    }

    public function testAssertReturn147(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 156,
        );
    }

    public function testAssertReturn148(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 157,
        );
    }

    public function testAssertReturn149(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 158,
        );
    }

    public function testAssertReturn150(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 159,
        );
    }

    public function testAssertReturn151(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 160,
        );
    }

    public function testAssertReturn152(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 161,
        );
    }

    public function testAssertReturn153(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 162,
        );
    }

    public function testAssertReturn154(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 163,
        );
    }

    public function testAssertReturn155(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 164,
        );
    }

    public function testAssertReturn156(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 165,
        );
    }

    public function testAssertReturn157(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 166,
        );
    }

    public function testAssertReturn158(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 167,
        );
    }

    public function testAssertReturn159(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 168,
        );
    }

    public function testAssertReturn160(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 169,
        );
    }

    public function testAssertReturn161(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 170,
        );
    }

    public function testAssertReturn162(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 171,
        );
    }

    public function testAssertReturn163(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 172,
        );
    }

    public function testAssertReturn164(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 173,
        );
    }

    public function testAssertReturn165(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 174,
        );
    }

    public function testAssertReturn166(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 175,
        );
    }

    public function testAssertReturn167(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 176,
        );
    }

    public function testAssertReturn168(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 177,
        );
    }

    public function testAssertReturn169(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 178,
        );
    }

    public function testAssertReturn170(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 179,
        );
    }

    public function testAssertReturn171(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 180,
        );
    }

    public function testAssertReturn172(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 181,
        );
    }

    public function testAssertReturn173(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 182,
        );
    }

    public function testAssertReturn174(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 183,
        );
    }

    public function testAssertReturn175(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 184,
        );
    }

    public function testAssertReturn176(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 185,
        );
    }

    public function testAssertReturn177(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 186,
        );
    }

    public function testAssertReturn178(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 187,
        );
    }

    public function testAssertReturn179(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 188,
        );
    }

    public function testAssertReturn180(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 189,
        );
    }

    public function testAssertReturn181(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 190,
        );
    }

    public function testAssertReturn182(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 191,
        );
    }

    public function testAssertReturn183(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 192,
        );
    }

    public function testAssertReturn184(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 193,
        );
    }

    public function testAssertReturn185(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 194,
        );
    }

    public function testAssertReturn186(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 195,
        );
    }

    public function testAssertReturn187(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 196,
        );
    }

    public function testAssertReturn188(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 197,
        );
    }

    public function testAssertReturn189(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 198,
        );
    }

    public function testAssertReturn190(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 199,
        );
    }

    public function testAssertReturn191(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 200,
        );
    }

    public function testAssertReturn192(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 201,
        );
    }

    public function testAssertReturn193(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 202,
        );
    }

    public function testAssertReturn194(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 203,
        );
    }

    public function testAssertReturn195(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 204,
        );
    }

    public function testAssertReturn196(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 205,
        );
    }

    public function testAssertReturn197(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 206,
        );
    }

    public function testAssertReturn198(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 207,
        );
    }

    public function testAssertReturn199(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 208,
        );
    }

    public function testAssertReturn200(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 209,
        );
    }

    public function testAssertReturn201(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 210,
        );
    }

    public function testAssertReturn202(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 211,
        );
    }

    public function testAssertReturn203(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 212,
        );
    }

    public function testAssertReturn204(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 213,
        );
    }

    public function testAssertReturn205(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 214,
        );
    }

    public function testAssertReturn206(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 215,
        );
    }

    public function testAssertReturn207(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 216,
        );
    }

    public function testAssertReturn208(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 217,
        );
    }

    public function testAssertReturn209(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 218,
        );
    }

    public function testAssertReturn210(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 219,
        );
    }

    public function testAssertReturn211(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 220,
        );
    }

    public function testAssertReturn212(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 221,
        );
    }

    public function testAssertReturn213(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 222,
        );
    }

    public function testAssertReturn214(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 223,
        );
    }

    public function testAssertReturn215(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 224,
        );
    }

    public function testAssertReturn216(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 225,
        );
    }

    public function testAssertReturn217(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 226,
        );
    }

    public function testAssertReturn218(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 227,
        );
    }

    public function testAssertReturn219(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 228,
        );
    }

    public function testAssertReturn220(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 229,
        );
    }

    public function testAssertReturn221(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 230,
        );
    }

    public function testAssertReturn222(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 231,
        );
    }

    public function testAssertReturn223(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 232,
        );
    }

    public function testAssertReturn224(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 233,
        );
    }

    public function testAssertReturn225(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 234,
        );
    }

    public function testAssertReturn226(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 235,
        );
    }

    public function testAssertReturn227(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 236,
        );
    }

    public function testAssertReturn228(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 237,
        );
    }

    public function testAssertReturn229(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 238,
        );
    }

    public function testAssertReturn230(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 239,
        );
    }

    public function testAssertReturn231(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 240,
        );
    }

    public function testAssertReturn232(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 241,
        );
    }

    public function testAssertReturn233(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 242,
        );
    }

    public function testAssertReturn234(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 243,
        );
    }

    public function testAssertReturn235(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 244,
        );
    }

    public function testAssertReturn236(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 245,
        );
    }

    public function testAssertReturn237(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 246,
        );
    }

    public function testAssertReturn238(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 247,
        );
    }

    public function testAssertReturn239(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 248,
        );
    }

    public function testAssertReturn240(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 249,
        );
    }

    public function testAssertReturn241(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 250,
        );
    }

    public function testAssertReturn242(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 251,
        );
    }

    public function testAssertReturn243(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 252,
        );
    }

    public function testAssertReturn244(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 253,
        );
    }

    public function testAssertReturn245(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 254,
        );
    }

    public function testAssertReturn246(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 255,
        );
    }

    public function testAssertReturn247(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 256,
        );
    }

    public function testAssertReturn248(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 257,
        );
    }

    public function testAssertReturn249(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 258,
        );
    }

    public function testAssertReturn250(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 259,
        );
    }

    public function testAssertReturn251(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 260,
        );
    }

    public function testAssertReturn252(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 261,
        );
    }

    public function testAssertReturn253(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 262,
        );
    }

    public function testAssertReturn254(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 263,
        );
    }

    public function testAssertReturn255(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 264,
        );
    }

    public function testAssertReturn256(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 265,
        );
    }

    public function testAssertReturn257(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 266,
        );
    }

    public function testAssertReturn258(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 267,
        );
    }

    public function testAssertReturn259(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 268,
        );
    }

    public function testAssertReturn260(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 269,
        );
    }

    public function testAssertReturn261(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 270,
        );
    }

    public function testAssertReturn262(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 271,
        );
    }

    public function testAssertReturn263(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 272,
        );
    }

    public function testAssertReturn264(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 273,
        );
    }

    public function testAssertReturn265(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 274,
        );
    }

    public function testAssertReturn266(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 275,
        );
    }

    public function testAssertReturn267(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 276,
        );
    }

    public function testAssertReturn268(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 277,
        );
    }

    public function testAssertReturn269(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 278,
        );
    }

    public function testAssertReturn270(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 279,
        );
    }

    public function testAssertReturn271(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 280,
        );
    }

    public function testAssertReturn272(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 281,
        );
    }

    public function testAssertReturn273(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 282,
        );
    }

    public function testAssertReturn274(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 283,
        );
    }

    public function testAssertReturn275(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 284,
        );
    }

    public function testAssertReturn276(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 285,
        );
    }

    public function testAssertReturn277(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 286,
        );
    }

    public function testAssertReturn278(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 287,
        );
    }

    public function testAssertReturn279(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 288,
        );
    }

    public function testAssertReturn280(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 289,
        );
    }

    public function testAssertReturn281(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 290,
        );
    }

    public function testAssertReturn282(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 291,
        );
    }

    public function testAssertReturn283(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 292,
        );
    }

    public function testAssertReturn284(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 293,
        );
    }

    public function testAssertReturn285(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 294,
        );
    }

    public function testAssertReturn286(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 295,
        );
    }

    public function testAssertReturn287(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 296,
        );
    }

    public function testAssertReturn288(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 297,
        );
    }

    public function testAssertReturn289(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 298,
        );
    }

    public function testAssertReturn290(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 299,
        );
    }

    public function testAssertReturn291(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 300,
        );
    }

    public function testAssertReturn292(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 301,
        );
    }

    public function testAssertReturn293(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 302,
        );
    }

    public function testAssertReturn294(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 303,
        );
    }

    public function testAssertReturn295(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 304,
        );
    }

    public function testAssertReturn296(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 305,
        );
    }

    public function testAssertReturn297(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 306,
        );
    }

    public function testAssertReturn298(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 307,
        );
    }

    public function testAssertReturn299(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 308,
        );
    }

    public function testAssertReturn300(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 309,
        );
    }

    public function testAssertReturn301(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 310,
        );
    }

    public function testAssertReturn302(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 311,
        );
    }

    public function testAssertReturn303(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 312,
        );
    }

    public function testAssertReturn304(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 313,
        );
    }

    public function testAssertReturn305(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 314,
        );
    }

    public function testAssertReturn306(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 315,
        );
    }

    public function testAssertReturn307(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 316,
        );
    }

    public function testAssertReturn308(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 317,
        );
    }

    public function testAssertReturn309(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 318,
        );
    }

    public function testAssertReturn310(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 319,
        );
    }

    public function testAssertReturn311(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 320,
        );
    }

    public function testAssertReturn312(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 321,
        );
    }

    public function testAssertReturn313(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 322,
        );
    }

    public function testAssertReturn314(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 323,
        );
    }

    public function testAssertReturn315(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 324,
        );
    }

    public function testAssertReturn316(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 325,
        );
    }

    public function testAssertReturn317(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 326,
        );
    }

    public function testAssertReturn318(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 327,
        );
    }

    public function testAssertReturn319(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 328,
        );
    }

    public function testAssertReturn320(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 329,
        );
    }

    public function testAssertReturn321(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 330,
        );
    }

    public function testAssertReturn322(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 331,
        );
    }

    public function testAssertReturn323(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 332,
        );
    }

    public function testAssertReturn324(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 333,
        );
    }

    public function testAssertReturn325(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 334,
        );
    }

    public function testAssertReturn326(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 335,
        );
    }

    public function testAssertReturn327(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 336,
        );
    }

    public function testAssertReturn328(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 337,
        );
    }

    public function testAssertReturn329(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 338,
        );
    }

    public function testAssertReturn330(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 339,
        );
    }

    public function testAssertReturn331(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 340,
        );
    }

    public function testAssertReturn332(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 341,
        );
    }

    public function testAssertReturn333(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 342,
        );
    }

    public function testAssertReturn334(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 343,
        );
    }

    public function testAssertReturn335(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 344,
        );
    }

    public function testAssertReturn336(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 345,
        );
    }

    public function testAssertReturn337(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 346,
        );
    }

    public function testAssertReturn338(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 347,
        );
    }

    public function testAssertReturn339(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 348,
        );
    }

    public function testAssertReturn340(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 349,
        );
    }

    public function testAssertReturn341(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 350,
        );
    }

    public function testAssertReturn342(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 351,
        );
    }

    public function testAssertReturn343(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 352,
        );
    }

    public function testAssertReturn344(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 353,
        );
    }

    public function testAssertReturn345(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 354,
        );
    }

    public function testAssertReturn346(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 355,
        );
    }

    public function testAssertReturn347(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 356,
        );
    }

    public function testAssertReturn348(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 357,
        );
    }

    public function testAssertReturn349(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 358,
        );
    }

    public function testAssertReturn350(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 359,
        );
    }

    public function testAssertReturn351(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 360,
        );
    }

    public function testAssertReturn352(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 361,
        );
    }

    public function testAssertReturn353(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 362,
        );
    }

    public function testAssertReturn354(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 363,
        );
    }

    public function testAssertReturn355(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 364,
        );
    }

    public function testAssertReturn356(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 365,
        );
    }

    public function testAssertReturn357(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 366,
        );
    }

    public function testAssertReturn358(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 367,
        );
    }

    public function testAssertReturn359(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 368,
        );
    }

    public function testAssertReturn360(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 369,
        );
    }

    public function testAssertInvalid361(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'f32_bitwise.1.wasm',
            text: 'type mismatch',
            line: 374,
        );
    }

    public function testAssertInvalid362(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'f32_bitwise.2.wasm',
            text: 'type mismatch',
            line: 375,
        );
    }

    public function testAssertInvalid363(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'f32_bitwise.3.wasm',
            text: 'type mismatch',
            line: 376,
        );
    }
}
