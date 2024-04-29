<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class TableSubTest extends SpecTestsuiteBase
{
    public function testAssertInvalid0(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table-sub.0.wasm',
            text: 'type mismatch',
            line: 2,
        );
    }

    #[Depends('testAssertInvalid0')]
    public function testAssertInvalid1(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'table-sub.1.wasm',
            text: 'type mismatch',
            line: 13,
        );
    }
}
