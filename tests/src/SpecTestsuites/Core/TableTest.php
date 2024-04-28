<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class TableTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'table.0.wasm',
            name: null,
            line: 3,
        );
    }

    #[Depends('testModule0')]
    public function testModule1(): void
    {
        $this->runModuleCommand(
            filename: 'table.1.wasm',
            name: null,
            line: 4,
        );
    }

    #[Depends('testModule1')]
    public function testModule2(): void
    {
        $this->runModuleCommand(
            filename: 'table.2.wasm',
            name: null,
            line: 5,
        );
    }

    #[Depends('testModule2')]
    public function testModule3(): void
    {
        $this->runModuleCommand(
            filename: 'table.3.wasm',
            name: null,
            line: 6,
        );
    }

    #[Depends('testModule3')]
    public function testModule4(): void
    {
        $this->runModuleCommand(
            filename: 'table.4.wasm',
            name: null,
            line: 7,
        );
    }

    #[Depends('testModule4')]
    public function testModule5(): void
    {
        $this->runModuleCommand(
            filename: 'table.5.wasm',
            name: null,
            line: 8,
        );
    }

    #[Depends('testModule5')]
    public function testModule6(): void
    {
        $this->runModuleCommand(
            filename: 'table.6.wasm',
            name: null,
            line: 9,
        );
    }

    #[Depends('testModule6')]
    public function testModule7(): void
    {
        $this->runModuleCommand(
            filename: 'table.7.wasm',
            name: null,
            line: 11,
        );
    }

    #[Depends('testModule7')]
    public function testModule8(): void
    {
        $this->runModuleCommand(
            filename: 'table.8.wasm',
            name: null,
            line: 12,
        );
    }

    #[Depends('testModule8')]
    public function testAssertInvalid9(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table.9.wasm',
            text: 'unknown table',
            line: 14,
        );
    }

    #[Depends('testAssertInvalid9')]
    public function testAssertInvalid10(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table.10.wasm',
            text: 'unknown table',
            line: 15,
        );
    }

    #[Depends('testAssertInvalid10')]
    public function testAssertInvalid11(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table.11.wasm',
            text: 'size minimum must not be greater than maximum',
            line: 19,
        );
    }

    #[Depends('testAssertInvalid11')]
    public function testAssertInvalid12(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table.12.wasm',
            text: 'size minimum must not be greater than maximum',
            line: 23,
        );
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertInvalid12')]
    public function testAssertMalformed13(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed13')]
    public function testAssertMalformed14(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed14')]
    public function testAssertMalformed15(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed15')]
    public function testAssertMalformed16(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed16')]
    public function testAssertMalformed17(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed17')]
    public function testAssertMalformed18(): void
    {
    }
}
