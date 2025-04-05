<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\BitOps;

enum UnpackFloatSpecifiers: string
{
    case Float32LittleEndian = 'g';
    case Float64LittleEndian = 'e';

    public function byteCount(): int
    {
        return match ($this) {
            self::Float32LittleEndian => 4,
            self::Float64LittleEndian => 8,
        };
    }
}
