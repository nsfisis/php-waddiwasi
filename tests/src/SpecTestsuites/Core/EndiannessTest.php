<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class EndiannessTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'endianness.0.wasm',
            name: null,
            line: 1,
        );
    }

    #[Depends('testModule0')]
    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load16_s', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 133,
        );
    }

    #[Depends('testAssertReturn1')]
    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load16_s', 'args' => [['type' => 'i32', 'value' => '4294963054']]],
            expected: [['type' => 'i32', 'value' => '4294963054']],
            line: 134,
        );
    }

    #[Depends('testAssertReturn2')]
    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load16_s', 'args' => [['type' => 'i32', 'value' => '42']]],
            expected: [['type' => 'i32', 'value' => '42']],
            line: 135,
        );
    }

    #[Depends('testAssertReturn3')]
    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load16_s', 'args' => [['type' => 'i32', 'value' => '12816']]],
            expected: [['type' => 'i32', 'value' => '12816']],
            line: 136,
        );
    }

    #[Depends('testAssertReturn4')]
    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load16_u', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '65535']],
            line: 138,
        );
    }

    #[Depends('testAssertReturn5')]
    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load16_u', 'args' => [['type' => 'i32', 'value' => '4294963054']]],
            expected: [['type' => 'i32', 'value' => '61294']],
            line: 139,
        );
    }

    #[Depends('testAssertReturn6')]
    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load16_u', 'args' => [['type' => 'i32', 'value' => '42']]],
            expected: [['type' => 'i32', 'value' => '42']],
            line: 140,
        );
    }

    #[Depends('testAssertReturn7')]
    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load16_u', 'args' => [['type' => 'i32', 'value' => '51966']]],
            expected: [['type' => 'i32', 'value' => '51966']],
            line: 141,
        );
    }

    #[Depends('testAssertReturn8')]
    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 143,
        );
    }

    #[Depends('testAssertReturn9')]
    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load', 'args' => [['type' => 'i32', 'value' => '4252543054']]],
            expected: [['type' => 'i32', 'value' => '4252543054']],
            line: 144,
        );
    }

    #[Depends('testAssertReturn10')]
    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load', 'args' => [['type' => 'i32', 'value' => '42424242']]],
            expected: [['type' => 'i32', 'value' => '42424242']],
            line: 145,
        );
    }

    #[Depends('testAssertReturn11')]
    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load', 'args' => [['type' => 'i32', 'value' => '2880249322']]],
            expected: [['type' => 'i32', 'value' => '2880249322']],
            line: 146,
        );
    }

    #[Depends('testAssertReturn12')]
    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load16_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 148,
        );
    }

    #[Depends('testAssertReturn13')]
    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load16_s', 'args' => [['type' => 'i64', 'value' => '18446744073709547374']]],
            expected: [['type' => 'i64', 'value' => '18446744073709547374']],
            line: 149,
        );
    }

    #[Depends('testAssertReturn14')]
    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load16_s', 'args' => [['type' => 'i64', 'value' => '42']]],
            expected: [['type' => 'i64', 'value' => '42']],
            line: 150,
        );
    }

    #[Depends('testAssertReturn15')]
    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load16_s', 'args' => [['type' => 'i64', 'value' => '12816']]],
            expected: [['type' => 'i64', 'value' => '12816']],
            line: 151,
        );
    }

    #[Depends('testAssertReturn16')]
    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load16_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '65535']],
            line: 153,
        );
    }

    #[Depends('testAssertReturn17')]
    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load16_u', 'args' => [['type' => 'i64', 'value' => '18446744073709547374']]],
            expected: [['type' => 'i64', 'value' => '61294']],
            line: 154,
        );
    }

    #[Depends('testAssertReturn18')]
    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load16_u', 'args' => [['type' => 'i64', 'value' => '42']]],
            expected: [['type' => 'i64', 'value' => '42']],
            line: 155,
        );
    }

    #[Depends('testAssertReturn19')]
    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load16_u', 'args' => [['type' => 'i64', 'value' => '51966']]],
            expected: [['type' => 'i64', 'value' => '51966']],
            line: 156,
        );
    }

    #[Depends('testAssertReturn20')]
    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load32_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 158,
        );
    }

    #[Depends('testAssertReturn21')]
    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load32_s', 'args' => [['type' => 'i64', 'value' => '18446744073667127374']]],
            expected: [['type' => 'i64', 'value' => '18446744073667127374']],
            line: 159,
        );
    }

    #[Depends('testAssertReturn22')]
    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load32_s', 'args' => [['type' => 'i64', 'value' => '42424242']]],
            expected: [['type' => 'i64', 'value' => '42424242']],
            line: 160,
        );
    }

    #[Depends('testAssertReturn23')]
    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load32_s', 'args' => [['type' => 'i64', 'value' => '305419896']]],
            expected: [['type' => 'i64', 'value' => '305419896']],
            line: 161,
        );
    }

    #[Depends('testAssertReturn24')]
    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load32_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '4294967295']],
            line: 163,
        );
    }

    #[Depends('testAssertReturn25')]
    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load32_u', 'args' => [['type' => 'i64', 'value' => '18446744073667127374']]],
            expected: [['type' => 'i64', 'value' => '4252543054']],
            line: 164,
        );
    }

    #[Depends('testAssertReturn26')]
    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load32_u', 'args' => [['type' => 'i64', 'value' => '42424242']]],
            expected: [['type' => 'i64', 'value' => '42424242']],
            line: 165,
        );
    }

    #[Depends('testAssertReturn27')]
    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load32_u', 'args' => [['type' => 'i64', 'value' => '2880249322']]],
            expected: [['type' => 'i64', 'value' => '2880249322']],
            line: 166,
        );
    }

    #[Depends('testAssertReturn28')]
    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 168,
        );
    }

    #[Depends('testAssertReturn29')]
    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load', 'args' => [['type' => 'i64', 'value' => '18446744073667127374']]],
            expected: [['type' => 'i64', 'value' => '18446744073667127374']],
            line: 169,
        );
    }

    #[Depends('testAssertReturn30')]
    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load', 'args' => [['type' => 'i64', 'value' => '2880249322']]],
            expected: [['type' => 'i64', 'value' => '2880249322']],
            line: 170,
        );
    }

    #[Depends('testAssertReturn31')]
    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load', 'args' => [['type' => 'i64', 'value' => '12370766947463011818']]],
            expected: [['type' => 'i64', 'value' => '12370766947463011818']],
            line: 171,
        );
    }

    #[Depends('testAssertReturn32')]
    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_load', 'args' => [['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 173,
        );
    }

    #[Depends('testAssertReturn33')]
    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_load', 'args' => [['type' => 'f32', 'value' => '1011494326']]],
            expected: [['type' => 'f32', 'value' => '1011494326']],
            line: 174,
        );
    }

    #[Depends('testAssertReturn34')]
    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_load', 'args' => [['type' => 'f32', 'value' => '1166316389']]],
            expected: [['type' => 'f32', 'value' => '1166316389']],
            line: 175,
        );
    }

    #[Depends('testAssertReturn35')]
    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_load', 'args' => [['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 176,
        );
    }

    #[Depends('testAssertReturn36')]
    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_load', 'args' => [['type' => 'f64', 'value' => '13830554455654793216']]],
            expected: [['type' => 'f64', 'value' => '13830554455654793216']],
            line: 178,
        );
    }

    #[Depends('testAssertReturn37')]
    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_load', 'args' => [['type' => 'f64', 'value' => '4653144502447687399']]],
            expected: [['type' => 'f64', 'value' => '4653144502447687399']],
            line: 179,
        );
    }

    #[Depends('testAssertReturn38')]
    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_load', 'args' => [['type' => 'f64', 'value' => '4691032041816096430']]],
            expected: [['type' => 'f64', 'value' => '4691032041816096430']],
            line: 180,
        );
    }

    #[Depends('testAssertReturn39')]
    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_load', 'args' => [['type' => 'f64', 'value' => '9218868437227405311']]],
            expected: [['type' => 'f64', 'value' => '9218868437227405311']],
            line: 181,
        );
    }

    #[Depends('testAssertReturn40')]
    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_store16', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '65535']],
            line: 184,
        );
    }

    #[Depends('testAssertReturn41')]
    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_store16', 'args' => [['type' => 'i32', 'value' => '4294963054']]],
            expected: [['type' => 'i32', 'value' => '61294']],
            line: 185,
        );
    }

    #[Depends('testAssertReturn42')]
    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_store16', 'args' => [['type' => 'i32', 'value' => '42']]],
            expected: [['type' => 'i32', 'value' => '42']],
            line: 186,
        );
    }

    #[Depends('testAssertReturn43')]
    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_store16', 'args' => [['type' => 'i32', 'value' => '51966']]],
            expected: [['type' => 'i32', 'value' => '51966']],
            line: 187,
        );
    }

    #[Depends('testAssertReturn44')]
    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_store', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 189,
        );
    }

    #[Depends('testAssertReturn45')]
    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_store', 'args' => [['type' => 'i32', 'value' => '4294963054']]],
            expected: [['type' => 'i32', 'value' => '4294963054']],
            line: 190,
        );
    }

    #[Depends('testAssertReturn46')]
    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_store', 'args' => [['type' => 'i32', 'value' => '42424242']]],
            expected: [['type' => 'i32', 'value' => '42424242']],
            line: 191,
        );
    }

    #[Depends('testAssertReturn47')]
    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_store', 'args' => [['type' => 'i32', 'value' => '3735931646']]],
            expected: [['type' => 'i32', 'value' => '3735931646']],
            line: 192,
        );
    }

    #[Depends('testAssertReturn48')]
    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_store16', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '65535']],
            line: 194,
        );
    }

    #[Depends('testAssertReturn49')]
    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_store16', 'args' => [['type' => 'i64', 'value' => '18446744073709547374']]],
            expected: [['type' => 'i64', 'value' => '61294']],
            line: 195,
        );
    }

    #[Depends('testAssertReturn50')]
    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_store16', 'args' => [['type' => 'i64', 'value' => '42']]],
            expected: [['type' => 'i64', 'value' => '42']],
            line: 196,
        );
    }

    #[Depends('testAssertReturn51')]
    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_store16', 'args' => [['type' => 'i64', 'value' => '51966']]],
            expected: [['type' => 'i64', 'value' => '51966']],
            line: 197,
        );
    }

    #[Depends('testAssertReturn52')]
    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_store32', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '4294967295']],
            line: 199,
        );
    }

    #[Depends('testAssertReturn53')]
    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_store32', 'args' => [['type' => 'i64', 'value' => '18446744073709547374']]],
            expected: [['type' => 'i64', 'value' => '4294963054']],
            line: 200,
        );
    }

    #[Depends('testAssertReturn54')]
    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_store32', 'args' => [['type' => 'i64', 'value' => '42424242']]],
            expected: [['type' => 'i64', 'value' => '42424242']],
            line: 201,
        );
    }

    #[Depends('testAssertReturn55')]
    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_store32', 'args' => [['type' => 'i64', 'value' => '3735931646']]],
            expected: [['type' => 'i64', 'value' => '3735931646']],
            line: 202,
        );
    }

    #[Depends('testAssertReturn56')]
    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_store', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 204,
        );
    }

    #[Depends('testAssertReturn57')]
    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_store', 'args' => [['type' => 'i64', 'value' => '18446744073667127374']]],
            expected: [['type' => 'i64', 'value' => '18446744073667127374']],
            line: 205,
        );
    }

    #[Depends('testAssertReturn58')]
    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_store', 'args' => [['type' => 'i64', 'value' => '2880249322']]],
            expected: [['type' => 'i64', 'value' => '2880249322']],
            line: 206,
        );
    }

    #[Depends('testAssertReturn59')]
    public function testAssertReturn60(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_store', 'args' => [['type' => 'i64', 'value' => '12370766947463011818']]],
            expected: [['type' => 'i64', 'value' => '12370766947463011818']],
            line: 207,
        );
    }

    #[Depends('testAssertReturn60')]
    public function testAssertReturn61(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_store', 'args' => [['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 209,
        );
    }

    #[Depends('testAssertReturn61')]
    public function testAssertReturn62(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_store', 'args' => [['type' => 'f32', 'value' => '1011494326']]],
            expected: [['type' => 'f32', 'value' => '1011494326']],
            line: 210,
        );
    }

    #[Depends('testAssertReturn62')]
    public function testAssertReturn63(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_store', 'args' => [['type' => 'f32', 'value' => '1166316389']]],
            expected: [['type' => 'f32', 'value' => '1166316389']],
            line: 211,
        );
    }

    #[Depends('testAssertReturn63')]
    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_store', 'args' => [['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 212,
        );
    }

    #[Depends('testAssertReturn64')]
    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_store', 'args' => [['type' => 'f64', 'value' => '13830554455654793216']]],
            expected: [['type' => 'f64', 'value' => '13830554455654793216']],
            line: 214,
        );
    }

    #[Depends('testAssertReturn65')]
    public function testAssertReturn66(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_store', 'args' => [['type' => 'f64', 'value' => '4653144502447687399']]],
            expected: [['type' => 'f64', 'value' => '4653144502447687399']],
            line: 215,
        );
    }

    #[Depends('testAssertReturn66')]
    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_store', 'args' => [['type' => 'f64', 'value' => '4691032041816096430']]],
            expected: [['type' => 'f64', 'value' => '4691032041816096430']],
            line: 216,
        );
    }

    #[Depends('testAssertReturn67')]
    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_store', 'args' => [['type' => 'f64', 'value' => '9218868437227405311']]],
            expected: [['type' => 'f64', 'value' => '9218868437227405311']],
            line: 217,
        );
    }
}
