<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class CustomTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'custom.0.wasm',
            name: null,
            line: 1,
        );
    }

    public function testModule1(): void
    {
        $this->runModuleCommand(
            filename: 'custom.1.wasm',
            name: null,
            line: 14,
        );
    }

    public function testModule2(): void
    {
        $this->runModuleCommand(
            filename: 'custom.2.wasm',
            name: null,
            line: 50,
        );
    }

    public function testAssertMalformed3(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'custom.3.wasm',
            text: 'unexpected end',
            line: 61,
        );
    }

    public function testAssertMalformed4(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'custom.4.wasm',
            text: 'unexpected end',
            line: 69,
        );
    }

    public function testAssertMalformed5(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'custom.5.wasm',
            text: 'unexpected end',
            line: 77,
        );
    }

    public function testAssertMalformed6(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'custom.6.wasm',
            text: 'length out of bounds',
            line: 85,
        );
    }

    public function testAssertMalformed7(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'custom.7.wasm',
            text: 'malformed section id',
            line: 93,
        );
    }

    public function testAssertMalformed8(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'custom.8.wasm',
            text: 'function and code section have inconsistent lengths',
            line: 102,
        );
    }

    public function testAssertMalformed9(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'custom.9.wasm',
            text: 'length out of bounds',
            line: 115,
        );
    }

    public function testAssertMalformed10(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'custom.10.wasm',
            text: 'data count and data section have inconsistent lengths',
            line: 123,
        );
    }
}
