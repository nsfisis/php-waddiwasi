<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class UnreachedInvalidTest extends SpecTestsuiteBase
{
    public function testAssertInvalid0(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.0.wasm',
            text: 'unknown local',
            line: 4,
        );
    }

    public function testAssertInvalid1(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.1.wasm',
            text: 'unknown global',
            line: 8,
        );
    }

    public function testAssertInvalid2(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.2.wasm',
            text: 'unknown function',
            line: 12,
        );
    }

    public function testAssertInvalid3(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.3.wasm',
            text: 'unknown label',
            line: 16,
        );
    }

    public function testAssertInvalid4(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.4.wasm',
            text: 'type mismatch',
            line: 21,
        );
    }

    public function testAssertInvalid5(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.5.wasm',
            text: 'type mismatch',
            line: 27,
        );
    }

    public function testAssertInvalid6(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.6.wasm',
            text: 'type mismatch',
            line: 33,
        );
    }

    public function testAssertInvalid7(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.7.wasm',
            text: 'type mismatch',
            line: 42,
        );
    }

    public function testAssertInvalid8(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.8.wasm',
            text: 'type mismatch',
            line: 46,
        );
    }

    public function testAssertInvalid9(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.9.wasm',
            text: 'type mismatch',
            line: 50,
        );
    }

    public function testAssertInvalid10(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.10.wasm',
            text: 'type mismatch',
            line: 56,
        );
    }

    public function testAssertInvalid11(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.11.wasm',
            text: 'type mismatch',
            line: 60,
        );
    }

    public function testAssertInvalid12(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.12.wasm',
            text: 'type mismatch',
            line: 64,
        );
    }

    public function testAssertInvalid13(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.13.wasm',
            text: 'type mismatch',
            line: 71,
        );
    }

    public function testAssertInvalid14(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.14.wasm',
            text: 'type mismatch',
            line: 77,
        );
    }

    public function testAssertInvalid15(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.15.wasm',
            text: 'type mismatch',
            line: 83,
        );
    }

    public function testAssertInvalid16(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.16.wasm',
            text: 'type mismatch',
            line: 89,
        );
    }

    public function testAssertInvalid17(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.17.wasm',
            text: 'type mismatch',
            line: 95,
        );
    }

    public function testAssertInvalid18(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.18.wasm',
            text: 'type mismatch',
            line: 101,
        );
    }

    public function testAssertInvalid19(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.19.wasm',
            text: 'type mismatch',
            line: 107,
        );
    }

    public function testAssertInvalid20(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.20.wasm',
            text: 'type mismatch',
            line: 113,
        );
    }

    public function testAssertInvalid21(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.21.wasm',
            text: 'type mismatch',
            line: 119,
        );
    }

    public function testAssertInvalid22(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.22.wasm',
            text: 'type mismatch',
            line: 125,
        );
    }

    public function testAssertInvalid23(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.23.wasm',
            text: 'type mismatch',
            line: 132,
        );
    }

    public function testAssertInvalid24(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.24.wasm',
            text: 'type mismatch',
            line: 138,
        );
    }

    public function testAssertInvalid25(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.25.wasm',
            text: 'type mismatch',
            line: 144,
        );
    }

    public function testAssertInvalid26(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.26.wasm',
            text: 'type mismatch',
            line: 150,
        );
    }

    public function testAssertInvalid27(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.27.wasm',
            text: 'type mismatch',
            line: 156,
        );
    }

    public function testAssertInvalid28(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.28.wasm',
            text: 'type mismatch',
            line: 162,
        );
    }

    public function testAssertInvalid29(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.29.wasm',
            text: 'type mismatch',
            line: 168,
        );
    }

    public function testAssertInvalid30(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.30.wasm',
            text: 'type mismatch',
            line: 174,
        );
    }

    public function testAssertInvalid31(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.31.wasm',
            text: 'type mismatch',
            line: 180,
        );
    }

    public function testAssertInvalid32(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.32.wasm',
            text: 'type mismatch',
            line: 186,
        );
    }

    public function testAssertInvalid33(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.33.wasm',
            text: 'type mismatch',
            line: 193,
        );
    }

    public function testAssertInvalid34(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.34.wasm',
            text: 'type mismatch',
            line: 199,
        );
    }

    public function testAssertInvalid35(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.35.wasm',
            text: 'type mismatch',
            line: 205,
        );
    }

    public function testAssertInvalid36(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.36.wasm',
            text: 'type mismatch',
            line: 211,
        );
    }

    public function testAssertInvalid37(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.37.wasm',
            text: 'type mismatch',
            line: 217,
        );
    }

    public function testAssertInvalid38(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.38.wasm',
            text: 'type mismatch',
            line: 223,
        );
    }

    public function testAssertInvalid39(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.39.wasm',
            text: 'type mismatch',
            line: 229,
        );
    }

    public function testAssertInvalid40(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.40.wasm',
            text: 'type mismatch',
            line: 235,
        );
    }

    public function testAssertInvalid41(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.41.wasm',
            text: 'type mismatch',
            line: 241,
        );
    }

    public function testAssertInvalid42(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.42.wasm',
            text: 'type mismatch',
            line: 247,
        );
    }

    public function testAssertInvalid43(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.43.wasm',
            text: 'type mismatch',
            line: 253,
        );
    }

    public function testAssertInvalid44(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.44.wasm',
            text: 'type mismatch',
            line: 259,
        );
    }

    public function testAssertInvalid45(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.45.wasm',
            text: 'type mismatch',
            line: 265,
        );
    }

    public function testAssertInvalid46(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.46.wasm',
            text: 'type mismatch',
            line: 271,
        );
    }

    public function testAssertInvalid47(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.47.wasm',
            text: 'type mismatch',
            line: 277,
        );
    }

    public function testAssertInvalid48(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.48.wasm',
            text: 'type mismatch',
            line: 284,
        );
    }

    public function testAssertInvalid49(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.49.wasm',
            text: 'type mismatch',
            line: 290,
        );
    }

    public function testAssertInvalid50(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.50.wasm',
            text: 'type mismatch',
            line: 296,
        );
    }

    public function testAssertInvalid51(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.51.wasm',
            text: 'type mismatch',
            line: 302,
        );
    }

    public function testAssertInvalid52(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.52.wasm',
            text: 'type mismatch',
            line: 308,
        );
    }

    public function testAssertInvalid53(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.53.wasm',
            text: 'type mismatch',
            line: 314,
        );
    }

    public function testAssertInvalid54(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.54.wasm',
            text: 'type mismatch',
            line: 321,
        );
    }

    public function testAssertInvalid55(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.55.wasm',
            text: 'type mismatch',
            line: 327,
        );
    }

    public function testAssertInvalid56(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.56.wasm',
            text: 'type mismatch',
            line: 334,
        );
    }

    public function testAssertInvalid57(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.57.wasm',
            text: 'type mismatch',
            line: 340,
        );
    }

    public function testAssertInvalid58(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.58.wasm',
            text: 'type mismatch',
            line: 348,
        );
    }

    public function testAssertInvalid59(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.59.wasm',
            text: 'type mismatch',
            line: 354,
        );
    }

    public function testAssertInvalid60(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.60.wasm',
            text: 'type mismatch',
            line: 360,
        );
    }

    public function testAssertInvalid61(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.61.wasm',
            text: 'type mismatch',
            line: 366,
        );
    }

    public function testAssertInvalid62(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.62.wasm',
            text: 'type mismatch',
            line: 372,
        );
    }

    public function testAssertInvalid63(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.63.wasm',
            text: 'type mismatch',
            line: 378,
        );
    }

    public function testAssertInvalid64(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.64.wasm',
            text: 'type mismatch',
            line: 384,
        );
    }

    public function testAssertInvalid65(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.65.wasm',
            text: 'type mismatch',
            line: 390,
        );
    }

    public function testAssertInvalid66(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.66.wasm',
            text: 'type mismatch',
            line: 396,
        );
    }

    public function testAssertInvalid67(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.67.wasm',
            text: 'type mismatch',
            line: 402,
        );
    }

    public function testAssertInvalid68(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.68.wasm',
            text: 'type mismatch',
            line: 409,
        );
    }

    public function testAssertInvalid69(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.69.wasm',
            text: 'type mismatch',
            line: 415,
        );
    }

    public function testAssertInvalid70(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.70.wasm',
            text: 'type mismatch',
            line: 421,
        );
    }

    public function testAssertInvalid71(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.71.wasm',
            text: 'type mismatch',
            line: 427,
        );
    }

    public function testAssertInvalid72(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.72.wasm',
            text: 'type mismatch',
            line: 433,
        );
    }

    public function testAssertInvalid73(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.73.wasm',
            text: 'type mismatch',
            line: 439,
        );
    }

    public function testAssertInvalid74(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.74.wasm',
            text: 'type mismatch',
            line: 445,
        );
    }

    public function testAssertInvalid75(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.75.wasm',
            text: 'type mismatch',
            line: 451,
        );
    }

    public function testAssertInvalid76(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.76.wasm',
            text: 'type mismatch',
            line: 457,
        );
    }

    public function testAssertInvalid77(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.77.wasm',
            text: 'type mismatch',
            line: 463,
        );
    }

    public function testAssertInvalid78(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.78.wasm',
            text: 'type mismatch',
            line: 470,
        );
    }

    public function testAssertInvalid79(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.79.wasm',
            text: 'type mismatch',
            line: 477,
        );
    }

    public function testAssertInvalid80(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.80.wasm',
            text: 'type mismatch',
            line: 484,
        );
    }

    public function testAssertInvalid81(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.81.wasm',
            text: 'type mismatch',
            line: 490,
        );
    }

    public function testAssertInvalid82(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.82.wasm',
            text: 'type mismatch',
            line: 498,
        );
    }

    public function testAssertInvalid83(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.83.wasm',
            text: 'type mismatch',
            line: 507,
        );
    }

    public function testAssertInvalid84(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.84.wasm',
            text: 'type mismatch',
            line: 515,
        );
    }

    public function testAssertInvalid85(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.85.wasm',
            text: 'type mismatch',
            line: 521,
        );
    }

    public function testAssertInvalid86(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.86.wasm',
            text: 'type mismatch',
            line: 527,
        );
    }

    public function testAssertInvalid87(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.87.wasm',
            text: 'type mismatch',
            line: 540,
        );
    }

    public function testAssertInvalid88(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.88.wasm',
            text: 'type mismatch',
            line: 546,
        );
    }

    public function testAssertInvalid89(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.89.wasm',
            text: 'type mismatch',
            line: 552,
        );
    }

    public function testAssertInvalid90(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.90.wasm',
            text: 'type mismatch',
            line: 558,
        );
    }

    public function testAssertInvalid91(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.91.wasm',
            text: 'type mismatch',
            line: 565,
        );
    }

    public function testAssertInvalid92(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.92.wasm',
            text: 'type mismatch',
            line: 571,
        );
    }

    public function testAssertInvalid93(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.93.wasm',
            text: 'type mismatch',
            line: 577,
        );
    }

    public function testAssertInvalid94(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.94.wasm',
            text: 'type mismatch',
            line: 584,
        );
    }

    public function testAssertInvalid95(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.95.wasm',
            text: 'type mismatch',
            line: 590,
        );
    }

    public function testAssertInvalid96(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.96.wasm',
            text: 'type mismatch',
            line: 596,
        );
    }

    public function testAssertInvalid97(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.97.wasm',
            text: 'type mismatch',
            line: 604,
        );
    }

    public function testAssertInvalid98(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.98.wasm',
            text: 'type mismatch',
            line: 611,
        );
    }

    public function testAssertInvalid99(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.99.wasm',
            text: 'type mismatch',
            line: 617,
        );
    }

    public function testAssertInvalid100(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.100.wasm',
            text: 'type mismatch',
            line: 623,
        );
    }

    public function testAssertInvalid101(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.101.wasm',
            text: 'type mismatch',
            line: 629,
        );
    }

    public function testAssertInvalid102(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.102.wasm',
            text: 'type mismatch',
            line: 637,
        );
    }

    public function testAssertInvalid103(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.103.wasm',
            text: 'type mismatch',
            line: 643,
        );
    }

    public function testAssertInvalid104(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.104.wasm',
            text: 'type mismatch',
            line: 649,
        );
    }

    public function testAssertInvalid105(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.105.wasm',
            text: 'type mismatch',
            line: 656,
        );
    }

    public function testAssertInvalid106(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.106.wasm',
            text: 'type mismatch',
            line: 662,
        );
    }

    public function testAssertInvalid107(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.107.wasm',
            text: 'type mismatch',
            line: 669,
        );
    }

    public function testAssertInvalid108(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.108.wasm',
            text: 'type mismatch',
            line: 676,
        );
    }

    public function testAssertInvalid109(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.109.wasm',
            text: 'type mismatch',
            line: 687,
        );
    }

    public function testAssertInvalid110(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.110.wasm',
            text: 'type mismatch',
            line: 699,
        );
    }

    public function testAssertInvalid111(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.111.wasm',
            text: 'type mismatch',
            line: 704,
        );
    }

    public function testAssertInvalid112(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.112.wasm',
            text: 'type mismatch',
            line: 710,
        );
    }

    public function testAssertInvalid113(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.113.wasm',
            text: 'type mismatch',
            line: 715,
        );
    }

    public function testAssertInvalid114(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.114.wasm',
            text: 'type mismatch',
            line: 720,
        );
    }

    public function testAssertInvalid115(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.115.wasm',
            text: 'type mismatch',
            line: 726,
        );
    }

    public function testAssertInvalid116(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.116.wasm',
            text: 'type mismatch',
            line: 733,
        );
    }

    public function testAssertInvalid117(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.117.wasm',
            text: 'type mismatch',
            line: 738,
        );
    }
}
