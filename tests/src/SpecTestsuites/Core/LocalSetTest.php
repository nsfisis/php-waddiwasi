<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

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

    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-local-i32', 'args' => []],
            expected: [],
            line: 107,
        );
    }

    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-local-i64', 'args' => []],
            expected: [],
            line: 108,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-local-f32', 'args' => []],
            expected: [],
            line: 109,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-local-f64', 'args' => []],
            expected: [],
            line: 110,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-param-i32', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [],
            line: 112,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-param-i64', 'args' => [['type' => 'i64', 'value' => '3']]],
            expected: [],
            line: 113,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-param-f32', 'args' => [['type' => 'f32', 'value' => '1082969293']]],
            expected: [],
            line: 114,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-param-f64', 'args' => [['type' => 'f64', 'value' => '4617878467915022336']]],
            expected: [],
            line: 115,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-block-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 117,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 118,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 120,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 121,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-value-cond', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 122,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 123,
        );
    }

    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-return-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 125,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-then', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [],
            line: 127,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-else', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 128,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-mixed', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'f32', 'value' => '1074580685'], ['type' => 'f64', 'value' => '4614613358185178726'], ['type' => 'i32', 'value' => '4'], ['type' => 'i32', 'value' => '5']]],
            expected: [],
            line: 131,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'write', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'f32', 'value' => '1073741824'], ['type' => 'f64', 'value' => '4614613358185178726'], ['type' => 'i32', 'value' => '4'], ['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i64', 'value' => '56']],
            line: 137,
        );
    }

    public function testAssertInvalid20(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.1.wasm',
            text: 'type mismatch',
            line: 148,
        );
    }

    public function testAssertInvalid21(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.2.wasm',
            text: 'type mismatch',
            line: 152,
        );
    }

    public function testAssertInvalid22(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.3.wasm',
            text: 'type mismatch',
            line: 156,
        );
    }

    public function testAssertInvalid23(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.4.wasm',
            text: 'type mismatch',
            line: 160,
        );
    }

    public function testAssertInvalid24(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.5.wasm',
            text: 'type mismatch',
            line: 169,
        );
    }

    public function testAssertInvalid25(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.6.wasm',
            text: 'type mismatch',
            line: 173,
        );
    }

    public function testAssertInvalid26(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.7.wasm',
            text: 'type mismatch',
            line: 177,
        );
    }

    public function testAssertInvalid27(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.8.wasm',
            text: 'type mismatch',
            line: 181,
        );
    }

    public function testAssertInvalid28(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.9.wasm',
            text: 'type mismatch',
            line: 186,
        );
    }

    public function testAssertInvalid29(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.10.wasm',
            text: 'type mismatch',
            line: 194,
        );
    }

    public function testAssertInvalid30(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.11.wasm',
            text: 'type mismatch',
            line: 203,
        );
    }

    public function testAssertInvalid31(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.12.wasm',
            text: 'type mismatch',
            line: 212,
        );
    }

    public function testAssertInvalid32(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.13.wasm',
            text: 'type mismatch',
            line: 221,
        );
    }

    public function testAssertInvalid33(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.14.wasm',
            text: 'type mismatch',
            line: 230,
        );
    }

    public function testAssertInvalid34(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.15.wasm',
            text: 'type mismatch',
            line: 239,
        );
    }

    public function testAssertInvalid35(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.16.wasm',
            text: 'type mismatch',
            line: 248,
        );
    }

    public function testAssertInvalid36(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.17.wasm',
            text: 'type mismatch',
            line: 257,
        );
    }

    public function testAssertInvalid37(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.18.wasm',
            text: 'type mismatch',
            line: 265,
        );
    }

    public function testAssertInvalid38(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.19.wasm',
            text: 'type mismatch',
            line: 273,
        );
    }

    public function testAssertInvalid39(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.20.wasm',
            text: 'type mismatch',
            line: 282,
        );
    }

    public function testAssertInvalid40(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.21.wasm',
            text: 'type mismatch',
            line: 301,
        );
    }

    public function testAssertInvalid41(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.22.wasm',
            text: 'type mismatch',
            line: 305,
        );
    }

    public function testAssertInvalid42(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.23.wasm',
            text: 'type mismatch',
            line: 309,
        );
    }

    public function testAssertInvalid43(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.24.wasm',
            text: 'type mismatch',
            line: 317,
        );
    }

    public function testAssertInvalid44(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.25.wasm',
            text: 'type mismatch',
            line: 321,
        );
    }

    public function testAssertInvalid45(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.26.wasm',
            text: 'type mismatch',
            line: 325,
        );
    }

    public function testAssertInvalid46(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.27.wasm',
            text: 'type mismatch',
            line: 329,
        );
    }

    public function testAssertInvalid47(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.28.wasm',
            text: 'unknown local',
            line: 337,
        );
    }

    public function testAssertInvalid48(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.29.wasm',
            text: 'unknown local',
            line: 341,
        );
    }

    public function testAssertInvalid49(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.30.wasm',
            text: 'unknown local',
            line: 346,
        );
    }

    public function testAssertInvalid50(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.31.wasm',
            text: 'unknown local',
            line: 350,
        );
    }

    public function testAssertInvalid51(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.32.wasm',
            text: 'unknown local',
            line: 355,
        );
    }

    public function testAssertInvalid52(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_set.33.wasm',
            text: 'unknown local',
            line: 359,
        );
    }
}
