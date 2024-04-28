<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;

final class LocalSetTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'local_set.0.wasm',
            name: null,
            line: 3,
        );
    }

    #[Depends('testModule0')]
    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'type-local-i32', 'args' => []],
            expected: [],
            line: 107,
        );
    }

    #[Depends('testAssertReturn1')]
    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'type-local-i64', 'args' => []],
            expected: [],
            line: 108,
        );
    }

    #[Depends('testAssertReturn2')]
    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'type-local-f32', 'args' => []],
            expected: [],
            line: 109,
        );
    }

    #[Depends('testAssertReturn3')]
    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'type-local-f64', 'args' => []],
            expected: [],
            line: 110,
        );
    }

    #[Depends('testAssertReturn4')]
    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'type-param-i32', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [],
            line: 112,
        );
    }

    #[Depends('testAssertReturn5')]
    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'type-param-i64', 'args' => [['type' => 'i64', 'value' => '3']]],
            expected: [],
            line: 113,
        );
    }

    #[Depends('testAssertReturn6')]
    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'type-param-f32', 'args' => [['type' => 'f32', 'value' => '1082969293']]],
            expected: [],
            line: 114,
        );
    }

    #[Depends('testAssertReturn7')]
    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'type-param-f64', 'args' => [['type' => 'f64', 'value' => '4617878467915022336']]],
            expected: [],
            line: 115,
        );
    }

    #[Depends('testAssertReturn8')]
    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-block-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 117,
        );
    }

    #[Depends('testAssertReturn9')]
    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-loop-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 118,
        );
    }

    #[Depends('testAssertReturn10')]
    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 120,
        );
    }

    #[Depends('testAssertReturn11')]
    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br_if-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 121,
        );
    }

    #[Depends('testAssertReturn12')]
    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br_if-value-cond', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 122,
        );
    }

    #[Depends('testAssertReturn13')]
    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-br_table-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 123,
        );
    }

    #[Depends('testAssertReturn14')]
    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-return-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 125,
        );
    }

    #[Depends('testAssertReturn15')]
    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-if-then', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 127,
        );
    }

    #[Depends('testAssertReturn16')]
    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'as-if-else', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 128,
        );
    }

    #[Depends('testAssertReturn17')]
    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'type-mixed', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'f32', 'value' => '1074580685'], ['type' => 'f64', 'value' => '4614613358185178726'], ['type' => 'i32', 'value' => '4'], ['type' => 'i32', 'value' => '5']]],
            expected: [],
            line: 131,
        );
    }

    #[Depends('testAssertReturn18')]
    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'write', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'f32', 'value' => '1073741824'], ['type' => 'f64', 'value' => '4614613358185178726'], ['type' => 'i32', 'value' => '4'], ['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i64', 'value' => '56']],
            line: 137,
        );
    }

    #[Depends('testAssertReturn19')]
    public function testAssertInvalid20(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.1.wasm',
            text: 'type mismatch',
            line: 148,
        );
    }

    #[Depends('testAssertInvalid20')]
    public function testAssertInvalid21(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.2.wasm',
            text: 'type mismatch',
            line: 152,
        );
    }

    #[Depends('testAssertInvalid21')]
    public function testAssertInvalid22(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.3.wasm',
            text: 'type mismatch',
            line: 156,
        );
    }

    #[Depends('testAssertInvalid22')]
    public function testAssertInvalid23(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.4.wasm',
            text: 'type mismatch',
            line: 160,
        );
    }

    #[Depends('testAssertInvalid23')]
    public function testAssertInvalid24(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.5.wasm',
            text: 'type mismatch',
            line: 169,
        );
    }

    #[Depends('testAssertInvalid24')]
    public function testAssertInvalid25(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.6.wasm',
            text: 'type mismatch',
            line: 173,
        );
    }

    #[Depends('testAssertInvalid25')]
    public function testAssertInvalid26(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.7.wasm',
            text: 'type mismatch',
            line: 177,
        );
    }

    #[Depends('testAssertInvalid26')]
    public function testAssertInvalid27(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.8.wasm',
            text: 'type mismatch',
            line: 181,
        );
    }

    #[Depends('testAssertInvalid27')]
    public function testAssertInvalid28(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.9.wasm',
            text: 'type mismatch',
            line: 186,
        );
    }

    #[Depends('testAssertInvalid28')]
    public function testAssertInvalid29(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.10.wasm',
            text: 'type mismatch',
            line: 194,
        );
    }

    #[Depends('testAssertInvalid29')]
    public function testAssertInvalid30(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.11.wasm',
            text: 'type mismatch',
            line: 203,
        );
    }

    #[Depends('testAssertInvalid30')]
    public function testAssertInvalid31(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.12.wasm',
            text: 'type mismatch',
            line: 212,
        );
    }

    #[Depends('testAssertInvalid31')]
    public function testAssertInvalid32(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.13.wasm',
            text: 'type mismatch',
            line: 221,
        );
    }

    #[Depends('testAssertInvalid32')]
    public function testAssertInvalid33(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.14.wasm',
            text: 'type mismatch',
            line: 230,
        );
    }

    #[Depends('testAssertInvalid33')]
    public function testAssertInvalid34(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.15.wasm',
            text: 'type mismatch',
            line: 239,
        );
    }

    #[Depends('testAssertInvalid34')]
    public function testAssertInvalid35(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.16.wasm',
            text: 'type mismatch',
            line: 248,
        );
    }

    #[Depends('testAssertInvalid35')]
    public function testAssertInvalid36(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.17.wasm',
            text: 'type mismatch',
            line: 257,
        );
    }

    #[Depends('testAssertInvalid36')]
    public function testAssertInvalid37(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.18.wasm',
            text: 'type mismatch',
            line: 265,
        );
    }

    #[Depends('testAssertInvalid37')]
    public function testAssertInvalid38(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.19.wasm',
            text: 'type mismatch',
            line: 273,
        );
    }

    #[Depends('testAssertInvalid38')]
    public function testAssertInvalid39(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.20.wasm',
            text: 'type mismatch',
            line: 282,
        );
    }

    #[Depends('testAssertInvalid39')]
    public function testAssertInvalid40(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.21.wasm',
            text: 'type mismatch',
            line: 301,
        );
    }

    #[Depends('testAssertInvalid40')]
    public function testAssertInvalid41(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.22.wasm',
            text: 'type mismatch',
            line: 305,
        );
    }

    #[Depends('testAssertInvalid41')]
    public function testAssertInvalid42(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.23.wasm',
            text: 'type mismatch',
            line: 309,
        );
    }

    #[Depends('testAssertInvalid42')]
    public function testAssertInvalid43(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.24.wasm',
            text: 'type mismatch',
            line: 317,
        );
    }

    #[Depends('testAssertInvalid43')]
    public function testAssertInvalid44(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.25.wasm',
            text: 'type mismatch',
            line: 321,
        );
    }

    #[Depends('testAssertInvalid44')]
    public function testAssertInvalid45(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.26.wasm',
            text: 'type mismatch',
            line: 325,
        );
    }

    #[Depends('testAssertInvalid45')]
    public function testAssertInvalid46(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.27.wasm',
            text: 'type mismatch',
            line: 329,
        );
    }

    #[Depends('testAssertInvalid46')]
    public function testAssertInvalid47(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.28.wasm',
            text: 'unknown local',
            line: 337,
        );
    }

    #[Depends('testAssertInvalid47')]
    public function testAssertInvalid48(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.29.wasm',
            text: 'unknown local',
            line: 341,
        );
    }

    #[Depends('testAssertInvalid48')]
    public function testAssertInvalid49(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.30.wasm',
            text: 'unknown local',
            line: 346,
        );
    }

    #[Depends('testAssertInvalid49')]
    public function testAssertInvalid50(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.31.wasm',
            text: 'unknown local',
            line: 350,
        );
    }

    #[Depends('testAssertInvalid50')]
    public function testAssertInvalid51(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.32.wasm',
            text: 'unknown local',
            line: 355,
        );
    }

    #[Depends('testAssertInvalid51')]
    public function testAssertInvalid52(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.33.wasm',
            text: 'unknown local',
            line: 359,
        );
    }
}
