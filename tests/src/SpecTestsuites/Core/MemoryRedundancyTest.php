<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class MemoryRedundancyTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'memory_redundancy.0.wasm',
            name: null,
            line: 5,
        );
    }

    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test_store_to_load', 'args' => []],
            expected: [['type' => 'i32', 'value' => '128']],
            line: 59,
        );
    }

    public function testAction2(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'zero_everything', 'args' => []],
            line: 60,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test_redundant_load', 'args' => []],
            expected: [['type' => 'i32', 'value' => '128']],
            line: 61,
        );
    }

    public function testAction4(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'zero_everything', 'args' => []],
            line: 62,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'test_dead_store', 'args' => []],
            expected: [['type' => 'f32', 'value' => '35']],
            line: 63,
        );
    }

    public function testAction6(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'zero_everything', 'args' => []],
            line: 64,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'malloc_aliasing', 'args' => []],
            expected: [['type' => 'i32', 'value' => '43']],
            line: 65,
        );
    }
}
