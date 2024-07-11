<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class StackTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'stack.0.wasm',
            name: null,
            line: 1,
        );
    }

    #[Depends('testModule0')]
    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fac-expr', 'args' => [['type' => 'i64', 'value' => '25']]],
            expected: [['type' => 'i64', 'value' => '7034535277573963776']],
            line: 146,
        );
    }

    #[Depends('testAssertReturn1')]
    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fac-stack', 'args' => [['type' => 'i64', 'value' => '25']]],
            expected: [['type' => 'i64', 'value' => '7034535277573963776']],
            line: 147,
        );
    }

    #[Depends('testAssertReturn2')]
    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fac-mixed', 'args' => [['type' => 'i64', 'value' => '25']]],
            expected: [['type' => 'i64', 'value' => '7034535277573963776']],
            line: 148,
        );
    }

    #[Depends('testAssertReturn3')]
    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'not-quite-a-tree', 'args' => []],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 150,
        );
    }

    #[Depends('testAssertReturn4')]
    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'not-quite-a-tree', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 151,
        );
    }

    #[Depends('testAssertReturn5')]
    public function testModule6(): void
    {
        $this->runModuleCommand(
            filename: 'stack.1.wasm',
            name: null,
            line: 156,
        );
    }
}
