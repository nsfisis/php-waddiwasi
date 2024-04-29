<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class BrTableTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'br_table.0.wasm',
            name: null,
            line: 3,
        );
    }

    #[Depends('testModule0')]
    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'type-i32', 'args' => []],
            expected: [],
            line: 1007,
        );
    }

    #[Depends('testAssertReturn1')]
    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'type-i64', 'args' => []],
            expected: [],
            line: 1008,
        );
    }

    #[Depends('testAssertReturn2')]
    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'type-f32', 'args' => []],
            expected: [],
            line: 1009,
        );
    }

    #[Depends('testAssertReturn3')]
    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'type-f64', 'args' => []],
            expected: [],
            line: 1010,
        );
    }

    #[Depends('testAssertReturn4')]
    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'type-i32-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1012,
        );
    }

    #[Depends('testAssertReturn5')]
    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'type-i64-value', 'args' => []],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 1013,
        );
    }

    #[Depends('testAssertReturn6')]
    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'type-f32-value', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1077936128']],
            line: 1014,
        );
    }

    #[Depends('testAssertReturn7')]
    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'type-f64-value', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4616189618054758400']],
            line: 1015,
        );
    }

    #[Depends('testAssertReturn8')]
    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'empty', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '22']],
            line: 1017,
        );
    }

    #[Depends('testAssertReturn9')]
    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'empty', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '22']],
            line: 1018,
        );
    }

    #[Depends('testAssertReturn10')]
    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'empty', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '22']],
            line: 1019,
        );
    }

    #[Depends('testAssertReturn11')]
    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'empty', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '22']],
            line: 1020,
        );
    }

    #[Depends('testAssertReturn12')]
    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'empty', 'args' => [['type' => 'i32', 'value' => '4294967196']]],
            expected: [['type' => 'i32', 'value' => '22']],
            line: 1021,
        );
    }

    #[Depends('testAssertReturn13')]
    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'empty', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '22']],
            line: 1022,
        );
    }

    #[Depends('testAssertReturn14')]
    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'empty-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '33']],
            line: 1024,
        );
    }

    #[Depends('testAssertReturn15')]
    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'empty-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '33']],
            line: 1025,
        );
    }

    #[Depends('testAssertReturn16')]
    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'empty-value', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '33']],
            line: 1026,
        );
    }

    #[Depends('testAssertReturn17')]
    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'empty-value', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '33']],
            line: 1027,
        );
    }

    #[Depends('testAssertReturn18')]
    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'empty-value', 'args' => [['type' => 'i32', 'value' => '4294967196']]],
            expected: [['type' => 'i32', 'value' => '33']],
            line: 1028,
        );
    }

    #[Depends('testAssertReturn19')]
    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'empty-value', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '33']],
            line: 1029,
        );
    }

    #[Depends('testAssertReturn20')]
    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'singleton', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '22']],
            line: 1031,
        );
    }

    #[Depends('testAssertReturn21')]
    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'singleton', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '20']],
            line: 1032,
        );
    }

    #[Depends('testAssertReturn22')]
    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'singleton', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '20']],
            line: 1033,
        );
    }

    #[Depends('testAssertReturn23')]
    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'singleton', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '20']],
            line: 1034,
        );
    }

    #[Depends('testAssertReturn24')]
    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'singleton', 'args' => [['type' => 'i32', 'value' => '4294967196']]],
            expected: [['type' => 'i32', 'value' => '20']],
            line: 1035,
        );
    }

    #[Depends('testAssertReturn25')]
    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'singleton', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '20']],
            line: 1036,
        );
    }

    #[Depends('testAssertReturn26')]
    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'singleton-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '32']],
            line: 1038,
        );
    }

    #[Depends('testAssertReturn27')]
    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'singleton-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '33']],
            line: 1039,
        );
    }

    #[Depends('testAssertReturn28')]
    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'singleton-value', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '33']],
            line: 1040,
        );
    }

    #[Depends('testAssertReturn29')]
    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'singleton-value', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '33']],
            line: 1041,
        );
    }

    #[Depends('testAssertReturn30')]
    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'singleton-value', 'args' => [['type' => 'i32', 'value' => '4294967196']]],
            expected: [['type' => 'i32', 'value' => '33']],
            line: 1042,
        );
    }

    #[Depends('testAssertReturn31')]
    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'singleton-value', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '33']],
            line: 1043,
        );
    }

    #[Depends('testAssertReturn32')]
    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'multiple', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '103']],
            line: 1045,
        );
    }

    #[Depends('testAssertReturn33')]
    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'multiple', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '102']],
            line: 1046,
        );
    }

    #[Depends('testAssertReturn34')]
    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'multiple', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '101']],
            line: 1047,
        );
    }

    #[Depends('testAssertReturn35')]
    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'multiple', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '100']],
            line: 1048,
        );
    }

    #[Depends('testAssertReturn36')]
    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'multiple', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '104']],
            line: 1049,
        );
    }

    #[Depends('testAssertReturn37')]
    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'multiple', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '104']],
            line: 1050,
        );
    }

    #[Depends('testAssertReturn38')]
    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'multiple', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '104']],
            line: 1051,
        );
    }

    #[Depends('testAssertReturn39')]
    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'multiple', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '104']],
            line: 1052,
        );
    }

    #[Depends('testAssertReturn40')]
    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'multiple', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '104']],
            line: 1053,
        );
    }

    #[Depends('testAssertReturn41')]
    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'multiple', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '104']],
            line: 1054,
        );
    }

    #[Depends('testAssertReturn42')]
    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'multiple-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '213']],
            line: 1056,
        );
    }

    #[Depends('testAssertReturn43')]
    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'multiple-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '212']],
            line: 1057,
        );
    }

    #[Depends('testAssertReturn44')]
    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'multiple-value', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '211']],
            line: 1058,
        );
    }

    #[Depends('testAssertReturn45')]
    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'multiple-value', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '210']],
            line: 1059,
        );
    }

    #[Depends('testAssertReturn46')]
    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'multiple-value', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '214']],
            line: 1060,
        );
    }

    #[Depends('testAssertReturn47')]
    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'multiple-value', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '214']],
            line: 1061,
        );
    }

    #[Depends('testAssertReturn48')]
    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'multiple-value', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '214']],
            line: 1062,
        );
    }

    #[Depends('testAssertReturn49')]
    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'multiple-value', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '214']],
            line: 1063,
        );
    }

    #[Depends('testAssertReturn50')]
    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'multiple-value', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '214']],
            line: 1064,
        );
    }

    #[Depends('testAssertReturn51')]
    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'multiple-value', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '214']],
            line: 1065,
        );
    }

    #[Depends('testAssertReturn52')]
    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'large', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1067,
        );
    }

    #[Depends('testAssertReturn53')]
    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'large', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1068,
        );
    }

    #[Depends('testAssertReturn54')]
    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'large', 'args' => [['type' => 'i32', 'value' => '100']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1069,
        );
    }

    #[Depends('testAssertReturn55')]
    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'large', 'args' => [['type' => 'i32', 'value' => '101']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1070,
        );
    }

    #[Depends('testAssertReturn56')]
    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'large', 'args' => [['type' => 'i32', 'value' => '10000']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1071,
        );
    }

    #[Depends('testAssertReturn57')]
    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'large', 'args' => [['type' => 'i32', 'value' => '10001']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1072,
        );
    }

    #[Depends('testAssertReturn58')]
    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'large', 'args' => [['type' => 'i32', 'value' => '1000000']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1073,
        );
    }

    #[Depends('testAssertReturn59')]
    public function testAssertReturn60(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'large', 'args' => [['type' => 'i32', 'value' => '1000001']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1074,
        );
    }

    #[Depends('testAssertReturn60')]
    public function testAssertReturn61(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-block-first', 'args' => []],
            expected: [],
            line: 1076,
        );
    }

    #[Depends('testAssertReturn61')]
    public function testAssertReturn62(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-block-mid', 'args' => []],
            expected: [],
            line: 1077,
        );
    }

    #[Depends('testAssertReturn62')]
    public function testAssertReturn63(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-block-last', 'args' => []],
            expected: [],
            line: 1078,
        );
    }

    #[Depends('testAssertReturn63')]
    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-block-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 1079,
        );
    }

    #[Depends('testAssertReturn64')]
    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-loop-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1081,
        );
    }

    #[Depends('testAssertReturn65')]
    public function testAssertReturn66(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-loop-mid', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1082,
        );
    }

    #[Depends('testAssertReturn66')]
    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-loop-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 1083,
        );
    }

    #[Depends('testAssertReturn67')]
    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 1085,
        );
    }

    #[Depends('testAssertReturn68')]
    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br_if-cond', 'args' => []],
            expected: [],
            line: 1087,
        );
    }

    #[Depends('testAssertReturn69')]
    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br_if-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 1088,
        );
    }

    #[Depends('testAssertReturn70')]
    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br_if-value-cond', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 1089,
        );
    }

    #[Depends('testAssertReturn71')]
    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br_table-index', 'args' => []],
            expected: [],
            line: 1091,
        );
    }

    #[Depends('testAssertReturn72')]
    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br_table-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 1092,
        );
    }

    #[Depends('testAssertReturn73')]
    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br_table-value-index', 'args' => []],
            expected: [['type' => 'i32', 'value' => '11']],
            line: 1093,
        );
    }

    #[Depends('testAssertReturn74')]
    public function testAssertReturn75(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-return-value', 'args' => []],
            expected: [['type' => 'i64', 'value' => '7']],
            line: 1095,
        );
    }

    #[Depends('testAssertReturn75')]
    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-if-cond', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 1097,
        );
    }

    #[Depends('testAssertReturn76')]
    public function testAssertReturn77(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-if-then', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1098,
        );
    }

    #[Depends('testAssertReturn77')]
    public function testAssertReturn78(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-if-then', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1099,
        );
    }

    #[Depends('testAssertReturn78')]
    public function testAssertReturn79(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-if-else', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1100,
        );
    }

    #[Depends('testAssertReturn79')]
    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-if-else', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1101,
        );
    }

    #[Depends('testAssertReturn80')]
    public function testAssertReturn81(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-select-first', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 1103,
        );
    }

    #[Depends('testAssertReturn81')]
    public function testAssertReturn82(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-select-first', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 1104,
        );
    }

    #[Depends('testAssertReturn82')]
    public function testAssertReturn83(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-select-second', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1105,
        );
    }

    #[Depends('testAssertReturn83')]
    public function testAssertReturn84(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-select-second', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1106,
        );
    }

    #[Depends('testAssertReturn84')]
    public function testAssertReturn85(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-select-cond', 'args' => []],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 1107,
        );
    }

    #[Depends('testAssertReturn85')]
    public function testAssertReturn86(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-call-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '12']],
            line: 1109,
        );
    }

    #[Depends('testAssertReturn86')]
    public function testAssertReturn87(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-call-mid', 'args' => []],
            expected: [['type' => 'i32', 'value' => '13']],
            line: 1110,
        );
    }

    #[Depends('testAssertReturn87')]
    public function testAssertReturn88(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-call-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '14']],
            line: 1111,
        );
    }

    #[Depends('testAssertReturn88')]
    public function testAssertReturn89(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '20']],
            line: 1113,
        );
    }

    #[Depends('testAssertReturn89')]
    public function testAssertReturn90(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-mid', 'args' => []],
            expected: [['type' => 'i32', 'value' => '21']],
            line: 1114,
        );
    }

    #[Depends('testAssertReturn90')]
    public function testAssertReturn91(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '22']],
            line: 1115,
        );
    }

    #[Depends('testAssertReturn91')]
    public function testAssertReturn92(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-func', 'args' => []],
            expected: [['type' => 'i32', 'value' => '23']],
            line: 1116,
        );
    }

    #[Depends('testAssertReturn92')]
    public function testAssertReturn93(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-local.set-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '17']],
            line: 1118,
        );
    }

    #[Depends('testAssertReturn93')]
    public function testAssertReturn94(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-local.tee-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1119,
        );
    }

    #[Depends('testAssertReturn94')]
    public function testAssertReturn95(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-global.set-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1120,
        );
    }

    #[Depends('testAssertReturn95')]
    public function testAssertReturn96(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-load-address', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1071225242']],
            line: 1122,
        );
    }

    #[Depends('testAssertReturn96')]
    public function testAssertReturn97(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-loadN-address', 'args' => []],
            expected: [['type' => 'i64', 'value' => '30']],
            line: 1123,
        );
    }

    #[Depends('testAssertReturn97')]
    public function testAssertReturn98(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-store-address', 'args' => []],
            expected: [['type' => 'i32', 'value' => '30']],
            line: 1125,
        );
    }

    #[Depends('testAssertReturn98')]
    public function testAssertReturn99(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-store-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '31']],
            line: 1126,
        );
    }

    #[Depends('testAssertReturn99')]
    public function testAssertReturn100(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-storeN-address', 'args' => []],
            expected: [['type' => 'i32', 'value' => '32']],
            line: 1127,
        );
    }

    #[Depends('testAssertReturn100')]
    public function testAssertReturn101(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-storeN-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '33']],
            line: 1128,
        );
    }

    #[Depends('testAssertReturn101')]
    public function testAssertReturn102(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-unary-operand', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1079613850']],
            line: 1130,
        );
    }

    #[Depends('testAssertReturn102')]
    public function testAssertReturn103(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-binary-left', 'args' => []],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1132,
        );
    }

    #[Depends('testAssertReturn103')]
    public function testAssertReturn104(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-binary-right', 'args' => []],
            expected: [['type' => 'i64', 'value' => '45']],
            line: 1133,
        );
    }

    #[Depends('testAssertReturn104')]
    public function testAssertReturn105(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-test-operand', 'args' => []],
            expected: [['type' => 'i32', 'value' => '44']],
            line: 1135,
        );
    }

    #[Depends('testAssertReturn105')]
    public function testAssertReturn106(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-compare-left', 'args' => []],
            expected: [['type' => 'i32', 'value' => '43']],
            line: 1137,
        );
    }

    #[Depends('testAssertReturn106')]
    public function testAssertReturn107(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-compare-right', 'args' => []],
            expected: [['type' => 'i32', 'value' => '42']],
            line: 1138,
        );
    }

    #[Depends('testAssertReturn107')]
    public function testAssertReturn108(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-convert-operand', 'args' => []],
            expected: [['type' => 'i32', 'value' => '41']],
            line: 1140,
        );
    }

    #[Depends('testAssertReturn108')]
    public function testAssertReturn109(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-memory.grow-size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '40']],
            line: 1142,
        );
    }

    #[Depends('testAssertReturn109')]
    public function testAssertReturn110(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-block-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '19']],
            line: 1144,
        );
    }

    #[Depends('testAssertReturn110')]
    public function testAssertReturn111(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-block-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '17']],
            line: 1145,
        );
    }

    #[Depends('testAssertReturn111')]
    public function testAssertReturn112(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-block-value', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '16']],
            line: 1146,
        );
    }

    #[Depends('testAssertReturn112')]
    public function testAssertReturn113(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-block-value', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '16']],
            line: 1147,
        );
    }

    #[Depends('testAssertReturn113')]
    public function testAssertReturn114(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-block-value', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '16']],
            line: 1148,
        );
    }

    #[Depends('testAssertReturn114')]
    public function testAssertReturn115(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-block-value', 'args' => [['type' => 'i32', 'value' => '100000']]],
            expected: [['type' => 'i32', 'value' => '16']],
            line: 1149,
        );
    }

    #[Depends('testAssertReturn115')]
    public function testAssertReturn116(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 1151,
        );
    }

    #[Depends('testAssertReturn116')]
    public function testAssertReturn117(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 1152,
        );
    }

    #[Depends('testAssertReturn117')]
    public function testAssertReturn118(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br-value', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '17']],
            line: 1153,
        );
    }

    #[Depends('testAssertReturn118')]
    public function testAssertReturn119(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br-value', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '17']],
            line: 1154,
        );
    }

    #[Depends('testAssertReturn119')]
    public function testAssertReturn120(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br-value', 'args' => [['type' => 'i32', 'value' => '4294967292']]],
            expected: [['type' => 'i32', 'value' => '17']],
            line: 1155,
        );
    }

    #[Depends('testAssertReturn120')]
    public function testAssertReturn121(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br-value', 'args' => [['type' => 'i32', 'value' => '10213210']]],
            expected: [['type' => 'i32', 'value' => '17']],
            line: 1156,
        );
    }

    #[Depends('testAssertReturn121')]
    public function testAssertReturn122(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br_if-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '17']],
            line: 1158,
        );
    }

    #[Depends('testAssertReturn122')]
    public function testAssertReturn123(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br_if-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 1159,
        );
    }

    #[Depends('testAssertReturn123')]
    public function testAssertReturn124(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br_if-value', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 1160,
        );
    }

    #[Depends('testAssertReturn124')]
    public function testAssertReturn125(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br_if-value', 'args' => [['type' => 'i32', 'value' => '9']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 1161,
        );
    }

    #[Depends('testAssertReturn125')]
    public function testAssertReturn126(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br_if-value', 'args' => [['type' => 'i32', 'value' => '4294967287']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 1162,
        );
    }

    #[Depends('testAssertReturn126')]
    public function testAssertReturn127(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br_if-value', 'args' => [['type' => 'i32', 'value' => '999999']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 1163,
        );
    }

    #[Depends('testAssertReturn127')]
    public function testAssertReturn128(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br_if-value-cond', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 1165,
        );
    }

    #[Depends('testAssertReturn128')]
    public function testAssertReturn129(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br_if-value-cond', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 1166,
        );
    }

    #[Depends('testAssertReturn129')]
    public function testAssertReturn130(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br_if-value-cond', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 1167,
        );
    }

    #[Depends('testAssertReturn130')]
    public function testAssertReturn131(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br_if-value-cond', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 1168,
        );
    }

    #[Depends('testAssertReturn131')]
    public function testAssertReturn132(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br_if-value-cond', 'args' => [['type' => 'i32', 'value' => '4293967296']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 1169,
        );
    }

    #[Depends('testAssertReturn132')]
    public function testAssertReturn133(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br_if-value-cond', 'args' => [['type' => 'i32', 'value' => '9423975']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 1170,
        );
    }

    #[Depends('testAssertReturn133')]
    public function testAssertReturn134(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br_table-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '17']],
            line: 1172,
        );
    }

    #[Depends('testAssertReturn134')]
    public function testAssertReturn135(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br_table-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 1173,
        );
    }

    #[Depends('testAssertReturn135')]
    public function testAssertReturn136(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br_table-value', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 1174,
        );
    }

    #[Depends('testAssertReturn136')]
    public function testAssertReturn137(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br_table-value', 'args' => [['type' => 'i32', 'value' => '9']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 1175,
        );
    }

    #[Depends('testAssertReturn137')]
    public function testAssertReturn138(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br_table-value', 'args' => [['type' => 'i32', 'value' => '4294967287']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 1176,
        );
    }

    #[Depends('testAssertReturn138')]
    public function testAssertReturn139(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br_table-value', 'args' => [['type' => 'i32', 'value' => '999999']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 1177,
        );
    }

    #[Depends('testAssertReturn139')]
    public function testAssertReturn140(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br_table-value-index', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 1179,
        );
    }

    #[Depends('testAssertReturn140')]
    public function testAssertReturn141(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br_table-value-index', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 1180,
        );
    }

    #[Depends('testAssertReturn141')]
    public function testAssertReturn142(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br_table-value-index', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 1181,
        );
    }

    #[Depends('testAssertReturn142')]
    public function testAssertReturn143(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br_table-value-index', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 1182,
        );
    }

    #[Depends('testAssertReturn143')]
    public function testAssertReturn144(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br_table-value-index', 'args' => [['type' => 'i32', 'value' => '4293967296']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 1183,
        );
    }

    #[Depends('testAssertReturn144')]
    public function testAssertReturn145(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br_table-value-index', 'args' => [['type' => 'i32', 'value' => '9423975']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 1184,
        );
    }

    #[Depends('testAssertReturn145')]
    public function testAssertReturn146(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br_table-loop-block', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1186,
        );
    }

    #[Depends('testAssertReturn146')]
    public function testAssertReturn147(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'meet-externref', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'externref', 'value' => '1']]],
            expected: [['type' => 'externref', 'value' => '1']],
            line: 1188,
        );
    }

    #[Depends('testAssertReturn147')]
    public function testAssertReturn148(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'meet-externref', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'externref', 'value' => '1']]],
            expected: [['type' => 'externref', 'value' => '1']],
            line: 1189,
        );
    }

    #[Depends('testAssertReturn148')]
    public function testAssertReturn149(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'meet-externref', 'args' => [['type' => 'i32', 'value' => '2'], ['type' => 'externref', 'value' => '1']]],
            expected: [['type' => 'externref', 'value' => '1']],
            line: 1190,
        );
    }

    #[Depends('testAssertReturn149')]
    public function testAssertInvalid150(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.1.wasm',
            text: 'type mismatch',
            line: 1193,
        );
    }

    #[Depends('testAssertInvalid150')]
    public function testAssertInvalid151(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.2.wasm',
            text: 'type mismatch',
            line: 1200,
        );
    }

    #[Depends('testAssertInvalid151')]
    public function testAssertInvalid152(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.3.wasm',
            text: 'type mismatch',
            line: 1207,
        );
    }

    #[Depends('testAssertInvalid152')]
    public function testAssertInvalid153(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.4.wasm',
            text: 'type mismatch',
            line: 1213,
        );
    }

    #[Depends('testAssertInvalid153')]
    public function testAssertInvalid154(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.5.wasm',
            text: 'type mismatch',
            line: 1221,
        );
    }

    #[Depends('testAssertInvalid154')]
    public function testAssertInvalid155(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.6.wasm',
            text: 'type mismatch',
            line: 1232,
        );
    }

    #[Depends('testAssertInvalid155')]
    public function testAssertInvalid156(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.7.wasm',
            text: 'type mismatch',
            line: 1243,
        );
    }

    #[Depends('testAssertInvalid156')]
    public function testAssertInvalid157(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.8.wasm',
            text: 'type mismatch',
            line: 1249,
        );
    }

    #[Depends('testAssertInvalid157')]
    public function testAssertInvalid158(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.9.wasm',
            text: 'type mismatch',
            line: 1255,
        );
    }

    #[Depends('testAssertInvalid158')]
    public function testAssertInvalid159(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.10.wasm',
            text: 'type mismatch',
            line: 1261,
        );
    }

    #[Depends('testAssertInvalid159')]
    public function testAssertInvalid160(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.11.wasm',
            text: 'type mismatch',
            line: 1267,
        );
    }

    #[Depends('testAssertInvalid160')]
    public function testAssertInvalid161(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.12.wasm',
            text: 'type mismatch',
            line: 1276,
        );
    }

    #[Depends('testAssertInvalid161')]
    public function testAssertInvalid162(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.13.wasm',
            text: 'type mismatch',
            line: 1283,
        );
    }

    #[Depends('testAssertInvalid162')]
    public function testAssertInvalid163(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.14.wasm',
            text: 'type mismatch',
            line: 1295,
        );
    }

    #[Depends('testAssertInvalid163')]
    public function testAssertInvalid164(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.15.wasm',
            text: 'type mismatch',
            line: 1307,
        );
    }

    #[Depends('testAssertInvalid164')]
    public function testAssertInvalid165(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.16.wasm',
            text: 'type mismatch',
            line: 1318,
        );
    }

    #[Depends('testAssertInvalid165')]
    public function testAssertInvalid166(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.17.wasm',
            text: 'type mismatch',
            line: 1330,
        );
    }

    #[Depends('testAssertInvalid166')]
    public function testAssertInvalid167(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.18.wasm',
            text: 'type mismatch',
            line: 1342,
        );
    }

    #[Depends('testAssertInvalid167')]
    public function testAssertInvalid168(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.19.wasm',
            text: 'unknown label',
            line: 1356,
        );
    }

    #[Depends('testAssertInvalid168')]
    public function testAssertInvalid169(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.20.wasm',
            text: 'unknown label',
            line: 1362,
        );
    }

    #[Depends('testAssertInvalid169')]
    public function testAssertInvalid170(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.21.wasm',
            text: 'unknown label',
            line: 1368,
        );
    }

    #[Depends('testAssertInvalid170')]
    public function testAssertInvalid171(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.22.wasm',
            text: 'unknown label',
            line: 1375,
        );
    }

    #[Depends('testAssertInvalid171')]
    public function testAssertInvalid172(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.23.wasm',
            text: 'unknown label',
            line: 1381,
        );
    }

    #[Depends('testAssertInvalid172')]
    public function testAssertInvalid173(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.24.wasm',
            text: 'unknown label',
            line: 1387,
        );
    }
}
