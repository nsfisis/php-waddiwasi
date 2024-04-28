<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;

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

    #[Depends('testModule0')]
    public function testModule1(): void
    {
        $this->runModuleCommand(
            filename: 'custom.1.wasm',
            name: null,
            line: 14,
        );
    }

    #[Depends('testModule1')]
    public function testModule2(): void
    {
        $this->runModuleCommand(
            filename: 'custom.2.wasm',
            name: null,
            line: 50,
        );
    }

    #[Depends('testModule2')]
    public function testAssertMalformed3(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'custom.3.wasm',
            text: 'unexpected end',
            line: 61,
        );
    }

    #[Depends('testAssertMalformed3')]
    public function testAssertMalformed4(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'custom.4.wasm',
            text: 'unexpected end',
            line: 69,
        );
    }

    #[Depends('testAssertMalformed4')]
    public function testAssertMalformed5(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'custom.5.wasm',
            text: 'unexpected end',
            line: 77,
        );
    }

    #[Depends('testAssertMalformed5')]
    public function testAssertMalformed6(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'custom.6.wasm',
            text: 'length out of bounds',
            line: 85,
        );
    }

    #[Depends('testAssertMalformed6')]
    public function testAssertMalformed7(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'custom.7.wasm',
            text: 'malformed section id',
            line: 93,
        );
    }

    #[Depends('testAssertMalformed7')]
    public function testAssertMalformed8(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'custom.8.wasm',
            text: 'function and code section have inconsistent lengths',
            line: 102,
        );
    }

    #[Depends('testAssertMalformed8')]
    public function testAssertMalformed9(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'custom.9.wasm',
            text: 'length out of bounds',
            line: 115,
        );
    }

    #[Depends('testAssertMalformed9')]
    public function testAssertMalformed10(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'custom.10.wasm',
            text: 'data count and data section have inconsistent lengths',
            line: 123,
        );
    }
}
