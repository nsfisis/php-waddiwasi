<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Types;

enum RefType
{
    case FuncRef;
    case ExternRef;
}
