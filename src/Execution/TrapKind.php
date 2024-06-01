<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution;

enum TrapKind
{
    case Unknown;
    case Unreachable;
    case OutOfBoundsMemoryAccess;
    case OutOfBoundsTableAccess;
    case UninitializedElement;
    case IndirectCallTypeMismatch;
    case UndefinedElement;
    case DivideByZero;
}
