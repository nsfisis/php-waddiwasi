<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class AddressTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'address.0.wasm',
            name: null,
            line: 3,
        );
    }

    #[Depends('testModule0')]
    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good1', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '97']],
            line: 104,
        );
    }

    #[Depends('testAssertReturn1')]
    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good2', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '97']],
            line: 105,
        );
    }

    #[Depends('testAssertReturn2')]
    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good3', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '98']],
            line: 106,
        );
    }

    #[Depends('testAssertReturn3')]
    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good4', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '99']],
            line: 107,
        );
    }

    #[Depends('testAssertReturn4')]
    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good5', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '122']],
            line: 108,
        );
    }

    #[Depends('testAssertReturn5')]
    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good1', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '97']],
            line: 110,
        );
    }

    #[Depends('testAssertReturn6')]
    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good2', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '97']],
            line: 111,
        );
    }

    #[Depends('testAssertReturn7')]
    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good3', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '98']],
            line: 112,
        );
    }

    #[Depends('testAssertReturn8')]
    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good4', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '99']],
            line: 113,
        );
    }

    #[Depends('testAssertReturn9')]
    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good5', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '122']],
            line: 114,
        );
    }

    #[Depends('testAssertReturn10')]
    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good1', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '25185']],
            line: 116,
        );
    }

    #[Depends('testAssertReturn11')]
    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good2', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '25185']],
            line: 117,
        );
    }

    #[Depends('testAssertReturn12')]
    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good3', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '25442']],
            line: 118,
        );
    }

    #[Depends('testAssertReturn13')]
    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good4', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '25699']],
            line: 119,
        );
    }

    #[Depends('testAssertReturn14')]
    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good5', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '122']],
            line: 120,
        );
    }

    #[Depends('testAssertReturn15')]
    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good1', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '25185']],
            line: 122,
        );
    }

    #[Depends('testAssertReturn16')]
    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good2', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '25185']],
            line: 123,
        );
    }

    #[Depends('testAssertReturn17')]
    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good3', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '25442']],
            line: 124,
        );
    }

    #[Depends('testAssertReturn18')]
    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good4', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '25699']],
            line: 125,
        );
    }

    #[Depends('testAssertReturn19')]
    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good5', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '122']],
            line: 126,
        );
    }

    #[Depends('testAssertReturn20')]
    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good1', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1684234849']],
            line: 128,
        );
    }

    #[Depends('testAssertReturn21')]
    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good2', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1684234849']],
            line: 129,
        );
    }

    #[Depends('testAssertReturn22')]
    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good3', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1701077858']],
            line: 130,
        );
    }

    #[Depends('testAssertReturn23')]
    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good4', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1717920867']],
            line: 131,
        );
    }

    #[Depends('testAssertReturn24')]
    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good5', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '122']],
            line: 132,
        );
    }

    #[Depends('testAssertReturn25')]
    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good1', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 134,
        );
    }

    #[Depends('testAssertReturn26')]
    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good2', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 135,
        );
    }

    #[Depends('testAssertReturn27')]
    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good3', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 136,
        );
    }

    #[Depends('testAssertReturn28')]
    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good4', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 137,
        );
    }

    #[Depends('testAssertReturn29')]
    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good5', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 138,
        );
    }

    #[Depends('testAssertReturn30')]
    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good1', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 140,
        );
    }

    #[Depends('testAssertReturn31')]
    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good2', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 141,
        );
    }

    #[Depends('testAssertReturn32')]
    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good3', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 142,
        );
    }

    #[Depends('testAssertReturn33')]
    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good4', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 143,
        );
    }

    #[Depends('testAssertReturn34')]
    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good5', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 144,
        );
    }

    #[Depends('testAssertReturn35')]
    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good1', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 146,
        );
    }

    #[Depends('testAssertReturn36')]
    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good2', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 147,
        );
    }

    #[Depends('testAssertReturn37')]
    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good3', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 148,
        );
    }

    #[Depends('testAssertReturn38')]
    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good4', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 149,
        );
    }

    #[Depends('testAssertReturn39')]
    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good5', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 150,
        );
    }

    #[Depends('testAssertReturn40')]
    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good1', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 152,
        );
    }

    #[Depends('testAssertReturn41')]
    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good2', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 153,
        );
    }

    #[Depends('testAssertReturn42')]
    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good3', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 154,
        );
    }

    #[Depends('testAssertReturn43')]
    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good4', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 155,
        );
    }

    #[Depends('testAssertReturn44')]
    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good5', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 156,
        );
    }

    #[Depends('testAssertReturn45')]
    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good1', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 158,
        );
    }

    #[Depends('testAssertReturn46')]
    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good2', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 159,
        );
    }

    #[Depends('testAssertReturn47')]
    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good3', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 160,
        );
    }

    #[Depends('testAssertReturn48')]
    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good4', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 161,
        );
    }

    #[Depends('testAssertReturn49')]
    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good5', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 162,
        );
    }

    #[Depends('testAssertReturn50')]
    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good1', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 164,
        );
    }

    #[Depends('testAssertReturn51')]
    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good2', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 165,
        );
    }

    #[Depends('testAssertReturn52')]
    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good3', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 166,
        );
    }

    #[Depends('testAssertReturn53')]
    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good4', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 167,
        );
    }

    #[Depends('testAssertReturn54')]
    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good5', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 168,
        );
    }

    #[Depends('testAssertReturn55')]
    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good1', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 170,
        );
    }

    #[Depends('testAssertReturn56')]
    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good2', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 171,
        );
    }

    #[Depends('testAssertReturn57')]
    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good3', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 172,
        );
    }

    #[Depends('testAssertReturn58')]
    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good4', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 173,
        );
    }

    #[Depends('testAssertReturn59')]
    public function testAssertReturn60(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good5', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 174,
        );
    }

    #[Depends('testAssertReturn60')]
    public function testAssertReturn61(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good1', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 176,
        );
    }

    #[Depends('testAssertReturn61')]
    public function testAssertReturn62(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good2', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 177,
        );
    }

    #[Depends('testAssertReturn62')]
    public function testAssertReturn63(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good3', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 178,
        );
    }

    #[Depends('testAssertReturn63')]
    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good4', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 179,
        );
    }

    #[Depends('testAssertReturn64')]
    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good5', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 180,
        );
    }

    #[Depends('testAssertReturn65')]
    public function testAssertReturn66(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good1', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 182,
        );
    }

    #[Depends('testAssertReturn66')]
    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good2', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 183,
        );
    }

    #[Depends('testAssertReturn67')]
    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good3', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 184,
        );
    }

    #[Depends('testAssertReturn68')]
    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good4', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 185,
        );
    }

    #[Depends('testAssertReturn69')]
    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good5', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 186,
        );
    }

    #[Depends('testAssertReturn70')]
    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good1', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 188,
        );
    }

    #[Depends('testAssertReturn71')]
    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good2', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 189,
        );
    }

    #[Depends('testAssertReturn72')]
    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good3', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 190,
        );
    }

    #[Depends('testAssertReturn73')]
    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good4', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 191,
        );
    }

    #[Depends('testAssertReturn74')]
    public function testAssertTrap75(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '32_good5', 'args' => [['type' => 'i32', 'value' => '65508']]],
            text: 'out of bounds memory access',
            line: 192,
        );
    }

    #[Depends('testAssertTrap75')]
    public function testAssertTrap76(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '8u_good3', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 194,
        );
    }

    #[Depends('testAssertTrap76')]
    public function testAssertTrap77(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '8s_good3', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 195,
        );
    }

    #[Depends('testAssertTrap77')]
    public function testAssertTrap78(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '16u_good3', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 196,
        );
    }

    #[Depends('testAssertTrap78')]
    public function testAssertTrap79(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '16s_good3', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 197,
        );
    }

    #[Depends('testAssertTrap79')]
    public function testAssertTrap80(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '32_good3', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 198,
        );
    }

    #[Depends('testAssertTrap80')]
    public function testAssertTrap81(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '32_good3', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 199,
        );
    }

    #[Depends('testAssertTrap81')]
    public function testAssertTrap82(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '8u_bad', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 201,
        );
    }

    #[Depends('testAssertTrap82')]
    public function testAssertTrap83(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '8s_bad', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 202,
        );
    }

    #[Depends('testAssertTrap83')]
    public function testAssertTrap84(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '16u_bad', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 203,
        );
    }

    #[Depends('testAssertTrap84')]
    public function testAssertTrap85(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '16s_bad', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 204,
        );
    }

    #[Depends('testAssertTrap85')]
    public function testAssertTrap86(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '32_bad', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 205,
        );
    }

    #[Depends('testAssertTrap86')]
    public function testAssertTrap87(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '8u_bad', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'out of bounds memory access',
            line: 207,
        );
    }

    #[Depends('testAssertTrap87')]
    public function testAssertTrap88(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '8s_bad', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'out of bounds memory access',
            line: 208,
        );
    }

    #[Depends('testAssertTrap88')]
    public function testAssertTrap89(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '16u_bad', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'out of bounds memory access',
            line: 209,
        );
    }

    #[Depends('testAssertTrap89')]
    public function testAssertTrap90(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '16s_bad', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'out of bounds memory access',
            line: 210,
        );
    }

    #[Depends('testAssertTrap90')]
    public function testAssertTrap91(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '32_bad', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'out of bounds memory access',
            line: 211,
        );
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertTrap91')]
    public function testAssertMalformed92(): void
    {
    }

    #[Depends('testAssertMalformed92')]
    public function testModule93(): void
    {
        $this->runModuleCommand(
            filename: 'address.2.wasm',
            name: null,
            line: 223,
        );
    }

    #[Depends('testModule93')]
    public function testAssertReturn94(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good1', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '97']],
            line: 362,
        );
    }

    #[Depends('testAssertReturn94')]
    public function testAssertReturn95(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good2', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '97']],
            line: 363,
        );
    }

    #[Depends('testAssertReturn95')]
    public function testAssertReturn96(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good3', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '98']],
            line: 364,
        );
    }

    #[Depends('testAssertReturn96')]
    public function testAssertReturn97(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good4', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '99']],
            line: 365,
        );
    }

    #[Depends('testAssertReturn97')]
    public function testAssertReturn98(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good5', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '122']],
            line: 366,
        );
    }

    #[Depends('testAssertReturn98')]
    public function testAssertReturn99(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good1', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '97']],
            line: 368,
        );
    }

    #[Depends('testAssertReturn99')]
    public function testAssertReturn100(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good2', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '97']],
            line: 369,
        );
    }

    #[Depends('testAssertReturn100')]
    public function testAssertReturn101(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good3', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '98']],
            line: 370,
        );
    }

    #[Depends('testAssertReturn101')]
    public function testAssertReturn102(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good4', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '99']],
            line: 371,
        );
    }

    #[Depends('testAssertReturn102')]
    public function testAssertReturn103(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good5', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '122']],
            line: 372,
        );
    }

    #[Depends('testAssertReturn103')]
    public function testAssertReturn104(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good1', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '25185']],
            line: 374,
        );
    }

    #[Depends('testAssertReturn104')]
    public function testAssertReturn105(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good2', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '25185']],
            line: 375,
        );
    }

    #[Depends('testAssertReturn105')]
    public function testAssertReturn106(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good3', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '25442']],
            line: 376,
        );
    }

    #[Depends('testAssertReturn106')]
    public function testAssertReturn107(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good4', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '25699']],
            line: 377,
        );
    }

    #[Depends('testAssertReturn107')]
    public function testAssertReturn108(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good5', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '122']],
            line: 378,
        );
    }

    #[Depends('testAssertReturn108')]
    public function testAssertReturn109(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good1', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '25185']],
            line: 380,
        );
    }

    #[Depends('testAssertReturn109')]
    public function testAssertReturn110(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good2', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '25185']],
            line: 381,
        );
    }

    #[Depends('testAssertReturn110')]
    public function testAssertReturn111(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good3', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '25442']],
            line: 382,
        );
    }

    #[Depends('testAssertReturn111')]
    public function testAssertReturn112(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good4', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '25699']],
            line: 383,
        );
    }

    #[Depends('testAssertReturn112')]
    public function testAssertReturn113(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good5', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '122']],
            line: 384,
        );
    }

    #[Depends('testAssertReturn113')]
    public function testAssertReturn114(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32u_good1', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '1684234849']],
            line: 386,
        );
    }

    #[Depends('testAssertReturn114')]
    public function testAssertReturn115(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32u_good2', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '1684234849']],
            line: 387,
        );
    }

    #[Depends('testAssertReturn115')]
    public function testAssertReturn116(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32u_good3', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '1701077858']],
            line: 388,
        );
    }

    #[Depends('testAssertReturn116')]
    public function testAssertReturn117(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32u_good4', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '1717920867']],
            line: 389,
        );
    }

    #[Depends('testAssertReturn117')]
    public function testAssertReturn118(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32u_good5', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '122']],
            line: 390,
        );
    }

    #[Depends('testAssertReturn118')]
    public function testAssertReturn119(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32s_good1', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '1684234849']],
            line: 392,
        );
    }

    #[Depends('testAssertReturn119')]
    public function testAssertReturn120(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32s_good2', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '1684234849']],
            line: 393,
        );
    }

    #[Depends('testAssertReturn120')]
    public function testAssertReturn121(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32s_good3', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '1701077858']],
            line: 394,
        );
    }

    #[Depends('testAssertReturn121')]
    public function testAssertReturn122(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32s_good4', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '1717920867']],
            line: 395,
        );
    }

    #[Depends('testAssertReturn122')]
    public function testAssertReturn123(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32s_good5', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '122']],
            line: 396,
        );
    }

    #[Depends('testAssertReturn123')]
    public function testAssertReturn124(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good1', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '7523094288207667809']],
            line: 398,
        );
    }

    #[Depends('testAssertReturn124')]
    public function testAssertReturn125(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good2', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '7523094288207667809']],
            line: 399,
        );
    }

    #[Depends('testAssertReturn125')]
    public function testAssertReturn126(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good3', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '7595434461045744482']],
            line: 400,
        );
    }

    #[Depends('testAssertReturn126')]
    public function testAssertReturn127(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good4', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '7667774633883821155']],
            line: 401,
        );
    }

    #[Depends('testAssertReturn127')]
    public function testAssertReturn128(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good5', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '122']],
            line: 402,
        );
    }

    #[Depends('testAssertReturn128')]
    public function testAssertReturn129(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good1', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 404,
        );
    }

    #[Depends('testAssertReturn129')]
    public function testAssertReturn130(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good2', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 405,
        );
    }

    #[Depends('testAssertReturn130')]
    public function testAssertReturn131(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good3', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 406,
        );
    }

    #[Depends('testAssertReturn131')]
    public function testAssertReturn132(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good4', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 407,
        );
    }

    #[Depends('testAssertReturn132')]
    public function testAssertReturn133(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good5', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 408,
        );
    }

    #[Depends('testAssertReturn133')]
    public function testAssertReturn134(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good1', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 410,
        );
    }

    #[Depends('testAssertReturn134')]
    public function testAssertReturn135(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good2', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 411,
        );
    }

    #[Depends('testAssertReturn135')]
    public function testAssertReturn136(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good3', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 412,
        );
    }

    #[Depends('testAssertReturn136')]
    public function testAssertReturn137(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good4', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 413,
        );
    }

    #[Depends('testAssertReturn137')]
    public function testAssertReturn138(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good5', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 414,
        );
    }

    #[Depends('testAssertReturn138')]
    public function testAssertReturn139(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good1', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 416,
        );
    }

    #[Depends('testAssertReturn139')]
    public function testAssertReturn140(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good2', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 417,
        );
    }

    #[Depends('testAssertReturn140')]
    public function testAssertReturn141(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good3', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 418,
        );
    }

    #[Depends('testAssertReturn141')]
    public function testAssertReturn142(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good4', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 419,
        );
    }

    #[Depends('testAssertReturn142')]
    public function testAssertReturn143(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good5', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 420,
        );
    }

    #[Depends('testAssertReturn143')]
    public function testAssertReturn144(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good1', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 422,
        );
    }

    #[Depends('testAssertReturn144')]
    public function testAssertReturn145(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good2', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 423,
        );
    }

    #[Depends('testAssertReturn145')]
    public function testAssertReturn146(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good3', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 424,
        );
    }

    #[Depends('testAssertReturn146')]
    public function testAssertReturn147(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good4', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 425,
        );
    }

    #[Depends('testAssertReturn147')]
    public function testAssertReturn148(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good5', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 426,
        );
    }

    #[Depends('testAssertReturn148')]
    public function testAssertReturn149(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32u_good1', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 428,
        );
    }

    #[Depends('testAssertReturn149')]
    public function testAssertReturn150(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32u_good2', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 429,
        );
    }

    #[Depends('testAssertReturn150')]
    public function testAssertReturn151(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32u_good3', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 430,
        );
    }

    #[Depends('testAssertReturn151')]
    public function testAssertReturn152(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32u_good4', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 431,
        );
    }

    #[Depends('testAssertReturn152')]
    public function testAssertReturn153(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32u_good5', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 432,
        );
    }

    #[Depends('testAssertReturn153')]
    public function testAssertReturn154(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32s_good1', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 434,
        );
    }

    #[Depends('testAssertReturn154')]
    public function testAssertReturn155(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32s_good2', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 435,
        );
    }

    #[Depends('testAssertReturn155')]
    public function testAssertReturn156(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32s_good3', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 436,
        );
    }

    #[Depends('testAssertReturn156')]
    public function testAssertReturn157(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32s_good4', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 437,
        );
    }

    #[Depends('testAssertReturn157')]
    public function testAssertReturn158(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32s_good5', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 438,
        );
    }

    #[Depends('testAssertReturn158')]
    public function testAssertReturn159(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good1', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 440,
        );
    }

    #[Depends('testAssertReturn159')]
    public function testAssertReturn160(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good2', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 441,
        );
    }

    #[Depends('testAssertReturn160')]
    public function testAssertReturn161(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good3', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 442,
        );
    }

    #[Depends('testAssertReturn161')]
    public function testAssertReturn162(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good4', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 443,
        );
    }

    #[Depends('testAssertReturn162')]
    public function testAssertReturn163(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good5', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 444,
        );
    }

    #[Depends('testAssertReturn163')]
    public function testAssertReturn164(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good1', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 446,
        );
    }

    #[Depends('testAssertReturn164')]
    public function testAssertReturn165(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good2', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 447,
        );
    }

    #[Depends('testAssertReturn165')]
    public function testAssertReturn166(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good3', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 448,
        );
    }

    #[Depends('testAssertReturn166')]
    public function testAssertReturn167(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good4', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 449,
        );
    }

    #[Depends('testAssertReturn167')]
    public function testAssertReturn168(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good5', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 450,
        );
    }

    #[Depends('testAssertReturn168')]
    public function testAssertReturn169(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good1', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 452,
        );
    }

    #[Depends('testAssertReturn169')]
    public function testAssertReturn170(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good2', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 453,
        );
    }

    #[Depends('testAssertReturn170')]
    public function testAssertReturn171(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good3', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 454,
        );
    }

    #[Depends('testAssertReturn171')]
    public function testAssertReturn172(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good4', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 455,
        );
    }

    #[Depends('testAssertReturn172')]
    public function testAssertReturn173(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good5', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 456,
        );
    }

    #[Depends('testAssertReturn173')]
    public function testAssertReturn174(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good1', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 458,
        );
    }

    #[Depends('testAssertReturn174')]
    public function testAssertReturn175(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good2', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 459,
        );
    }

    #[Depends('testAssertReturn175')]
    public function testAssertReturn176(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good3', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 460,
        );
    }

    #[Depends('testAssertReturn176')]
    public function testAssertReturn177(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good4', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 461,
        );
    }

    #[Depends('testAssertReturn177')]
    public function testAssertReturn178(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good5', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 462,
        );
    }

    #[Depends('testAssertReturn178')]
    public function testAssertReturn179(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good1', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 464,
        );
    }

    #[Depends('testAssertReturn179')]
    public function testAssertReturn180(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good2', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 465,
        );
    }

    #[Depends('testAssertReturn180')]
    public function testAssertReturn181(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good3', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 466,
        );
    }

    #[Depends('testAssertReturn181')]
    public function testAssertReturn182(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good4', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 467,
        );
    }

    #[Depends('testAssertReturn182')]
    public function testAssertReturn183(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good5', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 468,
        );
    }

    #[Depends('testAssertReturn183')]
    public function testAssertReturn184(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32u_good1', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 470,
        );
    }

    #[Depends('testAssertReturn184')]
    public function testAssertReturn185(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32u_good2', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 471,
        );
    }

    #[Depends('testAssertReturn185')]
    public function testAssertReturn186(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32u_good3', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 472,
        );
    }

    #[Depends('testAssertReturn186')]
    public function testAssertReturn187(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32u_good4', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 473,
        );
    }

    #[Depends('testAssertReturn187')]
    public function testAssertReturn188(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32u_good5', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 474,
        );
    }

    #[Depends('testAssertReturn188')]
    public function testAssertReturn189(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32s_good1', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 476,
        );
    }

    #[Depends('testAssertReturn189')]
    public function testAssertReturn190(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32s_good2', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 477,
        );
    }

    #[Depends('testAssertReturn190')]
    public function testAssertReturn191(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32s_good3', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 478,
        );
    }

    #[Depends('testAssertReturn191')]
    public function testAssertReturn192(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32s_good4', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 479,
        );
    }

    #[Depends('testAssertReturn192')]
    public function testAssertReturn193(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32s_good5', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 480,
        );
    }

    #[Depends('testAssertReturn193')]
    public function testAssertReturn194(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good1', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 482,
        );
    }

    #[Depends('testAssertReturn194')]
    public function testAssertReturn195(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good2', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 483,
        );
    }

    #[Depends('testAssertReturn195')]
    public function testAssertReturn196(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good3', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 484,
        );
    }

    #[Depends('testAssertReturn196')]
    public function testAssertReturn197(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good4', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 485,
        );
    }

    #[Depends('testAssertReturn197')]
    public function testAssertTrap198(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '64_good5', 'args' => [['type' => 'i32', 'value' => '65504']]],
            text: 'out of bounds memory access',
            line: 486,
        );
    }

    #[Depends('testAssertTrap198')]
    public function testAssertTrap199(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '8u_good3', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 488,
        );
    }

    #[Depends('testAssertTrap199')]
    public function testAssertTrap200(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '8s_good3', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 489,
        );
    }

    #[Depends('testAssertTrap200')]
    public function testAssertTrap201(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '16u_good3', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 490,
        );
    }

    #[Depends('testAssertTrap201')]
    public function testAssertTrap202(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '16s_good3', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 491,
        );
    }

    #[Depends('testAssertTrap202')]
    public function testAssertTrap203(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '32u_good3', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 492,
        );
    }

    #[Depends('testAssertTrap203')]
    public function testAssertTrap204(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '32s_good3', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 493,
        );
    }

    #[Depends('testAssertTrap204')]
    public function testAssertTrap205(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '64_good3', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 494,
        );
    }

    #[Depends('testAssertTrap205')]
    public function testAssertTrap206(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '8u_bad', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 496,
        );
    }

    #[Depends('testAssertTrap206')]
    public function testAssertTrap207(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '8s_bad', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 497,
        );
    }

    #[Depends('testAssertTrap207')]
    public function testAssertTrap208(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '16u_bad', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 498,
        );
    }

    #[Depends('testAssertTrap208')]
    public function testAssertTrap209(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '16s_bad', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 499,
        );
    }

    #[Depends('testAssertTrap209')]
    public function testAssertTrap210(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '32u_bad', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 500,
        );
    }

    #[Depends('testAssertTrap210')]
    public function testAssertTrap211(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '32s_bad', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 501,
        );
    }

    #[Depends('testAssertTrap211')]
    public function testAssertTrap212(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '64_bad', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 502,
        );
    }

    #[Depends('testAssertTrap212')]
    public function testAssertTrap213(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '8u_bad', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'out of bounds memory access',
            line: 504,
        );
    }

    #[Depends('testAssertTrap213')]
    public function testAssertTrap214(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '8s_bad', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'out of bounds memory access',
            line: 505,
        );
    }

    #[Depends('testAssertTrap214')]
    public function testAssertTrap215(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '16u_bad', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'out of bounds memory access',
            line: 506,
        );
    }

    #[Depends('testAssertTrap215')]
    public function testAssertTrap216(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '16s_bad', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'out of bounds memory access',
            line: 507,
        );
    }

    #[Depends('testAssertTrap216')]
    public function testAssertTrap217(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '32u_bad', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 508,
        );
    }

    #[Depends('testAssertTrap217')]
    public function testAssertTrap218(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '32s_bad', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 509,
        );
    }

    #[Depends('testAssertTrap218')]
    public function testAssertTrap219(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '64_bad', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'out of bounds memory access',
            line: 510,
        );
    }

    #[Depends('testAssertTrap219')]
    public function testModule220(): void
    {
        $this->runModuleCommand(
            filename: 'address.3.wasm',
            name: null,
            line: 514,
        );
    }

    #[Depends('testModule220')]
    public function testAssertReturn221(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good1', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 538,
        );
    }

    #[Depends('testAssertReturn221')]
    public function testAssertReturn222(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good2', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 539,
        );
    }

    #[Depends('testAssertReturn222')]
    public function testAssertReturn223(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good3', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 540,
        );
    }

    #[Depends('testAssertReturn223')]
    public function testAssertReturn224(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good4', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 541,
        );
    }

    #[Depends('testAssertReturn224')]
    public function testAssertReturn225(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good5', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2144337921']],
            line: 542,
        );
    }

    #[Depends('testAssertReturn225')]
    public function testAssertReturn226(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good1', 'args' => [['type' => 'i32', 'value' => '65524']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 544,
        );
    }

    #[Depends('testAssertReturn226')]
    public function testAssertReturn227(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good2', 'args' => [['type' => 'i32', 'value' => '65524']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 545,
        );
    }

    #[Depends('testAssertReturn227')]
    public function testAssertReturn228(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good3', 'args' => [['type' => 'i32', 'value' => '65524']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 546,
        );
    }

    #[Depends('testAssertReturn228')]
    public function testAssertReturn229(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good4', 'args' => [['type' => 'i32', 'value' => '65524']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 547,
        );
    }

    #[Depends('testAssertReturn229')]
    public function testAssertReturn230(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good5', 'args' => [['type' => 'i32', 'value' => '65524']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 548,
        );
    }

    #[Depends('testAssertReturn230')]
    public function testAssertReturn231(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good1', 'args' => [['type' => 'i32', 'value' => '65525']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 550,
        );
    }

    #[Depends('testAssertReturn231')]
    public function testAssertReturn232(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good2', 'args' => [['type' => 'i32', 'value' => '65525']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 551,
        );
    }

    #[Depends('testAssertReturn232')]
    public function testAssertReturn233(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good3', 'args' => [['type' => 'i32', 'value' => '65525']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 552,
        );
    }

    #[Depends('testAssertReturn233')]
    public function testAssertReturn234(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good4', 'args' => [['type' => 'i32', 'value' => '65525']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 553,
        );
    }

    #[Depends('testAssertReturn234')]
    public function testAssertTrap235(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '32_good5', 'args' => [['type' => 'i32', 'value' => '65525']]],
            text: 'out of bounds memory access',
            line: 554,
        );
    }

    #[Depends('testAssertTrap235')]
    public function testAssertTrap236(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '32_good3', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 556,
        );
    }

    #[Depends('testAssertTrap236')]
    public function testAssertTrap237(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '32_good3', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 557,
        );
    }

    #[Depends('testAssertTrap237')]
    public function testAssertTrap238(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '32_bad', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 559,
        );
    }

    #[Depends('testAssertTrap238')]
    public function testAssertTrap239(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '32_bad', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'out of bounds memory access',
            line: 560,
        );
    }

    #[Depends('testAssertTrap239')]
    public function testModule240(): void
    {
        $this->runModuleCommand(
            filename: 'address.4.wasm',
            name: null,
            line: 564,
        );
    }

    #[Depends('testModule240')]
    public function testAssertReturn241(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good1', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 588,
        );
    }

    #[Depends('testAssertReturn241')]
    public function testAssertReturn242(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good2', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 589,
        );
    }

    #[Depends('testAssertReturn242')]
    public function testAssertReturn243(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good3', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 590,
        );
    }

    #[Depends('testAssertReturn243')]
    public function testAssertReturn244(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good4', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 591,
        );
    }

    #[Depends('testAssertReturn244')]
    public function testAssertReturn245(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good5', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '9222246136947933185']],
            line: 592,
        );
    }

    #[Depends('testAssertReturn245')]
    public function testAssertReturn246(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good1', 'args' => [['type' => 'i32', 'value' => '65510']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 594,
        );
    }

    #[Depends('testAssertReturn246')]
    public function testAssertReturn247(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good2', 'args' => [['type' => 'i32', 'value' => '65510']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 595,
        );
    }

    #[Depends('testAssertReturn247')]
    public function testAssertReturn248(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good3', 'args' => [['type' => 'i32', 'value' => '65510']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 596,
        );
    }

    #[Depends('testAssertReturn248')]
    public function testAssertReturn249(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good4', 'args' => [['type' => 'i32', 'value' => '65510']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 597,
        );
    }

    #[Depends('testAssertReturn249')]
    public function testAssertReturn250(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good5', 'args' => [['type' => 'i32', 'value' => '65510']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 598,
        );
    }

    #[Depends('testAssertReturn250')]
    public function testAssertReturn251(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good1', 'args' => [['type' => 'i32', 'value' => '65511']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 600,
        );
    }

    #[Depends('testAssertReturn251')]
    public function testAssertReturn252(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good2', 'args' => [['type' => 'i32', 'value' => '65511']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 601,
        );
    }

    #[Depends('testAssertReturn252')]
    public function testAssertReturn253(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good3', 'args' => [['type' => 'i32', 'value' => '65511']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 602,
        );
    }

    #[Depends('testAssertReturn253')]
    public function testAssertReturn254(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good4', 'args' => [['type' => 'i32', 'value' => '65511']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 603,
        );
    }

    #[Depends('testAssertReturn254')]
    public function testAssertTrap255(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '64_good5', 'args' => [['type' => 'i32', 'value' => '65511']]],
            text: 'out of bounds memory access',
            line: 604,
        );
    }

    #[Depends('testAssertTrap255')]
    public function testAssertTrap256(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '64_good3', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 606,
        );
    }

    #[Depends('testAssertTrap256')]
    public function testAssertTrap257(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '64_good3', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 607,
        );
    }

    #[Depends('testAssertTrap257')]
    public function testAssertTrap258(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '64_bad', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 609,
        );
    }

    #[Depends('testAssertTrap258')]
    public function testAssertTrap259(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '64_bad', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'out of bounds memory access',
            line: 610,
        );
    }
}
