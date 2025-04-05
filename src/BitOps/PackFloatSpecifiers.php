<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\BitOps;

enum PackFloatSpecifiers: string
{
    case Float32LittleEndian = 'g';
    case Float64LittleEndian = 'e';
}
