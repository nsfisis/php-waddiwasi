<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
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

    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-i32', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 183,
        );
    }

    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-i64', 'args' => [['type' => 'i64', 'value' => '2'], ['type' => 'i64', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 184,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1073741824'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 185,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64', 'args' => [['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 186,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-i32', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 188,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-i32', 'args' => [['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 189,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-i64', 'args' => [['type' => 'i64', 'value' => '2'], ['type' => 'i64', 'value' => '1'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 190,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-i64', 'args' => [['type' => 'i64', 'value' => '2'], ['type' => 'i64', 'value' => '1'], ['type' => 'i32', 'value' => '4042322160']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 191,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1065353216'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 193,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32', 'args' => [['type' => 'f32', 'value' => '2139226884'], ['type' => 'f32', 'value' => '1065353216'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2139226884']],
            line: 194,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1065353216'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 195,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32', 'args' => [['type' => 'f32', 'value' => '2139226884'], ['type' => 'f32', 'value' => '1065353216'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 196,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '2143289344'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1073741824']],
            line: 197,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '2139226884'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1073741824']],
            line: 198,
        );
    }

    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '2143289344'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 199,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '2139226884'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2139226884']],
            line: 200,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64', 'args' => [['type' => 'f64', 'value' => '9221120237041090560'], ['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f64', 'value' => '9221120237041090560']],
            line: 202,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64', 'args' => [['type' => 'f64', 'value' => '9218868437227537156'], ['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f64', 'value' => '9218868437227537156']],
            line: 203,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64', 'args' => [['type' => 'f64', 'value' => '9221120237041090560'], ['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 204,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64', 'args' => [['type' => 'f64', 'value' => '9218868437227537156'], ['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 205,
        );
    }

    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64', 'args' => [['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f64', 'value' => '9221120237041090560'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f64', 'value' => '4611686018427387904']],
            line: 206,
        );
    }

    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64', 'args' => [['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f64', 'value' => '9218868437227537156'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f64', 'value' => '4611686018427387904']],
            line: 207,
        );
    }

    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64', 'args' => [['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f64', 'value' => '9221120237041090560'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '9221120237041090560']],
            line: 208,
        );
    }

    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64', 'args' => [['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f64', 'value' => '9218868437227537156'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '9218868437227537156']],
            line: 209,
        );
    }

    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-i32-t', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 211,
        );
    }

    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-i64-t', 'args' => [['type' => 'i64', 'value' => '2'], ['type' => 'i64', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 212,
        );
    }

    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32-t', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1073741824'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 213,
        );
    }

    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64-t', 'args' => [['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 214,
        );
    }

    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-funcref', 'args' => [['type' => 'funcref', 'value' => 'null'], ['type' => 'funcref', 'value' => 'null'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'funcref', 'value' => 'null']],
            line: 215,
        );
    }

    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-externref', 'args' => [['type' => 'externref', 'value' => '1'], ['type' => 'externref', 'value' => '2'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'externref', 'value' => '1']],
            line: 216,
        );
    }

    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-i32-t', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 218,
        );
    }

    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-i32-t', 'args' => [['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 219,
        );
    }

    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-i64-t', 'args' => [['type' => 'i64', 'value' => '2'], ['type' => 'i64', 'value' => '1'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 220,
        );
    }

    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-i64-t', 'args' => [['type' => 'i64', 'value' => '2'], ['type' => 'i64', 'value' => '1'], ['type' => 'i32', 'value' => '4042322160']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 221,
        );
    }

    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-externref', 'args' => [['type' => 'externref', 'value' => '1'], ['type' => 'externref', 'value' => '2'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'externref', 'value' => '2']],
            line: 222,
        );
    }

    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-externref', 'args' => [['type' => 'externref', 'value' => '2'], ['type' => 'externref', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'externref', 'value' => '1']],
            line: 223,
        );
    }

    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32-t', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1065353216'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 225,
        );
    }

    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32-t', 'args' => [['type' => 'f32', 'value' => '2139226884'], ['type' => 'f32', 'value' => '1065353216'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '2139226884']],
            line: 226,
        );
    }

    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32-t', 'args' => [['type' => 'f32', 'value' => '2143289344'], ['type' => 'f32', 'value' => '1065353216'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 227,
        );
    }

    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32-t', 'args' => [['type' => 'f32', 'value' => '2139226884'], ['type' => 'f32', 'value' => '1065353216'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 228,
        );
    }

    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32-t', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '2143289344'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1073741824']],
            line: 229,
        );
    }

    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32-t', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '2139226884'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1073741824']],
            line: 230,
        );
    }

    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32-t', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '2143289344'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2143289344']],
            line: 231,
        );
    }

    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f32-t', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '2139226884'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '2139226884']],
            line: 232,
        );
    }

    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64-t', 'args' => [['type' => 'f64', 'value' => '9221120237041090560'], ['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f64', 'value' => '9221120237041090560']],
            line: 234,
        );
    }

    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64-t', 'args' => [['type' => 'f64', 'value' => '9218868437227537156'], ['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f64', 'value' => '9218868437227537156']],
            line: 235,
        );
    }

    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64-t', 'args' => [['type' => 'f64', 'value' => '9221120237041090560'], ['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 236,
        );
    }

    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64-t', 'args' => [['type' => 'f64', 'value' => '9218868437227537156'], ['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 237,
        );
    }

    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64-t', 'args' => [['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f64', 'value' => '9221120237041090560'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f64', 'value' => '4611686018427387904']],
            line: 238,
        );
    }

    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64-t', 'args' => [['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f64', 'value' => '9218868437227537156'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f64', 'value' => '4611686018427387904']],
            line: 239,
        );
    }

    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64-t', 'args' => [['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f64', 'value' => '9221120237041090560'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '9221120237041090560']],
            line: 240,
        );
    }

    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'select-f64-t', 'args' => [['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f64', 'value' => '9218868437227537156'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '9218868437227537156']],
            line: 241,
        );
    }

    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-first', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 243,
        );
    }

    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-first', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 244,
        );
    }

    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-mid', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 245,
        );
    }

    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-mid', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 246,
        );
    }

    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-last', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 247,
        );
    }

    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-last', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 248,
        );
    }

    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-first', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 250,
        );
    }

    public function testAssertReturn60(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-first', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 251,
        );
    }

    public function testAssertReturn61(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-mid', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 252,
        );
    }

    public function testAssertReturn62(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-mid', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 253,
        );
    }

    public function testAssertReturn63(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-last', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 254,
        );
    }

    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-last', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 255,
        );
    }

    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-condition', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 257,
        );
    }

    public function testAssertReturn66(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-condition', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 258,
        );
    }

    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-then', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 259,
        );
    }

    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-then', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 260,
        );
    }

    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-else', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 261,
        );
    }

    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-else', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 262,
        );
    }

    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-first', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 264,
        );
    }

    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-first', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 265,
        );
    }

    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-last', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 266,
        );
    }

    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-last', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 267,
        );
    }

    public function testAssertReturn75(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-first', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 269,
        );
    }

    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-first', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 270,
        );
    }

    public function testAssertReturn77(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-last', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 271,
        );
    }

    public function testAssertReturn78(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-last', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 272,
        );
    }

    public function testAssertReturn79(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-first', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 274,
        );
    }

    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-first', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 275,
        );
    }

    public function testAssertReturn81(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-mid', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 276,
        );
    }

    public function testAssertReturn82(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-mid', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 277,
        );
    }

    public function testAssertTrap83(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-last', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'undefined element',
            line: 278,
        );
    }

    public function testAssertTrap84(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-last', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'undefined element',
            line: 279,
        );
    }

    public function testAssertReturn85(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-first', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 281,
        );
    }

    public function testAssertReturn86(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-first', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 282,
        );
    }

    public function testAssertReturn87(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-last', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 283,
        );
    }

    public function testAssertReturn88(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-last', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 284,
        );
    }

    public function testAssertReturn89(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-memory.grow-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 286,
        );
    }

    public function testAssertReturn90(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-memory.grow-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 287,
        );
    }

    public function testAssertReturn91(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 289,
        );
    }

    public function testAssertReturn92(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 290,
        );
    }

    public function testAssertReturn93(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-return-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 291,
        );
    }

    public function testAssertReturn94(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-return-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 292,
        );
    }

    public function testAssertReturn95(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-drop-operand', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 293,
        );
    }

    public function testAssertReturn96(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-drop-operand', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 294,
        );
    }

    public function testAssertReturn97(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 295,
        );
    }

    public function testAssertReturn98(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 296,
        );
    }

    public function testAssertReturn99(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.set-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 297,
        );
    }

    public function testAssertReturn100(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.set-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 298,
        );
    }

    public function testAssertReturn101(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.tee-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 299,
        );
    }

    public function testAssertReturn102(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.tee-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 300,
        );
    }

    public function testAssertReturn103(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-global.set-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 301,
        );
    }

    public function testAssertReturn104(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-global.set-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 302,
        );
    }

    public function testAssertReturn105(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-load-operand', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 303,
        );
    }

    public function testAssertReturn106(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-load-operand', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 304,
        );
    }

    public function testAssertReturn107(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-unary-operand', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 306,
        );
    }

    public function testAssertReturn108(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-unary-operand', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 307,
        );
    }

    public function testAssertReturn109(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-operand', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 308,
        );
    }

    public function testAssertReturn110(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-operand', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 309,
        );
    }

    public function testAssertReturn111(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-test-operand', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 310,
        );
    }

    public function testAssertReturn112(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-test-operand', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 311,
        );
    }

    public function testAssertReturn113(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-left', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 312,
        );
    }

    public function testAssertReturn114(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-left', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 313,
        );
    }

    public function testAssertReturn115(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-right', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 314,
        );
    }

    public function testAssertReturn116(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-right', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 315,
        );
    }

    public function testAssertReturn117(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-convert-operand', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 316,
        );
    }

    public function testAssertReturn118(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-convert-operand', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 317,
        );
    }

    public function testAssertInvalid119(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.1.wasm',
            text: 'type mismatch',
            line: 320,
        );
    }

    public function testAssertInvalid120(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.2.wasm',
            text: 'invalid result arity',
            line: 324,
        );
    }

    public function testAssertInvalid121(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.3.wasm',
            text: 'invalid result arity',
            line: 328,
        );
    }

    public function testAssertInvalid122(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.4.wasm',
            text: 'type mismatch',
            line: 340,
        );
    }

    public function testAssertInvalid123(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.5.wasm',
            text: 'type mismatch',
            line: 347,
        );
    }

    public function testAssertInvalid124(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.6.wasm',
            text: 'type mismatch',
            line: 353,
        );
    }

    public function testAssertInvalid125(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.7.wasm',
            text: 'type mismatch',
            line: 359,
        );
    }

    public function testAssertInvalid126(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.8.wasm',
            text: 'type mismatch',
            line: 366,
        );
    }

    public function testAssertInvalid127(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.9.wasm',
            text: 'type mismatch',
            line: 370,
        );
    }

    public function testAssertInvalid128(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.10.wasm',
            text: 'type mismatch',
            line: 374,
        );
    }

    public function testAssertInvalid129(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.11.wasm',
            text: 'type mismatch',
            line: 378,
        );
    }

    public function testAssertInvalid130(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.12.wasm',
            text: 'type mismatch',
            line: 382,
        );
    }

    public function testAssertInvalid131(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.13.wasm',
            text: 'type mismatch',
            line: 388,
        );
    }

    public function testAssertInvalid132(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.14.wasm',
            text: 'type mismatch',
            line: 396,
        );
    }

    public function testAssertInvalid133(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.15.wasm',
            text: 'type mismatch',
            line: 404,
        );
    }

    public function testAssertInvalid134(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.16.wasm',
            text: 'type mismatch',
            line: 412,
        );
    }

    public function testAssertInvalid135(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.17.wasm',
            text: 'type mismatch',
            line: 421,
        );
    }

    public function testAssertInvalid136(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.18.wasm',
            text: 'type mismatch',
            line: 430,
        );
    }

    public function testAssertInvalid137(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.19.wasm',
            text: 'type mismatch',
            line: 439,
        );
    }

    public function testAssertInvalid138(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.20.wasm',
            text: 'type mismatch',
            line: 448,
        );
    }

    public function testAssertInvalid139(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.21.wasm',
            text: 'type mismatch',
            line: 457,
        );
    }

    public function testAssertInvalid140(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.22.wasm',
            text: 'type mismatch',
            line: 466,
        );
    }

    public function testAssertInvalid141(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.23.wasm',
            text: 'type mismatch',
            line: 475,
        );
    }

    public function testAssertInvalid142(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.24.wasm',
            text: 'type mismatch',
            line: 484,
        );
    }

    public function testAssertInvalid143(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.25.wasm',
            text: 'type mismatch',
            line: 496,
        );
    }

    public function testAssertInvalid144(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.26.wasm',
            text: 'type mismatch',
            line: 500,
        );
    }

    public function testAssertInvalid145(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.27.wasm',
            text: 'type mismatch',
            line: 504,
        );
    }

    public function testAssertInvalid146(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'select.28.wasm',
            text: 'type mismatch',
            line: 511,
        );
    }

    public function testModule147(): void
    {
        $this->runModuleCommand(
            filename: 'select.29.wasm',
            name: null,
            line: 518,
        );
    }
}
