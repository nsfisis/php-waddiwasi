<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class SelectTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'select.0.wasm',
            name: null,
            line: 1,
        );
    }

    #[Depends('testModule0')]
    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-i32', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 183,
        );
    }

    #[Depends('testAssertReturn1')]
    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-i64', 'args' => [['type' => 'i64', 'value' => '2'], ['type' => 'i64', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 184,
        );
    }

    #[Depends('testAssertReturn2')]
    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1073741824'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 185,
        );
    }

    #[Depends('testAssertReturn3')]
    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64', 'args' => [['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 186,
        );
    }

    #[Depends('testAssertReturn4')]
    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-i32', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 188,
        );
    }

    #[Depends('testAssertReturn5')]
    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-i32', 'args' => [['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 189,
        );
    }

    #[Depends('testAssertReturn6')]
    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-i64', 'args' => [['type' => 'i64', 'value' => '2'], ['type' => 'i64', 'value' => '1'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 190,
        );
    }

    #[Depends('testAssertReturn7')]
    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-i64', 'args' => [['type' => 'i64', 'value' => '2'], ['type' => 'i64', 'value' => '1'], ['type' => 'i32', 'value' => '4042322160']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 191,
        );
    }

    #[Depends('testAssertReturn8')]
    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1065353216'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 193,
        );
    }

    #[Depends('testAssertReturn9')]
    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32', 'args' => [['type' => 'f32', 'value' => '2139226884'], ['type' => 'f32', 'value' => '1065353216'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2139226884']],
            line: 194,
        );
    }

    #[Depends('testAssertReturn10')]
    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1065353216'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 195,
        );
    }

    #[Depends('testAssertReturn11')]
    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32', 'args' => [['type' => 'f32', 'value' => '2139226884'], ['type' => 'f32', 'value' => '1065353216'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 196,
        );
    }

    #[Depends('testAssertReturn12')]
    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '2143289344'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1073741824']],
            line: 197,
        );
    }

    #[Depends('testAssertReturn13')]
    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '2139226884'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1073741824']],
            line: 198,
        );
    }

    #[Depends('testAssertReturn14')]
    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '2143289344'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 199,
        );
    }

    #[Depends('testAssertReturn15')]
    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '2139226884'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2139226884']],
            line: 200,
        );
    }

    #[Depends('testAssertReturn16')]
    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64', 'args' => [['type' => 'f64', 'value' => '9221120237041090560'], ['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f64', 'value' => '9221120237041090560']],
            line: 202,
        );
    }

    #[Depends('testAssertReturn17')]
    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64', 'args' => [['type' => 'f64', 'value' => '9218868437227537156'], ['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f64', 'value' => '9218868437227537156']],
            line: 203,
        );
    }

    #[Depends('testAssertReturn18')]
    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64', 'args' => [['type' => 'f64', 'value' => '9221120237041090560'], ['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 204,
        );
    }

    #[Depends('testAssertReturn19')]
    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64', 'args' => [['type' => 'f64', 'value' => '9218868437227537156'], ['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 205,
        );
    }

    #[Depends('testAssertReturn20')]
    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64', 'args' => [['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f64', 'value' => '9221120237041090560'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f64', 'value' => '4611686018427387904']],
            line: 206,
        );
    }

    #[Depends('testAssertReturn21')]
    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64', 'args' => [['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f64', 'value' => '9218868437227537156'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f64', 'value' => '4611686018427387904']],
            line: 207,
        );
    }

    #[Depends('testAssertReturn22')]
    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64', 'args' => [['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f64', 'value' => '9221120237041090560'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '9221120237041090560']],
            line: 208,
        );
    }

    #[Depends('testAssertReturn23')]
    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64', 'args' => [['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f64', 'value' => '9218868437227537156'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '9218868437227537156']],
            line: 209,
        );
    }

    #[Depends('testAssertReturn24')]
    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-i32-t', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 211,
        );
    }

    #[Depends('testAssertReturn25')]
    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-i64-t', 'args' => [['type' => 'i64', 'value' => '2'], ['type' => 'i64', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 212,
        );
    }

    #[Depends('testAssertReturn26')]
    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32-t', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1073741824'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 213,
        );
    }

    #[Depends('testAssertReturn27')]
    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64-t', 'args' => [['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 214,
        );
    }

    #[Depends('testAssertReturn28')]
    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-funcref', 'args' => [['type' => 'funcref', 'value' => 'null'], ['type' => 'funcref', 'value' => 'null'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'funcref', 'value' => 'null']],
            line: 215,
        );
    }

    #[Depends('testAssertReturn29')]
    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-externref', 'args' => [['type' => 'externref', 'value' => '1'], ['type' => 'externref', 'value' => '2'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'externref', 'value' => '1']],
            line: 216,
        );
    }

    #[Depends('testAssertReturn30')]
    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-i32-t', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 218,
        );
    }

    #[Depends('testAssertReturn31')]
    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-i32-t', 'args' => [['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 219,
        );
    }

    #[Depends('testAssertReturn32')]
    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-i64-t', 'args' => [['type' => 'i64', 'value' => '2'], ['type' => 'i64', 'value' => '1'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 220,
        );
    }

    #[Depends('testAssertReturn33')]
    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-i64-t', 'args' => [['type' => 'i64', 'value' => '2'], ['type' => 'i64', 'value' => '1'], ['type' => 'i32', 'value' => '4042322160']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 221,
        );
    }

    #[Depends('testAssertReturn34')]
    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-externref', 'args' => [['type' => 'externref', 'value' => '1'], ['type' => 'externref', 'value' => '2'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'externref', 'value' => '2']],
            line: 222,
        );
    }

    #[Depends('testAssertReturn35')]
    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-externref', 'args' => [['type' => 'externref', 'value' => '2'], ['type' => 'externref', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'externref', 'value' => '1']],
            line: 223,
        );
    }

    #[Depends('testAssertReturn36')]
    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32-t', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1065353216'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 225,
        );
    }

    #[Depends('testAssertReturn37')]
    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32-t', 'args' => [['type' => 'f32', 'value' => '2139226884'], ['type' => 'f32', 'value' => '1065353216'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2139226884']],
            line: 226,
        );
    }

    #[Depends('testAssertReturn38')]
    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32-t', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1065353216'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 227,
        );
    }

    #[Depends('testAssertReturn39')]
    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32-t', 'args' => [['type' => 'f32', 'value' => '2139226884'], ['type' => 'f32', 'value' => '1065353216'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 228,
        );
    }

    #[Depends('testAssertReturn40')]
    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32-t', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '2143289344'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1073741824']],
            line: 229,
        );
    }

    #[Depends('testAssertReturn41')]
    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32-t', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '2139226884'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1073741824']],
            line: 230,
        );
    }

    #[Depends('testAssertReturn42')]
    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32-t', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '2143289344'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 231,
        );
    }

    #[Depends('testAssertReturn43')]
    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32-t', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '2139226884'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2139226884']],
            line: 232,
        );
    }

    #[Depends('testAssertReturn44')]
    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64-t', 'args' => [['type' => 'f64', 'value' => '9221120237041090560'], ['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f64', 'value' => '9221120237041090560']],
            line: 234,
        );
    }

    #[Depends('testAssertReturn45')]
    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64-t', 'args' => [['type' => 'f64', 'value' => '9218868437227537156'], ['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f64', 'value' => '9218868437227537156']],
            line: 235,
        );
    }

    #[Depends('testAssertReturn46')]
    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64-t', 'args' => [['type' => 'f64', 'value' => '9221120237041090560'], ['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 236,
        );
    }

    #[Depends('testAssertReturn47')]
    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64-t', 'args' => [['type' => 'f64', 'value' => '9218868437227537156'], ['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 237,
        );
    }

    #[Depends('testAssertReturn48')]
    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64-t', 'args' => [['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f64', 'value' => '9221120237041090560'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f64', 'value' => '4611686018427387904']],
            line: 238,
        );
    }

    #[Depends('testAssertReturn49')]
    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64-t', 'args' => [['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f64', 'value' => '9218868437227537156'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f64', 'value' => '4611686018427387904']],
            line: 239,
        );
    }

    #[Depends('testAssertReturn50')]
    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64-t', 'args' => [['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f64', 'value' => '9221120237041090560'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '9221120237041090560']],
            line: 240,
        );
    }

    #[Depends('testAssertReturn51')]
    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64-t', 'args' => [['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f64', 'value' => '9218868437227537156'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '9218868437227537156']],
            line: 241,
        );
    }

    #[Depends('testAssertReturn52')]
    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-first', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 243,
        );
    }

    #[Depends('testAssertReturn53')]
    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-first', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 244,
        );
    }

    #[Depends('testAssertReturn54')]
    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-mid', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 245,
        );
    }

    #[Depends('testAssertReturn55')]
    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-mid', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 246,
        );
    }

    #[Depends('testAssertReturn56')]
    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-last', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 247,
        );
    }

    #[Depends('testAssertReturn57')]
    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-last', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 248,
        );
    }

    #[Depends('testAssertReturn58')]
    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-first', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 250,
        );
    }

    #[Depends('testAssertReturn59')]
    public function testAssertReturn60(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-first', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 251,
        );
    }

    #[Depends('testAssertReturn60')]
    public function testAssertReturn61(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-mid', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 252,
        );
    }

    #[Depends('testAssertReturn61')]
    public function testAssertReturn62(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-mid', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 253,
        );
    }

    #[Depends('testAssertReturn62')]
    public function testAssertReturn63(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-last', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 254,
        );
    }

    #[Depends('testAssertReturn63')]
    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-last', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 255,
        );
    }

    #[Depends('testAssertReturn64')]
    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-condition', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 257,
        );
    }

    #[Depends('testAssertReturn65')]
    public function testAssertReturn66(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-condition', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 258,
        );
    }

    #[Depends('testAssertReturn66')]
    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-then', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 259,
        );
    }

    #[Depends('testAssertReturn67')]
    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-then', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 260,
        );
    }

    #[Depends('testAssertReturn68')]
    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-else', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 261,
        );
    }

    #[Depends('testAssertReturn69')]
    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-else', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 262,
        );
    }

    #[Depends('testAssertReturn70')]
    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-first', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 264,
        );
    }

    #[Depends('testAssertReturn71')]
    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-first', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 265,
        );
    }

    #[Depends('testAssertReturn72')]
    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-last', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 266,
        );
    }

    #[Depends('testAssertReturn73')]
    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-last', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 267,
        );
    }

    #[Depends('testAssertReturn74')]
    public function testAssertReturn75(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-first', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 269,
        );
    }

    #[Depends('testAssertReturn75')]
    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-first', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 270,
        );
    }

    #[Depends('testAssertReturn76')]
    public function testAssertReturn77(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-last', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 271,
        );
    }

    #[Depends('testAssertReturn77')]
    public function testAssertReturn78(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-last', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 272,
        );
    }

    #[Depends('testAssertReturn78')]
    public function testAssertReturn79(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-first', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 274,
        );
    }

    #[Depends('testAssertReturn79')]
    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-first', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 275,
        );
    }

    #[Depends('testAssertReturn80')]
    public function testAssertReturn81(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-mid', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 276,
        );
    }

    #[Depends('testAssertReturn81')]
    public function testAssertReturn82(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-mid', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 277,
        );
    }

    #[Depends('testAssertReturn82')]
    public function testAssertTrap83(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-last', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'undefined element',
            line: 278,
        );
    }

    #[Depends('testAssertTrap83')]
    public function testAssertTrap84(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-last', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'undefined element',
            line: 279,
        );
    }

    #[Depends('testAssertTrap84')]
    public function testAssertReturn85(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-first', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 281,
        );
    }

    #[Depends('testAssertReturn85')]
    public function testAssertReturn86(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-first', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 282,
        );
    }

    #[Depends('testAssertReturn86')]
    public function testAssertReturn87(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-last', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 283,
        );
    }

    #[Depends('testAssertReturn87')]
    public function testAssertReturn88(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-last', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 284,
        );
    }

    #[Depends('testAssertReturn88')]
    public function testAssertReturn89(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-memory.grow-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 286,
        );
    }

    #[Depends('testAssertReturn89')]
    public function testAssertReturn90(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-memory.grow-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 287,
        );
    }

    #[Depends('testAssertReturn90')]
    public function testAssertReturn91(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 289,
        );
    }

    #[Depends('testAssertReturn91')]
    public function testAssertReturn92(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 290,
        );
    }

    #[Depends('testAssertReturn92')]
    public function testAssertReturn93(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-return-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 291,
        );
    }

    #[Depends('testAssertReturn93')]
    public function testAssertReturn94(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-return-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 292,
        );
    }

    #[Depends('testAssertReturn94')]
    public function testAssertReturn95(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-drop-operand', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 293,
        );
    }

    #[Depends('testAssertReturn95')]
    public function testAssertReturn96(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-drop-operand', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 294,
        );
    }

    #[Depends('testAssertReturn96')]
    public function testAssertReturn97(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 295,
        );
    }

    #[Depends('testAssertReturn97')]
    public function testAssertReturn98(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 296,
        );
    }

    #[Depends('testAssertReturn98')]
    public function testAssertReturn99(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.set-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 297,
        );
    }

    #[Depends('testAssertReturn99')]
    public function testAssertReturn100(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.set-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 298,
        );
    }

    #[Depends('testAssertReturn100')]
    public function testAssertReturn101(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.tee-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 299,
        );
    }

    #[Depends('testAssertReturn101')]
    public function testAssertReturn102(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.tee-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 300,
        );
    }

    #[Depends('testAssertReturn102')]
    public function testAssertReturn103(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-global.set-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 301,
        );
    }

    #[Depends('testAssertReturn103')]
    public function testAssertReturn104(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-global.set-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 302,
        );
    }

    #[Depends('testAssertReturn104')]
    public function testAssertReturn105(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-load-operand', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 303,
        );
    }

    #[Depends('testAssertReturn105')]
    public function testAssertReturn106(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-load-operand', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 304,
        );
    }

    #[Depends('testAssertReturn106')]
    public function testAssertReturn107(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-unary-operand', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 306,
        );
    }

    #[Depends('testAssertReturn107')]
    public function testAssertReturn108(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-unary-operand', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 307,
        );
    }

    #[Depends('testAssertReturn108')]
    public function testAssertReturn109(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-operand', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 308,
        );
    }

    #[Depends('testAssertReturn109')]
    public function testAssertReturn110(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-operand', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 309,
        );
    }

    #[Depends('testAssertReturn110')]
    public function testAssertReturn111(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-test-operand', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 310,
        );
    }

    #[Depends('testAssertReturn111')]
    public function testAssertReturn112(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-test-operand', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 311,
        );
    }

    #[Depends('testAssertReturn112')]
    public function testAssertReturn113(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-left', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 312,
        );
    }

    #[Depends('testAssertReturn113')]
    public function testAssertReturn114(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-left', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 313,
        );
    }

    #[Depends('testAssertReturn114')]
    public function testAssertReturn115(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-right', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 314,
        );
    }

    #[Depends('testAssertReturn115')]
    public function testAssertReturn116(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-right', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 315,
        );
    }

    #[Depends('testAssertReturn116')]
    public function testAssertReturn117(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-convert-operand', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 316,
        );
    }

    #[Depends('testAssertReturn117')]
    public function testAssertReturn118(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-convert-operand', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 317,
        );
    }

    #[Depends('testAssertReturn118')]
    public function testAssertInvalid119(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.1.wasm',
            text: 'type mismatch',
            line: 320,
        );
    }

    #[Depends('testAssertInvalid119')]
    public function testAssertInvalid120(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.2.wasm',
            text: 'invalid result arity',
            line: 324,
        );
    }

    #[Depends('testAssertInvalid120')]
    public function testAssertInvalid121(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.3.wasm',
            text: 'invalid result arity',
            line: 328,
        );
    }

    #[Depends('testAssertInvalid121')]
    public function testAssertInvalid122(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.4.wasm',
            text: 'type mismatch',
            line: 340,
        );
    }

    #[Depends('testAssertInvalid122')]
    public function testAssertInvalid123(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.5.wasm',
            text: 'type mismatch',
            line: 347,
        );
    }

    #[Depends('testAssertInvalid123')]
    public function testAssertInvalid124(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.6.wasm',
            text: 'type mismatch',
            line: 353,
        );
    }

    #[Depends('testAssertInvalid124')]
    public function testAssertInvalid125(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.7.wasm',
            text: 'type mismatch',
            line: 359,
        );
    }

    #[Depends('testAssertInvalid125')]
    public function testAssertInvalid126(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.8.wasm',
            text: 'type mismatch',
            line: 366,
        );
    }

    #[Depends('testAssertInvalid126')]
    public function testAssertInvalid127(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.9.wasm',
            text: 'type mismatch',
            line: 370,
        );
    }

    #[Depends('testAssertInvalid127')]
    public function testAssertInvalid128(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.10.wasm',
            text: 'type mismatch',
            line: 374,
        );
    }

    #[Depends('testAssertInvalid128')]
    public function testAssertInvalid129(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.11.wasm',
            text: 'type mismatch',
            line: 378,
        );
    }

    #[Depends('testAssertInvalid129')]
    public function testAssertInvalid130(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.12.wasm',
            text: 'type mismatch',
            line: 382,
        );
    }

    #[Depends('testAssertInvalid130')]
    public function testAssertInvalid131(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.13.wasm',
            text: 'type mismatch',
            line: 388,
        );
    }

    #[Depends('testAssertInvalid131')]
    public function testAssertInvalid132(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.14.wasm',
            text: 'type mismatch',
            line: 396,
        );
    }

    #[Depends('testAssertInvalid132')]
    public function testAssertInvalid133(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.15.wasm',
            text: 'type mismatch',
            line: 404,
        );
    }

    #[Depends('testAssertInvalid133')]
    public function testAssertInvalid134(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.16.wasm',
            text: 'type mismatch',
            line: 412,
        );
    }

    #[Depends('testAssertInvalid134')]
    public function testAssertInvalid135(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.17.wasm',
            text: 'type mismatch',
            line: 421,
        );
    }

    #[Depends('testAssertInvalid135')]
    public function testAssertInvalid136(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.18.wasm',
            text: 'type mismatch',
            line: 430,
        );
    }

    #[Depends('testAssertInvalid136')]
    public function testAssertInvalid137(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.19.wasm',
            text: 'type mismatch',
            line: 439,
        );
    }

    #[Depends('testAssertInvalid137')]
    public function testAssertInvalid138(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.20.wasm',
            text: 'type mismatch',
            line: 448,
        );
    }

    #[Depends('testAssertInvalid138')]
    public function testAssertInvalid139(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.21.wasm',
            text: 'type mismatch',
            line: 457,
        );
    }

    #[Depends('testAssertInvalid139')]
    public function testAssertInvalid140(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.22.wasm',
            text: 'type mismatch',
            line: 466,
        );
    }

    #[Depends('testAssertInvalid140')]
    public function testAssertInvalid141(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.23.wasm',
            text: 'type mismatch',
            line: 475,
        );
    }

    #[Depends('testAssertInvalid141')]
    public function testAssertInvalid142(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.24.wasm',
            text: 'type mismatch',
            line: 484,
        );
    }

    #[Depends('testAssertInvalid142')]
    public function testAssertInvalid143(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.25.wasm',
            text: 'type mismatch',
            line: 496,
        );
    }

    #[Depends('testAssertInvalid143')]
    public function testAssertInvalid144(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.26.wasm',
            text: 'type mismatch',
            line: 500,
        );
    }

    #[Depends('testAssertInvalid144')]
    public function testAssertInvalid145(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.27.wasm',
            text: 'type mismatch',
            line: 504,
        );
    }

    #[Depends('testAssertInvalid145')]
    public function testAssertInvalid146(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.28.wasm',
            text: 'type mismatch',
            line: 511,
        );
    }

    #[Depends('testAssertInvalid146')]
    public function testModule147(): void
    {
        $this->runModuleCommand(
            filename: 'select.29.wasm',
            name: null,
            line: 518,
        );
    }
}
