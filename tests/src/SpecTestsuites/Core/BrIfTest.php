<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class BrIfTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'br_if.0.wasm',
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
            line: 372,
        );
    }

    #[Depends('testAssertReturn1')]
    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'type-i64', 'args' => []],
            expected: [],
            line: 373,
        );
    }

    #[Depends('testAssertReturn2')]
    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'type-f32', 'args' => []],
            expected: [],
            line: 374,
        );
    }

    #[Depends('testAssertReturn3')]
    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'type-f64', 'args' => []],
            expected: [],
            line: 375,
        );
    }

    #[Depends('testAssertReturn4')]
    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'type-i32-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 377,
        );
    }

    #[Depends('testAssertReturn5')]
    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'type-i64-value', 'args' => []],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 378,
        );
    }

    #[Depends('testAssertReturn6')]
    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'type-f32-value', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1077936128']],
            line: 379,
        );
    }

    #[Depends('testAssertReturn7')]
    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'type-f64-value', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4616189618054758400']],
            line: 380,
        );
    }

    #[Depends('testAssertReturn8')]
    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-block-first', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 382,
        );
    }

    #[Depends('testAssertReturn9')]
    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-block-first', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 383,
        );
    }

    #[Depends('testAssertReturn10')]
    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-block-mid', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 384,
        );
    }

    #[Depends('testAssertReturn11')]
    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-block-mid', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 385,
        );
    }

    #[Depends('testAssertReturn12')]
    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-block-last', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 386,
        );
    }

    #[Depends('testAssertReturn13')]
    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-block-last', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 387,
        );
    }

    #[Depends('testAssertReturn14')]
    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-block-first-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '11']],
            line: 389,
        );
    }

    #[Depends('testAssertReturn15')]
    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-block-first-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 390,
        );
    }

    #[Depends('testAssertReturn16')]
    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-block-mid-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '21']],
            line: 391,
        );
    }

    #[Depends('testAssertReturn17')]
    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-block-mid-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '20']],
            line: 392,
        );
    }

    #[Depends('testAssertReturn18')]
    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-block-last-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '11']],
            line: 393,
        );
    }

    #[Depends('testAssertReturn19')]
    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-block-last-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '11']],
            line: 394,
        );
    }

    #[Depends('testAssertReturn20')]
    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-loop-first', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 396,
        );
    }

    #[Depends('testAssertReturn21')]
    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-loop-first', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 397,
        );
    }

    #[Depends('testAssertReturn22')]
    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-loop-mid', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 398,
        );
    }

    #[Depends('testAssertReturn23')]
    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-loop-mid', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 399,
        );
    }

    #[Depends('testAssertReturn24')]
    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-loop-last', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 400,
        );
    }

    #[Depends('testAssertReturn25')]
    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-loop-last', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 401,
        );
    }

    #[Depends('testAssertReturn26')]
    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 403,
        );
    }

    #[Depends('testAssertReturn27')]
    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br_if-cond', 'args' => []],
            expected: [],
            line: 405,
        );
    }

    #[Depends('testAssertReturn28')]
    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br_if-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 406,
        );
    }

    #[Depends('testAssertReturn29')]
    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br_if-value-cond', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 407,
        );
    }

    #[Depends('testAssertReturn30')]
    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br_if-value-cond', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 408,
        );
    }

    #[Depends('testAssertReturn31')]
    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br_table-index', 'args' => []],
            expected: [],
            line: 410,
        );
    }

    #[Depends('testAssertReturn32')]
    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br_table-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 411,
        );
    }

    #[Depends('testAssertReturn33')]
    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br_table-value-index', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 412,
        );
    }

    #[Depends('testAssertReturn34')]
    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-return-value', 'args' => []],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 414,
        );
    }

    #[Depends('testAssertReturn35')]
    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-if-cond', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 416,
        );
    }

    #[Depends('testAssertReturn36')]
    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-if-cond', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 417,
        );
    }

    #[Depends('testAssertReturn37')]
    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-if-then', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 418,
        );
    }

    #[Depends('testAssertReturn38')]
    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-if-then', 'args' => [['type' => 'i32', 'value' => '4'], ['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 419,
        );
    }

    #[Depends('testAssertReturn39')]
    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-if-then', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 420,
        );
    }

    #[Depends('testAssertReturn40')]
    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-if-then', 'args' => [['type' => 'i32', 'value' => '4'], ['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 421,
        );
    }

    #[Depends('testAssertReturn41')]
    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-if-else', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 422,
        );
    }

    #[Depends('testAssertReturn42')]
    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-if-else', 'args' => [['type' => 'i32', 'value' => '3'], ['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 423,
        );
    }

    #[Depends('testAssertReturn43')]
    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-if-else', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 424,
        );
    }

    #[Depends('testAssertReturn44')]
    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-if-else', 'args' => [['type' => 'i32', 'value' => '3'], ['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 425,
        );
    }

    #[Depends('testAssertReturn45')]
    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-select-first', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 427,
        );
    }

    #[Depends('testAssertReturn46')]
    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-select-first', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 428,
        );
    }

    #[Depends('testAssertReturn47')]
    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-select-second', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 429,
        );
    }

    #[Depends('testAssertReturn48')]
    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-select-second', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 430,
        );
    }

    #[Depends('testAssertReturn49')]
    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-select-cond', 'args' => []],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 431,
        );
    }

    #[Depends('testAssertReturn50')]
    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-call-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '12']],
            line: 433,
        );
    }

    #[Depends('testAssertReturn51')]
    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-call-mid', 'args' => []],
            expected: [['type' => 'i32', 'value' => '13']],
            line: 434,
        );
    }

    #[Depends('testAssertReturn52')]
    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-call-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '14']],
            line: 435,
        );
    }

    #[Depends('testAssertReturn53')]
    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-func', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 437,
        );
    }

    #[Depends('testAssertReturn54')]
    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 438,
        );
    }

    #[Depends('testAssertReturn55')]
    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-mid', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 439,
        );
    }

    #[Depends('testAssertReturn56')]
    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 440,
        );
    }

    #[Depends('testAssertReturn57')]
    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-local.set-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 442,
        );
    }

    #[Depends('testAssertReturn58')]
    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-local.set-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '17']],
            line: 443,
        );
    }

    #[Depends('testAssertReturn59')]
    public function testAssertReturn60(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-local.tee-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 445,
        );
    }

    #[Depends('testAssertReturn60')]
    public function testAssertReturn61(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-local.tee-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 446,
        );
    }

    #[Depends('testAssertReturn61')]
    public function testAssertReturn62(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-global.set-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 448,
        );
    }

    #[Depends('testAssertReturn62')]
    public function testAssertReturn63(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-global.set-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 449,
        );
    }

    #[Depends('testAssertReturn63')]
    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-load-address', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 451,
        );
    }

    #[Depends('testAssertReturn64')]
    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-loadN-address', 'args' => []],
            expected: [['type' => 'i32', 'value' => '30']],
            line: 452,
        );
    }

    #[Depends('testAssertReturn65')]
    public function testAssertReturn66(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-store-address', 'args' => []],
            expected: [['type' => 'i32', 'value' => '30']],
            line: 454,
        );
    }

    #[Depends('testAssertReturn66')]
    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-store-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '31']],
            line: 455,
        );
    }

    #[Depends('testAssertReturn67')]
    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-storeN-address', 'args' => []],
            expected: [['type' => 'i32', 'value' => '32']],
            line: 456,
        );
    }

    #[Depends('testAssertReturn68')]
    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-storeN-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '33']],
            line: 457,
        );
    }

    #[Depends('testAssertReturn69')]
    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-unary-operand', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 459,
        );
    }

    #[Depends('testAssertReturn70')]
    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-binary-left', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 460,
        );
    }

    #[Depends('testAssertReturn71')]
    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-binary-right', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 461,
        );
    }

    #[Depends('testAssertReturn72')]
    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-test-operand', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 462,
        );
    }

    #[Depends('testAssertReturn73')]
    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-compare-left', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 463,
        );
    }

    #[Depends('testAssertReturn74')]
    public function testAssertReturn75(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-compare-right', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 464,
        );
    }

    #[Depends('testAssertReturn75')]
    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-memory.grow-size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 465,
        );
    }

    #[Depends('testAssertReturn76')]
    public function testAssertReturn77(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-block-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '21']],
            line: 467,
        );
    }

    #[Depends('testAssertReturn77')]
    public function testAssertReturn78(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-block-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 468,
        );
    }

    #[Depends('testAssertReturn78')]
    public function testAssertReturn79(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 469,
        );
    }

    #[Depends('testAssertReturn79')]
    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 470,
        );
    }

    #[Depends('testAssertReturn80')]
    public function testAssertReturn81(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br_if-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 471,
        );
    }

    #[Depends('testAssertReturn81')]
    public function testAssertReturn82(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br_if-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 472,
        );
    }

    #[Depends('testAssertReturn82')]
    public function testAssertReturn83(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br_if-value-cond', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 473,
        );
    }

    #[Depends('testAssertReturn83')]
    public function testAssertReturn84(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br_if-value-cond', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 474,
        );
    }

    #[Depends('testAssertReturn84')]
    public function testAssertReturn85(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br_table-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 475,
        );
    }

    #[Depends('testAssertReturn85')]
    public function testAssertReturn86(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br_table-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 476,
        );
    }

    #[Depends('testAssertReturn86')]
    public function testAssertReturn87(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br_table-value-index', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 477,
        );
    }

    #[Depends('testAssertReturn87')]
    public function testAssertReturn88(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'nested-br_table-value-index', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 478,
        );
    }

    #[Depends('testAssertReturn88')]
    public function testAssertInvalid89(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.1.wasm',
            text: 'type mismatch',
            line: 481,
        );
    }

    #[Depends('testAssertInvalid89')]
    public function testAssertInvalid90(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.2.wasm',
            text: 'type mismatch',
            line: 485,
        );
    }

    #[Depends('testAssertInvalid90')]
    public function testAssertInvalid91(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.3.wasm',
            text: 'type mismatch',
            line: 489,
        );
    }

    #[Depends('testAssertInvalid91')]
    public function testAssertInvalid92(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.4.wasm',
            text: 'type mismatch',
            line: 493,
        );
    }

    #[Depends('testAssertInvalid92')]
    public function testAssertInvalid93(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.5.wasm',
            text: 'type mismatch',
            line: 498,
        );
    }

    #[Depends('testAssertInvalid93')]
    public function testAssertInvalid94(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.6.wasm',
            text: 'type mismatch',
            line: 502,
        );
    }

    #[Depends('testAssertInvalid94')]
    public function testAssertInvalid95(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.7.wasm',
            text: 'type mismatch',
            line: 506,
        );
    }

    #[Depends('testAssertInvalid95')]
    public function testAssertInvalid96(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.8.wasm',
            text: 'type mismatch',
            line: 510,
        );
    }

    #[Depends('testAssertInvalid96')]
    public function testAssertInvalid97(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.9.wasm',
            text: 'type mismatch',
            line: 515,
        );
    }

    #[Depends('testAssertInvalid97')]
    public function testAssertInvalid98(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.10.wasm',
            text: 'type mismatch',
            line: 521,
        );
    }

    #[Depends('testAssertInvalid98')]
    public function testAssertInvalid99(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.11.wasm',
            text: 'type mismatch',
            line: 527,
        );
    }

    #[Depends('testAssertInvalid99')]
    public function testAssertInvalid100(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.12.wasm',
            text: 'type mismatch',
            line: 533,
        );
    }

    #[Depends('testAssertInvalid100')]
    public function testAssertInvalid101(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.13.wasm',
            text: 'type mismatch',
            line: 540,
        );
    }

    #[Depends('testAssertInvalid101')]
    public function testAssertInvalid102(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.14.wasm',
            text: 'type mismatch',
            line: 546,
        );
    }

    #[Depends('testAssertInvalid102')]
    public function testAssertInvalid103(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.15.wasm',
            text: 'type mismatch',
            line: 552,
        );
    }

    #[Depends('testAssertInvalid103')]
    public function testAssertInvalid104(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.16.wasm',
            text: 'type mismatch',
            line: 560,
        );
    }

    #[Depends('testAssertInvalid104')]
    public function testAssertInvalid105(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.17.wasm',
            text: 'type mismatch',
            line: 569,
        );
    }

    #[Depends('testAssertInvalid105')]
    public function testAssertInvalid106(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.18.wasm',
            text: 'type mismatch',
            line: 575,
        );
    }

    #[Depends('testAssertInvalid106')]
    public function testAssertInvalid107(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.19.wasm',
            text: 'type mismatch',
            line: 581,
        );
    }

    #[Depends('testAssertInvalid107')]
    public function testAssertInvalid108(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.20.wasm',
            text: 'type mismatch',
            line: 587,
        );
    }

    #[Depends('testAssertInvalid108')]
    public function testAssertInvalid109(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.21.wasm',
            text: 'type mismatch',
            line: 593,
        );
    }

    #[Depends('testAssertInvalid109')]
    public function testAssertInvalid110(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.22.wasm',
            text: 'type mismatch',
            line: 599,
        );
    }

    #[Depends('testAssertInvalid110')]
    public function testAssertInvalid111(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.23.wasm',
            text: 'type mismatch',
            line: 606,
        );
    }

    #[Depends('testAssertInvalid111')]
    public function testAssertInvalid112(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.24.wasm',
            text: 'type mismatch',
            line: 618,
        );
    }

    #[Depends('testAssertInvalid112')]
    public function testAssertInvalid113(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.25.wasm',
            text: 'type mismatch',
            line: 630,
        );
    }

    #[Depends('testAssertInvalid113')]
    public function testAssertInvalid114(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.26.wasm',
            text: 'type mismatch',
            line: 641,
        );
    }

    #[Depends('testAssertInvalid114')]
    public function testAssertInvalid115(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.27.wasm',
            text: 'unknown label',
            line: 654,
        );
    }

    #[Depends('testAssertInvalid115')]
    public function testAssertInvalid116(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.28.wasm',
            text: 'unknown label',
            line: 658,
        );
    }

    #[Depends('testAssertInvalid116')]
    public function testAssertInvalid117(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'br_if.29.wasm',
            text: 'unknown label',
            line: 662,
        );
    }
}
