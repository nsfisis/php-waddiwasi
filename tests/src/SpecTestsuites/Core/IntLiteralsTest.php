<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
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

    #[Depends('testModule0')]
    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.test', 'args' => []],
            expected: [['type' => 'i32', 'value' => '195940365']],
            line: 37,
        );
    }

    #[Depends('testAssertReturn1')]
    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.umax', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 38,
        );
    }

    #[Depends('testAssertReturn2')]
    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.smax', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2147483647']],
            line: 39,
        );
    }

    #[Depends('testAssertReturn3')]
    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.neg_smax', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2147483649']],
            line: 40,
        );
    }

    #[Depends('testAssertReturn4')]
    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.smin', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 41,
        );
    }

    #[Depends('testAssertReturn5')]
    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.alt_smin', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2147483648']],
            line: 42,
        );
    }

    #[Depends('testAssertReturn6')]
    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.inc_smin', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2147483649']],
            line: 43,
        );
    }

    #[Depends('testAssertReturn7')]
    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.neg_zero', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 44,
        );
    }

    #[Depends('testAssertReturn8')]
    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.not_octal', 'args' => []],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 45,
        );
    }

    #[Depends('testAssertReturn9')]
    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.unsigned_decimal', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 46,
        );
    }

    #[Depends('testAssertReturn10')]
    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32.plus_sign', 'args' => []],
            expected: [['type' => 'i32', 'value' => '42']],
            line: 47,
        );
    }

    #[Depends('testAssertReturn11')]
    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.test', 'args' => []],
            expected: [['type' => 'i64', 'value' => '913028331277281902']],
            line: 49,
        );
    }

    #[Depends('testAssertReturn12')]
    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.umax', 'args' => []],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 50,
        );
    }

    #[Depends('testAssertReturn13')]
    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.smax', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9223372036854775807']],
            line: 51,
        );
    }

    #[Depends('testAssertReturn14')]
    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.neg_smax', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9223372036854775809']],
            line: 52,
        );
    }

    #[Depends('testAssertReturn15')]
    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.smin', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 53,
        );
    }

    #[Depends('testAssertReturn16')]
    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.alt_smin', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9223372036854775808']],
            line: 54,
        );
    }

    #[Depends('testAssertReturn17')]
    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.inc_smin', 'args' => []],
            expected: [['type' => 'i64', 'value' => '9223372036854775809']],
            line: 55,
        );
    }

    #[Depends('testAssertReturn18')]
    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.neg_zero', 'args' => []],
            expected: [['type' => 'i64', 'value' => '0']],
            line: 56,
        );
    }

    #[Depends('testAssertReturn19')]
    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.not_octal', 'args' => []],
            expected: [['type' => 'i64', 'value' => '10']],
            line: 57,
        );
    }

    #[Depends('testAssertReturn20')]
    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.unsigned_decimal', 'args' => []],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 58,
        );
    }

    #[Depends('testAssertReturn21')]
    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64.plus_sign', 'args' => []],
            expected: [['type' => 'i64', 'value' => '42']],
            line: 59,
        );
    }

    #[Depends('testAssertReturn22')]
    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32-dec-sep1', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1000000']],
            line: 61,
        );
    }

    #[Depends('testAssertReturn23')]
    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32-dec-sep2', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1000']],
            line: 62,
        );
    }

    #[Depends('testAssertReturn24')]
    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32-hex-sep1', 'args' => []],
            expected: [['type' => 'i32', 'value' => '168755353']],
            line: 63,
        );
    }

    #[Depends('testAssertReturn25')]
    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32-hex-sep2', 'args' => []],
            expected: [['type' => 'i32', 'value' => '109071']],
            line: 64,
        );
    }

    #[Depends('testAssertReturn26')]
    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64-dec-sep1', 'args' => []],
            expected: [['type' => 'i64', 'value' => '1000000']],
            line: 66,
        );
    }

    #[Depends('testAssertReturn27')]
    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64-dec-sep2', 'args' => []],
            expected: [['type' => 'i64', 'value' => '1000']],
            line: 67,
        );
    }

    #[Depends('testAssertReturn28')]
    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64-hex-sep1', 'args' => []],
            expected: [['type' => 'i64', 'value' => '3078696982321561']],
            line: 68,
        );
    }

    #[Depends('testAssertReturn29')]
    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64-hex-sep2', 'args' => []],
            expected: [['type' => 'i64', 'value' => '109071']],
            line: 69,
        );
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertReturn30')]
    public function testAssertMalformed31(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed31')]
    public function testAssertMalformed32(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed32')]
    public function testAssertMalformed33(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed33')]
    public function testAssertMalformed34(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed34')]
    public function testAssertMalformed35(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed35')]
    public function testAssertMalformed36(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed36')]
    public function testAssertMalformed37(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed37')]
    public function testAssertMalformed38(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed38')]
    public function testAssertMalformed39(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed39')]
    public function testAssertMalformed40(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed40')]
    public function testAssertMalformed41(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed41')]
    public function testAssertMalformed42(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed42')]
    public function testAssertMalformed43(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed43')]
    public function testAssertMalformed44(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed44')]
    public function testAssertMalformed45(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed45')]
    public function testAssertMalformed46(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed46')]
    public function testAssertMalformed47(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed47')]
    public function testAssertMalformed48(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed48')]
    public function testAssertMalformed49(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed49')]
    public function testAssertMalformed50(): void
    {
    }
}
