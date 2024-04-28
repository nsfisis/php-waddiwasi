<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;

final class RefFuncTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'ref_func.0.wasm',
            name: null,
            line: 1,
        );
    }

    #[Depends('testModule0')]
    public function testRegister1(): void
    {
        $this->runRegisterCommand(
            name: null,
            as: 'M',
            line: 4,
        );
    }

    #[Depends('testRegister1')]
    public function testModule2(): void
    {
        $this->runModuleCommand(
            filename: 'ref_func.1.wasm',
            name: null,
            line: 6,
        );
    }

    #[Depends('testModule2')]
    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'is_null-f', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 56,
        );
    }

    #[Depends('testAssertReturn3')]
    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'is_null-g', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 57,
        );
    }

    #[Depends('testAssertReturn4')]
    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'is_null-v', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 58,
        );
    }

    #[Depends('testAssertReturn5')]
    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'call-f', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 60,
        );
    }

    #[Depends('testAssertReturn6')]
    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'call-g', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 61,
        );
    }

    #[Depends('testAssertReturn7')]
    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'call-v', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 62,
        );
    }

    #[Depends('testAssertReturn8')]
    public function testAction9(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'set-g', 'args' => []],
            line: 63,
        );
    }

    #[Depends('testAction9')]
    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'call-v', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 64,
        );
    }

    #[Depends('testAssertReturn10')]
    public function testAction11(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'set-f', 'args' => []],
            line: 65,
        );
    }

    #[Depends('testAction11')]
    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'call-v', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 66,
        );
    }

    #[Depends('testAssertReturn12')]
    public function testAssertInvalid13(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'ref_func.2.wasm',
            text: 'unknown function 7',
            line: 69,
        );
    }

    #[Depends('testAssertInvalid13')]
    public function testModule14(): void
    {
        $this->runModuleCommand(
            filename: 'ref_func.3.wasm',
            name: null,
            line: 80,
        );
    }

    #[Depends('testModule14')]
    public function testAssertInvalid15(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'ref_func.4.wasm',
            text: 'undeclared function reference',
            line: 109,
        );
    }

    #[Depends('testAssertInvalid15')]
    public function testAssertInvalid16(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'ref_func.5.wasm',
            text: 'undeclared function reference',
            line: 113,
        );
    }
}
