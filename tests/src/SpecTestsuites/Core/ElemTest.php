<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class ElemTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'elem.0.wasm',
            name: null,
            line: 4,
        );
    }

    public function testModule1(): void
    {
        $this->runModuleCommand(
            filename: 'elem.1.wasm',
            name: null,
            line: 80,
        );
    }

    public function testModule2(): void
    {
        $this->runModuleCommand(
            filename: 'elem.2.wasm',
            name: null,
            line: 90,
        );
    }

    public function testModule3(): void
    {
        $this->runModuleCommand(
            filename: 'elem.3.wasm',
            name: null,
            line: 95,
        );
    }

    public function testModule4(): void
    {
        $this->runModuleCommand(
            filename: 'elem.4.wasm',
            name: null,
            line: 101,
        );
    }

    public function testModule5(): void
    {
        $this->runModuleCommand(
            filename: 'elem.5.wasm',
            name: null,
            line: 110,
        );
    }

    public function testModule6(): void
    {
        $this->runModuleCommand(
            filename: 'elem.6.wasm',
            name: null,
            line: 120,
        );
    }

    public function testModule7(): void
    {
        $this->runModuleCommand(
            filename: 'elem.7.wasm',
            name: null,
            line: 127,
        );
    }

    public function testModule8(): void
    {
        $this->runModuleCommand(
            filename: 'elem.8.wasm',
            name: null,
            line: 134,
        );
    }

    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'call-7', 'args' => []],
            expected: [['type' => 'i32', 'value' => '65']],
            line: 148,
        );
    }

    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'call-9', 'args' => []],
            expected: [['type' => 'i32', 'value' => '66']],
            line: 149,
        );
    }

    public function testModule11(): void
    {
        $this->runModuleCommand(
            filename: 'elem.9.wasm',
            name: null,
            line: 153,
        );
    }

    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'call-7', 'args' => []],
            expected: [['type' => 'i32', 'value' => '65']],
            line: 167,
        );
    }

    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'call-9', 'args' => []],
            expected: [['type' => 'i32', 'value' => '66']],
            line: 168,
        );
    }

    public function testAssertInvalid14(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'elem.10.wasm',
            text: 'unknown global',
            line: 171,
        );
    }

    public function testAssertInvalid15(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'elem.11.wasm',
            text: 'unknown global',
            line: 175,
        );
    }

    public function testModule16(): void
    {
        $this->runModuleCommand(
            filename: 'elem.12.wasm',
            name: null,
            line: 182,
        );
    }

    public function testModule17(): void
    {
        $this->runModuleCommand(
            filename: 'elem.13.wasm',
            name: null,
            line: 187,
        );
    }

    public function testModule18(): void
    {
        $this->runModuleCommand(
            filename: 'elem.14.wasm',
            name: null,
            line: 193,
        );
    }

    public function testModule19(): void
    {
        $this->runModuleCommand(
            filename: 'elem.15.wasm',
            name: null,
            line: 197,
        );
    }

    public function testModule20(): void
    {
        $this->runModuleCommand(
            filename: 'elem.16.wasm',
            name: null,
            line: 202,
        );
    }

    public function testModule21(): void
    {
        $this->runModuleCommand(
            filename: 'elem.17.wasm',
            name: null,
            line: 207,
        );
    }

    public function testModule22(): void
    {
        $this->runModuleCommand(
            filename: 'elem.18.wasm',
            name: null,
            line: 212,
        );
    }

    public function testModule23(): void
    {
        $this->runModuleCommand(
            filename: 'elem.19.wasm',
            name: null,
            line: 218,
        );
    }

    public function testModule24(): void
    {
        $this->runModuleCommand(
            filename: 'elem.20.wasm',
            name: null,
            line: 224,
        );
    }

    public function testModule25(): void
    {
        $this->runModuleCommand(
            filename: 'elem.21.wasm',
            name: null,
            line: 230,
        );
    }

    public function testAssertUninstantiable26(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'elem.22.wasm',
            text: 'out of bounds table access',
            line: 239,
        );
    }

    public function testAssertUninstantiable27(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'elem.23.wasm',
            text: 'out of bounds table access',
            line: 248,
        );
    }

    public function testAssertUninstantiable28(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'elem.24.wasm',
            text: 'out of bounds table access',
            line: 257,
        );
    }

    public function testAssertUninstantiable29(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'elem.25.wasm',
            text: 'out of bounds table access',
            line: 266,
        );
    }

    public function testAssertUninstantiable30(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'elem.26.wasm',
            text: 'out of bounds table access',
            line: 273,
        );
    }

    public function testAssertUninstantiable31(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'elem.27.wasm',
            text: 'out of bounds table access',
            line: 281,
        );
    }

    public function testAssertUninstantiable32(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'elem.28.wasm',
            text: 'out of bounds table access',
            line: 290,
        );
    }

    public function testAssertUninstantiable33(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'elem.29.wasm',
            text: 'out of bounds table access',
            line: 298,
        );
    }

    public function testAssertUninstantiable34(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'elem.30.wasm',
            text: 'out of bounds table access',
            line: 307,
        );
    }

    public function testAssertUninstantiable35(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'elem.31.wasm',
            text: 'out of bounds table access',
            line: 315,
        );
    }

    public function testAssertUninstantiable36(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'elem.32.wasm',
            text: 'out of bounds table access',
            line: 324,
        );
    }

    public function testAssertUninstantiable37(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'elem.33.wasm',
            text: 'out of bounds table access',
            line: 332,
        );
    }

    public function testModule38(): void
    {
        $this->runModuleCommand(
            filename: 'elem.34.wasm',
            name: null,
            line: 342,
        );
    }

    public function testAssertTrap39(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'init', 'args' => []],
            text: 'out of bounds table access',
            line: 350,
        );
    }

    public function testModule40(): void
    {
        $this->runModuleCommand(
            filename: 'elem.35.wasm',
            name: null,
            line: 352,
        );
    }

    public function testAssertTrap41(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'field' => 'init', 'args' => []],
            text: 'out of bounds table access',
            line: 360,
        );
    }

    public function testAssertInvalid42(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'elem.36.wasm',
            text: 'unknown table',
            line: 365,
        );
    }

    public function testAssertInvalid43(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'elem.37.wasm',
            text: 'type mismatch',
            line: 375,
        );
    }

    public function testAssertInvalid44(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'elem.38.wasm',
            text: 'type mismatch',
            line: 383,
        );
    }

    public function testAssertInvalid45(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'elem.39.wasm',
            text: 'type mismatch',
            line: 391,
        );
    }

    public function testAssertInvalid46(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'elem.40.wasm',
            text: 'type mismatch',
            line: 399,
        );
    }

    public function testAssertInvalid47(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'elem.41.wasm',
            text: 'type mismatch',
            line: 407,
        );
    }

    public function testAssertInvalid48(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'elem.42.wasm',
            text: 'type mismatch',
            line: 416,
        );
    }

    public function testAssertInvalid49(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'elem.43.wasm',
            text: 'constant expression required',
            line: 426,
        );
    }

    public function testAssertInvalid50(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'elem.44.wasm',
            text: 'constant expression required',
            line: 434,
        );
    }

    public function testAssertInvalid51(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'elem.45.wasm',
            text: 'constant expression required',
            line: 442,
        );
    }

    public function testAssertInvalid52(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'elem.46.wasm',
            text: 'constant expression required',
            line: 450,
        );
    }

    public function testAssertInvalid53(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'elem.47.wasm',
            text: 'constant expression required',
            line: 458,
        );
    }

    public function testAssertInvalid54(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'elem.48.wasm',
            text: 'unknown global 0',
            line: 467,
        );
    }

    public function testAssertInvalid55(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'elem.49.wasm',
            text: 'unknown global 1',
            line: 475,
        );
    }

    public function testAssertInvalid56(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'elem.50.wasm',
            text: 'constant expression required',
            line: 484,
        );
    }

    public function testAssertInvalid57(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'elem.51.wasm',
            text: 'type mismatch',
            line: 495,
        );
    }

    public function testAssertInvalid58(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'elem.52.wasm',
            text: 'type mismatch',
            line: 503,
        );
    }

    public function testAssertInvalid59(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'elem.53.wasm',
            text: 'type mismatch',
            line: 511,
        );
    }

    public function testAssertInvalid60(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'elem.54.wasm',
            text: 'type mismatch',
            line: 519,
        );
    }

    public function testAssertInvalid61(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'elem.55.wasm',
            text: 'constant expression required',
            line: 527,
        );
    }

    public function testModule62(): void
    {
        $this->runModuleCommand(
            filename: 'elem.56.wasm',
            name: null,
            line: 537,
        );
    }

    public function testAssertReturn63(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'call-overwritten', 'args' => []],
            expected: [['type' => 'i32', 'value' => '66']],
            line: 548,
        );
    }

    public function testModule64(): void
    {
        $this->runModuleCommand(
            filename: 'elem.57.wasm',
            name: null,
            line: 550,
        );
    }

    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'call-overwritten-element', 'args' => []],
            expected: [['type' => 'i32', 'value' => '66']],
            line: 561,
        );
    }

    public function testModule66(): void
    {
        $this->runModuleCommand(
            filename: 'elem.58.wasm',
            name: '$module1',
            line: 565,
        );
    }

    public function testRegister67(): void
    {
        $this->runRegisterCommand(
            name: '$module1',
            as: 'module1',
            line: 583,
        );
    }

    public function testAssertTrap68(): void
    {
        $this->runAssertTrapCommand(
            action: ['type' => 'invoke', 'module' => '$module1', 'field' => 'call-7', 'args' => []],
            text: 'uninitialized element',
            line: 585,
        );
    }

    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$module1', 'field' => 'call-8', 'args' => []],
            expected: [['type' => 'i32', 'value' => '65']],
            line: 586,
        );
    }

    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$module1', 'field' => 'call-9', 'args' => []],
            expected: [['type' => 'i32', 'value' => '66']],
            line: 587,
        );
    }

    public function testModule71(): void
    {
        $this->runModuleCommand(
            filename: 'elem.59.wasm',
            name: '$module2',
            line: 589,
        );
    }

    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$module1', 'field' => 'call-7', 'args' => []],
            expected: [['type' => 'i32', 'value' => '67']],
            line: 598,
        );
    }

    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$module1', 'field' => 'call-8', 'args' => []],
            expected: [['type' => 'i32', 'value' => '68']],
            line: 599,
        );
    }

    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$module1', 'field' => 'call-9', 'args' => []],
            expected: [['type' => 'i32', 'value' => '66']],
            line: 600,
        );
    }

    public function testModule75(): void
    {
        $this->runModuleCommand(
            filename: 'elem.60.wasm',
            name: '$module3',
            line: 602,
        );
    }

    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$module1', 'field' => 'call-7', 'args' => []],
            expected: [['type' => 'i32', 'value' => '67']],
            line: 611,
        );
    }

    public function testAssertReturn77(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$module1', 'field' => 'call-8', 'args' => []],
            expected: [['type' => 'i32', 'value' => '69']],
            line: 612,
        );
    }

    public function testAssertReturn78(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$module1', 'field' => 'call-9', 'args' => []],
            expected: [['type' => 'i32', 'value' => '70']],
            line: 613,
        );
    }

    public function testAssertInvalid79(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'elem.61.wasm',
            text: 'type mismatch',
            line: 618,
        );
    }

    public function testAssertInvalid80(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'elem.62.wasm',
            text: 'type mismatch',
            line: 623,
        );
    }

    public function testAssertInvalid81(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'elem.63.wasm',
            text: 'type mismatch',
            line: 628,
        );
    }

    public function testAssertInvalid82(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'elem.64.wasm',
            text: 'type mismatch',
            line: 637,
        );
    }

    public function testModule83(): void
    {
        $this->runModuleCommand(
            filename: 'elem.65.wasm',
            name: '$m',
            line: 646,
        );
    }

    public function testRegister84(): void
    {
        $this->runRegisterCommand(
            name: '$m',
            as: 'exporter',
            line: 653,
        );
    }

    public function testAssertReturn85(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$m', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'externref', 'value' => 'null']],
            line: 655,
        );
    }

    public function testAssertReturn86(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$m', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'externref', 'value' => 'null']],
            line: 656,
        );
    }

    public function testAssertReturn87(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$m', 'field' => 'set', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'externref', 'value' => '42']]],
            expected: [],
            line: 658,
        );
    }

    public function testAssertReturn88(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$m', 'field' => 'set', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'externref', 'value' => '137']]],
            expected: [],
            line: 659,
        );
    }

    public function testAssertReturn89(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$m', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'externref', 'value' => '42']],
            line: 661,
        );
    }

    public function testAssertReturn90(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$m', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'externref', 'value' => '137']],
            line: 662,
        );
    }

    public function testModule91(): void
    {
        $this->runModuleCommand(
            filename: 'elem.66.wasm',
            name: null,
            line: 664,
        );
    }

    public function testAssertReturn92(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$m', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'externref', 'value' => 'null']],
            line: 668,
        );
    }

    public function testAssertReturn93(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'module' => '$m', 'field' => 'get', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'externref', 'value' => '137']],
            line: 669,
        );
    }

    public function testModule94(): void
    {
        $this->runModuleCommand(
            filename: 'elem.67.wasm',
            name: '$module4',
            line: 673,
        );
    }

    public function testRegister95(): void
    {
        $this->runRegisterCommand(
            name: '$module4',
            as: 'module4',
            line: 680,
        );
    }

    public function testModule96(): void
    {
        $this->runModuleCommand(
            filename: 'elem.68.wasm',
            name: null,
            line: 682,
        );
    }

    public function testAssertReturn97(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'call_imported_elem', 'args' => []],
            expected: [['type' => 'i32', 'value' => '42']],
            line: 692,
        );
    }
}
