<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class LabelsTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'labels.0.wasm',
            name: null,
            line: 1,
        );
    }

    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'block', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 291,
        );
    }

    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'loop1', 'args' => []],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 292,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'loop2', 'args' => []],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 293,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'loop3', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 294,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'loop4', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'i32', 'value' => '16']],
            line: 295,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'loop5', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 296,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'loop6', 'args' => []],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 297,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'if', 'args' => []],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 298,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'if2', 'args' => []],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 299,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'switch', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '50']],
            line: 300,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'switch', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '20']],
            line: 301,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'switch', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '20']],
            line: 302,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'switch', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 303,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'switch', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '50']],
            line: 304,
        );
    }

    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'switch', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '50']],
            line: 305,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'return', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 306,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'return', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 307,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'return', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 308,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'br_if0', 'args' => []],
            expected: [['type' => 'i32', 'value' => '29']],
            line: 309,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'br_if1', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 310,
        );
    }

    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'br_if2', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 311,
        );
    }

    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'br_if3', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 312,
        );
    }

    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'br', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 313,
        );
    }

    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shadowing', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 314,
        );
    }

    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'redefinition', 'args' => []],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 315,
        );
    }

    public function testAssertInvalid26(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'labels.1.wasm',
            text: 'type mismatch',
            line: 318,
        );
    }

    public function testAssertInvalid27(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'labels.2.wasm',
            text: 'type mismatch',
            line: 322,
        );
    }

    public function testAssertInvalid28(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'labels.3.wasm',
            text: 'type mismatch',
            line: 326,
        );
    }
}
