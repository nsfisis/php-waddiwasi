<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class ForwardTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'forward.0.wasm',
            name: null,
            line: 1,
        );
    }

    #[Depends('testModule0')]
    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'even', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 17,
        );
    }

    #[Depends('testAssertReturn1')]
    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'even', 'args' => [['type' => 'i32', 'value' => '20']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 18,
        );
    }

    #[Depends('testAssertReturn2')]
    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'odd', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 19,
        );
    }

    #[Depends('testAssertReturn3')]
    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'odd', 'args' => [['type' => 'i32', 'value' => '20']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 20,
        );
    }
}
