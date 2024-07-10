<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Types;

enum ValType
{
    case I32;
    case I64;
    case F32;
    case F64;
    case V128;
    case FuncRef;
    case ExternRef;
}
