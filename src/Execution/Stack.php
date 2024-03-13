<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution;

use Nsfisis\Waddiwasi\Structure\Types\RefType;

final class Stack
{
    /**
     * @var list<StackEntries\Frame>
     */
    private array $frames = [];

    /**
     * @param list<StackEntry> $entries
     */
    public function __construct(
        private array $entries,
    ) {
    }

    public function pushFrame(StackEntries\Frame $frame): void
    {
        $this->push($frame);
        $this->frames[] = $frame;
    }

    public function pushLabel(StackEntries\Label $label): void
    {
        $this->push($label);
    }

    public function pushValue(int|float|Ref $val): void
    {
        $this->push(StackEntry::Value($val));
    }

    public function pushBool(bool $value): void
    {
        $this->pushValue((int)$value);
    }

    public function pushRefNull(RefType $type): void
    {
        $this->pushValue(Ref::RefNull($type));
    }

    public function pushRefFunc(int $addr): void
    {
        $this->pushValue(Ref::RefFunc($addr));
    }

    public function pushRefExtern(int $addr): void
    {
        $this->pushValue(Ref::RefExtern($addr));
    }

    public function popFrame(): StackEntries\Frame
    {
        $result = $this->pop();
        assert($result instanceof StackEntries\Frame);
        array_pop($this->frames);
        return $result;
    }

    public function popValue(): int|float|Ref
    {
        $result = $this->pop();
        assert($result instanceof StackEntries\Value, 'Expected a value on the stack, but got ' . print_r($result, true));
        return $result->inner;
    }

    /**
     * @return list<int|float|Ref>
     */
    public function popNValues(int $n): array
    {
        $results = [];
        for ($i = 0; $i < $n; $i++) {
            $results[] = $this->popValue();
        }
        return $results;
    }

    public function popInt(): int
    {
        $v = $this->popValue();
        assert(is_int($v));
        return $v;
    }

    /**
     * @return F32
     */
    public function popFloat(): float
    {
        $v = $this->popValue();
        assert(is_float($v));
        return $v;
    }

    public function popRef(): Ref
    {
        $v = $this->popValue();
        assert($v instanceof Ref);
        return $v;
    }

    /**
     * @return list<int|float|Ref>
     */
    public function popValuesToLabel(): array
    {
        $results = [];
        while (!$this->isEmpty()) {
            $top = $this->pop();
            if ($top instanceof StackEntries\Value) {
                $results[] = $top->inner;
            } else {
                assert($top instanceof StackEntries\Label);
                break;
            }
        }
        return $results;
    }

    public function popEntriesToCurrentFrame(): void
    {
        while (!$this->isEmpty()) {
            if ($this->pop() instanceof StackEntries\Frame) {
                break;
            }
        }
        array_pop($this->frames);
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

    public function currentFrame(): StackEntries\Frame
    {
        assert(count($this->frames) !== 0);
        return $this->frames[count($this->frames) - 1];
    }

    private function push(StackEntry $entry): void
    {
        $this->entries[] = $entry;
    }

    private function pop(): ?StackEntry
    {
        return array_pop($this->entries);
    }
}
