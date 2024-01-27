<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution;

final class Stack
{
    /**
     * @param list<StackEntry> $entries
     */
    public function __construct(
        private array $entries,
    ) {
    }

    public function push(StackEntry $entry): void
    {
        $this->entries[] = $entry;
    }

    public function pop(): ?StackEntry
    {
        return array_pop($this->entries);
    }

    public function top(): ?StackEntry
    {
        $n = array_key_last($this->entries);
        return $n === null ? null : $this->entries[$n];
    }

    public function count(): int
    {
        return count($this->entries);
    }

    public function isEmpty(): bool
    {
        return $this->count() === 0;
    }
}
