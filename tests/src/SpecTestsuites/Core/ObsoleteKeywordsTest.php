<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class ObsoleteKeywordsTest extends SpecTestsuiteBase
{
    #[DoesNotPerformAssertions]
    public function testAssertMalformed0(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed0')]
    public function testAssertMalformed1(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed1')]
    public function testAssertMalformed2(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed2')]
    public function testAssertMalformed3(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed3')]
    public function testAssertMalformed4(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed4')]
    public function testAssertMalformed5(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed5')]
    public function testAssertMalformed6(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed6')]
    public function testAssertMalformed7(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed7')]
    public function testAssertMalformed8(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed8')]
    public function testAssertMalformed9(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed9')]
    public function testAssertMalformed10(): void
    {
    }
}
