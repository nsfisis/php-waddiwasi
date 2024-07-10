<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs\Control;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instr;

final readonly class Return_ extends Instr
{
    public static function opName(): string
    {
        return "return";
    }
}
