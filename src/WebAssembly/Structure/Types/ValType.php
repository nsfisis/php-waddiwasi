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

    public function isNum(): bool
    {
        return match ($this) {
            ValType::I32 , ValType::I64 , ValType::F32 , ValType::F64 => true,
            default => false,
        };
    }

    public function isVec(): bool
    {
        return match ($this) {
            ValType::V128 => true,
            default => false,
        };
    }

    public function isRef(): bool
    {
        return match ($this) {
            ValType::FuncRef , ValType::ExternRef => true,
            default => false,
        };
    }
}
