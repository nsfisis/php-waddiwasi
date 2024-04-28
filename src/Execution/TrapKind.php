<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution;

enum TrapKind
{
    case Unknown;
    case OutOfBoundsMemoryAccess;
}
