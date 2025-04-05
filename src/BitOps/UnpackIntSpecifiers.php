<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\BitOps;

enum UnpackIntSpecifiers: string
{
    case SignedInt8 = 'c';
    case SignedInt16MachineOrder = 's';
    case SignedInt32MachineOrder = 'l';
    case UnsignedInt32LittleEndian = 'V';
    case SignedInt64MachineOrder = 'q';

    public function byteCount(): int
    {
        return match ($this) {
            self::SignedInt8 => 1,
            self::SignedInt16MachineOrder => 2,
            self::SignedInt32MachineOrder, self::UnsignedInt32LittleEndian => 4,
            self::SignedInt64MachineOrder => 8,
        };
    }
}
