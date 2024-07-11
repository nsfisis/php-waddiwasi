<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
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

    #[Depends('testModule0')]
    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 10,
        );
    }

    #[Depends('testAssertReturn1')]
    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 11,
        );
    }

    #[Depends('testAssertReturn2')]
    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 12,
        );
    }

    #[Depends('testAssertReturn3')]
    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 13,
        );
    }

    #[Depends('testAssertReturn4')]
    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 14,
        );
    }

    #[Depends('testAssertReturn5')]
    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 15,
        );
    }

    #[Depends('testAssertReturn6')]
    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 16,
        );
    }

    #[Depends('testAssertReturn7')]
    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 17,
        );
    }

    #[Depends('testAssertReturn8')]
    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 18,
        );
    }

    #[Depends('testAssertReturn9')]
    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 19,
        );
    }

    #[Depends('testAssertReturn10')]
    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 20,
        );
    }

    #[Depends('testAssertReturn11')]
    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 21,
        );
    }

    #[Depends('testAssertReturn12')]
    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 22,
        );
    }

    #[Depends('testAssertReturn13')]
    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 23,
        );
    }

    #[Depends('testAssertReturn14')]
    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 24,
        );
    }

    #[Depends('testAssertReturn15')]
    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 25,
        );
    }

    #[Depends('testAssertReturn16')]
    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 26,
        );
    }

    #[Depends('testAssertReturn17')]
    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 27,
        );
    }

    #[Depends('testAssertReturn18')]
    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 28,
        );
    }

    #[Depends('testAssertReturn19')]
    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 29,
        );
    }

    #[Depends('testAssertReturn20')]
    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 30,
        );
    }

    #[Depends('testAssertReturn21')]
    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 31,
        );
    }

    #[Depends('testAssertReturn22')]
    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 32,
        );
    }

    #[Depends('testAssertReturn23')]
    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 33,
        );
    }

    #[Depends('testAssertReturn24')]
    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 34,
        );
    }

    #[Depends('testAssertReturn25')]
    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 35,
        );
    }

    #[Depends('testAssertReturn26')]
    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 36,
        );
    }

    #[Depends('testAssertReturn27')]
    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 37,
        );
    }

    #[Depends('testAssertReturn28')]
    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 38,
        );
    }

    #[Depends('testAssertReturn29')]
    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 39,
        );
    }

    #[Depends('testAssertReturn30')]
    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 40,
        );
    }

    #[Depends('testAssertReturn31')]
    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 41,
        );
    }

    #[Depends('testAssertReturn32')]
    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 42,
        );
    }

    #[Depends('testAssertReturn33')]
    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 43,
        );
    }

    #[Depends('testAssertReturn34')]
    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 44,
        );
    }

    #[Depends('testAssertReturn35')]
    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 45,
        );
    }

    #[Depends('testAssertReturn36')]
    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 46,
        );
    }

    #[Depends('testAssertReturn37')]
    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 47,
        );
    }

    #[Depends('testAssertReturn38')]
    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 48,
        );
    }

    #[Depends('testAssertReturn39')]
    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 49,
        );
    }

    #[Depends('testAssertReturn40')]
    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 50,
        );
    }

    #[Depends('testAssertReturn41')]
    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 51,
        );
    }

    #[Depends('testAssertReturn42')]
    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 52,
        );
    }

    #[Depends('testAssertReturn43')]
    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 53,
        );
    }

    #[Depends('testAssertReturn44')]
    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 54,
        );
    }

    #[Depends('testAssertReturn45')]
    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 55,
        );
    }

    #[Depends('testAssertReturn46')]
    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 56,
        );
    }

    #[Depends('testAssertReturn47')]
    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 57,
        );
    }

    #[Depends('testAssertReturn48')]
    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 58,
        );
    }

    #[Depends('testAssertReturn49')]
    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 59,
        );
    }

    #[Depends('testAssertReturn50')]
    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 60,
        );
    }

    #[Depends('testAssertReturn51')]
    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 61,
        );
    }

    #[Depends('testAssertReturn52')]
    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 62,
        );
    }

    #[Depends('testAssertReturn53')]
    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 63,
        );
    }

    #[Depends('testAssertReturn54')]
    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 64,
        );
    }

    #[Depends('testAssertReturn55')]
    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 65,
        );
    }

    #[Depends('testAssertReturn56')]
    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 66,
        );
    }

    #[Depends('testAssertReturn57')]
    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 67,
        );
    }

    #[Depends('testAssertReturn58')]
    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 68,
        );
    }

    #[Depends('testAssertReturn59')]
    public function testAssertReturn60(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 69,
        );
    }

    #[Depends('testAssertReturn60')]
    public function testAssertReturn61(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 70,
        );
    }

    #[Depends('testAssertReturn61')]
    public function testAssertReturn62(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 71,
        );
    }

    #[Depends('testAssertReturn62')]
    public function testAssertReturn63(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 72,
        );
    }

    #[Depends('testAssertReturn63')]
    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 73,
        );
    }

    #[Depends('testAssertReturn64')]
    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 74,
        );
    }

    #[Depends('testAssertReturn65')]
    public function testAssertReturn66(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 75,
        );
    }

    #[Depends('testAssertReturn66')]
    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 76,
        );
    }

    #[Depends('testAssertReturn67')]
    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 77,
        );
    }

    #[Depends('testAssertReturn68')]
    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 78,
        );
    }

    #[Depends('testAssertReturn69')]
    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 79,
        );
    }

    #[Depends('testAssertReturn70')]
    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 80,
        );
    }

    #[Depends('testAssertReturn71')]
    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 81,
        );
    }

    #[Depends('testAssertReturn72')]
    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 82,
        );
    }

    #[Depends('testAssertReturn73')]
    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 83,
        );
    }

    #[Depends('testAssertReturn74')]
    public function testAssertReturn75(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 84,
        );
    }

    #[Depends('testAssertReturn75')]
    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 85,
        );
    }

    #[Depends('testAssertReturn76')]
    public function testAssertReturn77(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 86,
        );
    }

    #[Depends('testAssertReturn77')]
    public function testAssertReturn78(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 87,
        );
    }

    #[Depends('testAssertReturn78')]
    public function testAssertReturn79(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 88,
        );
    }

    #[Depends('testAssertReturn79')]
    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 89,
        );
    }

    #[Depends('testAssertReturn80')]
    public function testAssertReturn81(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 90,
        );
    }

    #[Depends('testAssertReturn81')]
    public function testAssertReturn82(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 91,
        );
    }

    #[Depends('testAssertReturn82')]
    public function testAssertReturn83(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 92,
        );
    }

    #[Depends('testAssertReturn83')]
    public function testAssertReturn84(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 93,
        );
    }

    #[Depends('testAssertReturn84')]
    public function testAssertReturn85(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 94,
        );
    }

    #[Depends('testAssertReturn85')]
    public function testAssertReturn86(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 95,
        );
    }

    #[Depends('testAssertReturn86')]
    public function testAssertReturn87(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 96,
        );
    }

    #[Depends('testAssertReturn87')]
    public function testAssertReturn88(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 97,
        );
    }

    #[Depends('testAssertReturn88')]
    public function testAssertReturn89(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 98,
        );
    }

    #[Depends('testAssertReturn89')]
    public function testAssertReturn90(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 99,
        );
    }

    #[Depends('testAssertReturn90')]
    public function testAssertReturn91(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 100,
        );
    }

    #[Depends('testAssertReturn91')]
    public function testAssertReturn92(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 101,
        );
    }

    #[Depends('testAssertReturn92')]
    public function testAssertReturn93(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 102,
        );
    }

    #[Depends('testAssertReturn93')]
    public function testAssertReturn94(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 103,
        );
    }

    #[Depends('testAssertReturn94')]
    public function testAssertReturn95(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 104,
        );
    }

    #[Depends('testAssertReturn95')]
    public function testAssertReturn96(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 105,
        );
    }

    #[Depends('testAssertReturn96')]
    public function testAssertReturn97(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 106,
        );
    }

    #[Depends('testAssertReturn97')]
    public function testAssertReturn98(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 107,
        );
    }

    #[Depends('testAssertReturn98')]
    public function testAssertReturn99(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 108,
        );
    }

    #[Depends('testAssertReturn99')]
    public function testAssertReturn100(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 109,
        );
    }

    #[Depends('testAssertReturn100')]
    public function testAssertReturn101(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 110,
        );
    }

    #[Depends('testAssertReturn101')]
    public function testAssertReturn102(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 111,
        );
    }

    #[Depends('testAssertReturn102')]
    public function testAssertReturn103(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 112,
        );
    }

    #[Depends('testAssertReturn103')]
    public function testAssertReturn104(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 113,
        );
    }

    #[Depends('testAssertReturn104')]
    public function testAssertReturn105(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 114,
        );
    }

    #[Depends('testAssertReturn105')]
    public function testAssertReturn106(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 115,
        );
    }

    #[Depends('testAssertReturn106')]
    public function testAssertReturn107(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 116,
        );
    }

    #[Depends('testAssertReturn107')]
    public function testAssertReturn108(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 117,
        );
    }

    #[Depends('testAssertReturn108')]
    public function testAssertReturn109(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 118,
        );
    }

    #[Depends('testAssertReturn109')]
    public function testAssertReturn110(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 119,
        );
    }

    #[Depends('testAssertReturn110')]
    public function testAssertReturn111(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 120,
        );
    }

    #[Depends('testAssertReturn111')]
    public function testAssertReturn112(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 121,
        );
    }

    #[Depends('testAssertReturn112')]
    public function testAssertReturn113(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 122,
        );
    }

    #[Depends('testAssertReturn113')]
    public function testAssertReturn114(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 123,
        );
    }

    #[Depends('testAssertReturn114')]
    public function testAssertReturn115(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 124,
        );
    }

    #[Depends('testAssertReturn115')]
    public function testAssertReturn116(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 125,
        );
    }

    #[Depends('testAssertReturn116')]
    public function testAssertReturn117(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 126,
        );
    }

    #[Depends('testAssertReturn117')]
    public function testAssertReturn118(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 127,
        );
    }

    #[Depends('testAssertReturn118')]
    public function testAssertReturn119(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 128,
        );
    }

    #[Depends('testAssertReturn119')]
    public function testAssertReturn120(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 129,
        );
    }

    #[Depends('testAssertReturn120')]
    public function testAssertReturn121(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 130,
        );
    }

    #[Depends('testAssertReturn121')]
    public function testAssertReturn122(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 131,
        );
    }

    #[Depends('testAssertReturn122')]
    public function testAssertReturn123(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 132,
        );
    }

    #[Depends('testAssertReturn123')]
    public function testAssertReturn124(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 133,
        );
    }

    #[Depends('testAssertReturn124')]
    public function testAssertReturn125(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 134,
        );
    }

    #[Depends('testAssertReturn125')]
    public function testAssertReturn126(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 135,
        );
    }

    #[Depends('testAssertReturn126')]
    public function testAssertReturn127(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 136,
        );
    }

    #[Depends('testAssertReturn127')]
    public function testAssertReturn128(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 137,
        );
    }

    #[Depends('testAssertReturn128')]
    public function testAssertReturn129(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 138,
        );
    }

    #[Depends('testAssertReturn129')]
    public function testAssertReturn130(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 139,
        );
    }

    #[Depends('testAssertReturn130')]
    public function testAssertReturn131(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 140,
        );
    }

    #[Depends('testAssertReturn131')]
    public function testAssertReturn132(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 141,
        );
    }

    #[Depends('testAssertReturn132')]
    public function testAssertReturn133(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 142,
        );
    }

    #[Depends('testAssertReturn133')]
    public function testAssertReturn134(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 143,
        );
    }

    #[Depends('testAssertReturn134')]
    public function testAssertReturn135(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 144,
        );
    }

    #[Depends('testAssertReturn135')]
    public function testAssertReturn136(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 145,
        );
    }

    #[Depends('testAssertReturn136')]
    public function testAssertReturn137(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 146,
        );
    }

    #[Depends('testAssertReturn137')]
    public function testAssertReturn138(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 147,
        );
    }

    #[Depends('testAssertReturn138')]
    public function testAssertReturn139(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 148,
        );
    }

    #[Depends('testAssertReturn139')]
    public function testAssertReturn140(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 149,
        );
    }

    #[Depends('testAssertReturn140')]
    public function testAssertReturn141(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 150,
        );
    }

    #[Depends('testAssertReturn141')]
    public function testAssertReturn142(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 151,
        );
    }

    #[Depends('testAssertReturn142')]
    public function testAssertReturn143(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 152,
        );
    }

    #[Depends('testAssertReturn143')]
    public function testAssertReturn144(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 153,
        );
    }

    #[Depends('testAssertReturn144')]
    public function testAssertReturn145(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 154,
        );
    }

    #[Depends('testAssertReturn145')]
    public function testAssertReturn146(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 155,
        );
    }

    #[Depends('testAssertReturn146')]
    public function testAssertReturn147(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 156,
        );
    }

    #[Depends('testAssertReturn147')]
    public function testAssertReturn148(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 157,
        );
    }

    #[Depends('testAssertReturn148')]
    public function testAssertReturn149(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 158,
        );
    }

    #[Depends('testAssertReturn149')]
    public function testAssertReturn150(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 159,
        );
    }

    #[Depends('testAssertReturn150')]
    public function testAssertReturn151(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 160,
        );
    }

    #[Depends('testAssertReturn151')]
    public function testAssertReturn152(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 161,
        );
    }

    #[Depends('testAssertReturn152')]
    public function testAssertReturn153(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 162,
        );
    }

    #[Depends('testAssertReturn153')]
    public function testAssertReturn154(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 163,
        );
    }

    #[Depends('testAssertReturn154')]
    public function testAssertReturn155(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 164,
        );
    }

    #[Depends('testAssertReturn155')]
    public function testAssertReturn156(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 165,
        );
    }

    #[Depends('testAssertReturn156')]
    public function testAssertReturn157(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 166,
        );
    }

    #[Depends('testAssertReturn157')]
    public function testAssertReturn158(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 167,
        );
    }

    #[Depends('testAssertReturn158')]
    public function testAssertReturn159(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 168,
        );
    }

    #[Depends('testAssertReturn159')]
    public function testAssertReturn160(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 169,
        );
    }

    #[Depends('testAssertReturn160')]
    public function testAssertReturn161(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 170,
        );
    }

    #[Depends('testAssertReturn161')]
    public function testAssertReturn162(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 171,
        );
    }

    #[Depends('testAssertReturn162')]
    public function testAssertReturn163(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 172,
        );
    }

    #[Depends('testAssertReturn163')]
    public function testAssertReturn164(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 173,
        );
    }

    #[Depends('testAssertReturn164')]
    public function testAssertReturn165(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 174,
        );
    }

    #[Depends('testAssertReturn165')]
    public function testAssertReturn166(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 175,
        );
    }

    #[Depends('testAssertReturn166')]
    public function testAssertReturn167(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 176,
        );
    }

    #[Depends('testAssertReturn167')]
    public function testAssertReturn168(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 177,
        );
    }

    #[Depends('testAssertReturn168')]
    public function testAssertReturn169(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 178,
        );
    }

    #[Depends('testAssertReturn169')]
    public function testAssertReturn170(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 179,
        );
    }

    #[Depends('testAssertReturn170')]
    public function testAssertReturn171(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 180,
        );
    }

    #[Depends('testAssertReturn171')]
    public function testAssertReturn172(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 181,
        );
    }

    #[Depends('testAssertReturn172')]
    public function testAssertReturn173(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 182,
        );
    }

    #[Depends('testAssertReturn173')]
    public function testAssertReturn174(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 183,
        );
    }

    #[Depends('testAssertReturn174')]
    public function testAssertReturn175(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 184,
        );
    }

    #[Depends('testAssertReturn175')]
    public function testAssertReturn176(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 185,
        );
    }

    #[Depends('testAssertReturn176')]
    public function testAssertReturn177(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 186,
        );
    }

    #[Depends('testAssertReturn177')]
    public function testAssertReturn178(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 187,
        );
    }

    #[Depends('testAssertReturn178')]
    public function testAssertReturn179(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 188,
        );
    }

    #[Depends('testAssertReturn179')]
    public function testAssertReturn180(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 189,
        );
    }

    #[Depends('testAssertReturn180')]
    public function testAssertReturn181(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 190,
        );
    }

    #[Depends('testAssertReturn181')]
    public function testAssertReturn182(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 191,
        );
    }

    #[Depends('testAssertReturn182')]
    public function testAssertReturn183(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 192,
        );
    }

    #[Depends('testAssertReturn183')]
    public function testAssertReturn184(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 193,
        );
    }

    #[Depends('testAssertReturn184')]
    public function testAssertReturn185(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 194,
        );
    }

    #[Depends('testAssertReturn185')]
    public function testAssertReturn186(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 195,
        );
    }

    #[Depends('testAssertReturn186')]
    public function testAssertReturn187(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 196,
        );
    }

    #[Depends('testAssertReturn187')]
    public function testAssertReturn188(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 197,
        );
    }

    #[Depends('testAssertReturn188')]
    public function testAssertReturn189(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 198,
        );
    }

    #[Depends('testAssertReturn189')]
    public function testAssertReturn190(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 199,
        );
    }

    #[Depends('testAssertReturn190')]
    public function testAssertReturn191(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 200,
        );
    }

    #[Depends('testAssertReturn191')]
    public function testAssertReturn192(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 201,
        );
    }

    #[Depends('testAssertReturn192')]
    public function testAssertReturn193(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 202,
        );
    }

    #[Depends('testAssertReturn193')]
    public function testAssertReturn194(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 203,
        );
    }

    #[Depends('testAssertReturn194')]
    public function testAssertReturn195(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 204,
        );
    }

    #[Depends('testAssertReturn195')]
    public function testAssertReturn196(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 205,
        );
    }

    #[Depends('testAssertReturn196')]
    public function testAssertReturn197(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 206,
        );
    }

    #[Depends('testAssertReturn197')]
    public function testAssertReturn198(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 207,
        );
    }

    #[Depends('testAssertReturn198')]
    public function testAssertReturn199(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 208,
        );
    }

    #[Depends('testAssertReturn199')]
    public function testAssertReturn200(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 209,
        );
    }

    #[Depends('testAssertReturn200')]
    public function testAssertReturn201(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 210,
        );
    }

    #[Depends('testAssertReturn201')]
    public function testAssertReturn202(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 211,
        );
    }

    #[Depends('testAssertReturn202')]
    public function testAssertReturn203(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 212,
        );
    }

    #[Depends('testAssertReturn203')]
    public function testAssertReturn204(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 213,
        );
    }

    #[Depends('testAssertReturn204')]
    public function testAssertReturn205(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 214,
        );
    }

    #[Depends('testAssertReturn205')]
    public function testAssertReturn206(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 215,
        );
    }

    #[Depends('testAssertReturn206')]
    public function testAssertReturn207(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 216,
        );
    }

    #[Depends('testAssertReturn207')]
    public function testAssertReturn208(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 217,
        );
    }

    #[Depends('testAssertReturn208')]
    public function testAssertReturn209(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 218,
        );
    }

    #[Depends('testAssertReturn209')]
    public function testAssertReturn210(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 219,
        );
    }

    #[Depends('testAssertReturn210')]
    public function testAssertReturn211(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 220,
        );
    }

    #[Depends('testAssertReturn211')]
    public function testAssertReturn212(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 221,
        );
    }

    #[Depends('testAssertReturn212')]
    public function testAssertReturn213(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 222,
        );
    }

    #[Depends('testAssertReturn213')]
    public function testAssertReturn214(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 223,
        );
    }

    #[Depends('testAssertReturn214')]
    public function testAssertReturn215(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 224,
        );
    }

    #[Depends('testAssertReturn215')]
    public function testAssertReturn216(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 225,
        );
    }

    #[Depends('testAssertReturn216')]
    public function testAssertReturn217(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 226,
        );
    }

    #[Depends('testAssertReturn217')]
    public function testAssertReturn218(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 227,
        );
    }

    #[Depends('testAssertReturn218')]
    public function testAssertReturn219(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 228,
        );
    }

    #[Depends('testAssertReturn219')]
    public function testAssertReturn220(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 229,
        );
    }

    #[Depends('testAssertReturn220')]
    public function testAssertReturn221(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 230,
        );
    }

    #[Depends('testAssertReturn221')]
    public function testAssertReturn222(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 231,
        );
    }

    #[Depends('testAssertReturn222')]
    public function testAssertReturn223(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 232,
        );
    }

    #[Depends('testAssertReturn223')]
    public function testAssertReturn224(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 233,
        );
    }

    #[Depends('testAssertReturn224')]
    public function testAssertReturn225(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 234,
        );
    }

    #[Depends('testAssertReturn225')]
    public function testAssertReturn226(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 235,
        );
    }

    #[Depends('testAssertReturn226')]
    public function testAssertReturn227(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 236,
        );
    }

    #[Depends('testAssertReturn227')]
    public function testAssertReturn228(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 237,
        );
    }

    #[Depends('testAssertReturn228')]
    public function testAssertReturn229(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 238,
        );
    }

    #[Depends('testAssertReturn229')]
    public function testAssertReturn230(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 239,
        );
    }

    #[Depends('testAssertReturn230')]
    public function testAssertReturn231(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 240,
        );
    }

    #[Depends('testAssertReturn231')]
    public function testAssertReturn232(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 241,
        );
    }

    #[Depends('testAssertReturn232')]
    public function testAssertReturn233(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 242,
        );
    }

    #[Depends('testAssertReturn233')]
    public function testAssertReturn234(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 243,
        );
    }

    #[Depends('testAssertReturn234')]
    public function testAssertReturn235(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 244,
        );
    }

    #[Depends('testAssertReturn235')]
    public function testAssertReturn236(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 245,
        );
    }

    #[Depends('testAssertReturn236')]
    public function testAssertReturn237(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 246,
        );
    }

    #[Depends('testAssertReturn237')]
    public function testAssertReturn238(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 247,
        );
    }

    #[Depends('testAssertReturn238')]
    public function testAssertReturn239(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 248,
        );
    }

    #[Depends('testAssertReturn239')]
    public function testAssertReturn240(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 249,
        );
    }

    #[Depends('testAssertReturn240')]
    public function testAssertReturn241(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 250,
        );
    }

    #[Depends('testAssertReturn241')]
    public function testAssertReturn242(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 251,
        );
    }

    #[Depends('testAssertReturn242')]
    public function testAssertReturn243(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 252,
        );
    }

    #[Depends('testAssertReturn243')]
    public function testAssertReturn244(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 253,
        );
    }

    #[Depends('testAssertReturn244')]
    public function testAssertReturn245(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 254,
        );
    }

    #[Depends('testAssertReturn245')]
    public function testAssertReturn246(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 255,
        );
    }

    #[Depends('testAssertReturn246')]
    public function testAssertReturn247(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 256,
        );
    }

    #[Depends('testAssertReturn247')]
    public function testAssertReturn248(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 257,
        );
    }

    #[Depends('testAssertReturn248')]
    public function testAssertReturn249(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 258,
        );
    }

    #[Depends('testAssertReturn249')]
    public function testAssertReturn250(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 259,
        );
    }

    #[Depends('testAssertReturn250')]
    public function testAssertReturn251(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 260,
        );
    }

    #[Depends('testAssertReturn251')]
    public function testAssertReturn252(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 261,
        );
    }

    #[Depends('testAssertReturn252')]
    public function testAssertReturn253(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 262,
        );
    }

    #[Depends('testAssertReturn253')]
    public function testAssertReturn254(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 263,
        );
    }

    #[Depends('testAssertReturn254')]
    public function testAssertReturn255(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 264,
        );
    }

    #[Depends('testAssertReturn255')]
    public function testAssertReturn256(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 265,
        );
    }

    #[Depends('testAssertReturn256')]
    public function testAssertReturn257(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 266,
        );
    }

    #[Depends('testAssertReturn257')]
    public function testAssertReturn258(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 267,
        );
    }

    #[Depends('testAssertReturn258')]
    public function testAssertReturn259(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 268,
        );
    }

    #[Depends('testAssertReturn259')]
    public function testAssertReturn260(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 269,
        );
    }

    #[Depends('testAssertReturn260')]
    public function testAssertReturn261(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 270,
        );
    }

    #[Depends('testAssertReturn261')]
    public function testAssertReturn262(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 271,
        );
    }

    #[Depends('testAssertReturn262')]
    public function testAssertReturn263(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 272,
        );
    }

    #[Depends('testAssertReturn263')]
    public function testAssertReturn264(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 273,
        );
    }

    #[Depends('testAssertReturn264')]
    public function testAssertReturn265(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 274,
        );
    }

    #[Depends('testAssertReturn265')]
    public function testAssertReturn266(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 275,
        );
    }

    #[Depends('testAssertReturn266')]
    public function testAssertReturn267(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 276,
        );
    }

    #[Depends('testAssertReturn267')]
    public function testAssertReturn268(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 277,
        );
    }

    #[Depends('testAssertReturn268')]
    public function testAssertReturn269(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 278,
        );
    }

    #[Depends('testAssertReturn269')]
    public function testAssertReturn270(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 279,
        );
    }

    #[Depends('testAssertReturn270')]
    public function testAssertReturn271(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 280,
        );
    }

    #[Depends('testAssertReturn271')]
    public function testAssertReturn272(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 281,
        );
    }

    #[Depends('testAssertReturn272')]
    public function testAssertReturn273(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 282,
        );
    }

    #[Depends('testAssertReturn273')]
    public function testAssertReturn274(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 283,
        );
    }

    #[Depends('testAssertReturn274')]
    public function testAssertReturn275(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 284,
        );
    }

    #[Depends('testAssertReturn275')]
    public function testAssertReturn276(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 285,
        );
    }

    #[Depends('testAssertReturn276')]
    public function testAssertReturn277(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 286,
        );
    }

    #[Depends('testAssertReturn277')]
    public function testAssertReturn278(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 287,
        );
    }

    #[Depends('testAssertReturn278')]
    public function testAssertReturn279(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 288,
        );
    }

    #[Depends('testAssertReturn279')]
    public function testAssertReturn280(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 289,
        );
    }

    #[Depends('testAssertReturn280')]
    public function testAssertReturn281(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 290,
        );
    }

    #[Depends('testAssertReturn281')]
    public function testAssertReturn282(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 291,
        );
    }

    #[Depends('testAssertReturn282')]
    public function testAssertReturn283(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 292,
        );
    }

    #[Depends('testAssertReturn283')]
    public function testAssertReturn284(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 293,
        );
    }

    #[Depends('testAssertReturn284')]
    public function testAssertReturn285(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 294,
        );
    }

    #[Depends('testAssertReturn285')]
    public function testAssertReturn286(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 295,
        );
    }

    #[Depends('testAssertReturn286')]
    public function testAssertReturn287(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 296,
        );
    }

    #[Depends('testAssertReturn287')]
    public function testAssertReturn288(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 297,
        );
    }

    #[Depends('testAssertReturn288')]
    public function testAssertReturn289(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 298,
        );
    }

    #[Depends('testAssertReturn289')]
    public function testAssertReturn290(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 299,
        );
    }

    #[Depends('testAssertReturn290')]
    public function testAssertReturn291(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 300,
        );
    }

    #[Depends('testAssertReturn291')]
    public function testAssertReturn292(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 301,
        );
    }

    #[Depends('testAssertReturn292')]
    public function testAssertReturn293(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 302,
        );
    }

    #[Depends('testAssertReturn293')]
    public function testAssertReturn294(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 303,
        );
    }

    #[Depends('testAssertReturn294')]
    public function testAssertReturn295(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 304,
        );
    }

    #[Depends('testAssertReturn295')]
    public function testAssertReturn296(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 305,
        );
    }

    #[Depends('testAssertReturn296')]
    public function testAssertReturn297(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 306,
        );
    }

    #[Depends('testAssertReturn297')]
    public function testAssertReturn298(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 307,
        );
    }

    #[Depends('testAssertReturn298')]
    public function testAssertReturn299(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 308,
        );
    }

    #[Depends('testAssertReturn299')]
    public function testAssertReturn300(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 309,
        );
    }

    #[Depends('testAssertReturn300')]
    public function testAssertReturn301(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 310,
        );
    }

    #[Depends('testAssertReturn301')]
    public function testAssertReturn302(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 311,
        );
    }

    #[Depends('testAssertReturn302')]
    public function testAssertReturn303(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 312,
        );
    }

    #[Depends('testAssertReturn303')]
    public function testAssertReturn304(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 313,
        );
    }

    #[Depends('testAssertReturn304')]
    public function testAssertReturn305(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 314,
        );
    }

    #[Depends('testAssertReturn305')]
    public function testAssertReturn306(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 315,
        );
    }

    #[Depends('testAssertReturn306')]
    public function testAssertReturn307(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 316,
        );
    }

    #[Depends('testAssertReturn307')]
    public function testAssertReturn308(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 317,
        );
    }

    #[Depends('testAssertReturn308')]
    public function testAssertReturn309(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 318,
        );
    }

    #[Depends('testAssertReturn309')]
    public function testAssertReturn310(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 319,
        );
    }

    #[Depends('testAssertReturn310')]
    public function testAssertReturn311(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 320,
        );
    }

    #[Depends('testAssertReturn311')]
    public function testAssertReturn312(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 321,
        );
    }

    #[Depends('testAssertReturn312')]
    public function testAssertReturn313(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 322,
        );
    }

    #[Depends('testAssertReturn313')]
    public function testAssertReturn314(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 323,
        );
    }

    #[Depends('testAssertReturn314')]
    public function testAssertReturn315(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 324,
        );
    }

    #[Depends('testAssertReturn315')]
    public function testAssertReturn316(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 325,
        );
    }

    #[Depends('testAssertReturn316')]
    public function testAssertReturn317(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 326,
        );
    }

    #[Depends('testAssertReturn317')]
    public function testAssertReturn318(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 327,
        );
    }

    #[Depends('testAssertReturn318')]
    public function testAssertReturn319(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 328,
        );
    }

    #[Depends('testAssertReturn319')]
    public function testAssertReturn320(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 329,
        );
    }

    #[Depends('testAssertReturn320')]
    public function testAssertReturn321(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 330,
        );
    }

    #[Depends('testAssertReturn321')]
    public function testAssertReturn322(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 331,
        );
    }

    #[Depends('testAssertReturn322')]
    public function testAssertReturn323(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 332,
        );
    }

    #[Depends('testAssertReturn323')]
    public function testAssertReturn324(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'copysign', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 333,
        );
    }

    #[Depends('testAssertReturn324')]
    public function testAssertReturn325(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 334,
        );
    }

    #[Depends('testAssertReturn325')]
    public function testAssertReturn326(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 335,
        );
    }

    #[Depends('testAssertReturn326')]
    public function testAssertReturn327(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 336,
        );
    }

    #[Depends('testAssertReturn327')]
    public function testAssertReturn328(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 337,
        );
    }

    #[Depends('testAssertReturn328')]
    public function testAssertReturn329(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 338,
        );
    }

    #[Depends('testAssertReturn329')]
    public function testAssertReturn330(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 339,
        );
    }

    #[Depends('testAssertReturn330')]
    public function testAssertReturn331(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 340,
        );
    }

    #[Depends('testAssertReturn331')]
    public function testAssertReturn332(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 341,
        );
    }

    #[Depends('testAssertReturn332')]
    public function testAssertReturn333(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 342,
        );
    }

    #[Depends('testAssertReturn333')]
    public function testAssertReturn334(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 343,
        );
    }

    #[Depends('testAssertReturn334')]
    public function testAssertReturn335(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 344,
        );
    }

    #[Depends('testAssertReturn335')]
    public function testAssertReturn336(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 345,
        );
    }

    #[Depends('testAssertReturn336')]
    public function testAssertReturn337(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 346,
        );
    }

    #[Depends('testAssertReturn337')]
    public function testAssertReturn338(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 347,
        );
    }

    #[Depends('testAssertReturn338')]
    public function testAssertReturn339(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 348,
        );
    }

    #[Depends('testAssertReturn339')]
    public function testAssertReturn340(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 349,
        );
    }

    #[Depends('testAssertReturn340')]
    public function testAssertReturn341(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 350,
        );
    }

    #[Depends('testAssertReturn341')]
    public function testAssertReturn342(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abs', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 351,
        );
    }

    #[Depends('testAssertReturn342')]
    public function testAssertReturn343(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 352,
        );
    }

    #[Depends('testAssertReturn343')]
    public function testAssertReturn344(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 353,
        );
    }

    #[Depends('testAssertReturn344')]
    public function testAssertReturn345(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 354,
        );
    }

    #[Depends('testAssertReturn345')]
    public function testAssertReturn346(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 355,
        );
    }

    #[Depends('testAssertReturn346')]
    public function testAssertReturn347(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 356,
        );
    }

    #[Depends('testAssertReturn347')]
    public function testAssertReturn348(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 357,
        );
    }

    #[Depends('testAssertReturn348')]
    public function testAssertReturn349(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 358,
        );
    }

    #[Depends('testAssertReturn349')]
    public function testAssertReturn350(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 359,
        );
    }

    #[Depends('testAssertReturn350')]
    public function testAssertReturn351(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 360,
        );
    }

    #[Depends('testAssertReturn351')]
    public function testAssertReturn352(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 361,
        );
    }

    #[Depends('testAssertReturn352')]
    public function testAssertReturn353(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 362,
        );
    }

    #[Depends('testAssertReturn353')]
    public function testAssertReturn354(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 363,
        );
    }

    #[Depends('testAssertReturn354')]
    public function testAssertReturn355(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 364,
        );
    }

    #[Depends('testAssertReturn355')]
    public function testAssertReturn356(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 365,
        );
    }

    #[Depends('testAssertReturn356')]
    public function testAssertReturn357(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 366,
        );
    }

    #[Depends('testAssertReturn357')]
    public function testAssertReturn358(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 367,
        );
    }

    #[Depends('testAssertReturn358')]
    public function testAssertReturn359(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 368,
        );
    }

    #[Depends('testAssertReturn359')]
    public function testAssertReturn360(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'neg', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 369,
        );
    }

    #[Depends('testAssertReturn360')]
    public function testAssertInvalid361(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'f32_bitwise.1.wasm',
            text: 'type mismatch',
            line: 374,
        );
    }

    #[Depends('testAssertInvalid361')]
    public function testAssertInvalid362(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'f32_bitwise.2.wasm',
            text: 'type mismatch',
            line: 375,
        );
    }

    #[Depends('testAssertInvalid362')]
    public function testAssertInvalid363(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'f32_bitwise.3.wasm',
            text: 'type mismatch',
            line: 376,
        );
    }
}
