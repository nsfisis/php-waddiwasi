<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class UnreachedValidTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'unreached-valid.0.wasm',
            name: null,
            line: 1,
        );
    }

    #[Depends('testModule0')]
    public function testAssertTrap1(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'select-trap-left', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'unreachable',
            line: 42,
        );
    }

    #[Depends('testAssertTrap1')]
    public function testAssertTrap2(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'select-trap-left', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'unreachable',
            line: 43,
        );
    }

    #[Depends('testAssertTrap2')]
    public function testAssertTrap3(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'select-trap-right', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'unreachable',
            line: 44,
        );
    }

    #[Depends('testAssertTrap3')]
    public function testAssertTrap4(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'select-trap-right', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'unreachable',
            line: 45,
        );
    }

    #[Depends('testAssertTrap4')]
    public function testModule5(): void
    {
        $this->runModuleCommand(
            filename: 'unreached-valid.1.wasm',
            name: null,
            line: 49,
        );
    }

    #[Depends('testModule5')]
    public function testAssertTrap6(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'meet-bottom', 'args' => []],
            text: 'unreachable',
            line: 63,
        );
    }
}
