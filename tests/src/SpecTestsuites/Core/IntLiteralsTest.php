<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class IntLiteralsTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'int_literals.0.wasm',
            name: null,
            line: 1,
        );
    }

    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.test', 'args' => []],
            expected: [['type' => 'i32', 'value' => '195940365']],
            line: 37,
        );
    }

    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.umax', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 38,
        );
    }

    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.smax', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2147483647']],
            line: 39,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.neg_smax', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2147483649']],
            line: 40,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.smin', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 41,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.alt_smin', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 42,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.inc_smin', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2147483649']],
            line: 43,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.neg_zero', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 44,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.not_octal', 'args' => []],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 45,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.unsigned_decimal', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 46,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.plus_sign', 'args' => []],
            expected: [['type' => 'i32', 'value' => '42']],
            line: 47,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.test', 'args' => []],
            expected: [['type' => 'i64', 'value' => '913028331277281902']],
            line: 49,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.umax', 'args' => []],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 50,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.smax', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9223372036854775807']],
            line: 51,
        );
    }

    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.neg_smax', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9223372036854775809']],
            line: 52,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.smin', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 53,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.alt_smin', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 54,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.inc_smin', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9223372036854775809']],
            line: 55,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.neg_zero', 'args' => []],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 56,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.not_octal', 'args' => []],
            expected: [['type' => 'i64', 'value' => '10']],
            line: 57,
        );
    }

    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.unsigned_decimal', 'args' => []],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 58,
        );
    }

    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.plus_sign', 'args' => []],
            expected: [['type' => 'i64', 'value' => '42']],
            line: 59,
        );
    }

    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32-dec-sep1', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1000000']],
            line: 61,
        );
    }

    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32-dec-sep2', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1000']],
            line: 62,
        );
    }

    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32-hex-sep1', 'args' => []],
            expected: [['type' => 'i32', 'value' => '168755353']],
            line: 63,
        );
    }

    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32-hex-sep2', 'args' => []],
            expected: [['type' => 'i32', 'value' => '109071']],
            line: 64,
        );
    }

    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64-dec-sep1', 'args' => []],
            expected: [['type' => 'i64', 'value' => '1000000']],
            line: 66,
        );
    }

    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64-dec-sep2', 'args' => []],
            expected: [['type' => 'i64', 'value' => '1000']],
            line: 67,
        );
    }

    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64-hex-sep1', 'args' => []],
            expected: [['type' => 'i64', 'value' => '3078696982321561']],
            line: 68,
        );
    }

    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64-hex-sep2', 'args' => []],
            expected: [['type' => 'i64', 'value' => '109071']],
            line: 69,
        );
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed31(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed32(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed33(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed34(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed35(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed36(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed37(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed38(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed39(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed40(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed41(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed42(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed43(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed44(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed45(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed46(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed47(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed48(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed49(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed50(): void
    {
    }
}
