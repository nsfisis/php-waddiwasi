<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class FloatLiteralsTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'float_literals.0.wasm',
            name: null,
            line: 3,
        );
    }

    #[Depends('testModule0')]
    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.nan', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2143289344']],
            line: 121,
        );
    }

    #[Depends('testAssertReturn1')]
    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.positive_nan', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2143289344']],
            line: 122,
        );
    }

    #[Depends('testAssertReturn2')]
    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.negative_nan', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4290772992']],
            line: 123,
        );
    }

    #[Depends('testAssertReturn3')]
    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.plain_nan', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2143289344']],
            line: 124,
        );
    }

    #[Depends('testAssertReturn4')]
    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.informally_known_as_plain_snan', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2141192192']],
            line: 125,
        );
    }

    #[Depends('testAssertReturn5')]
    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.all_ones_nan', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 126,
        );
    }

    #[Depends('testAssertReturn6')]
    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.misc_nan', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2139169605']],
            line: 127,
        );
    }

    #[Depends('testAssertReturn7')]
    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.misc_positive_nan', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2142257232']],
            line: 128,
        );
    }

    #[Depends('testAssertReturn8')]
    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.misc_negative_nan', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4289379550']],
            line: 129,
        );
    }

    #[Depends('testAssertReturn9')]
    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.infinity', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2139095040']],
            line: 130,
        );
    }

    #[Depends('testAssertReturn10')]
    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.positive_infinity', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2139095040']],
            line: 131,
        );
    }

    #[Depends('testAssertReturn11')]
    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.negative_infinity', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4286578688']],
            line: 132,
        );
    }

    #[Depends('testAssertReturn12')]
    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.zero', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 133,
        );
    }

    #[Depends('testAssertReturn13')]
    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.positive_zero', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 134,
        );
    }

    #[Depends('testAssertReturn14')]
    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.negative_zero', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 135,
        );
    }

    #[Depends('testAssertReturn15')]
    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.misc', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1086918619']],
            line: 136,
        );
    }

    #[Depends('testAssertReturn16')]
    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.min_positive', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 137,
        );
    }

    #[Depends('testAssertReturn17')]
    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.min_normal', 'args' => []],
            expected: [['type' => 'i32', 'value' => '8388608']],
            line: 138,
        );
    }

    #[Depends('testAssertReturn18')]
    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.max_subnormal', 'args' => []],
            expected: [['type' => 'i32', 'value' => '8388607']],
            line: 139,
        );
    }

    #[Depends('testAssertReturn19')]
    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.max_finite', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2139095039']],
            line: 140,
        );
    }

    #[Depends('testAssertReturn20')]
    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.trailing_dot', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1149239296']],
            line: 141,
        );
    }

    #[Depends('testAssertReturn21')]
    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.misc_int', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1200726656']],
            line: 142,
        );
    }

    #[Depends('testAssertReturn22')]
    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.large_int', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1736441856']],
            line: 143,
        );
    }

    #[Depends('testAssertReturn23')]
    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.min_int32', 'args' => []],
            expected: [['type' => 'i32', 'value' => '3472883712']],
            line: 144,
        );
    }

    #[Depends('testAssertReturn24')]
    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32.min_int64', 'args' => []],
            expected: [['type' => 'i32', 'value' => '3741319168']],
            line: 145,
        );
    }

    #[Depends('testAssertReturn25')]
    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_dec.zero', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 146,
        );
    }

    #[Depends('testAssertReturn26')]
    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_dec.positive_zero', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 147,
        );
    }

    #[Depends('testAssertReturn27')]
    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_dec.negative_zero', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 148,
        );
    }

    #[Depends('testAssertReturn28')]
    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_dec.misc', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1086918619']],
            line: 149,
        );
    }

    #[Depends('testAssertReturn29')]
    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_dec.min_positive', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 150,
        );
    }

    #[Depends('testAssertReturn30')]
    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_dec.min_normal', 'args' => []],
            expected: [['type' => 'i32', 'value' => '8388608']],
            line: 151,
        );
    }

    #[Depends('testAssertReturn31')]
    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_dec.max_subnormal', 'args' => []],
            expected: [['type' => 'i32', 'value' => '8388607']],
            line: 152,
        );
    }

    #[Depends('testAssertReturn32')]
    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_dec.max_finite', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2139095039']],
            line: 153,
        );
    }

    #[Depends('testAssertReturn33')]
    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_dec.trailing_dot', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1343554297']],
            line: 154,
        );
    }

    #[Depends('testAssertReturn34')]
    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_dec.root_beer_float', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1065353217']],
            line: 155,
        );
    }

    #[Depends('testAssertReturn35')]
    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_dec.misc_int', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1178657792']],
            line: 156,
        );
    }

    #[Depends('testAssertReturn36')]
    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_dec.large_int', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1621981420']],
            line: 157,
        );
    }

    #[Depends('testAssertReturn37')]
    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_dec.min_int32', 'args' => []],
            expected: [['type' => 'i32', 'value' => '3472883712']],
            line: 158,
        );
    }

    #[Depends('testAssertReturn38')]
    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32_dec.min_int64', 'args' => []],
            expected: [['type' => 'i32', 'value' => '3741319168']],
            line: 159,
        );
    }

    #[Depends('testAssertReturn39')]
    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.nan', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9221120237041090560']],
            line: 161,
        );
    }

    #[Depends('testAssertReturn40')]
    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.positive_nan', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9221120237041090560']],
            line: 162,
        );
    }

    #[Depends('testAssertReturn41')]
    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.negative_nan', 'args' => []],
            expected: [['type' => 'i64', 'value' => '18444492273895866368']],
            line: 163,
        );
    }

    #[Depends('testAssertReturn42')]
    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.plain_nan', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9221120237041090560']],
            line: 164,
        );
    }

    #[Depends('testAssertReturn43')]
    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.informally_known_as_plain_snan', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9219994337134247936']],
            line: 165,
        );
    }

    #[Depends('testAssertReturn44')]
    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.all_ones_nan', 'args' => []],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 166,
        );
    }

    #[Depends('testAssertReturn45')]
    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.misc_nan', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9218888453225749180']],
            line: 167,
        );
    }

    #[Depends('testAssertReturn46')]
    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.misc_positive_nan', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9219717281780008969']],
            line: 168,
        );
    }

    #[Depends('testAssertReturn47')]
    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.misc_negative_nan', 'args' => []],
            expected: [['type' => 'i64', 'value' => '18442992325002076997']],
            line: 169,
        );
    }

    #[Depends('testAssertReturn48')]
    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.infinity', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9218868437227405312']],
            line: 170,
        );
    }

    #[Depends('testAssertReturn49')]
    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.positive_infinity', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9218868437227405312']],
            line: 171,
        );
    }

    #[Depends('testAssertReturn50')]
    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.negative_infinity', 'args' => []],
            expected: [['type' => 'i64', 'value' => '18442240474082181120']],
            line: 172,
        );
    }

    #[Depends('testAssertReturn51')]
    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.zero', 'args' => []],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 173,
        );
    }

    #[Depends('testAssertReturn52')]
    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.positive_zero', 'args' => []],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 174,
        );
    }

    #[Depends('testAssertReturn53')]
    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.negative_zero', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 175,
        );
    }

    #[Depends('testAssertReturn54')]
    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.misc', 'args' => []],
            expected: [['type' => 'i64', 'value' => '4618760256179416344']],
            line: 176,
        );
    }

    #[Depends('testAssertReturn55')]
    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.min_positive', 'args' => []],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 177,
        );
    }

    #[Depends('testAssertReturn56')]
    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.min_normal', 'args' => []],
            expected: [['type' => 'i64', 'value' => '4503599627370496']],
            line: 178,
        );
    }

    #[Depends('testAssertReturn57')]
    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.max_subnormal', 'args' => []],
            expected: [['type' => 'i64', 'value' => '4503599627370495']],
            line: 179,
        );
    }

    #[Depends('testAssertReturn58')]
    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.max_finite', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9218868437227405311']],
            line: 180,
        );
    }

    #[Depends('testAssertReturn59')]
    public function testAssertReturn60(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.trailing_dot', 'args' => []],
            expected: [['type' => 'i64', 'value' => '5057542381537067008']],
            line: 181,
        );
    }

    #[Depends('testAssertReturn60')]
    public function testAssertReturn61(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.misc_int', 'args' => []],
            expected: [['type' => 'i64', 'value' => '4679860480993394688']],
            line: 182,
        );
    }

    #[Depends('testAssertReturn61')]
    public function testAssertReturn62(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.large_int', 'args' => []],
            expected: [['type' => 'i64', 'value' => '4967470388989657088']],
            line: 183,
        );
    }

    #[Depends('testAssertReturn62')]
    public function testAssertReturn63(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.min_int32', 'args' => []],
            expected: [['type' => 'i64', 'value' => '13970166044103278592']],
            line: 184,
        );
    }

    #[Depends('testAssertReturn63')]
    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64.min_int64', 'args' => []],
            expected: [['type' => 'i64', 'value' => '14114281232179134464']],
            line: 185,
        );
    }

    #[Depends('testAssertReturn64')]
    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_dec.zero', 'args' => []],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 186,
        );
    }

    #[Depends('testAssertReturn65')]
    public function testAssertReturn66(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_dec.positive_zero', 'args' => []],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 187,
        );
    }

    #[Depends('testAssertReturn66')]
    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_dec.negative_zero', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 188,
        );
    }

    #[Depends('testAssertReturn67')]
    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_dec.misc', 'args' => []],
            expected: [['type' => 'i64', 'value' => '4618760256179416344']],
            line: 189,
        );
    }

    #[Depends('testAssertReturn68')]
    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_dec.min_positive', 'args' => []],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 190,
        );
    }

    #[Depends('testAssertReturn69')]
    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_dec.min_normal', 'args' => []],
            expected: [['type' => 'i64', 'value' => '4503599627370496']],
            line: 191,
        );
    }

    #[Depends('testAssertReturn70')]
    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_dec.max_subnormal', 'args' => []],
            expected: [['type' => 'i64', 'value' => '4503599627370495']],
            line: 192,
        );
    }

    #[Depends('testAssertReturn71')]
    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_dec.max_finite', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9218868437227405311']],
            line: 193,
        );
    }

    #[Depends('testAssertReturn72')]
    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_dec.trailing_dot', 'args' => []],
            expected: [['type' => 'i64', 'value' => '6103021453049119613']],
            line: 194,
        );
    }

    #[Depends('testAssertReturn73')]
    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_dec.root_beer_float', 'args' => []],
            expected: [['type' => 'i64', 'value' => '4607182419335945764']],
            line: 195,
        );
    }

    #[Depends('testAssertReturn74')]
    public function testAssertReturn75(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_dec.misc_int', 'args' => []],
            expected: [['type' => 'i64', 'value' => '4668012349850910720']],
            line: 196,
        );
    }

    #[Depends('testAssertReturn75')]
    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_dec.large_int', 'args' => []],
            expected: [['type' => 'i64', 'value' => '4906019910204099648']],
            line: 197,
        );
    }

    #[Depends('testAssertReturn76')]
    public function testAssertReturn77(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_dec.min_int32', 'args' => []],
            expected: [['type' => 'i64', 'value' => '13970166044103278592']],
            line: 198,
        );
    }

    #[Depends('testAssertReturn77')]
    public function testAssertReturn78(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64_dec.min_int64', 'args' => []],
            expected: [['type' => 'i64', 'value' => '14114281232179134464']],
            line: 199,
        );
    }

    #[Depends('testAssertReturn78')]
    public function testAssertReturn79(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32-dec-sep1', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1232348160']],
            line: 201,
        );
    }

    #[Depends('testAssertReturn79')]
    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32-dec-sep2', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1148846080']],
            line: 202,
        );
    }

    #[Depends('testAssertReturn80')]
    public function testAssertReturn81(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32-dec-sep3', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1148897552']],
            line: 203,
        );
    }

    #[Depends('testAssertReturn81')]
    public function testAssertReturn82(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32-dec-sep4', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1482758550']],
            line: 204,
        );
    }

    #[Depends('testAssertReturn82')]
    public function testAssertReturn83(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32-dec-sep5', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1847438964']],
            line: 205,
        );
    }

    #[Depends('testAssertReturn83')]
    public function testAssertReturn84(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32-hex-sep1', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1294004234']],
            line: 206,
        );
    }

    #[Depends('testAssertReturn84')]
    public function testAssertReturn85(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32-hex-sep2', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1205143424']],
            line: 207,
        );
    }

    #[Depends('testAssertReturn85')]
    public function testAssertReturn86(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32-hex-sep3', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1193345009']],
            line: 208,
        );
    }

    #[Depends('testAssertReturn86')]
    public function testAssertReturn87(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32-hex-sep4', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1240465408']],
            line: 209,
        );
    }

    #[Depends('testAssertReturn87')]
    public function testAssertReturn88(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f32-hex-sep5', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1437319208']],
            line: 210,
        );
    }

    #[Depends('testAssertReturn88')]
    public function testAssertReturn89(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64-dec-sep1', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4696837146684686336']],
            line: 212,
        );
    }

    #[Depends('testAssertReturn89')]
    public function testAssertReturn90(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64-dec-sep2', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4652007308841189376']],
            line: 213,
        );
    }

    #[Depends('testAssertReturn90')]
    public function testAssertReturn91(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64-dec-sep3', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4652034942576659200']],
            line: 214,
        );
    }

    #[Depends('testAssertReturn91')]
    public function testAssertReturn92(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64-dec-sep4', 'args' => []],
            expected: [['type' => 'f64', 'value' => '2796837019126844485']],
            line: 215,
        );
    }

    #[Depends('testAssertReturn92')]
    public function testAssertReturn93(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64-dec-sep5', 'args' => []],
            expected: [['type' => 'f64', 'value' => '5027061507362119324']],
            line: 216,
        );
    }

    #[Depends('testAssertReturn93')]
    public function testAssertReturn94(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64-hex-sep1', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4838519794133185330']],
            line: 217,
        );
    }

    #[Depends('testAssertReturn94')]
    public function testAssertReturn95(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64-hex-sep2', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4682231715257647104']],
            line: 218,
        );
    }

    #[Depends('testAssertReturn95')]
    public function testAssertReturn96(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64-hex-sep3', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4675897489574114112']],
            line: 219,
        );
    }

    #[Depends('testAssertReturn96')]
    public function testAssertReturn97(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64-hex-sep4', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4701195061021376512']],
            line: 220,
        );
    }

    #[Depends('testAssertReturn97')]
    public function testAssertReturn98(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f64-hex-sep5', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4806880140420149248']],
            line: 221,
        );
    }

    #[Depends('testAssertReturn98')]
    public function testModule99(): void
    {
        $this->runModuleCommand(
            filename: 'float_literals.1.wasm',
            name: null,
            line: 224,
        );
    }

    #[Depends('testModule99')]
    public function testAssertReturn100(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '4294967249', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4751297606777307136']],
            line: 233,
        );
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertReturn100')]
    public function testAssertMalformed101(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed101')]
    public function testAssertMalformed102(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed102')]
    public function testAssertMalformed103(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed103')]
    public function testAssertMalformed104(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed104')]
    public function testAssertMalformed105(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed105')]
    public function testAssertMalformed106(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed106')]
    public function testAssertMalformed107(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed107')]
    public function testAssertMalformed108(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed108')]
    public function testAssertMalformed109(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed109')]
    public function testAssertMalformed110(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed110')]
    public function testAssertMalformed111(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed111')]
    public function testAssertMalformed112(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed112')]
    public function testAssertMalformed113(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed113')]
    public function testAssertMalformed114(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed114')]
    public function testAssertMalformed115(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed115')]
    public function testAssertMalformed116(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed116')]
    public function testAssertMalformed117(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed117')]
    public function testAssertMalformed118(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed118')]
    public function testAssertMalformed119(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed119')]
    public function testAssertMalformed120(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed120')]
    public function testAssertMalformed121(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed121')]
    public function testAssertMalformed122(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed122')]
    public function testAssertMalformed123(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed123')]
    public function testAssertMalformed124(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed124')]
    public function testAssertMalformed125(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed125')]
    public function testAssertMalformed126(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed126')]
    public function testAssertMalformed127(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed127')]
    public function testAssertMalformed128(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed128')]
    public function testAssertMalformed129(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed129')]
    public function testAssertMalformed130(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed130')]
    public function testAssertMalformed131(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed131')]
    public function testAssertMalformed132(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed132')]
    public function testAssertMalformed133(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed133')]
    public function testAssertMalformed134(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed134')]
    public function testAssertMalformed135(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed135')]
    public function testAssertMalformed136(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed136')]
    public function testAssertMalformed137(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed137')]
    public function testAssertMalformed138(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed138')]
    public function testAssertMalformed139(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed139')]
    public function testAssertMalformed140(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed140')]
    public function testAssertMalformed141(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed141')]
    public function testAssertMalformed142(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed142')]
    public function testAssertMalformed143(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed143')]
    public function testAssertMalformed144(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed144')]
    public function testAssertMalformed145(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed145')]
    public function testAssertMalformed146(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed146')]
    public function testAssertMalformed147(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed147')]
    public function testAssertMalformed148(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed148')]
    public function testAssertMalformed149(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed149')]
    public function testAssertMalformed150(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed150')]
    public function testAssertMalformed151(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed151')]
    public function testAssertMalformed152(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed152')]
    public function testAssertMalformed153(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed153')]
    public function testAssertMalformed154(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed154')]
    public function testAssertMalformed155(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed155')]
    public function testAssertMalformed156(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed156')]
    public function testAssertMalformed157(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed157')]
    public function testAssertMalformed158(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed158')]
    public function testAssertMalformed159(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed159')]
    public function testAssertMalformed160(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed160')]
    public function testAssertMalformed161(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed161')]
    public function testAssertMalformed162(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed162')]
    public function testAssertMalformed163(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed163')]
    public function testAssertMalformed164(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed164')]
    public function testAssertMalformed165(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed165')]
    public function testAssertMalformed166(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed166')]
    public function testAssertMalformed167(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed167')]
    public function testAssertMalformed168(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed168')]
    public function testAssertMalformed169(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed169')]
    public function testAssertMalformed170(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed170')]
    public function testAssertMalformed171(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed171')]
    public function testAssertMalformed172(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed172')]
    public function testAssertMalformed173(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed173')]
    public function testAssertMalformed174(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed174')]
    public function testAssertMalformed175(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed175')]
    public function testAssertMalformed176(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed176')]
    public function testAssertMalformed177(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed177')]
    public function testAssertMalformed178(): void
    {
    }
}
