<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution;

abstract class StackEntry
{
    final public static function Value(Val $inner): StackEntries\Value
    {
        return new StackEntries\Value($inner);
    }

    /**
     * @param int<0, max> $arity
     */
    final public static function Label(
        int $arity,
    ): StackEntries\Label {
        return new StackEntries\Label($arity);
    }

    /**
     * @param int<0, max> $arity
     * @param list<Val> $locals
     */
    final public static function Frame(
        int $arity,
        array $locals,
        ModuleInst $module,
        string $debugName,
    ): StackEntries\Frame {
        return new StackEntries\Frame($arity, $locals, $module, $debugName);
    }
}
