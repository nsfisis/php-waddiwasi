<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class DataTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'data.0.wasm',
            name: null,
            line: 5,
        );
    }

    public function testModule1(): void
    {
        $this->runModuleCommand(
            filename: 'data.1.wasm',
            name: null,
            line: 35,
        );
    }

    public function testModule2(): void
    {
        $this->runModuleCommand(
            filename: 'data.2.wasm',
            name: null,
            line: 39,
        );
    }

    public function testModule3(): void
    {
        $this->runModuleCommand(
            filename: 'data.3.wasm',
            name: null,
            line: 44,
        );
    }

    public function testModule4(): void
    {
        $this->runModuleCommand(
            filename: 'data.4.wasm',
            name: null,
            line: 52,
        );
    }

    public function testModule5(): void
    {
        $this->runModuleCommand(
            filename: 'data.5.wasm',
            name: null,
            line: 62,
        );
    }

    public function testModule6(): void
    {
        $this->runModuleCommand(
            filename: 'data.6.wasm',
            name: null,
            line: 67,
        );
    }

    public function testModule7(): void
    {
        $this->runModuleCommand(
            filename: 'data.7.wasm',
            name: null,
            line: 73,
        );
    }

    public function testModule8(): void
    {
        $this->runModuleCommand(
            filename: 'data.8.wasm',
            name: null,
            line: 78,
        );
    }

    public function testAssertInvalid9(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.9.wasm',
            text: 'unknown global',
            line: 85,
        );
    }

    public function testAssertInvalid10(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.10.wasm',
            text: 'unknown global',
            line: 89,
        );
    }

    public function testModule11(): void
    {
        $this->runModuleCommand(
            filename: 'data.11.wasm',
            name: null,
            line: 96,
        );
    }

    public function testModule12(): void
    {
        $this->runModuleCommand(
            filename: 'data.12.wasm',
            name: null,
            line: 101,
        );
    }

    public function testModule13(): void
    {
        $this->runModuleCommand(
            filename: 'data.13.wasm',
            name: null,
            line: 107,
        );
    }

    public function testModule14(): void
    {
        $this->runModuleCommand(
            filename: 'data.14.wasm',
            name: null,
            line: 112,
        );
    }

    public function testModule15(): void
    {
        $this->runModuleCommand(
            filename: 'data.15.wasm',
            name: null,
            line: 116,
        );
    }

    public function testModule16(): void
    {
        $this->runModuleCommand(
            filename: 'data.16.wasm',
            name: null,
            line: 121,
        );
    }

    public function testModule17(): void
    {
        $this->runModuleCommand(
            filename: 'data.17.wasm',
            name: null,
            line: 126,
        );
    }

    public function testModule18(): void
    {
        $this->runModuleCommand(
            filename: 'data.18.wasm',
            name: null,
            line: 131,
        );
    }

    public function testModule19(): void
    {
        $this->runModuleCommand(
            filename: 'data.19.wasm',
            name: null,
            line: 135,
        );
    }

    public function testModule20(): void
    {
        $this->runModuleCommand(
            filename: 'data.20.wasm',
            name: null,
            line: 140,
        );
    }

    public function testModule21(): void
    {
        $this->runModuleCommand(
            filename: 'data.21.wasm',
            name: null,
            line: 145,
        );
    }

    public function testModule22(): void
    {
        $this->runModuleCommand(
            filename: 'data.22.wasm',
            name: null,
            line: 150,
        );
    }

    public function testModule23(): void
    {
        $this->runModuleCommand(
            filename: 'data.23.wasm',
            name: null,
            line: 155,
        );
    }

    public function testModule24(): void
    {
        $this->runModuleCommand(
            filename: 'data.24.wasm',
            name: null,
            line: 161,
        );
    }

    public function testModule25(): void
    {
        $this->runModuleCommand(
            filename: 'data.25.wasm',
            name: null,
            line: 167,
        );
    }

    public function testModule26(): void
    {
        $this->runModuleCommand(
            filename: 'data.26.wasm',
            name: null,
            line: 172,
        );
    }

    public function testAssertUninstantiable27(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'data.27.wasm',
            text: 'out of bounds memory access',
            line: 180,
        );
    }

    public function testAssertUninstantiable28(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'data.28.wasm',
            text: 'out of bounds memory access',
            line: 188,
        );
    }

    public function testAssertUninstantiable29(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'data.29.wasm',
            text: 'out of bounds memory access',
            line: 196,
        );
    }

    public function testAssertUninstantiable30(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'data.30.wasm',
            text: 'out of bounds memory access',
            line: 203,
        );
    }

    public function testAssertUninstantiable31(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'data.31.wasm',
            text: 'out of bounds memory access',
            line: 210,
        );
    }

    public function testAssertUninstantiable32(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'data.32.wasm',
            text: 'out of bounds memory access',
            line: 227,
        );
    }

    public function testAssertUninstantiable33(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'data.33.wasm',
            text: 'out of bounds memory access',
            line: 236,
        );
    }

    public function testAssertUninstantiable34(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'data.34.wasm',
            text: 'out of bounds memory access',
            line: 243,
        );
    }

    public function testAssertUninstantiable35(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'data.35.wasm',
            text: 'out of bounds memory access',
            line: 251,
        );
    }

    public function testAssertUninstantiable36(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'data.36.wasm',
            text: 'out of bounds memory access',
            line: 259,
        );
    }

    public function testAssertUninstantiable37(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'data.37.wasm',
            text: 'out of bounds memory access',
            line: 267,
        );
    }

    public function testAssertUninstantiable38(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'data.38.wasm',
            text: 'out of bounds memory access',
            line: 274,
        );
    }

    public function testAssertUninstantiable39(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'data.39.wasm',
            text: 'out of bounds memory access',
            line: 282,
        );
    }

    public function testAssertUninstantiable40(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'data.40.wasm',
            text: 'out of bounds memory access',
            line: 289,
        );
    }

    public function testAssertInvalid41(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.41.wasm',
            text: 'unknown memory',
            line: 299,
        );
    }

    public function testAssertInvalid42(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.42.wasm',
            text: 'unknown memory 1',
            line: 307,
        );
    }

    public function testAssertInvalid43(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.43.wasm',
            text: 'unknown memory 0',
            line: 320,
        );
    }

    public function testAssertInvalid44(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.44.wasm',
            text: 'unknown memory 1',
            line: 331,
        );
    }

    public function testAssertInvalid45(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.45.wasm',
            text: 'unknown memory 1',
            line: 343,
        );
    }

    public function testAssertInvalid46(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.46.wasm',
            text: 'unknown memory 1',
            line: 365,
        );
    }

    public function testAssertInvalid47(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.47.wasm',
            text: 'type mismatch',
            line: 384,
        );
    }

    public function testAssertInvalid48(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.48.wasm',
            text: 'type mismatch',
            line: 392,
        );
    }

    public function testAssertInvalid49(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.49.wasm',
            text: 'type mismatch',
            line: 400,
        );
    }

    public function testAssertInvalid50(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.50.wasm',
            text: 'type mismatch',
            line: 408,
        );
    }

    public function testAssertInvalid51(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.51.wasm',
            text: 'type mismatch',
            line: 416,
        );
    }

    public function testAssertInvalid52(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.52.wasm',
            text: 'type mismatch',
            line: 425,
        );
    }

    public function testAssertInvalid53(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.53.wasm',
            text: 'constant expression required',
            line: 434,
        );
    }

    public function testAssertInvalid54(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.54.wasm',
            text: 'constant expression required',
            line: 442,
        );
    }

    public function testAssertInvalid55(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.55.wasm',
            text: 'constant expression required',
            line: 450,
        );
    }

    public function testAssertInvalid56(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.56.wasm',
            text: 'constant expression required',
            line: 458,
        );
    }

    public function testAssertInvalid57(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.57.wasm',
            text: 'constant expression required',
            line: 466,
        );
    }

    public function testAssertInvalid58(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.58.wasm',
            text: 'unknown global 0',
            line: 475,
        );
    }

    public function testAssertInvalid59(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.59.wasm',
            text: 'unknown global 1',
            line: 483,
        );
    }

    public function testAssertInvalid60(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.60.wasm',
            text: 'constant expression required',
            line: 492,
        );
    }
}
