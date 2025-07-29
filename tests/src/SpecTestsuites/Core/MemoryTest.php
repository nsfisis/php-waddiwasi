<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class MemoryTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'memory.0.wasm',
            name: null,
            line: 3,
        );
    }

    public function testModule1(): void
    {
        $this->runModuleCommand(
            filename: 'memory.1.wasm',
            name: null,
            line: 4,
        );
    }

    public function testModule2(): void
    {
        $this->runModuleCommand(
            filename: 'memory.2.wasm',
            name: null,
            line: 5,
        );
    }

    public function testModule3(): void
    {
        $this->runModuleCommand(
            filename: 'memory.3.wasm',
            name: null,
            line: 6,
        );
    }

    public function testModule4(): void
    {
        $this->runModuleCommand(
            filename: 'memory.4.wasm',
            name: null,
            line: 7,
        );
    }

    public function testModule5(): void
    {
        $this->runModuleCommand(
            filename: 'memory.5.wasm',
            name: null,
            line: 8,
        );
    }

    public function testAssertInvalid6(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory.6.wasm',
            text: 'multiple memories',
            line: 10,
        );
    }

    public function testAssertInvalid7(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory.7.wasm',
            text: 'multiple memories',
            line: 11,
        );
    }

    public function testModule8(): void
    {
        $this->runModuleCommand(
            filename: 'memory.8.wasm',
            name: null,
            line: 13,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'memsize', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 14,
        );
    }

    public function testModule10(): void
    {
        $this->runModuleCommand(
            filename: 'memory.9.wasm',
            name: null,
            line: 15,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'memsize', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 16,
        );
    }

    public function testModule12(): void
    {
        $this->runModuleCommand(
            filename: 'memory.10.wasm',
            name: null,
            line: 17,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'memsize', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 18,
        );
    }

    public function testAssertInvalid14(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory.11.wasm',
            text: 'unknown memory',
            line: 20,
        );
    }

    public function testAssertInvalid15(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory.12.wasm',
            text: 'unknown memory',
            line: 21,
        );
    }

    public function testAssertInvalid16(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory.13.wasm',
            text: 'unknown memory',
            line: 22,
        );
    }

    public function testAssertInvalid17(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory.14.wasm',
            text: 'unknown memory',
            line: 25,
        );
    }

    public function testAssertInvalid18(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory.15.wasm',
            text: 'unknown memory',
            line: 29,
        );
    }

    public function testAssertInvalid19(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory.16.wasm',
            text: 'unknown memory',
            line: 33,
        );
    }

    public function testAssertInvalid20(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory.17.wasm',
            text: 'unknown memory',
            line: 37,
        );
    }

    public function testAssertInvalid21(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory.18.wasm',
            text: 'unknown memory',
            line: 41,
        );
    }

    public function testAssertInvalid22(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory.19.wasm',
            text: 'unknown memory',
            line: 45,
        );
    }

    public function testAssertInvalid23(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory.20.wasm',
            text: 'size minimum must not be greater than maximum',
            line: 51,
        );
    }

    public function testAssertInvalid24(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory.21.wasm',
            text: 'memory size must be at most 65536 pages (4GiB)',
            line: 55,
        );
    }

    public function testAssertInvalid25(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory.22.wasm',
            text: 'memory size must be at most 65536 pages (4GiB)',
            line: 59,
        );
    }

    public function testAssertInvalid26(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory.23.wasm',
            text: 'memory size must be at most 65536 pages (4GiB)',
            line: 63,
        );
    }

    public function testAssertInvalid27(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory.24.wasm',
            text: 'memory size must be at most 65536 pages (4GiB)',
            line: 67,
        );
    }

    public function testAssertInvalid28(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory.25.wasm',
            text: 'memory size must be at most 65536 pages (4GiB)',
            line: 71,
        );
    }

    public function testAssertInvalid29(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory.26.wasm',
            text: 'memory size must be at most 65536 pages (4GiB)',
            line: 75,
        );
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed30(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed31(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed32(): void
    {
    }

    public function testModule33(): void
    {
        $this->runModuleCommand(
            filename: 'memory.30.wasm',
            name: null,
            line: 92,
        );
    }

    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'data', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 180,
        );
    }

    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'cast', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4631107791820423168']],
            line: 181,
        );
    }

    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load8_s', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 183,
        );
    }

    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load8_u', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '255']],
            line: 184,
        );
    }

    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load16_s', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 185,
        );
    }

    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load16_u', 'args' => [['type' => 'i32', 'value' => '4294967295']]],
            expected: [['type' => 'i32', 'value' => '65535']],
            line: 186,
        );
    }

    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load8_s', 'args' => [['type' => 'i32', 'value' => '100']]],
            expected: [['type' => 'i32', 'value' => '100']],
            line: 188,
        );
    }

    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load8_u', 'args' => [['type' => 'i32', 'value' => '200']]],
            expected: [['type' => 'i32', 'value' => '200']],
            line: 189,
        );
    }

    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load16_s', 'args' => [['type' => 'i32', 'value' => '20000']]],
            expected: [['type' => 'i32', 'value' => '20000']],
            line: 190,
        );
    }

    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load16_u', 'args' => [['type' => 'i32', 'value' => '40000']]],
            expected: [['type' => 'i32', 'value' => '40000']],
            line: 191,
        );
    }

    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load8_s', 'args' => [['type' => 'i32', 'value' => '4275856707']]],
            expected: [['type' => 'i32', 'value' => '67']],
            line: 193,
        );
    }

    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load8_s', 'args' => [['type' => 'i32', 'value' => '878104047']]],
            expected: [['type' => 'i32', 'value' => '4294967279']],
            line: 194,
        );
    }

    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load8_u', 'args' => [['type' => 'i32', 'value' => '4275856707']]],
            expected: [['type' => 'i32', 'value' => '67']],
            line: 195,
        );
    }

    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load8_u', 'args' => [['type' => 'i32', 'value' => '878104047']]],
            expected: [['type' => 'i32', 'value' => '239']],
            line: 196,
        );
    }

    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load16_s', 'args' => [['type' => 'i32', 'value' => '4275856707']]],
            expected: [['type' => 'i32', 'value' => '25923']],
            line: 197,
        );
    }

    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load16_s', 'args' => [['type' => 'i32', 'value' => '878104047']]],
            expected: [['type' => 'i32', 'value' => '4294954479']],
            line: 198,
        );
    }

    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load16_u', 'args' => [['type' => 'i32', 'value' => '4275856707']]],
            expected: [['type' => 'i32', 'value' => '25923']],
            line: 199,
        );
    }

    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i32_load16_u', 'args' => [['type' => 'i32', 'value' => '878104047']]],
            expected: [['type' => 'i32', 'value' => '52719']],
            line: 200,
        );
    }

    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load8_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 202,
        );
    }

    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load8_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '255']],
            line: 203,
        );
    }

    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load16_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 204,
        );
    }

    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load16_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '65535']],
            line: 205,
        );
    }

    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load32_s', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551615']],
            line: 206,
        );
    }

    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load32_u', 'args' => [['type' => 'i64', 'value' => '18446744073709551615']]],
            expected: [['type' => 'i64', 'value' => '4294967295']],
            line: 207,
        );
    }

    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load8_s', 'args' => [['type' => 'i64', 'value' => '100']]],
            expected: [['type' => 'i64', 'value' => '100']],
            line: 209,
        );
    }

    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load8_u', 'args' => [['type' => 'i64', 'value' => '200']]],
            expected: [['type' => 'i64', 'value' => '200']],
            line: 210,
        );
    }

    public function testAssertReturn60(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load16_s', 'args' => [['type' => 'i64', 'value' => '20000']]],
            expected: [['type' => 'i64', 'value' => '20000']],
            line: 211,
        );
    }

    public function testAssertReturn61(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load16_u', 'args' => [['type' => 'i64', 'value' => '40000']]],
            expected: [['type' => 'i64', 'value' => '40000']],
            line: 212,
        );
    }

    public function testAssertReturn62(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load32_s', 'args' => [['type' => 'i64', 'value' => '20000']]],
            expected: [['type' => 'i64', 'value' => '20000']],
            line: 213,
        );
    }

    public function testAssertReturn63(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load32_u', 'args' => [['type' => 'i64', 'value' => '40000']]],
            expected: [['type' => 'i64', 'value' => '40000']],
            line: 214,
        );
    }

    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load8_s', 'args' => [['type' => 'i64', 'value' => '18364758543954109763']]],
            expected: [['type' => 'i64', 'value' => '67']],
            line: 216,
        );
    }

    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load8_s', 'args' => [['type' => 'i64', 'value' => '3771275841602506223']]],
            expected: [['type' => 'i64', 'value' => '18446744073709551599']],
            line: 217,
        );
    }

    public function testAssertReturn66(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load8_u', 'args' => [['type' => 'i64', 'value' => '18364758543954109763']]],
            expected: [['type' => 'i64', 'value' => '67']],
            line: 218,
        );
    }

    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load8_u', 'args' => [['type' => 'i64', 'value' => '3771275841602506223']]],
            expected: [['type' => 'i64', 'value' => '239']],
            line: 219,
        );
    }

    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load16_s', 'args' => [['type' => 'i64', 'value' => '18364758543954109763']]],
            expected: [['type' => 'i64', 'value' => '25923']],
            line: 220,
        );
    }

    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load16_s', 'args' => [['type' => 'i64', 'value' => '3771275841602506223']]],
            expected: [['type' => 'i64', 'value' => '18446744073709538799']],
            line: 221,
        );
    }

    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load16_u', 'args' => [['type' => 'i64', 'value' => '18364758543954109763']]],
            expected: [['type' => 'i64', 'value' => '25923']],
            line: 222,
        );
    }

    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load16_u', 'args' => [['type' => 'i64', 'value' => '3771275841602506223']]],
            expected: [['type' => 'i64', 'value' => '52719']],
            line: 223,
        );
    }

    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load32_s', 'args' => [['type' => 'i64', 'value' => '18364758543954109763']]],
            expected: [['type' => 'i64', 'value' => '1446274371']],
            line: 224,
        );
    }

    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load32_s', 'args' => [['type' => 'i64', 'value' => '3771275841602506223']]],
            expected: [['type' => 'i64', 'value' => '18446744071976963567']],
            line: 225,
        );
    }

    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load32_u', 'args' => [['type' => 'i64', 'value' => '18364758543954109763']]],
            expected: [['type' => 'i64', 'value' => '1446274371']],
            line: 226,
        );
    }

    public function testAssertReturn75(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'i64_load32_u', 'args' => [['type' => 'i64', 'value' => '3771275841602506223']]],
            expected: [['type' => 'i64', 'value' => '2562379247']],
            line: 227,
        );
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed76(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed77(): void
    {
    }

    #[DoesNotPerformAssertions]
    public function testAssertMalformed78(): void
    {
    }

    public function testModule79(): void
    {
        $this->runModuleCommand(
            filename: 'memory.34.wasm',
            name: null,
            line: 246,
        );
    }

    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 260,
        );
    }

    public function testAssertReturn81(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '10000']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 261,
        );
    }

    public function testAssertReturn82(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '20000']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 262,
        );
    }

    public function testAssertReturn83(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '30000']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 263,
        );
    }

    public function testAssertReturn84(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '40000']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 264,
        );
    }

    public function testAssertReturn85(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '50000']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 265,
        );
    }

    public function testAssertReturn86(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '60000']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 266,
        );
    }

    public function testAssertReturn87(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '65535']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 267,
        );
    }
}
