<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class StoreTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'store.0.wasm',
            name: null,
            line: 3,
        );
    }

    #[Depends('testModule0')]
    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-block-value', 'args' => []],
            expected: [],
            line: 44,
        );
    }

    #[Depends('testAssertReturn1')]
    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-loop-value', 'args' => []],
            expected: [],
            line: 45,
        );
    }

    #[Depends('testAssertReturn2')]
    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br-value', 'args' => []],
            expected: [],
            line: 47,
        );
    }

    #[Depends('testAssertReturn3')]
    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-value', 'args' => []],
            expected: [],
            line: 48,
        );
    }

    #[Depends('testAssertReturn4')]
    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_if-value-cond', 'args' => []],
            expected: [],
            line: 49,
        );
    }

    #[Depends('testAssertReturn5')]
    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-br_table-value', 'args' => []],
            expected: [],
            line: 50,
        );
    }

    #[Depends('testAssertReturn6')]
    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-return-value', 'args' => []],
            expected: [],
            line: 52,
        );
    }

    #[Depends('testAssertReturn7')]
    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-then', 'args' => []],
            expected: [],
            line: 54,
        );
    }

    #[Depends('testAssertReturn8')]
    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'as-if-else', 'args' => []],
            expected: [],
            line: 55,
        );
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertReturn9')]
    public function testAssertMalformed10(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed10')]
    public function testAssertMalformed11(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed11')]
    public function testAssertMalformed12(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed12')]
    public function testAssertMalformed13(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed13')]
    public function testAssertMalformed14(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed14')]
    public function testAssertMalformed15(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed15')]
    public function testAssertMalformed16(): void
    {
    }

    #[Depends('testAssertMalformed16')]
    public function testAssertInvalid17(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.8.wasm',
            text: 'type mismatch',
            line: 112,
        );
    }

    #[Depends('testAssertInvalid17')]
    public function testAssertInvalid18(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.9.wasm',
            text: 'type mismatch',
            line: 116,
        );
    }

    #[Depends('testAssertInvalid18')]
    public function testAssertInvalid19(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.10.wasm',
            text: 'type mismatch',
            line: 120,
        );
    }

    #[Depends('testAssertInvalid19')]
    public function testAssertInvalid20(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.11.wasm',
            text: 'type mismatch',
            line: 124,
        );
    }

    #[Depends('testAssertInvalid20')]
    public function testAssertInvalid21(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.12.wasm',
            text: 'type mismatch',
            line: 128,
        );
    }

    #[Depends('testAssertInvalid21')]
    public function testAssertInvalid22(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.13.wasm',
            text: 'type mismatch',
            line: 132,
        );
    }

    #[Depends('testAssertInvalid22')]
    public function testAssertInvalid23(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.14.wasm',
            text: 'type mismatch',
            line: 136,
        );
    }

    #[Depends('testAssertInvalid23')]
    public function testAssertInvalid24(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.15.wasm',
            text: 'type mismatch',
            line: 140,
        );
    }

    #[Depends('testAssertInvalid24')]
    public function testAssertInvalid25(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.16.wasm',
            text: 'type mismatch',
            line: 144,
        );
    }

    #[Depends('testAssertInvalid25')]
    public function testAssertInvalid26(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.17.wasm',
            text: 'type mismatch',
            line: 150,
        );
    }

    #[Depends('testAssertInvalid26')]
    public function testAssertInvalid27(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.18.wasm',
            text: 'type mismatch',
            line: 159,
        );
    }

    #[Depends('testAssertInvalid27')]
    public function testAssertInvalid28(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.19.wasm',
            text: 'type mismatch',
            line: 168,
        );
    }

    #[Depends('testAssertInvalid28')]
    public function testAssertInvalid29(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.20.wasm',
            text: 'type mismatch',
            line: 178,
        );
    }

    #[Depends('testAssertInvalid29')]
    public function testAssertInvalid30(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.21.wasm',
            text: 'type mismatch',
            line: 188,
        );
    }

    #[Depends('testAssertInvalid30')]
    public function testAssertInvalid31(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.22.wasm',
            text: 'type mismatch',
            line: 198,
        );
    }

    #[Depends('testAssertInvalid31')]
    public function testAssertInvalid32(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.23.wasm',
            text: 'type mismatch',
            line: 208,
        );
    }

    #[Depends('testAssertInvalid32')]
    public function testAssertInvalid33(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.24.wasm',
            text: 'type mismatch',
            line: 218,
        );
    }

    #[Depends('testAssertInvalid33')]
    public function testAssertInvalid34(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.25.wasm',
            text: 'type mismatch',
            line: 228,
        );
    }

    #[Depends('testAssertInvalid34')]
    public function testAssertInvalid35(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.26.wasm',
            text: 'type mismatch',
            line: 238,
        );
    }

    #[Depends('testAssertInvalid35')]
    public function testAssertInvalid36(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.27.wasm',
            text: 'type mismatch',
            line: 248,
        );
    }

    #[Depends('testAssertInvalid36')]
    public function testAssertInvalid37(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.28.wasm',
            text: 'type mismatch',
            line: 258,
        );
    }

    #[Depends('testAssertInvalid37')]
    public function testAssertInvalid38(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.29.wasm',
            text: 'type mismatch',
            line: 268,
        );
    }

    #[Depends('testAssertInvalid38')]
    public function testAssertInvalid39(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.30.wasm',
            text: 'type mismatch',
            line: 278,
        );
    }

    #[Depends('testAssertInvalid39')]
    public function testAssertInvalid40(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.31.wasm',
            text: 'type mismatch',
            line: 288,
        );
    }

    #[Depends('testAssertInvalid40')]
    public function testAssertInvalid41(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.32.wasm',
            text: 'type mismatch',
            line: 298,
        );
    }

    #[Depends('testAssertInvalid41')]
    public function testAssertInvalid42(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.33.wasm',
            text: 'type mismatch',
            line: 308,
        );
    }

    #[Depends('testAssertInvalid42')]
    public function testAssertInvalid43(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.34.wasm',
            text: 'type mismatch',
            line: 317,
        );
    }

    #[Depends('testAssertInvalid43')]
    public function testAssertInvalid44(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.35.wasm',
            text: 'type mismatch',
            line: 326,
        );
    }

    #[Depends('testAssertInvalid44')]
    public function testAssertInvalid45(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.36.wasm',
            text: 'type mismatch',
            line: 335,
        );
    }

    #[Depends('testAssertInvalid45')]
    public function testAssertInvalid46(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.37.wasm',
            text: 'type mismatch',
            line: 344,
        );
    }

    #[Depends('testAssertInvalid46')]
    public function testAssertInvalid47(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.38.wasm',
            text: 'type mismatch',
            line: 354,
        );
    }

    #[Depends('testAssertInvalid47')]
    public function testAssertInvalid48(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.39.wasm',
            text: 'type mismatch',
            line: 364,
        );
    }

    #[Depends('testAssertInvalid48')]
    public function testAssertInvalid49(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.40.wasm',
            text: 'type mismatch',
            line: 380,
        );
    }

    #[Depends('testAssertInvalid49')]
    public function testAssertInvalid50(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.41.wasm',
            text: 'type mismatch',
            line: 399,
        );
    }

    #[Depends('testAssertInvalid50')]
    public function testAssertInvalid51(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.42.wasm',
            text: 'type mismatch',
            line: 400,
        );
    }

    #[Depends('testAssertInvalid51')]
    public function testAssertInvalid52(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.43.wasm',
            text: 'type mismatch',
            line: 401,
        );
    }

    #[Depends('testAssertInvalid52')]
    public function testAssertInvalid53(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.44.wasm',
            text: 'type mismatch',
            line: 402,
        );
    }

    #[Depends('testAssertInvalid53')]
    public function testAssertInvalid54(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.45.wasm',
            text: 'type mismatch',
            line: 403,
        );
    }

    #[Depends('testAssertInvalid54')]
    public function testAssertInvalid55(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.46.wasm',
            text: 'type mismatch',
            line: 404,
        );
    }

    #[Depends('testAssertInvalid55')]
    public function testAssertInvalid56(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.47.wasm',
            text: 'type mismatch',
            line: 405,
        );
    }

    #[Depends('testAssertInvalid56')]
    public function testAssertInvalid57(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.48.wasm',
            text: 'type mismatch',
            line: 406,
        );
    }

    #[Depends('testAssertInvalid57')]
    public function testAssertInvalid58(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.49.wasm',
            text: 'type mismatch',
            line: 407,
        );
    }

    #[Depends('testAssertInvalid58')]
    public function testAssertInvalid59(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.50.wasm',
            text: 'type mismatch',
            line: 409,
        );
    }

    #[Depends('testAssertInvalid59')]
    public function testAssertInvalid60(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.51.wasm',
            text: 'type mismatch',
            line: 410,
        );
    }

    #[Depends('testAssertInvalid60')]
    public function testAssertInvalid61(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.52.wasm',
            text: 'type mismatch',
            line: 411,
        );
    }

    #[Depends('testAssertInvalid61')]
    public function testAssertInvalid62(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.53.wasm',
            text: 'type mismatch',
            line: 412,
        );
    }

    #[Depends('testAssertInvalid62')]
    public function testAssertInvalid63(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.54.wasm',
            text: 'type mismatch',
            line: 413,
        );
    }

    #[Depends('testAssertInvalid63')]
    public function testAssertInvalid64(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.55.wasm',
            text: 'type mismatch',
            line: 414,
        );
    }

    #[Depends('testAssertInvalid64')]
    public function testAssertInvalid65(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.56.wasm',
            text: 'type mismatch',
            line: 415,
        );
    }

    #[Depends('testAssertInvalid65')]
    public function testAssertInvalid66(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.57.wasm',
            text: 'type mismatch',
            line: 416,
        );
    }

    #[Depends('testAssertInvalid66')]
    public function testAssertInvalid67(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'store.58.wasm',
            text: 'type mismatch',
            line: 417,
        );
    }
}
