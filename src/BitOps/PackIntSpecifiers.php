<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\BitOps;

enum PackIntSpecifiers: string
{
    case Int8 = 'c';
    case Int16LittleEndian = 'v';
    case Int32LittleEndian = 'V';
    case Int64BigEndian = 'J';
    case Int64LittleEndian = 'P';
}
