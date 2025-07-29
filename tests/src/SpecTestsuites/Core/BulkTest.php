<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class BulkTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'bulk.0.wasm',
            name: null,
            line: 2,
        );
    }

    public function testModule1(): void
    {
        $this->runModuleCommand(
            filename: 'bulk.1.wasm',
            name: null,
            line: 6,
        );
    }

    public function testModule2(): void
    {
        $this->runModuleCommand(
            filename: 'bulk.2.wasm',
            name: null,
            line: 13,
        );
    }

    public function testAction3(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'fill', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '255'], ['type' => 'i32', 'value' => '3']]],
            line: 27,
        );
    }

    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 28,
        );
    }

    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '255']],
            line: 29,
        );
    }

    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '255']],
            line: 30,
        );
    }

    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '255']],
            line: 31,
        );
    }

    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 32,
        );
    }

    public function testAction9(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'fill', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '48042'], ['type' => 'i32', 'value' => '2']]],
            line: 35,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '170']],
            line: 36,
        );
    }

    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '170']],
            line: 37,
        );
    }

    public function testAction12(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'fill', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '65536']]],
            line: 40,
        );
    }

    public function testAssertTrap13(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'fill', 'args' => [['type' => 'i32', 'value' => '65280'], ['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '257']]],
            text: 'out of bounds memory access',
            line: 43,
        );
    }

    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '65280']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 45,
        );
    }

    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '65535']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 46,
        );
    }

    public function testAction16(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'fill', 'args' => [['type' => 'i32', 'value' => '65536'], ['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            line: 49,
        );
    }

    public function testAssertTrap17(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'fill', 'args' => [['type' => 'i32', 'value' => '65537'], ['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 52,
        );
    }

    public function testModule18(): void
    {
        $this->runModuleCommand(
            filename: 'bulk.3.wasm',
            name: null,
            line: 57,
        );
    }

    public function testAction19(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'copy', 'args' => [['type' => 'i32', 'value' => '10'], ['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '4']]],
            line: 71,
        );
    }

    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '9']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 73,
        );
    }

    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '170']],
            line: 74,
        );
    }

    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '187']],
            line: 75,
        );
    }

    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '204']],
            line: 76,
        );
    }

    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '221']],
            line: 77,
        );
    }

    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 78,
        );
    }

    public function testAction26(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'copy', 'args' => [['type' => 'i32', 'value' => '8'], ['type' => 'i32', 'value' => '10'], ['type' => 'i32', 'value' => '4']]],
            line: 81,
        );
    }

    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'i32', 'value' => '170']],
            line: 82,
        );
    }

    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '9']]],
            expected: [['type' => 'i32', 'value' => '187']],
            line: 83,
        );
    }

    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '204']],
            line: 84,
        );
    }

    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '221']],
            line: 85,
        );
    }

    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '204']],
            line: 86,
        );
    }

    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '221']],
            line: 87,
        );
    }

    public function testAction33(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'copy', 'args' => [['type' => 'i32', 'value' => '10'], ['type' => 'i32', 'value' => '7'], ['type' => 'i32', 'value' => '6']]],
            line: 90,
        );
    }

    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '10']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 91,
        );
    }

    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '11']]],
            expected: [['type' => 'i32', 'value' => '170']],
            line: 92,
        );
    }

    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '12']]],
            expected: [['type' => 'i32', 'value' => '187']],
            line: 93,
        );
    }

    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '13']]],
            expected: [['type' => 'i32', 'value' => '204']],
            line: 94,
        );
    }

    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '14']]],
            expected: [['type' => 'i32', 'value' => '221']],
            line: 95,
        );
    }

    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '15']]],
            expected: [['type' => 'i32', 'value' => '204']],
            line: 96,
        );
    }

    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '16']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 97,
        );
    }

    public function testAction41(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'copy', 'args' => [['type' => 'i32', 'value' => '65280'], ['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '256']]],
            line: 100,
        );
    }

    public function testAction42(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'copy', 'args' => [['type' => 'i32', 'value' => '65024'], ['type' => 'i32', 'value' => '65280'], ['type' => 'i32', 'value' => '256']]],
            line: 101,
        );
    }

    public function testAction43(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'copy', 'args' => [['type' => 'i32', 'value' => '65536'], ['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            line: 104,
        );
    }

    public function testAction44(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'copy', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '65536'], ['type' => 'i32', 'value' => '0']]],
            line: 105,
        );
    }

    public function testAssertTrap45(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'copy', 'args' => [['type' => 'i32', 'value' => '65537'], ['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 108,
        );
    }

    public function testAssertTrap46(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'copy', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '65537'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 110,
        );
    }

    public function testModule47(): void
    {
        $this->runModuleCommand(
            filename: 'bulk.4.wasm',
            name: null,
            line: 115,
        );
    }

    public function testAction48(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'init', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '2']]],
            line: 129,
        );
    }

    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '187']],
            line: 130,
        );
    }

    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '204']],
            line: 131,
        );
    }

    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 132,
        );
    }

    public function testAction52(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'init', 'args' => [['type' => 'i32', 'value' => '65532'], ['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '4']]],
            line: 135,
        );
    }

    public function testAssertTrap53(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'init', 'args' => [['type' => 'i32', 'value' => '65534'], ['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '3']]],
            text: 'out of bounds memory access',
            line: 138,
        );
    }

    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '65534']]],
            expected: [['type' => 'i32', 'value' => '204']],
            line: 140,
        );
    }

    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'load8_u', 'args' => [['type' => 'i32', 'value' => '65535']]],
            expected: [['type' => 'i32', 'value' => '221']],
            line: 141,
        );
    }

    public function testAction56(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'init', 'args' => [['type' => 'i32', 'value' => '65536'], ['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            line: 144,
        );
    }

    public function testAction57(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'init', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '4'], ['type' => 'i32', 'value' => '0']]],
            line: 145,
        );
    }

    public function testAssertTrap58(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'init', 'args' => [['type' => 'i32', 'value' => '65537'], ['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 148,
        );
    }

    public function testAssertTrap59(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'init', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '5'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds memory access',
            line: 150,
        );
    }

    public function testModule60(): void
    {
        $this->runModuleCommand(
            filename: 'bulk.5.wasm',
            name: null,
            line: 154,
        );
    }

    public function testAction61(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'init_passive', 'args' => [['type' => 'i32', 'value' => '1']]],
            line: 168,
        );
    }

    public function testAction62(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'drop_passive', 'args' => []],
            line: 169,
        );
    }

    public function testAction63(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'drop_passive', 'args' => []],
            line: 170,
        );
    }

    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'init_passive', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 171,
        );
    }

    public function testAssertTrap65(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'init_passive', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'out of bounds memory access',
            line: 172,
        );
    }

    public function testAction66(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'init_passive', 'args' => [['type' => 'i32', 'value' => '0']]],
            line: 173,
        );
    }

    public function testAction67(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'drop_active', 'args' => []],
            line: 174,
        );
    }

    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'init_active', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 175,
        );
    }

    public function testAssertTrap69(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'init_active', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'out of bounds memory access',
            line: 176,
        );
    }

    public function testAction70(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'init_active', 'args' => [['type' => 'i32', 'value' => '0']]],
            line: 177,
        );
    }

    public function testModule71(): void
    {
        $this->runModuleCommand(
            filename: 'bulk.6.wasm',
            name: null,
            line: 181,
        );
    }

    public function testModule72(): void
    {
        $this->runModuleCommand(
            filename: 'bulk.7.wasm',
            name: null,
            line: 196,
        );
    }

    public function testModule73(): void
    {
        $this->runModuleCommand(
            filename: 'bulk.8.wasm',
            name: null,
            line: 199,
        );
    }

    public function testAssertTrap74(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'init', 'args' => [['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '2']]],
            text: 'out of bounds table access',
            line: 219,
        );
    }

    public function testAssertTrap75(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element 2',
            line: 221,
        );
    }

    public function testAction76(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'init', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '2']]],
            line: 224,
        );
    }

    public function testAssertReturn77(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 225,
        );
    }

    public function testAssertReturn78(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 226,
        );
    }

    public function testAssertTrap79(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '2']]],
            text: 'uninitialized element',
            line: 227,
        );
    }

    public function testAction80(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'init', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '2']]],
            line: 230,
        );
    }

    public function testAction81(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'init', 'args' => [['type' => 'i32', 'value' => '3'], ['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            line: 233,
        );
    }

    public function testAction82(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'init', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '4'], ['type' => 'i32', 'value' => '0']]],
            line: 234,
        );
    }

    public function testAssertTrap83(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'init', 'args' => [['type' => 'i32', 'value' => '4'], ['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds table access',
            line: 237,
        );
    }

    public function testAssertTrap84(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'init', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '5'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds table access',
            line: 239,
        );
    }

    public function testModule85(): void
    {
        $this->runModuleCommand(
            filename: 'bulk.9.wasm',
            name: null,
            line: 244,
        );
    }

    public function testAction86(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'init_passive', 'args' => [['type' => 'i32', 'value' => '1']]],
            line: 261,
        );
    }

    public function testAction87(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'drop_passive', 'args' => []],
            line: 262,
        );
    }

    public function testAction88(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'drop_passive', 'args' => []],
            line: 263,
        );
    }

    public function testAssertReturn89(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'init_passive', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 264,
        );
    }

    public function testAssertTrap90(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'init_passive', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'out of bounds table access',
            line: 265,
        );
    }

    public function testAction91(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'init_passive', 'args' => [['type' => 'i32', 'value' => '0']]],
            line: 266,
        );
    }

    public function testAction92(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'drop_active', 'args' => []],
            line: 267,
        );
    }

    public function testAssertReturn93(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'init_active', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [],
            line: 268,
        );
    }

    public function testAssertTrap94(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'init_active', 'args' => [['type' => 'i32', 'value' => '1']]],
            text: 'out of bounds table access',
            line: 269,
        );
    }

    public function testAction95(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'init_active', 'args' => [['type' => 'i32', 'value' => '0']]],
            line: 270,
        );
    }

    public function testModule96(): void
    {
        $this->runModuleCommand(
            filename: 'bulk.10.wasm',
            name: null,
            line: 274,
        );
    }

    public function testModule97(): void
    {
        $this->runModuleCommand(
            filename: 'bulk.11.wasm',
            name: null,
            line: 297,
        );
    }

    public function testModule98(): void
    {
        $this->runModuleCommand(
            filename: 'bulk.12.wasm',
            name: null,
            line: 300,
        );
    }

    public function testAction99(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'copy', 'args' => [['type' => 'i32', 'value' => '3'], ['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '3']]],
            line: 319,
        );
    }

    public function testAssertReturn100(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 321,
        );
    }

    public function testAssertReturn101(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 322,
        );
    }

    public function testAssertReturn102(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '5']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 323,
        );
    }

    public function testAction103(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'copy', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '3']]],
            line: 326,
        );
    }

    public function testAssertReturn104(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 328,
        );
    }

    public function testAssertReturn105(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 329,
        );
    }

    public function testAssertReturn106(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 330,
        );
    }

    public function testAction107(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'copy', 'args' => [['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '3']]],
            line: 333,
        );
    }

    public function testAssertReturn108(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 335,
        );
    }

    public function testAssertReturn109(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 336,
        );
    }

    public function testAssertReturn110(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'call', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 337,
        );
    }

    public function testAction111(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'copy', 'args' => [['type' => 'i32', 'value' => '6'], ['type' => 'i32', 'value' => '8'], ['type' => 'i32', 'value' => '2']]],
            line: 340,
        );
    }

    public function testAction112(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'copy', 'args' => [['type' => 'i32', 'value' => '8'], ['type' => 'i32', 'value' => '6'], ['type' => 'i32', 'value' => '2']]],
            line: 341,
        );
    }

    public function testAction113(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'copy', 'args' => [['type' => 'i32', 'value' => '10'], ['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            line: 344,
        );
    }

    public function testAction114(): void
    {
        $this->runActionCommand(
            action: ['type' => 'invoke', 'field' => 'copy', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '10'], ['type' => 'i32', 'value' => '0']]],
            line: 345,
        );
    }

    public function testAssertTrap115(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'copy', 'args' => [['type' => 'i32', 'value' => '11'], ['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds table access',
            line: 348,
        );
    }

    public function testAssertTrap116(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'copy', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '11'], ['type' => 'i32', 'value' => '0']]],
            text: 'out of bounds table access',
            line: 350,
        );
    }
}
