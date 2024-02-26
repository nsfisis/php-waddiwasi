<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution;

use Nsfisis\Waddiwasi\Structure\Types\RefType;

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

    public function pushValue(Val $val): void
    {
        $this->push(StackEntry::Value($val));
    }

    public function pushBool(bool $value): void
    {
        $this->pushValue(Val::NumI32((int)$value));
    }

    /**
     * @param S32 $value
     */
    public function pushI32(int $value): void
    {
        $this->pushValue(Val::NumI32($value));
    }

    /**
     * @param S64 $value
     */
    public function pushI64(int $value): void
    {
        $this->pushValue(Val::NumI64($value));
    }

    /**
     * @param F32 $value
     */
    public function pushF32(float $value): void
    {
        $this->pushValue(Val::NumF32($value));
    }

    /**
     * @param F64 $value
     */
    public function pushF64(float $value): void
    {
        $this->pushValue(Val::NumF64($value));
    }

    public function pushRefNull(RefType $type): void
    {
        $this->pushValue(Val::RefNull($type));
    }

    public function pushRefFunc(FuncAddr $addr): void
    {
        $this->pushValue(Val::RefFunc($addr));
    }

    public function pushRefExtern(ExternAddr $addr): void
    {
        $this->pushValue(Val::RefExtern($addr));
    }

    public function pop(): ?StackEntry
    {
        return array_pop($this->entries);
    }

    public function popValue(): Val
    {
        $result = $this->pop();
        assert($result instanceof StackEntries\Value);
        return $result->inner;
    }

    /**
     * @return list<Val>
     */
    public function popNValues(int $n): array
    {
        $results = [];
        for ($i = 0; $i < $n; $i++) {
            $results[] = $this->popValue();
        }
        return $results;
    }

    /**
     * @return S32
     */
    public function popI32(): int
    {
        $v = $this->popValue();
        assert($v instanceof Vals\Num);
        assert($v->inner instanceof Nums\I32);
        return $v->inner->value;
    }

    /**
     * @return S64
     */
    public function popI64(): int
    {
        $v = $this->popValue();
        assert($v instanceof Vals\Num);
        assert($v->inner instanceof Nums\I64);
        return $v->inner->value;
    }

    /**
     * @return F32
     */
    public function popF32(): float
    {
        $v = $this->popValue();
        assert($v instanceof Vals\Num);
        assert($v->inner instanceof Nums\F32_);
        return $v->inner->value;
    }

    /**
     * @return F64
     */
    public function popF64(): float
    {
        $v = $this->popValue();
        assert($v instanceof Vals\Num);
        assert($v->inner instanceof Nums\F64_);
        return $v->inner->value;
    }

    public function popRef(): Ref
    {
        $v = $this->popValue();
        assert($v instanceof Vals\Ref);
        return $v->inner;
    }

    /**
     * @return list<Val>
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
                return;
            }
        }
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
        for ($i = count($this->entries) - 1; 0 <= $i; $i--) {
            if ($this->entries[$i] instanceof StackEntries\Frame) {
                return $this->entries[$i];
            }
        }
        throw new \RuntimeException('No frame found');
    }
}
