<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
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

    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load16_s', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 133,
        );
    }

    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load16_s', 'args' => [['type' => 'i32', 'value' => '4294963054']]],
            expected: [['type' => 'i32', 'value' => '4294963054']],
            line: 134,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load16_s', 'args' => [['type' => 'i32', 'value' => '42']]],
            expected: [['type' => 'i32', 'value' => '42']],
            line: 135,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load16_s', 'args' => [['type' => 'i32', 'value' => '12816']]],
            expected: [['type' => 'i32', 'value' => '12816']],
            line: 136,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load16_u', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '65535']],
            line: 138,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load16_u', 'args' => [['type' => 'i32', 'value' => '4294963054']]],
            expected: [['type' => 'i32', 'value' => '61294']],
            line: 139,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load16_u', 'args' => [['type' => 'i32', 'value' => '42']]],
            expected: [['type' => 'i32', 'value' => '42']],
            line: 140,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load16_u', 'args' => [['type' => 'i32', 'value' => '51966']]],
            expected: [['type' => 'i32', 'value' => '51966']],
            line: 141,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 143,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load', 'args' => [['type' => 'i32', 'value' => '4252543054']]],
            expected: [['type' => 'i32', 'value' => '4252543054']],
            line: 144,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load', 'args' => [['type' => 'i32', 'value' => '42424242']]],
            expected: [['type' => 'i32', 'value' => '42424242']],
            line: 145,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load', 'args' => [['type' => 'i32', 'value' => '2880249322']]],
            expected: [['type' => 'i32', 'value' => '2880249322']],
            line: 146,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load16_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 148,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load16_s', 'args' => [['type' => 'i64', 'value' => '18446744073709547374']]],
            expected: [['type' => 'i64', 'value' => '18446744073709547374']],
            line: 149,
        );
    }

    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load16_s', 'args' => [['type' => 'i64', 'value' => '42']]],
            expected: [['type' => 'i64', 'value' => '42']],
            line: 150,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load16_s', 'args' => [['type' => 'i64', 'value' => '12816']]],
            expected: [['type' => 'i64', 'value' => '12816']],
            line: 151,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load16_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '65535']],
            line: 153,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load16_u', 'args' => [['type' => 'i64', 'value' => '18446744073709547374']]],
            expected: [['type' => 'i64', 'value' => '61294']],
            line: 154,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load16_u', 'args' => [['type' => 'i64', 'value' => '42']]],
            expected: [['type' => 'i64', 'value' => '42']],
            line: 155,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load16_u', 'args' => [['type' => 'i64', 'value' => '51966']]],
            expected: [['type' => 'i64', 'value' => '51966']],
            line: 156,
        );
    }

    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load32_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 158,
        );
    }

    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load32_s', 'args' => [['type' => 'i64', 'value' => '18446744073667127374']]],
            expected: [['type' => 'i64', 'value' => '18446744073667127374']],
            line: 159,
        );
    }

    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load32_s', 'args' => [['type' => 'i64', 'value' => '42424242']]],
            expected: [['type' => 'i64', 'value' => '42424242']],
            line: 160,
        );
    }

    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load32_s', 'args' => [['type' => 'i64', 'value' => '305419896']]],
            expected: [['type' => 'i64', 'value' => '305419896']],
            line: 161,
        );
    }

    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load32_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '4294967295']],
            line: 163,
        );
    }

    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load32_u', 'args' => [['type' => 'i64', 'value' => '18446744073667127374']]],
            expected: [['type' => 'i64', 'value' => '4252543054']],
            line: 164,
        );
    }

    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load32_u', 'args' => [['type' => 'i64', 'value' => '42424242']]],
            expected: [['type' => 'i64', 'value' => '42424242']],
            line: 165,
        );
    }

    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load32_u', 'args' => [['type' => 'i64', 'value' => '2880249322']]],
            expected: [['type' => 'i64', 'value' => '2880249322']],
            line: 166,
        );
    }

    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 168,
        );
    }

    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load', 'args' => [['type' => 'i64', 'value' => '18446744073667127374']]],
            expected: [['type' => 'i64', 'value' => '18446744073667127374']],
            line: 169,
        );
    }

    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load', 'args' => [['type' => 'i64', 'value' => '2880249322']]],
            expected: [['type' => 'i64', 'value' => '2880249322']],
            line: 170,
        );
    }

    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load', 'args' => [['type' => 'i64', 'value' => '12370766947463011818']]],
            expected: [['type' => 'i64', 'value' => '12370766947463011818']],
            line: 171,
        );
    }

    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_load', 'args' => [['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 173,
        );
    }

    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_load', 'args' => [['type' => 'f32', 'value' => '1011494326']]],
            expected: [['type' => 'f32', 'value' => '1011494326']],
            line: 174,
        );
    }

    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_load', 'args' => [['type' => 'f32', 'value' => '1166316389']]],
            expected: [['type' => 'f32', 'value' => '1166316389']],
            line: 175,
        );
    }

    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_load', 'args' => [['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 176,
        );
    }

    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_load', 'args' => [['type' => 'f64', 'value' => '13830554455654793216']]],
            expected: [['type' => 'f64', 'value' => '13830554455654793216']],
            line: 178,
        );
    }

    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_load', 'args' => [['type' => 'f64', 'value' => '4653144502447687399']]],
            expected: [['type' => 'f64', 'value' => '4653144502447687399']],
            line: 179,
        );
    }

    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_load', 'args' => [['type' => 'f64', 'value' => '4691032041816096430']]],
            expected: [['type' => 'f64', 'value' => '4691032041816096430']],
            line: 180,
        );
    }

    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_load', 'args' => [['type' => 'f64', 'value' => '9218868437227405311']]],
            expected: [['type' => 'f64', 'value' => '9218868437227405311']],
            line: 181,
        );
    }

    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_store16', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '65535']],
            line: 184,
        );
    }

    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_store16', 'args' => [['type' => 'i32', 'value' => '4294963054']]],
            expected: [['type' => 'i32', 'value' => '61294']],
            line: 185,
        );
    }

    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_store16', 'args' => [['type' => 'i32', 'value' => '42']]],
            expected: [['type' => 'i32', 'value' => '42']],
            line: 186,
        );
    }

    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_store16', 'args' => [['type' => 'i32', 'value' => '51966']]],
            expected: [['type' => 'i32', 'value' => '51966']],
            line: 187,
        );
    }

    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_store', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 189,
        );
    }

    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_store', 'args' => [['type' => 'i32', 'value' => '4294963054']]],
            expected: [['type' => 'i32', 'value' => '4294963054']],
            line: 190,
        );
    }

    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_store', 'args' => [['type' => 'i32', 'value' => '42424242']]],
            expected: [['type' => 'i32', 'value' => '42424242']],
            line: 191,
        );
    }

    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_store', 'args' => [['type' => 'i32', 'value' => '3735931646']]],
            expected: [['type' => 'i32', 'value' => '3735931646']],
            line: 192,
        );
    }

    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_store16', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '65535']],
            line: 194,
        );
    }

    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_store16', 'args' => [['type' => 'i64', 'value' => '18446744073709547374']]],
            expected: [['type' => 'i64', 'value' => '61294']],
            line: 195,
        );
    }

    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_store16', 'args' => [['type' => 'i64', 'value' => '42']]],
            expected: [['type' => 'i64', 'value' => '42']],
            line: 196,
        );
    }

    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_store16', 'args' => [['type' => 'i64', 'value' => '51966']]],
            expected: [['type' => 'i64', 'value' => '51966']],
            line: 197,
        );
    }

    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_store32', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '4294967295']],
            line: 199,
        );
    }

    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_store32', 'args' => [['type' => 'i64', 'value' => '18446744073709547374']]],
            expected: [['type' => 'i64', 'value' => '4294963054']],
            line: 200,
        );
    }

    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_store32', 'args' => [['type' => 'i64', 'value' => '42424242']]],
            expected: [['type' => 'i64', 'value' => '42424242']],
            line: 201,
        );
    }

    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_store32', 'args' => [['type' => 'i64', 'value' => '3735931646']]],
            expected: [['type' => 'i64', 'value' => '3735931646']],
            line: 202,
        );
    }

    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_store', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 204,
        );
    }

    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_store', 'args' => [['type' => 'i64', 'value' => '18446744073667127374']]],
            expected: [['type' => 'i64', 'value' => '18446744073667127374']],
            line: 205,
        );
    }

    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_store', 'args' => [['type' => 'i64', 'value' => '2880249322']]],
            expected: [['type' => 'i64', 'value' => '2880249322']],
            line: 206,
        );
    }

    public function testAssertReturn60(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_store', 'args' => [['type' => 'i64', 'value' => '12370766947463011818']]],
            expected: [['type' => 'i64', 'value' => '12370766947463011818']],
            line: 207,
        );
    }

    public function testAssertReturn61(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_store', 'args' => [['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 209,
        );
    }

    public function testAssertReturn62(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_store', 'args' => [['type' => 'f32', 'value' => '1011494326']]],
            expected: [['type' => 'f32', 'value' => '1011494326']],
            line: 210,
        );
    }

    public function testAssertReturn63(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_store', 'args' => [['type' => 'f32', 'value' => '1166316389']]],
            expected: [['type' => 'f32', 'value' => '1166316389']],
            line: 211,
        );
    }

    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_store', 'args' => [['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 212,
        );
    }

    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_store', 'args' => [['type' => 'f64', 'value' => '13830554455654793216']]],
            expected: [['type' => 'f64', 'value' => '13830554455654793216']],
            line: 214,
        );
    }

    public function testAssertReturn66(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_store', 'args' => [['type' => 'f64', 'value' => '4653144502447687399']]],
            expected: [['type' => 'f64', 'value' => '4653144502447687399']],
            line: 215,
        );
    }

    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_store', 'args' => [['type' => 'f64', 'value' => '4691032041816096430']]],
            expected: [['type' => 'f64', 'value' => '4691032041816096430']],
            line: 216,
        );
    }

    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_store', 'args' => [['type' => 'f64', 'value' => '9218868437227405311']]],
            expected: [['type' => 'f64', 'value' => '9218868437227405311']],
            line: 217,
        );
    }
}
