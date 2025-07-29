<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class GlobalTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'global.0.wasm',
            name: null,
            line: 3,
        );
    }

    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-a', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4294967294']],
            line: 196,
        );
    }

    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-b', 'args' => []],
            expected: [['type' => 'i64', 'value' => '18446744073709551611']],
            line: 197,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-r', 'args' => []],
            expected: [['type' => 'externref', 'value' => 'null']],
            line: 198,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-mr', 'args' => []],
            expected: [['type' => 'externref', 'value' => 'null']],
            line: 199,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-x', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4294967284']],
            line: 200,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-y', 'args' => []],
            expected: [['type' => 'i64', 'value' => '18446744073709551601']],
            line: 201,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-z1', 'args' => []],
            expected: [['type' => 'i32', 'value' => '666']],
            line: 202,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-z2', 'args' => []],
            expected: [['type' => 'i64', 'value' => '666']],
            line: 203,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-3', 'args' => []],
            expected: [['type' => 'f32', 'value' => '3225419776']],
            line: 205,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-4', 'args' => []],
            expected: [['type' => 'f64', 'value' => '13839561654909534208']],
            line: 206,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-7', 'args' => []],
            expected: [['type' => 'f32', 'value' => '3243245568']],
            line: 207,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-8', 'args' => []],
            expected: [['type' => 'f64', 'value' => '13847442954257432576']],
            line: 208,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'set-x', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [],
            line: 210,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'set-y', 'args' => [['type' => 'i64', 'value' => '7']]],
            expected: [],
            line: 211,
        );
    }

    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'set-7', 'args' => [['type' => 'f32', 'value' => '1090519040']]],
            expected: [],
            line: 213,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'set-8', 'args' => [['type' => 'f64', 'value' => '4621256167635550208']]],
            expected: [],
            line: 214,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-x', 'args' => []],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 216,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-y', 'args' => []],
            expected: [['type' => 'i64', 'value' => '7']],
            line: 217,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-7', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1090519040']],
            line: 218,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-8', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4621256167635550208']],
            line: 219,
        );
    }

    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'set-7', 'args' => [['type' => 'f32', 'value' => '1090519040']]],
            expected: [],
            line: 221,
        );
    }

    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'set-8', 'args' => [['type' => 'f64', 'value' => '4621256167635550208']]],
            expected: [],
            line: 222,
        );
    }

    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'set-mr', 'args' => [['type' => 'externref', 'value' => '10']]],
            expected: [],
            line: 223,
        );
    }

    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-x', 'args' => []],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 225,
        );
    }

    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-y', 'args' => []],
            expected: [['type' => 'i64', 'value' => '7']],
            line: 226,
        );
    }

    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-7', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1090519040']],
            line: 227,
        );
    }

    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-8', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4621256167635550208']],
            line: 228,
        );
    }

    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'get-mr', 'args' => []],
            expected: [['type' => 'externref', 'value' => '10']],
            line: 229,
        );
    }

    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 231,
        );
    }

    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-mid', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 232,
        );
    }

    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 233,
        );
    }

    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 235,
        );
    }

    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-mid', 'args' => []],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 236,
        );
    }

    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 237,
        );
    }

    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-condition', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 239,
        );
    }

    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-then', 'args' => []],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 240,
        );
    }

    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-else', 'args' => []],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 241,
        );
    }

    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 243,
        );
    }

    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 244,
        );
    }

    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 246,
        );
    }

    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 247,
        );
    }

    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 249,
        );
    }

    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-mid', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 250,
        );
    }

    public function testAssertTrap44(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-last', 'args' => []],
            text: 'undefined element',
            line: 251,
        );
    }

    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-first', 'args' => []],
            expected: [],
            line: 253,
        );
    }

    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-last', 'args' => []],
            expected: [],
            line: 254,
        );
    }

    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-load-operand', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 255,
        );
    }

    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-memory.grow-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 256,
        );
    }

    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 258,
        );
    }

    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-return-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 260,
        );
    }

    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-drop-operand', 'args' => []],
            expected: [],
            line: 261,
        );
    }

    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 262,
        );
    }

    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.set-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 264,
        );
    }

    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.tee-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 265,
        );
    }

    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-global.set-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 266,
        );
    }

    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-unary-operand', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 268,
        );
    }

    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-operand', 'args' => []],
            expected: [['type' => 'i32', 'value' => '36']],
            line: 269,
        );
    }

    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-operand', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 270,
        );
    }

    public function testAssertInvalid59(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.1.wasm',
            text: 'global is immutable',
            line: 273,
        );
    }

    public function testAssertInvalid60(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.2.wasm',
            text: 'global is immutable',
            line: 278,
        );
    }

    public function testModule61(): void
    {
        $this->runModuleCommand(
            filename: 'global.3.wasm',
            name: null,
            line: 283,
        );
    }

    public function testModule62(): void
    {
        $this->runModuleCommand(
            filename: 'global.4.wasm',
            name: null,
            line: 284,
        );
    }

    public function testAssertInvalid63(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.5.wasm',
            text: 'constant expression required',
            line: 287,
        );
    }

    public function testAssertInvalid64(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.6.wasm',
            text: 'constant expression required',
            line: 292,
        );
    }

    public function testAssertInvalid65(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.7.wasm',
            text: 'constant expression required',
            line: 297,
        );
    }

    public function testAssertInvalid66(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.8.wasm',
            text: 'constant expression required',
            line: 302,
        );
    }

    public function testAssertInvalid67(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.9.wasm',
            text: 'constant expression required',
            line: 307,
        );
    }

    public function testAssertInvalid68(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.10.wasm',
            text: 'constant expression required',
            line: 312,
        );
    }

    public function testAssertInvalid69(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.11.wasm',
            text: 'type mismatch',
            line: 317,
        );
    }

    public function testAssertInvalid70(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.12.wasm',
            text: 'type mismatch',
            line: 322,
        );
    }

    public function testAssertInvalid71(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.13.wasm',
            text: 'type mismatch',
            line: 327,
        );
    }

    public function testAssertInvalid72(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.14.wasm',
            text: 'type mismatch',
            line: 332,
        );
    }

    public function testAssertInvalid73(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.15.wasm',
            text: 'type mismatch',
            line: 337,
        );
    }

    public function testAssertInvalid74(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.16.wasm',
            text: 'type mismatch',
            line: 342,
        );
    }

    public function testAssertInvalid75(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.17.wasm',
            text: 'unknown global',
            line: 347,
        );
    }

    public function testAssertInvalid76(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.18.wasm',
            text: 'unknown global',
            line: 352,
        );
    }

    public function testAssertInvalid77(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.19.wasm',
            text: 'unknown global',
            line: 356,
        );
    }

    public function testAssertInvalid78(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.20.wasm',
            text: 'unknown global',
            line: 361,
        );
    }

    public function testAssertInvalid79(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.21.wasm',
            text: 'unknown global',
            line: 366,
        );
    }

    public function testAssertInvalid80(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.22.wasm',
            text: 'constant expression required',
            line: 371,
        );
    }

    public function testModule81(): void
    {
        $this->runModuleCommand(
            filename: 'global.23.wasm',
            name: null,
            line: 375,
        );
    }

    public function testAssertMalformed82(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'global.24.wasm',
            text: 'malformed mutability',
            line: 379,
        );
    }

    public function testAssertMalformed83(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'global.25.wasm',
            text: 'malformed mutability',
            line: 392,
        );
    }

    public function testModule84(): void
    {
        $this->runModuleCommand(
            filename: 'global.26.wasm',
            name: null,
            line: 405,
        );
    }

    public function testAssertMalformed85(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'global.27.wasm',
            text: 'malformed mutability',
            line: 409,
        );
    }

    public function testAssertMalformed86(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'global.28.wasm',
            text: 'malformed mutability',
            line: 421,
        );
    }

    public function testAssertInvalid87(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.29.wasm',
            text: 'unknown global',
            line: 435,
        );
    }

    public function testAssertInvalid88(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.30.wasm',
            text: 'unknown global',
            line: 440,
        );
    }

    public function testAssertInvalid89(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.31.wasm',
            text: 'unknown global',
            line: 448,
        );
    }

    public function testAssertInvalid90(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.32.wasm',
            text: 'unknown global',
            line: 456,
        );
    }

    public function testAssertInvalid91(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.33.wasm',
            text: 'unknown global',
            line: 466,
        );
    }

    public function testAssertInvalid92(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.34.wasm',
            text: 'unknown global',
            line: 471,
        );
    }

    public function testAssertInvalid93(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.35.wasm',
            text: 'unknown global',
            line: 479,
        );
    }

    public function testAssertInvalid94(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.36.wasm',
            text: 'unknown global',
            line: 487,
        );
    }

    public function testAssertInvalid95(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.37.wasm',
            text: 'type mismatch',
            line: 497,
        );
    }

    public function testAssertInvalid96(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.38.wasm',
            text: 'type mismatch',
            line: 506,
        );
    }

    public function testAssertInvalid97(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.39.wasm',
            text: 'type mismatch',
            line: 516,
        );
    }

    public function testAssertInvalid98(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.40.wasm',
            text: 'type mismatch',
            line: 526,
        );
    }

    public function testAssertInvalid99(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.41.wasm',
            text: 'type mismatch',
            line: 536,
        );
    }

    public function testAssertInvalid100(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.42.wasm',
            text: 'type mismatch',
            line: 546,
        );
    }

    public function testAssertInvalid101(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.43.wasm',
            text: 'type mismatch',
            line: 556,
        );
    }

    public function testAssertInvalid102(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.44.wasm',
            text: 'type mismatch',
            line: 566,
        );
    }

    public function testAssertInvalid103(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.45.wasm',
            text: 'type mismatch',
            line: 576,
        );
    }

    public function testAssertInvalid104(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.46.wasm',
            text: 'type mismatch',
            line: 585,
        );
    }

    public function testAssertInvalid105(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.47.wasm',
            text: 'type mismatch',
            line: 594,
        );
    }

    public function testAssertInvalid106(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'global.48.wasm',
            text: 'type mismatch',
            line: 604,
        );
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
}
