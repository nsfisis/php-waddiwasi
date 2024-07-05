<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\BinaryFormat\Internal;

/**
 * @internal
 */
enum SectionId: int
{
    case Custom = 0;
    case Type = 1;
    case Import = 2;
    case Func = 3;
    case Table = 4;
    case Mem = 5;
    case Global = 6;
    case Export = 7;
    case Start = 8;
    case Elem = 9;
    case Code = 10;
    case Data = 11;
    case DataCount = 12;
}
