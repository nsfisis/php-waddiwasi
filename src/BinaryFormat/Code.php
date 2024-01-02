<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\BinaryFormat;

use Nsfisis\Waddiwasi\Structure\Instructions\Expr;

final readonly class Code
{
    /**
     * @param list<Locals> $compressedLocals
     */
    public function __construct(
        public array $compressedLocals,
        public Expr $body,
    ) {
    }
}
