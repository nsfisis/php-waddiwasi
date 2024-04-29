<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
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

    #[Depends('testModule0')]
    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'funcref', 'args' => [['type' => 'funcref', 'value' => 'null']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 30,
        );
    }

    #[Depends('testAssertReturn1')]
    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'externref', 'args' => [['type' => 'externref', 'value' => 'null']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 31,
        );
    }

    #[Depends('testAssertReturn2')]
    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'externref', 'args' => [['type' => 'externref', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 33,
        );
    }

    #[Depends('testAssertReturn3')]
    public function testAction4(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'init', 'args' => [['type' => 'externref', 'value' => '0']]],
            line: 35,
        );
    }

    #[Depends('testAction4')]
    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'funcref-elem', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 37,
        );
    }

    #[Depends('testAssertReturn5')]
    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'externref-elem', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 38,
        );
    }

    #[Depends('testAssertReturn6')]
    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'funcref-elem', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 40,
        );
    }

    #[Depends('testAssertReturn7')]
    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'externref-elem', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 41,
        );
    }

    #[Depends('testAssertReturn8')]
    public function testAction9(): void
    {
        $this->runActionCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'deinit', 'args' => []],
            line: 43,
        );
    }

    #[Depends('testAction9')]
    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'funcref-elem', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 45,
        );
    }

    #[Depends('testAssertReturn10')]
    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'externref-elem', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 46,
        );
    }

    #[Depends('testAssertReturn11')]
    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'funcref-elem', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 48,
        );
    }

    #[Depends('testAssertReturn12')]
    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'externref-elem', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 49,
        );
    }

    #[Depends('testAssertReturn13')]
    public function testAssertInvalid14(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'ref_is_null.1.wasm',
            text: 'type mismatch',
            line: 52,
        );
    }

    #[Depends('testAssertInvalid14')]
    public function testAssertInvalid15(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'ref_is_null.2.wasm',
            text: 'type mismatch',
            line: 56,
        );
    }
}
