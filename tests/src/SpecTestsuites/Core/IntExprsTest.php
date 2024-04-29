<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class IntExprsTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'int_exprs.0.wasm',
            name: null,
            line: 6,
        );
    }

    #[Depends('testModule0')]
    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.no_fold_cmp_s_offset', 'args' => [['type' => 'i32', 'value' => '2147483647'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 18,
        );
    }

    #[Depends('testAssertReturn1')]
    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.no_fold_cmp_u_offset', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 19,
        );
    }

    #[Depends('testAssertReturn2')]
    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.no_fold_cmp_s_offset', 'args' => [['type' => 'i64', 'value' => '9223372036854775807'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 20,
        );
    }

    #[Depends('testAssertReturn3')]
    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.no_fold_cmp_u_offset', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 21,
        );
    }

    #[Depends('testAssertReturn4')]
    public function testModule5(): void
    {
        $this->runModuleCommand(
            filename: 'int_exprs.1.wasm',
            name: null,
            line: 25,
        );
    }

    #[Depends('testModule5')]
    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.no_fold_wrap_extend_s', 'args' => [['type' => 'i64', 'value' => '4538991236898928']]],
            expected: [['type' => 'i64', 'value' => '1079009392']],
            line: 30,
        );
    }

    #[Depends('testAssertReturn6')]
    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.no_fold_wrap_extend_s', 'args' => [['type' => 'i64', 'value' => '45230338458316960']]],
            expected: [['type' => 'i64', 'value' => '18446744072918986912']],
            line: 31,
        );
    }

    #[Depends('testAssertReturn7')]
    public function testModule8(): void
    {
        $this->runModuleCommand(
            filename: 'int_exprs.2.wasm',
            name: null,
            line: 35,
        );
    }

    #[Depends('testModule8')]
    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.no_fold_wrap_extend_u', 'args' => [['type' => 'i64', 'value' => '4538991236898928']]],
            expected: [['type' => 'i64', 'value' => '1079009392']],
            line: 40,
        );
    }

    #[Depends('testAssertReturn9')]
    public function testModule10(): void
    {
        $this->runModuleCommand(
            filename: 'int_exprs.3.wasm',
            name: null,
            line: 44,
        );
    }

    #[Depends('testModule10')]
    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.no_fold_shl_shr_s', 'args' => [['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 56,
        );
    }

    #[Depends('testAssertReturn11')]
    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.no_fold_shl_shr_u', 'args' => [['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 57,
        );
    }

    #[Depends('testAssertReturn12')]
    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.no_fold_shl_shr_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 58,
        );
    }

    #[Depends('testAssertReturn13')]
    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.no_fold_shl_shr_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 59,
        );
    }

    #[Depends('testAssertReturn14')]
    public function testModule15(): void
    {
        $this->runModuleCommand(
            filename: 'int_exprs.4.wasm',
            name: null,
            line: 63,
        );
    }

    #[Depends('testModule15')]
    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.no_fold_shr_s_shl', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 75,
        );
    }

    #[Depends('testAssertReturn16')]
    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.no_fold_shr_u_shl', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 76,
        );
    }

    #[Depends('testAssertReturn17')]
    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.no_fold_shr_s_shl', 'args' => [['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 77,
        );
    }

    #[Depends('testAssertReturn18')]
    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.no_fold_shr_u_shl', 'args' => [['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 78,
        );
    }

    #[Depends('testAssertReturn19')]
    public function testModule20(): void
    {
        $this->runModuleCommand(
            filename: 'int_exprs.5.wasm',
            name: null,
            line: 82,
        );
    }

    #[Depends('testModule20')]
    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.no_fold_div_s_mul', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 94,
        );
    }

    #[Depends('testAssertReturn21')]
    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.no_fold_div_u_mul', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 95,
        );
    }

    #[Depends('testAssertReturn22')]
    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.no_fold_div_s_mul', 'args' => [['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 96,
        );
    }

    #[Depends('testAssertReturn23')]
    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.no_fold_div_u_mul', 'args' => [['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 97,
        );
    }

    #[Depends('testAssertReturn24')]
    public function testModule25(): void
    {
        $this->runModuleCommand(
            filename: 'int_exprs.6.wasm',
            name: null,
            line: 101,
        );
    }

    #[Depends('testModule25')]
    public function testAssertTrap26(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.no_fold_div_s_self', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 113,
        );
    }

    #[Depends('testAssertTrap26')]
    public function testAssertTrap27(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.no_fold_div_u_self', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 114,
        );
    }

    #[Depends('testAssertTrap27')]
    public function testAssertTrap28(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.no_fold_div_s_self', 'args' => [['type' => 'i64', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 115,
        );
    }

    #[Depends('testAssertTrap28')]
    public function testAssertTrap29(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.no_fold_div_u_self', 'args' => [['type' => 'i64', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 116,
        );
    }

    #[Depends('testAssertTrap29')]
    public function testModule30(): void
    {
        $this->runModuleCommand(
            filename: 'int_exprs.7.wasm',
            name: null,
            line: 120,
        );
    }

    #[Depends('testModule30')]
    public function testAssertTrap31(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.no_fold_rem_s_self', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 132,
        );
    }

    #[Depends('testAssertTrap31')]
    public function testAssertTrap32(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.no_fold_rem_u_self', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 133,
        );
    }

    #[Depends('testAssertTrap32')]
    public function testAssertTrap33(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.no_fold_rem_s_self', 'args' => [['type' => 'i64', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 134,
        );
    }

    #[Depends('testAssertTrap33')]
    public function testAssertTrap34(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.no_fold_rem_u_self', 'args' => [['type' => 'i64', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 135,
        );
    }

    #[Depends('testAssertTrap34')]
    public function testModule35(): void
    {
        $this->runModuleCommand(
            filename: 'int_exprs.8.wasm',
            name: null,
            line: 139,
        );
    }

    #[Depends('testModule35')]
    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.no_fold_mul_div_s', 'args' => [['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 151,
        );
    }

    #[Depends('testAssertReturn36')]
    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.no_fold_mul_div_u', 'args' => [['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 152,
        );
    }

    #[Depends('testAssertReturn37')]
    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.no_fold_mul_div_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 153,
        );
    }

    #[Depends('testAssertReturn38')]
    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.no_fold_mul_div_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 154,
        );
    }

    #[Depends('testAssertReturn39')]
    public function testModule40(): void
    {
        $this->runModuleCommand(
            filename: 'int_exprs.9.wasm',
            name: null,
            line: 158,
        );
    }

    #[Depends('testModule40')]
    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.no_fold_div_s_2', 'args' => [['type' => 'i32', 'value' => '4294967285']]],
            expected: [['type' => 'i32', 'value' => '4294967291']],
            line: 166,
        );
    }

    #[Depends('testAssertReturn41')]
    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.no_fold_div_s_2', 'args' => [['type' => 'i64', 'value' => '18446744073709551605']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551611']],
            line: 167,
        );
    }

    #[Depends('testAssertReturn42')]
    public function testModule43(): void
    {
        $this->runModuleCommand(
            filename: 'int_exprs.10.wasm',
            name: null,
            line: 171,
        );
    }

    #[Depends('testModule43')]
    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.no_fold_rem_s_2', 'args' => [['type' => 'i32', 'value' => '4294967285']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 179,
        );
    }

    #[Depends('testAssertReturn44')]
    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.no_fold_rem_s_2', 'args' => [['type' => 'i64', 'value' => '18446744073709551605']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 180,
        );
    }

    #[Depends('testAssertReturn45')]
    public function testModule46(): void
    {
        $this->runModuleCommand(
            filename: 'int_exprs.11.wasm',
            name: null,
            line: 184,
        );
    }

    #[Depends('testModule46')]
    public function testAssertTrap47(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.div_s_0', 'args' => [['type' => 'i32', 'value' => '71']]],
            text: 'integer divide by zero',
            line: 196,
        );
    }

    #[Depends('testAssertTrap47')]
    public function testAssertTrap48(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.div_u_0', 'args' => [['type' => 'i32', 'value' => '71']]],
            text: 'integer divide by zero',
            line: 197,
        );
    }

    #[Depends('testAssertTrap48')]
    public function testAssertTrap49(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.div_s_0', 'args' => [['type' => 'i64', 'value' => '71']]],
            text: 'integer divide by zero',
            line: 198,
        );
    }

    #[Depends('testAssertTrap49')]
    public function testAssertTrap50(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.div_u_0', 'args' => [['type' => 'i64', 'value' => '71']]],
            text: 'integer divide by zero',
            line: 199,
        );
    }

    #[Depends('testAssertTrap50')]
    public function testModule51(): void
    {
        $this->runModuleCommand(
            filename: 'int_exprs.12.wasm',
            name: null,
            line: 203,
        );
    }

    #[Depends('testModule51')]
    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.div_s_3', 'args' => [['type' => 'i32', 'value' => '71']]],
            expected: [['type' => 'i32', 'value' => '23']],
            line: 215,
        );
    }

    #[Depends('testAssertReturn52')]
    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.div_s_3', 'args' => [['type' => 'i32', 'value' => '1610612736']]],
            expected: [['type' => 'i32', 'value' => '536870912']],
            line: 216,
        );
    }

    #[Depends('testAssertReturn53')]
    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.div_u_3', 'args' => [['type' => 'i32', 'value' => '71']]],
            expected: [['type' => 'i32', 'value' => '23']],
            line: 217,
        );
    }

    #[Depends('testAssertReturn54')]
    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.div_u_3', 'args' => [['type' => 'i32', 'value' => '3221225472']]],
            expected: [['type' => 'i32', 'value' => '1073741824']],
            line: 218,
        );
    }

    #[Depends('testAssertReturn55')]
    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.div_s_3', 'args' => [['type' => 'i64', 'value' => '71']]],
            expected: [['type' => 'i64', 'value' => '23']],
            line: 219,
        );
    }

    #[Depends('testAssertReturn56')]
    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.div_s_3', 'args' => [['type' => 'i64', 'value' => '3458764513820540928']]],
            expected: [['type' => 'i64', 'value' => '1152921504606846976']],
            line: 220,
        );
    }

    #[Depends('testAssertReturn57')]
    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.div_u_3', 'args' => [['type' => 'i64', 'value' => '71']]],
            expected: [['type' => 'i64', 'value' => '23']],
            line: 221,
        );
    }

    #[Depends('testAssertReturn58')]
    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.div_u_3', 'args' => [['type' => 'i64', 'value' => '13835058055282163712']]],
            expected: [['type' => 'i64', 'value' => '4611686018427387904']],
            line: 222,
        );
    }

    #[Depends('testAssertReturn59')]
    public function testModule60(): void
    {
        $this->runModuleCommand(
            filename: 'int_exprs.13.wasm',
            name: null,
            line: 226,
        );
    }

    #[Depends('testModule60')]
    public function testAssertReturn61(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.div_s_5', 'args' => [['type' => 'i32', 'value' => '71']]],
            expected: [['type' => 'i32', 'value' => '14']],
            line: 238,
        );
    }

    #[Depends('testAssertReturn61')]
    public function testAssertReturn62(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.div_s_5', 'args' => [['type' => 'i32', 'value' => '1342177280']]],
            expected: [['type' => 'i32', 'value' => '268435456']],
            line: 239,
        );
    }

    #[Depends('testAssertReturn62')]
    public function testAssertReturn63(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.div_u_5', 'args' => [['type' => 'i32', 'value' => '71']]],
            expected: [['type' => 'i32', 'value' => '14']],
            line: 240,
        );
    }

    #[Depends('testAssertReturn63')]
    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.div_u_5', 'args' => [['type' => 'i32', 'value' => '2684354560']]],
            expected: [['type' => 'i32', 'value' => '536870912']],
            line: 241,
        );
    }

    #[Depends('testAssertReturn64')]
    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.div_s_5', 'args' => [['type' => 'i64', 'value' => '71']]],
            expected: [['type' => 'i64', 'value' => '14']],
            line: 242,
        );
    }

    #[Depends('testAssertReturn65')]
    public function testAssertReturn66(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.div_s_5', 'args' => [['type' => 'i64', 'value' => '5764607523034234880']]],
            expected: [['type' => 'i64', 'value' => '1152921504606846976']],
            line: 243,
        );
    }

    #[Depends('testAssertReturn66')]
    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.div_u_5', 'args' => [['type' => 'i64', 'value' => '71']]],
            expected: [['type' => 'i64', 'value' => '14']],
            line: 244,
        );
    }

    #[Depends('testAssertReturn67')]
    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.div_u_5', 'args' => [['type' => 'i64', 'value' => '11529215046068469760']]],
            expected: [['type' => 'i64', 'value' => '2305843009213693952']],
            line: 245,
        );
    }

    #[Depends('testAssertReturn68')]
    public function testModule69(): void
    {
        $this->runModuleCommand(
            filename: 'int_exprs.14.wasm',
            name: null,
            line: 249,
        );
    }

    #[Depends('testModule69')]
    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.div_s_7', 'args' => [['type' => 'i32', 'value' => '71']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 261,
        );
    }

    #[Depends('testAssertReturn70')]
    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.div_s_7', 'args' => [['type' => 'i32', 'value' => '1879048192']]],
            expected: [['type' => 'i32', 'value' => '268435456']],
            line: 262,
        );
    }

    #[Depends('testAssertReturn71')]
    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.div_u_7', 'args' => [['type' => 'i32', 'value' => '71']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 263,
        );
    }

    #[Depends('testAssertReturn72')]
    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.div_u_7', 'args' => [['type' => 'i32', 'value' => '3758096384']]],
            expected: [['type' => 'i32', 'value' => '536870912']],
            line: 264,
        );
    }

    #[Depends('testAssertReturn73')]
    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.div_s_7', 'args' => [['type' => 'i64', 'value' => '71']]],
            expected: [['type' => 'i64', 'value' => '10']],
            line: 265,
        );
    }

    #[Depends('testAssertReturn74')]
    public function testAssertReturn75(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.div_s_7', 'args' => [['type' => 'i64', 'value' => '8070450532247928832']]],
            expected: [['type' => 'i64', 'value' => '1152921504606846976']],
            line: 266,
        );
    }

    #[Depends('testAssertReturn75')]
    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.div_u_7', 'args' => [['type' => 'i64', 'value' => '71']]],
            expected: [['type' => 'i64', 'value' => '10']],
            line: 267,
        );
    }

    #[Depends('testAssertReturn76')]
    public function testAssertReturn77(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.div_u_7', 'args' => [['type' => 'i64', 'value' => '16140901064495857664']]],
            expected: [['type' => 'i64', 'value' => '2305843009213693952']],
            line: 268,
        );
    }

    #[Depends('testAssertReturn77')]
    public function testModule78(): void
    {
        $this->runModuleCommand(
            filename: 'int_exprs.15.wasm',
            name: null,
            line: 272,
        );
    }

    #[Depends('testModule78')]
    public function testAssertReturn79(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.rem_s_3', 'args' => [['type' => 'i32', 'value' => '71']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 284,
        );
    }

    #[Depends('testAssertReturn79')]
    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.rem_s_3', 'args' => [['type' => 'i32', 'value' => '1610612736']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 285,
        );
    }

    #[Depends('testAssertReturn80')]
    public function testAssertReturn81(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.rem_u_3', 'args' => [['type' => 'i32', 'value' => '71']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 286,
        );
    }

    #[Depends('testAssertReturn81')]
    public function testAssertReturn82(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.rem_u_3', 'args' => [['type' => 'i32', 'value' => '3221225472']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 287,
        );
    }

    #[Depends('testAssertReturn82')]
    public function testAssertReturn83(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.rem_s_3', 'args' => [['type' => 'i64', 'value' => '71']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 288,
        );
    }

    #[Depends('testAssertReturn83')]
    public function testAssertReturn84(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.rem_s_3', 'args' => [['type' => 'i64', 'value' => '3458764513820540928']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 289,
        );
    }

    #[Depends('testAssertReturn84')]
    public function testAssertReturn85(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.rem_u_3', 'args' => [['type' => 'i64', 'value' => '71']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 290,
        );
    }

    #[Depends('testAssertReturn85')]
    public function testAssertReturn86(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.rem_u_3', 'args' => [['type' => 'i64', 'value' => '13835058055282163712']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 291,
        );
    }

    #[Depends('testAssertReturn86')]
    public function testModule87(): void
    {
        $this->runModuleCommand(
            filename: 'int_exprs.16.wasm',
            name: null,
            line: 295,
        );
    }

    #[Depends('testModule87')]
    public function testAssertReturn88(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.rem_s_5', 'args' => [['type' => 'i32', 'value' => '71']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 307,
        );
    }

    #[Depends('testAssertReturn88')]
    public function testAssertReturn89(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.rem_s_5', 'args' => [['type' => 'i32', 'value' => '1342177280']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 308,
        );
    }

    #[Depends('testAssertReturn89')]
    public function testAssertReturn90(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.rem_u_5', 'args' => [['type' => 'i32', 'value' => '71']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 309,
        );
    }

    #[Depends('testAssertReturn90')]
    public function testAssertReturn91(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.rem_u_5', 'args' => [['type' => 'i32', 'value' => '2684354560']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 310,
        );
    }

    #[Depends('testAssertReturn91')]
    public function testAssertReturn92(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.rem_s_5', 'args' => [['type' => 'i64', 'value' => '71']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 311,
        );
    }

    #[Depends('testAssertReturn92')]
    public function testAssertReturn93(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.rem_s_5', 'args' => [['type' => 'i64', 'value' => '5764607523034234880']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 312,
        );
    }

    #[Depends('testAssertReturn93')]
    public function testAssertReturn94(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.rem_u_5', 'args' => [['type' => 'i64', 'value' => '71']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 313,
        );
    }

    #[Depends('testAssertReturn94')]
    public function testAssertReturn95(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.rem_u_5', 'args' => [['type' => 'i64', 'value' => '11529215046068469760']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 314,
        );
    }

    #[Depends('testAssertReturn95')]
    public function testModule96(): void
    {
        $this->runModuleCommand(
            filename: 'int_exprs.17.wasm',
            name: null,
            line: 318,
        );
    }

    #[Depends('testModule96')]
    public function testAssertReturn97(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.rem_s_7', 'args' => [['type' => 'i32', 'value' => '71']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 330,
        );
    }

    #[Depends('testAssertReturn97')]
    public function testAssertReturn98(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.rem_s_7', 'args' => [['type' => 'i32', 'value' => '1879048192']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 331,
        );
    }

    #[Depends('testAssertReturn98')]
    public function testAssertReturn99(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.rem_u_7', 'args' => [['type' => 'i32', 'value' => '71']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 332,
        );
    }

    #[Depends('testAssertReturn99')]
    public function testAssertReturn100(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.rem_u_7', 'args' => [['type' => 'i32', 'value' => '3758096384']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 333,
        );
    }

    #[Depends('testAssertReturn100')]
    public function testAssertReturn101(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.rem_s_7', 'args' => [['type' => 'i64', 'value' => '71']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 334,
        );
    }

    #[Depends('testAssertReturn101')]
    public function testAssertReturn102(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.rem_s_7', 'args' => [['type' => 'i64', 'value' => '8070450532247928832']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 335,
        );
    }

    #[Depends('testAssertReturn102')]
    public function testAssertReturn103(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.rem_u_7', 'args' => [['type' => 'i64', 'value' => '71']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 336,
        );
    }

    #[Depends('testAssertReturn103')]
    public function testAssertReturn104(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.rem_u_7', 'args' => [['type' => 'i64', 'value' => '16140901064495857664']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 337,
        );
    }

    #[Depends('testAssertReturn104')]
    public function testModule105(): void
    {
        $this->runModuleCommand(
            filename: 'int_exprs.18.wasm',
            name: null,
            line: 341,
        );
    }

    #[Depends('testModule105')]
    public function testAssertTrap106(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32.no_fold_div_neg1', 'args' => [['type' => 'i32', 'value' => '2147483648']]],
            text: 'integer overflow',
            line: 349,
        );
    }

    #[Depends('testAssertTrap106')]
    public function testAssertTrap107(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64.no_fold_div_neg1', 'args' => [['type' => 'i64', 'value' => '9223372036854775808']]],
            text: 'integer overflow',
            line: 350,
        );
    }
}
