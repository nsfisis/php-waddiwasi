<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class BinaryLeb128Test extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'binary-leb128.0.wasm',
            name: null,
            line: 2,
        );
    }

    public function testModule1(): void
    {
        $this->runModuleCommand(
            filename: 'binary-leb128.1.wasm',
            name: null,
            line: 7,
        );
    }

    public function testModule2(): void
    {
        $this->runModuleCommand(
            filename: 'binary-leb128.2.wasm',
            name: null,
            line: 12,
        );
    }

    public function testModule3(): void
    {
        $this->runModuleCommand(
            filename: 'binary-leb128.3.wasm',
            name: null,
            line: 18,
        );
    }

    public function testModule4(): void
    {
        $this->runModuleCommand(
            filename: 'binary-leb128.4.wasm',
            name: null,
            line: 24,
        );
    }

    public function testModule5(): void
    {
        $this->runModuleCommand(
            filename: 'binary-leb128.5.wasm',
            name: null,
            line: 32,
        );
    }

    public function testModule6(): void
    {
        $this->runModuleCommand(
            filename: 'binary-leb128.6.wasm',
            name: null,
            line: 41,
        );
    }

    public function testModule7(): void
    {
        $this->runModuleCommand(
            filename: 'binary-leb128.7.wasm',
            name: null,
            line: 49,
        );
    }

    public function testModule8(): void
    {
        $this->runModuleCommand(
            filename: 'binary-leb128.8.wasm',
            name: null,
            line: 57,
        );
    }

    public function testModule9(): void
    {
        $this->runModuleCommand(
            filename: 'binary-leb128.9.wasm',
            name: null,
            line: 66,
        );
    }

    public function testModule10(): void
    {
        $this->runModuleCommand(
            filename: 'binary-leb128.10.wasm',
            name: null,
            line: 75,
        );
    }

    public function testModule11(): void
    {
        $this->runModuleCommand(
            filename: 'binary-leb128.11.wasm',
            name: null,
            line: 87,
        );
    }

    public function testModule12(): void
    {
        $this->runModuleCommand(
            filename: 'binary-leb128.12.wasm',
            name: null,
            line: 99,
        );
    }

    public function testModule13(): void
    {
        $this->runModuleCommand(
            filename: 'binary-leb128.13.wasm',
            name: null,
            line: 111,
        );
    }

    public function testModule14(): void
    {
        $this->runModuleCommand(
            filename: 'binary-leb128.14.wasm',
            name: null,
            line: 120,
        );
    }

    public function testModule15(): void
    {
        $this->runModuleCommand(
            filename: 'binary-leb128.15.wasm',
            name: null,
            line: 133,
        );
    }

    public function testModule16(): void
    {
        $this->runModuleCommand(
            filename: 'binary-leb128.16.wasm',
            name: null,
            line: 146,
        );
    }

    public function testModule17(): void
    {
        $this->runModuleCommand(
            filename: 'binary-leb128.17.wasm',
            name: null,
            line: 158,
        );
    }

    public function testModule18(): void
    {
        $this->runModuleCommand(
            filename: 'binary-leb128.18.wasm',
            name: null,
            line: 165,
        );
    }

    public function testModule19(): void
    {
        $this->runModuleCommand(
            filename: 'binary-leb128.19.wasm',
            name: null,
            line: 172,
        );
    }

    public function testModule20(): void
    {
        $this->runModuleCommand(
            filename: 'binary-leb128.20.wasm',
            name: null,
            line: 179,
        );
    }

    public function testModule21(): void
    {
        $this->runModuleCommand(
            filename: 'binary-leb128.21.wasm',
            name: null,
            line: 187,
        );
    }

    public function testModule22(): void
    {
        $this->runModuleCommand(
            filename: 'binary-leb128.22.wasm',
            name: null,
            line: 194,
        );
    }

    public function testModule23(): void
    {
        $this->runModuleCommand(
            filename: 'binary-leb128.23.wasm',
            name: null,
            line: 201,
        );
    }

    public function testModule24(): void
    {
        $this->runModuleCommand(
            filename: 'binary-leb128.24.wasm',
            name: null,
            line: 208,
        );
    }

    public function testAssertMalformed25(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.25.wasm',
            text: 'integer representation too long',
            line: 218,
        );
    }

    public function testAssertMalformed26(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.26.wasm',
            text: 'integer representation too long',
            line: 226,
        );
    }

    public function testAssertMalformed27(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.27.wasm',
            text: 'integer representation too long',
            line: 235,
        );
    }

    public function testAssertMalformed28(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.28.wasm',
            text: 'integer representation too long',
            line: 246,
        );
    }

    public function testAssertMalformed29(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.29.wasm',
            text: 'integer representation too long',
            line: 257,
        );
    }

    public function testAssertMalformed30(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.30.wasm',
            text: 'integer representation too long',
            line: 268,
        );
    }

    public function testAssertMalformed31(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.31.wasm',
            text: 'integer representation too long',
            line: 279,
        );
    }

    public function testAssertMalformed32(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.32.wasm',
            text: 'integer representation too long',
            line: 291,
        );
    }

    public function testAssertMalformed33(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.33.wasm',
            text: 'integer representation too long',
            line: 303,
        );
    }

    public function testAssertMalformed34(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.34.wasm',
            text: 'integer representation too long',
            line: 318,
        );
    }

    public function testAssertMalformed35(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.35.wasm',
            text: 'integer representation too long',
            line: 333,
        );
    }

    public function testAssertMalformed36(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.36.wasm',
            text: 'integer representation too long',
            line: 348,
        );
    }

    public function testAssertMalformed37(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.37.wasm',
            text: 'integer representation too long',
            line: 360,
        );
    }

    public function testAssertMalformed38(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.38.wasm',
            text: 'integer representation too long',
            line: 376,
        );
    }

    public function testAssertMalformed39(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.39.wasm',
            text: 'integer representation too long',
            line: 392,
        );
    }

    public function testAssertMalformed40(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.40.wasm',
            text: 'integer representation too long',
            line: 405,
        );
    }

    public function testAssertMalformed41(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.41.wasm',
            text: 'integer representation too long',
            line: 424,
        );
    }

    public function testAssertMalformed42(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.42.wasm',
            text: 'integer representation too long',
            line: 443,
        );
    }

    public function testAssertMalformed43(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.43.wasm',
            text: 'integer representation too long',
            line: 462,
        );
    }

    public function testAssertMalformed44(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.44.wasm',
            text: 'integer representation too long',
            line: 483,
        );
    }

    public function testAssertMalformed45(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.45.wasm',
            text: 'integer representation too long',
            line: 493,
        );
    }

    public function testAssertMalformed46(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.46.wasm',
            text: 'integer representation too long',
            line: 504,
        );
    }

    public function testAssertMalformed47(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.47.wasm',
            text: 'integer representation too long',
            line: 514,
        );
    }

    public function testAssertMalformed48(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.48.wasm',
            text: 'integer too large',
            line: 526,
        );
    }

    public function testAssertMalformed49(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.49.wasm',
            text: 'integer too large',
            line: 534,
        );
    }

    public function testAssertMalformed50(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.50.wasm',
            text: 'integer too large',
            line: 542,
        );
    }

    public function testAssertMalformed51(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.51.wasm',
            text: 'integer too large',
            line: 551,
        );
    }

    public function testAssertMalformed52(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.52.wasm',
            text: 'integer too large',
            line: 560,
        );
    }

    public function testAssertMalformed53(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.53.wasm',
            text: 'integer too large',
            line: 571,
        );
    }

    public function testAssertMalformed54(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.54.wasm',
            text: 'integer too large',
            line: 582,
        );
    }

    public function testAssertMalformed55(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.55.wasm',
            text: 'integer too large',
            line: 593,
        );
    }

    public function testAssertMalformed56(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.56.wasm',
            text: 'integer too large',
            line: 604,
        );
    }

    public function testAssertMalformed57(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.57.wasm',
            text: 'integer too large',
            line: 616,
        );
    }

    public function testAssertMalformed58(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.58.wasm',
            text: 'integer too large',
            line: 628,
        );
    }

    public function testAssertMalformed59(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.59.wasm',
            text: 'integer too large',
            line: 643,
        );
    }

    public function testAssertMalformed60(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.60.wasm',
            text: 'integer too large',
            line: 658,
        );
    }

    public function testAssertMalformed61(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.61.wasm',
            text: 'integer too large',
            line: 673,
        );
    }

    public function testAssertMalformed62(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.62.wasm',
            text: 'integer too large',
            line: 686,
        );
    }

    public function testAssertMalformed63(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.63.wasm',
            text: 'integer too large',
            line: 702,
        );
    }

    public function testAssertMalformed64(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.64.wasm',
            text: 'integer too large',
            line: 718,
        );
    }

    public function testAssertMalformed65(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.65.wasm',
            text: 'integer representation too long',
            line: 731,
        );
    }

    public function testAssertMalformed66(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.66.wasm',
            text: 'integer representation too long',
            line: 751,
        );
    }

    public function testAssertMalformed67(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.67.wasm',
            text: 'integer too large',
            line: 771,
        );
    }

    public function testAssertMalformed68(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.68.wasm',
            text: 'integer too large',
            line: 789,
        );
    }

    public function testAssertMalformed69(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.69.wasm',
            text: 'integer too large',
            line: 808,
        );
    }

    public function testAssertMalformed70(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.70.wasm',
            text: 'integer too large',
            line: 827,
        );
    }

    public function testAssertMalformed71(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.71.wasm',
            text: 'integer representation too long',
            line: 846,
        );
    }

    public function testAssertMalformed72(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.72.wasm',
            text: 'integer representation too long',
            line: 866,
        );
    }

    public function testAssertMalformed73(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.73.wasm',
            text: 'integer too large',
            line: 888,
        );
    }

    public function testAssertMalformed74(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.74.wasm',
            text: 'integer too large',
            line: 898,
        );
    }

    public function testAssertMalformed75(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.75.wasm',
            text: 'integer too large',
            line: 908,
        );
    }

    public function testAssertMalformed76(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.76.wasm',
            text: 'integer too large',
            line: 918,
        );
    }

    public function testAssertMalformed77(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.77.wasm',
            text: 'integer too large',
            line: 929,
        );
    }

    public function testAssertMalformed78(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.78.wasm',
            text: 'integer too large',
            line: 939,
        );
    }

    public function testAssertMalformed79(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.79.wasm',
            text: 'integer too large',
            line: 949,
        );
    }

    public function testAssertMalformed80(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.80.wasm',
            text: 'integer too large',
            line: 959,
        );
    }

    public function testModule81(): void
    {
        $this->runModuleCommand(
            filename: 'binary-leb128.81.wasm',
            name: null,
            line: 969,
        );
    }

    public function testAssertMalformed82(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.82.wasm',
            text: 'integer representation too long',
            line: 990,
        );
    }

    public function testModule83(): void
    {
        $this->runModuleCommand(
            filename: 'binary-leb128.83.wasm',
            name: null,
            line: 1007,
        );
    }

    public function testModule84(): void
    {
        $this->runModuleCommand(
            filename: 'binary-leb128.84.wasm',
            name: null,
            line: 1015,
        );
    }

    public function testModule85(): void
    {
        $this->runModuleCommand(
            filename: 'binary-leb128.85.wasm',
            name: null,
            line: 1024,
        );
    }

    public function testModule86(): void
    {
        $this->runModuleCommand(
            filename: 'binary-leb128.86.wasm',
            name: null,
            line: 1035,
        );
    }

    public function testModule87(): void
    {
        $this->runModuleCommand(
            filename: 'binary-leb128.87.wasm',
            name: null,
            line: 1043,
        );
    }

    public function testModule88(): void
    {
        $this->runModuleCommand(
            filename: 'binary-leb128.88.wasm',
            name: null,
            line: 1052,
        );
    }

    public function testModule89(): void
    {
        $this->runModuleCommand(
            filename: 'binary-leb128.89.wasm',
            name: null,
            line: 1061,
        );
    }

    public function testAssertMalformed90(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary-leb128.90.wasm',
            text: 'integer representation too long',
            line: 1073,
        );
    }
}
