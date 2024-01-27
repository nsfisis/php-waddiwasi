<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution;

use Nsfisis\Waddiwasi\Structure\Instructions\Instr;

abstract readonly class StackEntry
{
    final public static function Value(Val $inner): StackEntries\Value
    {
        return new StackEntries\Value($inner);
    }

    /**
     * @param int<0, max> $arity
     * @param list<Instr> $target
     */
    final public static function Label(
        int $arity,
        array $target,
    ): StackEntries\Label {
        return new StackEntries\Label($arity, $target);
    }

    /**
     * @param int<0, max> $arity
     * @param list<Val> $locals
     */
    final public static function Frame(
        int $arity,
        array $locals,
        ModuleInst $module,
    ): StackEntries\Frame {
        return new StackEntries\Frame($arity, $locals, $module);
    }
}
