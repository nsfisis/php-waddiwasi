<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class LocalGetTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'local_get.0.wasm',
            name: null,
            line: 3,
        );
    }

    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-local-i32', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 109,
        );
    }

    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-local-i64', 'args' => []],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 110,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-local-f32', 'args' => []],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 111,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-local-f64', 'args' => []],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 112,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-param-i32', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 114,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-param-i64', 'args' => [['type' => 'i64', 'value' => '3']]],
            expected: [['type' => 'i64', 'value' => '3']],
            line: 115,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-param-f32', 'args' => [['type' => 'f32', 'value' => '1082969293']]],
            expected: [['type' => 'f32', 'value' => '1082969293']],
            line: 116,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-param-f64', 'args' => [['type' => 'f64', 'value' => '4617878467915022336']]],
            expected: [['type' => 'f64', 'value' => '4617878467915022336']],
            line: 117,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-block-value', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 119,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-value', 'args' => [['type' => 'i32', 'value' => '7']]],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 120,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br-value', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 122,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-value', 'args' => [['type' => 'i32', 'value' => '9']]],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 123,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-value-cond', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 124,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-value', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 125,
        );
    }

    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-return-value', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 127,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-then', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 129,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-else', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 130,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'type-mixed', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'f32', 'value' => '1074580685'], ['type' => 'f64', 'value' => '4614613358185178726'], ['type' => 'i32', 'value' => '4'], ['type' => 'i32', 'value' => '5']]],
            expected: [],
            line: 133,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'read', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'f32', 'value' => '1073741824'], ['type' => 'f64', 'value' => '4614613358185178726'], ['type' => 'i32', 'value' => '4'], ['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'f64', 'value' => '4630094481904264806']],
            line: 139,
        );
    }

    public function testAssertInvalid20(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_get.1.wasm',
            text: 'type mismatch',
            line: 149,
        );
    }

    public function testAssertInvalid21(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_get.2.wasm',
            text: 'type mismatch',
            line: 153,
        );
    }

    public function testAssertInvalid22(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_get.3.wasm',
            text: 'type mismatch',
            line: 157,
        );
    }

    public function testAssertInvalid23(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_get.4.wasm',
            text: 'type mismatch',
            line: 165,
        );
    }

    public function testAssertInvalid24(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_get.5.wasm',
            text: 'type mismatch',
            line: 169,
        );
    }

    public function testAssertInvalid25(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_get.6.wasm',
            text: 'type mismatch',
            line: 173,
        );
    }

    public function testAssertInvalid26(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_get.7.wasm',
            text: 'type mismatch',
            line: 181,
        );
    }

    public function testAssertInvalid27(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_get.8.wasm',
            text: 'type mismatch',
            line: 185,
        );
    }

    public function testAssertInvalid28(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_get.9.wasm',
            text: 'type mismatch',
            line: 189,
        );
    }

    public function testAssertInvalid29(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_get.10.wasm',
            text: 'type mismatch',
            line: 193,
        );
    }

    public function testAssertInvalid30(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_get.11.wasm',
            text: 'unknown local',
            line: 201,
        );
    }

    public function testAssertInvalid31(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_get.12.wasm',
            text: 'unknown local',
            line: 205,
        );
    }

    public function testAssertInvalid32(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_get.13.wasm',
            text: 'unknown local',
            line: 210,
        );
    }

    public function testAssertInvalid33(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_get.14.wasm',
            text: 'unknown local',
            line: 214,
        );
    }

    public function testAssertInvalid34(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_get.15.wasm',
            text: 'unknown local',
            line: 219,
        );
    }

    public function testAssertInvalid35(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'local_get.16.wasm',
            text: 'unknown local',
            line: 223,
        );
    }
}
