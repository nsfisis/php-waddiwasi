<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
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

    #[Depends('testModule0')]
    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'empty', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 537,
        );
    }

    #[Depends('testAssertReturn1')]
    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'empty', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 538,
        );
    }

    #[Depends('testAssertReturn2')]
    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'empty', 'args' => [['type' => 'i32', 'value' => '100']]],
            expected: [],
            line: 539,
        );
    }

    #[Depends('testAssertReturn3')]
    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'empty', 'args' => [['type' => 'i32', 'value' => '4294967294']]],
            expected: [],
            line: 540,
        );
    }

    #[Depends('testAssertReturn4')]
    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'singular', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 542,
        );
    }

    #[Depends('testAssertReturn5')]
    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'singular', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 543,
        );
    }

    #[Depends('testAssertReturn6')]
    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'singular', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 544,
        );
    }

    #[Depends('testAssertReturn7')]
    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'singular', 'args' => [['type' => 'i32', 'value' => '4294967286']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 545,
        );
    }

    #[Depends('testAssertReturn8')]
    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'multi', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '9'], ['type' => 'i32', 'value' => '4294967295']],
            line: 547,
        );
    }

    #[Depends('testAssertReturn9')]
    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'multi', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '8'], ['type' => 'i32', 'value' => '1']],
            line: 548,
        );
    }

    #[Depends('testAssertReturn10')]
    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'multi', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '8'], ['type' => 'i32', 'value' => '1']],
            line: 549,
        );
    }

    #[Depends('testAssertReturn11')]
    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'multi', 'args' => [['type' => 'i32', 'value' => '4294967291']]],
            expected: [['type' => 'i32', 'value' => '8'], ['type' => 'i32', 'value' => '1']],
            line: 550,
        );
    }

    #[Depends('testAssertReturn12')]
    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '11']],
            line: 552,
        );
    }

    #[Depends('testAssertReturn13')]
    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 553,
        );
    }

    #[Depends('testAssertReturn14')]
    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 554,
        );
    }

    #[Depends('testAssertReturn15')]
    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested', 'args' => [['type' => 'i32', 'value' => '3'], ['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 555,
        );
    }

    #[Depends('testAssertReturn16')]
    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '4294967196']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 556,
        );
    }

    #[Depends('testAssertReturn17')]
    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested', 'args' => [['type' => 'i32', 'value' => '10'], ['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 557,
        );
    }

    #[Depends('testAssertReturn18')]
    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 558,
        );
    }

    #[Depends('testAssertReturn19')]
    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested', 'args' => [['type' => 'i32', 'value' => '4294967185'], ['type' => 'i32', 'value' => '4294967294']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 559,
        );
    }

    #[Depends('testAssertReturn20')]
    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-select-first', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 561,
        );
    }

    #[Depends('testAssertReturn21')]
    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-select-first', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 562,
        );
    }

    #[Depends('testAssertReturn22')]
    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-select-mid', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 563,
        );
    }

    #[Depends('testAssertReturn23')]
    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-select-mid', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 564,
        );
    }

    #[Depends('testAssertReturn24')]
    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-select-last', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 565,
        );
    }

    #[Depends('testAssertReturn25')]
    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-select-last', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 566,
        );
    }

    #[Depends('testAssertReturn26')]
    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-loop-first', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 568,
        );
    }

    #[Depends('testAssertReturn27')]
    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-loop-first', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 569,
        );
    }

    #[Depends('testAssertReturn28')]
    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-loop-mid', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 570,
        );
    }

    #[Depends('testAssertReturn29')]
    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-loop-mid', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 571,
        );
    }

    #[Depends('testAssertReturn30')]
    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-loop-last', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 572,
        );
    }

    #[Depends('testAssertReturn31')]
    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-loop-last', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 573,
        );
    }

    #[Depends('testAssertReturn32')]
    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-if-condition', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 575,
        );
    }

    #[Depends('testAssertReturn33')]
    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-if-condition', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 576,
        );
    }

    #[Depends('testAssertReturn34')]
    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br_if-first', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 578,
        );
    }

    #[Depends('testAssertReturn35')]
    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br_if-first', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 579,
        );
    }

    #[Depends('testAssertReturn36')]
    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br_if-last', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 580,
        );
    }

    #[Depends('testAssertReturn37')]
    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br_if-last', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 581,
        );
    }

    #[Depends('testAssertReturn38')]
    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br_table-first', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 583,
        );
    }

    #[Depends('testAssertReturn39')]
    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br_table-first', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 584,
        );
    }

    #[Depends('testAssertReturn40')]
    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br_table-last', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 585,
        );
    }

    #[Depends('testAssertReturn41')]
    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br_table-last', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 586,
        );
    }

    #[Depends('testAssertReturn42')]
    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-first', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 588,
        );
    }

    #[Depends('testAssertReturn43')]
    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-first', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 589,
        );
    }

    #[Depends('testAssertReturn44')]
    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-mid', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 590,
        );
    }

    #[Depends('testAssertReturn45')]
    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-mid', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 591,
        );
    }

    #[Depends('testAssertReturn46')]
    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-last', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 592,
        );
    }

    #[Depends('testAssertReturn47')]
    public function testAssertTrap48(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-last', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'undefined element',
            line: 593,
        );
    }

    #[Depends('testAssertTrap48')]
    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-store-first', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 595,
        );
    }

    #[Depends('testAssertReturn49')]
    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-store-first', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 596,
        );
    }

    #[Depends('testAssertReturn50')]
    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-store-last', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 597,
        );
    }

    #[Depends('testAssertReturn51')]
    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-store-last', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 598,
        );
    }

    #[Depends('testAssertReturn52')]
    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-memory.grow-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 600,
        );
    }

    #[Depends('testAssertReturn53')]
    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-memory.grow-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 601,
        );
    }

    #[Depends('testAssertReturn54')]
    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-call-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 603,
        );
    }

    #[Depends('testAssertReturn55')]
    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-call-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 604,
        );
    }

    #[Depends('testAssertReturn56')]
    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-return-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 606,
        );
    }

    #[Depends('testAssertReturn57')]
    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-return-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 607,
        );
    }

    #[Depends('testAssertReturn58')]
    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-drop-operand', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 609,
        );
    }

    #[Depends('testAssertReturn59')]
    public function testAssertReturn60(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-drop-operand', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 610,
        );
    }

    #[Depends('testAssertReturn60')]
    public function testAssertReturn61(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 612,
        );
    }

    #[Depends('testAssertReturn61')]
    public function testAssertReturn62(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 613,
        );
    }

    #[Depends('testAssertReturn62')]
    public function testAssertReturn63(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-local.set-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 615,
        );
    }

    #[Depends('testAssertReturn63')]
    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-local.set-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 616,
        );
    }

    #[Depends('testAssertReturn64')]
    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-local.tee-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 618,
        );
    }

    #[Depends('testAssertReturn65')]
    public function testAssertReturn66(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-local.tee-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 619,
        );
    }

    #[Depends('testAssertReturn66')]
    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-global.set-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 621,
        );
    }

    #[Depends('testAssertReturn67')]
    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-global.set-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 622,
        );
    }

    #[Depends('testAssertReturn68')]
    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-load-operand', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 624,
        );
    }

    #[Depends('testAssertReturn69')]
    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-load-operand', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 625,
        );
    }

    #[Depends('testAssertReturn70')]
    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-unary-operand', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 627,
        );
    }

    #[Depends('testAssertReturn71')]
    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-unary-operand', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 628,
        );
    }

    #[Depends('testAssertReturn72')]
    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-unary-operand', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 629,
        );
    }

    #[Depends('testAssertReturn73')]
    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-binary-operand', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '15']],
            line: 631,
        );
    }

    #[Depends('testAssertReturn74')]
    public function testAssertReturn75(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-binary-operand', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '4294967284']],
            line: 632,
        );
    }

    #[Depends('testAssertReturn75')]
    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-binary-operand', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967281']],
            line: 633,
        );
    }

    #[Depends('testAssertReturn76')]
    public function testAssertReturn77(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-binary-operand', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '12']],
            line: 634,
        );
    }

    #[Depends('testAssertReturn77')]
    public function testAssertReturn78(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-test-operand', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 636,
        );
    }

    #[Depends('testAssertReturn78')]
    public function testAssertReturn79(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-test-operand', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 637,
        );
    }

    #[Depends('testAssertReturn79')]
    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-compare-operand', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 639,
        );
    }

    #[Depends('testAssertReturn80')]
    public function testAssertReturn81(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-compare-operand', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 640,
        );
    }

    #[Depends('testAssertReturn81')]
    public function testAssertReturn82(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-compare-operand', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 641,
        );
    }

    #[Depends('testAssertReturn82')]
    public function testAssertReturn83(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-compare-operand', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 642,
        );
    }

    #[Depends('testAssertReturn83')]
    public function testAssertReturn84(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-binary-operands', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967284']],
            line: 644,
        );
    }

    #[Depends('testAssertReturn84')]
    public function testAssertReturn85(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-binary-operands', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '12']],
            line: 645,
        );
    }

    #[Depends('testAssertReturn85')]
    public function testAssertReturn86(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-compare-operands', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 647,
        );
    }

    #[Depends('testAssertReturn86')]
    public function testAssertReturn87(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-compare-operands', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 648,
        );
    }

    #[Depends('testAssertReturn87')]
    public function testAssertReturn88(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-mixed-operands', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967293']],
            line: 650,
        );
    }

    #[Depends('testAssertReturn88')]
    public function testAssertReturn89(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-mixed-operands', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '27']],
            line: 651,
        );
    }

    #[Depends('testAssertReturn89')]
    public function testAssertReturn90(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'break-bare', 'args' => []],
            expected: [['type' => 'i32', 'value' => '19']],
            line: 653,
        );
    }

    #[Depends('testAssertReturn90')]
    public function testAssertReturn91(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'break-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '18']],
            line: 654,
        );
    }

    #[Depends('testAssertReturn91')]
    public function testAssertReturn92(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'break-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '21']],
            line: 655,
        );
    }

    #[Depends('testAssertReturn92')]
    public function testAssertReturn93(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'break-multi-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967278'], ['type' => 'i32', 'value' => '18'], ['type' => 'i64', 'value' => '18446744073709551598']],
            line: 656,
        );
    }

    #[Depends('testAssertReturn93')]
    public function testAssertReturn94(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'break-multi-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '18'], ['type' => 'i32', 'value' => '4294967278'], ['type' => 'i64', 'value' => '18']],
            line: 659,
        );
    }

    #[Depends('testAssertReturn94')]
    public function testAssertReturn95(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'param', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 663,
        );
    }

    #[Depends('testAssertReturn95')]
    public function testAssertReturn96(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'param', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 664,
        );
    }

    #[Depends('testAssertReturn96')]
    public function testAssertReturn97(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'params', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 665,
        );
    }

    #[Depends('testAssertReturn97')]
    public function testAssertReturn98(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'params', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 666,
        );
    }

    #[Depends('testAssertReturn98')]
    public function testAssertReturn99(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'params-id', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 667,
        );
    }

    #[Depends('testAssertReturn99')]
    public function testAssertReturn100(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'params-id', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 668,
        );
    }

    #[Depends('testAssertReturn100')]
    public function testAssertReturn101(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'param-break', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 669,
        );
    }

    #[Depends('testAssertReturn101')]
    public function testAssertReturn102(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'param-break', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 670,
        );
    }

    #[Depends('testAssertReturn102')]
    public function testAssertReturn103(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'params-break', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 671,
        );
    }

    #[Depends('testAssertReturn103')]
    public function testAssertReturn104(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'params-break', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 672,
        );
    }

    #[Depends('testAssertReturn104')]
    public function testAssertReturn105(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'params-id-break', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 673,
        );
    }

    #[Depends('testAssertReturn105')]
    public function testAssertReturn106(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'params-id-break', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 674,
        );
    }

    #[Depends('testAssertReturn106')]
    public function testAssertReturn107(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'effects', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '4294967282']],
            line: 676,
        );
    }

    #[Depends('testAssertReturn107')]
    public function testAssertReturn108(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'effects', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967290']],
            line: 677,
        );
    }

    #[Depends('testAssertReturn108')]
    public function testAssertReturn109(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'add64_u_with_carry', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0'], ['type' => 'i32', 'value' => '0']],
            line: 680,
        );
    }

    #[Depends('testAssertReturn109')]
    public function testAssertReturn110(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'add64_u_with_carry', 'args' => [['type' => 'i64', 'value' => '100'], ['type' => 'i64', 'value' => '124'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '224'], ['type' => 'i32', 'value' => '0']],
            line: 684,
        );
    }

    #[Depends('testAssertReturn110')]
    public function testAssertReturn111(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'add64_u_with_carry', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i32', 'value' => '0']],
            line: 688,
        );
    }

    #[Depends('testAssertReturn111')]
    public function testAssertReturn112(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'add64_u_with_carry', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0'], ['type' => 'i32', 'value' => '1']],
            line: 692,
        );
    }

    #[Depends('testAssertReturn112')]
    public function testAssertReturn113(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'add64_u_with_carry', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551614'], ['type' => 'i32', 'value' => '1']],
            line: 696,
        );
    }

    #[Depends('testAssertReturn113')]
    public function testAssertReturn114(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'add64_u_with_carry', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0'], ['type' => 'i32', 'value' => '1']],
            line: 700,
        );
    }

    #[Depends('testAssertReturn114')]
    public function testAssertReturn115(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'add64_u_with_carry', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '1'], ['type' => 'i32', 'value' => '1']],
            line: 704,
        );
    }

    #[Depends('testAssertReturn115')]
    public function testAssertReturn116(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'add64_u_with_carry', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0'], ['type' => 'i32', 'value' => '1']],
            line: 708,
        );
    }

    #[Depends('testAssertReturn116')]
    public function testAssertReturn117(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'add64_u_saturated', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 713,
        );
    }

    #[Depends('testAssertReturn117')]
    public function testAssertReturn118(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'add64_u_saturated', 'args' => [['type' => 'i64', 'value' => '1230'], ['type' => 'i64', 'value' => '23']]],
            expected: [['type' => 'i64', 'value' => '1253']],
            line: 716,
        );
    }

    #[Depends('testAssertReturn118')]
    public function testAssertReturn119(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'add64_u_saturated', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 719,
        );
    }

    #[Depends('testAssertReturn119')]
    public function testAssertReturn120(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'add64_u_saturated', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 722,
        );
    }

    #[Depends('testAssertReturn120')]
    public function testAssertReturn121(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'add64_u_saturated', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 725,
        );
    }

    #[Depends('testAssertReturn121')]
    public function testAssertReturn122(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'add64_u_saturated', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 728,
        );
    }

    #[Depends('testAssertReturn122')]
    public function testAssertReturn123(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'type-use', 'args' => []],
            expected: [],
            line: 731,
        );
    }

    #[Depends('testAssertReturn123')]
    public function testAssertReturn124(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'atypical-condition', 'args' => []],
            expected: [],
            line: 733,
        );
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertReturn124')]
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

    #[Depends('testAssertMalformed135')]
    public function testAssertInvalid136(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.12.wasm',
            text: 'type mismatch',
            line: 836,
        );
    }

    #[Depends('testAssertInvalid136')]
    public function testAssertInvalid137(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.13.wasm',
            text: 'type mismatch',
            line: 844,
        );
    }

    #[Depends('testAssertInvalid137')]
    public function testAssertInvalid138(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.14.wasm',
            text: 'type mismatch',
            line: 848,
        );
    }

    #[Depends('testAssertInvalid138')]
    public function testAssertInvalid139(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.15.wasm',
            text: 'type mismatch',
            line: 852,
        );
    }

    #[Depends('testAssertInvalid139')]
    public function testAssertInvalid140(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.16.wasm',
            text: 'type mismatch',
            line: 856,
        );
    }

    #[Depends('testAssertInvalid140')]
    public function testAssertInvalid141(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.17.wasm',
            text: 'type mismatch',
            line: 861,
        );
    }

    #[Depends('testAssertInvalid141')]
    public function testAssertInvalid142(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.18.wasm',
            text: 'type mismatch',
            line: 865,
        );
    }

    #[Depends('testAssertInvalid142')]
    public function testAssertInvalid143(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.19.wasm',
            text: 'type mismatch',
            line: 869,
        );
    }

    #[Depends('testAssertInvalid143')]
    public function testAssertInvalid144(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.20.wasm',
            text: 'type mismatch',
            line: 873,
        );
    }

    #[Depends('testAssertInvalid144')]
    public function testAssertInvalid145(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.21.wasm',
            text: 'type mismatch',
            line: 878,
        );
    }

    #[Depends('testAssertInvalid145')]
    public function testAssertInvalid146(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.22.wasm',
            text: 'type mismatch',
            line: 884,
        );
    }

    #[Depends('testAssertInvalid146')]
    public function testAssertInvalid147(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.23.wasm',
            text: 'type mismatch',
            line: 890,
        );
    }

    #[Depends('testAssertInvalid147')]
    public function testAssertInvalid148(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.24.wasm',
            text: 'type mismatch',
            line: 896,
        );
    }

    #[Depends('testAssertInvalid148')]
    public function testAssertInvalid149(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.25.wasm',
            text: 'type mismatch',
            line: 903,
        );
    }

    #[Depends('testAssertInvalid149')]
    public function testAssertInvalid150(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.26.wasm',
            text: 'type mismatch',
            line: 909,
        );
    }

    #[Depends('testAssertInvalid150')]
    public function testAssertInvalid151(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.27.wasm',
            text: 'type mismatch',
            line: 915,
        );
    }

    #[Depends('testAssertInvalid151')]
    public function testAssertInvalid152(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.28.wasm',
            text: 'type mismatch',
            line: 921,
        );
    }

    #[Depends('testAssertInvalid152')]
    public function testAssertInvalid153(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.29.wasm',
            text: 'type mismatch',
            line: 928,
        );
    }

    #[Depends('testAssertInvalid153')]
    public function testAssertInvalid154(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.30.wasm',
            text: 'type mismatch',
            line: 934,
        );
    }

    #[Depends('testAssertInvalid154')]
    public function testAssertInvalid155(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.31.wasm',
            text: 'type mismatch',
            line: 940,
        );
    }

    #[Depends('testAssertInvalid155')]
    public function testAssertInvalid156(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.32.wasm',
            text: 'type mismatch',
            line: 947,
        );
    }

    #[Depends('testAssertInvalid156')]
    public function testAssertInvalid157(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.33.wasm',
            text: 'type mismatch',
            line: 953,
        );
    }

    #[Depends('testAssertInvalid157')]
    public function testAssertInvalid158(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.34.wasm',
            text: 'type mismatch',
            line: 959,
        );
    }

    #[Depends('testAssertInvalid158')]
    public function testAssertInvalid159(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.35.wasm',
            text: 'type mismatch',
            line: 966,
        );
    }

    #[Depends('testAssertInvalid159')]
    public function testAssertInvalid160(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.36.wasm',
            text: 'type mismatch',
            line: 972,
        );
    }

    #[Depends('testAssertInvalid160')]
    public function testAssertInvalid161(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.37.wasm',
            text: 'type mismatch',
            line: 979,
        );
    }

    #[Depends('testAssertInvalid161')]
    public function testAssertInvalid162(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.38.wasm',
            text: 'type mismatch',
            line: 985,
        );
    }

    #[Depends('testAssertInvalid162')]
    public function testAssertInvalid163(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.39.wasm',
            text: 'type mismatch',
            line: 991,
        );
    }

    #[Depends('testAssertInvalid163')]
    public function testAssertInvalid164(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.40.wasm',
            text: 'type mismatch',
            line: 998,
        );
    }

    #[Depends('testAssertInvalid164')]
    public function testAssertInvalid165(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.41.wasm',
            text: 'type mismatch',
            line: 1004,
        );
    }

    #[Depends('testAssertInvalid165')]
    public function testAssertInvalid166(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.42.wasm',
            text: 'type mismatch',
            line: 1010,
        );
    }

    #[Depends('testAssertInvalid166')]
    public function testAssertInvalid167(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.43.wasm',
            text: 'type mismatch',
            line: 1017,
        );
    }

    #[Depends('testAssertInvalid167')]
    public function testAssertInvalid168(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.44.wasm',
            text: 'type mismatch',
            line: 1023,
        );
    }

    #[Depends('testAssertInvalid168')]
    public function testAssertInvalid169(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.45.wasm',
            text: 'type mismatch',
            line: 1029,
        );
    }

    #[Depends('testAssertInvalid169')]
    public function testAssertInvalid170(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.46.wasm',
            text: 'type mismatch',
            line: 1036,
        );
    }

    #[Depends('testAssertInvalid170')]
    public function testAssertInvalid171(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.47.wasm',
            text: 'type mismatch',
            line: 1042,
        );
    }

    #[Depends('testAssertInvalid171')]
    public function testAssertInvalid172(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.48.wasm',
            text: 'type mismatch',
            line: 1048,
        );
    }

    #[Depends('testAssertInvalid172')]
    public function testAssertInvalid173(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.49.wasm',
            text: 'type mismatch',
            line: 1055,
        );
    }

    #[Depends('testAssertInvalid173')]
    public function testAssertInvalid174(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.50.wasm',
            text: 'type mismatch',
            line: 1062,
        );
    }

    #[Depends('testAssertInvalid174')]
    public function testAssertInvalid175(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.51.wasm',
            text: 'type mismatch',
            line: 1069,
        );
    }

    #[Depends('testAssertInvalid175')]
    public function testAssertInvalid176(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.52.wasm',
            text: 'type mismatch',
            line: 1077,
        );
    }

    #[Depends('testAssertInvalid176')]
    public function testAssertInvalid177(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.53.wasm',
            text: 'type mismatch',
            line: 1083,
        );
    }

    #[Depends('testAssertInvalid177')]
    public function testAssertInvalid178(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.54.wasm',
            text: 'type mismatch',
            line: 1089,
        );
    }

    #[Depends('testAssertInvalid178')]
    public function testAssertInvalid179(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.55.wasm',
            text: 'type mismatch',
            line: 1096,
        );
    }

    #[Depends('testAssertInvalid179')]
    public function testAssertInvalid180(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.56.wasm',
            text: 'type mismatch',
            line: 1102,
        );
    }

    #[Depends('testAssertInvalid180')]
    public function testAssertInvalid181(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.57.wasm',
            text: 'type mismatch',
            line: 1109,
        );
    }

    #[Depends('testAssertInvalid181')]
    public function testAssertInvalid182(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.58.wasm',
            text: 'type mismatch',
            line: 1119,
        );
    }

    #[Depends('testAssertInvalid182')]
    public function testAssertInvalid183(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.59.wasm',
            text: 'type mismatch',
            line: 1129,
        );
    }

    #[Depends('testAssertInvalid183')]
    public function testAssertInvalid184(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.60.wasm',
            text: 'type mismatch',
            line: 1140,
        );
    }

    #[Depends('testAssertInvalid184')]
    public function testAssertInvalid185(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.61.wasm',
            text: 'type mismatch',
            line: 1146,
        );
    }

    #[Depends('testAssertInvalid185')]
    public function testAssertInvalid186(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.62.wasm',
            text: 'type mismatch',
            line: 1152,
        );
    }

    #[Depends('testAssertInvalid186')]
    public function testAssertInvalid187(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.63.wasm',
            text: 'type mismatch',
            line: 1158,
        );
    }

    #[Depends('testAssertInvalid187')]
    public function testAssertInvalid188(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.64.wasm',
            text: 'type mismatch',
            line: 1165,
        );
    }

    #[Depends('testAssertInvalid188')]
    public function testAssertInvalid189(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.65.wasm',
            text: 'type mismatch',
            line: 1174,
        );
    }

    #[Depends('testAssertInvalid189')]
    public function testAssertInvalid190(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.66.wasm',
            text: 'type mismatch',
            line: 1183,
        );
    }

    #[Depends('testAssertInvalid190')]
    public function testAssertInvalid191(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.67.wasm',
            text: 'type mismatch',
            line: 1192,
        );
    }

    #[Depends('testAssertInvalid191')]
    public function testAssertInvalid192(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.68.wasm',
            text: 'type mismatch',
            line: 1202,
        );
    }

    #[Depends('testAssertInvalid192')]
    public function testAssertInvalid193(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.69.wasm',
            text: 'type mismatch',
            line: 1211,
        );
    }

    #[Depends('testAssertInvalid193')]
    public function testAssertInvalid194(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.70.wasm',
            text: 'type mismatch',
            line: 1220,
        );
    }

    #[Depends('testAssertInvalid194')]
    public function testAssertInvalid195(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.71.wasm',
            text: 'type mismatch',
            line: 1229,
        );
    }

    #[Depends('testAssertInvalid195')]
    public function testAssertInvalid196(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.72.wasm',
            text: 'type mismatch',
            line: 1239,
        );
    }

    #[Depends('testAssertInvalid196')]
    public function testAssertInvalid197(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.73.wasm',
            text: 'type mismatch',
            line: 1248,
        );
    }

    #[Depends('testAssertInvalid197')]
    public function testAssertInvalid198(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.74.wasm',
            text: 'type mismatch',
            line: 1257,
        );
    }

    #[Depends('testAssertInvalid198')]
    public function testAssertInvalid199(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.75.wasm',
            text: 'type mismatch',
            line: 1266,
        );
    }

    #[Depends('testAssertInvalid199')]
    public function testAssertInvalid200(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.76.wasm',
            text: 'type mismatch',
            line: 1275,
        );
    }

    #[Depends('testAssertInvalid200')]
    public function testAssertInvalid201(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.77.wasm',
            text: 'type mismatch',
            line: 1285,
        );
    }

    #[Depends('testAssertInvalid201')]
    public function testAssertInvalid202(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.78.wasm',
            text: 'type mismatch',
            line: 1296,
        );
    }

    #[Depends('testAssertInvalid202')]
    public function testAssertInvalid203(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.79.wasm',
            text: 'type mismatch',
            line: 1304,
        );
    }

    #[Depends('testAssertInvalid203')]
    public function testAssertInvalid204(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.80.wasm',
            text: 'type mismatch',
            line: 1313,
        );
    }

    #[Depends('testAssertInvalid204')]
    public function testAssertInvalid205(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.81.wasm',
            text: 'type mismatch',
            line: 1322,
        );
    }

    #[Depends('testAssertInvalid205')]
    public function testAssertInvalid206(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.82.wasm',
            text: 'type mismatch',
            line: 1331,
        );
    }

    #[Depends('testAssertInvalid206')]
    public function testAssertInvalid207(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.83.wasm',
            text: 'type mismatch',
            line: 1341,
        );
    }

    #[Depends('testAssertInvalid207')]
    public function testAssertInvalid208(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.84.wasm',
            text: 'type mismatch',
            line: 1350,
        );
    }

    #[Depends('testAssertInvalid208')]
    public function testAssertInvalid209(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.85.wasm',
            text: 'type mismatch',
            line: 1359,
        );
    }

    #[Depends('testAssertInvalid209')]
    public function testAssertInvalid210(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.86.wasm',
            text: 'type mismatch',
            line: 1368,
        );
    }

    #[Depends('testAssertInvalid210')]
    public function testAssertInvalid211(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.87.wasm',
            text: 'type mismatch',
            line: 1376,
        );
    }

    #[Depends('testAssertInvalid211')]
    public function testAssertInvalid212(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.88.wasm',
            text: 'type mismatch',
            line: 1384,
        );
    }

    #[Depends('testAssertInvalid212')]
    public function testAssertInvalid213(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.89.wasm',
            text: 'type mismatch',
            line: 1393,
        );
    }

    #[Depends('testAssertInvalid213')]
    public function testAssertInvalid214(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.90.wasm',
            text: 'type mismatch',
            line: 1409,
        );
    }

    #[Depends('testAssertInvalid214')]
    public function testAssertInvalid215(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.91.wasm',
            text: 'type mismatch',
            line: 1418,
        );
    }

    #[Depends('testAssertInvalid215')]
    public function testAssertInvalid216(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.92.wasm',
            text: 'type mismatch',
            line: 1427,
        );
    }

    #[Depends('testAssertInvalid216')]
    public function testAssertInvalid217(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.93.wasm',
            text: 'type mismatch',
            line: 1436,
        );
    }

    #[Depends('testAssertInvalid217')]
    public function testAssertInvalid218(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.94.wasm',
            text: 'type mismatch',
            line: 1445,
        );
    }

    #[Depends('testAssertInvalid218')]
    public function testAssertInvalid219(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.95.wasm',
            text: 'type mismatch',
            line: 1454,
        );
    }

    #[Depends('testAssertInvalid219')]
    public function testAssertInvalid220(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.96.wasm',
            text: 'type mismatch',
            line: 1464,
        );
    }

    #[Depends('testAssertInvalid220')]
    public function testAssertInvalid221(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.97.wasm',
            text: 'type mismatch',
            line: 1470,
        );
    }

    #[Depends('testAssertInvalid221')]
    public function testAssertInvalid222(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.98.wasm',
            text: 'type mismatch',
            line: 1476,
        );
    }

    #[Depends('testAssertInvalid222')]
    public function testAssertInvalid223(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.99.wasm',
            text: 'type mismatch',
            line: 1482,
        );
    }

    #[Depends('testAssertInvalid223')]
    public function testAssertInvalid224(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.100.wasm',
            text: 'type mismatch',
            line: 1488,
        );
    }

    #[Depends('testAssertInvalid224')]
    public function testAssertInvalid225(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.101.wasm',
            text: 'type mismatch',
            line: 1494,
        );
    }

    #[Depends('testAssertInvalid225')]
    public function testAssertInvalid226(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.102.wasm',
            text: 'type mismatch',
            line: 1500,
        );
    }

    #[Depends('testAssertInvalid226')]
    public function testAssertInvalid227(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'if.103.wasm',
            text: 'type mismatch',
            line: 1506,
        );
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertInvalid227')]
    public function testAssertMalformed228(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed228')]
    public function testAssertMalformed229(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed229')]
    public function testAssertMalformed230(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed230')]
    public function testAssertMalformed231(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed231')]
    public function testAssertMalformed232(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed232')]
    public function testAssertMalformed233(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed233')]
    public function testAssertMalformed234(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed234')]
    public function testAssertMalformed235(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed235')]
    public function testAssertMalformed236(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed236')]
    public function testAssertMalformed237(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed237')]
    public function testAssertMalformed238(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed238')]
    public function testAssertMalformed239(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed239')]
    public function testAssertMalformed240(): void
    {
    }
}
