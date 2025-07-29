<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class FuncTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'func.0.wasm',
            name: null,
            line: 3,
        );
    }

    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-use-1', 'args' => []],
            expected: [],
            line: 241,
        );
    }

    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-use-2', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 242,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-use-3', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 243,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-use-4', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 245,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-use-5', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 248,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-use-6', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 249,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-use-7', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 251,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'local-first-i32', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 255,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'local-first-i64', 'args' => []],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 256,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'local-first-f32', 'args' => []],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 257,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'local-first-f64', 'args' => []],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 258,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'local-second-i32', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 259,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'local-second-i64', 'args' => []],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 260,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'local-second-f32', 'args' => []],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 261,
        );
    }

    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'local-second-f64', 'args' => []],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 262,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'local-mixed', 'args' => []],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 263,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'param-first-i32', 'args' => [['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 266,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'param-first-i64', 'args' => [['type' => 'i64', 'value' => '2'], ['type' => 'i64', 'value' => '3']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 269,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'param-first-f32', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '1077936128']]],
            expected: [['type' => 'f32', 'value' => '1073741824']],
            line: 272,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'param-first-f64', 'args' => [['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f64', 'value' => '4613937818241073152']]],
            expected: [['type' => 'f64', 'value' => '4611686018427387904']],
            line: 275,
        );
    }

    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'param-second-i32', 'args' => [['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 278,
        );
    }

    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'param-second-i64', 'args' => [['type' => 'i64', 'value' => '2'], ['type' => 'i64', 'value' => '3']]],
            expected: [['type' => 'i64', 'value' => '3']],
            line: 281,
        );
    }

    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'param-second-f32', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '1077936128']]],
            expected: [['type' => 'f32', 'value' => '1077936128']],
            line: 284,
        );
    }

    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'param-second-f64', 'args' => [['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f64', 'value' => '4613937818241073152']]],
            expected: [['type' => 'f64', 'value' => '4613937818241073152']],
            line: 287,
        );
    }

    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'param-mixed', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'i32', 'value' => '2'], ['type' => 'i64', 'value' => '3'], ['type' => 'i32', 'value' => '4'], ['type' => 'f64', 'value' => '4617878467915022336'], ['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'f64', 'value' => '4617878467915022336']],
            line: 291,
        );
    }

    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'empty', 'args' => []],
            expected: [],
            line: 298,
        );
    }

    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'value-void', 'args' => []],
            expected: [],
            line: 299,
        );
    }

    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'value-i32', 'args' => []],
            expected: [['type' => 'i32', 'value' => '77']],
            line: 300,
        );
    }

    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'value-i64', 'args' => []],
            expected: [['type' => 'i64', 'value' => '7777']],
            line: 301,
        );
    }

    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'value-f32', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1117480550']],
            line: 302,
        );
    }

    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'value-f64', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4635172994171566817']],
            line: 303,
        );
    }

    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'value-i32-f64', 'args' => []],
            expected: [['type' => 'i32', 'value' => '77'], ['type' => 'f64', 'value' => '4619567317775286272']],
            line: 304,
        );
    }

    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'value-i32-i32-i32', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '3']],
            line: 305,
        );
    }

    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'value-block-void', 'args' => []],
            expected: [],
            line: 308,
        );
    }

    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'value-block-i32', 'args' => []],
            expected: [['type' => 'i32', 'value' => '77']],
            line: 309,
        );
    }

    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'value-block-i32-i64', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1'], ['type' => 'i64', 'value' => '2']],
            line: 310,
        );
    }

    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'return-empty', 'args' => []],
            expected: [],
            line: 312,
        );
    }

    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'return-i32', 'args' => []],
            expected: [['type' => 'i32', 'value' => '78']],
            line: 313,
        );
    }

    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'return-i64', 'args' => []],
            expected: [['type' => 'i64', 'value' => '7878']],
            line: 314,
        );
    }

    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'return-f32', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1117611622']],
            line: 315,
        );
    }

    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'return-f64', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4635244066603186258']],
            line: 316,
        );
    }

    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'return-i32-f64', 'args' => []],
            expected: [['type' => 'i32', 'value' => '78'], ['type' => 'f64', 'value' => '4635244066603186258']],
            line: 317,
        );
    }

    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'return-i32-i32-i32', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '3']],
            line: 318,
        );
    }

    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'return-block-i32', 'args' => []],
            expected: [['type' => 'i32', 'value' => '77']],
            line: 321,
        );
    }

    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'return-block-i32-i64', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1'], ['type' => 'i64', 'value' => '2']],
            line: 322,
        );
    }

    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-empty', 'args' => []],
            expected: [],
            line: 324,
        );
    }

    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-i32', 'args' => []],
            expected: [['type' => 'i32', 'value' => '79']],
            line: 325,
        );
    }

    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-i64', 'args' => []],
            expected: [['type' => 'i64', 'value' => '7979']],
            line: 326,
        );
    }

    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-f32', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1117768909']],
            line: 327,
        );
    }

    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-f64', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4635315139034805699']],
            line: 328,
        );
    }

    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-i32-f64', 'args' => []],
            expected: [['type' => 'i32', 'value' => '79'], ['type' => 'f64', 'value' => '4635315139034805699']],
            line: 329,
        );
    }

    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-i32-i32-i32', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '3']],
            line: 330,
        );
    }

    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-block-i32', 'args' => []],
            expected: [['type' => 'i32', 'value' => '77']],
            line: 333,
        );
    }

    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-block-i32-i64', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1'], ['type' => 'i64', 'value' => '2']],
            line: 334,
        );
    }

    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-br_if-empty', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 336,
        );
    }

    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-br_if-empty', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [],
            line: 337,
        );
    }

    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-br_if-num', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '51']],
            line: 338,
        );
    }

    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-br_if-num', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '50']],
            line: 339,
        );
    }

    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-br_if-num-num', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '51'], ['type' => 'i64', 'value' => '52']],
            line: 340,
        );
    }

    public function testAssertReturn60(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-br_if-num-num', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '50'], ['type' => 'i64', 'value' => '51']],
            line: 343,
        );
    }

    public function testAssertReturn61(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-br_table-empty', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 347,
        );
    }

    public function testAssertReturn62(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-br_table-empty', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 348,
        );
    }

    public function testAssertReturn63(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-br_table-empty', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [],
            line: 349,
        );
    }

    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-br_table-empty', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [],
            line: 350,
        );
    }

    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-br_table-num', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '50']],
            line: 351,
        );
    }

    public function testAssertReturn66(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-br_table-num', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '50']],
            line: 352,
        );
    }

    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-br_table-num', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '50']],
            line: 353,
        );
    }

    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-br_table-num', 'args' => [['type' => 'i32', 'value' => '4294967196']]],
            expected: [['type' => 'i32', 'value' => '50']],
            line: 354,
        );
    }

    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-br_table-num-num', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '50'], ['type' => 'i64', 'value' => '51']],
            line: 355,
        );
    }

    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-br_table-num-num', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '50'], ['type' => 'i64', 'value' => '51']],
            line: 358,
        );
    }

    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-br_table-num-num', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '50'], ['type' => 'i64', 'value' => '51']],
            line: 361,
        );
    }

    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-br_table-num-num', 'args' => [['type' => 'i32', 'value' => '4294967196']]],
            expected: [['type' => 'i32', 'value' => '50'], ['type' => 'i64', 'value' => '51']],
            line: 364,
        );
    }

    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-br_table-nested-empty', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 367,
        );
    }

    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-br_table-nested-empty', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 368,
        );
    }

    public function testAssertReturn75(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-br_table-nested-empty', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [],
            line: 369,
        );
    }

    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-br_table-nested-empty', 'args' => [['type' => 'i32', 'value' => '4294967294']]],
            expected: [],
            line: 370,
        );
    }

    public function testAssertReturn77(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-br_table-nested-num', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '52']],
            line: 372,
        );
    }

    public function testAssertReturn78(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-br_table-nested-num', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '50']],
            line: 375,
        );
    }

    public function testAssertReturn79(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-br_table-nested-num', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '52']],
            line: 378,
        );
    }

    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-br_table-nested-num', 'args' => [['type' => 'i32', 'value' => '4294967293']]],
            expected: [['type' => 'i32', 'value' => '52']],
            line: 381,
        );
    }

    public function testAssertReturn81(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-br_table-nested-num-num', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '101'], ['type' => 'i32', 'value' => '52']],
            line: 384,
        );
    }

    public function testAssertReturn82(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-br_table-nested-num-num', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '50'], ['type' => 'i32', 'value' => '51']],
            line: 388,
        );
    }

    public function testAssertReturn83(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-br_table-nested-num-num', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '101'], ['type' => 'i32', 'value' => '52']],
            line: 392,
        );
    }

    public function testAssertReturn84(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-br_table-nested-num-num', 'args' => [['type' => 'i32', 'value' => '4294967293']]],
            expected: [['type' => 'i32', 'value' => '101'], ['type' => 'i32', 'value' => '52']],
            line: 396,
        );
    }

    public function testAssertReturn85(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'large-sig', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i64', 'value' => '1'], ['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '1077936128'], ['type' => 'i32', 'value' => '4'], ['type' => 'f64', 'value' => '4617315517961601024'], ['type' => 'f32', 'value' => '1086324736'], ['type' => 'i32', 'value' => '7'], ['type' => 'i32', 'value' => '8'], ['type' => 'i32', 'value' => '9'], ['type' => 'f32', 'value' => '1092616192'], ['type' => 'f64', 'value' => '4622382067542392832'], ['type' => 'f64', 'value' => '4622945017495814144'], ['type' => 'f64', 'value' => '4623507967449235456'], ['type' => 'i32', 'value' => '14'], ['type' => 'i32', 'value' => '15'], ['type' => 'f32', 'value' => '1098907648']]],
            expected: [['type' => 'f64', 'value' => '4617315517961601024'], ['type' => 'f32', 'value' => '1073741824'], ['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '8'], ['type' => 'i32', 'value' => '7'], ['type' => 'i64', 'value' => '1'], ['type' => 'f32', 'value' => '1077936128'], ['type' => 'i32', 'value' => '9'], ['type' => 'i32', 'value' => '4'], ['type' => 'f32', 'value' => '1086324736'], ['type' => 'f64', 'value' => '4623507967449235456'], ['type' => 'f64', 'value' => '4622382067542392832'], ['type' => 'i32', 'value' => '15'], ['type' => 'f32', 'value' => '1098907648'], ['type' => 'i32', 'value' => '14'], ['type' => 'f64', 'value' => '4622945017495814144']],
            line: 401,
        );
    }

    public function testAssertReturn86(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'init-local-i32', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 414,
        );
    }

    public function testAssertReturn87(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'init-local-i64', 'args' => []],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 415,
        );
    }

    public function testAssertReturn88(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'init-local-f32', 'args' => []],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 416,
        );
    }

    public function testAssertReturn89(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'init-local-f64', 'args' => []],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 417,
        );
    }

    public function testModule90(): void
    {
        $this->runModuleCommand(
            filename: 'func.1.wasm',
            name: null,
            line: 422,
        );
    }

    public function testAssertInvalid91(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.2.wasm',
            text: 'unknown type',
            line: 436,
        );
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed92(): void
    {
    }

    public function testModule93(): void
    {
        $this->runModuleCommand(
            filename: 'func.4.wasm',
            name: null,
            line: 459,
        );
    }

    public function testAssertReturn94(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'f', 'args' => [['type' => 'i32', 'value' => '42']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 483,
        );
    }

    public function testAssertReturn95(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'g', 'args' => [['type' => 'i32', 'value' => '42']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 484,
        );
    }

    public function testAssertReturn96(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'p', 'args' => []],
            expected: [['type' => 'i32', 'value' => '42']],
            line: 485,
        );
    }

    public function testModule97(): void
    {
        $this->runModuleCommand(
            filename: 'func.5.wasm',
            name: null,
            line: 488,
        );
    }

    public function testAssertReturn98(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'signature-explicit-reused', 'args' => []],
            expected: [],
            line: 551,
        );
    }

    public function testAssertReturn99(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'signature-implicit-reused', 'args' => []],
            expected: [],
            line: 552,
        );
    }

    public function testAssertReturn100(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'signature-explicit-duplicate', 'args' => []],
            expected: [],
            line: 553,
        );
    }

    public function testAssertReturn101(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'signature-implicit-duplicate', 'args' => []],
            expected: [],
            line: 554,
        );
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed102(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed103(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed104(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed105(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed106(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed107(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed108(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed109(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed110(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed111(): void
    {
    }

    public function testAssertInvalid112(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.16.wasm',
            text: 'type mismatch',
            line: 634,
        );
    }

    public function testAssertInvalid113(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.17.wasm',
            text: 'type mismatch',
            line: 638,
        );
    }

    public function testAssertInvalid114(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.18.wasm',
            text: 'type mismatch',
            line: 642,
        );
    }

    public function testAssertInvalid115(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.19.wasm',
            text: 'type mismatch',
            line: 650,
        );
    }

    public function testAssertInvalid116(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.20.wasm',
            text: 'type mismatch',
            line: 654,
        );
    }

    public function testAssertInvalid117(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.21.wasm',
            text: 'type mismatch',
            line: 658,
        );
    }

    public function testAssertInvalid118(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.22.wasm',
            text: 'type mismatch',
            line: 666,
        );
    }

    public function testAssertInvalid119(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.23.wasm',
            text: 'type mismatch',
            line: 670,
        );
    }

    public function testAssertInvalid120(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.24.wasm',
            text: 'type mismatch',
            line: 674,
        );
    }

    public function testAssertInvalid121(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.25.wasm',
            text: 'type mismatch',
            line: 678,
        );
    }

    public function testAssertInvalid122(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.26.wasm',
            text: 'type mismatch',
            line: 682,
        );
    }

    public function testAssertInvalid123(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.27.wasm',
            text: 'type mismatch',
            line: 687,
        );
    }

    public function testAssertInvalid124(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.28.wasm',
            text: 'type mismatch',
            line: 693,
        );
    }

    public function testAssertInvalid125(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.29.wasm',
            text: 'type mismatch',
            line: 699,
        );
    }

    public function testAssertInvalid126(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.30.wasm',
            text: 'type mismatch',
            line: 705,
        );
    }

    public function testAssertInvalid127(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.31.wasm',
            text: 'type mismatch',
            line: 711,
        );
    }

    public function testAssertInvalid128(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.32.wasm',
            text: 'type mismatch',
            line: 717,
        );
    }

    public function testAssertInvalid129(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.33.wasm',
            text: 'type mismatch',
            line: 723,
        );
    }

    public function testAssertInvalid130(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.34.wasm',
            text: 'type mismatch',
            line: 730,
        );
    }

    public function testAssertInvalid131(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.35.wasm',
            text: 'type mismatch',
            line: 736,
        );
    }

    public function testAssertInvalid132(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.36.wasm',
            text: 'type mismatch',
            line: 742,
        );
    }

    public function testAssertInvalid133(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.37.wasm',
            text: 'type mismatch',
            line: 748,
        );
    }

    public function testAssertInvalid134(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.38.wasm',
            text: 'type mismatch',
            line: 754,
        );
    }

    public function testAssertInvalid135(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.39.wasm',
            text: 'type mismatch',
            line: 760,
        );
    }

    public function testAssertInvalid136(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.40.wasm',
            text: 'type mismatch',
            line: 767,
        );
    }

    public function testAssertInvalid137(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.41.wasm',
            text: 'type mismatch',
            line: 773,
        );
    }

    public function testAssertInvalid138(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.42.wasm',
            text: 'type mismatch',
            line: 779,
        );
    }

    public function testAssertInvalid139(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.43.wasm',
            text: 'type mismatch',
            line: 785,
        );
    }

    public function testAssertInvalid140(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.44.wasm',
            text: 'type mismatch',
            line: 791,
        );
    }

    public function testAssertInvalid141(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.45.wasm',
            text: 'type mismatch',
            line: 797,
        );
    }

    public function testAssertInvalid142(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.46.wasm',
            text: 'type mismatch',
            line: 803,
        );
    }

    public function testAssertInvalid143(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.47.wasm',
            text: 'type mismatch',
            line: 809,
        );
    }

    public function testAssertInvalid144(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.48.wasm',
            text: 'type mismatch',
            line: 815,
        );
    }

    public function testAssertInvalid145(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.49.wasm',
            text: 'type mismatch',
            line: 822,
        );
    }

    public function testAssertInvalid146(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.50.wasm',
            text: 'type mismatch',
            line: 828,
        );
    }

    public function testAssertInvalid147(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.51.wasm',
            text: 'type mismatch',
            line: 834,
        );
    }

    public function testAssertInvalid148(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.52.wasm',
            text: 'type mismatch',
            line: 840,
        );
    }

    public function testAssertInvalid149(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.53.wasm',
            text: 'type mismatch',
            line: 846,
        );
    }

    public function testAssertInvalid150(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.54.wasm',
            text: 'type mismatch',
            line: 852,
        );
    }

    public function testAssertInvalid151(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.55.wasm',
            text: 'type mismatch',
            line: 858,
        );
    }

    public function testAssertInvalid152(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.56.wasm',
            text: 'type mismatch',
            line: 864,
        );
    }

    public function testAssertInvalid153(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.57.wasm',
            text: 'type mismatch',
            line: 870,
        );
    }

    public function testAssertInvalid154(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.58.wasm',
            text: 'type mismatch',
            line: 877,
        );
    }

    public function testAssertInvalid155(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.59.wasm',
            text: 'type mismatch',
            line: 883,
        );
    }

    public function testAssertInvalid156(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.60.wasm',
            text: 'type mismatch',
            line: 889,
        );
    }

    public function testAssertInvalid157(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.61.wasm',
            text: 'type mismatch',
            line: 895,
        );
    }

    public function testAssertInvalid158(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.62.wasm',
            text: 'type mismatch',
            line: 901,
        );
    }

    public function testAssertInvalid159(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'func.63.wasm',
            text: 'type mismatch',
            line: 907,
        );
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed160(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed161(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed162(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed163(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed164(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed165(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed166(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed167(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed168(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed169(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed170(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed171(): void
    {
    }
}
