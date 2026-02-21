<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\WebAssembly\Validation;

use Nsfisis\Waddiwasi\WebAssembly\Structure\Instructions\Instrs;
use Nsfisis\Waddiwasi\WebAssembly\Structure\Types\ValType;
use function array_pop;
use function array_reverse;
use function array_slice;
use function assert;
use function count;

final class ValidationStack
{
    /**
     * @var list<?ValType>
     */
    private array $values = [];

    /**
     * @var list<ControlFrame>
     */
    private array $controls = [];

    public function __construct(
    ) {
    }

    public function pushVal(?ValType $type): void
    {
        $this->values[] = $type;
    }

    /**
     * @param list<?ValType> $types
     */
    public function pushVals(array $types): void
    {
        foreach ($types as $type) {
            $this->pushVal($type);
        }
    }

    public function popVal(): ?ValType
    {
        // Check stack underflow.
        $currentCtrl = $this->getCurrentControl();
        if (count($this->values) === $currentCtrl->height) {
            // If the current control frame is marked as unreachable, the stack behaves polymorphically.
            if ($currentCtrl->unreachable) {
                return null;
            }
            throw new ValidationFailureException('Value stack underflow');
        }

        return array_pop($this->values);
    }

    public function popValOf(?ValType $expect): ?ValType
    {
        $actual = $this->popVal();
        if ($actual !== $expect && $actual !== null && $expect !== null) {
            throw new ValidationFailureException('Type mismatch');
        }
        return $actual;
    }

    /**
     * @param list<ValType> $types
     * @return list<?ValType>
     */
    public function popVals(array $types): array
    {
        $popped = [];
        foreach (array_reverse($types) as $type) {
            $popped[] = $this->popValOf($type);
        }
        return array_reverse($popped);
    }

    /**
     * @param class-string $opcode
     * @param list<ValType> $in
     * @param list<ValType> $out
     */
    public function pushCtrl(string $opcode, array $in, array $out): void
    {
        $ctrl = new ControlFrame($opcode, $in, $out, count($this->values), false);
        $this->controls[] = $ctrl;
        $this->pushVals($in);
    }

    public function popCtrl(): ControlFrame
    {
        if ($this->controlDepth() === 0) {
            throw new ValidationFailureException('Control stack underflow');
        }
        $ctrl = $this->getCurrentControl();
        $this->popVals($ctrl->endTypes);
        if (count($this->values) !== $ctrl->height) {
            throw new ValidationFailureException('Invalid stack height');
        }
        array_pop($this->controls);
        return $ctrl;
    }

    /**
     * @return list<ValType>
     */
    public function labelTypes(ControlFrame $ctrl): array
    {
        return $ctrl->opcode === Instrs\Control\Loop::class ? $ctrl->startTypes : $ctrl->endTypes;
    }

    public function unreachable(): void
    {
        $currentCtrl = $this->getCurrentControl();
        $this->values = array_slice($this->values, 0, $currentCtrl->height);
        assert(count($this->controls) !== 0);
        array_pop($this->controls);
        $this->controls[] = new ControlFrame(
            $currentCtrl->opcode,
            $currentCtrl->startTypes,
            $currentCtrl->endTypes,
            $currentCtrl->height,
            true,
        );
    }

    public function controlDepth(): int
    {
        return count($this->controls);
    }

    public function getControl(int $index): ?ControlFrame
    {
        $absIndex = count($this->controls) - 1 - $index;
        if ($absIndex < 0) {
            return null;
        }
        return $this->controls[$absIndex] ?? null;
    }

    public function getCurrentControl(): ControlFrame
    {
        if ($this->controlDepth() === 0) {
            throw new ValidationFailureException('No control frame available');
        }
        assert(count($this->controls) !== 0);
        return $this->controls[array_key_last($this->controls)];
    }
}
