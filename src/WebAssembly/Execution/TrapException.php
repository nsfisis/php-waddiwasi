<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Execution;

use RuntimeException;
use Throwable;

class TrapException extends RuntimeException
{
    private readonly TrapKind $trapKind;

    public function __construct(
        string $message = '',
        int $code = 0,
        ?Throwable $previous = null,
        TrapKind $trapKind = TrapKind::Unknown,
    ) {
        parent::__construct($message, $code, $previous);
        $this->trapKind = $trapKind;
    }

    public function getTrapKind(): TrapKind
    {
        return $this->trapKind;
    }
}
