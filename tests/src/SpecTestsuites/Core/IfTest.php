<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class IfTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'if.0.wasm',
            name: null,
            line: 3,
        );
    }

    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'empty', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 537,
        );
    }

    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'empty', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 538,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'empty', 'args' => [['type' => 'i32', 'value' => '100']]],
            expected: [],
            line: 539,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'empty', 'args' => [['type' => 'i32', 'value' => '4294967294']]],
            expected: [],
            line: 540,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'singular', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 542,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'singular', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 543,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'singular', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 544,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'singular', 'args' => [['type' => 'i32', 'value' => '4294967286']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 545,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'multi', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '9'], ['type' => 'i32', 'value' => '4294967295']],
            line: 547,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'multi', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '8'], ['type' => 'i32', 'value' => '1']],
            line: 548,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'multi', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '8'], ['type' => 'i32', 'value' => '1']],
            line: 549,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'multi', 'args' => [['type' => 'i32', 'value' => '4294967291']]],
            expected: [['type' => 'i32', 'value' => '8'], ['type' => 'i32', 'value' => '1']],
            line: 550,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '11']],
            line: 552,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 553,
        );
    }

    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 554,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested', 'args' => [['type' => 'i32', 'value' => '3'], ['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 555,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '4294967196']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 556,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested', 'args' => [['type' => 'i32', 'value' => '10'], ['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 557,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 558,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'nested', 'args' => [['type' => 'i32', 'value' => '4294967185'], ['type' => 'i32', 'value' => '4294967294']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 559,
        );
    }

    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-first', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 561,
        );
    }

    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-first', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 562,
        );
    }

    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-mid', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 563,
        );
    }

    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-mid', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 564,
        );
    }

    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-last', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 565,
        );
    }

    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-last', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 566,
        );
    }

    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-first', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 568,
        );
    }

    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-first', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 569,
        );
    }

    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-mid', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 570,
        );
    }

    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-mid', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 571,
        );
    }

    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-last', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 572,
        );
    }

    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-last', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 573,
        );
    }

    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-condition', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 575,
        );
    }

    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-condition', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 576,
        );
    }

    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-first', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 578,
        );
    }

    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-first', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 579,
        );
    }

    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-last', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 580,
        );
    }

    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-last', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 581,
        );
    }

    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-first', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 583,
        );
    }

    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-first', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 584,
        );
    }

    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-last', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 585,
        );
    }

    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-last', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 586,
        );
    }

    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-first', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 588,
        );
    }

    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-first', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 589,
        );
    }

    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-mid', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 590,
        );
    }

    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-mid', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 591,
        );
    }

    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-last', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 592,
        );
    }

    public function testAssertTrap48(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-last', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'undefined element',
            line: 593,
        );
    }

    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-first', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 595,
        );
    }

    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-first', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 596,
        );
    }

    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-last', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 597,
        );
    }

    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-last', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 598,
        );
    }

    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-memory.grow-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 600,
        );
    }

    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-memory.grow-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 601,
        );
    }

    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 603,
        );
    }

    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 604,
        );
    }

    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-return-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 606,
        );
    }

    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-return-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 607,
        );
    }

    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-drop-operand', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 609,
        );
    }

    public function testAssertReturn60(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-drop-operand', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 610,
        );
    }

    public function testAssertReturn61(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 612,
        );
    }

    public function testAssertReturn62(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 613,
        );
    }

    public function testAssertReturn63(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.set-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 615,
        );
    }

    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.set-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 616,
        );
    }

    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.tee-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 618,
        );
    }

    public function testAssertReturn66(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.tee-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 619,
        );
    }

    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-global.set-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 621,
        );
    }

    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-global.set-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 622,
        );
    }

    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-load-operand', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 624,
        );
    }

    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-load-operand', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 625,
        );
    }

    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-unary-operand', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 627,
        );
    }

    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-unary-operand', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 628,
        );
    }

    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-unary-operand', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 629,
        );
    }

    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-operand', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '15']],
            line: 631,
        );
    }

    public function testAssertReturn75(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-operand', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '4294967284']],
            line: 632,
        );
    }

    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-operand', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967281']],
            line: 633,
        );
    }

    public function testAssertReturn77(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-operand', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '12']],
            line: 634,
        );
    }

    public function testAssertReturn78(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-test-operand', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 636,
        );
    }

    public function testAssertReturn79(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-test-operand', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 637,
        );
    }

    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-operand', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 639,
        );
    }

    public function testAssertReturn81(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-operand', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 640,
        );
    }

    public function testAssertReturn82(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-operand', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 641,
        );
    }

    public function testAssertReturn83(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-operand', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 642,
        );
    }

    public function testAssertReturn84(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-operands', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967284']],
            line: 644,
        );
    }

    public function testAssertReturn85(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-operands', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '12']],
            line: 645,
        );
    }

    public function testAssertReturn86(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-operands', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 647,
        );
    }

    public function testAssertReturn87(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-operands', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 648,
        );
    }

    public function testAssertReturn88(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-mixed-operands', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967293']],
            line: 650,
        );
    }

    public function testAssertReturn89(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-mixed-operands', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '27']],
            line: 651,
        );
    }

    public function testAssertReturn90(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-bare', 'args' => []],
            expected: [['type' => 'i32', 'value' => '19']],
            line: 653,
        );
    }

    public function testAssertReturn91(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '18']],
            line: 654,
        );
    }

    public function testAssertReturn92(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '21']],
            line: 655,
        );
    }

    public function testAssertReturn93(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-multi-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967278'], ['type' => 'i32', 'value' => '18'], ['type' => 'i64', 'value' => '18446744073709551598']],
            line: 656,
        );
    }

    public function testAssertReturn94(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'break-multi-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '18'], ['type' => 'i32', 'value' => '4294967278'], ['type' => 'i64', 'value' => '18']],
            line: 659,
        );
    }

    public function testAssertReturn95(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'param', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 663,
        );
    }

    public function testAssertReturn96(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'param', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 664,
        );
    }

    public function testAssertReturn97(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'params', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 665,
        );
    }

    public function testAssertReturn98(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'params', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 666,
        );
    }

    public function testAssertReturn99(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'params-id', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 667,
        );
    }

    public function testAssertReturn100(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'params-id', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 668,
        );
    }

    public function testAssertReturn101(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'param-break', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 669,
        );
    }

    public function testAssertReturn102(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'param-break', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 670,
        );
    }

    public function testAssertReturn103(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'params-break', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 671,
        );
    }

    public function testAssertReturn104(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'params-break', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 672,
        );
    }

    public function testAssertReturn105(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'params-id-break', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 673,
        );
    }

    public function testAssertReturn106(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'params-id-break', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 674,
        );
    }

    public function testAssertReturn107(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'effects', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '4294967282']],
            line: 676,
        );
    }

    public function testAssertReturn108(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'effects', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967290']],
            line: 677,
        );
    }

    public function testAssertReturn109(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add64_u_with_carry', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0'], ['type' => 'i32', 'value' => '0']],
            line: 680,
        );
    }

    public function testAssertReturn110(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add64_u_with_carry', 'args' => [['type' => 'i64', 'value' => '100'], ['type' => 'i64', 'value' => '124'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '224'], ['type' => 'i32', 'value' => '0']],
            line: 684,
        );
    }

    public function testAssertReturn111(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add64_u_with_carry', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i32', 'value' => '0']],
            line: 688,
        );
    }

    public function testAssertReturn112(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add64_u_with_carry', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0'], ['type' => 'i32', 'value' => '1']],
            line: 692,
        );
    }

    public function testAssertReturn113(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add64_u_with_carry', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551614'], ['type' => 'i32', 'value' => '1']],
            line: 696,
        );
    }

    public function testAssertReturn114(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add64_u_with_carry', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0'], ['type' => 'i32', 'value' => '1']],
            line: 700,
        );
    }

    public function testAssertReturn115(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add64_u_with_carry', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '1'], ['type' => 'i32', 'value' => '1']],
            line: 704,
        );
    }

    public function testAssertReturn116(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add64_u_with_carry', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0'], ['type' => 'i32', 'value' => '1']],
            line: 708,
        );
    }

    public function testAssertReturn117(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add64_u_saturated', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 713,
        );
    }

    public function testAssertReturn118(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add64_u_saturated', 'args' => [['type' => 'i64', 'value' => '1230'], ['type' => 'i64', 'value' => '23']]],
            expected: [['type' => 'i64', 'value' => '1253']],
            line: 716,
        );
    }

    public function testAssertReturn119(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add64_u_saturated', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 719,
        );
    }

    public function testAssertReturn120(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add64_u_saturated', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 722,
        );
    }

    public function testAssertReturn121(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add64_u_saturated', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 725,
        );
    }

    public function testAssertReturn122(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add64_u_saturated', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 728,
        );
    }

    public function testAssertReturn123(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-use', 'args' => []],
            expected: [],
            line: 731,
        );
    }

    public function testAssertReturn124(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'atypical-condition', 'args' => []],
            expected: [],
            line: 733,
        );
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed125(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed126(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed127(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed128(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed129(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed130(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed131(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed132(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed133(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed134(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed135(): void
    {
    }

    public function testAssertInvalid136(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.12.wasm',
            text: 'type mismatch',
            line: 836,
        );
    }

    public function testAssertInvalid137(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.13.wasm',
            text: 'type mismatch',
            line: 844,
        );
    }

    public function testAssertInvalid138(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.14.wasm',
            text: 'type mismatch',
            line: 848,
        );
    }

    public function testAssertInvalid139(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.15.wasm',
            text: 'type mismatch',
            line: 852,
        );
    }

    public function testAssertInvalid140(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.16.wasm',
            text: 'type mismatch',
            line: 856,
        );
    }

    public function testAssertInvalid141(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.17.wasm',
            text: 'type mismatch',
            line: 861,
        );
    }

    public function testAssertInvalid142(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.18.wasm',
            text: 'type mismatch',
            line: 865,
        );
    }

    public function testAssertInvalid143(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.19.wasm',
            text: 'type mismatch',
            line: 869,
        );
    }

    public function testAssertInvalid144(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.20.wasm',
            text: 'type mismatch',
            line: 873,
        );
    }

    public function testAssertInvalid145(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.21.wasm',
            text: 'type mismatch',
            line: 878,
        );
    }

    public function testAssertInvalid146(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.22.wasm',
            text: 'type mismatch',
            line: 884,
        );
    }

    public function testAssertInvalid147(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.23.wasm',
            text: 'type mismatch',
            line: 890,
        );
    }

    public function testAssertInvalid148(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.24.wasm',
            text: 'type mismatch',
            line: 896,
        );
    }

    public function testAssertInvalid149(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.25.wasm',
            text: 'type mismatch',
            line: 903,
        );
    }

    public function testAssertInvalid150(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.26.wasm',
            text: 'type mismatch',
            line: 909,
        );
    }

    public function testAssertInvalid151(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.27.wasm',
            text: 'type mismatch',
            line: 915,
        );
    }

    public function testAssertInvalid152(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.28.wasm',
            text: 'type mismatch',
            line: 921,
        );
    }

    public function testAssertInvalid153(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.29.wasm',
            text: 'type mismatch',
            line: 928,
        );
    }

    public function testAssertInvalid154(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.30.wasm',
            text: 'type mismatch',
            line: 934,
        );
    }

    public function testAssertInvalid155(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.31.wasm',
            text: 'type mismatch',
            line: 940,
        );
    }

    public function testAssertInvalid156(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.32.wasm',
            text: 'type mismatch',
            line: 947,
        );
    }

    public function testAssertInvalid157(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.33.wasm',
            text: 'type mismatch',
            line: 953,
        );
    }

    public function testAssertInvalid158(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.34.wasm',
            text: 'type mismatch',
            line: 959,
        );
    }

    public function testAssertInvalid159(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.35.wasm',
            text: 'type mismatch',
            line: 966,
        );
    }

    public function testAssertInvalid160(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.36.wasm',
            text: 'type mismatch',
            line: 972,
        );
    }

    public function testAssertInvalid161(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.37.wasm',
            text: 'type mismatch',
            line: 979,
        );
    }

    public function testAssertInvalid162(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.38.wasm',
            text: 'type mismatch',
            line: 985,
        );
    }

    public function testAssertInvalid163(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.39.wasm',
            text: 'type mismatch',
            line: 991,
        );
    }

    public function testAssertInvalid164(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.40.wasm',
            text: 'type mismatch',
            line: 998,
        );
    }

    public function testAssertInvalid165(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.41.wasm',
            text: 'type mismatch',
            line: 1004,
        );
    }

    public function testAssertInvalid166(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.42.wasm',
            text: 'type mismatch',
            line: 1010,
        );
    }

    public function testAssertInvalid167(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.43.wasm',
            text: 'type mismatch',
            line: 1017,
        );
    }

    public function testAssertInvalid168(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.44.wasm',
            text: 'type mismatch',
            line: 1023,
        );
    }

    public function testAssertInvalid169(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.45.wasm',
            text: 'type mismatch',
            line: 1029,
        );
    }

    public function testAssertInvalid170(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.46.wasm',
            text: 'type mismatch',
            line: 1036,
        );
    }

    public function testAssertInvalid171(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.47.wasm',
            text: 'type mismatch',
            line: 1042,
        );
    }

    public function testAssertInvalid172(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.48.wasm',
            text: 'type mismatch',
            line: 1048,
        );
    }

    public function testAssertInvalid173(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.49.wasm',
            text: 'type mismatch',
            line: 1055,
        );
    }

    public function testAssertInvalid174(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.50.wasm',
            text: 'type mismatch',
            line: 1062,
        );
    }

    public function testAssertInvalid175(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.51.wasm',
            text: 'type mismatch',
            line: 1069,
        );
    }

    public function testAssertInvalid176(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.52.wasm',
            text: 'type mismatch',
            line: 1077,
        );
    }

    public function testAssertInvalid177(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.53.wasm',
            text: 'type mismatch',
            line: 1083,
        );
    }

    public function testAssertInvalid178(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.54.wasm',
            text: 'type mismatch',
            line: 1089,
        );
    }

    public function testAssertInvalid179(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.55.wasm',
            text: 'type mismatch',
            line: 1096,
        );
    }

    public function testAssertInvalid180(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.56.wasm',
            text: 'type mismatch',
            line: 1102,
        );
    }

    public function testAssertInvalid181(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.57.wasm',
            text: 'type mismatch',
            line: 1109,
        );
    }

    public function testAssertInvalid182(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.58.wasm',
            text: 'type mismatch',
            line: 1119,
        );
    }

    public function testAssertInvalid183(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.59.wasm',
            text: 'type mismatch',
            line: 1129,
        );
    }

    public function testAssertInvalid184(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.60.wasm',
            text: 'type mismatch',
            line: 1140,
        );
    }

    public function testAssertInvalid185(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.61.wasm',
            text: 'type mismatch',
            line: 1146,
        );
    }

    public function testAssertInvalid186(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.62.wasm',
            text: 'type mismatch',
            line: 1152,
        );
    }

    public function testAssertInvalid187(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.63.wasm',
            text: 'type mismatch',
            line: 1158,
        );
    }

    public function testAssertInvalid188(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.64.wasm',
            text: 'type mismatch',
            line: 1165,
        );
    }

    public function testAssertInvalid189(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.65.wasm',
            text: 'type mismatch',
            line: 1174,
        );
    }

    public function testAssertInvalid190(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.66.wasm',
            text: 'type mismatch',
            line: 1183,
        );
    }

    public function testAssertInvalid191(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.67.wasm',
            text: 'type mismatch',
            line: 1192,
        );
    }

    public function testAssertInvalid192(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.68.wasm',
            text: 'type mismatch',
            line: 1202,
        );
    }

    public function testAssertInvalid193(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.69.wasm',
            text: 'type mismatch',
            line: 1211,
        );
    }

    public function testAssertInvalid194(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.70.wasm',
            text: 'type mismatch',
            line: 1220,
        );
    }

    public function testAssertInvalid195(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.71.wasm',
            text: 'type mismatch',
            line: 1229,
        );
    }

    public function testAssertInvalid196(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.72.wasm',
            text: 'type mismatch',
            line: 1239,
        );
    }

    public function testAssertInvalid197(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.73.wasm',
            text: 'type mismatch',
            line: 1248,
        );
    }

    public function testAssertInvalid198(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.74.wasm',
            text: 'type mismatch',
            line: 1257,
        );
    }

    public function testAssertInvalid199(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.75.wasm',
            text: 'type mismatch',
            line: 1266,
        );
    }

    public function testAssertInvalid200(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.76.wasm',
            text: 'type mismatch',
            line: 1275,
        );
    }

    public function testAssertInvalid201(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.77.wasm',
            text: 'type mismatch',
            line: 1285,
        );
    }

    public function testAssertInvalid202(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.78.wasm',
            text: 'type mismatch',
            line: 1296,
        );
    }

    public function testAssertInvalid203(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.79.wasm',
            text: 'type mismatch',
            line: 1304,
        );
    }

    public function testAssertInvalid204(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.80.wasm',
            text: 'type mismatch',
            line: 1313,
        );
    }

    public function testAssertInvalid205(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.81.wasm',
            text: 'type mismatch',
            line: 1322,
        );
    }

    public function testAssertInvalid206(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.82.wasm',
            text: 'type mismatch',
            line: 1331,
        );
    }

    public function testAssertInvalid207(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.83.wasm',
            text: 'type mismatch',
            line: 1341,
        );
    }

    public function testAssertInvalid208(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.84.wasm',
            text: 'type mismatch',
            line: 1350,
        );
    }

    public function testAssertInvalid209(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.85.wasm',
            text: 'type mismatch',
            line: 1359,
        );
    }

    public function testAssertInvalid210(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.86.wasm',
            text: 'type mismatch',
            line: 1368,
        );
    }

    public function testAssertInvalid211(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.87.wasm',
            text: 'type mismatch',
            line: 1376,
        );
    }

    public function testAssertInvalid212(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.88.wasm',
            text: 'type mismatch',
            line: 1384,
        );
    }

    public function testAssertInvalid213(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.89.wasm',
            text: 'type mismatch',
            line: 1393,
        );
    }

    public function testAssertInvalid214(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.90.wasm',
            text: 'type mismatch',
            line: 1409,
        );
    }

    public function testAssertInvalid215(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.91.wasm',
            text: 'type mismatch',
            line: 1418,
        );
    }

    public function testAssertInvalid216(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.92.wasm',
            text: 'type mismatch',
            line: 1427,
        );
    }

    public function testAssertInvalid217(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.93.wasm',
            text: 'type mismatch',
            line: 1436,
        );
    }

    public function testAssertInvalid218(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.94.wasm',
            text: 'type mismatch',
            line: 1445,
        );
    }

    public function testAssertInvalid219(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.95.wasm',
            text: 'type mismatch',
            line: 1454,
        );
    }

    public function testAssertInvalid220(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.96.wasm',
            text: 'type mismatch',
            line: 1464,
        );
    }

    public function testAssertInvalid221(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.97.wasm',
            text: 'type mismatch',
            line: 1470,
        );
    }

    public function testAssertInvalid222(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.98.wasm',
            text: 'type mismatch',
            line: 1476,
        );
    }

    public function testAssertInvalid223(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.99.wasm',
            text: 'type mismatch',
            line: 1482,
        );
    }

    public function testAssertInvalid224(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.100.wasm',
            text: 'type mismatch',
            line: 1488,
        );
    }

    public function testAssertInvalid225(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.101.wasm',
            text: 'type mismatch',
            line: 1494,
        );
    }

    public function testAssertInvalid226(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.102.wasm',
            text: 'type mismatch',
            line: 1500,
        );
    }

    public function testAssertInvalid227(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.103.wasm',
            text: 'type mismatch',
            line: 1506,
        );
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed228(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed229(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed230(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed231(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed232(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed233(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed234(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed235(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed236(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed237(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed238(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed239(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed240(): void
    {
    }
}
