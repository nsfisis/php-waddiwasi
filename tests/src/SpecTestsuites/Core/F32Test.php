<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class F32Test extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'f32.0.wasm',
            name: null,
            line: 5,
        );
    }

    #[Depends('testModule0')]
    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 19,
        );
    }

    #[Depends('testAssertReturn1')]
    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 20,
        );
    }

    #[Depends('testAssertReturn2')]
    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 21,
        );
    }

    #[Depends('testAssertReturn3')]
    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 22,
        );
    }

    #[Depends('testAssertReturn4')]
    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 23,
        );
    }

    #[Depends('testAssertReturn5')]
    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 24,
        );
    }

    #[Depends('testAssertReturn6')]
    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 25,
        );
    }

    #[Depends('testAssertReturn7')]
    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 26,
        );
    }

    #[Depends('testAssertReturn8')]
    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 27,
        );
    }

    #[Depends('testAssertReturn9')]
    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 28,
        );
    }

    #[Depends('testAssertReturn10')]
    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 29,
        );
    }

    #[Depends('testAssertReturn11')]
    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 30,
        );
    }

    #[Depends('testAssertReturn12')]
    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 31,
        );
    }

    #[Depends('testAssertReturn13')]
    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 32,
        );
    }

    #[Depends('testAssertReturn14')]
    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 33,
        );
    }

    #[Depends('testAssertReturn15')]
    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 34,
        );
    }

    #[Depends('testAssertReturn16')]
    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 35,
        );
    }

    #[Depends('testAssertReturn17')]
    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 36,
        );
    }

    #[Depends('testAssertReturn18')]
    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 37,
        );
    }

    #[Depends('testAssertReturn19')]
    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 38,
        );
    }

    #[Depends('testAssertReturn20')]
    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 39,
        );
    }

    #[Depends('testAssertReturn21')]
    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 40,
        );
    }

    #[Depends('testAssertReturn22')]
    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 41,
        );
    }

    #[Depends('testAssertReturn23')]
    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 42,
        );
    }

    #[Depends('testAssertReturn24')]
    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 43,
        );
    }

    #[Depends('testAssertReturn25')]
    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 44,
        );
    }

    #[Depends('testAssertReturn26')]
    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 45,
        );
    }

    #[Depends('testAssertReturn27')]
    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 46,
        );
    }

    #[Depends('testAssertReturn28')]
    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 47,
        );
    }

    #[Depends('testAssertReturn29')]
    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 48,
        );
    }

    #[Depends('testAssertReturn30')]
    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 49,
        );
    }

    #[Depends('testAssertReturn31')]
    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 50,
        );
    }

    #[Depends('testAssertReturn32')]
    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 51,
        );
    }

    #[Depends('testAssertReturn33')]
    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 52,
        );
    }

    #[Depends('testAssertReturn34')]
    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 53,
        );
    }

    #[Depends('testAssertReturn35')]
    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 54,
        );
    }

    #[Depends('testAssertReturn36')]
    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 55,
        );
    }

    #[Depends('testAssertReturn37')]
    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 56,
        );
    }

    #[Depends('testAssertReturn38')]
    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 57,
        );
    }

    #[Depends('testAssertReturn39')]
    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 58,
        );
    }

    #[Depends('testAssertReturn40')]
    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 59,
        );
    }

    #[Depends('testAssertReturn41')]
    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 60,
        );
    }

    #[Depends('testAssertReturn42')]
    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 61,
        );
    }

    #[Depends('testAssertReturn43')]
    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 62,
        );
    }

    #[Depends('testAssertReturn44')]
    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483650']],
            line: 63,
        );
    }

    #[Depends('testAssertReturn45')]
    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 64,
        );
    }

    #[Depends('testAssertReturn46')]
    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 65,
        );
    }

    #[Depends('testAssertReturn47')]
    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2']],
            line: 66,
        );
    }

    #[Depends('testAssertReturn48')]
    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2155872257']],
            line: 67,
        );
    }

    #[Depends('testAssertReturn49')]
    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '8388607']],
            line: 68,
        );
    }

    #[Depends('testAssertReturn50')]
    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2155872255']],
            line: 69,
        );
    }

    #[Depends('testAssertReturn51')]
    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '8388609']],
            line: 70,
        );
    }

    #[Depends('testAssertReturn52')]
    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 71,
        );
    }

    #[Depends('testAssertReturn53')]
    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 72,
        );
    }

    #[Depends('testAssertReturn54')]
    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 73,
        );
    }

    #[Depends('testAssertReturn55')]
    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 74,
        );
    }

    #[Depends('testAssertReturn56')]
    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 75,
        );
    }

    #[Depends('testAssertReturn57')]
    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 76,
        );
    }

    #[Depends('testAssertReturn58')]
    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 77,
        );
    }

    #[Depends('testAssertReturn59')]
    public function testAssertReturn60(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 78,
        );
    }

    #[Depends('testAssertReturn60')]
    public function testAssertReturn61(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 79,
        );
    }

    #[Depends('testAssertReturn61')]
    public function testAssertReturn62(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 80,
        );
    }

    #[Depends('testAssertReturn62')]
    public function testAssertReturn63(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 81,
        );
    }

    #[Depends('testAssertReturn63')]
    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 82,
        );
    }

    #[Depends('testAssertReturn64')]
    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 83,
        );
    }

    #[Depends('testAssertReturn65')]
    public function testAssertReturn66(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 84,
        );
    }

    #[Depends('testAssertReturn66')]
    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 85,
        );
    }

    #[Depends('testAssertReturn67')]
    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 86,
        );
    }

    #[Depends('testAssertReturn68')]
    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 87,
        );
    }

    #[Depends('testAssertReturn69')]
    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 88,
        );
    }

    #[Depends('testAssertReturn70')]
    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 89,
        );
    }

    #[Depends('testAssertReturn71')]
    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 90,
        );
    }

    #[Depends('testAssertReturn72')]
    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 91,
        );
    }

    #[Depends('testAssertReturn73')]
    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 92,
        );
    }

    #[Depends('testAssertReturn74')]
    public function testAssertReturn75(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 93,
        );
    }

    #[Depends('testAssertReturn75')]
    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 94,
        );
    }

    #[Depends('testAssertReturn76')]
    public function testAssertReturn77(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 95,
        );
    }

    #[Depends('testAssertReturn77')]
    public function testAssertReturn78(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 96,
        );
    }

    #[Depends('testAssertReturn78')]
    public function testAssertReturn79(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 97,
        );
    }

    #[Depends('testAssertReturn79')]
    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 98,
        );
    }

    #[Depends('testAssertReturn80')]
    public function testAssertReturn81(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 99,
        );
    }

    #[Depends('testAssertReturn81')]
    public function testAssertReturn82(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 100,
        );
    }

    #[Depends('testAssertReturn82')]
    public function testAssertReturn83(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 101,
        );
    }

    #[Depends('testAssertReturn83')]
    public function testAssertReturn84(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 102,
        );
    }

    #[Depends('testAssertReturn84')]
    public function testAssertReturn85(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2155872257']],
            line: 103,
        );
    }

    #[Depends('testAssertReturn85')]
    public function testAssertReturn86(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2155872255']],
            line: 104,
        );
    }

    #[Depends('testAssertReturn86')]
    public function testAssertReturn87(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '8388607']],
            line: 105,
        );
    }

    #[Depends('testAssertReturn87')]
    public function testAssertReturn88(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '8388609']],
            line: 106,
        );
    }

    #[Depends('testAssertReturn88')]
    public function testAssertReturn89(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2164260864']],
            line: 107,
        );
    }

    #[Depends('testAssertReturn89')]
    public function testAssertReturn90(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 108,
        );
    }

    #[Depends('testAssertReturn90')]
    public function testAssertReturn91(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 109,
        );
    }

    #[Depends('testAssertReturn91')]
    public function testAssertReturn92(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '16777216']],
            line: 110,
        );
    }

    #[Depends('testAssertReturn92')]
    public function testAssertReturn93(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 111,
        );
    }

    #[Depends('testAssertReturn93')]
    public function testAssertReturn94(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 112,
        );
    }

    #[Depends('testAssertReturn94')]
    public function testAssertReturn95(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 113,
        );
    }

    #[Depends('testAssertReturn95')]
    public function testAssertReturn96(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 114,
        );
    }

    #[Depends('testAssertReturn96')]
    public function testAssertReturn97(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 115,
        );
    }

    #[Depends('testAssertReturn97')]
    public function testAssertReturn98(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 116,
        );
    }

    #[Depends('testAssertReturn98')]
    public function testAssertReturn99(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 117,
        );
    }

    #[Depends('testAssertReturn99')]
    public function testAssertReturn100(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 118,
        );
    }

    #[Depends('testAssertReturn100')]
    public function testAssertReturn101(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 119,
        );
    }

    #[Depends('testAssertReturn101')]
    public function testAssertReturn102(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 120,
        );
    }

    #[Depends('testAssertReturn102')]
    public function testAssertReturn103(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 121,
        );
    }

    #[Depends('testAssertReturn103')]
    public function testAssertReturn104(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 122,
        );
    }

    #[Depends('testAssertReturn104')]
    public function testAssertReturn105(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 123,
        );
    }

    #[Depends('testAssertReturn105')]
    public function testAssertReturn106(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 124,
        );
    }

    #[Depends('testAssertReturn106')]
    public function testAssertReturn107(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 125,
        );
    }

    #[Depends('testAssertReturn107')]
    public function testAssertReturn108(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 126,
        );
    }

    #[Depends('testAssertReturn108')]
    public function testAssertReturn109(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 127,
        );
    }

    #[Depends('testAssertReturn109')]
    public function testAssertReturn110(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 128,
        );
    }

    #[Depends('testAssertReturn110')]
    public function testAssertReturn111(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 129,
        );
    }

    #[Depends('testAssertReturn111')]
    public function testAssertReturn112(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 130,
        );
    }

    #[Depends('testAssertReturn112')]
    public function testAssertReturn113(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 131,
        );
    }

    #[Depends('testAssertReturn113')]
    public function testAssertReturn114(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 132,
        );
    }

    #[Depends('testAssertReturn114')]
    public function testAssertReturn115(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 133,
        );
    }

    #[Depends('testAssertReturn115')]
    public function testAssertReturn116(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 134,
        );
    }

    #[Depends('testAssertReturn116')]
    public function testAssertReturn117(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 135,
        );
    }

    #[Depends('testAssertReturn117')]
    public function testAssertReturn118(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 136,
        );
    }

    #[Depends('testAssertReturn118')]
    public function testAssertReturn119(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 137,
        );
    }

    #[Depends('testAssertReturn119')]
    public function testAssertReturn120(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 138,
        );
    }

    #[Depends('testAssertReturn120')]
    public function testAssertReturn121(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 139,
        );
    }

    #[Depends('testAssertReturn121')]
    public function testAssertReturn122(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 140,
        );
    }

    #[Depends('testAssertReturn122')]
    public function testAssertReturn123(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 141,
        );
    }

    #[Depends('testAssertReturn123')]
    public function testAssertReturn124(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 142,
        );
    }

    #[Depends('testAssertReturn124')]
    public function testAssertReturn125(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 143,
        );
    }

    #[Depends('testAssertReturn125')]
    public function testAssertReturn126(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 144,
        );
    }

    #[Depends('testAssertReturn126')]
    public function testAssertReturn127(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 145,
        );
    }

    #[Depends('testAssertReturn127')]
    public function testAssertReturn128(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 146,
        );
    }

    #[Depends('testAssertReturn128')]
    public function testAssertReturn129(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 147,
        );
    }

    #[Depends('testAssertReturn129')]
    public function testAssertReturn130(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 148,
        );
    }

    #[Depends('testAssertReturn130')]
    public function testAssertReturn131(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 149,
        );
    }

    #[Depends('testAssertReturn131')]
    public function testAssertReturn132(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 150,
        );
    }

    #[Depends('testAssertReturn132')]
    public function testAssertReturn133(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 151,
        );
    }

    #[Depends('testAssertReturn133')]
    public function testAssertReturn134(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 152,
        );
    }

    #[Depends('testAssertReturn134')]
    public function testAssertReturn135(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 153,
        );
    }

    #[Depends('testAssertReturn135')]
    public function testAssertReturn136(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 154,
        );
    }

    #[Depends('testAssertReturn136')]
    public function testAssertReturn137(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3217031168']],
            line: 155,
        );
    }

    #[Depends('testAssertReturn137')]
    public function testAssertReturn138(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 156,
        );
    }

    #[Depends('testAssertReturn138')]
    public function testAssertReturn139(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 157,
        );
    }

    #[Depends('testAssertReturn139')]
    public function testAssertReturn140(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1069547520']],
            line: 158,
        );
    }

    #[Depends('testAssertReturn140')]
    public function testAssertReturn141(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3235450843']],
            line: 159,
        );
    }

    #[Depends('testAssertReturn141')]
    public function testAssertReturn142(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1085870043']],
            line: 160,
        );
    }

    #[Depends('testAssertReturn142')]
    public function testAssertReturn143(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3233353691']],
            line: 161,
        );
    }

    #[Depends('testAssertReturn143')]
    public function testAssertReturn144(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1087967195']],
            line: 162,
        );
    }

    #[Depends('testAssertReturn144')]
    public function testAssertReturn145(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 163,
        );
    }

    #[Depends('testAssertReturn145')]
    public function testAssertReturn146(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 164,
        );
    }

    #[Depends('testAssertReturn146')]
    public function testAssertReturn147(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 165,
        );
    }

    #[Depends('testAssertReturn147')]
    public function testAssertReturn148(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 166,
        );
    }

    #[Depends('testAssertReturn148')]
    public function testAssertReturn149(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 167,
        );
    }

    #[Depends('testAssertReturn149')]
    public function testAssertReturn150(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 168,
        );
    }

    #[Depends('testAssertReturn150')]
    public function testAssertReturn151(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 169,
        );
    }

    #[Depends('testAssertReturn151')]
    public function testAssertReturn152(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 170,
        );
    }

    #[Depends('testAssertReturn152')]
    public function testAssertReturn153(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 171,
        );
    }

    #[Depends('testAssertReturn153')]
    public function testAssertReturn154(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 172,
        );
    }

    #[Depends('testAssertReturn154')]
    public function testAssertReturn155(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 173,
        );
    }

    #[Depends('testAssertReturn155')]
    public function testAssertReturn156(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 174,
        );
    }

    #[Depends('testAssertReturn156')]
    public function testAssertReturn157(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 175,
        );
    }

    #[Depends('testAssertReturn157')]
    public function testAssertReturn158(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 176,
        );
    }

    #[Depends('testAssertReturn158')]
    public function testAssertReturn159(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 177,
        );
    }

    #[Depends('testAssertReturn159')]
    public function testAssertReturn160(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 178,
        );
    }

    #[Depends('testAssertReturn160')]
    public function testAssertReturn161(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 179,
        );
    }

    #[Depends('testAssertReturn161')]
    public function testAssertReturn162(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 180,
        );
    }

    #[Depends('testAssertReturn162')]
    public function testAssertReturn163(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 181,
        );
    }

    #[Depends('testAssertReturn163')]
    public function testAssertReturn164(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 182,
        );
    }

    #[Depends('testAssertReturn164')]
    public function testAssertReturn165(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 183,
        );
    }

    #[Depends('testAssertReturn165')]
    public function testAssertReturn166(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 184,
        );
    }

    #[Depends('testAssertReturn166')]
    public function testAssertReturn167(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 185,
        );
    }

    #[Depends('testAssertReturn167')]
    public function testAssertReturn168(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 186,
        );
    }

    #[Depends('testAssertReturn168')]
    public function testAssertReturn169(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 187,
        );
    }

    #[Depends('testAssertReturn169')]
    public function testAssertReturn170(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 188,
        );
    }

    #[Depends('testAssertReturn170')]
    public function testAssertReturn171(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 189,
        );
    }

    #[Depends('testAssertReturn171')]
    public function testAssertReturn172(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 190,
        );
    }

    #[Depends('testAssertReturn172')]
    public function testAssertReturn173(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3217031168']],
            line: 191,
        );
    }

    #[Depends('testAssertReturn173')]
    public function testAssertReturn174(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 192,
        );
    }

    #[Depends('testAssertReturn174')]
    public function testAssertReturn175(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 193,
        );
    }

    #[Depends('testAssertReturn175')]
    public function testAssertReturn176(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1069547520']],
            line: 194,
        );
    }

    #[Depends('testAssertReturn176')]
    public function testAssertReturn177(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3221225472']],
            line: 195,
        );
    }

    #[Depends('testAssertReturn177')]
    public function testAssertReturn178(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 196,
        );
    }

    #[Depends('testAssertReturn178')]
    public function testAssertReturn179(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 197,
        );
    }

    #[Depends('testAssertReturn179')]
    public function testAssertReturn180(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1073741824']],
            line: 198,
        );
    }

    #[Depends('testAssertReturn180')]
    public function testAssertReturn181(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3236499419']],
            line: 199,
        );
    }

    #[Depends('testAssertReturn181')]
    public function testAssertReturn182(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1084821467']],
            line: 200,
        );
    }

    #[Depends('testAssertReturn182')]
    public function testAssertReturn183(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3232305115']],
            line: 201,
        );
    }

    #[Depends('testAssertReturn183')]
    public function testAssertReturn184(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1089015771']],
            line: 202,
        );
    }

    #[Depends('testAssertReturn184')]
    public function testAssertReturn185(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 203,
        );
    }

    #[Depends('testAssertReturn185')]
    public function testAssertReturn186(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 204,
        );
    }

    #[Depends('testAssertReturn186')]
    public function testAssertReturn187(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 205,
        );
    }

    #[Depends('testAssertReturn187')]
    public function testAssertReturn188(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 206,
        );
    }

    #[Depends('testAssertReturn188')]
    public function testAssertReturn189(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 207,
        );
    }

    #[Depends('testAssertReturn189')]
    public function testAssertReturn190(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 208,
        );
    }

    #[Depends('testAssertReturn190')]
    public function testAssertReturn191(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 209,
        );
    }

    #[Depends('testAssertReturn191')]
    public function testAssertReturn192(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 210,
        );
    }

    #[Depends('testAssertReturn192')]
    public function testAssertReturn193(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 211,
        );
    }

    #[Depends('testAssertReturn193')]
    public function testAssertReturn194(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 212,
        );
    }

    #[Depends('testAssertReturn194')]
    public function testAssertReturn195(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 213,
        );
    }

    #[Depends('testAssertReturn195')]
    public function testAssertReturn196(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 214,
        );
    }

    #[Depends('testAssertReturn196')]
    public function testAssertReturn197(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 215,
        );
    }

    #[Depends('testAssertReturn197')]
    public function testAssertReturn198(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 216,
        );
    }

    #[Depends('testAssertReturn198')]
    public function testAssertReturn199(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 217,
        );
    }

    #[Depends('testAssertReturn199')]
    public function testAssertReturn200(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 218,
        );
    }

    #[Depends('testAssertReturn200')]
    public function testAssertReturn201(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 219,
        );
    }

    #[Depends('testAssertReturn201')]
    public function testAssertReturn202(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 220,
        );
    }

    #[Depends('testAssertReturn202')]
    public function testAssertReturn203(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 221,
        );
    }

    #[Depends('testAssertReturn203')]
    public function testAssertReturn204(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 222,
        );
    }

    #[Depends('testAssertReturn204')]
    public function testAssertReturn205(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 223,
        );
    }

    #[Depends('testAssertReturn205')]
    public function testAssertReturn206(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 224,
        );
    }

    #[Depends('testAssertReturn206')]
    public function testAssertReturn207(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 225,
        );
    }

    #[Depends('testAssertReturn207')]
    public function testAssertReturn208(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 226,
        );
    }

    #[Depends('testAssertReturn208')]
    public function testAssertReturn209(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 227,
        );
    }

    #[Depends('testAssertReturn209')]
    public function testAssertReturn210(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 228,
        );
    }

    #[Depends('testAssertReturn210')]
    public function testAssertReturn211(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 229,
        );
    }

    #[Depends('testAssertReturn211')]
    public function testAssertReturn212(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 230,
        );
    }

    #[Depends('testAssertReturn212')]
    public function testAssertReturn213(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3235450843']],
            line: 231,
        );
    }

    #[Depends('testAssertReturn213')]
    public function testAssertReturn214(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '3233353691']],
            line: 232,
        );
    }

    #[Depends('testAssertReturn214')]
    public function testAssertReturn215(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '1085870043']],
            line: 233,
        );
    }

    #[Depends('testAssertReturn215')]
    public function testAssertReturn216(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1087967195']],
            line: 234,
        );
    }

    #[Depends('testAssertReturn216')]
    public function testAssertReturn217(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3236499419']],
            line: 235,
        );
    }

    #[Depends('testAssertReturn217')]
    public function testAssertReturn218(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '3232305115']],
            line: 236,
        );
    }

    #[Depends('testAssertReturn218')]
    public function testAssertReturn219(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '1084821467']],
            line: 237,
        );
    }

    #[Depends('testAssertReturn219')]
    public function testAssertReturn220(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1089015771']],
            line: 238,
        );
    }

    #[Depends('testAssertReturn220')]
    public function testAssertReturn221(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3242790875']],
            line: 239,
        );
    }

    #[Depends('testAssertReturn221')]
    public function testAssertReturn222(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 240,
        );
    }

    #[Depends('testAssertReturn222')]
    public function testAssertReturn223(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 241,
        );
    }

    #[Depends('testAssertReturn223')]
    public function testAssertReturn224(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1095307227']],
            line: 242,
        );
    }

    #[Depends('testAssertReturn224')]
    public function testAssertReturn225(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 243,
        );
    }

    #[Depends('testAssertReturn225')]
    public function testAssertReturn226(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 244,
        );
    }

    #[Depends('testAssertReturn226')]
    public function testAssertReturn227(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 245,
        );
    }

    #[Depends('testAssertReturn227')]
    public function testAssertReturn228(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 246,
        );
    }

    #[Depends('testAssertReturn228')]
    public function testAssertReturn229(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 247,
        );
    }

    #[Depends('testAssertReturn229')]
    public function testAssertReturn230(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 248,
        );
    }

    #[Depends('testAssertReturn230')]
    public function testAssertReturn231(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 249,
        );
    }

    #[Depends('testAssertReturn231')]
    public function testAssertReturn232(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 250,
        );
    }

    #[Depends('testAssertReturn232')]
    public function testAssertReturn233(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 251,
        );
    }

    #[Depends('testAssertReturn233')]
    public function testAssertReturn234(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 252,
        );
    }

    #[Depends('testAssertReturn234')]
    public function testAssertReturn235(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 253,
        );
    }

    #[Depends('testAssertReturn235')]
    public function testAssertReturn236(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 254,
        );
    }

    #[Depends('testAssertReturn236')]
    public function testAssertReturn237(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 255,
        );
    }

    #[Depends('testAssertReturn237')]
    public function testAssertReturn238(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 256,
        );
    }

    #[Depends('testAssertReturn238')]
    public function testAssertReturn239(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 257,
        );
    }

    #[Depends('testAssertReturn239')]
    public function testAssertReturn240(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 258,
        );
    }

    #[Depends('testAssertReturn240')]
    public function testAssertReturn241(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 259,
        );
    }

    #[Depends('testAssertReturn241')]
    public function testAssertReturn242(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 260,
        );
    }

    #[Depends('testAssertReturn242')]
    public function testAssertReturn243(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 261,
        );
    }

    #[Depends('testAssertReturn243')]
    public function testAssertReturn244(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 262,
        );
    }

    #[Depends('testAssertReturn244')]
    public function testAssertReturn245(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 263,
        );
    }

    #[Depends('testAssertReturn245')]
    public function testAssertReturn246(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 264,
        );
    }

    #[Depends('testAssertReturn246')]
    public function testAssertReturn247(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 265,
        );
    }

    #[Depends('testAssertReturn247')]
    public function testAssertReturn248(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 266,
        );
    }

    #[Depends('testAssertReturn248')]
    public function testAssertReturn249(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 267,
        );
    }

    #[Depends('testAssertReturn249')]
    public function testAssertReturn250(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 268,
        );
    }

    #[Depends('testAssertReturn250')]
    public function testAssertReturn251(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 269,
        );
    }

    #[Depends('testAssertReturn251')]
    public function testAssertReturn252(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 270,
        );
    }

    #[Depends('testAssertReturn252')]
    public function testAssertReturn253(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 271,
        );
    }

    #[Depends('testAssertReturn253')]
    public function testAssertReturn254(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 272,
        );
    }

    #[Depends('testAssertReturn254')]
    public function testAssertReturn255(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 273,
        );
    }

    #[Depends('testAssertReturn255')]
    public function testAssertReturn256(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 274,
        );
    }

    #[Depends('testAssertReturn256')]
    public function testAssertReturn257(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 275,
        );
    }

    #[Depends('testAssertReturn257')]
    public function testAssertReturn258(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 276,
        );
    }

    #[Depends('testAssertReturn258')]
    public function testAssertReturn259(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 277,
        );
    }

    #[Depends('testAssertReturn259')]
    public function testAssertReturn260(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 278,
        );
    }

    #[Depends('testAssertReturn260')]
    public function testAssertReturn261(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 279,
        );
    }

    #[Depends('testAssertReturn261')]
    public function testAssertReturn262(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 280,
        );
    }

    #[Depends('testAssertReturn262')]
    public function testAssertReturn263(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 281,
        );
    }

    #[Depends('testAssertReturn263')]
    public function testAssertReturn264(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 282,
        );
    }

    #[Depends('testAssertReturn264')]
    public function testAssertReturn265(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 283,
        );
    }

    #[Depends('testAssertReturn265')]
    public function testAssertReturn266(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 284,
        );
    }

    #[Depends('testAssertReturn266')]
    public function testAssertReturn267(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 285,
        );
    }

    #[Depends('testAssertReturn267')]
    public function testAssertReturn268(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 286,
        );
    }

    #[Depends('testAssertReturn268')]
    public function testAssertReturn269(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 287,
        );
    }

    #[Depends('testAssertReturn269')]
    public function testAssertReturn270(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 288,
        );
    }

    #[Depends('testAssertReturn270')]
    public function testAssertReturn271(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 289,
        );
    }

    #[Depends('testAssertReturn271')]
    public function testAssertReturn272(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 290,
        );
    }

    #[Depends('testAssertReturn272')]
    public function testAssertReturn273(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 291,
        );
    }

    #[Depends('testAssertReturn273')]
    public function testAssertReturn274(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 292,
        );
    }

    #[Depends('testAssertReturn274')]
    public function testAssertReturn275(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 293,
        );
    }

    #[Depends('testAssertReturn275')]
    public function testAssertReturn276(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 294,
        );
    }

    #[Depends('testAssertReturn276')]
    public function testAssertReturn277(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 295,
        );
    }

    #[Depends('testAssertReturn277')]
    public function testAssertReturn278(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 296,
        );
    }

    #[Depends('testAssertReturn278')]
    public function testAssertReturn279(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 297,
        );
    }

    #[Depends('testAssertReturn279')]
    public function testAssertReturn280(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 298,
        );
    }

    #[Depends('testAssertReturn280')]
    public function testAssertReturn281(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 299,
        );
    }

    #[Depends('testAssertReturn281')]
    public function testAssertReturn282(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 300,
        );
    }

    #[Depends('testAssertReturn282')]
    public function testAssertReturn283(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 301,
        );
    }

    #[Depends('testAssertReturn283')]
    public function testAssertReturn284(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 302,
        );
    }

    #[Depends('testAssertReturn284')]
    public function testAssertReturn285(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 303,
        );
    }

    #[Depends('testAssertReturn285')]
    public function testAssertReturn286(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 304,
        );
    }

    #[Depends('testAssertReturn286')]
    public function testAssertReturn287(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 305,
        );
    }

    #[Depends('testAssertReturn287')]
    public function testAssertReturn288(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 306,
        );
    }

    #[Depends('testAssertReturn288')]
    public function testAssertReturn289(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 307,
        );
    }

    #[Depends('testAssertReturn289')]
    public function testAssertReturn290(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 308,
        );
    }

    #[Depends('testAssertReturn290')]
    public function testAssertReturn291(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 309,
        );
    }

    #[Depends('testAssertReturn291')]
    public function testAssertReturn292(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 310,
        );
    }

    #[Depends('testAssertReturn292')]
    public function testAssertReturn293(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 311,
        );
    }

    #[Depends('testAssertReturn293')]
    public function testAssertReturn294(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 312,
        );
    }

    #[Depends('testAssertReturn294')]
    public function testAssertReturn295(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 313,
        );
    }

    #[Depends('testAssertReturn295')]
    public function testAssertReturn296(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 314,
        );
    }

    #[Depends('testAssertReturn296')]
    public function testAssertReturn297(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 315,
        );
    }

    #[Depends('testAssertReturn297')]
    public function testAssertReturn298(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 316,
        );
    }

    #[Depends('testAssertReturn298')]
    public function testAssertReturn299(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 317,
        );
    }

    #[Depends('testAssertReturn299')]
    public function testAssertReturn300(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 318,
        );
    }

    #[Depends('testAssertReturn300')]
    public function testAssertReturn301(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 319,
        );
    }

    #[Depends('testAssertReturn301')]
    public function testAssertReturn302(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 320,
        );
    }

    #[Depends('testAssertReturn302')]
    public function testAssertReturn303(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 321,
        );
    }

    #[Depends('testAssertReturn303')]
    public function testAssertReturn304(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 322,
        );
    }

    #[Depends('testAssertReturn304')]
    public function testAssertReturn305(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 323,
        );
    }

    #[Depends('testAssertReturn305')]
    public function testAssertReturn306(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 324,
        );
    }

    #[Depends('testAssertReturn306')]
    public function testAssertReturn307(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 325,
        );
    }

    #[Depends('testAssertReturn307')]
    public function testAssertReturn308(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 326,
        );
    }

    #[Depends('testAssertReturn308')]
    public function testAssertReturn309(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 327,
        );
    }

    #[Depends('testAssertReturn309')]
    public function testAssertReturn310(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 328,
        );
    }

    #[Depends('testAssertReturn310')]
    public function testAssertReturn311(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 329,
        );
    }

    #[Depends('testAssertReturn311')]
    public function testAssertReturn312(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 330,
        );
    }

    #[Depends('testAssertReturn312')]
    public function testAssertReturn313(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 331,
        );
    }

    #[Depends('testAssertReturn313')]
    public function testAssertReturn314(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 332,
        );
    }

    #[Depends('testAssertReturn314')]
    public function testAssertReturn315(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 333,
        );
    }

    #[Depends('testAssertReturn315')]
    public function testAssertReturn316(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 334,
        );
    }

    #[Depends('testAssertReturn316')]
    public function testAssertReturn317(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 335,
        );
    }

    #[Depends('testAssertReturn317')]
    public function testAssertReturn318(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 336,
        );
    }

    #[Depends('testAssertReturn318')]
    public function testAssertReturn319(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 337,
        );
    }

    #[Depends('testAssertReturn319')]
    public function testAssertReturn320(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 338,
        );
    }

    #[Depends('testAssertReturn320')]
    public function testAssertReturn321(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 339,
        );
    }

    #[Depends('testAssertReturn321')]
    public function testAssertReturn322(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 340,
        );
    }

    #[Depends('testAssertReturn322')]
    public function testAssertReturn323(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 341,
        );
    }

    #[Depends('testAssertReturn323')]
    public function testAssertReturn324(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 342,
        );
    }

    #[Depends('testAssertReturn324')]
    public function testAssertReturn325(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 343,
        );
    }

    #[Depends('testAssertReturn325')]
    public function testAssertReturn326(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 344,
        );
    }

    #[Depends('testAssertReturn326')]
    public function testAssertReturn327(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 345,
        );
    }

    #[Depends('testAssertReturn327')]
    public function testAssertReturn328(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 346,
        );
    }

    #[Depends('testAssertReturn328')]
    public function testAssertReturn329(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 347,
        );
    }

    #[Depends('testAssertReturn329')]
    public function testAssertReturn330(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 348,
        );
    }

    #[Depends('testAssertReturn330')]
    public function testAssertReturn331(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 349,
        );
    }

    #[Depends('testAssertReturn331')]
    public function testAssertReturn332(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 350,
        );
    }

    #[Depends('testAssertReturn332')]
    public function testAssertReturn333(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 351,
        );
    }

    #[Depends('testAssertReturn333')]
    public function testAssertReturn334(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 352,
        );
    }

    #[Depends('testAssertReturn334')]
    public function testAssertReturn335(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 353,
        );
    }

    #[Depends('testAssertReturn335')]
    public function testAssertReturn336(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 354,
        );
    }

    #[Depends('testAssertReturn336')]
    public function testAssertReturn337(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 355,
        );
    }

    #[Depends('testAssertReturn337')]
    public function testAssertReturn338(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 356,
        );
    }

    #[Depends('testAssertReturn338')]
    public function testAssertReturn339(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 357,
        );
    }

    #[Depends('testAssertReturn339')]
    public function testAssertReturn340(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 358,
        );
    }

    #[Depends('testAssertReturn340')]
    public function testAssertReturn341(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 359,
        );
    }

    #[Depends('testAssertReturn341')]
    public function testAssertReturn342(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 360,
        );
    }

    #[Depends('testAssertReturn342')]
    public function testAssertReturn343(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 361,
        );
    }

    #[Depends('testAssertReturn343')]
    public function testAssertReturn344(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 362,
        );
    }

    #[Depends('testAssertReturn344')]
    public function testAssertReturn345(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 363,
        );
    }

    #[Depends('testAssertReturn345')]
    public function testAssertReturn346(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 364,
        );
    }

    #[Depends('testAssertReturn346')]
    public function testAssertReturn347(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 365,
        );
    }

    #[Depends('testAssertReturn347')]
    public function testAssertReturn348(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 366,
        );
    }

    #[Depends('testAssertReturn348')]
    public function testAssertReturn349(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 367,
        );
    }

    #[Depends('testAssertReturn349')]
    public function testAssertReturn350(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 368,
        );
    }

    #[Depends('testAssertReturn350')]
    public function testAssertReturn351(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 369,
        );
    }

    #[Depends('testAssertReturn351')]
    public function testAssertReturn352(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 370,
        );
    }

    #[Depends('testAssertReturn352')]
    public function testAssertReturn353(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 371,
        );
    }

    #[Depends('testAssertReturn353')]
    public function testAssertReturn354(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 372,
        );
    }

    #[Depends('testAssertReturn354')]
    public function testAssertReturn355(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 373,
        );
    }

    #[Depends('testAssertReturn355')]
    public function testAssertReturn356(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 374,
        );
    }

    #[Depends('testAssertReturn356')]
    public function testAssertReturn357(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 375,
        );
    }

    #[Depends('testAssertReturn357')]
    public function testAssertReturn358(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 376,
        );
    }

    #[Depends('testAssertReturn358')]
    public function testAssertReturn359(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 377,
        );
    }

    #[Depends('testAssertReturn359')]
    public function testAssertReturn360(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 378,
        );
    }

    #[Depends('testAssertReturn360')]
    public function testAssertReturn361(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 379,
        );
    }

    #[Depends('testAssertReturn361')]
    public function testAssertReturn362(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 380,
        );
    }

    #[Depends('testAssertReturn362')]
    public function testAssertReturn363(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 381,
        );
    }

    #[Depends('testAssertReturn363')]
    public function testAssertReturn364(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 382,
        );
    }

    #[Depends('testAssertReturn364')]
    public function testAssertReturn365(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 383,
        );
    }

    #[Depends('testAssertReturn365')]
    public function testAssertReturn366(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 384,
        );
    }

    #[Depends('testAssertReturn366')]
    public function testAssertReturn367(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 385,
        );
    }

    #[Depends('testAssertReturn367')]
    public function testAssertReturn368(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 386,
        );
    }

    #[Depends('testAssertReturn368')]
    public function testAssertReturn369(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 387,
        );
    }

    #[Depends('testAssertReturn369')]
    public function testAssertReturn370(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 388,
        );
    }

    #[Depends('testAssertReturn370')]
    public function testAssertReturn371(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 389,
        );
    }

    #[Depends('testAssertReturn371')]
    public function testAssertReturn372(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 390,
        );
    }

    #[Depends('testAssertReturn372')]
    public function testAssertReturn373(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 391,
        );
    }

    #[Depends('testAssertReturn373')]
    public function testAssertReturn374(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 392,
        );
    }

    #[Depends('testAssertReturn374')]
    public function testAssertReturn375(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 393,
        );
    }

    #[Depends('testAssertReturn375')]
    public function testAssertReturn376(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 394,
        );
    }

    #[Depends('testAssertReturn376')]
    public function testAssertReturn377(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 395,
        );
    }

    #[Depends('testAssertReturn377')]
    public function testAssertReturn378(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 396,
        );
    }

    #[Depends('testAssertReturn378')]
    public function testAssertReturn379(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 397,
        );
    }

    #[Depends('testAssertReturn379')]
    public function testAssertReturn380(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 398,
        );
    }

    #[Depends('testAssertReturn380')]
    public function testAssertReturn381(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 399,
        );
    }

    #[Depends('testAssertReturn381')]
    public function testAssertReturn382(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 400,
        );
    }

    #[Depends('testAssertReturn382')]
    public function testAssertReturn383(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 401,
        );
    }

    #[Depends('testAssertReturn383')]
    public function testAssertReturn384(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 402,
        );
    }

    #[Depends('testAssertReturn384')]
    public function testAssertReturn385(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 403,
        );
    }

    #[Depends('testAssertReturn385')]
    public function testAssertReturn386(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 404,
        );
    }

    #[Depends('testAssertReturn386')]
    public function testAssertReturn387(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 405,
        );
    }

    #[Depends('testAssertReturn387')]
    public function testAssertReturn388(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 406,
        );
    }

    #[Depends('testAssertReturn388')]
    public function testAssertReturn389(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 407,
        );
    }

    #[Depends('testAssertReturn389')]
    public function testAssertReturn390(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 408,
        );
    }

    #[Depends('testAssertReturn390')]
    public function testAssertReturn391(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 409,
        );
    }

    #[Depends('testAssertReturn391')]
    public function testAssertReturn392(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 410,
        );
    }

    #[Depends('testAssertReturn392')]
    public function testAssertReturn393(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 411,
        );
    }

    #[Depends('testAssertReturn393')]
    public function testAssertReturn394(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 412,
        );
    }

    #[Depends('testAssertReturn394')]
    public function testAssertReturn395(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 413,
        );
    }

    #[Depends('testAssertReturn395')]
    public function testAssertReturn396(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 414,
        );
    }

    #[Depends('testAssertReturn396')]
    public function testAssertReturn397(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 415,
        );
    }

    #[Depends('testAssertReturn397')]
    public function testAssertReturn398(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 416,
        );
    }

    #[Depends('testAssertReturn398')]
    public function testAssertReturn399(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 417,
        );
    }

    #[Depends('testAssertReturn399')]
    public function testAssertReturn400(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 418,
        );
    }

    #[Depends('testAssertReturn400')]
    public function testAssertReturn401(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 419,
        );
    }

    #[Depends('testAssertReturn401')]
    public function testAssertReturn402(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 420,
        );
    }

    #[Depends('testAssertReturn402')]
    public function testAssertReturn403(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 421,
        );
    }

    #[Depends('testAssertReturn403')]
    public function testAssertReturn404(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 422,
        );
    }

    #[Depends('testAssertReturn404')]
    public function testAssertReturn405(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 423,
        );
    }

    #[Depends('testAssertReturn405')]
    public function testAssertReturn406(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 424,
        );
    }

    #[Depends('testAssertReturn406')]
    public function testAssertReturn407(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 425,
        );
    }

    #[Depends('testAssertReturn407')]
    public function testAssertReturn408(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 426,
        );
    }

    #[Depends('testAssertReturn408')]
    public function testAssertReturn409(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 427,
        );
    }

    #[Depends('testAssertReturn409')]
    public function testAssertReturn410(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 428,
        );
    }

    #[Depends('testAssertReturn410')]
    public function testAssertReturn411(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 429,
        );
    }

    #[Depends('testAssertReturn411')]
    public function testAssertReturn412(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 430,
        );
    }

    #[Depends('testAssertReturn412')]
    public function testAssertReturn413(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 431,
        );
    }

    #[Depends('testAssertReturn413')]
    public function testAssertReturn414(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 432,
        );
    }

    #[Depends('testAssertReturn414')]
    public function testAssertReturn415(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 433,
        );
    }

    #[Depends('testAssertReturn415')]
    public function testAssertReturn416(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 434,
        );
    }

    #[Depends('testAssertReturn416')]
    public function testAssertReturn417(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 435,
        );
    }

    #[Depends('testAssertReturn417')]
    public function testAssertReturn418(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 436,
        );
    }

    #[Depends('testAssertReturn418')]
    public function testAssertReturn419(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 437,
        );
    }

    #[Depends('testAssertReturn419')]
    public function testAssertReturn420(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 438,
        );
    }

    #[Depends('testAssertReturn420')]
    public function testAssertReturn421(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 439,
        );
    }

    #[Depends('testAssertReturn421')]
    public function testAssertReturn422(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 440,
        );
    }

    #[Depends('testAssertReturn422')]
    public function testAssertReturn423(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 441,
        );
    }

    #[Depends('testAssertReturn423')]
    public function testAssertReturn424(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 442,
        );
    }

    #[Depends('testAssertReturn424')]
    public function testAssertReturn425(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 443,
        );
    }

    #[Depends('testAssertReturn425')]
    public function testAssertReturn426(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 444,
        );
    }

    #[Depends('testAssertReturn426')]
    public function testAssertReturn427(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 445,
        );
    }

    #[Depends('testAssertReturn427')]
    public function testAssertReturn428(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 446,
        );
    }

    #[Depends('testAssertReturn428')]
    public function testAssertReturn429(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 447,
        );
    }

    #[Depends('testAssertReturn429')]
    public function testAssertReturn430(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 448,
        );
    }

    #[Depends('testAssertReturn430')]
    public function testAssertReturn431(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 449,
        );
    }

    #[Depends('testAssertReturn431')]
    public function testAssertReturn432(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 450,
        );
    }

    #[Depends('testAssertReturn432')]
    public function testAssertReturn433(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 451,
        );
    }

    #[Depends('testAssertReturn433')]
    public function testAssertReturn434(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 452,
        );
    }

    #[Depends('testAssertReturn434')]
    public function testAssertReturn435(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 453,
        );
    }

    #[Depends('testAssertReturn435')]
    public function testAssertReturn436(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 454,
        );
    }

    #[Depends('testAssertReturn436')]
    public function testAssertReturn437(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 455,
        );
    }

    #[Depends('testAssertReturn437')]
    public function testAssertReturn438(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 456,
        );
    }

    #[Depends('testAssertReturn438')]
    public function testAssertReturn439(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 457,
        );
    }

    #[Depends('testAssertReturn439')]
    public function testAssertReturn440(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 458,
        );
    }

    #[Depends('testAssertReturn440')]
    public function testAssertReturn441(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 459,
        );
    }

    #[Depends('testAssertReturn441')]
    public function testAssertReturn442(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 460,
        );
    }

    #[Depends('testAssertReturn442')]
    public function testAssertReturn443(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 461,
        );
    }

    #[Depends('testAssertReturn443')]
    public function testAssertReturn444(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 462,
        );
    }

    #[Depends('testAssertReturn444')]
    public function testAssertReturn445(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 463,
        );
    }

    #[Depends('testAssertReturn445')]
    public function testAssertReturn446(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2147483650']],
            line: 464,
        );
    }

    #[Depends('testAssertReturn446')]
    public function testAssertReturn447(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2']],
            line: 465,
        );
    }

    #[Depends('testAssertReturn447')]
    public function testAssertReturn448(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 466,
        );
    }

    #[Depends('testAssertReturn448')]
    public function testAssertReturn449(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '8388607']],
            line: 467,
        );
    }

    #[Depends('testAssertReturn449')]
    public function testAssertReturn450(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2155872257']],
            line: 468,
        );
    }

    #[Depends('testAssertReturn450')]
    public function testAssertReturn451(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '8388609']],
            line: 469,
        );
    }

    #[Depends('testAssertReturn451')]
    public function testAssertReturn452(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2155872255']],
            line: 470,
        );
    }

    #[Depends('testAssertReturn452')]
    public function testAssertReturn453(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 471,
        );
    }

    #[Depends('testAssertReturn453')]
    public function testAssertReturn454(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 472,
        );
    }

    #[Depends('testAssertReturn454')]
    public function testAssertReturn455(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 473,
        );
    }

    #[Depends('testAssertReturn455')]
    public function testAssertReturn456(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 474,
        );
    }

    #[Depends('testAssertReturn456')]
    public function testAssertReturn457(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 475,
        );
    }

    #[Depends('testAssertReturn457')]
    public function testAssertReturn458(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 476,
        );
    }

    #[Depends('testAssertReturn458')]
    public function testAssertReturn459(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 477,
        );
    }

    #[Depends('testAssertReturn459')]
    public function testAssertReturn460(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 478,
        );
    }

    #[Depends('testAssertReturn460')]
    public function testAssertReturn461(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 479,
        );
    }

    #[Depends('testAssertReturn461')]
    public function testAssertReturn462(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 480,
        );
    }

    #[Depends('testAssertReturn462')]
    public function testAssertReturn463(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 481,
        );
    }

    #[Depends('testAssertReturn463')]
    public function testAssertReturn464(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 482,
        );
    }

    #[Depends('testAssertReturn464')]
    public function testAssertReturn465(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 483,
        );
    }

    #[Depends('testAssertReturn465')]
    public function testAssertReturn466(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 484,
        );
    }

    #[Depends('testAssertReturn466')]
    public function testAssertReturn467(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 485,
        );
    }

    #[Depends('testAssertReturn467')]
    public function testAssertReturn468(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 486,
        );
    }

    #[Depends('testAssertReturn468')]
    public function testAssertReturn469(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 487,
        );
    }

    #[Depends('testAssertReturn469')]
    public function testAssertReturn470(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 488,
        );
    }

    #[Depends('testAssertReturn470')]
    public function testAssertReturn471(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 489,
        );
    }

    #[Depends('testAssertReturn471')]
    public function testAssertReturn472(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 490,
        );
    }

    #[Depends('testAssertReturn472')]
    public function testAssertReturn473(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 491,
        );
    }

    #[Depends('testAssertReturn473')]
    public function testAssertReturn474(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 492,
        );
    }

    #[Depends('testAssertReturn474')]
    public function testAssertReturn475(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 493,
        );
    }

    #[Depends('testAssertReturn475')]
    public function testAssertReturn476(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 494,
        );
    }

    #[Depends('testAssertReturn476')]
    public function testAssertReturn477(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 495,
        );
    }

    #[Depends('testAssertReturn477')]
    public function testAssertReturn478(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 496,
        );
    }

    #[Depends('testAssertReturn478')]
    public function testAssertReturn479(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 497,
        );
    }

    #[Depends('testAssertReturn479')]
    public function testAssertReturn480(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 498,
        );
    }

    #[Depends('testAssertReturn480')]
    public function testAssertReturn481(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 499,
        );
    }

    #[Depends('testAssertReturn481')]
    public function testAssertReturn482(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 500,
        );
    }

    #[Depends('testAssertReturn482')]
    public function testAssertReturn483(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 501,
        );
    }

    #[Depends('testAssertReturn483')]
    public function testAssertReturn484(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 502,
        );
    }

    #[Depends('testAssertReturn484')]
    public function testAssertReturn485(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2155872255']],
            line: 503,
        );
    }

    #[Depends('testAssertReturn485')]
    public function testAssertReturn486(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2155872257']],
            line: 504,
        );
    }

    #[Depends('testAssertReturn486')]
    public function testAssertReturn487(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '8388609']],
            line: 505,
        );
    }

    #[Depends('testAssertReturn487')]
    public function testAssertReturn488(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '8388607']],
            line: 506,
        );
    }

    #[Depends('testAssertReturn488')]
    public function testAssertReturn489(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 507,
        );
    }

    #[Depends('testAssertReturn489')]
    public function testAssertReturn490(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2164260864']],
            line: 508,
        );
    }

    #[Depends('testAssertReturn490')]
    public function testAssertReturn491(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '16777216']],
            line: 509,
        );
    }

    #[Depends('testAssertReturn491')]
    public function testAssertReturn492(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 510,
        );
    }

    #[Depends('testAssertReturn492')]
    public function testAssertReturn493(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 511,
        );
    }

    #[Depends('testAssertReturn493')]
    public function testAssertReturn494(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 512,
        );
    }

    #[Depends('testAssertReturn494')]
    public function testAssertReturn495(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 513,
        );
    }

    #[Depends('testAssertReturn495')]
    public function testAssertReturn496(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 514,
        );
    }

    #[Depends('testAssertReturn496')]
    public function testAssertReturn497(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 515,
        );
    }

    #[Depends('testAssertReturn497')]
    public function testAssertReturn498(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 516,
        );
    }

    #[Depends('testAssertReturn498')]
    public function testAssertReturn499(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 517,
        );
    }

    #[Depends('testAssertReturn499')]
    public function testAssertReturn500(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 518,
        );
    }

    #[Depends('testAssertReturn500')]
    public function testAssertReturn501(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 519,
        );
    }

    #[Depends('testAssertReturn501')]
    public function testAssertReturn502(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 520,
        );
    }

    #[Depends('testAssertReturn502')]
    public function testAssertReturn503(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 521,
        );
    }

    #[Depends('testAssertReturn503')]
    public function testAssertReturn504(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 522,
        );
    }

    #[Depends('testAssertReturn504')]
    public function testAssertReturn505(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 523,
        );
    }

    #[Depends('testAssertReturn505')]
    public function testAssertReturn506(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 524,
        );
    }

    #[Depends('testAssertReturn506')]
    public function testAssertReturn507(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 525,
        );
    }

    #[Depends('testAssertReturn507')]
    public function testAssertReturn508(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 526,
        );
    }

    #[Depends('testAssertReturn508')]
    public function testAssertReturn509(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 527,
        );
    }

    #[Depends('testAssertReturn509')]
    public function testAssertReturn510(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 528,
        );
    }

    #[Depends('testAssertReturn510')]
    public function testAssertReturn511(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 529,
        );
    }

    #[Depends('testAssertReturn511')]
    public function testAssertReturn512(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 530,
        );
    }

    #[Depends('testAssertReturn512')]
    public function testAssertReturn513(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 531,
        );
    }

    #[Depends('testAssertReturn513')]
    public function testAssertReturn514(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 532,
        );
    }

    #[Depends('testAssertReturn514')]
    public function testAssertReturn515(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 533,
        );
    }

    #[Depends('testAssertReturn515')]
    public function testAssertReturn516(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 534,
        );
    }

    #[Depends('testAssertReturn516')]
    public function testAssertReturn517(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 535,
        );
    }

    #[Depends('testAssertReturn517')]
    public function testAssertReturn518(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 536,
        );
    }

    #[Depends('testAssertReturn518')]
    public function testAssertReturn519(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 537,
        );
    }

    #[Depends('testAssertReturn519')]
    public function testAssertReturn520(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 538,
        );
    }

    #[Depends('testAssertReturn520')]
    public function testAssertReturn521(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 539,
        );
    }

    #[Depends('testAssertReturn521')]
    public function testAssertReturn522(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 540,
        );
    }

    #[Depends('testAssertReturn522')]
    public function testAssertReturn523(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 541,
        );
    }

    #[Depends('testAssertReturn523')]
    public function testAssertReturn524(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 542,
        );
    }

    #[Depends('testAssertReturn524')]
    public function testAssertReturn525(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 543,
        );
    }

    #[Depends('testAssertReturn525')]
    public function testAssertReturn526(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 544,
        );
    }

    #[Depends('testAssertReturn526')]
    public function testAssertReturn527(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 545,
        );
    }

    #[Depends('testAssertReturn527')]
    public function testAssertReturn528(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 546,
        );
    }

    #[Depends('testAssertReturn528')]
    public function testAssertReturn529(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 547,
        );
    }

    #[Depends('testAssertReturn529')]
    public function testAssertReturn530(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 548,
        );
    }

    #[Depends('testAssertReturn530')]
    public function testAssertReturn531(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 549,
        );
    }

    #[Depends('testAssertReturn531')]
    public function testAssertReturn532(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 550,
        );
    }

    #[Depends('testAssertReturn532')]
    public function testAssertReturn533(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 551,
        );
    }

    #[Depends('testAssertReturn533')]
    public function testAssertReturn534(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 552,
        );
    }

    #[Depends('testAssertReturn534')]
    public function testAssertReturn535(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 553,
        );
    }

    #[Depends('testAssertReturn535')]
    public function testAssertReturn536(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 554,
        );
    }

    #[Depends('testAssertReturn536')]
    public function testAssertReturn537(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 555,
        );
    }

    #[Depends('testAssertReturn537')]
    public function testAssertReturn538(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '3217031168']],
            line: 556,
        );
    }

    #[Depends('testAssertReturn538')]
    public function testAssertReturn539(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '1069547520']],
            line: 557,
        );
    }

    #[Depends('testAssertReturn539')]
    public function testAssertReturn540(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 558,
        );
    }

    #[Depends('testAssertReturn540')]
    public function testAssertReturn541(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '1085870043']],
            line: 559,
        );
    }

    #[Depends('testAssertReturn541')]
    public function testAssertReturn542(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '3235450843']],
            line: 560,
        );
    }

    #[Depends('testAssertReturn542')]
    public function testAssertReturn543(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '1087967195']],
            line: 561,
        );
    }

    #[Depends('testAssertReturn543')]
    public function testAssertReturn544(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '3233353691']],
            line: 562,
        );
    }

    #[Depends('testAssertReturn544')]
    public function testAssertReturn545(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 563,
        );
    }

    #[Depends('testAssertReturn545')]
    public function testAssertReturn546(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 564,
        );
    }

    #[Depends('testAssertReturn546')]
    public function testAssertReturn547(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 565,
        );
    }

    #[Depends('testAssertReturn547')]
    public function testAssertReturn548(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 566,
        );
    }

    #[Depends('testAssertReturn548')]
    public function testAssertReturn549(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 567,
        );
    }

    #[Depends('testAssertReturn549')]
    public function testAssertReturn550(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 568,
        );
    }

    #[Depends('testAssertReturn550')]
    public function testAssertReturn551(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 569,
        );
    }

    #[Depends('testAssertReturn551')]
    public function testAssertReturn552(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 570,
        );
    }

    #[Depends('testAssertReturn552')]
    public function testAssertReturn553(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 571,
        );
    }

    #[Depends('testAssertReturn553')]
    public function testAssertReturn554(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 572,
        );
    }

    #[Depends('testAssertReturn554')]
    public function testAssertReturn555(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 573,
        );
    }

    #[Depends('testAssertReturn555')]
    public function testAssertReturn556(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 574,
        );
    }

    #[Depends('testAssertReturn556')]
    public function testAssertReturn557(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 575,
        );
    }

    #[Depends('testAssertReturn557')]
    public function testAssertReturn558(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 576,
        );
    }

    #[Depends('testAssertReturn558')]
    public function testAssertReturn559(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 577,
        );
    }

    #[Depends('testAssertReturn559')]
    public function testAssertReturn560(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 578,
        );
    }

    #[Depends('testAssertReturn560')]
    public function testAssertReturn561(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 579,
        );
    }

    #[Depends('testAssertReturn561')]
    public function testAssertReturn562(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 580,
        );
    }

    #[Depends('testAssertReturn562')]
    public function testAssertReturn563(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 581,
        );
    }

    #[Depends('testAssertReturn563')]
    public function testAssertReturn564(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 582,
        );
    }

    #[Depends('testAssertReturn564')]
    public function testAssertReturn565(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 583,
        );
    }

    #[Depends('testAssertReturn565')]
    public function testAssertReturn566(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 584,
        );
    }

    #[Depends('testAssertReturn566')]
    public function testAssertReturn567(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 585,
        );
    }

    #[Depends('testAssertReturn567')]
    public function testAssertReturn568(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 586,
        );
    }

    #[Depends('testAssertReturn568')]
    public function testAssertReturn569(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 587,
        );
    }

    #[Depends('testAssertReturn569')]
    public function testAssertReturn570(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 588,
        );
    }

    #[Depends('testAssertReturn570')]
    public function testAssertReturn571(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 589,
        );
    }

    #[Depends('testAssertReturn571')]
    public function testAssertReturn572(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 590,
        );
    }

    #[Depends('testAssertReturn572')]
    public function testAssertReturn573(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 591,
        );
    }

    #[Depends('testAssertReturn573')]
    public function testAssertReturn574(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '3217031168']],
            line: 592,
        );
    }

    #[Depends('testAssertReturn574')]
    public function testAssertReturn575(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '1069547520']],
            line: 593,
        );
    }

    #[Depends('testAssertReturn575')]
    public function testAssertReturn576(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 594,
        );
    }

    #[Depends('testAssertReturn576')]
    public function testAssertReturn577(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 595,
        );
    }

    #[Depends('testAssertReturn577')]
    public function testAssertReturn578(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '3221225472']],
            line: 596,
        );
    }

    #[Depends('testAssertReturn578')]
    public function testAssertReturn579(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '1073741824']],
            line: 597,
        );
    }

    #[Depends('testAssertReturn579')]
    public function testAssertReturn580(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 598,
        );
    }

    #[Depends('testAssertReturn580')]
    public function testAssertReturn581(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '1084821467']],
            line: 599,
        );
    }

    #[Depends('testAssertReturn581')]
    public function testAssertReturn582(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '3236499419']],
            line: 600,
        );
    }

    #[Depends('testAssertReturn582')]
    public function testAssertReturn583(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '1089015771']],
            line: 601,
        );
    }

    #[Depends('testAssertReturn583')]
    public function testAssertReturn584(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '3232305115']],
            line: 602,
        );
    }

    #[Depends('testAssertReturn584')]
    public function testAssertReturn585(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 603,
        );
    }

    #[Depends('testAssertReturn585')]
    public function testAssertReturn586(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 604,
        );
    }

    #[Depends('testAssertReturn586')]
    public function testAssertReturn587(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 605,
        );
    }

    #[Depends('testAssertReturn587')]
    public function testAssertReturn588(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 606,
        );
    }

    #[Depends('testAssertReturn588')]
    public function testAssertReturn589(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 607,
        );
    }

    #[Depends('testAssertReturn589')]
    public function testAssertReturn590(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 608,
        );
    }

    #[Depends('testAssertReturn590')]
    public function testAssertReturn591(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 609,
        );
    }

    #[Depends('testAssertReturn591')]
    public function testAssertReturn592(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 610,
        );
    }

    #[Depends('testAssertReturn592')]
    public function testAssertReturn593(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 611,
        );
    }

    #[Depends('testAssertReturn593')]
    public function testAssertReturn594(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 612,
        );
    }

    #[Depends('testAssertReturn594')]
    public function testAssertReturn595(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 613,
        );
    }

    #[Depends('testAssertReturn595')]
    public function testAssertReturn596(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 614,
        );
    }

    #[Depends('testAssertReturn596')]
    public function testAssertReturn597(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 615,
        );
    }

    #[Depends('testAssertReturn597')]
    public function testAssertReturn598(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 616,
        );
    }

    #[Depends('testAssertReturn598')]
    public function testAssertReturn599(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 617,
        );
    }

    #[Depends('testAssertReturn599')]
    public function testAssertReturn600(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 618,
        );
    }

    #[Depends('testAssertReturn600')]
    public function testAssertReturn601(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 619,
        );
    }

    #[Depends('testAssertReturn601')]
    public function testAssertReturn602(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 620,
        );
    }

    #[Depends('testAssertReturn602')]
    public function testAssertReturn603(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 621,
        );
    }

    #[Depends('testAssertReturn603')]
    public function testAssertReturn604(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 622,
        );
    }

    #[Depends('testAssertReturn604')]
    public function testAssertReturn605(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 623,
        );
    }

    #[Depends('testAssertReturn605')]
    public function testAssertReturn606(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 624,
        );
    }

    #[Depends('testAssertReturn606')]
    public function testAssertReturn607(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 625,
        );
    }

    #[Depends('testAssertReturn607')]
    public function testAssertReturn608(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 626,
        );
    }

    #[Depends('testAssertReturn608')]
    public function testAssertReturn609(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 627,
        );
    }

    #[Depends('testAssertReturn609')]
    public function testAssertReturn610(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 628,
        );
    }

    #[Depends('testAssertReturn610')]
    public function testAssertReturn611(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 629,
        );
    }

    #[Depends('testAssertReturn611')]
    public function testAssertReturn612(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 630,
        );
    }

    #[Depends('testAssertReturn612')]
    public function testAssertReturn613(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3233353691']],
            line: 631,
        );
    }

    #[Depends('testAssertReturn613')]
    public function testAssertReturn614(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '3235450843']],
            line: 632,
        );
    }

    #[Depends('testAssertReturn614')]
    public function testAssertReturn615(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '1087967195']],
            line: 633,
        );
    }

    #[Depends('testAssertReturn615')]
    public function testAssertReturn616(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1085870043']],
            line: 634,
        );
    }

    #[Depends('testAssertReturn616')]
    public function testAssertReturn617(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3232305115']],
            line: 635,
        );
    }

    #[Depends('testAssertReturn617')]
    public function testAssertReturn618(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '3236499419']],
            line: 636,
        );
    }

    #[Depends('testAssertReturn618')]
    public function testAssertReturn619(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '1089015771']],
            line: 637,
        );
    }

    #[Depends('testAssertReturn619')]
    public function testAssertReturn620(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1084821467']],
            line: 638,
        );
    }

    #[Depends('testAssertReturn620')]
    public function testAssertReturn621(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 639,
        );
    }

    #[Depends('testAssertReturn621')]
    public function testAssertReturn622(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '3242790875']],
            line: 640,
        );
    }

    #[Depends('testAssertReturn622')]
    public function testAssertReturn623(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '1095307227']],
            line: 641,
        );
    }

    #[Depends('testAssertReturn623')]
    public function testAssertReturn624(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 642,
        );
    }

    #[Depends('testAssertReturn624')]
    public function testAssertReturn625(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 643,
        );
    }

    #[Depends('testAssertReturn625')]
    public function testAssertReturn626(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 644,
        );
    }

    #[Depends('testAssertReturn626')]
    public function testAssertReturn627(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 645,
        );
    }

    #[Depends('testAssertReturn627')]
    public function testAssertReturn628(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 646,
        );
    }

    #[Depends('testAssertReturn628')]
    public function testAssertReturn629(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 647,
        );
    }

    #[Depends('testAssertReturn629')]
    public function testAssertReturn630(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 648,
        );
    }

    #[Depends('testAssertReturn630')]
    public function testAssertReturn631(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 649,
        );
    }

    #[Depends('testAssertReturn631')]
    public function testAssertReturn632(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 650,
        );
    }

    #[Depends('testAssertReturn632')]
    public function testAssertReturn633(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 651,
        );
    }

    #[Depends('testAssertReturn633')]
    public function testAssertReturn634(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 652,
        );
    }

    #[Depends('testAssertReturn634')]
    public function testAssertReturn635(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 653,
        );
    }

    #[Depends('testAssertReturn635')]
    public function testAssertReturn636(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 654,
        );
    }

    #[Depends('testAssertReturn636')]
    public function testAssertReturn637(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 655,
        );
    }

    #[Depends('testAssertReturn637')]
    public function testAssertReturn638(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 656,
        );
    }

    #[Depends('testAssertReturn638')]
    public function testAssertReturn639(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 657,
        );
    }

    #[Depends('testAssertReturn639')]
    public function testAssertReturn640(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 658,
        );
    }

    #[Depends('testAssertReturn640')]
    public function testAssertReturn641(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 659,
        );
    }

    #[Depends('testAssertReturn641')]
    public function testAssertReturn642(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 660,
        );
    }

    #[Depends('testAssertReturn642')]
    public function testAssertReturn643(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 661,
        );
    }

    #[Depends('testAssertReturn643')]
    public function testAssertReturn644(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 662,
        );
    }

    #[Depends('testAssertReturn644')]
    public function testAssertReturn645(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 663,
        );
    }

    #[Depends('testAssertReturn645')]
    public function testAssertReturn646(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 664,
        );
    }

    #[Depends('testAssertReturn646')]
    public function testAssertReturn647(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 665,
        );
    }

    #[Depends('testAssertReturn647')]
    public function testAssertReturn648(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 666,
        );
    }

    #[Depends('testAssertReturn648')]
    public function testAssertReturn649(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 667,
        );
    }

    #[Depends('testAssertReturn649')]
    public function testAssertReturn650(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 668,
        );
    }

    #[Depends('testAssertReturn650')]
    public function testAssertReturn651(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 669,
        );
    }

    #[Depends('testAssertReturn651')]
    public function testAssertReturn652(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 670,
        );
    }

    #[Depends('testAssertReturn652')]
    public function testAssertReturn653(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 671,
        );
    }

    #[Depends('testAssertReturn653')]
    public function testAssertReturn654(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 672,
        );
    }

    #[Depends('testAssertReturn654')]
    public function testAssertReturn655(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 673,
        );
    }

    #[Depends('testAssertReturn655')]
    public function testAssertReturn656(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 674,
        );
    }

    #[Depends('testAssertReturn656')]
    public function testAssertReturn657(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 675,
        );
    }

    #[Depends('testAssertReturn657')]
    public function testAssertReturn658(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 676,
        );
    }

    #[Depends('testAssertReturn658')]
    public function testAssertReturn659(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 677,
        );
    }

    #[Depends('testAssertReturn659')]
    public function testAssertReturn660(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 678,
        );
    }

    #[Depends('testAssertReturn660')]
    public function testAssertReturn661(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 679,
        );
    }

    #[Depends('testAssertReturn661')]
    public function testAssertReturn662(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 680,
        );
    }

    #[Depends('testAssertReturn662')]
    public function testAssertReturn663(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 681,
        );
    }

    #[Depends('testAssertReturn663')]
    public function testAssertReturn664(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 682,
        );
    }

    #[Depends('testAssertReturn664')]
    public function testAssertReturn665(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 683,
        );
    }

    #[Depends('testAssertReturn665')]
    public function testAssertReturn666(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 684,
        );
    }

    #[Depends('testAssertReturn666')]
    public function testAssertReturn667(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 685,
        );
    }

    #[Depends('testAssertReturn667')]
    public function testAssertReturn668(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 686,
        );
    }

    #[Depends('testAssertReturn668')]
    public function testAssertReturn669(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 687,
        );
    }

    #[Depends('testAssertReturn669')]
    public function testAssertReturn670(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 688,
        );
    }

    #[Depends('testAssertReturn670')]
    public function testAssertReturn671(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 689,
        );
    }

    #[Depends('testAssertReturn671')]
    public function testAssertReturn672(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 690,
        );
    }

    #[Depends('testAssertReturn672')]
    public function testAssertReturn673(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 691,
        );
    }

    #[Depends('testAssertReturn673')]
    public function testAssertReturn674(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 692,
        );
    }

    #[Depends('testAssertReturn674')]
    public function testAssertReturn675(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 693,
        );
    }

    #[Depends('testAssertReturn675')]
    public function testAssertReturn676(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 694,
        );
    }

    #[Depends('testAssertReturn676')]
    public function testAssertReturn677(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 695,
        );
    }

    #[Depends('testAssertReturn677')]
    public function testAssertReturn678(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 696,
        );
    }

    #[Depends('testAssertReturn678')]
    public function testAssertReturn679(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 697,
        );
    }

    #[Depends('testAssertReturn679')]
    public function testAssertReturn680(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 698,
        );
    }

    #[Depends('testAssertReturn680')]
    public function testAssertReturn681(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 699,
        );
    }

    #[Depends('testAssertReturn681')]
    public function testAssertReturn682(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 700,
        );
    }

    #[Depends('testAssertReturn682')]
    public function testAssertReturn683(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 701,
        );
    }

    #[Depends('testAssertReturn683')]
    public function testAssertReturn684(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 702,
        );
    }

    #[Depends('testAssertReturn684')]
    public function testAssertReturn685(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 703,
        );
    }

    #[Depends('testAssertReturn685')]
    public function testAssertReturn686(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 704,
        );
    }

    #[Depends('testAssertReturn686')]
    public function testAssertReturn687(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 705,
        );
    }

    #[Depends('testAssertReturn687')]
    public function testAssertReturn688(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 706,
        );
    }

    #[Depends('testAssertReturn688')]
    public function testAssertReturn689(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 707,
        );
    }

    #[Depends('testAssertReturn689')]
    public function testAssertReturn690(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 708,
        );
    }

    #[Depends('testAssertReturn690')]
    public function testAssertReturn691(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 709,
        );
    }

    #[Depends('testAssertReturn691')]
    public function testAssertReturn692(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 710,
        );
    }

    #[Depends('testAssertReturn692')]
    public function testAssertReturn693(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 711,
        );
    }

    #[Depends('testAssertReturn693')]
    public function testAssertReturn694(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 712,
        );
    }

    #[Depends('testAssertReturn694')]
    public function testAssertReturn695(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 713,
        );
    }

    #[Depends('testAssertReturn695')]
    public function testAssertReturn696(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 714,
        );
    }

    #[Depends('testAssertReturn696')]
    public function testAssertReturn697(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 715,
        );
    }

    #[Depends('testAssertReturn697')]
    public function testAssertReturn698(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 716,
        );
    }

    #[Depends('testAssertReturn698')]
    public function testAssertReturn699(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 717,
        );
    }

    #[Depends('testAssertReturn699')]
    public function testAssertReturn700(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 718,
        );
    }

    #[Depends('testAssertReturn700')]
    public function testAssertReturn701(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 719,
        );
    }

    #[Depends('testAssertReturn701')]
    public function testAssertReturn702(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 720,
        );
    }

    #[Depends('testAssertReturn702')]
    public function testAssertReturn703(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 721,
        );
    }

    #[Depends('testAssertReturn703')]
    public function testAssertReturn704(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 722,
        );
    }

    #[Depends('testAssertReturn704')]
    public function testAssertReturn705(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 723,
        );
    }

    #[Depends('testAssertReturn705')]
    public function testAssertReturn706(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 724,
        );
    }

    #[Depends('testAssertReturn706')]
    public function testAssertReturn707(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 725,
        );
    }

    #[Depends('testAssertReturn707')]
    public function testAssertReturn708(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 726,
        );
    }

    #[Depends('testAssertReturn708')]
    public function testAssertReturn709(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 727,
        );
    }

    #[Depends('testAssertReturn709')]
    public function testAssertReturn710(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 728,
        );
    }

    #[Depends('testAssertReturn710')]
    public function testAssertReturn711(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 729,
        );
    }

    #[Depends('testAssertReturn711')]
    public function testAssertReturn712(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 730,
        );
    }

    #[Depends('testAssertReturn712')]
    public function testAssertReturn713(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 731,
        );
    }

    #[Depends('testAssertReturn713')]
    public function testAssertReturn714(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 732,
        );
    }

    #[Depends('testAssertReturn714')]
    public function testAssertReturn715(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 733,
        );
    }

    #[Depends('testAssertReturn715')]
    public function testAssertReturn716(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 734,
        );
    }

    #[Depends('testAssertReturn716')]
    public function testAssertReturn717(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 735,
        );
    }

    #[Depends('testAssertReturn717')]
    public function testAssertReturn718(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 736,
        );
    }

    #[Depends('testAssertReturn718')]
    public function testAssertReturn719(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 737,
        );
    }

    #[Depends('testAssertReturn719')]
    public function testAssertReturn720(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 738,
        );
    }

    #[Depends('testAssertReturn720')]
    public function testAssertReturn721(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 739,
        );
    }

    #[Depends('testAssertReturn721')]
    public function testAssertReturn722(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 740,
        );
    }

    #[Depends('testAssertReturn722')]
    public function testAssertReturn723(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 741,
        );
    }

    #[Depends('testAssertReturn723')]
    public function testAssertReturn724(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 742,
        );
    }

    #[Depends('testAssertReturn724')]
    public function testAssertReturn725(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 743,
        );
    }

    #[Depends('testAssertReturn725')]
    public function testAssertReturn726(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 744,
        );
    }

    #[Depends('testAssertReturn726')]
    public function testAssertReturn727(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 745,
        );
    }

    #[Depends('testAssertReturn727')]
    public function testAssertReturn728(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 746,
        );
    }

    #[Depends('testAssertReturn728')]
    public function testAssertReturn729(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 747,
        );
    }

    #[Depends('testAssertReturn729')]
    public function testAssertReturn730(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 748,
        );
    }

    #[Depends('testAssertReturn730')]
    public function testAssertReturn731(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 749,
        );
    }

    #[Depends('testAssertReturn731')]
    public function testAssertReturn732(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 750,
        );
    }

    #[Depends('testAssertReturn732')]
    public function testAssertReturn733(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 751,
        );
    }

    #[Depends('testAssertReturn733')]
    public function testAssertReturn734(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 752,
        );
    }

    #[Depends('testAssertReturn734')]
    public function testAssertReturn735(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 753,
        );
    }

    #[Depends('testAssertReturn735')]
    public function testAssertReturn736(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 754,
        );
    }

    #[Depends('testAssertReturn736')]
    public function testAssertReturn737(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 755,
        );
    }

    #[Depends('testAssertReturn737')]
    public function testAssertReturn738(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 756,
        );
    }

    #[Depends('testAssertReturn738')]
    public function testAssertReturn739(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 757,
        );
    }

    #[Depends('testAssertReturn739')]
    public function testAssertReturn740(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 758,
        );
    }

    #[Depends('testAssertReturn740')]
    public function testAssertReturn741(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 759,
        );
    }

    #[Depends('testAssertReturn741')]
    public function testAssertReturn742(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 760,
        );
    }

    #[Depends('testAssertReturn742')]
    public function testAssertReturn743(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 761,
        );
    }

    #[Depends('testAssertReturn743')]
    public function testAssertReturn744(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 762,
        );
    }

    #[Depends('testAssertReturn744')]
    public function testAssertReturn745(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 763,
        );
    }

    #[Depends('testAssertReturn745')]
    public function testAssertReturn746(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 764,
        );
    }

    #[Depends('testAssertReturn746')]
    public function testAssertReturn747(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 765,
        );
    }

    #[Depends('testAssertReturn747')]
    public function testAssertReturn748(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 766,
        );
    }

    #[Depends('testAssertReturn748')]
    public function testAssertReturn749(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 767,
        );
    }

    #[Depends('testAssertReturn749')]
    public function testAssertReturn750(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 768,
        );
    }

    #[Depends('testAssertReturn750')]
    public function testAssertReturn751(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 769,
        );
    }

    #[Depends('testAssertReturn751')]
    public function testAssertReturn752(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 770,
        );
    }

    #[Depends('testAssertReturn752')]
    public function testAssertReturn753(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 771,
        );
    }

    #[Depends('testAssertReturn753')]
    public function testAssertReturn754(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 772,
        );
    }

    #[Depends('testAssertReturn754')]
    public function testAssertReturn755(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 773,
        );
    }

    #[Depends('testAssertReturn755')]
    public function testAssertReturn756(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 774,
        );
    }

    #[Depends('testAssertReturn756')]
    public function testAssertReturn757(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 775,
        );
    }

    #[Depends('testAssertReturn757')]
    public function testAssertReturn758(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 776,
        );
    }

    #[Depends('testAssertReturn758')]
    public function testAssertReturn759(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 777,
        );
    }

    #[Depends('testAssertReturn759')]
    public function testAssertReturn760(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 778,
        );
    }

    #[Depends('testAssertReturn760')]
    public function testAssertReturn761(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 779,
        );
    }

    #[Depends('testAssertReturn761')]
    public function testAssertReturn762(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 780,
        );
    }

    #[Depends('testAssertReturn762')]
    public function testAssertReturn763(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 781,
        );
    }

    #[Depends('testAssertReturn763')]
    public function testAssertReturn764(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 782,
        );
    }

    #[Depends('testAssertReturn764')]
    public function testAssertReturn765(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 783,
        );
    }

    #[Depends('testAssertReturn765')]
    public function testAssertReturn766(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 784,
        );
    }

    #[Depends('testAssertReturn766')]
    public function testAssertReturn767(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 785,
        );
    }

    #[Depends('testAssertReturn767')]
    public function testAssertReturn768(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 786,
        );
    }

    #[Depends('testAssertReturn768')]
    public function testAssertReturn769(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 787,
        );
    }

    #[Depends('testAssertReturn769')]
    public function testAssertReturn770(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 788,
        );
    }

    #[Depends('testAssertReturn770')]
    public function testAssertReturn771(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 789,
        );
    }

    #[Depends('testAssertReturn771')]
    public function testAssertReturn772(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 790,
        );
    }

    #[Depends('testAssertReturn772')]
    public function testAssertReturn773(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 791,
        );
    }

    #[Depends('testAssertReturn773')]
    public function testAssertReturn774(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 792,
        );
    }

    #[Depends('testAssertReturn774')]
    public function testAssertReturn775(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 793,
        );
    }

    #[Depends('testAssertReturn775')]
    public function testAssertReturn776(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 794,
        );
    }

    #[Depends('testAssertReturn776')]
    public function testAssertReturn777(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 795,
        );
    }

    #[Depends('testAssertReturn777')]
    public function testAssertReturn778(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 796,
        );
    }

    #[Depends('testAssertReturn778')]
    public function testAssertReturn779(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 797,
        );
    }

    #[Depends('testAssertReturn779')]
    public function testAssertReturn780(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 798,
        );
    }

    #[Depends('testAssertReturn780')]
    public function testAssertReturn781(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 799,
        );
    }

    #[Depends('testAssertReturn781')]
    public function testAssertReturn782(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 800,
        );
    }

    #[Depends('testAssertReturn782')]
    public function testAssertReturn783(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 801,
        );
    }

    #[Depends('testAssertReturn783')]
    public function testAssertReturn784(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 802,
        );
    }

    #[Depends('testAssertReturn784')]
    public function testAssertReturn785(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 803,
        );
    }

    #[Depends('testAssertReturn785')]
    public function testAssertReturn786(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 804,
        );
    }

    #[Depends('testAssertReturn786')]
    public function testAssertReturn787(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 805,
        );
    }

    #[Depends('testAssertReturn787')]
    public function testAssertReturn788(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 806,
        );
    }

    #[Depends('testAssertReturn788')]
    public function testAssertReturn789(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 807,
        );
    }

    #[Depends('testAssertReturn789')]
    public function testAssertReturn790(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 808,
        );
    }

    #[Depends('testAssertReturn790')]
    public function testAssertReturn791(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 809,
        );
    }

    #[Depends('testAssertReturn791')]
    public function testAssertReturn792(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 810,
        );
    }

    #[Depends('testAssertReturn792')]
    public function testAssertReturn793(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 811,
        );
    }

    #[Depends('testAssertReturn793')]
    public function testAssertReturn794(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 812,
        );
    }

    #[Depends('testAssertReturn794')]
    public function testAssertReturn795(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 813,
        );
    }

    #[Depends('testAssertReturn795')]
    public function testAssertReturn796(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 814,
        );
    }

    #[Depends('testAssertReturn796')]
    public function testAssertReturn797(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 815,
        );
    }

    #[Depends('testAssertReturn797')]
    public function testAssertReturn798(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 816,
        );
    }

    #[Depends('testAssertReturn798')]
    public function testAssertReturn799(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 817,
        );
    }

    #[Depends('testAssertReturn799')]
    public function testAssertReturn800(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 818,
        );
    }

    #[Depends('testAssertReturn800')]
    public function testAssertReturn801(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 819,
        );
    }

    #[Depends('testAssertReturn801')]
    public function testAssertReturn802(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 820,
        );
    }

    #[Depends('testAssertReturn802')]
    public function testAssertReturn803(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 821,
        );
    }

    #[Depends('testAssertReturn803')]
    public function testAssertReturn804(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 822,
        );
    }

    #[Depends('testAssertReturn804')]
    public function testAssertReturn805(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 823,
        );
    }

    #[Depends('testAssertReturn805')]
    public function testAssertReturn806(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 824,
        );
    }

    #[Depends('testAssertReturn806')]
    public function testAssertReturn807(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 825,
        );
    }

    #[Depends('testAssertReturn807')]
    public function testAssertReturn808(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 826,
        );
    }

    #[Depends('testAssertReturn808')]
    public function testAssertReturn809(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 827,
        );
    }

    #[Depends('testAssertReturn809')]
    public function testAssertReturn810(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 828,
        );
    }

    #[Depends('testAssertReturn810')]
    public function testAssertReturn811(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 829,
        );
    }

    #[Depends('testAssertReturn811')]
    public function testAssertReturn812(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 830,
        );
    }

    #[Depends('testAssertReturn812')]
    public function testAssertReturn813(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 831,
        );
    }

    #[Depends('testAssertReturn813')]
    public function testAssertReturn814(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 832,
        );
    }

    #[Depends('testAssertReturn814')]
    public function testAssertReturn815(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 833,
        );
    }

    #[Depends('testAssertReturn815')]
    public function testAssertReturn816(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 834,
        );
    }

    #[Depends('testAssertReturn816')]
    public function testAssertReturn817(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 835,
        );
    }

    #[Depends('testAssertReturn817')]
    public function testAssertReturn818(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 836,
        );
    }

    #[Depends('testAssertReturn818')]
    public function testAssertReturn819(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 837,
        );
    }

    #[Depends('testAssertReturn819')]
    public function testAssertReturn820(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 838,
        );
    }

    #[Depends('testAssertReturn820')]
    public function testAssertReturn821(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 839,
        );
    }

    #[Depends('testAssertReturn821')]
    public function testAssertReturn822(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 840,
        );
    }

    #[Depends('testAssertReturn822')]
    public function testAssertReturn823(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 841,
        );
    }

    #[Depends('testAssertReturn823')]
    public function testAssertReturn824(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 842,
        );
    }

    #[Depends('testAssertReturn824')]
    public function testAssertReturn825(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 843,
        );
    }

    #[Depends('testAssertReturn825')]
    public function testAssertReturn826(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 844,
        );
    }

    #[Depends('testAssertReturn826')]
    public function testAssertReturn827(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 845,
        );
    }

    #[Depends('testAssertReturn827')]
    public function testAssertReturn828(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 846,
        );
    }

    #[Depends('testAssertReturn828')]
    public function testAssertReturn829(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 847,
        );
    }

    #[Depends('testAssertReturn829')]
    public function testAssertReturn830(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 848,
        );
    }

    #[Depends('testAssertReturn830')]
    public function testAssertReturn831(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 849,
        );
    }

    #[Depends('testAssertReturn831')]
    public function testAssertReturn832(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 850,
        );
    }

    #[Depends('testAssertReturn832')]
    public function testAssertReturn833(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 851,
        );
    }

    #[Depends('testAssertReturn833')]
    public function testAssertReturn834(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 852,
        );
    }

    #[Depends('testAssertReturn834')]
    public function testAssertReturn835(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 853,
        );
    }

    #[Depends('testAssertReturn835')]
    public function testAssertReturn836(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 854,
        );
    }

    #[Depends('testAssertReturn836')]
    public function testAssertReturn837(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 855,
        );
    }

    #[Depends('testAssertReturn837')]
    public function testAssertReturn838(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 856,
        );
    }

    #[Depends('testAssertReturn838')]
    public function testAssertReturn839(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 857,
        );
    }

    #[Depends('testAssertReturn839')]
    public function testAssertReturn840(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 858,
        );
    }

    #[Depends('testAssertReturn840')]
    public function testAssertReturn841(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 859,
        );
    }

    #[Depends('testAssertReturn841')]
    public function testAssertReturn842(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 860,
        );
    }

    #[Depends('testAssertReturn842')]
    public function testAssertReturn843(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 861,
        );
    }

    #[Depends('testAssertReturn843')]
    public function testAssertReturn844(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 862,
        );
    }

    #[Depends('testAssertReturn844')]
    public function testAssertReturn845(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 863,
        );
    }

    #[Depends('testAssertReturn845')]
    public function testAssertReturn846(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 864,
        );
    }

    #[Depends('testAssertReturn846')]
    public function testAssertReturn847(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 865,
        );
    }

    #[Depends('testAssertReturn847')]
    public function testAssertReturn848(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 866,
        );
    }

    #[Depends('testAssertReturn848')]
    public function testAssertReturn849(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 867,
        );
    }

    #[Depends('testAssertReturn849')]
    public function testAssertReturn850(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 868,
        );
    }

    #[Depends('testAssertReturn850')]
    public function testAssertReturn851(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 869,
        );
    }

    #[Depends('testAssertReturn851')]
    public function testAssertReturn852(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 870,
        );
    }

    #[Depends('testAssertReturn852')]
    public function testAssertReturn853(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 871,
        );
    }

    #[Depends('testAssertReturn853')]
    public function testAssertReturn854(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 872,
        );
    }

    #[Depends('testAssertReturn854')]
    public function testAssertReturn855(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 873,
        );
    }

    #[Depends('testAssertReturn855')]
    public function testAssertReturn856(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 874,
        );
    }

    #[Depends('testAssertReturn856')]
    public function testAssertReturn857(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 875,
        );
    }

    #[Depends('testAssertReturn857')]
    public function testAssertReturn858(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 876,
        );
    }

    #[Depends('testAssertReturn858')]
    public function testAssertReturn859(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 877,
        );
    }

    #[Depends('testAssertReturn859')]
    public function testAssertReturn860(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 878,
        );
    }

    #[Depends('testAssertReturn860')]
    public function testAssertReturn861(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '6']],
            line: 879,
        );
    }

    #[Depends('testAssertReturn861')]
    public function testAssertReturn862(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '2147483654']],
            line: 880,
        );
    }

    #[Depends('testAssertReturn862')]
    public function testAssertReturn863(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '2147483654']],
            line: 881,
        );
    }

    #[Depends('testAssertReturn863')]
    public function testAssertReturn864(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '6']],
            line: 882,
        );
    }

    #[Depends('testAssertReturn864')]
    public function testAssertReturn865(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '889192447']],
            line: 883,
        );
    }

    #[Depends('testAssertReturn865')]
    public function testAssertReturn866(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '3036676095']],
            line: 884,
        );
    }

    #[Depends('testAssertReturn866')]
    public function testAssertReturn867(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '3036676095']],
            line: 885,
        );
    }

    #[Depends('testAssertReturn867')]
    public function testAssertReturn868(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '889192447']],
            line: 886,
        );
    }

    #[Depends('testAssertReturn868')]
    public function testAssertReturn869(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 887,
        );
    }

    #[Depends('testAssertReturn869')]
    public function testAssertReturn870(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 888,
        );
    }

    #[Depends('testAssertReturn870')]
    public function testAssertReturn871(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 889,
        );
    }

    #[Depends('testAssertReturn871')]
    public function testAssertReturn872(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 890,
        );
    }

    #[Depends('testAssertReturn872')]
    public function testAssertReturn873(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 891,
        );
    }

    #[Depends('testAssertReturn873')]
    public function testAssertReturn874(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 892,
        );
    }

    #[Depends('testAssertReturn874')]
    public function testAssertReturn875(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 893,
        );
    }

    #[Depends('testAssertReturn875')]
    public function testAssertReturn876(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 894,
        );
    }

    #[Depends('testAssertReturn876')]
    public function testAssertReturn877(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 895,
        );
    }

    #[Depends('testAssertReturn877')]
    public function testAssertReturn878(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 896,
        );
    }

    #[Depends('testAssertReturn878')]
    public function testAssertReturn879(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 897,
        );
    }

    #[Depends('testAssertReturn879')]
    public function testAssertReturn880(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 898,
        );
    }

    #[Depends('testAssertReturn880')]
    public function testAssertReturn881(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 899,
        );
    }

    #[Depends('testAssertReturn881')]
    public function testAssertReturn882(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 900,
        );
    }

    #[Depends('testAssertReturn882')]
    public function testAssertReturn883(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 901,
        );
    }

    #[Depends('testAssertReturn883')]
    public function testAssertReturn884(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 902,
        );
    }

    #[Depends('testAssertReturn884')]
    public function testAssertReturn885(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 903,
        );
    }

    #[Depends('testAssertReturn885')]
    public function testAssertReturn886(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 904,
        );
    }

    #[Depends('testAssertReturn886')]
    public function testAssertReturn887(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 905,
        );
    }

    #[Depends('testAssertReturn887')]
    public function testAssertReturn888(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 906,
        );
    }

    #[Depends('testAssertReturn888')]
    public function testAssertReturn889(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 907,
        );
    }

    #[Depends('testAssertReturn889')]
    public function testAssertReturn890(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 908,
        );
    }

    #[Depends('testAssertReturn890')]
    public function testAssertReturn891(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 909,
        );
    }

    #[Depends('testAssertReturn891')]
    public function testAssertReturn892(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 910,
        );
    }

    #[Depends('testAssertReturn892')]
    public function testAssertReturn893(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '4194304']],
            line: 911,
        );
    }

    #[Depends('testAssertReturn893')]
    public function testAssertReturn894(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '2151677952']],
            line: 912,
        );
    }

    #[Depends('testAssertReturn894')]
    public function testAssertReturn895(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2151677952']],
            line: 913,
        );
    }

    #[Depends('testAssertReturn895')]
    public function testAssertReturn896(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '4194304']],
            line: 914,
        );
    }

    #[Depends('testAssertReturn896')]
    public function testAssertReturn897(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 915,
        );
    }

    #[Depends('testAssertReturn897')]
    public function testAssertReturn898(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 916,
        );
    }

    #[Depends('testAssertReturn898')]
    public function testAssertReturn899(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 917,
        );
    }

    #[Depends('testAssertReturn899')]
    public function testAssertReturn900(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 918,
        );
    }

    #[Depends('testAssertReturn900')]
    public function testAssertReturn901(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '29954011']],
            line: 919,
        );
    }

    #[Depends('testAssertReturn901')]
    public function testAssertReturn902(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '2177437659']],
            line: 920,
        );
    }

    #[Depends('testAssertReturn902')]
    public function testAssertReturn903(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '2177437659']],
            line: 921,
        );
    }

    #[Depends('testAssertReturn903')]
    public function testAssertReturn904(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '29954011']],
            line: 922,
        );
    }

    #[Depends('testAssertReturn904')]
    public function testAssertReturn905(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '1082130431']],
            line: 923,
        );
    }

    #[Depends('testAssertReturn905')]
    public function testAssertReturn906(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '3229614079']],
            line: 924,
        );
    }

    #[Depends('testAssertReturn906')]
    public function testAssertReturn907(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '3229614079']],
            line: 925,
        );
    }

    #[Depends('testAssertReturn907')]
    public function testAssertReturn908(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '1082130431']],
            line: 926,
        );
    }

    #[Depends('testAssertReturn908')]
    public function testAssertReturn909(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 927,
        );
    }

    #[Depends('testAssertReturn909')]
    public function testAssertReturn910(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 928,
        );
    }

    #[Depends('testAssertReturn910')]
    public function testAssertReturn911(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 929,
        );
    }

    #[Depends('testAssertReturn911')]
    public function testAssertReturn912(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 930,
        );
    }

    #[Depends('testAssertReturn912')]
    public function testAssertReturn913(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 931,
        );
    }

    #[Depends('testAssertReturn913')]
    public function testAssertReturn914(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 932,
        );
    }

    #[Depends('testAssertReturn914')]
    public function testAssertReturn915(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 933,
        );
    }

    #[Depends('testAssertReturn915')]
    public function testAssertReturn916(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 934,
        );
    }

    #[Depends('testAssertReturn916')]
    public function testAssertReturn917(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 935,
        );
    }

    #[Depends('testAssertReturn917')]
    public function testAssertReturn918(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 936,
        );
    }

    #[Depends('testAssertReturn918')]
    public function testAssertReturn919(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 937,
        );
    }

    #[Depends('testAssertReturn919')]
    public function testAssertReturn920(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 938,
        );
    }

    #[Depends('testAssertReturn920')]
    public function testAssertReturn921(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 939,
        );
    }

    #[Depends('testAssertReturn921')]
    public function testAssertReturn922(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 940,
        );
    }

    #[Depends('testAssertReturn922')]
    public function testAssertReturn923(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 941,
        );
    }

    #[Depends('testAssertReturn923')]
    public function testAssertReturn924(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 942,
        );
    }

    #[Depends('testAssertReturn924')]
    public function testAssertReturn925(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 943,
        );
    }

    #[Depends('testAssertReturn925')]
    public function testAssertReturn926(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 944,
        );
    }

    #[Depends('testAssertReturn926')]
    public function testAssertReturn927(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 945,
        );
    }

    #[Depends('testAssertReturn927')]
    public function testAssertReturn928(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 946,
        );
    }

    #[Depends('testAssertReturn928')]
    public function testAssertReturn929(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '4194304']],
            line: 947,
        );
    }

    #[Depends('testAssertReturn929')]
    public function testAssertReturn930(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2151677952']],
            line: 948,
        );
    }

    #[Depends('testAssertReturn930')]
    public function testAssertReturn931(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2151677952']],
            line: 949,
        );
    }

    #[Depends('testAssertReturn931')]
    public function testAssertReturn932(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '4194304']],
            line: 950,
        );
    }

    #[Depends('testAssertReturn932')]
    public function testAssertReturn933(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '1048576000']],
            line: 951,
        );
    }

    #[Depends('testAssertReturn933')]
    public function testAssertReturn934(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '3196059648']],
            line: 952,
        );
    }

    #[Depends('testAssertReturn934')]
    public function testAssertReturn935(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3196059648']],
            line: 953,
        );
    }

    #[Depends('testAssertReturn935')]
    public function testAssertReturn936(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1048576000']],
            line: 954,
        );
    }

    #[Depends('testAssertReturn936')]
    public function testAssertReturn937(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 955,
        );
    }

    #[Depends('testAssertReturn937')]
    public function testAssertReturn938(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 956,
        );
    }

    #[Depends('testAssertReturn938')]
    public function testAssertReturn939(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 957,
        );
    }

    #[Depends('testAssertReturn939')]
    public function testAssertReturn940(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 958,
        );
    }

    #[Depends('testAssertReturn940')]
    public function testAssertReturn941(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '1078530011']],
            line: 959,
        );
    }

    #[Depends('testAssertReturn941')]
    public function testAssertReturn942(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '3226013659']],
            line: 960,
        );
    }

    #[Depends('testAssertReturn942')]
    public function testAssertReturn943(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3226013659']],
            line: 961,
        );
    }

    #[Depends('testAssertReturn943')]
    public function testAssertReturn944(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1078530011']],
            line: 962,
        );
    }

    #[Depends('testAssertReturn944')]
    public function testAssertReturn945(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2130706431']],
            line: 963,
        );
    }

    #[Depends('testAssertReturn945')]
    public function testAssertReturn946(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '4278190079']],
            line: 964,
        );
    }

    #[Depends('testAssertReturn946')]
    public function testAssertReturn947(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4278190079']],
            line: 965,
        );
    }

    #[Depends('testAssertReturn947')]
    public function testAssertReturn948(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2130706431']],
            line: 966,
        );
    }

    #[Depends('testAssertReturn948')]
    public function testAssertReturn949(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 967,
        );
    }

    #[Depends('testAssertReturn949')]
    public function testAssertReturn950(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 968,
        );
    }

    #[Depends('testAssertReturn950')]
    public function testAssertReturn951(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 969,
        );
    }

    #[Depends('testAssertReturn951')]
    public function testAssertReturn952(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 970,
        );
    }

    #[Depends('testAssertReturn952')]
    public function testAssertReturn953(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 971,
        );
    }

    #[Depends('testAssertReturn953')]
    public function testAssertReturn954(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 972,
        );
    }

    #[Depends('testAssertReturn954')]
    public function testAssertReturn955(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 973,
        );
    }

    #[Depends('testAssertReturn955')]
    public function testAssertReturn956(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 974,
        );
    }

    #[Depends('testAssertReturn956')]
    public function testAssertReturn957(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 975,
        );
    }

    #[Depends('testAssertReturn957')]
    public function testAssertReturn958(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 976,
        );
    }

    #[Depends('testAssertReturn958')]
    public function testAssertReturn959(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 977,
        );
    }

    #[Depends('testAssertReturn959')]
    public function testAssertReturn960(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 978,
        );
    }

    #[Depends('testAssertReturn960')]
    public function testAssertReturn961(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 979,
        );
    }

    #[Depends('testAssertReturn961')]
    public function testAssertReturn962(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 980,
        );
    }

    #[Depends('testAssertReturn962')]
    public function testAssertReturn963(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 981,
        );
    }

    #[Depends('testAssertReturn963')]
    public function testAssertReturn964(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 982,
        );
    }

    #[Depends('testAssertReturn964')]
    public function testAssertReturn965(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 983,
        );
    }

    #[Depends('testAssertReturn965')]
    public function testAssertReturn966(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 984,
        );
    }

    #[Depends('testAssertReturn966')]
    public function testAssertReturn967(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 985,
        );
    }

    #[Depends('testAssertReturn967')]
    public function testAssertReturn968(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 986,
        );
    }

    #[Depends('testAssertReturn968')]
    public function testAssertReturn969(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 987,
        );
    }

    #[Depends('testAssertReturn969')]
    public function testAssertReturn970(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 988,
        );
    }

    #[Depends('testAssertReturn970')]
    public function testAssertReturn971(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 989,
        );
    }

    #[Depends('testAssertReturn971')]
    public function testAssertReturn972(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 990,
        );
    }

    #[Depends('testAssertReturn972')]
    public function testAssertReturn973(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 991,
        );
    }

    #[Depends('testAssertReturn973')]
    public function testAssertReturn974(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 992,
        );
    }

    #[Depends('testAssertReturn974')]
    public function testAssertReturn975(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 993,
        );
    }

    #[Depends('testAssertReturn975')]
    public function testAssertReturn976(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 994,
        );
    }

    #[Depends('testAssertReturn976')]
    public function testAssertReturn977(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 995,
        );
    }

    #[Depends('testAssertReturn977')]
    public function testAssertReturn978(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 996,
        );
    }

    #[Depends('testAssertReturn978')]
    public function testAssertReturn979(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 997,
        );
    }

    #[Depends('testAssertReturn979')]
    public function testAssertReturn980(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 998,
        );
    }

    #[Depends('testAssertReturn980')]
    public function testAssertReturn981(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 999,
        );
    }

    #[Depends('testAssertReturn981')]
    public function testAssertReturn982(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 1000,
        );
    }

    #[Depends('testAssertReturn982')]
    public function testAssertReturn983(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 1001,
        );
    }

    #[Depends('testAssertReturn983')]
    public function testAssertReturn984(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 1002,
        );
    }

    #[Depends('testAssertReturn984')]
    public function testAssertReturn985(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 1003,
        );
    }

    #[Depends('testAssertReturn985')]
    public function testAssertReturn986(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1004,
        );
    }

    #[Depends('testAssertReturn986')]
    public function testAssertReturn987(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1005,
        );
    }

    #[Depends('testAssertReturn987')]
    public function testAssertReturn988(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 1006,
        );
    }

    #[Depends('testAssertReturn988')]
    public function testAssertReturn989(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1007,
        );
    }

    #[Depends('testAssertReturn989')]
    public function testAssertReturn990(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1008,
        );
    }

    #[Depends('testAssertReturn990')]
    public function testAssertReturn991(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1009,
        );
    }

    #[Depends('testAssertReturn991')]
    public function testAssertReturn992(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1010,
        );
    }

    #[Depends('testAssertReturn992')]
    public function testAssertReturn993(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1011,
        );
    }

    #[Depends('testAssertReturn993')]
    public function testAssertReturn994(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1012,
        );
    }

    #[Depends('testAssertReturn994')]
    public function testAssertReturn995(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1013,
        );
    }

    #[Depends('testAssertReturn995')]
    public function testAssertReturn996(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1014,
        );
    }

    #[Depends('testAssertReturn996')]
    public function testAssertReturn997(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1015,
        );
    }

    #[Depends('testAssertReturn997')]
    public function testAssertReturn998(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1016,
        );
    }

    #[Depends('testAssertReturn998')]
    public function testAssertReturn999(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1017,
        );
    }

    #[Depends('testAssertReturn999')]
    public function testAssertReturn1000(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1018,
        );
    }

    #[Depends('testAssertReturn1000')]
    public function testAssertReturn1001(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1019,
        );
    }

    #[Depends('testAssertReturn1001')]
    public function testAssertReturn1002(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1020,
        );
    }

    #[Depends('testAssertReturn1002')]
    public function testAssertReturn1003(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1021,
        );
    }

    #[Depends('testAssertReturn1003')]
    public function testAssertReturn1004(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1022,
        );
    }

    #[Depends('testAssertReturn1004')]
    public function testAssertReturn1005(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '6']],
            line: 1023,
        );
    }

    #[Depends('testAssertReturn1005')]
    public function testAssertReturn1006(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2147483654']],
            line: 1024,
        );
    }

    #[Depends('testAssertReturn1006')]
    public function testAssertReturn1007(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483654']],
            line: 1025,
        );
    }

    #[Depends('testAssertReturn1007')]
    public function testAssertReturn1008(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '6']],
            line: 1026,
        );
    }

    #[Depends('testAssertReturn1008')]
    public function testAssertReturn1009(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '29954011']],
            line: 1027,
        );
    }

    #[Depends('testAssertReturn1009')]
    public function testAssertReturn1010(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2177437659']],
            line: 1028,
        );
    }

    #[Depends('testAssertReturn1010')]
    public function testAssertReturn1011(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2177437659']],
            line: 1029,
        );
    }

    #[Depends('testAssertReturn1011')]
    public function testAssertReturn1012(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '29954011']],
            line: 1030,
        );
    }

    #[Depends('testAssertReturn1012')]
    public function testAssertReturn1013(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '1078530011']],
            line: 1031,
        );
    }

    #[Depends('testAssertReturn1013')]
    public function testAssertReturn1014(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '3226013659']],
            line: 1032,
        );
    }

    #[Depends('testAssertReturn1014')]
    public function testAssertReturn1015(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3226013659']],
            line: 1033,
        );
    }

    #[Depends('testAssertReturn1015')]
    public function testAssertReturn1016(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1078530011']],
            line: 1034,
        );
    }

    #[Depends('testAssertReturn1016')]
    public function testAssertReturn1017(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 1035,
        );
    }

    #[Depends('testAssertReturn1017')]
    public function testAssertReturn1018(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 1036,
        );
    }

    #[Depends('testAssertReturn1018')]
    public function testAssertReturn1019(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 1037,
        );
    }

    #[Depends('testAssertReturn1019')]
    public function testAssertReturn1020(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 1038,
        );
    }

    #[Depends('testAssertReturn1020')]
    public function testAssertReturn1021(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '1109256679']],
            line: 1039,
        );
    }

    #[Depends('testAssertReturn1021')]
    public function testAssertReturn1022(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '3256740327']],
            line: 1040,
        );
    }

    #[Depends('testAssertReturn1022')]
    public function testAssertReturn1023(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3256740327']],
            line: 1041,
        );
    }

    #[Depends('testAssertReturn1023')]
    public function testAssertReturn1024(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1109256679']],
            line: 1042,
        );
    }

    #[Depends('testAssertReturn1024')]
    public function testAssertReturn1025(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1043,
        );
    }

    #[Depends('testAssertReturn1025')]
    public function testAssertReturn1026(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1044,
        );
    }

    #[Depends('testAssertReturn1026')]
    public function testAssertReturn1027(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1045,
        );
    }

    #[Depends('testAssertReturn1027')]
    public function testAssertReturn1028(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1046,
        );
    }

    #[Depends('testAssertReturn1028')]
    public function testAssertReturn1029(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1047,
        );
    }

    #[Depends('testAssertReturn1029')]
    public function testAssertReturn1030(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1048,
        );
    }

    #[Depends('testAssertReturn1030')]
    public function testAssertReturn1031(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1049,
        );
    }

    #[Depends('testAssertReturn1031')]
    public function testAssertReturn1032(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1050,
        );
    }

    #[Depends('testAssertReturn1032')]
    public function testAssertReturn1033(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1051,
        );
    }

    #[Depends('testAssertReturn1033')]
    public function testAssertReturn1034(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1052,
        );
    }

    #[Depends('testAssertReturn1034')]
    public function testAssertReturn1035(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1053,
        );
    }

    #[Depends('testAssertReturn1035')]
    public function testAssertReturn1036(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1054,
        );
    }

    #[Depends('testAssertReturn1036')]
    public function testAssertReturn1037(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1055,
        );
    }

    #[Depends('testAssertReturn1037')]
    public function testAssertReturn1038(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1056,
        );
    }

    #[Depends('testAssertReturn1038')]
    public function testAssertReturn1039(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1057,
        );
    }

    #[Depends('testAssertReturn1039')]
    public function testAssertReturn1040(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1058,
        );
    }

    #[Depends('testAssertReturn1040')]
    public function testAssertReturn1041(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1059,
        );
    }

    #[Depends('testAssertReturn1041')]
    public function testAssertReturn1042(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1060,
        );
    }

    #[Depends('testAssertReturn1042')]
    public function testAssertReturn1043(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1061,
        );
    }

    #[Depends('testAssertReturn1043')]
    public function testAssertReturn1044(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1062,
        );
    }

    #[Depends('testAssertReturn1044')]
    public function testAssertReturn1045(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '889192447']],
            line: 1063,
        );
    }

    #[Depends('testAssertReturn1045')]
    public function testAssertReturn1046(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '3036676095']],
            line: 1064,
        );
    }

    #[Depends('testAssertReturn1046')]
    public function testAssertReturn1047(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '3036676095']],
            line: 1065,
        );
    }

    #[Depends('testAssertReturn1047')]
    public function testAssertReturn1048(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '889192447']],
            line: 1066,
        );
    }

    #[Depends('testAssertReturn1048')]
    public function testAssertReturn1049(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '1082130431']],
            line: 1067,
        );
    }

    #[Depends('testAssertReturn1049')]
    public function testAssertReturn1050(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '3229614079']],
            line: 1068,
        );
    }

    #[Depends('testAssertReturn1050')]
    public function testAssertReturn1051(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '3229614079']],
            line: 1069,
        );
    }

    #[Depends('testAssertReturn1051')]
    public function testAssertReturn1052(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '1082130431']],
            line: 1070,
        );
    }

    #[Depends('testAssertReturn1052')]
    public function testAssertReturn1053(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2130706431']],
            line: 1071,
        );
    }

    #[Depends('testAssertReturn1053')]
    public function testAssertReturn1054(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '4278190079']],
            line: 1072,
        );
    }

    #[Depends('testAssertReturn1054')]
    public function testAssertReturn1055(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '4278190079']],
            line: 1073,
        );
    }

    #[Depends('testAssertReturn1055')]
    public function testAssertReturn1056(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '2130706431']],
            line: 1074,
        );
    }

    #[Depends('testAssertReturn1056')]
    public function testAssertReturn1057(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 1075,
        );
    }

    #[Depends('testAssertReturn1057')]
    public function testAssertReturn1058(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1076,
        );
    }

    #[Depends('testAssertReturn1058')]
    public function testAssertReturn1059(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1077,
        );
    }

    #[Depends('testAssertReturn1059')]
    public function testAssertReturn1060(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 1078,
        );
    }

    #[Depends('testAssertReturn1060')]
    public function testAssertReturn1061(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1079,
        );
    }

    #[Depends('testAssertReturn1061')]
    public function testAssertReturn1062(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1080,
        );
    }

    #[Depends('testAssertReturn1062')]
    public function testAssertReturn1063(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1081,
        );
    }

    #[Depends('testAssertReturn1063')]
    public function testAssertReturn1064(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1082,
        );
    }

    #[Depends('testAssertReturn1064')]
    public function testAssertReturn1065(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1083,
        );
    }

    #[Depends('testAssertReturn1065')]
    public function testAssertReturn1066(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1084,
        );
    }

    #[Depends('testAssertReturn1066')]
    public function testAssertReturn1067(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1085,
        );
    }

    #[Depends('testAssertReturn1067')]
    public function testAssertReturn1068(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1086,
        );
    }

    #[Depends('testAssertReturn1068')]
    public function testAssertReturn1069(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1087,
        );
    }

    #[Depends('testAssertReturn1069')]
    public function testAssertReturn1070(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1088,
        );
    }

    #[Depends('testAssertReturn1070')]
    public function testAssertReturn1071(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1089,
        );
    }

    #[Depends('testAssertReturn1071')]
    public function testAssertReturn1072(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1090,
        );
    }

    #[Depends('testAssertReturn1072')]
    public function testAssertReturn1073(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1091,
        );
    }

    #[Depends('testAssertReturn1073')]
    public function testAssertReturn1074(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1092,
        );
    }

    #[Depends('testAssertReturn1074')]
    public function testAssertReturn1075(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1093,
        );
    }

    #[Depends('testAssertReturn1075')]
    public function testAssertReturn1076(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1094,
        );
    }

    #[Depends('testAssertReturn1076')]
    public function testAssertReturn1077(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1095,
        );
    }

    #[Depends('testAssertReturn1077')]
    public function testAssertReturn1078(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1096,
        );
    }

    #[Depends('testAssertReturn1078')]
    public function testAssertReturn1079(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1097,
        );
    }

    #[Depends('testAssertReturn1079')]
    public function testAssertReturn1080(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1098,
        );
    }

    #[Depends('testAssertReturn1080')]
    public function testAssertReturn1081(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1099,
        );
    }

    #[Depends('testAssertReturn1081')]
    public function testAssertReturn1082(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1100,
        );
    }

    #[Depends('testAssertReturn1082')]
    public function testAssertReturn1083(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1101,
        );
    }

    #[Depends('testAssertReturn1083')]
    public function testAssertReturn1084(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1102,
        );
    }

    #[Depends('testAssertReturn1084')]
    public function testAssertReturn1085(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1103,
        );
    }

    #[Depends('testAssertReturn1085')]
    public function testAssertReturn1086(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1104,
        );
    }

    #[Depends('testAssertReturn1086')]
    public function testAssertReturn1087(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1105,
        );
    }

    #[Depends('testAssertReturn1087')]
    public function testAssertReturn1088(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1106,
        );
    }

    #[Depends('testAssertReturn1088')]
    public function testAssertReturn1089(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1107,
        );
    }

    #[Depends('testAssertReturn1089')]
    public function testAssertReturn1090(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1108,
        );
    }

    #[Depends('testAssertReturn1090')]
    public function testAssertReturn1091(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1109,
        );
    }

    #[Depends('testAssertReturn1091')]
    public function testAssertReturn1092(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1110,
        );
    }

    #[Depends('testAssertReturn1092')]
    public function testAssertReturn1093(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1111,
        );
    }

    #[Depends('testAssertReturn1093')]
    public function testAssertReturn1094(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1112,
        );
    }

    #[Depends('testAssertReturn1094')]
    public function testAssertReturn1095(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1113,
        );
    }

    #[Depends('testAssertReturn1095')]
    public function testAssertReturn1096(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1114,
        );
    }

    #[Depends('testAssertReturn1096')]
    public function testAssertReturn1097(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1115,
        );
    }

    #[Depends('testAssertReturn1097')]
    public function testAssertReturn1098(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1116,
        );
    }

    #[Depends('testAssertReturn1098')]
    public function testAssertReturn1099(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1117,
        );
    }

    #[Depends('testAssertReturn1099')]
    public function testAssertReturn1100(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1118,
        );
    }

    #[Depends('testAssertReturn1100')]
    public function testAssertReturn1101(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1119,
        );
    }

    #[Depends('testAssertReturn1101')]
    public function testAssertReturn1102(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1120,
        );
    }

    #[Depends('testAssertReturn1102')]
    public function testAssertReturn1103(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1121,
        );
    }

    #[Depends('testAssertReturn1103')]
    public function testAssertReturn1104(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1122,
        );
    }

    #[Depends('testAssertReturn1104')]
    public function testAssertReturn1105(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1123,
        );
    }

    #[Depends('testAssertReturn1105')]
    public function testAssertReturn1106(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1124,
        );
    }

    #[Depends('testAssertReturn1106')]
    public function testAssertReturn1107(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1125,
        );
    }

    #[Depends('testAssertReturn1107')]
    public function testAssertReturn1108(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1126,
        );
    }

    #[Depends('testAssertReturn1108')]
    public function testAssertReturn1109(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1127,
        );
    }

    #[Depends('testAssertReturn1109')]
    public function testAssertReturn1110(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1128,
        );
    }

    #[Depends('testAssertReturn1110')]
    public function testAssertReturn1111(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1129,
        );
    }

    #[Depends('testAssertReturn1111')]
    public function testAssertReturn1112(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1130,
        );
    }

    #[Depends('testAssertReturn1112')]
    public function testAssertReturn1113(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1131,
        );
    }

    #[Depends('testAssertReturn1113')]
    public function testAssertReturn1114(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1132,
        );
    }

    #[Depends('testAssertReturn1114')]
    public function testAssertReturn1115(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1133,
        );
    }

    #[Depends('testAssertReturn1115')]
    public function testAssertReturn1116(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1134,
        );
    }

    #[Depends('testAssertReturn1116')]
    public function testAssertReturn1117(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1135,
        );
    }

    #[Depends('testAssertReturn1117')]
    public function testAssertReturn1118(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1136,
        );
    }

    #[Depends('testAssertReturn1118')]
    public function testAssertReturn1119(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1137,
        );
    }

    #[Depends('testAssertReturn1119')]
    public function testAssertReturn1120(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1138,
        );
    }

    #[Depends('testAssertReturn1120')]
    public function testAssertReturn1121(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1139,
        );
    }

    #[Depends('testAssertReturn1121')]
    public function testAssertReturn1122(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1140,
        );
    }

    #[Depends('testAssertReturn1122')]
    public function testAssertReturn1123(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1141,
        );
    }

    #[Depends('testAssertReturn1123')]
    public function testAssertReturn1124(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1142,
        );
    }

    #[Depends('testAssertReturn1124')]
    public function testAssertReturn1125(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1143,
        );
    }

    #[Depends('testAssertReturn1125')]
    public function testAssertReturn1126(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1144,
        );
    }

    #[Depends('testAssertReturn1126')]
    public function testAssertReturn1127(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1145,
        );
    }

    #[Depends('testAssertReturn1127')]
    public function testAssertReturn1128(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1146,
        );
    }

    #[Depends('testAssertReturn1128')]
    public function testAssertReturn1129(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1147,
        );
    }

    #[Depends('testAssertReturn1129')]
    public function testAssertReturn1130(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1148,
        );
    }

    #[Depends('testAssertReturn1130')]
    public function testAssertReturn1131(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1149,
        );
    }

    #[Depends('testAssertReturn1131')]
    public function testAssertReturn1132(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1150,
        );
    }

    #[Depends('testAssertReturn1132')]
    public function testAssertReturn1133(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1151,
        );
    }

    #[Depends('testAssertReturn1133')]
    public function testAssertReturn1134(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1152,
        );
    }

    #[Depends('testAssertReturn1134')]
    public function testAssertReturn1135(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1153,
        );
    }

    #[Depends('testAssertReturn1135')]
    public function testAssertReturn1136(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1154,
        );
    }

    #[Depends('testAssertReturn1136')]
    public function testAssertReturn1137(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1155,
        );
    }

    #[Depends('testAssertReturn1137')]
    public function testAssertReturn1138(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1156,
        );
    }

    #[Depends('testAssertReturn1138')]
    public function testAssertReturn1139(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1157,
        );
    }

    #[Depends('testAssertReturn1139')]
    public function testAssertReturn1140(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1158,
        );
    }

    #[Depends('testAssertReturn1140')]
    public function testAssertReturn1141(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1159,
        );
    }

    #[Depends('testAssertReturn1141')]
    public function testAssertReturn1142(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1160,
        );
    }

    #[Depends('testAssertReturn1142')]
    public function testAssertReturn1143(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1161,
        );
    }

    #[Depends('testAssertReturn1143')]
    public function testAssertReturn1144(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1162,
        );
    }

    #[Depends('testAssertReturn1144')]
    public function testAssertReturn1145(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1163,
        );
    }

    #[Depends('testAssertReturn1145')]
    public function testAssertReturn1146(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1164,
        );
    }

    #[Depends('testAssertReturn1146')]
    public function testAssertReturn1147(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1165,
        );
    }

    #[Depends('testAssertReturn1147')]
    public function testAssertReturn1148(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1166,
        );
    }

    #[Depends('testAssertReturn1148')]
    public function testAssertReturn1149(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1167,
        );
    }

    #[Depends('testAssertReturn1149')]
    public function testAssertReturn1150(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1168,
        );
    }

    #[Depends('testAssertReturn1150')]
    public function testAssertReturn1151(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1169,
        );
    }

    #[Depends('testAssertReturn1151')]
    public function testAssertReturn1152(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1170,
        );
    }

    #[Depends('testAssertReturn1152')]
    public function testAssertReturn1153(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1171,
        );
    }

    #[Depends('testAssertReturn1153')]
    public function testAssertReturn1154(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1172,
        );
    }

    #[Depends('testAssertReturn1154')]
    public function testAssertReturn1155(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1173,
        );
    }

    #[Depends('testAssertReturn1155')]
    public function testAssertReturn1156(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1174,
        );
    }

    #[Depends('testAssertReturn1156')]
    public function testAssertReturn1157(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1175,
        );
    }

    #[Depends('testAssertReturn1157')]
    public function testAssertReturn1158(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1176,
        );
    }

    #[Depends('testAssertReturn1158')]
    public function testAssertReturn1159(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1177,
        );
    }

    #[Depends('testAssertReturn1159')]
    public function testAssertReturn1160(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1178,
        );
    }

    #[Depends('testAssertReturn1160')]
    public function testAssertReturn1161(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1179,
        );
    }

    #[Depends('testAssertReturn1161')]
    public function testAssertReturn1162(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1180,
        );
    }

    #[Depends('testAssertReturn1162')]
    public function testAssertReturn1163(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1181,
        );
    }

    #[Depends('testAssertReturn1163')]
    public function testAssertReturn1164(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1182,
        );
    }

    #[Depends('testAssertReturn1164')]
    public function testAssertReturn1165(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1183,
        );
    }

    #[Depends('testAssertReturn1165')]
    public function testAssertReturn1166(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1184,
        );
    }

    #[Depends('testAssertReturn1166')]
    public function testAssertReturn1167(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1185,
        );
    }

    #[Depends('testAssertReturn1167')]
    public function testAssertReturn1168(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1186,
        );
    }

    #[Depends('testAssertReturn1168')]
    public function testAssertReturn1169(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1187,
        );
    }

    #[Depends('testAssertReturn1169')]
    public function testAssertReturn1170(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1188,
        );
    }

    #[Depends('testAssertReturn1170')]
    public function testAssertReturn1171(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1189,
        );
    }

    #[Depends('testAssertReturn1171')]
    public function testAssertReturn1172(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1190,
        );
    }

    #[Depends('testAssertReturn1172')]
    public function testAssertReturn1173(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1191,
        );
    }

    #[Depends('testAssertReturn1173')]
    public function testAssertReturn1174(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1192,
        );
    }

    #[Depends('testAssertReturn1174')]
    public function testAssertReturn1175(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1193,
        );
    }

    #[Depends('testAssertReturn1175')]
    public function testAssertReturn1176(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1194,
        );
    }

    #[Depends('testAssertReturn1176')]
    public function testAssertReturn1177(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1195,
        );
    }

    #[Depends('testAssertReturn1177')]
    public function testAssertReturn1178(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1196,
        );
    }

    #[Depends('testAssertReturn1178')]
    public function testAssertReturn1179(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1197,
        );
    }

    #[Depends('testAssertReturn1179')]
    public function testAssertReturn1180(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1198,
        );
    }

    #[Depends('testAssertReturn1180')]
    public function testAssertReturn1181(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1199,
        );
    }

    #[Depends('testAssertReturn1181')]
    public function testAssertReturn1182(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1200,
        );
    }

    #[Depends('testAssertReturn1182')]
    public function testAssertReturn1183(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1201,
        );
    }

    #[Depends('testAssertReturn1183')]
    public function testAssertReturn1184(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1202,
        );
    }

    #[Depends('testAssertReturn1184')]
    public function testAssertReturn1185(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1203,
        );
    }

    #[Depends('testAssertReturn1185')]
    public function testAssertReturn1186(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1204,
        );
    }

    #[Depends('testAssertReturn1186')]
    public function testAssertReturn1187(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1205,
        );
    }

    #[Depends('testAssertReturn1187')]
    public function testAssertReturn1188(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1206,
        );
    }

    #[Depends('testAssertReturn1188')]
    public function testAssertReturn1189(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1207,
        );
    }

    #[Depends('testAssertReturn1189')]
    public function testAssertReturn1190(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1208,
        );
    }

    #[Depends('testAssertReturn1190')]
    public function testAssertReturn1191(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1209,
        );
    }

    #[Depends('testAssertReturn1191')]
    public function testAssertReturn1192(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1210,
        );
    }

    #[Depends('testAssertReturn1192')]
    public function testAssertReturn1193(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1211,
        );
    }

    #[Depends('testAssertReturn1193')]
    public function testAssertReturn1194(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1212,
        );
    }

    #[Depends('testAssertReturn1194')]
    public function testAssertReturn1195(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1213,
        );
    }

    #[Depends('testAssertReturn1195')]
    public function testAssertReturn1196(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1214,
        );
    }

    #[Depends('testAssertReturn1196')]
    public function testAssertReturn1197(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1215,
        );
    }

    #[Depends('testAssertReturn1197')]
    public function testAssertReturn1198(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1216,
        );
    }

    #[Depends('testAssertReturn1198')]
    public function testAssertReturn1199(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1217,
        );
    }

    #[Depends('testAssertReturn1199')]
    public function testAssertReturn1200(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1218,
        );
    }

    #[Depends('testAssertReturn1200')]
    public function testAssertReturn1201(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1219,
        );
    }

    #[Depends('testAssertReturn1201')]
    public function testAssertReturn1202(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1220,
        );
    }

    #[Depends('testAssertReturn1202')]
    public function testAssertReturn1203(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1221,
        );
    }

    #[Depends('testAssertReturn1203')]
    public function testAssertReturn1204(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1222,
        );
    }

    #[Depends('testAssertReturn1204')]
    public function testAssertReturn1205(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1223,
        );
    }

    #[Depends('testAssertReturn1205')]
    public function testAssertReturn1206(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1224,
        );
    }

    #[Depends('testAssertReturn1206')]
    public function testAssertReturn1207(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1225,
        );
    }

    #[Depends('testAssertReturn1207')]
    public function testAssertReturn1208(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1226,
        );
    }

    #[Depends('testAssertReturn1208')]
    public function testAssertReturn1209(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1227,
        );
    }

    #[Depends('testAssertReturn1209')]
    public function testAssertReturn1210(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1228,
        );
    }

    #[Depends('testAssertReturn1210')]
    public function testAssertReturn1211(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1229,
        );
    }

    #[Depends('testAssertReturn1211')]
    public function testAssertReturn1212(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1230,
        );
    }

    #[Depends('testAssertReturn1212')]
    public function testAssertReturn1213(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1231,
        );
    }

    #[Depends('testAssertReturn1213')]
    public function testAssertReturn1214(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1232,
        );
    }

    #[Depends('testAssertReturn1214')]
    public function testAssertReturn1215(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1233,
        );
    }

    #[Depends('testAssertReturn1215')]
    public function testAssertReturn1216(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1234,
        );
    }

    #[Depends('testAssertReturn1216')]
    public function testAssertReturn1217(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1235,
        );
    }

    #[Depends('testAssertReturn1217')]
    public function testAssertReturn1218(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1236,
        );
    }

    #[Depends('testAssertReturn1218')]
    public function testAssertReturn1219(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1237,
        );
    }

    #[Depends('testAssertReturn1219')]
    public function testAssertReturn1220(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1238,
        );
    }

    #[Depends('testAssertReturn1220')]
    public function testAssertReturn1221(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1239,
        );
    }

    #[Depends('testAssertReturn1221')]
    public function testAssertReturn1222(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1240,
        );
    }

    #[Depends('testAssertReturn1222')]
    public function testAssertReturn1223(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1241,
        );
    }

    #[Depends('testAssertReturn1223')]
    public function testAssertReturn1224(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1242,
        );
    }

    #[Depends('testAssertReturn1224')]
    public function testAssertReturn1225(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1243,
        );
    }

    #[Depends('testAssertReturn1225')]
    public function testAssertReturn1226(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1244,
        );
    }

    #[Depends('testAssertReturn1226')]
    public function testAssertReturn1227(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1245,
        );
    }

    #[Depends('testAssertReturn1227')]
    public function testAssertReturn1228(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1246,
        );
    }

    #[Depends('testAssertReturn1228')]
    public function testAssertReturn1229(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1247,
        );
    }

    #[Depends('testAssertReturn1229')]
    public function testAssertReturn1230(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1248,
        );
    }

    #[Depends('testAssertReturn1230')]
    public function testAssertReturn1231(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1249,
        );
    }

    #[Depends('testAssertReturn1231')]
    public function testAssertReturn1232(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1250,
        );
    }

    #[Depends('testAssertReturn1232')]
    public function testAssertReturn1233(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1251,
        );
    }

    #[Depends('testAssertReturn1233')]
    public function testAssertReturn1234(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1252,
        );
    }

    #[Depends('testAssertReturn1234')]
    public function testAssertReturn1235(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1253,
        );
    }

    #[Depends('testAssertReturn1235')]
    public function testAssertReturn1236(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1254,
        );
    }

    #[Depends('testAssertReturn1236')]
    public function testAssertReturn1237(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1255,
        );
    }

    #[Depends('testAssertReturn1237')]
    public function testAssertReturn1238(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1256,
        );
    }

    #[Depends('testAssertReturn1238')]
    public function testAssertReturn1239(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1257,
        );
    }

    #[Depends('testAssertReturn1239')]
    public function testAssertReturn1240(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1258,
        );
    }

    #[Depends('testAssertReturn1240')]
    public function testAssertReturn1241(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1259,
        );
    }

    #[Depends('testAssertReturn1241')]
    public function testAssertReturn1242(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1260,
        );
    }

    #[Depends('testAssertReturn1242')]
    public function testAssertReturn1243(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1261,
        );
    }

    #[Depends('testAssertReturn1243')]
    public function testAssertReturn1244(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1262,
        );
    }

    #[Depends('testAssertReturn1244')]
    public function testAssertReturn1245(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 1263,
        );
    }

    #[Depends('testAssertReturn1245')]
    public function testAssertReturn1246(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1264,
        );
    }

    #[Depends('testAssertReturn1246')]
    public function testAssertReturn1247(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1265,
        );
    }

    #[Depends('testAssertReturn1247')]
    public function testAssertReturn1248(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 1266,
        );
    }

    #[Depends('testAssertReturn1248')]
    public function testAssertReturn1249(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '872415232']],
            line: 1267,
        );
    }

    #[Depends('testAssertReturn1249')]
    public function testAssertReturn1250(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '3019898880']],
            line: 1268,
        );
    }

    #[Depends('testAssertReturn1250')]
    public function testAssertReturn1251(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '3019898880']],
            line: 1269,
        );
    }

    #[Depends('testAssertReturn1251')]
    public function testAssertReturn1252(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '872415232']],
            line: 1270,
        );
    }

    #[Depends('testAssertReturn1252')]
    public function testAssertReturn1253(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2']],
            line: 1271,
        );
    }

    #[Depends('testAssertReturn1253')]
    public function testAssertReturn1254(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '2147483650']],
            line: 1272,
        );
    }

    #[Depends('testAssertReturn1254')]
    public function testAssertReturn1255(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2147483650']],
            line: 1273,
        );
    }

    #[Depends('testAssertReturn1255')]
    public function testAssertReturn1256(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '2']],
            line: 1274,
        );
    }

    #[Depends('testAssertReturn1256')]
    public function testAssertReturn1257(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 1275,
        );
    }

    #[Depends('testAssertReturn1257')]
    public function testAssertReturn1258(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 1276,
        );
    }

    #[Depends('testAssertReturn1258')]
    public function testAssertReturn1259(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 1277,
        );
    }

    #[Depends('testAssertReturn1259')]
    public function testAssertReturn1260(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 1278,
        );
    }

    #[Depends('testAssertReturn1260')]
    public function testAssertReturn1261(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1279,
        );
    }

    #[Depends('testAssertReturn1261')]
    public function testAssertReturn1262(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1280,
        );
    }

    #[Depends('testAssertReturn1262')]
    public function testAssertReturn1263(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1281,
        );
    }

    #[Depends('testAssertReturn1263')]
    public function testAssertReturn1264(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1282,
        );
    }

    #[Depends('testAssertReturn1264')]
    public function testAssertReturn1265(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1283,
        );
    }

    #[Depends('testAssertReturn1265')]
    public function testAssertReturn1266(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1284,
        );
    }

    #[Depends('testAssertReturn1266')]
    public function testAssertReturn1267(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1285,
        );
    }

    #[Depends('testAssertReturn1267')]
    public function testAssertReturn1268(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1286,
        );
    }

    #[Depends('testAssertReturn1268')]
    public function testAssertReturn1269(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1287,
        );
    }

    #[Depends('testAssertReturn1269')]
    public function testAssertReturn1270(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1288,
        );
    }

    #[Depends('testAssertReturn1270')]
    public function testAssertReturn1271(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1289,
        );
    }

    #[Depends('testAssertReturn1271')]
    public function testAssertReturn1272(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1290,
        );
    }

    #[Depends('testAssertReturn1272')]
    public function testAssertReturn1273(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1291,
        );
    }

    #[Depends('testAssertReturn1273')]
    public function testAssertReturn1274(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1292,
        );
    }

    #[Depends('testAssertReturn1274')]
    public function testAssertReturn1275(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1293,
        );
    }

    #[Depends('testAssertReturn1275')]
    public function testAssertReturn1276(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1294,
        );
    }

    #[Depends('testAssertReturn1276')]
    public function testAssertReturn1277(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1295,
        );
    }

    #[Depends('testAssertReturn1277')]
    public function testAssertReturn1278(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1296,
        );
    }

    #[Depends('testAssertReturn1278')]
    public function testAssertReturn1279(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1297,
        );
    }

    #[Depends('testAssertReturn1279')]
    public function testAssertReturn1280(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1298,
        );
    }

    #[Depends('testAssertReturn1280')]
    public function testAssertReturn1281(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1299,
        );
    }

    #[Depends('testAssertReturn1281')]
    public function testAssertReturn1282(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1300,
        );
    }

    #[Depends('testAssertReturn1282')]
    public function testAssertReturn1283(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1301,
        );
    }

    #[Depends('testAssertReturn1283')]
    public function testAssertReturn1284(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1302,
        );
    }

    #[Depends('testAssertReturn1284')]
    public function testAssertReturn1285(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '1258291200']],
            line: 1303,
        );
    }

    #[Depends('testAssertReturn1285')]
    public function testAssertReturn1286(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '3405774848']],
            line: 1304,
        );
    }

    #[Depends('testAssertReturn1286')]
    public function testAssertReturn1287(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '3405774848']],
            line: 1305,
        );
    }

    #[Depends('testAssertReturn1287')]
    public function testAssertReturn1288(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1258291200']],
            line: 1306,
        );
    }

    #[Depends('testAssertReturn1288')]
    public function testAssertReturn1289(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 1307,
        );
    }

    #[Depends('testAssertReturn1289')]
    public function testAssertReturn1290(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1308,
        );
    }

    #[Depends('testAssertReturn1290')]
    public function testAssertReturn1291(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1309,
        );
    }

    #[Depends('testAssertReturn1291')]
    public function testAssertReturn1292(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 1310,
        );
    }

    #[Depends('testAssertReturn1292')]
    public function testAssertReturn1293(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '16777216']],
            line: 1311,
        );
    }

    #[Depends('testAssertReturn1293')]
    public function testAssertReturn1294(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '2164260864']],
            line: 1312,
        );
    }

    #[Depends('testAssertReturn1294')]
    public function testAssertReturn1295(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2164260864']],
            line: 1313,
        );
    }

    #[Depends('testAssertReturn1295')]
    public function testAssertReturn1296(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '16777216']],
            line: 1314,
        );
    }

    #[Depends('testAssertReturn1296')]
    public function testAssertReturn1297(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 1315,
        );
    }

    #[Depends('testAssertReturn1297')]
    public function testAssertReturn1298(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 1316,
        );
    }

    #[Depends('testAssertReturn1298')]
    public function testAssertReturn1299(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 1317,
        );
    }

    #[Depends('testAssertReturn1299')]
    public function testAssertReturn1300(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 1318,
        );
    }

    #[Depends('testAssertReturn1300')]
    public function testAssertReturn1301(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '1335088']],
            line: 1319,
        );
    }

    #[Depends('testAssertReturn1301')]
    public function testAssertReturn1302(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '2148818736']],
            line: 1320,
        );
    }

    #[Depends('testAssertReturn1302')]
    public function testAssertReturn1303(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '2148818736']],
            line: 1321,
        );
    }

    #[Depends('testAssertReturn1303')]
    public function testAssertReturn1304(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1335088']],
            line: 1322,
        );
    }

    #[Depends('testAssertReturn1304')]
    public function testAssertReturn1305(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1323,
        );
    }

    #[Depends('testAssertReturn1305')]
    public function testAssertReturn1306(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1324,
        );
    }

    #[Depends('testAssertReturn1306')]
    public function testAssertReturn1307(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1325,
        );
    }

    #[Depends('testAssertReturn1307')]
    public function testAssertReturn1308(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1326,
        );
    }

    #[Depends('testAssertReturn1308')]
    public function testAssertReturn1309(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1327,
        );
    }

    #[Depends('testAssertReturn1309')]
    public function testAssertReturn1310(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1328,
        );
    }

    #[Depends('testAssertReturn1310')]
    public function testAssertReturn1311(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1329,
        );
    }

    #[Depends('testAssertReturn1311')]
    public function testAssertReturn1312(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1330,
        );
    }

    #[Depends('testAssertReturn1312')]
    public function testAssertReturn1313(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1331,
        );
    }

    #[Depends('testAssertReturn1313')]
    public function testAssertReturn1314(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1332,
        );
    }

    #[Depends('testAssertReturn1314')]
    public function testAssertReturn1315(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1333,
        );
    }

    #[Depends('testAssertReturn1315')]
    public function testAssertReturn1316(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1334,
        );
    }

    #[Depends('testAssertReturn1316')]
    public function testAssertReturn1317(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1335,
        );
    }

    #[Depends('testAssertReturn1317')]
    public function testAssertReturn1318(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1336,
        );
    }

    #[Depends('testAssertReturn1318')]
    public function testAssertReturn1319(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1337,
        );
    }

    #[Depends('testAssertReturn1319')]
    public function testAssertReturn1320(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1338,
        );
    }

    #[Depends('testAssertReturn1320')]
    public function testAssertReturn1321(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1339,
        );
    }

    #[Depends('testAssertReturn1321')]
    public function testAssertReturn1322(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1340,
        );
    }

    #[Depends('testAssertReturn1322')]
    public function testAssertReturn1323(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1341,
        );
    }

    #[Depends('testAssertReturn1323')]
    public function testAssertReturn1324(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1342,
        );
    }

    #[Depends('testAssertReturn1324')]
    public function testAssertReturn1325(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1343,
        );
    }

    #[Depends('testAssertReturn1325')]
    public function testAssertReturn1326(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1344,
        );
    }

    #[Depends('testAssertReturn1326')]
    public function testAssertReturn1327(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1345,
        );
    }

    #[Depends('testAssertReturn1327')]
    public function testAssertReturn1328(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1346,
        );
    }

    #[Depends('testAssertReturn1328')]
    public function testAssertReturn1329(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2113929216']],
            line: 1347,
        );
    }

    #[Depends('testAssertReturn1329')]
    public function testAssertReturn1330(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '4261412864']],
            line: 1348,
        );
    }

    #[Depends('testAssertReturn1330')]
    public function testAssertReturn1331(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '4261412864']],
            line: 1349,
        );
    }

    #[Depends('testAssertReturn1331')]
    public function testAssertReturn1332(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2113929216']],
            line: 1350,
        );
    }

    #[Depends('testAssertReturn1332')]
    public function testAssertReturn1333(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 1351,
        );
    }

    #[Depends('testAssertReturn1333')]
    public function testAssertReturn1334(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1352,
        );
    }

    #[Depends('testAssertReturn1334')]
    public function testAssertReturn1335(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1353,
        );
    }

    #[Depends('testAssertReturn1335')]
    public function testAssertReturn1336(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 1354,
        );
    }

    #[Depends('testAssertReturn1336')]
    public function testAssertReturn1337(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 1355,
        );
    }

    #[Depends('testAssertReturn1337')]
    public function testAssertReturn1338(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 1356,
        );
    }

    #[Depends('testAssertReturn1338')]
    public function testAssertReturn1339(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 1357,
        );
    }

    #[Depends('testAssertReturn1339')]
    public function testAssertReturn1340(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 1358,
        );
    }

    #[Depends('testAssertReturn1340')]
    public function testAssertReturn1341(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '1034090883']],
            line: 1359,
        );
    }

    #[Depends('testAssertReturn1341')]
    public function testAssertReturn1342(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '3181574531']],
            line: 1360,
        );
    }

    #[Depends('testAssertReturn1342')]
    public function testAssertReturn1343(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3181574531']],
            line: 1361,
        );
    }

    #[Depends('testAssertReturn1343')]
    public function testAssertReturn1344(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1034090883']],
            line: 1362,
        );
    }

    #[Depends('testAssertReturn1344')]
    public function testAssertReturn1345(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '1048576']],
            line: 1363,
        );
    }

    #[Depends('testAssertReturn1345')]
    public function testAssertReturn1346(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2148532224']],
            line: 1364,
        );
    }

    #[Depends('testAssertReturn1346')]
    public function testAssertReturn1347(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2148532224']],
            line: 1365,
        );
    }

    #[Depends('testAssertReturn1347')]
    public function testAssertReturn1348(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '1048576']],
            line: 1366,
        );
    }

    #[Depends('testAssertReturn1348')]
    public function testAssertReturn1349(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1367,
        );
    }

    #[Depends('testAssertReturn1349')]
    public function testAssertReturn1350(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1368,
        );
    }

    #[Depends('testAssertReturn1350')]
    public function testAssertReturn1351(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1369,
        );
    }

    #[Depends('testAssertReturn1351')]
    public function testAssertReturn1352(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1370,
        );
    }

    #[Depends('testAssertReturn1352')]
    public function testAssertReturn1353(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1371,
        );
    }

    #[Depends('testAssertReturn1353')]
    public function testAssertReturn1354(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1372,
        );
    }

    #[Depends('testAssertReturn1354')]
    public function testAssertReturn1355(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1373,
        );
    }

    #[Depends('testAssertReturn1355')]
    public function testAssertReturn1356(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1374,
        );
    }

    #[Depends('testAssertReturn1356')]
    public function testAssertReturn1357(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1375,
        );
    }

    #[Depends('testAssertReturn1357')]
    public function testAssertReturn1358(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1376,
        );
    }

    #[Depends('testAssertReturn1358')]
    public function testAssertReturn1359(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1377,
        );
    }

    #[Depends('testAssertReturn1359')]
    public function testAssertReturn1360(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1378,
        );
    }

    #[Depends('testAssertReturn1360')]
    public function testAssertReturn1361(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1379,
        );
    }

    #[Depends('testAssertReturn1361')]
    public function testAssertReturn1362(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1380,
        );
    }

    #[Depends('testAssertReturn1362')]
    public function testAssertReturn1363(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1381,
        );
    }

    #[Depends('testAssertReturn1363')]
    public function testAssertReturn1364(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1382,
        );
    }

    #[Depends('testAssertReturn1364')]
    public function testAssertReturn1365(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1383,
        );
    }

    #[Depends('testAssertReturn1365')]
    public function testAssertReturn1366(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1384,
        );
    }

    #[Depends('testAssertReturn1366')]
    public function testAssertReturn1367(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1385,
        );
    }

    #[Depends('testAssertReturn1367')]
    public function testAssertReturn1368(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1386,
        );
    }

    #[Depends('testAssertReturn1368')]
    public function testAssertReturn1369(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2122317824']],
            line: 1387,
        );
    }

    #[Depends('testAssertReturn1369')]
    public function testAssertReturn1370(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '4269801472']],
            line: 1388,
        );
    }

    #[Depends('testAssertReturn1370')]
    public function testAssertReturn1371(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '4269801472']],
            line: 1389,
        );
    }

    #[Depends('testAssertReturn1371')]
    public function testAssertReturn1372(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2122317824']],
            line: 1390,
        );
    }

    #[Depends('testAssertReturn1372')]
    public function testAssertReturn1373(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '1073741824']],
            line: 1391,
        );
    }

    #[Depends('testAssertReturn1373')]
    public function testAssertReturn1374(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '3221225472']],
            line: 1392,
        );
    }

    #[Depends('testAssertReturn1374')]
    public function testAssertReturn1375(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3221225472']],
            line: 1393,
        );
    }

    #[Depends('testAssertReturn1375')]
    public function testAssertReturn1376(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1073741824']],
            line: 1394,
        );
    }

    #[Depends('testAssertReturn1376')]
    public function testAssertReturn1377(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 1395,
        );
    }

    #[Depends('testAssertReturn1377')]
    public function testAssertReturn1378(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1396,
        );
    }

    #[Depends('testAssertReturn1378')]
    public function testAssertReturn1379(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1397,
        );
    }

    #[Depends('testAssertReturn1379')]
    public function testAssertReturn1380(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 1398,
        );
    }

    #[Depends('testAssertReturn1380')]
    public function testAssertReturn1381(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '1042479491']],
            line: 1399,
        );
    }

    #[Depends('testAssertReturn1381')]
    public function testAssertReturn1382(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '3189963139']],
            line: 1400,
        );
    }

    #[Depends('testAssertReturn1382')]
    public function testAssertReturn1383(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3189963139']],
            line: 1401,
        );
    }

    #[Depends('testAssertReturn1383')]
    public function testAssertReturn1384(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1042479491']],
            line: 1402,
        );
    }

    #[Depends('testAssertReturn1384')]
    public function testAssertReturn1385(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2097152']],
            line: 1403,
        );
    }

    #[Depends('testAssertReturn1385')]
    public function testAssertReturn1386(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2149580800']],
            line: 1404,
        );
    }

    #[Depends('testAssertReturn1386')]
    public function testAssertReturn1387(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2149580800']],
            line: 1405,
        );
    }

    #[Depends('testAssertReturn1387')]
    public function testAssertReturn1388(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2097152']],
            line: 1406,
        );
    }

    #[Depends('testAssertReturn1388')]
    public function testAssertReturn1389(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1407,
        );
    }

    #[Depends('testAssertReturn1389')]
    public function testAssertReturn1390(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1408,
        );
    }

    #[Depends('testAssertReturn1390')]
    public function testAssertReturn1391(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1409,
        );
    }

    #[Depends('testAssertReturn1391')]
    public function testAssertReturn1392(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1410,
        );
    }

    #[Depends('testAssertReturn1392')]
    public function testAssertReturn1393(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1411,
        );
    }

    #[Depends('testAssertReturn1393')]
    public function testAssertReturn1394(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1412,
        );
    }

    #[Depends('testAssertReturn1394')]
    public function testAssertReturn1395(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1413,
        );
    }

    #[Depends('testAssertReturn1395')]
    public function testAssertReturn1396(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1414,
        );
    }

    #[Depends('testAssertReturn1396')]
    public function testAssertReturn1397(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1415,
        );
    }

    #[Depends('testAssertReturn1397')]
    public function testAssertReturn1398(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1416,
        );
    }

    #[Depends('testAssertReturn1398')]
    public function testAssertReturn1399(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1417,
        );
    }

    #[Depends('testAssertReturn1399')]
    public function testAssertReturn1400(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1418,
        );
    }

    #[Depends('testAssertReturn1400')]
    public function testAssertReturn1401(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1419,
        );
    }

    #[Depends('testAssertReturn1401')]
    public function testAssertReturn1402(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1420,
        );
    }

    #[Depends('testAssertReturn1402')]
    public function testAssertReturn1403(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1421,
        );
    }

    #[Depends('testAssertReturn1403')]
    public function testAssertReturn1404(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1422,
        );
    }

    #[Depends('testAssertReturn1404')]
    public function testAssertReturn1405(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1423,
        );
    }

    #[Depends('testAssertReturn1405')]
    public function testAssertReturn1406(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1424,
        );
    }

    #[Depends('testAssertReturn1406')]
    public function testAssertReturn1407(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1425,
        );
    }

    #[Depends('testAssertReturn1407')]
    public function testAssertReturn1408(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1426,
        );
    }

    #[Depends('testAssertReturn1408')]
    public function testAssertReturn1409(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1427,
        );
    }

    #[Depends('testAssertReturn1409')]
    public function testAssertReturn1410(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1428,
        );
    }

    #[Depends('testAssertReturn1410')]
    public function testAssertReturn1411(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1429,
        );
    }

    #[Depends('testAssertReturn1411')]
    public function testAssertReturn1412(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1430,
        );
    }

    #[Depends('testAssertReturn1412')]
    public function testAssertReturn1413(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '1095307227']],
            line: 1431,
        );
    }

    #[Depends('testAssertReturn1413')]
    public function testAssertReturn1414(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '3242790875']],
            line: 1432,
        );
    }

    #[Depends('testAssertReturn1414')]
    public function testAssertReturn1415(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3242790875']],
            line: 1433,
        );
    }

    #[Depends('testAssertReturn1415')]
    public function testAssertReturn1416(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1095307227']],
            line: 1434,
        );
    }

    #[Depends('testAssertReturn1416')]
    public function testAssertReturn1417(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 1435,
        );
    }

    #[Depends('testAssertReturn1417')]
    public function testAssertReturn1418(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 1436,
        );
    }

    #[Depends('testAssertReturn1418')]
    public function testAssertReturn1419(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 1437,
        );
    }

    #[Depends('testAssertReturn1419')]
    public function testAssertReturn1420(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 1438,
        );
    }

    #[Depends('testAssertReturn1420')]
    public function testAssertReturn1421(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 1439,
        );
    }

    #[Depends('testAssertReturn1421')]
    public function testAssertReturn1422(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1440,
        );
    }

    #[Depends('testAssertReturn1422')]
    public function testAssertReturn1423(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1441,
        );
    }

    #[Depends('testAssertReturn1423')]
    public function testAssertReturn1424(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 1442,
        );
    }

    #[Depends('testAssertReturn1424')]
    public function testAssertReturn1425(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '13176796']],
            line: 1443,
        );
    }

    #[Depends('testAssertReturn1425')]
    public function testAssertReturn1426(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2160660444']],
            line: 1444,
        );
    }

    #[Depends('testAssertReturn1426')]
    public function testAssertReturn1427(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2160660444']],
            line: 1445,
        );
    }

    #[Depends('testAssertReturn1427')]
    public function testAssertReturn1428(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '13176796']],
            line: 1446,
        );
    }

    #[Depends('testAssertReturn1428')]
    public function testAssertReturn1429(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1447,
        );
    }

    #[Depends('testAssertReturn1429')]
    public function testAssertReturn1430(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1448,
        );
    }

    #[Depends('testAssertReturn1430')]
    public function testAssertReturn1431(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1449,
        );
    }

    #[Depends('testAssertReturn1431')]
    public function testAssertReturn1432(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1450,
        );
    }

    #[Depends('testAssertReturn1432')]
    public function testAssertReturn1433(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1451,
        );
    }

    #[Depends('testAssertReturn1433')]
    public function testAssertReturn1434(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1452,
        );
    }

    #[Depends('testAssertReturn1434')]
    public function testAssertReturn1435(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1453,
        );
    }

    #[Depends('testAssertReturn1435')]
    public function testAssertReturn1436(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1454,
        );
    }

    #[Depends('testAssertReturn1436')]
    public function testAssertReturn1437(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1455,
        );
    }

    #[Depends('testAssertReturn1437')]
    public function testAssertReturn1438(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1456,
        );
    }

    #[Depends('testAssertReturn1438')]
    public function testAssertReturn1439(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1457,
        );
    }

    #[Depends('testAssertReturn1439')]
    public function testAssertReturn1440(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1458,
        );
    }

    #[Depends('testAssertReturn1440')]
    public function testAssertReturn1441(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1459,
        );
    }

    #[Depends('testAssertReturn1441')]
    public function testAssertReturn1442(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1460,
        );
    }

    #[Depends('testAssertReturn1442')]
    public function testAssertReturn1443(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1461,
        );
    }

    #[Depends('testAssertReturn1443')]
    public function testAssertReturn1444(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1462,
        );
    }

    #[Depends('testAssertReturn1444')]
    public function testAssertReturn1445(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1463,
        );
    }

    #[Depends('testAssertReturn1445')]
    public function testAssertReturn1446(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1464,
        );
    }

    #[Depends('testAssertReturn1446')]
    public function testAssertReturn1447(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1465,
        );
    }

    #[Depends('testAssertReturn1447')]
    public function testAssertReturn1448(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1466,
        );
    }

    #[Depends('testAssertReturn1448')]
    public function testAssertReturn1449(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1467,
        );
    }

    #[Depends('testAssertReturn1449')]
    public function testAssertReturn1450(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1468,
        );
    }

    #[Depends('testAssertReturn1450')]
    public function testAssertReturn1451(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1469,
        );
    }

    #[Depends('testAssertReturn1451')]
    public function testAssertReturn1452(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1470,
        );
    }

    #[Depends('testAssertReturn1452')]
    public function testAssertReturn1453(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1471,
        );
    }

    #[Depends('testAssertReturn1453')]
    public function testAssertReturn1454(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1472,
        );
    }

    #[Depends('testAssertReturn1454')]
    public function testAssertReturn1455(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1473,
        );
    }

    #[Depends('testAssertReturn1455')]
    public function testAssertReturn1456(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1474,
        );
    }

    #[Depends('testAssertReturn1456')]
    public function testAssertReturn1457(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 1475,
        );
    }

    #[Depends('testAssertReturn1457')]
    public function testAssertReturn1458(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1476,
        );
    }

    #[Depends('testAssertReturn1458')]
    public function testAssertReturn1459(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1477,
        );
    }

    #[Depends('testAssertReturn1459')]
    public function testAssertReturn1460(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 1478,
        );
    }

    #[Depends('testAssertReturn1460')]
    public function testAssertReturn1461(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '2116221314']],
            line: 1479,
        );
    }

    #[Depends('testAssertReturn1461')]
    public function testAssertReturn1462(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '4263704962']],
            line: 1480,
        );
    }

    #[Depends('testAssertReturn1462')]
    public function testAssertReturn1463(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '4263704962']],
            line: 1481,
        );
    }

    #[Depends('testAssertReturn1463')]
    public function testAssertReturn1464(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '2116221314']],
            line: 1482,
        );
    }

    #[Depends('testAssertReturn1464')]
    public function testAssertReturn1465(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 1483,
        );
    }

    #[Depends('testAssertReturn1465')]
    public function testAssertReturn1466(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1484,
        );
    }

    #[Depends('testAssertReturn1466')]
    public function testAssertReturn1467(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1485,
        );
    }

    #[Depends('testAssertReturn1467')]
    public function testAssertReturn1468(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 1486,
        );
    }

    #[Depends('testAssertReturn1468')]
    public function testAssertReturn1469(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1487,
        );
    }

    #[Depends('testAssertReturn1469')]
    public function testAssertReturn1470(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1488,
        );
    }

    #[Depends('testAssertReturn1470')]
    public function testAssertReturn1471(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1489,
        );
    }

    #[Depends('testAssertReturn1471')]
    public function testAssertReturn1472(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1490,
        );
    }

    #[Depends('testAssertReturn1472')]
    public function testAssertReturn1473(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1491,
        );
    }

    #[Depends('testAssertReturn1473')]
    public function testAssertReturn1474(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1492,
        );
    }

    #[Depends('testAssertReturn1474')]
    public function testAssertReturn1475(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1493,
        );
    }

    #[Depends('testAssertReturn1475')]
    public function testAssertReturn1476(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1494,
        );
    }

    #[Depends('testAssertReturn1476')]
    public function testAssertReturn1477(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1495,
        );
    }

    #[Depends('testAssertReturn1477')]
    public function testAssertReturn1478(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1496,
        );
    }

    #[Depends('testAssertReturn1478')]
    public function testAssertReturn1479(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1497,
        );
    }

    #[Depends('testAssertReturn1479')]
    public function testAssertReturn1480(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1498,
        );
    }

    #[Depends('testAssertReturn1480')]
    public function testAssertReturn1481(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1499,
        );
    }

    #[Depends('testAssertReturn1481')]
    public function testAssertReturn1482(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1500,
        );
    }

    #[Depends('testAssertReturn1482')]
    public function testAssertReturn1483(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1501,
        );
    }

    #[Depends('testAssertReturn1483')]
    public function testAssertReturn1484(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1502,
        );
    }

    #[Depends('testAssertReturn1484')]
    public function testAssertReturn1485(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1503,
        );
    }

    #[Depends('testAssertReturn1485')]
    public function testAssertReturn1486(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1504,
        );
    }

    #[Depends('testAssertReturn1486')]
    public function testAssertReturn1487(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1505,
        );
    }

    #[Depends('testAssertReturn1487')]
    public function testAssertReturn1488(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1506,
        );
    }

    #[Depends('testAssertReturn1488')]
    public function testAssertReturn1489(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1507,
        );
    }

    #[Depends('testAssertReturn1489')]
    public function testAssertReturn1490(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1508,
        );
    }

    #[Depends('testAssertReturn1490')]
    public function testAssertReturn1491(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1509,
        );
    }

    #[Depends('testAssertReturn1491')]
    public function testAssertReturn1492(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1510,
        );
    }

    #[Depends('testAssertReturn1492')]
    public function testAssertReturn1493(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1511,
        );
    }

    #[Depends('testAssertReturn1493')]
    public function testAssertReturn1494(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1512,
        );
    }

    #[Depends('testAssertReturn1494')]
    public function testAssertReturn1495(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1513,
        );
    }

    #[Depends('testAssertReturn1495')]
    public function testAssertReturn1496(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1514,
        );
    }

    #[Depends('testAssertReturn1496')]
    public function testAssertReturn1497(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1515,
        );
    }

    #[Depends('testAssertReturn1497')]
    public function testAssertReturn1498(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1516,
        );
    }

    #[Depends('testAssertReturn1498')]
    public function testAssertReturn1499(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1517,
        );
    }

    #[Depends('testAssertReturn1499')]
    public function testAssertReturn1500(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1518,
        );
    }

    #[Depends('testAssertReturn1500')]
    public function testAssertReturn1501(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1519,
        );
    }

    #[Depends('testAssertReturn1501')]
    public function testAssertReturn1502(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1520,
        );
    }

    #[Depends('testAssertReturn1502')]
    public function testAssertReturn1503(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1521,
        );
    }

    #[Depends('testAssertReturn1503')]
    public function testAssertReturn1504(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1522,
        );
    }

    #[Depends('testAssertReturn1504')]
    public function testAssertReturn1505(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1523,
        );
    }

    #[Depends('testAssertReturn1505')]
    public function testAssertReturn1506(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1524,
        );
    }

    #[Depends('testAssertReturn1506')]
    public function testAssertReturn1507(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1525,
        );
    }

    #[Depends('testAssertReturn1507')]
    public function testAssertReturn1508(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1526,
        );
    }

    #[Depends('testAssertReturn1508')]
    public function testAssertReturn1509(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1527,
        );
    }

    #[Depends('testAssertReturn1509')]
    public function testAssertReturn1510(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1528,
        );
    }

    #[Depends('testAssertReturn1510')]
    public function testAssertReturn1511(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1529,
        );
    }

    #[Depends('testAssertReturn1511')]
    public function testAssertReturn1512(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1530,
        );
    }

    #[Depends('testAssertReturn1512')]
    public function testAssertReturn1513(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1531,
        );
    }

    #[Depends('testAssertReturn1513')]
    public function testAssertReturn1514(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1532,
        );
    }

    #[Depends('testAssertReturn1514')]
    public function testAssertReturn1515(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1533,
        );
    }

    #[Depends('testAssertReturn1515')]
    public function testAssertReturn1516(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1534,
        );
    }

    #[Depends('testAssertReturn1516')]
    public function testAssertReturn1517(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1535,
        );
    }

    #[Depends('testAssertReturn1517')]
    public function testAssertReturn1518(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1536,
        );
    }

    #[Depends('testAssertReturn1518')]
    public function testAssertReturn1519(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1537,
        );
    }

    #[Depends('testAssertReturn1519')]
    public function testAssertReturn1520(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1538,
        );
    }

    #[Depends('testAssertReturn1520')]
    public function testAssertReturn1521(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1539,
        );
    }

    #[Depends('testAssertReturn1521')]
    public function testAssertReturn1522(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1540,
        );
    }

    #[Depends('testAssertReturn1522')]
    public function testAssertReturn1523(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1541,
        );
    }

    #[Depends('testAssertReturn1523')]
    public function testAssertReturn1524(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1542,
        );
    }

    #[Depends('testAssertReturn1524')]
    public function testAssertReturn1525(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1543,
        );
    }

    #[Depends('testAssertReturn1525')]
    public function testAssertReturn1526(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1544,
        );
    }

    #[Depends('testAssertReturn1526')]
    public function testAssertReturn1527(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1545,
        );
    }

    #[Depends('testAssertReturn1527')]
    public function testAssertReturn1528(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1546,
        );
    }

    #[Depends('testAssertReturn1528')]
    public function testAssertReturn1529(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1547,
        );
    }

    #[Depends('testAssertReturn1529')]
    public function testAssertReturn1530(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1548,
        );
    }

    #[Depends('testAssertReturn1530')]
    public function testAssertReturn1531(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1549,
        );
    }

    #[Depends('testAssertReturn1531')]
    public function testAssertReturn1532(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1550,
        );
    }

    #[Depends('testAssertReturn1532')]
    public function testAssertReturn1533(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1551,
        );
    }

    #[Depends('testAssertReturn1533')]
    public function testAssertReturn1534(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1552,
        );
    }

    #[Depends('testAssertReturn1534')]
    public function testAssertReturn1535(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1553,
        );
    }

    #[Depends('testAssertReturn1535')]
    public function testAssertReturn1536(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1554,
        );
    }

    #[Depends('testAssertReturn1536')]
    public function testAssertReturn1537(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1555,
        );
    }

    #[Depends('testAssertReturn1537')]
    public function testAssertReturn1538(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1556,
        );
    }

    #[Depends('testAssertReturn1538')]
    public function testAssertReturn1539(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1557,
        );
    }

    #[Depends('testAssertReturn1539')]
    public function testAssertReturn1540(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1558,
        );
    }

    #[Depends('testAssertReturn1540')]
    public function testAssertReturn1541(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1559,
        );
    }

    #[Depends('testAssertReturn1541')]
    public function testAssertReturn1542(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1560,
        );
    }

    #[Depends('testAssertReturn1542')]
    public function testAssertReturn1543(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1561,
        );
    }

    #[Depends('testAssertReturn1543')]
    public function testAssertReturn1544(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1562,
        );
    }

    #[Depends('testAssertReturn1544')]
    public function testAssertReturn1545(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1563,
        );
    }

    #[Depends('testAssertReturn1545')]
    public function testAssertReturn1546(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1564,
        );
    }

    #[Depends('testAssertReturn1546')]
    public function testAssertReturn1547(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1565,
        );
    }

    #[Depends('testAssertReturn1547')]
    public function testAssertReturn1548(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1566,
        );
    }

    #[Depends('testAssertReturn1548')]
    public function testAssertReturn1549(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1567,
        );
    }

    #[Depends('testAssertReturn1549')]
    public function testAssertReturn1550(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1568,
        );
    }

    #[Depends('testAssertReturn1550')]
    public function testAssertReturn1551(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1569,
        );
    }

    #[Depends('testAssertReturn1551')]
    public function testAssertReturn1552(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1570,
        );
    }

    #[Depends('testAssertReturn1552')]
    public function testAssertReturn1553(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1571,
        );
    }

    #[Depends('testAssertReturn1553')]
    public function testAssertReturn1554(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1572,
        );
    }

    #[Depends('testAssertReturn1554')]
    public function testAssertReturn1555(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1573,
        );
    }

    #[Depends('testAssertReturn1555')]
    public function testAssertReturn1556(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1574,
        );
    }

    #[Depends('testAssertReturn1556')]
    public function testAssertReturn1557(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1575,
        );
    }

    #[Depends('testAssertReturn1557')]
    public function testAssertReturn1558(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1576,
        );
    }

    #[Depends('testAssertReturn1558')]
    public function testAssertReturn1559(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1577,
        );
    }

    #[Depends('testAssertReturn1559')]
    public function testAssertReturn1560(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1578,
        );
    }

    #[Depends('testAssertReturn1560')]
    public function testAssertReturn1561(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1579,
        );
    }

    #[Depends('testAssertReturn1561')]
    public function testAssertReturn1562(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1580,
        );
    }

    #[Depends('testAssertReturn1562')]
    public function testAssertReturn1563(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1581,
        );
    }

    #[Depends('testAssertReturn1563')]
    public function testAssertReturn1564(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1582,
        );
    }

    #[Depends('testAssertReturn1564')]
    public function testAssertReturn1565(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1583,
        );
    }

    #[Depends('testAssertReturn1565')]
    public function testAssertReturn1566(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1584,
        );
    }

    #[Depends('testAssertReturn1566')]
    public function testAssertReturn1567(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1585,
        );
    }

    #[Depends('testAssertReturn1567')]
    public function testAssertReturn1568(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1586,
        );
    }

    #[Depends('testAssertReturn1568')]
    public function testAssertReturn1569(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1587,
        );
    }

    #[Depends('testAssertReturn1569')]
    public function testAssertReturn1570(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1588,
        );
    }

    #[Depends('testAssertReturn1570')]
    public function testAssertReturn1571(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1589,
        );
    }

    #[Depends('testAssertReturn1571')]
    public function testAssertReturn1572(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1590,
        );
    }

    #[Depends('testAssertReturn1572')]
    public function testAssertReturn1573(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1591,
        );
    }

    #[Depends('testAssertReturn1573')]
    public function testAssertReturn1574(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1592,
        );
    }

    #[Depends('testAssertReturn1574')]
    public function testAssertReturn1575(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1593,
        );
    }

    #[Depends('testAssertReturn1575')]
    public function testAssertReturn1576(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1594,
        );
    }

    #[Depends('testAssertReturn1576')]
    public function testAssertReturn1577(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1595,
        );
    }

    #[Depends('testAssertReturn1577')]
    public function testAssertReturn1578(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1596,
        );
    }

    #[Depends('testAssertReturn1578')]
    public function testAssertReturn1579(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1597,
        );
    }

    #[Depends('testAssertReturn1579')]
    public function testAssertReturn1580(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1598,
        );
    }

    #[Depends('testAssertReturn1580')]
    public function testAssertReturn1581(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1599,
        );
    }

    #[Depends('testAssertReturn1581')]
    public function testAssertReturn1582(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1600,
        );
    }

    #[Depends('testAssertReturn1582')]
    public function testAssertReturn1583(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1601,
        );
    }

    #[Depends('testAssertReturn1583')]
    public function testAssertReturn1584(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1602,
        );
    }

    #[Depends('testAssertReturn1584')]
    public function testAssertReturn1585(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1603,
        );
    }

    #[Depends('testAssertReturn1585')]
    public function testAssertReturn1586(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1604,
        );
    }

    #[Depends('testAssertReturn1586')]
    public function testAssertReturn1587(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1605,
        );
    }

    #[Depends('testAssertReturn1587')]
    public function testAssertReturn1588(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1606,
        );
    }

    #[Depends('testAssertReturn1588')]
    public function testAssertReturn1589(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1607,
        );
    }

    #[Depends('testAssertReturn1589')]
    public function testAssertReturn1590(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1608,
        );
    }

    #[Depends('testAssertReturn1590')]
    public function testAssertReturn1591(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1609,
        );
    }

    #[Depends('testAssertReturn1591')]
    public function testAssertReturn1592(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1610,
        );
    }

    #[Depends('testAssertReturn1592')]
    public function testAssertReturn1593(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1611,
        );
    }

    #[Depends('testAssertReturn1593')]
    public function testAssertReturn1594(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1612,
        );
    }

    #[Depends('testAssertReturn1594')]
    public function testAssertReturn1595(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1613,
        );
    }

    #[Depends('testAssertReturn1595')]
    public function testAssertReturn1596(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1614,
        );
    }

    #[Depends('testAssertReturn1596')]
    public function testAssertReturn1597(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1615,
        );
    }

    #[Depends('testAssertReturn1597')]
    public function testAssertReturn1598(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1616,
        );
    }

    #[Depends('testAssertReturn1598')]
    public function testAssertReturn1599(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1617,
        );
    }

    #[Depends('testAssertReturn1599')]
    public function testAssertReturn1600(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1618,
        );
    }

    #[Depends('testAssertReturn1600')]
    public function testAssertReturn1601(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1619,
        );
    }

    #[Depends('testAssertReturn1601')]
    public function testAssertReturn1602(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1620,
        );
    }

    #[Depends('testAssertReturn1602')]
    public function testAssertReturn1603(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1621,
        );
    }

    #[Depends('testAssertReturn1603')]
    public function testAssertReturn1604(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1622,
        );
    }

    #[Depends('testAssertReturn1604')]
    public function testAssertReturn1605(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 1623,
        );
    }

    #[Depends('testAssertReturn1605')]
    public function testAssertReturn1606(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1624,
        );
    }

    #[Depends('testAssertReturn1606')]
    public function testAssertReturn1607(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 1625,
        );
    }

    #[Depends('testAssertReturn1607')]
    public function testAssertReturn1608(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1626,
        );
    }

    #[Depends('testAssertReturn1608')]
    public function testAssertReturn1609(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 1627,
        );
    }

    #[Depends('testAssertReturn1609')]
    public function testAssertReturn1610(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1628,
        );
    }

    #[Depends('testAssertReturn1610')]
    public function testAssertReturn1611(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 1629,
        );
    }

    #[Depends('testAssertReturn1611')]
    public function testAssertReturn1612(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1630,
        );
    }

    #[Depends('testAssertReturn1612')]
    public function testAssertReturn1613(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 1631,
        );
    }

    #[Depends('testAssertReturn1613')]
    public function testAssertReturn1614(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1632,
        );
    }

    #[Depends('testAssertReturn1614')]
    public function testAssertReturn1615(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 1633,
        );
    }

    #[Depends('testAssertReturn1615')]
    public function testAssertReturn1616(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1634,
        );
    }

    #[Depends('testAssertReturn1616')]
    public function testAssertReturn1617(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1635,
        );
    }

    #[Depends('testAssertReturn1617')]
    public function testAssertReturn1618(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1636,
        );
    }

    #[Depends('testAssertReturn1618')]
    public function testAssertReturn1619(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1637,
        );
    }

    #[Depends('testAssertReturn1619')]
    public function testAssertReturn1620(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1638,
        );
    }

    #[Depends('testAssertReturn1620')]
    public function testAssertReturn1621(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 1639,
        );
    }

    #[Depends('testAssertReturn1621')]
    public function testAssertReturn1622(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1640,
        );
    }

    #[Depends('testAssertReturn1622')]
    public function testAssertReturn1623(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 1641,
        );
    }

    #[Depends('testAssertReturn1623')]
    public function testAssertReturn1624(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1642,
        );
    }

    #[Depends('testAssertReturn1624')]
    public function testAssertReturn1625(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1643,
        );
    }

    #[Depends('testAssertReturn1625')]
    public function testAssertReturn1626(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1644,
        );
    }

    #[Depends('testAssertReturn1626')]
    public function testAssertReturn1627(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1645,
        );
    }

    #[Depends('testAssertReturn1627')]
    public function testAssertReturn1628(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1646,
        );
    }

    #[Depends('testAssertReturn1628')]
    public function testAssertReturn1629(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1647,
        );
    }

    #[Depends('testAssertReturn1629')]
    public function testAssertReturn1630(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1648,
        );
    }

    #[Depends('testAssertReturn1630')]
    public function testAssertReturn1631(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1649,
        );
    }

    #[Depends('testAssertReturn1631')]
    public function testAssertReturn1632(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1650,
        );
    }

    #[Depends('testAssertReturn1632')]
    public function testAssertReturn1633(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1651,
        );
    }

    #[Depends('testAssertReturn1633')]
    public function testAssertReturn1634(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1652,
        );
    }

    #[Depends('testAssertReturn1634')]
    public function testAssertReturn1635(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1653,
        );
    }

    #[Depends('testAssertReturn1635')]
    public function testAssertReturn1636(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1654,
        );
    }

    #[Depends('testAssertReturn1636')]
    public function testAssertReturn1637(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1655,
        );
    }

    #[Depends('testAssertReturn1637')]
    public function testAssertReturn1638(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1656,
        );
    }

    #[Depends('testAssertReturn1638')]
    public function testAssertReturn1639(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1657,
        );
    }

    #[Depends('testAssertReturn1639')]
    public function testAssertReturn1640(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1658,
        );
    }

    #[Depends('testAssertReturn1640')]
    public function testAssertReturn1641(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 1659,
        );
    }

    #[Depends('testAssertReturn1641')]
    public function testAssertReturn1642(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 1660,
        );
    }

    #[Depends('testAssertReturn1642')]
    public function testAssertReturn1643(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1661,
        );
    }

    #[Depends('testAssertReturn1643')]
    public function testAssertReturn1644(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1662,
        );
    }

    #[Depends('testAssertReturn1644')]
    public function testAssertReturn1645(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 1663,
        );
    }

    #[Depends('testAssertReturn1645')]
    public function testAssertReturn1646(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 1664,
        );
    }

    #[Depends('testAssertReturn1646')]
    public function testAssertReturn1647(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 1665,
        );
    }

    #[Depends('testAssertReturn1647')]
    public function testAssertReturn1648(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 1666,
        );
    }

    #[Depends('testAssertReturn1648')]
    public function testAssertReturn1649(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 1667,
        );
    }

    #[Depends('testAssertReturn1649')]
    public function testAssertReturn1650(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 1668,
        );
    }

    #[Depends('testAssertReturn1650')]
    public function testAssertReturn1651(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 1669,
        );
    }

    #[Depends('testAssertReturn1651')]
    public function testAssertReturn1652(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 1670,
        );
    }

    #[Depends('testAssertReturn1652')]
    public function testAssertReturn1653(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 1671,
        );
    }

    #[Depends('testAssertReturn1653')]
    public function testAssertReturn1654(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 1672,
        );
    }

    #[Depends('testAssertReturn1654')]
    public function testAssertReturn1655(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 1673,
        );
    }

    #[Depends('testAssertReturn1655')]
    public function testAssertReturn1656(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 1674,
        );
    }

    #[Depends('testAssertReturn1656')]
    public function testAssertReturn1657(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1675,
        );
    }

    #[Depends('testAssertReturn1657')]
    public function testAssertReturn1658(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 1676,
        );
    }

    #[Depends('testAssertReturn1658')]
    public function testAssertReturn1659(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1677,
        );
    }

    #[Depends('testAssertReturn1659')]
    public function testAssertReturn1660(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 1678,
        );
    }

    #[Depends('testAssertReturn1660')]
    public function testAssertReturn1661(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 1679,
        );
    }

    #[Depends('testAssertReturn1661')]
    public function testAssertReturn1662(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 1680,
        );
    }

    #[Depends('testAssertReturn1662')]
    public function testAssertReturn1663(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 1681,
        );
    }

    #[Depends('testAssertReturn1663')]
    public function testAssertReturn1664(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 1682,
        );
    }

    #[Depends('testAssertReturn1664')]
    public function testAssertReturn1665(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1683,
        );
    }

    #[Depends('testAssertReturn1665')]
    public function testAssertReturn1666(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 1684,
        );
    }

    #[Depends('testAssertReturn1666')]
    public function testAssertReturn1667(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1685,
        );
    }

    #[Depends('testAssertReturn1667')]
    public function testAssertReturn1668(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 1686,
        );
    }

    #[Depends('testAssertReturn1668')]
    public function testAssertReturn1669(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1687,
        );
    }

    #[Depends('testAssertReturn1669')]
    public function testAssertReturn1670(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 1688,
        );
    }

    #[Depends('testAssertReturn1670')]
    public function testAssertReturn1671(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1689,
        );
    }

    #[Depends('testAssertReturn1671')]
    public function testAssertReturn1672(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 1690,
        );
    }

    #[Depends('testAssertReturn1672')]
    public function testAssertReturn1673(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1691,
        );
    }

    #[Depends('testAssertReturn1673')]
    public function testAssertReturn1674(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1692,
        );
    }

    #[Depends('testAssertReturn1674')]
    public function testAssertReturn1675(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1693,
        );
    }

    #[Depends('testAssertReturn1675')]
    public function testAssertReturn1676(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1694,
        );
    }

    #[Depends('testAssertReturn1676')]
    public function testAssertReturn1677(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1695,
        );
    }

    #[Depends('testAssertReturn1677')]
    public function testAssertReturn1678(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1696,
        );
    }

    #[Depends('testAssertReturn1678')]
    public function testAssertReturn1679(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1697,
        );
    }

    #[Depends('testAssertReturn1679')]
    public function testAssertReturn1680(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1698,
        );
    }

    #[Depends('testAssertReturn1680')]
    public function testAssertReturn1681(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 1699,
        );
    }

    #[Depends('testAssertReturn1681')]
    public function testAssertReturn1682(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 1700,
        );
    }

    #[Depends('testAssertReturn1682')]
    public function testAssertReturn1683(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1701,
        );
    }

    #[Depends('testAssertReturn1683')]
    public function testAssertReturn1684(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1702,
        );
    }

    #[Depends('testAssertReturn1684')]
    public function testAssertReturn1685(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 1703,
        );
    }

    #[Depends('testAssertReturn1685')]
    public function testAssertReturn1686(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 1704,
        );
    }

    #[Depends('testAssertReturn1686')]
    public function testAssertReturn1687(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 1705,
        );
    }

    #[Depends('testAssertReturn1687')]
    public function testAssertReturn1688(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 1706,
        );
    }

    #[Depends('testAssertReturn1688')]
    public function testAssertReturn1689(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 1707,
        );
    }

    #[Depends('testAssertReturn1689')]
    public function testAssertReturn1690(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 1708,
        );
    }

    #[Depends('testAssertReturn1690')]
    public function testAssertReturn1691(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 1709,
        );
    }

    #[Depends('testAssertReturn1691')]
    public function testAssertReturn1692(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 1710,
        );
    }

    #[Depends('testAssertReturn1692')]
    public function testAssertReturn1693(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 1711,
        );
    }

    #[Depends('testAssertReturn1693')]
    public function testAssertReturn1694(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 1712,
        );
    }

    #[Depends('testAssertReturn1694')]
    public function testAssertReturn1695(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 1713,
        );
    }

    #[Depends('testAssertReturn1695')]
    public function testAssertReturn1696(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 1714,
        );
    }

    #[Depends('testAssertReturn1696')]
    public function testAssertReturn1697(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1715,
        );
    }

    #[Depends('testAssertReturn1697')]
    public function testAssertReturn1698(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 1716,
        );
    }

    #[Depends('testAssertReturn1698')]
    public function testAssertReturn1699(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1717,
        );
    }

    #[Depends('testAssertReturn1699')]
    public function testAssertReturn1700(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 1718,
        );
    }

    #[Depends('testAssertReturn1700')]
    public function testAssertReturn1701(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 1719,
        );
    }

    #[Depends('testAssertReturn1701')]
    public function testAssertReturn1702(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 1720,
        );
    }

    #[Depends('testAssertReturn1702')]
    public function testAssertReturn1703(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 1721,
        );
    }

    #[Depends('testAssertReturn1703')]
    public function testAssertReturn1704(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 1722,
        );
    }

    #[Depends('testAssertReturn1704')]
    public function testAssertReturn1705(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1723,
        );
    }

    #[Depends('testAssertReturn1705')]
    public function testAssertReturn1706(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 1724,
        );
    }

    #[Depends('testAssertReturn1706')]
    public function testAssertReturn1707(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1725,
        );
    }

    #[Depends('testAssertReturn1707')]
    public function testAssertReturn1708(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 1726,
        );
    }

    #[Depends('testAssertReturn1708')]
    public function testAssertReturn1709(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1727,
        );
    }

    #[Depends('testAssertReturn1709')]
    public function testAssertReturn1710(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 1728,
        );
    }

    #[Depends('testAssertReturn1710')]
    public function testAssertReturn1711(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1729,
        );
    }

    #[Depends('testAssertReturn1711')]
    public function testAssertReturn1712(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 1730,
        );
    }

    #[Depends('testAssertReturn1712')]
    public function testAssertReturn1713(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1731,
        );
    }

    #[Depends('testAssertReturn1713')]
    public function testAssertReturn1714(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1732,
        );
    }

    #[Depends('testAssertReturn1714')]
    public function testAssertReturn1715(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1733,
        );
    }

    #[Depends('testAssertReturn1715')]
    public function testAssertReturn1716(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1734,
        );
    }

    #[Depends('testAssertReturn1716')]
    public function testAssertReturn1717(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1735,
        );
    }

    #[Depends('testAssertReturn1717')]
    public function testAssertReturn1718(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1736,
        );
    }

    #[Depends('testAssertReturn1718')]
    public function testAssertReturn1719(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1737,
        );
    }

    #[Depends('testAssertReturn1719')]
    public function testAssertReturn1720(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1738,
        );
    }

    #[Depends('testAssertReturn1720')]
    public function testAssertReturn1721(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 1739,
        );
    }

    #[Depends('testAssertReturn1721')]
    public function testAssertReturn1722(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 1740,
        );
    }

    #[Depends('testAssertReturn1722')]
    public function testAssertReturn1723(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1741,
        );
    }

    #[Depends('testAssertReturn1723')]
    public function testAssertReturn1724(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1742,
        );
    }

    #[Depends('testAssertReturn1724')]
    public function testAssertReturn1725(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 1743,
        );
    }

    #[Depends('testAssertReturn1725')]
    public function testAssertReturn1726(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 1744,
        );
    }

    #[Depends('testAssertReturn1726')]
    public function testAssertReturn1727(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 1745,
        );
    }

    #[Depends('testAssertReturn1727')]
    public function testAssertReturn1728(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 1746,
        );
    }

    #[Depends('testAssertReturn1728')]
    public function testAssertReturn1729(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 1747,
        );
    }

    #[Depends('testAssertReturn1729')]
    public function testAssertReturn1730(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 1748,
        );
    }

    #[Depends('testAssertReturn1730')]
    public function testAssertReturn1731(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 1749,
        );
    }

    #[Depends('testAssertReturn1731')]
    public function testAssertReturn1732(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 1750,
        );
    }

    #[Depends('testAssertReturn1732')]
    public function testAssertReturn1733(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 1751,
        );
    }

    #[Depends('testAssertReturn1733')]
    public function testAssertReturn1734(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 1752,
        );
    }

    #[Depends('testAssertReturn1734')]
    public function testAssertReturn1735(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 1753,
        );
    }

    #[Depends('testAssertReturn1735')]
    public function testAssertReturn1736(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 1754,
        );
    }

    #[Depends('testAssertReturn1736')]
    public function testAssertReturn1737(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1755,
        );
    }

    #[Depends('testAssertReturn1737')]
    public function testAssertReturn1738(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 1756,
        );
    }

    #[Depends('testAssertReturn1738')]
    public function testAssertReturn1739(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1757,
        );
    }

    #[Depends('testAssertReturn1739')]
    public function testAssertReturn1740(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 1758,
        );
    }

    #[Depends('testAssertReturn1740')]
    public function testAssertReturn1741(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 1759,
        );
    }

    #[Depends('testAssertReturn1741')]
    public function testAssertReturn1742(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 1760,
        );
    }

    #[Depends('testAssertReturn1742')]
    public function testAssertReturn1743(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 1761,
        );
    }

    #[Depends('testAssertReturn1743')]
    public function testAssertReturn1744(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 1762,
        );
    }

    #[Depends('testAssertReturn1744')]
    public function testAssertReturn1745(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1763,
        );
    }

    #[Depends('testAssertReturn1745')]
    public function testAssertReturn1746(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 1764,
        );
    }

    #[Depends('testAssertReturn1746')]
    public function testAssertReturn1747(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1765,
        );
    }

    #[Depends('testAssertReturn1747')]
    public function testAssertReturn1748(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 1766,
        );
    }

    #[Depends('testAssertReturn1748')]
    public function testAssertReturn1749(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1767,
        );
    }

    #[Depends('testAssertReturn1749')]
    public function testAssertReturn1750(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 1768,
        );
    }

    #[Depends('testAssertReturn1750')]
    public function testAssertReturn1751(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1769,
        );
    }

    #[Depends('testAssertReturn1751')]
    public function testAssertReturn1752(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 1770,
        );
    }

    #[Depends('testAssertReturn1752')]
    public function testAssertReturn1753(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1771,
        );
    }

    #[Depends('testAssertReturn1753')]
    public function testAssertReturn1754(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1772,
        );
    }

    #[Depends('testAssertReturn1754')]
    public function testAssertReturn1755(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1773,
        );
    }

    #[Depends('testAssertReturn1755')]
    public function testAssertReturn1756(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1774,
        );
    }

    #[Depends('testAssertReturn1756')]
    public function testAssertReturn1757(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1775,
        );
    }

    #[Depends('testAssertReturn1757')]
    public function testAssertReturn1758(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1776,
        );
    }

    #[Depends('testAssertReturn1758')]
    public function testAssertReturn1759(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1777,
        );
    }

    #[Depends('testAssertReturn1759')]
    public function testAssertReturn1760(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1778,
        );
    }

    #[Depends('testAssertReturn1760')]
    public function testAssertReturn1761(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1779,
        );
    }

    #[Depends('testAssertReturn1761')]
    public function testAssertReturn1762(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1780,
        );
    }

    #[Depends('testAssertReturn1762')]
    public function testAssertReturn1763(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1781,
        );
    }

    #[Depends('testAssertReturn1763')]
    public function testAssertReturn1764(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1782,
        );
    }

    #[Depends('testAssertReturn1764')]
    public function testAssertReturn1765(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1783,
        );
    }

    #[Depends('testAssertReturn1765')]
    public function testAssertReturn1766(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1784,
        );
    }

    #[Depends('testAssertReturn1766')]
    public function testAssertReturn1767(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 1785,
        );
    }

    #[Depends('testAssertReturn1767')]
    public function testAssertReturn1768(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 1786,
        );
    }

    #[Depends('testAssertReturn1768')]
    public function testAssertReturn1769(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1787,
        );
    }

    #[Depends('testAssertReturn1769')]
    public function testAssertReturn1770(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1788,
        );
    }

    #[Depends('testAssertReturn1770')]
    public function testAssertReturn1771(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 1789,
        );
    }

    #[Depends('testAssertReturn1771')]
    public function testAssertReturn1772(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 1790,
        );
    }

    #[Depends('testAssertReturn1772')]
    public function testAssertReturn1773(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1791,
        );
    }

    #[Depends('testAssertReturn1773')]
    public function testAssertReturn1774(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1792,
        );
    }

    #[Depends('testAssertReturn1774')]
    public function testAssertReturn1775(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 1793,
        );
    }

    #[Depends('testAssertReturn1775')]
    public function testAssertReturn1776(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 1794,
        );
    }

    #[Depends('testAssertReturn1776')]
    public function testAssertReturn1777(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1795,
        );
    }

    #[Depends('testAssertReturn1777')]
    public function testAssertReturn1778(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1796,
        );
    }

    #[Depends('testAssertReturn1778')]
    public function testAssertReturn1779(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1797,
        );
    }

    #[Depends('testAssertReturn1779')]
    public function testAssertReturn1780(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 1798,
        );
    }

    #[Depends('testAssertReturn1780')]
    public function testAssertReturn1781(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 1799,
        );
    }

    #[Depends('testAssertReturn1781')]
    public function testAssertReturn1782(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1800,
        );
    }

    #[Depends('testAssertReturn1782')]
    public function testAssertReturn1783(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 1801,
        );
    }

    #[Depends('testAssertReturn1783')]
    public function testAssertReturn1784(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 1802,
        );
    }

    #[Depends('testAssertReturn1784')]
    public function testAssertReturn1785(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1803,
        );
    }

    #[Depends('testAssertReturn1785')]
    public function testAssertReturn1786(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1804,
        );
    }

    #[Depends('testAssertReturn1786')]
    public function testAssertReturn1787(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1805,
        );
    }

    #[Depends('testAssertReturn1787')]
    public function testAssertReturn1788(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 1806,
        );
    }

    #[Depends('testAssertReturn1788')]
    public function testAssertReturn1789(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1807,
        );
    }

    #[Depends('testAssertReturn1789')]
    public function testAssertReturn1790(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1808,
        );
    }

    #[Depends('testAssertReturn1790')]
    public function testAssertReturn1791(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1809,
        );
    }

    #[Depends('testAssertReturn1791')]
    public function testAssertReturn1792(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 1810,
        );
    }

    #[Depends('testAssertReturn1792')]
    public function testAssertReturn1793(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1811,
        );
    }

    #[Depends('testAssertReturn1793')]
    public function testAssertReturn1794(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1812,
        );
    }

    #[Depends('testAssertReturn1794')]
    public function testAssertReturn1795(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1813,
        );
    }

    #[Depends('testAssertReturn1795')]
    public function testAssertReturn1796(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1814,
        );
    }

    #[Depends('testAssertReturn1796')]
    public function testAssertReturn1797(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1815,
        );
    }

    #[Depends('testAssertReturn1797')]
    public function testAssertReturn1798(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1816,
        );
    }

    #[Depends('testAssertReturn1798')]
    public function testAssertReturn1799(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1817,
        );
    }

    #[Depends('testAssertReturn1799')]
    public function testAssertReturn1800(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1818,
        );
    }

    #[Depends('testAssertReturn1800')]
    public function testAssertReturn1801(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 1819,
        );
    }

    #[Depends('testAssertReturn1801')]
    public function testAssertReturn1802(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 1820,
        );
    }

    #[Depends('testAssertReturn1802')]
    public function testAssertReturn1803(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1821,
        );
    }

    #[Depends('testAssertReturn1803')]
    public function testAssertReturn1804(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1822,
        );
    }

    #[Depends('testAssertReturn1804')]
    public function testAssertReturn1805(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 1823,
        );
    }

    #[Depends('testAssertReturn1805')]
    public function testAssertReturn1806(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 1824,
        );
    }

    #[Depends('testAssertReturn1806')]
    public function testAssertReturn1807(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 1825,
        );
    }

    #[Depends('testAssertReturn1807')]
    public function testAssertReturn1808(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 1826,
        );
    }

    #[Depends('testAssertReturn1808')]
    public function testAssertReturn1809(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 1827,
        );
    }

    #[Depends('testAssertReturn1809')]
    public function testAssertReturn1810(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 1828,
        );
    }

    #[Depends('testAssertReturn1810')]
    public function testAssertReturn1811(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 1829,
        );
    }

    #[Depends('testAssertReturn1811')]
    public function testAssertReturn1812(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 1830,
        );
    }

    #[Depends('testAssertReturn1812')]
    public function testAssertReturn1813(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 1831,
        );
    }

    #[Depends('testAssertReturn1813')]
    public function testAssertReturn1814(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 1832,
        );
    }

    #[Depends('testAssertReturn1814')]
    public function testAssertReturn1815(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 1833,
        );
    }

    #[Depends('testAssertReturn1815')]
    public function testAssertReturn1816(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 1834,
        );
    }

    #[Depends('testAssertReturn1816')]
    public function testAssertReturn1817(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 1835,
        );
    }

    #[Depends('testAssertReturn1817')]
    public function testAssertReturn1818(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 1836,
        );
    }

    #[Depends('testAssertReturn1818')]
    public function testAssertReturn1819(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1837,
        );
    }

    #[Depends('testAssertReturn1819')]
    public function testAssertReturn1820(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 1838,
        );
    }

    #[Depends('testAssertReturn1820')]
    public function testAssertReturn1821(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 1839,
        );
    }

    #[Depends('testAssertReturn1821')]
    public function testAssertReturn1822(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 1840,
        );
    }

    #[Depends('testAssertReturn1822')]
    public function testAssertReturn1823(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 1841,
        );
    }

    #[Depends('testAssertReturn1823')]
    public function testAssertReturn1824(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 1842,
        );
    }

    #[Depends('testAssertReturn1824')]
    public function testAssertReturn1825(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1843,
        );
    }

    #[Depends('testAssertReturn1825')]
    public function testAssertReturn1826(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 1844,
        );
    }

    #[Depends('testAssertReturn1826')]
    public function testAssertReturn1827(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1845,
        );
    }

    #[Depends('testAssertReturn1827')]
    public function testAssertReturn1828(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 1846,
        );
    }

    #[Depends('testAssertReturn1828')]
    public function testAssertReturn1829(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1847,
        );
    }

    #[Depends('testAssertReturn1829')]
    public function testAssertReturn1830(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 1848,
        );
    }

    #[Depends('testAssertReturn1830')]
    public function testAssertReturn1831(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1849,
        );
    }

    #[Depends('testAssertReturn1831')]
    public function testAssertReturn1832(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 1850,
        );
    }

    #[Depends('testAssertReturn1832')]
    public function testAssertReturn1833(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1851,
        );
    }

    #[Depends('testAssertReturn1833')]
    public function testAssertReturn1834(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1852,
        );
    }

    #[Depends('testAssertReturn1834')]
    public function testAssertReturn1835(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1853,
        );
    }

    #[Depends('testAssertReturn1835')]
    public function testAssertReturn1836(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1854,
        );
    }

    #[Depends('testAssertReturn1836')]
    public function testAssertReturn1837(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1855,
        );
    }

    #[Depends('testAssertReturn1837')]
    public function testAssertReturn1838(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1856,
        );
    }

    #[Depends('testAssertReturn1838')]
    public function testAssertReturn1839(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1857,
        );
    }

    #[Depends('testAssertReturn1839')]
    public function testAssertReturn1840(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1858,
        );
    }

    #[Depends('testAssertReturn1840')]
    public function testAssertReturn1841(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1859,
        );
    }

    #[Depends('testAssertReturn1841')]
    public function testAssertReturn1842(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1860,
        );
    }

    #[Depends('testAssertReturn1842')]
    public function testAssertReturn1843(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1861,
        );
    }

    #[Depends('testAssertReturn1843')]
    public function testAssertReturn1844(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1862,
        );
    }

    #[Depends('testAssertReturn1844')]
    public function testAssertReturn1845(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1863,
        );
    }

    #[Depends('testAssertReturn1845')]
    public function testAssertReturn1846(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1864,
        );
    }

    #[Depends('testAssertReturn1846')]
    public function testAssertReturn1847(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 1865,
        );
    }

    #[Depends('testAssertReturn1847')]
    public function testAssertReturn1848(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 1866,
        );
    }

    #[Depends('testAssertReturn1848')]
    public function testAssertReturn1849(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1867,
        );
    }

    #[Depends('testAssertReturn1849')]
    public function testAssertReturn1850(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1868,
        );
    }

    #[Depends('testAssertReturn1850')]
    public function testAssertReturn1851(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 1869,
        );
    }

    #[Depends('testAssertReturn1851')]
    public function testAssertReturn1852(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 1870,
        );
    }

    #[Depends('testAssertReturn1852')]
    public function testAssertReturn1853(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1871,
        );
    }

    #[Depends('testAssertReturn1853')]
    public function testAssertReturn1854(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1872,
        );
    }

    #[Depends('testAssertReturn1854')]
    public function testAssertReturn1855(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 1873,
        );
    }

    #[Depends('testAssertReturn1855')]
    public function testAssertReturn1856(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 1874,
        );
    }

    #[Depends('testAssertReturn1856')]
    public function testAssertReturn1857(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1875,
        );
    }

    #[Depends('testAssertReturn1857')]
    public function testAssertReturn1858(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1876,
        );
    }

    #[Depends('testAssertReturn1858')]
    public function testAssertReturn1859(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1877,
        );
    }

    #[Depends('testAssertReturn1859')]
    public function testAssertReturn1860(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 1878,
        );
    }

    #[Depends('testAssertReturn1860')]
    public function testAssertReturn1861(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1879,
        );
    }

    #[Depends('testAssertReturn1861')]
    public function testAssertReturn1862(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1880,
        );
    }

    #[Depends('testAssertReturn1862')]
    public function testAssertReturn1863(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 1881,
        );
    }

    #[Depends('testAssertReturn1863')]
    public function testAssertReturn1864(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 1882,
        );
    }

    #[Depends('testAssertReturn1864')]
    public function testAssertReturn1865(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1883,
        );
    }

    #[Depends('testAssertReturn1865')]
    public function testAssertReturn1866(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1884,
        );
    }

    #[Depends('testAssertReturn1866')]
    public function testAssertReturn1867(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1885,
        );
    }

    #[Depends('testAssertReturn1867')]
    public function testAssertReturn1868(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 1886,
        );
    }

    #[Depends('testAssertReturn1868')]
    public function testAssertReturn1869(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1887,
        );
    }

    #[Depends('testAssertReturn1869')]
    public function testAssertReturn1870(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1888,
        );
    }

    #[Depends('testAssertReturn1870')]
    public function testAssertReturn1871(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1889,
        );
    }

    #[Depends('testAssertReturn1871')]
    public function testAssertReturn1872(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 1890,
        );
    }

    #[Depends('testAssertReturn1872')]
    public function testAssertReturn1873(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1891,
        );
    }

    #[Depends('testAssertReturn1873')]
    public function testAssertReturn1874(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1892,
        );
    }

    #[Depends('testAssertReturn1874')]
    public function testAssertReturn1875(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1893,
        );
    }

    #[Depends('testAssertReturn1875')]
    public function testAssertReturn1876(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1894,
        );
    }

    #[Depends('testAssertReturn1876')]
    public function testAssertReturn1877(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1895,
        );
    }

    #[Depends('testAssertReturn1877')]
    public function testAssertReturn1878(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1896,
        );
    }

    #[Depends('testAssertReturn1878')]
    public function testAssertReturn1879(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1897,
        );
    }

    #[Depends('testAssertReturn1879')]
    public function testAssertReturn1880(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1898,
        );
    }

    #[Depends('testAssertReturn1880')]
    public function testAssertReturn1881(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1899,
        );
    }

    #[Depends('testAssertReturn1881')]
    public function testAssertReturn1882(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1900,
        );
    }

    #[Depends('testAssertReturn1882')]
    public function testAssertReturn1883(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1901,
        );
    }

    #[Depends('testAssertReturn1883')]
    public function testAssertReturn1884(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1902,
        );
    }

    #[Depends('testAssertReturn1884')]
    public function testAssertReturn1885(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1903,
        );
    }

    #[Depends('testAssertReturn1885')]
    public function testAssertReturn1886(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1904,
        );
    }

    #[Depends('testAssertReturn1886')]
    public function testAssertReturn1887(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 1905,
        );
    }

    #[Depends('testAssertReturn1887')]
    public function testAssertReturn1888(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 1906,
        );
    }

    #[Depends('testAssertReturn1888')]
    public function testAssertReturn1889(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1907,
        );
    }

    #[Depends('testAssertReturn1889')]
    public function testAssertReturn1890(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1908,
        );
    }

    #[Depends('testAssertReturn1890')]
    public function testAssertReturn1891(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 1909,
        );
    }

    #[Depends('testAssertReturn1891')]
    public function testAssertReturn1892(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 1910,
        );
    }

    #[Depends('testAssertReturn1892')]
    public function testAssertReturn1893(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1911,
        );
    }

    #[Depends('testAssertReturn1893')]
    public function testAssertReturn1894(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1912,
        );
    }

    #[Depends('testAssertReturn1894')]
    public function testAssertReturn1895(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 1913,
        );
    }

    #[Depends('testAssertReturn1895')]
    public function testAssertReturn1896(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 1914,
        );
    }

    #[Depends('testAssertReturn1896')]
    public function testAssertReturn1897(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1915,
        );
    }

    #[Depends('testAssertReturn1897')]
    public function testAssertReturn1898(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1916,
        );
    }

    #[Depends('testAssertReturn1898')]
    public function testAssertReturn1899(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 1917,
        );
    }

    #[Depends('testAssertReturn1899')]
    public function testAssertReturn1900(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 1918,
        );
    }

    #[Depends('testAssertReturn1900')]
    public function testAssertReturn1901(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1919,
        );
    }

    #[Depends('testAssertReturn1901')]
    public function testAssertReturn1902(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1920,
        );
    }

    #[Depends('testAssertReturn1902')]
    public function testAssertReturn1903(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 1921,
        );
    }

    #[Depends('testAssertReturn1903')]
    public function testAssertReturn1904(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 1922,
        );
    }

    #[Depends('testAssertReturn1904')]
    public function testAssertReturn1905(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1923,
        );
    }

    #[Depends('testAssertReturn1905')]
    public function testAssertReturn1906(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1924,
        );
    }

    #[Depends('testAssertReturn1906')]
    public function testAssertReturn1907(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 1925,
        );
    }

    #[Depends('testAssertReturn1907')]
    public function testAssertReturn1908(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 1926,
        );
    }

    #[Depends('testAssertReturn1908')]
    public function testAssertReturn1909(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1927,
        );
    }

    #[Depends('testAssertReturn1909')]
    public function testAssertReturn1910(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1928,
        );
    }

    #[Depends('testAssertReturn1910')]
    public function testAssertReturn1911(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1929,
        );
    }

    #[Depends('testAssertReturn1911')]
    public function testAssertReturn1912(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1930,
        );
    }

    #[Depends('testAssertReturn1912')]
    public function testAssertReturn1913(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1931,
        );
    }

    #[Depends('testAssertReturn1913')]
    public function testAssertReturn1914(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1932,
        );
    }

    #[Depends('testAssertReturn1914')]
    public function testAssertReturn1915(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1933,
        );
    }

    #[Depends('testAssertReturn1915')]
    public function testAssertReturn1916(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1934,
        );
    }

    #[Depends('testAssertReturn1916')]
    public function testAssertReturn1917(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1935,
        );
    }

    #[Depends('testAssertReturn1917')]
    public function testAssertReturn1918(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1936,
        );
    }

    #[Depends('testAssertReturn1918')]
    public function testAssertReturn1919(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1937,
        );
    }

    #[Depends('testAssertReturn1919')]
    public function testAssertReturn1920(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1938,
        );
    }

    #[Depends('testAssertReturn1920')]
    public function testAssertReturn1921(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1939,
        );
    }

    #[Depends('testAssertReturn1921')]
    public function testAssertReturn1922(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1940,
        );
    }

    #[Depends('testAssertReturn1922')]
    public function testAssertReturn1923(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1941,
        );
    }

    #[Depends('testAssertReturn1923')]
    public function testAssertReturn1924(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1942,
        );
    }

    #[Depends('testAssertReturn1924')]
    public function testAssertReturn1925(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1943,
        );
    }

    #[Depends('testAssertReturn1925')]
    public function testAssertReturn1926(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1944,
        );
    }

    #[Depends('testAssertReturn1926')]
    public function testAssertReturn1927(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1945,
        );
    }

    #[Depends('testAssertReturn1927')]
    public function testAssertReturn1928(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1946,
        );
    }

    #[Depends('testAssertReturn1928')]
    public function testAssertReturn1929(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1947,
        );
    }

    #[Depends('testAssertReturn1929')]
    public function testAssertReturn1930(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1948,
        );
    }

    #[Depends('testAssertReturn1930')]
    public function testAssertReturn1931(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1949,
        );
    }

    #[Depends('testAssertReturn1931')]
    public function testAssertReturn1932(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1950,
        );
    }

    #[Depends('testAssertReturn1932')]
    public function testAssertReturn1933(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1951,
        );
    }

    #[Depends('testAssertReturn1933')]
    public function testAssertReturn1934(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1952,
        );
    }

    #[Depends('testAssertReturn1934')]
    public function testAssertReturn1935(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1953,
        );
    }

    #[Depends('testAssertReturn1935')]
    public function testAssertReturn1936(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1954,
        );
    }

    #[Depends('testAssertReturn1936')]
    public function testAssertReturn1937(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1955,
        );
    }

    #[Depends('testAssertReturn1937')]
    public function testAssertReturn1938(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1956,
        );
    }

    #[Depends('testAssertReturn1938')]
    public function testAssertReturn1939(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1957,
        );
    }

    #[Depends('testAssertReturn1939')]
    public function testAssertReturn1940(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1958,
        );
    }

    #[Depends('testAssertReturn1940')]
    public function testAssertReturn1941(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1959,
        );
    }

    #[Depends('testAssertReturn1941')]
    public function testAssertReturn1942(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1960,
        );
    }

    #[Depends('testAssertReturn1942')]
    public function testAssertReturn1943(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1961,
        );
    }

    #[Depends('testAssertReturn1943')]
    public function testAssertReturn1944(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1962,
        );
    }

    #[Depends('testAssertReturn1944')]
    public function testAssertReturn1945(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1963,
        );
    }

    #[Depends('testAssertReturn1945')]
    public function testAssertReturn1946(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1964,
        );
    }

    #[Depends('testAssertReturn1946')]
    public function testAssertReturn1947(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1965,
        );
    }

    #[Depends('testAssertReturn1947')]
    public function testAssertReturn1948(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1966,
        );
    }

    #[Depends('testAssertReturn1948')]
    public function testAssertReturn1949(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1967,
        );
    }

    #[Depends('testAssertReturn1949')]
    public function testAssertReturn1950(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1968,
        );
    }

    #[Depends('testAssertReturn1950')]
    public function testAssertReturn1951(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1969,
        );
    }

    #[Depends('testAssertReturn1951')]
    public function testAssertReturn1952(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1970,
        );
    }

    #[Depends('testAssertReturn1952')]
    public function testAssertReturn1953(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1971,
        );
    }

    #[Depends('testAssertReturn1953')]
    public function testAssertReturn1954(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1972,
        );
    }

    #[Depends('testAssertReturn1954')]
    public function testAssertReturn1955(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1973,
        );
    }

    #[Depends('testAssertReturn1955')]
    public function testAssertReturn1956(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1974,
        );
    }

    #[Depends('testAssertReturn1956')]
    public function testAssertReturn1957(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1975,
        );
    }

    #[Depends('testAssertReturn1957')]
    public function testAssertReturn1958(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1976,
        );
    }

    #[Depends('testAssertReturn1958')]
    public function testAssertReturn1959(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1977,
        );
    }

    #[Depends('testAssertReturn1959')]
    public function testAssertReturn1960(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1978,
        );
    }

    #[Depends('testAssertReturn1960')]
    public function testAssertReturn1961(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1979,
        );
    }

    #[Depends('testAssertReturn1961')]
    public function testAssertReturn1962(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1980,
        );
    }

    #[Depends('testAssertReturn1962')]
    public function testAssertReturn1963(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1981,
        );
    }

    #[Depends('testAssertReturn1963')]
    public function testAssertReturn1964(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1982,
        );
    }

    #[Depends('testAssertReturn1964')]
    public function testAssertReturn1965(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1983,
        );
    }

    #[Depends('testAssertReturn1965')]
    public function testAssertReturn1966(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1984,
        );
    }

    #[Depends('testAssertReturn1966')]
    public function testAssertReturn1967(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1985,
        );
    }

    #[Depends('testAssertReturn1967')]
    public function testAssertReturn1968(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1986,
        );
    }

    #[Depends('testAssertReturn1968')]
    public function testAssertReturn1969(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1987,
        );
    }

    #[Depends('testAssertReturn1969')]
    public function testAssertReturn1970(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1988,
        );
    }

    #[Depends('testAssertReturn1970')]
    public function testAssertReturn1971(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1989,
        );
    }

    #[Depends('testAssertReturn1971')]
    public function testAssertReturn1972(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1990,
        );
    }

    #[Depends('testAssertReturn1972')]
    public function testAssertReturn1973(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1991,
        );
    }

    #[Depends('testAssertReturn1973')]
    public function testAssertReturn1974(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1992,
        );
    }

    #[Depends('testAssertReturn1974')]
    public function testAssertReturn1975(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1993,
        );
    }

    #[Depends('testAssertReturn1975')]
    public function testAssertReturn1976(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1994,
        );
    }

    #[Depends('testAssertReturn1976')]
    public function testAssertReturn1977(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1995,
        );
    }

    #[Depends('testAssertReturn1977')]
    public function testAssertReturn1978(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1996,
        );
    }

    #[Depends('testAssertReturn1978')]
    public function testAssertReturn1979(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1997,
        );
    }

    #[Depends('testAssertReturn1979')]
    public function testAssertReturn1980(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 1998,
        );
    }

    #[Depends('testAssertReturn1980')]
    public function testAssertReturn1981(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1999,
        );
    }

    #[Depends('testAssertReturn1981')]
    public function testAssertReturn1982(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2000,
        );
    }

    #[Depends('testAssertReturn1982')]
    public function testAssertReturn1983(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2001,
        );
    }

    #[Depends('testAssertReturn1983')]
    public function testAssertReturn1984(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2002,
        );
    }

    #[Depends('testAssertReturn1984')]
    public function testAssertReturn1985(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2003,
        );
    }

    #[Depends('testAssertReturn1985')]
    public function testAssertReturn1986(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2004,
        );
    }

    #[Depends('testAssertReturn1986')]
    public function testAssertReturn1987(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2005,
        );
    }

    #[Depends('testAssertReturn1987')]
    public function testAssertReturn1988(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2006,
        );
    }

    #[Depends('testAssertReturn1988')]
    public function testAssertReturn1989(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2007,
        );
    }

    #[Depends('testAssertReturn1989')]
    public function testAssertReturn1990(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2008,
        );
    }

    #[Depends('testAssertReturn1990')]
    public function testAssertReturn1991(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2009,
        );
    }

    #[Depends('testAssertReturn1991')]
    public function testAssertReturn1992(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2010,
        );
    }

    #[Depends('testAssertReturn1992')]
    public function testAssertReturn1993(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2011,
        );
    }

    #[Depends('testAssertReturn1993')]
    public function testAssertReturn1994(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2012,
        );
    }

    #[Depends('testAssertReturn1994')]
    public function testAssertReturn1995(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2013,
        );
    }

    #[Depends('testAssertReturn1995')]
    public function testAssertReturn1996(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2014,
        );
    }

    #[Depends('testAssertReturn1996')]
    public function testAssertReturn1997(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2015,
        );
    }

    #[Depends('testAssertReturn1997')]
    public function testAssertReturn1998(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2016,
        );
    }

    #[Depends('testAssertReturn1998')]
    public function testAssertReturn1999(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2017,
        );
    }

    #[Depends('testAssertReturn1999')]
    public function testAssertReturn2000(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'min', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2018,
        );
    }

    #[Depends('testAssertReturn2000')]
    public function testAssertReturn2001(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 2019,
        );
    }

    #[Depends('testAssertReturn2001')]
    public function testAssertReturn2002(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2020,
        );
    }

    #[Depends('testAssertReturn2002')]
    public function testAssertReturn2003(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2021,
        );
    }

    #[Depends('testAssertReturn2003')]
    public function testAssertReturn2004(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2022,
        );
    }

    #[Depends('testAssertReturn2004')]
    public function testAssertReturn2005(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 2023,
        );
    }

    #[Depends('testAssertReturn2005')]
    public function testAssertReturn2006(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 2024,
        );
    }

    #[Depends('testAssertReturn2006')]
    public function testAssertReturn2007(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2025,
        );
    }

    #[Depends('testAssertReturn2007')]
    public function testAssertReturn2008(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 2026,
        );
    }

    #[Depends('testAssertReturn2008')]
    public function testAssertReturn2009(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 2027,
        );
    }

    #[Depends('testAssertReturn2009')]
    public function testAssertReturn2010(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 2028,
        );
    }

    #[Depends('testAssertReturn2010')]
    public function testAssertReturn2011(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2029,
        );
    }

    #[Depends('testAssertReturn2011')]
    public function testAssertReturn2012(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 2030,
        );
    }

    #[Depends('testAssertReturn2012')]
    public function testAssertReturn2013(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 2031,
        );
    }

    #[Depends('testAssertReturn2013')]
    public function testAssertReturn2014(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 2032,
        );
    }

    #[Depends('testAssertReturn2014')]
    public function testAssertReturn2015(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2033,
        );
    }

    #[Depends('testAssertReturn2015')]
    public function testAssertReturn2016(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 2034,
        );
    }

    #[Depends('testAssertReturn2016')]
    public function testAssertReturn2017(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 2035,
        );
    }

    #[Depends('testAssertReturn2017')]
    public function testAssertReturn2018(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 2036,
        );
    }

    #[Depends('testAssertReturn2018')]
    public function testAssertReturn2019(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2037,
        );
    }

    #[Depends('testAssertReturn2019')]
    public function testAssertReturn2020(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 2038,
        );
    }

    #[Depends('testAssertReturn2020')]
    public function testAssertReturn2021(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 2039,
        );
    }

    #[Depends('testAssertReturn2021')]
    public function testAssertReturn2022(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 2040,
        );
    }

    #[Depends('testAssertReturn2022')]
    public function testAssertReturn2023(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2041,
        );
    }

    #[Depends('testAssertReturn2023')]
    public function testAssertReturn2024(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 2042,
        );
    }

    #[Depends('testAssertReturn2024')]
    public function testAssertReturn2025(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 2043,
        );
    }

    #[Depends('testAssertReturn2025')]
    public function testAssertReturn2026(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 2044,
        );
    }

    #[Depends('testAssertReturn2026')]
    public function testAssertReturn2027(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2045,
        );
    }

    #[Depends('testAssertReturn2027')]
    public function testAssertReturn2028(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 2046,
        );
    }

    #[Depends('testAssertReturn2028')]
    public function testAssertReturn2029(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 2047,
        );
    }

    #[Depends('testAssertReturn2029')]
    public function testAssertReturn2030(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2048,
        );
    }

    #[Depends('testAssertReturn2030')]
    public function testAssertReturn2031(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2049,
        );
    }

    #[Depends('testAssertReturn2031')]
    public function testAssertReturn2032(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2050,
        );
    }

    #[Depends('testAssertReturn2032')]
    public function testAssertReturn2033(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2051,
        );
    }

    #[Depends('testAssertReturn2033')]
    public function testAssertReturn2034(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2052,
        );
    }

    #[Depends('testAssertReturn2034')]
    public function testAssertReturn2035(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2053,
        );
    }

    #[Depends('testAssertReturn2035')]
    public function testAssertReturn2036(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2054,
        );
    }

    #[Depends('testAssertReturn2036')]
    public function testAssertReturn2037(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2055,
        );
    }

    #[Depends('testAssertReturn2037')]
    public function testAssertReturn2038(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2056,
        );
    }

    #[Depends('testAssertReturn2038')]
    public function testAssertReturn2039(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2057,
        );
    }

    #[Depends('testAssertReturn2039')]
    public function testAssertReturn2040(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2058,
        );
    }

    #[Depends('testAssertReturn2040')]
    public function testAssertReturn2041(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 2059,
        );
    }

    #[Depends('testAssertReturn2041')]
    public function testAssertReturn2042(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2060,
        );
    }

    #[Depends('testAssertReturn2042')]
    public function testAssertReturn2043(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 2061,
        );
    }

    #[Depends('testAssertReturn2043')]
    public function testAssertReturn2044(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 2062,
        );
    }

    #[Depends('testAssertReturn2044')]
    public function testAssertReturn2045(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 2063,
        );
    }

    #[Depends('testAssertReturn2045')]
    public function testAssertReturn2046(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 2064,
        );
    }

    #[Depends('testAssertReturn2046')]
    public function testAssertReturn2047(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 2065,
        );
    }

    #[Depends('testAssertReturn2047')]
    public function testAssertReturn2048(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 2066,
        );
    }

    #[Depends('testAssertReturn2048')]
    public function testAssertReturn2049(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 2067,
        );
    }

    #[Depends('testAssertReturn2049')]
    public function testAssertReturn2050(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 2068,
        );
    }

    #[Depends('testAssertReturn2050')]
    public function testAssertReturn2051(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 2069,
        );
    }

    #[Depends('testAssertReturn2051')]
    public function testAssertReturn2052(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 2070,
        );
    }

    #[Depends('testAssertReturn2052')]
    public function testAssertReturn2053(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 2071,
        );
    }

    #[Depends('testAssertReturn2053')]
    public function testAssertReturn2054(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 2072,
        );
    }

    #[Depends('testAssertReturn2054')]
    public function testAssertReturn2055(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 2073,
        );
    }

    #[Depends('testAssertReturn2055')]
    public function testAssertReturn2056(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 2074,
        );
    }

    #[Depends('testAssertReturn2056')]
    public function testAssertReturn2057(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 2075,
        );
    }

    #[Depends('testAssertReturn2057')]
    public function testAssertReturn2058(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 2076,
        );
    }

    #[Depends('testAssertReturn2058')]
    public function testAssertReturn2059(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 2077,
        );
    }

    #[Depends('testAssertReturn2059')]
    public function testAssertReturn2060(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 2078,
        );
    }

    #[Depends('testAssertReturn2060')]
    public function testAssertReturn2061(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 2079,
        );
    }

    #[Depends('testAssertReturn2061')]
    public function testAssertReturn2062(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 2080,
        );
    }

    #[Depends('testAssertReturn2062')]
    public function testAssertReturn2063(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 2081,
        );
    }

    #[Depends('testAssertReturn2063')]
    public function testAssertReturn2064(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 2082,
        );
    }

    #[Depends('testAssertReturn2064')]
    public function testAssertReturn2065(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 2083,
        );
    }

    #[Depends('testAssertReturn2065')]
    public function testAssertReturn2066(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 2084,
        );
    }

    #[Depends('testAssertReturn2066')]
    public function testAssertReturn2067(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 2085,
        );
    }

    #[Depends('testAssertReturn2067')]
    public function testAssertReturn2068(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 2086,
        );
    }

    #[Depends('testAssertReturn2068')]
    public function testAssertReturn2069(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 2087,
        );
    }

    #[Depends('testAssertReturn2069')]
    public function testAssertReturn2070(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2088,
        );
    }

    #[Depends('testAssertReturn2070')]
    public function testAssertReturn2071(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 2089,
        );
    }

    #[Depends('testAssertReturn2071')]
    public function testAssertReturn2072(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2090,
        );
    }

    #[Depends('testAssertReturn2072')]
    public function testAssertReturn2073(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2091,
        );
    }

    #[Depends('testAssertReturn2073')]
    public function testAssertReturn2074(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2092,
        );
    }

    #[Depends('testAssertReturn2074')]
    public function testAssertReturn2075(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2093,
        );
    }

    #[Depends('testAssertReturn2075')]
    public function testAssertReturn2076(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2147483649'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2094,
        );
    }

    #[Depends('testAssertReturn2076')]
    public function testAssertReturn2077(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2095,
        );
    }

    #[Depends('testAssertReturn2077')]
    public function testAssertReturn2078(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2096,
        );
    }

    #[Depends('testAssertReturn2078')]
    public function testAssertReturn2079(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2097,
        );
    }

    #[Depends('testAssertReturn2079')]
    public function testAssertReturn2080(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2098,
        );
    }

    #[Depends('testAssertReturn2080')]
    public function testAssertReturn2081(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 2099,
        );
    }

    #[Depends('testAssertReturn2081')]
    public function testAssertReturn2082(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2100,
        );
    }

    #[Depends('testAssertReturn2082')]
    public function testAssertReturn2083(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 2101,
        );
    }

    #[Depends('testAssertReturn2083')]
    public function testAssertReturn2084(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 2102,
        );
    }

    #[Depends('testAssertReturn2084')]
    public function testAssertReturn2085(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 2103,
        );
    }

    #[Depends('testAssertReturn2085')]
    public function testAssertReturn2086(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 2104,
        );
    }

    #[Depends('testAssertReturn2086')]
    public function testAssertReturn2087(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 2105,
        );
    }

    #[Depends('testAssertReturn2087')]
    public function testAssertReturn2088(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 2106,
        );
    }

    #[Depends('testAssertReturn2088')]
    public function testAssertReturn2089(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 2107,
        );
    }

    #[Depends('testAssertReturn2089')]
    public function testAssertReturn2090(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 2108,
        );
    }

    #[Depends('testAssertReturn2090')]
    public function testAssertReturn2091(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 2109,
        );
    }

    #[Depends('testAssertReturn2091')]
    public function testAssertReturn2092(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 2110,
        );
    }

    #[Depends('testAssertReturn2092')]
    public function testAssertReturn2093(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 2111,
        );
    }

    #[Depends('testAssertReturn2093')]
    public function testAssertReturn2094(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 2112,
        );
    }

    #[Depends('testAssertReturn2094')]
    public function testAssertReturn2095(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 2113,
        );
    }

    #[Depends('testAssertReturn2095')]
    public function testAssertReturn2096(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 2114,
        );
    }

    #[Depends('testAssertReturn2096')]
    public function testAssertReturn2097(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 2115,
        );
    }

    #[Depends('testAssertReturn2097')]
    public function testAssertReturn2098(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 2116,
        );
    }

    #[Depends('testAssertReturn2098')]
    public function testAssertReturn2099(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 2117,
        );
    }

    #[Depends('testAssertReturn2099')]
    public function testAssertReturn2100(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 2118,
        );
    }

    #[Depends('testAssertReturn2100')]
    public function testAssertReturn2101(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 2119,
        );
    }

    #[Depends('testAssertReturn2101')]
    public function testAssertReturn2102(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 2120,
        );
    }

    #[Depends('testAssertReturn2102')]
    public function testAssertReturn2103(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 2121,
        );
    }

    #[Depends('testAssertReturn2103')]
    public function testAssertReturn2104(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 2122,
        );
    }

    #[Depends('testAssertReturn2104')]
    public function testAssertReturn2105(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 2123,
        );
    }

    #[Depends('testAssertReturn2105')]
    public function testAssertReturn2106(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 2124,
        );
    }

    #[Depends('testAssertReturn2106')]
    public function testAssertReturn2107(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 2125,
        );
    }

    #[Depends('testAssertReturn2107')]
    public function testAssertReturn2108(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 2126,
        );
    }

    #[Depends('testAssertReturn2108')]
    public function testAssertReturn2109(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 2127,
        );
    }

    #[Depends('testAssertReturn2109')]
    public function testAssertReturn2110(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2128,
        );
    }

    #[Depends('testAssertReturn2110')]
    public function testAssertReturn2111(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 2129,
        );
    }

    #[Depends('testAssertReturn2111')]
    public function testAssertReturn2112(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2130,
        );
    }

    #[Depends('testAssertReturn2112')]
    public function testAssertReturn2113(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2131,
        );
    }

    #[Depends('testAssertReturn2113')]
    public function testAssertReturn2114(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2132,
        );
    }

    #[Depends('testAssertReturn2114')]
    public function testAssertReturn2115(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2133,
        );
    }

    #[Depends('testAssertReturn2115')]
    public function testAssertReturn2116(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2155872256'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2134,
        );
    }

    #[Depends('testAssertReturn2116')]
    public function testAssertReturn2117(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2135,
        );
    }

    #[Depends('testAssertReturn2117')]
    public function testAssertReturn2118(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2136,
        );
    }

    #[Depends('testAssertReturn2118')]
    public function testAssertReturn2119(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2137,
        );
    }

    #[Depends('testAssertReturn2119')]
    public function testAssertReturn2120(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2138,
        );
    }

    #[Depends('testAssertReturn2120')]
    public function testAssertReturn2121(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 2139,
        );
    }

    #[Depends('testAssertReturn2121')]
    public function testAssertReturn2122(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2140,
        );
    }

    #[Depends('testAssertReturn2122')]
    public function testAssertReturn2123(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 2141,
        );
    }

    #[Depends('testAssertReturn2123')]
    public function testAssertReturn2124(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 2142,
        );
    }

    #[Depends('testAssertReturn2124')]
    public function testAssertReturn2125(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 2143,
        );
    }

    #[Depends('testAssertReturn2125')]
    public function testAssertReturn2126(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 2144,
        );
    }

    #[Depends('testAssertReturn2126')]
    public function testAssertReturn2127(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 2145,
        );
    }

    #[Depends('testAssertReturn2127')]
    public function testAssertReturn2128(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 2146,
        );
    }

    #[Depends('testAssertReturn2128')]
    public function testAssertReturn2129(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 2147,
        );
    }

    #[Depends('testAssertReturn2129')]
    public function testAssertReturn2130(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 2148,
        );
    }

    #[Depends('testAssertReturn2130')]
    public function testAssertReturn2131(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 2149,
        );
    }

    #[Depends('testAssertReturn2131')]
    public function testAssertReturn2132(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 2150,
        );
    }

    #[Depends('testAssertReturn2132')]
    public function testAssertReturn2133(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 2151,
        );
    }

    #[Depends('testAssertReturn2133')]
    public function testAssertReturn2134(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 2152,
        );
    }

    #[Depends('testAssertReturn2134')]
    public function testAssertReturn2135(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 2153,
        );
    }

    #[Depends('testAssertReturn2135')]
    public function testAssertReturn2136(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 2154,
        );
    }

    #[Depends('testAssertReturn2136')]
    public function testAssertReturn2137(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 2155,
        );
    }

    #[Depends('testAssertReturn2137')]
    public function testAssertReturn2138(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 2156,
        );
    }

    #[Depends('testAssertReturn2138')]
    public function testAssertReturn2139(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 2157,
        );
    }

    #[Depends('testAssertReturn2139')]
    public function testAssertReturn2140(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 2158,
        );
    }

    #[Depends('testAssertReturn2140')]
    public function testAssertReturn2141(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 2159,
        );
    }

    #[Depends('testAssertReturn2141')]
    public function testAssertReturn2142(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 2160,
        );
    }

    #[Depends('testAssertReturn2142')]
    public function testAssertReturn2143(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 2161,
        );
    }

    #[Depends('testAssertReturn2143')]
    public function testAssertReturn2144(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 2162,
        );
    }

    #[Depends('testAssertReturn2144')]
    public function testAssertReturn2145(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 2163,
        );
    }

    #[Depends('testAssertReturn2145')]
    public function testAssertReturn2146(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 2164,
        );
    }

    #[Depends('testAssertReturn2146')]
    public function testAssertReturn2147(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 2165,
        );
    }

    #[Depends('testAssertReturn2147')]
    public function testAssertReturn2148(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 2166,
        );
    }

    #[Depends('testAssertReturn2148')]
    public function testAssertReturn2149(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 2167,
        );
    }

    #[Depends('testAssertReturn2149')]
    public function testAssertReturn2150(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2168,
        );
    }

    #[Depends('testAssertReturn2150')]
    public function testAssertReturn2151(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 2169,
        );
    }

    #[Depends('testAssertReturn2151')]
    public function testAssertReturn2152(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2170,
        );
    }

    #[Depends('testAssertReturn2152')]
    public function testAssertReturn2153(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2171,
        );
    }

    #[Depends('testAssertReturn2153')]
    public function testAssertReturn2154(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2172,
        );
    }

    #[Depends('testAssertReturn2154')]
    public function testAssertReturn2155(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2173,
        );
    }

    #[Depends('testAssertReturn2155')]
    public function testAssertReturn2156(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3204448256'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2174,
        );
    }

    #[Depends('testAssertReturn2156')]
    public function testAssertReturn2157(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2175,
        );
    }

    #[Depends('testAssertReturn2157')]
    public function testAssertReturn2158(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2176,
        );
    }

    #[Depends('testAssertReturn2158')]
    public function testAssertReturn2159(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2177,
        );
    }

    #[Depends('testAssertReturn2159')]
    public function testAssertReturn2160(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2178,
        );
    }

    #[Depends('testAssertReturn2160')]
    public function testAssertReturn2161(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 2179,
        );
    }

    #[Depends('testAssertReturn2161')]
    public function testAssertReturn2162(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2180,
        );
    }

    #[Depends('testAssertReturn2162')]
    public function testAssertReturn2163(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 2181,
        );
    }

    #[Depends('testAssertReturn2163')]
    public function testAssertReturn2164(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 2182,
        );
    }

    #[Depends('testAssertReturn2164')]
    public function testAssertReturn2165(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 2183,
        );
    }

    #[Depends('testAssertReturn2165')]
    public function testAssertReturn2166(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 2184,
        );
    }

    #[Depends('testAssertReturn2166')]
    public function testAssertReturn2167(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 2185,
        );
    }

    #[Depends('testAssertReturn2167')]
    public function testAssertReturn2168(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 2186,
        );
    }

    #[Depends('testAssertReturn2168')]
    public function testAssertReturn2169(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 2187,
        );
    }

    #[Depends('testAssertReturn2169')]
    public function testAssertReturn2170(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 2188,
        );
    }

    #[Depends('testAssertReturn2170')]
    public function testAssertReturn2171(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 2189,
        );
    }

    #[Depends('testAssertReturn2171')]
    public function testAssertReturn2172(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 2190,
        );
    }

    #[Depends('testAssertReturn2172')]
    public function testAssertReturn2173(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 2191,
        );
    }

    #[Depends('testAssertReturn2173')]
    public function testAssertReturn2174(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 2192,
        );
    }

    #[Depends('testAssertReturn2174')]
    public function testAssertReturn2175(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 2193,
        );
    }

    #[Depends('testAssertReturn2175')]
    public function testAssertReturn2176(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 2194,
        );
    }

    #[Depends('testAssertReturn2176')]
    public function testAssertReturn2177(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 2195,
        );
    }

    #[Depends('testAssertReturn2177')]
    public function testAssertReturn2178(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 2196,
        );
    }

    #[Depends('testAssertReturn2178')]
    public function testAssertReturn2179(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 2197,
        );
    }

    #[Depends('testAssertReturn2179')]
    public function testAssertReturn2180(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 2198,
        );
    }

    #[Depends('testAssertReturn2180')]
    public function testAssertReturn2181(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 2199,
        );
    }

    #[Depends('testAssertReturn2181')]
    public function testAssertReturn2182(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 2200,
        );
    }

    #[Depends('testAssertReturn2182')]
    public function testAssertReturn2183(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 2201,
        );
    }

    #[Depends('testAssertReturn2183')]
    public function testAssertReturn2184(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 2202,
        );
    }

    #[Depends('testAssertReturn2184')]
    public function testAssertReturn2185(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 2203,
        );
    }

    #[Depends('testAssertReturn2185')]
    public function testAssertReturn2186(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 2204,
        );
    }

    #[Depends('testAssertReturn2186')]
    public function testAssertReturn2187(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 2205,
        );
    }

    #[Depends('testAssertReturn2187')]
    public function testAssertReturn2188(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 2206,
        );
    }

    #[Depends('testAssertReturn2188')]
    public function testAssertReturn2189(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 2207,
        );
    }

    #[Depends('testAssertReturn2189')]
    public function testAssertReturn2190(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2208,
        );
    }

    #[Depends('testAssertReturn2190')]
    public function testAssertReturn2191(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 2209,
        );
    }

    #[Depends('testAssertReturn2191')]
    public function testAssertReturn2192(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2210,
        );
    }

    #[Depends('testAssertReturn2192')]
    public function testAssertReturn2193(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2211,
        );
    }

    #[Depends('testAssertReturn2193')]
    public function testAssertReturn2194(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2212,
        );
    }

    #[Depends('testAssertReturn2194')]
    public function testAssertReturn2195(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2213,
        );
    }

    #[Depends('testAssertReturn2195')]
    public function testAssertReturn2196(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3212836864'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2214,
        );
    }

    #[Depends('testAssertReturn2196')]
    public function testAssertReturn2197(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2215,
        );
    }

    #[Depends('testAssertReturn2197')]
    public function testAssertReturn2198(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2216,
        );
    }

    #[Depends('testAssertReturn2198')]
    public function testAssertReturn2199(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2217,
        );
    }

    #[Depends('testAssertReturn2199')]
    public function testAssertReturn2200(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2218,
        );
    }

    #[Depends('testAssertReturn2200')]
    public function testAssertReturn2201(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 2219,
        );
    }

    #[Depends('testAssertReturn2201')]
    public function testAssertReturn2202(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2220,
        );
    }

    #[Depends('testAssertReturn2202')]
    public function testAssertReturn2203(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 2221,
        );
    }

    #[Depends('testAssertReturn2203')]
    public function testAssertReturn2204(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 2222,
        );
    }

    #[Depends('testAssertReturn2204')]
    public function testAssertReturn2205(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 2223,
        );
    }

    #[Depends('testAssertReturn2205')]
    public function testAssertReturn2206(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 2224,
        );
    }

    #[Depends('testAssertReturn2206')]
    public function testAssertReturn2207(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 2225,
        );
    }

    #[Depends('testAssertReturn2207')]
    public function testAssertReturn2208(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 2226,
        );
    }

    #[Depends('testAssertReturn2208')]
    public function testAssertReturn2209(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 2227,
        );
    }

    #[Depends('testAssertReturn2209')]
    public function testAssertReturn2210(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 2228,
        );
    }

    #[Depends('testAssertReturn2210')]
    public function testAssertReturn2211(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 2229,
        );
    }

    #[Depends('testAssertReturn2211')]
    public function testAssertReturn2212(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 2230,
        );
    }

    #[Depends('testAssertReturn2212')]
    public function testAssertReturn2213(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 2231,
        );
    }

    #[Depends('testAssertReturn2213')]
    public function testAssertReturn2214(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 2232,
        );
    }

    #[Depends('testAssertReturn2214')]
    public function testAssertReturn2215(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 2233,
        );
    }

    #[Depends('testAssertReturn2215')]
    public function testAssertReturn2216(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 2234,
        );
    }

    #[Depends('testAssertReturn2216')]
    public function testAssertReturn2217(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 2235,
        );
    }

    #[Depends('testAssertReturn2217')]
    public function testAssertReturn2218(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 2236,
        );
    }

    #[Depends('testAssertReturn2218')]
    public function testAssertReturn2219(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 2237,
        );
    }

    #[Depends('testAssertReturn2219')]
    public function testAssertReturn2220(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 2238,
        );
    }

    #[Depends('testAssertReturn2220')]
    public function testAssertReturn2221(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 2239,
        );
    }

    #[Depends('testAssertReturn2221')]
    public function testAssertReturn2222(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 2240,
        );
    }

    #[Depends('testAssertReturn2222')]
    public function testAssertReturn2223(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 2241,
        );
    }

    #[Depends('testAssertReturn2223')]
    public function testAssertReturn2224(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 2242,
        );
    }

    #[Depends('testAssertReturn2224')]
    public function testAssertReturn2225(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 2243,
        );
    }

    #[Depends('testAssertReturn2225')]
    public function testAssertReturn2226(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 2244,
        );
    }

    #[Depends('testAssertReturn2226')]
    public function testAssertReturn2227(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 2245,
        );
    }

    #[Depends('testAssertReturn2227')]
    public function testAssertReturn2228(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 2246,
        );
    }

    #[Depends('testAssertReturn2228')]
    public function testAssertReturn2229(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 2247,
        );
    }

    #[Depends('testAssertReturn2229')]
    public function testAssertReturn2230(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2248,
        );
    }

    #[Depends('testAssertReturn2230')]
    public function testAssertReturn2231(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 2249,
        );
    }

    #[Depends('testAssertReturn2231')]
    public function testAssertReturn2232(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2250,
        );
    }

    #[Depends('testAssertReturn2232')]
    public function testAssertReturn2233(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2251,
        );
    }

    #[Depends('testAssertReturn2233')]
    public function testAssertReturn2234(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2252,
        );
    }

    #[Depends('testAssertReturn2234')]
    public function testAssertReturn2235(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2253,
        );
    }

    #[Depends('testAssertReturn2235')]
    public function testAssertReturn2236(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '3234402267'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2254,
        );
    }

    #[Depends('testAssertReturn2236')]
    public function testAssertReturn2237(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2255,
        );
    }

    #[Depends('testAssertReturn2237')]
    public function testAssertReturn2238(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2256,
        );
    }

    #[Depends('testAssertReturn2238')]
    public function testAssertReturn2239(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2257,
        );
    }

    #[Depends('testAssertReturn2239')]
    public function testAssertReturn2240(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '1086918619'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2258,
        );
    }

    #[Depends('testAssertReturn2240')]
    public function testAssertReturn2241(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 2259,
        );
    }

    #[Depends('testAssertReturn2241')]
    public function testAssertReturn2242(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2260,
        );
    }

    #[Depends('testAssertReturn2242')]
    public function testAssertReturn2243(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 2261,
        );
    }

    #[Depends('testAssertReturn2243')]
    public function testAssertReturn2244(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 2262,
        );
    }

    #[Depends('testAssertReturn2244')]
    public function testAssertReturn2245(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 2263,
        );
    }

    #[Depends('testAssertReturn2245')]
    public function testAssertReturn2246(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 2264,
        );
    }

    #[Depends('testAssertReturn2246')]
    public function testAssertReturn2247(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 2265,
        );
    }

    #[Depends('testAssertReturn2247')]
    public function testAssertReturn2248(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 2266,
        );
    }

    #[Depends('testAssertReturn2248')]
    public function testAssertReturn2249(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 2267,
        );
    }

    #[Depends('testAssertReturn2249')]
    public function testAssertReturn2250(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 2268,
        );
    }

    #[Depends('testAssertReturn2250')]
    public function testAssertReturn2251(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 2269,
        );
    }

    #[Depends('testAssertReturn2251')]
    public function testAssertReturn2252(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 2270,
        );
    }

    #[Depends('testAssertReturn2252')]
    public function testAssertReturn2253(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 2271,
        );
    }

    #[Depends('testAssertReturn2253')]
    public function testAssertReturn2254(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 2272,
        );
    }

    #[Depends('testAssertReturn2254')]
    public function testAssertReturn2255(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 2273,
        );
    }

    #[Depends('testAssertReturn2255')]
    public function testAssertReturn2256(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 2274,
        );
    }

    #[Depends('testAssertReturn2256')]
    public function testAssertReturn2257(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 2275,
        );
    }

    #[Depends('testAssertReturn2257')]
    public function testAssertReturn2258(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 2276,
        );
    }

    #[Depends('testAssertReturn2258')]
    public function testAssertReturn2259(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 2277,
        );
    }

    #[Depends('testAssertReturn2259')]
    public function testAssertReturn2260(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 2278,
        );
    }

    #[Depends('testAssertReturn2260')]
    public function testAssertReturn2261(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 2279,
        );
    }

    #[Depends('testAssertReturn2261')]
    public function testAssertReturn2262(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 2280,
        );
    }

    #[Depends('testAssertReturn2262')]
    public function testAssertReturn2263(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 2281,
        );
    }

    #[Depends('testAssertReturn2263')]
    public function testAssertReturn2264(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 2282,
        );
    }

    #[Depends('testAssertReturn2264')]
    public function testAssertReturn2265(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 2283,
        );
    }

    #[Depends('testAssertReturn2265')]
    public function testAssertReturn2266(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 2284,
        );
    }

    #[Depends('testAssertReturn2266')]
    public function testAssertReturn2267(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 2285,
        );
    }

    #[Depends('testAssertReturn2267')]
    public function testAssertReturn2268(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 2286,
        );
    }

    #[Depends('testAssertReturn2268')]
    public function testAssertReturn2269(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 2287,
        );
    }

    #[Depends('testAssertReturn2269')]
    public function testAssertReturn2270(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2288,
        );
    }

    #[Depends('testAssertReturn2270')]
    public function testAssertReturn2271(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 2289,
        );
    }

    #[Depends('testAssertReturn2271')]
    public function testAssertReturn2272(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2290,
        );
    }

    #[Depends('testAssertReturn2272')]
    public function testAssertReturn2273(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2291,
        );
    }

    #[Depends('testAssertReturn2273')]
    public function testAssertReturn2274(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2292,
        );
    }

    #[Depends('testAssertReturn2274')]
    public function testAssertReturn2275(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2293,
        );
    }

    #[Depends('testAssertReturn2275')]
    public function testAssertReturn2276(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578687'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2294,
        );
    }

    #[Depends('testAssertReturn2276')]
    public function testAssertReturn2277(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2295,
        );
    }

    #[Depends('testAssertReturn2277')]
    public function testAssertReturn2278(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2296,
        );
    }

    #[Depends('testAssertReturn2278')]
    public function testAssertReturn2279(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2297,
        );
    }

    #[Depends('testAssertReturn2279')]
    public function testAssertReturn2280(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2298,
        );
    }

    #[Depends('testAssertReturn2280')]
    public function testAssertReturn2281(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 2299,
        );
    }

    #[Depends('testAssertReturn2281')]
    public function testAssertReturn2282(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2300,
        );
    }

    #[Depends('testAssertReturn2282')]
    public function testAssertReturn2283(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2301,
        );
    }

    #[Depends('testAssertReturn2283')]
    public function testAssertReturn2284(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2302,
        );
    }

    #[Depends('testAssertReturn2284')]
    public function testAssertReturn2285(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 2303,
        );
    }

    #[Depends('testAssertReturn2285')]
    public function testAssertReturn2286(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 2304,
        );
    }

    #[Depends('testAssertReturn2286')]
    public function testAssertReturn2287(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2305,
        );
    }

    #[Depends('testAssertReturn2287')]
    public function testAssertReturn2288(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2306,
        );
    }

    #[Depends('testAssertReturn2288')]
    public function testAssertReturn2289(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 2307,
        );
    }

    #[Depends('testAssertReturn2289')]
    public function testAssertReturn2290(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 2308,
        );
    }

    #[Depends('testAssertReturn2290')]
    public function testAssertReturn2291(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2309,
        );
    }

    #[Depends('testAssertReturn2291')]
    public function testAssertReturn2292(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2310,
        );
    }

    #[Depends('testAssertReturn2292')]
    public function testAssertReturn2293(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3204448256']],
            line: 2311,
        );
    }

    #[Depends('testAssertReturn2293')]
    public function testAssertReturn2294(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1056964608']],
            line: 2312,
        );
    }

    #[Depends('testAssertReturn2294')]
    public function testAssertReturn2295(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2313,
        );
    }

    #[Depends('testAssertReturn2295')]
    public function testAssertReturn2296(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2314,
        );
    }

    #[Depends('testAssertReturn2296')]
    public function testAssertReturn2297(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 2315,
        );
    }

    #[Depends('testAssertReturn2297')]
    public function testAssertReturn2298(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 2316,
        );
    }

    #[Depends('testAssertReturn2298')]
    public function testAssertReturn2299(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2317,
        );
    }

    #[Depends('testAssertReturn2299')]
    public function testAssertReturn2300(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2318,
        );
    }

    #[Depends('testAssertReturn2300')]
    public function testAssertReturn2301(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3234402267']],
            line: 2319,
        );
    }

    #[Depends('testAssertReturn2301')]
    public function testAssertReturn2302(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1086918619']],
            line: 2320,
        );
    }

    #[Depends('testAssertReturn2302')]
    public function testAssertReturn2303(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2321,
        );
    }

    #[Depends('testAssertReturn2303')]
    public function testAssertReturn2304(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2322,
        );
    }

    #[Depends('testAssertReturn2304')]
    public function testAssertReturn2305(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 2323,
        );
    }

    #[Depends('testAssertReturn2305')]
    public function testAssertReturn2306(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 2324,
        );
    }

    #[Depends('testAssertReturn2306')]
    public function testAssertReturn2307(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2325,
        );
    }

    #[Depends('testAssertReturn2307')]
    public function testAssertReturn2308(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2326,
        );
    }

    #[Depends('testAssertReturn2308')]
    public function testAssertReturn2309(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 2327,
        );
    }

    #[Depends('testAssertReturn2309')]
    public function testAssertReturn2310(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2328,
        );
    }

    #[Depends('testAssertReturn2310')]
    public function testAssertReturn2311(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2329,
        );
    }

    #[Depends('testAssertReturn2311')]
    public function testAssertReturn2312(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2330,
        );
    }

    #[Depends('testAssertReturn2312')]
    public function testAssertReturn2313(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2331,
        );
    }

    #[Depends('testAssertReturn2313')]
    public function testAssertReturn2314(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2332,
        );
    }

    #[Depends('testAssertReturn2314')]
    public function testAssertReturn2315(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2333,
        );
    }

    #[Depends('testAssertReturn2315')]
    public function testAssertReturn2316(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2334,
        );
    }

    #[Depends('testAssertReturn2316')]
    public function testAssertReturn2317(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2335,
        );
    }

    #[Depends('testAssertReturn2317')]
    public function testAssertReturn2318(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2336,
        );
    }

    #[Depends('testAssertReturn2318')]
    public function testAssertReturn2319(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2337,
        );
    }

    #[Depends('testAssertReturn2319')]
    public function testAssertReturn2320(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2338,
        );
    }

    #[Depends('testAssertReturn2320')]
    public function testAssertReturn2321(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2339,
        );
    }

    #[Depends('testAssertReturn2321')]
    public function testAssertReturn2322(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2340,
        );
    }

    #[Depends('testAssertReturn2322')]
    public function testAssertReturn2323(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2341,
        );
    }

    #[Depends('testAssertReturn2323')]
    public function testAssertReturn2324(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2342,
        );
    }

    #[Depends('testAssertReturn2324')]
    public function testAssertReturn2325(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2343,
        );
    }

    #[Depends('testAssertReturn2325')]
    public function testAssertReturn2326(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2344,
        );
    }

    #[Depends('testAssertReturn2326')]
    public function testAssertReturn2327(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2345,
        );
    }

    #[Depends('testAssertReturn2327')]
    public function testAssertReturn2328(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2346,
        );
    }

    #[Depends('testAssertReturn2328')]
    public function testAssertReturn2329(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2347,
        );
    }

    #[Depends('testAssertReturn2329')]
    public function testAssertReturn2330(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2348,
        );
    }

    #[Depends('testAssertReturn2330')]
    public function testAssertReturn2331(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2349,
        );
    }

    #[Depends('testAssertReturn2331')]
    public function testAssertReturn2332(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2350,
        );
    }

    #[Depends('testAssertReturn2332')]
    public function testAssertReturn2333(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2351,
        );
    }

    #[Depends('testAssertReturn2333')]
    public function testAssertReturn2334(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2352,
        );
    }

    #[Depends('testAssertReturn2334')]
    public function testAssertReturn2335(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2353,
        );
    }

    #[Depends('testAssertReturn2335')]
    public function testAssertReturn2336(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2354,
        );
    }

    #[Depends('testAssertReturn2336')]
    public function testAssertReturn2337(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2355,
        );
    }

    #[Depends('testAssertReturn2337')]
    public function testAssertReturn2338(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2356,
        );
    }

    #[Depends('testAssertReturn2338')]
    public function testAssertReturn2339(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2357,
        );
    }

    #[Depends('testAssertReturn2339')]
    public function testAssertReturn2340(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2358,
        );
    }

    #[Depends('testAssertReturn2340')]
    public function testAssertReturn2341(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2359,
        );
    }

    #[Depends('testAssertReturn2341')]
    public function testAssertReturn2342(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2360,
        );
    }

    #[Depends('testAssertReturn2342')]
    public function testAssertReturn2343(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2361,
        );
    }

    #[Depends('testAssertReturn2343')]
    public function testAssertReturn2344(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2362,
        );
    }

    #[Depends('testAssertReturn2344')]
    public function testAssertReturn2345(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2363,
        );
    }

    #[Depends('testAssertReturn2345')]
    public function testAssertReturn2346(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2364,
        );
    }

    #[Depends('testAssertReturn2346')]
    public function testAssertReturn2347(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2365,
        );
    }

    #[Depends('testAssertReturn2347')]
    public function testAssertReturn2348(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2366,
        );
    }

    #[Depends('testAssertReturn2348')]
    public function testAssertReturn2349(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2367,
        );
    }

    #[Depends('testAssertReturn2349')]
    public function testAssertReturn2350(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2368,
        );
    }

    #[Depends('testAssertReturn2350')]
    public function testAssertReturn2351(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2369,
        );
    }

    #[Depends('testAssertReturn2351')]
    public function testAssertReturn2352(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2370,
        );
    }

    #[Depends('testAssertReturn2352')]
    public function testAssertReturn2353(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2371,
        );
    }

    #[Depends('testAssertReturn2353')]
    public function testAssertReturn2354(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2372,
        );
    }

    #[Depends('testAssertReturn2354')]
    public function testAssertReturn2355(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2373,
        );
    }

    #[Depends('testAssertReturn2355')]
    public function testAssertReturn2356(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2374,
        );
    }

    #[Depends('testAssertReturn2356')]
    public function testAssertReturn2357(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2375,
        );
    }

    #[Depends('testAssertReturn2357')]
    public function testAssertReturn2358(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2376,
        );
    }

    #[Depends('testAssertReturn2358')]
    public function testAssertReturn2359(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2377,
        );
    }

    #[Depends('testAssertReturn2359')]
    public function testAssertReturn2360(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2378,
        );
    }

    #[Depends('testAssertReturn2360')]
    public function testAssertReturn2361(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2379,
        );
    }

    #[Depends('testAssertReturn2361')]
    public function testAssertReturn2362(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2380,
        );
    }

    #[Depends('testAssertReturn2362')]
    public function testAssertReturn2363(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2381,
        );
    }

    #[Depends('testAssertReturn2363')]
    public function testAssertReturn2364(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2382,
        );
    }

    #[Depends('testAssertReturn2364')]
    public function testAssertReturn2365(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2383,
        );
    }

    #[Depends('testAssertReturn2365')]
    public function testAssertReturn2366(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2384,
        );
    }

    #[Depends('testAssertReturn2366')]
    public function testAssertReturn2367(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2385,
        );
    }

    #[Depends('testAssertReturn2367')]
    public function testAssertReturn2368(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2386,
        );
    }

    #[Depends('testAssertReturn2368')]
    public function testAssertReturn2369(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2387,
        );
    }

    #[Depends('testAssertReturn2369')]
    public function testAssertReturn2370(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2388,
        );
    }

    #[Depends('testAssertReturn2370')]
    public function testAssertReturn2371(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2389,
        );
    }

    #[Depends('testAssertReturn2371')]
    public function testAssertReturn2372(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2390,
        );
    }

    #[Depends('testAssertReturn2372')]
    public function testAssertReturn2373(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2391,
        );
    }

    #[Depends('testAssertReturn2373')]
    public function testAssertReturn2374(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2392,
        );
    }

    #[Depends('testAssertReturn2374')]
    public function testAssertReturn2375(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2393,
        );
    }

    #[Depends('testAssertReturn2375')]
    public function testAssertReturn2376(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2394,
        );
    }

    #[Depends('testAssertReturn2376')]
    public function testAssertReturn2377(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2395,
        );
    }

    #[Depends('testAssertReturn2377')]
    public function testAssertReturn2378(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2396,
        );
    }

    #[Depends('testAssertReturn2378')]
    public function testAssertReturn2379(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2397,
        );
    }

    #[Depends('testAssertReturn2379')]
    public function testAssertReturn2380(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2398,
        );
    }

    #[Depends('testAssertReturn2380')]
    public function testAssertReturn2381(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2399,
        );
    }

    #[Depends('testAssertReturn2381')]
    public function testAssertReturn2382(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2400,
        );
    }

    #[Depends('testAssertReturn2382')]
    public function testAssertReturn2383(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2401,
        );
    }

    #[Depends('testAssertReturn2383')]
    public function testAssertReturn2384(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2402,
        );
    }

    #[Depends('testAssertReturn2384')]
    public function testAssertReturn2385(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2403,
        );
    }

    #[Depends('testAssertReturn2385')]
    public function testAssertReturn2386(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2404,
        );
    }

    #[Depends('testAssertReturn2386')]
    public function testAssertReturn2387(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2405,
        );
    }

    #[Depends('testAssertReturn2387')]
    public function testAssertReturn2388(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2406,
        );
    }

    #[Depends('testAssertReturn2388')]
    public function testAssertReturn2389(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2407,
        );
    }

    #[Depends('testAssertReturn2389')]
    public function testAssertReturn2390(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2408,
        );
    }

    #[Depends('testAssertReturn2390')]
    public function testAssertReturn2391(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4290772992'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2409,
        );
    }

    #[Depends('testAssertReturn2391')]
    public function testAssertReturn2392(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '4288675840'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2410,
        );
    }

    #[Depends('testAssertReturn2392')]
    public function testAssertReturn2393(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2411,
        );
    }

    #[Depends('testAssertReturn2393')]
    public function testAssertReturn2394(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2412,
        );
    }

    #[Depends('testAssertReturn2394')]
    public function testAssertReturn2395(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2413,
        );
    }

    #[Depends('testAssertReturn2395')]
    public function testAssertReturn2396(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2414,
        );
    }

    #[Depends('testAssertReturn2396')]
    public function testAssertReturn2397(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2415,
        );
    }

    #[Depends('testAssertReturn2397')]
    public function testAssertReturn2398(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2416,
        );
    }

    #[Depends('testAssertReturn2398')]
    public function testAssertReturn2399(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2417,
        );
    }

    #[Depends('testAssertReturn2399')]
    public function testAssertReturn2400(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'max', 'args' => [['type' => 'f32', 'value' => '2141192192'], ['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2418,
        );
    }

    #[Depends('testAssertReturn2400')]
    public function testAssertReturn2401(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sqrt', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 2419,
        );
    }

    #[Depends('testAssertReturn2401')]
    public function testAssertReturn2402(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sqrt', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2420,
        );
    }

    #[Depends('testAssertReturn2402')]
    public function testAssertReturn2403(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sqrt', 'args' => [['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2421,
        );
    }

    #[Depends('testAssertReturn2403')]
    public function testAssertReturn2404(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sqrt', 'args' => [['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '439682291']],
            line: 2422,
        );
    }

    #[Depends('testAssertReturn2404')]
    public function testAssertReturn2405(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sqrt', 'args' => [['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2423,
        );
    }

    #[Depends('testAssertReturn2405')]
    public function testAssertReturn2406(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sqrt', 'args' => [['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '536870912']],
            line: 2424,
        );
    }

    #[Depends('testAssertReturn2406')]
    public function testAssertReturn2407(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sqrt', 'args' => [['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2425,
        );
    }

    #[Depends('testAssertReturn2407')]
    public function testAssertReturn2408(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sqrt', 'args' => [['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1060439283']],
            line: 2426,
        );
    }

    #[Depends('testAssertReturn2408')]
    public function testAssertReturn2409(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sqrt', 'args' => [['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2427,
        );
    }

    #[Depends('testAssertReturn2409')]
    public function testAssertReturn2410(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sqrt', 'args' => [['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 2428,
        );
    }

    #[Depends('testAssertReturn2410')]
    public function testAssertReturn2411(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sqrt', 'args' => [['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2429,
        );
    }

    #[Depends('testAssertReturn2411')]
    public function testAssertReturn2412(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sqrt', 'args' => [['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1075866777']],
            line: 2430,
        );
    }

    #[Depends('testAssertReturn2412')]
    public function testAssertReturn2413(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sqrt', 'args' => [['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2431,
        );
    }

    #[Depends('testAssertReturn2413')]
    public function testAssertReturn2414(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sqrt', 'args' => [['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '1602224127']],
            line: 2432,
        );
    }

    #[Depends('testAssertReturn2414')]
    public function testAssertReturn2415(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sqrt', 'args' => [['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2433,
        );
    }

    #[Depends('testAssertReturn2415')]
    public function testAssertReturn2416(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sqrt', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2434,
        );
    }

    #[Depends('testAssertReturn2416')]
    public function testAssertReturn2417(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sqrt', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2435,
        );
    }

    #[Depends('testAssertReturn2417')]
    public function testAssertReturn2418(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sqrt', 'args' => [['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2436,
        );
    }

    #[Depends('testAssertReturn2418')]
    public function testAssertReturn2419(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sqrt', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2437,
        );
    }

    #[Depends('testAssertReturn2419')]
    public function testAssertReturn2420(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sqrt', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2438,
        );
    }

    #[Depends('testAssertReturn2420')]
    public function testAssertReturn2421(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'floor', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 2439,
        );
    }

    #[Depends('testAssertReturn2421')]
    public function testAssertReturn2422(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'floor', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2440,
        );
    }

    #[Depends('testAssertReturn2422')]
    public function testAssertReturn2423(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'floor', 'args' => [['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 2441,
        );
    }

    #[Depends('testAssertReturn2423')]
    public function testAssertReturn2424(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'floor', 'args' => [['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2442,
        );
    }

    #[Depends('testAssertReturn2424')]
    public function testAssertReturn2425(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'floor', 'args' => [['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 2443,
        );
    }

    #[Depends('testAssertReturn2425')]
    public function testAssertReturn2426(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'floor', 'args' => [['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2444,
        );
    }

    #[Depends('testAssertReturn2426')]
    public function testAssertReturn2427(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'floor', 'args' => [['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 2445,
        );
    }

    #[Depends('testAssertReturn2427')]
    public function testAssertReturn2428(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'floor', 'args' => [['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2446,
        );
    }

    #[Depends('testAssertReturn2428')]
    public function testAssertReturn2429(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'floor', 'args' => [['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 2447,
        );
    }

    #[Depends('testAssertReturn2429')]
    public function testAssertReturn2430(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'floor', 'args' => [['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 2448,
        );
    }

    #[Depends('testAssertReturn2430')]
    public function testAssertReturn2431(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'floor', 'args' => [['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3235905536']],
            line: 2449,
        );
    }

    #[Depends('testAssertReturn2431')]
    public function testAssertReturn2432(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'floor', 'args' => [['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1086324736']],
            line: 2450,
        );
    }

    #[Depends('testAssertReturn2432')]
    public function testAssertReturn2433(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'floor', 'args' => [['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 2451,
        );
    }

    #[Depends('testAssertReturn2433')]
    public function testAssertReturn2434(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'floor', 'args' => [['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 2452,
        );
    }

    #[Depends('testAssertReturn2434')]
    public function testAssertReturn2435(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'floor', 'args' => [['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 2453,
        );
    }

    #[Depends('testAssertReturn2435')]
    public function testAssertReturn2436(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'floor', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2454,
        );
    }

    #[Depends('testAssertReturn2436')]
    public function testAssertReturn2437(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'floor', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2455,
        );
    }

    #[Depends('testAssertReturn2437')]
    public function testAssertReturn2438(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'floor', 'args' => [['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2456,
        );
    }

    #[Depends('testAssertReturn2438')]
    public function testAssertReturn2439(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'floor', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2457,
        );
    }

    #[Depends('testAssertReturn2439')]
    public function testAssertReturn2440(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'floor', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2458,
        );
    }

    #[Depends('testAssertReturn2440')]
    public function testAssertReturn2441(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ceil', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 2459,
        );
    }

    #[Depends('testAssertReturn2441')]
    public function testAssertReturn2442(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ceil', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2460,
        );
    }

    #[Depends('testAssertReturn2442')]
    public function testAssertReturn2443(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ceil', 'args' => [['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 2461,
        );
    }

    #[Depends('testAssertReturn2443')]
    public function testAssertReturn2444(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ceil', 'args' => [['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 2462,
        );
    }

    #[Depends('testAssertReturn2444')]
    public function testAssertReturn2445(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ceil', 'args' => [['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 2463,
        );
    }

    #[Depends('testAssertReturn2445')]
    public function testAssertReturn2446(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ceil', 'args' => [['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 2464,
        );
    }

    #[Depends('testAssertReturn2446')]
    public function testAssertReturn2447(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ceil', 'args' => [['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 2465,
        );
    }

    #[Depends('testAssertReturn2447')]
    public function testAssertReturn2448(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ceil', 'args' => [['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 2466,
        );
    }

    #[Depends('testAssertReturn2448')]
    public function testAssertReturn2449(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ceil', 'args' => [['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 2467,
        );
    }

    #[Depends('testAssertReturn2449')]
    public function testAssertReturn2450(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ceil', 'args' => [['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 2468,
        );
    }

    #[Depends('testAssertReturn2450')]
    public function testAssertReturn2451(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ceil', 'args' => [['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3233808384']],
            line: 2469,
        );
    }

    #[Depends('testAssertReturn2451')]
    public function testAssertReturn2452(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ceil', 'args' => [['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1088421888']],
            line: 2470,
        );
    }

    #[Depends('testAssertReturn2452')]
    public function testAssertReturn2453(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ceil', 'args' => [['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 2471,
        );
    }

    #[Depends('testAssertReturn2453')]
    public function testAssertReturn2454(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ceil', 'args' => [['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 2472,
        );
    }

    #[Depends('testAssertReturn2454')]
    public function testAssertReturn2455(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ceil', 'args' => [['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 2473,
        );
    }

    #[Depends('testAssertReturn2455')]
    public function testAssertReturn2456(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ceil', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2474,
        );
    }

    #[Depends('testAssertReturn2456')]
    public function testAssertReturn2457(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ceil', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2475,
        );
    }

    #[Depends('testAssertReturn2457')]
    public function testAssertReturn2458(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ceil', 'args' => [['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2476,
        );
    }

    #[Depends('testAssertReturn2458')]
    public function testAssertReturn2459(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ceil', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2477,
        );
    }

    #[Depends('testAssertReturn2459')]
    public function testAssertReturn2460(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ceil', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2478,
        );
    }

    #[Depends('testAssertReturn2460')]
    public function testAssertReturn2461(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'trunc', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 2479,
        );
    }

    #[Depends('testAssertReturn2461')]
    public function testAssertReturn2462(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'trunc', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2480,
        );
    }

    #[Depends('testAssertReturn2462')]
    public function testAssertReturn2463(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'trunc', 'args' => [['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 2481,
        );
    }

    #[Depends('testAssertReturn2463')]
    public function testAssertReturn2464(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'trunc', 'args' => [['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2482,
        );
    }

    #[Depends('testAssertReturn2464')]
    public function testAssertReturn2465(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'trunc', 'args' => [['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 2483,
        );
    }

    #[Depends('testAssertReturn2465')]
    public function testAssertReturn2466(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'trunc', 'args' => [['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2484,
        );
    }

    #[Depends('testAssertReturn2466')]
    public function testAssertReturn2467(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'trunc', 'args' => [['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 2485,
        );
    }

    #[Depends('testAssertReturn2467')]
    public function testAssertReturn2468(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'trunc', 'args' => [['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2486,
        );
    }

    #[Depends('testAssertReturn2468')]
    public function testAssertReturn2469(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'trunc', 'args' => [['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 2487,
        );
    }

    #[Depends('testAssertReturn2469')]
    public function testAssertReturn2470(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'trunc', 'args' => [['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 2488,
        );
    }

    #[Depends('testAssertReturn2470')]
    public function testAssertReturn2471(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'trunc', 'args' => [['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3233808384']],
            line: 2489,
        );
    }

    #[Depends('testAssertReturn2471')]
    public function testAssertReturn2472(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'trunc', 'args' => [['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1086324736']],
            line: 2490,
        );
    }

    #[Depends('testAssertReturn2472')]
    public function testAssertReturn2473(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'trunc', 'args' => [['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 2491,
        );
    }

    #[Depends('testAssertReturn2473')]
    public function testAssertReturn2474(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'trunc', 'args' => [['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 2492,
        );
    }

    #[Depends('testAssertReturn2474')]
    public function testAssertReturn2475(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'trunc', 'args' => [['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 2493,
        );
    }

    #[Depends('testAssertReturn2475')]
    public function testAssertReturn2476(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'trunc', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2494,
        );
    }

    #[Depends('testAssertReturn2476')]
    public function testAssertReturn2477(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'trunc', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2495,
        );
    }

    #[Depends('testAssertReturn2477')]
    public function testAssertReturn2478(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'trunc', 'args' => [['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2496,
        );
    }

    #[Depends('testAssertReturn2478')]
    public function testAssertReturn2479(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'trunc', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2497,
        );
    }

    #[Depends('testAssertReturn2479')]
    public function testAssertReturn2480(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'trunc', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2498,
        );
    }

    #[Depends('testAssertReturn2480')]
    public function testAssertReturn2481(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nearest', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 2499,
        );
    }

    #[Depends('testAssertReturn2481')]
    public function testAssertReturn2482(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nearest', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2500,
        );
    }

    #[Depends('testAssertReturn2482')]
    public function testAssertReturn2483(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nearest', 'args' => [['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 2501,
        );
    }

    #[Depends('testAssertReturn2483')]
    public function testAssertReturn2484(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nearest', 'args' => [['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2502,
        );
    }

    #[Depends('testAssertReturn2484')]
    public function testAssertReturn2485(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nearest', 'args' => [['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 2503,
        );
    }

    #[Depends('testAssertReturn2485')]
    public function testAssertReturn2486(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nearest', 'args' => [['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2504,
        );
    }

    #[Depends('testAssertReturn2486')]
    public function testAssertReturn2487(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nearest', 'args' => [['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 2505,
        );
    }

    #[Depends('testAssertReturn2487')]
    public function testAssertReturn2488(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nearest', 'args' => [['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2506,
        );
    }

    #[Depends('testAssertReturn2488')]
    public function testAssertReturn2489(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nearest', 'args' => [['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 2507,
        );
    }

    #[Depends('testAssertReturn2489')]
    public function testAssertReturn2490(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nearest', 'args' => [['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 2508,
        );
    }

    #[Depends('testAssertReturn2490')]
    public function testAssertReturn2491(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nearest', 'args' => [['type' => 'f32', 'value' => '3234402267']]],
            expected: [['type' => 'f32', 'value' => '3233808384']],
            line: 2509,
        );
    }

    #[Depends('testAssertReturn2491')]
    public function testAssertReturn2492(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nearest', 'args' => [['type' => 'f32', 'value' => '1086918619']]],
            expected: [['type' => 'f32', 'value' => '1086324736']],
            line: 2510,
        );
    }

    #[Depends('testAssertReturn2492')]
    public function testAssertReturn2493(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nearest', 'args' => [['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 2511,
        );
    }

    #[Depends('testAssertReturn2493')]
    public function testAssertReturn2494(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nearest', 'args' => [['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 2512,
        );
    }

    #[Depends('testAssertReturn2494')]
    public function testAssertReturn2495(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nearest', 'args' => [['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 2513,
        );
    }

    #[Depends('testAssertReturn2495')]
    public function testAssertReturn2496(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nearest', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 2514,
        );
    }

    #[Depends('testAssertReturn2496')]
    public function testAssertReturn2497(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nearest', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2515,
        );
    }

    #[Depends('testAssertReturn2497')]
    public function testAssertReturn2498(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nearest', 'args' => [['type' => 'f32', 'value' => '4288675840']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2516,
        );
    }

    #[Depends('testAssertReturn2498')]
    public function testAssertReturn2499(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nearest', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 2517,
        );
    }

    #[Depends('testAssertReturn2499')]
    public function testAssertReturn2500(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nearest', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 2518,
        );
    }

    #[Depends('testAssertReturn2500')]
    public function testAssertInvalid2501(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'f32.1.wasm',
            text: 'type mismatch',
            line: 2523,
        );
    }

    #[Depends('testAssertInvalid2501')]
    public function testAssertInvalid2502(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'f32.2.wasm',
            text: 'type mismatch',
            line: 2524,
        );
    }

    #[Depends('testAssertInvalid2502')]
    public function testAssertInvalid2503(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'f32.3.wasm',
            text: 'type mismatch',
            line: 2525,
        );
    }

    #[Depends('testAssertInvalid2503')]
    public function testAssertInvalid2504(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'f32.4.wasm',
            text: 'type mismatch',
            line: 2526,
        );
    }

    #[Depends('testAssertInvalid2504')]
    public function testAssertInvalid2505(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'f32.5.wasm',
            text: 'type mismatch',
            line: 2527,
        );
    }

    #[Depends('testAssertInvalid2505')]
    public function testAssertInvalid2506(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'f32.6.wasm',
            text: 'type mismatch',
            line: 2528,
        );
    }

    #[Depends('testAssertInvalid2506')]
    public function testAssertInvalid2507(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'f32.7.wasm',
            text: 'type mismatch',
            line: 2529,
        );
    }

    #[Depends('testAssertInvalid2507')]
    public function testAssertInvalid2508(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'f32.8.wasm',
            text: 'type mismatch',
            line: 2530,
        );
    }

    #[Depends('testAssertInvalid2508')]
    public function testAssertInvalid2509(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'f32.9.wasm',
            text: 'type mismatch',
            line: 2531,
        );
    }

    #[Depends('testAssertInvalid2509')]
    public function testAssertInvalid2510(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'f32.10.wasm',
            text: 'type mismatch',
            line: 2532,
        );
    }

    #[Depends('testAssertInvalid2510')]
    public function testAssertInvalid2511(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'f32.11.wasm',
            text: 'type mismatch',
            line: 2533,
        );
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertInvalid2511')]
    public function testAssertMalformed2512(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed2512')]
    public function testAssertMalformed2513(): void
    {
    }
}
