<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class RefIsNullTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'ref_is_null.0.wasm',
            name: null,
            line: 1,
        );
    }

    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'funcref', 'args' => [['type' => 'funcref', 'value' => 'null']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 30,
        );
    }

    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'externref', 'args' => [['type' => 'externref', 'value' => 'null']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 31,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'externref', 'args' => [['type' => 'externref', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 33,
        );
    }

    public function testAction4(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'init', 'args' => [['type' => 'externref', 'value' => '0']]],
            line: 35,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'funcref-elem', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 37,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'externref-elem', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 38,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'funcref-elem', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 40,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'externref-elem', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 41,
        );
    }

    public function testAction9(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'deinit', 'args' => []],
            line: 43,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'funcref-elem', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 45,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'externref-elem', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 46,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'funcref-elem', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 48,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'externref-elem', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 49,
        );
    }

    public function testAssertInvalid14(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'ref_is_null.1.wasm',
            text: 'type mismatch',
            line: 52,
        );
    }

    public function testAssertInvalid15(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'ref_is_null.2.wasm',
            text: 'type mismatch',
            line: 56,
        );
    }
}
