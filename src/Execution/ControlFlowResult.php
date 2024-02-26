<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution;

use Nsfisis\Waddiwasi\Structure\Types\LabelIdx;

abstract readonly class ControlFlowResult
{
    final public static function Br(LabelIdx $label): ControlFlowResults\Br
    {
        return new ControlFlowResults\Br($label);
    }

    final public static function Return(): ControlFlowResults\Return_
    {
        return new ControlFlowResults\Return_();
    }
}
