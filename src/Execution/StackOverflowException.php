<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution;

use RuntimeException;
use Throwable;

final class StackOverflowException extends RuntimeException
{
    public function __construct(
        string $message = 'Stack overflow',
        int $code = 0,
        Throwable $previous = null,
    ) {
        parent::__construct($message, $code, $previous);
    }
}
