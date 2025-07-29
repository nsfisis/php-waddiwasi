<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class I64Test extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'i64.0.wasm',
            name: null,
            line: 3,
        );
    }

    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 38,
        );
    }

    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 39,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551614']],
            line: 40,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 41,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'i64', 'value' => '9223372036854775807'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 42,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775807']],
            line: 43,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 44,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'i64', 'value' => '1073741823'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '1073741824']],
            line: 45,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 47,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 48,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 49,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'i64', 'value' => '9223372036854775807'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 50,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775807']],
            line: 51,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 52,
        );
    }

    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'i64', 'value' => '1073741823'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '1073741824']],
            line: 53,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 55,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 56,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 57,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'i64', 'value' => '1152921504606846976'], ['type' => 'i64', 'value' => '4096']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 58,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 59,
        );
    }

    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 60,
        );
    }

    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'i64', 'value' => '9223372036854775807'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775809']],
            line: 61,
        );
    }

    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'i64', 'value' => '81985529216486895'], ['type' => 'i64', 'value' => '18364758544493064720']]],
            expected: [['type' => 'i64', 'value' => '2465395958572223728']],
            line: 62,
        );
    }

    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'i64', 'value' => '9223372036854775807'], ['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 63,
        );
    }

    public function testAssertTrap25(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 65,
        );
    }

    public function testAssertTrap26(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 66,
        );
    }

    public function testAssertTrap27(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            text: 'integer overflow',
            line: 67,
        );
    }

    public function testAssertTrap28(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 68,
        );
    }

    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 69,
        );
    }

    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 70,
        );
    }

    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 71,
        );
    }

    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 72,
        );
    }

    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '2']]],
            expected: [['type' => 'i64', 'value' => '13835058055282163712']],
            line: 73,
        );
    }

    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775809'], ['type' => 'i64', 'value' => '1000']]],
            expected: [['type' => 'i64', 'value' => '18437520701672696841']],
            line: 74,
        );
    }

    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i64', 'value' => '5'], ['type' => 'i64', 'value' => '2']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 75,
        );
    }

    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551611'], ['type' => 'i64', 'value' => '2']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551614']],
            line: 76,
        );
    }

    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i64', 'value' => '5'], ['type' => 'i64', 'value' => '18446744073709551614']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551614']],
            line: 77,
        );
    }

    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551611'], ['type' => 'i64', 'value' => '18446744073709551614']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 78,
        );
    }

    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i64', 'value' => '7'], ['type' => 'i64', 'value' => '3']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 79,
        );
    }

    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551609'], ['type' => 'i64', 'value' => '3']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551614']],
            line: 80,
        );
    }

    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i64', 'value' => '7'], ['type' => 'i64', 'value' => '18446744073709551613']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551614']],
            line: 81,
        );
    }

    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551609'], ['type' => 'i64', 'value' => '18446744073709551613']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 82,
        );
    }

    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i64', 'value' => '11'], ['type' => 'i64', 'value' => '5']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 83,
        );
    }

    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i64', 'value' => '17'], ['type' => 'i64', 'value' => '7']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 84,
        );
    }

    public function testAssertTrap45(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'div_u', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 86,
        );
    }

    public function testAssertTrap46(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'div_u', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 87,
        );
    }

    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_u', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 88,
        );
    }

    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_u', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 89,
        );
    }

    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 90,
        );
    }

    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 91,
        );
    }

    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '2']]],
            expected: [['type' => 'i64', 'value' => '4611686018427387904']],
            line: 92,
        );
    }

    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_u', 'args' => [['type' => 'i64', 'value' => '10371807465568210928'], ['type' => 'i64', 'value' => '4294967297']]],
            expected: [['type' => 'i64', 'value' => '2414874607']],
            line: 93,
        );
    }

    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775809'], ['type' => 'i64', 'value' => '1000']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775']],
            line: 94,
        );
    }

    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_u', 'args' => [['type' => 'i64', 'value' => '5'], ['type' => 'i64', 'value' => '2']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 95,
        );
    }

    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551611'], ['type' => 'i64', 'value' => '2']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775805']],
            line: 96,
        );
    }

    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_u', 'args' => [['type' => 'i64', 'value' => '5'], ['type' => 'i64', 'value' => '18446744073709551614']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 97,
        );
    }

    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551611'], ['type' => 'i64', 'value' => '18446744073709551614']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 98,
        );
    }

    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_u', 'args' => [['type' => 'i64', 'value' => '7'], ['type' => 'i64', 'value' => '3']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 99,
        );
    }

    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_u', 'args' => [['type' => 'i64', 'value' => '11'], ['type' => 'i64', 'value' => '5']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 100,
        );
    }

    public function testAssertReturn60(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_u', 'args' => [['type' => 'i64', 'value' => '17'], ['type' => 'i64', 'value' => '7']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 101,
        );
    }

    public function testAssertTrap61(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 103,
        );
    }

    public function testAssertTrap62(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 104,
        );
    }

    public function testAssertReturn63(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775807'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 105,
        );
    }

    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 106,
        );
    }

    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 107,
        );
    }

    public function testAssertReturn66(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 108,
        );
    }

    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 109,
        );
    }

    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 110,
        );
    }

    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '2']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 111,
        );
    }

    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775809'], ['type' => 'i64', 'value' => '1000']]],
            expected: [['type' => 'i64', 'value' => '18446744073709550809']],
            line: 112,
        );
    }

    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i64', 'value' => '5'], ['type' => 'i64', 'value' => '2']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 113,
        );
    }

    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551611'], ['type' => 'i64', 'value' => '2']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 114,
        );
    }

    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i64', 'value' => '5'], ['type' => 'i64', 'value' => '18446744073709551614']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 115,
        );
    }

    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551611'], ['type' => 'i64', 'value' => '18446744073709551614']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 116,
        );
    }

    public function testAssertReturn75(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i64', 'value' => '7'], ['type' => 'i64', 'value' => '3']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 117,
        );
    }

    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551609'], ['type' => 'i64', 'value' => '3']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 118,
        );
    }

    public function testAssertReturn77(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i64', 'value' => '7'], ['type' => 'i64', 'value' => '18446744073709551613']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 119,
        );
    }

    public function testAssertReturn78(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551609'], ['type' => 'i64', 'value' => '18446744073709551613']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 120,
        );
    }

    public function testAssertReturn79(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i64', 'value' => '11'], ['type' => 'i64', 'value' => '5']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 121,
        );
    }

    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i64', 'value' => '17'], ['type' => 'i64', 'value' => '7']]],
            expected: [['type' => 'i64', 'value' => '3']],
            line: 122,
        );
    }

    public function testAssertTrap81(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'rem_u', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 124,
        );
    }

    public function testAssertTrap82(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'rem_u', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 125,
        );
    }

    public function testAssertReturn83(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_u', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 126,
        );
    }

    public function testAssertReturn84(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_u', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 127,
        );
    }

    public function testAssertReturn85(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 128,
        );
    }

    public function testAssertReturn86(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 129,
        );
    }

    public function testAssertReturn87(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '2']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 130,
        );
    }

    public function testAssertReturn88(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_u', 'args' => [['type' => 'i64', 'value' => '10371807465568210928'], ['type' => 'i64', 'value' => '4294967297']]],
            expected: [['type' => 'i64', 'value' => '2147483649']],
            line: 131,
        );
    }

    public function testAssertReturn89(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775809'], ['type' => 'i64', 'value' => '1000']]],
            expected: [['type' => 'i64', 'value' => '809']],
            line: 132,
        );
    }

    public function testAssertReturn90(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_u', 'args' => [['type' => 'i64', 'value' => '5'], ['type' => 'i64', 'value' => '2']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 133,
        );
    }

    public function testAssertReturn91(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551611'], ['type' => 'i64', 'value' => '2']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 134,
        );
    }

    public function testAssertReturn92(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_u', 'args' => [['type' => 'i64', 'value' => '5'], ['type' => 'i64', 'value' => '18446744073709551614']]],
            expected: [['type' => 'i64', 'value' => '5']],
            line: 135,
        );
    }

    public function testAssertReturn93(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551611'], ['type' => 'i64', 'value' => '18446744073709551614']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551611']],
            line: 136,
        );
    }

    public function testAssertReturn94(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_u', 'args' => [['type' => 'i64', 'value' => '7'], ['type' => 'i64', 'value' => '3']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 137,
        );
    }

    public function testAssertReturn95(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_u', 'args' => [['type' => 'i64', 'value' => '11'], ['type' => 'i64', 'value' => '5']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 138,
        );
    }

    public function testAssertReturn96(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_u', 'args' => [['type' => 'i64', 'value' => '17'], ['type' => 'i64', 'value' => '7']]],
            expected: [['type' => 'i64', 'value' => '3']],
            line: 139,
        );
    }

    public function testAssertReturn97(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'and', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 141,
        );
    }

    public function testAssertReturn98(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'and', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 142,
        );
    }

    public function testAssertReturn99(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'and', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 143,
        );
    }

    public function testAssertReturn100(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'and', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 144,
        );
    }

    public function testAssertReturn101(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'and', 'args' => [['type' => 'i64', 'value' => '9223372036854775807'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 145,
        );
    }

    public function testAssertReturn102(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'and', 'args' => [['type' => 'i64', 'value' => '9223372036854775807'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775807']],
            line: 146,
        );
    }

    public function testAssertReturn103(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'and', 'args' => [['type' => 'i64', 'value' => '4042326015'], ['type' => 'i64', 'value' => '4294963440']]],
            expected: [['type' => 'i64', 'value' => '4042322160']],
            line: 147,
        );
    }

    public function testAssertReturn104(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'and', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 148,
        );
    }

    public function testAssertReturn105(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'or', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 150,
        );
    }

    public function testAssertReturn106(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'or', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 151,
        );
    }

    public function testAssertReturn107(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'or', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 152,
        );
    }

    public function testAssertReturn108(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'or', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 153,
        );
    }

    public function testAssertReturn109(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'or', 'args' => [['type' => 'i64', 'value' => '9223372036854775807'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 154,
        );
    }

    public function testAssertReturn110(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'or', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 155,
        );
    }

    public function testAssertReturn111(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'or', 'args' => [['type' => 'i64', 'value' => '4042326015'], ['type' => 'i64', 'value' => '4294963440']]],
            expected: [['type' => 'i64', 'value' => '4294967295']],
            line: 156,
        );
    }

    public function testAssertReturn112(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'or', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 157,
        );
    }

    public function testAssertReturn113(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'xor', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 159,
        );
    }

    public function testAssertReturn114(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'xor', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 160,
        );
    }

    public function testAssertReturn115(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'xor', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 161,
        );
    }

    public function testAssertReturn116(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'xor', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 162,
        );
    }

    public function testAssertReturn117(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'xor', 'args' => [['type' => 'i64', 'value' => '9223372036854775807'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 163,
        );
    }

    public function testAssertReturn118(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'xor', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 164,
        );
    }

    public function testAssertReturn119(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'xor', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775807']],
            line: 165,
        );
    }

    public function testAssertReturn120(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'xor', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 166,
        );
    }

    public function testAssertReturn121(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'xor', 'args' => [['type' => 'i64', 'value' => '4042326015'], ['type' => 'i64', 'value' => '4294963440']]],
            expected: [['type' => 'i64', 'value' => '252645135']],
            line: 167,
        );
    }

    public function testAssertReturn122(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'xor', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 168,
        );
    }

    public function testAssertReturn123(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shl', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 170,
        );
    }

    public function testAssertReturn124(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shl', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 171,
        );
    }

    public function testAssertReturn125(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shl', 'args' => [['type' => 'i64', 'value' => '9223372036854775807'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551614']],
            line: 172,
        );
    }

    public function testAssertReturn126(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shl', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551614']],
            line: 173,
        );
    }

    public function testAssertReturn127(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shl', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 174,
        );
    }

    public function testAssertReturn128(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shl', 'args' => [['type' => 'i64', 'value' => '4611686018427387904'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 175,
        );
    }

    public function testAssertReturn129(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shl', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '63']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 176,
        );
    }

    public function testAssertReturn130(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shl', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '64']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 177,
        );
    }

    public function testAssertReturn131(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shl', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '65']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 178,
        );
    }

    public function testAssertReturn132(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shl', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 179,
        );
    }

    public function testAssertReturn133(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shl', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 180,
        );
    }

    public function testAssertReturn134(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_s', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 182,
        );
    }

    public function testAssertReturn135(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_s', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 183,
        );
    }

    public function testAssertReturn136(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 184,
        );
    }

    public function testAssertReturn137(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775807'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '4611686018427387903']],
            line: 185,
        );
    }

    public function testAssertReturn138(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '13835058055282163712']],
            line: 186,
        );
    }

    public function testAssertReturn139(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_s', 'args' => [['type' => 'i64', 'value' => '4611686018427387904'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '2305843009213693952']],
            line: 187,
        );
    }

    public function testAssertReturn140(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_s', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '64']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 188,
        );
    }

    public function testAssertReturn141(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_s', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '65']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 189,
        );
    }

    public function testAssertReturn142(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_s', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 190,
        );
    }

    public function testAssertReturn143(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_s', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 191,
        );
    }

    public function testAssertReturn144(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_s', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 192,
        );
    }

    public function testAssertReturn145(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '63']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 193,
        );
    }

    public function testAssertReturn146(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '64']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 194,
        );
    }

    public function testAssertReturn147(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '65']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 195,
        );
    }

    public function testAssertReturn148(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 196,
        );
    }

    public function testAssertReturn149(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 197,
        );
    }

    public function testAssertReturn150(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 198,
        );
    }

    public function testAssertReturn151(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_u', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 200,
        );
    }

    public function testAssertReturn152(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_u', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 201,
        );
    }

    public function testAssertReturn153(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775807']],
            line: 202,
        );
    }

    public function testAssertReturn154(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775807'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '4611686018427387903']],
            line: 203,
        );
    }

    public function testAssertReturn155(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '4611686018427387904']],
            line: 204,
        );
    }

    public function testAssertReturn156(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_u', 'args' => [['type' => 'i64', 'value' => '4611686018427387904'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '2305843009213693952']],
            line: 205,
        );
    }

    public function testAssertReturn157(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_u', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '64']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 206,
        );
    }

    public function testAssertReturn158(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_u', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '65']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 207,
        );
    }

    public function testAssertReturn159(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_u', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 208,
        );
    }

    public function testAssertReturn160(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_u', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 209,
        );
    }

    public function testAssertReturn161(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_u', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 210,
        );
    }

    public function testAssertReturn162(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '63']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 211,
        );
    }

    public function testAssertReturn163(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '64']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 212,
        );
    }

    public function testAssertReturn164(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '65']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775807']],
            line: 213,
        );
    }

    public function testAssertReturn165(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 214,
        );
    }

    public function testAssertReturn166(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 215,
        );
    }

    public function testAssertReturn167(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 216,
        );
    }

    public function testAssertReturn168(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotl', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 218,
        );
    }

    public function testAssertReturn169(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotl', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 219,
        );
    }

    public function testAssertReturn170(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotl', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 220,
        );
    }

    public function testAssertReturn171(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotl', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '64']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 221,
        );
    }

    public function testAssertReturn172(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotl', 'args' => [['type' => 'i64', 'value' => '12379718583323101902'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '6312693092936652189']],
            line: 222,
        );
    }

    public function testAssertReturn173(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotl', 'args' => [['type' => 'i64', 'value' => '18302628889324683264'], ['type' => 'i64', 'value' => '4']]],
            expected: [['type' => 'i64', 'value' => '16140901123551657999']],
            line: 223,
        );
    }

    public function testAssertReturn174(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotl', 'args' => [['type' => 'i64', 'value' => '12379570969274382345'], ['type' => 'i64', 'value' => '53']]],
            expected: [['type' => 'i64', 'value' => '87109505680009935']],
            line: 224,
        );
    }

    public function testAssertReturn175(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotl', 'args' => [['type' => 'i64', 'value' => '12380715672649826460'], ['type' => 'i64', 'value' => '63']]],
            expected: [['type' => 'i64', 'value' => '6190357836324913230']],
            line: 225,
        );
    }

    public function testAssertReturn176(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotl', 'args' => [['type' => 'i64', 'value' => '12379570969274382345'], ['type' => 'i64', 'value' => '245']]],
            expected: [['type' => 'i64', 'value' => '87109505680009935']],
            line: 226,
        );
    }

    public function testAssertReturn177(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotl', 'args' => [['type' => 'i64', 'value' => '12379676934707509257'], ['type' => 'i64', 'value' => '18446744073709551597']]],
            expected: [['type' => 'i64', 'value' => '14916262237559758314']],
            line: 227,
        );
    }

    public function testAssertReturn178(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotl', 'args' => [['type' => 'i64', 'value' => '12380715672649826460'], ['type' => 'i64', 'value' => '9223372036854775871']]],
            expected: [['type' => 'i64', 'value' => '6190357836324913230']],
            line: 228,
        );
    }

    public function testAssertReturn179(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotl', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '63']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 229,
        );
    }

    public function testAssertReturn180(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotl', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 230,
        );
    }

    public function testAssertReturn181(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotr', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 232,
        );
    }

    public function testAssertReturn182(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotr', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 233,
        );
    }

    public function testAssertReturn183(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotr', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 234,
        );
    }

    public function testAssertReturn184(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotr', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '64']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 235,
        );
    }

    public function testAssertReturn185(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotr', 'args' => [['type' => 'i64', 'value' => '12379718583323101902'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '6189859291661550951']],
            line: 236,
        );
    }

    public function testAssertReturn186(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotr', 'args' => [['type' => 'i64', 'value' => '18302628889324683264'], ['type' => 'i64', 'value' => '4']]],
            expected: [['type' => 'i64', 'value' => '1143914305582792704']],
            line: 237,
        );
    }

    public function testAssertReturn187(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotr', 'args' => [['type' => 'i64', 'value' => '12379570969274382345'], ['type' => 'i64', 'value' => '53']]],
            expected: [['type' => 'i64', 'value' => '7534987797011123550']],
            line: 238,
        );
    }

    public function testAssertReturn188(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotr', 'args' => [['type' => 'i64', 'value' => '12380715672649826460'], ['type' => 'i64', 'value' => '63']]],
            expected: [['type' => 'i64', 'value' => '6314687271590101305']],
            line: 239,
        );
    }

    public function testAssertReturn189(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotr', 'args' => [['type' => 'i64', 'value' => '12379570969274382345'], ['type' => 'i64', 'value' => '245']]],
            expected: [['type' => 'i64', 'value' => '7534987797011123550']],
            line: 240,
        );
    }

    public function testAssertReturn190(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotr', 'args' => [['type' => 'i64', 'value' => '12379676934707509257'], ['type' => 'i64', 'value' => '18446744073709551597']]],
            expected: [['type' => 'i64', 'value' => '10711665151168044651']],
            line: 241,
        );
    }

    public function testAssertReturn191(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotr', 'args' => [['type' => 'i64', 'value' => '12380715672649826460'], ['type' => 'i64', 'value' => '9223372036854775871']]],
            expected: [['type' => 'i64', 'value' => '6314687271590101305']],
            line: 242,
        );
    }

    public function testAssertReturn192(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotr', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '63']]],
            expected: [['type' => 'i64', 'value' => '2']],
            line: 243,
        );
    }

    public function testAssertReturn193(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotr', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '63']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 244,
        );
    }

    public function testAssertReturn194(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'clz', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 246,
        );
    }

    public function testAssertReturn195(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'clz', 'args' => [['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '64']],
            line: 247,
        );
    }

    public function testAssertReturn196(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'clz', 'args' => [['type' => 'i64', 'value' => '32768']]],
            expected: [['type' => 'i64', 'value' => '48']],
            line: 248,
        );
    }

    public function testAssertReturn197(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'clz', 'args' => [['type' => 'i64', 'value' => '255']]],
            expected: [['type' => 'i64', 'value' => '56']],
            line: 249,
        );
    }

    public function testAssertReturn198(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'clz', 'args' => [['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 250,
        );
    }

    public function testAssertReturn199(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'clz', 'args' => [['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '63']],
            line: 251,
        );
    }

    public function testAssertReturn200(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'clz', 'args' => [['type' => 'i64', 'value' => '2']]],
            expected: [['type' => 'i64', 'value' => '62']],
            line: 252,
        );
    }

    public function testAssertReturn201(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'clz', 'args' => [['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 253,
        );
    }

    public function testAssertReturn202(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ctz', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 255,
        );
    }

    public function testAssertReturn203(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ctz', 'args' => [['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '64']],
            line: 256,
        );
    }

    public function testAssertReturn204(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ctz', 'args' => [['type' => 'i64', 'value' => '32768']]],
            expected: [['type' => 'i64', 'value' => '15']],
            line: 257,
        );
    }

    public function testAssertReturn205(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ctz', 'args' => [['type' => 'i64', 'value' => '65536']]],
            expected: [['type' => 'i64', 'value' => '16']],
            line: 258,
        );
    }

    public function testAssertReturn206(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ctz', 'args' => [['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i64', 'value' => '63']],
            line: 259,
        );
    }

    public function testAssertReturn207(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ctz', 'args' => [['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 260,
        );
    }

    public function testAssertReturn208(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'popcnt', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '64']],
            line: 262,
        );
    }

    public function testAssertReturn209(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'popcnt', 'args' => [['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 263,
        );
    }

    public function testAssertReturn210(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'popcnt', 'args' => [['type' => 'i64', 'value' => '32768']]],
            expected: [['type' => 'i64', 'value' => '1']],
            line: 264,
        );
    }

    public function testAssertReturn211(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'popcnt', 'args' => [['type' => 'i64', 'value' => '9223512776490647552']]],
            expected: [['type' => 'i64', 'value' => '4']],
            line: 265,
        );
    }

    public function testAssertReturn212(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'popcnt', 'args' => [['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'i64', 'value' => '63']],
            line: 266,
        );
    }

    public function testAssertReturn213(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'popcnt', 'args' => [['type' => 'i64', 'value' => '12297829381041378645']]],
            expected: [['type' => 'i64', 'value' => '32']],
            line: 267,
        );
    }

    public function testAssertReturn214(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'popcnt', 'args' => [['type' => 'i64', 'value' => '11068046444512062122']]],
            expected: [['type' => 'i64', 'value' => '32']],
            line: 268,
        );
    }

    public function testAssertReturn215(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'popcnt', 'args' => [['type' => 'i64', 'value' => '16045690984833335023']]],
            expected: [['type' => 'i64', 'value' => '48']],
            line: 269,
        );
    }

    public function testAssertReturn216(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend8_s', 'args' => [['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 271,
        );
    }

    public function testAssertReturn217(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend8_s', 'args' => [['type' => 'i64', 'value' => '127']]],
            expected: [['type' => 'i64', 'value' => '127']],
            line: 272,
        );
    }

    public function testAssertReturn218(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend8_s', 'args' => [['type' => 'i64', 'value' => '128']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551488']],
            line: 273,
        );
    }

    public function testAssertReturn219(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend8_s', 'args' => [['type' => 'i64', 'value' => '255']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 274,
        );
    }

    public function testAssertReturn220(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend8_s', 'args' => [['type' => 'i64', 'value' => '81985529216486656']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 275,
        );
    }

    public function testAssertReturn221(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend8_s', 'args' => [['type' => 'i64', 'value' => '18364758544493064832']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551488']],
            line: 276,
        );
    }

    public function testAssertReturn222(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend8_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 277,
        );
    }

    public function testAssertReturn223(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend16_s', 'args' => [['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 279,
        );
    }

    public function testAssertReturn224(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend16_s', 'args' => [['type' => 'i64', 'value' => '32767']]],
            expected: [['type' => 'i64', 'value' => '32767']],
            line: 280,
        );
    }

    public function testAssertReturn225(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend16_s', 'args' => [['type' => 'i64', 'value' => '32768']]],
            expected: [['type' => 'i64', 'value' => '18446744073709518848']],
            line: 281,
        );
    }

    public function testAssertReturn226(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend16_s', 'args' => [['type' => 'i64', 'value' => '65535']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 282,
        );
    }

    public function testAssertReturn227(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend16_s', 'args' => [['type' => 'i64', 'value' => '1311768467463733248']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 283,
        );
    }

    public function testAssertReturn228(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend16_s', 'args' => [['type' => 'i64', 'value' => '18364758544493084672']]],
            expected: [['type' => 'i64', 'value' => '18446744073709518848']],
            line: 284,
        );
    }

    public function testAssertReturn229(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend16_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 285,
        );
    }

    public function testAssertReturn230(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend32_s', 'args' => [['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 287,
        );
    }

    public function testAssertReturn231(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend32_s', 'args' => [['type' => 'i64', 'value' => '32767']]],
            expected: [['type' => 'i64', 'value' => '32767']],
            line: 288,
        );
    }

    public function testAssertReturn232(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend32_s', 'args' => [['type' => 'i64', 'value' => '32768']]],
            expected: [['type' => 'i64', 'value' => '32768']],
            line: 289,
        );
    }

    public function testAssertReturn233(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend32_s', 'args' => [['type' => 'i64', 'value' => '65535']]],
            expected: [['type' => 'i64', 'value' => '65535']],
            line: 290,
        );
    }

    public function testAssertReturn234(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend32_s', 'args' => [['type' => 'i64', 'value' => '2147483647']]],
            expected: [['type' => 'i64', 'value' => '2147483647']],
            line: 291,
        );
    }

    public function testAssertReturn235(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend32_s', 'args' => [['type' => 'i64', 'value' => '2147483648']]],
            expected: [['type' => 'i64', 'value' => '18446744071562067968']],
            line: 292,
        );
    }

    public function testAssertReturn236(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend32_s', 'args' => [['type' => 'i64', 'value' => '4294967295']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 293,
        );
    }

    public function testAssertReturn237(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend32_s', 'args' => [['type' => 'i64', 'value' => '81985526906748928']]],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 294,
        );
    }

    public function testAssertReturn238(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend32_s', 'args' => [['type' => 'i64', 'value' => '18364758544655319040']]],
            expected: [['type' => 'i64', 'value' => '18446744071562067968']],
            line: 295,
        );
    }

    public function testAssertReturn239(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend32_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 296,
        );
    }

    public function testAssertReturn240(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eqz', 'args' => [['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 298,
        );
    }

    public function testAssertReturn241(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eqz', 'args' => [['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 299,
        );
    }

    public function testAssertReturn242(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eqz', 'args' => [['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 300,
        );
    }

    public function testAssertReturn243(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eqz', 'args' => [['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 301,
        );
    }

    public function testAssertReturn244(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eqz', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 302,
        );
    }

    public function testAssertReturn245(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 304,
        );
    }

    public function testAssertReturn246(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 305,
        );
    }

    public function testAssertReturn247(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 306,
        );
    }

    public function testAssertReturn248(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 307,
        );
    }

    public function testAssertReturn249(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'i64', 'value' => '9223372036854775807'], ['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 308,
        );
    }

    public function testAssertReturn250(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 309,
        );
    }

    public function testAssertReturn251(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 310,
        );
    }

    public function testAssertReturn252(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 311,
        );
    }

    public function testAssertReturn253(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 312,
        );
    }

    public function testAssertReturn254(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 313,
        );
    }

    public function testAssertReturn255(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 314,
        );
    }

    public function testAssertReturn256(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 315,
        );
    }

    public function testAssertReturn257(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 316,
        );
    }

    public function testAssertReturn258(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'i64', 'value' => '9223372036854775807'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 317,
        );
    }

    public function testAssertReturn259(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 319,
        );
    }

    public function testAssertReturn260(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 320,
        );
    }

    public function testAssertReturn261(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 321,
        );
    }

    public function testAssertReturn262(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 322,
        );
    }

    public function testAssertReturn263(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'i64', 'value' => '9223372036854775807'], ['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 323,
        );
    }

    public function testAssertReturn264(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 324,
        );
    }

    public function testAssertReturn265(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 325,
        );
    }

    public function testAssertReturn266(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 326,
        );
    }

    public function testAssertReturn267(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 327,
        );
    }

    public function testAssertReturn268(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 328,
        );
    }

    public function testAssertReturn269(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 329,
        );
    }

    public function testAssertReturn270(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 330,
        );
    }

    public function testAssertReturn271(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 331,
        );
    }

    public function testAssertReturn272(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'i64', 'value' => '9223372036854775807'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 332,
        );
    }

    public function testAssertReturn273(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_s', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 334,
        );
    }

    public function testAssertReturn274(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_s', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 335,
        );
    }

    public function testAssertReturn275(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 336,
        );
    }

    public function testAssertReturn276(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 337,
        );
    }

    public function testAssertReturn277(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775807'], ['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 338,
        );
    }

    public function testAssertReturn278(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 339,
        );
    }

    public function testAssertReturn279(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_s', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 340,
        );
    }

    public function testAssertReturn280(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_s', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 341,
        );
    }

    public function testAssertReturn281(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 342,
        );
    }

    public function testAssertReturn282(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_s', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 343,
        );
    }

    public function testAssertReturn283(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 344,
        );
    }

    public function testAssertReturn284(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 345,
        );
    }

    public function testAssertReturn285(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 346,
        );
    }

    public function testAssertReturn286(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775807'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 347,
        );
    }

    public function testAssertReturn287(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_u', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 349,
        );
    }

    public function testAssertReturn288(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_u', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 350,
        );
    }

    public function testAssertReturn289(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 351,
        );
    }

    public function testAssertReturn290(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 352,
        );
    }

    public function testAssertReturn291(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775807'], ['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 353,
        );
    }

    public function testAssertReturn292(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 354,
        );
    }

    public function testAssertReturn293(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_u', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 355,
        );
    }

    public function testAssertReturn294(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_u', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 356,
        );
    }

    public function testAssertReturn295(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 357,
        );
    }

    public function testAssertReturn296(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_u', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 358,
        );
    }

    public function testAssertReturn297(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 359,
        );
    }

    public function testAssertReturn298(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 360,
        );
    }

    public function testAssertReturn299(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 361,
        );
    }

    public function testAssertReturn300(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775807'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 362,
        );
    }

    public function testAssertReturn301(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_s', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 364,
        );
    }

    public function testAssertReturn302(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_s', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 365,
        );
    }

    public function testAssertReturn303(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 366,
        );
    }

    public function testAssertReturn304(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 367,
        );
    }

    public function testAssertReturn305(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775807'], ['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 368,
        );
    }

    public function testAssertReturn306(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 369,
        );
    }

    public function testAssertReturn307(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_s', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 370,
        );
    }

    public function testAssertReturn308(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_s', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 371,
        );
    }

    public function testAssertReturn309(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 372,
        );
    }

    public function testAssertReturn310(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_s', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 373,
        );
    }

    public function testAssertReturn311(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 374,
        );
    }

    public function testAssertReturn312(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 375,
        );
    }

    public function testAssertReturn313(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 376,
        );
    }

    public function testAssertReturn314(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775807'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 377,
        );
    }

    public function testAssertReturn315(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_u', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 379,
        );
    }

    public function testAssertReturn316(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_u', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 380,
        );
    }

    public function testAssertReturn317(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 381,
        );
    }

    public function testAssertReturn318(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 382,
        );
    }

    public function testAssertReturn319(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775807'], ['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 383,
        );
    }

    public function testAssertReturn320(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 384,
        );
    }

    public function testAssertReturn321(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_u', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 385,
        );
    }

    public function testAssertReturn322(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_u', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 386,
        );
    }

    public function testAssertReturn323(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 387,
        );
    }

    public function testAssertReturn324(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_u', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 388,
        );
    }

    public function testAssertReturn325(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 389,
        );
    }

    public function testAssertReturn326(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 390,
        );
    }

    public function testAssertReturn327(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 391,
        );
    }

    public function testAssertReturn328(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775807'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 392,
        );
    }

    public function testAssertReturn329(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_s', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 394,
        );
    }

    public function testAssertReturn330(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_s', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 395,
        );
    }

    public function testAssertReturn331(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 396,
        );
    }

    public function testAssertReturn332(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 397,
        );
    }

    public function testAssertReturn333(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775807'], ['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 398,
        );
    }

    public function testAssertReturn334(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 399,
        );
    }

    public function testAssertReturn335(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_s', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 400,
        );
    }

    public function testAssertReturn336(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_s', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 401,
        );
    }

    public function testAssertReturn337(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 402,
        );
    }

    public function testAssertReturn338(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_s', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 403,
        );
    }

    public function testAssertReturn339(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 404,
        );
    }

    public function testAssertReturn340(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 405,
        );
    }

    public function testAssertReturn341(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 406,
        );
    }

    public function testAssertReturn342(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775807'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 407,
        );
    }

    public function testAssertReturn343(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_u', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 409,
        );
    }

    public function testAssertReturn344(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_u', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 410,
        );
    }

    public function testAssertReturn345(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 411,
        );
    }

    public function testAssertReturn346(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 412,
        );
    }

    public function testAssertReturn347(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775807'], ['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 413,
        );
    }

    public function testAssertReturn348(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 414,
        );
    }

    public function testAssertReturn349(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_u', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 415,
        );
    }

    public function testAssertReturn350(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_u', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 416,
        );
    }

    public function testAssertReturn351(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 417,
        );
    }

    public function testAssertReturn352(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_u', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 418,
        );
    }

    public function testAssertReturn353(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 419,
        );
    }

    public function testAssertReturn354(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 420,
        );
    }

    public function testAssertReturn355(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 421,
        );
    }

    public function testAssertReturn356(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775807'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 422,
        );
    }

    public function testAssertReturn357(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_s', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 424,
        );
    }

    public function testAssertReturn358(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_s', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 425,
        );
    }

    public function testAssertReturn359(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 426,
        );
    }

    public function testAssertReturn360(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 427,
        );
    }

    public function testAssertReturn361(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775807'], ['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 428,
        );
    }

    public function testAssertReturn362(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 429,
        );
    }

    public function testAssertReturn363(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_s', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 430,
        );
    }

    public function testAssertReturn364(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_s', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 431,
        );
    }

    public function testAssertReturn365(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 432,
        );
    }

    public function testAssertReturn366(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_s', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 433,
        );
    }

    public function testAssertReturn367(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 434,
        );
    }

    public function testAssertReturn368(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 435,
        );
    }

    public function testAssertReturn369(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 436,
        );
    }

    public function testAssertReturn370(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_s', 'args' => [['type' => 'i64', 'value' => '9223372036854775807'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 437,
        );
    }

    public function testAssertReturn371(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_u', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 439,
        );
    }

    public function testAssertReturn372(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_u', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 440,
        );
    }

    public function testAssertReturn373(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 441,
        );
    }

    public function testAssertReturn374(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 442,
        );
    }

    public function testAssertReturn375(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775807'], ['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 443,
        );
    }

    public function testAssertReturn376(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 444,
        );
    }

    public function testAssertReturn377(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_u', 'args' => [['type' => 'i64', 'value' => '1'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 445,
        );
    }

    public function testAssertReturn378(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_u', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 446,
        );
    }

    public function testAssertReturn379(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 447,
        );
    }

    public function testAssertReturn380(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_u', 'args' => [['type' => 'i64', 'value' => '0'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 448,
        );
    }

    public function testAssertReturn381(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 449,
        );
    }

    public function testAssertReturn382(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551615'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 450,
        );
    }

    public function testAssertReturn383(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775808'], ['type' => 'i64', 'value' => '9223372036854775807']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 451,
        );
    }

    public function testAssertReturn384(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_u', 'args' => [['type' => 'i64', 'value' => '9223372036854775807'], ['type' => 'i64', 'value' => '9223372036854775808']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 452,
        );
    }

    public function testAssertInvalid385(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i64.1.wasm',
            text: 'type mismatch',
            line: 457,
        );
    }

    public function testAssertInvalid386(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i64.2.wasm',
            text: 'type mismatch',
            line: 458,
        );
    }

    public function testAssertInvalid387(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i64.3.wasm',
            text: 'type mismatch',
            line: 459,
        );
    }

    public function testAssertInvalid388(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i64.4.wasm',
            text: 'type mismatch',
            line: 460,
        );
    }

    public function testAssertInvalid389(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i64.5.wasm',
            text: 'type mismatch',
            line: 461,
        );
    }

    public function testAssertInvalid390(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i64.6.wasm',
            text: 'type mismatch',
            line: 462,
        );
    }

    public function testAssertInvalid391(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i64.7.wasm',
            text: 'type mismatch',
            line: 463,
        );
    }

    public function testAssertInvalid392(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i64.8.wasm',
            text: 'type mismatch',
            line: 464,
        );
    }

    public function testAssertInvalid393(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i64.9.wasm',
            text: 'type mismatch',
            line: 465,
        );
    }

    public function testAssertInvalid394(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i64.10.wasm',
            text: 'type mismatch',
            line: 466,
        );
    }

    public function testAssertInvalid395(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i64.11.wasm',
            text: 'type mismatch',
            line: 467,
        );
    }

    public function testAssertInvalid396(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i64.12.wasm',
            text: 'type mismatch',
            line: 468,
        );
    }

    public function testAssertInvalid397(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i64.13.wasm',
            text: 'type mismatch',
            line: 469,
        );
    }

    public function testAssertInvalid398(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i64.14.wasm',
            text: 'type mismatch',
            line: 470,
        );
    }

    public function testAssertInvalid399(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i64.15.wasm',
            text: 'type mismatch',
            line: 471,
        );
    }

    public function testAssertInvalid400(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i64.16.wasm',
            text: 'type mismatch',
            line: 472,
        );
    }

    public function testAssertInvalid401(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i64.17.wasm',
            text: 'type mismatch',
            line: 473,
        );
    }

    public function testAssertInvalid402(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i64.18.wasm',
            text: 'type mismatch',
            line: 474,
        );
    }

    public function testAssertInvalid403(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i64.19.wasm',
            text: 'type mismatch',
            line: 475,
        );
    }

    public function testAssertInvalid404(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i64.20.wasm',
            text: 'type mismatch',
            line: 476,
        );
    }

    public function testAssertInvalid405(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i64.21.wasm',
            text: 'type mismatch',
            line: 477,
        );
    }

    public function testAssertInvalid406(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i64.22.wasm',
            text: 'type mismatch',
            line: 478,
        );
    }

    public function testAssertInvalid407(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i64.23.wasm',
            text: 'type mismatch',
            line: 479,
        );
    }

    public function testAssertInvalid408(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i64.24.wasm',
            text: 'type mismatch',
            line: 480,
        );
    }

    public function testAssertInvalid409(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i64.25.wasm',
            text: 'type mismatch',
            line: 481,
        );
    }

    public function testAssertInvalid410(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i64.26.wasm',
            text: 'type mismatch',
            line: 482,
        );
    }

    public function testAssertInvalid411(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i64.27.wasm',
            text: 'type mismatch',
            line: 483,
        );
    }

    public function testAssertInvalid412(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i64.28.wasm',
            text: 'type mismatch',
            line: 484,
        );
    }

    public function testAssertInvalid413(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i64.29.wasm',
            text: 'type mismatch',
            line: 485,
        );
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed414(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed415(): void
    {
    }
}
