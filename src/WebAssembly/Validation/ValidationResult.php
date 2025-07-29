<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Validation;

final readonly class ValidationResult
{
    /**
     * @param list<string> $errors
     */
    public function __construct(
        public array $errors,
    ) {
    }
}
