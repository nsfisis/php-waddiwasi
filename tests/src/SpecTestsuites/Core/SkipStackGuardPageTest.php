<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class SkipStackGuardPageTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'skip-stack-guard-page.0.wasm',
            name: null,
            line: 2,
        );
    }

    public function testAssertExhaustion1(): void
    {
        $this->runAssertExhaustionCommand(
            action: ['type' => 'invoke', 'field' => 'test-guard-page-skip', 'args' => [['type' => 'i32', 'value' => '0']]],
            text: 'call stack exhausted',
            line: 2275,
        );
    }

    public function testAssertExhaustion2(): void
    {
        $this->runAssertExhaustionCommand(
            action: ['type' => 'invoke', 'field' => 'test-guard-page-skip', 'args' => [['type' => 'i32', 'value' => '100']]],
            text: 'call stack exhausted',
            line: 2276,
        );
    }

    public function testAssertExhaustion3(): void
    {
        $this->runAssertExhaustionCommand(
            action: ['type' => 'invoke', 'field' => 'test-guard-page-skip', 'args' => [['type' => 'i32', 'value' => '200']]],
            text: 'call stack exhausted',
            line: 2277,
        );
    }

    public function testAssertExhaustion4(): void
    {
        $this->runAssertExhaustionCommand(
            action: ['type' => 'invoke', 'field' => 'test-guard-page-skip', 'args' => [['type' => 'i32', 'value' => '300']]],
            text: 'call stack exhausted',
            line: 2278,
        );
    }

    public function testAssertExhaustion5(): void
    {
        $this->runAssertExhaustionCommand(
            action: ['type' => 'invoke', 'field' => 'test-guard-page-skip', 'args' => [['type' => 'i32', 'value' => '400']]],
            text: 'call stack exhausted',
            line: 2279,
        );
    }

    public function testAssertExhaustion6(): void
    {
        $this->runAssertExhaustionCommand(
            action: ['type' => 'invoke', 'field' => 'test-guard-page-skip', 'args' => [['type' => 'i32', 'value' => '500']]],
            text: 'call stack exhausted',
            line: 2280,
        );
    }

    public function testAssertExhaustion7(): void
    {
        $this->runAssertExhaustionCommand(
            action: ['type' => 'invoke', 'field' => 'test-guard-page-skip', 'args' => [['type' => 'i32', 'value' => '600']]],
            text: 'call stack exhausted',
            line: 2281,
        );
    }

    public function testAssertExhaustion8(): void
    {
        $this->runAssertExhaustionCommand(
            action: ['type' => 'invoke', 'field' => 'test-guard-page-skip', 'args' => [['type' => 'i32', 'value' => '700']]],
            text: 'call stack exhausted',
            line: 2282,
        );
    }

    public function testAssertExhaustion9(): void
    {
        $this->runAssertExhaustionCommand(
            action: ['type' => 'invoke', 'field' => 'test-guard-page-skip', 'args' => [['type' => 'i32', 'value' => '800']]],
            text: 'call stack exhausted',
            line: 2283,
        );
    }

    public function testAssertExhaustion10(): void
    {
        $this->runAssertExhaustionCommand(
            action: ['type' => 'invoke', 'field' => 'test-guard-page-skip', 'args' => [['type' => 'i32', 'value' => '900']]],
            text: 'call stack exhausted',
            line: 2284,
        );
    }
}
