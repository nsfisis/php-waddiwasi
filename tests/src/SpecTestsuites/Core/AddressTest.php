<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
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

    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good1', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '97']],
            line: 104,
        );
    }

    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good2', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '97']],
            line: 105,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good3', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '98']],
            line: 106,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good4', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '99']],
            line: 107,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good5', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '122']],
            line: 108,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good1', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '97']],
            line: 110,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good2', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '97']],
            line: 111,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good3', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '98']],
            line: 112,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good4', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '99']],
            line: 113,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good5', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '122']],
            line: 114,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good1', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '25185']],
            line: 116,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good2', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '25185']],
            line: 117,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good3', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '25442']],
            line: 118,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good4', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '25699']],
            line: 119,
        );
    }

    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good5', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '122']],
            line: 120,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good1', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '25185']],
            line: 122,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good2', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '25185']],
            line: 123,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good3', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '25442']],
            line: 124,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good4', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '25699']],
            line: 125,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good5', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '122']],
            line: 126,
        );
    }

    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good1', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1684234849']],
            line: 128,
        );
    }

    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good2', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1684234849']],
            line: 129,
        );
    }

    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good3', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1701077858']],
            line: 130,
        );
    }

    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good4', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1717920867']],
            line: 131,
        );
    }

    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good5', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '122']],
            line: 132,
        );
    }

    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good1', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 134,
        );
    }

    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good2', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 135,
        );
    }

    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good3', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 136,
        );
    }

    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good4', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 137,
        );
    }

    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good5', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 138,
        );
    }

    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good1', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 140,
        );
    }

    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good2', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 141,
        );
    }

    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good3', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 142,
        );
    }

    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good4', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 143,
        );
    }

    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good5', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 144,
        );
    }

    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good1', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 146,
        );
    }

    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good2', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 147,
        );
    }

    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good3', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 148,
        );
    }

    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good4', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 149,
        );
    }

    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good5', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 150,
        );
    }

    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good1', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 152,
        );
    }

    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good2', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 153,
        );
    }

    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good3', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 154,
        );
    }

    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good4', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 155,
        );
    }

    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good5', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 156,
        );
    }

    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good1', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 158,
        );
    }

    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good2', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 159,
        );
    }

    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good3', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 160,
        );
    }

    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good4', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 161,
        );
    }

    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good5', 'args' => [['type' => 'i32', 'value' => '65507']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 162,
        );
    }

    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good1', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 164,
        );
    }

    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good2', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 165,
        );
    }

    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good3', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 166,
        );
    }

    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good4', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 167,
        );
    }

    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good5', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 168,
        );
    }

    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good1', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 170,
        );
    }

    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good2', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 171,
        );
    }

    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good3', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 172,
        );
    }

    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good4', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 173,
        );
    }

    public function testAssertReturn60(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good5', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 174,
        );
    }

    public function testAssertReturn61(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good1', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 176,
        );
    }

    public function testAssertReturn62(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good2', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 177,
        );
    }

    public function testAssertReturn63(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good3', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 178,
        );
    }

    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good4', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 179,
        );
    }

    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good5', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 180,
        );
    }

    public function testAssertReturn66(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good1', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 182,
        );
    }

    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good2', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 183,
        );
    }

    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good3', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 184,
        );
    }

    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good4', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 185,
        );
    }

    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good5', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 186,
        );
    }

    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good1', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 188,
        );
    }

    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good2', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 189,
        );
    }

    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good3', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 190,
        );
    }

    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good4', 'args' => [['type' => 'i32', 'value' => '65508']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 191,
        );
    }

    public function testAssertTrap75(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '32_good5', 'args' => [['type' => 'i32', 'value' => '65508']]],
            text: 'out of bounds memory access',
            line: 192,
        );
    }

    public function testAssertTrap76(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '8u_good3', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 194,
        );
    }

    public function testAssertTrap77(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '8s_good3', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 195,
        );
    }

    public function testAssertTrap78(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '16u_good3', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 196,
        );
    }

    public function testAssertTrap79(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '16s_good3', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 197,
        );
    }

    public function testAssertTrap80(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '32_good3', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 198,
        );
    }

    public function testAssertTrap81(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '32_good3', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 199,
        );
    }

    public function testAssertTrap82(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '8u_bad', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 201,
        );
    }

    public function testAssertTrap83(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '8s_bad', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 202,
        );
    }

    public function testAssertTrap84(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '16u_bad', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 203,
        );
    }

    public function testAssertTrap85(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '16s_bad', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 204,
        );
    }

    public function testAssertTrap86(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '32_bad', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 205,
        );
    }

    public function testAssertTrap87(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '8u_bad', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'out of bounds memory access',
            line: 207,
        );
    }

    public function testAssertTrap88(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '8s_bad', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'out of bounds memory access',
            line: 208,
        );
    }

    public function testAssertTrap89(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '16u_bad', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'out of bounds memory access',
            line: 209,
        );
    }

    public function testAssertTrap90(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '16s_bad', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'out of bounds memory access',
            line: 210,
        );
    }

    public function testAssertTrap91(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '32_bad', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'out of bounds memory access',
            line: 211,
        );
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed92(): void
    {
    }

    public function testModule93(): void
    {
        $this->runModuleCommand(
            filename: 'address.2.wasm',
            name: null,
            line: 223,
        );
    }

    public function testAssertReturn94(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good1', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '97']],
            line: 362,
        );
    }

    public function testAssertReturn95(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good2', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '97']],
            line: 363,
        );
    }

    public function testAssertReturn96(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good3', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '98']],
            line: 364,
        );
    }

    public function testAssertReturn97(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good4', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '99']],
            line: 365,
        );
    }

    public function testAssertReturn98(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good5', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '122']],
            line: 366,
        );
    }

    public function testAssertReturn99(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good1', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '97']],
            line: 368,
        );
    }

    public function testAssertReturn100(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good2', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '97']],
            line: 369,
        );
    }

    public function testAssertReturn101(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good3', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '98']],
            line: 370,
        );
    }

    public function testAssertReturn102(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good4', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '99']],
            line: 371,
        );
    }

    public function testAssertReturn103(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good5', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '122']],
            line: 372,
        );
    }

    public function testAssertReturn104(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good1', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '25185']],
            line: 374,
        );
    }

    public function testAssertReturn105(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good2', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '25185']],
            line: 375,
        );
    }

    public function testAssertReturn106(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good3', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '25442']],
            line: 376,
        );
    }

    public function testAssertReturn107(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good4', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '25699']],
            line: 377,
        );
    }

    public function testAssertReturn108(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good5', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '122']],
            line: 378,
        );
    }

    public function testAssertReturn109(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good1', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '25185']],
            line: 380,
        );
    }

    public function testAssertReturn110(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good2', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '25185']],
            line: 381,
        );
    }

    public function testAssertReturn111(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good3', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '25442']],
            line: 382,
        );
    }

    public function testAssertReturn112(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good4', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '25699']],
            line: 383,
        );
    }

    public function testAssertReturn113(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good5', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '122']],
            line: 384,
        );
    }

    public function testAssertReturn114(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32u_good1', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '1684234849']],
            line: 386,
        );
    }

    public function testAssertReturn115(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32u_good2', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '1684234849']],
            line: 387,
        );
    }

    public function testAssertReturn116(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32u_good3', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '1701077858']],
            line: 388,
        );
    }

    public function testAssertReturn117(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32u_good4', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '1717920867']],
            line: 389,
        );
    }

    public function testAssertReturn118(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32u_good5', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '122']],
            line: 390,
        );
    }

    public function testAssertReturn119(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32s_good1', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '1684234849']],
            line: 392,
        );
    }

    public function testAssertReturn120(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32s_good2', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '1684234849']],
            line: 393,
        );
    }

    public function testAssertReturn121(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32s_good3', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '1701077858']],
            line: 394,
        );
    }

    public function testAssertReturn122(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32s_good4', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '1717920867']],
            line: 395,
        );
    }

    public function testAssertReturn123(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32s_good5', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '122']],
            line: 396,
        );
    }

    public function testAssertReturn124(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good1', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '7523094288207667809']],
            line: 398,
        );
    }

    public function testAssertReturn125(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good2', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '7523094288207667809']],
            line: 399,
        );
    }

    public function testAssertReturn126(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good3', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '7595434461045744482']],
            line: 400,
        );
    }

    public function testAssertReturn127(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good4', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '7667774633883821155']],
            line: 401,
        );
    }

    public function testAssertReturn128(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good5', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '122']],
            line: 402,
        );
    }

    public function testAssertReturn129(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good1', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 404,
        );
    }

    public function testAssertReturn130(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good2', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 405,
        );
    }

    public function testAssertReturn131(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good3', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 406,
        );
    }

    public function testAssertReturn132(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good4', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 407,
        );
    }

    public function testAssertReturn133(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good5', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 408,
        );
    }

    public function testAssertReturn134(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good1', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 410,
        );
    }

    public function testAssertReturn135(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good2', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 411,
        );
    }

    public function testAssertReturn136(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good3', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 412,
        );
    }

    public function testAssertReturn137(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good4', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 413,
        );
    }

    public function testAssertReturn138(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good5', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 414,
        );
    }

    public function testAssertReturn139(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good1', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 416,
        );
    }

    public function testAssertReturn140(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good2', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 417,
        );
    }

    public function testAssertReturn141(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good3', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 418,
        );
    }

    public function testAssertReturn142(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good4', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 419,
        );
    }

    public function testAssertReturn143(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good5', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 420,
        );
    }

    public function testAssertReturn144(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good1', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 422,
        );
    }

    public function testAssertReturn145(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good2', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 423,
        );
    }

    public function testAssertReturn146(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good3', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 424,
        );
    }

    public function testAssertReturn147(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good4', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 425,
        );
    }

    public function testAssertReturn148(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good5', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 426,
        );
    }

    public function testAssertReturn149(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32u_good1', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 428,
        );
    }

    public function testAssertReturn150(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32u_good2', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 429,
        );
    }

    public function testAssertReturn151(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32u_good3', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 430,
        );
    }

    public function testAssertReturn152(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32u_good4', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 431,
        );
    }

    public function testAssertReturn153(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32u_good5', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 432,
        );
    }

    public function testAssertReturn154(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32s_good1', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 434,
        );
    }

    public function testAssertReturn155(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32s_good2', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 435,
        );
    }

    public function testAssertReturn156(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32s_good3', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 436,
        );
    }

    public function testAssertReturn157(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32s_good4', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 437,
        );
    }

    public function testAssertReturn158(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32s_good5', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 438,
        );
    }

    public function testAssertReturn159(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good1', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 440,
        );
    }

    public function testAssertReturn160(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good2', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 441,
        );
    }

    public function testAssertReturn161(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good3', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 442,
        );
    }

    public function testAssertReturn162(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good4', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 443,
        );
    }

    public function testAssertReturn163(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good5', 'args' => [['type' => 'i32', 'value' => '65503']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 444,
        );
    }

    public function testAssertReturn164(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good1', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 446,
        );
    }

    public function testAssertReturn165(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good2', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 447,
        );
    }

    public function testAssertReturn166(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good3', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 448,
        );
    }

    public function testAssertReturn167(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good4', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 449,
        );
    }

    public function testAssertReturn168(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8u_good5', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 450,
        );
    }

    public function testAssertReturn169(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good1', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 452,
        );
    }

    public function testAssertReturn170(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good2', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 453,
        );
    }

    public function testAssertReturn171(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good3', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 454,
        );
    }

    public function testAssertReturn172(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good4', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 455,
        );
    }

    public function testAssertReturn173(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '8s_good5', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 456,
        );
    }

    public function testAssertReturn174(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good1', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 458,
        );
    }

    public function testAssertReturn175(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good2', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 459,
        );
    }

    public function testAssertReturn176(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good3', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 460,
        );
    }

    public function testAssertReturn177(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good4', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 461,
        );
    }

    public function testAssertReturn178(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16u_good5', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 462,
        );
    }

    public function testAssertReturn179(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good1', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 464,
        );
    }

    public function testAssertReturn180(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good2', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 465,
        );
    }

    public function testAssertReturn181(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good3', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 466,
        );
    }

    public function testAssertReturn182(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good4', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 467,
        );
    }

    public function testAssertReturn183(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '16s_good5', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 468,
        );
    }

    public function testAssertReturn184(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32u_good1', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 470,
        );
    }

    public function testAssertReturn185(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32u_good2', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 471,
        );
    }

    public function testAssertReturn186(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32u_good3', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 472,
        );
    }

    public function testAssertReturn187(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32u_good4', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 473,
        );
    }

    public function testAssertReturn188(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32u_good5', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 474,
        );
    }

    public function testAssertReturn189(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32s_good1', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 476,
        );
    }

    public function testAssertReturn190(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32s_good2', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 477,
        );
    }

    public function testAssertReturn191(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32s_good3', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 478,
        );
    }

    public function testAssertReturn192(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32s_good4', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 479,
        );
    }

    public function testAssertReturn193(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32s_good5', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 480,
        );
    }

    public function testAssertReturn194(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good1', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 482,
        );
    }

    public function testAssertReturn195(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good2', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 483,
        );
    }

    public function testAssertReturn196(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good3', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 484,
        );
    }

    public function testAssertReturn197(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good4', 'args' => [['type' => 'i32', 'value' => '65504']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 485,
        );
    }

    public function testAssertTrap198(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '64_good5', 'args' => [['type' => 'i32', 'value' => '65504']]],
            text: 'out of bounds memory access',
            line: 486,
        );
    }

    public function testAssertTrap199(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '8u_good3', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 488,
        );
    }

    public function testAssertTrap200(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '8s_good3', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 489,
        );
    }

    public function testAssertTrap201(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '16u_good3', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 490,
        );
    }

    public function testAssertTrap202(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '16s_good3', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 491,
        );
    }

    public function testAssertTrap203(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '32u_good3', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 492,
        );
    }

    public function testAssertTrap204(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '32s_good3', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 493,
        );
    }

    public function testAssertTrap205(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '64_good3', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 494,
        );
    }

    public function testAssertTrap206(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '8u_bad', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 496,
        );
    }

    public function testAssertTrap207(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '8s_bad', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 497,
        );
    }

    public function testAssertTrap208(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '16u_bad', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 498,
        );
    }

    public function testAssertTrap209(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '16s_bad', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 499,
        );
    }

    public function testAssertTrap210(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '32u_bad', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 500,
        );
    }

    public function testAssertTrap211(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '32s_bad', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 501,
        );
    }

    public function testAssertTrap212(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '64_bad', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 502,
        );
    }

    public function testAssertTrap213(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '8u_bad', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'out of bounds memory access',
            line: 504,
        );
    }

    public function testAssertTrap214(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '8s_bad', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'out of bounds memory access',
            line: 505,
        );
    }

    public function testAssertTrap215(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '16u_bad', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'out of bounds memory access',
            line: 506,
        );
    }

    public function testAssertTrap216(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '16s_bad', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'out of bounds memory access',
            line: 507,
        );
    }

    public function testAssertTrap217(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '32u_bad', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 508,
        );
    }

    public function testAssertTrap218(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '32s_bad', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 509,
        );
    }

    public function testAssertTrap219(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '64_bad', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'out of bounds memory access',
            line: 510,
        );
    }

    public function testModule220(): void
    {
        $this->runModuleCommand(
            filename: 'address.3.wasm',
            name: null,
            line: 514,
        );
    }

    public function testAssertReturn221(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good1', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 538,
        );
    }

    public function testAssertReturn222(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good2', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 539,
        );
    }

    public function testAssertReturn223(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good3', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 540,
        );
    }

    public function testAssertReturn224(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good4', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 541,
        );
    }

    public function testAssertReturn225(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good5', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2144337921']],
            line: 542,
        );
    }

    public function testAssertReturn226(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good1', 'args' => [['type' => 'i32', 'value' => '65524']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 544,
        );
    }

    public function testAssertReturn227(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good2', 'args' => [['type' => 'i32', 'value' => '65524']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 545,
        );
    }

    public function testAssertReturn228(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good3', 'args' => [['type' => 'i32', 'value' => '65524']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 546,
        );
    }

    public function testAssertReturn229(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good4', 'args' => [['type' => 'i32', 'value' => '65524']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 547,
        );
    }

    public function testAssertReturn230(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good5', 'args' => [['type' => 'i32', 'value' => '65524']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 548,
        );
    }

    public function testAssertReturn231(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good1', 'args' => [['type' => 'i32', 'value' => '65525']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 550,
        );
    }

    public function testAssertReturn232(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good2', 'args' => [['type' => 'i32', 'value' => '65525']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 551,
        );
    }

    public function testAssertReturn233(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good3', 'args' => [['type' => 'i32', 'value' => '65525']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 552,
        );
    }

    public function testAssertReturn234(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '32_good4', 'args' => [['type' => 'i32', 'value' => '65525']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 553,
        );
    }

    public function testAssertTrap235(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '32_good5', 'args' => [['type' => 'i32', 'value' => '65525']]],
            text: 'out of bounds memory access',
            line: 554,
        );
    }

    public function testAssertTrap236(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '32_good3', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 556,
        );
    }

    public function testAssertTrap237(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '32_good3', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 557,
        );
    }

    public function testAssertTrap238(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '32_bad', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 559,
        );
    }

    public function testAssertTrap239(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '32_bad', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'out of bounds memory access',
            line: 560,
        );
    }

    public function testModule240(): void
    {
        $this->runModuleCommand(
            filename: 'address.4.wasm',
            name: null,
            line: 564,
        );
    }

    public function testAssertReturn241(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good1', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 588,
        );
    }

    public function testAssertReturn242(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good2', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 589,
        );
    }

    public function testAssertReturn243(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good3', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 590,
        );
    }

    public function testAssertReturn244(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good4', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 591,
        );
    }

    public function testAssertReturn245(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good5', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '9222246136947933185']],
            line: 592,
        );
    }

    public function testAssertReturn246(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good1', 'args' => [['type' => 'i32', 'value' => '65510']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 594,
        );
    }

    public function testAssertReturn247(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good2', 'args' => [['type' => 'i32', 'value' => '65510']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 595,
        );
    }

    public function testAssertReturn248(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good3', 'args' => [['type' => 'i32', 'value' => '65510']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 596,
        );
    }

    public function testAssertReturn249(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good4', 'args' => [['type' => 'i32', 'value' => '65510']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 597,
        );
    }

    public function testAssertReturn250(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good5', 'args' => [['type' => 'i32', 'value' => '65510']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 598,
        );
    }

    public function testAssertReturn251(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good1', 'args' => [['type' => 'i32', 'value' => '65511']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 600,
        );
    }

    public function testAssertReturn252(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good2', 'args' => [['type' => 'i32', 'value' => '65511']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 601,
        );
    }

    public function testAssertReturn253(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good3', 'args' => [['type' => 'i32', 'value' => '65511']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 602,
        );
    }

    public function testAssertReturn254(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '64_good4', 'args' => [['type' => 'i32', 'value' => '65511']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 603,
        );
    }

    public function testAssertTrap255(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '64_good5', 'args' => [['type' => 'i32', 'value' => '65511']]],
            text: 'out of bounds memory access',
            line: 604,
        );
    }

    public function testAssertTrap256(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '64_good3', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 606,
        );
    }

    public function testAssertTrap257(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '64_good3', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            text: 'out of bounds memory access',
            line: 607,
        );
    }

    public function testAssertTrap258(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '64_bad', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 609,
        );
    }

    public function testAssertTrap259(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => '64_bad', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'out of bounds memory access',
            line: 610,
        );
    }
}
