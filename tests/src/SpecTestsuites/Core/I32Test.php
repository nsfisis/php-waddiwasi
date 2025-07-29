<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class I32Test extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'i32.0.wasm',
            name: null,
            line: 3,
        );
    }

    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 37,
        );
    }

    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 38,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '4294967294']],
            line: 39,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 40,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'i32', 'value' => '2147483647'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 41,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '2147483647']],
            line: 42,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 43,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'add', 'args' => [['type' => 'i32', 'value' => '1073741823'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1073741824']],
            line: 44,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 46,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 47,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 48,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'i32', 'value' => '2147483647'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 49,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2147483647']],
            line: 50,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 51,
        );
    }

    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'sub', 'args' => [['type' => 'i32', 'value' => '1073741823'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '1073741824']],
            line: 52,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 54,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 55,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 56,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'i32', 'value' => '268435456'], ['type' => 'i32', 'value' => '4096']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 57,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 58,
        );
    }

    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 59,
        );
    }

    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'i32', 'value' => '2147483647'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '2147483649']],
            line: 60,
        );
    }

    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'i32', 'value' => '19088743'], ['type' => 'i32', 'value' => '1985229328']]],
            expected: [['type' => 'i32', 'value' => '898528368']],
            line: 61,
        );
    }

    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'mul', 'args' => [['type' => 'i32', 'value' => '2147483647'], ['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 62,
        );
    }

    public function testAssertTrap25(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 64,
        );
    }

    public function testAssertTrap26(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 65,
        );
    }

    public function testAssertTrap27(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '4294967295']]],
            text: 'integer overflow',
            line: 66,
        );
    }

    public function testAssertTrap28(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 67,
        );
    }

    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 68,
        );
    }

    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 69,
        );
    }

    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 70,
        );
    }

    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 71,
        );
    }

    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '3221225472']],
            line: 72,
        );
    }

    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i32', 'value' => '2147483649'], ['type' => 'i32', 'value' => '1000']]],
            expected: [['type' => 'i32', 'value' => '4292819813']],
            line: 73,
        );
    }

    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i32', 'value' => '5'], ['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 74,
        );
    }

    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i32', 'value' => '4294967291'], ['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '4294967294']],
            line: 75,
        );
    }

    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i32', 'value' => '5'], ['type' => 'i32', 'value' => '4294967294']]],
            expected: [['type' => 'i32', 'value' => '4294967294']],
            line: 76,
        );
    }

    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i32', 'value' => '4294967291'], ['type' => 'i32', 'value' => '4294967294']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 77,
        );
    }

    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i32', 'value' => '7'], ['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 78,
        );
    }

    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i32', 'value' => '4294967289'], ['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '4294967294']],
            line: 79,
        );
    }

    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i32', 'value' => '7'], ['type' => 'i32', 'value' => '4294967293']]],
            expected: [['type' => 'i32', 'value' => '4294967294']],
            line: 80,
        );
    }

    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i32', 'value' => '4294967289'], ['type' => 'i32', 'value' => '4294967293']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 81,
        );
    }

    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i32', 'value' => '11'], ['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 82,
        );
    }

    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_s', 'args' => [['type' => 'i32', 'value' => '17'], ['type' => 'i32', 'value' => '7']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 83,
        );
    }

    public function testAssertTrap45(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'div_u', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 85,
        );
    }

    public function testAssertTrap46(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'div_u', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 86,
        );
    }

    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_u', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 87,
        );
    }

    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_u', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 88,
        );
    }

    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_u', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 89,
        );
    }

    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_u', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 90,
        );
    }

    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_u', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '1073741824']],
            line: 91,
        );
    }

    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_u', 'args' => [['type' => 'i32', 'value' => '2414874608'], ['type' => 'i32', 'value' => '65537']]],
            expected: [['type' => 'i32', 'value' => '36847']],
            line: 92,
        );
    }

    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_u', 'args' => [['type' => 'i32', 'value' => '2147483649'], ['type' => 'i32', 'value' => '1000']]],
            expected: [['type' => 'i32', 'value' => '2147483']],
            line: 93,
        );
    }

    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_u', 'args' => [['type' => 'i32', 'value' => '5'], ['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 94,
        );
    }

    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_u', 'args' => [['type' => 'i32', 'value' => '4294967291'], ['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '2147483645']],
            line: 95,
        );
    }

    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_u', 'args' => [['type' => 'i32', 'value' => '5'], ['type' => 'i32', 'value' => '4294967294']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 96,
        );
    }

    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_u', 'args' => [['type' => 'i32', 'value' => '4294967291'], ['type' => 'i32', 'value' => '4294967294']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 97,
        );
    }

    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_u', 'args' => [['type' => 'i32', 'value' => '7'], ['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 98,
        );
    }

    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_u', 'args' => [['type' => 'i32', 'value' => '11'], ['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 99,
        );
    }

    public function testAssertReturn60(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'div_u', 'args' => [['type' => 'i32', 'value' => '17'], ['type' => 'i32', 'value' => '7']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 100,
        );
    }

    public function testAssertTrap61(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 102,
        );
    }

    public function testAssertTrap62(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 103,
        );
    }

    public function testAssertReturn63(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i32', 'value' => '2147483647'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 104,
        );
    }

    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 105,
        );
    }

    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 106,
        );
    }

    public function testAssertReturn66(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 107,
        );
    }

    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 108,
        );
    }

    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 109,
        );
    }

    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 110,
        );
    }

    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i32', 'value' => '2147483649'], ['type' => 'i32', 'value' => '1000']]],
            expected: [['type' => 'i32', 'value' => '4294966649']],
            line: 111,
        );
    }

    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i32', 'value' => '5'], ['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 112,
        );
    }

    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i32', 'value' => '4294967291'], ['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 113,
        );
    }

    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i32', 'value' => '5'], ['type' => 'i32', 'value' => '4294967294']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 114,
        );
    }

    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i32', 'value' => '4294967291'], ['type' => 'i32', 'value' => '4294967294']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 115,
        );
    }

    public function testAssertReturn75(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i32', 'value' => '7'], ['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 116,
        );
    }

    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i32', 'value' => '4294967289'], ['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 117,
        );
    }

    public function testAssertReturn77(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i32', 'value' => '7'], ['type' => 'i32', 'value' => '4294967293']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 118,
        );
    }

    public function testAssertReturn78(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i32', 'value' => '4294967289'], ['type' => 'i32', 'value' => '4294967293']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 119,
        );
    }

    public function testAssertReturn79(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i32', 'value' => '11'], ['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 120,
        );
    }

    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_s', 'args' => [['type' => 'i32', 'value' => '17'], ['type' => 'i32', 'value' => '7']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 121,
        );
    }

    public function testAssertTrap81(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'rem_u', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 123,
        );
    }

    public function testAssertTrap82(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'rem_u', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            text: 'integer divide by zero',
            line: 124,
        );
    }

    public function testAssertReturn83(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_u', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 125,
        );
    }

    public function testAssertReturn84(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_u', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 126,
        );
    }

    public function testAssertReturn85(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_u', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 127,
        );
    }

    public function testAssertReturn86(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_u', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 128,
        );
    }

    public function testAssertReturn87(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_u', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 129,
        );
    }

    public function testAssertReturn88(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_u', 'args' => [['type' => 'i32', 'value' => '2414874608'], ['type' => 'i32', 'value' => '65537']]],
            expected: [['type' => 'i32', 'value' => '32769']],
            line: 130,
        );
    }

    public function testAssertReturn89(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_u', 'args' => [['type' => 'i32', 'value' => '2147483649'], ['type' => 'i32', 'value' => '1000']]],
            expected: [['type' => 'i32', 'value' => '649']],
            line: 131,
        );
    }

    public function testAssertReturn90(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_u', 'args' => [['type' => 'i32', 'value' => '5'], ['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 132,
        );
    }

    public function testAssertReturn91(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_u', 'args' => [['type' => 'i32', 'value' => '4294967291'], ['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 133,
        );
    }

    public function testAssertReturn92(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_u', 'args' => [['type' => 'i32', 'value' => '5'], ['type' => 'i32', 'value' => '4294967294']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 134,
        );
    }

    public function testAssertReturn93(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_u', 'args' => [['type' => 'i32', 'value' => '4294967291'], ['type' => 'i32', 'value' => '4294967294']]],
            expected: [['type' => 'i32', 'value' => '4294967291']],
            line: 135,
        );
    }

    public function testAssertReturn94(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_u', 'args' => [['type' => 'i32', 'value' => '7'], ['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 136,
        );
    }

    public function testAssertReturn95(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_u', 'args' => [['type' => 'i32', 'value' => '11'], ['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 137,
        );
    }

    public function testAssertReturn96(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rem_u', 'args' => [['type' => 'i32', 'value' => '17'], ['type' => 'i32', 'value' => '7']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 138,
        );
    }

    public function testAssertReturn97(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'and', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 140,
        );
    }

    public function testAssertReturn98(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'and', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 141,
        );
    }

    public function testAssertReturn99(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'and', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 142,
        );
    }

    public function testAssertReturn100(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'and', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 143,
        );
    }

    public function testAssertReturn101(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'and', 'args' => [['type' => 'i32', 'value' => '2147483647'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 144,
        );
    }

    public function testAssertReturn102(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'and', 'args' => [['type' => 'i32', 'value' => '2147483647'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '2147483647']],
            line: 145,
        );
    }

    public function testAssertReturn103(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'and', 'args' => [['type' => 'i32', 'value' => '4042326015'], ['type' => 'i32', 'value' => '4294963440']]],
            expected: [['type' => 'i32', 'value' => '4042322160']],
            line: 146,
        );
    }

    public function testAssertReturn104(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'and', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 147,
        );
    }

    public function testAssertReturn105(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'or', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 149,
        );
    }

    public function testAssertReturn106(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'or', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 150,
        );
    }

    public function testAssertReturn107(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'or', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 151,
        );
    }

    public function testAssertReturn108(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'or', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 152,
        );
    }

    public function testAssertReturn109(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'or', 'args' => [['type' => 'i32', 'value' => '2147483647'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 153,
        );
    }

    public function testAssertReturn110(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'or', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 154,
        );
    }

    public function testAssertReturn111(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'or', 'args' => [['type' => 'i32', 'value' => '4042326015'], ['type' => 'i32', 'value' => '4294963440']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 155,
        );
    }

    public function testAssertReturn112(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'or', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 156,
        );
    }

    public function testAssertReturn113(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'xor', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 158,
        );
    }

    public function testAssertReturn114(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'xor', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 159,
        );
    }

    public function testAssertReturn115(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'xor', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 160,
        );
    }

    public function testAssertReturn116(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'xor', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 161,
        );
    }

    public function testAssertReturn117(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'xor', 'args' => [['type' => 'i32', 'value' => '2147483647'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 162,
        );
    }

    public function testAssertReturn118(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'xor', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 163,
        );
    }

    public function testAssertReturn119(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'xor', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '2147483647']],
            line: 164,
        );
    }

    public function testAssertReturn120(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'xor', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 165,
        );
    }

    public function testAssertReturn121(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'xor', 'args' => [['type' => 'i32', 'value' => '4042326015'], ['type' => 'i32', 'value' => '4294963440']]],
            expected: [['type' => 'i32', 'value' => '252645135']],
            line: 166,
        );
    }

    public function testAssertReturn122(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'xor', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 167,
        );
    }

    public function testAssertReturn123(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shl', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 169,
        );
    }

    public function testAssertReturn124(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shl', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 170,
        );
    }

    public function testAssertReturn125(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shl', 'args' => [['type' => 'i32', 'value' => '2147483647'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '4294967294']],
            line: 171,
        );
    }

    public function testAssertReturn126(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shl', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '4294967294']],
            line: 172,
        );
    }

    public function testAssertReturn127(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shl', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 173,
        );
    }

    public function testAssertReturn128(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shl', 'args' => [['type' => 'i32', 'value' => '1073741824'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 174,
        );
    }

    public function testAssertReturn129(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shl', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '31']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 175,
        );
    }

    public function testAssertReturn130(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shl', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '32']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 176,
        );
    }

    public function testAssertReturn131(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shl', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '33']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 177,
        );
    }

    public function testAssertReturn132(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shl', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 178,
        );
    }

    public function testAssertReturn133(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shl', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 179,
        );
    }

    public function testAssertReturn134(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_s', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 181,
        );
    }

    public function testAssertReturn135(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_s', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 182,
        );
    }

    public function testAssertReturn136(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_s', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 183,
        );
    }

    public function testAssertReturn137(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_s', 'args' => [['type' => 'i32', 'value' => '2147483647'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1073741823']],
            line: 184,
        );
    }

    public function testAssertReturn138(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_s', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '3221225472']],
            line: 185,
        );
    }

    public function testAssertReturn139(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_s', 'args' => [['type' => 'i32', 'value' => '1073741824'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '536870912']],
            line: 186,
        );
    }

    public function testAssertReturn140(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_s', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '32']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 187,
        );
    }

    public function testAssertReturn141(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_s', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '33']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 188,
        );
    }

    public function testAssertReturn142(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_s', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 189,
        );
    }

    public function testAssertReturn143(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_s', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 190,
        );
    }

    public function testAssertReturn144(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_s', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 191,
        );
    }

    public function testAssertReturn145(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_s', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '31']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 192,
        );
    }

    public function testAssertReturn146(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_s', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '32']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 193,
        );
    }

    public function testAssertReturn147(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_s', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '33']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 194,
        );
    }

    public function testAssertReturn148(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_s', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 195,
        );
    }

    public function testAssertReturn149(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_s', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 196,
        );
    }

    public function testAssertReturn150(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_s', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 197,
        );
    }

    public function testAssertReturn151(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_u', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 199,
        );
    }

    public function testAssertReturn152(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_u', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 200,
        );
    }

    public function testAssertReturn153(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_u', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2147483647']],
            line: 201,
        );
    }

    public function testAssertReturn154(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_u', 'args' => [['type' => 'i32', 'value' => '2147483647'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1073741823']],
            line: 202,
        );
    }

    public function testAssertReturn155(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_u', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1073741824']],
            line: 203,
        );
    }

    public function testAssertReturn156(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_u', 'args' => [['type' => 'i32', 'value' => '1073741824'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '536870912']],
            line: 204,
        );
    }

    public function testAssertReturn157(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_u', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '32']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 205,
        );
    }

    public function testAssertReturn158(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_u', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '33']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 206,
        );
    }

    public function testAssertReturn159(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_u', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 207,
        );
    }

    public function testAssertReturn160(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_u', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 208,
        );
    }

    public function testAssertReturn161(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_u', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 209,
        );
    }

    public function testAssertReturn162(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_u', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '31']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 210,
        );
    }

    public function testAssertReturn163(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_u', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '32']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 211,
        );
    }

    public function testAssertReturn164(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_u', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '33']]],
            expected: [['type' => 'i32', 'value' => '2147483647']],
            line: 212,
        );
    }

    public function testAssertReturn165(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_u', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 213,
        );
    }

    public function testAssertReturn166(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_u', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 214,
        );
    }

    public function testAssertReturn167(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'shr_u', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 215,
        );
    }

    public function testAssertReturn168(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotl', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 217,
        );
    }

    public function testAssertReturn169(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotl', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 218,
        );
    }

    public function testAssertReturn170(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotl', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 219,
        );
    }

    public function testAssertReturn171(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotl', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '32']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 220,
        );
    }

    public function testAssertReturn172(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotl', 'args' => [['type' => 'i32', 'value' => '2882377846'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1469788397']],
            line: 221,
        );
    }

    public function testAssertReturn173(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotl', 'args' => [['type' => 'i32', 'value' => '4261469184'], ['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '3758997519']],
            line: 222,
        );
    }

    public function testAssertReturn174(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotl', 'args' => [['type' => 'i32', 'value' => '2965492451'], ['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '406477942']],
            line: 223,
        );
    }

    public function testAssertReturn175(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotl', 'args' => [['type' => 'i32', 'value' => '32768'], ['type' => 'i32', 'value' => '37']]],
            expected: [['type' => 'i32', 'value' => '1048576']],
            line: 224,
        );
    }

    public function testAssertReturn176(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotl', 'args' => [['type' => 'i32', 'value' => '2965492451'], ['type' => 'i32', 'value' => '65285']]],
            expected: [['type' => 'i32', 'value' => '406477942']],
            line: 225,
        );
    }

    public function testAssertReturn177(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotl', 'args' => [['type' => 'i32', 'value' => '1989852383'], ['type' => 'i32', 'value' => '4294967277']]],
            expected: [['type' => 'i32', 'value' => '1469837011']],
            line: 226,
        );
    }

    public function testAssertReturn178(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotl', 'args' => [['type' => 'i32', 'value' => '1989852383'], ['type' => 'i32', 'value' => '2147483661']]],
            expected: [['type' => 'i32', 'value' => '1469837011']],
            line: 227,
        );
    }

    public function testAssertReturn179(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotl', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '31']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 228,
        );
    }

    public function testAssertReturn180(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotl', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 229,
        );
    }

    public function testAssertReturn181(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotr', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 231,
        );
    }

    public function testAssertReturn182(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotr', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 232,
        );
    }

    public function testAssertReturn183(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotr', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 233,
        );
    }

    public function testAssertReturn184(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotr', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '32']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 234,
        );
    }

    public function testAssertReturn185(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotr', 'args' => [['type' => 'i32', 'value' => '4278242304'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2139121152']],
            line: 235,
        );
    }

    public function testAssertReturn186(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotr', 'args' => [['type' => 'i32', 'value' => '524288'], ['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '32768']],
            line: 236,
        );
    }

    public function testAssertReturn187(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotr', 'args' => [['type' => 'i32', 'value' => '2965492451'], ['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '495324823']],
            line: 237,
        );
    }

    public function testAssertReturn188(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotr', 'args' => [['type' => 'i32', 'value' => '32768'], ['type' => 'i32', 'value' => '37']]],
            expected: [['type' => 'i32', 'value' => '1024']],
            line: 238,
        );
    }

    public function testAssertReturn189(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotr', 'args' => [['type' => 'i32', 'value' => '2965492451'], ['type' => 'i32', 'value' => '65285']]],
            expected: [['type' => 'i32', 'value' => '495324823']],
            line: 239,
        );
    }

    public function testAssertReturn190(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotr', 'args' => [['type' => 'i32', 'value' => '1989852383'], ['type' => 'i32', 'value' => '4294967277']]],
            expected: [['type' => 'i32', 'value' => '3875255509']],
            line: 240,
        );
    }

    public function testAssertReturn191(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotr', 'args' => [['type' => 'i32', 'value' => '1989852383'], ['type' => 'i32', 'value' => '2147483661']]],
            expected: [['type' => 'i32', 'value' => '3875255509']],
            line: 241,
        );
    }

    public function testAssertReturn192(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotr', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '31']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 242,
        );
    }

    public function testAssertReturn193(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'rotr', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '31']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 243,
        );
    }

    public function testAssertReturn194(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'clz', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 245,
        );
    }

    public function testAssertReturn195(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'clz', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '32']],
            line: 246,
        );
    }

    public function testAssertReturn196(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'clz', 'args' => [['type' => 'i32', 'value' => '32768']]],
            expected: [['type' => 'i32', 'value' => '16']],
            line: 247,
        );
    }

    public function testAssertReturn197(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'clz', 'args' => [['type' => 'i32', 'value' => '255']]],
            expected: [['type' => 'i32', 'value' => '24']],
            line: 248,
        );
    }

    public function testAssertReturn198(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'clz', 'args' => [['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 249,
        );
    }

    public function testAssertReturn199(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'clz', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '31']],
            line: 250,
        );
    }

    public function testAssertReturn200(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'clz', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '30']],
            line: 251,
        );
    }

    public function testAssertReturn201(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'clz', 'args' => [['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 252,
        );
    }

    public function testAssertReturn202(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ctz', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 254,
        );
    }

    public function testAssertReturn203(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ctz', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '32']],
            line: 255,
        );
    }

    public function testAssertReturn204(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ctz', 'args' => [['type' => 'i32', 'value' => '32768']]],
            expected: [['type' => 'i32', 'value' => '15']],
            line: 256,
        );
    }

    public function testAssertReturn205(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ctz', 'args' => [['type' => 'i32', 'value' => '65536']]],
            expected: [['type' => 'i32', 'value' => '16']],
            line: 257,
        );
    }

    public function testAssertReturn206(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ctz', 'args' => [['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '31']],
            line: 258,
        );
    }

    public function testAssertReturn207(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ctz', 'args' => [['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 259,
        );
    }

    public function testAssertReturn208(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'popcnt', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '32']],
            line: 261,
        );
    }

    public function testAssertReturn209(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'popcnt', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 262,
        );
    }

    public function testAssertReturn210(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'popcnt', 'args' => [['type' => 'i32', 'value' => '32768']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 263,
        );
    }

    public function testAssertReturn211(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'popcnt', 'args' => [['type' => 'i32', 'value' => '2147516416']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 264,
        );
    }

    public function testAssertReturn212(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'popcnt', 'args' => [['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i32', 'value' => '31']],
            line: 265,
        );
    }

    public function testAssertReturn213(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'popcnt', 'args' => [['type' => 'i32', 'value' => '2863311530']]],
            expected: [['type' => 'i32', 'value' => '16']],
            line: 266,
        );
    }

    public function testAssertReturn214(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'popcnt', 'args' => [['type' => 'i32', 'value' => '1431655765']]],
            expected: [['type' => 'i32', 'value' => '16']],
            line: 267,
        );
    }

    public function testAssertReturn215(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'popcnt', 'args' => [['type' => 'i32', 'value' => '3735928559']]],
            expected: [['type' => 'i32', 'value' => '24']],
            line: 268,
        );
    }

    public function testAssertReturn216(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend8_s', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 270,
        );
    }

    public function testAssertReturn217(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend8_s', 'args' => [['type' => 'i32', 'value' => '127']]],
            expected: [['type' => 'i32', 'value' => '127']],
            line: 271,
        );
    }

    public function testAssertReturn218(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend8_s', 'args' => [['type' => 'i32', 'value' => '128']]],
            expected: [['type' => 'i32', 'value' => '4294967168']],
            line: 272,
        );
    }

    public function testAssertReturn219(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend8_s', 'args' => [['type' => 'i32', 'value' => '255']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 273,
        );
    }

    public function testAssertReturn220(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend8_s', 'args' => [['type' => 'i32', 'value' => '19088640']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 274,
        );
    }

    public function testAssertReturn221(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend8_s', 'args' => [['type' => 'i32', 'value' => '4275878528']]],
            expected: [['type' => 'i32', 'value' => '4294967168']],
            line: 275,
        );
    }

    public function testAssertReturn222(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend8_s', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 276,
        );
    }

    public function testAssertReturn223(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend16_s', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 278,
        );
    }

    public function testAssertReturn224(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend16_s', 'args' => [['type' => 'i32', 'value' => '32767']]],
            expected: [['type' => 'i32', 'value' => '32767']],
            line: 279,
        );
    }

    public function testAssertReturn225(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend16_s', 'args' => [['type' => 'i32', 'value' => '32768']]],
            expected: [['type' => 'i32', 'value' => '4294934528']],
            line: 280,
        );
    }

    public function testAssertReturn226(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend16_s', 'args' => [['type' => 'i32', 'value' => '65535']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 281,
        );
    }

    public function testAssertReturn227(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend16_s', 'args' => [['type' => 'i32', 'value' => '19070976']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 282,
        );
    }

    public function testAssertReturn228(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend16_s', 'args' => [['type' => 'i32', 'value' => '4275863552']]],
            expected: [['type' => 'i32', 'value' => '4294934528']],
            line: 283,
        );
    }

    public function testAssertReturn229(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'extend16_s', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 284,
        );
    }

    public function testAssertReturn230(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eqz', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 286,
        );
    }

    public function testAssertReturn231(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eqz', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 287,
        );
    }

    public function testAssertReturn232(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eqz', 'args' => [['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 288,
        );
    }

    public function testAssertReturn233(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eqz', 'args' => [['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 289,
        );
    }

    public function testAssertReturn234(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eqz', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 290,
        );
    }

    public function testAssertReturn235(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 292,
        );
    }

    public function testAssertReturn236(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 293,
        );
    }

    public function testAssertReturn237(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 294,
        );
    }

    public function testAssertReturn238(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 295,
        );
    }

    public function testAssertReturn239(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'i32', 'value' => '2147483647'], ['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 296,
        );
    }

    public function testAssertReturn240(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 297,
        );
    }

    public function testAssertReturn241(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 298,
        );
    }

    public function testAssertReturn242(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 299,
        );
    }

    public function testAssertReturn243(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 300,
        );
    }

    public function testAssertReturn244(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 301,
        );
    }

    public function testAssertReturn245(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 302,
        );
    }

    public function testAssertReturn246(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 303,
        );
    }

    public function testAssertReturn247(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 304,
        );
    }

    public function testAssertReturn248(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'eq', 'args' => [['type' => 'i32', 'value' => '2147483647'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 305,
        );
    }

    public function testAssertReturn249(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 307,
        );
    }

    public function testAssertReturn250(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 308,
        );
    }

    public function testAssertReturn251(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 309,
        );
    }

    public function testAssertReturn252(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 310,
        );
    }

    public function testAssertReturn253(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'i32', 'value' => '2147483647'], ['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 311,
        );
    }

    public function testAssertReturn254(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 312,
        );
    }

    public function testAssertReturn255(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 313,
        );
    }

    public function testAssertReturn256(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 314,
        );
    }

    public function testAssertReturn257(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 315,
        );
    }

    public function testAssertReturn258(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 316,
        );
    }

    public function testAssertReturn259(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 317,
        );
    }

    public function testAssertReturn260(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 318,
        );
    }

    public function testAssertReturn261(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 319,
        );
    }

    public function testAssertReturn262(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ne', 'args' => [['type' => 'i32', 'value' => '2147483647'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 320,
        );
    }

    public function testAssertReturn263(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_s', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 322,
        );
    }

    public function testAssertReturn264(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_s', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 323,
        );
    }

    public function testAssertReturn265(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_s', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 324,
        );
    }

    public function testAssertReturn266(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_s', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 325,
        );
    }

    public function testAssertReturn267(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_s', 'args' => [['type' => 'i32', 'value' => '2147483647'], ['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 326,
        );
    }

    public function testAssertReturn268(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_s', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 327,
        );
    }

    public function testAssertReturn269(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_s', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 328,
        );
    }

    public function testAssertReturn270(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_s', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 329,
        );
    }

    public function testAssertReturn271(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_s', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 330,
        );
    }

    public function testAssertReturn272(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_s', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 331,
        );
    }

    public function testAssertReturn273(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_s', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 332,
        );
    }

    public function testAssertReturn274(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_s', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 333,
        );
    }

    public function testAssertReturn275(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_s', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 334,
        );
    }

    public function testAssertReturn276(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_s', 'args' => [['type' => 'i32', 'value' => '2147483647'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 335,
        );
    }

    public function testAssertReturn277(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_u', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 337,
        );
    }

    public function testAssertReturn278(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_u', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 338,
        );
    }

    public function testAssertReturn279(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_u', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 339,
        );
    }

    public function testAssertReturn280(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_u', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 340,
        );
    }

    public function testAssertReturn281(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_u', 'args' => [['type' => 'i32', 'value' => '2147483647'], ['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 341,
        );
    }

    public function testAssertReturn282(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_u', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 342,
        );
    }

    public function testAssertReturn283(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_u', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 343,
        );
    }

    public function testAssertReturn284(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_u', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 344,
        );
    }

    public function testAssertReturn285(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_u', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 345,
        );
    }

    public function testAssertReturn286(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_u', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 346,
        );
    }

    public function testAssertReturn287(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_u', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 347,
        );
    }

    public function testAssertReturn288(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_u', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 348,
        );
    }

    public function testAssertReturn289(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_u', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 349,
        );
    }

    public function testAssertReturn290(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'lt_u', 'args' => [['type' => 'i32', 'value' => '2147483647'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 350,
        );
    }

    public function testAssertReturn291(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_s', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 352,
        );
    }

    public function testAssertReturn292(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_s', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 353,
        );
    }

    public function testAssertReturn293(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_s', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 354,
        );
    }

    public function testAssertReturn294(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_s', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 355,
        );
    }

    public function testAssertReturn295(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_s', 'args' => [['type' => 'i32', 'value' => '2147483647'], ['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 356,
        );
    }

    public function testAssertReturn296(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_s', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 357,
        );
    }

    public function testAssertReturn297(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_s', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 358,
        );
    }

    public function testAssertReturn298(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_s', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 359,
        );
    }

    public function testAssertReturn299(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_s', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 360,
        );
    }

    public function testAssertReturn300(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_s', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 361,
        );
    }

    public function testAssertReturn301(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_s', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 362,
        );
    }

    public function testAssertReturn302(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_s', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 363,
        );
    }

    public function testAssertReturn303(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_s', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 364,
        );
    }

    public function testAssertReturn304(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_s', 'args' => [['type' => 'i32', 'value' => '2147483647'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 365,
        );
    }

    public function testAssertReturn305(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_u', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 367,
        );
    }

    public function testAssertReturn306(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_u', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 368,
        );
    }

    public function testAssertReturn307(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_u', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 369,
        );
    }

    public function testAssertReturn308(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_u', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 370,
        );
    }

    public function testAssertReturn309(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_u', 'args' => [['type' => 'i32', 'value' => '2147483647'], ['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 371,
        );
    }

    public function testAssertReturn310(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_u', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 372,
        );
    }

    public function testAssertReturn311(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_u', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 373,
        );
    }

    public function testAssertReturn312(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_u', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 374,
        );
    }

    public function testAssertReturn313(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_u', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 375,
        );
    }

    public function testAssertReturn314(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_u', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 376,
        );
    }

    public function testAssertReturn315(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_u', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 377,
        );
    }

    public function testAssertReturn316(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_u', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 378,
        );
    }

    public function testAssertReturn317(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_u', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 379,
        );
    }

    public function testAssertReturn318(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'le_u', 'args' => [['type' => 'i32', 'value' => '2147483647'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 380,
        );
    }

    public function testAssertReturn319(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_s', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 382,
        );
    }

    public function testAssertReturn320(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_s', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 383,
        );
    }

    public function testAssertReturn321(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_s', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 384,
        );
    }

    public function testAssertReturn322(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_s', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 385,
        );
    }

    public function testAssertReturn323(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_s', 'args' => [['type' => 'i32', 'value' => '2147483647'], ['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 386,
        );
    }

    public function testAssertReturn324(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_s', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 387,
        );
    }

    public function testAssertReturn325(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_s', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 388,
        );
    }

    public function testAssertReturn326(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_s', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 389,
        );
    }

    public function testAssertReturn327(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_s', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 390,
        );
    }

    public function testAssertReturn328(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_s', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 391,
        );
    }

    public function testAssertReturn329(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_s', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 392,
        );
    }

    public function testAssertReturn330(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_s', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 393,
        );
    }

    public function testAssertReturn331(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_s', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 394,
        );
    }

    public function testAssertReturn332(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_s', 'args' => [['type' => 'i32', 'value' => '2147483647'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 395,
        );
    }

    public function testAssertReturn333(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_u', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 397,
        );
    }

    public function testAssertReturn334(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_u', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 398,
        );
    }

    public function testAssertReturn335(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_u', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 399,
        );
    }

    public function testAssertReturn336(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_u', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 400,
        );
    }

    public function testAssertReturn337(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_u', 'args' => [['type' => 'i32', 'value' => '2147483647'], ['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 401,
        );
    }

    public function testAssertReturn338(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_u', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 402,
        );
    }

    public function testAssertReturn339(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_u', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 403,
        );
    }

    public function testAssertReturn340(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_u', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 404,
        );
    }

    public function testAssertReturn341(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_u', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 405,
        );
    }

    public function testAssertReturn342(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_u', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 406,
        );
    }

    public function testAssertReturn343(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_u', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 407,
        );
    }

    public function testAssertReturn344(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_u', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 408,
        );
    }

    public function testAssertReturn345(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_u', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 409,
        );
    }

    public function testAssertReturn346(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'gt_u', 'args' => [['type' => 'i32', 'value' => '2147483647'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 410,
        );
    }

    public function testAssertReturn347(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_s', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 412,
        );
    }

    public function testAssertReturn348(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_s', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 413,
        );
    }

    public function testAssertReturn349(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_s', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 414,
        );
    }

    public function testAssertReturn350(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_s', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 415,
        );
    }

    public function testAssertReturn351(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_s', 'args' => [['type' => 'i32', 'value' => '2147483647'], ['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 416,
        );
    }

    public function testAssertReturn352(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_s', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 417,
        );
    }

    public function testAssertReturn353(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_s', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 418,
        );
    }

    public function testAssertReturn354(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_s', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 419,
        );
    }

    public function testAssertReturn355(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_s', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 420,
        );
    }

    public function testAssertReturn356(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_s', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 421,
        );
    }

    public function testAssertReturn357(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_s', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 422,
        );
    }

    public function testAssertReturn358(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_s', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 423,
        );
    }

    public function testAssertReturn359(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_s', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 424,
        );
    }

    public function testAssertReturn360(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_s', 'args' => [['type' => 'i32', 'value' => '2147483647'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 425,
        );
    }

    public function testAssertReturn361(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_u', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 427,
        );
    }

    public function testAssertReturn362(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_u', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 428,
        );
    }

    public function testAssertReturn363(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_u', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 429,
        );
    }

    public function testAssertReturn364(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_u', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 430,
        );
    }

    public function testAssertReturn365(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_u', 'args' => [['type' => 'i32', 'value' => '2147483647'], ['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 431,
        );
    }

    public function testAssertReturn366(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_u', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 432,
        );
    }

    public function testAssertReturn367(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_u', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 433,
        );
    }

    public function testAssertReturn368(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_u', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 434,
        );
    }

    public function testAssertReturn369(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_u', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 435,
        );
    }

    public function testAssertReturn370(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_u', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 436,
        );
    }

    public function testAssertReturn371(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_u', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 437,
        );
    }

    public function testAssertReturn372(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_u', 'args' => [['type' => 'i32', 'value' => '4294967295'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 438,
        );
    }

    public function testAssertReturn373(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_u', 'args' => [['type' => 'i32', 'value' => '2147483648'], ['type' => 'i32', 'value' => '2147483647']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 439,
        );
    }

    public function testAssertReturn374(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ge_u', 'args' => [['type' => 'i32', 'value' => '2147483647'], ['type' => 'i32', 'value' => '2147483648']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 440,
        );
    }

    public function testAssertInvalid375(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.1.wasm',
            text: 'type mismatch',
            line: 444,
        );
    }

    public function testAssertInvalid376(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.2.wasm',
            text: 'type mismatch',
            line: 452,
        );
    }

    public function testAssertInvalid377(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.3.wasm',
            text: 'type mismatch',
            line: 461,
        );
    }

    public function testAssertInvalid378(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.4.wasm',
            text: 'type mismatch',
            line: 470,
        );
    }

    public function testAssertInvalid379(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.5.wasm',
            text: 'type mismatch',
            line: 479,
        );
    }

    public function testAssertInvalid380(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.6.wasm',
            text: 'type mismatch',
            line: 488,
        );
    }

    public function testAssertInvalid381(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.7.wasm',
            text: 'type mismatch',
            line: 497,
        );
    }

    public function testAssertInvalid382(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.8.wasm',
            text: 'type mismatch',
            line: 506,
        );
    }

    public function testAssertInvalid383(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.9.wasm',
            text: 'type mismatch',
            line: 515,
        );
    }

    public function testAssertInvalid384(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.10.wasm',
            text: 'type mismatch',
            line: 523,
        );
    }

    public function testAssertInvalid385(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.11.wasm',
            text: 'type mismatch',
            line: 531,
        );
    }

    public function testAssertInvalid386(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.12.wasm',
            text: 'type mismatch',
            line: 540,
        );
    }

    public function testAssertInvalid387(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.13.wasm',
            text: 'type mismatch',
            line: 556,
        );
    }

    public function testAssertInvalid388(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.14.wasm',
            text: 'type mismatch',
            line: 565,
        );
    }

    public function testAssertInvalid389(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.15.wasm',
            text: 'type mismatch',
            line: 574,
        );
    }

    public function testAssertInvalid390(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.16.wasm',
            text: 'type mismatch',
            line: 583,
        );
    }

    public function testAssertInvalid391(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.17.wasm',
            text: 'type mismatch',
            line: 592,
        );
    }

    public function testAssertInvalid392(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.18.wasm',
            text: 'type mismatch',
            line: 601,
        );
    }

    public function testAssertInvalid393(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.19.wasm',
            text: 'type mismatch',
            line: 611,
        );
    }

    public function testAssertInvalid394(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.20.wasm',
            text: 'type mismatch',
            line: 619,
        );
    }

    public function testAssertInvalid395(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.21.wasm',
            text: 'type mismatch',
            line: 627,
        );
    }

    public function testAssertInvalid396(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.22.wasm',
            text: 'type mismatch',
            line: 636,
        );
    }

    public function testAssertInvalid397(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.23.wasm',
            text: 'type mismatch',
            line: 645,
        );
    }

    public function testAssertInvalid398(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.24.wasm',
            text: 'type mismatch',
            line: 654,
        );
    }

    public function testAssertInvalid399(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.25.wasm',
            text: 'type mismatch',
            line: 663,
        );
    }

    public function testAssertInvalid400(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.26.wasm',
            text: 'type mismatch',
            line: 672,
        );
    }

    public function testAssertInvalid401(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.27.wasm',
            text: 'type mismatch',
            line: 681,
        );
    }

    public function testAssertInvalid402(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.28.wasm',
            text: 'type mismatch',
            line: 691,
        );
    }

    public function testAssertInvalid403(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.29.wasm',
            text: 'type mismatch',
            line: 701,
        );
    }

    public function testAssertInvalid404(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.30.wasm',
            text: 'type mismatch',
            line: 710,
        );
    }

    public function testAssertInvalid405(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.31.wasm',
            text: 'type mismatch',
            line: 719,
        );
    }

    public function testAssertInvalid406(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.32.wasm',
            text: 'type mismatch',
            line: 728,
        );
    }

    public function testAssertInvalid407(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.33.wasm',
            text: 'type mismatch',
            line: 737,
        );
    }

    public function testAssertInvalid408(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.34.wasm',
            text: 'type mismatch',
            line: 746,
        );
    }

    public function testAssertInvalid409(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.35.wasm',
            text: 'type mismatch',
            line: 755,
        );
    }

    public function testAssertInvalid410(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.36.wasm',
            text: 'type mismatch',
            line: 763,
        );
    }

    public function testAssertInvalid411(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.37.wasm',
            text: 'type mismatch',
            line: 771,
        );
    }

    public function testAssertInvalid412(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.38.wasm',
            text: 'type mismatch',
            line: 779,
        );
    }

    public function testAssertInvalid413(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.39.wasm',
            text: 'type mismatch',
            line: 787,
        );
    }

    public function testAssertInvalid414(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.40.wasm',
            text: 'type mismatch',
            line: 796,
        );
    }

    public function testAssertInvalid415(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.41.wasm',
            text: 'type mismatch',
            line: 805,
        );
    }

    public function testAssertInvalid416(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.42.wasm',
            text: 'type mismatch',
            line: 821,
        );
    }

    public function testAssertInvalid417(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.43.wasm',
            text: 'type mismatch',
            line: 837,
        );
    }

    public function testAssertInvalid418(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.44.wasm',
            text: 'type mismatch',
            line: 846,
        );
    }

    public function testAssertInvalid419(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.45.wasm',
            text: 'type mismatch',
            line: 855,
        );
    }

    public function testAssertInvalid420(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.46.wasm',
            text: 'type mismatch',
            line: 864,
        );
    }

    public function testAssertInvalid421(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.47.wasm',
            text: 'type mismatch',
            line: 873,
        );
    }

    public function testAssertInvalid422(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.48.wasm',
            text: 'type mismatch',
            line: 882,
        );
    }

    public function testAssertInvalid423(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.49.wasm',
            text: 'type mismatch',
            line: 891,
        );
    }

    public function testAssertInvalid424(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.50.wasm',
            text: 'type mismatch',
            line: 900,
        );
    }

    public function testAssertInvalid425(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.51.wasm',
            text: 'type mismatch',
            line: 909,
        );
    }

    public function testAssertInvalid426(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.52.wasm',
            text: 'type mismatch',
            line: 918,
        );
    }

    public function testAssertInvalid427(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.53.wasm',
            text: 'type mismatch',
            line: 927,
        );
    }

    public function testAssertInvalid428(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.54.wasm',
            text: 'type mismatch',
            line: 936,
        );
    }

    public function testAssertInvalid429(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.55.wasm',
            text: 'type mismatch',
            line: 948,
        );
    }

    public function testAssertInvalid430(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.56.wasm',
            text: 'type mismatch',
            line: 949,
        );
    }

    public function testAssertInvalid431(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.57.wasm',
            text: 'type mismatch',
            line: 950,
        );
    }

    public function testAssertInvalid432(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.58.wasm',
            text: 'type mismatch',
            line: 951,
        );
    }

    public function testAssertInvalid433(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.59.wasm',
            text: 'type mismatch',
            line: 952,
        );
    }

    public function testAssertInvalid434(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.60.wasm',
            text: 'type mismatch',
            line: 953,
        );
    }

    public function testAssertInvalid435(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.61.wasm',
            text: 'type mismatch',
            line: 954,
        );
    }

    public function testAssertInvalid436(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.62.wasm',
            text: 'type mismatch',
            line: 955,
        );
    }

    public function testAssertInvalid437(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.63.wasm',
            text: 'type mismatch',
            line: 956,
        );
    }

    public function testAssertInvalid438(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.64.wasm',
            text: 'type mismatch',
            line: 957,
        );
    }

    public function testAssertInvalid439(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.65.wasm',
            text: 'type mismatch',
            line: 958,
        );
    }

    public function testAssertInvalid440(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.66.wasm',
            text: 'type mismatch',
            line: 959,
        );
    }

    public function testAssertInvalid441(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.67.wasm',
            text: 'type mismatch',
            line: 960,
        );
    }

    public function testAssertInvalid442(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.68.wasm',
            text: 'type mismatch',
            line: 961,
        );
    }

    public function testAssertInvalid443(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.69.wasm',
            text: 'type mismatch',
            line: 962,
        );
    }

    public function testAssertInvalid444(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.70.wasm',
            text: 'type mismatch',
            line: 963,
        );
    }

    public function testAssertInvalid445(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.71.wasm',
            text: 'type mismatch',
            line: 964,
        );
    }

    public function testAssertInvalid446(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.72.wasm',
            text: 'type mismatch',
            line: 965,
        );
    }

    public function testAssertInvalid447(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.73.wasm',
            text: 'type mismatch',
            line: 966,
        );
    }

    public function testAssertInvalid448(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.74.wasm',
            text: 'type mismatch',
            line: 967,
        );
    }

    public function testAssertInvalid449(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.75.wasm',
            text: 'type mismatch',
            line: 968,
        );
    }

    public function testAssertInvalid450(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.76.wasm',
            text: 'type mismatch',
            line: 969,
        );
    }

    public function testAssertInvalid451(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.77.wasm',
            text: 'type mismatch',
            line: 970,
        );
    }

    public function testAssertInvalid452(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.78.wasm',
            text: 'type mismatch',
            line: 971,
        );
    }

    public function testAssertInvalid453(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.79.wasm',
            text: 'type mismatch',
            line: 972,
        );
    }

    public function testAssertInvalid454(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.80.wasm',
            text: 'type mismatch',
            line: 973,
        );
    }

    public function testAssertInvalid455(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.81.wasm',
            text: 'type mismatch',
            line: 974,
        );
    }

    public function testAssertInvalid456(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.82.wasm',
            text: 'type mismatch',
            line: 975,
        );
    }

    public function testAssertInvalid457(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'i32.83.wasm',
            text: 'type mismatch',
            line: 976,
        );
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed458(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed459(): void
    {
    }
}
