<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Execution;

use Nsfisis\Waddiwasi\Structure\Types\RefType;
use function assert;
use function count;
use function is_float;
use function is_int;
use function is_null;

final class Stack
{
    /**
     * @var list<Frame>
     */
    private array $frames = [];

    private ?Frame $currentFrame = null;

    /**
     * @param list<int|float|Ref|Frame|Label> $entries
     */
    public function __construct(
        private array $entries,
    ) {
    }

    public function pushFrame(Frame $frame): void
    {
        $this->push($frame);
        $this->frames[] = $frame;
        $this->currentFrame = $frame;
    }

    public function pushLabel(Label $label): void
    {
        $this->push($label);
    }

    public function pushValue(int|float|Ref $val): void
    {
        $this->push($val);
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

    public function popFrame(): Frame
    {
        $result = $this->pop();
        assert($result instanceof Frame);
        array_pop($this->frames);
        if (count($this->frames) === 0) {
            $this->currentFrame = null;
        } else {
            $this->currentFrame = end($this->frames);
        }
        return $result;
    }

    public function popValue(): int|float|Ref
    {
        $result = $this->pop();
        assert(
            is_int($result) || is_float($result) || $result instanceof Ref,
            'Expected a value on the stack, but got ' . print_r($result, true),
        );
        return $result;
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
        assert(is_int($v), "Expected an int on top of the stack, but got " . self::getValueTypeName($v));
        return $v;
    }

    /**
     * @return F32
     */
    public function popFloat(): float
    {
        $v = $this->popValue();
        assert(is_float($v), "Expected a float on top of the stack, but got " . self::getValueTypeName($v));
        return $v;
    }

    public function popRef(): Ref
    {
        $v = $this->popValue();
        assert($v instanceof Ref, "Expected a Ref on top of the stack, but got " . self::getValueTypeName($v));
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
            if ($top instanceof Label) {
                break;
            } else {
                assert(is_int($top) || is_float($top) || $top instanceof Ref);
                $results[] = $top;
            }
        }
        return $results;
    }

    public function popEntriesToCurrentFrame(): void
    {
        while (!$this->isEmpty()) {
            if ($this->pop() instanceof Frame) {
                break;
            }
        }
        array_pop($this->frames);
        if (count($this->frames) === 0) {
            $this->currentFrame = null;
        } else {
            $this->currentFrame = end($this->frames);
        }
    }

    public function top(): int|float|Ref|Frame|Label|null
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

    public function currentFrame(): Frame
    {
        assert($this->currentFrame !== null);
        return $this->currentFrame;
    }

    private function push(int|float|Ref|Frame|Label $entry): void
    {
        $this->entries[] = $entry;
    }

    private function pop(): int|float|Ref|Frame|Label|null
    {
        return array_pop($this->entries);
    }

    private static function getValueTypeName(int|float|Ref|Frame|Label|null $value): string
    {
        return match (true) {
            is_null($value) => 'null',
            is_int($value) => 'int',
            is_float($value) => 'float',
            $value instanceof Ref => 'Ref',
            $value instanceof Frame => 'Frame',
            $value instanceof Label => 'Label',
        };
    }
}
