<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;

final class FloatExprsTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.0.wasm',
            name: null,
            line: 6,
        );
    }

    #[Depends('testModule0')]
    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_contraction', 'args' => [['type' => 'f64', 'value' => '13369472591878845359'], ['type' => 'f64', 'value' => '7598224971858294334'], ['type' => 'f64', 'value' => '7009968021366006149']]],
            expected: [['type' => 'f64', 'value' => '16360919150252594323']],
            line: 11,
        );
    }

    #[Depends('testAssertReturn1')]
    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_contraction', 'args' => [['type' => 'f64', 'value' => '4845207016438394692'], ['type' => 'f64', 'value' => '3163224970157846858'], ['type' => 'f64', 'value' => '3251145870828527841']]],
            expected: [['type' => 'f64', 'value' => '3401457070760597396']],
            line: 12,
        );
    }

    #[Depends('testAssertReturn2')]
    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_contraction', 'args' => [['type' => 'f64', 'value' => '11159707324127586240'], ['type' => 'f64', 'value' => '7011538096610110295'], ['type' => 'f64', 'value' => '4140382893275160737']]],
            expected: [['type' => 'f64', 'value' => '13564076370790560102']],
            line: 13,
        );
    }

    #[Depends('testAssertReturn3')]
    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_contraction', 'args' => [['type' => 'f64', 'value' => '4300281701552927458'], ['type' => 'f64', 'value' => '13379479906516703876'], ['type' => 'f64', 'value' => '3629658278272971302']]],
            expected: [['type' => 'f64', 'value' => '13072631228492738408']],
            line: 14,
        );
    }

    #[Depends('testAssertReturn4')]
    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_contraction', 'args' => [['type' => 'f64', 'value' => '9554523352352050493'], ['type' => 'f64', 'value' => '18042841594766434431'], ['type' => 'f64', 'value' => '4368037109959396445']]],
            expected: [['type' => 'f64', 'value' => '4544162191519938727']],
            line: 15,
        );
    }

    #[Depends('testAssertReturn5')]
    public function testModule6(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.1.wasm',
            name: null,
            line: 19,
        );
    }

    #[Depends('testModule6')]
    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fma', 'args' => [['type' => 'f32', 'value' => '2111029761'], ['type' => 'f32', 'value' => '879215268'], ['type' => 'f32', 'value' => '1967953261']]],
            expected: [['type' => 'f32', 'value' => '1968345878']],
            line: 26,
        );
    }

    #[Depends('testAssertReturn7')]
    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fma', 'args' => [['type' => 'f32', 'value' => '838240978'], ['type' => 'f32', 'value' => '2796592697'], ['type' => 'f32', 'value' => '329493464']]],
            expected: [['type' => 'f32', 'value' => '2569667420']],
            line: 27,
        );
    }

    #[Depends('testAssertReturn8')]
    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fma', 'args' => [['type' => 'f32', 'value' => '1381446097'], ['type' => 'f32', 'value' => '962187981'], ['type' => 'f32', 'value' => '1155576972']]],
            expected: [['type' => 'f32', 'value' => '1278680110']],
            line: 28,
        );
    }

    #[Depends('testAssertReturn9')]
    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fma', 'args' => [['type' => 'f32', 'value' => '999635965'], ['type' => 'f32', 'value' => '3403528619'], ['type' => 'f32', 'value' => '3222888213']]],
            expected: [['type' => 'f32', 'value' => '3338748778']],
            line: 29,
        );
    }

    #[Depends('testAssertReturn10')]
    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fma', 'args' => [['type' => 'f32', 'value' => '2123679707'], ['type' => 'f32', 'value' => '2625733638'], ['type' => 'f32', 'value' => '3500197619']]],
            expected: [['type' => 'f32', 'value' => '3684076259']],
            line: 30,
        );
    }

    #[Depends('testAssertReturn11')]
    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fma', 'args' => [['type' => 'f64', 'value' => '7118716943724900052'], ['type' => 'f64', 'value' => '6546073043412611735'], ['type' => 'f64', 'value' => '18275705786238687882']]],
            expected: [['type' => 'f64', 'value' => '9054581441422375136']],
            line: 31,
        );
    }

    #[Depends('testAssertReturn12')]
    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fma', 'args' => [['type' => 'f64', 'value' => '7984371788751700236'], ['type' => 'f64', 'value' => '4021745400549737956'], ['type' => 'f64', 'value' => '7188568268293775252']]],
            expected: [['type' => 'f64', 'value' => '7398962198428541884']],
            line: 32,
        );
    }

    #[Depends('testAssertReturn13')]
    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fma', 'args' => [['type' => 'f64', 'value' => '1362668175782178275'], ['type' => 'f64', 'value' => '18385570095786966502'], ['type' => 'f64', 'value' => '5677031731722859914']]],
            expected: [['type' => 'f64', 'value' => '15141616602947129037']],
            line: 33,
        );
    }

    #[Depends('testAssertReturn14')]
    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fma', 'args' => [['type' => 'f64', 'value' => '12093403956019835987'], ['type' => 'f64', 'value' => '15826077508588652458'], ['type' => 'f64', 'value' => '4856562394320338043']]],
            expected: [['type' => 'f64', 'value' => '4867219230351674394']],
            line: 34,
        );
    }

    #[Depends('testAssertReturn15')]
    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fma', 'args' => [['type' => 'f64', 'value' => '4843589256781277081'], ['type' => 'f64', 'value' => '7695653093478086834'], ['type' => 'f64', 'value' => '16938438850771988744']]],
            expected: [['type' => 'f64', 'value' => '7932313162666085329']],
            line: 35,
        );
    }

    #[Depends('testAssertReturn16')]
    public function testModule17(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.2.wasm',
            name: null,
            line: 40,
        );
    }

    #[Depends('testModule17')]
    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_add_zero', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 47,
        );
    }

    #[Depends('testAssertReturn18')]
    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_add_zero', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 48,
        );
    }

    #[Depends('testAssertReturn19')]
    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_add_zero', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 49,
        );
    }

    #[Depends('testAssertReturn20')]
    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_add_zero', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'f64', 'value' => 'nan:arithmetic']],
            line: 50,
        );
    }

    #[Depends('testAssertReturn21')]
    public function testModule22(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.3.wasm',
            name: null,
            line: 54,
        );
    }

    #[Depends('testModule22')]
    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_zero_sub', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 61,
        );
    }

    #[Depends('testAssertReturn23')]
    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_zero_sub', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 62,
        );
    }

    #[Depends('testAssertReturn24')]
    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_zero_sub', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 63,
        );
    }

    #[Depends('testAssertReturn25')]
    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_zero_sub', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'f64', 'value' => 'nan:arithmetic']],
            line: 64,
        );
    }

    #[Depends('testAssertReturn26')]
    public function testModule27(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.4.wasm',
            name: null,
            line: 68,
        );
    }

    #[Depends('testModule27')]
    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_sub_zero', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 75,
        );
    }

    #[Depends('testAssertReturn28')]
    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_sub_zero', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'f64', 'value' => 'nan:arithmetic']],
            line: 76,
        );
    }

    #[Depends('testAssertReturn29')]
    public function testModule30(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.5.wasm',
            name: null,
            line: 80,
        );
    }

    #[Depends('testModule30')]
    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_mul_zero', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 87,
        );
    }

    #[Depends('testAssertReturn31')]
    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_mul_zero', 'args' => [['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 88,
        );
    }

    #[Depends('testAssertReturn32')]
    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_mul_zero', 'args' => [['type' => 'f32', 'value' => '3221225472']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 89,
        );
    }

    #[Depends('testAssertReturn33')]
    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_mul_zero', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 90,
        );
    }

    #[Depends('testAssertReturn34')]
    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_mul_zero', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 91,
        );
    }

    #[Depends('testAssertReturn35')]
    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_mul_zero', 'args' => [['type' => 'f64', 'value' => '13830554455654793216']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 92,
        );
    }

    #[Depends('testAssertReturn36')]
    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_mul_zero', 'args' => [['type' => 'f64', 'value' => '13835058055282163712']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 93,
        );
    }

    #[Depends('testAssertReturn37')]
    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_mul_zero', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'f64', 'value' => 'nan:arithmetic']],
            line: 94,
        );
    }

    #[Depends('testAssertReturn38')]
    public function testModule39(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.6.wasm',
            name: null,
            line: 99,
        );
    }

    #[Depends('testModule39')]
    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_mul_one', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 106,
        );
    }

    #[Depends('testAssertReturn40')]
    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_mul_one', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'f64', 'value' => 'nan:arithmetic']],
            line: 107,
        );
    }

    #[Depends('testAssertReturn41')]
    public function testModule42(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.7.wasm',
            name: null,
            line: 111,
        );
    }

    #[Depends('testModule42')]
    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_zero_div', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 118,
        );
    }

    #[Depends('testAssertReturn43')]
    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_zero_div', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 119,
        );
    }

    #[Depends('testAssertReturn44')]
    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_zero_div', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 120,
        );
    }

    #[Depends('testAssertReturn45')]
    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_zero_div', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 121,
        );
    }

    #[Depends('testAssertReturn46')]
    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_zero_div', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => 'nan:canonical']],
            line: 122,
        );
    }

    #[Depends('testAssertReturn47')]
    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_zero_div', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => 'nan:canonical']],
            line: 123,
        );
    }

    #[Depends('testAssertReturn48')]
    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_zero_div', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'f64', 'value' => 'nan:canonical']],
            line: 124,
        );
    }

    #[Depends('testAssertReturn49')]
    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_zero_div', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'f64', 'value' => 'nan:arithmetic']],
            line: 125,
        );
    }

    #[Depends('testAssertReturn50')]
    public function testModule51(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.8.wasm',
            name: null,
            line: 129,
        );
    }

    #[Depends('testModule51')]
    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_one', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 136,
        );
    }

    #[Depends('testAssertReturn52')]
    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_one', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'f64', 'value' => 'nan:arithmetic']],
            line: 137,
        );
    }

    #[Depends('testAssertReturn53')]
    public function testModule54(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.9.wasm',
            name: null,
            line: 141,
        );
    }

    #[Depends('testModule54')]
    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_neg1', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 148,
        );
    }

    #[Depends('testAssertReturn55')]
    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_neg1', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'f64', 'value' => 'nan:arithmetic']],
            line: 149,
        );
    }

    #[Depends('testAssertReturn56')]
    public function testModule57(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.10.wasm',
            name: null,
            line: 153,
        );
    }

    #[Depends('testModule57')]
    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_neg0_sub', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 160,
        );
    }

    #[Depends('testAssertReturn58')]
    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_neg0_sub', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'f64', 'value' => 'nan:arithmetic']],
            line: 161,
        );
    }

    #[Depends('testAssertReturn59')]
    public function testModule60(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.11.wasm',
            name: null,
            line: 165,
        );
    }

    #[Depends('testModule60')]
    public function testAssertReturn61(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_neg1_mul', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 172,
        );
    }

    #[Depends('testAssertReturn61')]
    public function testAssertReturn62(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_neg1_mul', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'f64', 'value' => 'nan:arithmetic']],
            line: 173,
        );
    }

    #[Depends('testAssertReturn62')]
    public function testModule63(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.12.wasm',
            name: null,
            line: 177,
        );
    }

    #[Depends('testModule63')]
    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_eq_self', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 184,
        );
    }

    #[Depends('testAssertReturn64')]
    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_eq_self', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 185,
        );
    }

    #[Depends('testAssertReturn65')]
    public function testModule66(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.13.wasm',
            name: null,
            line: 189,
        );
    }

    #[Depends('testModule66')]
    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_ne_self', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 196,
        );
    }

    #[Depends('testAssertReturn67')]
    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_ne_self', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 197,
        );
    }

    #[Depends('testAssertReturn68')]
    public function testModule69(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.14.wasm',
            name: null,
            line: 201,
        );
    }

    #[Depends('testModule69')]
    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_sub_self', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 208,
        );
    }

    #[Depends('testAssertReturn70')]
    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_sub_self', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 209,
        );
    }

    #[Depends('testAssertReturn71')]
    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_sub_self', 'args' => [['type' => 'f64', 'value' => '9218868437227405312']]],
            expected: [['type' => 'f64', 'value' => 'nan:canonical']],
            line: 210,
        );
    }

    #[Depends('testAssertReturn72')]
    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_sub_self', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'f64', 'value' => 'nan:canonical']],
            line: 211,
        );
    }

    #[Depends('testAssertReturn73')]
    public function testModule74(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.15.wasm',
            name: null,
            line: 215,
        );
    }

    #[Depends('testModule74')]
    public function testAssertReturn75(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_self', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 222,
        );
    }

    #[Depends('testAssertReturn75')]
    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_self', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 223,
        );
    }

    #[Depends('testAssertReturn76')]
    public function testAssertReturn77(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_self', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 224,
        );
    }

    #[Depends('testAssertReturn77')]
    public function testAssertReturn78(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_self', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 225,
        );
    }

    #[Depends('testAssertReturn78')]
    public function testAssertReturn79(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_self', 'args' => [['type' => 'f64', 'value' => '9218868437227405312']]],
            expected: [['type' => 'f64', 'value' => 'nan:canonical']],
            line: 226,
        );
    }

    #[Depends('testAssertReturn79')]
    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_self', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'f64', 'value' => 'nan:canonical']],
            line: 227,
        );
    }

    #[Depends('testAssertReturn80')]
    public function testAssertReturn81(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_self', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => 'nan:canonical']],
            line: 228,
        );
    }

    #[Depends('testAssertReturn81')]
    public function testAssertReturn82(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_self', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => 'nan:canonical']],
            line: 229,
        );
    }

    #[Depends('testAssertReturn82')]
    public function testModule83(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.16.wasm',
            name: null,
            line: 233,
        );
    }

    #[Depends('testModule83')]
    public function testAssertReturn84(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_3', 'args' => [['type' => 'f32', 'value' => '3634023955']]],
            expected: [['type' => 'f32', 'value' => '3620628505']],
            line: 240,
        );
    }

    #[Depends('testAssertReturn84')]
    public function testAssertReturn85(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_3', 'args' => [['type' => 'f32', 'value' => '4000459555']]],
            expected: [['type' => 'f32', 'value' => '3986780695']],
            line: 241,
        );
    }

    #[Depends('testAssertReturn85')]
    public function testAssertReturn86(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_3', 'args' => [['type' => 'f32', 'value' => '2517965963']]],
            expected: [['type' => 'f32', 'value' => '2504446137']],
            line: 242,
        );
    }

    #[Depends('testAssertReturn86')]
    public function testAssertReturn87(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_3', 'args' => [['type' => 'f32', 'value' => '2173683100']]],
            expected: [['type' => 'f32', 'value' => '2160046629']],
            line: 243,
        );
    }

    #[Depends('testAssertReturn87')]
    public function testAssertReturn88(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_3', 'args' => [['type' => 'f32', 'value' => '2750097330']]],
            expected: [['type' => 'f32', 'value' => '2736571681']],
            line: 244,
        );
    }

    #[Depends('testAssertReturn88')]
    public function testAssertReturn89(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_3', 'args' => [['type' => 'f64', 'value' => '16679796490173820099']]],
            expected: [['type' => 'f64', 'value' => '16672802667330368301']],
            line: 245,
        );
    }

    #[Depends('testAssertReturn89')]
    public function testAssertReturn90(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_3', 'args' => [['type' => 'f64', 'value' => '13081777497422760306']]],
            expected: [['type' => 'f64', 'value' => '13074664638073319671']],
            line: 246,
        );
    }

    #[Depends('testAssertReturn90')]
    public function testAssertReturn91(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_3', 'args' => [['type' => 'f64', 'value' => '674365394458900388']]],
            expected: [['type' => 'f64', 'value' => '667250911628840899']],
            line: 247,
        );
    }

    #[Depends('testAssertReturn91')]
    public function testAssertReturn92(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_3', 'args' => [['type' => 'f64', 'value' => '18365700772251870524']]],
            expected: [['type' => 'f64', 'value' => '18358201936817915643']],
            line: 248,
        );
    }

    #[Depends('testAssertReturn92')]
    public function testAssertReturn93(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_3', 'args' => [['type' => 'f64', 'value' => '6476267216527259981']]],
            expected: [['type' => 'f64', 'value' => '6468791534604471399']],
            line: 249,
        );
    }

    #[Depends('testAssertReturn93')]
    public function testModule94(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.17.wasm',
            name: null,
            line: 253,
        );
    }

    #[Depends('testModule94')]
    public function testAssertReturn95(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_factor', 'args' => [['type' => 'f32', 'value' => '3550941609'], ['type' => 'f32', 'value' => '3628209942'], ['type' => 'f32', 'value' => '1568101121']]],
            expected: [['type' => 'f32', 'value' => '4131116008']],
            line: 260,
        );
    }

    #[Depends('testAssertReturn95')]
    public function testAssertReturn96(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_factor', 'args' => [['type' => 'f32', 'value' => '3168433147'], ['type' => 'f32', 'value' => '1028017286'], ['type' => 'f32', 'value' => '3141035521']]],
            expected: [['type' => 'f32', 'value' => '3095417249']],
            line: 261,
        );
    }

    #[Depends('testAssertReturn96')]
    public function testAssertReturn97(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_factor', 'args' => [['type' => 'f32', 'value' => '2869115159'], ['type' => 'f32', 'value' => '536308199'], ['type' => 'f32', 'value' => '2100177580']]],
            expected: [['type' => 'f32', 'value' => '3904015703']],
            line: 262,
        );
    }

    #[Depends('testAssertReturn97')]
    public function testAssertReturn98(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_factor', 'args' => [['type' => 'f32', 'value' => '2684117842'], ['type' => 'f32', 'value' => '369386499'], ['type' => 'f32', 'value' => '2061166438']]],
            expected: [['type' => 'f32', 'value' => '3679965352']],
            line: 263,
        );
    }

    #[Depends('testAssertReturn98')]
    public function testAssertReturn99(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_factor', 'args' => [['type' => 'f32', 'value' => '2510116111'], ['type' => 'f32', 'value' => '476277495'], ['type' => 'f32', 'value' => '1237750930']]],
            expected: [['type' => 'f32', 'value' => '649094375']],
            line: 264,
        );
    }

    #[Depends('testAssertReturn99')]
    public function testAssertReturn100(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_factor', 'args' => [['type' => 'f64', 'value' => '2698691837980592503'], ['type' => 'f64', 'value' => '2529920934327896545'], ['type' => 'f64', 'value' => '12819783413251458936']]],
            expected: [['type' => 'f64', 'value' => '10911876679403600666']],
            line: 265,
        );
    }

    #[Depends('testAssertReturn100')]
    public function testAssertReturn101(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_factor', 'args' => [['type' => 'f64', 'value' => '1626864102540432200'], ['type' => 'f64', 'value' => '9287829620889669687'], ['type' => 'f64', 'value' => '9524500187773169472']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 266,
        );
    }

    #[Depends('testAssertReturn101')]
    public function testAssertReturn102(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_factor', 'args' => [['type' => 'f64', 'value' => '12326480769054961745'], ['type' => 'f64', 'value' => '12563546453737163926'], ['type' => 'f64', 'value' => '15990519985875741037']]],
            expected: [['type' => 'f64', 'value' => '5500432744005058080']],
            line: 267,
        );
    }

    #[Depends('testAssertReturn102')]
    public function testAssertReturn103(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_factor', 'args' => [['type' => 'f64', 'value' => '12532477544855171977'], ['type' => 'f64', 'value' => '3439526350000314825'], ['type' => 'f64', 'value' => '12694541248380731909']]],
            expected: [['type' => 'f64', 'value' => '11527035460272583044']],
            line: 268,
        );
    }

    #[Depends('testAssertReturn103')]
    public function testAssertReturn104(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_factor', 'args' => [['type' => 'f64', 'value' => '1871759566187673434'], ['type' => 'f64', 'value' => '2002968319587025494'], ['type' => 'f64', 'value' => '16033202089880281080']]],
            expected: [['type' => 'f64', 'value' => '13429277897969282899']],
            line: 269,
        );
    }

    #[Depends('testAssertReturn104')]
    public function testModule105(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.18.wasm',
            name: null,
            line: 273,
        );
    }

    #[Depends('testModule105')]
    public function testAssertReturn106(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_distribute', 'args' => [['type' => 'f32', 'value' => '3550941609'], ['type' => 'f32', 'value' => '3628209942'], ['type' => 'f32', 'value' => '1568101121']]],
            expected: [['type' => 'f32', 'value' => '4131116009']],
            line: 280,
        );
    }

    #[Depends('testAssertReturn106')]
    public function testAssertReturn107(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_distribute', 'args' => [['type' => 'f32', 'value' => '3168433147'], ['type' => 'f32', 'value' => '1028017286'], ['type' => 'f32', 'value' => '3141035521']]],
            expected: [['type' => 'f32', 'value' => '3095417248']],
            line: 281,
        );
    }

    #[Depends('testAssertReturn107')]
    public function testAssertReturn108(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_distribute', 'args' => [['type' => 'f32', 'value' => '2869115159'], ['type' => 'f32', 'value' => '536308199'], ['type' => 'f32', 'value' => '2100177580']]],
            expected: [['type' => 'f32', 'value' => '3904015704']],
            line: 282,
        );
    }

    #[Depends('testAssertReturn108')]
    public function testAssertReturn109(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_distribute', 'args' => [['type' => 'f32', 'value' => '2684117842'], ['type' => 'f32', 'value' => '369386499'], ['type' => 'f32', 'value' => '2061166438']]],
            expected: [['type' => 'f32', 'value' => '3679965351']],
            line: 283,
        );
    }

    #[Depends('testAssertReturn109')]
    public function testAssertReturn110(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_distribute', 'args' => [['type' => 'f32', 'value' => '2510116111'], ['type' => 'f32', 'value' => '476277495'], ['type' => 'f32', 'value' => '1237750930']]],
            expected: [['type' => 'f32', 'value' => '649094374']],
            line: 284,
        );
    }

    #[Depends('testAssertReturn110')]
    public function testAssertReturn111(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_distribute', 'args' => [['type' => 'f64', 'value' => '2698691837980592503'], ['type' => 'f64', 'value' => '2529920934327896545'], ['type' => 'f64', 'value' => '12819783413251458936']]],
            expected: [['type' => 'f64', 'value' => '10911876679403600667']],
            line: 285,
        );
    }

    #[Depends('testAssertReturn111')]
    public function testAssertReturn112(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_distribute', 'args' => [['type' => 'f64', 'value' => '1626864102540432200'], ['type' => 'f64', 'value' => '9287829620889669687'], ['type' => 'f64', 'value' => '9524500187773169472']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 286,
        );
    }

    #[Depends('testAssertReturn112')]
    public function testAssertReturn113(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_distribute', 'args' => [['type' => 'f64', 'value' => '12326480769054961745'], ['type' => 'f64', 'value' => '12563546453737163926'], ['type' => 'f64', 'value' => '15990519985875741037']]],
            expected: [['type' => 'f64', 'value' => '5500432744005058079']],
            line: 287,
        );
    }

    #[Depends('testAssertReturn113')]
    public function testAssertReturn114(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_distribute', 'args' => [['type' => 'f64', 'value' => '12532477544855171977'], ['type' => 'f64', 'value' => '3439526350000314825'], ['type' => 'f64', 'value' => '12694541248380731909']]],
            expected: [['type' => 'f64', 'value' => '11527035460272583043']],
            line: 288,
        );
    }

    #[Depends('testAssertReturn114')]
    public function testAssertReturn115(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_distribute', 'args' => [['type' => 'f64', 'value' => '1871759566187673434'], ['type' => 'f64', 'value' => '2002968319587025494'], ['type' => 'f64', 'value' => '16033202089880281080']]],
            expected: [['type' => 'f64', 'value' => '13429277897969282898']],
            line: 289,
        );
    }

    #[Depends('testAssertReturn115')]
    public function testModule116(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.19.wasm',
            name: null,
            line: 293,
        );
    }

    #[Depends('testModule116')]
    public function testAssertReturn117(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_regroup_div_mul', 'args' => [['type' => 'f32', 'value' => '2249624147'], ['type' => 'f32', 'value' => '2678828342'], ['type' => 'f32', 'value' => '95319815']]],
            expected: [['type' => 'f32', 'value' => '538190437']],
            line: 300,
        );
    }

    #[Depends('testAssertReturn117')]
    public function testAssertReturn118(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_regroup_div_mul', 'args' => [['type' => 'f32', 'value' => '3978470300'], ['type' => 'f32', 'value' => '2253997363'], ['type' => 'f32', 'value' => '3824852100']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 301,
        );
    }

    #[Depends('testAssertReturn118')]
    public function testAssertReturn119(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_regroup_div_mul', 'args' => [['type' => 'f32', 'value' => '3350590135'], ['type' => 'f32', 'value' => '3042588643'], ['type' => 'f32', 'value' => '2186448635']]],
            expected: [['type' => 'f32', 'value' => '4206661932']],
            line: 302,
        );
    }

    #[Depends('testAssertReturn119')]
    public function testAssertReturn120(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_regroup_div_mul', 'args' => [['type' => 'f32', 'value' => '2430706172'], ['type' => 'f32', 'value' => '1685220483'], ['type' => 'f32', 'value' => '1642018044']]],
            expected: [['type' => 'f32', 'value' => '2473922297']],
            line: 303,
        );
    }

    #[Depends('testAssertReturn120')]
    public function testAssertReturn121(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_regroup_div_mul', 'args' => [['type' => 'f32', 'value' => '2011387707'], ['type' => 'f32', 'value' => '1274956446'], ['type' => 'f32', 'value' => '3811596788']]],
            expected: [['type' => 'f32', 'value' => '3768838261']],
            line: 304,
        );
    }

    #[Depends('testAssertReturn121')]
    public function testAssertReturn122(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_regroup_div_mul', 'args' => [['type' => 'f64', 'value' => '2703215631877943472'], ['type' => 'f64', 'value' => '13295603997208052007'], ['type' => 'f64', 'value' => '1719211436532588593']]],
            expected: [['type' => 'f64', 'value' => '14279677686886620461']],
            line: 305,
        );
    }

    #[Depends('testAssertReturn122')]
    public function testAssertReturn123(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_regroup_div_mul', 'args' => [['type' => 'f64', 'value' => '6126139291059848917'], ['type' => 'f64', 'value' => '2596039250849921421'], ['type' => 'f64', 'value' => '17423258659719899654']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 306,
        );
    }

    #[Depends('testAssertReturn123')]
    public function testAssertReturn124(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_regroup_div_mul', 'args' => [['type' => 'f64', 'value' => '2451868557331674239'], ['type' => 'f64', 'value' => '8672326445062988097'], ['type' => 'f64', 'value' => '2593279393835739385']]],
            expected: [['type' => 'f64', 'value' => '9218868437227405312']],
            line: 307,
        );
    }

    #[Depends('testAssertReturn124')]
    public function testAssertReturn125(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_regroup_div_mul', 'args' => [['type' => 'f64', 'value' => '15994259208199847538'], ['type' => 'f64', 'value' => '16584156163346075677'], ['type' => 'f64', 'value' => '17596923907238870430']]],
            expected: [['type' => 'f64', 'value' => '14981548491626301009']],
            line: 308,
        );
    }

    #[Depends('testAssertReturn125')]
    public function testAssertReturn126(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_regroup_div_mul', 'args' => [['type' => 'f64', 'value' => '1912002771029783751'], ['type' => 'f64', 'value' => '655387110450354003'], ['type' => 'f64', 'value' => '10060746190138762841']]],
            expected: [['type' => 'f64', 'value' => '10953754119023888080']],
            line: 309,
        );
    }

    #[Depends('testAssertReturn126')]
    public function testModule127(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.20.wasm',
            name: null,
            line: 313,
        );
    }

    #[Depends('testModule127')]
    public function testAssertReturn128(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_regroup_mul_div', 'args' => [['type' => 'f32', 'value' => '2249624147'], ['type' => 'f32', 'value' => '2678828342'], ['type' => 'f32', 'value' => '95319815']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 320,
        );
    }

    #[Depends('testAssertReturn128')]
    public function testAssertReturn129(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_regroup_mul_div', 'args' => [['type' => 'f32', 'value' => '3978470300'], ['type' => 'f32', 'value' => '2253997363'], ['type' => 'f32', 'value' => '3824852100']]],
            expected: [['type' => 'f32', 'value' => '2408382580']],
            line: 321,
        );
    }

    #[Depends('testAssertReturn129')]
    public function testAssertReturn130(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_regroup_mul_div', 'args' => [['type' => 'f32', 'value' => '3350590135'], ['type' => 'f32', 'value' => '3042588643'], ['type' => 'f32', 'value' => '2186448635']]],
            expected: [['type' => 'f32', 'value' => '4206661933']],
            line: 322,
        );
    }

    #[Depends('testAssertReturn130')]
    public function testAssertReturn131(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_regroup_mul_div', 'args' => [['type' => 'f32', 'value' => '2430706172'], ['type' => 'f32', 'value' => '1685220483'], ['type' => 'f32', 'value' => '1642018044']]],
            expected: [['type' => 'f32', 'value' => '2473922298']],
            line: 323,
        );
    }

    #[Depends('testAssertReturn131')]
    public function testAssertReturn132(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_regroup_mul_div', 'args' => [['type' => 'f32', 'value' => '2011387707'], ['type' => 'f32', 'value' => '1274956446'], ['type' => 'f32', 'value' => '3811596788']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 324,
        );
    }

    #[Depends('testAssertReturn132')]
    public function testAssertReturn133(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_regroup_mul_div', 'args' => [['type' => 'f64', 'value' => '2703215631877943472'], ['type' => 'f64', 'value' => '13295603997208052007'], ['type' => 'f64', 'value' => '1719211436532588593']]],
            expected: [['type' => 'f64', 'value' => '14279677686886620462']],
            line: 325,
        );
    }

    #[Depends('testAssertReturn133')]
    public function testAssertReturn134(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_regroup_mul_div', 'args' => [['type' => 'f64', 'value' => '6126139291059848917'], ['type' => 'f64', 'value' => '2596039250849921421'], ['type' => 'f64', 'value' => '17423258659719899654']]],
            expected: [['type' => 'f64', 'value' => '9746029336072872080']],
            line: 326,
        );
    }

    #[Depends('testAssertReturn134')]
    public function testAssertReturn135(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_regroup_mul_div', 'args' => [['type' => 'f64', 'value' => '2451868557331674239'], ['type' => 'f64', 'value' => '8672326445062988097'], ['type' => 'f64', 'value' => '2593279393835739385']]],
            expected: [['type' => 'f64', 'value' => '8531093589128288889']],
            line: 327,
        );
    }

    #[Depends('testAssertReturn135')]
    public function testAssertReturn136(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_regroup_mul_div', 'args' => [['type' => 'f64', 'value' => '15994259208199847538'], ['type' => 'f64', 'value' => '16584156163346075677'], ['type' => 'f64', 'value' => '17596923907238870430']]],
            expected: [['type' => 'f64', 'value' => '18442240474082181120']],
            line: 328,
        );
    }

    #[Depends('testAssertReturn136')]
    public function testAssertReturn137(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_regroup_mul_div', 'args' => [['type' => 'f64', 'value' => '1912002771029783751'], ['type' => 'f64', 'value' => '655387110450354003'], ['type' => 'f64', 'value' => '10060746190138762841']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 329,
        );
    }

    #[Depends('testAssertReturn137')]
    public function testModule138(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.21.wasm',
            name: null,
            line: 333,
        );
    }

    #[Depends('testModule138')]
    public function testAssertReturn139(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_reassociate_add', 'args' => [['type' => 'f32', 'value' => '3585064686'], ['type' => 'f32', 'value' => '1354934024'], ['type' => 'f32', 'value' => '3612934982'], ['type' => 'f32', 'value' => '3557837641']]],
            expected: [['type' => 'f32', 'value' => '3614520891']],
            line: 340,
        );
    }

    #[Depends('testAssertReturn139')]
    public function testAssertReturn140(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_reassociate_add', 'args' => [['type' => 'f32', 'value' => '997006780'], ['type' => 'f32', 'value' => '3156314493'], ['type' => 'f32', 'value' => '1031916275'], ['type' => 'f32', 'value' => '3157700435']]],
            expected: [['type' => 'f32', 'value' => '1027365261']],
            line: 341,
        );
    }

    #[Depends('testAssertReturn140')]
    public function testAssertReturn141(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_reassociate_add', 'args' => [['type' => 'f32', 'value' => '3506363549'], ['type' => 'f32', 'value' => '3562765939'], ['type' => 'f32', 'value' => '1440782572'], ['type' => 'f32', 'value' => '1388583643']]],
            expected: [['type' => 'f32', 'value' => '1439168977']],
            line: 342,
        );
    }

    #[Depends('testAssertReturn141')]
    public function testAssertReturn142(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_reassociate_add', 'args' => [['type' => 'f32', 'value' => '1460378878'], ['type' => 'f32', 'value' => '1481791683'], ['type' => 'f32', 'value' => '3506843934'], ['type' => 'f32', 'value' => '1493913729']]],
            expected: [['type' => 'f32', 'value' => '1497931771']],
            line: 343,
        );
    }

    #[Depends('testAssertReturn142')]
    public function testAssertReturn143(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_reassociate_add', 'args' => [['type' => 'f32', 'value' => '1975099005'], ['type' => 'f32', 'value' => '4120668550'], ['type' => 'f32', 'value' => '1947708458'], ['type' => 'f32', 'value' => '4008073260']]],
            expected: [['type' => 'f32', 'value' => '1958779787']],
            line: 344,
        );
    }

    #[Depends('testAssertReturn143')]
    public function testAssertReturn144(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_reassociate_add', 'args' => [['type' => 'f64', 'value' => '17619937326421449126'], ['type' => 'f64', 'value' => '8424880666975634327'], ['type' => 'f64', 'value' => '8461713040394112626'], ['type' => 'f64', 'value' => '17692076622886930107']]],
            expected: [['type' => 'f64', 'value' => '17689770886425413754']],
            line: 345,
        );
    }

    #[Depends('testAssertReturn144')]
    public function testAssertReturn145(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_reassociate_add', 'args' => [['type' => 'f64', 'value' => '2161744272815763681'], ['type' => 'f64', 'value' => '2160815018984030177'], ['type' => 'f64', 'value' => '11389452991481170854'], ['type' => 'f64', 'value' => '11158554735757873927']]],
            expected: [['type' => 'f64', 'value' => '11367213592018398582']],
            line: 346,
        );
    }

    #[Depends('testAssertReturn145')]
    public function testAssertReturn146(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_reassociate_add', 'args' => [['type' => 'f64', 'value' => '15816220208145029204'], ['type' => 'f64', 'value' => '6443786499090728432'], ['type' => 'f64', 'value' => '15798639273395365185'], ['type' => 'f64', 'value' => '6395820899158300605']]],
            expected: [['type' => 'f64', 'value' => '15816713260997571051']],
            line: 347,
        );
    }

    #[Depends('testAssertReturn146')]
    public function testAssertReturn147(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_reassociate_add', 'args' => [['type' => 'f64', 'value' => '12406188505172681730'], ['type' => 'f64', 'value' => '3227622722685619614'], ['type' => 'f64', 'value' => '12653209142287077985'], ['type' => 'f64', 'value' => '3439058911346459774']]],
            expected: [['type' => 'f64', 'value' => '3437283564188778523']],
            line: 348,
        );
    }

    #[Depends('testAssertReturn147')]
    public function testAssertReturn148(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_reassociate_add', 'args' => [['type' => 'f64', 'value' => '16720963389015391005'], ['type' => 'f64', 'value' => '16597092572968550980'], ['type' => 'f64', 'value' => '7518944085377596897'], ['type' => 'f64', 'value' => '16733407756820198530']]],
            expected: [['type' => 'f64', 'value' => '7516931113564586278']],
            line: 349,
        );
    }

    #[Depends('testAssertReturn148')]
    public function testModule149(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.22.wasm',
            name: null,
            line: 353,
        );
    }

    #[Depends('testModule149')]
    public function testAssertReturn150(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_reassociate_mul', 'args' => [['type' => 'f32', 'value' => '97158612'], ['type' => 'f32', 'value' => '796388711'], ['type' => 'f32', 'value' => '4071607776'], ['type' => 'f32', 'value' => '603464324']]],
            expected: [['type' => 'f32', 'value' => '2373950135']],
            line: 360,
        );
    }

    #[Depends('testAssertReturn150')]
    public function testAssertReturn151(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_reassociate_mul', 'args' => [['type' => 'f32', 'value' => '598526039'], ['type' => 'f32', 'value' => '4072603010'], ['type' => 'f32', 'value' => '2166864805'], ['type' => 'f32', 'value' => '3802968051']]],
            expected: [['type' => 'f32', 'value' => '3152274558']],
            line: 361,
        );
    }

    #[Depends('testAssertReturn151')]
    public function testAssertReturn152(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_reassociate_mul', 'args' => [['type' => 'f32', 'value' => '666201298'], ['type' => 'f32', 'value' => '3678968917'], ['type' => 'f32', 'value' => '2879732647'], ['type' => 'f32', 'value' => '1703934016']]],
            expected: [['type' => 'f32', 'value' => '1439591542']],
            line: 362,
        );
    }

    #[Depends('testAssertReturn152')]
    public function testAssertReturn153(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_reassociate_mul', 'args' => [['type' => 'f32', 'value' => '191948150'], ['type' => 'f32', 'value' => '1717012201'], ['type' => 'f32', 'value' => '3682645872'], ['type' => 'f32', 'value' => '3713382507']]],
            expected: [['type' => 'f32', 'value' => '1814709127']],
            line: 363,
        );
    }

    #[Depends('testAssertReturn153')]
    public function testAssertReturn154(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_reassociate_mul', 'args' => [['type' => 'f32', 'value' => '2384301792'], ['type' => 'f32', 'value' => '656878874'], ['type' => 'f32', 'value' => '3239861549'], ['type' => 'f32', 'value' => '1564466295']]],
            expected: [['type' => 'f32', 'value' => '355327948']],
            line: 364,
        );
    }

    #[Depends('testAssertReturn154')]
    public function testAssertReturn155(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_reassociate_mul', 'args' => [['type' => 'f64', 'value' => '10830726381612138752'], ['type' => 'f64', 'value' => '18293529276079591087'], ['type' => 'f64', 'value' => '12137662286027993114'], ['type' => 'f64', 'value' => '16821646709291069775']]],
            expected: [['type' => 'f64', 'value' => '7368793799369880819']],
            line: 365,
        );
    }

    #[Depends('testAssertReturn155')]
    public function testAssertReturn156(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_reassociate_mul', 'args' => [['type' => 'f64', 'value' => '6653164799371160764'], ['type' => 'f64', 'value' => '2285295038358358170'], ['type' => 'f64', 'value' => '9783304669150272403'], ['type' => 'f64', 'value' => '16266005085991502709']]],
            expected: [['type' => 'f64', 'value' => '2720645287366687760']],
            line: 366,
        );
    }

    #[Depends('testAssertReturn156')]
    public function testAssertReturn157(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_reassociate_mul', 'args' => [['type' => 'f64', 'value' => '2352911459797566465'], ['type' => 'f64', 'value' => '17379873157362463143'], ['type' => 'f64', 'value' => '1179129869275935356'], ['type' => 'f64', 'value' => '14228398113747850351']]],
            expected: [['type' => 'f64', 'value' => '2873103656912958703']],
            line: 367,
        );
    }

    #[Depends('testAssertReturn157')]
    public function testAssertReturn158(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_reassociate_mul', 'args' => [['type' => 'f64', 'value' => '7724499817746503804'], ['type' => 'f64', 'value' => '2704005046640722176'], ['type' => 'f64', 'value' => '5612860422806321751'], ['type' => 'f64', 'value' => '13727818095548724091']]],
            expected: [['type' => 'f64', 'value' => '15948568678460814092']],
            line: 368,
        );
    }

    #[Depends('testAssertReturn158')]
    public function testAssertReturn159(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_reassociate_mul', 'args' => [['type' => 'f64', 'value' => '3553622953022765407'], ['type' => 'f64', 'value' => '1044040287824900408'], ['type' => 'f64', 'value' => '17112762794520509437'], ['type' => 'f64', 'value' => '11134095486440145773']]],
            expected: [['type' => 'f64', 'value' => '576919682754813073']],
            line: 369,
        );
    }

    #[Depends('testAssertReturn159')]
    public function testModule160(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.23.wasm',
            name: null,
            line: 373,
        );
    }

    #[Depends('testModule160')]
    public function testAssertReturn161(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_0', 'args' => [['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 380,
        );
    }

    #[Depends('testAssertReturn161')]
    public function testAssertReturn162(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_0', 'args' => [['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 381,
        );
    }

    #[Depends('testAssertReturn162')]
    public function testAssertReturn163(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_0', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 382,
        );
    }

    #[Depends('testAssertReturn163')]
    public function testAssertReturn164(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_0', 'args' => [['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 383,
        );
    }

    #[Depends('testAssertReturn164')]
    public function testAssertReturn165(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_0', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 384,
        );
    }

    #[Depends('testAssertReturn165')]
    public function testAssertReturn166(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_0', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 385,
        );
    }

    #[Depends('testAssertReturn166')]
    public function testAssertReturn167(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_0', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 386,
        );
    }

    #[Depends('testAssertReturn167')]
    public function testAssertReturn168(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_0', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 387,
        );
    }

    #[Depends('testAssertReturn168')]
    public function testAssertReturn169(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_0', 'args' => [['type' => 'f64', 'value' => '4607182418800017408']]],
            expected: [['type' => 'f64', 'value' => '9218868437227405312']],
            line: 388,
        );
    }

    #[Depends('testAssertReturn169')]
    public function testAssertReturn170(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_0', 'args' => [['type' => 'f64', 'value' => '13830554455654793216']]],
            expected: [['type' => 'f64', 'value' => '18442240474082181120']],
            line: 389,
        );
    }

    #[Depends('testAssertReturn170')]
    public function testAssertReturn171(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_0', 'args' => [['type' => 'f64', 'value' => '9218868437227405312']]],
            expected: [['type' => 'f64', 'value' => '9218868437227405312']],
            line: 390,
        );
    }

    #[Depends('testAssertReturn171')]
    public function testAssertReturn172(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_0', 'args' => [['type' => 'f64', 'value' => '18442240474082181120']]],
            expected: [['type' => 'f64', 'value' => '18442240474082181120']],
            line: 391,
        );
    }

    #[Depends('testAssertReturn172')]
    public function testAssertReturn173(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_0', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => 'nan:canonical']],
            line: 392,
        );
    }

    #[Depends('testAssertReturn173')]
    public function testAssertReturn174(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_0', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => 'nan:canonical']],
            line: 393,
        );
    }

    #[Depends('testAssertReturn174')]
    public function testAssertReturn175(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_0', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'f64', 'value' => 'nan:canonical']],
            line: 394,
        );
    }

    #[Depends('testAssertReturn175')]
    public function testAssertReturn176(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_0', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'f64', 'value' => 'nan:arithmetic']],
            line: 395,
        );
    }

    #[Depends('testAssertReturn176')]
    public function testModule177(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.24.wasm',
            name: null,
            line: 399,
        );
    }

    #[Depends('testModule177')]
    public function testAssertReturn178(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_neg0', 'args' => [['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 406,
        );
    }

    #[Depends('testAssertReturn178')]
    public function testAssertReturn179(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_neg0', 'args' => [['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 407,
        );
    }

    #[Depends('testAssertReturn179')]
    public function testAssertReturn180(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_neg0', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 408,
        );
    }

    #[Depends('testAssertReturn180')]
    public function testAssertReturn181(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_neg0', 'args' => [['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 409,
        );
    }

    #[Depends('testAssertReturn181')]
    public function testAssertReturn182(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_neg0', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 410,
        );
    }

    #[Depends('testAssertReturn182')]
    public function testAssertReturn183(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_neg0', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 411,
        );
    }

    #[Depends('testAssertReturn183')]
    public function testAssertReturn184(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_neg0', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 412,
        );
    }

    #[Depends('testAssertReturn184')]
    public function testAssertReturn185(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_neg0', 'args' => [['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 413,
        );
    }

    #[Depends('testAssertReturn185')]
    public function testAssertReturn186(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_neg0', 'args' => [['type' => 'f64', 'value' => '4607182418800017408']]],
            expected: [['type' => 'f64', 'value' => '18442240474082181120']],
            line: 414,
        );
    }

    #[Depends('testAssertReturn186')]
    public function testAssertReturn187(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_neg0', 'args' => [['type' => 'f64', 'value' => '13830554455654793216']]],
            expected: [['type' => 'f64', 'value' => '9218868437227405312']],
            line: 415,
        );
    }

    #[Depends('testAssertReturn187')]
    public function testAssertReturn188(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_neg0', 'args' => [['type' => 'f64', 'value' => '9218868437227405312']]],
            expected: [['type' => 'f64', 'value' => '18442240474082181120']],
            line: 416,
        );
    }

    #[Depends('testAssertReturn188')]
    public function testAssertReturn189(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_neg0', 'args' => [['type' => 'f64', 'value' => '18442240474082181120']]],
            expected: [['type' => 'f64', 'value' => '9218868437227405312']],
            line: 417,
        );
    }

    #[Depends('testAssertReturn189')]
    public function testAssertReturn190(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_neg0', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => 'nan:canonical']],
            line: 418,
        );
    }

    #[Depends('testAssertReturn190')]
    public function testAssertReturn191(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_neg0', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => 'nan:canonical']],
            line: 419,
        );
    }

    #[Depends('testAssertReturn191')]
    public function testAssertReturn192(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_neg0', 'args' => [['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'f64', 'value' => 'nan:canonical']],
            line: 420,
        );
    }

    #[Depends('testAssertReturn192')]
    public function testAssertReturn193(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_neg0', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'f64', 'value' => 'nan:arithmetic']],
            line: 421,
        );
    }

    #[Depends('testAssertReturn193')]
    public function testModule194(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.25.wasm',
            name: null,
            line: 425,
        );
    }

    #[Depends('testModule194')]
    public function testAssertReturn195(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_to_hypot', 'args' => [['type' => 'f32', 'value' => '392264092'], ['type' => 'f32', 'value' => '497028527']]],
            expected: [['type' => 'f32', 'value' => '497028710']],
            line: 434,
        );
    }

    #[Depends('testAssertReturn195')]
    public function testAssertReturn196(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_to_hypot', 'args' => [['type' => 'f32', 'value' => '2623653512'], ['type' => 'f32', 'value' => '2317012712']]],
            expected: [['type' => 'f32', 'value' => '476165425']],
            line: 435,
        );
    }

    #[Depends('testAssertReturn196')]
    public function testAssertReturn197(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_to_hypot', 'args' => [['type' => 'f32', 'value' => '2261577829'], ['type' => 'f32', 'value' => '2641790518']]],
            expected: [['type' => 'f32', 'value' => '494307108']],
            line: 436,
        );
    }

    #[Depends('testAssertReturn197')]
    public function testAssertReturn198(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_to_hypot', 'args' => [['type' => 'f32', 'value' => '3255678581'], ['type' => 'f32', 'value' => '1210720351']]],
            expected: [['type' => 'f32', 'value' => '1210720352']],
            line: 437,
        );
    }

    #[Depends('testAssertReturn198')]
    public function testAssertReturn199(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_to_hypot', 'args' => [['type' => 'f32', 'value' => '432505039'], ['type' => 'f32', 'value' => '2618036612']]],
            expected: [['type' => 'f32', 'value' => '470544734']],
            line: 438,
        );
    }

    #[Depends('testAssertReturn199')]
    public function testAssertReturn200(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_to_hypot', 'args' => [['type' => 'f64', 'value' => '1743351192697472785'], ['type' => 'f64', 'value' => '2202602366606243153']]],
            expected: [['type' => 'f64', 'value' => '2202599296765198670']],
            line: 439,
        );
    }

    #[Depends('testAssertReturn200')]
    public function testAssertReturn201(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_to_hypot', 'args' => [['type' => 'f64', 'value' => '6389333765198869657'], ['type' => 'f64', 'value' => '15677343373020056630']]],
            expected: [['type' => 'f64', 'value' => '6453971336171062178']],
            line: 440,
        );
    }

    #[Depends('testAssertReturn201')]
    public function testAssertReturn202(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_to_hypot', 'args' => [['type' => 'f64', 'value' => '2195337108264055819'], ['type' => 'f64', 'value' => '10384237061545402288']]],
            expected: [['type' => 'f64', 'value' => '2195504818343116800']],
            line: 441,
        );
    }

    #[Depends('testAssertReturn202')]
    public function testAssertReturn203(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_to_hypot', 'args' => [['type' => 'f64', 'value' => '11486582223361829725'], ['type' => 'f64', 'value' => '1308532122426122043']]],
            expected: [['type' => 'f64', 'value' => '2263210186506929210']],
            line: 442,
        );
    }

    #[Depends('testAssertReturn203')]
    public function testAssertReturn204(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_to_hypot', 'args' => [['type' => 'f64', 'value' => '1591440107418864392'], ['type' => 'f64', 'value' => '11515806374387309036']]],
            expected: [['type' => 'f64', 'value' => '2292434337532533215']],
            line: 443,
        );
    }

    #[Depends('testAssertReturn204')]
    public function testModule205(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.26.wasm',
            name: null,
            line: 447,
        );
    }

    #[Depends('testModule205')]
    public function testAssertReturn206(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_approximate_reciprocal', 'args' => [['type' => 'f32', 'value' => '3130294363']]],
            expected: [['type' => 'f32', 'value' => '3294406762']],
            line: 452,
        );
    }

    #[Depends('testAssertReturn206')]
    public function testAssertReturn207(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_approximate_reciprocal', 'args' => [['type' => 'f32', 'value' => '2138280080']]],
            expected: [['type' => 'f32', 'value' => '2204223']],
            line: 453,
        );
    }

    #[Depends('testAssertReturn207')]
    public function testAssertReturn208(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_approximate_reciprocal', 'args' => [['type' => 'f32', 'value' => '2434880051']]],
            expected: [['type' => 'f32', 'value' => '3989512051']],
            line: 454,
        );
    }

    #[Depends('testAssertReturn208')]
    public function testAssertReturn209(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_approximate_reciprocal', 'args' => [['type' => 'f32', 'value' => '1705936409']]],
            expected: [['type' => 'f32', 'value' => '423346609']],
            line: 455,
        );
    }

    #[Depends('testAssertReturn209')]
    public function testAssertReturn210(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_approximate_reciprocal', 'args' => [['type' => 'f32', 'value' => '2528120561']]],
            expected: [['type' => 'f32', 'value' => '3896123071']],
            line: 456,
        );
    }

    #[Depends('testAssertReturn210')]
    public function testModule211(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.27.wasm',
            name: null,
            line: 460,
        );
    }

    #[Depends('testModule211')]
    public function testAssertReturn212(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_approximate_reciprocal_sqrt', 'args' => [['type' => 'f32', 'value' => '708147349']]],
            expected: [['type' => 'f32', 'value' => '1243088746']],
            line: 467,
        );
    }

    #[Depends('testAssertReturn212')]
    public function testAssertReturn213(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_approximate_reciprocal_sqrt', 'args' => [['type' => 'f32', 'value' => '1005852643']]],
            expected: [['type' => 'f32', 'value' => '1094279611']],
            line: 468,
        );
    }

    #[Depends('testAssertReturn213')]
    public function testAssertReturn214(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_approximate_reciprocal_sqrt', 'args' => [['type' => 'f32', 'value' => '517799246']]],
            expected: [['type' => 'f32', 'value' => '1338168541']],
            line: 469,
        );
    }

    #[Depends('testAssertReturn214')]
    public function testAssertReturn215(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_approximate_reciprocal_sqrt', 'args' => [['type' => 'f32', 'value' => '704281251']]],
            expected: [['type' => 'f32', 'value' => '1245118689']],
            line: 470,
        );
    }

    #[Depends('testAssertReturn215')]
    public function testAssertReturn216(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_approximate_reciprocal_sqrt', 'args' => [['type' => 'f32', 'value' => '347001813']]],
            expected: [['type' => 'f32', 'value' => '1423641701']],
            line: 471,
        );
    }

    #[Depends('testAssertReturn216')]
    public function testAssertReturn217(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fuse_reciprocal_sqrt', 'args' => [['type' => 'f64', 'value' => '8611259114887405475']]],
            expected: [['type' => 'f64', 'value' => '2604695339663988000']],
            line: 473,
        );
    }

    #[Depends('testAssertReturn217')]
    public function testAssertReturn218(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fuse_reciprocal_sqrt', 'args' => [['type' => 'f64', 'value' => '6008428610859539631']]],
            expected: [['type' => 'f64', 'value' => '3906084647186679832']],
            line: 474,
        );
    }

    #[Depends('testAssertReturn218')]
    public function testAssertReturn219(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fuse_reciprocal_sqrt', 'args' => [['type' => 'f64', 'value' => '5077495674931581012']]],
            expected: [['type' => 'f64', 'value' => '4371518865190387497']],
            line: 475,
        );
    }

    #[Depends('testAssertReturn219')]
    public function testAssertReturn220(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fuse_reciprocal_sqrt', 'args' => [['type' => 'f64', 'value' => '7616219057857077123']]],
            expected: [['type' => 'f64', 'value' => '3102407657946187309']],
            line: 476,
        );
    }

    #[Depends('testAssertReturn220')]
    public function testAssertReturn221(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fuse_reciprocal_sqrt', 'args' => [['type' => 'f64', 'value' => '5267858027841559467']]],
            expected: [['type' => 'f64', 'value' => '4276321761661248681']],
            line: 477,
        );
    }

    #[Depends('testAssertReturn221')]
    public function testModule222(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.28.wasm',
            name: null,
            line: 481,
        );
    }

    #[Depends('testModule222')]
    public function testAssertReturn223(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_approximate_sqrt_reciprocal', 'args' => [['type' => 'f32', 'value' => '1574069443']]],
            expected: [['type' => 'f32', 'value' => '810003811']],
            line: 486,
        );
    }

    #[Depends('testAssertReturn223')]
    public function testAssertReturn224(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_approximate_sqrt_reciprocal', 'args' => [['type' => 'f32', 'value' => '992487567']]],
            expected: [['type' => 'f32', 'value' => '1100869283']],
            line: 487,
        );
    }

    #[Depends('testAssertReturn224')]
    public function testAssertReturn225(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_approximate_sqrt_reciprocal', 'args' => [['type' => 'f32', 'value' => '1644769121']]],
            expected: [['type' => 'f32', 'value' => '774822585']],
            line: 488,
        );
    }

    #[Depends('testAssertReturn225')]
    public function testAssertReturn226(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_approximate_sqrt_reciprocal', 'args' => [['type' => 'f32', 'value' => '1180509736']]],
            expected: [['type' => 'f32', 'value' => '1007269771']],
            line: 489,
        );
    }

    #[Depends('testAssertReturn226')]
    public function testAssertReturn227(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_approximate_sqrt_reciprocal', 'args' => [['type' => 'f32', 'value' => '1940205041']]],
            expected: [['type' => 'f32', 'value' => '627137240']],
            line: 490,
        );
    }

    #[Depends('testAssertReturn227')]
    public function testModule228(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.29.wasm',
            name: null,
            line: 494,
        );
    }

    #[Depends('testModule228')]
    public function testAssertReturn229(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.no_fold_f32_s', 'args' => [['type' => 'i32', 'value' => '16777216']]],
            expected: [['type' => 'i32', 'value' => '16777216']],
            line: 505,
        );
    }

    #[Depends('testAssertReturn229')]
    public function testAssertReturn230(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.no_fold_f32_s', 'args' => [['type' => 'i32', 'value' => '16777217']]],
            expected: [['type' => 'i32', 'value' => '16777216']],
            line: 506,
        );
    }

    #[Depends('testAssertReturn230')]
    public function testAssertReturn231(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.no_fold_f32_s', 'args' => [['type' => 'i32', 'value' => '4026531856']]],
            expected: [['type' => 'i32', 'value' => '4026531856']],
            line: 507,
        );
    }

    #[Depends('testAssertReturn231')]
    public function testAssertReturn232(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.no_fold_f32_u', 'args' => [['type' => 'i32', 'value' => '16777216']]],
            expected: [['type' => 'i32', 'value' => '16777216']],
            line: 509,
        );
    }

    #[Depends('testAssertReturn232')]
    public function testAssertReturn233(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.no_fold_f32_u', 'args' => [['type' => 'i32', 'value' => '16777217']]],
            expected: [['type' => 'i32', 'value' => '16777216']],
            line: 510,
        );
    }

    #[Depends('testAssertReturn233')]
    public function testAssertReturn234(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.no_fold_f32_u', 'args' => [['type' => 'i32', 'value' => '4026531856']]],
            expected: [['type' => 'i32', 'value' => '4026531840']],
            line: 511,
        );
    }

    #[Depends('testAssertReturn234')]
    public function testAssertReturn235(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.no_fold_f64_s', 'args' => [['type' => 'i64', 'value' => '9007199254740992']]],
            expected: [['type' => 'i64', 'value' => '9007199254740992']],
            line: 513,
        );
    }

    #[Depends('testAssertReturn235')]
    public function testAssertReturn236(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.no_fold_f64_s', 'args' => [['type' => 'i64', 'value' => '9007199254740993']]],
            expected: [['type' => 'i64', 'value' => '9007199254740992']],
            line: 514,
        );
    }

    #[Depends('testAssertReturn236')]
    public function testAssertReturn237(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.no_fold_f64_s', 'args' => [['type' => 'i64', 'value' => '17293822569102705664']]],
            expected: [['type' => 'i64', 'value' => '17293822569102705664']],
            line: 515,
        );
    }

    #[Depends('testAssertReturn237')]
    public function testAssertReturn238(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.no_fold_f64_u', 'args' => [['type' => 'i64', 'value' => '9007199254740992']]],
            expected: [['type' => 'i64', 'value' => '9007199254740992']],
            line: 517,
        );
    }

    #[Depends('testAssertReturn238')]
    public function testAssertReturn239(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.no_fold_f64_u', 'args' => [['type' => 'i64', 'value' => '9007199254740993']]],
            expected: [['type' => 'i64', 'value' => '9007199254740992']],
            line: 518,
        );
    }

    #[Depends('testAssertReturn239')]
    public function testAssertReturn240(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.no_fold_f64_u', 'args' => [['type' => 'i64', 'value' => '17293822569102705664']]],
            expected: [['type' => 'i64', 'value' => '17293822569102704640']],
            line: 519,
        );
    }

    #[Depends('testAssertReturn240')]
    public function testModule241(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.30.wasm',
            name: null,
            line: 523,
        );
    }

    #[Depends('testModule241')]
    public function testAssertReturn242(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_add_sub', 'args' => [['type' => 'f32', 'value' => '677030386'], ['type' => 'f32', 'value' => '2998136214']]],
            expected: [['type' => 'f32', 'value' => '677380096']],
            line: 530,
        );
    }

    #[Depends('testAssertReturn242')]
    public function testAssertReturn243(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_add_sub', 'args' => [['type' => 'f32', 'value' => '3025420904'], ['type' => 'f32', 'value' => '913921807']]],
            expected: [['type' => 'f32', 'value' => '3025420912']],
            line: 531,
        );
    }

    #[Depends('testAssertReturn243')]
    public function testAssertReturn244(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_add_sub', 'args' => [['type' => 'f32', 'value' => '3908960888'], ['type' => 'f32', 'value' => '4063404061']]],
            expected: [['type' => 'f32', 'value' => '3909091328']],
            line: 532,
        );
    }

    #[Depends('testAssertReturn244')]
    public function testAssertReturn245(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_add_sub', 'args' => [['type' => 'f32', 'value' => '415467473'], ['type' => 'f32', 'value' => '602055819']]],
            expected: [['type' => 'f32', 'value' => '415236096']],
            line: 533,
        );
    }

    #[Depends('testAssertReturn245')]
    public function testAssertReturn246(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_add_sub', 'args' => [['type' => 'f32', 'value' => '2307650739'], ['type' => 'f32', 'value' => '2511328013']]],
            expected: [['type' => 'f32', 'value' => '2315255808']],
            line: 534,
        );
    }

    #[Depends('testAssertReturn246')]
    public function testAssertReturn247(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_add_sub', 'args' => [['type' => 'f64', 'value' => '9894695622864460712'], ['type' => 'f64', 'value' => '747900745977727688']]],
            expected: [['type' => 'f64', 'value' => '9894695622864404480']],
            line: 536,
        );
    }

    #[Depends('testAssertReturn247')]
    public function testAssertReturn248(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_add_sub', 'args' => [['type' => 'f64', 'value' => '2152218683357821298'], ['type' => 'f64', 'value' => '2238360073507307376']]],
            expected: [['type' => 'f64', 'value' => '2152218683357790208']],
            line: 537,
        );
    }

    #[Depends('testAssertReturn248')]
    public function testAssertReturn249(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_add_sub', 'args' => [['type' => 'f64', 'value' => '13697521605206502242'], ['type' => 'f64', 'value' => '13818850255013161909']]],
            expected: [['type' => 'f64', 'value' => '13697521605247238144']],
            line: 538,
        );
    }

    #[Depends('testAssertReturn249')]
    public function testAssertReturn250(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_add_sub', 'args' => [['type' => 'f64', 'value' => '12298280617237492384'], ['type' => 'f64', 'value' => '3233965342858558382']]],
            expected: [['type' => 'f64', 'value' => '12298280617463775232']],
            line: 539,
        );
    }

    #[Depends('testAssertReturn250')]
    public function testAssertReturn251(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_add_sub', 'args' => [['type' => 'f64', 'value' => '11043298296128683688'], ['type' => 'f64', 'value' => '11182857345495207592']]],
            expected: [['type' => 'f64', 'value' => '11043298296775835648']],
            line: 540,
        );
    }

    #[Depends('testAssertReturn251')]
    public function testModule252(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.31.wasm',
            name: null,
            line: 544,
        );
    }

    #[Depends('testModule252')]
    public function testAssertReturn253(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_sub_add', 'args' => [['type' => 'f32', 'value' => '3291029084'], ['type' => 'f32', 'value' => '1137280182']]],
            expected: [['type' => 'f32', 'value' => '3291029085']],
            line: 551,
        );
    }

    #[Depends('testAssertReturn253')]
    public function testAssertReturn254(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_sub_add', 'args' => [['type' => 'f32', 'value' => '2287045896'], ['type' => 'f32', 'value' => '272248696']]],
            expected: [['type' => 'f32', 'value' => '2287075328']],
            line: 552,
        );
    }

    #[Depends('testAssertReturn254')]
    public function testAssertReturn255(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_sub_add', 'args' => [['type' => 'f32', 'value' => '1285466516'], ['type' => 'f32', 'value' => '1361849144']]],
            expected: [['type' => 'f32', 'value' => '1285466624']],
            line: 553,
        );
    }

    #[Depends('testAssertReturn255')]
    public function testAssertReturn256(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_sub_add', 'args' => [['type' => 'f32', 'value' => '740009747'], ['type' => 'f32', 'value' => '2989707904']]],
            expected: [['type' => 'f32', 'value' => '740007936']],
            line: 554,
        );
    }

    #[Depends('testAssertReturn256')]
    public function testAssertReturn257(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_sub_add', 'args' => [['type' => 'f32', 'value' => '1041827798'], ['type' => 'f32', 'value' => '3335914317']]],
            expected: [['type' => 'f32', 'value' => '1041891328']],
            line: 555,
        );
    }

    #[Depends('testAssertReturn257')]
    public function testAssertReturn258(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_sub_add', 'args' => [['type' => 'f64', 'value' => '5758126085282503565'], ['type' => 'f64', 'value' => '14997141603873875659']]],
            expected: [['type' => 'f64', 'value' => '5758126085282503568']],
            line: 557,
        );
    }

    #[Depends('testAssertReturn258')]
    public function testAssertReturn259(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_sub_add', 'args' => [['type' => 'f64', 'value' => '1609380455481879691'], ['type' => 'f64', 'value' => '1695875689930159213']]],
            expected: [['type' => 'f64', 'value' => '1609380455482130432']],
            line: 558,
        );
    }

    #[Depends('testAssertReturn259')]
    public function testAssertReturn260(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_sub_add', 'args' => [['type' => 'f64', 'value' => '5738179408840599949'], ['type' => 'f64', 'value' => '15186085143903012996']]],
            expected: [['type' => 'f64', 'value' => '5738148875223433216']],
            line: 559,
        );
    }

    #[Depends('testAssertReturn260')]
    public function testAssertReturn261(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_sub_add', 'args' => [['type' => 'f64', 'value' => '4492841470376833908'], ['type' => 'f64', 'value' => '13773869588765591068']]],
            expected: [['type' => 'f64', 'value' => '4492841470376837120']],
            line: 560,
        );
    }

    #[Depends('testAssertReturn261')]
    public function testAssertReturn262(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_sub_add', 'args' => [['type' => 'f64', 'value' => '2955729038738127538'], ['type' => 'f64', 'value' => '12208627806665035010']]],
            expected: [['type' => 'f64', 'value' => '2955729038738127552']],
            line: 561,
        );
    }

    #[Depends('testAssertReturn262')]
    public function testModule263(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.32.wasm',
            name: null,
            line: 565,
        );
    }

    #[Depends('testModule263')]
    public function testAssertReturn264(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_mul_div', 'args' => [['type' => 'f32', 'value' => '3672556237'], ['type' => 'f32', 'value' => '674649243']]],
            expected: [['type' => 'f32', 'value' => '3672556236']],
            line: 572,
        );
    }

    #[Depends('testAssertReturn264')]
    public function testAssertReturn265(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_mul_div', 'args' => [['type' => 'f32', 'value' => '2995104604'], ['type' => 'f32', 'value' => '178524966']]],
            expected: [['type' => 'f32', 'value' => '2995104594']],
            line: 573,
        );
    }

    #[Depends('testAssertReturn265')]
    public function testAssertReturn266(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_mul_div', 'args' => [['type' => 'f32', 'value' => '2817764014'], ['type' => 'f32', 'value' => '3620253920']]],
            expected: [['type' => 'f32', 'value' => '2817764013']],
            line: 574,
        );
    }

    #[Depends('testAssertReturn266')]
    public function testAssertReturn267(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_mul_div', 'args' => [['type' => 'f32', 'value' => '1507152519'], ['type' => 'f32', 'value' => '3723483599']]],
            expected: [['type' => 'f32', 'value' => '1507152518']],
            line: 575,
        );
    }

    #[Depends('testAssertReturn267')]
    public function testAssertReturn268(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_mul_div', 'args' => [['type' => 'f32', 'value' => '2442510077'], ['type' => 'f32', 'value' => '2906531411']]],
            expected: [['type' => 'f32', 'value' => '2442510079']],
            line: 576,
        );
    }

    #[Depends('testAssertReturn268')]
    public function testAssertReturn269(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_mul_div', 'args' => [['type' => 'f64', 'value' => '10062123074470382106'], ['type' => 'f64', 'value' => '12910565991996555404']]],
            expected: [['type' => 'f64', 'value' => '10062123074470422078']],
            line: 578,
        );
    }

    #[Depends('testAssertReturn269')]
    public function testAssertReturn270(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_mul_div', 'args' => [['type' => 'f64', 'value' => '6340937764684870564'], ['type' => 'f64', 'value' => '7244253720027059594']]],
            expected: [['type' => 'f64', 'value' => '6340937764684870565']],
            line: 579,
        );
    }

    #[Depends('testAssertReturn270')]
    public function testAssertReturn271(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_mul_div', 'args' => [['type' => 'f64', 'value' => '14905228263410157971'], ['type' => 'f64', 'value' => '11346251643264732732']]],
            expected: [['type' => 'f64', 'value' => '14905228263410157970']],
            line: 580,
        );
    }

    #[Depends('testAssertReturn271')]
    public function testAssertReturn272(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_mul_div', 'args' => [['type' => 'f64', 'value' => '3862352046163709780'], ['type' => 'f64', 'value' => '531112307488385734']]],
            expected: [['type' => 'f64', 'value' => '3862079437827029803']],
            line: 581,
        );
    }

    #[Depends('testAssertReturn272')]
    public function testAssertReturn273(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_mul_div', 'args' => [['type' => 'f64', 'value' => '16807035693954817236'], ['type' => 'f64', 'value' => '12360222454864961326']]],
            expected: [['type' => 'f64', 'value' => '16807035693954817237']],
            line: 582,
        );
    }

    #[Depends('testAssertReturn273')]
    public function testModule274(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.33.wasm',
            name: null,
            line: 586,
        );
    }

    #[Depends('testModule274')]
    public function testAssertReturn275(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_mul', 'args' => [['type' => 'f32', 'value' => '3538825650'], ['type' => 'f32', 'value' => '1315641462']]],
            expected: [['type' => 'f32', 'value' => '3538825649']],
            line: 593,
        );
    }

    #[Depends('testAssertReturn275')]
    public function testAssertReturn276(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_mul', 'args' => [['type' => 'f32', 'value' => '2777664539'], ['type' => 'f32', 'value' => '3062588018']]],
            expected: [['type' => 'f32', 'value' => '2777664540']],
            line: 594,
        );
    }

    #[Depends('testAssertReturn276')]
    public function testAssertReturn277(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_mul', 'args' => [['type' => 'f32', 'value' => '14863254'], ['type' => 'f32', 'value' => '3278582479']]],
            expected: [['type' => 'f32', 'value' => '14863367']],
            line: 595,
        );
    }

    #[Depends('testAssertReturn277')]
    public function testAssertReturn278(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_mul', 'args' => [['type' => 'f32', 'value' => '2593594703'], ['type' => 'f32', 'value' => '3709508810']]],
            expected: [['type' => 'f32', 'value' => '2593594656']],
            line: 596,
        );
    }

    #[Depends('testAssertReturn278')]
    public function testAssertReturn279(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_mul', 'args' => [['type' => 'f32', 'value' => '250394049'], ['type' => 'f32', 'value' => '1296755844']]],
            expected: [['type' => 'f32', 'value' => '250394050']],
            line: 597,
        );
    }

    #[Depends('testAssertReturn279')]
    public function testAssertReturn280(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_mul', 'args' => [['type' => 'f64', 'value' => '665690489208775809'], ['type' => 'f64', 'value' => '14660005164454413124']]],
            expected: [['type' => 'f64', 'value' => '665690577722002880']],
            line: 599,
        );
    }

    #[Depends('testAssertReturn280')]
    public function testAssertReturn281(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_mul', 'args' => [['type' => 'f64', 'value' => '10617267697387344269'], ['type' => 'f64', 'value' => '4370684778829606254']]],
            expected: [['type' => 'f64', 'value' => '10617267697387344270']],
            line: 600,
        );
    }

    #[Depends('testAssertReturn281')]
    public function testAssertReturn282(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_mul', 'args' => [['type' => 'f64', 'value' => '13179336828827425934'], ['type' => 'f64', 'value' => '6536345148565138764']]],
            expected: [['type' => 'f64', 'value' => '13179336828827425933']],
            line: 601,
        );
    }

    #[Depends('testAssertReturn282')]
    public function testAssertReturn283(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_mul', 'args' => [['type' => 'f64', 'value' => '12582623625647949669'], ['type' => 'f64', 'value' => '15106746174896642041']]],
            expected: [['type' => 'f64', 'value' => '12582623625647949668']],
            line: 602,
        );
    }

    #[Depends('testAssertReturn283')]
    public function testAssertReturn284(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_mul', 'args' => [['type' => 'f64', 'value' => '16624217782795067216'], ['type' => 'f64', 'value' => '9062205521150975866']]],
            expected: [['type' => 'f64', 'value' => '16624217782795067215']],
            line: 603,
        );
    }

    #[Depends('testAssertReturn284')]
    public function testModule285(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.34.wasm',
            name: null,
            line: 607,
        );
    }

    #[Depends('testModule285')]
    public function testAssertReturn286(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div2_mul2', 'args' => [['type' => 'f32', 'value' => '16777215']]],
            expected: [['type' => 'f32', 'value' => '16777216']],
            line: 614,
        );
    }

    #[Depends('testAssertReturn286')]
    public function testAssertReturn287(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div2_mul2', 'args' => [['type' => 'f64', 'value' => '9007199254740991']]],
            expected: [['type' => 'f64', 'value' => '9007199254740992']],
            line: 615,
        );
    }

    #[Depends('testAssertReturn287')]
    public function testModule288(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.35.wasm',
            name: null,
            line: 619,
        );
    }

    #[Depends('testModule288')]
    public function testAssertReturn289(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'no_fold_demote_promote', 'args' => [['type' => 'f64', 'value' => '13235495337234861917']]],
            expected: [['type' => 'f64', 'value' => '13235495326728585216']],
            line: 624,
        );
    }

    #[Depends('testAssertReturn289')]
    public function testAssertReturn290(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'no_fold_demote_promote', 'args' => [['type' => 'f64', 'value' => '13448204151038380655']]],
            expected: [['type' => 'f64', 'value' => '13448204151146151936']],
            line: 625,
        );
    }

    #[Depends('testAssertReturn290')]
    public function testAssertReturn291(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'no_fold_demote_promote', 'args' => [['type' => 'f64', 'value' => '5090364081358261697']]],
            expected: [['type' => 'f64', 'value' => '5090364081378951168']],
            line: 626,
        );
    }

    #[Depends('testAssertReturn291')]
    public function testAssertReturn292(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'no_fold_demote_promote', 'args' => [['type' => 'f64', 'value' => '13436295269174285872']]],
            expected: [['type' => 'f64', 'value' => '13436295269301878784']],
            line: 627,
        );
    }

    #[Depends('testAssertReturn292')]
    public function testAssertReturn293(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'no_fold_demote_promote', 'args' => [['type' => 'f64', 'value' => '5076240020598306430']]],
            expected: [['type' => 'f64', 'value' => '5076240020759642112']],
            line: 628,
        );
    }

    #[Depends('testAssertReturn293')]
    public function testModule294(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.36.wasm',
            name: null,
            line: 633,
        );
    }

    #[Depends('testModule294')]
    public function testAssertReturn295(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'no_fold_promote_demote', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => 'nan:arithmetic']],
            line: 638,
        );
    }

    #[Depends('testAssertReturn295')]
    public function testAssertReturn296(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'no_fold_promote_demote', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 639,
        );
    }

    #[Depends('testAssertReturn296')]
    public function testAssertReturn297(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'no_fold_promote_demote', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 640,
        );
    }

    #[Depends('testAssertReturn297')]
    public function testAssertReturn298(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'no_fold_promote_demote', 'args' => [['type' => 'f32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 641,
        );
    }

    #[Depends('testAssertReturn298')]
    public function testAssertReturn299(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'no_fold_promote_demote', 'args' => [['type' => 'f32', 'value' => '2147483649']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 642,
        );
    }

    #[Depends('testAssertReturn299')]
    public function testAssertReturn300(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'no_fold_promote_demote', 'args' => [['type' => 'f32', 'value' => '8388607']]],
            expected: [['type' => 'f32', 'value' => '8388607']],
            line: 643,
        );
    }

    #[Depends('testAssertReturn300')]
    public function testAssertReturn301(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'no_fold_promote_demote', 'args' => [['type' => 'f32', 'value' => '2155872255']]],
            expected: [['type' => 'f32', 'value' => '2155872255']],
            line: 644,
        );
    }

    #[Depends('testAssertReturn301')]
    public function testAssertReturn302(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'no_fold_promote_demote', 'args' => [['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 645,
        );
    }

    #[Depends('testAssertReturn302')]
    public function testAssertReturn303(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'no_fold_promote_demote', 'args' => [['type' => 'f32', 'value' => '2155872256']]],
            expected: [['type' => 'f32', 'value' => '2155872256']],
            line: 646,
        );
    }

    #[Depends('testAssertReturn303')]
    public function testAssertReturn304(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'no_fold_promote_demote', 'args' => [['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 647,
        );
    }

    #[Depends('testAssertReturn304')]
    public function testAssertReturn305(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'no_fold_promote_demote', 'args' => [['type' => 'f32', 'value' => '4286578687']]],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 648,
        );
    }

    #[Depends('testAssertReturn305')]
    public function testAssertReturn306(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'no_fold_promote_demote', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 649,
        );
    }

    #[Depends('testAssertReturn306')]
    public function testAssertReturn307(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'no_fold_promote_demote', 'args' => [['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 650,
        );
    }

    #[Depends('testAssertReturn307')]
    public function testModule308(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.37.wasm',
            name: null,
            line: 654,
        );
    }

    #[Depends('testModule308')]
    public function testAssertReturn309(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'no_demote_mixed_add', 'args' => [['type' => 'f64', 'value' => '4183652368636204281'], ['type' => 'f32', 'value' => '69183310']]],
            expected: [['type' => 'f32', 'value' => '276467023']],
            line: 661,
        );
    }

    #[Depends('testAssertReturn309')]
    public function testAssertReturn310(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'no_demote_mixed_add', 'args' => [['type' => 'f64', 'value' => '4773927428111915216'], ['type' => 'f32', 'value' => '1387972204']]],
            expected: [['type' => 'f32', 'value' => '1392270651']],
            line: 662,
        );
    }

    #[Depends('testAssertReturn310')]
    public function testAssertReturn311(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'no_demote_mixed_add', 'args' => [['type' => 'f64', 'value' => '4072985553596038423'], ['type' => 'f32', 'value' => '2202918851']]],
            expected: [['type' => 'f32', 'value' => '66813087']],
            line: 663,
        );
    }

    #[Depends('testAssertReturn311')]
    public function testAssertReturn312(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'no_demote_mixed_add', 'args' => [['type' => 'f64', 'value' => '13740716732336801211'], ['type' => 'f32', 'value' => '822392741']]],
            expected: [['type' => 'f32', 'value' => '3045484077']],
            line: 664,
        );
    }

    #[Depends('testAssertReturn312')]
    public function testAssertReturn313(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'no_demote_mixed_add', 'args' => [['type' => 'f64', 'value' => '13742514716462174325'], ['type' => 'f32', 'value' => '2870112826']]],
            expected: [['type' => 'f32', 'value' => '3048850075']],
            line: 665,
        );
    }

    #[Depends('testAssertReturn313')]
    public function testAssertReturn314(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'no_demote_mixed_add_commuted', 'args' => [['type' => 'f32', 'value' => '69183310'], ['type' => 'f64', 'value' => '4183652368636204281']]],
            expected: [['type' => 'f32', 'value' => '276467023']],
            line: 667,
        );
    }

    #[Depends('testAssertReturn314')]
    public function testAssertReturn315(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'no_demote_mixed_add_commuted', 'args' => [['type' => 'f32', 'value' => '1387972204'], ['type' => 'f64', 'value' => '4773927428111915216']]],
            expected: [['type' => 'f32', 'value' => '1392270651']],
            line: 668,
        );
    }

    #[Depends('testAssertReturn315')]
    public function testAssertReturn316(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'no_demote_mixed_add_commuted', 'args' => [['type' => 'f32', 'value' => '2202918851'], ['type' => 'f64', 'value' => '4072985553596038423']]],
            expected: [['type' => 'f32', 'value' => '66813087']],
            line: 669,
        );
    }

    #[Depends('testAssertReturn316')]
    public function testAssertReturn317(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'no_demote_mixed_add_commuted', 'args' => [['type' => 'f32', 'value' => '822392741'], ['type' => 'f64', 'value' => '13740716732336801211']]],
            expected: [['type' => 'f32', 'value' => '3045484077']],
            line: 670,
        );
    }

    #[Depends('testAssertReturn317')]
    public function testAssertReturn318(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'no_demote_mixed_add_commuted', 'args' => [['type' => 'f32', 'value' => '2870112826'], ['type' => 'f64', 'value' => '13742514716462174325']]],
            expected: [['type' => 'f32', 'value' => '3048850075']],
            line: 671,
        );
    }

    #[Depends('testAssertReturn318')]
    public function testModule319(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.38.wasm',
            name: null,
            line: 675,
        );
    }

    #[Depends('testModule319')]
    public function testAssertReturn320(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'no_demote_mixed_sub', 'args' => [['type' => 'f64', 'value' => '4979303437048015281'], ['type' => 'f32', 'value' => '1583535740']]],
            expected: [['type' => 'f32', 'value' => '1758482618']],
            line: 680,
        );
    }

    #[Depends('testAssertReturn320')]
    public function testAssertReturn321(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'no_demote_mixed_sub', 'args' => [['type' => 'f64', 'value' => '13967600632962086462'], ['type' => 'f32', 'value' => '1214924370']]],
            expected: [['type' => 'f32', 'value' => '3468107136']],
            line: 681,
        );
    }

    #[Depends('testAssertReturn321')]
    public function testAssertReturn322(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'no_demote_mixed_sub', 'args' => [['type' => 'f64', 'value' => '13860263758943608426'], ['type' => 'f32', 'value' => '969848030']]],
            expected: [['type' => 'f32', 'value' => '3268174805']],
            line: 682,
        );
    }

    #[Depends('testAssertReturn322')]
    public function testAssertReturn323(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'no_demote_mixed_sub', 'args' => [['type' => 'f64', 'value' => '4364064588997139903'], ['type' => 'f32', 'value' => '472962692']]],
            expected: [['type' => 'f32', 'value' => '612510881']],
            line: 683,
        );
    }

    #[Depends('testAssertReturn323')]
    public function testAssertReturn324(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'no_demote_mixed_sub', 'args' => [['type' => 'f64', 'value' => '4673175763235896759'], ['type' => 'f32', 'value' => '1198952676']]],
            expected: [['type' => 'f32', 'value' => '3339501185']],
            line: 684,
        );
    }

    #[Depends('testAssertReturn324')]
    public function testModule325(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.39.wasm',
            name: null,
            line: 688,
        );
    }

    #[Depends('testModule325')]
    public function testAssertReturn326(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.i32.no_fold_trunc_s_convert_s', 'args' => [['type' => 'f32', 'value' => '1069547520']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 723,
        );
    }

    #[Depends('testAssertReturn326')]
    public function testAssertReturn327(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.i32.no_fold_trunc_s_convert_s', 'args' => [['type' => 'f32', 'value' => '3217031168']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 724,
        );
    }

    #[Depends('testAssertReturn327')]
    public function testAssertReturn328(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.i32.no_fold_trunc_u_convert_s', 'args' => [['type' => 'f32', 'value' => '1069547520']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 725,
        );
    }

    #[Depends('testAssertReturn328')]
    public function testAssertReturn329(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.i32.no_fold_trunc_u_convert_s', 'args' => [['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 726,
        );
    }

    #[Depends('testAssertReturn329')]
    public function testAssertReturn330(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.i32.no_fold_trunc_s_convert_u', 'args' => [['type' => 'f32', 'value' => '1069547520']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 727,
        );
    }

    #[Depends('testAssertReturn330')]
    public function testAssertReturn331(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.i32.no_fold_trunc_s_convert_u', 'args' => [['type' => 'f32', 'value' => '3217031168']]],
            expected: [['type' => 'f32', 'value' => '1333788672']],
            line: 728,
        );
    }

    #[Depends('testAssertReturn331')]
    public function testAssertReturn332(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.i32.no_fold_trunc_u_convert_u', 'args' => [['type' => 'f32', 'value' => '1069547520']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 729,
        );
    }

    #[Depends('testAssertReturn332')]
    public function testAssertReturn333(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.i32.no_fold_trunc_u_convert_u', 'args' => [['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 730,
        );
    }

    #[Depends('testAssertReturn333')]
    public function testAssertReturn334(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.i32.no_fold_trunc_s_convert_s', 'args' => [['type' => 'f64', 'value' => '4609434218613702656']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 732,
        );
    }

    #[Depends('testAssertReturn334')]
    public function testAssertReturn335(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.i32.no_fold_trunc_s_convert_s', 'args' => [['type' => 'f64', 'value' => '13832806255468478464']]],
            expected: [['type' => 'f64', 'value' => '13830554455654793216']],
            line: 733,
        );
    }

    #[Depends('testAssertReturn335')]
    public function testAssertReturn336(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.i32.no_fold_trunc_u_convert_s', 'args' => [['type' => 'f64', 'value' => '4609434218613702656']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 734,
        );
    }

    #[Depends('testAssertReturn336')]
    public function testAssertReturn337(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.i32.no_fold_trunc_u_convert_s', 'args' => [['type' => 'f64', 'value' => '13826050856027422720']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 735,
        );
    }

    #[Depends('testAssertReturn337')]
    public function testAssertReturn338(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.i32.no_fold_trunc_s_convert_u', 'args' => [['type' => 'f64', 'value' => '4609434218613702656']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 736,
        );
    }

    #[Depends('testAssertReturn338')]
    public function testAssertReturn339(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.i32.no_fold_trunc_s_convert_u', 'args' => [['type' => 'f64', 'value' => '13832806255468478464']]],
            expected: [['type' => 'f64', 'value' => '4751297606873776128']],
            line: 737,
        );
    }

    #[Depends('testAssertReturn339')]
    public function testAssertReturn340(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.i32.no_fold_trunc_u_convert_u', 'args' => [['type' => 'f64', 'value' => '4609434218613702656']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 738,
        );
    }

    #[Depends('testAssertReturn340')]
    public function testAssertReturn341(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.i32.no_fold_trunc_u_convert_u', 'args' => [['type' => 'f64', 'value' => '13826050856027422720']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 739,
        );
    }

    #[Depends('testAssertReturn341')]
    public function testAssertReturn342(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.i64.no_fold_trunc_s_convert_s', 'args' => [['type' => 'f32', 'value' => '1069547520']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 741,
        );
    }

    #[Depends('testAssertReturn342')]
    public function testAssertReturn343(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.i64.no_fold_trunc_s_convert_s', 'args' => [['type' => 'f32', 'value' => '3217031168']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 742,
        );
    }

    #[Depends('testAssertReturn343')]
    public function testAssertReturn344(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.i64.no_fold_trunc_u_convert_s', 'args' => [['type' => 'f32', 'value' => '1069547520']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 743,
        );
    }

    #[Depends('testAssertReturn344')]
    public function testAssertReturn345(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.i64.no_fold_trunc_u_convert_s', 'args' => [['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 744,
        );
    }

    #[Depends('testAssertReturn345')]
    public function testAssertReturn346(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.i64.no_fold_trunc_s_convert_u', 'args' => [['type' => 'f32', 'value' => '1069547520']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 745,
        );
    }

    #[Depends('testAssertReturn346')]
    public function testAssertReturn347(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.i64.no_fold_trunc_s_convert_u', 'args' => [['type' => 'f32', 'value' => '3217031168']]],
            expected: [['type' => 'f32', 'value' => '1602224128']],
            line: 746,
        );
    }

    #[Depends('testAssertReturn347')]
    public function testAssertReturn348(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.i64.no_fold_trunc_u_convert_u', 'args' => [['type' => 'f32', 'value' => '1069547520']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 747,
        );
    }

    #[Depends('testAssertReturn348')]
    public function testAssertReturn349(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.i64.no_fold_trunc_u_convert_u', 'args' => [['type' => 'f32', 'value' => '3204448256']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 748,
        );
    }

    #[Depends('testAssertReturn349')]
    public function testAssertReturn350(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.i64.no_fold_trunc_s_convert_s', 'args' => [['type' => 'f64', 'value' => '4609434218613702656']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 750,
        );
    }

    #[Depends('testAssertReturn350')]
    public function testAssertReturn351(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.i64.no_fold_trunc_s_convert_s', 'args' => [['type' => 'f64', 'value' => '13832806255468478464']]],
            expected: [['type' => 'f64', 'value' => '13830554455654793216']],
            line: 751,
        );
    }

    #[Depends('testAssertReturn351')]
    public function testAssertReturn352(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.i64.no_fold_trunc_u_convert_s', 'args' => [['type' => 'f64', 'value' => '4609434218613702656']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 752,
        );
    }

    #[Depends('testAssertReturn352')]
    public function testAssertReturn353(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.i64.no_fold_trunc_u_convert_s', 'args' => [['type' => 'f64', 'value' => '13826050856027422720']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 753,
        );
    }

    #[Depends('testAssertReturn353')]
    public function testAssertReturn354(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.i64.no_fold_trunc_s_convert_u', 'args' => [['type' => 'f64', 'value' => '4609434218613702656']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 754,
        );
    }

    #[Depends('testAssertReturn354')]
    public function testAssertReturn355(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.i64.no_fold_trunc_s_convert_u', 'args' => [['type' => 'f64', 'value' => '13832806255468478464']]],
            expected: [['type' => 'f64', 'value' => '4895412794951729152']],
            line: 755,
        );
    }

    #[Depends('testAssertReturn355')]
    public function testAssertReturn356(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.i64.no_fold_trunc_u_convert_u', 'args' => [['type' => 'f64', 'value' => '4609434218613702656']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 756,
        );
    }

    #[Depends('testAssertReturn356')]
    public function testAssertReturn357(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.i64.no_fold_trunc_u_convert_u', 'args' => [['type' => 'f64', 'value' => '13826050856027422720']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 757,
        );
    }

    #[Depends('testAssertReturn357')]
    public function testModule358(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.40.wasm',
            name: null,
            line: 763,
        );
    }

    #[Depends('testModule358')]
    public function testAction359(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'init', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'f32', 'value' => '1097963930']]],
            line: 784,
        );
    }

    #[Depends('testAction359')]
    public function testAction360(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'init', 'args' => [['type' => 'i32', 'value' => '4'], ['type' => 'f32', 'value' => '1098068787']]],
            line: 785,
        );
    }

    #[Depends('testAction360')]
    public function testAction361(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'init', 'args' => [['type' => 'i32', 'value' => '8'], ['type' => 'f32', 'value' => '1098173645']]],
            line: 786,
        );
    }

    #[Depends('testAction361')]
    public function testAction362(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'init', 'args' => [['type' => 'i32', 'value' => '12'], ['type' => 'f32', 'value' => '1098278502']]],
            line: 787,
        );
    }

    #[Depends('testAction362')]
    public function testAssertReturn363(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1097963930']],
            line: 788,
        );
    }

    #[Depends('testAssertReturn363')]
    public function testAssertReturn364(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'f32', 'value' => '1098068787']],
            line: 789,
        );
    }

    #[Depends('testAssertReturn364')]
    public function testAssertReturn365(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'f32', 'value' => '1098173645']],
            line: 790,
        );
    }

    #[Depends('testAssertReturn365')]
    public function testAssertReturn366(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'f32', 'value' => '1098278502']],
            line: 791,
        );
    }

    #[Depends('testAssertReturn366')]
    public function testAction367(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '16'], ['type' => 'f32', 'value' => '1077936128']]],
            line: 792,
        );
    }

    #[Depends('testAction367')]
    public function testAssertReturn368(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1084297489']],
            line: 793,
        );
    }

    #[Depends('testAssertReturn368')]
    public function testAssertReturn369(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'f32', 'value' => '1084367394']],
            line: 794,
        );
    }

    #[Depends('testAssertReturn369')]
    public function testAssertReturn370(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'f32', 'value' => '1084437299']],
            line: 795,
        );
    }

    #[Depends('testAssertReturn370')]
    public function testAssertReturn371(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'f32', 'value' => '1084507204']],
            line: 796,
        );
    }

    #[Depends('testAssertReturn371')]
    public function testModule372(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.41.wasm',
            name: null,
            line: 798,
        );
    }

    #[Depends('testModule372')]
    public function testAction373(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'init', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'f64', 'value' => '4624690162351420211']]],
            line: 819,
        );
    }

    #[Depends('testAction373')]
    public function testAction374(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'init', 'args' => [['type' => 'i32', 'value' => '8'], ['type' => 'f64', 'value' => '4624746457346762342']]],
            line: 820,
        );
    }

    #[Depends('testAction374')]
    public function testAction375(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'init', 'args' => [['type' => 'i32', 'value' => '16'], ['type' => 'f64', 'value' => '4624802752342104474']]],
            line: 821,
        );
    }

    #[Depends('testAction375')]
    public function testAction376(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'init', 'args' => [['type' => 'i32', 'value' => '24'], ['type' => 'f64', 'value' => '4624859047337446605']]],
            line: 822,
        );
    }

    #[Depends('testAction376')]
    public function testAssertReturn377(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '4624690162351420211']],
            line: 823,
        );
    }

    #[Depends('testAssertReturn377')]
    public function testAssertReturn378(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'f64', 'value' => '4624746457346762342']],
            line: 824,
        );
    }

    #[Depends('testAssertReturn378')]
    public function testAssertReturn379(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'f64', 'value' => '4624802752342104474']],
            line: 825,
        );
    }

    #[Depends('testAssertReturn379')]
    public function testAssertReturn380(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '24']]],
            expected: [['type' => 'f64', 'value' => '4624859047337446605']],
            line: 826,
        );
    }

    #[Depends('testAssertReturn380')]
    public function testAction381(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'run', 'args' => [['type' => 'i32', 'value' => '32'], ['type' => 'f64', 'value' => '4613937818241073152']]],
            line: 827,
        );
    }

    #[Depends('testAction381')]
    public function testAssertReturn382(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '4617353047958495778']],
            line: 828,
        );
    }

    #[Depends('testAssertReturn382')]
    public function testAssertReturn383(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'f64', 'value' => '4617390577955390532']],
            line: 829,
        );
    }

    #[Depends('testAssertReturn383')]
    public function testAssertReturn384(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'f64', 'value' => '4617428107952285287']],
            line: 830,
        );
    }

    #[Depends('testAssertReturn384')]
    public function testAssertReturn385(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'check', 'args' => [['type' => 'i32', 'value' => '24']]],
            expected: [['type' => 'f64', 'value' => '4617465637949180041']],
            line: 831,
        );
    }

    #[Depends('testAssertReturn385')]
    public function testModule386(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.42.wasm',
            name: null,
            line: 835,
        );
    }

    #[Depends('testModule386')]
    public function testAssertReturn387(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.ult', 'args' => [['type' => 'f32', 'value' => '1077936128'], ['type' => 'f32', 'value' => '1073741824']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 847,
        );
    }

    #[Depends('testAssertReturn387')]
    public function testAssertReturn388(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.ult', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '1073741824']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 848,
        );
    }

    #[Depends('testAssertReturn388')]
    public function testAssertReturn389(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.ult', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '1077936128']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 849,
        );
    }

    #[Depends('testAssertReturn389')]
    public function testAssertReturn390(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.ult', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 850,
        );
    }

    #[Depends('testAssertReturn390')]
    public function testAssertReturn391(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.ule', 'args' => [['type' => 'f32', 'value' => '1077936128'], ['type' => 'f32', 'value' => '1073741824']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 851,
        );
    }

    #[Depends('testAssertReturn391')]
    public function testAssertReturn392(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.ule', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '1073741824']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 852,
        );
    }

    #[Depends('testAssertReturn392')]
    public function testAssertReturn393(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.ule', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '1077936128']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 853,
        );
    }

    #[Depends('testAssertReturn393')]
    public function testAssertReturn394(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.ule', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 854,
        );
    }

    #[Depends('testAssertReturn394')]
    public function testAssertReturn395(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.ugt', 'args' => [['type' => 'f32', 'value' => '1077936128'], ['type' => 'f32', 'value' => '1073741824']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 855,
        );
    }

    #[Depends('testAssertReturn395')]
    public function testAssertReturn396(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.ugt', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '1073741824']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 856,
        );
    }

    #[Depends('testAssertReturn396')]
    public function testAssertReturn397(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.ugt', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '1077936128']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 857,
        );
    }

    #[Depends('testAssertReturn397')]
    public function testAssertReturn398(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.ugt', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 858,
        );
    }

    #[Depends('testAssertReturn398')]
    public function testAssertReturn399(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.uge', 'args' => [['type' => 'f32', 'value' => '1077936128'], ['type' => 'f32', 'value' => '1073741824']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 859,
        );
    }

    #[Depends('testAssertReturn399')]
    public function testAssertReturn400(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.uge', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '1073741824']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 860,
        );
    }

    #[Depends('testAssertReturn400')]
    public function testAssertReturn401(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.uge', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '1077936128']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 861,
        );
    }

    #[Depends('testAssertReturn401')]
    public function testAssertReturn402(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.uge', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 862,
        );
    }

    #[Depends('testAssertReturn402')]
    public function testAssertReturn403(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.ult', 'args' => [['type' => 'f64', 'value' => '4613937818241073152'], ['type' => 'f64', 'value' => '4611686018427387904']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 863,
        );
    }

    #[Depends('testAssertReturn403')]
    public function testAssertReturn404(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.ult', 'args' => [['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f64', 'value' => '4611686018427387904']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 864,
        );
    }

    #[Depends('testAssertReturn404')]
    public function testAssertReturn405(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.ult', 'args' => [['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f64', 'value' => '4613937818241073152']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 865,
        );
    }

    #[Depends('testAssertReturn405')]
    public function testAssertReturn406(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.ult', 'args' => [['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 866,
        );
    }

    #[Depends('testAssertReturn406')]
    public function testAssertReturn407(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.ule', 'args' => [['type' => 'f64', 'value' => '4613937818241073152'], ['type' => 'f64', 'value' => '4611686018427387904']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 867,
        );
    }

    #[Depends('testAssertReturn407')]
    public function testAssertReturn408(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.ule', 'args' => [['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f64', 'value' => '4611686018427387904']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 868,
        );
    }

    #[Depends('testAssertReturn408')]
    public function testAssertReturn409(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.ule', 'args' => [['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f64', 'value' => '4613937818241073152']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 869,
        );
    }

    #[Depends('testAssertReturn409')]
    public function testAssertReturn410(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.ule', 'args' => [['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 870,
        );
    }

    #[Depends('testAssertReturn410')]
    public function testAssertReturn411(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.ugt', 'args' => [['type' => 'f64', 'value' => '4613937818241073152'], ['type' => 'f64', 'value' => '4611686018427387904']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 871,
        );
    }

    #[Depends('testAssertReturn411')]
    public function testAssertReturn412(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.ugt', 'args' => [['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f64', 'value' => '4611686018427387904']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 872,
        );
    }

    #[Depends('testAssertReturn412')]
    public function testAssertReturn413(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.ugt', 'args' => [['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f64', 'value' => '4613937818241073152']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 873,
        );
    }

    #[Depends('testAssertReturn413')]
    public function testAssertReturn414(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.ugt', 'args' => [['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 874,
        );
    }

    #[Depends('testAssertReturn414')]
    public function testAssertReturn415(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.uge', 'args' => [['type' => 'f64', 'value' => '4613937818241073152'], ['type' => 'f64', 'value' => '4611686018427387904']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 875,
        );
    }

    #[Depends('testAssertReturn415')]
    public function testAssertReturn416(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.uge', 'args' => [['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f64', 'value' => '4611686018427387904']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 876,
        );
    }

    #[Depends('testAssertReturn416')]
    public function testAssertReturn417(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.uge', 'args' => [['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f64', 'value' => '4613937818241073152']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 877,
        );
    }

    #[Depends('testAssertReturn417')]
    public function testAssertReturn418(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.uge', 'args' => [['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 878,
        );
    }

    #[Depends('testAssertReturn418')]
    public function testModule419(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.43.wasm',
            name: null,
            line: 882,
        );
    }

    #[Depends('testModule419')]
    public function testAssertReturn420(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_lt_select', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 894,
        );
    }

    #[Depends('testAssertReturn420')]
    public function testAssertReturn421(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_lt_select', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 895,
        );
    }

    #[Depends('testAssertReturn421')]
    public function testAssertReturn422(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_lt_select', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 896,
        );
    }

    #[Depends('testAssertReturn422')]
    public function testAssertReturn423(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_lt_select', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 897,
        );
    }

    #[Depends('testAssertReturn423')]
    public function testAssertReturn424(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_le_select', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 898,
        );
    }

    #[Depends('testAssertReturn424')]
    public function testAssertReturn425(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_le_select', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 899,
        );
    }

    #[Depends('testAssertReturn425')]
    public function testAssertReturn426(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_le_select', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 900,
        );
    }

    #[Depends('testAssertReturn426')]
    public function testAssertReturn427(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_le_select', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 901,
        );
    }

    #[Depends('testAssertReturn427')]
    public function testAssertReturn428(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_gt_select', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 902,
        );
    }

    #[Depends('testAssertReturn428')]
    public function testAssertReturn429(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_gt_select', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 903,
        );
    }

    #[Depends('testAssertReturn429')]
    public function testAssertReturn430(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_gt_select', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 904,
        );
    }

    #[Depends('testAssertReturn430')]
    public function testAssertReturn431(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_gt_select', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 905,
        );
    }

    #[Depends('testAssertReturn431')]
    public function testAssertReturn432(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_ge_select', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 906,
        );
    }

    #[Depends('testAssertReturn432')]
    public function testAssertReturn433(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_ge_select', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 907,
        );
    }

    #[Depends('testAssertReturn433')]
    public function testAssertReturn434(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_ge_select', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 908,
        );
    }

    #[Depends('testAssertReturn434')]
    public function testAssertReturn435(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_ge_select', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 909,
        );
    }

    #[Depends('testAssertReturn435')]
    public function testAssertReturn436(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_lt_select', 'args' => [['type' => 'f64', 'value' => '0'], ['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'f64', 'value' => '9221120237041090560']],
            line: 910,
        );
    }

    #[Depends('testAssertReturn436')]
    public function testAssertReturn437(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_lt_select', 'args' => [['type' => 'f64', 'value' => '9221120237041090560'], ['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 911,
        );
    }

    #[Depends('testAssertReturn437')]
    public function testAssertReturn438(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_lt_select', 'args' => [['type' => 'f64', 'value' => '0'], ['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 912,
        );
    }

    #[Depends('testAssertReturn438')]
    public function testAssertReturn439(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_lt_select', 'args' => [['type' => 'f64', 'value' => '9223372036854775808'], ['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 913,
        );
    }

    #[Depends('testAssertReturn439')]
    public function testAssertReturn440(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_le_select', 'args' => [['type' => 'f64', 'value' => '0'], ['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'f64', 'value' => '9221120237041090560']],
            line: 914,
        );
    }

    #[Depends('testAssertReturn440')]
    public function testAssertReturn441(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_le_select', 'args' => [['type' => 'f64', 'value' => '9221120237041090560'], ['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 915,
        );
    }

    #[Depends('testAssertReturn441')]
    public function testAssertReturn442(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_le_select', 'args' => [['type' => 'f64', 'value' => '0'], ['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 916,
        );
    }

    #[Depends('testAssertReturn442')]
    public function testAssertReturn443(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_le_select', 'args' => [['type' => 'f64', 'value' => '9223372036854775808'], ['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 917,
        );
    }

    #[Depends('testAssertReturn443')]
    public function testAssertReturn444(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_gt_select', 'args' => [['type' => 'f64', 'value' => '0'], ['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'f64', 'value' => '9221120237041090560']],
            line: 918,
        );
    }

    #[Depends('testAssertReturn444')]
    public function testAssertReturn445(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_gt_select', 'args' => [['type' => 'f64', 'value' => '9221120237041090560'], ['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 919,
        );
    }

    #[Depends('testAssertReturn445')]
    public function testAssertReturn446(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_gt_select', 'args' => [['type' => 'f64', 'value' => '0'], ['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 920,
        );
    }

    #[Depends('testAssertReturn446')]
    public function testAssertReturn447(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_gt_select', 'args' => [['type' => 'f64', 'value' => '9223372036854775808'], ['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 921,
        );
    }

    #[Depends('testAssertReturn447')]
    public function testAssertReturn448(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_ge_select', 'args' => [['type' => 'f64', 'value' => '0'], ['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'f64', 'value' => '9221120237041090560']],
            line: 922,
        );
    }

    #[Depends('testAssertReturn448')]
    public function testAssertReturn449(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_ge_select', 'args' => [['type' => 'f64', 'value' => '9221120237041090560'], ['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 923,
        );
    }

    #[Depends('testAssertReturn449')]
    public function testAssertReturn450(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_ge_select', 'args' => [['type' => 'f64', 'value' => '0'], ['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 924,
        );
    }

    #[Depends('testAssertReturn450')]
    public function testAssertReturn451(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_ge_select', 'args' => [['type' => 'f64', 'value' => '9223372036854775808'], ['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 925,
        );
    }

    #[Depends('testAssertReturn451')]
    public function testModule452(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.44.wasm',
            name: null,
            line: 929,
        );
    }

    #[Depends('testModule452')]
    public function testAssertReturn453(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_lt_if', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 973,
        );
    }

    #[Depends('testAssertReturn453')]
    public function testAssertReturn454(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_lt_if', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 974,
        );
    }

    #[Depends('testAssertReturn454')]
    public function testAssertReturn455(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_lt_if', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 975,
        );
    }

    #[Depends('testAssertReturn455')]
    public function testAssertReturn456(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_lt_if', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 976,
        );
    }

    #[Depends('testAssertReturn456')]
    public function testAssertReturn457(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_le_if', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 977,
        );
    }

    #[Depends('testAssertReturn457')]
    public function testAssertReturn458(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_le_if', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 978,
        );
    }

    #[Depends('testAssertReturn458')]
    public function testAssertReturn459(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_le_if', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 979,
        );
    }

    #[Depends('testAssertReturn459')]
    public function testAssertReturn460(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_le_if', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 980,
        );
    }

    #[Depends('testAssertReturn460')]
    public function testAssertReturn461(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_gt_if', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 981,
        );
    }

    #[Depends('testAssertReturn461')]
    public function testAssertReturn462(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_gt_if', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 982,
        );
    }

    #[Depends('testAssertReturn462')]
    public function testAssertReturn463(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_gt_if', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 983,
        );
    }

    #[Depends('testAssertReturn463')]
    public function testAssertReturn464(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_gt_if', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 984,
        );
    }

    #[Depends('testAssertReturn464')]
    public function testAssertReturn465(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_ge_if', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 985,
        );
    }

    #[Depends('testAssertReturn465')]
    public function testAssertReturn466(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_ge_if', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 986,
        );
    }

    #[Depends('testAssertReturn466')]
    public function testAssertReturn467(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_ge_if', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 987,
        );
    }

    #[Depends('testAssertReturn467')]
    public function testAssertReturn468(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_ge_if', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 988,
        );
    }

    #[Depends('testAssertReturn468')]
    public function testAssertReturn469(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_lt_if', 'args' => [['type' => 'f64', 'value' => '0'], ['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'f64', 'value' => '9221120237041090560']],
            line: 989,
        );
    }

    #[Depends('testAssertReturn469')]
    public function testAssertReturn470(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_lt_if', 'args' => [['type' => 'f64', 'value' => '9221120237041090560'], ['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 990,
        );
    }

    #[Depends('testAssertReturn470')]
    public function testAssertReturn471(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_lt_if', 'args' => [['type' => 'f64', 'value' => '0'], ['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 991,
        );
    }

    #[Depends('testAssertReturn471')]
    public function testAssertReturn472(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_lt_if', 'args' => [['type' => 'f64', 'value' => '9223372036854775808'], ['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 992,
        );
    }

    #[Depends('testAssertReturn472')]
    public function testAssertReturn473(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_le_if', 'args' => [['type' => 'f64', 'value' => '0'], ['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'f64', 'value' => '9221120237041090560']],
            line: 993,
        );
    }

    #[Depends('testAssertReturn473')]
    public function testAssertReturn474(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_le_if', 'args' => [['type' => 'f64', 'value' => '9221120237041090560'], ['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 994,
        );
    }

    #[Depends('testAssertReturn474')]
    public function testAssertReturn475(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_le_if', 'args' => [['type' => 'f64', 'value' => '0'], ['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 995,
        );
    }

    #[Depends('testAssertReturn475')]
    public function testAssertReturn476(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_le_if', 'args' => [['type' => 'f64', 'value' => '9223372036854775808'], ['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 996,
        );
    }

    #[Depends('testAssertReturn476')]
    public function testAssertReturn477(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_gt_if', 'args' => [['type' => 'f64', 'value' => '0'], ['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'f64', 'value' => '9221120237041090560']],
            line: 997,
        );
    }

    #[Depends('testAssertReturn477')]
    public function testAssertReturn478(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_gt_if', 'args' => [['type' => 'f64', 'value' => '9221120237041090560'], ['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 998,
        );
    }

    #[Depends('testAssertReturn478')]
    public function testAssertReturn479(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_gt_if', 'args' => [['type' => 'f64', 'value' => '0'], ['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 999,
        );
    }

    #[Depends('testAssertReturn479')]
    public function testAssertReturn480(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_gt_if', 'args' => [['type' => 'f64', 'value' => '9223372036854775808'], ['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 1000,
        );
    }

    #[Depends('testAssertReturn480')]
    public function testAssertReturn481(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_ge_if', 'args' => [['type' => 'f64', 'value' => '0'], ['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'f64', 'value' => '9221120237041090560']],
            line: 1001,
        );
    }

    #[Depends('testAssertReturn481')]
    public function testAssertReturn482(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_ge_if', 'args' => [['type' => 'f64', 'value' => '9221120237041090560'], ['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 1002,
        );
    }

    #[Depends('testAssertReturn482')]
    public function testAssertReturn483(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_ge_if', 'args' => [['type' => 'f64', 'value' => '0'], ['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 1003,
        );
    }

    #[Depends('testAssertReturn483')]
    public function testAssertReturn484(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_ge_if', 'args' => [['type' => 'f64', 'value' => '9223372036854775808'], ['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 1004,
        );
    }

    #[Depends('testAssertReturn484')]
    public function testModule485(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.45.wasm',
            name: null,
            line: 1008,
        );
    }

    #[Depends('testModule485')]
    public function testAssertReturn486(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_lt_select_to_abs', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => '2141192192']],
            line: 1020,
        );
    }

    #[Depends('testAssertReturn486')]
    public function testAssertReturn487(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_lt_select_to_abs', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 1021,
        );
    }

    #[Depends('testAssertReturn487')]
    public function testAssertReturn488(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_lt_select_to_abs', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1022,
        );
    }

    #[Depends('testAssertReturn488')]
    public function testAssertReturn489(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_lt_select_to_abs', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1023,
        );
    }

    #[Depends('testAssertReturn489')]
    public function testAssertReturn490(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_le_select_to_abs', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => '2141192192']],
            line: 1024,
        );
    }

    #[Depends('testAssertReturn490')]
    public function testAssertReturn491(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_le_select_to_abs', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 1025,
        );
    }

    #[Depends('testAssertReturn491')]
    public function testAssertReturn492(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_le_select_to_abs', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1026,
        );
    }

    #[Depends('testAssertReturn492')]
    public function testAssertReturn493(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_le_select_to_abs', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1027,
        );
    }

    #[Depends('testAssertReturn493')]
    public function testAssertReturn494(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_gt_select_to_abs', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => '4288675840']],
            line: 1028,
        );
    }

    #[Depends('testAssertReturn494')]
    public function testAssertReturn495(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_gt_select_to_abs', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 1029,
        );
    }

    #[Depends('testAssertReturn495')]
    public function testAssertReturn496(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_gt_select_to_abs', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1030,
        );
    }

    #[Depends('testAssertReturn496')]
    public function testAssertReturn497(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_gt_select_to_abs', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1031,
        );
    }

    #[Depends('testAssertReturn497')]
    public function testAssertReturn498(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_ge_select_to_abs', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => '4288675840']],
            line: 1032,
        );
    }

    #[Depends('testAssertReturn498')]
    public function testAssertReturn499(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_ge_select_to_abs', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 1033,
        );
    }

    #[Depends('testAssertReturn499')]
    public function testAssertReturn500(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_ge_select_to_abs', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1034,
        );
    }

    #[Depends('testAssertReturn500')]
    public function testAssertReturn501(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_ge_select_to_abs', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1035,
        );
    }

    #[Depends('testAssertReturn501')]
    public function testAssertReturn502(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_lt_select_to_abs', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'f64', 'value' => '9219994337134247936']],
            line: 1036,
        );
    }

    #[Depends('testAssertReturn502')]
    public function testAssertReturn503(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_lt_select_to_abs', 'args' => [['type' => 'f64', 'value' => '18444492273895866368']]],
            expected: [['type' => 'f64', 'value' => '18444492273895866368']],
            line: 1037,
        );
    }

    #[Depends('testAssertReturn503')]
    public function testAssertReturn504(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_lt_select_to_abs', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 1038,
        );
    }

    #[Depends('testAssertReturn504')]
    public function testAssertReturn505(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_lt_select_to_abs', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 1039,
        );
    }

    #[Depends('testAssertReturn505')]
    public function testAssertReturn506(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_le_select_to_abs', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'f64', 'value' => '9219994337134247936']],
            line: 1040,
        );
    }

    #[Depends('testAssertReturn506')]
    public function testAssertReturn507(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_le_select_to_abs', 'args' => [['type' => 'f64', 'value' => '18444492273895866368']]],
            expected: [['type' => 'f64', 'value' => '18444492273895866368']],
            line: 1041,
        );
    }

    #[Depends('testAssertReturn507')]
    public function testAssertReturn508(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_le_select_to_abs', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 1042,
        );
    }

    #[Depends('testAssertReturn508')]
    public function testAssertReturn509(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_le_select_to_abs', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 1043,
        );
    }

    #[Depends('testAssertReturn509')]
    public function testAssertReturn510(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_gt_select_to_abs', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'f64', 'value' => '18443366373989023744']],
            line: 1044,
        );
    }

    #[Depends('testAssertReturn510')]
    public function testAssertReturn511(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_gt_select_to_abs', 'args' => [['type' => 'f64', 'value' => '18444492273895866368']]],
            expected: [['type' => 'f64', 'value' => '9221120237041090560']],
            line: 1045,
        );
    }

    #[Depends('testAssertReturn511')]
    public function testAssertReturn512(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_gt_select_to_abs', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 1046,
        );
    }

    #[Depends('testAssertReturn512')]
    public function testAssertReturn513(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_gt_select_to_abs', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 1047,
        );
    }

    #[Depends('testAssertReturn513')]
    public function testAssertReturn514(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_ge_select_to_abs', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'f64', 'value' => '18443366373989023744']],
            line: 1048,
        );
    }

    #[Depends('testAssertReturn514')]
    public function testAssertReturn515(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_ge_select_to_abs', 'args' => [['type' => 'f64', 'value' => '18444492273895866368']]],
            expected: [['type' => 'f64', 'value' => '9221120237041090560']],
            line: 1049,
        );
    }

    #[Depends('testAssertReturn515')]
    public function testAssertReturn516(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_ge_select_to_abs', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 1050,
        );
    }

    #[Depends('testAssertReturn516')]
    public function testAssertReturn517(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_ge_select_to_abs', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 1051,
        );
    }

    #[Depends('testAssertReturn517')]
    public function testModule518(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.46.wasm',
            name: null,
            line: 1055,
        );
    }

    #[Depends('testModule518')]
    public function testAssertReturn519(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_lt_if_to_abs', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => '2141192192']],
            line: 1099,
        );
    }

    #[Depends('testAssertReturn519')]
    public function testAssertReturn520(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_lt_if_to_abs', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 1100,
        );
    }

    #[Depends('testAssertReturn520')]
    public function testAssertReturn521(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_lt_if_to_abs', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1101,
        );
    }

    #[Depends('testAssertReturn521')]
    public function testAssertReturn522(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_lt_if_to_abs', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1102,
        );
    }

    #[Depends('testAssertReturn522')]
    public function testAssertReturn523(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_le_if_to_abs', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => '2141192192']],
            line: 1103,
        );
    }

    #[Depends('testAssertReturn523')]
    public function testAssertReturn524(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_le_if_to_abs', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '4290772992']],
            line: 1104,
        );
    }

    #[Depends('testAssertReturn524')]
    public function testAssertReturn525(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_le_if_to_abs', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1105,
        );
    }

    #[Depends('testAssertReturn525')]
    public function testAssertReturn526(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_le_if_to_abs', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1106,
        );
    }

    #[Depends('testAssertReturn526')]
    public function testAssertReturn527(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_gt_if_to_abs', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => '4288675840']],
            line: 1107,
        );
    }

    #[Depends('testAssertReturn527')]
    public function testAssertReturn528(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_gt_if_to_abs', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 1108,
        );
    }

    #[Depends('testAssertReturn528')]
    public function testAssertReturn529(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_gt_if_to_abs', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1109,
        );
    }

    #[Depends('testAssertReturn529')]
    public function testAssertReturn530(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_gt_if_to_abs', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1110,
        );
    }

    #[Depends('testAssertReturn530')]
    public function testAssertReturn531(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_ge_if_to_abs', 'args' => [['type' => 'f32', 'value' => '2141192192']]],
            expected: [['type' => 'f32', 'value' => '4288675840']],
            line: 1111,
        );
    }

    #[Depends('testAssertReturn531')]
    public function testAssertReturn532(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_ge_if_to_abs', 'args' => [['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 1112,
        );
    }

    #[Depends('testAssertReturn532')]
    public function testAssertReturn533(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_ge_if_to_abs', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1113,
        );
    }

    #[Depends('testAssertReturn533')]
    public function testAssertReturn534(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_ge_if_to_abs', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1114,
        );
    }

    #[Depends('testAssertReturn534')]
    public function testAssertReturn535(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_lt_if_to_abs', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'f64', 'value' => '9219994337134247936']],
            line: 1115,
        );
    }

    #[Depends('testAssertReturn535')]
    public function testAssertReturn536(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_lt_if_to_abs', 'args' => [['type' => 'f64', 'value' => '18444492273895866368']]],
            expected: [['type' => 'f64', 'value' => '18444492273895866368']],
            line: 1116,
        );
    }

    #[Depends('testAssertReturn536')]
    public function testAssertReturn537(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_lt_if_to_abs', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 1117,
        );
    }

    #[Depends('testAssertReturn537')]
    public function testAssertReturn538(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_lt_if_to_abs', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 1118,
        );
    }

    #[Depends('testAssertReturn538')]
    public function testAssertReturn539(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_le_if_to_abs', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'f64', 'value' => '9219994337134247936']],
            line: 1119,
        );
    }

    #[Depends('testAssertReturn539')]
    public function testAssertReturn540(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_le_if_to_abs', 'args' => [['type' => 'f64', 'value' => '18444492273895866368']]],
            expected: [['type' => 'f64', 'value' => '18444492273895866368']],
            line: 1120,
        );
    }

    #[Depends('testAssertReturn540')]
    public function testAssertReturn541(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_le_if_to_abs', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 1121,
        );
    }

    #[Depends('testAssertReturn541')]
    public function testAssertReturn542(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_le_if_to_abs', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 1122,
        );
    }

    #[Depends('testAssertReturn542')]
    public function testAssertReturn543(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_gt_if_to_abs', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'f64', 'value' => '18443366373989023744']],
            line: 1123,
        );
    }

    #[Depends('testAssertReturn543')]
    public function testAssertReturn544(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_gt_if_to_abs', 'args' => [['type' => 'f64', 'value' => '18444492273895866368']]],
            expected: [['type' => 'f64', 'value' => '9221120237041090560']],
            line: 1124,
        );
    }

    #[Depends('testAssertReturn544')]
    public function testAssertReturn545(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_gt_if_to_abs', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 1125,
        );
    }

    #[Depends('testAssertReturn545')]
    public function testAssertReturn546(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_gt_if_to_abs', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 1126,
        );
    }

    #[Depends('testAssertReturn546')]
    public function testAssertReturn547(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_ge_if_to_abs', 'args' => [['type' => 'f64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'f64', 'value' => '18443366373989023744']],
            line: 1127,
        );
    }

    #[Depends('testAssertReturn547')]
    public function testAssertReturn548(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_ge_if_to_abs', 'args' => [['type' => 'f64', 'value' => '18444492273895866368']]],
            expected: [['type' => 'f64', 'value' => '9221120237041090560']],
            line: 1128,
        );
    }

    #[Depends('testAssertReturn548')]
    public function testAssertReturn549(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_ge_if_to_abs', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 1129,
        );
    }

    #[Depends('testAssertReturn549')]
    public function testAssertReturn550(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_ge_if_to_abs', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 1130,
        );
    }

    #[Depends('testAssertReturn550')]
    public function testModule551(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.47.wasm',
            name: null,
            line: 1135,
        );
    }

    #[Depends('testModule551')]
    public function testAssertReturn552(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.incorrect_correction', 'args' => []],
            expected: [['type' => 'f32', 'value' => '872415232']],
            line: 1144,
        );
    }

    #[Depends('testAssertReturn552')]
    public function testAssertReturn553(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.incorrect_correction', 'args' => []],
            expected: [['type' => 'f64', 'value' => '13596367275031527424']],
            line: 1145,
        );
    }

    #[Depends('testAssertReturn553')]
    public function testModule554(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.48.wasm',
            name: null,
            line: 1150,
        );
    }

    #[Depends('testModule554')]
    public function testAssertReturn555(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'calculate', 'args' => []],
            expected: [['type' => 'f32', 'value' => '3286857379']],
            line: 1167,
        );
    }

    #[Depends('testAssertReturn555')]
    public function testModule556(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.49.wasm',
            name: null,
            line: 1169,
        );
    }

    #[Depends('testModule556')]
    public function testAssertReturn557(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'calculate', 'args' => []],
            expected: [['type' => 'f64', 'value' => '13870293918930799763']],
            line: 1186,
        );
    }

    #[Depends('testAssertReturn557')]
    public function testModule558(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.50.wasm',
            name: null,
            line: 1191,
        );
    }

    #[Depends('testModule558')]
    public function testAssertReturn559(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'llvm_pr26746', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1197,
        );
    }

    #[Depends('testAssertReturn559')]
    public function testModule560(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.51.wasm',
            name: null,
            line: 1202,
        );
    }

    #[Depends('testModule560')]
    public function testAssertReturn561(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'llvm_pr27153', 'args' => [['type' => 'i32', 'value' => '33554434']]],
            expected: [['type' => 'f32', 'value' => '1270874112']],
            line: 1208,
        );
    }

    #[Depends('testAssertReturn561')]
    public function testModule562(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.52.wasm',
            name: null,
            line: 1213,
        );
    }

    #[Depends('testModule562')]
    public function testAssertReturn563(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'llvm_pr27036', 'args' => [['type' => 'i32', 'value' => '4269932491'], ['type' => 'i32', 'value' => '14942208']]],
            expected: [['type' => 'f32', 'value' => '3407478836']],
            line: 1220,
        );
    }

    #[Depends('testAssertReturn563')]
    public function testModule564(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.53.wasm',
            name: null,
            line: 1230,
        );
    }

    #[Depends('testModule564')]
    public function testAssertReturn565(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'thepast0', 'args' => [['type' => 'f64', 'value' => '9007199254740992'], ['type' => 'f64', 'value' => '4607182418800017407'], ['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f64', 'value' => '4602678819172646912']]],
            expected: [['type' => 'f64', 'value' => '9007199254740991']],
            line: 1244,
        );
    }

    #[Depends('testAssertReturn565')]
    public function testAssertReturn566(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'thepast1', 'args' => [['type' => 'f64', 'value' => '4363988038922010624'], ['type' => 'f64', 'value' => '4607182418800017407'], ['type' => 'f64', 'value' => '4363988038922010624']]],
            expected: [['type' => 'f64', 'value' => '13348669295526150144']],
            line: 1245,
        );
    }

    #[Depends('testAssertReturn566')]
    public function testAssertReturn567(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'thepast2', 'args' => [['type' => 'f32', 'value' => '16777216'], ['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 1246,
        );
    }

    #[Depends('testAssertReturn567')]
    public function testModule568(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.54.wasm',
            name: null,
            line: 1251,
        );
    }

    #[Depends('testModule568')]
    public function testAssertReturn569(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'inverse', 'args' => [['type' => 'f32', 'value' => '1119879168']]],
            expected: [['type' => 'f32', 'value' => '1009429163']],
            line: 1257,
        );
    }

    #[Depends('testAssertReturn569')]
    public function testModule570(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.55.wasm',
            name: null,
            line: 1262,
        );
    }

    #[Depends('testModule570')]
    public function testAssertReturn571(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32_sqrt_minus_2', 'args' => [['type' => 'f32', 'value' => '1082130432']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1272,
        );
    }

    #[Depends('testAssertReturn571')]
    public function testAssertReturn572(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64_sqrt_minus_2', 'args' => [['type' => 'f64', 'value' => '4616189618054758400']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 1273,
        );
    }

    #[Depends('testAssertReturn572')]
    public function testModule573(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.56.wasm',
            name: null,
            line: 1277,
        );
    }

    #[Depends('testModule573')]
    public function testAssertReturn574(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_recip_recip', 'args' => [['type' => 'f32', 'value' => '3765723020']]],
            expected: [['type' => 'f32', 'value' => '3765723019']],
            line: 1285,
        );
    }

    #[Depends('testAssertReturn574')]
    public function testAssertReturn575(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_recip_recip', 'args' => [['type' => 'f32', 'value' => '426844452']]],
            expected: [['type' => 'f32', 'value' => '426844451']],
            line: 1286,
        );
    }

    #[Depends('testAssertReturn575')]
    public function testAssertReturn576(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_recip_recip', 'args' => [['type' => 'f32', 'value' => '535132276']]],
            expected: [['type' => 'f32', 'value' => '535132277']],
            line: 1287,
        );
    }

    #[Depends('testAssertReturn576')]
    public function testAssertReturn577(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_recip_recip', 'args' => [['type' => 'f32', 'value' => '3253941441']]],
            expected: [['type' => 'f32', 'value' => '3253941442']],
            line: 1288,
        );
    }

    #[Depends('testAssertReturn577')]
    public function testAssertReturn578(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_recip_recip', 'args' => [['type' => 'f32', 'value' => '1660734603']]],
            expected: [['type' => 'f32', 'value' => '1660734602']],
            line: 1289,
        );
    }

    #[Depends('testAssertReturn578')]
    public function testAssertReturn579(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_recip_recip', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1291,
        );
    }

    #[Depends('testAssertReturn579')]
    public function testAssertReturn580(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_recip_recip', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1292,
        );
    }

    #[Depends('testAssertReturn580')]
    public function testAssertReturn581(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_recip_recip', 'args' => [['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1293,
        );
    }

    #[Depends('testAssertReturn581')]
    public function testAssertReturn582(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_recip_recip', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1294,
        );
    }

    #[Depends('testAssertReturn582')]
    public function testAssertReturn583(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_recip_recip', 'args' => [['type' => 'f64', 'value' => '14500888369201570768']]],
            expected: [['type' => 'f64', 'value' => '14500888369201570769']],
            line: 1296,
        );
    }

    #[Depends('testAssertReturn583')]
    public function testAssertReturn584(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_recip_recip', 'args' => [['type' => 'f64', 'value' => '14132092565459057123']]],
            expected: [['type' => 'f64', 'value' => '14132092565459057122']],
            line: 1297,
        );
    }

    #[Depends('testAssertReturn584')]
    public function testAssertReturn585(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_recip_recip', 'args' => [['type' => 'f64', 'value' => '5359183527603521526']]],
            expected: [['type' => 'f64', 'value' => '5359183527603521525']],
            line: 1298,
        );
    }

    #[Depends('testAssertReturn585')]
    public function testAssertReturn586(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_recip_recip', 'args' => [['type' => 'f64', 'value' => '1521566147669375634']]],
            expected: [['type' => 'f64', 'value' => '1521566147669375633']],
            line: 1299,
        );
    }

    #[Depends('testAssertReturn586')]
    public function testAssertReturn587(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_recip_recip', 'args' => [['type' => 'f64', 'value' => '8671785631545870379']]],
            expected: [['type' => 'f64', 'value' => '8671785631545870378']],
            line: 1300,
        );
    }

    #[Depends('testAssertReturn587')]
    public function testAssertReturn588(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_recip_recip', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 1302,
        );
    }

    #[Depends('testAssertReturn588')]
    public function testAssertReturn589(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_recip_recip', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 1303,
        );
    }

    #[Depends('testAssertReturn589')]
    public function testAssertReturn590(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_recip_recip', 'args' => [['type' => 'f64', 'value' => '18442240474082181120']]],
            expected: [['type' => 'f64', 'value' => '18442240474082181120']],
            line: 1304,
        );
    }

    #[Depends('testAssertReturn590')]
    public function testAssertReturn591(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_recip_recip', 'args' => [['type' => 'f64', 'value' => '9218868437227405312']]],
            expected: [['type' => 'f64', 'value' => '9218868437227405312']],
            line: 1305,
        );
    }

    #[Depends('testAssertReturn591')]
    public function testModule592(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.57.wasm',
            name: null,
            line: 1309,
        );
    }

    #[Depends('testModule592')]
    public function testAssertReturn593(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_algebraic_factoring', 'args' => [['type' => 'f32', 'value' => '2759308231'], ['type' => 'f32', 'value' => '618704988']]],
            expected: [['type' => 'f32', 'value' => '2315864577']],
            line: 1319,
        );
    }

    #[Depends('testAssertReturn593')]
    public function testAssertReturn594(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_algebraic_factoring', 'args' => [['type' => 'f32', 'value' => '3415653214'], ['type' => 'f32', 'value' => '1274676302']]],
            expected: [['type' => 'f32', 'value' => '3625675853']],
            line: 1320,
        );
    }

    #[Depends('testAssertReturn594')]
    public function testAssertReturn595(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_algebraic_factoring', 'args' => [['type' => 'f32', 'value' => '1446924633'], ['type' => 'f32', 'value' => '3607373982']]],
            expected: [['type' => 'f32', 'value' => '4000155759']],
            line: 1321,
        );
    }

    #[Depends('testAssertReturn595')]
    public function testAssertReturn596(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_algebraic_factoring', 'args' => [['type' => 'f32', 'value' => '1212067608'], ['type' => 'f32', 'value' => '3278094810']]],
            expected: [['type' => 'f32', 'value' => '1359874131']],
            line: 1322,
        );
    }

    #[Depends('testAssertReturn596')]
    public function testAssertReturn597(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_algebraic_factoring', 'args' => [['type' => 'f32', 'value' => '3278732464'], ['type' => 'f32', 'value' => '3379389272']]],
            expected: [['type' => 'f32', 'value' => '3546030359']],
            line: 1323,
        );
    }

    #[Depends('testAssertReturn597')]
    public function testAssertReturn598(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_algebraic_factoring', 'args' => [['type' => 'f64', 'value' => '2467435761933928117'], ['type' => 'f64', 'value' => '2526113756828458004']]],
            expected: [['type' => 'f64', 'value' => '9668435399096543331']],
            line: 1325,
        );
    }

    #[Depends('testAssertReturn598')]
    public function testAssertReturn599(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_algebraic_factoring', 'args' => [['type' => 'f64', 'value' => '2911983657790464931'], ['type' => 'f64', 'value' => '2814431682419759911']]],
            expected: [['type' => 'f64', 'value' => '1217162942843921803']],
            line: 1326,
        );
    }

    #[Depends('testAssertReturn599')]
    public function testAssertReturn600(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_algebraic_factoring', 'args' => [['type' => 'f64', 'value' => '12131637044948792058'], ['type' => 'f64', 'value' => '12170782965730311956']]],
            expected: [['type' => 'f64', 'value' => '10511676135434922533']],
            line: 1327,
        );
    }

    #[Depends('testAssertReturn600')]
    public function testAssertReturn601(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_algebraic_factoring', 'args' => [['type' => 'f64', 'value' => '14639789466354372633'], ['type' => 'f64', 'value' => '5456963169336729236']]],
            expected: [['type' => 'f64', 'value' => '15530333405173431543']],
            line: 1328,
        );
    }

    #[Depends('testAssertReturn601')]
    public function testAssertReturn602(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_algebraic_factoring', 'args' => [['type' => 'f64', 'value' => '5121779675912507154'], ['type' => 'f64', 'value' => '14237286623175920791']]],
            expected: [['type' => 'f64', 'value' => '5636689734063865714']],
            line: 1329,
        );
    }

    #[Depends('testAssertReturn602')]
    public function testModule603(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.58.wasm',
            name: null,
            line: 1333,
        );
    }

    #[Depends('testModule603')]
    public function testAssertReturn604(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_algebraic_factoring', 'args' => [['type' => 'f32', 'value' => '684135946'], ['type' => 'f32', 'value' => '744319693']]],
            expected: [['type' => 'f32', 'value' => '2571075368']],
            line: 1343,
        );
    }

    #[Depends('testAssertReturn604')]
    public function testAssertReturn605(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_algebraic_factoring', 'args' => [['type' => 'f32', 'value' => '3560929481'], ['type' => 'f32', 'value' => '3496840229']]],
            expected: [['type' => 'f32', 'value' => '1762604185']],
            line: 1344,
        );
    }

    #[Depends('testAssertReturn605')]
    public function testAssertReturn606(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_algebraic_factoring', 'args' => [['type' => 'f32', 'value' => '968841772'], ['type' => 'f32', 'value' => '3106497100']]],
            expected: [['type' => 'f32', 'value' => '870712803']],
            line: 1345,
        );
    }

    #[Depends('testAssertReturn606')]
    public function testAssertReturn607(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_algebraic_factoring', 'args' => [['type' => 'f32', 'value' => '697514723'], ['type' => 'f32', 'value' => '2834753933']]],
            expected: [['type' => 'f32', 'value' => '327914662']],
            line: 1346,
        );
    }

    #[Depends('testAssertReturn607')]
    public function testAssertReturn608(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_algebraic_factoring', 'args' => [['type' => 'f32', 'value' => '1498230729'], ['type' => 'f32', 'value' => '3650453580']]],
            expected: [['type' => 'f32', 'value' => '4080583891']],
            line: 1347,
        );
    }

    #[Depends('testAssertReturn608')]
    public function testAssertReturn609(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_algebraic_factoring', 'args' => [['type' => 'f64', 'value' => '6212515167506370409'], ['type' => 'f64', 'value' => '15348474890798978273']]],
            expected: [['type' => 'f64', 'value' => '7818515589337550196']],
            line: 1349,
        );
    }

    #[Depends('testAssertReturn609')]
    public function testAssertReturn610(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_algebraic_factoring', 'args' => [['type' => 'f64', 'value' => '15222970140370015722'], ['type' => 'f64', 'value' => '15325207139996136125']]],
            expected: [['type' => 'f64', 'value' => '16819892485880140289']],
            line: 1350,
        );
    }

    #[Depends('testAssertReturn610')]
    public function testAssertReturn611(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_algebraic_factoring', 'args' => [['type' => 'f64', 'value' => '4797439202963874050'], ['type' => 'f64', 'value' => '14009643534571442918']]],
            expected: [['type' => 'f64', 'value' => '4987747999326390045']],
            line: 1351,
        );
    }

    #[Depends('testAssertReturn611')]
    public function testAssertReturn612(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_algebraic_factoring', 'args' => [['type' => 'f64', 'value' => '14653559129294038194'], ['type' => 'f64', 'value' => '14581996260169223461']]],
            expected: [['type' => 'f64', 'value' => '6253339631158964222']],
            line: 1352,
        );
    }

    #[Depends('testAssertReturn612')]
    public function testAssertReturn613(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_algebraic_factoring', 'args' => [['type' => 'f64', 'value' => '12768321634751930140'], ['type' => 'f64', 'value' => '12767602092732820937']]],
            expected: [['type' => 'f64', 'value' => '2473652960990319032']],
            line: 1353,
        );
    }

    #[Depends('testAssertReturn613')]
    public function testModule614(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.59.wasm',
            name: null,
            line: 1358,
        );
    }

    #[Depends('testModule614')]
    public function testAssertReturn615(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.simple_x4_sum', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '16'], ['type' => 'i32', 'value' => '32']]],
            expected: [],
            line: 1391,
        );
    }

    #[Depends('testAssertReturn615')]
    public function testAssertReturn616(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => [['type' => 'i32', 'value' => '32']]],
            expected: [['type' => 'f32', 'value' => '2']],
            line: 1392,
        );
    }

    #[Depends('testAssertReturn616')]
    public function testAssertReturn617(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => [['type' => 'i32', 'value' => '36']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1393,
        );
    }

    #[Depends('testAssertReturn617')]
    public function testAssertReturn618(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => [['type' => 'i32', 'value' => '40']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 1394,
        );
    }

    #[Depends('testAssertReturn618')]
    public function testAssertReturn619(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.load', 'args' => [['type' => 'i32', 'value' => '44']]],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 1395,
        );
    }

    #[Depends('testAssertReturn619')]
    public function testModule620(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.60.wasm',
            name: null,
            line: 1397,
        );
    }

    #[Depends('testModule620')]
    public function testAssertReturn621(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.simple_x4_sum', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '32'], ['type' => 'i32', 'value' => '64']]],
            expected: [],
            line: 1430,
        );
    }

    #[Depends('testAssertReturn621')]
    public function testAssertReturn622(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '64']]],
            expected: [['type' => 'f64', 'value' => '2']],
            line: 1431,
        );
    }

    #[Depends('testAssertReturn622')]
    public function testAssertReturn623(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '72']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 1432,
        );
    }

    #[Depends('testAssertReturn623')]
    public function testAssertReturn624(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '80']]],
            expected: [['type' => 'f64', 'value' => '1']],
            line: 1433,
        );
    }

    #[Depends('testAssertReturn624')]
    public function testAssertReturn625(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.load', 'args' => [['type' => 'i32', 'value' => '88']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775809']],
            line: 1434,
        );
    }

    #[Depends('testAssertReturn625')]
    public function testModule626(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.61.wasm',
            name: null,
            line: 1439,
        );
    }

    #[Depends('testModule626')]
    public function testAssertReturn627(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.kahan_sum', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '256']]],
            expected: [['type' => 'f32', 'value' => '4085779725']],
            line: 1530,
        );
    }

    #[Depends('testAssertReturn627')]
    public function testAssertReturn628(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.plain_sum', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '256']]],
            expected: [['type' => 'f32', 'value' => '4082113053']],
            line: 1531,
        );
    }

    #[Depends('testAssertReturn628')]
    public function testModule629(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.62.wasm',
            name: null,
            line: 1533,
        );
    }

    #[Depends('testModule629')]
    public function testAssertReturn630(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.kahan_sum', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '256']]],
            expected: [['type' => 'f64', 'value' => '9105671289202277512']],
            line: 1581,
        );
    }

    #[Depends('testAssertReturn630')]
    public function testAssertReturn631(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.plain_sum', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '256']]],
            expected: [['type' => 'f64', 'value' => '9105671289202539655']],
            line: 1582,
        );
    }

    #[Depends('testAssertReturn631')]
    public function testModule632(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.63.wasm',
            name: null,
            line: 1586,
        );
    }

    #[Depends('testModule632')]
    public function testAssertReturn633(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_neg_sub', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1594,
        );
    }

    #[Depends('testAssertReturn633')]
    public function testAssertReturn634(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_neg_sub', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1595,
        );
    }

    #[Depends('testAssertReturn634')]
    public function testAssertReturn635(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_neg_sub', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1596,
        );
    }

    #[Depends('testAssertReturn635')]
    public function testAssertReturn636(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_neg_sub', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1597,
        );
    }

    #[Depends('testAssertReturn636')]
    public function testAssertReturn637(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_neg_sub', 'args' => [['type' => 'f64', 'value' => '9223372036854775808'], ['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 1599,
        );
    }

    #[Depends('testAssertReturn637')]
    public function testAssertReturn638(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_neg_sub', 'args' => [['type' => 'f64', 'value' => '0'], ['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 1600,
        );
    }

    #[Depends('testAssertReturn638')]
    public function testAssertReturn639(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_neg_sub', 'args' => [['type' => 'f64', 'value' => '9223372036854775808'], ['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 1601,
        );
    }

    #[Depends('testAssertReturn639')]
    public function testAssertReturn640(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_neg_sub', 'args' => [['type' => 'f64', 'value' => '0'], ['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 1602,
        );
    }

    #[Depends('testAssertReturn640')]
    public function testModule641(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.64.wasm',
            name: null,
            line: 1606,
        );
    }

    #[Depends('testModule641')]
    public function testAssertReturn642(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_neg_add', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1614,
        );
    }

    #[Depends('testAssertReturn642')]
    public function testAssertReturn643(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_neg_add', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1615,
        );
    }

    #[Depends('testAssertReturn643')]
    public function testAssertReturn644(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_neg_add', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1616,
        );
    }

    #[Depends('testAssertReturn644')]
    public function testAssertReturn645(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_neg_add', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1617,
        );
    }

    #[Depends('testAssertReturn645')]
    public function testAssertReturn646(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_neg_add', 'args' => [['type' => 'f64', 'value' => '9223372036854775808'], ['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 1619,
        );
    }

    #[Depends('testAssertReturn646')]
    public function testAssertReturn647(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_neg_add', 'args' => [['type' => 'f64', 'value' => '0'], ['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 1620,
        );
    }

    #[Depends('testAssertReturn647')]
    public function testAssertReturn648(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_neg_add', 'args' => [['type' => 'f64', 'value' => '9223372036854775808'], ['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 1621,
        );
    }

    #[Depends('testAssertReturn648')]
    public function testAssertReturn649(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_neg_add', 'args' => [['type' => 'f64', 'value' => '0'], ['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 1622,
        );
    }

    #[Depends('testAssertReturn649')]
    public function testModule650(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.65.wasm',
            name: null,
            line: 1626,
        );
    }

    #[Depends('testModule650')]
    public function testAssertReturn651(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_add_neg_neg', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1634,
        );
    }

    #[Depends('testAssertReturn651')]
    public function testAssertReturn652(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_add_neg_neg', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1635,
        );
    }

    #[Depends('testAssertReturn652')]
    public function testAssertReturn653(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_add_neg_neg', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1636,
        );
    }

    #[Depends('testAssertReturn653')]
    public function testAssertReturn654(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_add_neg_neg', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1637,
        );
    }

    #[Depends('testAssertReturn654')]
    public function testAssertReturn655(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_add_neg_neg', 'args' => [['type' => 'f64', 'value' => '9223372036854775808'], ['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 1639,
        );
    }

    #[Depends('testAssertReturn655')]
    public function testAssertReturn656(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_add_neg_neg', 'args' => [['type' => 'f64', 'value' => '0'], ['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 1640,
        );
    }

    #[Depends('testAssertReturn656')]
    public function testAssertReturn657(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_add_neg_neg', 'args' => [['type' => 'f64', 'value' => '9223372036854775808'], ['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 1641,
        );
    }

    #[Depends('testAssertReturn657')]
    public function testAssertReturn658(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_add_neg_neg', 'args' => [['type' => 'f64', 'value' => '0'], ['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 1642,
        );
    }

    #[Depends('testAssertReturn658')]
    public function testModule659(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.66.wasm',
            name: null,
            line: 1646,
        );
    }

    #[Depends('testModule659')]
    public function testAssertReturn660(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_add_neg', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1654,
        );
    }

    #[Depends('testAssertReturn660')]
    public function testAssertReturn661(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_add_neg', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1655,
        );
    }

    #[Depends('testAssertReturn661')]
    public function testAssertReturn662(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_add_neg', 'args' => [['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1656,
        );
    }

    #[Depends('testAssertReturn662')]
    public function testAssertReturn663(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_add_neg', 'args' => [['type' => 'f32', 'value' => '4286578688']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1657,
        );
    }

    #[Depends('testAssertReturn663')]
    public function testAssertReturn664(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_add_neg', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 1659,
        );
    }

    #[Depends('testAssertReturn664')]
    public function testAssertReturn665(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_add_neg', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 1660,
        );
    }

    #[Depends('testAssertReturn665')]
    public function testAssertReturn666(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_add_neg', 'args' => [['type' => 'f64', 'value' => '9218868437227405312']]],
            expected: [['type' => 'f64', 'value' => 'nan:canonical']],
            line: 1661,
        );
    }

    #[Depends('testAssertReturn666')]
    public function testAssertReturn667(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_add_neg', 'args' => [['type' => 'f64', 'value' => '18442240474082181120']]],
            expected: [['type' => 'f64', 'value' => 'nan:canonical']],
            line: 1662,
        );
    }

    #[Depends('testAssertReturn667')]
    public function testModule668(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.67.wasm',
            name: null,
            line: 1666,
        );
    }

    #[Depends('testModule668')]
    public function testAssertReturn669(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_6x_via_add', 'args' => [['type' => 'f32', 'value' => '4046243078']]],
            expected: [['type' => 'f32', 'value' => '4068578245']],
            line: 1680,
        );
    }

    #[Depends('testAssertReturn669')]
    public function testAssertReturn670(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_6x_via_add', 'args' => [['type' => 'f32', 'value' => '2573857750']]],
            expected: [['type' => 'f32', 'value' => '2595190497']],
            line: 1681,
        );
    }

    #[Depends('testAssertReturn670')]
    public function testAssertReturn671(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_6x_via_add', 'args' => [['type' => 'f32', 'value' => '419462401']]],
            expected: [['type' => 'f32', 'value' => '440449921']],
            line: 1682,
        );
    }

    #[Depends('testAssertReturn671')]
    public function testAssertReturn672(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_6x_via_add', 'args' => [['type' => 'f32', 'value' => '2955475482']]],
            expected: [['type' => 'f32', 'value' => '2977789734']],
            line: 1683,
        );
    }

    #[Depends('testAssertReturn672')]
    public function testAssertReturn673(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_6x_via_add', 'args' => [['type' => 'f32', 'value' => '3883931973']]],
            expected: [['type' => 'f32', 'value' => '3904906727']],
            line: 1684,
        );
    }

    #[Depends('testAssertReturn673')]
    public function testAssertReturn674(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_6x_via_add', 'args' => [['type' => 'f64', 'value' => '14137662215323058150']]],
            expected: [['type' => 'f64', 'value' => '14149352706895019994']],
            line: 1686,
        );
    }

    #[Depends('testAssertReturn674')]
    public function testAssertReturn675(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_6x_via_add', 'args' => [['type' => 'f64', 'value' => '11424134044545165748']]],
            expected: [['type' => 'f64', 'value' => '11435767596137037638']],
            line: 1687,
        );
    }

    #[Depends('testAssertReturn675')]
    public function testAssertReturn676(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_6x_via_add', 'args' => [['type' => 'f64', 'value' => '15055410132664937138']]],
            expected: [['type' => 'f64', 'value' => '15066699987142021125']],
            line: 1688,
        );
    }

    #[Depends('testAssertReturn676')]
    public function testAssertReturn677(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_6x_via_add', 'args' => [['type' => 'f64', 'value' => '7991451501228919438']]],
            expected: [['type' => 'f64', 'value' => '8003319959635773419']],
            line: 1689,
        );
    }

    #[Depends('testAssertReturn677')]
    public function testAssertReturn678(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_6x_via_add', 'args' => [['type' => 'f64', 'value' => '14886926859367497770']]],
            expected: [['type' => 'f64', 'value' => '14898679235615764511']],
            line: 1690,
        );
    }

    #[Depends('testAssertReturn678')]
    public function testModule679(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.68.wasm',
            name: null,
            line: 1695,
        );
    }

    #[Depends('testModule679')]
    public function testAssertReturn680(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_div', 'args' => [['type' => 'f32', 'value' => '3875242260'], ['type' => 'f32', 'value' => '3086869257'], ['type' => 'f32', 'value' => '3301317576']]],
            expected: [['type' => 'f32', 'value' => '3911440926']],
            line: 1703,
        );
    }

    #[Depends('testAssertReturn680')]
    public function testAssertReturn681(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_div', 'args' => [['type' => 'f32', 'value' => '485052055'], ['type' => 'f32', 'value' => '1996083391'], ['type' => 'f32', 'value' => '2276616712']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1704,
        );
    }

    #[Depends('testAssertReturn681')]
    public function testAssertReturn682(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_div', 'args' => [['type' => 'f32', 'value' => '1430470604'], ['type' => 'f32', 'value' => '186144382'], ['type' => 'f32', 'value' => '1953564780']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1705,
        );
    }

    #[Depends('testAssertReturn682')]
    public function testAssertReturn683(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_div', 'args' => [['type' => 'f32', 'value' => '3101818893'], ['type' => 'f32', 'value' => '4258133430'], ['type' => 'f32', 'value' => '2855958950']]],
            expected: [['type' => 'f32', 'value' => '2411777082']],
            line: 1706,
        );
    }

    #[Depends('testAssertReturn683')]
    public function testAssertReturn684(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_div', 'args' => [['type' => 'f32', 'value' => '1458407223'], ['type' => 'f32', 'value' => '1537931089'], ['type' => 'f32', 'value' => '4260989344']]],
            expected: [['type' => 'f32', 'value' => '2147507000']],
            line: 1707,
        );
    }

    #[Depends('testAssertReturn684')]
    public function testAssertReturn685(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_div', 'args' => [['type' => 'f64', 'value' => '6128077243319875447'], ['type' => 'f64', 'value' => '7240092044185667120'], ['type' => 'f64', 'value' => '10312472494987686942']]],
            expected: [['type' => 'f64', 'value' => '16236150182064455170']],
            line: 1709,
        );
    }

    #[Depends('testAssertReturn685')]
    public function testAssertReturn686(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_div', 'args' => [['type' => 'f64', 'value' => '17395933367696573535'], ['type' => 'f64', 'value' => '4478922858584402707'], ['type' => 'f64', 'value' => '6032094754408482817']]],
            expected: [['type' => 'f64', 'value' => '16098470347548634769']],
            line: 1710,
        );
    }

    #[Depends('testAssertReturn686')]
    public function testAssertReturn687(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_div', 'args' => [['type' => 'f64', 'value' => '13843263185226986279'], ['type' => 'f64', 'value' => '17796742619038211051'], ['type' => 'f64', 'value' => '5375701731263473827']]],
            expected: [['type' => 'f64', 'value' => '44472927']],
            line: 1711,
        );
    }

    #[Depends('testAssertReturn687')]
    public function testAssertReturn688(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_div', 'args' => [['type' => 'f64', 'value' => '17547288444310957340'], ['type' => 'f64', 'value' => '911654786857739111'], ['type' => 'f64', 'value' => '8937284546802896640']]],
            expected: [['type' => 'f64', 'value' => '18442240474082181120']],
            line: 1712,
        );
    }

    #[Depends('testAssertReturn688')]
    public function testAssertReturn689(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_div', 'args' => [['type' => 'f64', 'value' => '9835707468114203513'], ['type' => 'f64', 'value' => '1924400690116523912'], ['type' => 'f64', 'value' => '13208934041167870811']]],
            expected: [['type' => 'f64', 'value' => '3916014548332337260']],
            line: 1713,
        );
    }

    #[Depends('testAssertReturn689')]
    public function testModule690(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.69.wasm',
            name: null,
            line: 1719,
        );
    }

    #[Depends('testModule690')]
    public function testAssertReturn691(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_mul_divs', 'args' => [['type' => 'f32', 'value' => '2304917983'], ['type' => 'f32', 'value' => '301403678'], ['type' => 'f32', 'value' => '331350955'], ['type' => 'f32', 'value' => '3251297465']]],
            expected: [['type' => 'f32', 'value' => '148760966']],
            line: 1727,
        );
    }

    #[Depends('testAssertReturn691')]
    public function testAssertReturn692(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_mul_divs', 'args' => [['type' => 'f32', 'value' => '4068974897'], ['type' => 'f32', 'value' => '1276265036'], ['type' => 'f32', 'value' => '930821438'], ['type' => 'f32', 'value' => '1044692964']]],
            expected: [['type' => 'f32', 'value' => '3742862674']],
            line: 1728,
        );
    }

    #[Depends('testAssertReturn692')]
    public function testAssertReturn693(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_mul_divs', 'args' => [['type' => 'f32', 'value' => '3496980369'], ['type' => 'f32', 'value' => '3548280607'], ['type' => 'f32', 'value' => '3461305482'], ['type' => 'f32', 'value' => '3298174616']]],
            expected: [['type' => 'f32', 'value' => '1176926862']],
            line: 1729,
        );
    }

    #[Depends('testAssertReturn693')]
    public function testAssertReturn694(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_mul_divs', 'args' => [['type' => 'f32', 'value' => '4135236702'], ['type' => 'f32', 'value' => '787270424'], ['type' => 'f32', 'value' => '932959293'], ['type' => 'f32', 'value' => '1724950821']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1730,
        );
    }

    #[Depends('testAssertReturn694')]
    public function testAssertReturn695(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_mul_divs', 'args' => [['type' => 'f32', 'value' => '622783177'], ['type' => 'f32', 'value' => '2677642769'], ['type' => 'f32', 'value' => '307759154'], ['type' => 'f32', 'value' => '768171421']]],
            expected: [['type' => 'f32', 'value' => '2844661464']],
            line: 1731,
        );
    }

    #[Depends('testAssertReturn695')]
    public function testAssertReturn696(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_mul_divs', 'args' => [['type' => 'f64', 'value' => '10143060558527560466'], ['type' => 'f64', 'value' => '11745059379675007839'], ['type' => 'f64', 'value' => '16295837305232663584'], ['type' => 'f64', 'value' => '5444961058358534642']]],
            expected: [['type' => 'f64', 'value' => '13856326607560224491']],
            line: 1733,
        );
    }

    #[Depends('testAssertReturn696')]
    public function testAssertReturn697(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_mul_divs', 'args' => [['type' => 'f64', 'value' => '14349445329289351080'], ['type' => 'f64', 'value' => '468238185841254727'], ['type' => 'f64', 'value' => '15463559257629249878'], ['type' => 'f64', 'value' => '15937497686185055572']]],
            expected: [['type' => 'f64', 'value' => '18442240474082181120']],
            line: 1734,
        );
    }

    #[Depends('testAssertReturn697')]
    public function testAssertReturn698(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_mul_divs', 'args' => [['type' => 'f64', 'value' => '15220380342429201729'], ['type' => 'f64', 'value' => '14697937818549468616'], ['type' => 'f64', 'value' => '13203624158275174657'], ['type' => 'f64', 'value' => '17131104131485469546']]],
            expected: [['type' => 'f64', 'value' => '1202126128702318245']],
            line: 1735,
        );
    }

    #[Depends('testAssertReturn698')]
    public function testAssertReturn699(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_mul_divs', 'args' => [['type' => 'f64', 'value' => '14414969397981384765'], ['type' => 'f64', 'value' => '12269327994486371199'], ['type' => 'f64', 'value' => '298707625567048656'], ['type' => 'f64', 'value' => '5613107161545919917']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 1736,
        );
    }

    #[Depends('testAssertReturn699')]
    public function testAssertReturn700(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_mul_divs', 'args' => [['type' => 'f64', 'value' => '4529089342618677929'], ['type' => 'f64', 'value' => '3361245300043094097'], ['type' => 'f64', 'value' => '1815899012046749567'], ['type' => 'f64', 'value' => '15418396504351552390']]],
            expected: [['type' => 'f64', 'value' => '10619033301585441215']],
            line: 1737,
        );
    }

    #[Depends('testAssertReturn700')]
    public function testModule701(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.70.wasm',
            name: null,
            line: 1741,
        );
    }

    #[Depends('testModule701')]
    public function testAssertReturn702(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_add_divs', 'args' => [['type' => 'f32', 'value' => '1136439096'], ['type' => 'f32', 'value' => '3173274359'], ['type' => 'f32', 'value' => '4274852390']]],
            expected: [['type' => 'f32', 'value' => '2221638875']],
            line: 1749,
        );
    }

    #[Depends('testAssertReturn702')]
    public function testAssertReturn703(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_add_divs', 'args' => [['type' => 'f32', 'value' => '2690073844'], ['type' => 'f32', 'value' => '2809448479'], ['type' => 'f32', 'value' => '3608905030']]],
            expected: [['type' => 'f32', 'value' => '264862203']],
            line: 1750,
        );
    }

    #[Depends('testAssertReturn703')]
    public function testAssertReturn704(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_add_divs', 'args' => [['type' => 'f32', 'value' => '2830184964'], ['type' => 'f32', 'value' => '530019033'], ['type' => 'f32', 'value' => '3623253973']]],
            expected: [['type' => 'f32', 'value' => '272108594']],
            line: 1751,
        );
    }

    #[Depends('testAssertReturn704')]
    public function testAssertReturn705(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_add_divs', 'args' => [['type' => 'f32', 'value' => '2365787800'], ['type' => 'f32', 'value' => '245111369'], ['type' => 'f32', 'value' => '3952003433']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1752,
        );
    }

    #[Depends('testAssertReturn705')]
    public function testAssertReturn706(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_add_divs', 'args' => [['type' => 'f32', 'value' => '982471119'], ['type' => 'f32', 'value' => '1045692415'], ['type' => 'f32', 'value' => '37216954']]],
            expected: [['type' => 'f32', 'value' => '2073319791']],
            line: 1753,
        );
    }

    #[Depends('testAssertReturn706')]
    public function testAssertReturn707(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_add_divs', 'args' => [['type' => 'f64', 'value' => '15770585325769044278'], ['type' => 'f64', 'value' => '6564157675451289455'], ['type' => 'f64', 'value' => '8712254759989822359']]],
            expected: [['type' => 'f64', 'value' => '2458462832069881218']],
            line: 1755,
        );
    }

    #[Depends('testAssertReturn707')]
    public function testAssertReturn708(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_add_divs', 'args' => [['type' => 'f64', 'value' => '14069844870254671283'], ['type' => 'f64', 'value' => '4634122757084803708'], ['type' => 'f64', 'value' => '9524897388132352235']]],
            expected: [['type' => 'f64', 'value' => '9152039358940941283']],
            line: 1756,
        );
    }

    #[Depends('testAssertReturn708')]
    public function testAssertReturn709(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_add_divs', 'args' => [['type' => 'f64', 'value' => '9479648703296052622'], ['type' => 'f64', 'value' => '214573661502224386'], ['type' => 'f64', 'value' => '6877551490107761946']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 1757,
        );
    }

    #[Depends('testAssertReturn709')]
    public function testAssertReturn710(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_add_divs', 'args' => [['type' => 'f64', 'value' => '6019502660029506228'], ['type' => 'f64', 'value' => '15316513033818836241'], ['type' => 'f64', 'value' => '4039967192182502935']]],
            expected: [['type' => 'f64', 'value' => '15883525310425977300']],
            line: 1758,
        );
    }

    #[Depends('testAssertReturn710')]
    public function testAssertReturn711(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_add_divs', 'args' => [['type' => 'f64', 'value' => '10555667216821129841'], ['type' => 'f64', 'value' => '1207418919037494573'], ['type' => 'f64', 'value' => '4296330408727545598']]],
            expected: [['type' => 'f64', 'value' => '10866511466898347555']],
            line: 1759,
        );
    }

    #[Depends('testAssertReturn711')]
    public function testModule712(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.71.wasm',
            name: null,
            line: 1763,
        );
    }

    #[Depends('testModule712')]
    public function testAssertReturn713(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_sqrt_square', 'args' => [['type' => 'f32', 'value' => '2662226315']]],
            expected: [['type' => 'f32', 'value' => '514742673']],
            line: 1771,
        );
    }

    #[Depends('testAssertReturn713')]
    public function testAssertReturn714(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_sqrt_square', 'args' => [['type' => 'f32', 'value' => '2606267634']]],
            expected: [['type' => 'f32', 'value' => '458819801']],
            line: 1772,
        );
    }

    #[Depends('testAssertReturn714')]
    public function testAssertReturn715(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_sqrt_square', 'args' => [['type' => 'f32', 'value' => '2624528574']]],
            expected: [['type' => 'f32', 'value' => '477049564']],
            line: 1773,
        );
    }

    #[Depends('testAssertReturn715')]
    public function testAssertReturn716(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_sqrt_square', 'args' => [['type' => 'f32', 'value' => '347235385']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1774,
        );
    }

    #[Depends('testAssertReturn716')]
    public function testAssertReturn717(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_sqrt_square', 'args' => [['type' => 'f32', 'value' => '1978715378']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 1775,
        );
    }

    #[Depends('testAssertReturn717')]
    public function testAssertReturn718(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_sqrt_square', 'args' => [['type' => 'f64', 'value' => '2225189009770021885']]],
            expected: [['type' => 'f64', 'value' => '2225189011649283571']],
            line: 1777,
        );
    }

    #[Depends('testAssertReturn718')]
    public function testAssertReturn719(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_sqrt_square', 'args' => [['type' => 'f64', 'value' => '11517048459773840771']]],
            expected: [['type' => 'f64', 'value' => '2293676422919064961']],
            line: 1778,
        );
    }

    #[Depends('testAssertReturn719')]
    public function testAssertReturn720(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_sqrt_square', 'args' => [['type' => 'f64', 'value' => '11484764485761855006']]],
            expected: [['type' => 'f64', 'value' => '2261392448906973069']],
            line: 1779,
        );
    }

    #[Depends('testAssertReturn720')]
    public function testAssertReturn721(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_sqrt_square', 'args' => [['type' => 'f64', 'value' => '11056484744549647728']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 1780,
        );
    }

    #[Depends('testAssertReturn721')]
    public function testAssertReturn722(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_sqrt_square', 'args' => [['type' => 'f64', 'value' => '8465406758332488378']]],
            expected: [['type' => 'f64', 'value' => '9218868437227405312']],
            line: 1781,
        );
    }

    #[Depends('testAssertReturn722')]
    public function testModule723(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.72.wasm',
            name: null,
            line: 1785,
        );
    }

    #[Depends('testModule723')]
    public function testAssertReturn724(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_mul_sqrts', 'args' => [['type' => 'f32', 'value' => '24047316'], ['type' => 'f32', 'value' => '2517821717']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1793,
        );
    }

    #[Depends('testAssertReturn724')]
    public function testAssertReturn725(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_mul_sqrts', 'args' => [['type' => 'f32', 'value' => '295749258'], ['type' => 'f32', 'value' => '803416494']]],
            expected: [['type' => 'f32', 'value' => '549395357']],
            line: 1794,
        );
    }

    #[Depends('testAssertReturn725')]
    public function testAssertReturn726(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_mul_sqrts', 'args' => [['type' => 'f32', 'value' => '329708528'], ['type' => 'f32', 'value' => '1120042892']]],
            expected: [['type' => 'f32', 'value' => '724841268']],
            line: 1795,
        );
    }

    #[Depends('testAssertReturn726')]
    public function testAssertReturn727(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_mul_sqrts', 'args' => [['type' => 'f32', 'value' => '1916535951'], ['type' => 'f32', 'value' => '994115420']]],
            expected: [['type' => 'f32', 'value' => '1455324620']],
            line: 1796,
        );
    }

    #[Depends('testAssertReturn727')]
    public function testAssertReturn728(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_mul_sqrts', 'args' => [['type' => 'f32', 'value' => '598482176'], ['type' => 'f32', 'value' => '990534933']]],
            expected: [['type' => 'f32', 'value' => '794443079']],
            line: 1797,
        );
    }

    #[Depends('testAssertReturn728')]
    public function testAssertReturn729(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_mul_sqrts', 'args' => [['type' => 'f64', 'value' => '10974446854152441278'], ['type' => 'f64', 'value' => '13797896470155574122']]],
            expected: [['type' => 'f64', 'value' => 'nan:canonical']],
            line: 1799,
        );
    }

    #[Depends('testAssertReturn729')]
    public function testAssertReturn730(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_mul_sqrts', 'args' => [['type' => 'f64', 'value' => '1712959863583927241'], ['type' => 'f64', 'value' => '2792003944717853898']]],
            expected: [['type' => 'f64', 'value' => '2252469008297979510']],
            line: 1800,
        );
    }

    #[Depends('testAssertReturn730')]
    public function testAssertReturn731(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_mul_sqrts', 'args' => [['type' => 'f64', 'value' => '4208351758938831157'], ['type' => 'f64', 'value' => '497361189565243603']]],
            expected: [['type' => 'f64', 'value' => '2352856462697312748']],
            line: 1801,
        );
    }

    #[Depends('testAssertReturn731')]
    public function testAssertReturn732(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_mul_sqrts', 'args' => [['type' => 'f64', 'value' => '2976792199849816182'], ['type' => 'f64', 'value' => '2030444188042608984']]],
            expected: [['type' => 'f64', 'value' => '2503613111125550255']],
            line: 1802,
        );
    }

    #[Depends('testAssertReturn732')]
    public function testAssertReturn733(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_mul_sqrts', 'args' => [['type' => 'f64', 'value' => '4717634334691577101'], ['type' => 'f64', 'value' => '6919598687070693285']]],
            expected: [['type' => 'f64', 'value' => '5818898567902921651']],
            line: 1803,
        );
    }

    #[Depends('testAssertReturn733')]
    public function testModule734(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.73.wasm',
            name: null,
            line: 1807,
        );
    }

    #[Depends('testModule734')]
    public function testAssertReturn735(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_sqrts', 'args' => [['type' => 'f32', 'value' => '3428799709'], ['type' => 'f32', 'value' => '2733489079']]],
            expected: [['type' => 'f32', 'value' => 'nan:canonical']],
            line: 1815,
        );
    }

    #[Depends('testAssertReturn735')]
    public function testAssertReturn736(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_sqrts', 'args' => [['type' => 'f32', 'value' => '1339867611'], ['type' => 'f32', 'value' => '1296568207']]],
            expected: [['type' => 'f32', 'value' => '1086203643']],
            line: 1816,
        );
    }

    #[Depends('testAssertReturn736')]
    public function testAssertReturn737(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_sqrts', 'args' => [['type' => 'f32', 'value' => '65679161'], ['type' => 'f32', 'value' => '1196795110']]],
            expected: [['type' => 'f32', 'value' => '498959746']],
            line: 1817,
        );
    }

    #[Depends('testAssertReturn737')]
    public function testAssertReturn738(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_sqrts', 'args' => [['type' => 'f32', 'value' => '1566143010'], ['type' => 'f32', 'value' => '816694667']]],
            expected: [['type' => 'f32', 'value' => '1439333972']],
            line: 1818,
        );
    }

    #[Depends('testAssertReturn738')]
    public function testAssertReturn739(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_sqrts', 'args' => [['type' => 'f32', 'value' => '130133331'], ['type' => 'f32', 'value' => '208189588']]],
            expected: [['type' => 'f32', 'value' => '1025844032']],
            line: 1819,
        );
    }

    #[Depends('testAssertReturn739')]
    public function testAssertReturn740(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_sqrts', 'args' => [['type' => 'f64', 'value' => '10629913473787695463'], ['type' => 'f64', 'value' => '12991130264919696663']]],
            expected: [['type' => 'f64', 'value' => 'nan:canonical']],
            line: 1821,
        );
    }

    #[Depends('testAssertReturn740')]
    public function testAssertReturn741(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_sqrts', 'args' => [['type' => 'f64', 'value' => '1966780663211935584'], ['type' => 'f64', 'value' => '7043916066229883379']]],
            expected: [['type' => 'f64', 'value' => '2068364230648818889']],
            line: 1822,
        );
    }

    #[Depends('testAssertReturn741')]
    public function testAssertReturn742(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_sqrts', 'args' => [['type' => 'f64', 'value' => '6965599900716272009'], ['type' => 'f64', 'value' => '4118781927977980600']]],
            expected: [['type' => 'f64', 'value' => '6030491425828883991']],
            line: 1823,
        );
    }

    #[Depends('testAssertReturn742')]
    public function testAssertReturn743(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_sqrts', 'args' => [['type' => 'f64', 'value' => '962551478168675351'], ['type' => 'f64', 'value' => '5918292176617055751']]],
            expected: [['type' => 'f64', 'value' => '2129092583060403799']],
            line: 1824,
        );
    }

    #[Depends('testAssertReturn743')]
    public function testAssertReturn744(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_sqrts', 'args' => [['type' => 'f64', 'value' => '1056821405580891413'], ['type' => 'f64', 'value' => '8865548665903786673']]],
            expected: [['type' => 'f64', 'value' => '702724841785532050']],
            line: 1825,
        );
    }

    #[Depends('testAssertReturn744')]
    public function testModule745(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.74.wasm',
            name: null,
            line: 1829,
        );
    }

    #[Depends('testModule745')]
    public function testAssertReturn746(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_mul_sqrt_div', 'args' => [['type' => 'f32', 'value' => '3900330981'], ['type' => 'f32', 'value' => '1843416431']]],
            expected: [['type' => 'f32', 'value' => '4286578688']],
            line: 1837,
        );
    }

    #[Depends('testAssertReturn746')]
    public function testAssertReturn747(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_mul_sqrt_div', 'args' => [['type' => 'f32', 'value' => '2210946958'], ['type' => 'f32', 'value' => '256302916']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 1838,
        );
    }

    #[Depends('testAssertReturn747')]
    public function testAssertReturn748(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_mul_sqrt_div', 'args' => [['type' => 'f32', 'value' => '1312995444'], ['type' => 'f32', 'value' => '2371494']]],
            expected: [['type' => 'f32', 'value' => '1849105549']],
            line: 1839,
        );
    }

    #[Depends('testAssertReturn748')]
    public function testAssertReturn749(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_mul_sqrt_div', 'args' => [['type' => 'f32', 'value' => '3576537897'], ['type' => 'f32', 'value' => '2010442638']]],
            expected: [['type' => 'f32', 'value' => '3104219421']],
            line: 1840,
        );
    }

    #[Depends('testAssertReturn749')]
    public function testAssertReturn750(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_mul_sqrt_div', 'args' => [['type' => 'f32', 'value' => '3284697858'], ['type' => 'f32', 'value' => '1124488329']]],
            expected: [['type' => 'f32', 'value' => '3255461622']],
            line: 1841,
        );
    }

    #[Depends('testAssertReturn750')]
    public function testAssertReturn751(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_mul_sqrt_div', 'args' => [['type' => 'f64', 'value' => '7751219282814906463'], ['type' => 'f64', 'value' => '8023732701704228537']]],
            expected: [['type' => 'f64', 'value' => '9218868437227405312']],
            line: 1843,
        );
    }

    #[Depends('testAssertReturn751')]
    public function testAssertReturn752(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_mul_sqrt_div', 'args' => [['type' => 'f64', 'value' => '10108528314069607083'], ['type' => 'f64', 'value' => '1595930056995453707']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 1844,
        );
    }

    #[Depends('testAssertReturn752')]
    public function testAssertReturn753(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_mul_sqrt_div', 'args' => [['type' => 'f64', 'value' => '2695209648295623224'], ['type' => 'f64', 'value' => '7133480874314061811']]],
            expected: [['type' => 'f64', 'value' => '1432338140829931582']],
            line: 1845,
        );
    }

    #[Depends('testAssertReturn753')]
    public function testAssertReturn754(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_mul_sqrt_div', 'args' => [['type' => 'f64', 'value' => '15416524255949334213'], ['type' => 'f64', 'value' => '2434442666062773630']]],
            expected: [['type' => 'f64', 'value' => '16502590179898118478']],
            line: 1846,
        );
    }

    #[Depends('testAssertReturn754')]
    public function testAssertReturn755(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_mul_sqrt_div', 'args' => [['type' => 'f64', 'value' => '5076901024782455083'], ['type' => 'f64', 'value' => '8399438310541178654']]],
            expected: [['type' => 'f64', 'value' => '3180744754328846996']],
            line: 1847,
        );
    }

    #[Depends('testAssertReturn755')]
    public function testModule756(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.75.wasm',
            name: null,
            line: 1852,
        );
    }

    #[Depends('testModule756')]
    public function testAssertReturn757(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_flush_intermediate_subnormal', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '872415232'], ['type' => 'f32', 'value' => '1258291200']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 1860,
        );
    }

    #[Depends('testAssertReturn757')]
    public function testAssertReturn758(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_flush_intermediate_subnormal', 'args' => [['type' => 'f64', 'value' => '4503599627370496'], ['type' => 'f64', 'value' => '4372995238176751616'], ['type' => 'f64', 'value' => '4841369599423283200']]],
            expected: [['type' => 'f64', 'value' => '4503599627370496']],
            line: 1861,
        );
    }

    #[Depends('testAssertReturn758')]
    public function testModule759(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.76.wasm',
            name: null,
            line: 1866,
        );
    }

    #[Depends('testModule759')]
    public function testAssertReturn760(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.recoding_eq', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1077936128']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1889,
        );
    }

    #[Depends('testAssertReturn760')]
    public function testAssertReturn761(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.recoding_le', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1077936128']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1890,
        );
    }

    #[Depends('testAssertReturn761')]
    public function testAssertReturn762(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.recoding_lt', 'args' => [['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '1077936128']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1891,
        );
    }

    #[Depends('testAssertReturn762')]
    public function testAssertReturn763(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.recoding_eq', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1893,
        );
    }

    #[Depends('testAssertReturn763')]
    public function testAssertReturn764(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.recoding_le', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1894,
        );
    }

    #[Depends('testAssertReturn764')]
    public function testAssertReturn765(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.recoding_lt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1895,
        );
    }

    #[Depends('testAssertReturn765')]
    public function testAssertReturn766(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.recoding_eq', 'args' => [['type' => 'f64', 'value' => '18442240474082181120'], ['type' => 'f64', 'value' => '4613937818241073152']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1897,
        );
    }

    #[Depends('testAssertReturn766')]
    public function testAssertReturn767(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.recoding_le', 'args' => [['type' => 'f64', 'value' => '18442240474082181120'], ['type' => 'f64', 'value' => '4613937818241073152']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1898,
        );
    }

    #[Depends('testAssertReturn767')]
    public function testAssertReturn768(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.recoding_lt', 'args' => [['type' => 'f64', 'value' => '18442240474082181120'], ['type' => 'f64', 'value' => '4613937818241073152']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1899,
        );
    }

    #[Depends('testAssertReturn768')]
    public function testAssertReturn769(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.recoding_eq', 'args' => [['type' => 'f64', 'value' => '0'], ['type' => 'f64', 'value' => '4607182418800017408']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1901,
        );
    }

    #[Depends('testAssertReturn769')]
    public function testAssertReturn770(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.recoding_le', 'args' => [['type' => 'f64', 'value' => '0'], ['type' => 'f64', 'value' => '4607182418800017408']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1902,
        );
    }

    #[Depends('testAssertReturn770')]
    public function testAssertReturn771(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.recoding_lt', 'args' => [['type' => 'f64', 'value' => '0'], ['type' => 'f64', 'value' => '4607182418800017408']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1903,
        );
    }

    #[Depends('testAssertReturn771')]
    public function testAssertReturn772(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'recoding_demote', 'args' => [['type' => 'f64', 'value' => '4014054135371399168'], ['type' => 'f32', 'value' => '1150853120']]],
            expected: [['type' => 'f32', 'value' => '46548238']],
            line: 1905,
        );
    }

    #[Depends('testAssertReturn772')]
    public function testModule773(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.77.wasm',
            name: null,
            line: 1910,
        );
    }

    #[Depends('testModule773')]
    public function testAssertReturn774(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_extended_precision_div', 'args' => [['type' => 'f32', 'value' => '1077936128'], ['type' => 'f32', 'value' => '1088421888'], ['type' => 'f32', 'value' => '1054567863']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1918,
        );
    }

    #[Depends('testAssertReturn774')]
    public function testAssertReturn775(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_extended_precision_div', 'args' => [['type' => 'f64', 'value' => '4613937818241073152'], ['type' => 'f64', 'value' => '4619567317775286272'], ['type' => 'f64', 'value' => '4601392076421969627']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1919,
        );
    }

    #[Depends('testAssertReturn775')]
    public function testModule776(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.78.wasm',
            name: null,
            line: 1926,
        );
    }

    #[Depends('testModule776')]
    public function testAssertReturn777(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_distribute_exact', 'args' => [['type' => 'f32', 'value' => '2147483648']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 1934,
        );
    }

    #[Depends('testAssertReturn777')]
    public function testAssertReturn778(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_distribute_exact', 'args' => [['type' => 'f64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 1935,
        );
    }

    #[Depends('testAssertReturn778')]
    public function testModule779(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.79.wasm',
            name: null,
            line: 1940,
        );
    }

    #[Depends('testModule779')]
    public function testAssertReturn780(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sqrt', 'args' => [['type' => 'f32', 'value' => '1073741824']]],
            expected: [['type' => 'f32', 'value' => '1068827891']],
            line: 1972,
        );
    }

    #[Depends('testAssertReturn780')]
    public function testAssertReturn781(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.xkcd_sqrt_2', 'args' => [['type' => 'f32', 'value' => '1077936128'], ['type' => 'f32', 'value' => '1084227584'], ['type' => 'f32', 'value' => '1078530011'], ['type' => 'f32', 'value' => '1088421888']]],
            expected: [['type' => 'f32', 'value' => '1068827946']],
            line: 1973,
        );
    }

    #[Depends('testAssertReturn781')]
    public function testAssertReturn782(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sqrt', 'args' => [['type' => 'f32', 'value' => '1077936128']]],
            expected: [['type' => 'f32', 'value' => '1071494103']],
            line: 1974,
        );
    }

    #[Depends('testAssertReturn782')]
    public function testAssertReturn783(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.xkcd_sqrt_3', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '1076754516'], ['type' => 'f32', 'value' => '1078530011']]],
            expected: [['type' => 'f32', 'value' => '1071481194']],
            line: 1975,
        );
    }

    #[Depends('testAssertReturn783')]
    public function testAssertReturn784(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sqrt', 'args' => [['type' => 'f32', 'value' => '1084227584']]],
            expected: [['type' => 'f32', 'value' => '1074731965']],
            line: 1976,
        );
    }

    #[Depends('testAssertReturn784')]
    public function testAssertReturn785(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.xkcd_sqrt_5', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '1076754516'], ['type' => 'f32', 'value' => '1077936128']]],
            expected: [['type' => 'f32', 'value' => '1074730668']],
            line: 1977,
        );
    }

    #[Depends('testAssertReturn785')]
    public function testAssertReturn786(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.xkcd_better_sqrt_5', 'args' => [['type' => 'f32', 'value' => '1095761920'], ['type' => 'f32', 'value' => '1082130432'], ['type' => 'f32', 'value' => '1078530011'], ['type' => 'f32', 'value' => '1103101952']]],
            expected: [['type' => 'f32', 'value' => '1074731965']],
            line: 1978,
        );
    }

    #[Depends('testAssertReturn786')]
    public function testAssertReturn787(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '4611686018427387904']]],
            expected: [['type' => 'f64', 'value' => '4609047870845172685']],
            line: 1980,
        );
    }

    #[Depends('testAssertReturn787')]
    public function testAssertReturn788(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.xkcd_sqrt_2', 'args' => [['type' => 'f64', 'value' => '4613937818241073152'], ['type' => 'f64', 'value' => '4617315517961601024'], ['type' => 'f64', 'value' => '4614256656552045848'], ['type' => 'f64', 'value' => '4619567317775286272']]],
            expected: [['type' => 'f64', 'value' => '4609047900099118431']],
            line: 1981,
        );
    }

    #[Depends('testAssertReturn788')]
    public function testAssertReturn789(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '4613937818241073152']]],
            expected: [['type' => 'f64', 'value' => '4610479282544200874']],
            line: 1982,
        );
    }

    #[Depends('testAssertReturn789')]
    public function testAssertReturn790(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.xkcd_sqrt_3', 'args' => [['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f64', 'value' => '4613303445314885481'], ['type' => 'f64', 'value' => '4614256656552045848']]],
            expected: [['type' => 'f64', 'value' => '4610472352185749397']],
            line: 1983,
        );
    }

    #[Depends('testAssertReturn790')]
    public function testAssertReturn791(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '4617315517961601024']]],
            expected: [['type' => 'f64', 'value' => '4612217596255138984']],
            line: 1984,
        );
    }

    #[Depends('testAssertReturn791')]
    public function testAssertReturn792(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.xkcd_sqrt_5', 'args' => [['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f64', 'value' => '4613303445314885481'], ['type' => 'f64', 'value' => '4613937818241073152']]],
            expected: [['type' => 'f64', 'value' => '4612216900234722254']],
            line: 1985,
        );
    }

    #[Depends('testAssertReturn792')]
    public function testAssertReturn793(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.xkcd_better_sqrt_5', 'args' => [['type' => 'f64', 'value' => '4623507967449235456'], ['type' => 'f64', 'value' => '4616189618054758400'], ['type' => 'f64', 'value' => '4614256656552045848'], ['type' => 'f64', 'value' => '4627448617123184640']]],
            expected: [['type' => 'f64', 'value' => '4612217595876713891']],
            line: 1986,
        );
    }

    #[Depends('testAssertReturn793')]
    public function testModule794(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.80.wasm',
            name: null,
            line: 1991,
        );
    }

    #[Depends('testModule794')]
    public function testAssertReturn795(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.compute_radix', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1073741824']],
            line: 2069,
        );
    }

    #[Depends('testAssertReturn795')]
    public function testAssertReturn796(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.compute_radix', 'args' => [['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'f64', 'value' => '4607182418800017408']]],
            expected: [['type' => 'f64', 'value' => '4611686018427387904']],
            line: 2070,
        );
    }

    #[Depends('testAssertReturn796')]
    public function testModule797(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.81.wasm',
            name: null,
            line: 2075,
        );
    }

    #[Depends('testModule797')]
    public function testAssertReturn798(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_sub1_mul_add', 'args' => [['type' => 'f32', 'value' => '796917760'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2083,
        );
    }

    #[Depends('testAssertReturn798')]
    public function testAssertReturn799(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_sub1_mul_add', 'args' => [['type' => 'f64', 'value' => '4318952042648305664'], ['type' => 'f64', 'value' => '4607182418800017408']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 2084,
        );
    }

    #[Depends('testAssertReturn799')]
    public function testModule800(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.82.wasm',
            name: null,
            line: 2089,
        );
    }

    #[Depends('testModule800')]
    public function testAssertReturn801(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_add_le_monotonicity', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2103,
        );
    }

    #[Depends('testAssertReturn801')]
    public function testAssertReturn802(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_add_le_monotonicity', 'args' => [['type' => 'f32', 'value' => '2139095040'], ['type' => 'f32', 'value' => '4286578688'], ['type' => 'f32', 'value' => '2139095040']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2104,
        );
    }

    #[Depends('testAssertReturn802')]
    public function testAssertReturn803(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_add_le_monotonicity', 'args' => [['type' => 'f64', 'value' => '0'], ['type' => 'f64', 'value' => '0'], ['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2105,
        );
    }

    #[Depends('testAssertReturn803')]
    public function testAssertReturn804(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_add_le_monotonicity', 'args' => [['type' => 'f64', 'value' => '9218868437227405312'], ['type' => 'f64', 'value' => '18442240474082181120'], ['type' => 'f64', 'value' => '9218868437227405312']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2106,
        );
    }

    #[Depends('testAssertReturn804')]
    public function testModule805(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.83.wasm',
            name: null,
            line: 2110,
        );
    }

    #[Depends('testModule805')]
    public function testAssertReturn806(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.not_lt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2136,
        );
    }

    #[Depends('testAssertReturn806')]
    public function testAssertReturn807(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.not_le', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2137,
        );
    }

    #[Depends('testAssertReturn807')]
    public function testAssertReturn808(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.not_gt', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2138,
        );
    }

    #[Depends('testAssertReturn808')]
    public function testAssertReturn809(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.not_ge', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2139,
        );
    }

    #[Depends('testAssertReturn809')]
    public function testAssertReturn810(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.not_lt', 'args' => [['type' => 'f64', 'value' => '9221120237041090560'], ['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2140,
        );
    }

    #[Depends('testAssertReturn810')]
    public function testAssertReturn811(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.not_le', 'args' => [['type' => 'f64', 'value' => '9221120237041090560'], ['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2141,
        );
    }

    #[Depends('testAssertReturn811')]
    public function testAssertReturn812(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.not_gt', 'args' => [['type' => 'f64', 'value' => '9221120237041090560'], ['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2142,
        );
    }

    #[Depends('testAssertReturn812')]
    public function testAssertReturn813(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.not_ge', 'args' => [['type' => 'f64', 'value' => '9221120237041090560'], ['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 2143,
        );
    }

    #[Depends('testAssertReturn813')]
    public function testModule814(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.84.wasm',
            name: null,
            line: 2149,
        );
    }

    #[Depends('testModule814')]
    public function testAssertReturn815(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.epsilon', 'args' => []],
            expected: [['type' => 'f32', 'value' => '3019898880']],
            line: 2157,
        );
    }

    #[Depends('testAssertReturn815')]
    public function testAssertReturn816(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.epsilon', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4372995238176751616']],
            line: 2158,
        );
    }

    #[Depends('testAssertReturn816')]
    public function testModule817(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.85.wasm',
            name: null,
            line: 2164,
        );
    }

    #[Depends('testModule817')]
    public function testAssertReturn818(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.epsilon', 'args' => []],
            expected: [['type' => 'f32', 'value' => '872415232']],
            line: 2212,
        );
    }

    #[Depends('testAssertReturn818')]
    public function testAssertReturn819(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.epsilon', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4372995238176751616']],
            line: 2213,
        );
    }

    #[Depends('testAssertReturn819')]
    public function testModule820(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.86.wasm',
            name: null,
            line: 2218,
        );
    }

    #[Depends('testModule820')]
    public function testAssertReturn821(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_trichotomy_lt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2238,
        );
    }

    #[Depends('testAssertReturn821')]
    public function testAssertReturn822(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_trichotomy_le', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2239,
        );
    }

    #[Depends('testAssertReturn822')]
    public function testAssertReturn823(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_trichotomy_gt', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2240,
        );
    }

    #[Depends('testAssertReturn823')]
    public function testAssertReturn824(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_trichotomy_ge', 'args' => [['type' => 'f32', 'value' => '0'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2241,
        );
    }

    #[Depends('testAssertReturn824')]
    public function testAssertReturn825(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_trichotomy_lt', 'args' => [['type' => 'f64', 'value' => '0'], ['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2242,
        );
    }

    #[Depends('testAssertReturn825')]
    public function testAssertReturn826(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_trichotomy_le', 'args' => [['type' => 'f64', 'value' => '0'], ['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2243,
        );
    }

    #[Depends('testAssertReturn826')]
    public function testAssertReturn827(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_trichotomy_gt', 'args' => [['type' => 'f64', 'value' => '0'], ['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2244,
        );
    }

    #[Depends('testAssertReturn827')]
    public function testAssertReturn828(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_trichotomy_ge', 'args' => [['type' => 'f64', 'value' => '0'], ['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2245,
        );
    }

    #[Depends('testAssertReturn828')]
    public function testModule829(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.87.wasm',
            name: null,
            line: 2250,
        );
    }

    #[Depends('testModule829')]
    public function testAssertReturn830(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.arithmetic_nan_bitpattern', 'args' => [['type' => 'i32', 'value' => '2139107856'], ['type' => 'i32', 'value' => '2139107856']]],
            expected: [['type' => 'i32', 'value' => '2143289344']],
            line: 2329,
        );
    }

    #[Depends('testAssertReturn830')]
    public function testAssertReturn831(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.canonical_nan_bitpattern', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2143289344']],
            line: 2330,
        );
    }

    #[Depends('testAssertReturn831')]
    public function testAssertReturn832(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.canonical_nan_bitpattern', 'args' => [['type' => 'i32', 'value' => '2143289344'], ['type' => 'i32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '2143289344']],
            line: 2331,
        );
    }

    #[Depends('testAssertReturn832')]
    public function testAssertReturn833(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.canonical_nan_bitpattern', 'args' => [['type' => 'i32', 'value' => '4290772992'], ['type' => 'i32', 'value' => '2143289344']]],
            expected: [['type' => 'i32', 'value' => '2143289344']],
            line: 2332,
        );
    }

    #[Depends('testAssertReturn833')]
    public function testAssertReturn834(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.canonical_nan_bitpattern', 'args' => [['type' => 'i32', 'value' => '2143289344'], ['type' => 'i32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '2143289344']],
            line: 2333,
        );
    }

    #[Depends('testAssertReturn834')]
    public function testAssertReturn835(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.canonical_nan_bitpattern', 'args' => [['type' => 'i32', 'value' => '4290772992'], ['type' => 'i32', 'value' => '4290772992']]],
            expected: [['type' => 'i32', 'value' => '2143289344']],
            line: 2334,
        );
    }

    #[Depends('testAssertReturn835')]
    public function testAssertReturn836(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.nonarithmetic_nan_bitpattern', 'args' => [['type' => 'i32', 'value' => '2143302160']]],
            expected: [['type' => 'i32', 'value' => '4290785808']],
            line: 2335,
        );
    }

    #[Depends('testAssertReturn836')]
    public function testAssertReturn837(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.nonarithmetic_nan_bitpattern', 'args' => [['type' => 'i32', 'value' => '4290785808']]],
            expected: [['type' => 'i32', 'value' => '2143302160']],
            line: 2336,
        );
    }

    #[Depends('testAssertReturn837')]
    public function testAssertReturn838(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.nonarithmetic_nan_bitpattern', 'args' => [['type' => 'i32', 'value' => '2139107856']]],
            expected: [['type' => 'i32', 'value' => '4286591504']],
            line: 2337,
        );
    }

    #[Depends('testAssertReturn838')]
    public function testAssertReturn839(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.nonarithmetic_nan_bitpattern', 'args' => [['type' => 'i32', 'value' => '4286591504']]],
            expected: [['type' => 'i32', 'value' => '2139107856']],
            line: 2338,
        );
    }

    #[Depends('testAssertReturn839')]
    public function testAssertReturn840(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.arithmetic_nan_bitpattern', 'args' => [['type' => 'i64', 'value' => '9218868437227418128'], ['type' => 'i64', 'value' => '9218868437227418128']]],
            expected: [['type' => 'i64', 'value' => '9221120237041090560']],
            line: 2339,
        );
    }

    #[Depends('testAssertReturn840')]
    public function testAssertReturn841(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.canonical_nan_bitpattern', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '9221120237041090560']],
            line: 2340,
        );
    }

    #[Depends('testAssertReturn841')]
    public function testAssertReturn842(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.canonical_nan_bitpattern', 'args' => [['type' => 'i64', 'value' => '9221120237041090560'], ['type' => 'i64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'i64', 'value' => '9221120237041090560']],
            line: 2341,
        );
    }

    #[Depends('testAssertReturn842')]
    public function testAssertReturn843(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.canonical_nan_bitpattern', 'args' => [['type' => 'i64', 'value' => '18444492273895866368'], ['type' => 'i64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'i64', 'value' => '9221120237041090560']],
            line: 2342,
        );
    }

    #[Depends('testAssertReturn843')]
    public function testAssertReturn844(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.canonical_nan_bitpattern', 'args' => [['type' => 'i64', 'value' => '9221120237041090560'], ['type' => 'i64', 'value' => '18444492273895866368']]],
            expected: [['type' => 'i64', 'value' => '9221120237041090560']],
            line: 2343,
        );
    }

    #[Depends('testAssertReturn844')]
    public function testAssertReturn845(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.canonical_nan_bitpattern', 'args' => [['type' => 'i64', 'value' => '18444492273895866368'], ['type' => 'i64', 'value' => '18444492273895866368']]],
            expected: [['type' => 'i64', 'value' => '9221120237041090560']],
            line: 2344,
        );
    }

    #[Depends('testAssertReturn845')]
    public function testAssertReturn846(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.nonarithmetic_nan_bitpattern', 'args' => [['type' => 'i64', 'value' => '9221120237041103376']]],
            expected: [['type' => 'i64', 'value' => '18444492273895879184']],
            line: 2345,
        );
    }

    #[Depends('testAssertReturn846')]
    public function testAssertReturn847(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.nonarithmetic_nan_bitpattern', 'args' => [['type' => 'i64', 'value' => '18444492273895879184']]],
            expected: [['type' => 'i64', 'value' => '9221120237041103376']],
            line: 2346,
        );
    }

    #[Depends('testAssertReturn847')]
    public function testAssertReturn848(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.nonarithmetic_nan_bitpattern', 'args' => [['type' => 'i64', 'value' => '9218868437227418128']]],
            expected: [['type' => 'i64', 'value' => '18442240474082193936']],
            line: 2347,
        );
    }

    #[Depends('testAssertReturn848')]
    public function testAssertReturn849(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.nonarithmetic_nan_bitpattern', 'args' => [['type' => 'i64', 'value' => '18442240474082193936']]],
            expected: [['type' => 'i64', 'value' => '9218868437227418128']],
            line: 2348,
        );
    }

    #[Depends('testAssertReturn849')]
    public function testAssertReturn850(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_sub_zero', 'args' => [['type' => 'i32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '2143289344']],
            line: 2349,
        );
    }

    #[Depends('testAssertReturn850')]
    public function testAssertReturn851(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_neg0_sub', 'args' => [['type' => 'i32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '2143289344']],
            line: 2350,
        );
    }

    #[Depends('testAssertReturn851')]
    public function testAssertReturn852(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_mul_one', 'args' => [['type' => 'i32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '2143289344']],
            line: 2351,
        );
    }

    #[Depends('testAssertReturn852')]
    public function testAssertReturn853(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_neg1_mul', 'args' => [['type' => 'i32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '2143289344']],
            line: 2352,
        );
    }

    #[Depends('testAssertReturn853')]
    public function testAssertReturn854(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_one', 'args' => [['type' => 'i32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '2143289344']],
            line: 2353,
        );
    }

    #[Depends('testAssertReturn854')]
    public function testAssertReturn855(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_div_neg1', 'args' => [['type' => 'i32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '2143289344']],
            line: 2354,
        );
    }

    #[Depends('testAssertReturn855')]
    public function testAssertReturn856(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_sub_zero', 'args' => [['type' => 'i64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'i64', 'value' => '9221120237041090560']],
            line: 2355,
        );
    }

    #[Depends('testAssertReturn856')]
    public function testAssertReturn857(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_neg0_sub', 'args' => [['type' => 'i64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'i64', 'value' => '9221120237041090560']],
            line: 2356,
        );
    }

    #[Depends('testAssertReturn857')]
    public function testAssertReturn858(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_mul_one', 'args' => [['type' => 'i64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'i64', 'value' => '9221120237041090560']],
            line: 2357,
        );
    }

    #[Depends('testAssertReturn858')]
    public function testAssertReturn859(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_neg1_mul', 'args' => [['type' => 'i64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'i64', 'value' => '9221120237041090560']],
            line: 2358,
        );
    }

    #[Depends('testAssertReturn859')]
    public function testAssertReturn860(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_one', 'args' => [['type' => 'i64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'i64', 'value' => '9221120237041090560']],
            line: 2359,
        );
    }

    #[Depends('testAssertReturn860')]
    public function testAssertReturn861(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_div_neg1', 'args' => [['type' => 'i64', 'value' => '9219994337134247936']]],
            expected: [['type' => 'i64', 'value' => '9221120237041090560']],
            line: 2360,
        );
    }

    #[Depends('testAssertReturn861')]
    public function testAssertReturn862(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'no_fold_promote_demote', 'args' => [['type' => 'i32', 'value' => '2141192192']]],
            expected: [['type' => 'i32', 'value' => '2143289344']],
            line: 2361,
        );
    }

    #[Depends('testAssertReturn862')]
    public function testModule863(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.88.wasm',
            name: null,
            line: 2366,
        );
    }

    #[Depends('testModule863')]
    public function testAssertReturn864(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'dot_product_example', 'args' => [['type' => 'f64', 'value' => '4719355144821538816'], ['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'f64', 'value' => '13830554455654793216'], ['type' => 'f64', 'value' => '4725141118604279808'], ['type' => 'f64', 'value' => '4720637518976909312'], ['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'f64', 'value' => '13830554455654793216'], ['type' => 'f64', 'value' => '13938223582048944128']]],
            expected: [['type' => 'f64', 'value' => '4611686018427387904']],
            line: 2389,
        );
    }

    #[Depends('testAssertReturn864')]
    public function testAssertReturn865(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'with_binary_sum_collapse', 'args' => [['type' => 'f64', 'value' => '4719355144821538816'], ['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'f64', 'value' => '13830554455654793216'], ['type' => 'f64', 'value' => '4725141118604279808'], ['type' => 'f64', 'value' => '4720637518976909312'], ['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'f64', 'value' => '13830554455654793216'], ['type' => 'f64', 'value' => '13938223582048944128']]],
            expected: [['type' => 'f64', 'value' => '4611686018427387904']],
            line: 2393,
        );
    }

    #[Depends('testAssertReturn865')]
    public function testModule866(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.89.wasm',
            name: null,
            line: 2400,
        );
    }

    #[Depends('testModule866')]
    public function testAssertReturn867(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.contract2fma', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2411,
        );
    }

    #[Depends('testAssertReturn867')]
    public function testAssertReturn868(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.contract2fma', 'args' => [['type' => 'f32', 'value' => '1066192077'], ['type' => 'f32', 'value' => '1066192077']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2412,
        );
    }

    #[Depends('testAssertReturn868')]
    public function testAssertReturn869(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.contract2fma', 'args' => [['type' => 'f32', 'value' => '1067030937'], ['type' => 'f32', 'value' => '1067030937']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 2413,
        );
    }

    #[Depends('testAssertReturn869')]
    public function testAssertReturn870(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.contract2fma', 'args' => [['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'f64', 'value' => '4607182418800017408']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 2414,
        );
    }

    #[Depends('testAssertReturn870')]
    public function testAssertReturn871(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.contract2fma', 'args' => [['type' => 'f64', 'value' => '4607632778762754458'], ['type' => 'f64', 'value' => '4607632778762754458']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 2415,
        );
    }

    #[Depends('testAssertReturn871')]
    public function testAssertReturn872(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.contract2fma', 'args' => [['type' => 'f64', 'value' => '4608083138725491507'], ['type' => 'f64', 'value' => '4608083138725491507']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 2416,
        );
    }

    #[Depends('testAssertReturn872')]
    public function testModule873(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.90.wasm',
            name: null,
            line: 2421,
        );
    }

    #[Depends('testModule873')]
    public function testAssertReturn874(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.division_by_small_number', 'args' => [['type' => 'f32', 'value' => '1289068416'], ['type' => 'f32', 'value' => '1203982336'], ['type' => 'f32', 'value' => '980151802']]],
            expected: [['type' => 'f32', 'value' => '1230570368']],
            line: 2430,
        );
    }

    #[Depends('testAssertReturn874')]
    public function testAssertReturn875(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.division_by_small_number', 'args' => [['type' => 'f64', 'value' => '4727288602252279808'], ['type' => 'f64', 'value' => '4681608360884174848'], ['type' => 'f64', 'value' => '4561440258104740754']]],
            expected: [['type' => 'f64', 'value' => '4695882709507797376']],
            line: 2431,
        );
    }

    #[Depends('testAssertReturn875')]
    public function testModule876(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.91.wasm',
            name: null,
            line: 2436,
        );
    }

    #[Depends('testModule876')]
    public function testAssertReturn877(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.golden_ratio', 'args' => [['type' => 'f32', 'value' => '1056964608'], ['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1084227584']]],
            expected: [['type' => 'f32', 'value' => '1070537661']],
            line: 2443,
        );
    }

    #[Depends('testAssertReturn877')]
    public function testAssertReturn878(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.golden_ratio', 'args' => [['type' => 'f64', 'value' => '4602678819172646912'], ['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'f64', 'value' => '4617315517961601024']]],
            expected: [['type' => 'f64', 'value' => '4609965796441453736']],
            line: 2444,
        );
    }

    #[Depends('testAssertReturn878')]
    public function testModule879(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.92.wasm',
            name: null,
            line: 2449,
        );
    }

    #[Depends('testModule879')]
    public function testAssertReturn880(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.silver_means', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 2462,
        );
    }

    #[Depends('testAssertReturn880')]
    public function testAssertReturn881(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.silver_means', 'args' => [['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1070537661']],
            line: 2463,
        );
    }

    #[Depends('testAssertReturn881')]
    public function testAssertReturn882(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.silver_means', 'args' => [['type' => 'f32', 'value' => '1073741824']]],
            expected: [['type' => 'f32', 'value' => '1075479162']],
            line: 2464,
        );
    }

    #[Depends('testAssertReturn882')]
    public function testAssertReturn883(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.silver_means', 'args' => [['type' => 'f32', 'value' => '1077936128']]],
            expected: [['type' => 'f32', 'value' => '1079206061']],
            line: 2465,
        );
    }

    #[Depends('testAssertReturn883')]
    public function testAssertReturn884(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.silver_means', 'args' => [['type' => 'f32', 'value' => '1082130432']]],
            expected: [['type' => 'f32', 'value' => '1082625502']],
            line: 2466,
        );
    }

    #[Depends('testAssertReturn884')]
    public function testAssertReturn885(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.silver_means', 'args' => [['type' => 'f32', 'value' => '1084227584']]],
            expected: [['type' => 'f32', 'value' => '1084631458']],
            line: 2467,
        );
    }

    #[Depends('testAssertReturn885')]
    public function testAssertReturn886(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.silver_means', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 2468,
        );
    }

    #[Depends('testAssertReturn886')]
    public function testAssertReturn887(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.silver_means', 'args' => [['type' => 'f64', 'value' => '4607182418800017408']]],
            expected: [['type' => 'f64', 'value' => '4609965796441453736']],
            line: 2469,
        );
    }

    #[Depends('testAssertReturn887')]
    public function testAssertReturn888(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.silver_means', 'args' => [['type' => 'f64', 'value' => '4611686018427387904']]],
            expected: [['type' => 'f64', 'value' => '4612618744449965542']],
            line: 2470,
        );
    }

    #[Depends('testAssertReturn888')]
    public function testAssertReturn889(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.silver_means', 'args' => [['type' => 'f64', 'value' => '4613937818241073152']]],
            expected: [['type' => 'f64', 'value' => '4614619608365706490']],
            line: 2471,
        );
    }

    #[Depends('testAssertReturn889')]
    public function testAssertReturn890(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.silver_means', 'args' => [['type' => 'f64', 'value' => '4616189618054758400']]],
            expected: [['type' => 'f64', 'value' => '4616455406968633940']],
            line: 2472,
        );
    }

    #[Depends('testAssertReturn890')]
    public function testAssertReturn891(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.silver_means', 'args' => [['type' => 'f64', 'value' => '4617315517961601024']]],
            expected: [['type' => 'f64', 'value' => '4617532346471836922']],
            line: 2473,
        );
    }

    #[Depends('testAssertReturn891')]
    public function testModule892(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.93.wasm',
            name: null,
            line: 2478,
        );
    }

    #[Depends('testModule892')]
    public function testAssertReturn893(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'point_four', 'args' => [['type' => 'f64', 'value' => '4616189618054758400'], ['type' => 'f64', 'value' => '4621819117588971520']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 2483,
        );
    }

    #[Depends('testAssertReturn893')]
    public function testModule894(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.94.wasm',
            name: null,
            line: 2488,
        );
    }

    #[Depends('testModule894')]
    public function testAssertReturn895(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'tau', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'f64', 'value' => '4618760256179416340']],
            line: 2553,
        );
    }

    #[Depends('testAssertReturn895')]
    public function testAssertReturn896(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'tau', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'f64', 'value' => '4618760256179416344']],
            line: 2554,
        );
    }

    #[Depends('testAssertReturn896')]
    public function testModule897(): void
    {
        $this->runModuleCommand(
            filename: 'float_exprs.95.wasm',
            name: null,
            line: 2558,
        );
    }

    #[Depends('testModule897')]
    public function testAssertReturn898(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.no_fold_conditional_inc', 'args' => [['type' => 'f32', 'value' => '2147483648'], ['type' => 'f32', 'value' => '3212836864']]],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 2569,
        );
    }

    #[Depends('testAssertReturn898')]
    public function testAssertReturn899(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.no_fold_conditional_inc', 'args' => [['type' => 'f64', 'value' => '9223372036854775808'], ['type' => 'f64', 'value' => '13830554455654793216']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 2570,
        );
    }
}
