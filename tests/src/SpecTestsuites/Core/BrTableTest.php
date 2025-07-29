<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
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

    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-i32', 'args' => []],
            expected: [],
            line: 1007,
        );
    }

    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-i64', 'args' => []],
            expected: [],
            line: 1008,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-f32', 'args' => []],
            expected: [],
            line: 1009,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-f64', 'args' => []],
            expected: [],
            line: 1010,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-i32-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1012,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-i64-value', 'args' => []],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 1013,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-f32-value', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1077936128']],
            line: 1014,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-f64-value', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4616189618054758400']],
            line: 1015,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'empty', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '22']],
            line: 1017,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'empty', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '22']],
            line: 1018,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'empty', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '22']],
            line: 1019,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'empty', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '22']],
            line: 1020,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'empty', 'args' => [['type' => 'i32', 'value' => '4294967196']]],
            expected: [['type' => 'i32', 'value' => '22']],
            line: 1021,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'empty', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '22']],
            line: 1022,
        );
    }

    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'empty-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '33']],
            line: 1024,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'empty-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '33']],
            line: 1025,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'empty-value', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '33']],
            line: 1026,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'empty-value', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '33']],
            line: 1027,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'empty-value', 'args' => [['type' => 'i32', 'value' => '4294967196']]],
            expected: [['type' => 'i32', 'value' => '33']],
            line: 1028,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'empty-value', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '33']],
            line: 1029,
        );
    }

    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'singleton', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '22']],
            line: 1031,
        );
    }

    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'singleton', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '20']],
            line: 1032,
        );
    }

    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'singleton', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '20']],
            line: 1033,
        );
    }

    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'singleton', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '20']],
            line: 1034,
        );
    }

    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'singleton', 'args' => [['type' => 'i32', 'value' => '4294967196']]],
            expected: [['type' => 'i32', 'value' => '20']],
            line: 1035,
        );
    }

    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'singleton', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '20']],
            line: 1036,
        );
    }

    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'singleton-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '32']],
            line: 1038,
        );
    }

    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'singleton-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '33']],
            line: 1039,
        );
    }

    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'singleton-value', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '33']],
            line: 1040,
        );
    }

    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'singleton-value', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '33']],
            line: 1041,
        );
    }

    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'singleton-value', 'args' => [['type' => 'i32', 'value' => '4294967196']]],
            expected: [['type' => 'i32', 'value' => '33']],
            line: 1042,
        );
    }

    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'singleton-value', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '33']],
            line: 1043,
        );
    }

    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'multiple', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '103']],
            line: 1045,
        );
    }

    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'multiple', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '102']],
            line: 1046,
        );
    }

    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'multiple', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '101']],
            line: 1047,
        );
    }

    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'multiple', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '100']],
            line: 1048,
        );
    }

    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'multiple', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '104']],
            line: 1049,
        );
    }

    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'multiple', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '104']],
            line: 1050,
        );
    }

    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'multiple', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '104']],
            line: 1051,
        );
    }

    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'multiple', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '104']],
            line: 1052,
        );
    }

    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'multiple', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '104']],
            line: 1053,
        );
    }

    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'multiple', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '104']],
            line: 1054,
        );
    }

    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'multiple-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '213']],
            line: 1056,
        );
    }

    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'multiple-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '212']],
            line: 1057,
        );
    }

    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'multiple-value', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '211']],
            line: 1058,
        );
    }

    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'multiple-value', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '210']],
            line: 1059,
        );
    }

    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'multiple-value', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '214']],
            line: 1060,
        );
    }

    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'multiple-value', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '214']],
            line: 1061,
        );
    }

    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'multiple-value', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '214']],
            line: 1062,
        );
    }

    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'multiple-value', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '214']],
            line: 1063,
        );
    }

    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'multiple-value', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '214']],
            line: 1064,
        );
    }

    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'multiple-value', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '214']],
            line: 1065,
        );
    }

    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'large', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1067,
        );
    }

    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'large', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1068,
        );
    }

    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'large', 'args' => [['type' => 'i32', 'value' => '100']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1069,
        );
    }

    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'large', 'args' => [['type' => 'i32', 'value' => '101']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1070,
        );
    }

    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'large', 'args' => [['type' => 'i32', 'value' => '10000']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 1071,
        );
    }

    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'large', 'args' => [['type' => 'i32', 'value' => '10001']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1072,
        );
    }

    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'large', 'args' => [['type' => 'i32', 'value' => '1000000']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1073,
        );
    }

    public function testAssertReturn60(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'large', 'args' => [['type' => 'i32', 'value' => '1000001']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1074,
        );
    }

    public function testAssertReturn61(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-block-first', 'args' => []],
            expected: [],
            line: 1076,
        );
    }

    public function testAssertReturn62(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-block-mid', 'args' => []],
            expected: [],
            line: 1077,
        );
    }

    public function testAssertReturn63(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-block-last', 'args' => []],
            expected: [],
            line: 1078,
        );
    }

    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-block-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 1079,
        );
    }

    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1081,
        );
    }

    public function testAssertReturn66(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-mid', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1082,
        );
    }

    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 1083,
        );
    }

    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 1085,
        );
    }

    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-cond', 'args' => []],
            expected: [],
            line: 1087,
        );
    }

    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 1088,
        );
    }

    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-value-cond', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 1089,
        );
    }

    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-index', 'args' => []],
            expected: [],
            line: 1091,
        );
    }

    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 1092,
        );
    }

    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-value-index', 'args' => []],
            expected: [['type' => 'i32', 'value' => '11']],
            line: 1093,
        );
    }

    public function testAssertReturn75(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-return-value', 'args' => []],
            expected: [['type' => 'i64', 'value' => '7']],
            line: 1095,
        );
    }

    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-cond', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 1097,
        );
    }

    public function testAssertReturn77(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-then', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1098,
        );
    }

    public function testAssertReturn78(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-then', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1099,
        );
    }

    public function testAssertReturn79(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-else', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 1100,
        );
    }

    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-else', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1101,
        );
    }

    public function testAssertReturn81(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-first', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 1103,
        );
    }

    public function testAssertReturn82(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-first', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 1104,
        );
    }

    public function testAssertReturn83(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-second', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1105,
        );
    }

    public function testAssertReturn84(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-second', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 1106,
        );
    }

    public function testAssertReturn85(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-cond', 'args' => []],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 1107,
        );
    }

    public function testAssertReturn86(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '12']],
            line: 1109,
        );
    }

    public function testAssertReturn87(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call-mid', 'args' => []],
            expected: [['type' => 'i32', 'value' => '13']],
            line: 1110,
        );
    }

    public function testAssertReturn88(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '14']],
            line: 1111,
        );
    }

    public function testAssertReturn89(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '20']],
            line: 1113,
        );
    }

    public function testAssertReturn90(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-mid', 'args' => []],
            expected: [['type' => 'i32', 'value' => '21']],
            line: 1114,
        );
    }

    public function testAssertReturn91(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '22']],
            line: 1115,
        );
    }

    public function testAssertReturn92(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-func', 'args' => []],
            expected: [['type' => 'i32', 'value' => '23']],
            line: 1116,
        );
    }

    public function testAssertReturn93(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.set-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '17']],
            line: 1118,
        );
    }

    public function testAssertReturn94(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.tee-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1119,
        );
    }

    public function testAssertReturn95(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-global.set-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 1120,
        );
    }

    public function testAssertReturn96(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-load-address', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1071225242']],
            line: 1122,
        );
    }

    public function testAssertReturn97(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loadN-address', 'args' => []],
            expected: [['type' => 'i64', 'value' => '30']],
            line: 1123,
        );
    }

    public function testAssertReturn98(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-address', 'args' => []],
            expected: [['type' => 'i32', 'value' => '30']],
            line: 1125,
        );
    }

    public function testAssertReturn99(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '31']],
            line: 1126,
        );
    }

    public function testAssertReturn100(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-storeN-address', 'args' => []],
            expected: [['type' => 'i32', 'value' => '32']],
            line: 1127,
        );
    }

    public function testAssertReturn101(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-storeN-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '33']],
            line: 1128,
        );
    }

    public function testAssertReturn102(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-unary-operand', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1079613850']],
            line: 1130,
        );
    }

    public function testAssertReturn103(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-left', 'args' => []],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1132,
        );
    }

    public function testAssertReturn104(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-right', 'args' => []],
            expected: [['type' => 'i64', 'value' => '45']],
            line: 1133,
        );
    }

    public function testAssertReturn105(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-test-operand', 'args' => []],
            expected: [['type' => 'i32', 'value' => '44']],
            line: 1135,
        );
    }

    public function testAssertReturn106(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-left', 'args' => []],
            expected: [['type' => 'i32', 'value' => '43']],
            line: 1137,
        );
    }

    public function testAssertReturn107(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-right', 'args' => []],
            expected: [['type' => 'i32', 'value' => '42']],
            line: 1138,
        );
    }

    public function testAssertReturn108(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-convert-operand', 'args' => []],
            expected: [['type' => 'i32', 'value' => '41']],
            line: 1140,
        );
    }

    public function testAssertReturn109(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-memory.grow-size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '40']],
            line: 1142,
        );
    }

    public function testAssertReturn110(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-block-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '19']],
            line: 1144,
        );
    }

    public function testAssertReturn111(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-block-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '17']],
            line: 1145,
        );
    }

    public function testAssertReturn112(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-block-value', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '16']],
            line: 1146,
        );
    }

    public function testAssertReturn113(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-block-value', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '16']],
            line: 1147,
        );
    }

    public function testAssertReturn114(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-block-value', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '16']],
            line: 1148,
        );
    }

    public function testAssertReturn115(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-block-value', 'args' => [['type' => 'i32', 'value' => '100000']]],
            expected: [['type' => 'i32', 'value' => '16']],
            line: 1149,
        );
    }

    public function testAssertReturn116(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 1151,
        );
    }

    public function testAssertReturn117(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 1152,
        );
    }

    public function testAssertReturn118(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br-value', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '17']],
            line: 1153,
        );
    }

    public function testAssertReturn119(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br-value', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '17']],
            line: 1154,
        );
    }

    public function testAssertReturn120(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br-value', 'args' => [['type' => 'i32', 'value' => '4294967292']]],
            expected: [['type' => 'i32', 'value' => '17']],
            line: 1155,
        );
    }

    public function testAssertReturn121(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br-value', 'args' => [['type' => 'i32', 'value' => '10213210']]],
            expected: [['type' => 'i32', 'value' => '17']],
            line: 1156,
        );
    }

    public function testAssertReturn122(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_if-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '17']],
            line: 1158,
        );
    }

    public function testAssertReturn123(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_if-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 1159,
        );
    }

    public function testAssertReturn124(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_if-value', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 1160,
        );
    }

    public function testAssertReturn125(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_if-value', 'args' => [['type' => 'i32', 'value' => '9']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 1161,
        );
    }

    public function testAssertReturn126(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_if-value', 'args' => [['type' => 'i32', 'value' => '4294967287']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 1162,
        );
    }

    public function testAssertReturn127(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_if-value', 'args' => [['type' => 'i32', 'value' => '999999']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 1163,
        );
    }

    public function testAssertReturn128(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_if-value-cond', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 1165,
        );
    }

    public function testAssertReturn129(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_if-value-cond', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 1166,
        );
    }

    public function testAssertReturn130(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_if-value-cond', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 1167,
        );
    }

    public function testAssertReturn131(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_if-value-cond', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 1168,
        );
    }

    public function testAssertReturn132(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_if-value-cond', 'args' => [['type' => 'i32', 'value' => '4293967296']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 1169,
        );
    }

    public function testAssertReturn133(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_if-value-cond', 'args' => [['type' => 'i32', 'value' => '9423975']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 1170,
        );
    }

    public function testAssertReturn134(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_table-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '17']],
            line: 1172,
        );
    }

    public function testAssertReturn135(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_table-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 1173,
        );
    }

    public function testAssertReturn136(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_table-value', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 1174,
        );
    }

    public function testAssertReturn137(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_table-value', 'args' => [['type' => 'i32', 'value' => '9']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 1175,
        );
    }

    public function testAssertReturn138(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_table-value', 'args' => [['type' => 'i32', 'value' => '4294967287']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 1176,
        );
    }

    public function testAssertReturn139(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_table-value', 'args' => [['type' => 'i32', 'value' => '999999']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 1177,
        );
    }

    public function testAssertReturn140(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_table-value-index', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 1179,
        );
    }

    public function testAssertReturn141(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_table-value-index', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 1180,
        );
    }

    public function testAssertReturn142(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_table-value-index', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 1181,
        );
    }

    public function testAssertReturn143(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_table-value-index', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 1182,
        );
    }

    public function testAssertReturn144(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_table-value-index', 'args' => [['type' => 'i32', 'value' => '4293967296']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 1183,
        );
    }

    public function testAssertReturn145(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_table-value-index', 'args' => [['type' => 'i32', 'value' => '9423975']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 1184,
        );
    }

    public function testAssertReturn146(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested-br_table-loop-block', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 1186,
        );
    }

    public function testAssertReturn147(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'meet-externref', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'externref', 'value' => '1']]],
            expected: [['type' => 'externref', 'value' => '1']],
            line: 1188,
        );
    }

    public function testAssertReturn148(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'meet-externref', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'externref', 'value' => '1']]],
            expected: [['type' => 'externref', 'value' => '1']],
            line: 1189,
        );
    }

    public function testAssertReturn149(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'meet-externref', 'args' => [['type' => 'i32', 'value' => '2'], ['type' => 'externref', 'value' => '1']]],
            expected: [['type' => 'externref', 'value' => '1']],
            line: 1190,
        );
    }

    public function testAssertInvalid150(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.1.wasm',
            text: 'type mismatch',
            line: 1193,
        );
    }

    public function testAssertInvalid151(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.2.wasm',
            text: 'type mismatch',
            line: 1200,
        );
    }

    public function testAssertInvalid152(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.3.wasm',
            text: 'type mismatch',
            line: 1207,
        );
    }

    public function testAssertInvalid153(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.4.wasm',
            text: 'type mismatch',
            line: 1213,
        );
    }

    public function testAssertInvalid154(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.5.wasm',
            text: 'type mismatch',
            line: 1221,
        );
    }

    public function testAssertInvalid155(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.6.wasm',
            text: 'type mismatch',
            line: 1232,
        );
    }

    public function testAssertInvalid156(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.7.wasm',
            text: 'type mismatch',
            line: 1243,
        );
    }

    public function testAssertInvalid157(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.8.wasm',
            text: 'type mismatch',
            line: 1249,
        );
    }

    public function testAssertInvalid158(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.9.wasm',
            text: 'type mismatch',
            line: 1255,
        );
    }

    public function testAssertInvalid159(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.10.wasm',
            text: 'type mismatch',
            line: 1261,
        );
    }

    public function testAssertInvalid160(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.11.wasm',
            text: 'type mismatch',
            line: 1267,
        );
    }

    public function testAssertInvalid161(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.12.wasm',
            text: 'type mismatch',
            line: 1276,
        );
    }

    public function testAssertInvalid162(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.13.wasm',
            text: 'type mismatch',
            line: 1283,
        );
    }

    public function testAssertInvalid163(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.14.wasm',
            text: 'type mismatch',
            line: 1295,
        );
    }

    public function testAssertInvalid164(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.15.wasm',
            text: 'type mismatch',
            line: 1307,
        );
    }

    public function testAssertInvalid165(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.16.wasm',
            text: 'type mismatch',
            line: 1318,
        );
    }

    public function testAssertInvalid166(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.17.wasm',
            text: 'type mismatch',
            line: 1330,
        );
    }

    public function testAssertInvalid167(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.18.wasm',
            text: 'type mismatch',
            line: 1342,
        );
    }

    public function testAssertInvalid168(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.19.wasm',
            text: 'unknown label',
            line: 1356,
        );
    }

    public function testAssertInvalid169(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.20.wasm',
            text: 'unknown label',
            line: 1362,
        );
    }

    public function testAssertInvalid170(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.21.wasm',
            text: 'unknown label',
            line: 1368,
        );
    }

    public function testAssertInvalid171(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.22.wasm',
            text: 'unknown label',
            line: 1375,
        );
    }

    public function testAssertInvalid172(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.23.wasm',
            text: 'unknown label',
            line: 1381,
        );
    }

    public function testAssertInvalid173(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_table.24.wasm',
            text: 'unknown label',
            line: 1387,
        );
    }
}
