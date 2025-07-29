<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class MemoryGrowTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'memory_grow.0.wasm',
            name: null,
            line: 1,
        );
    }

    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 14,
        );
    }

    public function testAssertTrap2(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'store_at_zero', 'args' => []],
            text: 'out of bounds memory access',
            line: 15,
        );
    }

    public function testAssertTrap3(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'load_at_zero', 'args' => []],
            text: 'out of bounds memory access',
            line: 16,
        );
    }

    public function testAssertTrap4(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'store_at_page_size', 'args' => []],
            text: 'out of bounds memory access',
            line: 17,
        );
    }

    public function testAssertTrap5(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'load_at_page_size', 'args' => []],
            text: 'out of bounds memory access',
            line: 18,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 19,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 20,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load_at_zero', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 21,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'store_at_zero', 'args' => []],
            expected: [],
            line: 22,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load_at_zero', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 23,
        );
    }

    public function testAssertTrap11(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'store_at_page_size', 'args' => []],
            text: 'out of bounds memory access',
            line: 24,
        );
    }

    public function testAssertTrap12(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'load_at_page_size', 'args' => []],
            text: 'out of bounds memory access',
            line: 25,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 26,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 27,
        );
    }

    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load_at_zero', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 28,
        );
    }

    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'store_at_zero', 'args' => []],
            expected: [],
            line: 29,
        );
    }

    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load_at_zero', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 30,
        );
    }

    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load_at_page_size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 31,
        );
    }

    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'store_at_page_size', 'args' => []],
            expected: [],
            line: 32,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load_at_page_size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 33,
        );
    }

    public function testModule21(): void
    {
        $this->runModuleCommand(
            filename: 'memory_grow.1.wasm',
            name: null,
            line: 36,
        );
    }

    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 41,
        );
    }

    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 42,
        );
    }

    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 43,
        );
    }

    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 44,
        );
    }

    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '800']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 45,
        );
    }

    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '65536']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 46,
        );
    }

    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '64736']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 47,
        );
    }

    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '803']],
            line: 48,
        );
    }

    public function testModule30(): void
    {
        $this->runModuleCommand(
            filename: 'memory_grow.2.wasm',
            name: null,
            line: 50,
        );
    }

    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 55,
        );
    }

    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 56,
        );
    }

    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 57,
        );
    }

    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 58,
        );
    }

    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '6']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 59,
        );
    }

    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 60,
        );
    }

    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 61,
        );
    }

    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '65536']]],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 62,
        );
    }

    public function testModule39(): void
    {
        $this->runModuleCommand(
            filename: 'memory_grow.3.wasm',
            name: null,
            line: 66,
        );
    }

    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check-memory-zero', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '65535']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 87,
        );
    }

    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 88,
        );
    }

    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check-memory-zero', 'args' => [['type' => 'i32', 'value' => '65536'], ['type' => 'i32', 'value' => '131071']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 89,
        );
    }

    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 90,
        );
    }

    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check-memory-zero', 'args' => [['type' => 'i32', 'value' => '131072'], ['type' => 'i32', 'value' => '196607']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 91,
        );
    }

    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 92,
        );
    }

    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check-memory-zero', 'args' => [['type' => 'i32', 'value' => '196608'], ['type' => 'i32', 'value' => '262143']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 93,
        );
    }

    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 94,
        );
    }

    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check-memory-zero', 'args' => [['type' => 'i32', 'value' => '262144'], ['type' => 'i32', 'value' => '327679']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 95,
        );
    }

    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'grow', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 96,
        );
    }

    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'check-memory-zero', 'args' => [['type' => 'i32', 'value' => '327680'], ['type' => 'i32', 'value' => '393215']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 97,
        );
    }

    public function testModule51(): void
    {
        $this->runModuleCommand(
            filename: 'memory_grow.4.wasm',
            name: null,
            line: 101,
        );
    }

    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 259,
        );
    }

    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-cond', 'args' => []],
            expected: [],
            line: 261,
        );
    }

    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 262,
        );
    }

    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-value-cond', 'args' => []],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 263,
        );
    }

    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-index', 'args' => []],
            expected: [],
            line: 265,
        );
    }

    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 266,
        );
    }

    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-value-index', 'args' => []],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 267,
        );
    }

    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-return-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 269,
        );
    }

    public function testAssertReturn60(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-cond', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 271,
        );
    }

    public function testAssertReturn61(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-then', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 272,
        );
    }

    public function testAssertReturn62(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-else', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 273,
        );
    }

    public function testAssertReturn63(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-first', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 275,
        );
    }

    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-second', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 276,
        );
    }

    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-select-cond', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 277,
        );
    }

    public function testAssertReturn66(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 279,
        );
    }

    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call-mid', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 280,
        );
    }

    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 281,
        );
    }

    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-first', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 283,
        );
    }

    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-mid', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 284,
        );
    }

    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-last', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4294967295']],
            line: 285,
        );
    }

    public function testAssertTrap72(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'as-call_indirect-index', 'args' => []],
            text: 'undefined element',
            line: 286,
        );
    }

    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.set-value', 'args' => []],
            expected: [],
            line: 288,
        );
    }

    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-local.tee-value', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 289,
        );
    }

    public function testAssertReturn75(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-global.set-value', 'args' => []],
            expected: [],
            line: 290,
        );
    }

    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-load-address', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 292,
        );
    }

    public function testAssertReturn77(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loadN-address', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 293,
        );
    }

    public function testAssertReturn78(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-address', 'args' => []],
            expected: [],
            line: 294,
        );
    }

    public function testAssertReturn79(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-store-value', 'args' => []],
            expected: [],
            line: 295,
        );
    }

    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-storeN-address', 'args' => []],
            expected: [],
            line: 296,
        );
    }

    public function testAssertReturn81(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-storeN-value', 'args' => []],
            expected: [],
            line: 297,
        );
    }

    public function testAssertReturn82(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-unary-operand', 'args' => []],
            expected: [['type' => 'i32', 'value' => '31']],
            line: 299,
        );
    }

    public function testAssertReturn83(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-left', 'args' => []],
            expected: [['type' => 'i32', 'value' => '11']],
            line: 301,
        );
    }

    public function testAssertReturn84(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-binary-right', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 302,
        );
    }

    public function testAssertReturn85(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-test-operand', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 304,
        );
    }

    public function testAssertReturn86(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-left', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 306,
        );
    }

    public function testAssertReturn87(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-compare-right', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 307,
        );
    }

    public function testAssertReturn88(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-memory.grow-size', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 309,
        );
    }

    public function testAssertInvalid89(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_grow.5.wasm',
            text: 'type mismatch',
            line: 313,
        );
    }

    public function testAssertInvalid90(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_grow.6.wasm',
            text: 'type mismatch',
            line: 322,
        );
    }

    public function testAssertInvalid91(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_grow.7.wasm',
            text: 'type mismatch',
            line: 332,
        );
    }

    public function testAssertInvalid92(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_grow.8.wasm',
            text: 'type mismatch',
            line: 342,
        );
    }

    public function testAssertInvalid93(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_grow.9.wasm',
            text: 'type mismatch',
            line: 353,
        );
    }

    public function testAssertInvalid94(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_grow.10.wasm',
            text: 'type mismatch',
            line: 363,
        );
    }

    public function testAssertInvalid95(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'memory_grow.11.wasm',
            text: 'type mismatch',
            line: 372,
        );
    }
}
