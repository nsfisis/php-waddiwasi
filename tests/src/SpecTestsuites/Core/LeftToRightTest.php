<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class LeftToRightTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'left-to-right.0.wasm',
            name: null,
            line: 1,
        );
    }

    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_add', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 181,
        );
    }

    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_add', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 181,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_sub', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 182,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_sub', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 182,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_mul', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 183,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_mul', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 183,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_div_s', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 184,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_div_s', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 184,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_div_u', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 185,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_div_u', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 185,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_rem_s', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 186,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_rem_s', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 186,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_rem_u', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 187,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_rem_u', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 187,
        );
    }

    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_and', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 188,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_and', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 188,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_or', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 189,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_or', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 189,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_xor', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 190,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_xor', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 190,
        );
    }

    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_shl', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 191,
        );
    }

    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_shl', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 191,
        );
    }

    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_shr_u', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 192,
        );
    }

    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_shr_u', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 192,
        );
    }

    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_shr_s', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 193,
        );
    }

    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_shr_s', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 193,
        );
    }

    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_eq', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 194,
        );
    }

    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_eq', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 194,
        );
    }

    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_ne', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 195,
        );
    }

    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_ne', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 195,
        );
    }

    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_lt_s', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 196,
        );
    }

    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_lt_s', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 196,
        );
    }

    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_le_s', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 197,
        );
    }

    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_le_s', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 197,
        );
    }

    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_lt_u', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 198,
        );
    }

    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_lt_u', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 198,
        );
    }

    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_le_u', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 199,
        );
    }

    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_le_u', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 199,
        );
    }

    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_gt_s', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 200,
        );
    }

    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_gt_s', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 200,
        );
    }

    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_ge_s', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 201,
        );
    }

    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_ge_s', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 201,
        );
    }

    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_gt_u', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 202,
        );
    }

    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_gt_u', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 202,
        );
    }

    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_ge_u', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 203,
        );
    }

    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_ge_u', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 203,
        );
    }

    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_store', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 204,
        );
    }

    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_store', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 204,
        );
    }

    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_store8', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 205,
        );
    }

    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_store8', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 205,
        );
    }

    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_store16', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 206,
        );
    }

    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_store16', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 206,
        );
    }

    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_store32', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 207,
        );
    }

    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_call', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 208,
        );
    }

    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_call', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 208,
        );
    }

    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_call_indirect', 'args' => []],
            expected: [['type' => 'i32', 'value' => '66052']],
            line: 209,
        );
    }

    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_call_indirect', 'args' => []],
            expected: [['type' => 'i32', 'value' => '66052']],
            line: 210,
        );
    }

    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_select', 'args' => []],
            expected: [['type' => 'i32', 'value' => '66053']],
            line: 211,
        );
    }

    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_select', 'args' => []],
            expected: [['type' => 'i32', 'value' => '66053']],
            line: 211,
        );
    }

    public function testAssertReturn60(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_add', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 213,
        );
    }

    public function testAssertReturn61(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_add', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 213,
        );
    }

    public function testAssertReturn62(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_sub', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 214,
        );
    }

    public function testAssertReturn63(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_sub', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 214,
        );
    }

    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_mul', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 215,
        );
    }

    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_mul', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 215,
        );
    }

    public function testAssertReturn66(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_div', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 216,
        );
    }

    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_div', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 216,
        );
    }

    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_copysign', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 217,
        );
    }

    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_copysign', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 217,
        );
    }

    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_eq', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 218,
        );
    }

    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_eq', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 218,
        );
    }

    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_ne', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 219,
        );
    }

    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_ne', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 219,
        );
    }

    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_lt', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 220,
        );
    }

    public function testAssertReturn75(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_lt', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 220,
        );
    }

    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_le', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 221,
        );
    }

    public function testAssertReturn77(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_le', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 221,
        );
    }

    public function testAssertReturn78(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_gt', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 222,
        );
    }

    public function testAssertReturn79(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_gt', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 222,
        );
    }

    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_ge', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 223,
        );
    }

    public function testAssertReturn81(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_ge', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 223,
        );
    }

    public function testAssertReturn82(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_min', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 224,
        );
    }

    public function testAssertReturn83(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_min', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 224,
        );
    }

    public function testAssertReturn84(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_max', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 225,
        );
    }

    public function testAssertReturn85(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_max', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 225,
        );
    }

    public function testAssertReturn86(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_store', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 226,
        );
    }

    public function testAssertReturn87(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_store', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 226,
        );
    }

    public function testAssertReturn88(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_call', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 227,
        );
    }

    public function testAssertReturn89(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_call', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 227,
        );
    }

    public function testAssertReturn90(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_call_indirect', 'args' => []],
            expected: [['type' => 'i32', 'value' => '66052']],
            line: 228,
        );
    }

    public function testAssertReturn91(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_call_indirect', 'args' => []],
            expected: [['type' => 'i32', 'value' => '66052']],
            line: 229,
        );
    }

    public function testAssertReturn92(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_select', 'args' => []],
            expected: [['type' => 'i32', 'value' => '66053']],
            line: 230,
        );
    }

    public function testAssertReturn93(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_select', 'args' => []],
            expected: [['type' => 'i32', 'value' => '66053']],
            line: 230,
        );
    }

    public function testAssertReturn94(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'br_if', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 232,
        );
    }

    public function testAssertReturn95(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'br_table', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 233,
        );
    }
}
