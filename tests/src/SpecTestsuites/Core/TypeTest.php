<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class TypeTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'type.0.wasm',
            name: null,
            line: 3,
        );
    }

    #[DoesNotPerformAssertions]
    #[Depends('testModule0')]
    public function testAssertMalformed1(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed1')]
    public function testAssertMalformed2(): void
    {
    }
}
