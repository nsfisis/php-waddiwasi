<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;

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

    #[Depends('testModule0')]
    public function testModule1(): void
    {
        $this->runModuleCommand(
            filename: 'data.1.wasm',
            name: null,
            line: 35,
        );
    }

    #[Depends('testModule1')]
    public function testModule2(): void
    {
        $this->runModuleCommand(
            filename: 'data.2.wasm',
            name: null,
            line: 39,
        );
    }

    #[Depends('testModule2')]
    public function testModule3(): void
    {
        $this->runModuleCommand(
            filename: 'data.3.wasm',
            name: null,
            line: 44,
        );
    }

    #[Depends('testModule3')]
    public function testModule4(): void
    {
        $this->runModuleCommand(
            filename: 'data.4.wasm',
            name: null,
            line: 52,
        );
    }

    #[Depends('testModule4')]
    public function testModule5(): void
    {
        $this->runModuleCommand(
            filename: 'data.5.wasm',
            name: null,
            line: 62,
        );
    }

    #[Depends('testModule5')]
    public function testModule6(): void
    {
        $this->runModuleCommand(
            filename: 'data.6.wasm',
            name: null,
            line: 67,
        );
    }

    #[Depends('testModule6')]
    public function testModule7(): void
    {
        $this->runModuleCommand(
            filename: 'data.7.wasm',
            name: null,
            line: 73,
        );
    }

    #[Depends('testModule7')]
    public function testModule8(): void
    {
        $this->runModuleCommand(
            filename: 'data.8.wasm',
            name: null,
            line: 78,
        );
    }

    #[Depends('testModule8')]
    public function testAssertInvalid9(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.9.wasm',
            text: 'unknown global',
            line: 85,
        );
    }

    #[Depends('testAssertInvalid9')]
    public function testAssertInvalid10(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.10.wasm',
            text: 'unknown global',
            line: 89,
        );
    }

    #[Depends('testAssertInvalid10')]
    public function testModule11(): void
    {
        $this->runModuleCommand(
            filename: 'data.11.wasm',
            name: null,
            line: 96,
        );
    }

    #[Depends('testModule11')]
    public function testModule12(): void
    {
        $this->runModuleCommand(
            filename: 'data.12.wasm',
            name: null,
            line: 101,
        );
    }

    #[Depends('testModule12')]
    public function testModule13(): void
    {
        $this->runModuleCommand(
            filename: 'data.13.wasm',
            name: null,
            line: 107,
        );
    }

    #[Depends('testModule13')]
    public function testModule14(): void
    {
        $this->runModuleCommand(
            filename: 'data.14.wasm',
            name: null,
            line: 112,
        );
    }

    #[Depends('testModule14')]
    public function testModule15(): void
    {
        $this->runModuleCommand(
            filename: 'data.15.wasm',
            name: null,
            line: 116,
        );
    }

    #[Depends('testModule15')]
    public function testModule16(): void
    {
        $this->runModuleCommand(
            filename: 'data.16.wasm',
            name: null,
            line: 121,
        );
    }

    #[Depends('testModule16')]
    public function testModule17(): void
    {
        $this->runModuleCommand(
            filename: 'data.17.wasm',
            name: null,
            line: 126,
        );
    }

    #[Depends('testModule17')]
    public function testModule18(): void
    {
        $this->runModuleCommand(
            filename: 'data.18.wasm',
            name: null,
            line: 131,
        );
    }

    #[Depends('testModule18')]
    public function testModule19(): void
    {
        $this->runModuleCommand(
            filename: 'data.19.wasm',
            name: null,
            line: 135,
        );
    }

    #[Depends('testModule19')]
    public function testModule20(): void
    {
        $this->runModuleCommand(
            filename: 'data.20.wasm',
            name: null,
            line: 140,
        );
    }

    #[Depends('testModule20')]
    public function testModule21(): void
    {
        $this->runModuleCommand(
            filename: 'data.21.wasm',
            name: null,
            line: 145,
        );
    }

    #[Depends('testModule21')]
    public function testModule22(): void
    {
        $this->runModuleCommand(
            filename: 'data.22.wasm',
            name: null,
            line: 150,
        );
    }

    #[Depends('testModule22')]
    public function testModule23(): void
    {
        $this->runModuleCommand(
            filename: 'data.23.wasm',
            name: null,
            line: 155,
        );
    }

    #[Depends('testModule23')]
    public function testModule24(): void
    {
        $this->runModuleCommand(
            filename: 'data.24.wasm',
            name: null,
            line: 161,
        );
    }

    #[Depends('testModule24')]
    public function testModule25(): void
    {
        $this->runModuleCommand(
            filename: 'data.25.wasm',
            name: null,
            line: 167,
        );
    }

    #[Depends('testModule25')]
    public function testModule26(): void
    {
        $this->runModuleCommand(
            filename: 'data.26.wasm',
            name: null,
            line: 172,
        );
    }

    #[Depends('testModule26')]
    public function testAssertUninstantiable27(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'data.27.wasm',
            text: 'out of bounds memory access',
            line: 180,
        );
    }

    #[Depends('testAssertUninstantiable27')]
    public function testAssertUninstantiable28(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'data.28.wasm',
            text: 'out of bounds memory access',
            line: 188,
        );
    }

    #[Depends('testAssertUninstantiable28')]
    public function testAssertUninstantiable29(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'data.29.wasm',
            text: 'out of bounds memory access',
            line: 196,
        );
    }

    #[Depends('testAssertUninstantiable29')]
    public function testAssertUninstantiable30(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'data.30.wasm',
            text: 'out of bounds memory access',
            line: 203,
        );
    }

    #[Depends('testAssertUninstantiable30')]
    public function testAssertUninstantiable31(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'data.31.wasm',
            text: 'out of bounds memory access',
            line: 210,
        );
    }

    #[Depends('testAssertUninstantiable31')]
    public function testAssertUninstantiable32(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'data.32.wasm',
            text: 'out of bounds memory access',
            line: 227,
        );
    }

    #[Depends('testAssertUninstantiable32')]
    public function testAssertUninstantiable33(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'data.33.wasm',
            text: 'out of bounds memory access',
            line: 236,
        );
    }

    #[Depends('testAssertUninstantiable33')]
    public function testAssertUninstantiable34(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'data.34.wasm',
            text: 'out of bounds memory access',
            line: 243,
        );
    }

    #[Depends('testAssertUninstantiable34')]
    public function testAssertUninstantiable35(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'data.35.wasm',
            text: 'out of bounds memory access',
            line: 251,
        );
    }

    #[Depends('testAssertUninstantiable35')]
    public function testAssertUninstantiable36(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'data.36.wasm',
            text: 'out of bounds memory access',
            line: 259,
        );
    }

    #[Depends('testAssertUninstantiable36')]
    public function testAssertUninstantiable37(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'data.37.wasm',
            text: 'out of bounds memory access',
            line: 267,
        );
    }

    #[Depends('testAssertUninstantiable37')]
    public function testAssertUninstantiable38(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'data.38.wasm',
            text: 'out of bounds memory access',
            line: 274,
        );
    }

    #[Depends('testAssertUninstantiable38')]
    public function testAssertUninstantiable39(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'data.39.wasm',
            text: 'out of bounds memory access',
            line: 282,
        );
    }

    #[Depends('testAssertUninstantiable39')]
    public function testAssertUninstantiable40(): void
    {
        $this->runAssertUninstantiableCommand(
            filename: 'data.40.wasm',
            text: 'out of bounds memory access',
            line: 289,
        );
    }

    #[Depends('testAssertUninstantiable40')]
    public function testAssertInvalid41(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.41.wasm',
            text: 'unknown memory',
            line: 299,
        );
    }

    #[Depends('testAssertInvalid41')]
    public function testAssertInvalid42(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.42.wasm',
            text: 'unknown memory 1',
            line: 307,
        );
    }

    #[Depends('testAssertInvalid42')]
    public function testAssertInvalid43(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.43.wasm',
            text: 'unknown memory 0',
            line: 320,
        );
    }

    #[Depends('testAssertInvalid43')]
    public function testAssertInvalid44(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.44.wasm',
            text: 'unknown memory 1',
            line: 331,
        );
    }

    #[Depends('testAssertInvalid44')]
    public function testAssertInvalid45(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.45.wasm',
            text: 'unknown memory 1',
            line: 343,
        );
    }

    #[Depends('testAssertInvalid45')]
    public function testAssertInvalid46(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.46.wasm',
            text: 'unknown memory 1',
            line: 365,
        );
    }

    #[Depends('testAssertInvalid46')]
    public function testAssertInvalid47(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.47.wasm',
            text: 'type mismatch',
            line: 384,
        );
    }

    #[Depends('testAssertInvalid47')]
    public function testAssertInvalid48(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.48.wasm',
            text: 'type mismatch',
            line: 392,
        );
    }

    #[Depends('testAssertInvalid48')]
    public function testAssertInvalid49(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.49.wasm',
            text: 'type mismatch',
            line: 400,
        );
    }

    #[Depends('testAssertInvalid49')]
    public function testAssertInvalid50(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.50.wasm',
            text: 'type mismatch',
            line: 408,
        );
    }

    #[Depends('testAssertInvalid50')]
    public function testAssertInvalid51(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.51.wasm',
            text: 'type mismatch',
            line: 416,
        );
    }

    #[Depends('testAssertInvalid51')]
    public function testAssertInvalid52(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.52.wasm',
            text: 'type mismatch',
            line: 425,
        );
    }

    #[Depends('testAssertInvalid52')]
    public function testAssertInvalid53(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.53.wasm',
            text: 'constant expression required',
            line: 434,
        );
    }

    #[Depends('testAssertInvalid53')]
    public function testAssertInvalid54(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.54.wasm',
            text: 'constant expression required',
            line: 442,
        );
    }

    #[Depends('testAssertInvalid54')]
    public function testAssertInvalid55(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.55.wasm',
            text: 'constant expression required',
            line: 450,
        );
    }

    #[Depends('testAssertInvalid55')]
    public function testAssertInvalid56(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.56.wasm',
            text: 'constant expression required',
            line: 458,
        );
    }

    #[Depends('testAssertInvalid56')]
    public function testAssertInvalid57(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.57.wasm',
            text: 'constant expression required',
            line: 466,
        );
    }

    #[Depends('testAssertInvalid57')]
    public function testAssertInvalid58(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.58.wasm',
            text: 'unknown global 0',
            line: 475,
        );
    }

    #[Depends('testAssertInvalid58')]
    public function testAssertInvalid59(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.59.wasm',
            text: 'unknown global 1',
            line: 483,
        );
    }

    #[Depends('testAssertInvalid59')]
    public function testAssertInvalid60(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'data.60.wasm',
            text: 'constant expression required',
            line: 492,
        );
    }
}
