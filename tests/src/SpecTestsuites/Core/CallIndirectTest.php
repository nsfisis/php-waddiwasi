<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class CallIndirectTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'call_indirect.0.wasm',
            name: null,
            line: 3,
        );
    }

    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-i32', 'args' => []],
            expected: [['type' => 'i32', 'value' => '306']],
            line: 471,
        );
    }

    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-i64', 'args' => []],
            expected: [['type' => 'i64', 'value' => '356']],
            line: 472,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-f32', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1165172736']],
            line: 473,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-f64', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4660882566700597248']],
            line: 474,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-f64-i32', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4660882566700597248'], ['type' => 'i32', 'value' => '32']],
            line: 475,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-index', 'args' => []],
            expected: [['type' => 'i64', 'value' => '100']],
            line: 477,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-first-i32', 'args' => []],
            expected: [['type' => 'i32', 'value' => '32']],
            line: 479,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-first-i64', 'args' => []],
            expected: [['type' => 'i64', 'value' => '64']],
            line: 480,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-first-f32', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1068037571']],
            line: 481,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-first-f64', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4610064722561534525']],
            line: 482,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-second-i32', 'args' => []],
            expected: [['type' => 'i32', 'value' => '32']],
            line: 484,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-second-i64', 'args' => []],
            expected: [['type' => 'i64', 'value' => '64']],
            line: 485,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-second-f32', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1107296256']],
            line: 486,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-second-f64', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4634211053438658150']],
            line: 487,
        );
    }

    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-all-f64-i32', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4660882566700597248'], ['type' => 'i32', 'value' => '32']],
            line: 489,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-all-i32-f64', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1'], ['type' => 'f64', 'value' => '4611686018427387904']],
            line: 490,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-all-i32-i64', 'args' => []],
            expected: [['type' => 'i64', 'value' => '2'], ['type' => 'i32', 'value' => '1']],
            line: 491,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'dispatch', 'args' => [['type' => 'i32', 'value' => '5'], ['type' => 'i64', 'value' => '2']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 493,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'dispatch', 'args' => [['type' => 'i32', 'value' => '5'], ['type' => 'i64', 'value' => '5']]],
            expected: [['type' => 'i64', 'value' => '5']],
            line: 494,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'dispatch', 'args' => [['type' => 'i32', 'value' => '12'], ['type' => 'i64', 'value' => '5']]],
            expected: [['type' => 'i64', 'value' => '120']],
            line: 495,
        );
    }

    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'dispatch', 'args' => [['type' => 'i32', 'value' => '13'], ['type' => 'i64', 'value' => '5']]],
            expected: [['type' => 'i64', 'value' => '8']],
            line: 496,
        );
    }

    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'dispatch', 'args' => [['type' => 'i32', 'value' => '20'], ['type' => 'i64', 'value' => '2']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 497,
        );
    }

    public function testAssertTrap23(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'dispatch', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i64', 'value' => '2']]],
            text: 'indirect call type mismatch',
            line: 498,
        );
    }

    public function testAssertTrap24(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'dispatch', 'args' => [['type' => 'i32', 'value' => '15'], ['type' => 'i64', 'value' => '2']]],
            text: 'indirect call type mismatch',
            line: 499,
        );
    }

    public function testAssertTrap25(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'dispatch', 'args' => [['type' => 'i32', 'value' => '32'], ['type' => 'i64', 'value' => '2']]],
            text: 'undefined element',
            line: 500,
        );
    }

    public function testAssertTrap26(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'dispatch', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i64', 'value' => '2']]],
            text: 'undefined element',
            line: 501,
        );
    }

    public function testAssertTrap27(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'dispatch', 'args' => [['type' => 'i32', 'value' => '1213432423'], ['type' => 'i64', 'value' => '2']]],
            text: 'undefined element',
            line: 502,
        );
    }

    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'dispatch-structural-i64', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i64', 'value' => '9']],
            line: 504,
        );
    }

    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'dispatch-structural-i64', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i64', 'value' => '362880']],
            line: 505,
        );
    }

    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'dispatch-structural-i64', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i64', 'value' => '55']],
            line: 506,
        );
    }

    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'dispatch-structural-i64', 'args' => [['type' => 'i32', 'value' => '20']]],
            expected: [['type' => 'i64', 'value' => '9']],
            line: 507,
        );
    }

    public function testAssertTrap32(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'dispatch-structural-i64', 'args' => [['type' => 'i32', 'value' => '11']]],
            text: 'indirect call type mismatch',
            line: 508,
        );
    }

    public function testAssertTrap33(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'dispatch-structural-i64', 'args' => [['type' => 'i32', 'value' => '22']]],
            text: 'indirect call type mismatch',
            line: 509,
        );
    }

    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'dispatch-structural-i32', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 511,
        );
    }

    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'dispatch-structural-i32', 'args' => [['type' => 'i32', 'value' => '23']]],
            expected: [['type' => 'i32', 'value' => '362880']],
            line: 512,
        );
    }

    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'dispatch-structural-i32', 'args' => [['type' => 'i32', 'value' => '26']]],
            expected: [['type' => 'i32', 'value' => '55']],
            line: 513,
        );
    }

    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'dispatch-structural-i32', 'args' => [['type' => 'i32', 'value' => '19']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 514,
        );
    }

    public function testAssertTrap38(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'dispatch-structural-i32', 'args' => [['type' => 'i32', 'value' => '9']]],
            text: 'indirect call type mismatch',
            line: 515,
        );
    }

    public function testAssertTrap39(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'dispatch-structural-i32', 'args' => [['type' => 'i32', 'value' => '21']]],
            text: 'indirect call type mismatch',
            line: 516,
        );
    }

    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'dispatch-structural-f32', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'f32', 'value' => '1091567616']],
            line: 518,
        );
    }

    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'dispatch-structural-f32', 'args' => [['type' => 'i32', 'value' => '24']]],
            expected: [['type' => 'f32', 'value' => '1219571712']],
            line: 519,
        );
    }

    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'dispatch-structural-f32', 'args' => [['type' => 'i32', 'value' => '27']]],
            expected: [['type' => 'f32', 'value' => '1113325568']],
            line: 520,
        );
    }

    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'dispatch-structural-f32', 'args' => [['type' => 'i32', 'value' => '21']]],
            expected: [['type' => 'f32', 'value' => '1091567616']],
            line: 521,
        );
    }

    public function testAssertTrap44(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'dispatch-structural-f32', 'args' => [['type' => 'i32', 'value' => '8']]],
            text: 'indirect call type mismatch',
            line: 522,
        );
    }

    public function testAssertTrap45(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'dispatch-structural-f32', 'args' => [['type' => 'i32', 'value' => '19']]],
            text: 'indirect call type mismatch',
            line: 523,
        );
    }

    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'dispatch-structural-f64', 'args' => [['type' => 'i32', 'value' => '7']]],
            expected: [['type' => 'f64', 'value' => '4621256167635550208']],
            line: 525,
        );
    }

    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'dispatch-structural-f64', 'args' => [['type' => 'i32', 'value' => '25']]],
            expected: [['type' => 'f64', 'value' => '4689977843394805760']],
            line: 526,
        );
    }

    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'dispatch-structural-f64', 'args' => [['type' => 'i32', 'value' => '28']]],
            expected: [['type' => 'f64', 'value' => '4632937379169042432']],
            line: 527,
        );
    }

    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'dispatch-structural-f64', 'args' => [['type' => 'i32', 'value' => '22']]],
            expected: [['type' => 'f64', 'value' => '4621256167635550208']],
            line: 528,
        );
    }

    public function testAssertTrap50(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'dispatch-structural-f64', 'args' => [['type' => 'i32', 'value' => '10']]],
            text: 'indirect call type mismatch',
            line: 529,
        );
    }

    public function testAssertTrap51(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'dispatch-structural-f64', 'args' => [['type' => 'i32', 'value' => '18']]],
            text: 'indirect call type mismatch',
            line: 530,
        );
    }

    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fac-i64', 'args' => [['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 532,
        );
    }

    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fac-i64', 'args' => [['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 533,
        );
    }

    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fac-i64', 'args' => [['type' => 'i64', 'value' => '5']]],
            expected: [['type' => 'i64', 'value' => '120']],
            line: 534,
        );
    }

    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fac-i64', 'args' => [['type' => 'i64', 'value' => '25']]],
            expected: [['type' => 'i64', 'value' => '7034535277573963776']],
            line: 535,
        );
    }

    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fac-i32', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 537,
        );
    }

    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fac-i32', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 538,
        );
    }

    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fac-i32', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '120']],
            line: 539,
        );
    }

    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fac-i32', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '3628800']],
            line: 540,
        );
    }

    public function testAssertReturn60(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fac-f32', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 542,
        );
    }

    public function testAssertReturn61(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fac-f32', 'args' => [['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 543,
        );
    }

    public function testAssertReturn62(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fac-f32', 'args' => [['type' => 'f32', 'value' => '1084227584']]],
            expected: [['type' => 'f32', 'value' => '1123024896']],
            line: 544,
        );
    }

    public function testAssertReturn63(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fac-f32', 'args' => [['type' => 'f32', 'value' => '1092616192']]],
            expected: [['type' => 'f32', 'value' => '1247640576']],
            line: 545,
        );
    }

    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fac-f64', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 547,
        );
    }

    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fac-f64', 'args' => [['type' => 'f64', 'value' => '4607182418800017408']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 548,
        );
    }

    public function testAssertReturn66(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fac-f64', 'args' => [['type' => 'f64', 'value' => '4617315517961601024']]],
            expected: [['type' => 'f64', 'value' => '4638144666238189568']],
            line: 549,
        );
    }

    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fac-f64', 'args' => [['type' => 'f64', 'value' => '4621819117588971520']]],
            expected: [['type' => 'f64', 'value' => '4705047200009289728']],
            line: 550,
        );
    }

    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fib-i64', 'args' => [['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 552,
        );
    }

    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fib-i64', 'args' => [['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 553,
        );
    }

    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fib-i64', 'args' => [['type' => 'i64', 'value' => '2']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 554,
        );
    }

    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fib-i64', 'args' => [['type' => 'i64', 'value' => '5']]],
            expected: [['type' => 'i64', 'value' => '8']],
            line: 555,
        );
    }

    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fib-i64', 'args' => [['type' => 'i64', 'value' => '20']]],
            expected: [['type' => 'i64', 'value' => '10946']],
            line: 556,
        );
    }

    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fib-i32', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 558,
        );
    }

    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fib-i32', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 559,
        );
    }

    public function testAssertReturn75(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fib-i32', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 560,
        );
    }

    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fib-i32', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 561,
        );
    }

    public function testAssertReturn77(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fib-i32', 'args' => [['type' => 'i32', 'value' => '20']]],
            expected: [['type' => 'i32', 'value' => '10946']],
            line: 562,
        );
    }

    public function testAssertReturn78(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fib-f32', 'args' => [['type' => 'f32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 564,
        );
    }

    public function testAssertReturn79(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fib-f32', 'args' => [['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 565,
        );
    }

    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fib-f32', 'args' => [['type' => 'f32', 'value' => '1073741824']]],
            expected: [['type' => 'f32', 'value' => '1073741824']],
            line: 566,
        );
    }

    public function testAssertReturn81(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fib-f32', 'args' => [['type' => 'f32', 'value' => '1084227584']]],
            expected: [['type' => 'f32', 'value' => '1090519040']],
            line: 567,
        );
    }

    public function testAssertReturn82(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fib-f32', 'args' => [['type' => 'f32', 'value' => '1101004800']]],
            expected: [['type' => 'f32', 'value' => '1177225216']],
            line: 568,
        );
    }

    public function testAssertReturn83(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fib-f64', 'args' => [['type' => 'f64', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 570,
        );
    }

    public function testAssertReturn84(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fib-f64', 'args' => [['type' => 'f64', 'value' => '4607182418800017408']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 571,
        );
    }

    public function testAssertReturn85(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fib-f64', 'args' => [['type' => 'f64', 'value' => '4611686018427387904']]],
            expected: [['type' => 'f64', 'value' => '4611686018427387904']],
            line: 572,
        );
    }

    public function testAssertReturn86(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fib-f64', 'args' => [['type' => 'f64', 'value' => '4617315517961601024']]],
            expected: [['type' => 'f64', 'value' => '4620693217682128896']],
            line: 573,
        );
    }

    public function testAssertReturn87(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fib-f64', 'args' => [['type' => 'f64', 'value' => '4626322717216342016']]],
            expected: [['type' => 'f64', 'value' => '4667243241467281408']],
            line: 574,
        );
    }

    public function testAssertReturn88(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'even', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '44']],
            line: 576,
        );
    }

    public function testAssertReturn89(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'even', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '99']],
            line: 577,
        );
    }

    public function testAssertReturn90(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'even', 'args' => [['type' => 'i32', 'value' => '100']]],
            expected: [['type' => 'i32', 'value' => '44']],
            line: 578,
        );
    }

    public function testAssertReturn91(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'even', 'args' => [['type' => 'i32', 'value' => '77']]],
            expected: [['type' => 'i32', 'value' => '99']],
            line: 579,
        );
    }

    public function testAssertReturn92(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'odd', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '99']],
            line: 580,
        );
    }

    public function testAssertReturn93(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'odd', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '44']],
            line: 581,
        );
    }

    public function testAssertReturn94(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'odd', 'args' => [['type' => 'i32', 'value' => '200']]],
            expected: [['type' => 'i32', 'value' => '99']],
            line: 582,
        );
    }

    public function testAssertReturn95(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'odd', 'args' => [['type' => 'i32', 'value' => '77']]],
            expected: [['type' => 'i32', 'value' => '44']],
            line: 583,
        );
    }

    public function testAssertExhaustion96(): void
    {
        $this->runAssertExhaustionCommand(
            action: ['type' => 'invoke', 'field' => 'runaway', 'args' => []],
            text: 'call stack exhausted',
            line: 585,
        );
    }

    public function testAssertExhaustion97(): void
    {
        $this->runAssertExhaustionCommand(
            action: ['type' => 'invoke', 'field' => 'mutual-runaway', 'args' => []],
            text: 'call stack exhausted',
            line: 586,
        );
    }

    public function testAssertReturn98(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '306']],
            line: 588,
        );
    }

    public function testAssertReturn99(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-mid', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 589,
        );
    }

    public function testAssertReturn100(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 590,
        );
    }

    public function testAssertReturn101(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-condition', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 592,
        );
    }

    public function testAssertReturn102(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-first', 'args' => []],
            expected: [['type' => 'i64', 'value' => '356']],
            line: 594,
        );
    }

    public function testAssertReturn103(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 595,
        );
    }

    public function testAssertReturn104(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-first', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1165172736']],
            line: 597,
        );
    }

    public function testAssertReturn105(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 598,
        );
    }

    public function testAssertReturn106(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-first', 'args' => []],
            expected: [],
            line: 600,
        );
    }

    public function testAssertReturn107(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-last', 'args' => []],
            expected: [],
            line: 601,
        );
    }

    public function testAssertReturn108(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-memory.grow-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 603,
        );
    }

    public function testAssertReturn109(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-return-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 604,
        );
    }

    public function testAssertReturn110(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-drop-operand', 'args' => []],
            expected: [],
            line: 605,
        );
    }

    public function testAssertReturn111(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br-value', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 606,
        );
    }

    public function testAssertReturn112(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.set-value', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 607,
        );
    }

    public function testAssertReturn113(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.tee-value', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 608,
        );
    }

    public function testAssertReturn114(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-global.set-value', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 609,
        );
    }

    public function testAssertReturn115(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-load-operand', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 610,
        );
    }

    public function testAssertReturn116(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-unary-operand', 'args' => []],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 612,
        );
    }

    public function testAssertReturn117(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-left', 'args' => []],
            expected: [['type' => 'i32', 'value' => '11']],
            line: 613,
        );
    }

    public function testAssertReturn118(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-right', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 614,
        );
    }

    public function testAssertReturn119(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-test-operand', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 615,
        );
    }

    public function testAssertReturn120(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-left', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 616,
        );
    }

    public function testAssertReturn121(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-right', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 617,
        );
    }

    public function testAssertReturn122(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-convert-operand', 'args' => []],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 618,
        );
    }

    public function testModule123(): void
    {
        $this->runModuleCommand(
            filename: 'call_indirect.1.wasm',
            name: null,
            line: 623,
        );
    }

    public function testAssertReturn124(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'call-1', 'args' => [['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '3'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 650,
        );
    }

    public function testAssertReturn125(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'call-1', 'args' => [['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '3'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 651,
        );
    }

    public function testAssertTrap126(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'call-1', 'args' => [['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '3'], ['type' => 'i32', 'value' => '2']]],
            text: 'undefined element',
            line: 652,
        );
    }

    public function testAssertReturn127(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'call-2', 'args' => [['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '3'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 654,
        );
    }

    public function testAssertReturn128(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'call-2', 'args' => [['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '3'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 655,
        );
    }

    public function testAssertReturn129(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'call-2', 'args' => [['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '3'], ['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 656,
        );
    }

    public function testAssertTrap130(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'call-2', 'args' => [['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '3'], ['type' => 'i32', 'value' => '3']]],
            text: 'undefined element',
            line: 657,
        );
    }

    public function testAssertReturn131(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'call-3', 'args' => [['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '3'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 659,
        );
    }

    public function testAssertReturn132(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'call-3', 'args' => [['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '3'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 660,
        );
    }

    public function testAssertTrap133(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'call-3', 'args' => [['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '3'], ['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 661,
        );
    }

    public function testAssertTrap134(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'call-3', 'args' => [['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '3'], ['type' => 'i32', 'value' => '3']]],
            text: 'indirect call type mismatch',
            line: 662,
        );
    }

    public function testAssertTrap135(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'call-3', 'args' => [['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '3'], ['type' => 'i32', 'value' => '4']]],
            text: 'undefined element',
            line: 663,
        );
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed136(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed137(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed138(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed139(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed140(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed141(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed142(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed143(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed144(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed145(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed146(): void
    {
    }

    public function testAssertInvalid147(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call_indirect.13.wasm',
            text: 'unknown table',
            line: 791,
        );
    }

    public function testAssertInvalid148(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call_indirect.14.wasm',
            text: 'type mismatch',
            line: 799,
        );
    }

    public function testAssertInvalid149(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call_indirect.15.wasm',
            text: 'type mismatch',
            line: 807,
        );
    }

    public function testAssertInvalid150(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call_indirect.16.wasm',
            text: 'type mismatch',
            line: 816,
        );
    }

    public function testAssertInvalid151(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call_indirect.17.wasm',
            text: 'type mismatch',
            line: 824,
        );
    }

    public function testAssertInvalid152(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call_indirect.18.wasm',
            text: 'type mismatch',
            line: 832,
        );
    }

    public function testAssertInvalid153(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call_indirect.19.wasm',
            text: 'type mismatch',
            line: 840,
        );
    }

    public function testAssertInvalid154(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call_indirect.20.wasm',
            text: 'type mismatch',
            line: 851,
        );
    }

    public function testAssertInvalid155(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call_indirect.21.wasm',
            text: 'type mismatch',
            line: 859,
        );
    }

    public function testAssertInvalid156(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call_indirect.22.wasm',
            text: 'type mismatch',
            line: 868,
        );
    }

    public function testAssertInvalid157(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call_indirect.23.wasm',
            text: 'type mismatch',
            line: 878,
        );
    }

    public function testAssertInvalid158(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call_indirect.24.wasm',
            text: 'type mismatch',
            line: 888,
        );
    }

    public function testAssertInvalid159(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call_indirect.25.wasm',
            text: 'type mismatch',
            line: 898,
        );
    }

    public function testAssertInvalid160(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call_indirect.26.wasm',
            text: 'type mismatch',
            line: 909,
        );
    }

    public function testAssertInvalid161(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call_indirect.27.wasm',
            text: 'type mismatch',
            line: 922,
        );
    }

    public function testAssertInvalid162(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call_indirect.28.wasm',
            text: 'type mismatch',
            line: 935,
        );
    }

    public function testAssertInvalid163(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call_indirect.29.wasm',
            text: 'type mismatch',
            line: 948,
        );
    }

    public function testAssertInvalid164(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call_indirect.30.wasm',
            text: 'type mismatch',
            line: 961,
        );
    }

    public function testAssertInvalid165(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call_indirect.31.wasm',
            text: 'type mismatch',
            line: 977,
        );
    }

    public function testAssertInvalid166(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call_indirect.32.wasm',
            text: 'unknown type',
            line: 997,
        );
    }

    public function testAssertInvalid167(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call_indirect.33.wasm',
            text: 'unknown type',
            line: 1004,
        );
    }

    public function testAssertInvalid168(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'call_indirect.34.wasm',
            text: 'unknown function',
            line: 1015,
        );
    }

    public function testModule169(): void
    {
        $this->runModuleCommand(
            filename: 'call_indirect.35.wasm',
            name: null,
            line: 1024,
        );
    }
}
